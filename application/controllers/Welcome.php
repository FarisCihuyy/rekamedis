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

	public function delete($id)
	{
		$this->M_pasien->delete($id);
		$this->session->set_flashdata('success', 'Data berhasil dihapus!');
		redirect('welcome');
	}

	public function delete_ajax()
	{
    	$id = $this->input->post('id');
    	$this->load->model('M_pasien');
    	$this->M_pasien->delete($id);
    	echo json_encode(['status' => 'success']);
	}

}
