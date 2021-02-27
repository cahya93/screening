<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('home/wrapper/head.php');
        $this->load->view('home/wrapper/header.php');
        $this->load->view('home/index.php');
        $this->load->view('home/wrapper/footer.php');
    }
}
