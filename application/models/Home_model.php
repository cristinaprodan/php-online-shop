<?php


Class Home_model extends CI_Model
{
	function get_produse()
	{
		$this->db->select('*');
		$this->db->from('produse');
		$this->db->join('categorie', 'categorie.ID_Categorie=produse.ID_Categorie');
		$query= $this->db->get();
		return $query->result_array();
	}
}
