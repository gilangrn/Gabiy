<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model
{

	public function tampil_data_customer_device()
	{
		$hasil = $this->db->get_where('customer_device',array('customer_id'=>$this->session->userdata('customer_id')));
		return $hasil;
	}

	public function tampil_data_customer()
	{
		$hasil = $this->db->get_where('customer',array('customer_id'=>$this->session->userdata('customer_id')));
		return $hasil;
	}
}