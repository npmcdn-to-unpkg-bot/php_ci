<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	function check(){
		
		$this->load->library('session');
		$this->load->model('login_model');
		
		$dados = array(
			'email =' => $this->input->post('email'),
			'senha =' => $this->input->post('password')
			);

		
		$result = $this->login_model->get_by($dados);
		
		if ( $result != NULL ){
			
			// Get data to include in session

			$newdata = array(
				'nome'      => $result[0]->nome,
            	'email'     => $result[0]->email,
            	'idcliente'   => $result[0]->idcliente,
                'logged_in' => TRUE
               );
			// Gravando session;
			var_dump($newdata);

			$this->session->set_userdata($newdata);
			redirect('/dashboard', 'location', 301);
		}else{
		
			redirect('/', 'location', 301);
		}
	}

	function destroy(){
		$this->session->sess_destroy();	
		redirect('/login', 'location', 301);
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */