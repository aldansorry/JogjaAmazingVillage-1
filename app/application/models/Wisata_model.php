<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_model extends CI_Model {

  var $table = "wisata";
  var $primary_key = "id";
  
  public function get_data()
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->order_by('nama');
    return $this->db->get()->result();
  }

  public function insert_data($foto)
  {
    $db_debug = $this->db->db_debug;
    $this->db->db_debug = FALSE;
    $set = [
      'nama' => $this->input->post('nama'),
      'keterangan' => $this->input->post('keterangan'),
      'harga' => $this->input->post('harga'),
      'jamkunjung' => $this->input->post('jamkunjung'),
      'foto' => $foto,
    ];

    $insert = $this->db->insert($this->table,$set);
    $error = $this->db->error();
    $this->db->db_debug = $db_debug;
    return $error;
  }

  public function delete_data($id)
  {
    $this->db->where('id',$id);
    $this->db->delete($this->table);
  }
}
