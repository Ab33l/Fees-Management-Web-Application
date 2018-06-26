-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 11:57 AM
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
-- Table structure for table `api_keys`
--

CREATE TABLE `api_keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `api_key` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api_keys`
--

INSERT INTO `api_keys` (`id`, `user_id`, `api_key`) VALUES
(1, 7, 'fnxUcccnzdylZzmOj2BUT6tR8afTILYNB5cDVPlhCYb0ioXlR2WQHjXZdPGVY6OP'),
(2, 18, 'M1HwS4uvtaSbe0lhsLmNQcrRLwtXnvaIUgXtf2fdizW5MCJ9ZdGL7UqFnpgmxUWe'),
(3, 17, '0s45d77tUEVBwVn0oxLpYE9trYtncgWGnfxpviAyQ58mYaIUkxm6F5Hl6X8mZ2HS'),
(4, 20, 'VH6jJaTUu9JnwXiRsW56TBnGPSPDXXylTp1qXcnwamdH5yxxndJWUxOaJn6JlQAw'),
(5, 24, 'x4Uno9NdL40BVOy7OGzm3w6FdLgsr0YdwdKr8GzCkKzzTMk5ZrXiC01gjpslcj6a'),
(6, 23, '1GHfxWabjABQAUkU8en998sNtZXKj603Vmvf1ZjTrKEmnX2FQT6mTBiillRneQjt'),
(7, 22, 'ldgZ3LUY9rPR5f8DtRzTHneYQJtpLryi2lQy0FsrbA1IScBaJnIkEXuHdbSHHipD'),
(8, 26, 'tJxRYELj9Rwo09PgZfoOFg5xnwcTUmex8CXa9T5v018fwKNpnHtvN8NBIEZ5NN6g');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `units` int(11) DEFAULT NULL,
  `unit_price` double(5,2) DEFAULT NULL,
  `order_status` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_name`, `units`, `unit_price`, `order_status`) VALUES
(9, '', 0, 0.00, 'order placed'),
(10, 'Ugali', 12, 30.00, 'order placed'),
(17, '', 0, 0.00, ''),
(18, '', 0, 0.00, ''),
(19, '', 0, 0.00, ''),
(26, '', 0, 999.99, 'order placed'),
(29, 'Rice', 10, 100.00, 'order placed'),
(30, '', 0, 0.00, ''),
(31, 'Tea', 2, 20.00, 'order placed'),
(32, '', 0, 0.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `user_city` varchar(200) NOT NULL,
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_utc` text NOT NULL,
  `offset` text NOT NULL,
  `api_keys` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `user_city`, `id`, `username`, `password`, `user_utc`, `offset`, `api_keys`) VALUES
('Abell', 'Wasike', 'Nairobi', 21, 'Abell', '$2y$10$V2DXAo7m9/udhRMKRzwNMuS.WMQwA.tNpcsWv/neM2hZO31PE6NSe', '', '', ''),
('Cyril', 'Odhiambo', 'Kisumu', 22, 'Cyril', '$2y$10$83NtJzlfVPRHBtAr84eh1.Jmv5s976y1/a6tBpRFL3Xw7OKBazqRW', '', '', ''),
('Brian', 'Otieno', 'Kisumu', 23, 'Brian', '$2y$10$Gy.m4n2aYpVhH7aezQd0EejJjwGQYcD/Df41pJEihUgN27KQ0ppPO', '1529921457333', '-180', ''),
('John', 'Michael', 'Mombasa', 24, 'John', '$2y$10$xGyFYNpWghhgkptDXceLxuU1w6ca3Aaccd/rk.rEeNWKUI/cPhwYu', '1529921495039', '-180', ''),
('Steph', 'Curry', 'Thika', 25, 'Steph', '$2y$10$BoPJcOlLVsQd08Zrp29C9Oscaeu4NS43EuEkBSBQmHudS0AZYIAFa', '', '', ''),
('James', 'Harden', 'Busia', 26, 'James', '$2y$10$6R6UuefS2wgXt2HbhMIn1uJitzQhYim/rcrzGQ5w7eYFohbBHnenq', '1529995079166', '-180', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
