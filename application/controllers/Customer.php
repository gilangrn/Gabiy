<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller {

	function __construct(){
		parent::__construct();
		//redirect jika level bukan customer(2)
		if($this->session->userdata('level') <> '2')
		{
			redirect('login');
		}
	}

	public function home()
	{
    	$data['username'] = $this->session->userdata('username');
		$data['token'] = $this->session->userdata('token');
		$this->load->view('head');
		$this->load->view('customer/menu',$data);
		$this->load->view('customer/home',$data);
		$this->load->view('footer');
		$this->load->view('rightmenu');
		/*$this->load->view('settingtheme');*/
		$this->load->view('js');
	}

	public function lantaiatas()
	{
		$this->load->view('head');
    	$data['username'] = $this->session->userdata('username');
    	$data['token'] = $this->session->userdata('token');
    	$this->load->view('customer/menu',$data);
    	$this->load->view('customer/lantaiatas/content',$data);
    	$this->load->view('js');
	}

	//profil, notification, inbox
	public function profil()
	{
		$this->load->view('head');
    	$data['username'] = $this->session->userdata('username');
    	$data['token'] = $this->session->userdata('token');
    	$this->load->view('customer/menu',$data);
    	$this->load->view('customer/profil/content',$data);
    	$this->load->view('js');
  	}

 	public function notification()
  	{
    	$this->load->view('head');
    	$data['username'] = $this->session->userdata('username');
    	$data['token'] = $this->session->userdata('token');
    	$this->load->view('customer/menu',$data);
    	$this->load->view('customer/profil/notification',$data);
    	$this->load->view('js');
  	}

  	public function inbox()
  	{
    	$this->load->view('head');
    	$data['username'] = $this->session->userdata('username');
    	$data['token'] = $this->session->userdata('token');
    	$this->load->view('customer/menu',$data);
    	$this->load->view('customer/profil/inbox',$data);
   		$this->load->view('js');
  	}

	public function ruangdepan()
	{
		$this->load->view('head');
    	$data['username']          = $this->session->userdata('username');
    	$data['token']             = $this->session->userdata('token');
        $data['customer_device']   = $this->customer_model->tampil_data_customer_device();
    	$this->load->view('customer/menu',$data);
    	$this->load->view('customer/ruangdepan/content',$data);
    	$this->load->view('js');
	}

	public function ruangrapat()
	{
		$this->load->view('head');
    	$data['username'] = $this->session->userdata('username');
    	$data['token'] = $this->session->userdata('token');
    	$this->load->view('customer/menu',$data);
    	$this->load->view('customer/ruangrapat/content',$data);
    	$this->load->view('js');
	}

	public function ruangtengah()
	{
		$this->load->view('head');
    	$data['username'] = $this->session->userdata('username');
    	$data['token'] = $this->session->userdata('token');
    	$this->load->view('customer/menu',$data);
    	$this->load->view('customer/ruangtengah/content',$data);
    	$this->load->view('js');
	}
}