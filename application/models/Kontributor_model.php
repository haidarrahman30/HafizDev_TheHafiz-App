<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontributor_model extends CI_Model
{
    public function insertData($data)
    {
        $this->db->insert('article', $data);
    }

    public function user($id)
    {
        $query = $this->db->query("SELECT * FROM user WHERE id='$id' ");
        return $query->row_array();
    }

    public function myarticle($user_id)
    {
        $query = $this->db->query("SELECT * FROM article INNER JOIN article_status ON article.status_id=article_status.id WHERE user_id='$user_id'");
        return $query;
    }

    public function pending($user_id)
    {
        $query = $this->db->query("SELECT * FROM article WHERE user_id='$user_id' AND status_id = 2 ");
        return $query;
    }

    public function approved($user_id)
    {
        $query = $this->db->query("SELECT * FROM article WHERE user_id='$user_id' AND status_id = 1 ");
        return $query;
    }

    public function updateUser($name, $email)
    {
        $this->db->set('name', $name);
        $this->db->where('email', $email);
        $this->db->update('user');
    }

    public function upload($image, $email)
    {
        $this->db->set('image', $image);
        $this->db->where('email', $email);
        $this->db->update('user');
    }

    public function addBooster($data)
    {
        $this->db->insert('play_booster', $data);
    }

    public function addDiscussion($data)
    {
        $this->db->insert('discussions', $data);
    }

    public function addReminder($data)
    {
        $this->db->insert('reminder', $data);
    }
}
