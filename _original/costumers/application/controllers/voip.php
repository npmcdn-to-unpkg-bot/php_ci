<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voip extends Frontend_Controller {

	public function index()
	{
		$this->load->model('equipamento_model');

		$conditions = array(
			                  'idcliente'=>$this->session->userdata('idcliente'),
			                  'genero_dado'=>'voip',
			                  'status'=>'1');

		$data['voip'] = $this->equipamento_model->get_by($conditions);
		$data['template'] = 'voip';
		$this->load->view('include/template',$data);
	}

}

/* End of file equipamento.php */
/* Location: ./application/controllers/equipamento.php */