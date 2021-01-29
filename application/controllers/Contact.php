<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index()
    {
        $data['title'] = "TheHafiz - Contact Us";
        $this->load->view('templates/bootstrap_header', $data);
        $this->load->view('contact/index', $data);
        $this->load->view('templates/bootstrap_footer', $data);
    }
}
