<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Kc_Controller

{
	function __construct()

	{


		parent::__construct();

		$this->load->model('home_model','', TRUE);

	}


	function index($id=0)

	{

		if($this->input->post('search_data2')){
			$this->data['produse']=$this->home_model->get_produse_by_name($this->input->post('search_data2'));

		}else
		if($this->input->post('cautare')){
			$this->data['produse']=$this->home_model->get_produse_by_name($this->input->post('search'));

		}
		else{
			if($id == 0){
				$this->data['produse']=$this->home_model->get_produse();
			}else{
				$this->data['produse']=$this->home_model->get_produse_by_id($id);
			}


		}


		$this->common_page('/users/home/index', $this->data);


	}

	function product($id=0)

	{
		$this->data['produse']=$this->home_model->get_produse_by_id_product($id);

		$this->common_page('/users/home/produs', $this->data);
	}
}
