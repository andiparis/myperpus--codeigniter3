<?php

class anggota_model extends CI_Model {

  public function get() {
    $anggota = $this->db->get('anggota')->result();
		return $anggota;
	}

  public function get_id($id) {
    $this->db->where('id_anggota', $id);
    $anggota = $this->db->get('anggota')->row();
    return $anggota;
  }

  public function add($data) {
    return $this->db->insert('anggota', $data);
  }

  public function edit($id, $data) {
    $this->db->where('id_anggota', $id);
    return $this->db->update('anggota', $data);
  }

  public function delete($id) {
    $this->db->where('id_anggota', $id);
    return $this->db->delete('anggota');
  }
}
