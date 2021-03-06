<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends MY_Controller {

    public function index()
    {
        //Carrega a Model
        $this->load->model('teste_model');
        $this->load->library('session');

        // Prepara parâmetros
        $conditions = array(
            'idcliente'=>$this->session->userdata('idcliente')
        );

        //Carrega a View
        $data['teste'] = $this->teste_model->init($conditions);
        $data['template'] = 'teste';
        $this->load->view('include/template',$data);
    }
}