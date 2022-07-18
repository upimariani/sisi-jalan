<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLaporan extends CI_Model
{
    //laporan transaksi
    public function grafik_transaksi()
    {
        $this->db->select('SUM(total_bayar) as total, tgl_transaksi');
        $this->db->from('transaksi');
        $this->db->where('status_order=4');
        $this->db->group_by('tgl_transaksi');
        $this->db->order_by('total', 'desc');
        return $this->db->get()->result();
    }
    public function lap_harian_transaksi($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->where('transaksi.status_order=4');
        $this->db->where('DAY(transaksi.tgl_transaksi)', $tanggal);
        $this->db->where('MONTH(transaksi.tgl_transaksi)', $bulan);
        $this->db->where('YEAR(transaksi.tgl_transaksi)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_bulanan_transaksi($bulan, $tahun)
    {

        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->where('transaksi.status_order=4');
        $this->db->where('MONTH(transaksi.tgl_transaksi)', $bulan);
        $this->db->where('YEAR(transaksi.tgl_transaksi)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_tahunan_transaksi($tahun)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->where('transaksi.status_order=4');
        $this->db->where('YEAR(transaksi.tgl_transaksi)', $tahun);
        return $this->db->get()->result();
    }


    //laporan produk
    public function grafik_produk()
    {
        $this->db->select('SUM(qty) as qty, nama_produk, produk.id_produk');
        $this->db->from('detail_transaksi');
        $this->db->join('produk', 'produk.id_produk = detail_transaksi.id_produk', 'left');
        $this->db->group_by('produk.id_produk');
        $this->db->order_by('qty', 'desc');

        return $this->db->get()->result();
    }
    public function lap_harian_produk($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi', 'left');
        $this->db->join('produk', 'produk.id_produk = detail_transaksi.id_produk', 'left');
        $this->db->join('promo', 'promo.id_produk = produk.id_produk', 'left');

        $this->db->where('transaksi.status_order=4');
        $this->db->where('DAY(transaksi.tgl_transaksi)', $tanggal);
        $this->db->where('MONTH(transaksi.tgl_transaksi)', $bulan);
        $this->db->where('YEAR(transaksi.tgl_transaksi)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_bulanan_produk($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi =  transaksi.id_transaksi', 'left');
        $this->db->join('produk', 'produk.id_produk = detail_transaksi.id_produk', 'left');
        $this->db->join('promo', 'promo.id_produk = produk.id_produk', 'left');

        $this->db->where('transaksi.status_order=4');
        $this->db->where('MONTH(transaksi.tgl_transaksi)', $bulan);
        $this->db->where('YEAR(transaksi.tgl_transaksi)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_tahunan_produk($tahun)
    {
        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'detail_transaksi.id_transaksi =  transaksi.id_transaksi', 'left');
        $this->db->join('produk', 'produk.id_produk = detail_transaksi.id_produk', 'left');
        $this->db->join('promo', 'promo.id_produk = produk.id_produk', 'left');

        $this->db->where('transaksi.status_order=4');
        $this->db->where('YEAR(transaksi.tgl_transaksi)', $tahun);
        return $this->db->get()->result();
    }

    //laporan pelanggan
    public function grafik_pelanggan()
    {
        $this->db->select('COUNT(nama_pelanggan) as jml, jenis_kelamin');
        $this->db->from('pelanggan');
        $this->db->group_by('jenis_kelamin');
        $this->db->order_by('jml', 'desc');

        return $this->db->get()->result();
    }
    public function pelanggan($jk, $member)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('jenis_kelamin', $jk);
        $this->db->where('member', $member);
        return $this->db->get()->result();
    }


    public function lap_harian_promo($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('promo');
        $this->db->join('produk', 'promo.id_produk = produk.id_produk', 'left');

        $this->db->where('DAY(tgl_mulai)', $tanggal);
        $this->db->where('MONTH(tgl_mulai)', $bulan);
        $this->db->where('YEAR(tgl_mulai)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_bulanan_promo($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('promo');
        $this->db->join('produk', 'promo.id_produk = produk.id_produk', 'left');

        $this->db->where('MONTH(tgl_mulai)', $bulan);
        $this->db->where('YEAR(tgl_mulai)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_tahunan_promo($tahun)
    {
        $this->db->select('*');
        $this->db->from('promo');
        $this->db->join('produk', 'promo.id_produk = produk.id_produk', 'left');

        $this->db->where('YEAR(tgl_mulai)', $tahun);
        return $this->db->get()->result();
    }

    public function grafik_promo()
    {
        $this->db->select('*');
        $this->db->from('promo');
        $this->db->join('produk', 'promo.id_produk = produk.id_produk', 'left');
        $this->db->where('besar!=0');
        $this->db->order_by('besar', 'asc');
        return $this->db->get()->result();
    }
}

/* End of file mLaporan.php */
