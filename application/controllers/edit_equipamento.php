<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_equipamento extends MY_Controller {

    public function index()
    {
        //Carrega a Model
        $this->load->model('equipamento_model');
        $this->load->library('session');

        // Prepara parâmetros
        $conditions = array(
            'idcliente'=>$this->session->userdata('idcliente')
        );

        //Carrega a View
        $data['equipamento'] = $this->equipamento_model->init($conditions);
        $data['template'] = 'equipamento';
        $this->load->view('include/template',$data);
    }
}