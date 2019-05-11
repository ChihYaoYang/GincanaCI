<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Result extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Result_model');
        $this->load->model('Usuario_model');
        $this->load->model('Equipe_model');
        $this->Usuario_model->verificaLogin();
    }
    public function index()
    {
        $data['resultado'] = $this->Result_model->resultado();
        //Carrega Menu
        $this->load->view('includes/header');
        //Carrega view
        $this->load->view('resultado/lista', $data);
        //Carrega rodapé
        $this->load->view('includes/footer');
    }
}
