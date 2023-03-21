<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Kc_Controller

{
	function __construct()

	{


		parent::__construct();

		$this->load->model('home_model','', TRUE);

	}


	function index()

	{
		$this->data['produse']=$this->home_model->get_produse();

		$this->common_page('/users/home/index', $this->data);


	}
}
