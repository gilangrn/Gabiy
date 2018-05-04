<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller {

	function __construct(){
		parent::__construct();
		//redirect jika level bukan customer(2)
		// if($this->session->userdata('level') <> '2')
		// {
		// 	redirect('login');
		// }
	}

	public function home()
	{
        $data['customer_id'] = $this->session->userdata('customer_id');
    	$data['username'] = $this->session->userdata('username');
		$data['token'] = $this->session->userdata('token');
		$this->load->view('head');
		$this->load->view('customer/menu',$data);
		$this->load->view('customer/home',$data);
		$this->load->view('footer');
		$this->load->view('rightmenu');
		/*$this->load->view('settingtheme');*/
		$this->load->view('js');
	}

    public function devicelist()
    {
        $this->load->view('head');
        $data['username']          = $this->session->userdata('username');
        $data['token']             = $this->session->userdata('token');
        $data['customer_device']   = $this->customer_model->tampil_data_customer_device();

        $this->load->view('customer/menu',$data);
        $this->load->view('customer/ruangdepan/content',$data);
        $this->load->view('js');
    }

	/*public function lantaiatas()
	{
		$this->load->view('head');
    	$data['username'] = $this->session->userdata('username');
    	$data['token'] = $this->session->userdata('token');
    	$this->load->view('customer/menu',$data);
    	$this->load->view('customer/lantaiatas/content',$data);
    	$this->load->view('js');
	}*/

	//profil, notification, inbox
	public function profil()
	{
		$this->load->view('head');
  	$data['username'] = $this->session->userdata('username');
  	$data['token'] = $this->session->userdata('token');
    $data['customer_device']   = $this->customer_model->tampil_data_customer_device();
    $data['customer']   = $this->customer_model->tampil_data_customer();
  	$this->load->view('customer/menu',$data);
  	$this->load->view('customer/profil/content',$data);
  	$this->load->view('js');
  	}

    public function edit_data_customer()
    {
        $customer_id    = $this->input->post('customer_id');
        $username       = $this->input->post('username');
        $name           = $this->input->post('name');
        $address        = $this->input->post('address');
        $contact_person = $this->input->post('contact_person');
        $email          = $this->input->post('email');
        $ip_address     = $this->input->post('ip_address');
        $this->admin_model->edit_data_customer($customer_id, $username, $name, $address, $contact_person, $email, $ip_address);
        redirect('customer/profil');
    }

 	/*public function notification()
  	{
    	$this->load->view('head');
    	$data['username'] = $this->session->userdata('username');
    	$data['token'] = $this->session->userdata('token');
    	$this->load->view('customer/menu',$data);
    	$this->load->view('customer/profil/notification',$data);
    	$this->load->view('js');
  	}*/

  	/*public function inbox()
  	{
    	$this->load->view('head');
    	$data['username'] = $this->session->userdata('username');
    	$data['token'] = $this->session->userdata('token');
    	$this->load->view('customer/menu',$data);
    	$this->load->view('customer/profil/inbox',$data);
   		$this->load->view('js');
  	}*/

    public function getstate($device_id){
      $devicedata = $this->db->get_where('customer_device',array('id'=>$device_id))->row();

      echo $devicedata->state;
    }

   public function setstate(){
      $postData = $this->input->post();

      $object = array(
        'state' => $postData['state'],
      );

      $this->db->where('id',$postData['device_id']);
      $this->db->where('customer_id',$postData['customer_id']);

      $this->db->update('customer_device',$object);

    }

}