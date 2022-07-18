<?php

class Buku_model extends CI_Model {

  public function get() {
    $buku = $this->db->get('buku')->result();
		return $buku;
	}

  public function get_id($id) {
    $this->db->where('id', $id);
    $buku = $this->db->get('buku')->row();
    return $buku;
  }

  public function get_kategori() {
    $kategori = $this->db->get('kategori')->result();
    return $kategori;
  }

  public function get_koleksi() {
    $koleksi = $this->db->get('koleksi')->result();
    return $koleksi;
  }

  public function add($data) {
    return $this->db->insert('buku', $data);
  }

  public function edit($id, $data) {
    $this->db->where('id', $id);
    return $this->db->update('buku', $data);
  }

  public function delete($id) {
    $this->db->where('id', $id);
    return $this->db->delete('buku');
  }
}
