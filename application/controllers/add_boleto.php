<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add_boleto extends MY_Controller {

    public function index()
    {
        //Carrega a Model
        $this->load->model('boleto_model');
        $this->load->library('session');

        // Prepara parâmetros
        $conditions = array(
            'idcliente'=>$this->session->userdata('idcliente')
        );

        //Carrega a View
        $data['boleto'] = $this->boleto_model->init($conditions);
        $data['template'] = 'boleto';
        $this->load->view('include/template',$data);
    }
}