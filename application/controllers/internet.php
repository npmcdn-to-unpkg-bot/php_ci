<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Internet extends Frontend_Controller {

	public function index()
	{
		$this->load->model('equipamento_model');

		$conditions = array(
			                  'idcliente'=>$this->session->userdata('idcliente'),
			                  'genero_dado'=>'internet');

		$data['internet'] = $this->equipamento_model->get_by($conditions);
		$data['template'] = 'internet';
		$this->load->view('include/template',$data);
	}

}

/* End of file equipamento.php */
/* Location: ./application/controllers/equipamento.php */