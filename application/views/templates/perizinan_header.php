<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sitaru - Lampung Timur</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/') ?>img/favicon.png" rel="icon">
  <link href="<?= base_url('assets/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/') ?>vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.9.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?= base_url('') ?>"><img src="<?= base_url('assets/img/lampungtimur-logo.png') ?>" alt="" srcset=""> SITARU<span>.</span></a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="<?= base_url('') ?>">Beranda</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('perizinan/status_pengajuan') ?>">Status Pengajuan</a>
          </li>
          <li class="dropdown nav-link scrollto"><a>Layanan<i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="<?= base_url('perizinan/KPPR_Berusaha') ?>">KKPR Berusaha</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url('perizinan/KPPR_NonBerusaha') ?>">KKPR Non
                  Berusaha</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url('maps') ?>">Peta</a></li>
            </ul>
          </li>
          <li class="dropdown nav-link scrollto"><a><?= $user['nama']; ?><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="<?= base_url('auth/logout') ?>">Log Out</a></li>
            </ul>

          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
