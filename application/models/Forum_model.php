<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Forum_model extends CI_Model
{

    public function getData()
    {
        $query = $this->db->query("SELECT * FROM discussions JOIN user ON discussions.id_user=user.id");
        return $query->result_array();
    }

    public function addKomen($data)
    {
        $this->db->insert('mengomentari', $data);
    }

    public function getKomen()
    {
        $query = $this->db->query("SELECT * FROM mengomentari JOIN user ON mengomentari.id_user=user.id");
        return $query->result_array();
    }
}
