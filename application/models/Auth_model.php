<?php

class Auth_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	const SESSION_KEY = 'id';

	public function rules()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
	}
	public function login($email, $password)
	{
		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if ($user) {
			if ($user['is_active'] == 1) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role' => $user['role']
					];
					$this->session->set_userdata($data);
					if ($user['role'] == 'Admin') {
						redirect('admin/dashboard');
					} else if ($user['role'] == 'Validator') {
						redirect('admin/dashboard');
					} else if ($user['role'] == 'Pemohon') {
						redirect('');
					} else {
						redirect('auth');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun belum aktif, silahkan cek email untuk aktivasi akun!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
			redirect('auth');
		}
	}
}
