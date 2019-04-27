<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function index() {
        $this->load->view('login/login');
    }

    //Construct
    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
    }

    public function login() {
        //Validation formulario se cadastra ou não
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            //Busca no banco de dados através do Model saber se existe
            //o usuario com este email e senha recebidos por POST
            $usuario = $this->Usuario_model->getUsuario(
                    $this->input->post('email'), $this->input->post('senha')
            );
            //valida se retornou algum registro, quer dizer que o usuario é existente
            if ($usuario) {
                //Montamos um array com as informações do usuário logado
                $data = array(
                    'idUsuaio' => $usuario->id,
                    'email' => $usuario->email,
                    'logado' => true
                );
                //Mandamos o codeignitter salvar na sessão os dados do usuário
                //perceba que o método set_userdata é diferente do método
                //set_flashdata, pois ele salva dados permanentes enquanto durar a sessão ...
                $this->session->set_userdata($data);
                //abre a pagina principal do sistema
                redirect(base_url());
            } else {
                $this->session->set_flashdata('mensagem', 'Usuário e senha incorretos *_*');
                //redireciona obrigando o login...
                redirect(base_url() . 'index.php/Usuario/login');
            }
        }
    }
    //Insert
    public function cadastrar() {
        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');
        if ($this->form_validation->run() == false) {
            //Se for false carrega marca de novo e preencher todos campos
            $this->load->view('login/cadastro');
        } else {
            //Se for True carrega model
            $this->Usuario_model;
            //E resgata dados de POST
            $data = array(
                'nome' => $this->input->post('nome'),
                'email' => $this->input->post('email'),
                'senha' => $this->input->post('senha')
            );
            //Chama método e passa $data ja valida se teve linha affectados
            if ($this->Usuario_model->insert($data)) {
                $this->session->set_flashdata('mensagems', ' Cadastrado com sucesso! ! !');
                redirect('Usuario/login');
            } else {
                $this->session->set_flashdata('erro', ' Erro ao cadastrar *_*');
                redirect('Usuario/cadastrar');
            }
        }
    }

    //Método responsavel por fazer o logout do sistema destruindo a sessão do usuário
    public function sair() {
        //Apaga todo conteúdo da sessão do usuario
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
?>