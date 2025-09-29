-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2025 at 03:38 PM
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
-- Database: `community_compost`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$vDydpN5O49itSlmthqVhl.JNB.E8EV5KP/b8kSTrBKf69iZsy8J4G');

-- --------------------------------------------------------

--
-- Table structure for table `composters`
--

CREATE TABLE `composters` (
  `composter_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(400) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `composters`
--

INSERT INTO `composters` (`composter_id`, `name`, `email`, `password`, `phone`, `address`, `created_at`) VALUES
(1, 'Vilas', 'Vilas@123', '$2y$10$Qz4Bp0iSPHMBELHqd00sSOKMEz92P1Lwbtb6cAJaKwjdxpColm19S', '02345623456', 'Bangalore', '2025-04-14 17:15:51'),
(2, 'Pursi', 'pursi@123', '$2y$10$lL7HSmB6TIdGAbcOAuKf9uadS.toqKQUA7vfZXdCjli9e8ti8cTsK', '09108652107', 'Vtu Hostel Mysuru', '2025-04-14 17:33:42'),
(3, 'Composter', 'comp@123', '$2y$10$J/ijLOMpJYA8F.EovkDJr.0ivJjsYuL1G5ueeDkb.GLc4au9ROQ.m', '7204049034', 'mysure', '2025-04-14 19:00:37'),
(4, 'compost', 'compost@gmail.com', '$2y$10$O8hV9uCe2XtSifjpEklSgOOoSjTPntglMmiPDCwb1E47Eg6yh7olK', '7686965645', 'Bengaluru', '2025-09-28 13:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `contributions`
--

CREATE TABLE `contributions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `waste_kg` decimal(5,2) DEFAULT NULL,
  `date_contributed` date DEFAULT NULL,
  `status` enum('Incomplete','Complete') DEFAULT 'Incomplete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contributions`
--

INSERT INTO `contributions` (`id`, `user_id`, `waste_kg`, `date_contributed`, `status`) VALUES
(1, 1, 6.00, '2025-04-14', 'Complete'),
(5, 7, 100.00, '2025-04-14', 'Complete'),
(6, 7, 5.00, '2025-04-14', 'Complete'),
(7, 8, 4.00, '2025-04-14', 'Complete'),
(8, 2, 1.00, '2025-04-14', 'Complete'),
(9, 1, 1.00, '2025-04-14', 'Complete'),
(10, 3, 1.00, '2025-04-14', 'Complete'),
(11, 3, 1.00, '2025-04-14', 'Complete'),
(12, 3, 100.00, '2025-04-14', 'Complete'),
(13, 3, 20.00, '2025-04-14', 'Complete'),
(14, 9, 200.00, '2025-09-28', 'Complete'),
(15, 9, 5.00, '2025-09-28', 'Complete'),
(16, 9, 1.00, '2025-09-28', 'Complete'),
(17, 9, 500.00, '2025-09-28', 'Complete'),
(18, 9, 7.00, '2025-09-28', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT '',
  `address` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(1, 'Deekshi', 'deekshi@123', '$2y$10$0MuZYvA3HQFXlYXo6hDr2eBSKC8MHG/ILPO1rCZW6Dmpxe8Pr7iki', '', ''),
(2, 'Vilas', 'vilas@123', '$2y$10$5mDitiT6Od8m8N5n7RKDTuz8igeFcS8Tv8PfzwKg4zsQTO7OiBMqC', '', ''),
(3, 'Vilas', 'vilas@1234', '$2y$10$Mstd7VQnV8ls34GoLxDtTu317FJWtERUJ/RVB84EUrYhiEnAFSCXC', '02345623456', 'Bangalore'),
(6, 'Ramu', 'ramu@123', '$2y$10$tYF8JU2vpfoWBSxPAngt4uSXxB9PNvpMYpUrzqQvTp.1.U/2v27Oq', '02345623456', 'Bangalore'),
(7, 'User', 'user@123', '$2y$10$3EaDY1FcocuvwiCsRd5fBOpGCcuj6Wh1eb0ixIL/9sUMnqmLvvKEG', '3456783456', 'mysuru'),
(8, 'User2', 'user2@123', '$2y$10$hOINh1V9K6GactZIfsQBfO/ogwDaKWhb6OBoNYHi2UC/PtG5MW6Uq', '1234512345', 'Bengalor'),
(9, 'User3', 'user3@gmail.com', '$2y$10$fpUT6dsFcpbpu5CDARoM7O1tZ8cwjfHFQ6hPrL9h2dyL8cjbCRxsW', '7656468696', 'Mysuru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `composters`
--
ALTER TABLE `composters`
  ADD PRIMARY KEY (`composter_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `contributions`
--
ALTER TABLE `contributions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `composters`
--
ALTER TABLE `composters`
  MODIFY `composter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contributions`
--
ALTER TABLE `contributions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contributions`
--
ALTER TABLE `contributions`
  ADD CONSTRAINT `contributions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
