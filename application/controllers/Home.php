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
            $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">Screening Anda berhasil dianalisa!!!</br>Untuk melihat hasil screening Anda silahkan <a href="home/dftr_scr"><b style:"color:blue;">KLIK SINI</b></a></div>');
            redirect('home');
        }
    }

    public function dftr_scr()
    {
        $data['kategori'] = $this->db->get_where('tbl_kategori')->result_array();
        $data['data'] = $this->Home->getDataSCR();

        $this->load->view('home/wrapper/head.php');
        $this->load->view('home/wrapper/header.php', $data);
        $this->load->view('home/daftar-screening.php', $data);
        $this->load->view('home/wrapper/footer.php', $data);
    }

    public function cetak_kartu($id)
    {
        $data['data'] = $this->db->get_where('tbl_screening', ['id' => $id])->row_array();
        $this->load->view('home/cetak-kartu', $data);

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
        $mpdf->SetHTMLFooter('
        <div style="text-align: center; font-weight: bold;">
        <p>Tunjukan kartu ini saat Anda datang kesekolah, jika Anda dinyakan aman masuk sekolah.</p>
        </div>');

        $html = $this->load->view('home/cetak-kartu', [], true);
        $mpdf->WriteHTML($html);
        $mpdf->Output('kartu screening.pdf', \Mpdf\Output\Destination::INLINE);
    }

    public function rekap()
    {
        $data['coba'] = $this->input->post('nama');
        $this->load->view('home/rekap', $data);
    }
}
