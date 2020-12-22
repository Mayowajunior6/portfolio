-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 11, 2020 at 11:26 PM
-- Server version: 8.0.20-0ubuntu0.20.04.1
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
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int NOT NULL,
  `name` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Medical', '2020-09-09 02:51:17', '2020-09-08 21:50:00'),
(2, 'Sport', '2020-09-09 02:51:17', '2020-09-08 21:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int NOT NULL,
  `user_id` int NOT NULL,
  `project_id` int NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `project_id`, `comment`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 'Great Product.', '2020-09-09 19:48:20', '2020-09-09 14:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int NOT NULL,
  `categories_id` int NOT NULL,
  `title` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `type` char(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `technnology` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `status` enum('deployed','development') COLLATE utf8_unicode_ci DEFAULT NULL,
  `views` int DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `categories_id`, `title`, `description`, `type`, `technnology`, `image`, `price`, `status`, `views`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(2, 2, 'MO2', 'MO2 Portfolio Site', 'Web', 'PHP,Java Script', 'portfolio.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 02:54:01', '2020-09-08 21:42:44'),
(4, 2, 'IgniterSpace', 'Kids Monitoring App For Parent', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 02:56:32', '2020-09-08 21:42:44'),
(6, 2, 'MTour', 'Tourism Suggestion App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 02:57:24', '2020-09-08 21:42:44'),
(7, 1, 'AvaBill', 'Customize CS Web App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:00:16', '2020-09-08 21:42:44'),
(8, 2, 'Info Citizen', 'Web application for Citizenship Application', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:00:16', '2020-09-08 21:42:44'),
(9, 1, 'MPredict', 'Gender and Personality Prediction', 'Web', 'PHP,Java Script', 'portfolio3.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:01:05', '2020-09-08 21:42:44'),
(10, 2, 'Issue Tracker', 'Bug Tracking Application', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:01:05', '2020-09-08 21:42:44'),
(11, 1, 'IgniterBee', 'Stock Management App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:01:42', '2020-09-08 21:42:44'),
(12, 2, 'DJob', 'Handy Worker App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:01:42', '2020-09-08 21:42:44'),
(13, 1, 'InfoPro GUI', 'CSR Web App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:02:29', '2020-09-08 21:42:44'),
(14, 2, 'Claim Assistance', 'Insurance Claim Assistance', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:02:29', '2020-09-08 21:42:44'),
(15, 1, 'IEMA', 'Instructor Evaluation Mobile App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:03:07', '2020-09-08 21:42:44'),
(16, 2, 'StarterPals', 'Social Network For Kids', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:03:07', '2020-09-08 21:42:44'),
(17, 1, 'SMMA', 'Student Management Mobile App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:04:06', '2020-09-08 21:42:44'),
(18, 2, 'InfoBiometrics', 'Finger $ Image Capturing App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:04:06', '2020-09-08 21:42:44'),
(19, 1, 'LAA', 'Location Awareness App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:05:01', '2020-09-08 21:42:44'),
(20, 2, 'Appoint', 'Appointment Management System', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:05:01', '2020-09-08 21:42:44'),
(21, 1, 'EVC', 'Elite Video Capture(Network Recording)', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:05:58', '2020-09-08 21:42:44'),
(22, 2, 'Brain Game', 'Brain Training Calculator', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:05:58', '2020-09-08 21:42:44'),
(23, 1, 'ATS', 'Airport Traffic Stimulation Framework', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:06:47', '2020-09-08 21:42:44'),
(24, 2, 'ATWA', 'Adventure Travel Web App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:06:47', '2020-09-08 21:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int DEFAULT NULL,
  `password` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `street`, `city`, `postal_code`, `province`, `country`, `phone`, `age`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Mayowa', 'Ajamu', 'mayowajunior6@gmail.com', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 22, '$2y$10$IqdyRJxjEZFEBaq8yUaWoeKE0Z/Wvp9vbaS/NVVQKsCrFaO2pcPGG', '2020-09-09 02:40:07', NULL),
(2, 'Mayowa', 'Ajamu', 'mayowajunio@gmail.com', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 12, '$2y$10$xYoZke3XnUn4PoB/jqcQa.wvxE/bJxDd8a2w8ofragxWSjD/aNaDy', '2020-09-10 01:42:37', NULL),
(3, 'Mayowa', 'Ajamu', 'mayow@gmail.com', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 12, '$2y$10$ToYFDbINgpLSGaE169YdU.Boy0jUrZdsjJteORS5ekrL/4wN.ieoW', '2020-09-10 02:13:39', NULL),
(4, 'Mayowa', 'Ajamu', 'ma@gmail.com', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 33, '$2y$10$2hA3GS7sA88wPvG7pEBYHO6x.JNiqrRUAP35T1wP51w3IS3u6MW.u', '2020-09-10 03:17:17', NULL),
(5, 'Mayowa', 'Ajamu', 'ma6@gmail.com', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 22, '$2y$10$yF6NX0iP33G49NXiV3bIVu6R3ZaYPtx2ohFjAAGtAuTCz8MhmLSry', '2020-09-10 03:26:48', NULL),
(6, 'Mayowa', 'Ajamu', 'mayowajunior@gmail.com', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 13, '$2y$10$w/u.NA4Kgf1Hv9eEdmGQKemGApRmuVs8IjeQ8NFJTpt0Q9GA/Zt7q', '2020-09-10 03:41:13', NULL),
(7, 'Mayowa', 'Ajamu', 'ma@gmail.co', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 44, '$2y$10$D/H.CnCBMW4M7FaZ.2tkdeEU8QGe2sgtsCyS8Bt9/bdIhEJjIdXiG', '2020-09-10 03:54:34', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id_idx` (`user_id`),
  ADD KEY `project_id_idx` (`project_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `categories_id_idx` (`categories_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `project_id` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `categories_id` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
