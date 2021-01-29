<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->query("SELECT * FROM article WHERE status_id=1");
        return $query->num_rows();
    }

    public function article($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('title', $keyword);
            $this->db->or_like('content', $keyword);
        }
        $this->db->where('status_id', 1);
        return $this->db->get('article', $limit, $start)->result_array();
    }


    public function view($id)
    {

        $query = $this->db->query("SELECT * FROM article JOIN user ON article.user_id=user.id WHERE article.id_article='$id' ");
        return $query->row_array();
    }

    public function like($q)
    {
        $query = $this->db->query("SELECT * FROM article WHERE status_id=1 AND title Like '%$q%' or content Like '%$q%'");
        return $query->result_array();
    }
}
