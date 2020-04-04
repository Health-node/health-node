<?php

defined('BASEPATH') or exit('No direct script access allowed');

function get_curl($url = '', $token = "")
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $ip = get_my_id();
    $header = array(
        "pragma:no-cache",
        "cache-control:no-store",
        "User-Agent: $user_agent",
        "Ip-Address: $ip",
        "role: user",
    );
    if ($token != "") {
        array_push($header, "authorization: Bearer $token");
    }
    try {
        $url = END_PONIT_BASE_URL . $url;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => $header,
        ));
        $output = curl_exec($curl);
        $status_code = curl_getinfo($curl);
        if ($status_code['http_code'] == 401) {
            redirect(base_url('base/logout'));
        }
        if (curl_error($curl)) {
            $result = array('status' => 'failure', 'data' => curl_error($curl));
        } else {
            $result = json_decode($output);
        }
        curl_close($curl);
    } catch (Exception $ex) {
        $result = array('status' => 'failure', 'data' => $ex);
    }
    log_message("ERROR", json_encode($url));
    log_message("ERROR", json_encode($result));
    return $result;
}

function post_curl($url = '', $params = array(), $token = "", $method = "POST")
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $ip = get_my_id();
    $header = array(
        "pragma:no-cache",
        "cache-control:no-store",
        "content-type: application/json",
        "User-Agent: $user_agent",
        "Ip-Address: $ip",
        "role: user",
    );
    if ($token != "") {
        array_push($header, "authorization: Bearer $token");
    }
    try {
        $url = END_PONIT_BASE_URL . $url;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => json_encode($params),
            CURLOPT_HTTPHEADER => $header,
        ));
        $output = curl_exec($curl);
        $status_code = curl_getinfo($curl);
        if ($status_code['http_code'] == 401) {
            // redirect(base_url('base/logout'));
        }
        if (curl_error($curl)) {
            $result = array('status' => 'failure', 'data' => curl_error($curl));
        } else {
            $result = json_decode($output);
        }
        curl_close($curl);
    } catch (Exception $ex) {
        $result = array('status' => 'failure', 'data' => $ex);
    }
    log_message("DEBUG", $url);
    log_message("DEBUG", json_encode($params));
    log_message("DEBUG", json_encode($result));
    return $result;
}



function get_my_id()
{
    $ip = getenv('HTTP_CLIENT_IP') ?: getenv('HTTP_X_FORWARDED_FOR') ?: getenv('HTTP_X_FORWARDED') ?: getenv('HTTP_FORWARDED_FOR') ?: getenv('HTTP_FORWARDED') ?: getenv('REMOTE_ADDR');
    return $ip;
}