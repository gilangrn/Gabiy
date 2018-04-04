<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampilcustomer_model extends CI_Model
{
	public function tampil_data_customer()
		{
			$hasil=$this->db->query("SELECT * FROM customer");
			return $hasil; 
		}
}