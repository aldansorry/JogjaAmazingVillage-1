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
		$id_desawisata = $this->session->userdata('logged_in')['fk_level'];
		if ($id != null) {
			if (!onlyLevel('4')) {
				$id_desawisata = $id;
			}
		}
		$data = [
			'c_name' => $this->c_name,
			'data' => $this->Configpage_model->get_data($id_desawisata),
		];
		$this->form_validation->set_rules('subdomain','subdomain','required');
		$this->form_validation->set_rules('template','template','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/header');
			$this->load->view('admin/config/page',$data);
			$this->load->view('admin/footer');
		}else{
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
				$data['data'] = $this->Configpage_model->get_data();
				$this->load->view('admin/header');
				$this->load->view('admin/config/page',$data);
				$this->load->view('admin/footer');
			}
			
		}
	}
}
