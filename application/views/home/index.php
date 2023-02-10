  <!-- ======= Hero Section ======= -->

  <div class="modal fade bd-example-modal-lg" id="HomeModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg">
  		<div class="modal-content">
  			...
  		</div>
  	</div>
  </div>

  <section id="hero" class="d-flex align-items-center">
  	<div class="container" data-aos="zoom-out" data-aos-delay="100">
  		<h1>Selamat Datang di <span>Sitaru Lampung Timur</span></h1>
  		<h2>Layanan Sistem Informasi Tata Ruang dan Perizinan Kab. Lampung Timur</h2>
  	</div>
  </section><!-- End Hero -->

  <main id="main">
  	<!-- ======= About Section ======= -->
  	<section id="about" class="about section-bg">
  		<div class="container" data-aos="fade-up">

  			<div class="section-title">
  				<h2>Tentang Kami</h2>
  				<h3><span>Izin Pemanfaatan Ruang</span></h3>
  				<p>SITARU Lampung Timur merupakan website izin Pemanfaatan Ruang melalui persetujuan yang diberikan oleh
  					Pemerintah Daerah atas suatu rencana investasi yang memerlukan pemanfaatan ruang.</p>
  			</div>

  			<div class="row">
  				<div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
  					<img src="assets/img/about-pemkab.jpg" class="img-fluid" alt="">
  				</div>
  				<div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
  					<h3>Fitur SITARU Lampung Timur</h3>
  					<p>
  						Berikut ini fitur dalam website SITARU Lampung Timur :
  					</p>
  					<ul>
  						<li>
  							<i class="bx bx-world"></i>
  							<div>
  								<h5>Peta Tata Ruang</h5>
  								<p>Informasi yang berisi peta tata ruang yang disediakan oleh Pemerintah Kabupaten Lampung Timur.</p>
  							</div>
  						</li>
  						<li>
  							<i class="bx bx-file"></i>
  							<div>
  								<h5>KKPR Non Berusaha</h5>
  								<p>Fitur untuk mengajukan izin Kesesuaian Kegiatan Pemanfaatan Ruang Non Berusaha.</p>
  							</div>
  						</li>
  						<li>
  							<i class="bx bx-file"></i>
  							<div>
  								<h5>KKPR Berusaha</h5>
  								<p>Fitur untuk mengajukan izin Kesesuaian Kegiatan Pemanfaatan Ruang Berusaha.</p>
  							</div>
  						</li>
  					</ul>
  				</div>
  			</div>

  		</div>
  	</section><!-- End About Section -->

  	<!-- ======= Services Section ======= -->
  	<section id="services" class="services">
  		<div class="container" data-aos="fade-up">

  			<div class="section-title">
  				<h2>Layanan Kami</h2>
  				<h3><span>Fitur Layanan Kami</span></h3>
  				<p>Anda dapat memilih layanan kami dibawah ini.</p>
  			</div>

  			<div class="row">
  				<div class="col-lg-4 d-flex align-items-stretch justify-content-center mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
  					<div class="icon-box">
  						<a class="icon" href="<?= base_url('perizinan/kkpr_NonBerusaha') ?>"><i class="bx bx-file"></i></a>
  						<h4><a href="<?= base_url('perizinan/kkpr_NonBerusaha') ?>">KKPR Non Berusaha</a></h4>
  						<p>Kesesuaian Kegiatan Pemanfaatan Ruang</p>
  					</div>
  				</div>

  				<div class="col-lg-4 d-flex align-items-center justify-content-center mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
  					<div class="icon-box">
  						<a class="icon" href="<?= base_url('perizinan/kkpr_Berusaha') ?>"><i class="bx bx-file"></i></a>
  						<h4><a href="<?= base_url('perizinan/kkpr_Berusaha') ?>">KKPR Berusaha</a></h4>
  						<p>Kesesuaian Kegiatan Pemanfaatan Ruang</p>
  					</div>
  				</div>

  				<div class="col-lg-4 d-flex align-items-stretch justify-content-center mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
  					<div class="icon-box">
  						<a class="icon" href="<?= base_url('maps') ?>"><i class="bx bx-world"></i></a>
  						<h4><a href="<?= base_url('maps') ?>">Peta Tata Ruang</a></h4>
  						<p>Informasi tata ruang Kabupaten Lampung Timur</p>
  					</div>
  				</div>
  			</div>

  		</div>
  	</section><!-- End Services Section -->

  	<!-- ======= Testimonials Section ======= -->
  	<section id="testimonials" class="testimonials">
  		<div class="container" data-aos="zoom-in">

  			<div class="container-wrapper" data-aos="fade-up" data-aos-delay="100">
  				<div class="row">
  					<div class="testimonial-item">
  						<h3>ATURAN PERATURAN DAERAH</h3>
  						<a href="<?= base_url('assets/') ?>file/Perda_No_4_Tahun_2012_RTRW Kab. Lampung Timur.pdf" class="btn btn-primary my-4">DOWNLOAD ATURAN PERDA</a>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
  </main><!-- End #main -->

  <script type="text/javasxript">
  	$('#HomeModal').modal('show')
	</script>