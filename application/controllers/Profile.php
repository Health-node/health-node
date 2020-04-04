<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    function profile_view()
    {
        $token = $this->luser->data->token;
        $params = array(
            "composer_token" => $this->luser->data->composer_token,
        );
        $url = "api/users/me";
        $profile_info = post_curl($url, $params, $token);
        
        if (isset($profile_info->status)) {
            if ($profile_info->status == 'success') {
                $profile_info = $profile_info->data;
            } else {
                $profile_info = array();
            }
        }
        // echo '<pre>';
        // print_r($profile_info);
        // exit;
        $this->load->view('includes/header');
        $this->load->view('includes/leftmenu');
        $this->load->view('profile/profile_view', array("profile_info" => $profile_info));
        $this->load->view('includes/footer');
    }
}
