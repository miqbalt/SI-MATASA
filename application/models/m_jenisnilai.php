<?php

class M_jenisnilai extends CI_Model {
	
	function insert()
	{
		$id = $this->input->post("id_jenisnilai");
		$jenisnilai = $this->input->post("jenisnilai");
		$data = array (
			'id_jenisnilai' => $id,
			'jenis_nilai' => $jenisnilai,
			);

		$this->db->insert("jenis_penilaian",$data);
	}

	function read()
	{
		return $this->db->get('jenis_penilaian')->result();
	}

	public function getSingle($id){
		$data = $this->db->get_where('jenis_penilaian', array('id_jenisnilai' => $id));
		return $data->row_array();
	}

	public function getData(){
		$data = $this->db->get('jenis_penilaian');
		return $data->result();
	}

	function select($id)
	{
		return $this->db->get_where("jenis_penilaian",  array('id_jenisnilai' => $id))->row();
	}

	function Delete($id)
	{
		$this->db->delete("jenis_penilaian", array('id_jenisnilai' => $id));
	}
}