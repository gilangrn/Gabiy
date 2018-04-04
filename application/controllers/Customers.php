<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('tampilcustomer_model');
	}


	public function index()
	{
		$this->load->view('head');
		$this->load->view('leftmenu');
		$this->load->view('headmenu');
		$data['customer'] = $this->tampilcustomer_model->tampil_data_customer();
		$this->load->view('customers',$data);
		$this->load->view('rightmenu');
		/*$this->load->view('settingmenu');*/
		$this->load->view('js');
	}
}