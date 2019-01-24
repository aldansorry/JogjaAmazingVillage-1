<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		p_error("404","Halaman tidak ditemukan");
	}
	public function homee($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
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
		$this->load->view('home/template1/p_home',$data);
	}
	public function about($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
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
		$this->load->view('home/template1/p_about',$data);
	}
	
	public function galeri($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
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
		$this->load->view('home/template1/p_galeri',$data);
	}
	public function agenda($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
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
		$this->load->view('home/template1/p_agenda',$data);
	}
	public function wisata($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
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
		$this->load->view('home/template1/p_wisata',$data);
	}
	public function berita($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
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
		$this->load->view('home/template1/p_berita',$data);
	}
	public function beritadetail($subdomain,$id_berita)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
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
			'berita' => $this->Berita_model->get_id($id_berita),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
		];
		$this->load->view('home/template1/p_berita_detail',$data);
	}
	public function kontak($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
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
		$this->load->view('home/template1/p_kontak',$data);
	}
		public function agendadetail($subdomain,$id_agenda)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
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
			'agenda' => $this->Agenda_model->get_id($id_agenda),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
		];
		$this->load->view('home/template1/p_agenda_detail',$data);
	}
}
