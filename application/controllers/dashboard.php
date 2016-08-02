<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function index()
    {
        //Carrega a Model
        $this->load->model('dashboard_model');
        $this->load->library('session');

        // Prepara parâmetros
        $conditions = array(
            'idcliente'=>$this->session->userdata('idcliente')
        );

        //Carrega a View
        $data['dashboard'] = $this->dashboard_model->init($conditions);
        $data['template'] = 'dashboard';
        $this->load->view('include/template',$data);
    }
}