<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Wali_model extends CI_Model
{


    public function hitungid()
    {
        return $this->db->get('data_wali')->result();
    }

    public function tambah_data_wali($data)
    {
        $this->db->insert('data_wali', $data);
    }
    public function getrowwali($id)
    {
        $this->db->where('id_wali', $id);
        return $this->db->get('data_wali')->row();
    }
    public function update_wali($id, $data)
    {
        $this->db->where('id_wali', $id);
        $this->db->update('data_wali', $data);
    }
}

/* End of file Wali_model.php */
