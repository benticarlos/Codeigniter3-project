<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Auth_model extends CI_Model
{
	
	function __construct() {
		# code...
	}

	public function getUser($email = FALSE) {
		if($mail) {
			$this->db->where('users_email', $email);
			$query = $this->db->get('users');
			return $query->row(); //row arroja un solo resultado
		}
		else {
			$query = $this->db->get('users');
			return $query->result(); //result arroja todos
		}	
	}

}
