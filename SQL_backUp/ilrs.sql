-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2016 at 01:46 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `created_at`, `updated_at`, `title`, `body`, `excerpt`, `published_at`, `user_id`) VALUES
(1, '2016-05-30 01:32:09', '2016-05-30 01:32:09', 'My First Article', 'My First Article Body', 'Test Excerpt From Custom', '2016-05-30 01:32:09', 1),
(2, '2016-05-30 01:35:09', '2016-05-30 01:35:09', 'User Saggy Article', 'User Saggy Article Body', 'Test Excerpt From Custom', '2016-05-30 01:35:09', 7),
(3, '2016-06-01 06:57:46', '2016-06-01 06:58:06', 'Demo Sagar', 'Demo Sagar Body', 'Test Excerpt From Custom', '2016-06-01 06:58:06', 1),
(4, '2016-06-02 04:10:22', '2016-06-02 04:10:22', 'Best Flash', 'Best Flash', 'Test Excerpt From Custom', '2016-06-02 04:10:22', 1),
(5, '2016-06-02 04:11:08', '2016-06-02 04:11:08', 'yyyyyyyyyyyyyyyyyyy', 'yyyyyyyyyyyyyyyyyyyyy', 'Test Excerpt From Custom', '2016-06-02 04:11:08', 1),
(6, '2016-06-02 04:15:54', '2016-06-02 04:15:54', 'test123', 'test123', 'Test Excerpt From Custom', '2016-06-02 04:15:54', 1),
(7, '2016-06-02 04:24:21', '2016-06-02 04:24:21', 'four', 'four', 'Test Excerpt From Custom', '2016-06-02 04:24:21', 1),
(8, '2016-06-02 04:28:45', '2016-06-02 04:28:45', 'Five', 'Five', 'Test Excerpt From Custom', '2016-06-02 04:28:45', 1),
(9, '2016-06-02 04:31:04', '2016-06-02 04:31:04', 'SIX', 'SIX', 'Test Excerpt From Custom', '2016-06-02 04:31:04', 1),
(10, '2016-06-02 04:31:32', '2016-06-02 04:31:32', 'Seven', 'Seven', 'Test Excerpt From Custom', '2016-06-02 04:31:32', 1),
(11, '2016-06-02 05:18:12', '2016-06-02 05:18:12', 'Nine', 'Nine', 'Test Excerpt From Custom', '2016-06-02 05:18:12', 1),
(12, '2016-06-02 05:18:32', '2016-06-02 05:18:32', 'Nine', 'Nine', 'Test Excerpt From Custom', '2016-06-02 05:18:32', 1),
(13, '2016-06-02 05:20:41', '2016-06-02 05:20:41', 'Ten', 'Ten', 'Test Excerpt From Custom', '2016-06-02 05:20:41', 1),
(14, '2016-06-02 05:23:37', '2016-06-02 05:23:37', 'Final', 'Final', 'Test Excerpt From Custom', '2016-06-02 05:23:37', 1),
(15, '2016-06-02 05:24:29', '2016-06-02 05:24:29', 'Final One more', 'Final One more', 'Test Excerpt From Custom', '2016-06-02 05:24:29', 1),
(16, '2016-06-03 02:00:08', '2016-06-03 02:00:08', 'Test Select Tag', 'Test Select Tag', 'Test Excerpt From Custom', '2016-06-03 02:00:08', 1),
(17, '2016-06-03 02:09:55', '2016-06-03 02:09:55', 'Ariticle Personal And Coding And Writing', 'If you accidentally close your browser, use the invitation link to get back to your test.\r\n', 'Test Excerpt From Custom', '2016-06-03 02:09:55', 1),
(18, '2016-06-03 02:11:38', '2016-06-03 02:11:38', 'Ariticle Personal And Coding And Writing', 'If you accidentally close your browser, use the invitation link to get back to your test.\r\n', 'Test Excerpt From Custom', '2016-06-03 02:11:38', 1),
(19, '2016-06-03 02:17:56', '2016-06-03 02:17:56', 'Another Article with Food And Bar', 'Another Article with Food And Bar', 'Test Excerpt From Custom', '2016-06-03 02:17:56', 1),
(20, '2016-06-03 03:26:17', '2016-06-03 06:22:23', 'KKLLL', 'KKLLL', 'Test Excerpt From Custom', '2016-06-03 06:22:23', 1),
(21, '2016-06-03 06:23:14', '2016-06-03 06:23:30', 'My First Edit Article With Tag', 'My First Edit Article With Tag', 'Test Excerpt From Custom', '2016-06-03 06:23:30', 1),
(22, '2016-06-07 05:04:10', '2016-06-07 05:04:28', 'User Saggy Article New ', 'User Saggy Article New ', 'Test Excerpt From Custom', '2016-06-07 05:04:28', 8),
(23, '2016-06-07 05:42:29', '2016-06-09 05:29:21', 'Select2 Implementation ', 'Select2 Implementation ', 'Test Excerpt From Custom', '2016-06-07 05:29:21', 8),
(24, '2016-06-09 05:31:22', '2016-06-09 05:31:22', 'asa', 'aaaa', 'Test Excerpt From Custom', '2016-06-09 05:31:22', 8),
(25, '2016-06-09 05:34:10', '2016-06-09 05:34:10', 'sdfsdfsdfs', 'sdfsdf', 'Test Excerpt From Custom', '2016-06-09 05:34:10', 8),
(26, '2016-06-09 05:34:37', '2016-06-09 05:34:37', 'ssss', 'ssss', 'Test Excerpt From Custom', '2016-06-09 05:34:37', 8),
(27, '2016-06-09 05:34:54', '2016-06-09 05:34:54', 'sssss', 'sssss', 'Test Excerpt From Custom', '2016-06-09 05:34:54', 8),
(28, '2016-06-09 05:37:51', '2016-06-14 03:18:02', 'sadasdasdas', 'dasd', 'Test Excerpt From Custom', '2026-06-09 03:18:02', 8),
(29, '2016-06-09 05:38:47', '2016-06-14 03:17:31', 'Meaningfull', 'Meaningfull', 'Test Excerpt From Custom', '2026-06-09 03:17:31', 8);

