-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2020 at 06:29 AM
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

DROP TABLE IF EXISTS `users`;
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
(1, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', NULL, 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 22, '$2y$10$pHy7vWoHzeFtojYR3UqQxuh.uyqSaAJm7ieetwHzq1TekmgUdph/q', '2020-08-26 04:34:10', NULL),
(2, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', NULL, 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 33, '$2y$10$N3mgxK451RBR23HtBNyGI.NNBrNQdoFVotb0bwrcepxMC2tmEw5rS', '2020-08-26 04:37:52', NULL),
(3, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'Manitoba', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 33, '$2y$10$3AW/e8Pa.lWmJHUs0YUsy.gsaGcPYqGCCg1tYyBBvAZ8ecoSyABj6', '2020-08-26 04:40:40', NULL),
(4, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', NULL, 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 33, '$2y$10$oHbLCZW4I.qmNeNVui29R.SEd0MAviDwccYGowVpZ4hXoKQcRfaCe', '2020-08-26 04:41:40', NULL),
(5, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 33, '$2y$10$6MXrawGy8Jh/jfJwLFlarOUF318daRSh6KekWVu0hFQiPvjYoVqs2', '2020-08-26 04:42:55', NULL),
(6, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 44, '$2y$10$rmBD9l0hPI5uUPih6HkHQeQE4QCKTvRcVRNAXFkfb9RgHFssz9Q2G', '2020-08-26 04:48:56', NULL),
(7, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 44, '$2y$10$AJ5sA/N77wTEs9zFJhmkLO5S/srYObd1RRpQPfGg8zYnbHqrDZO/a', '2020-08-26 04:50:07', NULL),
(8, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 44, '$2y$10$L/l7ukCYjlDn367N2CsvF.GavdbI03yWMVlQ/JILW5FuEhkzm3EDi', '2020-08-26 04:53:58', NULL),
(9, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 44, '$2y$10$dgTITB0N6mrusaLTOgEtdeB83F83hqRdwr82iOgFUWvZCbIQ5rKQi', '2020-08-26 04:55:12', NULL),
(10, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 44, '$2y$10$BqqMojrrDiNsCQeXi1AV1u2Rr9BCfBA0Gj0szJJjSO/5QUMB1uYcG', '2020-08-26 05:13:35', NULL),
(11, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 44, '$2y$10$Ilq7.YykHER/0noXvo4n3OxtJVWZms2e886qqTA8B.iifD00/G.xK', '2020-08-26 05:15:14', NULL),
(12, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 44, '$2y$10$.UfNJEjywSO41BuBCAxzb.uDV1hV1P/Tuswe1lexg0rMo97nfLSiG', '2020-08-26 05:15:56', NULL),
(13, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 44, '$2y$10$O9KjcBSSbcYhviDkO2j9iunn5./iRKRzxlWIS37sJQrqnD5CskXeK', '2020-08-26 05:17:48', NULL),
(14, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 44, '$2y$10$y9/qcsLpCB9XWvudV/Klpe8LpUYyWp82pF31m4mkjleokjviHPPhW', '2020-08-26 05:19:57', NULL),
(15, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 55, '$2y$10$ws5SYgr9nU4nqyEtlad73eFTBhXayDZ5mltCB/Y38mzuPkPnimPha', '2020-08-26 06:11:22', NULL),
(16, 'Mayowa', 'Ajamu', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 'mayowajunior6@gmail.com', 88, '$2y$10$DsVLyNfprnToyMSXCKbwRu1F5wnJj2Abk4KCVftJ5drlZzR6cKTj6', '2020-08-26 06:19:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
