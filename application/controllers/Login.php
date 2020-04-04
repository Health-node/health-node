<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (is_object($this->session->userdata(SESSION_NAME))) {
			// echo '<pre>';
			// print_r($this->session->userdata(SESSION_NAME));exit;
			if (($this->session->userdata(SESSION_NAME))->data->userType == "composer") {
				redirect(base_url('admin'));
			} else if (($this->session->userdata(SESSION_NAME))->data->userType == "Patient") {
				redirect(base_url('patient/patient_dashboard'));
			}
		}
	}

	public function index()
	{
		$this->session->unset_userdata('reset_password_session');
		$this->load->view('auth/login');
		$this->load->view('includes/footer');
	}
	public function signup()
	{
		// $this->load->view('includes/header');
		$this->load->view('auth/sign_up');
		$this->load->view('includes/footer');
	}
	public function forgot()
	{
		// $this->load->view('includes/header');
		$this->load->view('auth/forgot_password');
	}
	public function new_password()
	{
		$key = $this->uri->segment(3);
		$this->load->view('auth/new_password', array("key" => $key));
		$this->load->view('includes/footer');
	}

	public function user_reg()
	{
		extract($_REQUEST);
		// print_r($_REQUEST);exit;
		$err = "";
		if (!isset($full_name) || trim($full_name) == "") {
			$err .= " full name is required and Missing.";
		}
		if (!isset($mobile) || trim($mobile) == "") {
			$err .= " mobile is required and Missing.";
		}
		if (!isset($email) || trim($email) == "") {
			$err .= " email is required and Missing.";
		}
		if (!isset($password) || trim($password) == "") {
			$err .= " password is required and Missing.";
		}
		if (!isset($c_password) || trim($c_password) == "") {
			$err .= " c_Password is required and Missing.";
		}
		if (!isset($dob) || trim($dob) == "") {
			$err .= " DOB is required and Missing.";
		}
		if (!isset($bank_account) || trim($bank_account) == "") {
			$err .= " Bank account is required and Missing.";
		}
		if (!isset($medical_record_no) || trim($medical_record_no) == "") {
			$err .= "Medical record no is required and Missing.";
		}
		if (!isset($health_plan_benificiary_no) || trim($health_plan_benificiary_no) == "") {
			$err .= "health plan benificiary no is required and Missing.";
		}
		if (!isset($driving_license) || trim($driving_license) == "") {
			$err .= "driving license no is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {
			$params = array(
				'Name' => $full_name,
				'Email_ID' => $email,
				'password' => $password,
				'Mobile_No' => $mobile,
				'DOB' => $dob,
				'Bank_Account' => $bank_account,
				'Medical_Record_Number' => $medical_record_no,
				'Health_Plan_Beneficiary_Number' => $health_plan_benificiary_no,
				'Certificate_Or_License_Number' => $driving_license,
				'PAN_Number' => $pan_number,
				'Passport_Number' => $passport_number,
				'AADHAAR_Card' => $aadhar_number,
				'Voter_ID_Card' => $voter_id,
				'Address' => $address,
				'role' => 'Patient'
			);
			$url = "api/users/register";
			$reg = post_curl($url, $params);
			// print_r($reg);exit;
			if (isset($reg->status)) {
				if ($reg->status == 'success') {
					$this->session->set_flashdata('msg', $reg->msg);
					$url = "";
					$url = base_url() . "login/index";
					$result = array("status" => 'success', "msg" => $reg->msg, "url" => $url);
				} else {
					$err = $reg->msg;
					$this->session->set_flashdata('err', $reg->msg);
					$result = array("status" => 'failure', "msg" => $err, "errors" => $err);
				}
			} else {
				$err = "Something went wrong!";
				$this->session->set_flashdata('err', $err);
				$result = array("status" => 'failure', "msg" => $err, "errors" => $err);
			}
		}

		echo json_encode($result);
	}


	public function user_auth()
	{
		extract($_REQUEST);
		$err = "";
		if (!isset($email) || trim($email) == "") {
			$err .= " Email is required and Missing.";
		}

		if (!isset($password) || trim($password) == "") {
			$err .= " Password is required and Missing.";
		}

		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {
			// $username = strtolower($username);
			$params = array(
				'email' => $email,
				'password' => $password,
			);
			$url = "api/users/login";
			$login = post_curl($url, $params);
			if (isset($login->status)) {
				if ($login->status == 'success') {
					$token = $login->data->token;
					$this->session->set_userdata(SESSION_NAME, $login, $token);
					$url = "";
					if ($login->data->userType == 'composer') {
						$url = base_url() . "admin/index";
					} elseif ($login->data->userType == 'Patient') {
						$url = base_url() . "patient/patient_dashboard";
					}
					$result = array("status" => 'success', "msg" => $login->msg, "url" => $url);
				} else {
					$err = $login->msg;
					$result = array("status" => 'failure', "msg" => $err, "errors" => $err);
				}
			} else {
				$err = "Something went wrong!";
				$result = array("status" => 'failure', "msg" => $err, "errors" => $err);
			}
		}

		echo json_encode($result);
	}

	function forgot_password()
	{
		extract($_REQUEST);
		$err = '';
		if (!isset($email) || trim($email) == "") {
			$err .= " email is required and Missing.";
		}

		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {
			$params = array(
				'email' => $email,
			);
			$url = "api/users/forgotPassword";
			$forgot_password = post_curl($url, $params);
			if (isset($forgot_password->status)) {
				if ($forgot_password->status == 'success') {
					$this->session->set_flashdata('msg', $forgot_password->msg);
					redirect(base_url('login/forgot/'));
					$result = array("status" => 'success', "msg" => $forgot_password->msg);
				} else {
					$err = $forgot_password->msg;
					$this->session->set_flashdata('err', $err);
					redirect(base_url('login/forgot/'));
					$result = array("status" => 'success', "msg" => $forgot_password->msg);
				}
			} else {
				$this->session->set_flashdata('err', $forgot_password->msg);
				redirect(base_url('login/forgot/'));
				$result = array("status" => 'success', "msg" => $forgot_password->msg);
			}
		}
		echo json_encode($result);
	}

	function change_password()
	{

		extract($_REQUEST);
		$err = '';
		if (!isset($password) || trim($password) == "") {
			$err .= " Password is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
			$this->session->set_flashdata('err', "Please Check Errors");
		} else {
			// $keys = $this->session->userdata('key');
			$key = $this->uri->segment(3);
			if ($key != '') {
				$params = array(
					'password' => $password,
					'key' => $key
				);

				$url = "api/users/setPassword";
				$set_password = post_curl($url, $params, "", "PUT");
				if (isset($set_password->status)) {
					if ($set_password->status == 'success') {
						$msg = $set_password->msg;
						$result = array("result" => "success", "msg" =>  'success', "html" => $html);
						$this->session->set_flashdata('msg', $msg);
						redirect(base_url('login'));
					} else {
						$msg = $set_password->status;
						$this->session->set_flashdata('msg', $msg);
						$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
					}
				} else {
					$msg = "Somthing went wrong!";
					$this->session->set_flashdata('msg', $msg);
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Key is missing";
				$this->session->set_flashdata('msg', $msg);
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		redirect(base_url('login/new_password'));
	}
}
