<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Rekening extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('rekening_model');
        $level_akun = $this->session->userdata('level');
        if ($level_akun != "admin") {
            redirect('home');
        }
    }

    public function index()
    {
        $data['data'] = $this->rekening_model->getall();
        $this->load->view('template/header');
        $this->load->view('rekening/index', $data);
        $this->load->view('template/footer');
    }
    public function rekening_kosong()
    {
        $data['data'] = $this->rekening_model->getkosong();
        $this->load->view('template/header');
        $this->load->view('rekening/rekening_kosong', $data);
        $this->load->view('template/footer');
    }
    public function tambah_rek($id)
    {
        $data['id'] = $id;
        $this->load->view('template/header');
        $this->load->view('rekening/tambah_rek', $data);
        $this->load->view('template/footer');
    }
    public function proses_tambah_rek($id)
    {
        $jumlah = $this->rekening_model->jumlah_rek();
        $xx = count($jumlah);
        $id_rek = $xx + 2;
        $data = array(
            'id_rekening' => $id_rek,
            'nama_bank' => $this->input->post('nama_bank'),
            'no_rek' => $this->input->post('no_rek'),
        );

        $data2 = array(
            'id_rek' => $id_rek,
        );

        $update_lansia = $this->rekening_model->lansia_rek($data2, $id);
        $tambah_rek = $this->rekening_model->tambah_rek($data);
        redirect('rekening/index');
    }

    public function edit_rekening($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->rekening_model->getrow($id);
        $this->load->view('template/header');
        $this->load->view('rekening/edit_rek', $data);
        $this->load->view('template/footer');
    }

    public function proses_edit_rek($id)
    {
        $data = array(
            'nama_bank' => $this->input->post('nama_bank'),
            'no_rek' => $this->input->post('no_rek'),
        );
        $tambah_rek = $this->rekening_model->update_rek($data, $id);
        redirect('rekening/index');
    }
}

/* End of file Rekening.php */
