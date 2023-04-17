<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kc_Controller extends CI_Controller

{
	protected $data = array();
	function __construct()

	{

		parent::__construct();

		$this->load->helper('cookie');

		$this->load->library('session');

		$this->load->helper('url');
	}

	function common_page($view)

	{

		$this->load->view('users/common/head', $this->data);

		$this->load->view('users/common/header', $this->data);

		$this->load->view($view, $this->data);

		$this->load->view('users/common/footer', $this->data);

	}

}
