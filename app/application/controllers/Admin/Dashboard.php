<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!(isLoggedin())) {
			p_error('403',"Access Tidak Tersedia");
		}
	}
	public function index()
	{
		$data = [
			'c_name' => "Dashboard",
			'isDashboard' => true,
		];
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/footer',$data);
	}
	public function changedesawisata($id = null)
	{
		if (!(onlyLevel('1') || onlyLevel('2'))) {
			p_error('403',"Access Tidak Tersedia");
		}
		$old_session = $this->session->userdata('logged_in');
		if ($id != null) {
			$res_desawisata = $this->db->where('id',$id)->get('desawisata')->row(0);

			$desawisata_data = array(
				'id' => $res_desawisata->id,
				'nama' => $res_desawisata->nama,
				'alamat' => $res_desawisata->alamat,
				'deskripsi' => $res_desawisata->deskripsi,
				'foto' => $res_desawisata->foto,
			);
			$old_session['desawisata'] = $desawisata_data;

		}else{
			$old_session['desawisata'] = null;
		}
		$this->session->set_userdata('logged_in',$old_session);
		redirect('Admin/Dashboard','refresh');
	}
}
