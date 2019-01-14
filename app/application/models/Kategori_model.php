<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

  var $table = "kategori";
  var $primary_key = "id";
  
  public function get_data()
  {
    $this->db->select('*,(select nama from desawisata where id=kategori.fk_desawisata) as nama_desawisata');
    $this->db->from($this->table);
    $this->db->order_by('nama');
    return $this->db->get()->result();
  }

  public function get_id($id)
  {
    $this->db->select('*,(select nama from desawisata where id=kategori.fk_desawisata) as nama_desawisata');
    $this->db->from($this->table);
    $this->db->where('id',$id);
    return $this->db->get()->row(0);
  }

  public function insert_data($foto)
  {
    $db_debug = $this->db->db_debug;
    $this->db->db_debug = FALSE;
    $set = [
      'nama' => $this->input->post('nama'),
      'foto' => $foto,
      'fk_desawisata' => $this->input->post('fk_desawisata'),
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
