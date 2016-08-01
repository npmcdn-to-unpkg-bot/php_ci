<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipamento extends CI_Controller {

	public function index()
	{
		$data['template'] = 'equipamento';
		$this->load->view('include/template',$data);
	}
}

/* End of file equipamento.php */
/* Location: ./application/controllers/equipamento.php */