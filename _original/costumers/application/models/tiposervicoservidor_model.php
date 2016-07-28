<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tiposervicoservidor_model extends MY_Model {

	/**
	 * Base Model
	 *
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	protected $_table_name = 'tiposervicoservidor';
	protected $_primary_key = 'idtiposervicoservidor';
	protected $_primary_filter = 'nome';
	protected $_order_by = 'nome';
	protected $_rules = array();
	protected $_timestamps = FALSE;
	
}