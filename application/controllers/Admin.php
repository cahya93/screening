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

    public function rekap_siswa()
    {
        $data['title'] = "Rekap Siswa";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->db->get_where('tbl_kelas')->result_array();
        $kls = $this->input->get('kelas');
        $date = $this->input->get('date');
        $data['kls'] = $kls;
        $data['date'] = $date;
        $data['data'] = $this->db->get_where('tbl_siswa', ['kelas' => $kls])->result_array();

        $this->load->view('admin/wrapper/head.php');
        $this->load->view('admin/wrapper/sidebar.php', $data);
        $this->load->view('admin/wrapper/navbar.php', $data);
        $this->load->view('admin/rekap-siswa.php', $data);
        $this->load->view('admin/wrapper/footer.php');
    }

    public function ctk_siswa()
    {
        $kls = $this->input->get('kelas');
        $date = $this->input->get('date');
        $data['kls'] = $kls;
        $data['date'] = $date;
        $data['data'] = $this->db->get_where('tbl_siswa', ['kelas' => $kls])->result_array();
        $this->load->view('admin/pdf-siswa', $data);

        $mpdf = new \Mpdf\Mpdf(
            [
                'mode' => 'utf-8',
                'format' => 'A4',
                'orientation' => 'P',
                'setAutoTopMargin' => false
            ]
        );

        // $mpdf->SetHTMLHeader('
        // <div style="text-align: center; font-weight: bold;">
        //   <img src="assets/img/pi-2020.png" width="100%" height="100%" />
        // </div>');

        $html = $this->load->view('admin/pdf-siswa', [], true);
        $mpdf->WriteHTML($html);
        $mpdf->Output('kartu screening.pdf', \Mpdf\Output\Destination::INLINE);
    }

    public function dtl_siswa()
    {
        $data['title'] = "Detail Siswa";
        $nis = $this->input->get('nis');
        $date = $this->input->get('date');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->db->get_where('tbl_screening', ['no_id' => $nis, 'date' => $date])->row_array();
        $this->load->view('admin/wrapper/head.php');
        $this->load->view('admin/wrapper/sidebar.php', $data);
        $this->load->view('admin/wrapper/navbar.php', $data);
        $this->load->view('admin/detail-siswa.php', $data);
        $this->load->view('admin/wrapper/footer.php');
    }
}
