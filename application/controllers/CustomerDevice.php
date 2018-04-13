<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerDevice extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('customer_model');
	}
	
	public function index()
	{
		$this->load->view('head');
		$this->load->view('menu');
		$data['device'] = $this->customer_model->tampil_data_device();
		$this->load->view('customer_device',$data);
		$this->load->view('footer'); 
		$this->load->view('rightmenu');
		/*$this->load->view('settingtheme');*/
		$this->load->view('js');
	}

	public function tambah_data_device()
	{
		$device_alias	=$this->input->post('device_alias');
		$pin 			=$this->input->post('pin');
		$description	=$this->input->post('description');
		$keyword 		=$this->input->post('keyword');
		$customer_id 	=$this->input->post('customer_id');
		$device_id 		=$this->input->post('device_id');
		$this->customer_model->tambah_data_device($device_alias,$pin,$description,$keyword,$customer_id,$device_id);
		redirect('CustomerDevice');
	}

	public function edit_data_device()
	{
		$id				=$this->input->post('id');
		$device_alias	=$this->input->post('device_alias');
		$pin 			=$this->input->post('pin');
		$description	=$this->input->post('description');
		$keyword 		=$this->input->post('keyword');
		$customer_id 	=$this->input->post('customer_id');
		$device_id 		=$this->input->post('device_id');
		$this->customer_model->edit_data_device($id,$device_alias,$pin,$description,$keyword,$customer_id,$device_id);
		redirect('CustomerDevice');
	}

	public function hapus_data_device()
	{
		$id=$this->input->post('id');
        $this->customer_model->hapus_data_device($id);
        redirect('CustomerDevice');
	}
}