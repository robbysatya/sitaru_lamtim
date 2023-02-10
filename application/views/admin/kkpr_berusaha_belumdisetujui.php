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
								<h3 class="card-title">Tabel KKPR Berusaha Belum Disetujui</h3>
							</div>
							<!-- /.card-header -->
							<div class="table-responsive-lg">
								<table id="example2" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Pemohon</th>
											<th>No HP</th>
											<th>Tanggal Pengajuan</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach ($kkpr_belum as $data) : ?>
											<tr>
												<td><?= $no; ?></td>
												<td><?= $data['nama']; ?></td>
												<td><?= $data['no_hp']; ?></td>
												<td><?= date('d F Y', $data['tanggal']) ?></td>
												<td style="text-align: center;">
													<a href="<?= base_url('admin/kkpr_Berusaha/BelumDisetujui/Detail/' . $data['id']); ?>" class="btn btn-primary row-sm">Detail Data</a>
													<button class="btn btn-success row-sm" data-toggle="modal" data-target="#terimaPengajuanModal<?= $data['id']; ?>">Setujui <i class="fas fa-check"></i></button>
													<button class="btn btn-danger row-sm" data-toggle="modal" data-target="#tolakPengajuanModal<?= $data['id']; ?>">Tolak <i class="fas fa-times"></i></button>
												</td>
											</tr>
											<?php $no++; ?>
										<?php endforeach; ?>
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
							<b>Masukan Nomor Berkas Dibawah ini: </b>
							<input type="text" class="form-control" id="no_dokumen" name="no_dokumen" placeholder="Masukan Nomor Dokumen" required>
							<input type="text" class="form-control" id="id" name="id" placeholder="ID" required value="<?= $data['id']; ?>" hidden>
							<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required value="<?= $data['nik']; ?>" hidden>
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
							<input ty pe="text" class="form-control" id="nik" name="nik" placeholder="NIK" required value="<?= $data['nik']; ?>" hidden>
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