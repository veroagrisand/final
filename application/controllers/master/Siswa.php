<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Siswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("SiswaModel");
	}

	public function index(){
		$data = array("semSatu" => $this->SiswaModel->hitung_siswa(1),
		"semDua" => $this->SiswaModel->hitung_siswa(2),
		"semTiga" => $this->SiswaModel->hitung_siswa(3),
		"semEmpat" => $this->SiswaModel->hitung_siswa(4),
		"semLima" => $this->SiswaModel->hitung_siswa(5),
		"semEnam" => $this->SiswaModel->hitung_siswa(6),
		"semSemua" => $this->SiswaModel->hitung_siswa(7));
		$this->load->view("_partial_admin/header");
    $this->load->view("_partial_admin/sidebar");
    $this->load->view("master/siswa/main_view",$data);
    $this->load->view("_partial_admin/footer");
		$this->load->view("master/siswa/siswa_js");
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
		$this->load->view("master/siswa/form_create");
	}

	public function formEdit(){
		$id_siswa = $this->input->post("id_siswa");
		$siswa = $this->SiswaModel->siswa_terpilih($id_siswa);
		$nik = $this->SiswaModel->nikAyahIbu($siswa["id_orang_tua_siswa"]);
		$data["siswa"] = $siswa;
		$data["nik"] = $nik;
		$this->load->view("master/siswa/form_edit",$data);
	}

	public function tambahSiswa(){
		$nama = $this->input->post("nama");
		$nisn = $this->input->post("nisn");
		$alamat = $this->input->post("alamat");
		$kelurahan = ucwords(strtolower($this->input->post("kelurahan")));
		$kecamatan = ucwords(strtolower($this->input->post("kecamatan")));
		$kota = ucwords(strtolower($this->input->post("kota")));
		$provinsi = ucwords(strtolower($this->input->post("provinsi")));
		$tempat_lahir = ucwords(strtolower($this->input->post("tempat_lahir")));
		$tanggal_lahir = $this->input->post("tanggal_lahir");
		$agama = $this->input->post("agama");
		$semester = $this->input->post("semester");
		$nik = $this->input->post("orang_tua");
		$id_orang_tua = $this->SiswaModel->perolehOrangTua($nik,$nik);
		$data_siswa = array("nama_siswa" => $nama, "nisn" => $nisn,"alamat" => $alamat,
		"kelurahan" => $kelurahan, "kecamatan" => $kecamatan,"kota" => $kota,
		"provinsi" => $provinsi, "tempat_lahir" => $tempat_lahir,"tanggal_lahir" => $tanggal_lahir,
		 "agama" => $agama, "semester" => $semester,"id_orang_tua_siswa" => $id_orang_tua['id']);
		$infoSimpan = $this->SiswaModel->tambah_siswa($data_siswa);
		if ($infoSimpan === true) {
			$response = json_encode(['sukses' => true, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}else {
			$response = json_encode(['sukses' => false, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}
	}

	public function editSiswa(){
		$id_siswa = $this->input->post("id_siswa");
		$nama = $this->input->post("nama");
		$nisn = $this->input->post("nisn");
		$alamat = $this->input->post("alamat");
		$kelurahan = ucwords(strtolower($this->input->post("kelurahan")));
		$kecamatan = ucwords(strtolower($this->input->post("kecamatan")));
		$kota = ucwords(strtolower($this->input->post("kota")));
		$provinsi = ucwords(strtolower($this->input->post("provinsi")));
		$tempat_lahir = ucwords(strtolower($this->input->post("tempat_lahir")));
		$tanggal_lahir = $this->input->post("tanggal_lahir");
		$agama = $this->input->post("agama");
		$semester = $this->input->post("semester");
		$nik_ayah = $this->input->post("nik_ayah");
		$nik_ibu = $this->input->post("nik_ibu");
		$id_orang_tua = $this->SiswaModel->perolehOrangTua($nik_ayah,$nik_ibu);
		$data_siswa = array($nama,$nisn,$alamat,$kelurahan,$kecamatan,$kota,
			$provinsi,$tempat_lahir,$tanggal_lahir,$agama,$semester,$id_orang_tua['id']);
		$infoUbah= $this->SiswaModel->ubah_siswa($data_siswa,$id_siswa);
		if ($infoUbah === true) {
			$response = json_encode(['sukses' => true, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}else {
			$response = json_encode(['sukses' => false, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}
	}

	public function hapusSiswa(){
		$id_siswa = $this->input->post("id_siswa");
		$infoHapus = $this->SiswaModel->hapus_siswa($id_siswa);
		if ($infoHapus === true) {
			$response = json_encode(['sukses' => true, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}else {
			$response = json_encode(['sukses' => false, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}
	}

}
