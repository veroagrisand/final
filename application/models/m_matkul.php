<?php

class M_matkul extends CI_Model
{

    public function tampil_data_matkul()
    {
        return $this->db->get('matkul');
    }

    public function input_data_matkul($data)
    {
        $this->db->insert('matkul', $data);
    }

    public function hapus_data_matkul($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data_matkul($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data_matkul($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detail_data($matkul_id= NULL){
        $query =$this->db->get_where('matkul',array('matkul_id'=>$matkul_id))->row();
}
}