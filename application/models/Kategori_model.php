<?php

class Kategori_model extends CI_Model {

  public function get() {
    $kategori = $this->db->get('kategori')->result();
		return $kategori;
	}

  public function get_id($id) {
    $this->db->where('id', $id);
    $kategori = $this->db->get('kategori')->row();
    return $kategori;
  }

  public function add($data) {
    return $this->db->insert('kategori', $data);
  }

  public function edit($id, $data) {
    $this->db->where('id', $id);
    return $this->db->update('kategori', $data);
  }

  public function delete($id) {
    $this->db->where('id', $id);
    return $this->db->delete('kategori');
  }
}
