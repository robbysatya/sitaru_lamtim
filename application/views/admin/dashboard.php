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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $kkpr_berusaha->num_rows(); ?></h3>

                <p>Jumlah Pengajuan KKPR Berusaha Yang Belum Disetujui</p>
              </div>
              <a href="<?= base_url('admin/kkpr_Berusaha/BelumDisetujui') ?>" class="small-box-footer">Lihat Data <i
                  class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?= $kkpr_nonberusaha->num_rows(); ?></h3>

                <p>Jumlah Pengajuan KKPR Non Berusaha Yang Belum Disetujui</p>
              </div>
              <a href="<?= base_url('admin/kkpr_NonBerusaha/BelumDisetujui') ?>" class="small-box-footer">Lihat Data <i
                  class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row"></div>
      <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
  </se ction>
  <!-- /.content -->
</div> /.content -->
</div>