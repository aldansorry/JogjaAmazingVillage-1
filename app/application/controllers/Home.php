<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model([
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
		]);
		$data = [
			'c_name' => 'Home',
			'kategori' => $this->Kategori_model->get_data(),
			'objekwisata' => $this->Wisata_model->get_data(),
			'agenda' => $this->Agenda_model->get_data(),
			'galeri' => $this->Galeri_model->get_data(),
			'berita' => $this->Berita_model->get_data(),
		];
		$this->load->view('home/header');
		$this->load->view('home/home',$data);
		$this->load->view('home/footer');
	}
}
