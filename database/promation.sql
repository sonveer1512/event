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
-- Table structure for table `promation`
--

CREATE TABLE `promation` (
  `p_ID` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_url` varchar(100) NOT NULL,
  `p_Dimage` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promation`
--

INSERT INTO `promation` (`p_ID`, `p_name`, `p_url`, `p_Dimage`, `status`, `create_date`) VALUES
(1, 'Punit Pania Live in Mumbai', 'http://localhost/event/page.php?id=1', 'pic58.jpg', 1, '2121-10-30'),
(2, 'diwali2', 'http://localhost/event/page.php?id=38', 'pic63.jpg', 1, '2121-11-02'),
(3, 'yadav', 'http://localhost/event/page.php?id=12', 'pic141.jpg', 1, '2121-11-02'),
(4, 'capture2', 'http://localhost/event/page.php?id=39', 'pic230.jpg', 1, '2121-11-02'),
(5, 'capture', 'http://localhost/event/page.php?id=39', 'pic197.jpg', 1, '2121-11-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `promation`
--
ALTER TABLE `promation`
  ADD PRIMARY KEY (`p_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `promation`
--
ALTER TABLE `promation`
  MODIFY `p_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
