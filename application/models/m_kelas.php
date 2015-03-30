<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Kelas extends CI_Model{

    public function tambah()
    {
        $nama_kelas = $this->input->post('nama_kelas');
        $id_kelas = $this->input->post('id_kelas');
        $data = array(
            'id_kelas' => $id_kelas,
            'nama_kelas' => $nama_kelas
        );
        return $this->db->insert('kelas',$data);
    }

    public function getData(){
        $data = $this->db->get('kelas');
        return $data->result();
    }

    public function getSingle($id){
        $data = $this->db->get_where('kelas', array('id_kelas' => $id));
        return $data->row_array();
    }

    public function updateData($id){
        $nama = $this->input->post('nama');
        $data = array(
            'nama_kelas' => $nama
        );

        print_r($data);
        return $this->db->update('kelas', $data, array('id_kelas' => $id));
    }

    public function deleteData($id)
    {
        $this->db->delete('kelas', array('ID_KELAS' => $id));
    }

}