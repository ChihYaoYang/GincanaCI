<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Usuario_model');
        $this->Usuario_model->verificaLogin();
    }
    public function index()
    {
        $data['user'] = $this->User_model->getAll();
        $this->load->view('includes/header');
        $this->load->view('user/lista', $data);
        $this->load->view('includes/footer');
    }
}