<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$data['kkpr_berusaha'] = $this->db->query("SELECT * FROM tb_kkpr_berusaha WHERE status = 'Tunggu'");
		$data['kkpr_nonberusaha'] = $this->db->query("SELECT * FROM tb_kkpr_nonberusaha WHERE status = 'Tunggu'");

		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('templates/admin_footer');
	}
}