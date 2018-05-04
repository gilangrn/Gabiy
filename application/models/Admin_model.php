<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {

  //data customer
  public function tampil_data_customer() {
    $this->db->select('*');
    $this->db->from('customer');
    $this->db->where('level','2');
    $this->db->order_by('customer_id','DESC');
    return $this->db->get();
  }

  public function detail_customer(){
      $sql = "select a.*,b.* from customer a INNER JOIN customer_device b on a.customer_id = b.customer_id where level = 2";
      $query = $this->db->query($sql);
      return $query->result(); 
  }

  public function tambah_data_customer($data) {
    $this->db->insert('customer',$data);
  }

    public function edit_data_customer($customer_id, $username, $name, $address, $contact_person, $email, $ip_address) {
        $hasil = $this->db->query("UPDATE customer SET username='$username',name='$name',address='$address',contact_person='$contact_person',email='$email',ip_address='$ip_address' WHERE customer_id='$customer_id'");
        return $hasil;
    }

    public function hapus_data($customer_id) {
        $hasil = $this->db->query("DELETE FROM customer WHERE customer_id='$customer_id'");
        return $hasil;
    }
    // hapus data user
    public function hapus_data_user($username) {
        /*$hasil=$this->db->query("DELETE FROM users WHERE username='$username'");
         return $hasil;*/
        $this->db->where('username', $username);
        return $this->db->delete('users');
    }
    //data device
    public function tampil_data_device() {
        $hasil = $this->db->query("SELECT * FROM customer_device");
        return $hasil;
    }
    public function tambah_data_device($data) {
        $this->db->insert('customer_device',$data);
    }

    public function edit_data_device($id, $nama_device, $device_alias, $pin, $description, $keyword, $kategori, $customer_id) {
        $hasil = $this->db->query("UPDATE customer_device SET nama_device='$nama_device',device_alias='$device_alias',pin='$pin',description='$description',keyword='$keyword',customer_id='$customer_id',kategori='$kategori' WHERE id='$id'");
        return $hasil;
    }
    public function hapus_data_device($id) {
        $hasil = $this->db->query("DELETE FROM customer_device WHERE id='$id'");
        return $hasil;
    }
    public function tampil_data_users() {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('level','2');
      $this->db->order_by('tanggal_daftar','DESC');
      return $this->db->get();
        //$hasil = $this->db->query("SELECT * FROM users WHERE level='2' ORDER BY tanggal_daftar DESC");
        //return $hasil;
    }
    public function tambah_data_users() {
      $username       = $this->input->post('username');
      $password       = md5($this->input->post('password'));
      $level          = $this->input->post('level');
      $tanggal_daftar = date("Y-m-d H:i:s");
      $token          = $this->input->post('token');
      $data = array(
        "username"       => $username,
        "password"       => $password,
        "level"          => $level,
        "tanggal_daftar" => $tanggal_daftar,
        "token"          => $token
      );
      return $this->db->insert('users',$data);
    }
    public function cek_username($username) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
