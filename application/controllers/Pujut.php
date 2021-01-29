<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pujut extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Pujut_model', 'mod');

        if (!$this->session->userdata('email')) {
            redirect('auth');
        } else {
            if ($this->session->userdata('role_id') != 1) {
                redirect('auth');
            }
        }
    }

    public function index()
    {
        $data['problem'] = $this->mod->report()->num_rows();
        $data['user'] = $this->mod->user($_SESSION['id']);
        $data['allUser'] = $this->mod->allUser()->num_rows();
        $data['pendingUser'] = $this->mod->pendingUser()->num_rows();
        $data['activeUser'] = $this->mod->activeUser()->num_rows();
        $data['allArticle'] = $this->mod->allArticle();
        $data['pendingArticle'] = $this->mod->pendingArticle()->num_rows();
        $data['approvedArticle'] = $this->mod->approvedArticle()->num_rows();
        $data['title'] = "TheHafiz - Admin";
        $this->load->view('pujut/sidebar', $data);
        $this->load->view('pujut/index', $data);
        $this->load->view('pujut/footer', $data);
    }

    public function write()
    {
        $data['user'] = $this->mod->user($_SESSION['id']);
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('content', 'Konten', 'required');

        if ($this->form_validation->run() == false) {

            $data['title'] = "TheHafiz - Tulis Artikel";
            $this->load->view('pujut/sidebar', $data);
            $this->load->view('pujut/write', $data);
            $this->load->view('pujut/footer', $data);
        } else {
            $data = [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'status_id' => 1,
                'user_id' => $_SESSION['id']
            ];

            $this->mod->insertData($data);

            $this->session->set_flashdata('berhasil', '<div class="alert alert-success" role="alert">
            Artikel berhasil dikirim, Terima kasih atas kontribusi anda</div>');

            $data['user'] = $this->mod->user($_SESSION['id']);
            $data['title'] = "TheHafiz - Admin";
            $this->load->view('pujut/sidebar', $data);
            $this->load->view('pujut/write', $data);
            $this->load->view('pujut/footer', $data);
        }
    }

    public function editArticle()
    {
        if ($this->input->post('id_article')) {

            $data = array(
                'title' => $_POST['title'],
                'content' => $_POST['content'],
            );

            $this->db->where('id_article', $this->input->post('id_article'));
            $this->db->update('article', $data);

            $this->session->set_flashdata('diedit', '<div class="alert alert-success" role="alert">
            Artikel berhasil diedit</div>');

            redirect('pujut/approvedArticle');
        }

        $data['user'] = $this->mod->user($_SESSION['id']);
        $this->db->where('id_article', $this->input->get('id'));
        $data['article'] = $this->db->get('article')->row_array();
        $data['title'] = "TheHafiz - Edit Artikel";
        $this->load->view('pujut/sidebar', $data);
        $this->load->view('pujut/editArticle', $data);
        $this->load->view('pujut/footer', $data);
    }

    public function profile()
    {
        $data['user'] = $this->mod->user($_SESSION['id']);
        $data['title'] = "TheHafiz - Profil saya";
        $this->load->view('pujut/sidebar', $data);
        $this->load->view('pujut/profile', $data);
        $this->load->view('pujut/footer', $data);
    }

    public function edit()
    {
        $data['user'] = $this->mod->user($_SESSION['id']);
        $this->form_validation->set_rules('name', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "TheHafiz - Profil saya";
            $this->load->view('pujut/sidebar', $data);
            $this->load->view('pujut/edit', $data);
            $this->load->view('pujut/footer', $data);
        } else {

            $name = $this->input->post('name');
            $email = $_SESSION['email'];
            $id = $_SESSION['id'];

            //cek gambar
            $image = $_FILES['image']['name'];

            if ($image) {
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './asset/img/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];

                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'asset/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->mod->upload($new_image, $email);
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $this->mod->updateUser($name, $email);

            $this->session->set_flashdata('berhasil', '<div class="col-md-4 ml-5 alert alert-success" role="alert">
            Profil anda berhasil diperbarui </div>');

            redirect('pujut/profile');
        }
    }

    public function pendingAccount()
    {
        if ($this->input->post('id')) {
            $this->mod->approveUser($this->input->post('id'));
        }

        $data['list'] = $this->mod->pendingUser()->result_array();
        $data['user'] = $this->mod->user($_SESSION['id']);
        $data['title'] = "TheHafiz - Pending User";
        $this->load->view('pujut/sidebar', $data);
        $this->load->view('pujut/pendingAccount', $data);
        $this->load->view('pujut/footer', $data);
    }

    public function activeAccount()
    {

        $data['list'] = $this->mod->activeUser()->result_array();
        $data['user'] = $this->mod->user($_SESSION['id']);
        $data['title'] = "TheHafiz - Active User";
        $this->load->view('pujut/sidebar', $data);
        $this->load->view('pujut/activeAccount', $data);
        $this->load->view('pujut/footer', $data);
    }

    public function pendingArticle()
    {

        if ($this->input->post('article_id')) {
            $this->mod->approveArticle($this->input->post('article_id'));
        }

        $data['list'] = $this->mod->pendingArticle()->result_array();
        $data['user'] = $this->mod->user($_SESSION['id']);
        $data['title'] = "TheHafiz - Pending Article";
        $this->load->view('pujut/sidebar', $data);
        $this->load->view('pujut/pendingArticle', $data);
        $this->load->view('pujut/footer', $data);
    }

    public function approvedArticle()
    {

        if ($this->input->post('article_id')) {
            $this->mod->approveArticle($this->input->post('article_id'));
        }

        $data['list'] = $this->mod->approvedArticle()->result_array();
        $data['user'] = $this->mod->user($_SESSION['id']);
        $data['title'] = "TheHafiz - Approved Article";
        $this->load->view('pujut/sidebar', $data);
        $this->load->view('pujut/activeArticle', $data);
        $this->load->view('pujut/footer', $data);
    }

    public function deleteArticle()
    {
        $this->db->where('id_article', $this->input->get('id'));
        $this->db->delete('article');

        $this->session->set_flashdata('berhasil', '<div class="col-md-4 ml-5 alert alert-success" role="alert">
            Artikel berhasil dihapus </div>');

        redirect('pujut/approvedArticle');
    }

    public function reminder()
    {
        if ($this->input->get('id')) {
            $this->db->where('id_reminder', $this->input->get('id'));
            $this->db->delete('reminder');

            $this->session->set_flashdata('berhasil', '<div class="col-md-4 ml-5 alert alert-success" role="alert">
            Reminder berhasil dihapus </div>');

            redirect('pujut/reminder');
        }


        $data['user'] = $this->mod->user($_SESSION['id']);
        $data['reminder'] = $this->db->get('reminder')->result_array();
        $data['title'] = "TheHafiz - Reminder";
        $this->load->view('pujut/sidebar', $data);
        $this->load->view('pujut/reminder', $data);
        $this->load->view('pujut/footer', $data);
    }

    public function play_booster()
    {

        if ($this->input->get('id')) {
            $this->db->where('id_video', $this->input->get('id'));
            $this->db->delete('play_booster');

            $this->session->set_flashdata('berhasil', '<div class="col-md-4 ml-5 alert alert-success" role="alert">
            Video berhasil dihapus </div>');

            redirect('pujut/play_booster');
        }

        $data['user'] = $this->mod->user($_SESSION['id']);
        $data['title'] = "TheHafiz - Play Booster";

        $data['play_booster'] = $this->db->get('play_booster')->result_array();
        $this->load->view('pujut/sidebar', $data);
        $this->load->view('pujut/play_booster', $data);
        $this->load->view('pujut/footer', $data);
    }

    public function forum()
    {

        if ($this->input->get('id')) {
            $this->db->where('id_discussion', $this->input->get('id'));
            $this->db->delete('discussions');

            $this->session->set_flashdata('berhasil', '<div class="col-md-4 ml-5 alert alert-success" role="alert">
            Discussion berhasil dihapus </div>');

            redirect('pujut/forum');
        }

        $data['user'] = $this->mod->user($_SESSION['id']);
        $data['title'] = "TheHafiz - Discussions";

        $data['discussions'] = $this->db->get('discussions')->result_array();
        $data['title'] = "TheHafiz - Forum";
        $this->load->view('pujut/sidebar', $data);
        $this->load->view('pujut/forum', $data);
        $this->load->view('pujut/footer', $data);
    }

    public function report()
    {

        if ($this->input->post('problem_id')) {
            $this->mod->delete($this->input->post('problem_id'));
        }

        $data['list'] = $this->mod->report()->result_array();
        $data['user'] = $this->mod->user($_SESSION['id']);
        $data['title'] = "TheHafiz - Reported Problem";
        $this->load->view('pujut/sidebar', $data);
        $this->load->view('pujut/report', $data);
        $this->load->view('pujut/footer', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        redirect('auth');
    }
}
