<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Answer_model extends CI_Model
{
    public function getAnswerById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('quran_id');
        return $query->row();
    }
}
