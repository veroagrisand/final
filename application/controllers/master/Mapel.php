<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Mapel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("MapelModel");
	}

	public function index(){
		$semAwal_A = array("index-1" => 1,"index-2" => 2,"kategori" => "Ilmu Alam");
		$semMenengah_A = array("index-1" => 3,"index-2" => 4,"kategori" => "Ilmu Alam");
		$semAkhir_A = array("index-1" => 5,"index-2" => 6,"kategori" => "Ilmu Alam");
		$semAwal_S = array("index-1" => 1,"index-2" => 2,"kategori" => "Ilmu Sosial");
		$semMenengah_S = array("index-1" => 3,"index-2" => 4,"kategori" => "Ilmu Sosial");
		$semAkhir_S = array("index-1" => 5,"index-2" => 6,"kategori" => "Ilmu Sosial");
		$semAwal_U = array("index-1" => 1,"index-2" => 2,"kategori" => "Ilmu Umum");
		$semMenengah_U = array("index-1" => 3,"index-2" => 4,"kategori" => "Ilmu Umum");
		$semAkhir_U = array("index-1" => 5,"index-2" => 6,"kategori" => "Ilmu Umum");
		$data["list_count"] = array(array($this->MapelModel->hitung_mapel($semAwal_A),
		$this->MapelModel->hitung_mapel($semMenengah_A),$this->MapelModel->hitung_mapel($semAkhir_A)),
			array($this->MapelModel->hitung_mapel($semAwal_S),
			$this->MapelModel->hitung_mapel($semMenengah_S),
			$this->MapelModel->hitung_mapel($semAkhir_S)),
			array($this->MapelModel->hitung_mapel($semAwal_U),
			$this->MapelModel->hitung_mapel($semMenengah_U),
			$this->MapelModel->hitung_mapel($semAkhir_U)));
		$data["url"] = array(array("master/mata-pelajaran/awal/ilmu-alam",
		"master/mata-pelajaran/menengah/ilmu-alam","master/mata-pelajaran/akhir/ilmu-alam"),
		array("master/mata-pelajaran/awal/ilmu-sosial",
		"master/mata-pelajaran/menengah/ilmu-sosial","master/mata-pelajaran/akhir/ilmu-sosial"),
		array("master/mata-pelajaran/awal/ilmu-umum",
		"master/mata-pelajaran/menengah/ilmu-umum","master/mata-pelajaran/akhir/ilmu-umum"));
		$this->load->view("_partial_admin/header");
    $this->load->view("_partial_admin/sidebar");
    $this->load->view("master/mata_pelajaran/main_view",$data);
    $this->load->view("_partial_admin/footer");
		$this->load->view("master/mata_pelajaran/mapel_js");
	}

	public function listMapel($semester,$kategori){
		$list_mapel = null;
		if ($semester == "awal" && $kategori == "ilmu-alam") {
			$list_mapel = $this->MapelModel->list_mapel("awal","Ilmu Alam");
		}elseif ($semester == "menengah" && $kategori == "ilmu-alam") {
			$list_mapel = $this->MapelModel->list_mapel("menengah","Ilmu Alam");
		}elseif ($semester == "akhir" && $kategori == "ilmu-alam") {
			$list_mapel = $this->MapelModel->list_mapel("akhir","Ilmu Alam");
		}elseif ($semester == "awal" && $kategori == "ilmu-sosial") {
			$list_mapel = $this->MapelModel->list_mapel("awal","Ilmu Sosial");
		}elseif ($semester == "menengah" && $kategori == "ilmu-sosial") {
			$list_mapel = $this->MapelModel->list_mapel("menengah","Ilmu Sosial");
		}elseif ($semester == "akhir" && $kategori == "ilmu-sosial") {
			$list_mapel = $this->MapelModel->list_mapel("akhir","Ilmu Sosial");
		}elseif ($semester == "awal" && $kategori == "ilmu-umum") {
			$list_mapel = $this->MapelModel->list_mapel("awal","Ilmu Umum");
		}elseif ($semester == "menengah" && $kategori == "ilmu-umum") {
			$list_mapel = $this->MapelModel->list_mapel("menengah","Ilmu Umum");
		}elseif ($semester == "akhir" && $kategori == "ilmu-umum") {
			$list_mapel = $this->MapelModel->list_mapel("akhir","Ilmu Umum");
		}elseif ($kategori == "semua") {
			$list_mapel = $this->MapelModel->list_mapel(7,"");
		}
		$data["list_mapel"] = $list_mapel;
		$this->load->view("_partial_admin/header");
    $this->load->view("_partial_admin/sidebar");
    $this->load->view("master/mata_pelajaran/list_mapel",$data);
    $this->load->view("_partial_admin/footer");
		$this->load->view("master/mata_pelajaran/mapel_js");
	}

	public function formTambah(){
		$this->load->view("master/mata_pelajaran/form_create");
	}

	public function formEdit(){
		$id_mapel = $this->input->post("id_mapel");
		$mapel = $this->MapelModel->mapel_terpilih($id_mapel);
		$data["mapel"] = $mapel;
		$this->load->view("master/mata_pelajaran/form_edit",$data);
	}

	public function tambahMapel(){
		$kode = $this->input->post("kode_mapel");
		$nama = $this->input->post("nama_mapel");
		$semester = $this->input->post("semester");
		$kategori = $this->input->post("kategori");
		$data_mapel = array("kode_mapel" => $kode, "nama_mapel" => $nama,"semester" => $semester,
		"kategori" => $kategori);
		$infoSimpan = $this->MapelModel->tambah_mapel($data_mapel);
		if ($infoSimpan === true) {
			$response = json_encode(['sukses' => true, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}else {
			$response = json_encode(['sukses' => false, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}
	}

	public function editMapel(){
		$id_mapel = $this->input->post("id_mapel");
		$kode = $this->input->post("kode_mapel");
		$nama = $this->input->post("nama_mapel");
		$semester = $this->input->post("semester");
		$kategori = $this->input->post("kategori");
		$data_mapel = array($kode,$nama,$semester,$kategori);
		$infoUbah= $this->MapelModel->ubah_mapel($data_mapel,$id_mapel);
		if ($infoUbah === true) {
			$response = json_encode(['sukses' => true, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}else {
			$response = json_encode(['sukses' => false, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}
	}

	public function hapusMapel(){
		$id_mapel = $this->input->post("id_mapel");
		$infoHapus = $this->MapelModel->hapus_mapel($id_mapel);
		if ($infoHapus === true) {
			$response = json_encode(['sukses' => true, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}else {
			$response = json_encode(['sukses' => false, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}
	}

}
