-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 25, 2017 at 05:33 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Bookclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE `Author` (
  `Firstname` varchar(60) CHARACTER SET latin1 NOT NULL,
  `Lastname` varchar(60) NOT NULL,
  `SSN` char(60) DEFAULT NULL,
  `Birthyear` int(60) DEFAULT NULL,
  `Link` varchar(60) DEFAULT NULL,
  `ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `ISBN` int(11) NOT NULL,
  `Pages` varchar(60) NOT NULL,
  `Edition` int(60) NOT NULL,
  `Year` int(60) NOT NULL,
  `Publishing company` varchar(60) NOT NULL,
  `Author` varchar(60) NOT NULL,
  `Title` varchar(60) NOT NULL,
  `Reserved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Book`
--

INSERT INTO `Book` (`ISBN`, `Pages`, `Edition`, `Year`, `Publishing company`, `Author`, `Title`, `Reserved`) VALUES
(2147483641, '323', 11, 2017, 'Carlsson', 'Bo Bergström', 'Effektiv visuell kommunikation', 0),
(2147483647, '272', 2, 2010, 'ROCKPORT', 'William Lidwell', 'Universal Principles of Design', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`ISBN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Author`
--
ALTER TABLE `Author`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
