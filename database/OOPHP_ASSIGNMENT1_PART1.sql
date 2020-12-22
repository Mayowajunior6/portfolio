-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2020 at 03:00 AM
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
(2, 2, 'AvaBill', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image1.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 02:54:01', '2020-09-08 21:42:44'),
(4, 2, 'IssueTracker', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image2.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 02:56:32', '2020-09-08 21:42:44'),
(6, 2, 'Project3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image3.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 02:57:24', '2020-09-08 21:42:44'),
(7, 1, 'Project4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image4.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:00:16', '2020-09-08 21:42:44'),
(8, 2, 'Project5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image5.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:00:16', '2020-09-08 21:42:44'),
(9, 1, 'Project6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image6.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:01:05', '2020-09-08 21:42:44'),
(10, 2, 'Project7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image7.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:01:05', '2020-09-08 21:42:44'),
(11, 1, 'Project8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image8.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:01:42', '2020-09-08 21:42:44'),
(12, 2, 'Project9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image9.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:01:42', '2020-09-08 21:42:44'),
(13, 1, 'Project10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image10.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:02:29', '2020-09-08 21:42:44'),
(14, 2, 'Project11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image11.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:02:29', '2020-09-08 21:42:44'),
(15, 1, 'Project12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image12.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:03:07', '2020-09-08 21:42:44'),
(16, 2, 'Project13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image13.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:03:07', '2020-09-08 21:42:44'),
(17, 1, 'Project14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image14.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:04:06', '2020-09-08 21:42:44'),
(18, 2, 'Project15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image15.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:04:06', '2020-09-08 21:42:44'),
(19, 1, 'Project16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image16.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:05:01', '2020-09-08 21:42:44'),
(20, 2, 'Project17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image17.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:05:01', '2020-09-08 21:42:44'),
(21, 1, 'Project18', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image18.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:05:58', '2020-09-08 21:42:44'),
(22, 2, 'Project19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image19.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:05:58', '2020-09-08 21:42:44'),
(23, 1, 'Project19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image19.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:06:47', '2020-09-08 21:42:44'),
(24, 2, 'Project20', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum eros in dui iaculis, at venenatis libero ultrices. Suspendisse eu lectus at nulla interdum eleifend at in lorem. Morbi vitae fermentum diam, quis dictum eros. Mauris dictum risus molestie lacus vestibulum, sit amet vehicula orci porttitor. Quisque vel feugiat metus.', 'Web', 'PHP,Java Script', 'image20.jpeg', 1000, 'development', 2, '2020-09-08', '2020-09-30', '2020-09-09 03:06:47', '2020-09-08 21:42:44');

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
(3, 'Mayowa', 'Ajamu', 'mayow@gmail.com', '103-25 Furby Street', 'Winnipeg', 'R3C2A2', 'Manitoba', 'Canada', '2048902513', 12, '$2y$10$ToYFDbINgpLSGaE169YdU.Boy0jUrZdsjJteORS5ekrL/4wN.ieoW', '2020-09-10 02:13:39', NULL);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
