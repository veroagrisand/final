<?php

class M_kelas extends CI_Model
{

    public function tampil_data_kelas()
    {
        return $this->db->get('kelas');
    }

    public function input_data_kelas($data)
    {
        $this->db->insert('kelas', $data);
    }

    public function hapus_data_kelas($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data_kelas($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data_kelas($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detail_data($kelas_kd= NULL){
        $query =$this->db->get_where('kelas',array('kelas_kd'=>$kelas_kd))->row();
}
}