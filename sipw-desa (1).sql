-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 05:21 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipw-desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_22_052139_create_surat_sktms_table', 1),
(6, '2021_09_22_071419_create_surat_skds_table', 1),
(7, '2021_09_22_083454_create_surat_skps_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('bayusap80@gmail.com', '$2y$10$HnMpMYHS6o6YuVqNWN7GZOwGsEiBJU0Kl4z0wS6AV/qwripNfRVUu', '2023-10-16 02:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat_skd`
--

CREATE TABLE `surat_skd` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Ajukan','Diterima','Ditolak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Ajukan',
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_skd`
--

INSERT INTO `surat_skd` (`id`, `user_id`, `name`, `nik`, `jk`, `tempatlahir`, `tanggallahir`, `agama`, `pekerjaan`, `alamat`, `keterangan`, `status`, `file`, `created_at`, `updated_at`) VALUES
(1, 7, 'Dyffa', '9999999999999999', 'Perempuan', 'Madiun', '2001-10-20', 'Islam', 'Teller', 'Jl Gajah Mada Madiun', 'test', 'Diterima', NULL, '2023-10-18 16:36:24', '2023-10-18 16:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `surat_skpp`
--

CREATE TABLE `surat_skpp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statuspernikahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatasal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pindah_kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_pindah_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_pindah_kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_pindah_provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Ajukan','Diterima','Ditolak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Ajukan',
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_skpp`
--

INSERT INTO `surat_skpp` (`id`, `user_id`, `name`, `nik`, `jk`, `tempatlahir`, `tanggallahir`, `agama`, `pekerjaan`, `statuspernikahan`, `alamatasal`, `alamat_pindah_kelurahan`, `alamat_pindah_kecamatan`, `alamat_pindah_kabupaten`, `alamat_pindah_provinsi`, `status`, `file`, `created_at`, `updated_at`) VALUES
(1, 7, 'Dyffa', '9999999999999999', 'Perempuan', 'Madiun', '2001-10-20', 'Islam', 'Teller', 'Belum Menikah', 'Jl Gajah Mada Madiun', 'Demangan', 'Siman', 'Ponorogo', 'Jawa Timur', 'Diterima', NULL, '2023-10-18 16:40:52', '2023-10-18 16:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `surat_sktm`
--

CREATE TABLE `surat_sktm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statuspernikahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Ajukan','Diterima','Ditolak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Ajukan',
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_sktm`
--

INSERT INTO `surat_sktm` (`id`, `user_id`, `name`, `nik`, `jk`, `tempatlahir`, `tanggallahir`, `agama`, `pekerjaan`, `statuspernikahan`, `alamat`, `keterangan`, `status`, `file`, `created_at`, `updated_at`) VALUES
(1, 5, 'Si Anjay', '1234123412341234', 'Perempuan', 'Magetan', '2001-12-21', 'Islam', 'Mahasiswi', 'Menikah', 'Jl raya pulung kodepos63472', 'test', 'Diterima', NULL, '2023-10-18 15:40:04', '2023-10-18 15:40:18'),
(2, 5, 'Si Anjay', '1234123412341234', 'Perempuan', 'Magetan', '2001-12-21', 'Islam', 'Mahasiswi', 'Menikah', 'Jl raya pulung kodepos63472', 'test', 'Ditolak', NULL, '2023-10-18 15:48:40', '2023-10-18 16:36:11'),
(3, 1, 'Wahyu Saputra', '1234567891234567', 'Laki-laki', 'Ponorogo', '2001-02-20', 'Islam', 'Mahasiswa', 'Menikah', 'Jl.Margo Utomo no.17 Demangan siman Ponorogo', 'test', 'Ditolak', NULL, '2023-10-18 15:51:10', '2023-10-18 16:36:08'),
(4, 7, 'Dyffa', '9999999999999999', 'Perempuan', 'Madiun', '2001-10-20', 'Islam', 'Teller', 'Belum Menikah', 'Jl Gajah Mada Madiun', 'test', 'Diterima', NULL, '2023-10-18 16:11:11', '2023-10-18 16:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pernikahan` enum('Menikah','Belum Menikah') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dukuh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Admin','RT','User') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pekerjaan`, `status_pernikahan`, `alamat`, `dukuh`, `rt`, `rw`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wahyu Saputra', '350267637637', '', '', NULL, '', '', '', '', '', 0, 0, '', NULL, '$2y$10$Iqz4tlvtzv4/fBjDUllYLO/j5T3k50MPTna31CWuY4AAf81ygXvBC', 'User', NULL, '2023-10-13 16:21:46', '2023-10-13 16:21:46'),
(4, 'Admin', '123456789', 'Laki-laki', 'Ponorogo', '2001-10-15', 'Islam', 'Mahasiswa', 'Menikah', 'Jl.Margo Utomo', '', 0, 0, 'admin@gmail.com', NULL, '$2y$10$a//grDMbmCvLDhUyvbsXeOqSOZESQ8jJw.If.IE9yHoZ/KYUd.g6e', 'Admin', NULL, '2023-10-14 11:14:21', '2023-10-14 11:14:21'),
(5, 'Si Anjay', '1234123412341234', 'Perempuan', 'Magetan', '2001-12-21', 'Islam', 'Mahasiswi', 'Menikah', 'Jl raya pulung kodepos63472', 'Purworejo', 1, 1, 'wahyukekae@gmail.com', NULL, '$2y$10$3ZKrf/7XrcGHS8Mm9k9Gv.L3Eo5CyJQGHYvBnUKP433re.xMW3kF6', 'RT', '7os0dqrkhxYwkvzYJjNGb5FEcUroImaJ9N0bFbeksFrqHXJHwgK0GK8Kto9f', '2023-10-15 21:10:19', '2023-10-16 18:09:54'),
(6, 'John Doe Doe', '1234567812345678', 'Laki-laki', 'ponorogo', '2001-12-12', 'islam', 'adfadfaf', 'Belum Menikah', 'Jl. Lorem Ipsum, No. 14', 'Krajan', 1, 1, 'bayusap80@gmail.com', NULL, '$2y$10$4DgGaqaIaKwR6fOseZHo9ORKoFxswyOxm4dmlNymHCznbGFnsNUDu', 'User', 'dV2Zz2feRPfdv6YuMvSOA0VZ3s4xe3NqloP63JhRFL84zBPChxmaW63ku3mH', '2023-10-16 00:10:43', '2023-10-16 00:50:06'),
(7, 'Dyffa', '9999999999999999', 'Perempuan', 'Madiun', '2001-10-20', 'Islam', 'Teller', 'Belum Menikah', 'Jl Gajah Mada Madiun', 'Winongo', 1, 2, 'dyffa@gmail.com', NULL, '$2y$10$1gCUf7KWFqCBEG9a0X.OkeYzr8xPbS9eMV50WzgOx7saq2bNsubBi', 'Admin', NULL, '2023-10-18 16:08:37', '2023-10-18 16:08:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `surat_skd`
--
ALTER TABLE `surat_skd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_skd_user_id_foreign` (`user_id`);

--
-- Indexes for table `surat_skpp`
--
ALTER TABLE `surat_skpp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_skpp_user_id_foreign` (`user_id`);

--
-- Indexes for table `surat_sktm`
--
ALTER TABLE `surat_sktm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_sktm_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_skd`
--
ALTER TABLE `surat_skd`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat_skpp`
--
ALTER TABLE `surat_skpp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat_sktm`
--
ALTER TABLE `surat_sktm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surat_skd`
--
ALTER TABLE `surat_skd`
  ADD CONSTRAINT `surat_skd_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `surat_skpp`
--
ALTER TABLE `surat_skpp`
  ADD CONSTRAINT `surat_skpp_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `surat_sktm`
--
ALTER TABLE `surat_sktm`
  ADD CONSTRAINT `surat_sktm_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
