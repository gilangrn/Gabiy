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
        $this->load->view('rightmenu');
        $this->load->view('js');
    }

    public function customers()
    {
        $this->load->library('generate_token');
        $data['token_get']  = $this->generate_token->get_token(50);
        $data['username']   = $this->session->userdata('username');
        $data['customer']   = $this->admin_model->tampil_data_customer();
        $this->load->view('head');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/customers', $data);
        $this->load->view('rightmenu');
        $this->load->view('js');
    }

    //customer device
    public function customer_device()
    {
        $data['id']= $this->format_id_model->IDCustomerDevice();
        $this->load->view('head');
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/menu', $data);
        $data['device'] = $this->admin_model->tampil_data_device();
        $this->load->view('admin/customer_device', $data);
        $this->load->view('rightmenu');
        $this->load->view('js');
    }


    public function tambah_data_customer()
    {
        $customer_id    = $this->format_id_model->IDCustomer();

        $username       = $this->input->post('username');
        $password       = $this->input->post('password');
        $name           = $this->input->post('name');
        $address        = $this->input->post('address');
        $contact_person = $this->input->post('contact_person');
        $email          = $this->input->post('email');
        $ip_address     = $this->input->post('ip_address');
        $token_get      = $this->input->post('token_get');

        $data = array(
            'customer_id'   => $customer_id,
            'username'      => $username,
            'password'      => md5($password),
            'name'          => $name,
            'address'       => $address,
            'contact_person'=> $contact_person,
            'email'         => $email,
            'ip_address'    => $ip_address,
            'token'         => $token_get,
            'level'         => '2'
        );

        $this->admin_model->tambah_data_customer($data);

        $this->session->set_flashdata('info','true');
        redirect('admin/customers');
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
        redirect('admin/customers');
    }

    public function hapus_data()
    {
        $customer_id = $this->input->post('customer_id');
        $this->admin_model->hapus_data($customer_id);
        redirect('admin/customers');
    }
    // hapus data user
    public function hapus_data_user()
    {
        $username = $this->input->post('username');
        $this->admin_model->hapus_data_user($username);
        redirect('admin/tambah_customers');
    }

    public function tambah_data_device()
    {
        $id           = $this->format_id_model->IDCustomerDevice();
        $nama_device  = $this->input->post('nama_device');
        $device_alias = $this->input->post('device_alias');
        $pin          = $this->input->post('pin');
        $description  = $this->input->post('description');
        $keyword      = $this->input->post('taging');
        $kategori     = $this->input->post('kategori');
        $customer_id  = $this->input->post('customer_id');

        $data = array(
            'id'            => $id,
            'nama_device'   => $nama_device,
            'device_alias'  => $device_alias,
            'pin'           => $pin,
            'description'   => $description,
            'keyword'       => $keyword,
            'kategori'      => $kategori,
            'customer_id'   => $customer_id
        );

        $this->admin_model->tambah_data_device($data);
        $this->session->set_flashdata('info','true');
        redirect('admin/customers');
    }

    public function edit_data_device()
    {
        $id           = $this->input->post('id');
        $nama_device  = $this->input->post('nama_device');
        $device_alias = $this->input->post('device_alias');
        $pin          = $this->input->post('pin');
        $description  = $this->input->post('description');
        $keyword      = $this->input->post('keyword');
        $kategori     = $this->input->post('kategori');
        $customer_id  = $this->input->post('customer_id');
        $this->admin_model->edit_data_device($id, $nama_device, $device_alias, $pin, $description, $keyword, $kategori, $customer_id);
        redirect('admin/customer_device');
    }

    public function hapus_data_device()
    {
        $id = $this->input->post('id');
        $this->admin_model->hapus_data_device($id);
        redirect('admin/customer_device');
    }

    //tambah customer
    public function tambah_customers()
    {
        $this->load->library('generate_token');
        $data['token_get']  = $this->generate_token->get_token(50);
        $data['customer_id']= $this->format_id_model->IDCustomer();

        $this->load->view('head');
        $data['username']   = $this->session->userdata('username');
        $this->load->view('admin/menu', $data);
        $data['users']      = $this->admin_model->tampil_data_users();
        $this->load->view('admin/tambah_customers', $data);
        $this->load->view('footer');
        $this->load->view('rightmenu');
        /*$this->load->view('settingtheme');*/
        $this->load->view('js',$data);
    }

    public function tambah_data_user()
    {
        $username = $this->input->post('username');
        $resultcheckusername = $this->admin_model->cek_username($username);
        if ($resultcheckusername > 0) {
            $this->session->set_flashdata('usernamesudahada','true');
            redirect('admin/tambah_customers','refresh');
        }
        else{
            $this->admin_model->tambah_data_users();
            $this->session->set_flashdata('info_berhasil','true');
            redirect('admin/tambah_customers');
        }
    }
}