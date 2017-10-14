<?php 

/**
* 
*/
class Auth_model extends CI_Model
{
	
	// function __construct()
	// {
	// 	parent::__construct();
	// }

	function daftar($data)
    {
		$this->db->insert('users', $data);
	}

}

?>