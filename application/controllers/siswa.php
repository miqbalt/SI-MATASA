<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {

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
        $this->load->view('header_view');
        $this->load->view('siswa_view');
        $this->load->view('footer_view');
    }

    public  function insert()
    {
        $this->load->view('header_view');
        $this->load->view('siswa_insert_view');
        $this->load->view('footer_view');
    }

    public function save()
    {
        $this->form_validation->set_rules('id_murid', 'No Induk', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('header_view');
            $this->load->view('siswa_insert_view');
            $this->load->view('footer_view');
        }
        else
        {
            $this->m_siswa->tambah();
            $this->load->view('siswa');
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */