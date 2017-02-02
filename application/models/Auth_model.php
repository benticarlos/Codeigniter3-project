<?php 

/**
* 
*/
class Auth_model extends CI_Model
{
	
	function __construct(argument)
	{
		# code...
	}

	public function getUser($email) {
		$this->db->where('user_email', $email);
		$query = $this->db->get('users');
		return $query->row();
	}
}

?>