<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('account');
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
        $params['phone'] = $post['phone'];
        $params['address'] = $post['address'];
        $this->db->insert('account', $params);
    }
    
    public function del($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('account');
    }

}