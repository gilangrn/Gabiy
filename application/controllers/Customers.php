<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customers extends CI_Controller {
	
		public function index()
		{
			$this->load->view('head');
			$this->load->view('menu');
			$data['customer'] = $this->customer_model->tampil_data_customer();
			$this->load->view('customers',$data);
			$this->load->view('footer');
			$this->load->view('rightmenu');
			/*$this->load->view('settingtheme');*/
			$this->load->view('js');
		}
		public function tambah_data_customer()
		{
						$name			=$this->input->post('name');
					$address 		=$this->input->post('address');
				$contact_person	=$this->input->post('contact_person');
						$email 			=$this->input->post('email');
				$ip_address 	=$this->input->post('ip_address');
			$this->customer_model->tambah_data_customer($name,$address,$contact_person,$email,$ip_address);
			redirect('Customers');
		}
		public function edit_data_customer()
		{
				$customer_id	=$this->input->post('customer_id');
						$name			=$this->input->post('name');
					$address 		=$this->input->post('address');
				$contact_person	=$this->input->post('contact_person');
						$email 			=$this->input->post('email');
				$ip_address 	=$this->input->post('ip_address');
			$this->customer_model->edit_data_customer($customer_id,$name,$address,$contact_person,$email,$ip_address);
			redirect('Customers');
		}
		public function hapus_data()
		{
			$customer_id=$this->input->post('customer_id');
			$this->customer_model->hapus_data($customer_id);
			redirect('Customers');
		}
	}