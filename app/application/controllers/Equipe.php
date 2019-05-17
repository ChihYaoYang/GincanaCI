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
        $data['total'] = $this->Equipe_model->countrow();
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
        $this->form_validation->set_rules('nome', 'nome', 'required');
        if ($this->form_validation->run() == false) {
            //Se for false recarrega página
            $this->cadastro();
        } else {
            $data = array(
                'nome' => $this->input->post('nome')
            );
            //IMG
            if (!empty($_FILES['imagem']['name'])) {
                $config['upload_path'] = './public/uploads';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 100;
                $config['max_width'] = 1024;
                $config['max_height'] = 768;
                $config['encrypt_name'] = true;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('imagem')) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger"><i class="fas fa-times"></i> Erro ao Cadastra Imagem*_*<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>' . $this->upload->display_errors());
                    redirect('Equipe/cadastrar');
                    exit();
                } else {
                    $data['imagem'] = $this->upload->data()['file_name'];
                }
            }
            //Chama método e passa $data ja valida se teve linha affectados
            if ($this->Equipe_model->insert($data)) {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success"><i class="fas fa-check"></i> Equipe Cadastrado com Sucesso! ! !<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                redirect('Equipe/index');
            } else {
                unlink('public/uploads/' . $data['imagem']);
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger"><i class="fas fa-times"></i> Erro ao Cadastra Equipe*_*<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                redirect('Equipe/cadastro');
            }
        }
    }

    //Delete
    public function deletar($id) {
        $get = $this->Equipe_model->getId($id);
        //Valida
        if ($id > 0) {
            if ($this->Equipe_model->delete($id)) {
                unlink('public/uploads/' . $get->imagem);
                $this->session->set_flashdata('mensagem', '<div class="alert alert-success"><i class="fas fa-check"></i> Equipe Deletado com Sucesso ! ! !<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
            } else {
                $this->session->set_flashdata('mensagem', '<div class="alert alert-danger"><i class="fas fa-times"></i> Erro ao Deletar Equipe *_*<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
            }
        }
        redirect('Equipe/index');
    }

    //Update
    public function alterar($id) {
        $this->load->view('includes/header');
        if ($id > 0) {
            $this->form_validation->set_rules('nome', 'nome', 'required');
            if ($this->form_validation->run() == false) {
                $data['equipe'] = $this->Equipe_model->getId($id);
                $this->load->view('equipe/alterar', $data);
            } else {
                $data = array(
                    'nome' => $this->input->post('nome')
                );
                //IMG
                if (!empty($_FILES['imagem']['name'])) {
                    var_dump($_FILES);
                    $config['upload_path'] = './public/uploads';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = 100;
                    $config['max_width'] = 1024;
                    $config['max_height'] = 768;
                    $config['encrypt_name'] = true;
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('imagem')) {
                        $this->session->set_flashdata('mensagem', '<div class="alert alert-danger"><i class="fas fa-times"></i> Erro ao Cadastra Imagem*_*<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>' . $this->upload->display_errors());
                        redirect('Equipe/alterar');
                        exit();
                    } else {
                        $data['imagem'] = $this->upload->data()['file_name'];

                        $actualimage = $this->Equipe_model->getId($id)->imagem;
                        if (!empty($actualimage) && file_exists('public/uploads/' . $actualimage)) {
                            unlink('public/uploads/' . $actualimage);
                        }
                    }
                }

                if ($this->Equipe_model->update($id, $data)) {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-success"><i class="fas fa-check"></i> Equipe Alterado com Sucesso ! ! !<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                    redirect('Equipe/index');
                } else {
                    $this->session->set_flashdata('mensagem', '<div class="alert alert-danger"><i class="fas fa-times"></i> Erro ao Altera Equipe *_*<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
            
                    redirect('Equipe/alterar/' . $id);
                }
            }
        } else {
            redirect('Equipe/index');
        }
        $this->load->view('includes/footer');
    }

}

?>