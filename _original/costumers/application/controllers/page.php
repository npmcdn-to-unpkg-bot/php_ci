<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends Frontend_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent:: __construct();
		$this->load->model('page_m');
	}

	public function index()
	{
		//$clientes = $this->page_m->get_like(array('nome' => 'FCA'));
		$clientes = $this->page_m->get(99);
		print_r($this->db->last_query());
		echo "<br>";
		var_dump($clientes);
	}

	public function update($id)
	{
		if ( $id != NULL ){
			$data = array(
				'nome' => 'Anjinho Enxovais'
			);
			$id = $this->page_m->save($data, $id);
			var_dump($id);
		}

	}

	public function row()
	{
		$data['template']  = 'row';
        $this->load->view('include/template', $data);
	}

}