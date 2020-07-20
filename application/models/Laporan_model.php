<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{

    public function row_lansia($id)
    {
        $this->db->select('*');
        $this->db->from('data_lansia');
        $this->db->join('data_pendamping', 'data_pendamping.id_pen = data_lansia.id_pendamping', 'left');
        $this->db->join('data_wali', 'data_wali.id_wali = data_lansia.id_wali', 'left');

        $this->db->where('id_lansia', $id);
        return $this->db->get()->row();
    }

    public function data_kunjungan($id)
    {
        $this->db->select('*');
        $this->db->from('data_kunjungan');
        $this->db->join('data_lansia', 'data_lansia.id_lansia = data_kunjungan.lansia_id');
        $this->db->where('id_lansia', $id);
        return $this->db->get()->result();
    }

    public function data_kunjungan_print($id)
    {
        $this->db->where('lansia_id', $id);
        return $this->db->get('data_kunjungan')->result();
    }
    public function data_kunjungan_print2($id)
    {
        $this->db->select('*');
        $this->db->from('data_lansia');
        $this->db->join('data_pendamping', 'data_pendamping.id_pen = data_lansia.id_pendamping', 'left');
        $this->db->join('data_wali', 'data_wali.id_wali = data_lansia.id_wali', 'left');
        $this->db->join('data_rekening', 'data_rekening.id_rekening = data_lansia.id_rek', 'left');

        // $this->db->join('data_kunjungan', 'data_kunjungan.id_kunjungan');

        $this->db->where('id_lansia', $id);
        return $this->db->get()->row();
    }
    public function getalldata()
    {
        $this->db->select('*');
        $this->db->from('data_lansia');
        $this->db->join('data_pendamping', 'data_pendamping.id_pen = data_lansia.id_pendamping', 'left');
        $this->db->join('data_wali', 'data_wali.id_wali = data_lansia.id_wali', 'left');
        $this->db->join('data_rekening', 'data_rekening.id_rekening = data_lansia.id_rek', 'left');

        // $this->db->join('data_kunjungan', 'data_kunjungan.id_kunjungan');

        return $this->db->get()->result();
    }

    public function insert_kunjungan($data)
    {
        $this->db->insert('data_kunjungan', $data);
    }
    public function update_kunjungan($id, $data)
    {
        $this->db->where('id_kunjungan', $id);
        $this->db->update('data_kunjungan', $data);
    }
    public function get_kunjungan_row($id)
    {
        $this->db->where('id_kunjungan', $id);
        return $this->db->get('data_kunjungan')->row();
    }
    public function hapus_kunjungan($id)
    {
        $this->db->where('id_kunjungan', $id);
        $this->db->delete('data_kunjungan');
    }
}

/* End of file Laporan_model.php */
