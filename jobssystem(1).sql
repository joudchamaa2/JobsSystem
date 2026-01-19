-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2026 at 10:42 PM
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
-- Database: `jobssystem`
--

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
(4, 1, 15, 'what is MVC?', '2026-01-09 20:50:16', '2026-01-09 20:50:16'),
(5, 1, 16, 'yess', '2026-01-09 20:55:14', '2026-01-09 20:55:14'),
(6, 1, 16, 'i want to apply', '2026-01-17 22:57:44', '2026-01-17 22:57:44'),
(7, 4, 17, 'tfehhhhhh', '2026-01-17 23:04:55', '2026-01-17 23:04:55'),
(8, 1, 17, 'walla ma3ak ha2 ya sahbe', '2026-01-17 23:05:28', '2026-01-17 23:05:28'),
(9, 4, 17, 'ya zalame yasser l hajjar m elo fiha', '2026-01-17 23:06:01', '2026-01-17 23:06:01');

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
(5, 5, '1767389515.png', '2026-01-02 19:31:56', '2026-01-02 19:31:56'),
(6, 6, '1767393536.webp', '2026-01-02 20:38:56', '2026-01-02 20:38:56'),
(7, 7, '1767461456.jpg', '2026-01-03 15:30:56', '2026-01-03 15:30:56'),
(8, 9, '1767565185.jpg', '2026-01-04 20:19:45', '2026-01-04 20:19:45'),
(9, 17, '1768698276.jpg', '2026-01-17 23:04:36', '2026-01-17 23:04:36');

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
(11, '2026_01_04_223423_create_comments_table', 6);

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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 4, 'jjj', 'aaaaaaaaaaaaaaa', '2026-01-04 20:16:19', '2026-01-02 19:31:55', '2026-01-04 20:16:19'),
(6, 4, 'Complete Full Stack Web', '🎓 Certificate Achieved – Full Stack Web Development (Laravel Track)\r\n\r\nI’ve successfully completed a Full Stack Web Development certification from YouBee.ai, following a structured Laravel-focused roadmap covering both front-end and back-end development.\r\n\r\nThe program included:\r\n. HTML & CSS for building structured, responsive user interfaces\r\n. JavaScript for interactive web experiences\r\n. PHP for backend fundamentals\r\n. Laravel (MVC, Blade, routing, middleware, database integration)\r\n. Angular for building dynamic front-end applications\r\n\r\nOver 5 months, this journey strengthened my technical foundation, improved my problem-solving skills, and provided hands-on development experience.\r\nGrateful for this milestone and motivated to keep building and learning.', NULL, '2026-01-02 20:38:56', '2026-01-02 20:38:56'),
(7, 1, 'create new project', 'jvhcvicwhhewf', '2026-01-04 20:18:22', '2026-01-03 15:30:56', '2026-01-04 20:18:22'),
(8, 1, 'aaa', 'aaa', '2026-01-04 20:22:16', '2026-01-04 20:19:05', '2026-01-04 20:22:16'),
(9, 1, 'aa', 'aa', '2026-01-04 20:19:56', '2026-01-04 20:19:45', '2026-01-04 20:19:56'),
(10, 1, 'chek', 'cc', '2026-01-04 20:25:46', '2026-01-04 20:24:13', '2026-01-04 20:25:46'),
(11, 1, 'chek', 'cc', '2026-01-04 20:25:01', '2026-01-04 20:24:51', '2026-01-04 20:25:01'),
(12, 1, 'ww', 'ww', '2026-01-04 20:28:08', '2026-01-04 20:26:57', '2026-01-04 20:28:08'),
(13, 1, 'zz', 'zz', '2026-01-04 20:28:38', '2026-01-04 20:28:32', '2026-01-04 20:28:38'),
(14, 1, 'zz', 'zz', '2026-01-04 20:29:05', '2026-01-04 20:28:56', '2026-01-04 20:29:05'),
(15, 1, 'What is MVC', 'Model View Controller', NULL, '2026-01-09 20:49:54', '2026-01-09 20:49:54'),
(16, 1, 'new job', 'i want senior web development', '2026-01-17 23:00:04', '2026-01-09 20:54:59', '2026-01-17 23:00:04'),
(17, 4, 'Data structure', 'what is linked list', NULL, '2026-01-17 23:04:36', '2026-01-17 23:04:36');

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
('EVnI5Ma0DqYmc2J0Rti3c1mfoqlSRJdXaBlq1FM5', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUGc5YVhHMWJlZlZDQW9pU0dWM0tIcFhsMUZqTEhWdFJmbVo0VHdpRiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjtzOjU6InJvdXRlIjtzOjg6IkhvbWVQYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1768698361);

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
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `deleted_at`) VALUES
(1, 'joud', 'joud@gmail.com', NULL, '$2y$12$39sUWzwjJXYCYQOWpRoHQ.g7BBPc0B980W5CAVriV8b31HhzSbcaq', NULL, '2025-12-30 14:42:27', '2025-12-30 14:42:27', 'admin', NULL),
(3, 'ali', 'ali@gmail.com', NULL, '$2y$12$p0dIN2x9kpuU0aSlz89Yf.KkKiEXUh3McF/ABLWJG94TFAPIFTUaC', NULL, '2025-12-30 14:48:12', '2026-01-17 22:59:09', 'user', NULL),
(4, 'hassan', 'hassan@gmail.com', NULL, '$2y$12$Lf3FMPCLXXXITvrqpcPbzem0eceJoB1EPl2dwDojw8txSGVaSCEoS', NULL, '2025-12-30 14:53:05', '2026-01-01 20:17:33', 'user', NULL),
(5, 'sisi', 'sis@gmail.com', NULL, '$2y$12$7Iy76fBYwFZMFozvVTAvguoN1nSXoiHPXsJEr.6KKDTt9wjnDGkIy', NULL, '2026-01-03 15:32:44', '2026-01-17 22:59:35', 'user', '2026-01-17 22:59:35');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_posts`
--
ALTER TABLE `image_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_posts`
--
ALTER TABLE `image_posts`
  ADD CONSTRAINT `image_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
