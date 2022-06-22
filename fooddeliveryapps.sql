-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2022 at 05:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooddeliveryapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `short_description`, `description`, `image`, `image2`, `created_at`, `updated_at`) VALUES
(3, 'good food', 'asfdsgdfhgjfdgfdgf', 'test data', '1643110026.jpg', '1643110026.jpg', '2022-01-25 05:26:48', '2022-01-25 05:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `name`, `phone`, `address`, `products_title`, `quantity`, `price`, `image`, `created_at`, `updated_at`) VALUES
(11, 'User', '01823456789', 'ctg', 'Pasta', '1', '250', '1643110761.png', '2022-02-15 01:20:44', '2022-02-15 01:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fblink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtubelink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagramlink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `phone`, `email`, `address`, `fblink`, `youtubelink`, `instagramlink`, `created_at`, `updated_at`) VALUES
(2, 'Food Delivery app', '3242454654', 'abc@gmail.com', 'chittagong', 'www.facebook.com', 'www.youtube.com', 'www.instagram.com', '2022-01-20 00:28:23', '2022-01-20 00:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `fooddeliveryapps`
--

CREATE TABLE `fooddeliveryapps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fullmenus`
--

CREATE TABLE `fullmenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fullmenus`
--

INSERT INTO `fullmenus` (`id`, `title`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Burger', '300', 'special burger 2.0', '1643110738.png', '2022-01-19 06:50:46', '2022-01-25 05:38:58'),
(2, 'Pasta', '250', 'test descriptions', '1643110761.png', '2022-01-22 23:50:12', '2022-01-25 05:39:21'),
(3, 'special food', '250', 'test descriptions', '1643110791.png', '2022-01-25 05:37:54', '2022-01-25 05:39:51'),
(4, 'special item', '400', 'test descriptions', '1643110831.jpg', '2022-01-25 05:38:12', '2022-01-25 05:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'cake new', '1644128644.jpg', '2022-01-19 07:09:05', '2022-02-06 00:24:04'),
(2, 'product 1', '1644128657.jpg', '2022-01-22 00:48:53', '2022-02-06 00:24:17'),
(3, 'product2', '1644128681.jpg', '2022-02-06 00:22:58', '2022-02-06 00:24:41'),
(4, 'product4', '1644128693.jpg', '2022-02-06 00:23:21', '2022-02-06 00:24:53');

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_01_08_105615_create_fooddeliveryapps_table', 1),
(4, '2022_01_17_104415_slider', 1),
(5, '2022_01_19_045946_create_abouts_table', 2),
(6, '2022_01_19_095733_create_specialitems_table', 3),
(7, '2022_01_19_103634_create_specialitems_table', 4),
(8, '2022_01_19_103731_create_specialitems_table', 5),
(9, '2022_01_19_104230_create_fullmenus_table', 6),
(10, '2022_01_19_110300_create_testimonials_table', 7),
(11, '2022_01_19_111639_create_galleries_table', 8),
(12, '2022_01_19_111909_create_contacts_table', 9),
(13, '2022_01_25_093908_create_sliders_table', 10),
(14, '2022_01_25_101130_create_abouts_table', 11),
(15, '2022_01_26_091305_create_time_models_table', 12),
(16, '2022_02_02_101449_create_carts_table', 13),
(17, '2022_02_05_063241_create_specialitems_table', 14),
(18, '2022_02_05_074056_create_users_table', 15),
(19, '2022_02_09_095212_create_carts_table', 16),
(20, '2022_02_14_053827_create_place_orders_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `place_orders`
--

CREATE TABLE `place_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tracking_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `place_orders`
--

INSERT INTO `place_orders` (`id`, `name`, `address`, `email`, `phone`, `pay_type`, `products_title`, `quantity`, `price`, `totalprice`, `status`, `message`, `tracking_no`, `created_at`, `updated_at`) VALUES
(7, 'User', 'ctg', 'user@gmail.com', '01823456789', 'cod', 'Burger', '1', '300', '370', 0, NULL, 'order9387', '2022-02-23 05:17:26', '2022-02-23 05:17:26'),
(44, 'Mr. Kamal', 'chittagong', 'kamal@gmail.com', '01234567890', 'pvb', 'special food', '1', '250', '320', 0, NULL, 'order3653', '2022-02-26 04:22:45', '2022-02-26 04:22:45'),
(83, 'Admin', 'Dhaka', 'admin@gmail.com', '01233456789', 'cod', 'special food', '1', '250', '320', 3, NULL, 'order4432', '2022-02-26 07:00:15', '2022-02-26 07:01:56'),
(84, 'Admin', 'Dhaka', 'admin@gmail.com', '01233456789', 'cod', 'special food', '1', '250', '320', 0, NULL, 'order8561', '2022-02-26 07:00:45', '2022-02-26 07:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `website_name`, `description`, `image`, `image2`, `created_at`, `updated_at`) VALUES
(1, 'Cloud Restaurant', 'test descriptions text', '1644125620.jpeg', '1644125620.png', '2022-01-25 03:46:39', '2022-02-05 23:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `specialitems`
--

CREATE TABLE `specialitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialitems`
--

INSERT INTO `specialitems` (`id`, `title`, `phone`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Chowmein', '0385385454', '250', 'test descriptions', '1644137459.jpg', '2022-02-05 00:34:52', '2022-02-06 02:50:59'),
(2, 'Fried Toast', '0385385454', '400', 'test descriptions text', '1644137510.jpg', '2022-02-05 00:35:43', '2022-02-06 02:51:50'),
(3, 'Beef Stack', '0385385454', '800', 'test descriptions text  dgfdgfdgfh', '1644137712.jpg', '2022-02-05 00:36:16', '2022-02-06 02:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `Name`, `designation`, `description`, `created_at`, `updated_at`) VALUES
(1, 'mr.kamal', 'Banker', 'good  quality food', '2022-01-19 07:02:01', '2022-01-19 07:03:12'),
(2, 'mr. Rahim', 'Doctor', 'test descriptions two', '2022-01-22 23:34:04', '2022-01-22 23:34:04'),
(3, 'Mr. Karim', 'Engineer', 'test descriptions three', '2022-01-22 23:34:38', '2022-01-22 23:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `time_models`
--

CREATE TABLE `time_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_models`
--

INSERT INTO `time_models` (`id`, `day`, `open_time`, `close_time`, `created_at`, `updated_at`) VALUES
(1, 'Saturday', '08:00', '21:00', '2022-01-26 03:55:57', '2022-01-26 03:57:03'),
(2, 'Sunday', '09:00', '22:00', '2022-01-26 03:56:26', '2022-01-26 03:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Kamal', 'kamal@gmail.com', '01234567890', 'chittagong', '0', NULL, '$2y$10$rKltMvFLhNO.4nGpe3gnKu8bahLlYx3DvteL8AsZT1mqzu4/cfjYy', NULL, '2022-02-05 01:42:43', '2022-02-05 01:42:43'),
(2, 'Admin', 'admin@gmail.com', '01233456789', 'Dhaka', '1', NULL, '$2y$10$4FmE7MXLeuJM2rMm.q29Re1EcrU5CIM144oxYY5vjrEfsoPoSEgmW', NULL, '2022-02-05 01:43:41', '2022-02-05 01:43:41'),
(3, 'User', 'user@gmail.com', '01823456789', 'ctg', '0', NULL, '$2y$10$D2aK94zRfTVfEUPk0xwlruZjtEfEry.cAZnagasF4H4rhxdViHEcy', NULL, '2022-02-05 05:06:56', '2022-02-05 05:06:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fooddeliveryapps`
--
ALTER TABLE `fooddeliveryapps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fullmenus`
--
ALTER TABLE `fullmenus`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `place_orders`
--
ALTER TABLE `place_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialitems`
--
ALTER TABLE `specialitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_models`
--
ALTER TABLE `time_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fooddeliveryapps`
--
ALTER TABLE `fooddeliveryapps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fullmenus`
--
ALTER TABLE `fullmenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place_orders`
--
ALTER TABLE `place_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialitems`
--
ALTER TABLE `specialitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `time_models`
--
ALTER TABLE `time_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
