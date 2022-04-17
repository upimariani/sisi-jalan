<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLogin_pelanggan');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Pelanggan/layouts/header');
            $this->load->view('Pelanggan/layouts/aside');
            $this->load->view('Pelanggan/login');
            $this->load->view('Pelanggan/Layouts/footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $data = $this->mLogin_pelanggan->login($username, $password);
            if ($data) {
                $id = $data->id_pelanggan;
                $this->session->set_userdata('id', $id);
                redirect('pelanggan/chome');
            } else {
                $this->session->set_flashdata('error', 'Username dan Password Salah!');
                redirect('pelanggan/clogin');
            }
        }
    }
    public function logout()
    {

        $this->session->unset_userdata('id');
        $this->session->set_flashdata('success', 'Anda Berhasil LogOut!');
        redirect('pelanggan/clogin');
    }

    //registrasi pelanggan
    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required|min_length[11]|max_length[13]');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Pelanggan/layouts/header');
            $this->load->view('Pelanggan/layouts/aside');
            $this->load->view('Pelanggan/registrasi');
            $this->load->view('Pelanggan/Layouts/footer');
        } else {
            $data = array(
                'nama_pelanggan' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jk'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'member' => '0'
            );
            $this->mLogin_pelanggan->register($data);
            $this->session->set_flashdata('success', 'Anda Berhasil Register, Silahkan Login!');
            redirect('pelanggan/clogin');
        }
    }
}

/* End of file cLogin.php */
