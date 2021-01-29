<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Detail_model extends CI_Model
{
    public function getDetail($id)
    {
        $this->db->select('*');
        $this->db->from('quran_id');
        $this->db->where('id', $id);
        $this->db->join('surahname', 'quran_id.suraId=surahname.suraId');
        $query = $this->db->get();
        return $query->row();
    }
}
