<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Forum_model', 'mod');
    }

    public function index()
    {
        $data['discussions'] = $this->mod->getData();
        $data['komentar'] = $this->mod->getKomen();

        $data['title'] = "TheHafiz - Diskusi Forum";

        $this->load->view('templates/header', $data);
        $this->load->view('forum/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function komentari()
    {
        $this->form_validation->set_rules('komentar', 'Komentar', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "TheHafiz - Forum Diskusi";
            $this->load->view('templates/header.php', $data);
            $this->load->view('forum/index.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $data = [
                'id_discussion' => $_POST['id_discussion'],
                'id_user' => $_SESSION['id'],
                'komentar' => $_POST['komentar']
            ];

            $this->mod->addKomen($data);

            $this->index();
        }
    }
}
