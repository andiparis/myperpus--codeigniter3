<?php

class Dashboard extends CI_Controller {

  function __construct() {
		parent::__construct();
	
		if($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}
  
  public function index() {
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('perpustakaan/dashboard');
		$this->load->view('templates/footer');
  }
}
