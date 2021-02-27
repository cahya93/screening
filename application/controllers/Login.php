<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Login Admin';
        $this->load->view('login/index.php', $data);
    }
}
