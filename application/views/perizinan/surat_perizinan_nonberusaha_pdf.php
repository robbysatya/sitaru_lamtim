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
					<td scope="row"><?= $data['no_dokumen_nonberusaha']; ?></td>
				<?php endforeach; ?>
			</tr>
		</tbody>
	</table>
</body>

</html>
