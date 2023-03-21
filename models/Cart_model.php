<?php


Class Cart_model extends CI_Model
{
	function add_cart($id_product,$id_user)
	{
		$data=array(
			'ID_Produs'=>$id_product,
			'ID_User'=>$id_user,
			'Cantitate'=>1,
		);
		$this->db->insert('cos',$data);
		return $this->db->insert_id();
	}
	function get_produse($id_user)
	{
		$this->db->select('*');
		$this->db->from('cos');
		$this->db->join('produse', 'produse.ID_Produs=cos.ID_Produs');
		$this->db->where('cos.ID_User',$id_user);
		$query= $this->db->get();
		return $query->result_array();
	}

	function sum_produse($id_user)
	{
		$this->db->select('sum(produse.Pret*cos.Cantitate) as nr');
		$this->db->from('cos');
		$this->db->join('produse', 'produse.ID_Produs=cos.ID_Produs');
		$this->db->where('cos.ID_User',$id_user);
		$query= $this->db->get();
		$var=$query->row();
		return $var->nr;
	}


	function check_produs($id_produs,$id_user)
	{
		$this->db->select('*');
		$this->db->where('ID_Produs',$id_produs);
		$this->db->where('ID_User',$id_user);
		$this->db->from('cos');
		$query=$this->db->get();
		$ret=$query->row();
		if($query->num_rows()==1)
		{
			return 1;
		}
		else
			return 0;
	}

	function get_cantitate($id_produs,$id_user)
	{
		$this->db->select('Cantitate');
		$this->db->where('ID_Produs',$id_produs);
		$this->db->where('ID_User',$id_user);
		$this->db->from('cos');
		$this->db->limit(1);
		$query=$this->db->get();
		$ret=$query->row();
		if($query->num_rows()==1)
		{
			return $ret->Cantitate;
		}
		else
			return 0;

	}
	function update_cos($ID_Produs,$ID_User,$noua_cantitate)
	{
		$data=array(
			'Cantitate'=>$noua_cantitate,
		);
		$this->db->where('ID_Produs',$ID_Produs);
		$this->db->where('Id_User',$ID_User);
		$this->db->update('cos',$data);
	}
	function remove_produs($id_product,$id_user)
	{
		$this->db->where('ID_Produs',$id_product);
		$this->db->where('ID_User',$id_user);
		$this->db->delete('cos');
	}

	function remove_toate_produsele($id_user)
	{

		$this->db->where('ID_User',$id_user);
		$this->db->delete('cos');
	}
}
