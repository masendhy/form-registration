<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('usertab');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('usertab');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['username'] = $post['username'];
        $params['email'] = $post['email'];
        $params['password'] = sha1($post['password']);
        $params['start_day'] = $post['startday'];
        $params['end_day'] = $post['endday'];
        $params['phone'] = $post['phone'];
        $params['address'] = $post['address'];
        $params['level'] = $post['level'];
        $this->db->insert('usertab', $params);
    }

    public function del($id)
	{
        $this->db->where('user_id', $id);
        $this->db->delete('usertab');
    }
}
