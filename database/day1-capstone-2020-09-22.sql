-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2020 at 03:23 PM
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
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int NOT NULL,
  `event` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `event`, `created_at`) VALUES
(1, '20-09-20 07:54:01|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/login|200', '2020-09-20 19:54:01'),
(2, '20-09-20 07:56:35|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/login|200', '2020-09-20 19:56:35'),
(3, '20-09-20 07:56:37|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/|200', '2020-09-20 19:56:37'),
(4, '20-09-20 07:56:39|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/about|200', '2020-09-20 19:56:39'),
(5, '20-09-20 07:57:22|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/portfolio|200', '2020-09-20 19:57:22'),
(6, '20-09-20 07:57:24|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/services|200', '2020-09-20 19:57:24'),
(7, '20-09-20 08:31:22|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/|200', '2020-09-20 20:31:22'),
(8, '20-09-20 08:31:23|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/about|200', '2020-09-20 20:31:23'),
(9, '20-09-20 08:31:24|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/portfolio|200', '2020-09-20 20:31:24'),
(10, '20-09-20 08:31:26|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/services|200', '2020-09-20 20:31:26'),
(11, '20-09-20 08:31:27|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/contact|200', '2020-09-20 20:31:27'),
(12, '20-09-20 08:31:28|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/register|200', '2020-09-20 20:31:28'),
(13, '20-09-20 08:31:29|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/login|200', '2020-09-20 20:31:29'),
(14, '20-09-20 08:35:36|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/|200', '2020-09-20 20:35:36'),
(15, '20-09-20 08:35:37|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/about|200', '2020-09-20 20:35:37'),
(16, '20-09-20 08:35:37|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/portfolio|200', '2020-09-20 20:35:37'),
(17, '20-09-20 08:35:38|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/services|200', '2020-09-20 20:35:38'),
(18, '20-09-21 03:14:35|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/services|200', '2020-09-21 15:14:35'),
(19, '20-09-21 03:14:38|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/register|200', '2020-09-21 15:14:38'),
(20, '20-09-21 03:14:40|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/login|200', '2020-09-21 15:14:40'),
(21, '20-09-21 03:14:42|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/services|200', '2020-09-21 15:14:42'),
(22, '20-09-21 03:14:43|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/portfolio|200', '2020-09-21 15:14:43'),
(23, '20-09-21 03:14:43|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/about|200', '2020-09-21 15:14:43'),
(24, '20-09-21 03:14:45|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/|200', '2020-09-21 15:14:45'),
(25, '20-09-22 02:20:47|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/portfolio|200', '2020-09-22 14:20:47'),
(26, '20-09-22 02:21:48|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/services|200', '2020-09-22 14:21:48'),
(27, '20-09-22 02:21:49|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/contact|200', '2020-09-22 14:21:49'),
(28, '20-09-22 02:21:50|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/register|200', '2020-09-22 14:21:50'),
(29, '20-09-22 02:21:51|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36|GET|/login|200', '2020-09-22 14:21:51');

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
  `updated_at` datetime DEFAULT NULL,
  `detailed_description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `categories_id`, `title`, `description`, `type`, `technnology`, `image`, `price`, `status`, `views`, `start_date`, `end_date`, `created_at`, `updated_at`, `detailed_description`) VALUES
(2, 2, 'MO2', 'MO2 Portfolio Site', 'Web', 'PHP,Java Script', 'portfolio.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 02:54:01', '2020-09-08 21:42:44', 'Portfolio web app that dynamically render projects and it status'),
(4, 2, 'IgniterSpace', 'Kids Monitoring App For Parent', 'Mobile', 'Ionic,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 02:56:32', '2020-09-08 21:42:44', 'This is an Ionic Hybrid App that will allow parents to upload photos/videos of their kids activities to KidsIgnite social network.'),
(6, 2, 'MTour', 'Tourism Suggestion App', 'Mobile', 'Android, Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 02:57:24', '2020-09-08 21:42:44', 'An Android application based on Location Awareness.'),
(7, 1, 'AvaBill', 'Customize CS Web App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:00:16', '2020-09-08 21:42:44', 'AvaBill is a Customer Care web Application mainly for the Telecommunication Company with functionalities of keeping records of subscribers information and activities.'),
(8, 2, 'Info Citizen', 'Web application for Citizenship Application', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:00:16', '2020-09-08 21:42:44', 'Java web application which facilitates the Online Application for Citizenship of children born out side of Sri Lanka.'),
(9, 1, 'MPredict', 'Gender and Personality Prediction', 'Web', 'PHP,Java Script', 'portfolio3.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:01:05', '2020-09-08 21:42:44', 'A web based gender and age detection framework from public domain data to enhance smart adverts on advertising ecosystems.'),
(10, 2, 'Issue Tracker', 'Bug Tracking Application', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:01:05', '2020-09-08 21:42:44', 'Issue Tracking System is a web based system with functionalities including, keeping records of Bugs, keeping records of Bug fixing and most especially keeping track of communication between Developers and QC Engineers on work flow.'),
(11, 1, 'IgniterBee', 'Stock Management App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:01:42', '2020-09-08 21:42:44', 'This is a mobile app to keep track of the stock and what it remains of it'),
(12, 2, 'DJob', 'Handy Worker App', 'Web', 'AngularJS,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:01:42', '2020-09-08 21:42:44', 'Smart Hybrid Mobile application for handy workers using Ionic version 2. (AngularJS 2)'),
(13, 1, 'InfoPro GUI', 'CSR Web App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:02:29', '2020-09-08 21:42:44', 'Infopro GUI is a Customer Care web Application mainly for the Telecommunication Company with functionalities of handling records of postpaid subscribers information and activities.'),
(14, 2, 'Claim Assistance', 'Insurance Claim Assistance', 'Web', 'PHP,Java Script, Ionic', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:02:29', '2020-09-08 21:42:44', 'Web and Mobile Insurance Claim Assistance'),
(15, 1, 'IEMA', 'Instructor Evaluation Mobile App', 'Mobile', 'Ionic,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:03:07', '2020-09-08 21:42:44', 'An Ionic Hybrid instructor evaluation mobile application'),
(16, 2, 'StarterPals', 'Social Network For Kids', 'Web', 'yii2,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:03:07', '2020-09-08 21:42:44', 'A social network for kids using HumHub (Yii2).'),
(17, 1, 'SMMA', 'Student Management Mobile App', 'Mobile', 'Ionic,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:04:06', '2020-09-08 21:42:44', 'An Ionic Hybrid student management mobile application.'),
(18, 2, 'InfoBiometrics', 'Finger $ Image Capturing App', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:04:06', '2020-09-08 21:42:44', 'Digital Finger Print Image Capture and Certification Extension to the Existing Passport Enrollment and Issuance System at The Department of Immigration and Emigration.'),
(19, 1, 'LAA', 'Location Awareness App', 'Web', 'Android, Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:05:01', '2020-09-08 21:42:44', 'An Android application based on Location Awareness.'),
(20, 2, 'Appoint', 'Appointment Management System', 'Mobile', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:05:01', '2020-09-08 21:42:44', 'The application is a basic android appointment management system, which users uses to create appointments with full details describing what is involved in each appointment.'),
(21, 1, 'EVC', 'Elite Video Capture(Network Recording)', 'Mobile', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:05:58', '2020-09-08 21:42:44', 'The Elite Capturing App is mainly an android application which major target is introducing a network Recording.'),
(22, 2, 'Brain Game', 'Brain Training Calculator', 'Mobile', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:05:58', '2020-09-08 21:42:44', 'An android brain training game, which asks users to calculate the answer to various simple arithmetic expressions.'),
(23, 1, 'ATS', 'Airport Traffic Stimulation Framework', 'Web', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:06:47', '2020-09-08 21:42:44', 'An Airport Traffic Stimulation programme ans algorithm(s) for a fictitious airport comprising of three (3) runways and two (2) terminals, which guarantee timeliness of departing and arriving flights with zero collisions.'),
(24, 2, 'ATWA', 'Adventure Travel Web App', 'Mobile', 'PHP,Java Script', 'portfolio2.jpg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:06:47', '2020-09-08 21:42:44', 'Mobile Adventure Travel Web App for suggesting places to visit ');

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
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
