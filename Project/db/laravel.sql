-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 11, 2024 at 06:50 AM
-- Server version: 10.4.32-MariaDB
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
CREATE DATABASE IF NOT EXISTS `laravel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `laravel`;

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
  `name` varchar(100) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$VdjUpUrYZoykPfokQI0nM.4Hcq4SJl/AlxCdxA..Mma/4RUBYLdfa', NULL, '2024-04-10 21:43:29', '2024-04-10 21:43:29'),
(2, 'User1', 'user1@mail.com', NULL, '$2y$10$4Wxghi./Yc1Ws/9fjWnDt.yGuyS7k7omh9rXW9s8UcULyD7TDIyaa', NULL, '2024-04-10 21:43:47', '2024-04-10 21:43:47'),
(3, 'User2', 'user2@mail.com', NULL, '$2y$10$FRrsAdUg3rilziyk4chpROiNvrkvxV6sfdPbMJiXQQ6c7plZW6k86', NULL, '2024-04-10 21:43:59', '2024-04-10 21:43:59'),
(4, 'User3', 'user3@mail.com', NULL, '$2y$10$y5ytqCGLfuhax/g0Oav7uOA4D2VP4VCz/30QwJ9uhJzQx6XqZ/mgG', NULL, '2024-04-10 21:44:10', '2024-04-10 21:44:10'),
(5, 'User4', 'user4@mail.com', NULL, '$2y$10$qXSRUMrGpAvc75uYDg8/wudhTV397y3ud2zkotYOAVuvYlOGmd5Qa', NULL, '2024-04-10 21:44:22', '2024-04-10 21:44:22'),
(6, 'User5', 'user5@mail.com', NULL, '$2y$10$H2O1bzSND1nwtYpWMraTjOJQwWHwmWDKjaXBD.CNhTL4M17BQ895i', NULL, '2024-04-10 21:44:32', '2024-04-10 21:44:32'),
(7, 'User6', 'user6@mail.com', NULL, '$2y$10$WnkfpVGDbi2ijHcXImT1rePqTADz39fvyDDYhDw7qXSK0weH5eZNK', NULL, '2024-04-10 21:44:43', '2024-04-10 21:44:43'),
(8, 'User7', 'user7@mail.com', NULL, '$2y$10$M7jKbLeFgNhXjaEw5S0IC.ZHFLOn1qDIbDzu92E/5ngzWJrbvV01S', NULL, '2024-04-10 21:44:54', '2024-04-10 21:44:54'),
(9, 'User8', 'user8@mail.com', NULL, '$2y$10$Qv/BFyV4gaNK6ocuaivQauPxWQMQChur7UVCYtN8xTpHJsE4/aHS2', NULL, '2024-04-10 21:45:04', '2024-04-10 21:45:04'),
(10, 'User9', 'user9@mail.com', NULL, '$2y$10$ff3Zbj0rTv/bsWUmtHAoVO6my9aTN7uUnu5aDUs0Q0ovN61byZZxG', NULL, '2024-04-10 21:45:26', '2024-04-10 21:45:26'),
(11, 'User10', 'user10@mail.com', NULL, '$2y$10$47Hn5Y0F2GQEEfPWBIK3bOcDNF85vn0TeF4VQgtTG3VaxrLvfC7bm', NULL, '2024-04-10 21:45:37', '2024-04-10 21:45:37'),
(12, 'User11', 'user11@mail.com', NULL, '$2y$10$KF73JFKfZAcNqi1o3BuVyOI1ff.fkIIPcbsUVjP7eaE4XQ85YSm8O', NULL, '2024-04-10 21:45:49', '2024-04-10 21:45:49'),
(13, 'User12', 'user12@mail.com', NULL, '$2y$10$wrwPUtWS0bOpGXsDuvmD6OvjYz3ogY1qd4Ke9fGy0RPA3rfcQLb/C', NULL, '2024-04-10 21:46:11', '2024-04-10 21:46:11'),
(14, 'User13', 'user13@mail.com', NULL, '$2y$10$d4k0p/WG5hVfbC1ufBv/yei.wcEhYGXLj0IU2nvRPo9rQWqUbwPge', NULL, '2024-04-10 21:46:20', '2024-04-10 21:46:20'),
(15, 'User14', 'user14@mail.com', NULL, '$2y$10$LPhWc4pMv7fNAq8adILtQ.e8HEeGLIRU5KbaAV0Y2EveXPdm6u0p2', NULL, '2024-04-10 21:46:34', '2024-04-10 21:46:34'),
(16, 'User15', 'user15@mail.com', NULL, '$2y$10$aSYwtQ3rei0k0pJ8qbr.EubX04UMF3TYp0yu8mGK4s2FcazCMVRCi', NULL, '2024-04-10 21:46:44', '2024-04-10 21:46:44'),
(17, 'User16', 'user16@mail.com', NULL, '$2y$10$f7X3K7ozem3S1Ia6/F3wrOzCZ0.YA00RTdMcy9VnyzbzIL7ynpCcW', NULL, '2024-04-10 21:46:53', '2024-04-10 21:46:53'),
(18, 'User17', 'user17@mail.com', NULL, '$2y$10$YpW8/1uACZQr0hootBIIBuCTAmGv0Lkt9F4eP5/klrIE2A8IMTJOC', NULL, '2024-04-10 21:47:03', '2024-04-10 21:47:03'),
(19, 'User18', 'user18@mail.com', NULL, '$2y$10$mcmEszxsu4fcd7TR5ZWbv.wfDUfIlYea7Yr4DWr4F2oZUSHc09ABm', NULL, '2024-04-10 21:47:13', '2024-04-10 21:47:13'),
(20, 'User19', 'user19@mail.com', NULL, '$2y$10$gIq4ZeFa4KU85XZEXTT7OOcdngfXZDNAS44iL2wfpFbuDJDeB1W3K', NULL, '2024-04-10 21:47:22', '2024-04-10 21:47:22'),
(21, 'User20', 'user20@mail.com', NULL, '$2y$10$TL/T4y4szhwFtAkhSq37/eH/WaXkU9jQ8tg20FTuZvCqkgCtd5Acu', NULL, '2024-04-10 21:47:31', '2024-04-10 21:47:31');

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
