<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDiskon extends CI_Controller
{

    public function index()
    {
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/diskon/diskon');
        $this->load->view('Admin/Layouts/footer');
    }
}

/* End of file cDiskon.php */
