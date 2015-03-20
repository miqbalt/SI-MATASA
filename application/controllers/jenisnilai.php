<?php

class Jenisnilai extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}

	public function Index()
	{
		$data['hasil'] = "";
		$this->load->model("m_jenisnilai");
		$data['jenisnilai'] = $this->m_jenisnilai->read();
		$this->load->view("header_view");
		$this->load->view("jenisnilai_view",$data);
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
		$this->load->model('m_jenisnilai');
		$this->m_jenisnilai->insert();
		redirect('jenisnilai');
	}

	public function Delete($id)
	{
		$this->db->delete("jenisnilai",  array('id_jenisnilai' => $id ));
		redirect('jenisnilai');
	}
}