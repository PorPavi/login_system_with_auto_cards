-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 01:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learntestreal`
--

-- --------------------------------------------------------

--
-- Table structure for table `dteachers`
--

CREATE TABLE `dteachers` (
  `dteachersID` int(10) UNSIGNED NOT NULL,
  `teachersAbb` varchar(3) NOT NULL,
  `coursesID` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dteachers`
--

INSERT INTO `dteachers` (`dteachersID`, `teachersAbb`, `coursesID`, `fname`, `lname`, `gender`, `mail`) VALUES
(1234567890, 'KSC', '2102311,2102322,2102386', 'เก่งกาาจ', 'สอนทุกวิชา', 'male', '1234567890@teacher.chula.ac.th'),
(4294967295, 'NSL', '2102386', 'นิ่มนวล', 'สอนแลบ', 'female', '9987654321@teacher.chula.ac.th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dteachers`
--
ALTER TABLE `dteachers`
  ADD PRIMARY KEY (`dteachersID`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `teachersabbr` (`teachersAbb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
