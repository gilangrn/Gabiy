<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerDevice extends CI_Controller {

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