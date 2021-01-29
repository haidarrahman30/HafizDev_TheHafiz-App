<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report_model extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('problem', $data);
    }
}
