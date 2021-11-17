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
-- Table structure for table `dsubjects`
--

CREATE TABLE `dsubjects` (
  `dsubjectsID` int(7) UNSIGNED NOT NULL,
  `nameTH` varchar(255) NOT NULL,
  `nameEN` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `registotal` int(3) NOT NULL,
  `regispresent` int(3) NOT NULL,
  `semesterID` int(3) NOT NULL,
  `credit` decimal(10,0) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dsubjects`
--

INSERT INTO `dsubjects` (`dsubjectsID`, `nameTH`, `nameEN`, `content`, `registotal`, `regispresent`, `semesterID`, `credit`, `class`) VALUES
(2102311, 'การวัดและเครื่องมือวัดทางไฟฟ้า', 'Electrical Measurement and Instrumentation', 'หน่วยและเครื่องมือมาตรฐานในการวัดทางไฟฟ้า การแบ่งกลุ่มและสมบัติอุปกรณ์ การวิเคราะห์การวัด การวัดกระแสและแรงดัน DC และ AC ด้วยอุปกรณ์แอนะลอก และอุปกรณ์ดิจิทัล การวัดกำลัง ตัวประกอบกำลัง และพลังงาน การวัดค่าความต้านทาน ค่าความเหนี่ยวนำ ค่าความเก็บประจุ การว', 140, 0, 0, '3', ''),
(2102322, 'การส่งผ่านสัญญาณโทรคมนาคม', 'Telecomunication Transmission', 'การสื่อสารแบบใช้สายและไร้สาย เครือข่ายสื่อสารแบบใช้สาย เมทริกซ์แซด เมทริกซ์วาย เมทริกซ์เฮส และ เมทริกซ์เอ-บี-ชี-ดี วงจรเชื่อมต่อเบื้องต้น การแปลงสภาพเครือข่าย ปริมาณการส่งผ่านสัญญาณ เทคนิคการต่อวงจรส่งผ่านสัญญาณ ตัวกรองคลื่น ตัวลดทอนสัญญาณ การแมตช์อิมพีแด', 70, 0, 0, '3', 'communication'),
(2102386, 'วงจรอิเล็กทรอนิกส์และปฏิบัติการ', 'Electronics Circuits and Laboratory', 'อุปกรณ์สารกึ่งตัวนำ สมบัติกระแส-แรงดัน และสมบัติความถี่ การวิเคราะห์และออกแบบวงจรไดโอด การวิเคราะห์และออกแบบวงจรทรานชิสเตอร์ชนิด BJT MOS CMOS และ BiCMOS ออปแอมป์ และการใช้งาน โมดูลตัวจ่ายกำลัง การทดลองที่เกี่ยวกับสิ่งประดิษฐ์สารกึ่งตัวนำ วงจรขยายทรานชิสเต', 125, 0, 0, '4', 'electronics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dsubjects`
--
ALTER TABLE `dsubjects`
  ADD PRIMARY KEY (`dsubjectsID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
