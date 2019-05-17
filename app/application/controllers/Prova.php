<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prova extends CI_Controller {

    //Construct
    public function __construct() {
        parent::__construct();
        $this->load->model('Prova_model');
        $this->load->model('Usuario_model');
        $this->Usuario_model->verificaLogin();
    }

    public function index() {
        //Chama método e criar $dado['prova'] 'prova' para armazena dados e fazer no view
        $data['prova'] = $this->Prova_model->getAll();
        //Carrega Menu
        $this->load->view('includes/header');
        //Carrega view
        $this->load->view('prova/lista', $data);
        //Carrega rodapé
        $this->load->view('includes/footer');
    }

    //Create
    public function cadastro() {
        //Carrega Menu
        $this->load->view('includes/header');
        $this->load->view('prova/cadastro');
        //Carrega rodapé
        $this->load->view('includes/footer');
    }

    public function cadastrar() {
        //Regra da validation
        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('tempo', 'tempo', 'required');
        $this->form_validation->set_rules('descricao', 'descricao', 'required');
        $this->form_validation->set_rules('NumIntegrantes', 'NumIntegrantes', 'required');
        //validar os campo se foram preenchido
        if ($this->form_validation->run() == false) {
            //Se for false chama Form de novo
            $this->cadastro();
        } else {
            //resgata dados pelo post
            $data = array(
                'nome' => $this->input->post('nome'),
                'tempo' => $this->input->post('tempo'),
                'descricao' => $this->input->post('descricao'),
                'NumIntegrantes' => $this->input->post('NumIntegrantes'),
            );
            //Chama método e passa $data ja valida se teve linha affectados
            if ($this->Prova_model->insert($data)) {
                //salva uma mensagem na sessão
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success"><i class="fas fa-check"></i> Prova Cadastrado com Sucesso! ! !<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                redirect('Prova/index');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger"><i class="fas fa-times"></i> Erro ao Cadastrar Prova *_*<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                //Se for false redireciona para cadastrar
                redirect('Prova/cadastro');
            }
        }
    }

    //Delete
    public function deletar($id) {
        //Valida
        if ($id > 0) {
            if ($this->Prova_model->delete($id)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success"><i class="fas fa-check"></i> Prova Deletado com Sucesso ! ! !<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger"><i class="fas fa-times"></i> Erro ao Deletar Prova *_*<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');   
            }
        }
        redirect('Prova/index');
    }

    //UPDATE
    public function alterar($id) {
        $this->load->view('includes/header');
        if ($id > 0) {
            //Validation form
            $this->form_validation->set_rules('nome', 'nome', 'required');
            $this->form_validation->set_rules('tempo', 'tempo', 'required');
            $this->form_validation->set_rules('descricao', 'descricao', 'required');
            $this->form_validation->set_rules('NumIntegrantes', 'NumIntegrantes', 'required');
            //Se j[a foi preenchido
            if ($this->form_validation->run() == false) {
                //Get id
                $data['prova'] = $this->Prova_model->getId($id);
                //Chama view e passa $data
                $this->load->view('prova/alterar', $data);
            } else {
                //resgata dados
                $data = array(
                    'nome' => $this->input->post('nome'),
                    'tempo' => $this->input->post('tempo'),
                    'descricao' => $this->input->post('descricao'),
                    'NumIntegrantes' => $this->input->post('NumIntegrantes'),
                );
                //Chama método de update
                if ($this->Prova_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success"><i class="fas fa-check"></i> Prova Alterado com sucesso ! ! !<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');          
                    redirect('Prova/index');
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i> Prova não sofreu Alterações<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                    redirect('Prova/index');
                }
            }
        } 
        $this->load->view('includes/footer');
    }
}
