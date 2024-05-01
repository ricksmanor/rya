-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 10:18 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rza`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_data`
--

CREATE TABLE `contact_data` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_data`
--

INSERT INTO `contact_data` (`id`, `firstname`, `lastname`, `email`, `subject`) VALUES
(1, 'bil', 'joe', 'info@rza.com', 'hey'),
(2, 'bil', 'joe', 'info@rza.com', 'hey'),
(3, 'bil', 'joe', 'info@rza.com', 'hey'),
(4, 'bil', 'joe', 'info@rza.com', 'hey'),
(5, 'bil', 'joe', 'info@rza.com', 'hey'),
(6, 'bil', 'joe', 'info@rza.com', 'hey'),
(7, 'bil', 'joe', 'info@rza.com', 'hey'),
(8, 'bil', 'joe', 'info@rza.com', 'hey'),
(9, 'bil', 'joe', 'info@rza.com', 'hey'),
(10, 'bil', 'joe', 'info@rza.com', 'hey'),
(11, 'bil', 'joe', 'info@rza.com', 'hey'),
(12, 'bil', 'joe', 'info@rza.com', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_data`
--

CREATE TABLE `hotel_data` (
  `id` int(11) NOT NULL,
  `reg_nights_hotel` int(7) NOT NULL,
  `current_regular_price` int(11) NOT NULL,
  `vip_nights_hotel` int(7) NOT NULL,
  `current_vip_price` int(11) NOT NULL,
  `reg_family_nights_hotel` int(7) NOT NULL,
  `current_family_regular_price` int(11) NOT NULL,
  `vip_family_nights_hotel` int(7) NOT NULL,
  `current_family_vip_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_data`
--

INSERT INTO `hotel_data` (`id`, `reg_nights_hotel`, `current_regular_price`, `vip_nights_hotel`, `current_vip_price`, `reg_family_nights_hotel`, `current_family_regular_price`, `vip_family_nights_hotel`, `current_family_vip_price`) VALUES
(1, 0, 130, 0, 280, 0, 180, 0, 330),
(2, 7, 130, 7, 280, 7, 180, 7, 330),
(3, 3, 130, 0, 280, 0, 180, 0, 330),
(4, 5, 130, 5, 280, 6, 180, 7, 330),
(5, 7, 130, 7, 280, 7, 180, 7, 330),
(6, 0, 130, 0, 280, 0, 180, 0, 330),
(7, 7, 130, 7, 280, 7, 180, 7, 330),
(8, 0, 130, 0, 280, 0, 180, 0, 330),
(9, 7, 130, 7, 280, 7, 180, 7, 330),
(10, 0, 130, 0, 280, 0, 180, 0, 330),
(11, 7, 130, 7, 280, 7, 180, 7, 330),
(12, 0, 130, 0, 280, 0, 180, 0, 330),
(13, 7, 130, 7, 280, 7, 180, 7, 330),
(14, 0, 130, 0, 280, 0, 180, 0, 330),
(15, 7, 130, 7, 280, 7, 180, 7, 330),
(16, 7, 130, 7, 280, 7, 180, 7, 330),
(17, 3, 130, 0, 280, 0, 180, 0, 330);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_data`
--

CREATE TABLE `ticket_data` (
  `id` int(11) NOT NULL,
  `adult_ticket` int(10) NOT NULL,
  `current_adult_price` int(11) NOT NULL,
  `child_ticket` int(5) NOT NULL,
  `current_child_price` int(11) NOT NULL,
  `os_ticket` int(10) NOT NULL,
  `current_os_price` int(11) NOT NULL,
  `family_ticket` int(2) NOT NULL,
  `current_family_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_data`
--

INSERT INTO `ticket_data` (`id`, `adult_ticket`, `current_adult_price`, `child_ticket`, `current_child_price`, `os_ticket`, `current_os_price`, `family_ticket`, `current_family_price`) VALUES
(1, 10, 16, 5, 8, 10, 12, 2, 40),
(2, 10, 16, 5, 8, 10, 12, 2, 40),
(3, 1, 16, 1, 8, 1, 12, 1, 40),
(4, 3, 16, 5, 8, 3, 12, 0, 40),
(5, 6, 16, 5, 8, 4, 12, 2, 40),
(6, 10, 16, 5, 8, 10, 12, 2, 40),
(7, 1, 16, 1, 8, 1, 12, 1, 40),
(8, 10, 16, 5, 8, 10, 12, 2, 40),
(9, 10, 16, 5, 8, 10, 12, 2, 40),
(10, 1, 16, 1, 8, 1, 12, 1, 40),
(11, 10, 16, 5, 8, 10, 12, 2, 40),
(12, 10, 16, 5, 8, 10, 12, 2, 40),
(13, 1, 16, 1, 8, 1, 12, 1, 40),
(14, 10, 16, 5, 8, 10, 12, 2, 40),
(15, 10, 16, 5, 8, 10, 12, 2, 40),
(16, 3, 16, 5, 8, 3, 12, 0, 40),
(17, 1, 16, 1, 8, 1, 12, 1, 40),
(18, 3, 16, 5, 8, 3, 12, 0, 40);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `username`, `password`, `email`) VALUES
(1, 'Admin', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'Admin@rza.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_data`
--
ALTER TABLE `contact_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_data`
--
ALTER TABLE `hotel_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_data`
--
ALTER TABLE `ticket_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_data`
--
ALTER TABLE `contact_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hotel_data`
--
ALTER TABLE `hotel_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ticket_data`
--
ALTER TABLE `ticket_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
