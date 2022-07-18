<?php

class Anggota extends CI_Controller {

  function __construct() {
		parent::__construct();
    $this->load->model('anggota_model');
	
		if($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}
  
	public function index() {
		$data['data'] = $this->anggota_model->get();
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('perpustakaan/anggota/anggota_data', $data);
		$this->load->view('templates/footer');
	}

	public function add_data() {
		$config = array(
			array('field' => 'id', 'label' => 'ID Anggota', 'rules' => 'max_length[10]'),
			array('field' => 'nama', 'label' => 'Nama', 'rules' => 'max_length[30]'),
			array('field' => 'alamat', 'label' => 'Alamat', 'rules' => 'max_length[30]'),
			array('field' => 'telp', 'label' => 'No. Telp.', 'rules' => 'max_length[30]|numeric'),
			array('field' => 'status', 'label' => 'Status', 'rules' => 'max_length[10]')
		);
		$this->form_validation->set_rules($config);	
	
	 	if($this->form_validation->run()) {
			$data = [
				'id_anggota' => $this->input->POST('id'),
				'nama_anggota' => $this->input->POST('nama'),
				'alamat' => $this->input->POST('alamat'),
				'no_telepon' => $this->input->POST('telp'),
				'status_anggota' => $this->input->POST('status')
			];

			$this->anggota_model->add($data);
			redirect('anggota');
		} else {
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('perpustakaan/anggota/anggota_add');
			$this->load->view('templates/footer');
		}
	}

	public function edit_data($id) {
		$config = array(
			array('field' => 'nama', 'label' => 'Nama', 'rules' => 'max_length[30]'),
			array('field' => 'alamat', 'label' => 'Alamat', 'rules' => 'max_length[30]'),
			array('field' => 'telp', 'label' => 'No. Telp.', 'rules' => 'max_length[30]|numeric'),
			array('field' => 'status', 'label' => 'Status', 'rules' => 'max_length[10]')
		);
		$this->form_validation->set_rules($config);

		if($this->form_validation->run()) {
			$data = [
				'nama_anggota' => $this->input->POST('nama'),
				'alamat' => $this->input->POST('alamat'),
				'no_telepon' => $this->input->POST('telp'),
				'status_anggota' => $this->input->POST('status')
			];

			$this->anggota_model->edit($id, $data);
			redirect('anggota');
		} else {
			$data['anggota'] = $this->anggota_model->get_id($id);
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('perpustakaan/anggota/anggota_edit', $data);
			$this->load->view('templates/footer');
		}
	}

	public function delete_data($id) {
		$this->anggota_model->delete($id);
		redirect('anggota');
	}
}
