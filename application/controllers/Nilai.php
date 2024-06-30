<?php

class Nilai extends CI_Controller
{


    public function index()
    {

        $data['nilai'] = $this->m_nilai->tampil_data_nilai()->result();
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('nilai', $data);
        $this->load->view('backend/footer');
    }
    public function tambah_aksi_nilai()
    {

        $nilai_kd = $this->input->post('nilai_kd');
        $nilai_sem = $this->input->post('nilai_sem');
        $mhs_nim = $this->input->post('mhs_nim');
        $matkul_kd = $this->input->post('matkul_kd');
        $dsn_nidn = $this->input->post('dsn_nidn');
        $hadir = $this->input->post('hadir');
        $tugas = $this->input->post('tugas');
        $kuis= $this->input->post('kuis');
        $uts = $this->input->post('uts');
        $uas = $this->input->post('uas');

        $data = array(
            'nilai_kd'       => $nilai_kd,
            'nilai_sem'      => $nilai_sem,
            'mhs_nim'        => $mhs_nim,
            'dsn_nidn'       => $dsn_nidn,
            'hadir'          => $hadir,
            'tugas'          => $tugas,
            'kuis'           => $kuis,
            'uts'            => $uts,
            'uas'            => $uas,
        );
        $this->m_nilai->input_data_nilai($data, 'nilai');
        redirect('nilai/index');
    }
    public function hapus_nilai($nilai_kd)
    {
        $where = array('nilai_kd' => $nilai_kd);
        $this->m_nilai->hapus_data_nilai($where, 'nilai');
        redirect('nilai/index');
    }
    public function edit_nilai($nilai_kd)
    {
        $where = array('nilai_kd' => $nilai_kd);

        $data['nilai'] = $this->m_nilai->edit_data_nilai($where, 'nilai')->result();
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('edit_nilai', $data);
        $this->load->view('backend/footer');
    }

    public function update_nilai()
    {

        $nilai_kd = $this->input->post('nilai_kd');
        $nilai_sem = $this->input->post('nilai_sem');
        $mhs_nim = $this->input->post('mhs_nim');
        $dsn_nidn = $this->input->post('dsn_nidn');
        $hadir = $this->input->post('hadir');
        $tugas = $this->input->post('tugas');
        $kuis = $this->input->post('kuis');
        $uts = $this->input->post('uts');
        $uas = $this->input->post('uas');

        $data = array(
            'nilai_kd'       => $nilai_kd,
            'nilai_sem'      => $nilai_sem,
            'mhs_nim'        => $mhs_nim,
            'dsn_nidn'       => $dsn_nidn,
            'hadir'          => $hadir,
            'tugas'          => $tugas,
            'kuis'           => $kuis,
            'uts'            => $uts,
            'uas'            => $uas,
        );
        $where = array(
            'nilai_kd' => $nilai_kd
        );
        $this->m_nilai->update_data_nilai($where, $data, 'nilai');
        redirect('nilai/index');
    }
    public function detail_nilai($nilai_kd){
        $this->load->model('m_nilai');
        $detail =$this->m_dosen->detail_data($nilai_kd);
        $data['detail_nilai']=$detail;
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('detail_nilai', $data);
        $this->load->view('backend/footer');
    
    }
}