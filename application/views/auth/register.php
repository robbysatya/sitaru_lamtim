<div class="login-box">
	<!-- /.login-logo -->
	<div class="card card-outline card-primary">
		<div class="card-header text-center">
			<a href="" class="h1"><?= $title; ?></a>
		</div>
		<div class="card-body">
			<p class="login-box-msg">Silahkan Daftar</p>

			<?= $this->session->flashdata('message'); ?>

			<form action="<?= base_url('auth/register') ?>" method="post">
				<?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="NIK" required name="nik" id="nik">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Nama Lengkap" required name="nama" id="nama">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
				<div class="input-group mb-3">
					<input type="email" class="form-control" placeholder="Email" required name="email" id="email">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
				<div class="input-group mb-3">
					<input type="password" class="form-control" placeholder="Password" name="password1" id="password1" required>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" class="form-control" placeholder="Ulangi Password" name="password2" id="password2" required>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="number" class="form-control" placeholder="No HP" name="no_hp" id="no_hp" required>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-phone"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" id="pekerjaan" required>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- /.col -->
					<div class="col-12">
						<button type="submit" class="btn btn-primary btn-block">Daftar</button>
					</div>
					<!-- /.col -->
				</div>
			</form>
			<div class="row" bis_skin_checked="1">
				<div class="col-sm text-center mt-3 mb-2" bis_skin_checked="1">
					<a href="<?= base_url('auth') ?>" class="text-center">Sudah punya akun? masuk</a>
				</div>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<div class="text-muted text-center" bis_skin_checked="1"><small>Copyright © Kabupaten Lampung Timur
			<?= date('Y'); ?></small></div>








	<!-- /.login-box -->
