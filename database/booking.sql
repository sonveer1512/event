-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 02:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(11) NOT NULL,
  `eventid` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `quntity` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `gst` int(100) NOT NULL,
  `status` int(11) NOT NULL,
  `createddate` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `eventid`, `userid`, `quntity`, `price`, `gst`, `status`, `createddate`, `total`) VALUES
(1, 1, 0, 2, 127, 46, 0, 2121, 300),
(2, 1, 0, 4, 127, 91, 1, 2121, 599),
(3, 1, 0, 4, 127, 91, 1, 2121, 599),
(4, 1, 0, 5, 127, 114, 1, 2121, 749),
(5, 23, 0, 3, 599, 323, 1, 2121, 2120),
(6, 23, 0, 3, 599, 323, 1, 2121, 2120),
(7, 23, 0, 0, 599, 0, 1, 2121, 0),
(16, 12, 2, 3, 127, 69, 1, 2121, 450);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
