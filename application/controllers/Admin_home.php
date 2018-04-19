<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends CI_Controller {

	function __construct(){
		parent::__construct();
		//$this->load->model('customer_model');		
		//redirect jika level bukan customer(2)
		//redirect jika level bukan admin(1)
		if($this->session->userdata('level') <> '1')
		{
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('head');
		$data['username'] = $this->session->userdata('username');
		$data['jcustomer'] = $this->statusDashboard_model->JumlahCustomer();
		$data['jdevice'] = $this->statusDashboard_model->JumlahDevice();
		$this->load->view('admin/menu',$data);
		$this->load->view('admin/home',$data);
		$this->load->view('footer');
		$this->load->view('rightmenu');
		/*$this->load->view('settingtheme');*/
		$this->load->view('js');
	}
}