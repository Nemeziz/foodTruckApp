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

	public function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('dashboard_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data['pageTitle'] = 'Dashboard';
		$this->load->view('dashboard/index',$data);
	}
	public function loadLocations() {}
	public function loadTrucks() {}

}
