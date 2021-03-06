<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_siswa extends CI_Model{

    public function tambah()
    {
        $id_kelas = $this->input->post('id_kelas');
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
            'tahun1' => $tahun1,
            'id_kelas' => $id_kelas
            );
        return $this->db->insert('murid',$data);
    }

    public function getData(){
        $data = $this->db->get('murid');
        return $data->result();
    }

    public function getSingle($id){
        $data = $this->db->get_where('murid', array('id_murid' => $id));
        return $data->row_array();
    }

    public function updateData($id){
        $id_kelas = $this->input->post('id_kelas');
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
            'id_kelas' => $id_kelas,
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
            'tahun1' => $tahun1,
        );

        //print_r($data);
        return $this->db->update('murid', $data, array('id_murid' => $id));
    }

    public function deleteData($id)
    {
        $this->db->delete('murid', array('ID_MURID' => $id));
    }

}