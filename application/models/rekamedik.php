<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rekamedik extends CI_Model {
    public function insert($data) {
        return $this->db->insert('reka_medik', $data);
    }
}
