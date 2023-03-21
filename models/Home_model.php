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
	function get_produse_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('produse');
		$this->db->join('categorie', 'categorie.ID_Categorie=produse.ID_Categorie');
		$this->db->where('categorie.ID_Categorie',$id);
		$query= $this->db->get();
		return $query->result_array();
	}

	function get_produse_by_id_product($id)
	{
		$this->db->select('*');
		$this->db->from('produse');
		$this->db->join('categorie', 'categorie.ID_Categorie=produse.ID_Categorie');
		$this->db->where('produse.ID_Produs',$id);
		$query= $this->db->get();
		return $query->result_array();
	}

	function get_produse_by_name($name)
	{
		$this->db->select('*');
		$this->db->from('produse');
		$this->db->join('categorie', 'categorie.ID_Categorie=produse.ID_Categorie');
		$this->db->like('produse.Name',$name);
		$query=$this->db->get();
		return $query->result_array();

}
}
