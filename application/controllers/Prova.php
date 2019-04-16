<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Prova extends CI_Controller {
    public function index() {
        $this->listar();
    }
    public function listar() {
        //Carrega o model                  
        $this->load->model('Prova_model');
        //Chama método
        $dado['prova'] = $this->Prova_model->getAll();
        //Carrega view
        $this->load->view('Lista_Prova');
    }
}
?>