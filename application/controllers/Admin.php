<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
        // is_logged_in();
        // $this->load->model('Admin_model');
        // $this->load->model('Home_model');
        $this->load->model('Count_model');
    }

    public function index()
    {
        $data['title'] = "Analytics Dashboard";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['total'] = $this->Count_model->CountTotal();
        $data['count'] = $this->Count_model->Count();
        $data['kelas'] = $this->db->get_where('tbl_kelas')->result_array();
        $this->load->view('admin/wrapper/head.php');
        $this->load->view('admin/wrapper/sidebar.php', $data);
        $this->load->view('admin/wrapper/navbar.php', $data);
        $this->load->view('admin/index.php', $data);
        $this->load->view('admin/wrapper/footer.php');
    }
    public function dtl_kls()
    {
        $kelas = $this->input->get('kelas');
        $data['title'] = "Detail Siswa";
        $data['kelas'] = $kelas;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->db->get_where('tbl_siswa', ['kelas' => $kelas])->result_array();
        $this->load->view('admin/wrapper/head.php');
        $this->load->view('admin/wrapper/sidebar.php', $data);
        $this->load->view('admin/wrapper/navbar.php', $data);
        $this->load->view('admin/detail-kelas.php', $data);
        $this->load->view('admin/wrapper/footer.php');
    }
}
