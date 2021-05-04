-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 03:50 PM
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
-- Table structure for table `movieurls`
--

CREATE TABLE `movieurls` (
  `url_id` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  `URL1` varchar(500) DEFAULT NULL,
  `URL2` varchar(500) DEFAULT NULL,
  `URL3` varchar(500) DEFAULT NULL,
  `URL4` varchar(500) DEFAULT NULL,
  `URL5` varchar(500) DEFAULT NULL,
  `URL6` varchar(500) DEFAULT NULL,
  `URL7` varchar(500) DEFAULT NULL,
  `URL8` varchar(500) DEFAULT NULL,
  `URL9` varchar(500) DEFAULT NULL,
  `URL10` varchar(500) DEFAULT NULL,
  `lastupdateddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movieurls`
--

INSERT INTO `movieurls` (`url_id`, `movieid`, `URL1`, `URL2`, `URL3`, `URL4`, `URL5`, `URL6`, `URL7`, `URL8`, `URL9`, `URL10`, `lastupdateddate`) VALUES
(9, 140, 'https://yoteshinportal.cc/drive/vm-running-man-ep-553-mp-4', 'https://mega.nz/file/bdFnnQwB#fEcoGYWJQzibcp6Lw_7iMcqDDWiNhzQxETMCmGK0Cbs', 'https://www.datbu.com/5gqjuoz0jsyp.html', 'https://mega.nz/file/DYtGnLrI#eVdxGfpLLZUrC2aADq3UWQZOQqQ4yb0gFoVNxS4_a4M', '', '', '', '', '', '', '2021-05-04 08:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `uploadedmovies`
--

CREATE TABLE `uploadedmovies` (
  `movieid` int(11) NOT NULL,
  `moviename` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `releaseyear` varchar(255) NOT NULL,
  `runtime` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `imagepath` varchar(1000) NOT NULL,
  `moviepath` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `lastupdateddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadedmovies`
--

INSERT INTO `uploadedmovies` (`movieid`, `moviename`, `size`, `releaseyear`, `runtime`, `description`, `imagepath`, `moviepath`, `image`, `movie`, `lastupdateddate`) VALUES
(140, 'tom and jerry', '1 GB', '2021', '02:32:36', 'movie upload test', 'uploadimages/Aya_logo.png', 'https://www.datbu.com/embed-w4ifu568zasq.html', 'Aya_logo.png', 'https://www.datbu.com/embed-w4ifu568zasq.html', '2021-05-04 01:49:11');

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
(3, 'Aung Aung', 'test2tt@gmail.com', '12345', '2021-02-24', '2021-04-30 17:30:00'),
(4, 'Aung Aung', 'test3@gmail.com', '12345', '2021-02-26', '2021-02-23 17:30:00'),
(6, 'test', 'aung@gmail.com', 'test', '2021-05-14', '2021-04-30 17:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movieurls`
--
ALTER TABLE `movieurls`
  ADD PRIMARY KEY (`url_id`),
  ADD KEY `movieid` (`movieid`);

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
-- AUTO_INCREMENT for table `movieurls`
--
ALTER TABLE `movieurls`
  MODIFY `url_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `uploadedmovies`
--
ALTER TABLE `uploadedmovies`
  MODIFY `movieid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vipusers`
--
ALTER TABLE `vipusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movieurls`
--
ALTER TABLE `movieurls`
  ADD CONSTRAINT `movieid` FOREIGN KEY (`movieid`) REFERENCES `uploadedmovies` (`movieid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user1`
--
ALTER TABLE `user1`
  ADD CONSTRAINT `user1_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
