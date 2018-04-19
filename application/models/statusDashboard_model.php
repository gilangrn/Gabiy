<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class statusDashboard_model extends CI_Model
{
    public function JumlahDevice()
	{
        $query = $this->$db->query("SELECT * FROM customer_device");
        $total = $query->num_rows();
        return $total;
    }
}