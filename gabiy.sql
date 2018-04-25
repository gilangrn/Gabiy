-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 07:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gabiy`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(7) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_person` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ip_address` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_device`
--

CREATE TABLE `customer_device` (
  `id` int(7) NOT NULL,
  `device_alias` varchar(20) NOT NULL,
  `pin` varchar(2) NOT NULL,
  `description` text NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `customer_id` int(7) NOT NULL,
  `device_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_device`
--

CREATE TABLE `master_device` (
  `device_id` int(4) NOT NULL,
  `name_device` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_device`
--

INSERT INTO `master_device` (`device_id`, `name_device`, `kategori`) VALUES
(1, 'lampu dapur', 'lampu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(2) NOT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `level`, `tanggal_daftar`, `token`) VALUES
('admin', '21232F297A57A5A743894A0E4A801FC3', '1', '0000-00-00 00:00:00', ''),
('gilang2', '0079fcb602361af76c4fd616d60f9414', '2', '2018-04-25 07:22:09', '2vIuSF8NqGrISiXiDjKxXoxXqZQxUBUCFUVQHVLTPXPVQPRRQZ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `customer_device`
--
ALTER TABLE `customer_device`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `device_id` (`device_id`);

--
-- Indexes for table `master_device`
--
ALTER TABLE `master_device`
  ADD PRIMARY KEY (`device_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_device`
--
ALTER TABLE `customer_device`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_device`
--
ALTER TABLE `customer_device`
  ADD CONSTRAINT `customer_device_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_device_ibfk_2` FOREIGN KEY (`device_id`) REFERENCES `master_device` (`device_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
