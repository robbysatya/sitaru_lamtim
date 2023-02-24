<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<title><?= $title_pdf; ?> </title>
	<style>
		.line-title {
			border: 0;
			border-style: unset;
			border-top: 1px solid #000;
		}

		tr td {
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>
</head>

<body>
	<div>
		<img src="<?= base_url('assets/') ?>img/lampungtimur-logo.png" style="position:absolute; width: 60px; height:auto; ">
	</div>
	<div style="text-align:center">
		<h5>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</h5>
		<h5> PEMERINTAH KABUPATEN LAMPUNG TIMUR </h5>
		<h6>Jl. Buay Anak Tuha Komplek Perkantoran Pemkab Lampung Timur Telp. (0725) 625044</h6>
	</div>
	<hr class="line-title">
	<table id="table" class="text-center" align="center">
		<thead>
			<tr>
				<th><?= $title_pdf; ?></th>
			</tr>
		</thead>
		<hr class="line-title">
		<tbody>
			<tr style="text-size-adjust: 5px;">
				<?php foreach ($data_surat as $data) : ?>
					<td scope="row"><?= $data['no_dokumen_berusaha']; ?></td>
				<?php endforeach; ?>
			</tr>
		</tbody>
	</table>

	<table id="table" class="table table-borderless">
		<tbody>
			<?php foreach ($data_surat as $data) : ?>
				<tr>
					<td>Nama Pemohon</td>
					<td> : &nbsp;</td>
					<td><?= $data['nama']; ?></td>
				</tr>

				<tr>
					<td>NIK</td>
					<td> : </td>
					<td class="text-left"><?= $data['nik']; ?></td>
				</tr>

				<tr>
					<td>Pekerjaan</td>
					<td> : </td>
					<td class="text-left"><?= $data['pekerjaan']; ?></td>
				</tr>

				<tr>
					<td>No HP</td>
					<td> : </td>
					<td class="text-left"><?= $data['no_hp']; ?></td>
				</tr>

				<tr>
					<td>Alamat Pemohon</td>
					<td> : </td>
					<td class="text-left"><?= $data['status_berusaha']; ?></td>
				</tr>

				<tr>
					<td>Tanggal Pengajuan</td>
					<td> : </td>
					<td class="text-left"><?= date('d F Y', $data['tanggal']); ?></td>
				</tr>

				<tr>
					<td>Fungsi Bangunan</td>
					<td> : </td>
					<td class="text-left"><?= $data['fungsi_bangunan']; ?></td>
				</tr>

				<tr>
					<td>Alamat Kegiatan</td>
					<td> : </td>
					<td class="text-left"><?= $data['alamat_kegiatan']; ?></td>
				</tr>

				<tr>
					<td>Kecamatan</td>
					<td> : </td>
					<td class="text-left"><?= $data['kecamatan']; ?></td>
				</tr>

				<tr>
					<td>Kelurahan</td>
					<td> : </td>
					<td class="text-left"><?= $data['kelurahan']; ?></td>
				</tr>

				<tr>
					<td>Latittude & Longitude</td>
					<td> : </td>
					<td class="text-left"><?= $data['latittude_longitude']; ?></td>
				</tr>

				<tr>
					<td>Luas Tanah Dimohon</td>
					<td> : </td>
					<td class="text-left"><?= $data['luas_tanah_dimohon']; ?></td>
				</tr>

				<tr>
					<td>Luas Tanah Sesuai Bukti</td>
					<td> : </td>
					<td class="text-left"><?= $data['luas_tanah_sesuai_bukti']; ?></td>
				</tr>

				<tr>
					<td>Luas Bangunan</td>
					<td> : </td>
					<td class="text-left"><?= $data['luas_bangunan']; ?></td>
				</tr>

				<tr>
					<td>Status Tanah</td>
					<td> : </td>
					<td class="text-left"><?= $data['status_tanah']; ?></td>
				</tr>

				<tr>
					<td>Penggunaan Tanah Sekarang</td>
					<td> : </td>
					<td class="text-left"><?= $data['penggunaan_tanah_sekarang']; ?></td>
				</tr>

				<tr>
					<td>Jumlah Lantai</td>
					<td> : </td>
					<td class="text-left"><?= $data['rencana_jumlah_lantai']; ?></td>
				</tr>

				<tr>
					<td>Tinggi Bangunan</td>
					<td> : </td>
					<td class="text-left"><?= $data['rencana_tinggi_bangunan']; ?> m</td>
				</tr>

				<tr>
					<td>Total Luas Lantai</td>
					<td> : </td>
					<td class="text-left"><?= $data['rencana_total_luas_lantai']; ?> m<sup>2</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>


</body>

</html>