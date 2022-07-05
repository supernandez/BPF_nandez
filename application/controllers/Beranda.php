<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['judul'] = "Beranda - Sikos";
        $this->load->view("backend/layout/header", $data);
        $this->load->view("backend/vw_beranda", $data);
        $this->load->view("backend/layout/footer", $data);
    }

}
