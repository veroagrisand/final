<?php

class Kelas extends CI_Controller
{


    public function index()
    {

        $data['kelas'] = $this->m_kelas->tampil_data_kelas()->result();
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('kelas', $data);
        $this->load->view('backend/footer');
    }
    public function tambah_aksi_kelas()
    {

        $kelas_kd = $this->input->post('kelas_kd');
        $kelas_nama = $this->input->post('kelas_nama');
     
        

        $data = array(
            'kelas_kd'          => $kelas_kd,
            'kelas_nama'          => $kelas_nama,
            
        );
        $this->m_kelas->input_data_kelas($data, 'kelas');
        redirect('kelas/index');
    }
    public function hapus_kelas($kelas_kd)
    {
        $where = array('kelas_kd' => $kelas_kd);
        $this->m_kelas->hapus_data_kelas($where, 'kelas');
        redirect('kelas/index');
    }
    public function edit_kelas($kelas_kd)
    {
        $where = array('kelas_kd' => $kelas_kd);

        $data['kelas'] = $this->m_kelas->edit_data_kelas($where, 'kelas')->result();
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('edit_kelas', $data);
        $this->load->view('backend/footer');
    }

    public function update_kelas()
    {

        $kelas_kd = $this->input->post('kelas_kd');
        $kelas_nama = $this->input->post('kelas_nama');
        
    
        $data = array(
            'kelas_kd'          => $kelas_kd,
            'kelas_nama'          => $kelas_nama,
            
        );
        $where = array(
            'kelas_kd' => $kelas_kd
        );
        $this->m_kelas->update_data_kelas($where, $data, 'kelas');
        redirect('kelas/index');
    }
    public function detail_kelas($kelas_kd){
        $this->load->model('m_kelas');
        $detail =$this->m_kelas->detail_data($kelas_kd);
        $data['detail_kelas']=$detail;
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('detail_kelas', $data);
        $this->load->view('backend/footer');
    
    }
}?>