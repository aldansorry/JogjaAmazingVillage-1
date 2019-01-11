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
		
		$cekDB = json_decode($this->curl->simple_post($this->apidata->url_pusat_server.'/Login', $data, array(CURLOPT_BUFFERSIZE => 10)));
		
		if ($cekDB->num_rows == 1) {
			$data = $cekDB->data;
			$userdata = array(
				'id' => $data->id,
				'nama' => $data->nama,
				'username' => $username,
				'level' => $data->fk_level,
			);
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