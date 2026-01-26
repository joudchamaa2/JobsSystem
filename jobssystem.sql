-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2026 at 05:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobssystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_skills`
--

CREATE TABLE `admin_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_skills`
--

INSERT INTO `admin_skills` (`id`, `skill_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'oop', NULL, '2026-01-22 12:26:18', '2026-01-22 12:26:18'),
(2, 'php', NULL, '2026-01-22 12:34:20', '2026-01-22 12:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ejob_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `cover_letter` text DEFAULT NULL,
  `additional_info` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `ejob_id`, `full_name`, `email`, `cv`, `cover_letter`, `additional_info`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'joud chamaa', 'joud@gmail.com', NULL, 'joud chamaa 19 years old', 'uwocbp', '2026-01-24 14:40:54', '2026-01-24 14:40:54'),
(2, 1, 1, 'joud chamaa', 'joud@gmail.com', NULL, 'ypcdwbywdcggc;', 'cbwpqygcp;q9wg', '2026-01-24 15:13:29', '2026-01-24 15:13:29'),
(3, 1, 1, 'joud chamaa', 'joud@gmail.com', 'C:\\Users\\USER\\AppData\\Local\\Temp\\php903C.tmp', 'bdmsleye', 'llasidhdte', '2026-01-24 15:16:33', '2026-01-24 15:16:33'),
(4, 1, 1, 'joud chamaa', 'joud@gmail.com', NULL, 'ncpwdyvoc', 'c;jboyqefvg', '2026-01-24 15:25:46', '2026-01-24 15:25:46'),
(5, 1, 2, 'joud chamaa', 'joud@gmail.com', '1769275761.pdf', 'bv;qwe', 'xmxmxccc', '2026-01-24 15:29:21', '2026-01-24 15:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'nice', '2026-01-04 21:10:09', '2026-01-04 21:10:09'),
(2, 1, 6, 'Congratulation', '2026-01-04 21:21:09', '2026-01-04 21:21:09'),
(3, 4, 6, 'Congratulation🎉🎉', '2026-01-04 21:23:36', '2026-01-04 21:23:36'),
(10, 1, 6, 'jjj', '2026-01-21 12:51:54', '2026-01-21 12:51:54'),
(11, 1, 18, 'nice pc', '2026-01-22 18:59:40', '2026-01-22 18:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `ejobs`
--

CREATE TABLE `ejobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `description` text NOT NULL,
  `skills` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ejobs`
--

INSERT INTO `ejobs` (`id`, `title`, `company_name`, `location`, `job_type`, `salary`, `description`, `skills`, `created_at`, `updated_at`) VALUES
(1, 'Backend Developer', 'Youbee.ai', 'nabatyeh', 'part_time', 1000, 'Work with youbee team', 'Laravel , Angular', '2026-01-24 11:33:10', '2026-01-24 11:33:10'),
(2, 'Ai engeniring', 'Youbee.ai', 'Nabatyeh', 'part_time', 1000, 'work on Ai in our company', 'python , machine learning', '2026-01-24 12:28:02', '2026-01-24 12:28:02'),
(4, 'aaaa', 'sss', 'ddd', 'full_time', 2000, 'dddddddddd', 'gggggggggggggggg', '2026-01-25 11:08:10', '2026-01-25 11:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `ejob_user`
--

CREATE TABLE `ejob_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ejob_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ejob_user`
--

INSERT INTO `ejob_user` (`id`, `user_id`, `ejob_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(4, 1, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title`, `company`, `start_date`, `end_date`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Backend Developer', 'Youbee.ai', '2020-01-22', '2026-01-22', 'Work with live wire for big project', 1, '2026-01-22 19:34:41', '2026-01-22 19:34:41'),
(2, 'Ai engeniring', 'Meta', '2024-01-17', '2025-01-09', NULL, 1, '2026-01-22 19:42:30', '2026-01-22 19:42:30');

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
-- Table structure for table `image_posts`
--

CREATE TABLE `image_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_posts`
--

INSERT INTO `image_posts` (`id`, `post_id`, `path`, `created_at`, `updated_at`) VALUES
(6, 6, '1767393536.webp', '2026-01-02 20:38:56', '2026-01-02 20:38:56'),
(10, 18, '1769033026.jpg', '2026-01-21 20:03:46', '2026-01-21 20:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(5, 1, 6, '2026-01-25 13:17:51', '2026-01-25 13:17:51'),
(6, 1, 18, '2026-01-26 13:13:52', '2026-01-26 13:13:52'),
(7, 4, 6, '2026-01-26 13:14:27', '2026-01-26 13:14:27');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_12_30_171636_add_role_to_users_table', 2),
(5, '2026_01_01_002736_add_sofdelete_to_users_table', 3),
(9, '2026_01_02_013512_create_posts_table', 4),
(10, '2026_01_02_013629_create_imagepost_table', 5),
(11, '2026_01_04_223423_create_comments_table', 6),
(12, '2026_01_20_131757_delete_soft_delete_in_posts_table', 7),
(13, '2026_01_20_141939_create_skills_table', 8),
(15, '2026_01_21_003216_rename_users_skills_table_and_columns', 10),
(18, '2026_01_22_135953_create_admin_skills_table', 11),
(19, '2026_01_22_210430_create_experiences_table', 12),
(20, '2026_01_22_221104_remove_delete_at_in_skills_table', 13),
(21, '2026_01_22_223702_add_image_and_about_to_users_table', 14),
(22, '2026_01_24_115640_create_ejobs_table', 15),
(23, '2026_01_24_130011_create_ejob_user_table', 15),
(24, '2026_01_24_155036_create_applications_table', 16),
(25, '2026_01_25_140515_add_subscription_to_users_table', 17),
(26, '2026_01_25_141204_create_prenia_table', 18),
(27, '2026_01_25_150709_create_likes_table', 19);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(6, 4, 'Complete Full Stack Web', '🎓 Certificate Achieved – Full Stack Web Development (Laravel Track)\r\n\r\nI’ve successfully completed a Full Stack Web Development certification from YouBee.ai, following a structured Laravel-focused roadmap covering both front-end and back-end development.\r\n\r\nThe program included:\r\n. HTML & CSS for building structured, responsive user interfaces\r\n. JavaScript for interactive web experiences\r\n. PHP for backend fundamentals\r\n. Laravel (MVC, Blade, routing, middleware, database integration)\r\n. Angular for building dynamic front-end applications\r\n\r\nOver 5 months, this journey strengthened my technical foundation, improved my problem-solving skills, and provided hands-on development experience.\r\nGrateful for this milestone and motivated to keep building and learning.', '2026-01-02 20:38:56', '2026-01-02 20:38:56'),
(18, 1, 'new pc', 'a series of budget-friendly, high-performance gaming laptops designed to offer a solid gaming experience without a premium price tag', '2026-01-21 20:03:46', '2026-01-21 20:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `prenia`
--

CREATE TABLE `prenia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prenia`
--

INSERT INTO `prenia` (`id`, `user_id`, `name`, `email`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, 1, 'joud chamaa', 'joud@gmail.com', '1111-2222-3333-4444', '2026-01-25 12:49:03', '2026-01-25 12:49:03'),
(2, 6, 'cat', 'cat@gmail.com', '2222-3333-4444-5555', '2026-01-25 12:50:55', '2026-01-25 12:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6HPTlA05XaglS4BVdEaG3ydNtxASjGlUk3kVm96x', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:147.0) Gecko/20100101 Firefox/147.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZkttRmpoMUVYSzFRZzdWS0pIa3p2WEg3d3hnOTlKNWRzSnpoY0FmSSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjtzOjU6InJvdXRlIjtzOjg6IkhvbWVQYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1769440467),
('qrl9yTynRuxgA9ShsEymceN3tlknBiAWohbbgzuY', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:147.0) Gecko/20100101 Firefox/147.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRmt1R21iWWV6am5XekU4blZTNHk0Rm5zczV3ODhDbzFFS1V4T215RCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjtzOjU6InJvdXRlIjtzOjg6IkhvbWVQYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1769354272);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skil` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skil`, `created_at`, `updated_at`, `user_id`) VALUES
(28, 'php', '2026-01-22 12:34:55', '2026-01-22 12:34:55', 1),
(30, 'oop', '2026-01-22 18:55:41', '2026-01-22 18:55:41', 4),
(31, 'oop', '2026-01-22 20:20:59', '2026-01-22 20:20:59', 1);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('user','admin','employer') NOT NULL DEFAULT 'user',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `is_premium` tinyint(1) NOT NULL DEFAULT 0,
  `subscription_end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `deleted_at`, `profile_image`, `about`, `is_premium`, `subscription_end`) VALUES
(1, 'joud chamaa', 'joud@gmail.com', NULL, '$2y$12$39sUWzwjJXYCYQOWpRoHQ.g7BBPc0B980W5CAVriV8b31HhzSbcaq', NULL, '2025-12-30 14:42:27', '2026-01-25 12:49:03', 'admin', NULL, '1769123797.jpg', NULL, 1, '2026-02-25'),
(3, 'ali', 'ali@gmail.com', NULL, '$2y$12$p0dIN2x9kpuU0aSlz89Yf.KkKiEXUh3McF/ABLWJG94TFAPIFTUaC', NULL, '2025-12-30 14:48:12', '2026-01-17 22:59:09', 'user', NULL, NULL, NULL, 0, NULL),
(4, 'hassan', 'hassan@gmail.com', NULL, '$2y$12$Lf3FMPCLXXXITvrqpcPbzem0eceJoB1EPl2dwDojw8txSGVaSCEoS', NULL, '2025-12-30 14:53:05', '2026-01-23 12:33:53', 'employer', NULL, '1769125065.jpg', NULL, 0, NULL),
(5, 'sisi', 'sis@gmail.com', NULL, '$2y$12$7Iy76fBYwFZMFozvVTAvguoN1nSXoiHPXsJEr.6KKDTt9wjnDGkIy', NULL, '2026-01-03 15:32:44', '2026-01-24 12:41:16', 'user', NULL, NULL, NULL, 0, NULL),
(6, 'cat', 'cat@gmail.com', NULL, '$2y$12$lX21IBg.07ANImXtQJIrgOrrxfLXTW0dJTD2O2tIDvgxEFK7LdPHq', NULL, '2026-01-24 12:35:43', '2026-01-25 12:50:55', 'employer', NULL, NULL, NULL, 1, '2026-02-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_skills`
--
ALTER TABLE `admin_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applications_user_id_foreign` (`user_id`),
  ADD KEY `applications_ejob_id_foreign` (`ejob_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `ejobs`
--
ALTER TABLE `ejobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ejob_user`
--
ALTER TABLE `ejob_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ejob_user_user_id_foreign` (`user_id`),
  ADD KEY `ejob_user_ejob_id_foreign` (`ejob_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `image_posts`
--
ALTER TABLE `image_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_posts_post_id_foreign` (`post_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`),
  ADD KEY `likes_post_id_foreign` (`post_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `prenia`
--
ALTER TABLE `prenia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prenia_email_unique` (`email`),
  ADD KEY `prenia_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
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
-- AUTO_INCREMENT for table `admin_skills`
--
ALTER TABLE `admin_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ejobs`
--
ALTER TABLE `ejobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ejob_user`
--
ALTER TABLE `ejob_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_posts`
--
ALTER TABLE `image_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `prenia`
--
ALTER TABLE `prenia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ejob_id_foreign` FOREIGN KEY (`ejob_id`) REFERENCES `ejobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ejob_user`
--
ALTER TABLE `ejob_user`
  ADD CONSTRAINT `ejob_user_ejob_id_foreign` FOREIGN KEY (`ejob_id`) REFERENCES `ejobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ejob_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_posts`
--
ALTER TABLE `image_posts`
  ADD CONSTRAINT `image_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prenia`
--
ALTER TABLE `prenia`
  ADD CONSTRAINT `prenia_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
