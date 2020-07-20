<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Wali extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pendamping_model');
        $this->load->model('wali_model');
        $this->load->model('lansia_model');
        $level_akun = $this->session->userdata('level');
        if ($level_akun != "admin") {
            redirect('home');
        }
    }

    public function index()
    {
        $data['data'] = $this->pendamping_model->getall_obat();
        $this->load->view('template/header');
        $this->load->view('wali/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_wali($id)
    {
        $data['id'] = $id;
        $this->load->view('template/header');
        $this->load->view('wali/tambah_wali', $data);
        $this->load->view('template/footer');
    }
    public function edit_wali($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->wali_model->getrowwali($id);
        $this->load->view('template/header');
        $this->load->view('wali/edit_wali', $data);
        $this->load->view('template/footer');
    }
    public function proses_edit_wali($id)
    {
        $data = array(
            'nik_wali' => $this->input->post('nik_wali'),
            'nama_wali' => $this->input->post('nama_wali'),
            'no_telpon_wali' => $this->input->post('no_telpon_wali'),
            'alamat_wali' => $this->input->post('alamat_wali'),
        );
        $update = $this->wali_model->update_wali($id, $data);
        redirect('lansia/index');
    }
    public function proses_tambah_wali($id)
    {

        $x = $this->wali_model->hitungid();
        $xx = count($x);
        $xxv = $xx + 2;
        $data = array(
            'id_wali' => $xxv,
            'nik_wali' => $this->input->post('nik_wali'),
            'nama_wali' => $this->input->post('nama_wali'),
            'no_telpon_wali' => $this->input->post('no_telpon_wali'),
            'alamat_wali' => $this->input->post('alamat_wali'),
        );

        $data2 = array(
            'id_wali' => $xxv,
        );

        $insert = $this->wali_model->tambah_data_wali($data);
        $insert = $this->lansia_model->update_wali($id, $data2);
        redirect('lansia/index');
    }
}

/* End of file Wali.php */
