<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
{
		$this->load->view('template/header');
        $this->load->view('template/sidebar');
		$this->load->view('admin/index');
        $this->load->view('template/footer');
		$this->load->view('template/script');
}

	public function pasien_form()
{
		$this->load->model('tindakan');
		$this->load->model('Dokter');
		
		$data['tindakan'] = $this->tindakan->get_all();
    	$data['dokter'] = $this->Dokter->get_all();

		$this->load->view('template/header');
		$this->load->view('template/sidebar'); 
		$this->load->view('admin/pasien_form', $data);
		$this->load->view('template/footer');
		$this->load->view('template/script');
}

	public function dokter()
{
		$this->load->view('template/header');
        $this->load->view('template/sidebar');
		$this->load->view('admin/dokter');
        $this->load->view('template/footer');
		$this->load->view('template/script');
}

	public function dokter_save()
{
    $this->load->model('dokter');
    $data = [
        'nama' => $this->input->post('nama'),
        'no_telp' => $this->input->post('no_telp')
    ];
    $this->dokter->insert($data);
    redirect('admin/dokter'); // kembali ke form setelah simpan
}




	public function simpan_pasien()
{
    $data = [
        'nama'         => $this->input->post('nama'),
        'nomor_kamar'  => $this->input->post('nomor_kamar'),
        'telepon'      => $this->input->post('telepon'),
        'alamat'       => $this->input->post('alamat'),
        'visum'        => $this->input->post('visum'),
        'tindakan'     => $this->input->post('tindakan'),
        'dokter'       => $this->input->post('dokter'),
    ];

	foreach ($data as $key => $value) {
		echo $key . ': ' . $value . '<br>';
	}
	$this->load->model('pasien');
	$this->pasien->insert($data);	

    // redirect('admin/pasien'); // redirect ke halaman daftar pasien, atau lainnya
}

}
