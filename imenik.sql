-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 02:58 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imenik`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_01_201058_create_podaci_table', 1),
(4, '2018_11_02_203006_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `podaci`
--

CREATE TABLE `podaci` (
  `id` int(10) UNSIGNED NOT NULL,
  `ime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonski_broj` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ulica` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `broj` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `podaci`
--

INSERT INTO `podaci` (`id`, `ime`, `prezime`, `telefonski_broj`, `grad`, `ulica`, `broj`, `created_at`, `updated_at`) VALUES
(3, 'Aleksandar', 'Pavicevic', '347-728', 'Kragujevac', 'Bukureska', '3', '2018-11-03 14:24:52', NULL),
(4, 'Maja', 'Lajzer', '000000', 'Kragujevac', 'Atinska', '10/6', '2018-11-03 14:30:43', NULL),
(5, 'Nikola', 'Pavicevic', '347-728', 'Kragujevac', 'Bukureska', '3', '2018-11-03 14:32:49', NULL),
(6, 'Mira', 'Milic', '00000', 'Beograd', '---', '---', '2018-11-03 15:09:49', NULL),
(7, 'Zoran', 'Todorovic', '123-4578', 'Krusevac', 'Stojanova', '5', '2018-11-06 13:18:50', NULL),
(8, 'Marko', 'Arsenijevic', '258-781', 'Beograd', 'Misiceva', '20', '2018-11-06 13:19:56', NULL),
(9, 'Nikola', 'Petrovic', '745125', 'Beograd', 'Obiliceva', '7', '2018-11-06 13:20:23', NULL),
(10, 'Marko', 'Petrovic', '1556221', 'Beograd', 'Obiliceva', '21', '2018-11-06 13:20:53', NULL),
(11, 'Zorana', 'Leskovic', '842181', 'Cacak', 'Petrosiceva', '3', '2018-11-06 13:22:48', NULL),
(12, 'Milan', 'Prodanovic', '454212', 'Kragujevac', 'Grada sirena', '7', '2018-11-06 13:28:56', NULL),
(13, 'Stojan', 'Denic', '455124', 'Novi Sad', 'Bulevar Oslbodjenja', '7', '2018-11-06 13:29:41', NULL),
(14, 'Mirko', 'Topalovic', '684100', 'Beograd', 'Krusevacka', '20', '2018-11-06 13:30:45', NULL),
(15, 'Borko', 'Savic', '451212', 'Beograd', 'Deligradska', '3', '2018-11-06 13:31:21', NULL),
(16, 'Atanackovic', 'Djurdje', '984132', 'Kragujevac', 'Solunska', '7', '2018-11-06 13:32:03', NULL),
(17, 'Petar', 'Milutinovic', '418-4122', 'Cacak', 'Petrosinoviceva', '4', '2018-11-06 13:33:01', NULL),
(18, 'Sadra', 'Aksentijevaic', '4851-545', 'Cacak', 'Topalska', '17', '2018-11-06 13:40:06', NULL),
(19, 'Slavica', 'Teodosic', '542-4112', 'Kragujevac', 'Cetinska', '23', '2018-11-06 13:46:31', NULL),
(20, 'Milos', 'Savcic', '451-5414', 'Novi Sad', 'Zeleznicka', '23', '2018-11-06 13:47:20', NULL),
(21, 'Andrijana', 'Vasic', '612-5454', 'Novi Sad', 'Petrosinska', '7', '2018-11-06 13:54:11', NULL),
(22, 'Kristina', 'Malic', '521-2115', 'Nis', 'Askijeva', '6', '2018-11-06 13:55:15', NULL),
(23, 'Zoran', 'Malic', '454-541', 'Nis', 'Kaleniva', '3', '2018-11-06 13:55:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'korisnik', '', NULL, '1234', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `podaci`
--
ALTER TABLE `podaci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `podaci`
--
ALTER TABLE `podaci`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
