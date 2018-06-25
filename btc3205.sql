-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 03:45 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btc3205`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_key`
--

CREATE TABLE `api_key` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `api_key` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(50) NOT NULL,
  `units` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `user_city` varchar(32) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` text,
  `user_utc` date NOT NULL,
  `offset` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_city`, `username`, `password`, `user_utc`, `offset`) VALUES
(23, 'John', 'James', 'Kisumu', 'John', '$2y$10$QULKJ9JQKl26Jd6gWbe.T.WSNYsiVs32Gucr.P17D3yz9jh5BSiFm', '0000-00-00', '0000-00-00'),
(24, 'Abel', 'Wasike', 'Nairobi', 'Nairobi', '$2y$10$bSYmX2RwYbgPljaI7cfUuepzme/2dFtjhKjpmZmdP9HFqyEhaLj4K', '0000-00-00', '0000-00-00'),
(25, 'Steph', 'Curry', 'Oakland', NULL, NULL, '0000-00-00', '0000-00-00'),
(26, 'Kawhi', 'Leonard', 'Mombasa', 'Kawhi', '$2y$10$p4mxn3pPgyeuGQosapENeevjb8F7HuGGucPYVKU0fA4E4DkMqW4v6', '0000-00-00', '0000-00-00'),
(27, 'John', 'Michael', 'Busia', 'Michael', '$2y$10$NZ.sYPuBZXQrFTYBhiF2c.lA8HKFyco1Ndf1SsUUiT02664b9rMOe', '0000-00-00', '0000-00-00'),
(28, 'Jane', 'Doe', 'Isiolo', 'Doe', '$2y$10$Zox/EdKKm6LoKs7xeYMPguBzWcP0/Nh2LV4xRJl5ZQ2NNfWlYm1W6', '0000-00-00', '0000-00-00'),
(31, 'Peter', 'Tom', 'Nairobi', 'Tom', '$2y$10$nSgiADzABUfCBRHEfY0U8uM2lThpPiZkxL8lpnc9jLMKctDDOUrVi', '0000-00-00', '0000-00-00'),
(32, 'David', 'Goliath', 'Kisumu', 'David', '$2y$10$76WCCd4d5JNepxTzm0jgwu7CclQGijevBUUo9u3xEaNF8vy09PVki', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_key`
--
ALTER TABLE `api_key`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_key`
--
ALTER TABLE `api_key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
