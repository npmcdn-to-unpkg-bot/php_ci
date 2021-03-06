<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servidor extends Frontend_Controller {

	public function index()
	{
		$this->load->model('equipamento_model');
		$this->load->model('tiposervicoservidor_model');
		
		$conditions = array(
			                  'idcliente'=>$this->session->userdata('idcliente'),
			                  'genero_dado'=>'hardware',
			                  'tipoequipamento like'=>'%Ser%',
			                  'status'=>'1');

		$data['equipamento'] = $this->equipamento_model->get_by($conditions);
		$data['badge'] = $this->tiposervicoservidor_model->get();
		$data['template'] = 'servidor';
		$this->load->view('include/template',$data);
	}
}

/* End of file equipamento.php */
/* Location: ./application/controllers/equipamento.php */