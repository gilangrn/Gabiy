<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class statusAdmin_model extends CI_Model
{
    public function JumlahCustomer()
	{
        $query = $this->db->query("SELECT * FROM customer");
        $total = $query->num_rows();
        return $total;
    }

    public function JumlahDevice()
	{
        $query = $this->db->query("SELECT * FROM customer_device");
        $total = $query->num_rows();
        return $total;
    }
}