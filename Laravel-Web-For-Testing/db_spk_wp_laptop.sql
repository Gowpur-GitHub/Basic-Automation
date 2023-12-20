-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 10:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkpemilihanmonitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kodeAlternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaAlternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatifs`
--

INSERT INTO `alternatifs` (`id`, `user_id`, `kodeAlternatif`, `slug`, `namaAlternatif`, `created_at`, `updated_at`) VALUES
(10, 41, '1', 'fcdezq6y', 'LENOVO IDEAPAD SLIM 1 Athlon Silver 7120U', '2023-12-18 03:57:52', '2023-12-18 06:27:00'),
(11, 41, '2', '9svcbklu', 'LENOVO IDEAPAD SLIM 1 Celeron N4020', '2023-12-18 04:13:28', '2023-12-18 06:27:21'),
(12, 41, '3', 'tlxocyxa', 'LENOVO IDEAPAD GAMING 3 Ryzen 5 5600H', '2023-12-18 04:13:37', '2023-12-18 06:27:46'),
(13, 41, '4', 'rh4kpkkw', 'ASUS VIVOBOOK 14X M1403QA Ryzen 5 5600H', '2023-12-18 04:13:47', '2023-12-18 06:28:04'),
(14, 41, '5', '5n7m04gx', 'ACER NITRO 5 AN515 Core i5 12500H', '2023-12-18 04:13:58', '2023-12-18 06:28:44'),
(15, 41, '6', 'upqy2vyr', 'Lenovo V14 G3 Core i3 1215U', '2023-12-18 04:14:08', '2023-12-18 06:29:14'),
(16, 41, '7', 'bsfixvuj', 'LENOVO IDEAPAD SLIM 1 Ryzen 3 7320U', '2023-12-18 04:14:37', '2023-12-18 06:29:31'),
(17, 41, '8', 'pkosrcbe', 'ACER Aspire Lite 14 AL14-31P Intel N100', '2023-12-18 04:14:46', '2023-12-18 06:29:59'),
(18, 41, '9', 'bo8bc8uv', 'HP 14S DQ3109TU Celeron N4500', '2023-12-18 04:15:13', '2023-12-18 06:30:16'),
(19, 41, '10', 'xu4wdivl', 'ASUS VIVOBOOK A1400EA Pentium Gold 7505', '2023-12-18 04:15:25', '2023-12-18 06:30:36');

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
-- Table structure for table `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kodeKriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaKriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` int(11) NOT NULL,
  `jenis` enum('benefit','cost') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'benefit',
  `w_normalisasi` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriterias`
--

