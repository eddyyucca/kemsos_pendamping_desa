<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Lansia_model extends CI_Model
{


    public function dataPendamping()
    {
        return $this->db->get('data_pendamping')->result();
    }

    public function tambah_data_lansia($data)
    {
        $this->db->insert('data_lansia', $data);
    }

    public function getdata()
    {
        $this->db->select('*');
        $this->db->from('data_lansia');
        $this->db->join('data_wali', 'data_wali.id_wali = data_lansia.id_wali');
        $this->db->join('data_pendamping', 'data_pendamping.id_pen = data_lansia.id_pendamping');

        return $this->db->get()->result();
    }
    public function getdatarow($id)
    {
        $this->db->select('*');
        $this->db->from('data_lansia');
        $this->db->join('data_wali', 'data_wali.id_wali = data_lansia.id_wali');
        $this->db->join('data_pendamping', 'data_pendamping.id_pen = data_lansia.id_pendamping');
        $this->db->where('id_lansia', $id);
        return $this->db->get()->row();
    }

    public function update_wali($id, $data2)
    {
        $this->db->where('id_lansia', $id);
        $this->db->update('data_lansia', $data2);
    }
}

/* End of file Lansia_model.php */
