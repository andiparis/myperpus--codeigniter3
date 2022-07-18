<?php

class Login extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('users_model');
  }

  public function index() {
		if($this->session->userdata('status') == "login") {
			redirect(base_url("dashboard"));
		}
    $this->load->view('perpustakaan/login');
  }

  function process() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
    );

		$check = $this->users_model->login_check("users", $where)->num_rows();
		if($check > 0) {
			$session_data = array(
				'name' => $username,
				'status' => "login"
			);
			$this->session->set_userdata($session_data);
			redirect(base_url("dashboard"));
		} else {
			redirect(base_url("login"));
		}
	}	

  public function logout() {
    $this->session->sess_destroy();
    redirect(base_url('login'));
  }
}
