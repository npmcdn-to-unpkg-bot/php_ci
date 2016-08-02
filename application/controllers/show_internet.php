<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Show_internet extends MY_Controller {

    public function index()
    {
        //Carrega a Model
        $this->load->model('internet_model');
        $this->load->library('session');

        // Prepara parâmetros
        $conditions = array(
            'idcliente'=>$this->session->userdata('idcliente')
        );

        //Carrega a View
        $data['internet'] = $this->internet_model->init($conditions);
        $data['template'] = 'internet';
        $this->load->view('include/template',$data);
    }
}