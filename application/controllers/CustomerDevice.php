<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerDevice extends CI_Controller {

	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
	}

	public function index()
	{
		$this->load->view('head');
		$this->load->view('menu');
		$this->load->view('customer_device');
		$this->load->view('footer'); 
		$this->load->view('rightmenu');
		/*$this->load->view('settingtheme');*/
		$this->load->view('js');
	}
}