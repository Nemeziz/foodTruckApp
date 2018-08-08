<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/dashboard
	 *	- or -
	 * 		http://example.com/index.php/dashboard/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/dashboard/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		# code...
		parent::__construct();
		$this->load->model('dashboard_model');
		$this->load->helper('url_helper');

		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

		if ($this->isRegistered()) {
			$data['pageTitle'] = 'Dashboard {username}';
			$this->load->view('dashboard/index');
		} else {
			$data['pageTitle'] = 'Registraton';
			$this->load->view('dashboard/register-user',$data);
		}


	}
	public function index() {

	}
	/**
	 * USED IN AJAX REQUEST TO SEE IF THE USER EXISTS ALREADY.
	 * REMEMBER, ALWAYS ECHO RETURENED DATA FOR JSON
	*/
	public function isEmailRegistered() {
		$email = $this->input->post('email');


		$emailResults = $this->dashboard_model->db->query("SELECT id,email FROM users WHERE ((email LIKE ?)) AND deleted = ?",array($email,0))->num_rows();

		if ($emailResults) {
			return true;
		}
	}
	public function isUserRegistered() {
		$username = $this->input->post('username');


		$usernameResults = $this->dashboard_model->db->query("SELECT id,username FROM users WHERE ((username LIKE ?)) AND deleted = ?",array($username,0))->num_rows();

		if ($usernameResults) {
			return true;
		}
	}
	public function register() {


		$username = $this->input->post('username');
		$email 		= $this->input->post('email');
		$data = [$username,$email];
		$error = [];
		if ($this->isEmailRegistered()) {
			$message = ["message"=>"Email in use. Please choose another email!"];
			array_push($error,$message);

		}
		if ($this->isUserRegistered()) {
			$message = ["message"=>"Username in use. Please choose another username!"];
			array_push($error,$message);

		}
		//If an error was returned
		if ($error) {
			echo json_encode($error);
			return false;
		}
		//Anyways, let's get back to registering this person.
		if ($this->dashboard_model->insertData($data)) {
			return true;
		}
	}
	public function isRegistered() {
		return true;
	}
}
