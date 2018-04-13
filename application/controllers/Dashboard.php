<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();

		//memanggil function dari controller MY_Controller
		$this->cekLogin();

		//validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
    if ($this->session->userdata('level') == "admin") {
      redirect('dashboard');
	}
}

	public function index()
	{
		$this->load->view('head');
		$this->load->view('menu');
		$this->load->view('dashboard');
		$this->load->view('footer');
		$this->load->view('rightmenu');
		/*$this->load->view('settingtheme');*/
		$this->load->view('js');
	}

	public function cekLogin()
	{
		//Jika tidak ada session (username) maka alihkan ke controller login
		if (!$this->session->userdata('username')) {
			redirect('auth/login');
		}
	}
}