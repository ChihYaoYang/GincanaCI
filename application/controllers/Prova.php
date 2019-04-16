<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Prova extends CI_Controller {
    public function index() {
        $this->listar();
    }
    public function listar() {
        //Carrega o model                  
        $this->load->model('Prova_model');
        //Chama método e criar $dado['prova'] 'prova' para armazena dados e fazer no view
        $data['prova'] = $this->Prova_model->getAll();
        //Carrega view
        $this->load->view('ListaProva', $data);
    }
}
?>