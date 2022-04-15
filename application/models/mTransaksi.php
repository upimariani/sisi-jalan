<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mTransaksi extends CI_Model
{
    public function status_order()
    {
        $data['pesanan_masuk'] = $this->db->query("SELECT*FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan WHERE transaksi.status_order='0'")->result();
        $data['konfirmasi'] = $this->db->query("SELECT*FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan WHERE transaksi.status_order='1'")->result();
        $data['diproses'] = $this->db->query("SELECT*FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan WHERE transaksi.status_order='2'")->result();
        $data['dikirim'] = $this->db->query("SELECT*FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan WHERE transaksi.status_order='3'")->result();
        $data['selesai'] = $this->db->query("SELECT*FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan WHERE transaksi.status_order='4'")->result();
        return $data;
    }
}

/* End of file mTransaksi.php */
