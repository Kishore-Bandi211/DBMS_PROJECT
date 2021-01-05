-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 06:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `painting`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) CHARACTER SET armscii8 NOT NULL,
  `total_paintings` int(11) NOT NULL,
  `D-no` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `email` varchar(30) NOT NULL,
  `D-no` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `painting_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `painting`
--

CREATE TABLE `painting` (
  `painting_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `theme` varchar(30) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mob` int(10) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `pw` int(11) NOT NULL,
  `cpw` int(11) NOT NULL,
  `D-no` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `no_of_paintings` int(11) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `mob`, `customer_id`, `pw`, `cpw`, `D-no`, `street`, `city`, `country`, `pincode`, `no_of_paintings`, `category`) VALUES
('Bandi Kishore Reddy', 'kishore19.bandi@gmail.com', 2147483647, 41, 12345678, 12345678, '2-4b', 'balaji venture', 'darsi', 'India', 523247, 0, ''),
('Bandi Kishore Reddy', 'kishore19.bandi@gmail.com', 2147483647, 42, 12345678, 12345678, '1234', 'asdfgh', 'darsi', 'India', 523247, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `painting`
--
ALTER TABLE `painting`
  ADD PRIMARY KEY (`painting_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
