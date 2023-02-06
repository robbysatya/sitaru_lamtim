<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kkpr_NonBerusaha extends CI_Controller
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

		$this->load->view('templates/perizinan_header', $data);
		$this->load->view('perizinan/kkpr_nonberusaha', $data);
		$this->load->view('templates/footer');
	}

	public function Ajukan()
	{
		$data['title'] = 'Pengajuan KKPR NonBerusaha';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->kkpr_NonBerusaha_model->simpan();

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengajukan permohonan! anda dapat memeriksa status pendaftaran anda pada <b>Status Pengajuan</b> diatas!</div>');
		redirect('perizinan/KKPR_NonBerusaha');
	}
}