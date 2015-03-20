<?php

class M_jenisnilai extends CI_Model {
	
	function insert()
	{
		$id = $this->input->post("id_jenisnilai");
		$jenisnilai = $this->input->post("jenisnilai");
		$data = array (
			'id_jenisnilai' => $id,
			'jenisnilai' => $jenisnilai,
			);

		$this->db->insert("jenisnilai",$data);
	}

	function read()
	{
		return $this->db->get('jenisnilai')->result();
	}

	public function getSingle($id){
		$data = $this->db->get_where('jenisnilai', array('id_jenisnilai' => $id));
		return $data->row_array();
	}

	public function getData(){
		$data = $this->db->get('jenisnilai');
		return $data->result_array();
	}

	function select($id)
	{
		return $this->db->get_where("jenisnilai",  array('id_jenisnilai' => $id))->row();
	}

	function Delete($id)
	{
		$this->db->delete("jenisnilai", array('id_jenisnilai' => $id));
	}
}