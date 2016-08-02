<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Show_software extends MY_Controller {

    public function index()
    {
        //Carrega a Model
        $this->load->model('software_model');
        $this->load->library('session');

        // Prepara parâmetros
        $conditions = array(
            'idcliente'=>$this->session->userdata('idcliente')
        );

        //Carrega a View
        $data['software'] = $this->software_model->init($conditions);
        $data['template'] = 'software';
        $this->load->view('include/template',$data);
    }
}