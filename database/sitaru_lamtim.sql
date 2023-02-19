-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 03:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

--
-- Dumping data for table `tb_kkpr_berusaha`
--

INSERT INTO `tb_kkpr_berusaha` (`id`, `nik`, `nama`, `tanggal`, `no_hp`, `pekerjaan`, `alamat_pemohon`, `fungsi_bangunan`, `nib`, `nama_kegiatan`, `kbli`, `kbli_judul`, `skala_usaha`, `alamat_kegiatan`, `kecamatan`, `kelurahan`, `latittude_longitude`, `luas_tanah_dimohon`, `luas_tanah_sesuai_bukti`, `luas_bangunan`, `status_tanah`, `penggunaan_tanah_sekarang`, `rencana_jumlah_lantai`, `rencana_tinggi_bangunan`, `rencana_total_luas_lantai`, `file_permohonan_bermaterai`, `file_ktp_npwp`, `file_nib`, `file_bukti_penguasaan_tanah`, `file_surat_keterangan_waris`, `file_dokumen_perjanjian_sewa`, `file_dokumen_akta_jual_beli`, `file_surat_pernyataan_pemohon`, `file_polygon_koordinat`, `file_rencana_penggunaan_air`, `file_surat_kuasa`, `file_dokumen_perizinan_sebelumnya`, `file_gambar_sisi_utara`, `file_gambar_sisi_selatan`, `file_gambar_sisi_barat`, `file_gambar_sisi_timur`, `status`, `tgl_disetujui`, `validator`, `no_dokumen`) VALUES
(1, 1871070706040002, 'MUHAMMAD RAIHAN', 1675837840, '08127346920', 'mahasiswa', 'jnasdjkansk', 'kjasdkjan', 1231, 'nkjasnfdsakj', 0, 'ndkajsndkjas', 'Mikro', 'njkasndkasnkj', 'Jabung', 'Asahan', '-5.076753967081759, 105.52949786479253', 123, 123, 132, 'SHM', 'naksjdnkaj', 2, 13, 200, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Disetujui', 0, '', ''),
(3, 1871070706040002, 'MUHAMMAD RAIHAN', 1675901601, '08127346920', 'mahasiswa', 'adasdasd', 'asdasda', 1231124, 'Party part time', 80980, 'ankjsnkans', 'Mikro', 'asasd', 'Jabung', 'Gunung Mekar', '-5.076753967081759, 105.52949786479253', 120, 1234, 1241, 'SHM', 'sdfsdf', 3, 121, 311, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Disetujui', 1675908812, 'admin@gmail.com', 'KKPR-B-0902-01');

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

--
-- Dumping data for table `tb_kkpr_nonberusaha`
--

INSERT INTO `tb_kkpr_nonberusaha` (`id`, `nik`, `nama`, `tanggal`, `no_hp`, `pekerjaan`, `alamat_pemohon`, `fungsi_bangunan`, `alamat_kegiatan`, `kecamatan`, `kelurahan`, `latittude_longitude`, `luas_tanah_dimohon`, `luas_tanah_sesuai_bukti`, `luas_bangunan`, `status_tanah`, `penggunaan_tanah_sekarang`, `rencana_jumlah_lantai`, `rencana_tinggi_bangunan`, `rencana_total_luas_lantai`, `file_permohonan_bermaterai`, `file_ktp_pemohon`, `file_bukti_penguasaan_tanah`, `file_surat_keterangan_waris`, `file_dokumen_perjanjian_sewa`, `file_dokumen_akta_jual_beli`, `file_surat_pernyataan_pemohon`, `file_polygon_koordinat`, `file_rencana_penggunaan_air`, `file_dokumen_perizinan_sebelumnya`, `file_kepentingan_umum`, `file_gambar_sisi_utara`, `file_gambar_sisi_selatan`, `file_gambar_sisi_barat`, `file_gambar_sisi_timur`, `status`, `tgl_disetujui`, `validator`, `no_dokumen`) VALUES
(1, 1871070706040002, 'MUHAMMAD RAIHAN', 1675838125, '08127346920', 'mahasiswa', 'ansdkjankknasdkjnsajnjk', 'naksjndkaj', 'kjandkja', 'Sukadana', 'Putra Aji II', '-5.076753967081759, 105.52949786479253', 312, 121, 12321, 'SHM', 'jasid', 12, 43, 150, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Disetujui', 1675838175, 'admin@gmail.com', 'wakwaw'),
(3, 1871070706040002, 'MUHAMMAD RAIHAN', 1675900193, '08127346920', 'mahasiswa', 'asdasdkja', 'asdasjndkjasnk', 'nkajsdnkjasndkja', 'Jabung', 'Gunung Sugih Kecil', '-5.076753967081759, 105.52949786479253', 1241, 312, 123, 'AJB + Peta Bidang', 'asda', 21, 213, 230, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Tunggu', NULL, NULL, NULL);

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
(1, 0, 'Administrator', 'admin@gmail.com', '$2y$10$GoV6W9GwsPtTSOEYd.pKXesNI6wSSXMjsCYKh7/L40PFN0U4.c5vy', NULL, '', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 1871070706040002, 'MUHAMMAD RAIHAN', 'rafifarhan@student.com', '$2y$10$XnkKKjsmpr3WyXNCUVM4XObqpAX1epEpqlyEAfiqbYY0bfOWiTLCC', 'mahasiswa', '08127346920', 'Pemohon', 'Disetujui', '', 'Tunggu', '', 'KKPR-B-0902-01', '', 1),
(3, 12313123, 'adkjasnkdjakj', 'wakwaw@gmail.com', '$2y$10$cqMqj1NUJKmV7A/wGCPHveRwBNQs9WaY3qpbP9gW1QwA5Ffa7N1UC', 'nakjsdnak', '1i2091024', 'Pemohon', 'Disetujui', '', 'Disetujui', '', 'asda', 'acc', 1),
(4, 34567890, 'admin2', 'brother@gmail.com', '$2y$10$w6s3nNp1DU5Bv5Ftpn9rR.3AHLkgyPxIgohqbnXsjvCf0gGMTO6WW', 'adminlah', '456789012', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kkpr_nonberusaha`
--
ALTER TABLE `tb_kkpr_nonberusaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user_token`
--
ALTER TABLE `tb_user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
