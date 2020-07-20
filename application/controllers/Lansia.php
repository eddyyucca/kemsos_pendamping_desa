<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Lansia extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('lansia_model');
        $level_akun = $this->session->userdata('level');
        if ($level_akun != "admin") {
            redirect('home');
        }
    }

    public function index()
    {
        $data['data'] = $this->lansia_model->getdata();
        $this->load->view('template/header');
        $this->load->view('lansia/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_lansia()
    {

        $data['pendamping'] = $this->lansia_model->dataPendamping();
        $this->load->view('template/header');
        $this->load->view('lansia/tambah_lansia', $data);
        $this->load->view('template/footer');
    }

    public function proses_tambah_lansia()
    {
        $data = array(
            'bdt' => $this->input->post('bdt'),
            'id_pendamping' => $this->input->post('id_pendamping'),
            'id_wali' => "0",
            'nik_lansia' => $this->input->post('nik_lansia'),
            'nama_lansia' => $this->input->post('nama_lansia'),
            'ttl_lansia' => $this->input->post('ttl_lansia'),
            'alamat_lansia' => $this->input->post('alamat_lansia'),
        );

        $insert = $this->lansia_model->tambah_data_lansia($data);
        redirect('lansia/index');
    }

    public function view_lansia($id)
    {
        $data['x'] = $this->lansia_model->getdatarow($id);
        $this->load->view('template/header');
        $this->load->view('lansia/view_lansia', $data);
        $this->load->view('template/footer');
    }
    public function edit_lansia($id)
    {
        $data['pendamping'] = $this->lansia_model->dataPendamping();
        $data['x'] = $this->lansia_model->getdatarow($id);
        $this->load->view('template/header');
        $this->load->view('lansia/edit_lansia', $data);
        $this->load->view('template/footer');
    }
}

/* End of file Lansia.php */
