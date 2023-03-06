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
								<div class="card-header">
									<span>Tabel Data KKPR Berusaha</span>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table id="example1" class="table table-bordered table-responsive">
										<thead>
											<tr>
												<th>NIK Pemohon</th>
												<th>Nama Pemohon</th>
													<th>Pekerjaan</th>
													<th>No HP</th>
													<th>Tanggal Pengajuan</th>
													<th>Tanggal Disetuji</th>
													<th>Validator</th>
													<th>Alamat Pemohon</th>
													<th>Fungsi</th>
													<th>NIB</th>
													<th>Nama Kegiatan Usaha</th>
													<th>KBLI</th>
													<th>KBLI Judul</th>
													<th>Skala Usaha</th>
													<th>Alamat Kegiatan</th>
													<th>Kecamatan</th>
													<th>Kelurahan</th>
													<th>Latittude & Longitude</th>
													<th>Luas Tanah Dimohon</th>
													<th>Luas Sesuai Bukti Kepemilikan Tanah</th>
													<th>Luas Tanah (Untuk Bangunan)</th>
													<th>Status Tanah</th>
													<th>Penggunaan Tanah Sekarang</th>
													<th>Rencana Jumlah Lantai</th>
													<th>Rencana Tinggi Bangunan</th>
													<th>Rencana Total Luas Lantai</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($kkpr_sudah as $data) : ?>
												<tr>
													<td><?= $data['nik']; ?></td>
													<td><?= $data['nama']; ?></td>
													<td><?= $data['pekerjaan']; ?></td>
													<td><?= $data['no_hp']; ?></td>
													<td><?= date('d F Y', $data['tanggal']) ?></td>
													<td><?= date('d F Y', $data['tgl_disetujui']) ?></td>
													<td><?= $data['validator']; ?></td>
													<td><?= $data['alamat_pemohon']; ?></td>
													<td><?= $data['fungsi_bangunan']; ?></td>
													<td><?= $data['nib']; ?></td>
													<td><?= $data['nama_kegiatan']; ?></td>
													<td><?= $data['kbli']; ?></td>
													<td><?= $data['kbli_judul']; ?></td>
													<td><?= $data['skala_usaha']; ?></td>
													<td><?= $data['alamat_kegiatan']; ?></td>
													<td><?= $data['kecamatan']; ?></td>
													<td><?= $data['kelurahan']; ?></td>
													<td><?= $data['latittude_longitude']; ?></td>
													<td><?= $data['luas_tanah_dimohon']; ?> m<sup>2</sup></td>
													<td><?= $data['luas_tanah_sesuai_bukti']; ?> m<sup>2</sup></td>
													<td><?= $data['luas_bangunan']; ?> m<sup>2</sup></td>
													<td><?= $data['status_tanah']; ?></td>
													<td><?= $data['penggunaan_tanah_sekarang']; ?></td>
													<td><?= $data['rencana_jumlah_lantai']; ?></td>
													<td><?= $data['rencana_tinggi_bangunan']; ?> m</td>
													<td><?= $data['rencana_total_luas_lantai']; ?> m<sup>2</sup></td>
													<?php endforeach; ?>

												</tr>
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
			<!- - /.content -->
		</div>
