<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pendamping_model extends CI_Model
{

    public function simpan_pendamping($data)
    {
        $this->db->insert('data_pendamping', $data);
    }

    public function getall_obat()
    {
        return $this->db->get('data_pendamping')->result();
    }

    public function view($id)
    {
        $this->db->where('id_pen', $id);
        return $this->db->get('data_pendamping')->row();
    }

    public function hapus_pen($id)
    {
        $this->db->where('id_pen', $id);
        $this->db->delete('data_pendamping');
    }

    public function update($id, $data)
    {
        $this->db->where('id_pen', $id);
        $this->db->update('data_pendamping', $data);
    }
}

/* End of file Pendamping_model.php */
