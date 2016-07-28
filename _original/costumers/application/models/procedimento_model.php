<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Procedimento_model extends MY_Model {

	/**
	 * Base Model
	 *
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	protected $_table_name = 'procedimento';
	protected $_primary_key = 'idprocedimento';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'titulo';
	protected $_rules = array();
	protected $_timestamps = FALSE;

	
}