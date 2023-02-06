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
	                <span>Tabel Data KKPR Non Berusaha</span>
	              </div>
	              <!-- /.card-header -->
	              <div class="card-body">
	                <table id="example1" class="table table-bordered table-responsive">
	                  <?php foreach ($kkpr_sudah as $data) : ?>
	                  <thead>
	                    <tr>
	                      <th>NIK Pemohon</th>
	                      <th>Nama Pemohon</th>
	                      <th>Pekerjaan</th>
	                      <th>No HP</th>
	                      <th>Tanggal Pengajuan</th>
	                      <th>Alamat Pemohon</th>
	                      <th>Fungsi</th>
	                      <th>Alamat Kegiatan</th>
	                      <th>Kecamatan</th>
	                      <th>Kelurahan</th>
	                      <th>Latittude & Longitude</th>
	                      <th>Luas Tanah Dimohon</th>
	                      <th>Luas Sesuai Bukti Kepemilikan Tanah</th>
	                      <th>Luas Tanah (Untuk Bangunan)</th>
	                      <th>Status Tanah</th>
	                      <th>Penggunaan Tanah Sekarang</th>
	                      <th>Rencana Jumlah Lantai</th>
	                      <th>Rencana Tinggi Bangunan</th>
	                      <th>Rencana Total Luas Lantai</th>
	                      <th>Formulir Permohonan Bermaterai</th>
	                      <th>Fotokopi KTP Pemohon + Surat Kuasa + Fc yang diberi kuasa</th>
	                      <th>Bukti Penguasaan Tanah (SHM/SHGB/SHGU/SHP/Wakaf/HPL/Letter C + Peta Bidang)</th>
	                      <th>Surat Keterangan Waris (bila pemilik meninggal dunia)</th>
	                      <th>Dokumen Perjanjian Sewa Menyewa</th>
	                      <th>Dokumen Akta Jual Beli dan Surat Pernyataan Pemilik Tanah</th>
	                      <th>Surat Pernyataan Pemohon Bermeterai</th>
	                      <th>Polygon Koordinat Lokasi Dimohon</th>
	                      <th>Rencana Penggunaan Air Baku / Air bersih + Rencana Teknis Bangunan (RTB) / Rencana Induk
	                        Kawasan (RIK)</th>
	                      <th>Dokumen Perizinan Sebelumnya (AP/KRK/IPPT/ Rekomendasi Teknis Lainnya)</th>
	                      <th>Surat Keterangan Untuk Kepentingan Umum</th>
	                      <th>Gambar Sisi Utara</th>
	                      <th>Gambar Sisi Selatan</th>
	                      <th>Gambar Sisi Barat</th>
	                      <th>Gambar Sisi Timur</th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                    <tr>
	                      <td><?= $data['nik']; ?></td>
	                      <td><?= $data['nama']; ?></td>
	                      <td><?= $data['pekerjaan']; ?></td>
	                      <td><?= $data['no_hp']; ?></td>
	                      <td><?= date('d F Y', $data['tanggal']) ?></td>
	                      <td><?= $data['alamat_pemohon']; ?></td>
	                      <td><?= $data['fungsi_bangunan']; ?></td>
	                      <td><?= $data['alamat_kegiatan']; ?></td>
	                      <td><?= $data['kecamatan']; ?></td>
	                      <td><?= $data['kelurahan']; ?></td>
	                      <td><?= $data['latittude_longitude']; ?></td>
	                      <td><?= $data['luas_tanah_dimohon']; ?> m<sup>2</sup></td>
	                      <td><?= $data['luas_tanah_sesuai_bukti']; ?> m<sup>2</sup></td>
	                      <td><?= $data['luas_bangunan']; ?> m<sup>2</sup></td>
	                      <td><?= $data['status_tanah']; ?></td>
	                      <td><?= $data['penggunaan_tanah_sekarang']; ?></td>
	                      <td><?= $data['rencana_jumlah_lantai']; ?></td>
	                      <td><?= $data['rencana_tinggi_bangunan']; ?> m</td>
	                      <td><?= $data['rencana_total_luas_lantai']; ?> m<sup>2</sup></td>
	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_permohonan_bermaterai']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_ktp_pemohon']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_bukti_penguasaan_tanah']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_surat_keterangan_waris']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_dokumen_perjanjian_sewa']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_dokumen_akta_jual_beli']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_surat_pernyataan_pemohon']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_polygon_koordinat']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_rencana_penggunaan_air']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_dokumen_perizinan_sebelumnya']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_kepentingan_umum']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_gambar_sisi_utara']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_gambar_sisi_selatan']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_gambar_sisi_barat']; ?>
	                      </td>

	                      <td>
	                        <?= base_url('assets/file/kkpr_nonberusaha/') . $data['file_gambar_sisi_timur']; ?>
	                      </td>
	                    </tr>
	                  </tbody>
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
	  </div
>