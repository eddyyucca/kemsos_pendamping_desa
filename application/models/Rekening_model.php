<?php


defined('BASEPATH') or exit('No direct script access allowed');

class rekening_model extends CI_Model
{

    public function getall()
    {
        $this->db->select('*');
        $this->db->from('data_lansia');
        $this->db->join('data_rekening', 'data_rekening.id_rekening = data_lansia.id_rek');

        return $this->db->get()->result();
    }
    public function getkosong()
    {
        $this->db->where('id_rek', "");

        return $this->db->get('data_lansia')->result();
    }

    public function lansia_rek($data, $id)
    {
        $this->db->where('id_lansia', $id);
        $this->db->update('data_lansia', $data);
    }

    public function tambah_rek($data)
    {
        $this->db->insert('data_rekening', $data);
    }
    public function jumlah_rek()
    {
        return $this->db->get('data_rekening')->result();
    }
    public function getrow($id)
    {
        $this->db->where('id_rekening', $id);
        return $this->db->get('data_rekening')->row();
    }
    public function update_rek($data, $id)
    {
        $this->db->where('id_rekening', $id);
        $this->db->update('data_rekening', $data);
    }
}

/* End of file rekening_model.php */
