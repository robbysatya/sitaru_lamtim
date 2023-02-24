<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Disetujui extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email')) {
			redirect('auth');
		} else if ($this->session->userdata('role') == null) {
			redirect('auth');
		} else if ($this->session->userdata('role') != 'Admin' && $this->session->userdata('role') != 'Validator') {
			redirect('auth');
		}
		$this->load->model('kkpr_NonBerusaha_model');
	}

	public function index()
	{
		$data['title'] = 'Data KKPR Non Berusaha Disetujui';
		$data['kkpr_sudah'] = $this->db->get_where('tb_kkpr_nonberusaha', ['status' => 'Disetujui'])->result_array();
		$data['user_name'] = $this->kkpr_NonBerusaha_model->validator();
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/kkpr_nonberusaha_disetujui', $data);
		$this->load->view('templates/admin_footer');
	}
	public function detail($id = null)
	{
		$data['title'] = 'Detail Data KKPR Non Berusaha Disetujui';
		$data['kkpr_sudah'] = $this->db->get_where('tb_kkpr_nonberusaha', ['id' => $id])->result_array();
		$data['user_name'] =   $this->db->get_where('tb_kkpr_nonberusaha', ['id' => $id])->result_array();
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/detail_kkpr_nonberusaha_v', $data);
		$this->load->view('templates/admin_footer');
	}

	public function surat_perizinan_nonberusaha($id = null)
	{
		$this->data['data_surat'] = $this->db->get_where('tb_kkpr_nonberusaha', ['id' => $id])->result_array();;

		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
		$this->load->library('pdfgenerator');

		// title dari pdf
		$this->data['title_pdf'] = 'Surat Perizinan KKPR Non Berusaha';

		// filename dari pdf ketika didownload
		$file_pdf = 'surat_perizinan_nonberusaha';

		// setting paper
		$paper = 'A4';
		//orientasi paper potrait / landscape
		$orientation = "portrait";

		$html = $this->load->view('admin/surat_perizinan_nonberusaha_pdf', $this->data, true);

		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}
}
