<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardModel extends CI_Model
{
    private $perintah;
    private $query;
    private $result;

    public function __construct(){
        parent::__construct();
    }

    public function hitung_siswa(){
        $this->perintah = "SELECT COUNT(nisn) as jumlah_siswa FROM siswa";
        $this->query = $this->db->query($this->perintah);
        $this->result = $this->query->row_array();
        return $this->result;
    }

    public function hitung_guru(){
        $this->perintah = "SELECT COUNT(nuptk) as jumlah_guru FROM guru";
        $this->query = $this->db->query($this->perintah);
        $this->result = $this->query->row_array();
        return $this->result;
    }

    public function hitung_ruangan(){
        $this->perintah = "SELECT COUNT(id_ruang_belajar) as jumlah_ruang FROM ruang_belajar";
        $this->query = $this->db->query($this->perintah);
        $this->result = $this->query->row_array();
        return $this->result;
    }

    public function hitung_mapel(){
        $this->perintah = "SELECT COUNT(id_mata_pelajaran) as jumlah_mapel FROM mata_pelajaran";
        $this->query = $this->db->query($this->perintah);
        $this->result = $this->query->row_array();
        return $this->result;
    }
}
