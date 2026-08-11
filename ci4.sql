-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 11, 2026 at 11:06 AM
-- Server version: 8.4.3
-- PHP Version: 8.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `comics`
--

CREATE TABLE `comics` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `slug` text NOT NULL,
  `author` text NOT NULL,
  `publisher` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comics`
--

INSERT INTO `comics` (`id`, `title`, `slug`, `author`, `publisher`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Rascal Does Not Dream of Bunny Girl Senpai', 'rascal-does-not-dream-of-bunny-girl-senpai', 'Hajime Kamoshida', 'ASCII Media Works', 'Mai.jpg', '2026-08-09 14:00:24', '2026-08-09 14:00:24'),
(2, 'Rascal Does Not Dream of Petite Devil Kohai', 'rascal-does-not-dream-of-petite-devil-kohai', 'Hajime Kamoshida', 'ASCII Media Works', 'Koga.jpg', '2026-08-09 14:00:24', '2026-08-09 14:00:24'),
(3, 'Rascal Does Not Dream of Logical Witch', 'rascal-does-not-dream-of-logical-witch', 'Hajime Kamoshida', 'ASCII Media Works', 'Futaba.jpg', '2026-08-09 15:19:16', '2026-08-09 15:19:16'),
(4, 'Rascal Does Not Dream of Siscon Idol', 'rascal-does-not-dream-of-siscon-idol', 'Hajime Kamoshida', 'ASCII Media Works', 'Nodoka.webp', '2026-08-09 15:21:17', '2026-08-09 15:21:17'),
(5, 'Rascal Does Not Dream of a Sister Home Alone', 'rascal-does-not-dream-of-a-sister-home-alone', 'Hajime Kamoshida', 'ASCII Media Works', 'Kaede.webp', '2026-08-09 15:23:05', '2026-08-09 15:23:05'),
(6, 'Rascal Does Not Dream of a Dreaming Girl', 'rascal-does-not-dream-of-a-dreaming-girl', 'Hajime Kamoshida', 'ASCII Media Works', 'ShokoAdult.webp', '2026-08-09 15:24:56', '2026-08-09 15:24:56'),
(7, 'Rascal Does Not Dream of His First Love', 'rascal-does-not-dream-of-his-first-love', 'Hajime Kamoshida', 'ASCII Media Works', 'ShokoKid.webp', '2026-08-09 15:27:02', '2026-08-09 15:27:02'),
(8, 'Rascal Does Not Dream of a Sister Venturing Out', 'rascal-does-not-dream-of-a-sister-venturing-out', 'Hajime Kamoshida', 'ASCII Media Works', 'KaedeTeen.webp', '2026-08-09 15:29:11', '2026-08-09 15:29:11'),
(9, 'Rascal Does Not Dream of a Knapsack Kid', 'rascal-does-not-dream-of-a-knapsack-kid', 'Hajime Kamoshida', 'ASCII Media Works', 'MaiKid.webp', '2026-08-09 15:31:01', '2026-08-09 15:31:01'),
(10, 'Rascal Does Not Dream of a Lost Singer', 'rascal-does-not-dream-of-a-lost-singer', 'Hajime Kamoshida', 'ASCII Media Works', 'Uzuki.webp', '2026-08-09 15:32:38', '2026-08-09 15:32:38'),
(11, 'Rascal Does Not Dream of a Nightingale', 'rascal-does-not-dream-of-a-nightingale', 'Hajime Kamoshida', 'ASCII Media Works', 'Akagi.webp', '2026-08-09 15:34:17', '2026-08-09 15:34:17'),
(12, 'Rascal Does Not Dream of His Student', 'rascal-does-not-dream-of-his-student', 'Hajime Kamoshida', 'ASCII Media Works', '1761056215_eb3dee5af9edd1e7f3b0.jpg', '2026-08-09 15:35:53', '2026-08-09 15:35:53'),
(13, 'Rascal Does Not Dream of Santa Claus', 'rascal-does-not-dream-of-santa-claus', 'Hajime Kamoshida', 'ASCII Media Works', '1761055962_4a13e73d04b1506b45a8.webp', '2026-08-09 15:38:45', '2026-08-09 15:38:45'),
(14, 'Rascal Does Not Dream of a Girlfriend', 'rascal-does-not-dream-of-a-girlfriend', 'Hajime Kamoshida', 'ASCII Media Works', '1761056683_8d2cd07296187867f1b6.jpg', '2026-08-09 15:41:14', '2026-08-09 15:41:14'),
(15, 'Rascal Does Not Dream of a Dear Friend', 'rascal-does-not-dream-of-a-dear-friend', 'Hajime Kamoshida', 'ASCII Media Works', '1786290272_d9a8faf8266788d44ad2.webp', '2026-08-09 15:44:32', '2026-08-09 15:44:32'),
(16, 'Rascal Does Not Dream of a Beach Queen Plus+', 'rascal-does-not-dream-of-a-beach-queen-plus', 'Hajime Kamoshida', 'ASCII Media Works', '1786290321_892b8ba68aeebd20149a.webp', '2026-08-09 15:45:21', '2026-08-09 15:45:21'),
(17, 'Rascal Does Not Dream of Doctor Pig+', 'rascal-does-not-dream-of-doctor-pig', 'Hajime Kamoshida', 'ASCII Media Works', '1786290533_2a666a52d810cdbf0a71.webp', '2026-08-09 15:48:53', '2026-08-09 15:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-10-22-063622', 'App\\Database\\Migrations\\Peoples', 'default', 'App', 1786444494, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peoples`
--

