<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('account_m');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['row'] = $this->account_m->get();
        $this->template->load('template', 'account/account_data',$data);
    }

    public function add()
    {
        $this->form_validation->set_rules('username', 'username', 'required|min_length[5]|is_unique[account.username]');
        $this->form_validation->set_rules('email', 'email', 'required|is_unique[account.email]');
        $this->form_validation->set_rules('phone', 'phone', 'required|is_unique[account.phone]');

        $this->form_validation->set_message('is_unique', '%s is already in use');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'account/form_add_account');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->account_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data saved');</script>";
            }
            echo "<script>window.location='" . site_url('account/add') . "';</script>";
        }
    }



    public function del()
    {
        $id = $this->input->post('user_id');
        $this->account_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data deleted');</script>";
        }
        echo "<script>window.location='" . site_url('account') . "';</script>";
    }
}