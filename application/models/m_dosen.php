<?php

class M_dosen extends CI_Model
{

    public function tampil_data_dsn()
    {
        return $this->db->get('tb_dosen');
    }

    public function input_data_dsn($data)
    {
        $this->db->insert('tb_dosen', $data);
    }

    public function hapus_data_dsn($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data_dsn($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data_dsn($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detail_data($dsn_nidn= NULL){
        $query =$this->db->get_where('tb_dosen',array('dsn_nidn'=>$dsn_nidn))->row();
    }
}