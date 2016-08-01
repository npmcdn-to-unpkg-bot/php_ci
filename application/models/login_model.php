<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends MY_Model {


	protected $_table_name = 'usuario';
	protected $_primary_key = 'idusuario';
	protected $_primary_filter = 'idusuario';
	protected $_order_by = '';
	protected $_rules = array();
	protected $_timestamps = FALSE;


	function check_login($where, $single = FALSE )
	{
		$this->db->where($where);
		$result =  $this->get(NULL, $single);
		
		if ( $result != NULL ){

		// Do someting
			$newdata = array(
                   'nome'      => $result[0]->nome,
                   'email'     => $result[0]->email,
                   'empresa'   => $result[0]->idcliente,
                   'logged_in' => TRUE
               );
			$this->session->set_userdata($newdata);
			// para usar base buscar o dado usando 
		}
		return $this->get(NULL, $single);
	}
}