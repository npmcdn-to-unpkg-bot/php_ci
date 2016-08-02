<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Procedimento_Model extends MY_Model
{

    protected $_table_name = '';
    protected $_primary_key = '';
    protected $_primary_filter = '';
    protected $_order_by = '';
    protected $_rules = array();
    protected $_timestamps = FALSE;


    function __construct()
    {
        parent::__construct();
    }

    function init(){
        //Obtém parâmetros 
        //Faz validações
    }


}