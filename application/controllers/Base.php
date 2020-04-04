<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Base extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function logout()
    {
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent') {
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();
        redirect(base_url('login'), 'refresh');
    }
}
