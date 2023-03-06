<body>
	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">

			<h1 class="logo"><a href="<?= base_url('') ?>"><img src="<?= base_url('assets/img/lampungtimur-logo.png') ?>" alt="" srcset=""> SITARU<span>.</span></a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

			<nav id="navbar" class="navbar" style="z-index: 999;">
				<ul>
					<li><a class="nav-link scrollto" href="<?= base_url('') ?>">Beranda</a></li>
					<li class="dropdown nav-link scrollto"><a>Layanan<i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a class="nav-link scrollto" href="<?= base_url('perizinan/KKPR_Berusaha') ?>">KKPR Berusaha</a></li>
							<li><a class="nav-link scrollto" href="<?= base_url('perizinan/KKPR_NonBerusaha') ?>">KKPR Non
									Berusaha</a></li>
						</ul>
					</li>
					<li><a class="nav-link scrollto active" href="<?= base_url('maps') ?>">Peta</a></li>
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

	<div id="map"></div>

	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>

	<script type="text/javascript" src="https://unpkg.com/jquery@3.4.1/dist/jquery.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/') ?>js/leaflet.ajax.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/') ?>js/leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/') ?>js/leaflet-panel-layers-master/dist/leaflet-panel-layers.src.js"></script>
	<script type="text/babel" src="<?= base_url('assets/') ?>js/leaflet-panel-layers-master/src/leaflet-panel-layers.css">
	</script>
	<script type="text/babel" src="<?= base_url('assets/') ?>js/leaflet-panel-layers-master/dist/leaflet-panel-layers.src.css"></script>
	<script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/marker.js"></script>
	<script rel="text/javascript" src="<?= base_url('assets/') ?>js/style.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/') ?>js/layer.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/') ?>js/leaflet-polygon.fillPattern.js"></script>
	<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=Promise"></script>



	<script>
		//Basemaps
		var OpenStreetMap = L.tileLayer(
			'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
				attribution: 'Map data <a href="https://www.openstreetmap.org/">OpenStreetMap</a> | Dikembangkan oleh ' +
					'<a href="https:/">Pemerintah Kabupaten Lampung Timur</a>' + ' &copy; Copyright <?= date('Y') ?>',
				id: 'mapbox/streets-v11'
			});

		Esri_WorldImagery = L.tileLayer(
			'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
				attribution: '| Dikembangkan oleh ' +
					'<a href="https:/">Pemerintah Kabupaten Lampung Timur</a>' + ' &copy; Copyright <?= date('Y') ?>'
			});

		var map = L.map('map', {
			center: [-5.150546013876932, 105.58989647563884],
			zoom: 9,
			layers: [OpenStreetMap, BatasWilayah]
		});

		var baseMaps = [{
			group: "Basemaps",
			layers: [{
					name: "OpenStreetMap",
					layer: OpenStreetMap
				},
				{
					name: "Esri Imagery",
					layer: Esri_WorldImagery
				}
			]

		}];
		var overlayMaps = [
			//Administrasi
			{
				group: "Batas Administrasi",
				collapsed: false,
				layers: [{
						name: "Batas Wilayah",
						layer: BatasWilayah,
					},
					{
						name: "Batas Kabupaten",
						layer: BatasKabupaten,
					},
					{
						name: "Batas Kecamatan",
						layer: BatasKecamatan,
					}
				]
			},
			//Perairan
			{
				group: "Perairan",
				collapsed: true,
				layers: [{

						name: "Bendungan",
						icon: iconByName("bendungan"),
						layer: Bendungan,
					},
					{

						name: "Sungai",
						icon: iconByName("sungai"),
						layer: Sungai,
					},
					{
						name: "Iragasi",
						icon: iconByName("irigasi"),
						layer: Irigasi,
					},

				]
			},
			//Struktur Ruang
			{
				group: "Rencana Struktur Ruang",
				collapsed: true,
				layers: [{
						name: "PKLP",
						icon: iconByName("pklp"),
						layer: Pklp,
					},
					{

						name: "PKW",
						icon: iconByName("pkw"),
						layer: Pkw,
					},
					{

						name: "PPK",
						icon: iconByName("ppk"),
						layer: Ppk,
					},
					//Transportasi
					{
						name: "Terminal",
						icon: iconByName("terminal"),
						layer: RencanaTerminal,
					},

					//Prasarana
					{

						name: "Gardu Listrik",
						icon: iconByName("gardu"),
						layer: GarduListrik,
					},
					{

						name: "Pipa Gas",
						icon: iconByName("PipaGas"),
						layer: PipaGas,
					},
					{

						name: "Transmisi",
						icon: iconByName("transmisi"),
						layer: Transmisi,
					},
					{

						name: "Pembangkit Listrik",
						icon: iconByName("pembangkit_listrik"),
						layer: PembangkitListrik,
					},
					{

						name: "TPA",
						icon: iconByName("tpa"),
						layer: Tpa,
					},

					//Jaringan Prasarana
				]
			},
			//Kaw.Budidaya
			{
				group: "Kawasan Budidaya",
				collapsed: true,
				layers: [{
						name: "Hutan Produksi",
						icon: iconByName("hutan_produksi"),
						layer: HutanProduksi,
					},
					{
						name: "Industri",
						icon: iconByName("industri"),
						layer: Industri,
					},
					{
						name: "Perikanan",
						icon: iconByName("perikanan"),
						layer: Perikanan,
					},
					{

						name: "Perkebunan",
						icon: iconByName("perkebunan"),
						layer: Perkebunan,
					},
					{
						name: "Pertanian",
						icon: iconByName("pertanian"),
						layer: Pertanian,
					},
					{
						name: "Permukiman Desa",
						icon: iconByName("permukiman_desa"),
						layer: PermukimanDesa,
					},
					{
						name: "Permukiman Kota",
						icon: iconByName("permukiman_kota"),
						layer: PermukimanKota,
					},
					{
						name: "Sekitar Danau",
						icon: iconByName("sekitar_danau"),
						layer: SekitarDanau,
					},
				]
			},
			//Kaw. Lindung
			{
				group: "Kawasan Lindung",
				collapsed: false,
				layers: [{

						name: "Hutan Lindung",
						icon: iconByName("hutan_lindung"),
						layer: HutanLindung,
					},
					{

						name: "Taman Nasional",
						icon: iconByName("taman_nasional"),
						layer: TamanNasional,
					},
				]
			},

			//Jaringan Jalan
			{
				group: "Jaringan Jalan",
				collapsed: false,
				layers: [{

						name: "Jalan Kolektor",
						icon: iconByName("jalan_kolektor"),
						layer: JalanKolektor,
					},
					{

						name: "Jalan Lokal",
						icon: iconByName("jalan_lokal"),
						layer: JalanLokal,
					},
					{

						name: "Jalan Arteri",
						icon: iconByName("jalan_arteri"),
						layer: JalanArteri,
					},
					{

						name: "Jalan Lain",
						icon: iconByName("jalan_lain"),
						layer: JalanLain,
					},
				]
			},

			//Strategis
			{
				group: "Kawasan Strategis",
				collapsed: true,
				layers: [{

						name: "Aspek Ekonomi",
						icon: iconByName("ekonomi"),
						layer: s_ekonomi,
					},
					{
						name: "Aspek Lingkungan",
						icon: iconByName("lingkungan"),
						layer: s_lingkungan,
					},
					{
						name: "Aspek Sosial Budaya",
						icon: iconByName("sosbud"),
						layer: s_sosbud,
					}
				]
			},

			//LSD
			{
				group: "LSD & LP2B",
				collapsed: true,
				layers: [{

						name: "LSD",
						icon: iconByName("lsd"),
						layer: lsd,
					},
					{
						name: "LP2B",
						icon: iconByName("lp2b"),
						layer: Lp2b,
					},
				]
			}

		];
		var panelLayers = new L.Control.PanelLayers(baseMaps, overlayMaps, {
			compact: true,
			collapsibleGroups: true,
			selectorGroup: true,
		});
		map.addControl(panelLayers);

		var query_addr = "99 Southwark St, London SE1 0JF, UK";
		// Get the provider, in this case the OpenStreetMap (OSM) provider.
		const provider = new window.GeoSearch.OpenStreetMapProvider()
		// Query for the address
		var query_promise = provider.search({
			query: query_addr
		});
		// Wait until we have an answer on the Promise
		query_promise.then(value => {
			for (i = 0; i < value.length; i++) {
				// Success!
				var x_coor = value[i].x;
				var y_coor = value[i].y;
				var label = value[i].label;
				// Create a marker for the found coordinates
				var marker = L.marker([y_coor, x_coor]).addTo(map) // CAREFULL!!! The first position corresponds to the lat (y) and the second to the lon (x)
				// Add a popup to said marker with the address found by geosearch (not the one from the user)
				marker.bindPopup("<b>Found location</b><br>" + label).openPopup();
			};
		}, reason => {
			console.log(reason); // Error!
		});
	</script>
</body>

</html>
