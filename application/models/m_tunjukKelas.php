<?php

class M_tunjukKelas extends CI_Model {

    function insert()
    {
        $id_kelas = $this->input->post("id_kelas");
        $id_guru = $this->input->post("id_guru");
        $tahun = $this->input->post('tahun_angkatan');
        $data = array (
            'id_guru' => $id_guru,
            'id_kelas' => $id_kelas,
            'tahun_angkatan' => $tahun
        );

        $this->db->insert("dibina_oleh",$data);
    }

    function read()
    {
        return $this->db->get('dibina_oleh')->result();
    }

    /*public function getSingle($id){
        $data = $this->db->get_where('dibina_oleh', array('id_jenisnilai' => $id));
        return $data->row_array();
    }*/

    public function getData(){
        $data = $this->db->get('dibina_oleh');
        return $data->result();
    }

    /*function select($id)
    {
        return $this->db->get_where("jenisnilai",  array('id_jenisnilai' => $id))->row();
    }*/

    function Delete($id_kelas, $id_guru, $tahun)
    {
        $this->db->delete("dibina_oleh", array('id_kelas' => $id_kelas,'id_guru' => $id_guru, 'tahun_angkatan' => $tahun));
    }
}