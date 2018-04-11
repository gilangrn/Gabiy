<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model
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

	public function edit_data_customer($customer_id,$name,$address,$contact_person,$email,$ip_address)
	{
		$hasil=$this->db->query("UPDATE customer SET name='$name',address='$address',contact_person='$contact_person',email='$email',ip_address='$ip_address' WHERE customer_id='$customer_id'");
		return $hasil;
	}

	public function hapus_barang($customer_id){
        $hasil=$this->db->query("DELETE FROM customer WHERE customer_id='$customer_id'");
        return $hasil;
    }

}