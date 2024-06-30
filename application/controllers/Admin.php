<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("DashboardModel");
	}

	public function index(){
		$hitung_siswa = $this->DashboardModel->hitung_siswa();
		$hitung_guru = $this->DashboardModel->hitung_guru();
		$hitung_ruangan = $this->DashboardModel->hitung_ruangan();
		$hitung_mapel = $this->DashboardModel->hitung_mapel();
		$data = array("jumlah_siswa" => $hitung_siswa["jumlah_siswa"],
									"jumlah_guru" => $hitung_guru["jumlah_guru"],
									"jumlah_ruangan" => $hitung_ruangan["jumlah_ruang"],
								  "jumlah_mapel" => $hitung_mapel["jumlah_mapel"]);
		$this->load->view("_partial_admin/header");
    $this->load->view("_partial_admin/sidebar");
    $this->load->view("master/dashboard",$data);
    $this->load->view("_partial_admin/footer");
	}

	public function admin_login(){
		$this->load->view("admin_login.php");
	}

}
