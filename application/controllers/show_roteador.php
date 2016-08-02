<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Show_roteador extends MY_Controller {

    public function index()
    {
        //Carrega a Model
        $this->load->model('roteador_model');
        $this->load->library('session');

        // Prepara parâmetros
        $conditions = array(
            'idcliente'=>$this->session->userdata('idcliente')
        );

        //Carrega a View
        $data['roteador'] = $this->roteador_model->init($conditions);
        $data['template'] = 'roteador';
        $this->load->view('include/template',$data);
    }
}