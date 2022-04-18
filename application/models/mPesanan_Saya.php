<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mPesanan_Saya extends CI_Model
{
    public function pesanan()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->where('transaksi.id_pelanggan', $this->session->userdata('id'));
        return $this->db->get()->result();
    }
    public function detail_order($id)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('detail_transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi', 'left');
        $this->db->join('produk', 'produk.id_produk = detail_transaksi.id_produk', 'left');
        $this->db->where('transaksi.id_transaksi', $id);
        return $this->db->get()->result();
    }
    public function bayar($id, $data)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->update('transaksi', $data);
    }
}

/* End of file mPesananSaya.php */
