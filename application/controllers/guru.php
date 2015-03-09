<?php 


class Guru extends CI_Controller{

	public function Index()
	{
		$this->load->view("header_view");
		$this->load->view("guru_view");
		$this->load->view("footer_view");
	}

	public function Insert()
	{
		if($this->input->post('submit'))
		{
			$this->load->model('m_guru');
			$cek = $this->m_guru->insert();
			if($cek)
			{
				echo "masuk database";
			}
			echo "masuk percabangan";
		}
		else
			echo "tidak";
		//redirect("guru");
	}
}