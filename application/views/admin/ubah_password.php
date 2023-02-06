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
            <div class="row">
              <div class="col-sm-12">
                <h1><?= $title; ?> <b><?= $user_recent['nama']; ?></b></h1>
                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <?= $this->session->flashdata('message');  ?>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">

      <!-- Begin Page Content -->
      <div class="container-fluid">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <a href="<?= base_url('admin/data_user/edit_user/' . $user_recent['id']); ?>"><i
                class="fas fa-fw fa-arrow-left"></i>
              Kembali</a>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="modal-body">
                <form action="<?= base_url('admin/data_user/simpan_ubah_password/' . $user_recent['id']); ?>"
                  method="POST">
                  <input type="text" class="form-control" id="id" name="id" placeholder="ID"
                    value="<?= $user_recent['id']; ?>" hidden>
                  <div class="form-group">
                    <label for="new_password1">Password Baru</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="new_password2">Ulangi Password</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>

                  <div class="d-flex flex-row justify-content-end mt-auto pt-3">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-key"></i> Ubah
                      Password</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->

       
 </div>
        <!-- End of Main Content -->
    </section>
  </div>