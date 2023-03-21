<?php

class Users_model extends CI_Model
{

	public function get_user_login($hash)

	{

		$this->db->select('*');

		$this->db->from('Users');

		$this->db->where('md5(CONCAT(`ID_User`,`Password`,`Salt`))', $hash);

		$query = $this->db->get();

		return $query->result_array();

	}


}
