<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model
{
	//data customer
	public function tampil_data_customer()
	{
		$hasil=$this->db->query("SELECT * FROM customer");
		return $hasil; 
	}

	public function tambah_data_customer($username,$name,$address,$contact_person,$email,$ip_address)
	{
		$hasil=$this->db->query("INSERT INTO customer (username,name,address,contact_person,email,ip_address) VALUES ('$username','$name','$address','$contact_person','$email','$ip_address')");
		return $hasil;
	}

	public function edit_data_customer($customer_id,$username,$name,$address,$contact_person,$email,$ip_address)
	{
		$hasil=$this->db->query("UPDATE customer SET username='$username',name='$name',address='$address',contact_person='$contact_person',email='$email',ip_address='$ip_address' WHERE customer_id='$customer_id'");
		return $hasil;
	}

	public function hapus_data($customer_id){
        $hasil=$this->db->query("DELETE FROM customer WHERE customer_id='$customer_id'");
        return $hasil;
	}
	
	//data device
	public function tampil_data_device()
	{
		$hasil=$this->db->query("SELECT * FROM customer_device");
		return $hasil; 
	}

	public function tambah_data_device($device_alias,$pin,$description,$keyword,$customer_id,$device_id)
	{
		$hasil=$this->db->query("INSERT INTO customer_device (device_alias,pin,description,keyword,customer_id,device_id) VALUES ('$device_alias','$pin','$description','$keyword','$customer_id','$device_id')");
		return $hasil;
	}

	public function edit_data_device($id,$device_alias,$pin,$description,$keyword,$customer_id,$device_id)
	{
		$hasil=$this->db->query("UPDATE customer_device SET device_alias='$device_alias',pin='$pin',description='$description',keyword='$keyword',customer_id='$customer_id',device_id='$device_id' WHERE id='$id'");
		return $hasil;
	}

	public function hapus_data_device($id){
        $hasil=$this->db->query("DELETE FROM customer_device WHERE id='$id'");
        return $hasil;
    }

}