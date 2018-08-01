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

	}
	public function index(){
		$data['pageTitle'] = 'Dashboard';

		$this->load->view('dashboard/index',$data);
	}
	/**
	 * USED IN AJAX REQUEST TO SEE IF THE USER EXISTS ALREADY.
	 * REMEMBER, ALWAYS ECHO RETURENED DATA FOR JSON
	*/
	public function isEmailRegistered() {
		$email = $this->input->post('email');


		$emailResults = $this->dashboard_model->db->query("SELECT id,email FROM users WHERE ((email LIKE ?)) AND deleted = ?",array($email,0))->num_rows();

		// echo "Hello, World {$emailResults}";die;
		if ($emailResults) {
			echo json_encode(["error"=>"Email Registered! Please choose another name"]);
		}


	}
	public function isUserRegistered($username) {

		$users = $this->dashboard_model->db->query("SELECT id,username FROM users WHERE ((username LIKE ?)) AND deleted = ?",array($username,0))->num_rows();

		if ($users) {
			echo json_encode(["error"=>"User Exists! Please choose another name"]);
		}
	}
	public function register() {


		$username = $this->input->post('username');
		$email 		= $this->input->post('email');


		if ($this->isEmailRegistered($email)){
			$messages = ['error'=>"Email Alreay Exists. Please choose another Email."];
			echo json_encode($messages);

		}
		if ($this->isUserRegistered($username)){
			$messages = ['error'=>"Username Alreay Exists. Please choose another username."];
			echo json_encode($messages);

		}
		// return json_encode(true);
		// if (isUserRegistered($username, $email){
		// 	return json_encode("This user already exists");
		// })
		// return json_encode(array('mitchell','edwin','jolivette'));
	}
}
