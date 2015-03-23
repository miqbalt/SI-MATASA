<?php

class TunjukKelas extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->load->model("m_tunjukKelas");
        $data['data'] = $this->m_tunjukKelas->read();
        $this->load->model('m_guru');
        $data['guru'] = $this->m_guru->getData();
        $this->load->model('m_kelas');
        $data['kelas'] = $this->m_kelas->getData();
        $this->load->view("header_view");
        $this->load->view("tunjuk_kelas_view",$data);
        $this->load->view("footer_view");
    }

    public function Insert()
    {
        $this->load->view('header_view');
        $this->load->view('jenisnilai_insert_view');
        $this->load->view('footer_view');
    }

    public function Save()
    {
        $this->load->model('m_tunjukKelas');
        $this->m_tunjukKelas->insert();
        redirect('tunjukKelas');
    }

    function Delete($id_kelas, $id_guru, $tahun)
    {
        $this->db->delete("dibina_oleh", array('id_kelas' => $id_kelas,'id_guru' => $id_guru, 'tahun_angkatan' => $tahun));
        redirect('tunjukKelas');
    }
}