<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Kelas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("KelasModel");
	}

	public function index(){
		$data["list_kelas"] = $this->KelasModel->list_kelas();
		$this->load->view("_partial_admin/header");
    $this->load->view("_partial_admin/sidebar");
    $this->load->view("master/kelas/main_view",$data);
    $this->load->view("_partial_admin/footer");
		$this->load->view("master/kelas/kelas_js");
	}

	public function listSiswa($semester){
		$list_siswa = null;
		$keterangan = null;
		if ($semester == 1) {
			$list_siswa = $this->SiswaModel->list_siswa(1);
			$keterangan= "Semester-I";
		}elseif ($semester == 2) {
			$list_siswa = $this->SiswaModel->list_siswa(2);
			$keterangan = "Semester-II";
		}elseif ($semester == 3) {
			$list_siswa = $this->SiswaModel->list_siswa(3);
			$keterangan = "Semester-III";
		}elseif ($semester == 4) {
			$list_siswa = $this->SiswaModel->list_siswa(4);
			$keterangan = "Semester-IV";
		}elseif ($semester == 5) {
			$list_siswa = $this->SiswaModel->list_siswa(5);
			$keterangan = "Semester-V";
		}elseif ($semester == 6) {
			$list_siswa = $this->SiswaModel->list_siswa(6);
			$keterangan = "Semester-VI";
		}elseif ($semester == 7) {
			$list_siswa = $this->SiswaModel->list_siswa(7);
			$keterangan = "";
		}
		$data["list_siswa"] = $list_siswa;
		$data["keterangan"] = $keterangan;
		$this->load->view("_partial_admin/header");
    $this->load->view("_partial_admin/sidebar");
    $this->load->view("master/siswa/list_siswa",$data);
    $this->load->view("_partial_admin/footer");
		$this->load->view("master/siswa/siswa_js");
	}

	public function formTambah(){
		$this->load->view("master/kelas/form_create");
	}

	public function formEdit(){
		$id_kelas = $this->input->post("id_kelas");
		$kelas = $this->KelasModel->kelas_terpilih($id_kelas);
		$data["kelas"] = $kelas;
		$this->load->view("master/kelas/form_edit",$data);
	}

	public function tambahKelas(){
		$kode_ruang = $this->input->post("kode_ruang");
		$semester = $this->input->post("semester");
		$muatan = $this->input->post("muatan");
		$data_siswa = array("kode_ruang_belajar" => $kode_ruang,
		"sifat_semester" => $semester,"jumlah_muatan" => $muatan);
		$infoSimpan = $this->KelasModel->tambah_kelas($data_siswa);
		if ($infoSimpan === true) {
			$response = json_encode(['sukses' => true, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}else {
			$response = json_encode(['sukses' => false, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}
	}

	public function editKelas(){
		$id_kelas = $this->input->post("id_kelas");
		$kode_ruang = $this->input->post("kode_ruang");
		$semester = $this->input->post("semester");
		$muatan = $this->input->post("muatan");
		$data_kelas = array($kode_ruang,$semester,$muatan);
		$infoUbah= $this->KelasModel->ubah_kelas($data_kelas,$id_kelas);
		if ($infoUbah === true) {
			$response = json_encode(['sukses' => true, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}else {
			$response = json_encode(['sukses' => false, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}
	}

	public function hapusKelas(){
		$id_kelas = $this->input->post("id_kelas");
		$infoHapus = $this->KelasModel->hapus_kelas($id_kelas);
		if ($infoHapus === true) {
			$response = json_encode(['sukses' => true, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}else {
			$response = json_encode(['sukses' => false, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}
	}

}
