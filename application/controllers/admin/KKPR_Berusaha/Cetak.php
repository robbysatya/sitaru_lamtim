<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('email')) {
			redirect('auth');
		} else if ($this->session->userdata('role') == null) {
			redirect('auth');
		} else if ($this->session->userdata('role') != 'Admin') {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Cetak Data KKPR Berusaha ';
		$data['kkpr_sudah'] = $this->db->get_where('tb_kkpr_berusaha', ['status' => 'Disetujui'])->result_array();
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/cetak_kkpr_berusaha');
		$this->load->view('templates/admin_footer');
	}
}