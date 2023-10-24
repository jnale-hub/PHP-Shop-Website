-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 11:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `img_url` varchar(255) DEFAULT 'assets/product_default.jpeg',
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `img_url`, `quantity`) VALUES
(1, 'Laptop', 899.99, 'Powerful laptop with a high-resolution display.', 'assets/laptop.jpg', 50),
(2, 'Smartphone', 699.99, 'The latest smartphone with a dual-camera setup.', 'assets/smartphone.png', 100),
(3, 'Tablet', 349.99, 'Large tablet for entertainment and productivity.', 'assets/tablet.jpg', 75),
(4, 'Smartwatch', 149.99, 'Elegant smartwatch with fitness tracking features.', 'assets/smartwatch.png', 30),
(5, 'Headphones', 99.99, 'Wireless over-ear headphones with noise-canceling.', 'assets/headphones.png', 60),
(6, 'Camera', 599.99, 'High-resolution digital camera for photography enthusiasts.', 'assets/camera.png', 20),
(7, 'Gaming Console', 499.99, 'Next-gen gaming console for immersive gaming experiences.', 'assets/product_default.jpeg', 40),
(8, 'Coffee Maker', 49.99, 'Coffee maker with programmable brewing options.', 'assets/product_default.jpeg', 120),
(9, 'Bluetooth Speaker', 39.99, 'Portable Bluetooth speaker for music on the go.', 'assets/product_default.jpeg', 80),
(10, 'Desk Chair', 129.99, 'Ergonomic desk chair with lumbar support.', 'assets/product_default.jpeg', 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text NOT NULL,
  `username` varchar(18) NOT NULL,
  `email` varchar(21) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `email`, `password`) VALUES
('Demo', 'demo', 'demo@example.com', '$2y$10$ggxQG6RZVmDiJA0wb8PMEumJ3Y8YhQweNmYU.osJrbeTc24oL/IM6'),
('John ', 'johnm', 'demo1@example.com', '$2y$10$cu8qIHx22qaCCWMZMsDaCOOAN88jxi.yvBjBE8Yt.izmv/XQCatvm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
