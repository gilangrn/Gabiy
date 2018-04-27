-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 10:26 AM
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
  `customer_id` varchar(7) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_person` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `token` varchar(50) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `username`, `password`, `name`, `address`, `contact_person`, `email`, `ip_address`, `token`, `level`) VALUES
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin SD Tech', 'PT. Sinergi Digital Ruko Bintaro', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_device`
--

CREATE TABLE `customer_device` (
  `id` varchar(7) NOT NULL,
  `nama_device` varchar(50) NOT NULL,
  `device_alias` varchar(20) NOT NULL,
  `pin` varchar(2) NOT NULL,
  `description` text NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `customer_id` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_device`
--
ALTER TABLE `customer_device`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_device`
--
ALTER TABLE `customer_device`
  ADD CONSTRAINT `customer_device_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
