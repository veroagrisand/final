<?php

class M_admin extends CI_Model
{

    public function tampil_data_admin()
    {
        return $this->db->get('admin');
    }

    public function input_data_admin($data)
    {
        $this->db->insert('admin', $data);
    }

    public function hapus_data_admin($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data_admin($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data_admin($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}