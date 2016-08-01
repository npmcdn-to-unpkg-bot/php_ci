<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	public $data = array();
	
	function __construct(){
		parent::__construct();
		$this->data['errors'] = array();
		$this->data['site_name'] = config_item('site_name');
		$this->data['power_by']  = config_item('power_by');

		$this->load->library('session');

		if ( $this->session->userdata('logged_in') != TRUE )  { redirect('/login', 'location', 301); }
	}

}
