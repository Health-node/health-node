<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Patient extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
	}



	public function patient_dashboard()
	{
		$appointment = $this->get_appointment_list();
		$vitals = $this->vital_reports();
		$allergy_report = $this->allergy_list();
		$diagnosis_report = $this->diagnosis_list();
		$medication_list = $this->medication_list();
		// echo '<pre>';
		// print_r((reset($vitals)));
		// exit;
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('patient/dashboard', array("appointment" => json_encode($appointment), "vitals" => reset($vitals), "allergy_report" => $allergy_report, "diagnosis_report" => $diagnosis_report, "medication_list" => $medication_list));
		$this->load->view('includes/footer');
	}
	public function patient_report()
	{

		$vital_report = $this->vital_reports();
		// echo '<pre>';
		// print_r($vital_report);exit;
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('patient/reports/vitals_report', array("vital_report" => $vital_report));
		$this->load->view('includes/footer');
	}
	public function allergy_report()
	{

		$allergy_report = $this->allergy_list();
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('patient/reports/allergy_report', array("allergy_report" => $allergy_report));
		$this->load->view('includes/footer');
	}
	public function immunizations_Reports()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token
		);
		$url = "api/users/immunizationReports";
		$immunizations_Reports = post_curl($url, $params, $token);
		if (isset($immunizations_Reports->status)) {
			if ($immunizations_Reports->status == 'success') {
				$immunizations_Reports = $immunizations_Reports->data;
			} else {
				$immunizations_Reports = array();
			}
		}
		// echo '<pre>';
		// print_r($immunizations_Reports);exit;
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('patient/reports/immunizations_Reports', array("immunizations_reports" => $immunizations_Reports));
		$this->load->view('includes/footer');
	}
	public function diagnosis_Reports()
	{
		$diagnosis_report = $this->diagnosis_list();
		// print_r($patient_report);exit;
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('patient/reports/diagnosis_Reports', array("diagnosis_reports" => $diagnosis_report));
		$this->load->view('includes/footer');
	}

	public function patient_transaction()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('patient/transaction');
		$this->load->view('includes/footer');
	}


	public function patient_apponintment_list()
	{
		$is_ajax = 0;
		$appointments = $this->get_appointment_list();
		// echo '<pre>';
		// print_r($appointments);exit;
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('patient/appointment/appointment_list', array("appointments" => $appointments, "is_ajax" => $is_ajax));
		$this->load->view('includes/footer');
	}

	// public function patient_pending_apponintments()
	// {
	// 	$token = $this->luser->data->token;
	// 	$params = array(
	// 		"composer_token" => $this->luser->data->composer_token,
	// 	);
	// 	$url = "api/users/getPrescriptions";
	// 	$prescription_list = post_curl($url, $params, $token);
	// 	if (isset($prescription_list->status)) {
	// 		if ($prescription_list->status == 'success') {
	// 			$prescription_list = $prescription_list->data;
	// 		} else {
	// 			$prescription_list = array();
	// 		}
	// 	}
	// 	$this->load->view('includes/header');
	// 	$this->load->view('includes/leftmenu');
	// 	$this->load->view('patient/appointment/pending_appointments');
	// 	$this->load->view('includes/footer');
	// }

	public function prescription_view()
	{
		$visit_id = $this->uri->segment(3);
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
			"Visit" => $visit_id
		);
		$url = "api/users/getPrescriptions";
		$prescription_list = post_curl($url, $params, $token);
		// echo '<pre>';
		// print_r($prescription_list);exit;
		if (isset($prescription_list->status)) {
			if ($prescription_list->status == 'success') {
				$prescription_list = $prescription_list->data;
			} else {
				$prescription_list = array();
			}
		}
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('patient/prescription/prescription_view', array("prescription_list" => $prescription_list));
		$this->load->view('includes/footer');
	}

	public function visits_list()
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
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('patient/visits_list', array('visits_list' => $visits_list));
		$this->load->view('includes/footer');
	}

	public function doctors_view()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
		);
		$url = "api/users/doctors";
		$doctors = post_curl($url, $params, $token);
		// echo '<pre>';
		// print_r($doctors);exit;
		if (isset($doctors->status)) {
			if ($doctors->status == 'success') {
				$doctors = $doctors->data;
			} else {
				$doctors = array();
			}
		}
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('patient/doctor/doctors_view', array("doctors" => $doctors));
		$this->load->view('includes/footer');
	}

	public function blood_bank_view()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('patient/blood_bank_view');
		$this->load->view('includes/footer');
	}


	public function admit_history()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
		);
		$url = "api/users/getAdmits";
		$admits = post_curl($url, $params, $token);
		// echo '<pre>';
		// print_r($admits);exit;
		if (isset($admits->status)) {
			if ($admits->status == 'success') {
				$admits = $admits->data;
			} else {
				$admits = array();
			}
		}

		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('patient/admit_history_view', array("admits" => $admits));
		$this->load->view('includes/footer');
	}


	public function operation_history()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
		);
		$url = "api/users/getOperation";
		$operations = post_curl($url, $params, $token);
		// echo '<pre>';
		// print_r($operations);exit;
		if (isset($operations->status)) {
			if ($operations->status == 'success') {
				$operations = $operations->data;
			} else {
				$operations = array();
			}
		}
		$this->load->view('includes/header');
		$this->load->view('includes/leftmenu');
		$this->load->view('patient/operation_history_view', array("operations" => $operations));
		$this->load->view('includes/footer');
	}

	public function apply_oppointment_popup()
	{
		$params = array(
			"composer_token" => $this->luser->data->composer_token
		);
		$url = "api/users/doctors";
		$token = $this->luser->data->token;
		$doctors = post_curl($url, $params, $token);
		$html = $this->load->view("patient/appointment/apply_appointment_popup", array("doctors" => $doctors->data), true);
		echo json_encode(array("result" => "success", "msg" => "Success", "html" => $html));
	}

	public function apply_appointment()
	{
		extract($_REQUEST);

		$err = '';
		if (!isset($doctor_id) || trim($doctor_id) == "") {
			$err .= " Doctor Id is required and Missing.";
		}
		if (!isset($appointment_time) || trim($appointment_time) == "") {
			$err .= " Appointment time is required and Missing.";
		}
		if (strlen(trim($err)) > 0) {
			$result = array('result' => 'false', 'msg' => "Please Check Errors", "errors" => $err);
		} else {
			// $gmt_date = gmdate('Y-m-d H:i:s', strtotime($appointment_time) );
			// $given = new DateTime($appointment_time);
			// $given->setTimezone(new DateTimeZone("UTC"));
			// $gmt_date =  $given->format("Y-m-d H:i:s");
			// $gmt_date = date("Y-m-d\TH:i:s.000\Z", strtotime($appointment_time));
			$gmt_date = str_replace('+00:00', 'Z', gmdate('c', strtotime($appointment_time)));
			// print_r($gmt_date);exit;
			$params = array(
				"doctor_id" => $doctor_id,
				"appointment_time" => $gmt_date,
				"composer_token" => $this->luser->data->composer_token
			);
			$url = "api/users/appointment";
			$token = $this->luser->data->token;
			$appointment = post_curl($url, $params, $token);
			if (isset($appointment->status)) {
				if ($appointment->status == 'success') {
					$msg = $appointment->status;
					$is_ajax = 1;
					$appointments = $this->get_appointment_list();
					$html = $this->load->view("patient/appointment/appointment_list", array("appointments" => $appointments, "is_ajax" => $is_ajax), true);
					$result = array("result" => "success", "msg" =>  'Appointment applied successfully', "html" => $html);
				} else {
					$msg = $appointment->status;
					$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
				}
			} else {
				$msg = "Somthing went wrong!";
				$result = array("status" => 'failure', "msg" => $msg, "html" => $msg);
			}
		}
		echo json_encode($result);
	}

	public function get_appointment_list()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token
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

	public function get_calender_appointment_list()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token
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
		echo json_encode($appointment_list);
	}


	function vital_reports()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token
		);
		$url = "api/users/vitalsReports";
		$vital_report = post_curl($url, $params, $token);
		if (isset($vital_report->status)) {
			if ($vital_report->status == 'success') {
				$vital_report = $vital_report->data;
			} else {
				$vital_report = array();
			}
		}
		return $vital_report;
	}


	function allergy_list()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token
		);
		$url = "api/users/reports";
		$allergy_report = post_curl($url, $params, $token);
		if (isset($allergy_report->status)) {
			if ($allergy_report->status == 'success') {
				$allergy_report = $allergy_report->data;
			} else {
				$allergy_report = array();
			}
		}
		return $allergy_report;
	}

	function diagnosis_list()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token
		);
		$url = "api/users/problemReports";
		$diagnosis_report = post_curl($url, $params, $token);
		if (isset($diagnosis_report->status)) {
			if ($diagnosis_report->status == 'success') {
				$diagnosis_report = $diagnosis_report->data;
			} else {
				$diagnosis_report = array();
			}
		}
		return $diagnosis_report;
	}

	function medication_list()
	{
		$token = $this->luser->data->token;
		$params = array(
			"composer_token" => $this->luser->data->composer_token,
		);
		$url = "api/users/getPrescriptions";
		$prescription_list = post_curl($url, $params, $token);
		if (isset($prescription_list->status)) {
			if ($prescription_list->status == 'success') {
				$prescription_list = $prescription_list->data;
			} else {
				$prescription_list = array();
			}
		}
		return $prescription_list;
	}
}
