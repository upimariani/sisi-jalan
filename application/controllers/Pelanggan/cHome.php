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
    public function update_cart()
    {
        $i = 1;
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid'  => $items['rowid'],
                'qty'    => $this->input->post($i . '[qty]')
            );
            $this->cart->update($data);
            $i++;
        }
        redirect('pelanggan/chome/view_cart');
    }
    public function delete($rowid)
    {
        $this->cart->remove($rowid);
        redirect('pelanggan/chome/view_cart');
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
        $this->form_validation->set_rules('pembayaran', 'Metode Pembayaran', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Pelanggan/layouts/header');
            $this->load->view('Pelanggan/layouts/aside');
            $this->load->view('Pelanggan/checkout');
            $this->load->view('Pelanggan/Layouts/footer');
        } else {
            $data = array(
                'tgl_transaksi' => date('Y-m-d'),
                'total_bayar' => $this->cart->total(),
                'status_order' => '0',
                'pembayaran' => $this->input->post('pembayaran'),
                'bukti_pembayaran' => '0'
            );
        }
    }
}

/* End of file cHome.php */
