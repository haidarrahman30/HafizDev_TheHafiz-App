<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Question extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Question_model');
    }

    public function index()
    {

        if (isset($_POST['reload'])) {
            header('Location: ' . $_SERVER['REQUEST_URI']);
            die();
        }


        if (isset($_POST['jumlah1']) || isset($_SESSION['jumlah1'])) {

            $this->form_validation->set_rules('jumlah1', 'Dari Juz', 'trim|numeric|greater_than_equal_to[1]|less_than_equal_to[30]');
            $this->form_validation->set_rules('jumlah2', 'Sampai juz', 'trim|required|numeric|greater_than_equal_to[1]|less_than_equal_to[30]|greater_than[' . $this->input->post('jumlah1') . ']');

            if ($this->form_validation->run() == FALSE && !isset($_SESSION['jumlah1'])) {
                $data['title'] = "TheHafiz - Tes Hafalan";
                $this->load->view('templates/header', $data);
                $this->load->view('test/index');
                $this->load->view('templates/footer');
            } else {
                if (!isset($_SESSION['jumlah1'])) {
                    $_SESSION['jumlah1'] = $this->input->post('jumlah1');
                    $_SESSION['jumlah2'] = $this->input->post('jumlah2');
                }
                $data['title'] = "TheHafiz - Tes Hafalan";
                $data['question'] = $this->Question_model->getTotalJuz($_SESSION['jumlah1'], $_SESSION['jumlah2']);
                $this->load->view('templates/header', $data);
                $this->load->view('question/index', $data);
                $this->load->view('templates/footer');
            }
        } else if (isset($_POST['juz']) || isset($_SESSION['juz'])) {

            $this->form_validation->set_rules('juz', 'juz', 'trim|numeric|greater_than_equal_to[1]|less_than_equal_to[30]');

            if ($this->form_validation->run() == FALSE && !isset($_SESSION['juz'])) {
                $data['title'] = "TheHafiz - Tes Hafalan";
                $this->load->view('templates/header', $data);
                $this->load->view('test/index');
                $this->load->view('templates/footer');
            } else {
                if (!isset($_SESSION['juz'])) {
                    $_SESSION['juz'] = $this->input->post('juz');
                }
                $data['title'] = "TheHafiz - Tes Hafalan";
                $data['question'] = $this->Question_model->getCurrentJuz($_SESSION['juz']);
                $this->load->view('templates/header', $data);
                $this->load->view('question/index', $data);
                $this->load->view('templates/footer');
            }
        } else if (isset($_POST['surah']) || isset($_SESSION['surah'])) {

            $this->form_validation->set_rules('surah', 'Surah', 'trim|numeric|greater_than_equal_to[1]|less_than_equal_to[114]');

            if ($this->form_validation->run() == FALSE && !isset($_SESSION['surah'])) {
                $data['title'] = "TheHafiz - Tes Hafalan";
                $this->load->view('templates/header', $data);
                $this->load->view('test/index');
                $this->load->view('templates/footer');
            } else {
                if (!isset($_SESSION['surah'])) {
                    $_SESSION['surah'] = $this->input->post('surah');
                }
                $data['title'] = "TheHafiz - Tes Hafalan";
                $data['question'] = $this->Question_model->getSurah($_SESSION['surah']);
                $this->load->view('templates/header', $data);
                $this->load->view('question/index', $data);
                $this->load->view('templates/footer');
            }
        } else {
            redirect('home');
        }
    }

    public function surah()
    {
    }
}
