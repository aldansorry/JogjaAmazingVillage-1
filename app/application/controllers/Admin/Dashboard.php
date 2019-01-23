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
}
