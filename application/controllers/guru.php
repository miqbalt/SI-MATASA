<?php 


class Guru extends CI_Controller{
    public $namapel;
    public function __construct(){
        parent::__construct();
    }
	public function index()
	{
        $this->load->model('m_guru');
        $data['data'] = $this->m_guru->getData();
		$this->load->view("header_view");
		$this->load->view("guru_list_view",$data);
		$this->load->view("footer_view");
	}

	public function insert()
	{
        $this->load->view('header_view');
        $this->load->view('guru_view');
        $this->load->view('footer_view');
		//if($this->input->post('submit'))
		//{
		//	$this->load->model('m_guru');
		//	$cek = $this->m_guru->insert();
		//	if($cek)
		//	{
		//		echo "masuk database";
		//	}
		//	echo "masuk percabangan";
		//}
		//else
		//	echo "tidak";
		//redirect("guru_view");

	}

    public function delete($id)
    {
        $this->db->delete('GURU', array('ID_GURU' => $id));
        redirect('guru/index');
    }
}