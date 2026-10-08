-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2026 at 06:19 AM
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
-- Database: `pos_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Juan Dela Cruz', 'juan@email.com', '09171234567', '2026-09-30 22:31:26'),
(2, 'Maria Santos', 'maria@email.com', '09182345678', '2026-09-30 22:31:26'),
(3, 'Pedro Reyes', 'pedro@email.com', '09193456789', '2026-09-30 22:31:26'),
(4, 'Ana Garcia', 'ana@email.com', '09204567890', '2026-09-30 22:31:26'),
(5, 'Jose Ramo', 'jos@email.com', '09215678901', '2026-09-30 22:31:26'),
(9, 'Rean Adrian', 'valenciareanadrian@gmail.com', '09195728616', '0000-00-00 00:00:00'),
(10, 'Juan Aitz', 'Juan@gmail.com', '091234567', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `task_date` date NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `status`, `task_date`, `created_at`) VALUES
(1, 'Review CodeIgniter lesson', 'pending', '2026-10-01', '2026-10-01 00:53:41'),
(2, 'Create database tables', 'completed', '2026-10-01', '2026-10-01 00:53:41'),
(3, 'Build TaskModel', 'pending', '2026-10-01', '2026-10-01 00:53:41'),
(4, 'Test the homepage', 'pending', '2026-09-30', '2026-10-01 00:53:41'),
(5, 'Check database connection', 'completed', '2026-09-30', '2026-10-01 00:53:41'),
(6, 'Create About page', 'pending', '2026-10-02', '2026-10-01 00:53:41'),
(7, 'Create Profile page', 'pending', '2026-10-02', '2026-10-01 00:53:41'),
(8, 'Prepare GitHub README', 'pending', '2026-10-03', '2026-10-01 00:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `created_at`, `email`, `password`, `avatar`) VALUES
(1, 'jcruz', 'Juan Cruz', '2026-09-30 22:31:26', 'rean@example.com', '$2y$10$Y5ri1Fxmt8gQkRpYwdNMJuIW0mPWcjC77CwkWFabe2H0PLrccc/rK', NULL),
(2, 'msantos', 'Maria Santos', '2026-09-30 22:31:26', 'maria@gmail.com', '$2y$10$Y5ri1Fxmt8gQkRpYwdNMJuIW0mPWcjC77CwkWFabe2H0PLrccc/rK', NULL),
(3, 'preyes', 'Pedro Reyes', '2026-09-30 22:31:26', 'preyes@gmail.com', '$2y$10$Y5ri1Fxmt8gQkRpYwdNMJuIW0mPWcjC77CwkWFabe2H0PLrccc/rK', NULL),
(4, 'agarcia', 'Ana Garcia', '2026-09-30 22:31:26', 'garcia@gmail.com', '$2y$10$Y5ri1Fxmt8gQkRpYwdNMJuIW0mPWcjC77CwkWFabe2H0PLrccc/rK', NULL),
(5, 'jramos', 'Jose Ramos', '2026-09-30 22:31:26', 'Ramos@gmail.com', '$2y$10$Y5ri1Fxmt8gQkRpYwdNMJuIW0mPWcjC77CwkWFabe2H0PLrccc/rK', '1791390311_8bb923c89cba1fe0463d.jpg'),
(6, 'Rean Justin', 'PaloMu', '2026-10-07 22:33:52', 'Varchar67@gmail.com', '$2y$10$Y5ri1Fxmt8gQkRpYwdNMJuIW0mPWcjC77CwkWFabe2H0PLrccc/rK', '1791384979_9d726c26b2955cb31a77.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
