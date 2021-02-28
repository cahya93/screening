<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Count_model extends CI_Model
{
    public function CountTotal()
    {
        $query = $this->db->get('tbl_screening');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function Count()
    {
        $sql = "SELECT  count(if(kategori='1', kategori, NULL)) as siswa,
                        count(if(kategori='2', kategori, NULL)) as guru,
                        count(if(kategori='3', kategori, NULL)) as karyawan
                FROM tbl_screening";
        $result = $this->db->query($sql);
        return $result->row();
    }
}
