<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "Kos Markonah - Sikos";
        $this->load->view('frontend/layout/header', $data);
        $this->load->view("frontend/vw_kos", $data);
        $this->load->view('frontend/layout/footer', $data);
    }

}
