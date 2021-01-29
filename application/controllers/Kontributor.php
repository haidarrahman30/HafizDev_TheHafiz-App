<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontributor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Kontributor_model', 'mods');

        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['user'] = $this->mods->user($_SESSION['id']);
        $data['all'] = $this->mods->myarticle($_SESSION['id'])->num_rows();
        $data['pending'] = $this->mods->pending($_SESSION['id'])->num_rows();
        $data['approved'] = $this->mods->approved($_SESSION['id'])->num_rows();
        $data['title'] = "TheHafiz - Kontributor";
        $this->load->view('kontributor/sidebar', $data);
        $this->load->view('kontributor/index', $data);
        $this->load->view('kontributor/footer', $data);
    }

    public function write()
    {
        $data['user'] = $this->mods->user($_SESSION['id']);
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('content', 'Konten', 'required');

        if ($this->form_validation->run() == false) {

            $data['title'] = "TheHafiz - Tulis Artikel";
            $this->load->view('kontributor/sidebar', $data);
            $this->load->view('kontributor/write', $data);
            $this->load->view('kontributor/footer', $data);
        } else {
            $data = [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'status_id' => 2,
                'user_id' => $_SESSION['id']
            ];

            $this->mods->insertData($data);

            $this->session->set_flashdata('berhasil', '<div class="alert alert-success" role="alert">
            Artikel berhasil dikirim, Terima kasih atas kontribusi anda</div>');

            $data['user'] = $this->mods->user($_SESSION['id']);
            $data['title'] = "TheHafiz - Kontributor";
            $this->load->view('kontributor/sidebar', $data);
            $this->load->view('kontributor/write', $data);
            $this->load->view('kontributor/footer', $data);
        }
    }

    public function profile()
    {
        $data['user'] = $this->mods->user($_SESSION['id']);
        $data['title'] = "TheHafiz - Profil saya";
        $this->load->view('kontributor/sidebar', $data);
        $this->load->view('kontributor/profile', $data);
        $this->load->view('kontributor/footer', $data);
    }

    public function edit()
    {
        $data['user'] = $this->mods->user($_SESSION['id']);
        $this->form_validation->set_rules('name', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "TheHafiz - Profil saya";
            $this->load->view('kontributor/sidebar', $data);
            $this->load->view('kontributor/edit', $data);
            $this->load->view('kontributor/footer', $data);
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
                    $this->mods->upload($new_image, $email);
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $this->mods->updateUser($name, $email);

            $this->session->set_flashdata('berhasil', '<div class="col-md-4 ml-5 alert alert-success" role="alert">
            Profil anda berhasil diperbarui </div>');

            redirect('kontributor/profile');
        }
    }

    public function article()
    {
        $data['user'] = $this->mods->user($_SESSION['id']);
        $data['article'] = $this->mods->myarticle($_SESSION['id'])->result_array();
        $data['title'] = "TheHafiz - Artikel Saya";
        $this->load->view('kontributor/sidebar', $data);
        $this->load->view('kontributor/article', $data);
        $this->load->view('kontributor/footer', $data);
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

            redirect('kontributor/article');
        }

        $data['user'] = $this->mods->user($_SESSION['id']);
        $this->db->where('id_article', $this->input->get('id'));
        $data['article'] = $this->db->get('article')->row_array();
        $data['title'] = "TheHafiz - Edit Artikel";
        $this->load->view('kontributor/sidebar', $data);
        $this->load->view('kontributor/editArticle', $data);
        $this->load->view('kontributor/footer', $data);
    }

    public function deleteArticle()
    {
        $this->db->where('id_article', $this->input->get('id'));
        $this->db->delete('article');

        $this->session->set_flashdata('berhasil', '<div class="col-md-4 ml-5 alert alert-success" role="alert">
            Artikel berhasil dihapus </div>');

        redirect('kontributor/article');
    }

    public function play_booster()
    {
        $data['user'] = $this->mods->user($_SESSION['id']);
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('url', 'url', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "TheHafiz - Profil saya";
            $this->load->view('kontributor/sidebar', $data);
            $this->load->view('kontributor/play_booster', $data);
            $this->load->view('kontributor/footer', $data);
        } else {
            $data = [
                'judul' => $_POST['judul'],
                'url' => $_POST['url'],
            ];

            $this->mods->addBooster($data);

            $this->session->set_flashdata('berhasil', '<div class="alert alert-success" role="alert">
            Video Berhasil ditambahkan, Terima kasih atas kontribusi anda</div>');

            $data['title'] = "TheHafiz - Add Play Booster";
            $data['user'] = $this->mods->user($_SESSION['id']);
            $this->load->view('kontributor/sidebar', $data);
            $this->load->view('kontributor/play_booster', $data);
            $this->load->view('kontributor/footer', $data);
        }
    }

    public function discussions()
    {
        $data['user'] = $this->mods->user($_SESSION['id']);
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('konten', 'Konten', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "TheHafiz - Add Discussion";
            $data['user'] = $this->mods->user($_SESSION['id']);
            $this->load->view('kontributor/sidebar', $data);
            $this->load->view('kontributor/discussions', $data);
            $this->load->view('kontributor/footer', $data);
        } else {
            $data = [
                'judul' => $_POST['judul'],
                'konten' => $_POST['konten'],
                'id_user' => $_SESSION['id']
            ];

            $this->mods->addDiscussion($data);

            $this->session->set_flashdata('berhasil', '<div class="alert alert-success" role="alert">
            Topik Diskusi berhasil ditambahkan </div>');

            $data['title'] = "TheHafiz - Add Discussion";
            $data['user'] = $this->mods->user($_SESSION['id']);
            $this->load->view('kontributor/sidebar', $data);
            $this->load->view('kontributor/discussions', $data);
            $this->load->view('kontributor/footer', $data);
        }
    }

    public function reminder()
    {
        $data['user'] = $this->mods->user($_SESSION['id']);
        $this->form_validation->set_rules('jam', 'jam', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "TheHafiz - Add Reminder";
            $data['user'] = $this->mods->user($_SESSION['id']);
            $this->load->view('kontributor/sidebar', $data);
            $this->load->view('kontributor/reminder', $data);
            $this->load->view('kontributor/footer', $data);
        } else {
            $data = [
                'jam' => $_POST['jam'],
                'tanggal' => $_POST['tanggal'],
                'isi' => $_POST['isi']
            ];

            $this->mods->addReminder($data);

            $this->session->set_flashdata('berhasil', '<div class="alert alert-success" role="alert">
            Reminder berhasil ditambahkan </div>');

            $data['title'] = "TheHafiz - Add Reminder";
            $data['user'] = $this->mods->user($_SESSION['id']);
            $this->load->view('kontributor/sidebar', $data);
            $this->load->view('kontributor/reminder', $data);
            $this->load->view('kontributor/footer', $data);
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        redirect('home');
    }
}
