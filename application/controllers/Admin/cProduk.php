<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProduk extends CI_Controller
{

    public function index()
    {
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/produk/produk');
        $this->load->view('Admin/Layouts/footer');
    }
    public function create()
    {
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/produk/create');
        $this->load->view('Admin/Layouts/footer');
    }
}

/* End of file cProduk.php */
