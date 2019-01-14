<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('curl');
		$this->load->library('apidata');
	}
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|trim|callback_cekDB');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			redirect('Admin/Kategori','refresh');
		}
	}
	public function cekDB($username)
	{
		$password = md5($this->input->post('password'));

		$data = array(
			'username' => $username,
			'password' => $password
		);
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$cekDB = $this->db->get('users');
		
		if ($cekDB->num_rows() == 1) {
			$data = $cekDB->row(0);
			$userdata = array(
				'id' => $data->id,
				'nama' => $data->nama,
				'username' => $username,
				'fk_level' => $data->fk_level,
				'fk_penginapan' => $data->fk_penginapan,
			);
			if ($data->fk_desawisata != null) {
				$res_desawisata = $this->db->where('id',$data->fk_desawisata)->get('desawisata')->row(0);
				$desawisata_data = array(
					'id' => $res_desawisata->id,
					'nama' => $res_desawisata->nama,
					'alamat' => $res_desawisata->alamat,
					'deskripsi' => $res_desawisata->deskripsi,
					'foto' => $res_desawisata->foto,
				);
				$userdata['desawisata'] = $desawisata_data;
			}
			$this->session->set_userdata('logged_in',$userdata);
			return true;
		}else{
			$this->form_validation->set_message('cekDB','Username dan password tidak valid');
			return false;
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('Login','refresh');
	}
}