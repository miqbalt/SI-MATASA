<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_siswa extends CI_Model{

    public function tambah()
    {
        $id_murid = $this->input->post('id_murid');
        $nama = $this->input->post('nama');
        $nisn = $this->input->post('nisn');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $no_telepon = $this->input->post('no_telepon');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $ayah = $this->input->post('ayah');
        $ibu = $this->input->post('ibu');
        $pekerjaan_ortu = $this->input->post('pekerjaan_ortu');
        $gaji = $this->input->post('gaji');
        $tahun1 = $this->input->post('tahun1');
        $data = array(
            'id_murid' => $id_murid,
            'nama' => $nama,
            'nisn' => $nisn,
            'jenis_kelamin' => $jenis_kelamin,
            'username' => $username,
            'password' => $password,
            'alamat' => $alamat,
            'nomor_telepon' => $no_telepon,
            'tanggal_lahir' => $tanggal_lahir,
            'ayah' => $ayah,
            'ibu' => $ibu,
            'pekerjaan_ortu' => $pekerjaan_ortu,
            'gaji' => $gaji,
            'tahun1' => $tahun1
            );
        return $this->db->insert('murid',$data);
    }

    public function getData(){
        $data = $this->db->get('murid');
        return $data->result();
    }

}