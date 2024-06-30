<?php

class Mahasiswa extends CI_Controller
{


    public function index()
    {

        $data['mahasiswa'] = $this->m_mahasiswa->tampil_data_mhs()->result();
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('mahasiswa', $data);
        $this->load->view('backend/footer');
    }
    public function tambah_aksi_mhs()
    {

        $mhs_nim = $this->input->post('mhs_nim');
        $mhs_nama = $this->input->post('mhs_nama');
        $mhs_alamat = $this->input->post('mhs_alamat');
        $mhs_tempat_lahir = $this->input->post('mhs_tempat_lahir');
        $mhs_tgl_lahir = $this->input->post('mhs_tgl_lahir');
        $mhs_jenkel = $this->input->post('mhs_jenkel');
        $mhs_agama = $this->input->post('mhs_agama');
        $mhs_foto= $this->input->post('mhs_foto');
        $kelas_kd = $this->input->post('kelas_kd');
        $prodi_kd = $this->input->post('prodi_kd');

        $data = array(
            'mhs_nim'                => $mhs_nim,
            'mhs_nama'               => $mhs_nama,
            'mhs_alamat'             => $mhs_alamat,
            'mhs_tempat_lahir'       => $mhs_tempat_lahir,
            'mhs_tgl_lahir'          => $mhs_tgl_lahir,
            'mhs_jenkel'          => $mhs_jenkel,
            'mhs_agama'           => $mhs_agama,
            'mhs_foto'            => $mhs_foto,
            'kelas_kd'            => $kelas_kd,
            'prodi_kd'            => $prodi_kd,
        );
        $this->m_mahasiswa->input_data_mhs($data, 'mahasiswa');
        redirect('mahasiswa/index');
    }
    public function hapus_mhs($mhs_nim)
    {
        $where = array('mhs_nim' => $mhs_nim);
        $this->m_mahasiswa->hapus_data_mhs($where, 'mahasiswa');
        redirect('mahasiswa/index');
    }
    public function edit_mhs($mhs_nim)
    {
        $where = array('mhs_nim' => $mhs_nim);

        $data['mahasiswa'] = $this->m_mahasiswa->edit_data_mhs($where, 'mahasiswa')->result();
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('edit_mhs', $data);
        $this->load->view('backend/footer');
    }

    public function update_mhs()
    {

        $mhs_nim = $this->input->post('mhs_nim');
        $mhs_nama = $this->input->post('mhs_nama');
        $mhs_alamat = $this->input->post('mhs_alamat');
        $mhs_tempat_lahir = $this->input->post('mhs_tempat_lahir');
        $mhs_tgl_lahir = $this->input->post('mhs_tgl_lahir');
        $mhs_jenkel = $this->input->post('mhs_jenkel');
        $mhs_agama = $this->input->post('mhs_agama');
        $mhs_foto= $this->input->post('mhs_foto');
        $kelas_kd = $this->input->post('kelas_kd');
        $prodi_kd = $this->input->post('prodi_kd');

        $data = array(
            'mhs_nim'                => $mhs_nim,
            'mhs_nama'               => $mhs_nama,
            'mhs_alamat'             => $mhs_alamat,
            'mhs_tempat_lahir'       => $mhs_tempat_lahir,
            'mhs_tgl_lahir'          => $mhs_tgl_lahir,
            'mhs_jenkel'          => $mhs_jenkel,
            'mhs_agama'           => $mhs_agama,
            'mhs_foto'            => $mhs_foto,
            'kelas_kd'            => $kelas_kd,
            'prodi_kd'            => $prodi_kd,
        );
        $where = array(
            'mhs_nim' => $mhs_nim
        );
        $this->m_mahasiswa->update_data_mhs($where, $data, 'mahasiswa');
        redirect('mahasiswa/index');
    }
    public function detail_mhs($mhs_nim){
        $this->load->model('m_mahasiswa');
        $detail =$this->m_mahasiswa->detail_data($mhs_nim);
        $data['detail_mhs']=$detail;
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('detail_mhs', $data);
        $this->load->view('backend/footer');
    
    }
}