CREATE TABLE `peoples` (
  `id` int UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peoples`
--

INSERT INTO `peoples` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'William Lutfir', 'Jl. Tirta Kencana, Hutan, Percut Sei Tuan, Kab. Deli Serdang, Sumatera Utara, 20371', '2026-08-11 18:05:03', '2026-08-11 18:05:03'),
(2, 'Rahman Harjo', 'Jl. M. Yakub No.182 Medan Perjuangan, Kota Medan, Sumatera Utara, 20233', '2026-08-11 18:05:03', '2026-08-11 18:05:03'),
(3, 'Novi Jessica Oktaviani S.Farm', 'Jln. Imam No. 449, Padang 59926, Riau', '2004-07-16 04:31:53', '2026-08-11 18:05:03'),
(4, 'Harjaya Gunawan', 'Ds. Padma No. 153, Singkawang 53954, Sumut', '2016-04-08 18:54:09', '2026-08-11 18:05:03'),
(5, 'Bella Ellis Nasyidah', 'Jr. Rajawali No. 92, Palopo 45537, Banten', '1986-03-31 02:58:13', '2026-08-11 18:05:03'),
(6, 'Kania Pudjiastuti', 'Ds. Rumah Sakit No. 448, Pekalongan 25076, Kaltim', '1975-06-01 15:41:43', '2026-08-11 18:05:03'),
(7, 'Jane Andriani', 'Gg. Monginsidi No. 712, Parepare 23398, Kaltara', '2005-09-25 08:19:55', '2026-08-11 18:05:03'),
(8, 'Halim Sihombing', 'Jr. Achmad No. 330, Sabang 91074, Kalbar', '2019-11-24 23:07:05', '2026-08-11 18:05:03'),
(9, 'Kasiran Pranawa Maheswara S.Kom', 'Gg. Supomo No. 172, Padang 91636, Aceh', '2002-04-30 00:21:08', '2026-08-11 18:05:03'),
(10, 'Viktor Lazuardi', 'Psr. Dewi Sartika No. 44, Kediri 35496, Babel', '2023-06-08 06:56:26', '2026-08-11 18:05:03'),
(11, 'Ikin Pradana', 'Jln. Muwardi No. 895, Blitar 24455, Sulsel', '2018-06-29 02:50:51', '2026-08-11 18:05:03'),
(12, 'Titi Nuraini M.Kom.', 'Psr. Sutoyo No. 603, Pasuruan 85670, Lampung', '2018-05-09 23:12:22', '2026-08-11 18:05:03'),
(13, 'Karman Sirait', 'Psr. K.H. Maskur No. 94, Sorong 95748, Kaltara', '2015-10-31 21:06:22', '2026-08-11 18:05:03'),
(14, 'Olivia Nurdiyanti', 'Jln. Yoga No. 800, Balikpapan 24705, Sulut', '2022-06-16 02:59:07', '2026-08-11 18:05:03'),
(15, 'Carla Oktaviani', 'Dk. Yosodipuro No. 951, Pangkal Pinang 13685, Sumbar', '2011-03-26 10:16:19', '2026-08-11 18:05:03'),
(16, 'Waluyo Maheswara', 'Psr. Batako No. 463, Palangka Raya 41810, Babel', '2002-11-19 06:44:54', '2026-08-11 18:05:03'),
(17, 'Ajeng Halima Agustina M.TI.', 'Ki. Uluwatu No. 47, Kendari 81461, Aceh', '2005-03-14 19:48:39', '2026-08-11 18:05:03'),
(18, 'Irma Laksmiwati', 'Psr. Imam Bonjol No. 340, Batam 18914, Jambi', '1987-11-25 04:44:05', '2026-08-11 18:05:03'),
(19, 'Zamira Nuraini', 'Jln. Setiabudhi No. 300, Manado 31234, Bali', '1991-04-15 16:25:21', '2026-08-11 18:05:03'),
(20, 'Prasetyo Thamrin', 'Kpg. Ketandan No. 62, Palopo 22714, Kalteng', '1980-09-18 00:03:16', '2026-08-11 18:05:03'),
(21, 'Zulaikha Farida S.Kom', 'Psr. B.Agam Dlm No. 205, Pontianak 40140, NTT', '2007-07-22 11:03:15', '2026-08-11 18:05:03'),
(22, 'Elma Susanti S.Pt', 'Gg. Barat No. 275, Cilegon 64950, Bengkulu', '1981-09-27 16:49:24', '2026-08-11 18:05:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peoples`
--
ALTER TABLE `peoples`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comics`
--
ALTER TABLE `comics`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peoples`
--
ALTER TABLE `peoples`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
