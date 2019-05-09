<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Equipe extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Equipe_model');
        $this->load->model('Usuario_model');
        $this->Usuario_model->verificaLogin();
    }

    //Read
    public function index() {
        $data['equipe'] = $this->Equipe_model->getAll();
        $this->load->view('includes/header');
        $this->load->view('equipe/lista', $data);
        $this->load->view('includes/footer');
    }

    //Create
    public function cadastro() {
        $this->load->view('includes/header');
        $this->load->view('equipe/cadastro');
        $this->load->view('includes/footer');
    }
    public function cadastrar() {
        //Valida formulario
        $this->form_validation->set_rules('nome','nome','required');
        if($this->form_validation->run() == false) {
            //Se for false recarrega página
            $this->cadastro();
        } else {
            $this->Equipe_model;
            $data = array(
                'nome' => $this->input->post('nome')
            );
            //Chama método e passa $data ja valida se teve linha affectados
            if($this->Equipe_model->insert($data)){
                $this->session->set_flashdata('mensagem', 'Equipe cadastrado com sucesso! ! !');
                redirect('Equipe/index');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao cadastra ! ! !');
                redirect('Equipe/cadastro');
            }
        }
    }
    //Delete
    public function delete($id) {
        //Valida
        if($id > 0) {
            $this->Equipe_model;
            if($this->Equipe_model->deletar($id)) {
                $this->session->set_flashdata('mensagem', 'Equipe Deletado com sucesso ! ! !');
                redirect('Equipe/index');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar equipe *_*');
            }
        }
        redirect('Equipe/index');   
    }
    //Update
    public function alterar($id){
        $this->load->view('includes/header');
        if($id > 0) {
            $this->Equipe_model;
            $this->form_validation->set_rules('nome', 'nome', 'required');
            if($this->form_validation->run() == false) {
                $data['equipe'] = $this->Equipe_model->getId($id);
                $this->load->view('equipe/alterar' , $data);
            } else {
                $data = array(
                    'nome' => $this->input->post('nome')
                );
                if($this->Equipe_model->update($id,$data)) {
                    $this->session->set_flashdata('mensagem', 'Equipe alterado com sucesso ! ! !');
                    redirect('Equipe/index');
                } else {
                    $this->session->set_flashdata('mensagem', 'Falha ao altera equipe *_*');
                    redirect('Equipe/alterar', $id);
                }
            }
        } else {
            redirect('Equipe/index');
        }
        $this->load->view('includes/footer');
    }
}

?>