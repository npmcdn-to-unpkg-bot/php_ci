<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_m extends MY_Model {

	/**
	 * Base Model
	 *
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	protected $_table_name = 'cliente';
	protected $_primary_key = 'idcliente';
	protected $_primary_filter = 'intval';
	protected $_order_by = '';
	protected $_rules = array();
	protected $_timestamps = FALSE;
	

}