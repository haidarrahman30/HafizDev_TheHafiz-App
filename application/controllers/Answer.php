<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Answer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Answer_model');
    }
    public function index()
    {
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('answerjuz', 'Juz', 'trim|numeric|greater_than_equal_to[1]|less_than_equal_to[30]');
            $this->form_validation->set_rules('ayat', 'Ayat', 'trim|numeric|greater_than_equal_to[1]|less_than_equal_to[286]');
            $this->form_validation->set_rules('surah', 'Surah', 'trim|numeric|greater_than_equal_to[1]|less_than_equal_to[114]');
            $this->form_validation->set_rules('page', 'Halaman', 'trim|numeric|greater_than_equal_to[1]|less_than_equal_to[604]');
            $id = $this->input->post('id');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "TheHafiz - Tes Hafalan";
                $data['ulang'] = $this->Answer_model->getAnswerById($id);
                $this->load->view('templates/bootstrap_header', $data);
                $this->load->view('question/index', $data);
                $this->load->view('templates/bootstrap_footer');
            } else {
                $this->load->model('Answer_model');
                $data['title'] = "TheHafiz - Hasil Jawaban";
                $data['juz'] = $this->input->post('answerjuz');
                $data['ayat'] = $this->input->post('ayat');
                $data['surah'] = $this->input->post('surah');
                $data['page'] = $this->input->post('page');
                $data['answer'] = $this->Answer_model->getAnswerById($id);
                $this->load->view('templates/header', $data);
                $this->load->view('answer/index', $data);
                $this->load->view('templates/footer');
            }
        } else {
            return redirect()->to('base_url');
        }
    }
}
