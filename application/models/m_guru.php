<?php

class M_guru extends CI_Model {

	public function Insert()
	{
		$id = $this->input->post("id_guru");
		$mapel = $this->input->post("");
		$nama = $this->input->post("nama");
		$nip = $this->input->post("nip");
		$jk = $this->input->post("jenis_kelamin");
		$user = $this->input->post("username");
		$pass = $this->input->post("password");
		$no = $this->input->post("no_telepon");
		$alamat = $this->input->post("alamat");
		$email = $this->input->post("email");
		$jabatan = $this->input->post("jabatan");

		$data = array (
				'id_guru' => $id,
				'id_mata_pelajaran' => 0,
				'nama_guru' => $nama,
				'nip' => $nip,
				'username_guru' => $user,
				'password_guru' => $pass,
				'alamat_guru' => $alamat,
				'nomor_telepon_guru' => $no,
				'email_guru' => $email,
				'jabatan_guru' => $jabatan
			);
		$this->db->insert("guru",$data);
	}
}