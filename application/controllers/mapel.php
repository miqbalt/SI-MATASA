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
		$data['hasil'] = "";
		if($this->input->post('submit'))
		{
			$this->load->model("m_mapel");
			$cek = $this->m_mapel->insert();
			if($cek)
			{
				$data['hasil'] = "Upload sukses";
			}
			else
				$data['hasil'] = "Upload Gagal";
		}

		$this->load->view("header_view");
		$this->load->view("mapel_insert_view",$data);
		$this->load->view("footer_view");
	}

	public function Update($id)
	{
		if($_POST == NULL)
		{
			$this->load->model("m_mapel");
			$data['mapel'] = $this->m_mapel->select($id);
			$this->load->view("header_view");
			$this->load->view("mapel_update_view",$data);
			$this->load->view("footer_view");
		}
		else
		{
			$this->load->model("m_mapel");
			$this->m_mapel->update($id);
			redirect("mapel");
		}
	}

	public function Delete($id)
	{
		$this->db->delete("mata_pelajaran",  array('id_mata_pelajaran' => $id ));
		//redirect("mapel");
	}
}