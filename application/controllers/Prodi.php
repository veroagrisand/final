<?php

class Prodi extends CI_Controller
{


    public function index()
    {

        $data['prodi'] = $this->m_prodi->tampil_data_prodi()->result();
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('prodi', $data);
        $this->load->view('backend/footer');
    }
    public function tambah_aksi_prodi()
    {

        $prodi_kd = $this->input->post('prodi_kd');
        $prodi_nama = $this->input->post('prodi_nama');
        $prodi_jenjang = $this->input->post('prodi_jenjang');
        

        $data = array(
            'prodi_kd'          => $prodi_kd,
            'prodi_nama'          => $prodi_nama,
            'prodi_jenjang'        => $prodi_jenjang,
        );
        $this->m_prodi->input_data_prodi($data, 'prodi');
        redirect('prodi/index');
    }
    public function hapus_prodi($prodi_kd)
    {
        $where = array('prodi_kd' => $prodi_kd);
        $this->m_prodi->hapus_data_prodi($where, 'prodi');
        redirect('prodi/index');
    }
    public function edit_prodi($prodi_kd)
    {
        $where = array('prodi_kd' => $prodi_kd);

        $data['prodi'] = $this->m_prodi->edit_data_prodi($where, 'prodi')->result();
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('edit_prodi', $data);
        $this->load->view('backend/footer');
    }

    public function update_prodi()
    {

        $prodi_kd = $this->input->post('prodi_kd');
        $prodi_nama = $this->input->post('prodi_nama');
        $prodi_jenjang = $this->input->post('prodi_jenjang');
    

        $data = array(
            'prodi_kd'          => $prodi_kd,
            'prodi_nama'          => $prodi_nama,
            'prodi_jenjang'        => $prodi_jenjang,
        );
        $where = array(
            'prodi_kd' => $prodi_kd
        );
        $this->m_prodi->update_data_prodi($where, $data, 'prodi');
        redirect('prodi/index');
    }
    public function detail_prodi($prodi_kd){
        $this->load->model('m_prodi');
        $detail =$this->m_prodi->detail_data($prodi_kd);
        $data['detail_prodi']=$detail;
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('detail_prodi', $data);
        $this->load->view('backend/footer');
    
    }
}?>