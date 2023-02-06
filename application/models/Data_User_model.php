<?php

class Data_User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function rules()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', ['is_unique' => 'Email sudah pernah digunakan!']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', ['matches' => 'Password tidak sama', 'min_length' => 'Password terlalu pendek, password minimal 6 karakter!']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		$this->form_validation->set_rules('role', 'Role Akun', 'trim|required');
	}

	public function simpan()
	{
		$post = [
			'nama' => htmlspecialchars($this->input->post('nama', true)),
			'email' => htmlspecialchars($this->input->post('email', true)),
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'role' => htmlspecialchars($this->input->post('role', true)),
			'is_active' => htmlspecialchars($this->input->post('is_active', true)),
		];

		return $this->db->insert('tb_user', $post);
	}

	// Fungsi Delete Data User
	public function hapus($id = null)
	{
		return $this->db->delete('tb_user', array('id' => $id));
	}

	public function update($id = null)
	{
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$email = $this->input->post('email');
		$pekerjaan = $this->input->post('pekerjaan');
		$role = $this->input->post('role');
		$is_active = $this->input->post('is_active');

		$this->db->set('nama', $nama);
		$this->db->set('nik', $nik);
		$this->db->set('email', $email);
		$this->db->set('role', $role);
		$this->db->set('pekerjaan', $pekerjaan);
		$this->db->set('is_active', $is_active);
		$this->db->where('id', $id);
		$this->db->update('tb_user');
	}

	public function update_password($id = null)
	{

		$id = $this->input->post('id');
		$new_password = $this->input->post('new_password1');
		// Password sudah ok
		$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

		$this->db->set('password', $password_hash);
		$this->db->where('id', $id);
		$this->db->update('tb_user');
	}
}