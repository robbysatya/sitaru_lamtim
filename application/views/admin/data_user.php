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
                <a href="<?= base_url('admin/Data_User/Tambah_User') ?>" class="btn btn-primary mt-3"><i
                    class="fas fa-fw fa-plus"></i> Tambah User</a>
              </div>
            </div>
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
                <h3 class="card-title">Tabel Data User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>No HP</th>
                      <th>Pekerjaan</th>
                      <th>Role</th>
                      <th>Status Akun</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php $no = 1; ?>
                      <?php foreach ($data_user as $user) :  ?>
                      <td><?= $no; ?></td>
                      <td><?= $user['nik']; ?></td>
                      <td><?= $user['nama']; ?></td>
                      <td><?= $user['email']; ?></td>
                      <td>******</td>
                      <td><?= $user['no_hp']; ?></td>
                      <td><?= $user['pekerjaan']; ?></td>
                      <td><?= $user['role']; ?></td>
                      <td><?php if ($user['is_active'] == 1) { ?>
                        <?= 'Aktif';
														} else if ($user['is_active'] == 0) { ?>
                        <?= 'Tidak Active';
														} ?>
                      </td>
                      <td>
                        <a href="<?= base_url('admin/data_user/edit_user/' . $user['id']) ?>"
                          class="btn btn-warning col-sm-12" style="color: #fff;"><i class="fas fa-fw fa-edit"></i>
                          Edit</a>
                        <button class="btn btn-danger col-sm-12" data-toggle="modal"
                          data-target="#deleteDataUserModal<?= $user['id']; ?>"><i class="fas fa-fw fa-trash"></i>
                          Hapus</button>
                      </td>
                    </tr>
                    <?php $no++ ?>
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

  <!-- Modal Delete Data User -->
  <?php foreach ($data_user as $user) : ?>
  <div class="modal fade" id="deleteDataUserModal<?= $user['id']; ?>" tabindex="-1"
    aria-labelledby="deleteDataDosenLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteDataDosenLabel">Hapus Akun</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('admin/data_user/Hapus_User') ?>" method="post">
          <div class="modal-body">
            <p>Apa anda yakin ingin menghapus akun <b><?= $user['nama']; ?></b>? </p>
            <input type="text" class="form-control" id="id" name="id" placeholder="ID" required
              value="<?= $user['id']; ?>" hidden>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-fw fa-times"></i>
              No</button>
            <button type="submit" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i> Yes</button>
          </div>


















        </form>
      </div>
    </div>
  </div>
  <?php endforeach; ?>