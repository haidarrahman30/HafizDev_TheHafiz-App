<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Moodbooster extends CI_Controller
{

    public function index()
    {
        $this->db->order_by('id_video', 'DESC');
        $data['play_booster'] = $this->db->get('play_booster')->result_array();
        $data['title'] = "TheHafiz - Play Booster";

        $this->load->view('templates/header', $data);
        $this->load->view('moodbooster/index', $data);
        $this->load->view('templates/footer');
    }

    public function reminder()
    {
        $this->db->order_by('tanggal', 'ASC');
        $data['reminder'] = $this->db->get('reminder')->result_array();
        $data['title'] = "TheHafiz - Reminder";

        $this->load->view('templates/header', $data);
        $this->load->view('moodbooster/reminder', $data);
        $this->load->view('templates/footer');
    }
}
