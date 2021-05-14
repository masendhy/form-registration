<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
    parent::__construct();
    check_not_login();
    $this->load->model('user_m');
    }


    public function index()
    {
        
        $data['row'] = $this->user_m->get();
        $this->template->load('template', 'user/user_data', $data);
    }


    public function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'required|min_length[5]|is_unique[usertab.username]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[7]|is_unique[usertab.password]');
        $this->form_validation->set_rules('passconfirm', 'passconfirm', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'email', 'required|is_unique[usertab.email]');
        $this->form_validation->set_rules('phone', 'phone', 'required|is_unique[usertab.phone]');

        $this->form_validation->set_message('is_unique', '%s is already in use');
       
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'user/user_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data saved');</script>";
            }
            echo "<script>window.location='".site_url('user')."';</script>";
        }
        
    }

    public function del()
    {
        $id = $this->input->post('user_id');
        $this->user_m->del($id);

        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data deleted');</script>";
        }
        echo "<script>window.location='".site_url('user')."';</script>";
    }
}
