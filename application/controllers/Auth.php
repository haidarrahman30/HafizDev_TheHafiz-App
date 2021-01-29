<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            if ($this->session->userdata('role_id') == 1) {
                redirect('pujut');
            } else {
                redirect('kontributor');
            }
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = "TheHafiz - Login";
            //$this->load->view('templates/header', $data);
            $this->load->view('auth/login');
            //$this->load->view('templates/footer');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->Auth_model->getData($email);

        if ($user) {

            if ($user['is_active'] == 1) {

                if (password_verify($password, $user['password'])) {

                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'id' => $user['id']
                    ];

                    $this->session->set_userdata($data);
                    if ($this->session->userdata('role_id') == 1) {
                        redirect('pujut');
                    } else {
                        redirect('kontributor');
                    }
                } else {

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Email atau Password Salah </div>');
                    redirect('auth');
                }
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
                Akun anda belum aktif, silahkan hubungi admin melalui WhatsApp di 085338264421 untuk mengaktivasi akun </div>');
                redirect('auth');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email tidak terdaftar</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            if ($this->session->userdata('role_id') == 1) {
                redirect('pujut');
            } else {
                redirect('kontributor');
            }
        }

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email sudah terdaftar sebelumnya'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak cocok',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = "TheHafiz - Register";
            //$this->load->view('templates/header', $data);
            $this->load->view('auth/registration');
           // $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];

            $this->Auth_model->inserData($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun anda berhasil dibuat, silahkan hubungi admin melalui WhatsApp di  <a target="_blank" href="https://wa.me/6285338264421">
            Link Berikut </a> untuk mengaktivasi akun </div>');
            redirect('auth');
        }
    }
}
