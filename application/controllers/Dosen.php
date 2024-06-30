<?php

class Dosen extends CI_Controller
{


    public function index()
    {

        $data['dosen'] = $this->m_dosen->tampil_data_dsn()->result();
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('dosen', $data);
        $this->load->view('backend/footer');
    }
    public function tambah_aksi_dsn()
    {

        $dsn_nidn = $this->input->post('dsn_nidn');
        $dsn_nama = $this->input->post('dsn_nama');
        $dsn_alamat = $this->input->post('dsn_alamat');
        $dsn_jenkel = $this->input->post('dsn_jenkel');
        $dsn_agama = $this->input->post('dsn_agama');
        $dsn_no_hp = $this->input->post('dsn_no_hp');

        $data = array(
            'dsn_nidn'          => $dsn_nidn,
            'dsn_nama'          => $dsn_nama,
            'dsn_alamat'        => $dsn_alamat,
            'dsn_jenkel'        => $dsn_jenkel,
            'dsn_agama'         => $dsn_agama,
            'dsn_no_hp'         => $dsn_no_hp,
        );
        $this->m_dosen->input_data_dsn($data, 'tb_dosen');
        redirect('dosen/index');
    }
    public function hapus_dsn($dsn_nidn)
    {
        $where = array('dsn_nidn' => $dsn_nidn);
        $this->m_dosen->hapus_data_dsn($where, 'tb_dosen');
        redirect('dosen/index');
    }
    public function edit_dsn($dsn_nidn)
    {
        $where = array('dsn_nidn' => $dsn_nidn);

        $data['dosen'] = $this->m_dosen->edit_data_dsn($where, 'tb_dosen')->result();
        $this->load->view('backend/header');
        $this->load->view('backend/sidebar');
        $this->load->view('edit_dosen', $data);
        $this->load->view('backend/footer');
    }

    public function update_dsn()
    {

        $dsn_nidn = $this->input->post('dsn_nidn');
        $dsn_nama = $this->input->post('dsn_nama');
        $dsn_alamat = $this->input->post('dsn_alamat');
        $dsn_jenkel = $this->input->post('dsn_jenkel');
        $dsn_agama = $this->input->post('dsn_agama');
        $dsn_no_hp = $this->input->post('dsn_no_hp');

        $data = array(
            'dsn_nidn'            => $dsn_nidn,
            'dsn_nama'            => $dsn_nama,
            'dsn_alamat'        => $dsn_alamat,
            'dsn_jenkel'        => $dsn_jenkel,
            'dsn_agama'         => $dsn_agama,
            'dsn_no_hp'         => $dsn_no_hp,
        );
        $where = array(
            'dsn_nidn' => $dsn_nidn
        );
        $this->m_dosen->update_data_dsn($where, $data, 'tb_dosen');
        redirect('dosen/index');
    }
public function detail_dosen($dsn_nidn){
    $this->load->model('m_dosen');
    $detail =$this->m_dosen->detail_data($dsn_nidn);
    $data['detail_dosen']=$detail;
    $this->load->view('backend/header');
    $this->load->view('backend/sidebar');
    $this->load->view('detail_dosen', $data);
    $this->load->view('backend/footer');

}
}