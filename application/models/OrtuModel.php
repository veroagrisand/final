<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrtuModel extends CI_Model
{
    private $perintah;
    private $query;
    private $result;

    public function __construct(){
        parent::__construct();
    }

    public function list_ortu(){
      $this->perintah = "SELECT * FROM orang_tua";
      $this->query = $this->db->query($this->perintah);
      $this->result = $this->query->result_array();
      return $this->result;
    }

    public function ortu_terpilih($id_ortu){
      $this->perintah = "SELECT * FROM orang_tua WHERE id_orang_tua = ?";
      $this->query = $this->db->query($this->perintah,$id_ortu);
      $this->result = $this->query->row_array();
      return $this->result;
    }

    public function tambah_ortu($data_ortu){
      $status = null;
      $this->db->trans_start();
      $this->db->insert("orang_tua",$data_ortu);
      $this->db->trans_complete();
      if ($this->db->trans_status() === FALSE) {
        $status = false;
      }else {
        $status = true;
      }
      return $status;
    }

    public function ubah_ortu($data_ortu,$id_ortu){
      $status = null;
      $this->db->trans_start();
      $fields = array("nama_suami","nama_istri","nik_suami","nik_istri",
      "tempat_lahir_suami","tanggal_lahir_suami","tempat_lahir_istri","tanggal_lahir_istri",
      "pekerjaan_suami","pekerjaan_istri");
      for ($i=0; $i < count($fields); $i++) {
        $this->db->set($fields[$i],$data_ortu[$i]);
      }
      $this->db->where("id_orang_tua",$id_ortu);
      $this->db->update("orang_tua");
      $this->db->trans_complete();
      if ($this->db->trans_status() === FALSE) {
        $status = false;
      }else {
        $status = true;
      }
      return $status;
    }

    public function hapus_ortu($id_ortu){
      $status = null;
      $this->db->trans_start();
      $this->db->where("id_orang_tua",$id_ortu);
      $this->db->delete("orang_tua");
      $this->db->trans_complete();
      if ($this->db->trans_status() === FALSE) {
        $status = false;
      }else {
        $status = true;
      }
      return $status;
    }
}
