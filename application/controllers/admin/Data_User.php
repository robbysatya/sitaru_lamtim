<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_User extends CI_Controller
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
		$this->load->model('data_user_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Data User';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$data['data_user'] = $this->db->get('tb_user')->result_array();

		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/data_user');
		$this->load->view('templates/admin_footer');
	}

	public function Tambah_User()
	{
		$data['title'] = 'Tambah Data User';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$data['data_user'] = $this->db->get('tb_user')->result_array();

		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/tambah_user');
		$this->load->view('templates/admin_footer');
	}

	public function Simpan_User()
	{
		$data_user =  $this->data_user_model;
		$validation = $this->form_validation;
		$validation->set_rules($data_user->rules());

		if ($validation->run() == false) {
			$data['title'] = 'Tambah Data User';
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

			$data['data_user'] = $this->db->get('tb_user')->result_array();

			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_sidebar');
			$this->load->view('admin/tambah_user');
			$this->load->view('templates/admin_footer');
		} else {
			$data_user->simpan();

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menambahkan akun!</div>');
			redirect('admin/Data_User');
		}
	}

	public function Hapus_User($id = null)
	{
		$id = $this->input->post('id');

		if (!isset($id)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal menghapus akun!</div>');
			redirect('admin/data_user');
		} elseif ($this->data_user_model->hapus($id)) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menghapus akun!</div>');
			redirect('admin/data_user');
		}
	}

	public function Edit_User($id = null)
	{
		$data['title'] = 'Edit Data User';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$data['user_recent'] = $this->db->get_where('tb_user', ['id' => $id])->row_array();

		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/edit_data_user', $data);
		$this->load->view('templates/admin_footer');
	}

	public function Simpan_Edit_User($id = null)
	{
		$data['title'] = 'Edit Data User';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user_recent'] = $this->db->get_where('tb_user', ['id' => $id])->row_array();

		$data_user =  $this->data_user_model;

		$data_user->update($id);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit akun berhasil!</div>');
		redirect('admin/data_user');
	}

	public function Ubah_Password($id = null)
	{
		$data['title'] = 'Ubah Password';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$data['user_recent'] = $this->db->get_where('tb_user', ['id' => $id])->row_array();

		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/ubah_password', $data);
		$this->load->view('templates/admin_footer');
	}
	public function Simpan_Ubah_Password($id = null)
	{
		$data['title'] = 'Ubah Password';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$data['user_recent'] = $this->db->get_where('tb_user', ['id' => $id])->row_array();
		$data_user =  $this->data_user_model;

		$data_user->update_password($id);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah password berhasil!</div>');
		redirect('admin/data_user/ubah_password/' . $id);
	}
}
