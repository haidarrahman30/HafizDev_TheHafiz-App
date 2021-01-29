<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Question_model', 'mod');
    }
    public function index()
    {
        unset($_SESSION['jumlah1'],
        $_SESSION['jumlah2'],
        $_SESSION['juz'],
        $_SESSION['surah']);

        $data['title'] = "TheHafiz - Test Hafalan";
        $this->load->view('templates/header', $data);
        $this->load->view('test/index');
        $this->load->view('templates/footer');
    }


    public function record()
    {
        unset($_SESSION['jumlah1'],
        $_SESSION['jumlah2'],
        $_SESSION['juz'],
        $_SESSION['surah']);

        $data['title'] = "TheHafiz - Tes Hafalan ";
        $this->load->view('templates/header', $data);
        $this->load->view('record/index', $data);
        $this->load->view('templates/footer');
    }

    public function start()
    {

        $data['title'] = "TheHafiz - Tes Hafalan";

        if (isset($_POST['jumlah1']) || isset($_SESSION['jumlah1'])) {

            $this->form_validation->set_rules('jumlah1', 'Dari juz', 'trim|required|numeric|greater_than_equal_to[1]|less_than_equal_to[30]');
            $this->form_validation->set_rules('jumlah2', 'Sampai juz', 'trim|required|numeric|greater_than_equal_to[1]|less_than_equal_to[30]|greater_than[' . $this->input->post('jumlah1') . ']');

            if ($this->form_validation->run() == FALSE && !isset($_SESSION['jumlah1'])) {
                $this->record();
            } else {

                if (!isset($_SESSION['jumlah1'])) {
                    $_SESSION['jumlah1'] = $this->input->post('jumlah1');
                    $_SESSION['jumlah2'] = $this->input->post('jumlah2');
                }

                $data['question'] = $this->mod->getTotalJuz($_SESSION['jumlah1'], $_SESSION['jumlah2']);
                foreach ($data['question'] as $qu) {
                    $id1 = $qu['id'];
                }
                $id2 = $id1 + 3;
                $data['answer'] = $this->mod->getAnswer($id1, $id2);
                $this->load->view('templates/header', $data);
                $this->load->view('record/start', $data);
                $this->load->view('templates/footer');
            }
        } else if (isset($_POST['juz']) || isset($_SESSION['juz'])) {

            $this->form_validation->set_rules('juz', 'Juz', 'trim|required|numeric|greater_than_equal_to[1]|less_than_equal_to[30]');

            if ($this->form_validation->run() == FALSE && !isset($_SESSION['juz'])) {
                $this->record();
            } else {

                if (!isset($_SESSION['juz'])) {
                    $_SESSION['juz'] = $this->input->post('juz');
                }
                $data['question'] = $this->mod->getCurrentJuz($_SESSION['juz']);
                foreach ($data['question'] as $qu) {
                    $id1 = $qu['id'];
                }
                $id2 = $id1 + 3;
                $data['answer'] = $this->mod->getAnswer($id1, $id2);
                $this->load->view('templates/header', $data);
                $this->load->view('record/start', $data);
                $this->load->view('templates/footer');
            }
        } else if (isset($_POST['surah']) || isset($_SESSION['surah'])) {

            $this->form_validation->set_rules('surah', 'Surah', 'trim|numeric|greater_than_equal_to[1]|less_than_equal_to[114]');

            if ($this->form_validation->run() == FALSE && !isset($_SESSION['surah'])) {
                $data['title'] = "TheHafiz - Tes Hafalan";
                $this->load->view('templates/header', $data);
                $this->load->view('record/start');
                $this->load->view('templates/footer');
            } else {
                if (!isset($_SESSION['surah'])) {
                    $_SESSION['surah'] = $this->input->post('surah');
                }

                $data['question'] = $this->mod->getSurah($_SESSION['surah']);
                foreach ($data['question'] as $qu) {
                    $id1 = $qu['id'];
                }
                $id2 = $id1 + 3;
                $data['answer'] = $this->mod->getAnswer($id1, $id2);

                $data['title'] = "TheHafiz - Tes Hafalan";
                $data['question'] = $this->mod->getSurah($_SESSION['surah']);
                $this->load->view('templates/header', $data);
                $this->load->view('record/start', $data);
                $this->load->view('templates/footer');
            }
        } else {
            redirect('home');
        }
    }
}