INSERT INTO `kriterias` (`id`, `user_id`, `kodeKriteria`, `slug`, `namaKriteria`, `bobot`, `jenis`, `w_normalisasi`, `created_at`, `updated_at`) VALUES
(281, 41, 'C1', 'Y7pon9T7', 'Harga', 5, 'cost', -0.22727272727273, NULL, '2023-12-18 04:15:30'),
(282, 41, 'C2', 'wcCwbqlO', 'RAM', 3, 'benefit', 0.13636363636364, NULL, '2023-12-18 04:15:30'),
(283, 41, 'C3', 'E5jxMcdi', 'SSD', 3, 'benefit', 0.13636363636364, NULL, '2023-12-18 04:15:30'),
(284, 41, 'C4', 'Wvo0OgxZ', 'PROCESSOR', 4, 'benefit', 0.18181818181818, NULL, '2023-12-18 04:15:30'),
(285, 41, 'C5', 'fvnA9hO5', 'VGA', 4, 'benefit', 0.18181818181818, NULL, '2023-12-18 04:15:30'),
(286, 41, 'C6', '9BIvF56m', 'DISPLAY PANEL', 3, 'benefit', 0.13636363636364, NULL, '2023-12-18 04:15:30');

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
(5, '2023_01_10_114407_create_kriterias_table', 1),
(6, '2023_01_11_080703_create_sub_kriterias_table', 1),
(7, '2023_01_11_120256_create_alternatifs_table', 1),
(8, '2023_01_11_122936_create_penilaians_table', 1),
(9, '2023_01_13_041024_create_sub_kriteria1s_table', 1),
(10, '2023_01_13_041057_create_sub_kriteria2s_table', 1),
(11, '2023_01_13_041128_create_sub_kriteria3s_table', 1),
(12, '2023_01_13_041155_create_sub_kriteria4s_table', 1),
(13, '2023_01_13_041213_create_sub_kriteria5s_table', 1),
(14, '2023_01_13_041236_create_sub_kriteria6s_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaians`
--

CREATE TABLE `penilaians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `alternatif_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C1x` int(11) NOT NULL,
  `C2x` int(11) NOT NULL,
  `C3x` int(11) NOT NULL,
  `C4x` int(11) NOT NULL,
  `C5x` int(11) NOT NULL,
  `C6x` int(11) NOT NULL,
  `C1_val` double DEFAULT NULL,
  `C2_val` double DEFAULT NULL,
  `C3_val` double DEFAULT NULL,
  `C4_val` double DEFAULT NULL,
  `C5_val` double DEFAULT NULL,
  `C6_val` double DEFAULT NULL,
  `nilai_s` double DEFAULT NULL,
  `nilai_v` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penilaians`
--

INSERT INTO `penilaians` (`id`, `user_id`, `alternatif_id`, `slug`, `C1x`, `C2x`, `C3x`, `C4x`, `C5x`, `C6x`, `C1_val`, `C2_val`, `C3_val`, `C4_val`, `C5_val`, `C6_val`, `nilai_s`, `nilai_v`, `created_at`, `updated_at`) VALUES
(5, 41, 10, 'yz9kmsdt', 4, 3, 2, 2, 2, 2, 0.72974005284072, 1.1616144057277, 1.0991312225592, 1.1343125221955, 1.1343125221955, 1.0991312225592, 1.3176337663795, 0.074282206051065, '2023-12-18 05:28:11', '2023-12-18 06:50:48'),
(6, 41, 11, 'kkiwncfp', 5, 3, 2, 2, 1, 2, 0.69365445652161, 1.1616144057277, 1.0991312225592, 1.1343125221955, 1, 1.0991312225592, 1.1041726518314, 0.06224823811601, '2023-12-18 06:24:04', '2023-12-18 06:50:48'),
(7, 41, 12, 'bymwvifs', 1, 4, 3, 4, 4, 5, 1, 1.2080894444044, 1.1616144057277, 1.2866648980094, 1.2866648980094, 1.2454149981745, 2.8933840059776, 0.16311584630033, '2023-12-18 06:42:03', '2023-12-18 06:50:48'),
(8, 41, 13, 'xakcxq8a', 3, 4, 3, 4, 3, 4, 0.77904644696192, 1.2080894444044, 1.1616144057277, 1.2866648980094, 1.2210946234987, 1.2080894444044, 2.0750964715878, 0.11698451239745, '2023-12-18 06:44:54', '2023-12-18 06:50:48'),
(9, 41, 14, 'bzd1dyba', 1, 4, 3, 5, 5, 5, 1, 1.2080894444044, 1.1616144057277, 1.3399403191028, 1.3399403191028, 1.2454149981745, 3.1379504472777, 0.17690339125354, '2023-12-18 06:45:42', '2023-12-18 06:50:48'),
(10, 41, 15, 'fue6cbpz', 4, 3, 3, 4, 3, 3, 0.72974005284072, 1.1616144057277, 1.1616144057277, 1.2866648980094, 1.2210946234987, 1.1616144057277, 1.7970862596985, 0.10131155958553, '2023-12-18 06:47:28', '2023-12-18 06:50:48'),
(11, 41, 16, 'imfcibvs', 4, 3, 3, 3, 2, 3, 0.72974005284072, 1.1616144057277, 1.1616144057277, 1.2210946234987, 1.1343125221955, 1.1616144057277, 1.5842955310237, 0.089315384960609, '2023-12-18 06:48:22', '2023-12-18 06:50:48'),
(12, 41, 17, 'u0vlubkw', 4, 3, 3, 2, 1, 4, 0.72974005284072, 1.1616144057277, 1.1616144057277, 1.1343125221955, 1, 1.2080894444044, 1.3493480275941, 0.07607011202798, '2023-12-18 06:49:17', '2023-12-18 06:50:48'),
(13, 41, 18, 'ytobjdm0', 4, 3, 2, 2, 1, 2, 0.72974005284072, 1.1616144057277, 1.0991312225592, 1.1343125221955, 1, 1.0991312225592, 1.1616144057277, 0.065486543256432, '2023-12-18 06:49:45', '2023-12-18 06:50:48'),
(14, 41, 19, 'ab87vw8w', 4, 2, 2, 2, 2, 3, 0.72974005284072, 1.0991312225592, 1.0991312225592, 1.1343125221955, 1.1343125221955, 1.1616144057277, 1.3176337663795, 0.074282206051065, '2023-12-18 06:50:22', '2023-12-18 06:50:48');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria1s`
--

CREATE TABLE `sub_kriteria1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ukuranLayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nUkuranLayar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kriteria1s`
--

INSERT INTO `sub_kriteria1s` (`id`, `user_id`, `ukuranLayar`, `slug`, `nUkuranLayar`, `created_at`, `updated_at`) VALUES
(201, 41, '2 GB', '5qlp5qmc', 1, NULL, '2023-12-18 03:07:47'),
(202, 41, '4 GB', 'wu7wguk2', 2, NULL, '2023-12-18 03:07:56'),
(203, 41, '8 GB', 'lxikpbrb', 3, NULL, '2023-12-18 03:08:06'),
(204, 41, '16 GB', 'wrbksx7c', 4, NULL, '2023-12-18 03:08:13'),
(205, 41, '32 GB', 'wyyltbbh', 5, NULL, '2023-12-18 03:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria2s`
--

CREATE TABLE `sub_kriteria2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `resolusiLayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nResolusiLayar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kriteria2s`
--

INSERT INTO `sub_kriteria2s` (`id`, `user_id`, `resolusiLayar`, `slug`, `nResolusiLayar`, `created_at`, `updated_at`) VALUES
(201, 41, 'NVME 128 GB', '5ypnzmjm', 1, NULL, '2023-12-18 03:51:40'),
(202, 41, 'NVME 256 GB', 'hm2ymzqt', 2, NULL, '2023-12-18 03:51:50'),
(203, 41, 'NVME 512 GB', 'h3koazgl', 3, NULL, '2023-12-18 03:52:01'),
(204, 41, 'NVME 1 TB', 'vio8zuvw', 4, NULL, '2023-12-18 03:52:11'),
(205, 41, 'NVME 2 TB', 'bpph6ig2', 5, NULL, '2023-12-18 03:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria3s`
--

CREATE TABLE `sub_kriteria3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `teknologiPanel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nTeknologiPanel` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kriteria3s`
--

INSERT INTO `sub_kriteria3s` (`id`, `user_id`, `teknologiPanel`, `slug`, `nTeknologiPanel`, `created_at`, `updated_at`) VALUES
(201, 41, 'Sangat Rendah', '96f8sby9', 1, NULL, '2023-12-18 03:52:49'),
(202, 41, 'Rendah', '0famczl1', 2, NULL, '2023-12-18 03:52:56'),
(203, 41, 'Sedang', 'pyler5qt', 3, NULL, '2023-12-18 03:53:02'),
(204, 41, 'Tinggi', 'ayvgmryq', 4, NULL, '2023-12-18 03:53:17'),
(205, 41, 'Sangat Tinggi', '1itxtquy', 5, NULL, '2023-12-18 03:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria4s`
--

CREATE TABLE `sub_kriteria4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `refreshRate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nRefreshRate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kriteria4s`
--

INSERT INTO `sub_kriteria4s` (`id`, `user_id`, `refreshRate`, `slug`, `nRefreshRate`, `created_at`, `updated_at`) VALUES
(201, 41, 'Sangat Rendah', 'enr1wcav', 1, NULL, '2023-12-18 03:53:39'),
(202, 41, 'Rendah', '8bghe7sm', 2, NULL, '2023-12-18 03:53:47'),
(203, 41, 'Sedang', 'ddwotqfe', 3, NULL, '2023-12-18 03:53:57'),
(204, 41, 'Tinggi', 'ifqjxno5', 4, NULL, '2023-12-18 03:54:04'),
(205, 41, 'Sangat Tinggi', '8vvudett', 5, NULL, '2023-12-18 03:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria5s`
--

CREATE TABLE `sub_kriteria5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `responseTime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nResponseTime` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kriteria5s`
--

INSERT INTO `sub_kriteria5s` (`id`, `user_id`, `responseTime`, `slug`, `nResponseTime`, `created_at`, `updated_at`) VALUES
(201, 41, 'Sangat Rendah', 'uh0bjfg9', 1, NULL, '2023-12-18 03:54:27'),
(202, 41, 'Rendah', '7wnk59jw', 2, NULL, '2023-12-18 03:54:36'),
(203, 41, 'Sedang', 'cwcmht4u', 3, NULL, '2023-12-18 03:54:54'),
(204, 41, 'Tinggi', 'car9qodz', 4, NULL, '2023-12-18 03:55:03'),
(205, 41, 'Sangat Tinggi', 'szpz4xjl', 5, NULL, '2023-12-18 03:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriterias`
--

CREATE TABLE `sub_kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nHarga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kriterias`
--

INSERT INTO `sub_kriterias` (`id`, `user_id`, `harga`, `slug`, `nHarga`, `created_at`, `updated_at`) VALUES
(201, 41, 'Rp 10 juta - Rp 12,5 juta', '7wwbi8d9', 1, NULL, '2023-12-18 03:03:46'),
(202, 41, 'Rp 9 juta - Rp 10 juta', '8efn3yft', 2, NULL, '2023-12-18 03:04:19'),
(203, 41, 'Rp 7 juta - Rp 9 juta', 'pxtr6c5x', 3, NULL, '2023-12-18 03:04:41'),
(204, 41, 'Rp 4,5 juta - Rp 7 juta', 'crg5uya8', 4, NULL, '2023-12-18 03:04:57'),
(205, 41, 'Rp 2 juta - Rp 4,5 juta', 'w0x60t17', 5, NULL, '2023-12-18 03:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
-- testlogin 00000000

INSERT INTO `users` (`id`, `name`, `username`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(41, 'testlogin', 'testlogin', '$2y$10$n0oqo5yJ2S/GVKBysEFsBubKpJoOlobZ2efX1Lfs8Smrrv8v7Z9.S', 1, NULL, '2023-12-16 06:00:31', '2023-12-16 06:00:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alternatifs_slug_unique` (`slug`),
  ADD KEY `alternatifs_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kriterias_slug_unique` (`slug`),
  ADD KEY `kriterias_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penilaians`
--
ALTER TABLE `penilaians`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penilaians_slug_unique` (`slug`),
  ADD KEY `penilaians_user_id_foreign` (`user_id`),
  ADD KEY `penilaians_alternatif_id_foreign` (`alternatif_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sub_kriteria1s`
--
ALTER TABLE `sub_kriteria1s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_kriteria1s_slug_unique` (`slug`),
  ADD KEY `sub_kriteria1s_user_id_foreign` (`user_id`);

--
-- Indexes for table `sub_kriteria2s`
--
ALTER TABLE `sub_kriteria2s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_kriteria2s_slug_unique` (`slug`),
  ADD KEY `sub_kriteria2s_user_id_foreign` (`user_id`);

--
-- Indexes for table `sub_kriteria3s`
--
ALTER TABLE `sub_kriteria3s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_kriteria3s_slug_unique` (`slug`),
  ADD KEY `sub_kriteria3s_user_id_foreign` (`user_id`);

--
-- Indexes for table `sub_kriteria4s`
--
ALTER TABLE `sub_kriteria4s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_kriteria4s_slug_unique` (`slug`),
  ADD KEY `sub_kriteria4s_user_id_foreign` (`user_id`);

--
-- Indexes for table `sub_kriteria5s`
--
ALTER TABLE `sub_kriteria5s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_kriteria5s_slug_unique` (`slug`),
  ADD KEY `sub_kriteria5s_user_id_foreign` (`user_id`);

--
-- Indexes for table `sub_kriterias`
--
ALTER TABLE `sub_kriterias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_kriterias_slug_unique` (`slug`),
  ADD KEY `sub_kriterias_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `penilaians`
--
ALTER TABLE `penilaians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_kriteria1s`
--
ALTER TABLE `sub_kriteria1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `sub_kriteria2s`
--
ALTER TABLE `sub_kriteria2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `sub_kriteria3s`
--
ALTER TABLE `sub_kriteria3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `sub_kriteria4s`
--
ALTER TABLE `sub_kriteria4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `sub_kriteria5s`
--
ALTER TABLE `sub_kriteria5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `sub_kriterias`
--
ALTER TABLE `sub_kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD CONSTRAINT `alternatifs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kriterias`
--
ALTER TABLE `kriterias`
  ADD CONSTRAINT `kriterias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `penilaians`
--
ALTER TABLE `penilaians`
  ADD CONSTRAINT `penilaians_alternatif_id_foreign` FOREIGN KEY (`alternatif_id`) REFERENCES `alternatifs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `penilaians_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_kriteria1s`
--
ALTER TABLE `sub_kriteria1s`
  ADD CONSTRAINT `sub_kriteria1s_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_kriteria2s`
--
ALTER TABLE `sub_kriteria2s`
  ADD CONSTRAINT `sub_kriteria2s_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_kriteria3s`
--
ALTER TABLE `sub_kriteria3s`
  ADD CONSTRAINT `sub_kriteria3s_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_kriteria4s`
--
ALTER TABLE `sub_kriteria4s`
  ADD CONSTRAINT `sub_kriteria4s_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_kriteria5s`
--
ALTER TABLE `sub_kriteria5s`
  ADD CONSTRAINT `sub_kriteria5s_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_kriterias`
--
ALTER TABLE `sub_kriterias`
  ADD CONSTRAINT `sub_kriterias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
