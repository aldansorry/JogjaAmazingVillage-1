<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configpage extends CI_Controller {

	var $c_name = "Configpage";

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Configpage_model');
		if (!(onlyLevel('4'))) {
			p_error('403',"Access Tidak Tersedia");
			exit();
		}
	}
	public function index()
	{
		$data = [
			'c_name' => $this->c_name,
			'data' => $this->Configpage_model->get_data(),
		];
		$this->form_validation->set_rules('subdomain','subdomain','required');
		$this->form_validation->set_rules('template','template','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/header');
			$this->load->view('admin/config/page',$data);
			$this->load->view('admin/footer');
		}else{
			$error = $this->Configpage_model->update_data();
			$data['data'] = $this->Configpage_model->get_data();
			$this->load->view('admin/header');
			$this->load->view('admin/config/page',$data);
			$this->load->view('admin/footer');
			
		}
	}
}
