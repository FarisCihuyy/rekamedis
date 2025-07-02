<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tindakan extends CI_Model {

    public function get_all() {
        return $this->db->get('tindakan')->result_array();
    }
}
