<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Recupera extends CI_Controller {

    public function index() {
        $this->load->view('recuperasenha/lista');
    }
}
