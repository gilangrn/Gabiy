<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_customer extends CI_Controller {

	function __construct(){
		parent::__construct();
		//redirect jika level bukan customer(2)
		if($this->session->userdata('level') <> '2')
		{
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('head');
		$this->load->view('customer/menu');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('customer/dashboard',$data);
		$this->load->view('footer');
		$this->load->view('rightmenu');
		/*$this->load->view('settingtheme');*/
		$this->load->view('js');
	}
}