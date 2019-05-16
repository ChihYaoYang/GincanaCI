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
        //Fuso Horario
        date_default_timezone_set('America/Sao_Paulo');
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
        $this->load->view('includes/header');
        $this->load->view('pontuacao/cadastro', $data);
        $this->load->view('includes/footer');
    }

    public function cadastrar() {
        $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
        $this->form_validation->set_rules('id_prova', 'id_prova', 'required');
        $this->form_validation->set_rules('pontos', 'pontos', 'required');
        if ($this->form_validation->run() == false) {
            $this->cadastro();
        } else {
            $data = array(
                'id_equipe' => $this->input->post('id_equipe'),
                'id_prova' => $this->input->post('id_prova'),
                'id_usuario' => $this->session->userdata('idUsuario'), //Pega id automaticamente  pelo session
                'pontos' => $this->input->post('pontos'),
                'data_hora' => date('Y-m-d H:i:s')
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

    //Delete
    public function deletar($id) {
        //Valida 
        if ($id > 0) {
            if ($this->Pontuacao_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Pontuação deletado com sucesso! ! !');
            } else {
                $this->session->set_flashdata('erro', 'Falha ao deletar Pontuação *_*');
            }
        }
        redirect('Pontuacao/index');
    }

    //Update
    public function alterar($id) {
        $this->load->view('includes/header');
        //Valida
        if ($id > 0) {
            $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
            $this->form_validation->set_rules('id_prova', 'id_prova', 'required');
            $this->form_validation->set_rules('pontos', 'pontos', 'required');
            if ($this->form_validation->run() == false) {
                $data['pontos'] = $this->Pontuacao_model->getId($id);
                $data['equipe'] = $this->Equipe_model->getAll($id);
                $data['prova'] = $this->Prova_model->getAll($id);
                $this->load->view('pontuacao/alterar', $data);
            } else {
                $data = array(
                    'id_equipe' => $this->input->post('id_equipe'),
                    'id_prova' => $this->input->post('id_prova'),
                    'id_usuario' => $this->session->userdata('idUsuario'), //Pega id automaticamente  pelo session
                    'pontos' => $this->input->post('pontos'),
                    'data_hora' => date('Y-m-d H:i:s')
                );
                if ($this->Pontuacao_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', 'Pontuação alterado com sucesso! ! !');
                    redirect('Pontuacao/index');
                } else {
                    $this->session->set_flashdata('erro', 'Falha ao alterar Pontuação *_*');
                    redirect('Pontuacao/alterar/' . $id);
                }
            }
        } else {
            redirect('Pontuacao/index');
        }
        $this->load->view('includes/footer');
    }

}

?>