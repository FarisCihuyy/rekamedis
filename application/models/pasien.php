<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Model {

    public function insert($data)
    {
        return $this->db->insert('pasien', $data);
    }

    public function get_all()
    {
        return $this->db->get('pasien')->result_array();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('pasien', ['id' => $id])->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('pasien', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('pasien', ['id' => $id]);
    }
}
