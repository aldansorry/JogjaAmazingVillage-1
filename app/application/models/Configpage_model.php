<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configpage_model extends CI_Model {

  var $table = "config_page";
  var $primary_key = "id";
  
  public function get_data()
  {
    $this->db->where('fk_desawisata',$this->session->userdata('logged_in')['desawisata']['id']);
    $query = $this->db->get('config_page');
    return $query->row(0);
  }

  public function update_data($banner_img = null)
  {
    $db_debug = $this->db->db_debug;
    $this->db->db_debug = FALSE;
    $set = [
      'subdomain' => $this->input->post('subdomain'),
      'template' => $this->input->post('template'),
      'telp' => $this->input->post('telp'),
      'email' => $this->input->post('email'),
    ];

    if ($banner_img != null) {
      $set['banner_img'] = $banner_img;
    }

    $this->db->where('fk_desawisata',$this->session->userdata('logged_in')['desawisata']['id']);
    $update = $this->db->update($this->table,$set);
    $error = $this->db->error();
    $this->db->db_debug = $db_debug;
    return $error;
  }

  
}
