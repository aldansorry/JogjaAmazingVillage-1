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
		$this->load->view('welcome_message');
	}
}
