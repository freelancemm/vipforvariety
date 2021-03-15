-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 03:16 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vipuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`) VALUES
(1, 'test9', 'test@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `uploadedmovies`
--

CREATE TABLE `uploadedmovies` (
  `movieid` int(11) NOT NULL,
  `moviename` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `releaseyear` varchar(255) NOT NULL,
  `runtime` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `URL1` varchar(1000) DEFAULT NULL,
  `URL2` varchar(1000) DEFAULT NULL,
  `URL3` varchar(1000) DEFAULT NULL,
  `imagepath` varchar(1000) NOT NULL,
  `moviepath` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `lastupdateddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `mid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `username`, `passwd`, `name`, `phone`, `email`, `DOB`, `mid`) VALUES
(1, 'admin@gmail.com', 'admin', 'shubham belgaonkar', '8692849041', 'shubhamb756@gmail.com', '25/04/1998', 7),
(4, 'soubik@gmail.com', '1234', 'soubik bera', '8622849041', 'soubik@gmail.com', '16/10/1995', 7),
(5, 'niru@gmail.com', '1234', 'niru lal', '1234287564', 'niru@gmail.com', '16/09/1996', 7),
(6, 'janobe@gmail.com', 'admin', 's s', '9876565421', 'janobe@gmail.com', '15/01/1995', 7);

-- --------------------------------------------------------

--
-- Table structure for table `vipusers`
--

CREATE TABLE `vipusers` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `accexpiredate` date NOT NULL,
  `lastupdateddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vipusers`
--

INSERT INTO `vipusers` (`userid`, `username`, `email`, `password`, `accexpiredate`, `lastupdateddate`) VALUES
(1, 'Aung Aung', 'test@gmail.com', '12345', '2021-03-16', '2021-03-14 17:30:00'),
(2, 'test test', 'test2@gmail.com', '12345', '2021-02-23', '2021-02-23 17:30:00'),
(3, 'Aung Aung', 'test2t@gmail.com', '12345', '2021-02-24', '2021-02-23 17:30:00'),
(4, 'Aung Aung', 'test3@gmail.com', '12345', '2021-02-26', '2021-02-23 17:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadedmovies`
--
ALTER TABLE `uploadedmovies`
  ADD PRIMARY KEY (`movieid`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `vipusers`
--
ALTER TABLE `vipusers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uploadedmovies`
--
ALTER TABLE `uploadedmovies`
  MODIFY `movieid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vipusers`
--
ALTER TABLE `vipusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user1`
--
ALTER TABLE `user1`
  ADD CONSTRAINT `user1_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
