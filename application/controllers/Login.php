<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller {
  public function index() {
    if ($this->session->userdata('level') == '1') {
      redirect('admin/home');
    }
        //level 2 adalah customer
    elseif ($this->session->userdata('level') == '2') {
      redirect('customer/home');
    }
        //redirect ke login jika belum ada session
    else {
      $this->load->view('login');
    }
  }
  function masuk() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $cek = $this->login_model->cek($username, $password);
    if ($cek->num_rows() == 1) {
      foreach ($cek->result() as $data) {
        $sess_data['id'] = $data->id;
        $sess_data['username'] = $data->username;
        $sess_data['level'] = $data->level;
        $this->session->set_userdata($sess_data);
      }
            //level 1 adalah admin
      if ($this->session->userdata('level') == '1') {
        redirect('admin/home');
      }
            //level 2 adalah customer
      elseif ($this->session->userdata('level') == '2') {
        redirect('customer/home/'.$this->session->userdata('username'));
      }
    } else {
      $this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
      redirect('login');
    }
  }
  function keluar() {
    $this->session->sess_destroy();
    redirect('login');
  }
}