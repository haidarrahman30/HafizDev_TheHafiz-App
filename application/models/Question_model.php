<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Question_model extends CI_Model
{
    public function getTotalJuz($juz1, $juz2)
    {
        $this->db->where('juz >=', $juz1);
        $this->db->where('juz <=', $juz2);
        $this->db->order_by('', 'RANDOM');
        $this->db->limit(1);
        $query = $this->db->get('quran_id');
        return $query->result_array();
    }

    public function getCurrentJuz($juz)
    {
        $this->db->where('juz', $juz);
        $this->db->order_by('', 'RANDOM');
        $this->db->limit(1);
        $query = $this->db->get('quran_id');
        return $query->result_array();
    }

    public function getSurah($surah)
    {
        $this->db->where('suraId =', $surah);
        $this->db->order_by('', 'RANDOM');
        $this->db->limit(1);
        $query = $this->db->get('quran_id');
        return $query->result_array();
    }

    public function getAnswer($id1, $id2)
    {
        $query = $this->db->query("SELECT * FROM quran_id WHERE id>='$id1' AND id<='$id2' ");
        return $query->result_array();
    }
}
