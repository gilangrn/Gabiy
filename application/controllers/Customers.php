<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('tampilcustomer_model');
	}


	public function index()
	{
		$this->load->view('head');
		$this->load->view('menu');
		$data['customer'] = $this->tampilcustomer_model->tampil_data_customer();
		$this->load->view('customers',$data);
		$this->load->view('rightmenu');
		/*$this->load->view('settingmenu');*/
		$this->load->view('js');
	}
}