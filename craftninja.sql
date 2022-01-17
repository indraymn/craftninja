-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 01:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `craftninja`
--

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `fav_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2021_04_03_140246_create_posts_table', 1),
(4, '2021_04_15_143415_add_user_id_to_posts', 2),
(5, '2021_04_17_155425_add_cover_image_to_posts', 3),
(6, '2021_05_06_024628_add_user_location_to_user', 4),
(7, '2021_05_07_071751_create_reviews_table', 4),
(8, '2021_05_14_145714_add_more_to_posts', 4),
(9, '2021_05_20_045217_add_contact_to_posts', 4),
(10, '2021_05_20_151554_create_favourites_table', 4),
(11, '2021_06_10_082450_add_user_type', 4);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locationdetail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`, `location`, `locationdetail`, `category`, `cover_1`, `cover_2`, `contact_name`, `contact_phone`) VALUES
(1, 'Aloha Wash', 'Jasa cuci professional dan terpercaya', '2021-05-03 06:08:35', '2021-05-03 06:08:35', 1, '/assets/image/alohawash.jpg', 'Jakarta Barat', 'Jakarta', '', '', '', 'Suwandi', '021-123456'),
(2, 'Kingsman Workshop', 'Lorem Ipsum', '2021-05-03 06:08:35', '2021-05-03 06:08:35', 2, '/assets/image/kingsman workshop.jpg', 'Jakarta Timur', 'Jakarta', '', '', '', 'Edward Sinaga', '021-456789'),
(3, 'Indra Car Wash', 'Customer adalah prioritas kami', '2021-05-03 06:08:35', '2021-05-03 06:08:35', 3, '/assets/image/cling car wash.jpg', 'Jakarta Selatan', 'Jakarta', '', '', '', 'Indra', '021-789456'),
(4, 'Jaya Abadi Workshop', 'Lengkap dan Terpercaya', '2021-05-03 06:08:35', '2021-05-03 06:08:35', 4, '/assets/image/rizki workshop.jpg', 'Jakarta Selatan', 'Jakarta', '', '', '', 'Narendra Yudha', '021-466372'),
(5, 'Wahana Motor', 'Datang dan rasakan sendiri', '2021-05-03 06:08:35', '2021-05-03 06:08:35', 5, '/assets/uploads/wahanamotor.jpeg', 'Jakarta Selatan', 'Jakarta', '', '', '', 'Wahyu Cahyadi', '021-1295646'),
(6, 'Sumber Jaya Motor', 'Kualitas nomor 1', '2021-05-03 06:08:35', '2021-05-03 06:08:35', 6, '/assets/uploads/pakjenkin.jpg', 'Jakarta Barat', 'Jakarta', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locationdetail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `location`, `locationdetail`, `role`) VALUES
(2, 'asd', 'asd@asdd.asd', '$2y$10$nwyJtLo7JHGhN8iizbDHMuymTbmPUSqR/L9pv.n/vIabzW2mg5p.2', '8oa9TxvRVBwnM0bglVqFolAjWlrSZw9Jgg0lVPm8kzFiwSf3dWCr9OSEavZz', '2021-04-17 00:00:38', '2021-04-17 00:00:38', '', '', ''),
(3, 'asd', 'asd@asd.asd', '$2y$10$CzDFEejS5OJci1643unPRe1A98ak/UB.7IInRDAdhKicLd6D7CpgK', NULL, '2021-05-05 02:44:44', '2021-05-05 02:44:44', '', '', ''),
(4, 'indra', 'indra@gmail.com', '$2y$10$YqK2vVwbC2Fv90afVbkGUed4T6Bh/8DsuLDGnY6KGcFxJczdaET.e', 'lTIDmzLDGptMF08PMSwWcTO3GuXvo4ZzQtK3lqg7nX0mSJ0zCt6IAudmBBtY', '2021-12-14 02:06:04', '2021-12-14 02:06:04', 'jakarta', 'Kelapa Gading', 'User'),
(5, 'indra1', 'binus@gmail.com', '$2y$10$6YVWkkLHW55VLsVZuIxg0uF5Vf5456uOh7dKYi.0GxRpi20mPdbg6', '7sNWcE46GW6fu8vzXA0vIiA33vwfub9WajeoFhrFv02PYwFf3nm2jPRAN3dI', '2022-01-16 05:11:04', '2022-01-16 05:11:04', 'jakarta', 'Kelapa Gading', 'Tukang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `favourites_user_id_foreign` (`user_id`),
  ADD KEY `favourites_post_id_foreign` (`post_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_post_id_foreign` (`post_id`);

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
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `fav_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favourites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
