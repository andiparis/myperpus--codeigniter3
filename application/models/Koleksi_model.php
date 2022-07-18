<?php

class Koleksi_model extends CI_Model {

  public function get() {
    $koleksi = $this->db->get('koleksi')->result();
		return $koleksi;
	}

  public function get_id($id) {
    $this->db->where('id', $id);
    $koleksi = $this->db->get('koleksi')->row();
    return $koleksi;
  }

  public function add($data) {
    return $this->db->insert('koleksi', $data);
  }

  public function edit($id, $data) {
    $this->db->where('id', $id);
    return $this->db->update('koleksi', $data);
  }

  public function delete($id) {
    $this->db->where('id', $id);
    return $this->db->delete('koleksi');
  }
}
