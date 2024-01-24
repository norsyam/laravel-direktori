-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb-laravel
-- Generation Time: Jan 24, 2024 at 06:17 AM
-- Server version: 10.6.16-MariaDB-1:10.6.16+maria~ubu2004
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahagian`
--

CREATE TABLE `bahagian` (
  `id` int(11) NOT NULL,
  `nama_bahagian` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bahagian`
--

INSERT INTO `bahagian` (`id`, `nama_bahagian`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pengurusan Atasan', '2024-01-23 01:44:45', NULL, NULL),
(2, 'Bahagian Promosi (BPROMOSI)', '2024-01-23 01:44:45', NULL, NULL),
(3, 'Bahagian Pensijilan Kompetensi (BPK)', '2024-01-23 01:44:45', NULL, NULL),
(4, 'Bahagian Pentauliahan (BPT)', '2024-01-23 01:44:45', NULL, NULL),
(5, 'Bahagian Standard Pekerjaan dan Kurikulum TVET (BSPKTVET)', '2024-01-23 01:44:45', NULL, NULL),
(6, 'Bahagian Hubungan Industri dan Kerjasama Strategik (BBHIKS)', '2024-01-23 01:44:45', NULL, NULL),
(7, 'Bahagian Inspektorat (BI)', '2024-01-23 01:44:45', NULL, NULL),
(8, 'Bahagian Perancangan, Pembangunan dan Antarabangsa (PPA)', '2024-01-23 01:44:45', NULL, NULL),
(9, 'Bahagian Kewangan, Pentadbiran dan Sumber Manusia (KPSM)', '2024-01-23 01:44:45', NULL, NULL),
(10, 'ADTEC SHAH ALAM', '2024-01-23 03:54:59', '2024-01-23 03:54:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `direktori`
--

CREATE TABLE `direktori` (
  `id` int(11) NOT NULL,
  `id_personel` int(11) NOT NULL,
  `id_bahagian` int(11) NOT NULL,
  `id_jawatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `direktori`
--

INSERT INTO `direktori` (`id`, `id_personel`, `id_bahagian`, `id_jawatan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 10, 13, '2024-01-22 07:22:23', '2024-01-24 03:10:59', NULL),
(2, 2, 5, 12, '2024-01-22 07:24:22', NULL, NULL),
(3, 3, 4, 8, '2024-01-22 07:36:31', NULL, NULL),
(4, 4, 8, 3, '2024-01-22 07:37:05', NULL, NULL),
(5, 5, 2, 8, '2024-01-22 07:37:34', NULL, NULL),
(6, 6, 8, 12, '2024-01-22 07:38:02', NULL, NULL),
(7, 3, 1, 2, '2024-01-24 01:35:05', '2024-01-24 01:35:05', NULL),
(8, 1, 1, 1, '2024-01-24 02:54:13', '2024-01-24 02:54:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawatan`
--

CREATE TABLE `jawatan` (
  `id` int(11) NOT NULL,
  `nama_jawatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jawatan`
--

INSERT INTO `jawatan` (`id`, `nama_jawatan`) VALUES
(1, 'Ketua Pengarah'),
(2, 'Timbalan Ketua Pengarah (Operasi)'),
(3, 'Pegawai Teknologi Maklumat'),
(4, 'Pegawai Undang-undang'),
(5, 'Setiausaha Pejabat'),
(6, 'Juruteknik Komputer (K)'),
(7, 'Penolong Pegawai Teknologi Maklumat (K)'),
(8, 'Penolong Pegawai Teknologi Maklumat'),
(9, 'Pembantu Tadbir (P/O)'),
(10, 'Penolong Pegawai Tadbir (K)'),
(11, 'Penolong Pegawai Latihan Vokasional'),
(12, 'Pegawai Latihan Vokasional'),
(13, 'Gred Utama PLV ');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personel`
--

CREATE TABLE `personel` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `no_kp` varchar(12) NOT NULL,
  `jantina` varchar(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telefon` varchar(14) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personel`
--

INSERT INTO `personel` (`id`, `nama`, `no_kp`, `jantina`, `email`, `no_telefon`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Norshymah', '830514075388', 'P', 'shy_mah@yahoo.com', '01129569018', '2024-01-22 07:08:08', NULL, NULL),
(2, 'Ubaidullah', '831126066883', 'L', 'ubai83@yahoo.com', '0192067207', '2024-01-22 07:10:00', NULL, NULL),
(3, 'Noorazah', '761104025728', 'P', 'noorazah@mohr.gov.my', '01129569017', '2024-01-22 07:27:13', NULL, NULL),
(4, 'Nurul Saniah', '840819105524', 'P', 'nurulsaniah@mohr.gov.my', '0192811908', '2024-01-22 07:28:25', NULL, NULL),
(5, 'Norazlina', '770711035834', 'P', 'norazlina@mohr.gov.my', '0135151359', '2024-01-22 07:29:32', NULL, NULL),
(6, 'SHAH RIDHWAN BIN AHMAD', '851119105973', 'L', 'ridhwan@mohr.gov.my', '0193490198', '2024-01-22 07:31:39', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'NORHISYAM DASUKI', 'ir.syam@gmail.com', NULL, '$2y$12$YN1GlWCLgLoVZVHn9z./d.irzjeQbtwZWKldVf5atIH9kQ2DylViq', NULL, '2024-01-22 04:29:17', '2024-01-22 04:29:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahagian`
--
ALTER TABLE `bahagian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `direktori`
--
ALTER TABLE `direktori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jawatan`
--
ALTER TABLE `jawatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahagian`
--
ALTER TABLE `bahagian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `direktori`
--
ALTER TABLE `direktori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawatan`
--
ALTER TABLE `jawatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personel`
--
ALTER TABLE `personel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
