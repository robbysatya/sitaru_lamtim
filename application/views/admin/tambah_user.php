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
              <div class="col-sm-6">
                <h1><?= $title; ?></h1>
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

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <a href="<?= base_url('admin/Data_User') ?>"><i class="fas fa-fw fa-arrow-left"></i>
              Kembali</a>
          </div>
          <div class="card-body">
            <form action="<?= base_url('admin/Data_User/Simpan_User') ?>" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <div class="mb-3">
                    <label for="">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK"
                      value="<?= set_value('nik'); ?>">
                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="mb-3">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap"
                      value="<?= set_value('nama'); ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="mb-3">
                    <label for="">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan"
                      value="<?= set_value('pekerjaan'); ?>">
                    <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="mb-3">
                    <label for="">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No HP"
                      value="<?= set_value('no_hp'); ?>">
                    <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                      value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="password1" name="password1"
                      placeholder="************">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="mb-3">
                    <label for="">Ulangi Password</label>
                    <input type="password" class="form-control" id="password2" name="password2"
                      placeholder="************">
                  </div>
                  <div class="mb-3">
                    <label for="">Role</label>
                    <select class="custom-select" id="role" name="role" required>
                      <option selected>Pilih Role Akun...</option>
                      <option value="Admin">Administrator</option>
                      <option value="Pemohon">Pemohon</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="">Status Akun</label>
                    <select class="custom-select" id="is_active" name="is_active" required>
                      <option selected>Pilih Status Akun...</option>
                      <option value="1">Aktif</option>
                      <option value="0">Disable</option>
                    </select>
                  </div>
                </div>
                <div class="d-flex flex-row justify-content-end mt-auto pt-3">
                  <button type="submit" class="btn btn-success"><i class="fas fa-fw fa-save"></i> Simpan</button>
                </div>
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