<?php

class Buku extends CI_Controller {

  function __construct() {
		parent::__construct();
    $this->load->model('buku_model');
	
		if($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}
  
	public function index() {
		$data['data'] = $this->buku_model->get();
		$data['kategori'] = $this->buku_model->get_kategori();
		$data['koleksi'] = $this->buku_model->get_koleksi();
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('perpustakaan/buku/buku/buku_data', $data);
		$this->load->view('templates/footer');
	}

	public function add_data() {
		$config = array(
			array('field' => 'id', 'label' => 'ID buku', 'rules' => 'max_length[10]'),
			array('field' => 'judul', 'label' => 'Judul buku', 'rules' => 'max_length[50]'),
			array('field' => 'pengarang', 'label' => 'Pengarang buku', 'rules' => 'max_length[30]'),
			array('field' => 'penerbit', 'label' => 'Penerbit buku', 'rules' => 'max_length[30]')
		);
		$this->form_validation->set_rules($config);	
	
	 	if($this->form_validation->run()) {
			$data = [
				'id' => $this->input->POST('id'),
				'judul' => $this->input->POST('judul'),
				'pengarang' => $this->input->POST('pengarang'),
				'id_kategori' => $this->input->POST('kategori'),
				'id_koleksi' => $this->input->POST('koleksi'),
				'penerbit' => $this->input->POST('penerbit')
			];

			$this->buku_model->add($data);
			redirect('buku');
		} else {
			$data['kategori'] = $this->buku_model->get_kategori();
			$data['koleksi'] = $this->buku_model->get_koleksi();
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('perpustakaan/buku/buku/buku_add', $data);
			$this->load->view('templates/footer');
		}
	}

	public function edit_data($id) {
		$config = array(
			array('field' => 'judul', 'label' => 'Judul buku', 'rules' => 'max_length[50]'),
			array('field' => 'pengarang', 'label' => 'Pengarang buku', 'rules' => 'max_length[30]'),
			array('field' => 'penerbit', 'label' => 'Penerbit buku', 'rules' => 'max_length[30]')
		);
		$this->form_validation->set_rules($config);

		if($this->form_validation->run()) {
			$data = [
				'judul' => $this->input->POST('judul'),
				'pengarang' => $this->input->POST('pengarang'),
				'id_kategori' => $this->input->POST('kategori'),
				'id_koleksi' => $this->input->POST('koleksi'),
				'penerbit' => $this->input->POST('penerbit')
			];

			$this->buku_model->edit($id, $data);
			redirect('buku');
		} else {
			$data['buku'] = $this->buku_model->get_id($id);
			$data['kategori'] = $this->buku_model->get_kategori();
			$data['koleksi'] = $this->buku_model->get_koleksi();
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('perpustakaan/buku/buku/buku_edit', $data);
			$this->load->view('templates/footer');
		}
	}

	public function delete_data($id) {
		$this->buku_model->delete($id);
		redirect('buku');
	}
}
