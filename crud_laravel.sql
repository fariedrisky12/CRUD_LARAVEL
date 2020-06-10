-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 03:55 PM
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
-- Database: `crud_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosenwali`
--

CREATE TABLE `dosenwali` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosenwali`
--

INSERT INTO `dosenwali` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Prof. London Emard DVM', NULL, NULL),
(2, 'Dr. Gertrude Braun', NULL, NULL),
(3, 'Franz Stanton', NULL, NULL),
(4, 'Miss Maybelle Daugherty PhD', NULL, NULL),
(5, 'Prof. Maya Paucek V', NULL, NULL),
(6, 'Rey Skiles', NULL, NULL),
(7, 'Dr. Hubert Huels PhD', NULL, NULL),
(8, 'Prof. Velva Torp', NULL, NULL),
(9, 'Roman Dare', NULL, NULL),
(10, 'Ian Glover', NULL, NULL),
(11, 'Desiree Spencer Jr.', NULL, NULL),
(12, 'Fanny Flatley', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dosenwali` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `jenis_kelamin`, `id_dosenwali`, `created_at`, `updated_at`) VALUES
(1, 'Gerard O\'Conner', 'Laki-laki', 12, NULL, NULL),
(2, 'Lukas Braun', 'Laki-laki', 9, NULL, NULL),
(3, 'Deonte Hessel', 'Perempuan', 1, NULL, NULL),
(4, 'Tanner Dibbert', 'Laki-laki', 8, NULL, NULL),
(5, 'Rebeca Waters', 'Perempuan', 6, NULL, NULL),
(6, 'Amie Braun I', 'Laki-laki', 7, NULL, NULL),
(7, 'Jennings Simonis', 'Perempuan', 7, NULL, NULL),
(8, 'Maymie McKenzie', 'Perempuan', 9, NULL, NULL),
(9, 'Prof. Don Quitzon', 'Laki-laki', 11, NULL, NULL),
(10, 'Cordia Nikolaus', 'Laki-laki', 7, NULL, NULL),
(11, 'Mariah Koelpin Sr.', 'Laki-laki', 11, NULL, NULL),
(12, 'Macie Lebsack', 'Perempuan', 9, NULL, NULL),
(13, 'May Botsford', 'Perempuan', 8, NULL, NULL),
(14, 'Xzavier Rowe', 'Perempuan', 4, NULL, NULL),
(15, 'Joanny McKenzie II', 'Perempuan', 8, NULL, NULL),
(16, 'Louisa Stamm', 'Perempuan', 4, NULL, NULL),
(17, 'Mrs. Annamarie Runolfsson', 'Laki-laki', 10, NULL, NULL),
(18, 'Prof. Jarrett Cronin', 'Perempuan', 3, NULL, NULL),
(19, 'Ms. Emie Hagenes', 'Perempuan', 3, NULL, NULL),
(20, 'Dr. Raul Harris', 'Laki-laki', 6, NULL, NULL),
(21, 'Dr. Gerardo Predovic IV', 'Laki-laki', 9, NULL, NULL),
(22, 'Mr. Dedric Vandervort MD', 'Perempuan', 3, NULL, NULL),
(23, 'Hans Boyer', 'Laki-laki', 8, NULL, NULL),
(24, 'Shirley Kunde', 'Laki-laki', 3, NULL, NULL),
(25, 'Juston Spencer DDS', 'Perempuan', 3, NULL, NULL),
(26, 'Prof. Jany Zemlak', 'Perempuan', 9, NULL, NULL),
(27, 'Savannah Mraz', 'Perempuan', 1, NULL, NULL),
(28, 'Prof. Mitchel Johnson', 'Perempuan', 5, NULL, NULL),
(29, 'Rodrigo Hintz', 'Laki-laki', 9, NULL, NULL),
(30, 'Alexys Fay', 'Perempuan', 8, NULL, NULL),
(31, 'Braeden Harber', 'Laki-laki', 4, NULL, NULL),
(32, 'Prof. Marisa Hills IV', 'Laki-laki', 8, NULL, NULL),
(33, 'Derrick Denesik', 'Perempuan', 9, NULL, NULL),
(34, 'Quinn Bernhard', 'Laki-laki', 11, NULL, NULL),
(35, 'Arlo Weber', 'Perempuan', 3, NULL, NULL),
(36, 'Jude Bins', 'Laki-laki', 1, NULL, NULL),
(37, 'Laura Bosco', 'Perempuan', 2, NULL, NULL),
(38, 'Noemy Bednar', 'Perempuan', 3, NULL, NULL),
(39, 'Ms. Lillie Crooks', 'Laki-laki', 11, NULL, NULL),
(40, 'Prof. Ali Grimes', 'Perempuan', 9, NULL, NULL),
(41, 'Prof. Cydney Cole', 'Laki-laki', 2, NULL, NULL),
(42, 'Meagan Ruecker', 'Laki-laki', 3, NULL, NULL),
(43, 'Citlalli Torphy', 'Perempuan', 3, NULL, NULL),
(44, 'Marlen Runte', 'Perempuan', 10, NULL, NULL),
(45, 'Miss Candice Harber PhD', 'Laki-laki', 3, NULL, NULL),
(46, 'Dr. Tevin Bruen PhD', 'Perempuan', 2, NULL, NULL),
(47, 'Prof. Jaclyn Konopelski', 'Perempuan', 7, NULL, NULL),
(48, 'Clementina Zieme V', 'Perempuan', 4, NULL, NULL),
(49, 'Shanel Nikolaus', 'Perempuan', 6, NULL, NULL),
(50, 'Pearlie Veum', 'Perempuan', 1, NULL, NULL),
(51, 'Brooks Davise', 'Perempuan', 8, NULL, NULL),
(52, 'Maxine Schmeler', 'Perempuan', 4, NULL, NULL),
(53, 'Axel Gutkowski II', 'Laki-laki', 10, NULL, NULL);

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
(1, '2020_06_09_191817_create_dosenwali_table', 1),
(2, '2020_06_09_191833_create_mahasiswa_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosenwali`
--
ALTER TABLE `dosenwali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_id_dosenwali_foreign` (`id_dosenwali`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosenwali`
--
ALTER TABLE `dosenwali`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4142;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_id_dosenwali_foreign` FOREIGN KEY (`id_dosenwali`) REFERENCES `dosenwali` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
