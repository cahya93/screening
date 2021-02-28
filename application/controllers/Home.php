<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Home_model', 'Home');
    }

    public function index()
    {
        $data['kategori'] = $this->db->get_where('tbl_kategori')->result_array();
        $data['kelas'] = $this->db->get_where('tbl_kelas')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('home/wrapper/head.php');
            $this->load->view('home/wrapper/header.php', $data);
            $this->load->view('home/index.php', $data);
            $this->load->view('home/wrapper/footer.php', $data);
        } else {
            $this->Home->tbh_screening();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Screening berhasil ditambahkan!!!</div>');
            redirect('home');
        }
    }

    public function kartu()
    {
        $data['kategori'] = $this->db->get_where('tbl_kategori')->result_array();
        $data['data'] = $this->db->get_where('tbl_screening')->result_array();

        $this->load->view('home/wrapper/head.php');
        $this->load->view('home/wrapper/header.php', $data);
        $this->load->view('home/kartu-screening.php', $data);
        $this->load->view('home/wrapper/footer.php', $data);
    }
}
