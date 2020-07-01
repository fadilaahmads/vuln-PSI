-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 09:00 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psi`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2020_06_26_112016_create_pengeluaran_table', 2),
(12, '2014_10_12_000000_create_users_table', 3),
(13, '2014_10_12_100000_create_password_resets_table', 3),
(14, '2019_08_19_000000_create_failed_jobs_table', 3),
(15, '2020_06_29_143852_create_pengeluaran_table', 3);

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
-- Table structure for table `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id` int(8) NOT NULL,
  `nama_kegiatan` text NOT NULL,
  `tanggal` int(2) DEFAULT NULL,
  `bulan` int(2) NOT NULL,
  `tahun` int(4) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`id`, `nama_kegiatan`, `tanggal`, `bulan`, `tahun`, `biaya`) VALUES
(1, 'Sponsor', 23, 5, 2019, 100000),
(2, 'Penjualan tiket', 31, 5, 2019, 1500000),
(3, 'Donatur A', 23, 6, 2019, 2000000),
(4, 'Donatur B', 20, 7, 2019, 500000),
(5, 'apa coba', 20, 8, 2020, 1000000000);

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `biaya` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `nama_kegiatan`, `tanggal`, `bulan`, `tahun`, `biaya`, `created_at`, `updated_at`) VALUES
(1, 'Pembelian sapu', 5, 6, 2019, 200000, NULL, NULL),
(2, 'Pembelian tempat sampah', 6, 6, 2019, 450000, NULL, NULL),
(3, 'Pembayaran listrik', 1, 7, 2019, 400000, NULL, NULL),
(4, 'Pembayaran air', 2, 8, 2019, 350000, NULL, NULL),
(5, 'Pembelian roll kabel', 2, 9, 2019, 98000, NULL, NULL),
(6, 'Pembayaran air', 6, 12, 2019, 340000, NULL, NULL),
(7, 'Print pamflet', 4, 10, 2019, 135000, NULL, NULL),
(8, 'Pembayaran listrik', 2, 2, 2019, 354000, NULL, NULL),
(9, 'Print pamflet', 4, 10, 2019, 135000, NULL, NULL),
(10, 'Pembayaran listrik', 2, 2, 2019, 354000, NULL, NULL),
(11, 'Pembelian tenda', 3, 3, 2019, 650000, NULL, NULL),
(12, 'Pembelian kotak medis', 4, 4, 2019, 470000, NULL, NULL),
(13, 'Print banner', 5, 5, 2019, 320000, NULL, NULL),
(14, 'Pembayaran listrik', 1, 1, 2019, 354000, NULL, NULL),
(15, 'Pembayaran air', 11, 11, 2019, 354000, NULL, NULL),
(16, 'Perbaikan pipa air', 9, 9, 2019, 354000, NULL, NULL),
(17, 'Pembelian sesuatu', 11, 1, 2019, 100000, NULL, NULL),
(18, 'Pembelian Sesuatu', 12, 2, 2019, 100000, NULL, NULL),
(19, 'Pembelian sesuatu', 12, 7, 2019, 100000, NULL, NULL),
(20, 'Pembelian Sesuatu', 12, 2, 2019, 100000, NULL, NULL),
(21, 'Pembelian sesuatu', 11, 5, 2019, 100000, NULL, NULL),
(22, 'Pembelian sesuatu', 13, 1, 2019, 100000, NULL, NULL),
(23, 'Pembelian sesuatu', 19, 1, 2019, 100000, NULL, NULL),
(24, 'Pembelian sesuatu', 11, 3, 2019, 100000, NULL, NULL),
(25, 'Pembelian sesuatu', 21, 1, 2019, 100000, NULL, NULL),
(26, 'Pembelian sesuatu', 23, 9, 2019, 100000, NULL, NULL),
(27, 'Pembelian sesuatu', 29, 10, 2019, 100000, NULL, NULL),
(28, 'Pembelian sesuatu', 11, 1, 2019, 100000, NULL, NULL),
(29, 'Pembelian sesuatu', 31, 1, 2019, 100000, NULL, NULL),
(30, 'Pembelian sesuatu', 25, 2, 2019, 100000, NULL, NULL),
(31, 'Pembelian sesuatu', 11, 1, 2019, 100000, NULL, NULL),
(32, 'Pembelian sesuatu', 11, 12, 2019, 100000, NULL, NULL),
(33, 'Pembelian sesuatu', 11, 11, 2019, 100000, NULL, NULL),
(34, 'Pembelian sesuatu', 11, 4, 2019, 100000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(8) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `jumlah` int(6) DEFAULT NULL,
  `bulan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `jenis`, `jumlah`, `bulan`) VALUES
(1, 'anak-anak', 100000, 'januari'),
(2, 'dewasa', 20000, 'januari');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', NULL, '$2y$10$cgWuUDgNrhm3ZVl7itiWEetQyI1Ya3p9pCtj4kXVxjAme1PoLDaa6', NULL, '2020-06-29 21:00:16', '2020-06-29 21:00:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis` (`nama_kegiatan`) USING HASH;

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis` (`jenis`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
