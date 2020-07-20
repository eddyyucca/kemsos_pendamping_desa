<?php


defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{


    public function simpan_user($data2)
    {
        $this->db->insert('data_user', $data2);
    }
}

/* End of file User_model.php */
