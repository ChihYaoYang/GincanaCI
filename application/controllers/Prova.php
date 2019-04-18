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

                //salva uma mensagem na sessão
                $this->session->set_flashdata('mensagem', 'Prova cadastrado com sucesso! ! !');
                //Se for true redireciona para lista
                redirect('Prova/listar');
            } else {
                //salva uma mensagem na sessão
                $this->session->set_flashdata('mensagem', 'Erro ao cadastrar Prova *_*');

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
            if ($this->Prova_model->delete($id)) {
                $this->session->set_flashdata('mensagem', 'Prova deletado com sucesso ! ! !');
            } else {
                $this->session->set_flashdata('mensagem', 'Falha ao deletar Prova *_*');
            }
        }
        redirect('Prova/listar');
    }

    //UPDATE
    public function alterar($id) {
        if ($id > 0) {
            //valida e carrega model
            $this->load->model('Prova_model');
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
                $this->load->view('FormProva', $data);
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
                    $this->session->set_flashdata('mensagem', 'Prova alterado com sucesso ! ! !');

                    redirect('Prova/listar');
                } else {
                    $this->session->set_flashdata('mensagem', 'Falha ao alterar Prova *_*');

                    redirect('Prova/alterar/', $id);
                }
            }
        } else {
            redirect('Prova/listar');
        }
    }

}

?>