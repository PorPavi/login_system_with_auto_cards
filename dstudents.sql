-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 01:54 AM
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
-- Table structure for table `dstudents`
--

CREATE TABLE `dstudents` (
  `studentsID` varchar(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `regiscourses` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dstudents`
--

INSERT INTO `dstudents` (`studentsID`, `fname`, `lname`, `gender`, `regiscourses`, `mail`) VALUES
('6100000121', 'อิเล็ก', 'สื่อสาร', 'female', '2102322,2102386', '6100000121@student.chula.ac.th'),
('6112345621', 'สมหญิง', 'ลงวิชาเดียว', 'female', '2102311', '6112345621@student.chula.ac.th'),
('6136543212', 'วิศวะ', 'ไม่ลงทะเบียน', 'male', '', '61365432121@student.chula.ac.th'),
('6165432121', 'ไฟฟ้า', 'ไม่ลงแล็บ', 'other', '2102311,2102322', '6165432121@student.chula.ac.th'),
('6199999921', 'ก้าวหน้า', 'ลงทุกวิชา', 'male', '2102311,2102322,2102386', '6199999921@student.chula.ac.th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dstudents`
--
ALTER TABLE `dstudents`
  ADD PRIMARY KEY (`studentsID`),
  ADD UNIQUE KEY `mail` (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
