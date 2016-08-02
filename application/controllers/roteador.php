<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Roteador extends MY_Controller {

    public function index()
    {
        //Carrega a Model
        $this->load->model('switch_model');
        $this->load->library('session');

        // Prepara parâmetros
        $conditions = array(
            'idcliente'=>$this->session->userdata('idcliente')
        );

        //Carrega a View
        $data['switch'] = $this->switch_model->init($conditions);
        $data['template'] = 'switch';
        $this->load->view('include/template',$data);
    }
}