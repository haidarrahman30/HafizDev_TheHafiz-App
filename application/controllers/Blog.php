<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model');
    }

    public function index()
    {

        if ($this->input->get('keyword')) {
            $keyword = $this->input->get('keyword');
        } else {
            $keyword = null;
        }
        //pagination

        //config
        $this->db->like('title', $keyword);
        $this->db->or_like('content', $keyword);
        $this->db->where('status_id', 1);
        $this->db->from('article');
        $config['base_url'] = base_url('blog/index');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 6;

        $this->pagination->initialize($config);

        $start = $this->uri->segment(3);
        $data['article'] = $this->Blog_model->article($config['per_page'], $start, $keyword);

        $data['title'] = "TheHafiz - Artikel";
        $this->load->view('templates/header', $data);
        $this->load->view('blog/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view()
    {

        $data['article'] = $this->Blog_model->view($this->input->get('id'));
        $data['title'] = $data['article']['title'];
        $this->load->view('templates/header', $data);
        $this->load->view('blog/view', $data);
        $this->load->view('templates/footer', $data);
    }
}
