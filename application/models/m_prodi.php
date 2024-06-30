<?php

class M_prodi extends CI_Model
{

    public function tampil_data_prodi()
    {
        return $this->db->get('prodi');
    }

    public function input_data_prodi($data)
    {
        $this->db->insert('prodi', $data);
    }

    public function hapus_data_prodi($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data_prodi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data_prodi($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detail_data($prodi_kd= NULL){
        $query =$this->db->get_where('prodi',array('prodi_kd'=>$prodi_kd))->row();
}
}