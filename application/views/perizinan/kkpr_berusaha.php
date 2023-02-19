<main id="main">
	<!-- ======= About Section ======= -->
	<section id="form" class="d-flex align-items-center">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h3><span>Formulir KKPR Berusaha</span></h3>
				<p>Pengajuan Kesesuaian Kegiatan Pemanfaatan Ruang Berusaha :</p>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="card card-default">
						<div class="card-header ">
							<?= $this->session->flashdata('message'); ?>
							<ul class="list-group">
								<h3 class="card-title mb-2"><span class="text-danger">*</span><b> Syarat dan Ketentuan Pengajuan :</b>
								</h3>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									1. Formulir Permohonan bermaterai
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									2. Fotokopi KTP berlaku dan NPWP Perusahaan
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									3. NIB (Nomor Induk Berusaha) + Seritikat Standar atau Izin
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									4. Bukti Penguasaan Tanah (SHM / SHGB / SHGU / SHP / Wakaf / HPL/ Letter C+Peta Bidang)
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									5. Surat Keterangan Waris (bila pemilik meninggal dunia)
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									6. Dokumen Perjanjian Sewa Menyewa
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									7. Dokumen Akta Jual Beli dan Surat Pernyataan Pemilik Tanah
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									8. Surat Pernyataan Pemohon Bermeterai
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									9. Rencana Penggunaan Air Baku / Air bersih + Rencana Teknis Bangunan (RTB) / Rencana Induk Kawasan
									(RIK)
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									10. Surat Kuasa bermaterai (apabila penanggungjawab permohonan selain pemilik tanah) + Fc yang diberi
									kuasa
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									11. Dokumen Perizinan Sebelumnya (AP/IPPT/KRK/ Rekomendasi Teknis Lainnya)
								</li>
							</ul>
						</div>
						<div class="card-body m-0">
							<form class="berusaha" method="POST" action="<?= base_url('perizinan/kkpr_Berusaha/ajukan') ?>" enctype="multipart/form-data">
								<!-- your steps content here -->
								<!-- STEP 1 -->
								<h2 class="py-4">Data Pemohon</h2>
								<div class="form-group">
									<label for="exampleInputNIK"><span class="text-danger">*</span> NIK Pemohon</label>
									<input minlength="16" required type="number" name="nik" class="form-control" id="nik" placeholder="Nomor Induk Kependudukan" value="<?= $user['nik'] ?>" readonly>
								</div>
								<div class="form-group">
									<label for="exampleInputNama"><span class="text-danger">*</span> Nama Pemohon</label>
									<input required type="text" name="nama" class="form-control" id="nama" placeholder="Nama Pemohon" required value="<?= $user['nama'] ?>" readonly>
								</div>
								<div class="form-group">
									<label for="exampleInputPekerjaan"><span class="text-danger">*</span> Pekerjaan Pemohon</label>
									<input required type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan Pemohon" value="<?= $user['pekerjaan'] ?>" readonly>
								</div>
								<div class="form-group">
									<label for="exampleInputTanggal"><span class="text-danger">*</span> Tanggal Permohonan</label>
									<input required type="date" name="tanggal" class="form-control" id="tanggal">
								</div>
								<div class="form-group">
									<label for="exampleInputNoHp"><span class="text-danger">*</span> No Hp</label>
									<input required type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Contoh : 081234567898" value="<?= $user['no_hp'] ?>" readonly>
								</div>
								<div class="form-group">
									<label for="exampleInputAlamat"><span class="text-danger">*</span> Alamat Pemohon</label>
									<textarea required type="text" name="alamat_pemohon" class="form-control" id="alamat_pemohon" placeholder="Jl. Nama Jalan, Desa/Kelurahan, Kecamatan, Kabupaten"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputFungsi"><span class="text-danger">*</span> Fungsi</label>
									<textarea required type="text" name="fungsi_bangunan" class="form-control" id="fungsi_bangunan" placeholder="Fungsi Kegiatan Pemanfaatan Ruang nantinya digunakan untuk..."></textarea>
								</div>

								<!-- STEP 2 -->
								<hr style="border: 0.5px solid #000;">
								<h2 class="py-4">Detail Usaha</h2>
								<div class="form-group">
									<label for="exampleInputNIB"><span class="text-danger">*</span> NIB</label>
									<input required type="number" name="nib" class="form-control" id="nib" placeholder="NIB">
								</div>
								<div class="form-group">
									<label for="exampleInputNamaKegiatan"><span class="text-danger">*</span> Nama Kegiatan Usaha</label>
									<input required type="" name="nama_kegiatan" class="form-control" id="nama_kegiatan" placeholder="Nama Kegiatan Usaha">
								</div>
								<div class="form-group">
									<label for="exampleInputKBLI"><span class="text-danger">*</span> KBLI</label>
									<input required type="" name="kbli" class="form-control" id="kbli" placeholder="KBLI">
								</div>
								<div class="form-group">
									<label for="exampleInputKBLIJudul"><span class="text-danger">*</span> KBLI Judul</label>
									<input required type="" name="kbli_judul" class="form-control" id="kbli_judul" placeholder="KBLI Judul">
								</div>
								<div class="form-group">
									<label for="exampleInputSkalaUsaha"><span class="text-danger">*</span> Skala Usaha</label>
									<select data-placeholder="Skala Usaha" class="form-control" aria-label="Default select example" name="skala_usaha" id="skala_usaha">
										<option selected>Pilih Skala Usaha</option>
										<option value="Mikro">Mikro - Kecil (Modal Usaha maksimal 5 miliar)</option>
										<option value="Non Mikro">Non Mikro - Kecil (Modal Usaha Lebih Dari 5 miliar)</option>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputAlamatKegiatan"><span class="text-danger">*</span> Alamat Kegiatan</label>
									<textarea required type="text" name="alamat_kegiatan" class="form-control" id="alamat_kegiatan" placeholder="Jl. Nama Jalan"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputKecamatan"><span class="text-danger">*</span> Kecamatan</label>
									<select required data-placeholder="Pilih Kecamatan" class="form-control kecamatan" name="kecamatan">
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputKelurahan"><span class="text-danger">*</span> Desa/Kelurahan</label>
									<select required data-placeholder="Pilih Desa/Kelurahan" class="form-control kelurahan" name="kelurahan">
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputLatittude"><span class="text-danger">*</span> Latittude & Longitude</label>
									<input required type="text" name="latittude_longitude" class="form-control" id="latittude_longitude" placeholder="Latittude & Longitude"></input>
								</div>
								<div class="form-group">
									<label for="exampleInputLuasTanahDimohon"><span class="text-danger">*</span> Luas Tanah Dimohon <span class="text-danger">m<sup>2</sup></span></label>
									<input required type="number" name="luas_tanah_dimohon" class="form-control" id="luas_tanah_dimohon" placeholder="Luas Tanah Dimohon"></input>
								</div>
								<div class="form-group">
									<label for="exampleInputLuasTanahSesuaiBukti"><span class="text-danger">*</span> Luas Sesuai Bukti
										Kepemilikan Tanah <span class="text-danger">m<sup>2</sup></span></label>
									<input required type="number" name="luas_tanah_sesuai_bukti" class="form-control" id="luas_tanah_sesuai_bukti" placeholder="Luas Sesuai Bukti Kepemilikan Tanah"></input>
								</div>
								<div class="form-group">
									<label for="exampleInputLuasBangunan"><span class="text-danger">*</span> Luas Tanah (Untuk
										Bangunan)<span class="text-danger">m<sup>2</sup></span></label>
									<input required type="number" name="luas_bangunan" class="form-control" id="luas_bangunan" placeholder="Luas Bangunan"></input>
								</div>

								<!-- STEP 3 -->
								<hr style="border: 0.5px solid #000;">
								<h2 class="py-4">Status Tanah</h2>
								<div class="form-group">
									<label for="exampleInputStatusTanah"><span class="text-danger">*</span> Status Tanah</label>
									<select required data-placeholder="Status Tanah" class="form-control" name="status_tanah" id="status_tanah">
										<option>Pilih Status Tanah</option>
										<option value="SHM">SHM</option>
										<option value="SHGU">SHGU</option>
										<option value="SHGB">SHGB</option>
										<option value="SHP">SHP</option>
										<option value="Wakaf">Wakaf</option>
										<option value="Letter C + Peta Bidang">Letter C + Peta Bidang</option>
										<option value="AJB + Peta Bidang">AJB + Peta Bidang</option>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleInputPenggunaanTanahSekarang"><span class="text-danger">*</span> Penggunaan Tanah
										Sekarang</label>
									<textarea required type="text" name="penggunaan_tanah_sekarang" class="form-control" id="penggunaan_tanah_sekarang" placeholder="Penggunaan Tanah Sekarang"></textarea>
								</div>

								<div class="form-group">
									<label for="exampleInputRencanaJumlahLantai"><span class="text-danger">*</span> Rencana Jumlah
										Lantai</label>
									<input required type="number" name="rencana_jumlah_lantai" class="form-control" id="rencana_jumlah_lantai" placeholder="Rencana Jumlah Lantai"></input>
								</div>

								<div class="form-group">
									<label for="exampleInputRencanaTinggiBangunan"><span class="text-danger">*</span> Rencana Tinggi
										Bangunan <span class="text-danger">m</span></label>
									<input required type="number" name="rencana_tinggi_bangunan" class="form-control" id="rencana_tinggi_bangunan" placeholder="Rencana Tinggi Bangunan"></input>
								</div>

								<div class="form-group">
									<label for="exampleInputRencanaTotalLuasLantai"><span class="text-danger">*</span> Rencana Total Luas
										Lantai <span class="text-danger">m<sup>2</sup></span></label>
									<input required type="number" name="rencana_total_luas_lantai" class="form-control" id="rencana_total_luas_lantai" placeholder="Rencana Total Luas Lantai"></input>
								</div>

								<!-- STEP 4 -->
								<hr style="border: 0.5px solid #000;">
								<h2 class="py-4">Berkas</h2>
								<div class="form-group">
									<label for="exampleInputFile">Formulir Permohonan Bermaterai</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" accept="application/pdf,image/jpeg,image/jpg,image/png" class="custom-file-input" id="file_permohonan_bermaterai" name="file_permohonan_bermaterai">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Fotokopi KTP berlaku dan NPWP Perusahaan</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" accept="application/pdf,image/jpeg,image/jpg,image/png" class="custom-file-input" id="file_ktp_npwp" name="file_ktp_npwp">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">NIB (Nomor Induk Berusaha) + Seritikat Standar atau Izin</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" accept="application/pdf,image/jpeg,image/jpg,image/png" class="custom-file-input" id="file_nib" name="file_nib">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Bukti Penguasaan Tanah (SHM/SHGB/SHGU/SHP/Wakaf/HPL/Letter C + Peta
										Bidang)</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" accept="application/pdf,image/jpeg,image/jpg,image/png" class="custom-file-input" id="file_bukti_penguasaan_tanah" name="file_bukti_penguasaan_tanah">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Surat Keterangan Waris (bila pemilik meninggal dunia)</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" accept="application/pdf,image/jpeg,image/jpg,image/png" class="custom-file-input" id="file_surat_keterangan_waris" name="file_surat_keterangan_waris">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Dokumen Perjanjian Sewa Menyewa</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" accept="application/pdf,image/jpeg,image/jpg,image/png" class="custom-file-input" id="file_dokumen_perjanjian_sewa" name="file_dokumen_perjanjian_sewa">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Dokumen Akta Jual Beli dan Surat Pernyataan Pemilik Tanah</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" accept="application/pdf,image/jpeg,image/jpg,image/png" class="custom-file-input" id="file_dokumen_akta_jual_beli" name="file_dokumen_akta_jual_beli">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Surat Pernyataan Pemohon Bermeterai</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" accept="application/pdf,image/jpeg,image/jpg,image/png" class="custom-file-input" id="file_surat_pernyataan_pemohon" name="file_surat_pernyataan_pemohon">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Polygon Koordinat Lokasi Dimohon (format *.kmz atau *.kml atau *.shp dlm
										bentuk zip)</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" accept=".zip, .rar, .pdf, .jpg, .jpeg, .png" class="custom-file-input" id="file_polygon_koordinat" name="file_polygon_koordinat">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Rencana Penggunaan Air Baku / Air bersih + Rencana Teknis Bangunan (RTB)
										/ Rencana Induk Kawasan (RIK)</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" accept="application/pdf,image/jpeg,image/jpg,image/png" class="custom-file-input" id="file_rencana_penggunaan_air" name="file_rencana_penggunaan_air">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Surat Kuasa bermaterai (apabila penanggungjawab permohonan selain
										pemilik tanah) + Fc yang diberi kuasa</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" accept="application/pdf,image/jpeg,image/jpg,image/png" class="custom-file-input" id="file_surat_kuasa" name="file_surat_kuasa">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Dokumen Perizinan Sebelumnya (AP/KRK/IPPT/ Rekomendasi Teknis
										Lainnya)</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" accept="application/pdf,image/jpeg,image/jpg,image/png" class="custom-file-input" id="file_dokumen_perizinan_sebelumnya" name="file_dokumen_perizinan_sebelumnya">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>

								<!-- STEP 5 -->
								<hr style="border: 0.5px solid #000;">
								<h2 class="py-4">Gambar Lokasi</h2>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputFile">Gambar Sisi Utara</label>
											<div class="input-group">
												<div class="custom-file">
													<input type="file" accept=".jpg, .jpeg, .png" class="custom-file-input" id="file_gambar_sisi_utara" name="file_gambar_sisi_utara">
													<label class="custom-file-label" for="exampleInputFile">Choose file</label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputFile">Gambar Sisi Selatan</label>
											<div class="input-group">
												<div class="custom-file">
													<input type="file" accept=".jpg, .jpeg, .png" class="custom-file-input" id="file_gambar_sisi_selatan" name="file_gambar_sisi_selatan">
													<label class="custom-file-label" for="exampleInputFile">Choose file</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputFile">Gambar Sisi Barat</label>
											<div class="input-group">
												<div class="custom-file">
													<input type="file" accept=".jpg, .jpeg, .png" class="custom-file-input" id="file_gambar_sisi_barat" name="file_gambar_sisi_barat">
													<label class="custom-file-label" for="exampleInputFile">Choose file</label>
												</div>
											</div>

										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">

											<label for="exampleInputFile">Gambar Sisi Timur</label>
											<div class="input-group">
												<div class="custom-file">
													<input type="file" accept=".jpg, .jpeg, .png" class="custom-file-input" id="file_gambar_sisi_timur" name="file_gambar_sisi_timur">
													<label class="custom-file-label" for="exampleInputFile">Choose file</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Ajukan Pemohonan</button>
							</form>
						</div>
					</div>
					<!-- /.card -->
				</div>
			</div>

		</div>
	</section>

	</div>

	</div>
	</section><!-- End Contact Section -->

</main><!-- End #main -->

<script type="text/javascript">

</script>