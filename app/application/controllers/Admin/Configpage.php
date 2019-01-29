<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configpage extends CI_Controller {

	var $c_name = "Configpage";

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Configpage_model');
		if (!(onlyLevel('1') || onlyLevel('2') || onlyLevel('4'))) {
			p_error('403',"Access Tidak Tersedia");
		}
	}
	public function index($id = null)
	{
		$id_desawisata = $this->session->userdata('logged_in')['desawisata']['id'];
		if ($id != null) {
			if (!onlyLevel('4')) {
				$id_desawisata = $id;
			}
		}
		$data = [
			'c_name' => $this->c_name,
			'data' => $this->Configpage_model->get_data($id_desawisata),
		];
		$this->form_validation->set_rules('subdomain','subdomain','required|alpha_numeric');
		$this->form_validation->set_rules('template','template','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/header');
			$this->load->view('admin/config/page',$data);
			$this->load->view('admin/footer');
		}else{
			if ($_FILES['banner_img']['name'] != "") {
				$config['upload_path'] = './uploads/banner/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '2000';
				$config['max_width']  = '10240';
				$config['max_height']  = '7680';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('banner_img')){
					$error = array('error' => $this->upload->display_errors());
					$data['error'] = $error['error'];
					$this->load->view('admin/header');
					$this->load->view('admin/config/page',$data);
					$this->load->view('admin/footer');
				}
				else{
					$error = $this->Configpage_model->update_data($id_desawisata,$this->upload->data('file_name'));
					$data['data'] = $this->Configpage_model->get_data($id_desawisata);
					$this->load->view('admin/header');
					$this->load->view('admin/config/page',$data);
					$this->load->view('admin/footer');
				}
			}else{
				$error = $this->Configpage_model->update_data($id_desawisata,null);
				$data['data'] = $this->Configpage_model->get_data($id_desawisata);
				$this->load->view('admin/header');
				$this->load->view('admin/config/page',$data);
				$this->load->view('admin/footer');
				
			}
			
		}
	}
	public function desawisata($id = null)
	{
		$this->load->model('Desawisata_model');
		$id_desawisata = $this->session->userdata('logged_in')['desawisata']['id'];
		if ($id != null) {
			if (!onlyLevel('4')) {
				$id_desawisata = $id;
			}
		}
		$data = [
			'c_name' => "Desawisata",
			'data' => $this->Desawisata_model->get_id($id_desawisata),
		];
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');
		$this->form_validation->set_rules('_lat','_lat','required|decimal');
		$this->form_validation->set_rules('_long','_long','required|decimal');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/header');
			$this->load->view('admin/config/desawisata',$data);
			$this->load->view('admin/footer');
		}else{
			if ($_FILES['foto']['name'] != "") {
				$config['upload_path'] = './uploads/desawisata/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '2000';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('foto')){
					$data['error'] = $this->upload->display_errors();
					$data['error'] = $error['error'];
					$this->load->view('admin/header');
					$this->load->view('admin/config/desawisata',$data);
					$this->load->view('admin/footer');
				}
				else{
					$upload_data = $this->upload->data();
					$this->load->view('admin/desawisata/update',$data);
					$error = $this->Desawisata_model->update_data($id_desawisata,$upload_data['file_name']);
					if ($error['code'] == 0) {
						$this->session->set_flashdata('msg_js','<script>swal("Berhasil", "Data berhasil diubah", "success");</script>');
					}else{
						$this->session->set_flashdata('msg_js','<script>swal("Gagal", "'.$error['message'].'", "error");</script>');
					}
					redirect('Admin/Configpage/desawisata','refresh');
				}
			}else{
				$this->load->view('admin/desawisata/update',$data);
				$error = $this->Desawisata_model->update_data($id_desawisata,null);
				if ($error['code'] == 0) {
					$this->session->set_flashdata('msg_js','<script>swal("Berhasil", "Data berhasil diubah", "success");</script>');
				}else{
					$this->session->set_flashdata('msg_js','<script>swal("Gagal", "'.$error['message'].'", "error");</script>');
				}
				redirect('Admin/Configpage/desawisata','refresh');
			}
		}

	}
}
