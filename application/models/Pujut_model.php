<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pujut_model extends CI_Model
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

    public function allArticle()
    {
        $query = $this->db->query("SELECT * FROM article");
        return $query->num_rows();
    }

    public function pendingArticle()
    {
        $query = $this->db->query("SELECT title,created_at,user_id, article.id_article AS article_id, user.name AS username FROM article JOIN user ON article.user_id=user.id WHERE status_id=2");
        return $query;
    }

    public function approvedArticle()
    {
        $query = $this->db->query("SELECT title,created_at,user_id, article.id_article AS article_id, user.name AS username FROM article JOIN user ON article.user_id=user.id WHERE status_id=1");
        return $query;
    }

    public function allUser()
    {
        $query = $this->db->query("SELECT * FROM user WHERE role_id = 2");
        return $query;
    }

    public function pendingUser()
    {
        $query = $this->db->query("SELECT * FROM user WHERE is_active=0 ");
        return $query;
    }

    public function activeUser()
    {
        $query = $this->db->query("SELECT * FROM user WHERE is_active=1 AND role_id = 2");
        return $query;
    }

    public function approveUser($id)
    {
        $this->db->set('is_active', 1);
        $this->db->where('id', $id);
        $this->db->update('user');
    }

    public function approveArticle($id)
    {
        $this->db->set('status_id', 1);
        $this->db->where('id', $id);
        $this->db->update('article');
    }

    public function report()
    {
        $query = $this->db->query("SELECT * FROM problem");
        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->query("DELETE FROM problem WHERE id='$id' ");
        return $query;
    }
}
