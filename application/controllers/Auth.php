<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('auth_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = '<b>Masuk</b> | SITARU';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');
	}

	public function login()
	{
		if ($this->session->userdata('email')) {
			redirect('admin/dashboard');
		}

		$rules = $this->auth_model->rules();
		$this->form_validation->set_rules($rules);

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if ($this->form_validation->run() == false && $this->session) {
			$data['title'] = '<b>Masuk</b> | SITARU';
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else if ($this->auth_model->login($email, $password)) {
			$this->auth_model->login();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Keluar!</div>');
		redirect('');
	}

	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('no_hp', 'No HP', 'required|trim');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', ['is_unique' => 'Email ini telah teregistrasi!']);
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim|min_length[16]|max_length[16]|is_unique[tb_user.nik]', ['is_unique' => 'NIK sudah terdaftar!', 'min_length' => 'NIK terlalu pendek, harus 16 karakter!', 'max_length' => 'NIK terlalu panjang, harus 16 karakter!']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', ['matches' => 'Password tidak sama', 'min_length' => 'Password terlalu pendek, minimal 6 karakter!']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		if ($this->form_validation->run() == false) {
			$data['title'] = '<b>Daftar</b> | SITARU';

			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/register');
			$this->load->view('templates/auth_footer');
		} else {
			$email = $this->input->post('email', true);
			$data = [
				'nik' => htmlspecialchars($this->input->post('nik')),
				'nama' => htmlspecialchars($this->input->post('nama')),
				'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),
				'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
				'email' => htmlspecialchars($email),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role' => 'Pemohon',
			];

			// Mempersiapkan token
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()
			];

			$this->db->insert('tb_user_token', $user_token);
			$this->db->insert('tb_user', $data);

			$this->_sendEmail($token, 'verify');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! anda berhasil mendaftarkan akun, silahkan cek email untuk aktivasi akun!</div>');
			redirect('auth/register');
		}
	}

	public function lupa_password()
	{

		$this->load->model('auth_model');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Lupa Password';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/lupa_password');
			$this->load->view('templates/auth_footer');
		} else {

			$email = $this->input->post('email', true);
			$user = $this->db->get_where('tb_user', ['email' => $email, 'is_active' => 1])->row_array();

			if ($user) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				];

				$this->db->insert('tb_user_token', $user_token);
				$this->_sendEmail($token, 'forgot');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan cek email anda untuk reset password!</div>');
				redirect('auth/lupa_password');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email ini belum terverifikasi atau belum aktif!</div>');
				redirect('auth/lupa_password');
			}
		}
	}

	public function resetpassword()
	{
		$token = $this->input->get('token');
		$email = $this->input->get('email');

		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('tb_user_token', ['token' => $token])->row_array();

			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->ubahPassword();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal, email salah!</div>');
			redirect('auth');
		}
	}

	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'sitarulamtim@gmail.com',
			'smtp_pass' => 'fjqngjoyzpzbvvnm',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		$this->load->library('email');
		$this->load->initialize($config);

		$this->email->from('sitarulamtim@gmail.com', 'Sistem Informasi Tata Ruang Kab. Lampung Timur');
		$this->email->to($this->input->post('email'));

		if ($type == 'verify') {
			$this->email->subject('Verifikasi Akun');
			$this->email->message('Klik tautan berikut ini untuk verifikasi akun anda! : ' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' .  urlencode($token));
		} else if ($type == 'forgot') {
			$this->email->subject('Reset Password');
			$this->email->message('Klik tautan untuk mereset passwod! : ' . '<a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&&' . 'token=' .  urlencode($token) . '">Reset Password</a>');
		}

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('tb_user_token', ['token' => $token])->row_array();

			if ($user_token) {
				if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('tb_user');

					$this->db->delete('tb_user_token', ['email' => $email]);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' sudah aktif. Silahkan login.</div>');
					redirect('auth');
				} else {
					$this->db->delete('tb_user', ['email' => $email]);
					$this->db->delete('tb_user_token', ['email' => $email]);

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Token kadaluarsa!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Token salah!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal!</div>');
			redirect('auth');
		}
	}

	public function ubahPassword()
	{

		if (!$this->session->userdata('reset_email')) {
			redirect('auth');
		}

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', ['matches' => 'Password tidak sama', 'min_length' => 'Password terlalu pendek, minimal 6 karakter!']);
		$this->form_validation->set_rules('password2', 'Ulangi Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Ubah Password';

			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/ubah_password');
			$this->load->view('templates/auth_footer');
		} else {
			$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('tb_user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password telah berhasil diubah, silahkan login!</div>');
			redirect('auth');
		}
	}
}