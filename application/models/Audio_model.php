<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Audio_model extends CI_Model
{
    public function getBySurah($id)
    {
        $this->db->select('*');
        $this->db->from('quran_id');
        $this->db->where('suraId', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getSurah($id)
    {
        $this->db->select('*');
        $this->db->from('surahname');
        $this->db->where('suraId', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function row1()
    {
        $query = $this->db->query("SELECT * from surahname LIMIT 38");
        return $query->result_array();
    }

    public function row2()
    {
        $query = $this->db->query("SELECT * from surahname LIMIT 38,38");
        return $query->result_array();
    }

    public function row3()
    {
        $query = $this->db->query("SELECT * from surahname LIMIT 76,38");
        return $query->result_array();
    }

    public function juz1()
    {
        $query = $this->db->query("SELECT DISTINCT juz from quran_id LIMIT 10");
        return $query->result_array();
    }

    public function juz2()
    {
        $query = $this->db->query("SELECT DISTINCT juz from quran_id LIMIT 10,10");
        return $query->result_array();
    }

    public function juz3()
    {
        $query = $this->db->query("SELECT DISTINCT juz from quran_id LIMIT 20,10");
        return $query->result_array();
    }

    public function getPage($juz)
    {
        $query = $this->db->query("SELECT DISTINCT page from quran_id WHERE juz='$juz'");
        return $query->result_array();
    }
}
