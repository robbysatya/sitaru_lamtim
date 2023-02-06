<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status_Pengajuan extends CI_Controller
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
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user_data'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->result_array();
		// $data['no_dokumen'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->result_array();

		$this->load->view('templates/perizinan_header', $data);
		$this->load->view('perizinan/status_pengajuan', $data);
		$this->load->view('templates/footer');
	}
}