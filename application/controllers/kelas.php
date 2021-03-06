<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelas extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->model('m_kelas');
        $data['data'] = $this->m_kelas->getData();
        //print_r($data['data']);
        $this->load->view('header_view');
        $this->load->view('kelas_view',$data);
        $this->load->view('footer_view');

    }

    public  function insert()
    {
        $this->load->view('header_view');
        $this->load->view('kelas_insert_view');
        $this->load->view('footer_view');
    }

    public function edit($id)
    {
        $this->load->model('m_kelas');
        $data['data'] = $this->m_kelas->getSingle($id);
        $this->load->view('header_view');
        $this->load->view('kelas_update_view',$data);
        $this->load->view('footer_view');
    }

    public function update($id)
    {
        $this->load->model('m_kelas');
        $data['data'] = $this->m_kelas->getSingle($id);

        /*$this->form_validation->set_rules('id_murid', 'No Induk', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('header_view');
            $this->load->view('siswa_update_view');
            $this->load->view('footer_view');
        }
        else
        {*/
        $this->load->model('m_kelas');
        $this->m_kelas->updateData($id);
        redirect('kelas/index');
        //}
    }

    public function save()
    {
        $this->form_validation->set_rules('nama_kelas', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('header_view');
            $this->load->view('kelas_insert_view');
            $this->load->view('footer_view');
        }
        else
        {
            $this->load->model('m_kelas');
            $this->m_kelas->tambah();
            redirect('kelas/index');
        }
    }

    public function delete($id)
    {
        $this->db->delete('kelas', array('ID_KELAS' => $id));
        redirect('kelas/index');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */