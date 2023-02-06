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
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/') ?>vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin="" />
  <link rel="stylesheet" href="<?= base_url('assets/') ?>js/leaflet-panel-layers-master/src/leaflet-panel-layers.css" />
  <link rel="stylesheet" href="<?= base_url('assets/') ?>style.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin="">
  </script>

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

      <h1 class="logo"><a href="<?= base_url('') ?>"><img src="<?= base_url('assets/img/lampungtimur-logo.png') ?>"
            alt="" srcset=""> SITARU<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" a href="#services">Layanan</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('maps') ?>">Peta</a></li>
          <?php if ($this->session->userdata('email')) { ?>
          <li><a class="nav-link scrollto" href="<?= base_url('perizinan/status_pengajuan') ?>">Status Pengajuan</a>
          </li>
          <li><a class="nav-link scrollto" href="<?= base_url('auth/logout') ?>">Log Out</a></li>
          <?php } else { ?>
          <li><a class="nav-link scrollto" href="<?= base_url('auth') ?>">Masuk</a></li>
          <?php } ?>



          <!-- <li><a class="nav-link scrollto" href="#">Daftar</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->