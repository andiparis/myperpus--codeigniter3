<?php

class Kategori extends CI_Controller {

  function __construct() {
		parent::__construct();
    $this->load->model('kategori_model');
	
		if($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}
  
	public function index() {
		$data['data'] = $this->kategori_model->get();
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('perpustakaan/buku/kategori/kategori_data', $data);
		$this->load->view('templates/footer');
	}

	public function add_data() {
		$config = array(
			array('field' => 'id', 'label' => 'ID Kategori', 'rules' => 'max_length[10]'),
			array('field' => 'nama', 'label' => 'Nama Kategori', 'rules' => 'max_length[30]')
		);
		$this->form_validation->set_rules($config);	
	
	 	if($this->form_validation->run()) {
			$data = [
				'id' => $this->input->POST('id'),
				'nama' => $this->input->POST('nama'),
				'keterangan' => $this->input->POST('keterangan')
			];

			$this->kategori_model->add($data);
			redirect('kategori');
		} else {
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('perpustakaan/buku/kategori/kategori_add');
			$this->load->view('templates/footer');
		}
	}

	public function edit_data($id) {
		$config = array(
			array('field' => 'nama', 'label' => 'Nama Kategori', 'rules' => 'max_length[30]')
		);
		$this->form_validation->set_rules($config);

		if($this->form_validation->run()) {
			$data = [
				// 'id' => $this->input->POST('id'),
				'nama' => $this->input->POST('nama'),
				'keterangan' => $this->input->POST('keterangan')
			];

			$this->kategori_model->edit($id, $data);
			redirect('kategori');
		} else {
			$data['kategori'] = $this->kategori_model->get_id($id);
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('perpustakaan/buku/kategori/kategori_edit', $data);
			$this->load->view('templates/footer');
		}
	}

	public function delete_data($id) {
		$this->kategori_model->delete($id);
		redirect('kategori');
	}
}
