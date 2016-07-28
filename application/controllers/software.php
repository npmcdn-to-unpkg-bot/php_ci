<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Software extends Frontend_Controller {

	public function index()
	{
		$this->load->model('equipamento_model');
		$data['equipamento'] = $this->equipamento_model->get_by(array('idcliente'=>$this->session->userdata('idcliente'),'genero_dado'=>'software','status'=>'1'));
		$data['template'] = 'software';
		$this->load->view('include/template',$data);
	}

}

/* End of file equipamento.php */
/* Location: ./application/controllers/equipamento.php */