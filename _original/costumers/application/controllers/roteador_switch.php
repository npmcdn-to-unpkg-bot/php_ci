<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roteador_switch extends Frontend_Controller {

	public function index()
	{
		$this->load->model('equipamento_model');
		$data['equipamento'] = $this->equipamento_model->get_by(array('idcliente'=>$this->session->userdata('idcliente'),'genero_dado'=>'routerswitch'));
		$data['template'] = 'roteador_switch';
		$this->load->view('include/template',$data);
	}

}

/* End of file equipamento.php */
/* Location: ./application/controllers/equipamento.php */