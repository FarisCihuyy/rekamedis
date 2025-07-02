<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dokter extends CI_Model {

    public function insert($data) {
        return $this->db->insert('dokter', $data);
    }

    public function get_all() {
        return $this->db->get('dokter')->result_array();
    }
}
