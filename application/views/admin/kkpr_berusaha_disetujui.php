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
								<h3 class="card-title">Tabel KKPR Berusaha Disetujui</h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<table id="example2" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>NIK Pemohon</th>
											<th>Nama Pemohon</th>
											<th>Pekerjaan</th>
											<th>No HP</th>
											<th>Tanggal Pengajuan</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach ($kkpr_sudah as $ks => $data) : ?>
											<tr>
												<td><?= $no; ?></td>
												<td><?= $data['nik']; ?></td>
												<td><?= $data['nama']; ?></td>
												<td><?= $data['pekerjaan']; ?></td>
												<td><?= $data['no_hp']; ?></td>
												<td><?= date('d F Y', $data['tanggal']) ?></td>
												<td><?= $user_name[$ks]['nama']; ?></td>
												<td style="text-align: center;">
													<a href="<?= base_url('admin/kkpr_Berusaha/Disetujui/Detail/' . $data['id']); ?>" class="btn btn-primary">Detail Data</a>
													<a href="<?= base_url('admin/kkpr_Berusaha/Disetujui/surat_perizinan/' . $data['id']); ?>" class="btn btn-success"><i class="fas fa-download"></i> Unduh Berkas</a>
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
		<!- - /.content -->
	</div>