<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add_extrato extends MY_Controller {

    public function index()
    {
        //Carrega a Model
        $this->load->model('extrato_model');
        $this->load->library('session');

        // Prepara parâmetros
        $conditions = array(
            'idcliente'=>$this->session->userdata('idcliente')
        );

        //Carrega a View
        $data['extrato'] = $this->extrato_model->init($conditions);
        $data['template'] = 'extrato';
        $this->load->view('include/template',$data);
    }
}