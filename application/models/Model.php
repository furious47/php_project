<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Model extends CI_Model
{

    public function getFoods()
    {
        $query = $this->db->get('menu');
        return $query->result();
    }

    public function register($data)
    {
        if ($this->db->insert('tbl_users', $data)) {
            return true;
        }
    }
}
