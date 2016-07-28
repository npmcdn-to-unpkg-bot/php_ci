<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Equipamento_model extends MY_Model {

	/**
	 * Base Model
	 *
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	protected $_table_name = 'equipamento';
	protected $_primary_key = 'idequipamento';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'usuario';
	protected $_rules = array();
	protected $_timestamps = FALSE;

	
}