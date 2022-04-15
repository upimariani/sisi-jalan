<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mDiskon extends CI_Model
{
    public function select()
    {
        $this->db->select('*');
        $this->db->from('diskon');
        $this->db->join('produk', 'diskon.id_produk = produk.id_produk', 'left');
        $this->db->where('besar!=0');
        return $this->db->get()->result();
    }
    public function update($id, $data)
    {
        $this->db->where('id_produk', $id);
        $this->db->update('diskon', $data);
    }
}

/* End of file mDiskon.php */
