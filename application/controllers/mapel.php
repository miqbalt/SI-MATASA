<?php

class Mapel extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}

	public function Index()
	{
		$data['hasil'] = "";
		$this->load->model("m_mapel");
		$data['mapel'] = $this->m_mapel->read();
		$this->load->view("header_view");
		$this->load->view("mapel_view",$data);
		$this->load->view("footer_view");
	}

	public function Insert()
	{
        $this->load->view('header_view');
        $this->load->view('mapel_insert_view');
        $this->load->view('footer_view');
	}

	public function Save()
	{
		$this->load->model('m_mapel');
		$this->m_mapel->insert();
		redirect('mapel');
	}

	public function Edit($id)
	{
		$this->load->model('m_mapel');
		$data['data'] = $this->m_mapel->getSingle($id);
		$this->load->view('header_view');
		$this->load->view('mapel_update_view',$data);
		$this->load->view('footer_view');
	}

	public function Update($id)
	{
		$this->load->model('m_mapel');
		$data['data'] = $this->m_mapel->getSingle($id);
		$this->m_mapel->updateData($id);
		redirect('mapel/index');
	}

	public function Delete($id)
	{
		$this->db->delete("mata_pelajaran",  array('id_mata_pelajaran' => $id ));
		redirect('mapel');
	}
}