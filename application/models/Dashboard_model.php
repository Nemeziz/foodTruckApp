<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public $variable;

	public function __construct(){
		parent::__construct();
		$this->load->database();

	}
	public function getLocations($current=NULL){
		# code...
		$query = $this->db->get('locations');
		return $query->result_array();
	}
	public function addLocatons($businessName=null){
			# code...
			$query = $this->db->query("SELECT businessName, lat, lng FROM locations");
			$businessNames = $query->result_array();
			foreach ($businessNames as $name) {
				//INSERT INTO locatins

				//BUSINESS NAME, LAT, LNG
			}
	}
	public function insertData($data) {
		echo "Inserting data ...";

	}
	public function register() {
		// $query = $this->db->query('SELECT username, email FROM users WHERE username LIKE ? AND email LIKE ?; ');
		// $data = $query->result();
		//
		// foreach ($data as $key => $value) {
		// 	// code...
		// 	$users[] = $value->username;
		// }
		// return $users;
	}
}

/* End of file Dashboard_model.php */
/* Location: ./application/models/Dashboard_model.php */
