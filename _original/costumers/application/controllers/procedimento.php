<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procedimento extends Frontend_Controller {

	public function index()
	{
		$this->load->model('procedimento_model');
		
		$conditions = array(
			                  'idcliente'=>$this->session->userdata('idcliente')
			                  );

		$data['procedimento'] = $this->procedimento_model->get_by($conditions);
		$data['template'] = 'procedimento';
		$this->load->view('include/template',$data);
	}
}

/* End of file equipamento.php */
/* Location: ./application/controllers/equipamento.php */