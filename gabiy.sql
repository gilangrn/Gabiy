-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 01:32 PM
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
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_person` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ip_address` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `username`, `name`, `address`, `contact_person`, `email`, `ip_address`) VALUES
('CUS001', 'gilang', 'gilang romadhon nurohman', 'jakarta barat', '08888', 'gilang@gilang.com', '192.192'),
('CUS002', 'gilang', 'romadhon', 'SAs', '123', 'ada@sdaad.copm', '1212'),
('CUS003', 'yfh__', 'Yusuf Ferdian', 'jakarta barat', '08008880', 'gilang@gmail.com', '192.168.100.31');

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
-- Dumping data for table `customer_device`
--

INSERT INTO `customer_device` (`id`, `nama_device`, `device_alias`, `pin`, `description`, `keyword`, `kategori`, `customer_id`) VALUES
('CD0002', 'Lampu Lantai satu', 'lampu depan kamar', '15', 'lampu yang oke', 'lampu,oke', 'lampu', 'CUS001');


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
('gilang', '0079fcb602361af76c4fd616d60f9414', '2', '2018-04-25 11:55:51', 'LPCjsHEaoJpVEGGsFjFVOoNORsvQxzECPWWYNITGNSMZLPVXQW'),
('yfh__', '5f4dcc3b5aa765d61d8327deb882cf99', '2', '0000-00-00 00:00:00', 'onwHYchJzYgAgsAziWBoNHvqvWSLEvEGCZUUTTYNTPJKOYYNYW');

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
  ADD KEY `customer_id` (`customer_id`);


--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

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
  ADD CONSTRAINT `customer_device_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
