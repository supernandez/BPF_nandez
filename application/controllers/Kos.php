<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kos_model');
    }

    public function index()
    {
        redirect('/');
    }

    public function detail($id)
    {
        $this->form_validation->set_rules('review', 'Review', 'required', [
            'required' => '<div class="alert alert-danger" role="alert">Komentar Ulasan Wajib diisi!</div>'
        ]);
        if ($this->form_validation->run() == false) {
            $data['kos'] = $this->Kos_model->getById($id);
            $data['pemilik'] = $this->Kos_model->getPemilik($data['kos']['user_id']);
            $data['ulasan'] = $this->Kos_model->getReview($data['kos']['kos_id']);
            $data['judul'] = $data['kos']['kos_nama']." - Sikos";
            $this->load->view('frontend/layout/header', $data);
            $this->load->view("frontend/vw_kos", $data);
            $this->load->view('frontend/layout/footer', $data);
        }else{
            $data = [
                'user_id' => $this->session->userdata('id'),
                'kos_id' => $id,
                'review_tanggal' => date('d M Y'),
                'review_commend' => $this->input->post('review'),
            ]; 
            $this->Kos_model->postReview($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ulasan anda berhasil di post!</div>');
            redirect('kos/detail/'.$id);
        }
    }

}
