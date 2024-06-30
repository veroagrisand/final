<?php

class M_nilai extends CI_Model
{

    public function tampil_data_nilai()
    {
        return $this->db->get('nilai');
    }

    public function input_data_nilai($data)
    {
        $this->db->insert('nilai', $data);
    }

    public function hapus_data_nilai($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data_nilai($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data_nilai($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detail_data($nilai_kd= NULL){
        $query =$this->db->get_where('nilai',array('nilai_kd'=>$nilai_kd))->row();
}
}