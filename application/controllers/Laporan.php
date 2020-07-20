<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('lansia_model');
        $this->load->model('laporan_model');
        $level_akun = $this->session->userdata('level');
        if ($level_akun != "admin") {
            redirect('home');
        }
    }

    public function index()
    {
        $data['data'] = $this->lansia_model->getdata();
        $this->load->view('template/header');
        $this->load->view('laporan/data_lansia', $data);
        $this->load->view('template/footer');
    }

    public function data_kunjungan($id)
    {
        $data['data_lansia'] = $this->laporan_model->row_lansia($id);
        $data['data_kunjungan'] = $this->laporan_model->data_kunjungan($id);
        $data['id'] = $id;
        $this->load->view('template/header');
        $this->load->view('laporan/data_kunjungan', $data);
        $this->load->view('template/footer');
    }
    public function tambah_kunjungan($id)
    {
        $data['id'] = $id;
        $this->load->view('template/header');
        $this->load->view('laporan/tambah_kunjungan', $data);
        $this->load->view('template/footer');
    }
    public function edit_kunjungan($id)
    {
        $data['id'] = $id;
        $data['data'] = $this->laporan_model->get_kunjungan_row($id);
        $this->load->view('template/header');
        $this->load->view('laporan/edit_kunjungan', $data);
        $this->load->view('template/footer');
    }
    public function proses_tambah_kunjungan($id)
    {
        $data = array(
            'lansia_id' => $id,
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'catatan_kondisi' => $this->input->post('catatan_kondisi'),
            'catatan_perubahan' => $this->input->post('catatan_perubahan'),
        );

        $insert = $this->laporan_model->insert_kunjungan($data);
        redirect('laporan/data_kunjungan/' . $id);
    }
    public function proses_edit_kunjungan($id)
    {
        $id_lansia = $this->input->post('lansia_id');
        $data = array(
            'lansia_id' => $this->input->post('lansia_id'),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'catatan_kondisi' => $this->input->post('catatan_kondisi'),
            'catatan_perubahan' => $this->input->post('catatan_perubahan'),
        );

        $update = $this->laporan_model->update_kunjungan($id, $data);
        redirect('laporan/data_kunjungan/' . $id_lansia);
    }

    public function hapus_kunjungan($id)
    {
        $data2 = $this->laporan_model->get_kunjungan_row($id);
        $menuju = $data2->lansia_id;

        $hapus = $this->laporan_model->hapus_kunjungan($id);
        redirect('laporan/data_kunjungan/' . $menuju);
    }

    public function print_kunjungan($id)
    {
        $data['data'] = $this->laporan_model->data_kunjungan_print($id);
        $data['data2'] = $this->laporan_model->data_kunjungan_print2($id);
        $this->load->view('laporan/print_kunjungan', $data);
    }
    public function view_spjm()
    {
        $data['data'] = $this->lansia_model->getdata();
        $this->load->view('template/header');
        $this->load->view('laporan/data_sptjm', $data);
        $this->load->view('template/footer');
    }
    public function view_suratkuasa()
    {
        $data['data'] = $this->lansia_model->getdata();
        $this->load->view('template/header');
        $this->load->view('laporan/data_suratkuasa', $data);
        $this->load->view('template/footer');
    }
    public function view_penunjukkan()
    {
        $data['data'] = $this->lansia_model->getdata();
        $this->load->view('template/header');
        $this->load->view('laporan/data_lansia_penunjukkan', $data);
        $this->load->view('template/footer');
    }
    public function sptjm($id)
    {
        $data['data'] = $this->lansia_model->getdata();
        $data['data'] = $this->laporan_model->data_kunjungan_print2($id);
        $this->load->view('laporan/surat_sptjm', $data);
    }
    public function print_suratkuasa($id)
    {
        $data['data'] = $this->lansia_model->getdata();
        $data['data'] = $this->laporan_model->data_kunjungan_print2($id);
        $this->load->view('laporan/print_suratkuasa', $data);
    }
    public function print_penunjukkan($id)
    {
        $data['data'] = $this->lansia_model->getdata();
        $data['data'] = $this->laporan_model->data_kunjungan_print2($id);
        $this->load->view('laporan/print_penunjukkan', $data);
    }
    public function cetak_lansia()
    {
        $data['data'] = $this->laporan_model->getalldata();
        $this->load->view('laporan/cetak_lansia', $data);
    }
}

/* End of file Laporan.php */
