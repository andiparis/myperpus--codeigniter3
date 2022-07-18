<?php

class Peminjaman_model extends CI_Model {

  public function get() {
    $peminjaman = $this->db->get('meminjam')->result();
		return $peminjaman;
	}

  public function get_id($id) {
    $this->db->where('id_pinjam', $id);
    $peminjaman = $this->db->get('meminjam')->row();
    return $peminjaman;
  }

  public function get_anggota() {
    $anggota = $this->db->get('anggota')->result();
    return $anggota;
  }

  public function get_buku() {
    $buku = $this->db->get('buku')->result();
    return $buku;
  }

  public function add($data) {
    return $this->db->insert('meminjam', $data);
  }

  public function edit($id, $data) {
    $this->db->where('id_pinjam', $id);
    return $this->db->update('meminjam', $data);
  }

  public function delete($id) {
    $this->db->where('id_pinjam', $id);
    return $this->db->delete('meminjam');
  }
}
