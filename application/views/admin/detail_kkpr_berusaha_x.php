<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
			</li>
		</ul>
	</nav>
	<!-- /.navbar -->
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1><?= $title; ?></h1>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>
		<section class="content">
			<div class="container-fluid">
				<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
				<?= $this->session->flashdata('message');  ?>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<!-- /.card-header -->
							<div class="card-body">
								<table id="example1" class="table table-bordered table-responsive">
									<a href="<?= base_url('admin/kkpr_Berusaha/BelumDisetujui/'); ?>" class="btn btn-link"><i class="fas fa-arrow-left"></i> Kembali</a>
									<tbody>
										<?php foreach ($kkpr_belum as $data) : ?>
											<tr>
												<td colspan="2">
													<h3>Data Pemohon</h3>
												</td>
											</tr>
											<tr>
												<th>NIK Pemohon</th>
												<td><?= $data['nik']; ?></td>
											</tr>

											<tr>
												<th>Nama Pemohon</th>
												<td><?= $data['nama']; ?></td>
											</tr>

											<tr>
												<th>Pekerjaan</th>
												<td><?= $data['pekerjaan']; ?></td>
											</tr>

											<tr>
												<th>No HP</th>
												<td><?= $data['no_hp']; ?></td>
											</tr>

											<tr>
												<th>Tanggal Pengajuan</th>
												<td><?= date('d F Y', $data['tanggal']) ?></td>
											</tr>

											<tr>
												<th>Alamat Pemohon</th>
												<td><?= $data['alamat_pemohon']; ?></td>
											</tr>

											<tr>
												<th>Fungsi</th>
												<td><?= $data['fungsi_bangunan']; ?></td>
											</tr>

											<tr>
												<td colspan="2">
													<h3>Detail Usaha</h3>
												</td>
											</tr>

											<tr>
												<th>NIB</th>
												<td><?= $data['nib']; ?></td>
											</tr>
											<tr>
												<th>Nama Kegiatan Usaha</th>
												<td><?= $data['nama_kegiatan']; ?></td>
											</tr>
											<tr>
												<th>KBLI</th>
												<td><?= $data['kbli']; ?></td>
											</tr>
											<tr>
												<th>KBLI Judul</th>
												<td><?= $data['kbli_judul']; ?></td>
											</tr>
											<tr>
												<th>Skala Usaha</th>
												<td><?= $data['skala_usaha']; ?></td>
											</tr>
											<tr>
												<th>Alamat Kegiatan</th>
												<td><?= $data['alamat_kegiatan']; ?></td>
											</tr>
											<tr>
												<th>Kecamatan</th>
												<td><?= $data['kecamatan']; ?></td>
											</tr>
											<tr>
												<th>Kelurahan</th>
												<td><?= $data['kelurahan']; ?></td>
											</tr>
											<tr>
												<th>Latittude & Longitude</th>
												<td><?= $data['latittude_longitude']; ?>
													<a href="https://www.google.com/maps/dir/?api=1&destination=<?= $data['latittude_longitude']; ?>&travelmode=driving" class="btn btn-primary" target="_blank">Lihat Lokasi</a>
												</td>
											</tr>
											<tr>
												<th>Luas Tanah Dimohon</th>
												<td><?= $data['luas_tanah_dimohon']; ?> m<sup>2</sup></td>
											</tr>
											<tr>
												<th>Luas Sesuai Bukti Kepemilikan Tanah</th>
												<td><?= $data['luas_tanah_sesuai_bukti']; ?> m<sup>2</sup></td>
											</tr>
											<tr>
												<th>Luas Tanah (Untuk Bangunan)</th>
												<td><?= $data['luas_bangunan']; ?> m<sup>2</sup></td>
											</tr>

											<tr>
												<td colspan="2">
													<h3>Status Tanah</h3>
												</td>
											</tr>
											<tr>
												<th>Status Tanah</th>
												<td><?= $data['status_tanah']; ?></td>
											</tr>
											<tr>
												<th>Penggunaan Tanah Sekarang</th>
												<td><?= $data['penggunaan_tanah_sekarang']; ?></td>
											</tr>
											<tr>
												<th>Rencana Jumlah Lantai</th>
												<td><?= $data['rencana_jumlah_lantai']; ?></td>
											</tr>
											<tr>
												<th>Rencana Tinggi Bangunan</th>
												<td><?= $data['rencana_tinggi_bangunan']; ?> m</td>
											</tr>
											<tr>
												<th>Rencana Total Luas Lantai</th>
												<td><?= $data['rencana_total_luas_lantai']; ?> m<sup>2</sup></td>
											</tr>

											<tr>
												<td colspan="2">
													<h3>Berkas</h3>
												</td>
											</tr>
											<tr>
												<th>Formulir Permohonan Bermaterai</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_permohonan_bermaterai']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_permohonan_bermaterai']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>Fotokopi KTP berlaku dan NPWP Perusahaan</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_ktp_npwp']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_ktp_npwp']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>NIB (Nomor Induk Berusaha) + Seritikat Standar atau Izin</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_nib']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_nib']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>Bukti Penguasaan Tanah (SHM/SHGB/SHGU/SHP/Wakaf/HPL/Letter C + Peta Bidang)</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_bukti_penguasaan_tanah']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_bukti_penguasaan_tanah']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>Surat Keterangan Waris (bila pemilik meninggal dunia)</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_surat_keterangan_waris']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_surat_keterangan_waris']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>Dokumen Perjanjian Sewa Menyewa</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_dokumen_perjanjian_sewa']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_dokumen_perjanjian_sewa']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>Dokumen Akta Jual Beli dan Surat Pernyataan Pemilik Tanah</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_dokumen_akta_jual_beli']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_dokumen_akta_jual_beli']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>Surat Pernyataan Pemohon Bermeterai</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_surat_pernyataan_pemohon']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_surat_pernyataan_pemohon']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>Polygon Koordinat Lokasi Dimohon</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_polygon_koordinat']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_polygon_koordinat']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>Rencana Penggunaan Air Baku / Air bersih + Rencana Teknis Bangunan (RTB) / Rencana Induk
													Kawasan (RIK)</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_rencana_penggunaan_air']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_rencana_penggunaan_air']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>Surat Kuasa bermaterai + Fc yang diberi kuasa</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_surat_kuasa']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_surat_kuasa']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>Dokumen Perizinan Sebelumnya (AP/KRK/IPPT/ Rekomendasi Teknis Lainnya)</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_dokumen_perizinan_sebelumnya']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_dokumen_perizinan_sebelumnya']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>

											<tr>
												<td colspan="2">
													<h3>Gambar Lokasi</h3>
												</td>
											</tr>
											<tr>
												<th>Gambar Sisi Utara</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_gambar_sisi_utara']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_gambar_sisi_utara']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>Gambar Sisi Selatan</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_gambar_sisi_selatan']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_gambar_sisi_selatan']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>Gambar Sisi Barat</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_gambar_sisi_barat']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_gambar_sisi_barat']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>
											<tr>
												<th>Gambar Sisi Timur</th>
												<td> <a class="btn btn-info" target="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_gambar_sisi_timur']; ?>" href="<?= base_url('assets/file/kkpr_berusaha/') . $data['file_gambar_sisi_timur']; ?>">
														<i class="fas fa-eye"></i> Lihat Berkas
													</a>
												</td>
											</tr>

											<tr>
												<td colspan="2">
													<a href="<?= base_url('admin/kkpr_Berusaha/BelumDisetujui/'); ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
													<button class="btn btn-success" data-toggle="modal" data-target="#terimaPengajuanModal<?= $data['id']; ?>">Setujui <i class="fas fa-check"></i></button>
													<button class="btn btn-danger" data-toggle="modal" data-target="#tolakPengajuanModal<?= $data['id']; ?>">Tolak <i class="fas fa-times">
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>

	<!-- Modal Terima Pengajuan -->
	<?php foreach ($kkpr_belum as $data) : ?>
		<div class="modal fade" id="terimaPengajuanModal<?= $data['id']; ?>" tabindex="-1" aria-labelledby="terimaPengajuanLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="terimaPengajuanLabel">Terima Pengajuan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('admin/kkpr_Berusaha/BelumDisetujui/terima') ?>" method="post">
						<div class="modal-body">
							<p>Apa anda yakin ingin menerima pengajuan <b><?= $data['nama']; ?></b>? </p>
							<p style="color: red;">*Pastikan semua data dan berkas telah sesuai</p>
							<input ty pe="text" class="form-control" id="id" name="id" placeholder="ID" required value="<?= $data['id']; ?>" hidden>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-fw fa-times"></i>
								No</button>
							<button type="submit" class="btn btn-success"><i class="fas fa-fw fa-check"></i> Yes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

	<!-- Modal Tolak Pengajuan -->
	<?php foreach ($kkpr_belum as $data) : ?>
		<div class="modal fade" id="tolakPengajuanModal<?= $data['id']; ?>" tabindex="-1" aria-labelledby="tolakPengajuanLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="tolakPengajuanLabel">Tolak Pengajuan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('admin/kkpr_Berusaha/BelumDisetujui/tolak') ?>" method="post">
						<div class="modal-body">
							<p>Apa anda yakin ingin menolak pengajuan <b><?= $data['nama']; ?></b>? </p>
							<b>Berikan alasan penolakan pengajuan dibawah: </b>
							<input type="text" class="form-control" id="alasan" name="alasan" placeholder="Alasan Ditolak (Kosongkan jika tidak ada)">
							<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required value="<?= $data['nik']; ?>" hidden>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-fw fa-times"></i>
								No</button>
							<button type="submit" class="btn btn-danger"><i class="fas fa-fw fa-check"></i> Yes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
