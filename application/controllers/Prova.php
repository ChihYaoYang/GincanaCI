<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prova extends CI_Controller {

    public function index() {
        $this->listar();
    }

    //Read
    public function listar() {
        //Carrega o model                  
        $this->load->model('Prova_model');
        //Chama método e criar $dado['prova'] 'prova' para armazena dados e fazer no view
        $data['prova'] = $this->Prova_model->getAll();
        //Carrega view
        $this->load->view('ListaProva', $data);
    }

    //Create
    public function cadastrar() {
        //Regra da validation
        $this->form_validation->set_rules('nome', 'nome', 'required');
        $this->form_validation->set_rules('tempo', 'tempo', 'required');
        $this->form_validation->set_rules('descricao', 'descricao', 'required');
        $this->form_validation->set_rules('NumIntegrantes', 'NumIntegrantes', 'required');
        //validar os campo se foram preenchido
        if ($this->form_validation->run() == false) {
            //Se for false chama Form de novo
            $this->load->view('FormProva');
        } else {
            //se for true 
            //carrega model
            $this->load->model('Prova_model');
            //resgata dados pelo post
            $data = array(
                'nome' => $this->input->post('nome'),
                'tempo' => $this->input->post('tempo'),
                'descricao' => $this->input->post('descricao'),
                'NumIntegrantes' => $this->input->post('NumIntegrantes'),
            );
            //Chama método e passa $data ja valida se teve linha affectados
            if ($this->Prova_model->insert($data)) {
                //Se for true redireciona para lista
                redirect('Prova/listar');
            } else {
                //Se for false redireciona para cadastrar
                redirect('Prova/cadastrar');
            }
        }
    }

    //Delete
    public function deletar($id) {
        //Valida
        if ($id > 0) {
            $this->load->model('Prova_model');
            if($this->Prova_model->delete($id)) {
                redirect('Prova/listar');
            }
        }
    }
    //UPDATE
    
}
?>