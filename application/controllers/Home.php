<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        unset($_SESSION['jumlah1'],
        $_SESSION['jumlah2'],
        $_SESSION['juz']);
    }
    public function index()
    {
        $data['title'] = "TheHafiz - Home";
        $this->load->view('templates/header.php', $data);
        $this->load->view('home/index.php', $data);
        $this->load->view('templates/footer.php');
    }
}
