<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kos_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getById($id)
    {
        $query = $this->db->get_where('tbl_kos', ['kos_id'=>$id]);
        return $query->row_array();
    }

    public function getPemilik($id)
    {
        $query = $this->db->get_where('tbl_user', ['user_id'=>$id]);
        return $query->row_array();
    }

    public function getReview($id)
    {
        $query = $this->db->get_where('tbl_review', ['kos_id'=>$id]);
        return $query->result_array();
    }

    public function getUserReview($id)
    {
        $query = $this->db->get_where('tbl_user', ['user_id'=>$id]);
        return $query->row_array();
    }

    public function postReview($data)
    {
        $this->db->insert('tbl_review', $data);
        return $this->db->insert_id();
    }
}