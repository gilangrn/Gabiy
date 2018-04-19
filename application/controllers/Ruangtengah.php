<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangtengah extends CI_Controller {

  function __construct(){
    parent::__construct();
    //$this->load->model('customer_model');   
    //redirect jika level bukan customer(2)
    //redirect jika level bukan admin(1)
    if($this->session->userdata('level') <> '2')
    {
      redirect('login');
    }
  }

  public function index()
  {
    $this->load->view('customer/ruangtengah/header');
    $data['username'] = $this->session->userdata('username');
    $data['jcustomer'] = $this->statusDashboard_model->JumlahCustomer();
    $data['jdevice'] = $this->statusDashboard_model->JumlahDevice();
    $this->load->view('customer/ruangtengah/content',$data);
    $this->load->view('customer/ruangtengah/footer');
    $this->load->view('js');
  }
}