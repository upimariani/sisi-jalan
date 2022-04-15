<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mTransaksi');
    }


    public function index()
    {
        $data = array(
            'status' => $this->mTransaksi->status_order()
        );
        $this->protect->protect_admin();
        $this->load->view('Admin/Layouts/head');
        $this->load->view('Admin/transaksi/status_order', $data);
        $this->load->view('Admin/Layouts/footer');
    }
}

/* End of file cTransaksi.php */
