-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2023 at 04:59 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitaru_lamtim`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kkpr_berusaha`
--

CREATE TABLE `tb_kkpr_berusaha` (
  `id` int(11) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `no_hp` varchar(225) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `alamat_pemohon` varchar(225) NOT NULL,
  `fungsi_bangunan` varchar(225) NOT NULL,
  `nib` bigint(16) NOT NULL,
  `nama_kegiatan` varchar(225) NOT NULL,
  `kbli` bigint(16) NOT NULL,
  `kbli_judul` varchar(225) NOT NULL,
  `skala_usaha` varchar(225) DEFAULT NULL,
  `alamat_kegiatan` varchar(225) NOT NULL,
  `kecamatan` varchar(225) NOT NULL,
  `kelurahan` varchar(225) NOT NULL,
  `latittude_longitude` varchar(225) NOT NULL,
  `luas_tanah_dimohon` int(225) NOT NULL,
  `luas_tanah_sesuai_bukti` int(225) NOT NULL,
  `luas_bangunan` int(225) NOT NULL,
  `status_tanah` varchar(225) NOT NULL,
  `penggunaan_tanah_sekarang` varchar(225) NOT NULL,
  `rencana_jumlah_lantai` int(11) NOT NULL,
  `rencana_tinggi_bangunan` int(225) NOT NULL,
  `rencana_total_luas_lantai` int(225) NOT NULL,
  `file_permohonan_bermaterai` varchar(225) NOT NULL,
  `file_ktp_npwp` varchar(225) NOT NULL,
  `file_nib` varchar(225) NOT NULL,
  `file_bukti_penguasaan_tanah` varchar(225) NOT NULL,
  `file_surat_keterangan_waris` varchar(225) DEFAULT NULL,
  `file_dokumen_perjanjian_sewa` varchar(225) DEFAULT NULL,
  `file_dokumen_akta_jual_beli` varchar(225) NOT NULL,
  `file_surat_pernyataan_pemohon` varchar(225) NOT NULL,
  `file_polygon_koordinat` varchar(225) NOT NULL,
  `file_rencana_penggunaan_air` varchar(225) NOT NULL,
  `file_surat_kuasa` varchar(225) DEFAULT NULL,
  `file_dokumen_perizinan_sebelumnya` varchar(225) NOT NULL,
  `file_gambar_sisi_utara` varchar(225) NOT NULL,
  `file_gambar_sisi_selatan` varchar(225) NOT NULL,
  `file_gambar_sisi_barat` varchar(225) NOT NULL,
  `file_gambar_sisi_timur` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `tgl_disetujui` int(225) NOT NULL,
  `validator` varchar(225) NOT NULL,
  `no_dokumen` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kkpr_nonberusaha`
--

CREATE TABLE `tb_kkpr_nonberusaha` (
  `id` int(11) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `no_hp` varchar(225) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `alamat_pemohon` varchar(225) NOT NULL,
  `fungsi_bangunan` varchar(225) NOT NULL,
  `alamat_kegiatan` varchar(225) NOT NULL,
  `kecamatan` varchar(225) NOT NULL,
  `kelurahan` varchar(225) NOT NULL,
  `latittude_longitude` varchar(225) NOT NULL,
  `luas_tanah_dimohon` int(225) NOT NULL,
  `luas_tanah_sesuai_bukti` int(225) NOT NULL,
  `luas_bangunan` int(225) NOT NULL,
  `status_tanah` varchar(225) NOT NULL,
  `penggunaan_tanah_sekarang` varchar(225) NOT NULL,
  `rencana_jumlah_lantai` int(11) NOT NULL,
  `rencana_tinggi_bangunan` int(225) NOT NULL,
  `rencana_total_luas_lantai` int(225) NOT NULL,
  `file_permohonan_bermaterai` varchar(225) NOT NULL,
  `file_ktp_pemohon` varchar(225) NOT NULL,
  `file_bukti_penguasaan_tanah` varchar(225) NOT NULL,
  `file_surat_keterangan_waris` varchar(225) DEFAULT NULL,
  `file_dokumen_perjanjian_sewa` varchar(225) DEFAULT NULL,
  `file_dokumen_akta_jual_beli` varchar(225) NOT NULL,
  `file_surat_pernyataan_pemohon` varchar(225) NOT NULL,
  `file_polygon_koordinat` varchar(225) NOT NULL,
  `file_rencana_penggunaan_air` varchar(225) NOT NULL,
  `file_dokumen_perizinan_sebelumnya` varchar(225) NOT NULL,
  `file_kepentingan_umum` varchar(225) NOT NULL,
  `file_gambar_sisi_utara` varchar(225) NOT NULL,
  `file_gambar_sisi_selatan` varchar(225) NOT NULL,
  `file_gambar_sisi_barat` varchar(225) NOT NULL,
  `file_gambar_sisi_timur` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `tgl_disetujui` int(225) DEFAULT NULL,
  `validator` varchar(225) DEFAULT NULL,
  `no_dokumen` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `pekerjaan` varchar(225) DEFAULT NULL,
  `no_hp` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL,
  `status_berusaha` varchar(225) DEFAULT NULL,
  `alasan_berusaha` varchar(225) DEFAULT NULL,
  `status_nonberusaha` varchar(225) DEFAULT NULL,
  `alasan_nonberusaha` varchar(225) DEFAULT NULL,
  `no_dokumen_berusaha` varchar(225) DEFAULT NULL,
  `no_dokumen_nonberusaha` varchar(225) DEFAULT NULL,
  `is_active` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nik`, `nama`, `email`, `password`, `pekerjaan`, `no_hp`, `role`, `status_berusaha`, `alasan_berusaha`, `status_nonberusaha`, `alasan_nonberusaha`, `no_dokumen_berusaha`, `no_dokumen_nonberusaha`, `is_active`) VALUES
(1, 0, 'Administrator', 'admin@gmail.com', '$2y$10$GoV6W9GwsPtTSOEYd.pKXesNI6wSSXMjsCYKh7/L40PFN0U4.c5vy', NULL, '', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_token`
--

CREATE TABLE `tb_user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `token` varchar(225) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kkpr_berusaha`
--
ALTER TABLE `tb_kkpr_berusaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kkpr_nonberusaha`
--
ALTER TABLE `tb_kkpr_nonberusaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user_token`
--
ALTER TABLE `tb_user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kkpr_berusaha`
--
ALTER TABLE `tb_kkpr_berusaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kkpr_nonberusaha`
--
ALTER TABLE `tb_kkpr_nonberusaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user_token`
--
ALTER TABLE `tb_user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
