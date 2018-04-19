<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangrapat extends CI_Controller {

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
    $this->load->view('head');
    $data['username'] = $this->session->userdata('username');
    $data['jcustomer'] = $this->statusDashboard_model->JumlahCustomer();
    $data['jdevice'] = $this->statusDashboard_model->JumlahDevice();
    $this->load->view('customer/menu',$data);
    $this->load->view('customer/ruangrapat/content',$data);
    $this->load->view('js');
  }
}