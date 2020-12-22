-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2020 at 06:53 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `street`, `city`, `postal_code`, `province`, `country`, `phone`, `email`, `age`, `password`, `created_at`, `updated_at`) VALUES
(31, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 22, '$2y$10$cwmaGJksYpWeCU/QyLwRGuJuam6Vk/auihyrJ8ILlYX6nuDbuV9fi', '2020-09-04 02:18:44', NULL),
(32, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior@gmail.com', 22, '$2y$10$g1TIXp.uQWav3AqrA/Aweeq6U8Z1RiHNUV9SjnEcQlYEUXRS/CsWG', '2020-09-04 05:47:47', NULL),
(33, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunio@gmail.com', 22, '$2y$10$HkJ4w5PKYyW29mlfoVkgOu9DR6gSTaAtWRsl4wJ.jJfKZgEj6UgTi', '2020-09-04 05:49:34', NULL),
(34, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajun@gmail.com', 22, '$2y$10$0ktcMLdWC18Afn50lHklveSxyogBkuk74jQLydiWtPQFpXiDLkMRq', '2020-09-04 06:00:45', NULL),
(36, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowaj@gmail.com', 12, '$2y$10$N2c6BgBQVQ/3nTBou2HH4OHX0rghd35KIDhNrkihezc4o40el9TbG', '2020-09-04 06:06:24', NULL),
(37, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayow@gmail.com', 22, '$2y$10$OK3Qj5nF.zpOwchUErMdA.jSMlLLYKr.Gv3jDPZcVSGdhbEFdgERq', '2020-09-04 06:15:13', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
