<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Integrante extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Integrante_model');
        //Para pega id de equipe carrega model da equipe
        $this->load->model('Equipe_model');
        $this->load->model('Usuario_model');
        $this->Usuario_model->verificaLogin();
    }

    //Read
    public function index() {
        $data['integrante'] = $this->Integrante_model->getAll();
        $this->load->view('includes/header');
        $this->load->view('integrante/lista', $data);
        $this->load->view('includes/footer');
    }

    //Cadastra
    public function cadastro() {
        //Chama model da Equipe
        $data['equipe'] = $this->Equipe_model->getAll();
        $this->load->view('includes/header');
        $this->load->view('integrante/cadastro', $data);
        $this->load->view('includes/footer');
    }

    public function cadastrar() {
        //Valida formulario
        $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('data_nasc', 'data_nasc', 'required');
        $this->form_validation->set_rules('rg', 'rg', 'required');
        $this->form_validation->set_rules('cpf', 'cpf', 'required');
        if ($this->form_validation->run() == false) {
            //Se for false chama Form de novo
            $this->cadastro();
        } else {
            //resgata dados pelo post
            $data = array(
                'id_equipe' => $this->input->post('id_equipe'),
                'nome' => $this->input->post('nome'),
                'data_nasc' => $this->input->post('data_nasc'),
                'rg' => $this->input->post('rg'),
                'cpf' => $this->input->post('cpf')
            );
            if ($this->Integrante_model->insert($data)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success"><i class="fas fa-check"></i> Integrante Cadastrado com Sucesso! ! !<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                redirect('Integrante/index');
            } else {
                //salva uma mensagem na sessão
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger"><i class="fas fa-times"></i> Erro ao Cadastrar Integrante *_*<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                //Se for false redireciona para cadastrar
                redirect('Integrante/cadastro');
            }
        }
    }

    //Delete
    public function deletar($id) {
        //Valida
        if ($id > 0) {
            if ($this->Integrante_model->delete($id)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success"><i class="fas fa-check"></i> Integrante Deletado com Sucesso! ! !<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger"><i class="fas fa-times"></i> Erro ao Deletar Integrante *_*<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
            }
        }
        redirect('Integrante/index');
    }

    //Update
    public function alterar($id) {
        $this->load->view('includes/header');
        //Valida
        if ($id > 0) {
            //Valida formulario
            $this->form_validation->set_rules('id_equipe', 'id_equipe', 'required');
            $this->form_validation->set_rules('nome', 'nome', 'required');
            $this->form_validation->set_rules('data_nasc', 'data_nasc', 'required');
            $this->form_validation->set_rules('rg', 'rg', 'required');
            $this->form_validation->set_rules('cpf', 'cpf', 'required');
            if ($this->form_validation->run() == false) {
                //Chama view e passa dados
                $data['equipe'] = $this->Equipe_model->getAll();
                $data['integrante'] = $this->Integrante_model->getId($id);
                $this->load->view('integrante/alterar', $data);
            } else {
                //resgata dados
                $data = array(
                    'id_equipe' => $this->input->post('id_equipe'),
                    'nome' => $this->input->post('nome'),
                    'data_nasc' => $this->input->post('data_nasc'),
                    'rg' => $this->input->post('rg'),
                    'cpf' => $this->input->post('cpf')
                );
                if ($this->Integrante_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success"><i class="fas fa-check"></i> Integrante Alterado com Sucesso! ! !<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                    redirect('Integrante/index');
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger"><i class="fas fa-times"></i> Erro ao Alterar Integrante *_*<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                    redirect('Integrante/alterar/'. $id);
                }
            }
        } else {
            redirect('Integrante/index');
        }
        $this->load->view('includes/footer');
    }

}

?>