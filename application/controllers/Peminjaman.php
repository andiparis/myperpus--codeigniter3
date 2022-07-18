<?php

class Peminjaman extends CI_Controller {

  function __construct() {
		parent::__construct();
    $this->load->model('peminjaman_model');
	
		if($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}
  
	public function index() {
		$data['data'] = $this->peminjaman_model->get();
    $data['anggota'] = $this->peminjaman_model->get_anggota();
    $data['buku'] = $this->peminjaman_model->get_buku();
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('perpustakaan/peminjaman/peminjaman_data', $data);
		$this->load->view('templates/footer');
	}

	public function add_data() {
		$config = array(
			array('field' => 'id', 'label' => 'ID Peminjaman', 'rules' => 'max_length[10]'),
			array('field' => 'nama', 'label' => 'Nama Anggota', 'rules' => 'max_length[10]'),
			array('field' => 'judul', 'label' => 'Judul Buku', 'rules' => 'max_length[10]')
		);
		$this->form_validation->set_rules($config);	
	
	 	if($this->form_validation->run()) {
			$data = [
				'id_pinjam' => $this->input->POST('id'),
				'tgl_pinjam' => $this->input->POST('tgl_pinjam'),
				'tgl_kembali' => $this->input->POST('tgl_kembali'),
				'id_anggota' => $this->input->POST('nama'),
				'kd_buku' => $this->input->POST('judul')
			];

			$this->peminjaman_model->add($data);
			redirect('peminjaman');
		} else {
      $data['anggota'] = $this->peminjaman_model->get_anggota();
      $data['buku'] = $this->peminjaman_model->get_buku();
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('perpustakaan/peminjaman/peminjaman_add', $data);
			$this->load->view('templates/footer');
		}
	}

	public function edit_data($id) {
		$config = array(
			array('field' => 'nama', 'label' => 'Nama Anggota', 'rules' => 'max_length[10]'),
			array('field' => 'judul', 'label' => 'Judul Buku', 'rules' => 'max_length[10]')
		);
		$this->form_validation->set_rules($config);

		if($this->form_validation->run()) {
			$data = [
				'tgl_pinjam' => $this->input->POST('tgl_pinjam'),
				'tgl_kembali' => $this->input->POST('tgl_kembali'),
				'id_anggota' => $this->input->POST('nama'),
				'kd_buku' => $this->input->POST('judul')
			];

			$this->peminjaman_model->edit($id, $data);
			redirect('peminjaman');
		} else {
			$data['peminjaman'] = $this->peminjaman_model->get_id($id);
      $data['anggota'] = $this->peminjaman_model->get_anggota();
      $data['buku'] = $this->peminjaman_model->get_buku();
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('perpustakaan/peminjaman/peminjaman_edit', $data);
			$this->load->view('templates/footer');
		}
	}

	public function delete_data($id) {
		$this->peminjaman_model->delete($id);
		redirect('peminjaman');
	}
}
