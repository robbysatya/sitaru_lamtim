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
		} else if ($this->session->userdata('role') != 'Admin') {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['title'] = 'Data KKPR Berusaha Disetujui';
		$data['kkpr_sudah'] = $this->db->get_where('tb_kkpr_berusaha', ['status' => 'Disetujui'])->result_array();
		$data['user_name'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->result_array();
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/kkpr_berusaha_disetujui');
		$this->load->view('templates/admin_footer');
	}

	public function detail()
	{
		$data['title'] = 'Detail Data KKPR Berusaha Belum Disetujui';
		$data['kkpr_sudah'] = $this->db->get_where('tb_kkpr_berusaha', ['status' => 'Disetujui'])->result_array();
		$data['user_name'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->result_array();
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();


		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/detail_kkpr_berusaha_v');
		$this->load->view('templates/admin_footer');
	}
}