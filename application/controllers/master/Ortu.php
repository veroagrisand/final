<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Ortu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("OrtuModel");
	}

	public function index(){
		$list_ortu = $this->OrtuModel->list_ortu();
		$list["list_ortu"] = $list_ortu;
		$this->load->view("_partial_admin/header");
    $this->load->view("_partial_admin/sidebar");
    $this->load->view("master/orang_tua/main_view",$list);
    $this->load->view("_partial_admin/footer");
		$this->load->view("master/orang_tua/ortu_js");
	}

	public function formTambah(){
		$this->load->view("master/orang_tua/form_create");
	}

	public function tambahOrtu(){
		$nama_suami = $this->input->post("nama_bapak");
		$nama_istri = $this->input->post("nama_ibu");
		$nik_suami = $this->input->post("nik_bapak");
		$nik_istri = $this->input->post("nik_ibu");
		$tempat_lahir_1 = ucwords(strtolower($this->input->post("tempat_lahir_1")));
		$tanggal_lahir_1 = $this->input->post("tanggal_lahir_1");
		$tempat_lahir_2 = ucwords(strtolower($this->input->post("tempat_lahir_2")));
		$tanggal_lahir_2 = $this->input->post("tanggal_lahir_2");
		$pekerjaan_suami = $this->input->post("pekerjaan_bapak");
		$pekerjaan_istri = $this->input->post("pekerjaan_ibu");
		$data_ortu = array("nama_suami" => $nama_suami,"nama_istri" => $nama_istri,
		"nik_suami" => $nik_suami, "nik_istri" => $nik_istri,
		"tempat_lahir_suami" => $tempat_lahir_1, "tanggal_lahir_suami" => $tanggal_lahir_1,
		"tempat_lahir_istri" => $tempat_lahir_2, "tanggal_lahir_istri" => $tanggal_lahir_2,
		"pekerjaan_suami" => $pekerjaan_suami, "pekerjaan_istri" => $pekerjaan_istri);
		$infoSimpan = $this->OrtuModel->tambah_ortu($data_ortu);
		if ($infoSimpan === true) {
			$response = json_encode(['sukses' => true, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}else {
			$response = json_encode(['sukses' => false, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}
	}

	public function formEdit(){
		$id_ortu = $this->input->post("id_ortu");
		$data["ortu"] = $this->OrtuModel->ortu_terpilih($id_ortu);
		$this->load->view("master/orang_tua/form_edit",$data);
	}

	public function editOrtu(){
		$id_ortu = $this->input->post("id_ortu");
		$nama_suami = $this->input->post("nama_bapak");
		$nama_istri = $this->input->post("nama_ibu");
		$nik_suami = $this->input->post("nik_bapak");
		$nik_istri = $this->input->post("nik_ibu");
		$tempat_lahir_1 = ucwords(strtolower($this->input->post("tempat_lahir_1")));
		$tanggal_lahir_1 = $this->input->post("tanggal_lahir_1");
		$tempat_lahir_2 = ucwords(strtolower($this->input->post("tempat_lahir_2")));
		$tanggal_lahir_2 = $this->input->post("tanggal_lahir_2");
		$pekerjaan_suami = $this->input->post("pekerjaan_bapak");
		$pekerjaan_istri = $this->input->post("pekerjaan_ibu");
		$data_ortu = array($nama_suami,$nama_istri,$nik_suami,$nik_istri,
		$tempat_lahir_1, $tanggal_lahir_1,$tempat_lahir_2, $tanggal_lahir_2,
		$pekerjaan_suami,$pekerjaan_istri);
		$infoUbah = $this->OrtuModel->ubah_ortu($data_ortu,$id_ortu);
		if ($infoUbah === true) {
			$response = json_encode(['sukses' => true, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}else {
			$response = json_encode(['sukses' => false, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}
	}

	public function hapusOrtu(){
		$id_ortu = $this->input->post("id_ortu");
		$infoHapus = $this->OrtuModel->hapus_ortu($id_ortu);
		if ($infoHapus === true) {
			$response = json_encode(['sukses' => true, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}else {
			$response = json_encode(['sukses' => false, 'message' => 'Status berhasil diperbarui']);
			$this->output->set_content_type("application/json")->set_output($response);
		}
	}

}
