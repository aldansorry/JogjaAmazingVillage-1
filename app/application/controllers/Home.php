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
			'Review_model',
		]);
		$data = [
			'c_name' => 'Home',
			'kategori' => $this->Kategori_model->get_data(),
			'objekwisata' => $this->Wisata_model->get_data(),
			'agenda' => $this->Agenda_model->get_data(),
			'galeri' => $this->Galeri_model->get_data(),
			'berita' => $this->Berita_model->get_data(),
			'review' => $this->Review_model->get_data(),
		];
		$this->load->view('home/template2/header');
		$this->load->view('home/template2/home',$data);
		$this->load->view('home/template2/footer');
	}
	public function desawisata($id_desawisata)
	{
		$this->load->model([
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
			'Review_model',
		]);
		$data = [
			'c_name' => 'Home',
			'kategori' => $this->Kategori_model->get_by_desawisata($id_desawisata),
			'objekwisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
			'agenda' => $this->Agenda_model->get_by_desawisata($id_desawisata),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
		];
		$this->load->view('home/template2/header');
		$this->load->view('home/template2/home',$data);
		$this->load->view('home/template2/footer');
	}
}
