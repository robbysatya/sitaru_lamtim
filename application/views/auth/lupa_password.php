<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><?= $title; ?></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan masukan email yang terdaftar</p>

      <?= $this->session->flashdata('message'); ?>

      <form action="<?= base_url('auth/lupa_password') ?>" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Masukkan Email" required name="email" id="email"
            value="<?= set_value('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
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
  <!-- /.login-box --
>