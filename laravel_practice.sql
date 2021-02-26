-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 04:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2020_12_06_105405_create_students_table', 1),
(2, '2021_02_21_035655_create_products_table', 2),
(4, '2021_02_21_063118_create_carts_table', 3),
(6, '2021_02_21_121004_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`, `status`, `payment_method`, `payment_status`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'pending', 'bkash', 'pending', 'Polashbari, Ashulia, Dhaka.', '2021-02-21 09:07:08', '2021-02-21 09:07:08'),
(2, 1, 2, 1, 'pending', 'bkash', 'pending', 'Polashbari, Ashulia, Dhaka.', '2021-02-21 09:07:08', '2021-02-21 09:07:08'),
(3, 2, 6, 5, 'pending', 'paypal', 'pending', 'Dhaka.', '2021-02-21 09:07:47', '2021-02-21 09:07:47'),
(4, 2, 5, 2, 'pending', 'paypal', 'pending', 'Dhaka.', '2021-02-21 09:07:47', '2021-02-21 09:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `description`, `gallery`, `created_at`, `updated_at`) VALUES
(1, 'Xiaomi Redmi 9T', '15000', 'Mobile', 'This is a Xiaomi phone. 4GB RAM and more features.', 'images/xiaomi_mobile.jpg', '2021-02-20 18:00:00', '2021-02-20 18:00:00'),
(2, 'Apple Laptop', '45000', 'Laptop', 'This is a Apple Laptop and more features.', 'images/apple_laptop.jpg', '2021-02-20 18:00:00', '2021-02-20 18:00:00'),
(3, 'HP Laptop', '40000', 'Laptop', 'This is a HP Laptop and more features.', 'images/hp_laptop.jpg', '2021-02-20 18:00:00', '2021-02-20 18:00:00'),
(4, 'LG Refrigerator', '25000', 'Refrigerator', 'This is a LG Refrigerator and more features.', 'images/lg_fridge.jpg', '2021-02-20 18:00:00', '2021-02-20 18:00:00'),
(5, 'Walton Refrigerator', '22000', 'Refrigerator', 'This is a Walton Refrigerator and more features.', 'images/walton_fridge.jpg', '2021-02-20 18:00:00', '2021-02-20 18:00:00'),
(6, 'Sony TV', '20000', 'Television', 'This is a Sony Television and more features.', 'images/sony_tv.jpg', '2021-02-20 18:00:00', '2021-02-20 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Md Anwar', 'Hossain', '', '2020-12-24 00:30:01', '2020-12-24 00:30:01'),
(3, 'Md Anwar', 'Hossain', '', '2020-12-24 00:30:01', '2020-12-24 00:30:01'),
(4, 'Md Anwar', 'Hossain', '', '2020-12-24 00:30:01', '2020-12-24 00:30:01'),
(5, 'Md Anwar', 'Hossain', '', '2020-12-24 00:30:01', '2020-12-24 00:30:01'),
(6, 'Md Anwar', 'Hossain', '', '2020-12-24 00:30:01', '2020-12-24 00:30:01'),
(7, 'Md Anwar', 'Hossain', '', '2020-12-24 00:30:01', '2020-12-24 00:30:01'),
(8, 'Md Anwar', 'Hossain', '', '2020-12-24 00:30:01', '2020-12-24 00:30:01'),
(9, 'Md Anwar', 'Hossain', '', '2020-12-24 00:30:01', '2020-12-24 00:30:01'),
(10, 'Md Anwar', 'Hossain', '', '2020-12-24 00:30:01', '2020-12-24 00:30:01'),
(11, 'Md Anwar', 'Hossain', '', '2020-12-25 23:29:38', '2020-12-25 23:29:38'),
(12, 'Md Anwar', 'Hossain', '', '2020-12-25 23:29:38', '2020-12-25 23:29:38'),
(13, 'Md Anwar', 'Hossain', '', '2020-12-25 23:29:38', '2020-12-25 23:29:38'),
(14, 'Md Anwar', 'Hossain', '', '2020-12-25 23:29:38', '2020-12-25 23:29:38'),
(15, 'Md Anwar', 'Hossain', '', '2020-12-25 23:29:38', '2020-12-25 23:29:38'),
(16, 'Md Anwar', 'Hossain', '', '2020-12-25 23:29:38', '2020-12-25 23:29:38'),
(17, 'Md Anwar', 'Hossain', '', '2020-12-25 23:29:38', '2020-12-25 23:29:38'),
(18, 'Md Anwar', 'Hossain', '', '2020-12-25 23:29:38', '2020-12-25 23:29:38'),
(19, 'Md Anwar', 'Hossain', '', '2020-12-25 23:29:38', '2020-12-25 23:29:38'),
(20, 'Md Anwar', 'Hossain', '', '2020-12-25 23:29:38', '2020-12-25 23:29:38'),
(21, 'Md Anwar', 'Hossain', '', '2020-12-25 23:30:05', '2020-12-25 23:30:05'),
(22, 'Md Anwar', 'Hossain', '', '2020-12-25 23:30:05', '2020-12-25 23:30:05'),
(23, 'Md Anwar', 'Hossain', '', '2020-12-25 23:30:05', '2020-12-25 23:30:05'),
(24, 'Md Anwar', 'Hossain', '', '2020-12-25 23:30:05', '2020-12-25 23:30:05'),
(25, 'Md Anwar', 'Hossain', '', '2020-12-25 23:30:05', '2020-12-25 23:30:05'),
(26, 'Md Anwar', 'Hossain', '', '2020-12-25 23:30:05', '2020-12-25 23:30:05'),
(27, 'Md Anwar', 'Hossain', '', '2020-12-25 23:30:05', '2020-12-25 23:30:05'),
(28, 'Md Anwar', 'Hossain', '', '2020-12-25 23:30:05', '2020-12-25 23:30:05'),
(29, 'Md Anwar', 'Hossain', '', '2020-12-25 23:30:05', '2020-12-25 23:30:05'),
(30, 'Md Anwar', 'Hossain', '', '2020-12-25 23:30:05', '2020-12-25 23:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Md Anwar Hossain', 'anwar1234@gmail.com', '$2y$10$MwsLpGWK602asV2RpGPd3e5i/i197Cna/3A2zP1GVRQjE4ZLENHlS', '2021-02-16 06:59:55', '2021-02-16 06:59:55'),
(2, 'Shara_Enterprise', 'shara6493@gmail.com', '$2y$10$U0cjPXCab6gT3ToD8rJo1el9KPZ/MSbiGV1kicluNuE4EU8jgbN12', '2021-02-16 08:51:54', '2021-02-16 08:51:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
