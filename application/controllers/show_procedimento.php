<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Show_procedimento extends MY_Controller {

    public function index()
    {
        //Carrega a Model
        $this->load->model('procedimento_model');
        $this->load->library('session');

        // Prepara parâmetros
        $conditions = array(
            'idcliente'=>$this->session->userdata('idcliente')
        );

        //Carrega a View
        $data['procedimento'] = $this->procedimento_model->init($conditions);
        $data['template'] = 'procedimento';
        $this->load->view('include/template',$data);
    }
}