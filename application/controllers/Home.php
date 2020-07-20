<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $level_akun = $this->session->userdata('level');
        if ($level_akun == "1") {
            redirect('home');
        } elseif ($level_akun == false) {
            redirect('auth');
        }
    }


    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }
}

/* End of file Home.php */
