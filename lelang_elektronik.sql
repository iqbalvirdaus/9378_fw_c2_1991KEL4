-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 02:18 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lelang_elektronik`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE IF NOT EXISTS `barangs` (
  `id` int(10) unsigned NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `merk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `warna` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` float NOT NULL,
  `harga_tawaran` float DEFAULT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `kategori_id` int(10) unsigned NOT NULL,
  `pemilik_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONS FOR TABLE `barangs`:
--   `kategori_id`
--       `kategoris` -> `id`
--   `pemilik_id`
--       `pemiliks` -> `id`
--

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `merk`, `warna`, `foto`, `jumlah`, `harga`, `harga_tawaran`, `keterangan`, `kategori_id`, `pemilik_id`, `created_at`, `updated_at`) VALUES
(6, 'J2', 'Samsung', 'Gold', '', 1, 1000000, NULL, 'Lecet Pemakaian', 1, 4, '2017-05-18 06:10:46', '2017-05-18 06:10:46'),
(7, 'J3', 'Samsung', 'Hitam', '', 1, 500000, NULL, 'BUTUH DUIT', 1, 2, '2017-05-18 06:32:22', '2017-05-18 06:32:22'),
(8, 'J2', 'Samsung', 'Silver', '', 1, 780000, NULL, 'butuh dana', 1, 3, '2017-05-18 06:36:28', '2017-05-18 06:36:28'),
(9, 'J3', 'Samsung', 'Silver', '', 1, 790000, NULL, 'lengkap', 1, 2, '2017-05-18 06:41:32', '2017-05-18 06:41:32'),
(10, 'J2', 'Samsung', 'Hitam', '', 1, 250000, NULL, 'lecet', 1, 3, '2017-05-18 06:44:04', '2017-05-18 06:44:04'),
(11, 'xiomi', 'Xiao mi', 'Gold', '', 1, 550000, NULL, 'lengkap sampai nota', 1, 3, '2017-05-18 06:59:00', '2017-05-18 06:59:00'),
(12, 'xiaomi', 'Xiao mi', 'Hitam', '', 1, 760000, NULL, 'lengkap, ada goresan di blakang', 1, 2, '2017-05-18 07:02:30', '2017-05-18 07:02:30'),
(13, 'J2', 'Samsung', 'Silver', '', 1, 600000, NULL, 'lengkap', 1, 2, '2017-05-18 07:03:51', '2017-05-18 07:03:51'),
(14, 'redmi 3', 'Xiao mi', 'Hitam', '', 1, 1000000, NULL, 'Second Berkualitas', 1, 2, '2017-05-18 07:07:29', '2017-05-18 07:07:29'),
(16, 'Samsung J3', 'Samsung', 'Hitam', '', 1, 1000000, NULL, 'Jalan 1 bulan', 1, 5, '2017-05-18 20:38:50', '2017-05-18 20:38:50'),
(17, 'J2', 'Samsung', 'Hitam', '', 1, 1100000, NULL, 'lcd retak', 1, 5, '2017-05-19 02:21:41', '2017-05-19 02:21:41'),
(18, 'redmi 3', 'Xiao mi', 'Hitam', '', 1, 1500000, NULL, 'jalan 1 bulan', 1, 5, '2017-05-19 02:26:57', '2017-05-19 02:26:57'),
(19, 'J3', 'Samsung', 'Hitam', 'noimage.jpg', 1, 20000000, NULL, 'Satu bulan pemakaian', 1, 5, '2017-05-19 03:28:14', '2017-05-19 03:28:14'),
(20, 'redmi 3', 'Xiao mi', 'Hitam', 'noimage.jpg', 1, 2000000, NULL, 'Murah Meriah Barang Masih Baru ', 1, 5, '2017-05-19 03:30:20', '2017-05-19 03:30:20'),
(21, 'assa', 'Samsung', 'Hitam', 'noimage.jpg', 1, 1000000, NULL, 'mm', 1, 5, '2017-05-19 03:42:57', '2017-05-19 03:42:57'),
(22, 'Samsung J3', 'Samsung', 'Hitam', 'noimage.jpg', 1, 1000000, NULL, 'mlm', 1, 5, '2017-05-19 03:44:29', '2017-05-19 03:44:29'),
(23, 'Samsung Note 3', 'Samsung', 'Gold', 'noimage.jpg', 1, 5000000, NULL, 'Barang Bekas', 1, 3, '2017-05-19 18:19:47', '2017-05-19 18:19:47'),
(24, 'XIOMI REDMI 3 PRO', 'Xiao mi', 'Gold', 'noimage.jpg', 1, 1900000, NULL, 'Barang Baru', 1, 10, '2017-05-19 18:23:43', '2017-05-19 18:23:43'),
(25, 'zenfone 3 max', 'Asus', 'Hitam', 'noimage.jpg', 1, 1800000, NULL, 'Lengkap fullsett sampe nota', 1, 6, '2017-05-19 20:22:16', '2017-05-19 20:22:16'),
(26, 'Samsung S4', 'Samsung', 'Hitam', 'noimage.jpg', 1, 2000000, NULL, 'Barang Curian', 1, 11, '2017-05-19 22:04:21', '2017-05-19 22:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE IF NOT EXISTS `kategoris` (
  `id` int(10) unsigned NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONS FOR TABLE `kategoris`:
--

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'HandPhone', '2017-04-27 19:42:47', '2017-04-27 19:45:36'),
(3, 'Televisi', '2017-04-27 20:10:45', '2017-04-27 20:10:45'),
(4, 'Radio', '2017-05-16 01:55:13', '2017-05-16 01:55:13'),
(5, 'Laptop', '2017-05-19 10:29:27', '2017-05-19 10:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONS FOR TABLE `migrations`:
--

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_04_13_072142_create_penggunas_table', 1),
('2017_04_13_072218_create_pembelis_table', 1),
('2017_04_13_072230_create_pemiliks_table', 1),
('2017_04_13_072307_create_kategoris_table', 1),
('2017_04_13_072310_create_barangs_table', 1),
('2017_04_13_072349_create_penawarans_table', 1),
('2017_04_13_072421_create_transaksis_table', 1),
('2017_04_13_072547_create_postingans_table', 1),
('2017_04_21_061443_create_belumlakus_table', 1),
('2017_05_20_122702_create_pemberitahuans_table', 2),
('2017_04_13_072447_create_transaksis_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONS FOR TABLE `password_resets`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pembelis`
--

CREATE TABLE IF NOT EXISTS `pembelis` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONS FOR TABLE `pembelis`:
--   `pengguna_id`
--       `penggunas` -> `id`
--

--
-- Dumping data for table `pembelis`
--

INSERT INTO `pembelis` (`id`, `nama`, `tgl_lahir`, `gender`, `alamat`, `no_telp`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(3, 'rizwan', '1997-12-12', 'Laki-Laki', 'jalan gaharu', '081254731542', 33, '2017-05-18 02:08:50', '2017-05-18 02:08:50'),
(4, 'dion', '1998-12-11', 'Laki-Laki', 'jalan minerale', '081254731542', 34, '2017-05-18 02:14:57', '2017-05-18 02:14:57'),
(5, 'yoga', '1998-12-11', 'Laki-Laki', 'jalan minerale', '081254731542', 36, '2017-05-18 02:15:57', '2017-05-18 02:15:57'),
(6, 'acer', '1997-12-19', 'Laki-Laki', 'jalan kacer', '082188667853', 38, '2017-05-18 02:20:38', '2017-05-18 02:20:38'),
(7, 'yoga', '1998-12-11', 'Laki-Laki', 'jalan minerale', '', 39, '2017-05-18 19:08:59', '2017-05-19 21:07:31'),
(8, 'abdul aziz', '1996-09-12', 'Laki-Laki', 'jl.bangun mulyo', '082188667853', 40, '2017-05-19 13:44:05', '2017-05-19 13:44:05'),
(9, 'yayanusi', '2017-05-04', 'Laki-Laki', 'jalan Aws', '085252004060', 42, '2017-05-19 13:49:23', '2017-05-19 13:49:23'),
(10, 'erwin r', '2017-05-06', 'Laki-Laki', 'jalan kedondong', '085647282882', 43, '2017-05-19 13:52:01', '2017-05-19 13:52:01'),
(11, 'novel arkasa', '2017-05-05', 'Perempuan', 'jalan novel baswudan', '087878676765', 44, '2017-05-19 13:55:14', '2017-05-19 13:55:14'),
(12, 'indriawan niswar', '1997-03-28', 'Laki-Laki', 'Damanhuri', '08654345678', 45, '2017-05-19 18:21:33', '2017-05-19 18:21:33'),
(13, 'aziz dion', '2017-05-10', 'Laki-Laki', 'Jalan Jakarta', '085347741441', 46, '2017-05-19 22:01:50', '2017-05-19 22:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `pemberitahuans`
--

CREATE TABLE IF NOT EXISTS `pemberitahuans` (
  `id` int(10) unsigned NOT NULL,
  `barang_id` int(10) unsigned NOT NULL,
  `penawaran_id` int(10) unsigned NOT NULL,
  `pembeli_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONS FOR TABLE `pemberitahuans`:
--   `barang_id`
--       `barangs` -> `id`
--   `pembeli_id`
--       `pembelis` -> `id`
--   `penawaran_id`
--       `penawarans` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemiliks`
--

CREATE TABLE IF NOT EXISTS `pemiliks` (
  `id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONS FOR TABLE `pemiliks`:
--   `pengguna_id`
--       `penggunas` -> `id`
--

--
-- Dumping data for table `pemiliks`
--

INSERT INTO `pemiliks` (`id`, `nama`, `tgl_lahir`, `gender`, `alamat`, `no_telp`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(2, 'dion', '1998-12-11', 'Laki-Laki', 'jalan minerale', '081254731542', 34, '2017-05-18 02:14:57', '2017-05-18 02:14:57'),
(3, 'yoga', '1998-12-11', 'Laki-Laki', 'jalan minerale', '081254731542', 36, '2017-05-18 02:15:57', '2017-05-18 02:15:57'),
(4, 'acer', '1997-12-19', 'Laki-Laki', 'jalan kacer', '082188667853', 38, '2017-05-18 02:20:38', '2017-05-18 02:20:38'),
(5, 'yoga', '1998-12-11', 'Laki-Laki', 'jalan minerale', '', 39, '2017-05-18 19:08:59', '2017-05-19 21:07:31'),
(6, 'abdul aziz', '1996-09-12', 'Laki-Laki', 'jl.bangun mulyo', '082188667853', 40, '2017-05-19 13:44:05', '2017-05-19 13:44:05'),
(7, 'yayanusi', '2017-05-04', 'Laki-Laki', 'jalan Aws', '085252004060', 42, '2017-05-19 13:49:23', '2017-05-19 13:49:23'),
(8, 'erwin r', '2017-05-06', 'Laki-Laki', 'jalan kedondong', '085647282882', 43, '2017-05-19 13:52:01', '2017-05-19 13:52:01'),
(9, 'novel arkasa', '2017-05-05', 'Perempuan', 'jalan novel baswudan', '087878676765', 44, '2017-05-19 13:55:14', '2017-05-19 13:55:14'),
(10, 'indriawan niswar', '1997-03-28', 'Laki-Laki', 'Damanhuri', '08654345678', 45, '2017-05-19 18:21:33', '2017-05-19 18:21:33'),
(11, 'aziz dion', '2017-05-10', 'Laki-Laki', 'Jalan Jakarta', '085347741441', 46, '2017-05-19 22:01:50', '2017-05-19 22:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `penawarans`
--

CREATE TABLE IF NOT EXISTS `penawarans` (
  `id` int(10) unsigned NOT NULL,
  `harga_penawaran` float NOT NULL,
  `pembeli_id` int(10) unsigned NOT NULL,
  `barang_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONS FOR TABLE `penawarans`:
--   `barang_id`
--       `barangs` -> `id`
--   `pembeli_id`
--       `pembelis` -> `id`
--

--
-- Dumping data for table `penawarans`
--

INSERT INTO `penawarans` (`id`, `harga_penawaran`, `pembeli_id`, `barang_id`, `created_at`, `updated_at`) VALUES
(5, 1800000, 12, 24, '2017-05-19 18:24:37', '2017-05-19 18:24:37'),
(6, 2000000, 12, 23, '2017-05-19 18:25:20', '2017-05-19 18:25:20'),
(7, 1000000, 13, 26, '2017-05-19 22:04:50', '2017-05-19 22:04:50'),
(8, 990000, 13, 26, '2017-05-19 22:05:06', '2017-05-19 22:05:06'),
(9, 2000000, 13, 26, '2017-05-19 22:05:39', '2017-05-19 22:05:39'),
(10, 4000000, 12, 26, '2017-05-19 22:10:33', '2017-05-19 22:10:33'),
(11, 4000000, 12, 26, '2017-05-19 22:10:33', '2017-05-19 22:10:33'),
(12, 4000000, 12, 26, '2017-05-19 22:10:34', '2017-05-19 22:10:34'),
(13, 5000000, 12, 26, '2017-05-19 22:10:50', '2017-05-19 22:10:50'),
(14, 500000, 5, 11, '2017-05-20 04:03:41', '2017-05-20 04:03:41'),
(15, 6000000, 5, 26, '2017-05-20 19:59:00', '2017-05-20 19:59:00'),
(16, 7000000, 5, 26, '2017-05-21 19:50:12', '2017-05-21 19:50:12'),
(17, 1000000, 5, 26, '2017-05-21 19:50:28', '2017-05-21 19:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `penggunas`
--

CREATE TABLE IF NOT EXISTS `penggunas` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONS FOR TABLE `penggunas`:
--

--
-- Dumping data for table `penggunas`
--

INSERT INTO `penggunas` (`id`, `username`, `email`, `level`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'iqbalVSS', 'doly13pharjalang@gmail.com', 'admin', 'iqbalVSS', 'Ime1RwVDmB8bYmNGxVDGyRrDb4HbrzO1zfKRwUwpccC7nt8UYKpUrnUrn9wG', '2017-04-27 18:37:42', '2017-05-23 05:05:37'),
(14, 'azizAA', 'aziz.singoAA@gmail.com', 'user', 'azizAA', '8idlWQ3hr7NKUOSCaiiF4TqG0ifBKbyQdx3pqcmai5o5s302CjgEC0O5H7Lw', '2017-05-17 21:27:13', '2017-05-19 20:55:27'),
(19, 'azizAC', 'aziz.singoAC@gmail.com', 'user', 'azizAA', NULL, '2017-05-17 21:28:39', '2017-05-17 21:28:39'),
(21, 'indriAA', 'indriAA@gmail.com', 'user', 'indriAA', NULL, '2017-05-17 21:31:40', '2017-05-17 21:31:40'),
(22, 'arifBSG', 'arifBSG@gmail.com', 'user', 'arifBSG', NULL, '2017-05-17 21:39:15', '2017-05-17 21:39:15'),
(25, 'ariflb', 'ariflb@gmail.com', 'user', 'ariflb', NULL, '2017-05-17 22:05:48', '2017-05-17 22:05:48'),
(26, 'arifjk', 'arifjk@gmail.com', 'user', 'arifjk', NULL, '2017-05-17 22:07:04', '2017-05-17 22:07:04'),
(27, 'arifmk', 'arifmk@gmail.com', 'user', 'arifmk', NULL, '2017-05-17 22:09:41', '2017-05-17 22:09:41'),
(28, 'memen', 'memen@gmail.com', 'user', 'memen', NULL, '2017-05-18 02:00:07', '2017-05-18 02:00:07'),
(30, 'marni', 'marni@gmail.com', 'user', 'marni', NULL, '2017-05-18 02:03:10', '2017-05-18 02:03:10'),
(32, 'atul', 'atul@gmail.com', 'user', 'atul', NULL, '2017-05-18 02:05:16', '2017-05-18 02:05:16'),
(33, 'rizwan', 'rizwan@gmail.com', 'user', 'rizwan', NULL, '2017-05-18 02:08:49', '2017-05-18 02:08:49'),
(34, 'dion', 'dion@gmail.com', 'user', 'dion', NULL, '2017-05-18 02:14:57', '2017-05-18 02:14:57'),
(36, 'yoga', 'yoga@gmail.com', 'user', 'yoga', 'uGxkkWMfpdxeXgMrHEn0HbAFHLk3gUukNX5caPrkFY6MWRxcvsCxReSavvk7', '2017-05-18 02:15:57', '2017-05-23 05:04:58'),
(38, 'acer', 'acer@gmail.com', 'user', 'acer', NULL, '2017-05-18 02:20:38', '2017-05-18 02:20:38'),
(39, 'arifh', '', 'user', '', 'iCxpv89Xf7rVHbryA7eqAFZFynttvTV93HSjT0xiWyAqmVV4CM5dZHjCurB5', '2017-05-18 19:08:58', '2017-05-19 21:08:17'),
(40, 'aziz091296', 'azissingo.aa@gmail.com', 'user', 'aziz091296', 'YOI5IXxjw9oeWGQ8O4EMidwxKvJrLvmuvlUnrkZmwCNfDR9ZnIJLQKqk6eBb', '2017-05-19 13:44:05', '2017-05-20 19:23:25'),
(42, 'yayanusi', 'yayanusi@gmail.com', 'user', 'yayanusi', NULL, '2017-05-19 13:49:22', '2017-05-19 13:49:22'),
(43, 'erwinrrr', 'erwin@gmail.com', 'user', 'erwinrrr', 'Q2450pNpqfs3Jjx3HyXdrCNR4OH97FWqhWsiRPQHNIGcl31xknYfNwfB8cXb', '2017-05-19 13:52:01', '2017-05-19 13:53:28'),
(44, 'novel765', 'novel765@gmail.com', 'user', 'novel765', 'zPZpvl2NSksyKxooBpuXxPvhfDWz3wqsExL82hYv2VkUUWzaPHitjSADS7kv', '2017-05-19 13:55:14', '2017-05-19 19:19:13'),
(45, 'indriawan28', 'indriawan.niswar@gmail.com', 'user', 'bismillah', 'uxQMSc1w6QfuyPNhT7F2cbhsq65fMXQ5Fug5o4tYeNvXs4QG91f6AfCL7Dlv', '2017-05-19 18:21:33', '2017-05-19 22:11:07'),
(46, 'gidionlung28', 'gidionlung@gmail.com', 'user', 'bismillah', '8UE5MFTyc8O5S2xQ2KE1jWid57KLbYigOcQN1VZs6IhazbIw3HKxzmUjha5j', '2017-05-19 22:01:50', '2017-05-19 22:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `postingans`
--

CREATE TABLE IF NOT EXISTS `postingans` (
  `id` int(10) unsigned NOT NULL,
  `nama_postingan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pemilik_id` int(10) unsigned NOT NULL,
  `barang_id` int(10) unsigned NOT NULL,
  `kategori_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONS FOR TABLE `postingans`:
--   `barang_id`
--       `pemiliks` -> `id`
--   `kategori_id`
--       `kategoris` -> `id`
--   `pemilik_id`
--       `pemiliks` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE IF NOT EXISTS `transaksis` (
  `id` int(10) unsigned NOT NULL,
  `barang_id` int(10) unsigned NOT NULL,
  `pembeli_id` int(10) unsigned NOT NULL,
  `pemilik_id` int(10) unsigned NOT NULL,
  `penawaran_id` int(10) unsigned NOT NULL,
  `harga_akhir` float NOT NULL,
  `lokasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_transaksi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONS FOR TABLE `transaksis`:
--   `barang_id`
--       `barangs` -> `id`
--   `pembeli_id`
--       `pembelis` -> `id`
--   `pemilik_id`
--       `pemiliks` -> `id`
--   `penawaran_id`
--       `penawarans` -> `id`
--

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `barang_id`, `pembeli_id`, `pemilik_id`, `penawaran_id`, `harga_akhir`, `lokasi`, `status_transaksi`, `created_at`, `updated_at`) VALUES
(1, 23, 12, 3, 6, 1000000, 'Gunung Batu', 'proses', '2017-05-22 01:51:19', '2017-05-22 01:51:19'),
(2, 23, 12, 3, 6, 2000000, 'samarinda utara', 'Sukses', '2017-05-22 19:33:25', '2017-05-23 04:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELATIONS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nando', 'nfx@gmail.com', '$2y$10$j2JC3W4hLL6ppkneBTLsUe6PzWy.mxXTe1JXfesXEDFuScips4ftu', NULL, '2017-05-02 23:38:36', '2017-05-02 23:38:36'),
(2, 'tri wasito', 'triwasito23@gmail.com', '$2y$10$MdRYsXfoziOIAVFBv8NmH.o7gcHzgb.S2PflIOFVN70FgHPNeguTa', 'P9I1jRYxOjV1Vb4eWYRExg5pMlSMc7gMHJGfVAwFQ1UJgp96AUr5WebLdZBO', '2017-05-16 19:57:52', '2017-05-16 23:21:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`), ADD KEY `barangs_kategori_id_foreign` (`kategori_id`), ADD KEY `barangs_pemilik_id_foreign` (`pemilik_id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pembelis`
--
ALTER TABLE `pembelis`
  ADD PRIMARY KEY (`id`), ADD KEY `pembelis_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `pemberitahuans`
--
ALTER TABLE `pemberitahuans`
  ADD PRIMARY KEY (`id`), ADD KEY `pemberitahuans_barang_id_foreign` (`barang_id`), ADD KEY `pemberitahuans_penawaran_id_foreign` (`penawaran_id`), ADD KEY `pemberitahuans_pembeli_id_foreign` (`pembeli_id`);

--
-- Indexes for table `pemiliks`
--
ALTER TABLE `pemiliks`
  ADD PRIMARY KEY (`id`), ADD KEY `pemiliks_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `penawarans`
--
ALTER TABLE `penawarans`
  ADD PRIMARY KEY (`id`), ADD KEY `penawarans_pembeli_id_foreign` (`pembeli_id`), ADD KEY `penawarans_barang_id_foreign` (`barang_id`);

--
-- Indexes for table `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `penggunas_username_unique` (`username`), ADD UNIQUE KEY `penggunas_email_unique` (`email`);

--
-- Indexes for table `postingans`
--
ALTER TABLE `postingans`
  ADD PRIMARY KEY (`id`), ADD KEY `postingans_pemilik_id_foreign` (`pemilik_id`), ADD KEY `postingans_barang_id_foreign` (`barang_id`), ADD KEY `postingans_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`), ADD KEY `transaksis_barang_id_foreign` (`barang_id`), ADD KEY `transaksis_pembeli_id_foreign` (`pembeli_id`), ADD KEY `transaksis_pemilik_id_foreign` (`pemilik_id`), ADD KEY `transaksis_penawaran_id_foreign` (`penawaran_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pembelis`
--
ALTER TABLE `pembelis`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pemberitahuans`
--
ALTER TABLE `pemberitahuans`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemiliks`
--
ALTER TABLE `pemiliks`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `penawarans`
--
ALTER TABLE `penawarans`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `postingans`
--
ALTER TABLE `postingans`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangs`
--
ALTER TABLE `barangs`
ADD CONSTRAINT `barangs_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `barangs_pemilik_id_foreign` FOREIGN KEY (`pemilik_id`) REFERENCES `pemiliks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelis`
--
ALTER TABLE `pembelis`
ADD CONSTRAINT `pembelis_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `penggunas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemberitahuans`
--
ALTER TABLE `pemberitahuans`
ADD CONSTRAINT `pemberitahuans_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pemberitahuans_pembeli_id_foreign` FOREIGN KEY (`pembeli_id`) REFERENCES `pembelis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pemberitahuans_penawaran_id_foreign` FOREIGN KEY (`penawaran_id`) REFERENCES `penawarans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemiliks`
--
ALTER TABLE `pemiliks`
ADD CONSTRAINT `pemiliks_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `penggunas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penawarans`
--
ALTER TABLE `penawarans`
ADD CONSTRAINT `penawarans_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `penawarans_pembeli_id_foreign` FOREIGN KEY (`pembeli_id`) REFERENCES `pembelis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `postingans`
--
ALTER TABLE `postingans`
ADD CONSTRAINT `postingans_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `pemiliks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `postingans_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `postingans_pemilik_id_foreign` FOREIGN KEY (`pemilik_id`) REFERENCES `pemiliks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
ADD CONSTRAINT `transaksis_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `transaksis_pembeli_id_foreign` FOREIGN KEY (`pembeli_id`) REFERENCES `pembelis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `transaksis_pemilik_id_foreign` FOREIGN KEY (`pemilik_id`) REFERENCES `pemiliks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `transaksis_penawaran_id_foreign` FOREIGN KEY (`penawaran_id`) REFERENCES `penawarans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
