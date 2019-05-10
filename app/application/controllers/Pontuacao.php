<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pontuacao extends CI_Controller {

    //Construct
    public function __construct() {
        parent::__construct();
        $this->load->model('Pontuacao_model');
        $this->load->model('Usuario_model');
        $this->load->model('Equipe_model');
        $this->load->model('Prova_model');
        $this->Usuario_model->verificaLogin();
    }

    public function index() {
        $data['pontuacao'] = $this->Pontuacao_model->getAll();
        $this->load->view('includes/header');
        $this->load->view('pontuacao/lista', $data);
        $this->load->view('includes/footer');
    }

    //Create
    public function cadastro() {
        $data['equipe'] = $this->Equipe_model->getAll();
        $data['prova'] = $this->Prova_model->getAll();
        $data['usuario'] = $this->Usuario_model->getAll();
        $this->load->view('includes/header');
        $this->load->view('pontuacao/cadastro' ,$data);
        $this->load->view('includes/footer');
    }

    public function cadastrar() {
        $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
        $this->form_validation->set_rules('id_prova', 'id_prova', 'required');
        $this->form_validation->set_rules('id_usuario', 'id_usuario', 'required');
        $this->form_validation->set_rules('pontos', 'pontos', 'required');
        $this->form_validation->set_rules('data_hora', 'data_hora', 'required');
        if ($this->form_validation->run() == false) {
            $this->cadastro();
        } else {
            $data = array(
                'id_equipe' => $this->input->post('id_equipe'),
                'id_prova' => $this->input->post('id_prova'),
                'id_usuario' => $this->input->post('id_usuario'),
                'pontos' => $this->input->post('pontos'),
                'data_hora' => $this->input->post('data_hora')
            );
            if ($this->Pontuacao_model->insert($data)) {
                $this->session->set_flashdata('mensagem', 'Pontuação cadastrado com sucesso! ! !');
                redirect('Pontuacao/index');
            } else {
                $this->session->set_flashdata('erro', 'Falha ao cadastrar Pontuação *_*');
                redirect('Pontuacao/cadastro');
            }
        }
    }

}

?>