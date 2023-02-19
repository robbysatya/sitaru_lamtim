<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BelumDisetujui extends CI_Controller
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

		$this->load->model('KKPR_Berusaha_model');
	}

	public function index()
	{
		$data['title'] = 'Data KKPR Berusaha Belum Disetujui';
		$data['kkpr_belum'] = $this->db->get_where('tb_kkpr_berusaha', ['status' => 'Tunggu'])->result_array();
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/kkpr_berusaha_belumdisetujui');
		$this->load->view('templates/admin_footer');
	}

	public function detail($id = null)
	{
		$data['title'] = 'Detail Data KKPR Berusaha Belum Disetujui';
		$data['kkpr_belum'] = $this->db->get_where('tb_kkpr_berusaha', ['id' => $id])->result_array();
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/detail_kkpr_berusaha_x');
		$this->load->view('templates/admin_footer');
	}

	public function terima()
	{
		$id =  $this->input->post('id');
		$nik = $this->input->post('nik');
		$no_dokumen = $this->input->post('no_dokumen');

		$this->db->set('status', 'Disetujui');
		$this->db->set('tgl_disetujui', time());
		$this->db->set('validator', $this->session->userdata('email'));
		$this->db->set('no_dokumen', $no_dokumen);
		$this->db->where('id', $id);
		$this->db->update('tb_kkpr_berusaha');

		$this->db->set('status_berusaha', 'Disetujui');
		$this->db->set('alasan_berusaha', '');
		$this->db->set('no_dokumen_berusaha', $no_dokumen);
		$this->db->where('nik', $nik);
		$this->db->update('tb_user');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berkas Berhasil Disetujui!</div>');
		redirect('admin/kkpr_Berusaha/BelumDisetujui');
	}

	public function tolak()
	{
		$nik = $this->input->post('nik');
		$this->kkpr_Berusaha_model->tolak($nik);

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berkas Ditolak!</div>');
		redirect('admin/kkpr_Berusaha/BelumDisetujui');
	}
}
