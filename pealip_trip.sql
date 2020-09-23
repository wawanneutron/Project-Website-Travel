-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 05:01 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pealip_trip`
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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `travel_packages_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 8, 'assets/gallery/gXLpiXIfvgIY5eKM9xiyC3PKEbe9IVTTXUTdowIl.jpeg', NULL, '2020-09-16 02:40:29', '2020-09-19 07:58:32'),
(2, 3, 'assets/gallery/U5QYukEibOCk7T15ajJeWWJJ3sS74DcZmIwocoEG.jpeg', NULL, '2020-09-16 02:40:47', '2020-09-18 10:55:51'),
(9, 1, 'assets/gallery/LTHQAcH6re0of0zDX8ngQAakX9qxEyJUdlS1u3aG.jpeg', NULL, '2020-09-17 10:12:19', '2020-09-18 10:54:58'),
(10, 2, 'assets/gallery/XvdxDmkAA50R8PGHNYhAvJeXudBdsQOjdfH9zYNe.jpeg', NULL, '2020-09-18 10:56:56', '2020-09-18 10:56:56'),
(11, 9, 'assets/gallery/h9gR3BlBlEzaPG67FbwEPV8Bo82syUVst140oesQ.jpeg', NULL, '2020-09-18 10:57:12', '2020-09-18 10:57:12'),
(12, 8, 'assets/gallery/66NjsQhu5xsmIbXmdKUPkxDyW0JyvUMrPCFT3Utc.jpeg', NULL, '2020-09-19 07:57:58', '2020-09-19 07:57:58'),
(13, 8, 'assets/gallery/Z0kvzMVj0o75ZwnZp6Zh0KuASL5RiXzbzBq2HNyU.jpeg', NULL, '2020-09-19 07:58:13', '2020-09-19 07:58:13'),
(14, 1, 'assets/gallery/oCk8vjIFQu0cdv4Wpo7RE7oNCvMNxvvWlkv9Re8r.jpeg', NULL, '2020-09-19 08:00:21', '2020-09-19 08:00:21');

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
(4, '2020_09_13_140937_creat_travel_packages_table', 1),
(5, '2020_09_13_143748_create_galleries_table', 2),
(8, '2020_09_14_061233_add_roles_field_to_users_table', 5),
(15, '2020_09_13_145506_create_transaction_detail_table', 6),
(16, '2020_09_14_152331_add_username_field_to_users_table', 6),
(17, '2020_09_17_065929_create_transactions_table', 6);

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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `travel_packages_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `additional_visa` int(11) NOT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `travel_packages_id`, `users_id`, `additional_visa`, `transaction_total`, `transaction_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(72, 8, 8, 0, 2000000, 'PENDING', NULL, '2020-09-23 01:16:01', '2020-09-23 01:28:36'),
(73, 2, 2, 0, 0, 'IN_CART', NULL, '2020-09-23 05:01:34', '2020-09-23 05:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transactions_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_visa` tinyint(1) NOT NULL,
  `doe_passport` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transactions_id`, `username`, `nationality`, `is_visa`, `doe_passport`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 8, 'Neutron', 'ID', 0, '2020-09-26', NULL, '2020-09-10 17:00:00', '2020-09-24 17:00:00'),
(8, 8, 'lim yulia', 'ID', 1, '0000-00-00', NULL, '2020-09-17 17:00:00', '2020-09-18 17:00:00'),
(10, 9, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 01:01:57', '2020-09-20 01:01:57'),
(11, 10, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 01:02:05', '2020-09-20 01:02:05'),
(12, 11, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 01:06:18', '2020-09-20 01:06:18'),
(13, 12, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 01:16:38', '2020-09-20 01:16:38'),
(14, 13, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 01:18:34', '2020-09-20 01:18:34'),
(15, 14, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 01:42:16', '2020-09-20 01:42:16'),
(16, 15, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 01:47:13', '2020-09-20 01:47:13'),
(17, 16, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 01:57:21', '2020-09-20 01:57:21'),
(18, 17, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 02:01:42', '2020-09-20 02:01:42'),
(19, 18, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 02:05:31', '2020-09-20 02:05:31'),
(20, 19, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 02:13:58', '2020-09-20 02:13:58'),
(21, 20, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 02:17:22', '2020-09-20 02:17:22'),
(22, 21, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 02:21:45', '2020-09-20 02:21:45'),
(23, 22, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 02:24:56', '2020-09-20 02:24:56'),
(24, 23, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 02:25:34', '2020-09-20 02:25:34'),
(25, 24, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 02:29:46', '2020-09-20 02:29:46'),
(26, 25, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 02:30:22', '2020-09-20 02:30:22'),
(27, 26, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 02:36:18', '2020-09-20 02:36:18'),
(28, 27, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 02:36:23', '2020-09-20 02:36:23'),
(29, 28, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 02:37:42', '2020-09-20 02:37:42'),
(30, 29, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 04:24:16', '2020-09-20 04:24:16'),
(31, 30, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 04:41:05', '2020-09-20 04:41:05'),
(32, 31, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 04:42:51', '2020-09-20 04:42:51'),
(33, 32, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 04:44:16', '2020-09-20 04:44:16'),
(34, 33, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 04:45:12', '2020-09-20 04:45:12'),
(35, 34, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 04:48:46', '2020-09-20 04:48:46'),
(36, 35, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 04:57:55', '2020-09-20 04:57:55'),
(37, 36, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:08:57', '2020-09-20 05:08:57'),
(38, 37, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:09:11', '2020-09-20 05:09:11'),
(39, 38, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:09:55', '2020-09-20 05:09:55'),
(40, 39, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:11:25', '2020-09-20 05:11:25'),
(41, 40, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:14:20', '2020-09-20 05:14:20'),
(42, 41, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:14:44', '2020-09-20 05:14:44'),
(43, 42, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:15:50', '2020-09-20 05:15:50'),
(44, 43, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:18:27', '2020-09-20 05:18:27'),
(45, 44, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:20:53', '2020-09-20 05:20:53'),
(46, 45, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:22:08', '2020-09-20 05:22:08'),
(47, 46, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:27:49', '2020-09-20 05:27:49'),
(48, 47, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:33:22', '2020-09-20 05:33:22'),
(49, 48, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:38:39', '2020-09-20 05:38:39'),
(50, 49, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:41:21', '2020-09-20 05:41:21'),
(51, 50, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:41:36', '2020-09-20 05:41:36'),
(52, 51, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:42:50', '2020-09-20 05:42:50'),
(53, 52, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:42:58', '2020-09-20 05:42:58'),
(54, 53, 'lim yulia', 'ID', 0, '2025-09-20', NULL, '2020-09-20 05:58:19', '2020-09-20 05:58:19'),
(55, 54, 'lim yulia', 'ID', 0, '2025-09-20', NULL, '2020-09-20 06:01:02', '2020-09-20 06:01:02'),
(56, 55, 'lim yulia', 'ID', 0, '2025-09-20', NULL, '2020-09-20 06:01:34', '2020-09-20 06:01:34'),
(57, 56, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 06:03:05', '2020-09-20 06:03:05'),
(58, 57, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 06:14:22', '2020-09-20 06:14:22'),
(59, 58, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 06:22:48', '2020-09-20 06:22:48'),
(60, 59, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 06:33:12', '2020-09-20 06:33:12'),
(61, 60, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 06:34:38', '2020-09-20 06:34:38'),
(62, 61, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 06:40:15', '2020-09-20 06:40:15'),
(63, 62, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 06:45:51', '2020-09-20 06:45:51'),
(64, 63, 'Neutron', 'ID', 0, '2025-09-20', NULL, '2020-09-20 06:49:05', '2020-09-20 06:49:05'),
(65, 64, 'Neutron', 'ID', 0, '2025-09-23', '2020-09-23 01:03:13', '2020-09-23 00:01:03', '2020-09-23 01:03:13'),
(66, 65, 'lim yulia', 'ID', 0, '2025-09-23', '2020-09-23 01:01:49', '2020-09-23 00:01:54', '2020-09-23 01:01:49'),
(67, 66, 'lim yulia', 'ID', 0, '2025-09-23', '2020-09-23 01:05:16', '2020-09-23 00:13:52', '2020-09-23 01:05:16'),
(68, 66, 'Kiwil', 'Lampung', 1, '2020-09-22', '2020-09-23 01:06:31', '2020-09-23 00:44:28', '2020-09-23 01:06:31'),
(69, 65, 'lim yulia', 'ID', 0, '2020-09-24', '2020-09-23 01:07:42', '2020-09-23 01:02:23', '2020-09-23 01:07:42'),
(70, 65, 'Neutron', 'ID', 0, '2020-09-16', '2020-09-23 01:09:37', '2020-09-23 01:02:37', '2020-09-23 01:09:37'),
(71, 65, 'Kiwil', 'Malaysia', 1, '2020-09-30', '2020-09-23 01:11:50', '2020-09-23 01:03:08', '2020-09-23 01:11:50'),
(72, 67, 'lim yulia', 'ID', 0, '2025-09-23', NULL, '2020-09-23 01:03:55', '2020-09-23 01:03:55'),
(73, 67, 'Neutron', 'Id', 0, '2020-09-22', NULL, '2020-09-23 01:05:12', '2020-09-23 01:05:12'),
(74, 68, 'lim yulia', 'ID', 0, '2025-09-23', NULL, '2020-09-23 01:05:39', '2020-09-23 01:05:39'),
(75, 68, 'Neutron', 'Id', 0, '2020-09-22', NULL, '2020-09-23 01:05:52', '2020-09-23 01:05:52'),
(76, 68, 'Kiwil', 'Malaysia', 1, '2020-09-30', NULL, '2020-09-23 01:06:22', '2020-09-23 01:06:22'),
(77, 69, 'Neutron', 'ID', 0, '2025-09-23', NULL, '2020-09-23 01:07:23', '2020-09-23 01:07:23'),
(78, 69, 'lim yulia', 'Id', 0, '2020-09-01', NULL, '2020-09-23 01:07:35', '2020-09-23 01:07:35'),
(79, 70, 'Neutron', 'ID', 0, '2025-09-23', NULL, '2020-09-23 01:08:22', '2020-09-23 01:08:22'),
(80, 70, 'Kiwil', 'ID', 0, '2020-09-30', NULL, '2020-09-23 01:08:45', '2020-09-23 01:08:45'),
(81, 70, 'lim yulia', 'Malaysia', 1, '2020-09-28', NULL, '2020-09-23 01:08:56', '2020-09-23 01:08:56'),
(82, 65, 'lim yulia', 'Id', 0, '2020-10-15', NULL, '2020-09-23 01:10:23', '2020-09-23 01:10:23'),
(83, 65, 'Neutron', 'Id', 1, '2020-09-27', NULL, '2020-09-23 01:10:52', '2020-09-23 01:10:52'),
(84, 71, 'Neutron', 'ID', 0, '2025-09-23', NULL, '2020-09-23 01:11:19', '2020-09-23 01:11:19'),
(85, 71, 'lim yulia', 'Malaysia', 1, '2020-11-25', NULL, '2020-09-23 01:11:35', '2020-09-23 01:11:35'),
(86, 72, 'lim yulia', 'ID', 0, '2025-09-23', NULL, '2020-09-23 01:16:01', '2020-09-23 01:16:01'),
(87, 72, 'Cebong', 'ID', 0, '2020-09-30', '2020-09-23 01:21:53', '2020-09-23 01:16:30', '2020-09-23 01:21:53'),
(88, 72, 'fazrin', 'ID', 0, '2020-09-29', '2020-09-23 01:21:59', '2020-09-23 01:16:45', '2020-09-23 01:21:59'),
(89, 72, 'Kiwil', 'CN', 1, '2020-12-30', '2020-09-23 01:21:56', '2020-09-23 01:17:05', '2020-09-23 01:21:56'),
(90, 72, 'Neutron', 'ID', 0, '2020-08-31', NULL, '2020-09-23 01:18:44', '2020-09-23 01:18:44'),
(91, 73, 'Neutron', 'ID', 0, '2025-09-23', '2020-09-23 05:01:38', '2020-09-23 05:01:34', '2020-09-23 05:01:38'),
(92, 73, 'lim yulia', 'ID', 1, '2020-09-22', '2020-09-23 05:01:52', '2020-09-23 05:01:49', '2020-09-23 05:01:52'),
(93, 73, 'lim yulia', 'ID', 0, '2020-09-21', '2020-09-23 05:04:39', '2020-09-23 05:04:36', '2020-09-23 05:04:39'),
(94, 73, 'lim yulia', 'ID', 1, '2020-09-22', '2020-09-23 05:05:52', '2020-09-23 05:05:23', '2020-09-23 05:05:52'),
(95, 73, 'lim yulia', 'ID', 1, '2020-09-22', '2020-09-23 05:18:44', '2020-09-23 05:14:10', '2020-09-23 05:18:44'),
(96, 73, 'Kiwil', 'Malaysia', 0, '2020-09-28', '2020-09-23 05:14:45', '2020-09-23 05:14:33', '2020-09-23 05:14:45'),
(97, 73, 'lim yulia', 'ID', 0, '2020-09-22', '2020-09-23 05:21:48', '2020-09-23 05:18:55', '2020-09-23 05:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `travel_packages`
--

CREATE TABLE `travel_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `culture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `canton` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deperture_date` date NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_packages`
--

INSERT INTO `travel_packages` (`id`, `title`, `slug`, `location`, `about`, `culture`, `canton`, `deperture_date`, `duration`, `type`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Trip Mountain Semeru', 'trip-mountain-semeru', 'Semeru, East Java, Indonesian', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur non, nemo illum impedit laborum nesciunt cum eum? Vero, ipsum voluptate nihil perferendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam libero, voluptatum nisi hic iusto quisquam aliquid harum eligendi laborum illum.', 'Suku sakask', 'House ntraditional', '2020-09-25', '2D/1N', 'Open Trip', 500000, NULL, NULL, '2020-09-19 08:55:55'),
(2, 'Trip Mountain Guntur', 'trip-mountain-guntur', 'West Java', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur non, nemo illum impedit laborum nesciunt cum eum? Vero, ipsum voluptate nihil perferendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam libero, voluptatum nisi hic iusto quisquam aliquid harum eligendi laborum illum.\r\n\r\nrendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam libe', 'Tari Kecak', 'Sunda', '2020-09-10', '2D 1N', 'Open Trip', 500000, NULL, '2020-09-15 08:02:41', '2020-09-19 08:56:09'),
(3, 'Trip Mount Cikurai', 'trip-mount-cikurai', 'West Java Indonesian', 'rendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam libe\r\nrendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam libe\r\nrendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam libe', 'Sunda', 'Budaya', '2020-10-02', '2D', 'Trip', 200002, NULL, '2020-09-15 08:56:24', '2020-09-19 08:56:20'),
(5, 'sfg', 'sfg', 'fdf', 'fgddg', 'dfdfdf', 'fdfd', '2020-09-04', '2D', 'dfdf', 55, '2020-09-18 10:47:13', '2020-09-15 09:01:29', '2020-09-18 10:47:13'),
(8, 'Trip Mount Gede Pangrango', 'trip-mount-gede-pangrango', 'West Java', 'rendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam liberendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam libe\r\n\r\nrendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam libe\r\n\r\nrendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam libe', 'Candi Dieng', 'Adat Jawa', '2020-09-03', '4D 3N', 'Trip', 1000000, NULL, '2020-09-15 08:59:25', '2020-09-19 08:56:30'),
(9, 'Trip Lawu', 'trip-lawu', 'Central Java', 'rendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam liberendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam liberendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam libe\r\n\r\nrendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam libe\r\n\r\nrendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam libe\r\n\r\nrendis a nostrum? Expedita repellat aliquid commodi? Tempore, eius nobis possimus alias rem, dolorem officia magnam explicabo, vel cum eveniet harum nulla cumque expedita nisi ipsam distinctio architecto suscipit impedit veniam beatae fuga? Veritatis eius ipsa sint a aliquid, aspernatur assumenda totam voluptatem possimus vel error ab repudiandae est veniam quaerat blanditiis harum minus placeat, odit dolorum? At voluptatibus qui unde cupiditate soluta? Quis odio corporis officiis magnam libe', 'Traditional Culture', 'Candi Sukuh, Cetho, Kethek', '2020-10-15', '5 days', 'Open Trip', 2000000, NULL, '2020-09-17 09:57:03', '2020-09-19 08:56:48');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`) VALUES
(2, 'wawan setiawan', 'wawanneutron1331@gmail.com', '2020-09-20 06:02:55', '$2y$10$C1kh9HQggMKR1qdV/.2slOvuskZHrfG2N4kBUnFAoGcJ6.KnA.VZe', 'NWqDwbBoSErwn3BOMpaOY3giYeS5kq5ebzxOdVOTy2f0HYTAG5SuUGdlsMDT', '2020-09-14 00:19:28', '2020-09-20 06:02:55', 'ADMIN', 'Neutron'),
(3, 'Muhammad Fahmi', 'muhammda@gmail.com', NULL, '$2y$10$phj7kptqrOi1eq/mrcNv2uCpi7c/Yxtue69gq1B4g4U84ZuwekB4S', NULL, '2020-09-14 00:35:38', '2020-09-14 00:35:38', 'USER', 'Cebong'),
(4, 'Muhammad Akbar', 'muhammadakbar@gmail.com', NULL, '$2y$10$GWptUP0oM45pgGFpxe5A0elG.wgW63Auplkc7SB2RbmiB/1XLSttu', NULL, '2020-09-14 02:30:37', '2020-09-14 02:30:37', 'USER', ''),
(5, 'Neutron', 'neutron@gmail.com', '2020-09-14 07:45:29', '$2y$10$kLYe2u2pjNTHzT4sLB7g2ukIaZVtX/foiv9wX8LQS98A3nh2szf1W', NULL, '2020-09-14 07:43:34', '2020-09-14 07:45:29', 'USER', 'Neutron'),
(6, 'Arif Kurniawan', 'arif@gmail.com', NULL, '$2y$10$tjysG1.iEmcmjNWmdih4P.RyR/skDoMg8xZrU2nD5EGAy1RZvbBnG', NULL, '2020-09-14 09:05:27', '2020-09-14 09:05:27', 'USER', ''),
(7, 'Agus Mauludin', 'kiwilaja@gmail.com', '2020-09-14 09:17:32', '$2y$10$H5bpbTN8MkLAm557tpiwoOi185LWy3Lozqnrowz8cLoA/eE/p.b4u', NULL, '2020-09-14 09:16:58', '2020-09-14 09:17:32', 'USER', 'Kiwil'),
(8, 'Yulia', 'yulia@gmail.com', '2020-09-17 00:07:50', '$2y$10$Nw/5XyPCxjhBp37M4sbYneAZ5zCMkZ.k9jw3yScYpU3wsF/2jpVtq', '1dyKiluOxmdPppAg90DGL4H7y4JEyFktSIfwAPQVpsioqX50eVJcI4GrjVy2', '2020-09-17 00:07:00', '2020-09-20 05:58:03', 'USER', 'lim yulia'),
(9, 'Fazrin Tri Setiawati', 'fazrin@gmail.com', NULL, '$2y$10$Kwwi3oioHul6T5omKmlH0uJqxSnb0K36zo3blChHGT2Qfyr24NkH2', NULL, '2020-09-19 09:29:13', '2020-09-19 09:29:13', 'USER', 'fazrin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_packages`
--
ALTER TABLE `travel_packages`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `travel_packages`
--
ALTER TABLE `travel_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
