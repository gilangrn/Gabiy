<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Format_id_model extends CI_Model
{
    public function IDCustomer()
    {
        $this->db->select("RIGHT(customer_id,3) AS kode ");
        $this->db->order_by('customer_id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('customer');
        if($query->num_rows()>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;
        }
        $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
        $kodejadi  = "CUS".$kodemax;
        return $kodejadi;
    }

    public function IDDevice()
    {
        $this->db->select("RIGHT(id_perusahaan,4) AS kode ");
        $this->db->order_by('id_perusahaan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('perusahaan');
        if($query->num_rows()>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;
        }
        $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
        $kodejadi  = "PT".$kodemax;
        return $kodejadi;
    }

    public function IDCustomerDevice()
    {
        $this->db->select("RIGHT(id_perusahaan,4) AS kode ");
        $this->db->order_by('id_perusahaan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('perusahaan');
        if($query->num_rows()>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;
        }
        $kodemax = str_pad($kode,4,"0",STR_PAD_LEFT);
        $kodejadi  = "PT".$kodemax;
        return $kodejadi;
    }


}