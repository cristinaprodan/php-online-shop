<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends Kc_Controller

{
	function __construct()

	{


		parent::__construct();

		$this->load->model('cart_model','', TRUE);

	}


	function index()

	{
		if($this->id_user){

			if($this->input->post('id_product'))
			{
				$id_product=$this->input->post('id_product');
				$check=$this->cart_model->check_produs($id_product,$this->id_user);
				if($check==0){
					$this->cart_model->add_cart($id_product,$this->id_user);
				}
				else{
					$actual_quantity=$this->cart_model->get_cantitate($id_product,$this->id_user);
					$noua_cantitate=$actual_quantity+1;
					$this->cart_model->update_cos($id_product,$this->id_user,$noua_cantitate);
				}
			}
			if($this->input->post('delete'))
			{
				$id_product=$this->input->post('delete');
				$this->cart_model->remove_produs($id_product,$this->id_user);
			}
			if($this->input->post('remove'))
			{

				$this->cart_model->remove_toate_produsele($this->id_user);
			}

			if($this->input->post('schimbare_cantitate'))
			{

				$this->cart_model->update_cos($this->input->post('produs_id'),$this->id_user,$this->input->post('schimbare_cantitate'));
			}


			$this->data['cart']=$this->cart_model->get_produse($this->id_user);
			$this->data['sum']=$this->cart_model->sum_produse($this->id_user);
		}




		$this->common_page('/users/cart/index', $this->data);




	}



}
