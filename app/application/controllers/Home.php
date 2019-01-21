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
		$this->load->view('home/template2/home',$data);
	}
	public function homee($id_desawisata)
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
		$this->load->view('home/template2/p_home',$data);
	}
	public function about($id_desawisata)
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
		$this->load->view('home/template2/p_about',$data);
	}
	
	public function galeri($id_desawisata)
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
		$this->load->view('home/template2/p_galeri',$data);
	}
	public function agenda($id_desawisata)
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
		$this->load->view('home/template2/p_agenda',$data);
	}
	public function wisata($id_desawisata)
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
		$this->load->view('home/template2/p_wisata',$data);
	}
	public function berita($id_desawisata)
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
		$this->load->view('home/template2/p_berita',$data);
	}
	public function kontak($id_desawisata)
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
		$this->load->view('home/template2/p_kontak',$data);
	}
}
