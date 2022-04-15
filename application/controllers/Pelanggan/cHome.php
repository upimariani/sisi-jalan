<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mKatalog');
    }
    public function index()
    {
        $data = array(
            'menu' => $this->mKatalog->menu()
        );
        $this->load->view('Pelanggan/layouts/header');
        $this->load->view('Pelanggan/layouts/aside');
        $this->load->view('Pelanggan/home', $data);
        $this->load->view('Pelanggan/Layouts/footer');
    }
    public function detail_produk()
    {
        $this->load->view('Pelanggan/layouts/header');
        $this->load->view('Pelanggan/layouts/aside');
        $this->load->view('Pelanggan/detail_produk');
        $this->load->view('Pelanggan/Layouts/footer');
    }
    public function cart()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'qty' => $this->input->post('qty'),
            'stok' => $this->input->post('stok'),
            'picture' => $this->input->post('picture')
        );
        $this->cart->insert($data);
        redirect('pelanggan/chome');
    }
    public function view_cart()
    {
        $this->load->view('Pelanggan/layouts/header');
        $this->load->view('Pelanggan/layouts/aside');
        $this->load->view('Pelanggan/cart');
        $this->load->view('Pelanggan/Layouts/footer');
    }
    public function checkout()
    {
        $this->load->view('Pelanggan/layouts/header');
        $this->load->view('Pelanggan/layouts/aside');
        $this->load->view('Pelanggan/checkout');
        $this->load->view('Pelanggan/Layouts/footer');
    }
}

/* End of file cHome.php */
