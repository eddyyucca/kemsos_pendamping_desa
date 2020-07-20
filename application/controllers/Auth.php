<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
        $this->load->model('auth_model');
    }
    public function index()
    {
        $data['data'] = false;
        $data['judul'] = "Login";
        $this->load->view('auth/template/header', $data);
        $this->load->view('auth/index', $data);
        $this->load->view('auth/template/footer');
    }
    public function login_proses()
    {

        $username = $this->input->post('username');
        $password =  md5($this->input->post('password'));

        $cek = $this->auth_model->login($username, $password);

        if ($cek == true) {

            foreach ($cek as $row);
            $this->session->set_userdata('id', $row->id);
            $this->session->set_userdata('nama', $row->nama_user);
            $this->session->set_userdata('username', $row->id_dep);
            $this->session->set_userdata('level', $row->level);

            if ($this->session->userdata('level') == "admin") {
                redirect('home/index');
            } elseif ($this->session->userdata('level') == "user") {
                redirect('lansia/index');
            }
        } elseif ($cek == false) {
            $data['judul'] = 'Login';
            $data['data'] = ' <div class="alert alert-danger" role="alert">
            Terjadi kesalahan,ulangi login !
            </div>';

            $this->load->view('auth/template/header', $data);
            $this->load->view('auth/index', $data);
            $this->load->view('auth/template/footer');
        }
    }
    public function keluar()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
