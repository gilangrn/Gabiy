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
        $sess_data['id']          = $data->id;
        $sess_data['customer_id'] = $data->customer_id;
        $sess_data['username']    = $data->username;
        $sess_data['level']       = $data->level;
        $sess_data['token']       = $data->token;
        $this->session->set_userdata($sess_data);
      }
            //level 1 adalah admin
      if ($this->session->userdata('level') == '1') {
        redirect('admin/home');
      }
            //level 2 adalah customer
      elseif ($this->session->userdata('level') == '2') {
        redirect('customer/home/'.$this->session->userdata('token'));
      }
    } else {
      $this->session->set_flashdata('info','true');
      redirect('login');
    }
  }
  function keluar() {
    $this->session->sess_destroy();
    redirect('login');
  }
}