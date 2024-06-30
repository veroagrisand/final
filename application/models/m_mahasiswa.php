<?php

class M_mahasiswa extends CI_Model
{

    public function tampil_data_mhs()
    {
        return $this->db->get('mahasiswa');
    }

    public function input_data_mhs($data)
    {
        $this->db->insert('mahasiswa', $data);
    }

    public function hapus_data_mhs($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data_mhs($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data_mhs($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detail_data($mhs_nim= NULL){
        $query =$this->db->get_where('mahasiswa',array('mhs_nim'=>$mhs_nim))->row();
}
}