-- --------------------------------------------------------

--
-- Table structure for table `article_tag`
--

CREATE TABLE `article_tag` (
  `article_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article_tag`
--

INSERT INTO `article_tag` (`article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2016-06-02 07:27:51', '2016-06-02 07:27:51'),
(19, 3, '2016-06-03 02:17:56', '2016-06-03 02:17:56'),
(19, 4, '2016-06-03 02:17:56', '2016-06-03 02:17:56'),
(20, 1, '2016-06-03 06:22:23', '2016-06-03 06:22:23'),
(20, 2, '2016-06-03 06:22:23', '2016-06-03 06:22:23'),
(20, 4, '2016-06-03 06:22:23', '2016-06-03 06:22:23'),
(21, 2, '2016-06-03 06:23:15', '2016-06-03 06:23:15'),
(21, 4, '2016-06-03 06:23:15', '2016-06-03 06:23:15'),
(21, 3, '2016-06-03 06:23:30', '2016-06-03 06:23:30'),
(22, 1, '2016-06-07 05:04:11', '2016-06-07 05:04:11'),
(22, 4, '2016-06-07 05:04:28', '2016-06-07 05:04:28'),
(23, 1, '2016-06-07 05:42:29', '2016-06-07 05:42:29'),
(23, 3, '2016-06-07 05:42:29', '2016-06-07 05:42:29'),
(23, 5, '2016-06-07 05:42:41', '2016-06-07 05:42:41'),
(25, 5, '2016-06-09 05:34:10', '2016-06-09 05:34:10'),
(25, 6, '2016-06-09 05:34:10', '2016-06-09 05:34:10'),
(27, 2, '2016-06-09 05:34:54', '2016-06-09 05:34:54'),
(27, 5, '2016-06-09 05:34:54', '2016-06-09 05:34:54'),
(28, 6, '2016-06-09 05:37:51', '2016-06-09 05:37:51'),
(29, 6, '2016-06-09 05:38:47', '2016-06-09 05:38:47'),
(29, 3, '2016-06-09 05:39:49', '2016-06-09 05:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Best Edit', 'Best Edit Description', 8, '2016-06-09 01:47:52', '2016-06-09 04:14:25'),
(5, 'Class Blog', 'Class Blog Description', 8, '2016-06-09 04:45:59', '2016-06-09 04:45:59'),
(11, 'dfgdf', 'gdfg', 8, '2016-06-09 05:01:21', '2016-06-09 05:01:21'),
(12, 'fgfghfg', 'hfghfgh', 8, '2016-06-09 05:01:27', '2016-06-09 05:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_05_30_000000_create_users_table', 1),
('2016_05_30_100000_create_password_resets_table', 1),
('2016_05_30_101930_create_article_table', 1),
('2016_05_31_055448_create_table_todos', 2),
('2016_06_02_114014_create_tags_table', 3),
('2016_06_06_060024_create_urls_table', 4),
('2016_06_09_055739_create_blog_table', 5),
('2016_06_09_061032_create_blog_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Personal', '2016-06-02 06:32:35', '2016-06-02 06:32:35'),
(2, 'work', '2016-06-03 01:52:07', '2016-06-03 01:52:07'),
(3, 'Food', '2016-06-03 01:53:21', '2016-06-03 01:53:21'),
(4, 'Bar', '2016-06-03 01:53:33', '2016-06-03 01:53:33'),
(5, 'Coding', '2016-06-03 01:53:38', '2016-06-03 01:53:38'),
(6, 'Writing', '2016-06-03 01:53:44', '2016-06-03 01:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isDone` tinyint(1) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`id`, `user_id`, `url`, `description`, `created_at`, `updated_at`) VALUES
(14, 11, 'http://google.com', 'A Search Engine', '2016-06-07 00:18:59', '2016-06-07 00:18:59'),
(15, 8, 'www.demo.com', 'demo here', '2016-06-07 01:08:54', '2016-06-07 01:08:54'),
(16, 11, 'http://google.com', 'A Search Engine', '2016-06-14 05:17:41', '2016-06-14 05:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `first_name`, `last_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'munot.sagar@gmail.com', '$2y$10$iwb4mY2FEpyMy/z4KLTAAefLKnNvHs8BLLbrkpjU2xOkCwFBkDCXO', 'Sagar', '', '', 'CokMIcg3jfWmB2UbOPQlpBugLIoIkgMIwUdbx0SmZp8B2ZhPyY52jrNo3Cdi', '2016-05-29 23:47:16', '2016-06-06 04:39:25'),
(7, 'Munot', 'munot.saggy@gmail.com', '$2y$10$abKPgYbSUT0lWVjb0uQBeemxwtCFFFjCITWIsguRkRIaU1wKO/foi', 'Munot', '', '', 'h1X0Q3jV2M5ilgwpGjFeFP14MR5NGpeu0WgH7yp26XYj5OVGzjwCYAH8dYuu', '2016-05-30 01:34:29', '2016-05-30 03:59:54'),
(8, 'sagarmunot', 'sagarmunot@gmail.com', '$2y$10$8BzIaIGAPYF6XYOWNAORQOe.6XmceRSd.EYEysu7ryKigFyKXfX1y', 'sagarmunot', 'Class', 'One', 'pNapUp2hJVuIPpRlB6IozZoJC99Zy4peYdKOhRHo5Q5Y1YBDZK57N5m6Y7m4', '2016-05-30 04:34:30', '2016-06-07 01:36:08'),
(11, 'firstuser', 'firstuser@firstuser.com', '$2y$10$HA4dnZyQQQAkoIRjIbxKZeIZ27N40ms3TKK3i0FLCnPyJWjMBIGa.', 'firstuser', 'Ffirstuser', 'Lfirstuser', NULL, '2016-06-06 01:08:31', '2016-06-06 01:08:31'),
(12, 'seconduser', 'seconduser@seconduser.com', '$2y$10$UNDSivd3PN4yzIWyx2JV0OZueAiyHWNzlZRP791xnzT7cIp40VCqm', 'seconduser', 'Fseconduser', 'Lseconduser', NULL, '2016-06-06 01:08:31', '2016-06-06 01:08:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexes for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD KEY `article_tag_article_id_index` (`article_id`),
  ADD KEY `article_tag_tag_id_index` (`tag_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `todos_user_id_foreign` (`user_id`);

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `todos`
--
ALTER TABLE `todos`
  ADD CONSTRAINT `todos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
