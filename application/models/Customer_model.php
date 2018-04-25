<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model
{
	public function tampil_data_customer_device()
	{
		$hasil=$this->db->query("SELECT * FROM customer_device");
		return $hasil;
	}
}