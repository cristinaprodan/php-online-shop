<?php


class Products_model extends CI_Model
{
	public function get_products($name)

	{

		$this->db->select('*');

		$this->db->from('produse');

		$this->db->like('Name', $name);

		$query = $this->db->get();

		return $query->result_array();

	}

}
