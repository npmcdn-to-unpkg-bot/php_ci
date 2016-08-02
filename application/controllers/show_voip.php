<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Show_voip extends MY_Controller {

    public function index()
    {
        //Carrega a Model
        $this->load->model('voip_model');
        $this->load->library('session');

        // Prepara parâmetros
        $conditions = array(
            'idcliente'=>$this->session->userdata('idcliente')
        );

        //Carrega a View
        $data['voip'] = $this->voip_model->init($conditions);
        $data['template'] = 'voip';
        $this->load->view('include/template',$data);
    }
}