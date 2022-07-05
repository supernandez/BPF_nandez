<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['judul'] = "Home - Sikos";
        $data['rekomendasi'] = $this->Home_model->getRecommend();
        $this->load->view('frontend/layout/header', $data);
        $this->load->view("frontend/vw_home", $data);
        $this->load->view('frontend/layout/footer', $data);
    }

}
