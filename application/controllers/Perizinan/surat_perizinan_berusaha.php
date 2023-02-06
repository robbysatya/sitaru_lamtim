<?php
defined('BASEPATH') or exit('No direct script access allowed');

class surat_perizinan_nonberusaha extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email')) {
			redirect('auth');
		} else if ($this->session->userdata('role') == null) {
			redirect('auth');
		} else if ($this->session->userdata('role') != 'Pemohon') {
			redirect('auth');
		}
		$this->load->library('form_validation');
		$this->load->model('kkpr_NonBerusaha_model');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->data['user_data'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->result_array();

		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
		$this->load->library('pdfgenerator');

		// title dari pdf
		$this->data['title_pdf'] = 'Surat Perizinan KKPR Berusaha';

		// filename dari pdf ketika didownload
		$file_pdf = 'surat_perizinan_';

		// setting paper
		$paper = 'A4';
		//orientasi paper potrait / landscape
		$orientation = "portrait";

		$html = $this->load->view('perizinan/surat_perizinan_berusaha_pdf', $this->data, true);

		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}
}