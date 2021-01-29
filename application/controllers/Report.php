<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function index()
    {
        $this->load->model('Report_model', 'mod');

        $this->form_validation->set_rules('subject', 'Subjek', 'required');
        $this->form_validation->set_rules('message', 'Pesan', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "TheHafiz - Reported Problem";
            $this->load->view('templates/header', $data);
            $this->load->view('report/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'subject' => htmlspecialchars($this->input->post('subject')),
                'message' => htmlspecialchars($this->input->post('message')),
                'submitted_at' => time()
            ];

            $this->mod->insert($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Pesan anda berhasil dikirim, Terima kasih atas kontribusi anda </div>');
            redirect('report');
        }
    }
}
