<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    
    public function index()
    {
        $this->template->load('template', 'account/account_data');
    }
}