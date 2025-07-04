<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pasien'); // model yang kamu pakai
	}

	public function index()
	{
		$data['rekamedik'] = $this->M_pasien->get_all(); // ambil semua data pasien
		$this->load->view('welcome_message', $data); // sesuaikan nama view
	}

public function delete($no_room)
{
    // Hapus dari rekamedik dulu
    $this->db->where('no_room', $no_room);
    $this->db->delete('reka_medik');

    // // Lalu hapus dari pasien (kalau diizinkan oleh struktur database-mu)
    $this->db->where('no_room', $no_room);
    $this->db->delete('pasien');

    // Redirect atau kirim flashdata
    $this->session->set_flashdata('alert', 'Data berhasil dihapus');
    redirect('welcome');
}

	public function delete_ajax()
	{
    	$id = $this->input->post('id');
            log_message('debug', 'Menghapus data dengan no_room: ' . $id); // log ke log CI

    	$this->load->model('M_pasien');
    	$this->M_pasien->delete($id);
    	echo json_encode(['status' => 'success']);
	}

}
