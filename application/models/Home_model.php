<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function tbh_screening()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'kategori' => $this->input->post('kategori', true),
            'kelas' => $this->input->post('kelas', true),
            'p1' => $this->input->post('p1') . $this->input->post('p1_1'),
            'p2' => $this->input->post('p2') . $this->input->post('p2_1'),
            'p3' => $this->input->post('p3') . $this->input->post('p3_1'),
            'p4' => $this->input->post('p4'),
            'p5' => $this->input->post('p5'),
            'p6' => $this->input->post('p6'),
            'p7' => $this->input->post('p7')
        ];
        $this->db->insert('tbl_screening', $data);
    }
}
