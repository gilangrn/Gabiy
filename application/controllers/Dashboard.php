<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		//redirect jika level bukan customer(2)
		if($this->session->userdata('level') <> '1')
		{
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('head');
		$this->load->view('menu');
		$data['username'] = $this->session->userdata('username');
		$this->load->view('dashboard',$data);
		$this->load->view('footer');
		$this->load->view('rightmenu');
		/*$this->load->view('settingtheme');*/
		$this->load->view('js');
	}
}