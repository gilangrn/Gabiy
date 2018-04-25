<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->load->model('admin_model');        
        //redirect jika level bukan customer(2)
        //redirect jika level bukan admin(1)
        if ($this->session->userdata('level') <> '1') {
            redirect('login');
        }
    }

    public function home()
    {
        $this->load->view('head');
        $data['username']  = $this->session->userdata('username');
        $data['jcustomer'] = $this->statusAdmin_model->JumlahCustomer();
        $data['jdevice']   = $this->statusAdmin_model->JumlahDevice();
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/home', $data);
        $this->load->view('footer');
        $this->load->view('rightmenu');
        /*$this->load->view('settingtheme');*/
        $this->load->view('js');
    }

    public function customer()
    {
        $this->load->view('head');
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/menu', $data);
        $data['customer'] = $this->admin_model->tampil_data_customer();
        $this->load->view('admin/customers', $data);
        $this->load->view('footer');
        $this->load->view('rightmenu');
        /*$this->load->view('settingtheme');*/
        $this->load->view('js');
    }

    public function tambah_data_customer()
    {
        $username       = $this->input->post('username');
        $name           = $this->input->post('name');
        $address        = $this->input->post('address');
        $contact_person = $this->input->post('contact_person');
        $email          = $this->input->post('email');
        $ip_address     = $this->input->post('ip_address');
        $this->admin_model->tambah_data_customer($username, $name, $address, $contact_person, $email, $ip_address);
        redirect('Customers');
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
        redirect('Customers');
    }

    public function hapus_data()
    {
        $customer_id = $this->input->post('customer_id');
        $this->admin_model->hapus_data($customer_id);
        redirect('Customers');
    }

    // hapus data user
    public function hapus_data_user()
    {
        $username = $this->input->post('username');
        $this->admin_model->hapus_data_user($username);
        redirect('tambah_customer');
    }

    //customer device
    public function customer_device()
    {
        $this->load->view('head');
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/menu', $data);
        $data['device'] = $this->admin_model->tampil_data_device();
        $this->load->view('admin/customer_device', $data);
        $this->load->view('footer');
        $this->load->view('rightmenu');
        /*$this->load->view('settingtheme');*/
        $this->load->view('js');
    }

    public function tambah_data_device()
    {
        $device_alias = $this->input->post('device_alias');
        $pin          = $this->input->post('pin');
        $description  = $this->input->post('description');
        $keyword      = $this->input->post('keyword');
        $customer_id  = $this->input->post('customer_id');
        $device_id    = $this->input->post('device_id');
        $this->admin_model->tambah_data_device($device_alias, $pin, $description, $keyword, $customer_id, $device_id);
        redirect('CustomerDevice');
    }

    public function edit_data_device()
    {
        $id           = $this->input->post('id');
        $device_alias = $this->input->post('device_alias');
        $pin          = $this->input->post('pin');
        $description  = $this->input->post('description');
        $keyword      = $this->input->post('keyword');
        $customer_id  = $this->input->post('customer_id');
        $device_id    = $this->input->post('device_id');
        $this->admin_model->edit_data_device($id, $device_alias, $pin, $description, $keyword, $customer_id, $device_id);
        redirect('CustomerDevice');
    }

    public function hapus_data_device()
    {
        $id = $this->input->post('id');
        $this->admin_model->hapus_data_device($id);
        redirect('CustomerDevice');
    }

    //tambah customer
    public function tambah_customer()
    {
        $this->load->view('head');
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/menu', $data);
        $data['users'] = $this->admin_model->tampil_data_users();
        $this->load->view('admin/tambah_customers', $data);
        $this->load->view('footer');
        $this->load->view('rightmenu');
        /*$this->load->view('settingtheme');*/
        $this->load->view('js');
    }

    public function tambah_data_user()
    {
        $username       = $this->input->post('username');
        $password       = md5($this->input->post('password'));
        $level          = $this->input->post('level');
        $tanggal_daftar = date("Y-m-d H:i:s");
        $this->admin_model->tambah_data_users($username, $password, $level, $tanggal_daftar);
        
        $this->session->set_flashdata('info','true');
        redirect('admin/tambah_customer');
    }
}