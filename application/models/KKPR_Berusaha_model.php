<?php

class kkpr_Berusaha_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function simpan()
	{
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$pekerjaan = $this->input->post('pekerjaan');
		// $tanggal = $this->input->post('tanggal');
		$no_hp = $this->input->post('no_hp');
		$alamat_pemohon = $this->input->post('alamat_pemohon');
		$fungsi_bangunan = $this->input->post('fungsi_bangunan');
		$nib = $this->input->post('nib');
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$kbli = $this->input->post('kbli');
		$kbli_judul = $this->input->post('kbli_judul');
		$skala_usaha = $this->input->post('skala_usaha');
		$alamat_kegiatan = $this->input->post('alamat_kegiatan');
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kelurahan');
		$latittude_longitude = $this->input->post('latittude_longitude');
		$luas_tanah_dimohon = $this->input->post('luas_tanah_dimohon');
		$luas_tanah_sesuai_bukti = $this->input->post('luas_tanah_sesuai_bukti');
		$luas_bangunan = $this->input->post('luas_bangunan');
		$status_tanah = $this->input->post('status_tanah');
		$penggunaan_tanah_sekarang = $this->input->post('penggunaan_tanah_sekarang');
		$rencana_jumlah_lantai = $this->input->post('rencana_jumlah_lantai');
		$rencana_tinggi_bangunan = $this->input->post('rencana_tinggi_bangunan');
		$rencana_total_luas_lantai = $this->input->post('rencana_total_luas_lantai');

		$config['upload_path'] = './assets/file/kkpr_berusaha';
		$config['allowed_types'] = 'png|jpg|jpeg|pdf|rar|zip';
		$config['max_size']     = '25600';
		$this->load->library('upload', $config);

		if (!empty($_FILES['file_permohonan_bermaterai'])) {
			$this->upload->do_upload('file_permohonan_bermaterai');
			$data1 = $this->upload->data();
			$file_permohonan_bermaterai = $data1['file_name'];

			$this->db->set('file_permohonan_bermaterai', $file_permohonan_bermaterai);
		}
		if (!empty($_FILES['file_ktp_npwp'])) {
			$this->upload->do_upload('file_ktp_npwp');
			$data2 = $this->upload->data();
			$file_ktp_npwp = $data2['file_name'];

			$this->db->set('file_ktp_npwp', $file_ktp_npwp);
		}
		if (!empty($_FILES['file_nib'])) {
			$this->upload->do_upload('file_nib');
			$data3 = $this->upload->data();
			$file_nib = $data3['file_name'];

			$this->db->set('file_nib', $file_nib);
		}
		if (!empty($_FILES['file_bukti_penguasaan_tanah'])) {
			$this->upload->do_upload('file_bukti_penguasaan_tanah');
			$data4 = $this->upload->data();
			$file_bukti_penguasaan_tanah = $data4['file_name'];

			$this->db->set('file_bukti_penguasaan_tanah', $file_bukti_penguasaan_tanah);
		}
		if (!empty($_FILES['file_surat_keterangan_waris'])) {
			$this->upload->do_upload('file_surat_keterangan_waris');
			$data5 = $this->upload->data();
			$file_surat_keterangan_waris = $data5['file_name'];

			$this->db->set('file_surat_keterangan_waris', $file_surat_keterangan_waris);
		}
		if (!empty($_FILES['file_dokumen_perjanjian_sewa'])) {
			$this->upload->do_upload('file_dokumen_perjanjian_sewa');
			$data6 = $this->upload->data();
			$file_dokumen_perjanjian_sewa = $data6['file_name'];

			$this->db->set('file_dokumen_perjanjian_sewa', $file_dokumen_perjanjian_sewa);
		}
		if (!empty($_FILES['file_dokumen_akta_jual_beli'])) {
			$this->upload->do_upload('file_dokumen_akta_jual_beli');
			$data7 = $this->upload->data();
			$file_dokumen_akta_jual_beli = $data7['file_name'];

			$this->db->set('file_dokumen_akta_jual_beli', $file_dokumen_akta_jual_beli);
		}
		if (!empty($_FILES['file_surat_pernyataan_pemohon'])) {
			$this->upload->do_upload('file_surat_pernyataan_pemohon');
			$data8 = $this->upload->data();
			$file_surat_pernyataan_pemohon = $data8['file_name'];

			$this->db->set('file_surat_pernyataan_pemohon', $file_surat_pernyataan_pemohon);
		}
		if (!empty($_FILES['file_polygon_koordinat'])) {
			$this->upload->do_upload('file_polygon_koordinat');
			$data9 = $this->upload->data();
			$file_polygon_koordinat = $data9['file_name'];

			$this->db->set('file_polygon_koordinat', $file_polygon_koordinat);
		}
		if (!empty($_FILES['file_rencana_penggunaan_air'])) {
			$this->upload->do_upload('file_rencana_penggunaan_air');
			$data10 = $this->upload->data();
			$file_rencana_penggunaan_air = $data10['file_name'];

			$this->db->set('file_rencana_penggunaan_air', $file_rencana_penggunaan_air);
		}
		if (!empty($_FILES['file_surat_kuasa'])) {
			$this->upload->do_upload('file_surat_kuasa');
			$data11 = $this->upload->data();
			$file_surat_kuasa = $data11['file_name'];

			$this->db->set('file_surat_kuasa', $file_surat_kuasa);
		}
		if (!empty($_FILES['file_dokumen_perizinan_sebelumnya'])) {
			$this->upload->do_upload('file_dokumen_perizinan_sebelumnya');
			$data12 = $this->upload->data();
			$file_dokumen_perizinan_sebelumnya = $data12['file_name'];

			$this->db->set('file_dokumen_perizinan_sebelumnya', $file_dokumen_perizinan_sebelumnya);
		}
		if (!empty($_FILES['file_gambar_sisi_utara'])) {
			$this->upload->do_upload('file_gambar_sisi_utara');
			$data13 = $this->upload->data();
			$file_gambar_sisi_utara = $data13['file_name'];

			$this->db->set('file_gambar_sisi_utara', $file_gambar_sisi_utara);
		}
		if (!empty($_FILES['file_gambar_sisi_selatan'])) {
			$this->upload->do_upload('file_gambar_sisi_selatan');
			$data14 = $this->upload->data();
			$file_gambar_sisi_selatan = $data14['file_name'];

			$this->db->set('file_gambar_sisi_selatan', $file_gambar_sisi_selatan);
		}
		if (!empty($_FILES['file_gambar_sisi_barat'])) {
			$this->upload->do_upload('file_gambar_sisi_barat');
			$data15 = $this->upload->data();
			$file_gambar_sisi_barat = $data15['file_name'];

			$this->db->set('file_gambar_sisi_barat', $file_gambar_sisi_barat);
		}
		if (!empty($_FILES['file_gambar_sisi_timur'])) {
			$this->upload->do_upload('file_gambar_sisi_timur');
			$data16 = $this->upload->data();
			$file_gambar_sisi_timur = $data16['file_name'];

			$this->db->set('file_gambar_sisi_timur', $file_gambar_sisi_timur);
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Daftar gagal file masih ada yang kurang atau ukuran file lebih dari 25 Mb!</div>');
			redirect('perizinan/kkpr_Berusaha');
		}

		$this->db->set('nik', $nik);
		$this->db->set('nama', $nama);
		$this->db->set('pekerjaan', $pekerjaan);
		$this->db->set('tanggal', time());
		$this->db->set('no_hp', $no_hp);
		$this->db->set('alamat_pemohon', $alamat_pemohon);
		$this->db->set('fungsi_bangunan', $fungsi_bangunan);
		$this->db->set('nib', $nib);
		$this->db->set('nama_kegiatan', $nama_kegiatan);
		$this->db->set('kbli', $kbli);
		$this->db->set('kbli_judul', $kbli_judul);
		$this->db->set('skala_usaha', $skala_usaha);
		$this->db->set('alamat_kegiatan', $alamat_kegiatan);
		$this->db->set('kecamatan', $kecamatan);
		$this->db->set('kelurahan', $kelurahan);
		$this->db->set('latittude_longitude', $latittude_longitude);
		$this->db->set('luas_tanah_dimohon', $luas_tanah_dimohon);
		$this->db->set('luas_tanah_sesuai_bukti', $luas_tanah_sesuai_bukti);
		$this->db->set('luas_bangunan', $luas_bangunan);
		$this->db->set('status_tanah', $status_tanah);
		$this->db->set('penggunaan_tanah_sekarang', $penggunaan_tanah_sekarang);
		$this->db->set('rencana_jumlah_lantai', $rencana_jumlah_lantai);
		$this->db->set('rencana_tinggi_bangunan', $rencana_tinggi_bangunan);
		$this->db->set('rencana_total_luas_lantai', $rencana_total_luas_lantai);

		$this->db->set('status', 'Tunggu');
		$this->db->insert('tb_kkpr_berusaha');

		$this->db->set('status_berusaha', 'Tunggu');
		$this->db->set('alasan_berusaha', '');
		$this->db->set('no_dokumen_berusaha', '');
		$this->db->where('nik', $nik);
		$this->db->update('tb_user');
	}

	public function tolak($nik = null)
	{
		$data['kkpr_belum'] = $this->db->get_where('tb_kkpr_berusaha', ['nik' => $nik])->row_array();

		$file_permohonan_bermaterai = $data['kkpr_belum']['file_permohonan_bermaterai'];
		$file_ktp_npwp = $data['kkpr_belum']['file_ktp_npwp'];
		$file_nib = $data['kkpr_belum']['file_nib'];
		$file_bukti_penguasaan_tanah = $data['kkpr_belum']['file_bukti_penguasaan_tanah'];
		$file_surat_keterangan_waris = $data['kkpr_belum']['file_surat_keterangan_waris'];
		$file_dokumen_perjanjian_sewa = $data['kkpr_belum']['file_dokumen_perjanjian_sewa'];
		$file_dokumen_akta_jual_beli = $data['kkpr_belum']['file_dokumen_akta_jual_beli'];
		$file_surat_pernyataan_pemohon = $data['kkpr_belum']['file_surat_pernyataan_pemohon'];
		$file_polygon_koordinat = $data['kkpr_belum']['file_polygon_koordinat'];
		$file_rencana_penggunaan_air = $data['kkpr_belum']['file_rencana_penggunaan_air'];
		$file_surat_kuasa = $data['kkpr_belum']['file_surat_kuasa'];
		$file_dokumen_perizinan_sebelumnya = $data['kkpr_belum']['file_dokumen_perizinan_sebelumnya'];
		$file_gambar_sisi_utara = $data['kkpr_belum']['file_gambar_sisi_utara'];
		$file_gambar_sisi_selatan = $data['kkpr_belum']['file_gambar_sisi_selatan'];
		$file_gambar_sisi_barat = $data['kkpr_belum']['file_gambar_sisi_barat'];
		$file_gambar_sisi_timur = $data['kkpr_belum']['file_gambar_sisi_timur'];

		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_permohonan_bermaterai);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_ktp_npwp);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_nib);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_bukti_penguasaan_tanah);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_surat_keterangan_waris);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_dokumen_perjanjian_sewa);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_dokumen_akta_jual_beli);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_surat_pernyataan_pemohon);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_polygon_koordinat);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_rencana_penggunaan_air);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_surat_kuasa);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_dokumen_perizinan_sebelumnya);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_gambar_sisi_utara);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_gambar_sisi_selatan);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_gambar_sisi_barat);
		unlink(FCPATH . 'assets/file/kkpr_berusaha/' . $file_gambar_sisi_timur);

		$alasan =  $this->input->post('alasan');

		$this->db->set('status_berusaha', 'Ditolak');
		$this->db->set('alasan_berusaha', $alasan);
		$this->db->where('nik', $nik);
		$this->db->update('tb_user');

		$this->db->where('nik', $nik);
		$this->db->delete('tb_kkpr_berusaha');
	}
}