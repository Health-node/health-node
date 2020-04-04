<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Common extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    function get_appointments()
    {
        extract($_REQUEST);
        $token = $this->luser->data->token;
        $params = array(
            "composer_token" => $this->luser->data->composer_token,
            "Patient" => $patient_name
        );
        $url = "api/users/appointments/list";
        $appointments = post_curl($url, $params, $token);
        // echo '<pre>';
        // print_r($appointments);exit;
        if (count($appointments->data) > 0) {
            $html = '<option value="">Select Appointment</option>';
            foreach ($appointments->data as $a) {
                $html .= '<option value="' . $a->AppointmentID . '">' . $a->AppointmentID . " " . date("Y-m-d H:i:s", strtotime($a->AppointmentTime)) . '</option>';
            }
        } else {
            $html = '<option value="">No Appointments Found</option>';
        }
        echo json_encode(array("result" => "success", "msg" => "Success", "html" => $html));
    }


    function get_visits()
    {
        extract($_REQUEST);
        $token = $this->luser->data->token;
        $params = array(
            "composer_token" => $this->luser->data->composer_token,
            "Patient" => $patient_name
        );
        $url = "api/users/getVisits";
        $visits = post_curl($url, $params, $token);
        if (count($visits->data) > 0) {
            $html = '<option value="">Select Visit</option>';
            foreach ($visits->data as $v) {
                $html .= '<option value="' . $v->VisitID . '"  >' . $v->VisitID .  date("Y-m-d H:i:s", strtotime($v->Visit_Date)) . '</option>';
            }
        } else {
            $html = '<option value="">No Visits Found</option>';
        }
        echo json_encode(array("result" => "success", "msg" => "Success", "html" => $html));
    }
}
