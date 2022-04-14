<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

    public function index()
    {
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/login');
        $this->load->view('Admin/Layouts/footer');
    }
}

/* End of file cLogin.php */
