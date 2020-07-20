<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pendamping extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pendamping_model');
        $this->load->model('user_model');
        $level_akun = $this->session->userdata('level');
        if ($level_akun != "admin") {
            redirect('home');
        }
    }

    public function index()
    {
        $data['data'] = $this->pendamping_model->getall_obat();
        $this->load->view('template/header');
        $this->load->view('pendamping/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_pendamping()
    {
        $this->load->view('template/header');
        $this->load->view('pendamping/tambah_pendamping');
        $this->load->view('template/footer');
    }

    public function proses_tambah_pendamping()
    {
        $data = array(
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'ttl' => $this->input->post('ttl'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp')
        );

        $data2 = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('nik'),
            'password' => md5($this->input->post('no_hp')),
            'level' => "user",
        );
        $simpan = $this->pendamping_model->simpan_pendamping($data);
        $simpan_user = $this->user_model->simpan_user($data2);
        redirect('pendamping/index');
    }
    public function proses_edit_pendamping($id)
    {
        $data = array(
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'ttl' => $this->input->post('ttl'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp')
        );
        $simpan = $this->pendamping_model->update($id, $data);
        redirect('pendamping/index');
    }

    public function view_pendamping($id)
    {
        $data['x'] = $this->pendamping_model->view($id);
        $this->load->view('template/header');
        $this->load->view('pendamping/view_pendamping', $data);
        $this->load->view('template/footer');
    }
    public function hapus_pen($id)
    {
        $hapus =  $this->pendamping_model->hapus_pen($id);
        redirect('pendamping/index');
    }
    public function edit_pen($id)
    {
        $data['x'] = $this->pendamping_model->view($id);
        $this->load->view('template/header');
        $this->load->view('pendamping/edit_pendamping', $data);
        $this->load->view('template/footer');
    }
}

/* End of file Pendamping.php */
