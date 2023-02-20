<main id="main">
	<!-- ======= About Section ======= -->
	<section id="form" class="d-flex align-items-center">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h3>Status Pengajuan</h3>
				<p>Berikut ini status pengajuan KKPR Berusaha dan KKPR Non Berusaha:</p>
				<span style="color: red;">*Jika diterima/disetujui silahkan unduh berkas perizinan dan datang ke kantor
					perizinan untuk penyerahan dan
					pengambilan berkas perizinan selanjutnya.</span>
			</div>

			<div class="column">
				<div class="col-md-12">
					<div class="card card-default">
						<div class="card-header ">
							Status Pengajuan KKPR Berusaha
						</div>
						<div class="card-body m-0">
							<table id="example1" class="table table-borderless table-responsive">
								<tbody>
									<?php foreach ($user_data as $data) : ?>
										<?php if ($data['status_berusaha'] == '' && $data['alasan_berusaha'] == '') { ?>
											<tr>
												<th>
													<span style="color: grey;">Anda belum mengajukan apapun terkait KKPR Berusaha</h6>
												</th>
											</tr>
								</tbody>
							</table>
						</div>
						<!-- /.card -->
					</div>
				<?php } else if ($data['status_berusaha'] == 'Disetujui') { ?>
					<tr>
						<th>Status :</th>
						<td><?= $data['status_berusaha']; ?></td>
					</tr>

					<tr>
						<!-- <th>Nomor Dokumen :</th>
            <td><?= $data['no_dokumen_berusaha']; ?></td> -->
						<th>Unduh Dokumen :</th>
						<td><a class="btn btn-primary" href="<?= base_url('Perizinan/surat_perizinan_berusaha/'); ?>">Unduh</a></td>
					</tr>
					</tbody>
					</table>
				<?php } else if ($data['status_berusaha'] == 'Ditolak') { ?>
					<tr>
						<th>Status :</th>
						<td><?= $data['status_berusaha']; ?></td>
					</tr>

					<tr>
						<th>Alasan :</th>
						<td> <?= $data['alasan_berusaha']; ?></td>
					</tr>
					</tbody>
					</table>
				<?php } else if ($data['status_berusaha'] == 'Tunggu') { ?>
					<tr>
						<th>Status :</th>
						<td><?= $data['status_berusaha']; ?></td>
					</tr>
					</tbody>
					</table>
				</div>
				<!-- /.card -->
			</div>
		<?php } ?>
	<?php endforeach; ?>
		</div>


		<div class="col-md-12">
			<div class="card card-default">
				<div class="card-header ">
					Status Pengajuan KKPR Non Berusaha
				</div>
				<div class="card-body m-0">
					<table id="example1" class="table table-borderless table-responsive">
						<tbody>
							<?php foreach ($user_data as $data) : ?>
								<?php if ($data['status_nonberusaha'] == '' && $data['alasan_nonberusaha'] == '') { ?>
									<tr>
										<th>
											<span style="color: grey;">Anda belum mengajukan apapun terkait KKPR Non Berusaha</h6>
										</th>
									</tr>
						</tbody>
					</table>
				</div>
				<!-- /.card -->
			</div>
		</div>
		</div>
	</section>
</main>
<?php } else if ($data['status_nonberusaha'] == 'Disetujui') { ?>
	<tr>
		<th>Status :</th>
		<td><?= $data['status_nonberusaha']; ?></td>
	</tr>

	<tr>
		<!-- <th>Nomor Dokumen :</th>
  <td><?= $data['no_dokumen_nonberusaha']; ?></td> -->
		<th>Unduh Dokumen :</th>
		<td><a class="btn btn-primary" href="<?= base_url('Perizinan/surat_perizinan_nonberusaha/'); ?>">Unduh</a></td>
	</tr>
	</tbody>
	</table>
<?php } else if ($data['status_nonberusaha'] == 'Ditolak') { ?>
	<tr>
		<th>Status :</th>
		<td><?= $data['status_nonberusaha']; ?></td>
	</tr>

	<tr>
		<th>Alasan :</th>
		<td> <?= $data['alasan_nonberusaha']; ?></td>
	</tr>
	</tbody>
	</table>
<?php } else if ($data['status_nonberusaha'] == 'Tunggu') { ?>
	<tr>
		<th>Status :</th>
		<td><?= $data['status_nonberusaha']; ?></td>
	</tr>
	</tbody>
	</table>
	</div>
	<!-- /.card -->
	</div>
<?php } ?>
<?php endforeach; ?>
</div>
</div>
</section>

</div>

</div>
</section><!-- End Contact Section -->



</main><!-- End #main -->
