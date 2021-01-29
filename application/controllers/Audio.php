<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Audio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Audio_model');
    }


    public function index()
    {

        $data['row1'] = $this->Audio_model->row1();
        $data['row2'] = $this->Audio_model->row2();
        $data['row3'] = $this->Audio_model->row3();
        $data['title'] = "TheHafiz - Audio";
        $this->load->view('templates/header.php', $data);
        $this->load->view('audio/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function view()
    {
        $data['title'] = "TheHafiz - Audio per Ayat";
        $data['audio'] = $this->Audio_model->getBySurah($this->input->get('suraId'));
        $data['surah'] = $this->Audio_model->getSurah($this->input->get('suraId'));
        $this->load->view('templates/header.php', $data);
        $this->load->view('audio/view.php', $data);
        $this->load->view('templates/footer.php');
        $this->load->view('audio/audio.php', $data);
    }

    public function page()
    {
        $data['juz1'] = $this->Audio_model->juz1();
        $data['juz2'] = $this->Audio_model->juz2();
        $data['juz3'] = $this->Audio_model->juz3();
        $data['title'] = "TheHafiz - Audio per Halaman";
        $this->load->view('templates/header.php', $data);
        $this->load->view('audio/page.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function pageview()
    {
        $data['juz'] = $this->input->get('juz');
        $data['page'] = $this->Audio_model->getPage($this->input->get('juz'));
        $data['title'] = "TheHafiz - Audio per Halaman";
        $this->load->view('templates/header.php', $data);
        $this->load->view('audio/pageview.php', $data);
        $this->load->view('templates/footer.php');
        $this->load->view('audio/page_audio.php', $data);
    }
}
