<?php

class Koleksi extends CI_Controller {

  function __construct() {
		parent::__construct();
    $this->load->model('koleksi_model');
	
		if($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}
  
	public function index() {
		$data['data'] = $this->koleksi_model->get();
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('perpustakaan/buku/koleksi/koleksi_data', $data);
		$this->load->view('templates/footer');
	}

	public function add_data() {
		$config = array(
			array('field' => 'id', 'label' => 'ID Koleksi', 'rules' => 'max_length[10]'),
			array('field' => 'nama', 'label' => 'Nama koleksi', 'rules' => 'max_length[30]'),
			array('field' => 'status', 'label' => 'Status', 'rules' => 'max_length[11]')
		);
		$this->form_validation->set_rules($config);	
	
	 	if($this->form_validation->run()) {
			$data = [
				'id' => $this->input->POST('id'),
				'nama' => $this->input->POST('nama'),
				'keterangan' => $this->input->POST('keterangan'),
				'status' => $this->input->POST('status')
			];

			$this->koleksi_model->add($data);
			redirect('koleksi');
		} else {
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('perpustakaan/buku/koleksi/koleksi_add');
			$this->load->view('templates/footer');
		}
	}

	public function edit($id) {
		$config = array(
			array('field' => 'nama', 'label' => 'Nama koleksi', 'rules' => 'max_length[30]'),
			array('field' => 'status', 'label' => 'Status', 'rules' => 'max_length[11]')
		);
		$this->form_validation->set_rules($config);

		if($this->form_validation->run()) {
			$data = [
				'nama' => $this->input->POST('nama'),
				'keterangan' => $this->input->POST('keterangan'),
				'status' => $this->input->POST('status')
			];

			$this->koleksi_model->edit($id, $data);
			redirect('koleksi');
		} else {
			$data['koleksi'] = $this->koleksi_model->get_id($id);
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('perpustakaan/buku/koleksi/koleksi_edit', $data);
			$this->load->view('templates/footer');
		}
	}

	public function delete_data($id) {
		$this->koleksi_model->delete($id);
		redirect('koleksi');
	}
}
