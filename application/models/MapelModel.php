<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MapelModel extends CI_Model
{
    private $perintah;
    private $query;
    private $result;

    public function __construct(){
        parent::__construct();
    }

    public function list_mapel($semester,$kategori){
      if ($semester == 7) {
        $this->perintah = "SELECT * FROM mata_pelajaran";
        $this->query = $this->db->query($this->perintah);
      }elseif($semester == "awal"){
        $this->perintah = "SELECT * FROM mata_pelajaran WHERE kategori = ? AND
        semester = 1 OR  semester = 2 ";
        $this->query = $this->db->query($this->perintah,$kategori);
      }elseif ($semester == "menengah") {
        $this->perintah = "SELECT * FROM mata_pelajaran WHERE kategori = ? AND
        semester = 3 OR semester = 4";
        $this->query = $this->db->query($this->perintah,$kategori);
      }elseif ($semester == "akhir") {
        $this->perintah = "SELECT * FROM mata_pelajaran WHERE kategori = ? AND
        semester = 5 OR semester = 6";
        $this->query = $this->db->query($this->perintah,$kategori);
      }
      $this->result = $this->query->result_array();
      return $this->result;
    }

    public function hitung_mapel($semester){
      $this->perintah = "SELECT COUNT(id_mata_pelajaran) AS
      jumlah_mapel FROM mata_pelajaran WHERE kategori = ? AND semester = ? OR semester = ? ";
      $this->query = $this->db->query($this->perintah,array($semester["kategori"],
      $semester["index-1"],$semester["index-2"]));
      $this->result = $this->query->row_array();
      return $this->result;
    }

    public function mapel_terpilih($id_mapel){
      $this->perintah = "SELECT * FROM mata_pelajaran WHERE id_mata_pelajaran = ?";
      $this->query = $this->db->query($this->perintah,$id_mapel);
      $this->result = $this->query->row_array();
      return $this->result;
    }

    public function tambah_mapel($data_mapel){
      $status = null;
      $this->db->trans_start();
      $this->db->insert("mata_pelajaran",$data_mapel);
      $this->db->trans_complete();
      if ($this->db->trans_status() === FALSE) {
        $status = false;
      }else {
        $status = true;
      }
      return $status;
    }

    public function ubah_mapel($data_mapel,$id_mapel){
      $status = null;
      $this->db->trans_start();
      $fields = array("kode_mapel","nama_mapel","semester","kategori");
      for ($i=0; $i < count($fields); $i++) {
        $this->db->set($fields[$i],$data_mapel[$i]);
      }
      $this->db->where("id_mata_pelajaran",$id_mapel);
      $this->db->update("mata_pelajaran");
      $this->db->trans_complete();
      if ($this->db->trans_status() === FALSE) {
        $status = false;
      }else {
        $status = true;
      }
      return $status;
    }

    public function hapus_mapel($id_mapel){
      $status = null;
      $this->db->trans_start();
      $this->db->where("id_mata_pelajaran",$id_mapel);
      $this->db->delete("mata_pelajaran");
      $this->db->trans_complete();
      if ($this->db->trans_status() === FALSE) {
        $status = false;
      }else {
        $status = true;
      }
      return $status;
    }
}
