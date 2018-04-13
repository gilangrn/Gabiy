<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_home extends CI_Controller {

	function __construct(){
		parent::__construct();
		//redirect jika level bukan admin(1)
		if($this->session->userdata('level') <> '1')
		{
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('head');
		$this->load->view('admin/menu');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('footer');
		$this->load->view('rightmenu');
		/*$this->load->view('settingtheme');*/
		$this->load->view('js');
	}
}