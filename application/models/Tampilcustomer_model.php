<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampilcustomer_model extends CI_Model
{
	public function tampil_data_customer()
	{
		$hasil=$this->db->query("SELECT * FROM customer");
		return $hasil; 
	}

	public function tambah_data_customer($name,$address,$contact_person,$email,$ip_address)
	{
		$hasil=$this->db->query("INSERT INTO customer (name,address,contact_person,email,ip_address) VALUES ('$name','$address','$contact_person','$email','$ip_address')");
		return $hasil;
	}

}