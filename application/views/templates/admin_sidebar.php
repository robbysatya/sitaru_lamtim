<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="<?= base_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SITARU</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets/') ?>dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $user['nama']; ?></a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              KKPR Non Berusaha
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/kkpr_NonBerusaha/BelumDisetujui') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Belum Disetujui</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/kkpr_NonBerusaha/Disetujui') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Disetujui</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/kkpr_NonBerusaha/Cetak') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cetak Data</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              KKPR Berusaha
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/kkpr_Berusaha/BelumDisetujui') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Belum Disetujui</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/kkpr_Berusaha/Disetujui') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Disetujui</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/kkpr_Berusaha/Cetak') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cetak Data</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">Data Lain</li>
        <?php if ($this->session->userdata('role') == 'Admin') : ?>
        <li class="nav-item">
          <a href="<?= base_url('admin/Data_User') ?>" class="nav-link">
            <i class="nav-icon fas fa-user-alt"></i>
            <p>
              Data User
            </p>
          </a>
        </li>
        <?php endif; ?>
        <li class="nav-item">
          <a href="<?= base_url('auth/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Log Out
            </p>
          </a>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /
.sidebar
 -->
</aside>