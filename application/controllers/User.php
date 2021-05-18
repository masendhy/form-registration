<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }


    public function index()
    {

        $data['row'] = $this->user_m->get();
        $this->template->load('template', 'user/user_data', $data);
    }


    public function add()
    {
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
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data saved');</script>";
            }
            echo "<script>window.location='" . site_url('user') . "';</script>";
        }
    }

    public function edit($id)
    {
        

        $this->form_validation->set_rules('username', 'username', 'required|min_length[5]|callback_user_check');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'password', 'min_length[7]|is_unique[usertab.password]');
            $this->form_validation->set_rules('passconfirm', 'passconfirm', 'matches[password]');
        }

        if ($this->input->post('passconfirm')) {
            $this->form_validation->set_rules('passconfirm', 'passconfirm', 'matches[password]');
        }

        $this->form_validation->set_rules('email', 'email', 'required|callback_email_check');
        $this->form_validation->set_rules('phone', 'phone', 'required|callback_phone_check');

        $this->form_validation->set_message('is_unique', '%s is already in use');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->user_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/user_form_edit', $data);
            } else {
                echo "<script>alert('Data Filed');</script>";

                echo "<script>window.location='" . site_url('user') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data saved');</script>";
            }
            echo "<script>window.location='" . site_url('user') . "';</script>";
        }
    }

    function user_check() {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM usertab WHERE username  = '$post[username]' AND user_id != '$post[user_id]'");
        if($query->num_rows() > 0) {
            $this->form_validation->set_message('user_check', '%s is already in use');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function email_check() {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM usertab WHERE email = '$post[email]' AND user_id != '$post[user_id]'");
        if($query->num_rows() > 0) {
            $this->form_validation->set_message('email_check', '%s is already in use');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function phone_check() {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM usertab WHERE phone = '$post[phone]'AND user_id != '$post[user_id]' ");
        if($query->num_rows() > 0) {
            $this->form_validation->set_message('phone_check', '%s is already in use');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function del()
    {
        $id = $this->input->post('user_id');
        $this->user_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data deleted');</script>";
        }
        echo "<script>window.location='" . site_url('user') . "';</script>";
    }
}
