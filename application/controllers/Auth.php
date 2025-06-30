<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }

    public function Check()
    {
        $email  = htmlentities($this->input->post('email'));
        $pswd   = htmlentities($this->input->post('pswd'));

        //$this->db->where('email', $email);
        //$this->db->where('pswd', $pswd);
        //$cek = $this->db->get('tbl_user')->result();

        $sql = "SELECT * FROM tbl_user WHERE email='$email' AND pswd='$pswd' ";
        //echo $sql;
        $cek = $this->db->query($sql)->result();
        //echo $this->db->last_query();
        //print_r($cek);
        // fungsi untuk mengetahui apakah user dan password ada atau tidak
        if (count($cek) > 0) {
            // fungsi untuk merubah data array menjadi sebuag class object
            foreach ($cek as $_cek);
            $this->session->set_userdata('ses_email', $_cek->email);
            $this->session->set_userdata('ses_masuk', TRUE);
            $this->session->set_userdata('ses_akses', $_cek->akses);
            $this->session->set_userdata('ses_id_user', $_cek->id);
            $this->session->set_userdata('ses_kelas', $_cek->kelas);
            echo "<meta http-equiv='refresh' content='0; url=" . base_url() . "index.php/Welcome'>";
        } else {
            echo "<meta http-equiv='refresh' content='0; url=" . base_url() . "index.php'>";
        }
    }
}
