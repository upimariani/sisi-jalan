<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksi extends CI_Controller
{

    public function index()
    {
        $this->protect->protect_admin();
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/transaksi/status_order');
        $this->load->view('Admin/Layouts/footer');
    }
}

/* End of file cTransaksi.php */
