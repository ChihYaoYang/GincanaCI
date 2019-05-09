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
        
    }

}

?>