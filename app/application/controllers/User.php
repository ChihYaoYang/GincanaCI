<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Usuario_model');
        $this->Usuario_model->verificaLogin();
    }

    public function index() {
        $data['user'] = $this->User_model->getAll();
        $this->load->view('includes/header');
        $this->load->view('user/lista', $data);
        $this->load->view('includes/footer');
    }

    //UPDATE
    public function alterar($id) {
        $this->load->view('includes/header');
        if ($id > 0) {
            //Validation form
            $this->form_validation->set_rules('nome', 'nome', 'required');
            $this->form_validation->set_rules('senha', 'senha', 'required');
            if ($this->form_validation->run() == false) {
                $data['user'] = $this->User_model->getId($id);
                //Chama view e passa $data
                $this->load->view('user/alterar', $data);
            } else {
                //resgata dados
                $data = array(
                    'nome' => $this->input->post('nome'),
                    'senha' => $this->input->post('senha'),
                );
                //Chama método de update
                if ($this->User_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success"><i class="fas fa-check"></i> Usuário Alterado com Sucesso ! ! !<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                    redirect('User/index');
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger"><i class="fas fa-times"></i> Erro ao Alterar Usuário *_*<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                    redirect('User/alterar/' . $id);
                }
            }
        } else {
            redirect('User/index');
        }
        $this->load->view('includes/footer');
    }

    //Delete
    public function deletar($id) {
        //Valida
        if ($id > 0) {
            if ($this->User_model->delete($id)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success"><i class="fas fa-check"></i> Usuário Deletado com Sucesso ! ! !<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                $this->session->sess_destroy();
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger"><i class="fas fa-times"></i> Erro ao Deletar Usuário *_*<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
            }
        }
        redirect('user/index');
    }

}
