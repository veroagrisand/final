<?php

class Matkul extends CI_Controller
{


    public function index()
    {

        $data['matkul'] = $this->m_matkul->tampil_data_matkul()->result();
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('matkul', $data);
        $this->load->view('backend/footer');
    }
    public function tambah_aksi_matkul()
    {

        $matkul_id = $this->input->post('matkul_id');
        $matkul_nama = $this->input->post('matkul_nama');
        $matkul_sks = $this->input->post('matkul_sks');
        

        $data = array(
            'matkul_id'          => $matkul_id,
            'matkul_nama'          => $matkul_nama,
            'matkul_sks'        => $matkul_sks,
        );
        $this->m_matkul->input_data_matkul($data, 'matkul');
        redirect('matkul/index');
    }
    public function hapus_matkul($matkul_id)
    {
        $where = array('matkul_id' => $matkul_id);
        $this->m_matkul->hapus_data_matkul($where, 'matkul');
        redirect('matkul/index');
    }
    public function edit_matkul($matkul_id)
    {
        $where = array('matkul_id' => $matkul_id);

        $data['matkul'] = $this->m_matkul->edit_data_matkul($where, 'matkul')->result();
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('edit_matkul', $data);
        $this->load->view('backend/footer');
    }

    public function update_matkul()
    {

        $matkul_id = $this->input->post('matkul_id');
        $matkul_nama = $this->input->post('matkul_nama');
        $matkul_sks = $this->input->post('matkul_sks');
    
        $data = array(
            'matkul_id'          => $matkul_id,
            'matkul_nama'          => $matkul_nama,
            'matkul_sks'        => $matkul_sks,
        );
        $where = array(
            'matkul_id' => $matkul_id
        );
        $this->m_matkul->update_data_matkul($where, $data, 'matkul');
        redirect('matkul/index');
    }
    public function detail_matkul($matkul_id){
        $this->load->model('m_matkul');
        $detail =$this->m_matkul->detail_data($matkul_id);
        $data['detail_matkul']=$detail;
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('detail_matkul', $data);
        $this->load->view('backend/footer');
    
    }
}?>