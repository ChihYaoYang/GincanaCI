<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Recupera extends CI_Controller {

    public function index() {
        $this->load->view('recuperasenha/lista');
    }

    public function recupera() {
        $this->load->library('email');
        $this->email->from('your@example.com', 'Your Name');
        $this->email->to('someone@example.com');
        $this->email->cc('another@another-example.com');
        $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();
    }

}
