<?php

class M_guru extends CI_Model {

	public function insert()
	{
		$id = $this->input->post("id_guru");
		$mapel = $this->input->post("id_mata_pelajaran");
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
				'id_mata_pelajaran' => $mapel,
				'nama_guru' => $nama,
				'nip' => $nip,
				'username_guru' => $user,
				'password_guru' => $pass,
				'alamat_guru' => $alamat,
				'nomor_telepon_guru' => $no,
				'email_guru' => $email,
				'jabatan_guru' => $jabatan,
				'jenis_kelamin_guru' => $jk
			);
		$this->db->insert("guru",$data);
	}


    public function getData(){
        $data = $this->db->get('guru');
        return $data->result();
    }

    public function getSingle($id){
        $data = $this->db->get_where('guru', array('id_guru' => $id));
        return $data->row_array();
    }

    public function getMapel($idmapel){
        $data = $this->db->get_where('mata_pelajaran', array ('id_mata_pelajaran' => $idmapel));
        if($data->num_rows() > 0)
        {
            $row =  $data->row_array();

            return $namapel = $row['nama_mata_pelajaran'];
        }
    }

    public function deleteData($id)
    {
        $this->db->delete('guru', array('ID_GURU' => $id));
    }

}