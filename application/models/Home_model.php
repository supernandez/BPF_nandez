<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getRecommend()
    {
        $this->db->from('tbl_kos');
        $query = $this->db->get();
        return $query->result_array();
    }
}