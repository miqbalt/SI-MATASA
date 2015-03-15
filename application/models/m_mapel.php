<?php

class M_mapel extends CI_Model {
	
	function insert()
	{
		$id = $this->input->post("id_mapel");
		$nama = $this->input->post("nama");
		$skm = $this->input->post("nilai_skm");
		$data = array (
			'id_mata_pelajaran' => $id,
			'nama_mata_pelajaran' => $nama,
			'nilai_skm' => $skm
			);

		$this->db->insert("mata_pelajaran",$data);
	}

	function read()
	{
		return $this->db->get('mata_pelajaran')->result();
	}

	function updateData($id)
	{
		$nama = $this->input->post("nama");
		$skm = $this->input->post("nilai_skm");
		$data = array (
			'nama_mata_pelajaran' => $nama,
			'nilai_skm' => $skm
			);
		return $this->db->update('mata_pelajaran', $data, array('id_mata_pelajaran' => $id));
	}

	public function getSingle($id){
		$data = $this->db->get_where('mata_pelajaran', array('id_mata_pelajaran' => $id));
		return $data->row_array();
	}

	function select($id)
	{
		return $this->db->get_where("mata_pelajaran",  array('id_mata_pelajaran' => $id))->row();
	}

	function Delete($id)
	{
		$this->db->delete("mata_pelajaran", array('id_mata_pelajaran' => $id));
	}
}