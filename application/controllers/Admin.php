<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$is_ajax = 0;
		$users = $this->get_pending_users();
		// echo '<pre>';
		// print_r($users);exit;
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/dashboard', array("users" => $users, "is_ajax" => $is_ajax));
		$this->load->view('includes/footer');
	}
	public function report()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
		);
		$url = "api/users/patients";
		$patients = post_curl($url, $params, $token);
		if (isset($patients->status)) {
			if ($patients->status == 'success') {
				$patients = $patients->data;
			} else {
				$patients = array();
			}
		}
		$visits = $this->get_visits();
		// echo '<pre>';
		// print_r($patients);exit;
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/reports/vital_report', array("patients" => $patients, "visits" => $visits));
		$this->load->view('includes/footer');
	}
	public function allergy_report()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
		);
		$url = "api/users/patients";
		$patients = post_curl($url, $params, $token);
		if (isset($patients->status)) {
			if ($patients->status == 'success') {
				$patients = $patients->data;
			} else {
				$patients = array();
			}
		}
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/reports/allergy_report', array("patients" => $patients));
		$this->load->view('includes/footer');
	}
	public function immunizations_report()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
		);
		$url = "api/users/patients";
		$patients = post_curl($url, $params, $token);
		if (isset($patients->status)) {
			if ($patients->status == 'success') {
				$patients = $patients->data;
			} else {
				$patients = array();
			}
		}
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/reports/immunizations_report', array("patients" => $patients));
		$this->load->view('includes/footer');
	}
	public function diagnosis_report()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
		);
		$url = "api/users/patients";
		$patients = post_curl($url, $params, $token);
		if (isset($patients->status)) {
			if ($patients->status == 'success') {
				$patients = $patients->data;
			} else {
				$patients = array();
			}
		}
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/reports/diagnosis_report', array("patients" => $patients));
		$this->load->view('includes/footer');
	}

	public function transactions()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" =>  $this->luser->data->composer_token
		);
		$url = "api/users/transactions";
		$transactions = post_curl($url, $params, $token);
		if (isset($transactions->status)) {
			if ($transactions->status == 'success') {
				$transactions = $transactions->data;
			} else {
				$transactions = array();
			}
		}
		// echo '<pre>';
		// print_r($transactions);exit;
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/transactions', array("transactions" => $transactions));
		$this->load->view('includes/footer');
	}

	public function get_pending_users()
	{
		$token = $this->luser->data->token;
		$params = array();
		$url = "api/users/pendingUsers";
		$pending_users = post_curl($url, $params, $token);
		if (isset($pending_users->status)) {
			if ($pending_users->status == 'success') {
				$pending_users = $pending_users->data;
			} else {
				$pending_users = array();
			}
		}
		return $pending_users;
	}

	public function approve_user()
	{
		extract($_REQUEST);
		$err = '';
		if (!isset($_id) || trim($_id) == "") {
			$err .= " Id is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {
			$params = array(
				'composer_token' => $this->luser->data->composer_token,
				'id' => $_id,
			);
			$url = "api/users/approveUser";
			$token = $this->luser->data->token;
			// print_r($token);exit;		
			$user_info = post_curl($url, $params, $token);
			if (isset($user_info->status)) {
				if ($user_info->status == 'success') {
					$msg = $user_info->status;
					$dashboard_info = $this->get_pending_users();
					$is_ajax = 1;
					$this->session->set_flashdata('msg', "User registered successfully");
					$html = $this->load->view("admin/dashboard", array("users" => $dashboard_info, "is_ajax" => $is_ajax), true);
					$result = array("result" => "success", "msg" =>  'success', "html" => $html);
				} else {
					$msg = $user_info->status;
					$this->session->set_flashdata('err', $user_info->status);
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Somthing went wrong!";
				$this->session->set_flashdata('err', $msg);
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		echo json_encode($result);
	}


	public function save_patient_report()
	{
		extract($_REQUEST);
		$err = '';
		if (!isset($patient_name) || trim($patient_name) == "") {
			$err .= " patient_name is required and Missing.";
		}
		if (!isset($allergy_name) || trim($allergy_name) == "") {
			$err .= " allergy_name is required and Missing.";
		}
		if (!isset($allergy_type) || trim($allergy_type) == "") {
			$err .= " allergy_type is required and Missing.";
		}
		if (!isset($location) || trim($location) == "") {
			$err .= " location is required and Missing.";
		}
		if (!isset($reaction) || trim($reaction) == "") {
			$err .= " reaction is required and Missing.";
		}
		if (!isset($drug_class) || trim($drug_class) == "") {
			$err .= " drug_class is required and Missing.";
		}
		if (!isset($observed) || trim($observed) == "") {
			$err .= " observed is required and Missing.";
		}
		if (!isset($visit) || trim($visit) == "") {
			$err .= " visit is required and Missing.";
		}
		if (!isset($comments) || trim($comments) == "") {
			$err .= " comments is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {

			$params = array(
				'composer_token' => $this->luser->data->composer_token,
				'Allergy_Name' => $allergy_name,
				'Allergy_Type' => $allergy_type,
				'location' => $location,
				'Reaction' => $reaction,
				'Drug_Class' => $drug_class,
				'ObservedOrHistorical' => $observed,
				'Visit' => $visit,
				'Comments' => $comments,
				'Patient' => 'org.clinicaltrials.Patient#' . $patient_name
			);
			$url = "api/users/insertReport";
			$token = $this->luser->data->token;
			$patient_info = post_curl($url, $params, $token);
			// echo '<pre>';
			// print_r($patient_info);exit;
			if (isset($patient_info->status)) {
				if ($patient_info->status == 'success') {
					$this->session->set_flashdata('msg', $patient_info->msg . ' into blockchain. Transaction id: ' . $patient_info->data->transactionId);
				} else {
					$msg = $patient_info->msg;
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Somthing went wrong!";
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		echo json_encode($result);
		redirect(base_url() . "admin/report");
	}

	function transactions_view_popup()
	{
		extract($_REQUEST);
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
			"transaction_id" => $transactionId
		);
		$url = "api/users/transactions";
		$single_transaction = post_curl($url, $params, $token);
		if (isset($single_transaction->status)) {
			if ($single_transaction->status == 'success') {
				$single_transaction = $single_transaction->data;
			} else {
				$single_transaction = array();
			}
		}
		// echo '<pre>';
		// print_r($single_transaction);exit;
		$html = $this->load->view("admin/transactions_popup", array("single_transaction" => $single_transaction), true);
		echo json_encode(array("result" => "success", "msg" => "Success", "html" => $html));
	}

	function pending_user_popup()
	{
		extract($_REQUEST);
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
			"_id" => $_id
		);
		$url = "api/users/pendingUsers";
		$pending = post_curl($url, $params, $token);
		if (isset($pending->status)) {
			if ($pending->status == 'success') {
				$pending = $pending->data;
			} else {
				$pending = array();
			}
		}
		// echo '<pre>';
		// print_r($pending[0]);exit;
		$html = $this->load->view("admin/pending_users_popup", array("pending" => $pending), true);
		echo json_encode(array("result" => "success", "msg" => "Success", "html" => $html));
	}


	function reject_user()
	{
		extract($_REQUEST);
		$err = '';
		if (!isset($_id) || trim($_id) == "") {
			$err .= " Id is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'false', 'msg' => "Please Check Errors", "errors" => $err);
		} else {
			$params = array();
			$url = "api/users/rejectUser/$_id";
			$token = $this->luser->data->token;
			$dashboard_info = post_curl($url, $params, $token, "PUT");
			// echo '<pre>';
			// print_r($dashboard_info);exit;
			if (isset($dashboard_info->status)) {
				if ($dashboard_info->status == 'success') {
					$msg = $dashboard_info->status;
					$dashboard = $this->get_pending_users();
					$is_ajax = 1;
					$this->session->set_flashdata('msg', "Rejected successfully..!");
					$html = $this->load->view("admin/dashboard", array("users" => $dashboard, "is_ajax" => $is_ajax), true);
					$result = array("result" => "success", "msg" =>  'success', "html" => $html);
				} else {
					$msg = $dashboard_info->status;
					$this->session->set_flashdata('err', $msg);
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Somthing went wrong!";
				$this->session->set_flashdata('err', $msg);
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		echo json_encode($result);
	}

	function register_patient_view()
	{
		// echo '<pre>';
		// print_r($this->luser->data);
		// exit;
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/register_patient');
		$this->load->view('includes/footer');
	}

	function register_patient()
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
			$token = $this->luser->data->token;
			$params = array(
				'Name' => $full_name,
				'Email_ID' => trim($email),
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
				'role' => 'Patient',
				"composer_token" => $this->luser->data->composer_token,
			);
			// echo '<pre>';
			// print_r($token);
			// print_r($params);
			// exit;
			$url = "api/users/addUser";
			$reg = post_curl($url, $params, $token);
			// print_r($reg);exit;
			if (isset($reg->status)) {
				if ($reg->status == 'success') {
					$this->session->set_flashdata('msg', $reg->msg);
				} else {
					$err = $reg->msg;
					$this->session->set_flashdata('err', $err);
				}
			} else {
				$err = "Something went wrong!";
				$this->session->set_flashdata('err', $err);
			}
		}
		redirect(base_url() . "admin/register_patient_view");
	}

	function patient_admission()
	{
		$patients = $this->get_patients();
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/patient_admission', array("patients" => $patients));
		$this->load->view('includes/footer');
	}

	function in_patient_list()
	{
		$is_ajax = 0;
		$in_patients = $this->get_in_patients();
		// echo '<pre>';
		// print_r($in_patients);exit;
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/in_patients', array('in_patients' => $in_patients, "is_ajax" => $is_ajax));
		$this->load->view('includes/footer');
	}

	function out_patient_list()
	{
		$visits_list = $this->get_visits();
		// echo '<pre>';
		// print_r($visits_list);
		// exit;
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/out_patients', array("visits_list" => $visits_list));
		$this->load->view('includes/footer');
	}

	function doctors_list()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/doctors_list');
		$this->load->view('includes/footer');
	}

	function operation()
	{
		$patients = $this->get_patients();
		$doctors = $this->get_doctors();
		$visits = $this->get_visits();
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/operation', array("patients" => $patients, "doctors" => $doctors, "visits" => $visits));
		$this->load->view('includes/footer');
	}


	public function get_patient_appointment_list()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
		);
		$url = "api/users/appointments/list";
		$appointment_list = post_curl($url, $params, $token);


		if (isset($appointment_list->status)) {
			if ($appointment_list->status == 'success') {
				$appointment_list = $appointment_list->data;
			} else {
				$appointment_list = array();
			}
		}
		return $appointment_list;
	}



	function patient_appointment_list()
	{
		$is_ajax = 0;
		$appointments = $this->get_patient_appointment_list();
		// echo '<pre>';
		// print_r($appointments);exit;
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/patient_appointment_list', array("appointment_list" => $appointments, "is_ajax" => $is_ajax));
		$this->load->view('includes/footer');
	}


	function create_visit()
	{
		$patients = $this->get_patients();
		// echo '<pre>';
		// print_r($patients);exit;
		$doctors = $this->get_doctors();
		$appointments = $this->get_patient_appointment_list();
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/create_visit', array("patients" => $patients, "doctors" => $doctors, "appointments" => $appointments));
		$this->load->view('includes/footer');
	}
	function prescription()
	{
		$patients = $this->get_patients();
		$doctors = $this->get_doctors();
		$visits = $this->get_visits();
		// echo '<pre>';
		// print_r($visits);exit;
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('admin/prescription', array("patients" => $patients, "doctors" => $doctors, "visits" => $visits));
		$this->load->view('includes/footer');
	}


	public function approve_appointment()
	{
		extract($_REQUEST);
		$err = '';
		if (!isset($AppointmentID) || trim($AppointmentID) == "") {
			$err .= " AppointmentID is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {
			$params = array(
				'composer_token' => $this->luser->data->composer_token,
				'status' => 'ACTIVE',
			);
			$url = "api/users/appointment/$AppointmentID";
			$token = $this->luser->data->token;
			$appointment_info = post_curl($url, $params, $token, "PUT");
			if (isset($appointment_info->status)) {
				if ($appointment_info->status == 'success') {
					$msg = $appointment_info->status;
					$appointments = $this->get_patient_appointment_list();
					$is_ajax = 1;
					$html = $this->load->view("admin/patient_appointment_list", array("appointment_list" => $appointments, "is_ajax" => $is_ajax), true);
					$result = array("result" => "success", "msg" =>  'Appointment Approved successfully', "html" => $html);
				} else {
					$msg = $appointment_info->status;
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Somthing went wrong!";
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		echo json_encode($result);
	}


	function get_patients()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
		);
		$url = "api/users/patients";
		$patients_list = post_curl($url, $params, $token);
		if (isset($patients_list->status)) {
			if ($patients_list->status == 'success') {
				$patients_list = $patients_list->data;
			} else {
				$patients_list = array();
			}
		}
		return $patients_list;
	}


	function admit_patient()
	{
		extract($_REQUEST);
		// print_r($_REQUEST);exit;
		$err = "";
		if (!isset($patient_name) || trim($patient_name) == "") {
			$err .= " patient name is required and Missing.";
		}
		if (!isset($bed_type) || trim($bed_type) == "") {
			$err .= " bed type is required and Missing.";
		}
		if (!isset($room_no) || trim($room_no) == "") {
			$err .= " room no is required and Missing.";
		}
		if (!isset($date_of_admit) || trim($date_of_admit) == "") {
			$err .= " date of admit is required and Missing.";
		}
		if (!isset($description) || trim($description) == "") {
			$err .= " description is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {
			$token = $this->luser->data->token;
			$gmt_date = str_replace('+00:00', 'Z', gmdate('c', strtotime($date_of_admit)));
			$params = array(
				'patient_id' => $patient_name,
				'BedType' => $bed_type,
				'room_no' => $room_no,
				'admit_date' => $gmt_date,
				'description' => $description,
				"composer_token" => $this->luser->data->composer_token,
			);
			$url = "api/users/admit";
			$reg = post_curl($url, $params, $token);
			// print_r($reg);exit;
			if (isset($reg->status)) {
				if ($reg->status == 'success') {
					$this->session->set_flashdata('msg', $reg->msg);
				} else {
					$err = $reg->msg;
					$this->session->set_flashdata('err', $err);
				}
			} else {
				$err = "Something went wrong!";
				$this->session->set_flashdata('err', $err);
			}
		}
		redirect(base_url() . "admin/patient_admission");
	}

	function get_in_patients()
	{

		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
		);
		$url = "api/users/getAdmits";
		$in_patients = post_curl($url, $params, $token);
		if (isset($in_patients->status)) {
			if ($in_patients->status == 'success') {
				$in_patients = $in_patients->data;
			} else {
				$in_patients = array();
			}
		}
		return $in_patients;
	}



	public function discharge_patient()
	{
		extract($_REQUEST);
		$err = '';
		if (!isset($AdmitID) || trim($AdmitID) == "") {
			$err .= " AdmitID is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {
			$params = array(
				'composer_token' => $this->luser->data->composer_token,
			);
			$url = "api/users/dischargePatient/$AdmitID";
			$token = $this->luser->data->token;
			$discharge = post_curl($url, $params, $token, "PUT");
			if (isset($discharge->status)) {
				if ($discharge->status == 'success') {
					$msg = $discharge->status;
					$in_patients = $this->get_in_patients();
					$is_ajax = 1;
					$html = $this->load->view("admin/in_patients", array("in_patients" => $in_patients, "is_ajax" => $is_ajax), true);
					$result = array("result" => "success", "msg" =>  'success', "html" => $html);
				} else {
					$msg = $discharge->status;
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Somthing went wrong!";
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		echo json_encode($result);
	}


	function get_doctors()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
		);
		$url = "api/users/doctors";
		$doctors_list = post_curl($url, $params, $token);
		if (isset($doctors_list->status)) {
			if ($doctors_list->status == 'success') {
				$doctors_list = $doctors_list->data;
			} else {
				$doctors_list = array();
			}
		}
		return $doctors_list;
	}

	function get_visits()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
		);
		$url = "api/users/getVisits";
		$visits_list = post_curl($url, $params, $token);
		if (isset($visits_list->status)) {
			if ($visits_list->status == 'success') {
				$visits_list = $visits_list->data;
			} else {
				$visits_list = array();
			}
		}
		return $visits_list;
	}



	function create_prescription()
	{
		extract($_REQUEST);
		// print_r($_REQUEST);exit;
		$err = "";
		if (!isset($patient_name) || trim($patient_name) == "") {
			$err .= " patient name is required and Missing.";
		}
		if (!isset($bed_type) || trim($bed_type) == "") {
			$err .= " bed type is required and Missing.";
		}
		if (!isset($room_no) || trim($room_no) == "") {
			$err .= " room no is required and Missing.";
		}
		if (!isset($date_of_admit) || trim($date_of_admit) == "") {
			$err .= " date of admit is required and Missing.";
		}
		if (!isset($description) || trim($description) == "") {
			$err .= " description is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {
			$token = $this->luser->data->token;
			$params = array(
				'patient_id' => $patient_name,
				'BedType' => $bed_type,
				'room_no' => $room_no,
				'admit_date' => $date_of_admit,
				'description' => $description,
				"composer_token" => $this->luser->data->composer_token,
			);
			$url = "api/users/admit";
			$reg = post_curl($url, $params, $token);
			// print_r($reg);exit;
			if (isset($reg->status)) {
				if ($reg->status == 'success') {
					$this->session->set_flashdata('msg', $reg->msg);
				} else {
					$err = $reg->msg;
					$this->session->set_flashdata('err', $err);
				}
			} else {
				$err = "Something went wrong!";
				$this->session->set_flashdata('err', $err);
			}
		}
		redirect(base_url() . "admin/patient_admission");
	}


	public function save_prescription()
	{

		extract($_REQUEST);
		$err = '';
		if (!isset($patient_name) || trim($patient_name) == "") {
			$err .= " patient_name is required and Missing.";
		}
		if (!isset($medication) || trim($medication) == "") {
			$err .= " medication is required and Missing.";
		}
		if (!isset($instructions) || trim($instructions) == "") {
			$err .= " instructions is required and Missing.";
		}
		if (!isset($refills_remaining) || trim($refills_remaining) == "") {
			$err .= " refills_remaining is required and Missing.";
		}
		if (!isset($doctor_name) || trim($doctor_name) == "") {
			$err .= " doctor_name is required and Missing.";
		}
		if (!isset($visit) || trim($visit) == "") {
			$err .= " visit is required and Missing.";
		}
		if (!isset($last_filled_on) || trim($last_filled_on) == "") {
			$err .= " last_filled_on is required and Missing.";
		}
		if (!isset($initially_ordered_on) || trim($initially_ordered_on) == "") {
			$err .= " initially_ordered_on is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {

			$params = array(
				'composer_token' => $this->luser->data->composer_token,
				'Patient' => $patient_name,
				'Medication' => $medication,
				'Instructions' => $instructions,
				'Refills_Remaining' => $refills_remaining,
				'Doctor' => $doctor_name,
				'Visit' => $visit,
				'Last_Filled_On' => $last_filled_on,
				'Initially_Ordered_On' =>  $initially_ordered_on
			);
			$url = "api/users/prescription";
			$token = $this->luser->data->token;
			$prescription_info = post_curl($url, $params, $token);
			// echo '<pre>'; 
			// print_r($prescription_info);exit;
			if (isset($prescription_info->status)) {
				if ($prescription_info->status == 'success') {
					$this->session->set_flashdata('msg', $prescription_info->msg . ' into blockchain. Transaction id: ' . $prescription_info->data->transactionId);
				} else {
					$msg = $prescription_info->msg;
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Somthing went wrong!";
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		echo json_encode($result);
		redirect(base_url() . "admin/prescription");
	}

	public function save_visits()
	{

		extract($_REQUEST);
		$err = '';
		if (!isset($patient_name) || trim($patient_name) == "") {
			$err .= " patient_name is required and Missing.";
		}
		if (!isset($description) || trim($description) == "") {
			$err .= " description is required and Missing.";
		}
		if (!isset($doctor_name) || trim($doctor_name) == "") {
			$err .= " doctor_name is required and Missing.";
		}
		if (!isset($appointment) || trim($appointment) == "") {
			$err .= " appointment is required and Missing.";
		}
		if (!isset($appointment_time) || trim($appointment_time) == "") {
			$err .= " appointment_time is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {
			$gmt_date = str_replace('+00:00', 'Z', gmdate('c', strtotime($appointment_time)));
			$params = array(
				'composer_token' => $this->luser->data->composer_token,
				'patient_id' => $patient_name,
				'description' => $description,
				'doctor_id' => $doctor_name,
				'appointment_id' => $appointment,
				'visit_date' => $gmt_date,
			);
			$url = "api/users/visit";
			$token = $this->luser->data->token;
			$visits_info = post_curl($url, $params, $token);
			// echo '<pre>'; 
			// print_r($prescription_info);exit;
			if (isset($visits_info->status)) {
				if ($visits_info->status == 'success') {
					$this->session->set_flashdata('msg', $visits_info->msg . ' into blockchain. Transaction id: ' . $visits_info->data->transactionId);
				} else {
					$msg = $visits_info->msg;
					$this->session->set_flashdata('msg', $msg);
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Somthing went wrong!";
				$this->session->set_flashdata('msg', $msg);
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		echo json_encode($result);
		redirect(base_url() . "admin/create_visit");
	}


	public function save_operation()
	{
		// print_r($_REQUEST);
		// exit;
		extract($_REQUEST);
		$err = '';
		if (!isset($patient_name) || trim($patient_name) == "") {
			$err .= " patient_name is required and Missing.";
		}
		if (!isset($name_of_operation) || trim($name_of_operation) == "") {
			$err .= " name_of_operation is required and Missing.";
		}
		if (!isset($description) || trim($description) == "") {
			$err .= " description is required and Missing.";
		}
		if (!isset($anesthesia) || trim($anesthesia) == "") {
			$err .= " anesthesia is required and Missing.";
		}
		if (!isset($preoperative_diagnosis) || trim($preoperative_diagnosis) == "") {
			$err .= " preoperative_diagnosis is required and Missing.";
		}
		if (!isset($postoperative_diagnosis) || trim($postoperative_diagnosis) == "") {
			$err .= " postoperative_diagnosis is required and Missing.";
		}
		if (!isset($doctor_name) || trim($doctor_name) == "") {
			$err .= " doctor_name is required and Missing.";
		}
		if (!isset($visit) || trim($visit) == "") {
			$err .= " vist is required and Missing.";
		}
		if (!isset($operation_started) || trim($operation_started) == "") {
			$err .= " operation_started is required and Missing.";
		}
		if (!isset($operation_ended) || trim($operation_ended) == "") {
			$err .= " operation_ended is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {

			$params = array(
				'composer_token' => $this->luser->data->composer_token,
				'Patient' => $patient_name,
				'Name_Of_Operation' => $name_of_operation,
				'Description' => $description,
				'Anesthesia' => $anesthesia,
				'PreOperative_Diagnosis' => $preoperative_diagnosis,
				'PostOperative_Diagnosis' => $postoperative_diagnosis,
				'Doctor' => $doctor_name,
				'Visit' => $visit,
				'Operation_Started' => $operation_started,
				'Operation_Ended' => $operation_ended,
			);
			$url = "api/users/operation";
			$token = $this->luser->data->token;
			$operation_info = post_curl($url, $params, $token);
			if (isset($operation_info->status)) {
				if ($operation_info->status == 'success') {
					$this->session->set_flashdata('msg', $operation_info->msg . ' into blockchain. Transaction id: ' . $operation_info->data->transactionId);
				} else {
					$msg = $operation_info->msg;
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Somthing went wrong!";
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		// echo json_encode($result);
		redirect(base_url() . "admin/operation");
	}


	public function save_vital_report()
	{
		extract($_REQUEST);
		$err = '';
		if (!isset($patient_name) || trim($patient_name) == "") {
			$err .= " patient_name is required and Missing.";
		}
		if (!isset($visit) || trim($visit) == "") {
			$err .= " visit is required and Missing.";
		}
		if (!isset($weight) || trim($weight) == "") {
			$err .= " weight is required and Missing.";
		}
		if (!isset($length) || trim($length) == "") {
			$err .= " length is required and Missing.";
		}
		if (!isset($bp_systolic) || trim($bp_systolic) == "") {
			$err .= " bp_systolic is required and Missing.";
		}
		if (!isset($bp_diastolic) || trim($bp_diastolic) == "") {
			$err .= " bp_diastolic is required and Missing.";
		}
		if (!isset($pulse) || trim($pulse) == "") {
			$err .= " pulse is required and Missing.";
		}
		if (!isset($respiration) || trim($respiration) == "") {
			$err .= " visit id is required and Missing.";
		}
		if (!isset($temperature) || trim($temperature) == "") {
			$err .= " temperature is required and Missing.";
		}
		if (!isset($oxygen_saturation) || trim($oxygen_saturation) == "") {
			$err .= " oxygen_saturation is required and Missing.";
		}
		if (!isset($head_circumference) || trim($head_circumference) == "") {
			$err .= " head_circumference is required and Missing.";
		}
		if (!isset($waist_circumference) || trim($waist_circumference) == "") {
			$err .= " waist_circumference is required and Missing.";
		}
		if (!isset($bmi) || trim($bmi) == "") {
			$err .= " bmi is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {

			$params = array(
				'composer_token' => $this->luser->data->composer_token,
				'Weight' => $weight,
				'Length' => $length,
				'BP_Systolic' => $bp_systolic,
				'BP_Diastolic' => $bp_diastolic,
				'Pulse' => $pulse,
				'Respiration' => $respiration,
				'Temperature' => $temperature,
				'Patient' => 'org.clinicaltrials.Patient#' . $patient_name,
				'Visit' => $visit,
				'Oxygen_Saturation' => $oxygen_saturation,
				'Head_Circumference' => $head_circumference,
				'Waist_Circumference' => $waist_circumference,
				'BMI' => $bmi
			);
			$url = "api/users/insertVitalsReport";
			$token = $this->luser->data->token;
			$vital_info = post_curl($url, $params, $token);
			// echo '<pre>';
			// print_r($patient_info);exit;
			if (isset($vital_info->status)) {
				if ($vital_info->status == 'success') {
					$this->session->set_flashdata('msg', $vital_info->msg . ' into blockchain. Transaction id: ' . $vital_info->data->transactionId);
				} else {
					$msg = $vital_info->msg;
					$this->session->set_flashdata('err', $vital_info->msg);
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Somthing went wrong!";
				$this->session->set_flashdata('err', $msg);
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		echo json_encode($result);
		redirect(base_url() . "admin/report");
	}


	public function save_immunization_report()
	{
		extract($_REQUEST);
		$err = '';
		if (!isset($patient_name) || trim($patient_name) == "") {
			$err .= " patient_name is required and Missing.";
		}
		if (!isset($visit) || trim($visit) == "") {
			$err .= " visit is required and Missing.";
		}
		if (!isset($immunization_name) || trim($immunization_name) == "") {
			$err .= " immunization_name is required and Missing.";
		}
		if (!isset($date_recived) || trim($date_recived) == "") {
			$err .= " date_recived is required and Missing.";
		}
		if (!isset($location) || trim($location) == "") {
			$err .= " location is required and Missing.";
		}
		if (!isset($reaction) || trim($reaction) == "") {
			$err .= " reaction is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {

			$params = array(
				'composer_token' => $this->luser->data->composer_token,
				'Immunization_Name' => $immunization_name,
				'Date_Recieved' => $date_recived,
				'Location' => $location,
				'Reaction' => $reaction,
				'Patient' => 'org.clinicaltrials.Patient#' . $patient_name,
				'Visit' => $visit,
			);
			$url = "api/users/insertImmunizationsReport";
			$token = $this->luser->data->token;
			$immunization_info = post_curl($url, $params, $token);
			// echo '<pre>';
			// print_r($patient_info);exit;
			if (isset($immunization_info->status)) {
				if ($immunization_info->status == 'success') {
					$this->session->set_flashdata('msg', $immunization_info->msg . ' into blockchain. Transaction id: ' . $immunization_info->data->transactionId);
				} else {
					$msg = $immunization_info->msg;
					$this->session->set_flashdata('err', $immunization_info->msg);
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Somthing went wrong!";
				$this->session->set_flashdata('err', $msg);
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		echo json_encode($result);
		redirect(base_url() . "admin/immunizations_report");
	}

	public function save_diagnosis_report()
	{
		// print_r($_REQUEST);exit;
		extract($_REQUEST);
		$err = '';
		if (!isset($patient_name) || trim($patient_name) == "") {
			$err .= " patient_name is required and Missing.";
		}
		if (!isset($visit) || trim($visit) == "") {
			$err .= " visit is required and Missing.";
		}
		if (!isset($problem) || trim($problem) == "") {
			$err .= " problem is required and Missing.";
		}
		if (!isset($provider) || trim($provider) == "") {
			$err .= " provider is required and Missing.";
		}
		if (!isset($location) || trim($location) == "") {
			$err .= " location is required and Missing.";
		}
		if (!isset($date_received) || trim($date_received) == "") {
			$err .= " date_received is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
			$this->session->set_flashdata('err', $result->msg);
		} else {
			$params = array(
				'composer_token' => $this->luser->data->composer_token,
				'Problem' => $problem,
				'Provider' => $provider,
				'Location' => $location,
				'Patient' => 'org.clinicaltrials.Patient#' . $patient_name,
				'Visit' => $visit,
				'Date_Recieved' => $date_received
			);
			$url = "api/users/insertProblemReport";
			$token = $this->luser->data->token;
			$diagnose_info = post_curl($url, $params, $token);
			if (isset($diagnose_info->status)) {
				if ($diagnose_info->status == 'success') {
					$this->session->set_flashdata('msg', $diagnose_info->msg . ' into blockchain. Transaction id: ' . $diagnose_info->data->transactionId);
				} else {
					$msg = $diagnose_info->msg;
					$this->session->set_flashdata('err', $diagnose_info->msg);
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Somthing went wrong!";
				$this->session->set_flashdata('err', $msg);
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		echo json_encode($result);
		redirect(base_url() . "admin/diagnosis_report");
	}

	public function reject_appointment()
	{
		extract($_REQUEST);
		$err = '';
		if (!isset($AppointmentID) || trim($AppointmentID) == "") {
			$err .= " AppointmentID is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'failure', 'msg' => "Please Check Errors", "errors" => $err);
		} else {
			$params = array(
				'composer_token' => $this->luser->data->composer_token,
				'status' => 'REJECTED',
			);
			$url = "api/users/appointment/$AppointmentID";
			$token = $this->luser->data->token;
			$appointment_info = post_curl($url, $params, $token, "PUT");
			if (isset($appointment_info->status)) {
				if ($appointment_info->status == 'success') {
					$msg = $appointment_info->status;
					$appointments = $this->get_patient_appointment_list();
					$is_ajax = 1;
					$html = $this->load->view("admin/patient_appointment_list", array("appointment_list" => $appointments, "is_ajax" => $is_ajax), true);
					$result = array("result" => "success", "msg" =>  'success', "html" => $html);
				} else {
					$msg = $appointment_info->status;
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Somthing went wrong!";
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		echo json_encode($result);
	}
}
