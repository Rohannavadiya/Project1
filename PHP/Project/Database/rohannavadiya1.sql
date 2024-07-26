-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2024 at 06:45 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rohannavadiya1`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

DROP TABLE IF EXISTS `batch`;
CREATE TABLE IF NOT EXISTS `batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `courseid` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `classtime` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `courseid`, `startdate`, `enddate`, `classtime`) VALUES
(1, 2, '2024-07-10', '2024-12-31', '10:00 AM'),
(2, 4, '2024-07-11', '2024-12-30', '11:00 AM'),
(3, 6, '2024-07-12', '2024-12-29', '09:00 AM');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `fees` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `fees`, `duration`, `description`) VALUES
(2, 'ASI', 25000, 180, 'SAMPLE DETAIL GOES HERE\r\n                        '),
(4, 'PSI', 25000, 180, 'SAMPLE DETAIL GOES HERE\r\n                        '),
(6, 'CLARK', 25000, 180, 'SAMPLE DETAIL GOES HERE\r\n                        ');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

DROP TABLE IF EXISTS `lecture`;
CREATE TABLE IF NOT EXISTS `lecture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacherid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `batchid` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `lecturedate` date NOT NULL,
  `payoutid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`id`, `teacherid`, `subjectid`, `batchid`, `duration`, `amount`, `lecturedate`, `payoutid`) VALUES
(1, 1, 1, 1, 60, 6000, '2024-07-10', NULL),
(2, 2, 2, 2, 60, 7000, '2024-07-11', NULL),
(3, 3, 3, 1, 60, 8000, '2024-07-12', NULL),
(4, 1, 1, 2, 60, 9000, '2024-07-13', NULL),
(6, 3, 3, 2, 60, 11000, '2024-07-15', NULL),
(7, 1, 1, 1, 60, 12000, '2024-07-16', NULL),
(8, 2, 2, 2, 60, 13000, '2024-07-17', NULL),
(9, 3, 3, 1, 60, 14000, '2024-07-18', NULL),
(10, 1, 1, 2, 60, 15000, '2024-07-19', NULL),
(11, 2, 2, 1, 60, 16000, '2024-07-20', NULL),
(12, 3, 3, 2, 60, 17000, '2024-07-21', NULL),
(13, 1, 1, 1, 60, 18000, '2024-07-22', NULL),
(14, 2, 2, 2, 60, 19000, '2024-07-23', NULL),
(15, 3, 3, 1, 60, 20000, '2024-07-24', NULL),
(16, 1, 1, 2, 60, 21000, '2024-07-25', NULL),
(17, 2, 2, 1, 60, 22000, '2024-07-26', NULL),
(18, 3, 3, 2, 60, 23000, '2024-07-27', NULL),
(19, 1, 1, 1, 60, 24000, '2024-07-28', NULL),
(20, 2, 2, 2, 60, 25000, '2024-07-29', NULL),
(21, 3, 3, 1, 60, 26000, '2024-07-30', NULL),
(22, 1, 1, 2, 60, 27000, '2024-07-31', NULL),
(23, 2, 2, 1, 60, 28000, '2024-08-01', NULL),
(24, 3, 3, 2, 60, 29000, '2024-08-02', NULL),
(25, 1, 1, 1, 60, 30000, '2024-08-03', NULL),
(26, 2, 2, 2, 60, 31000, '2024-08-04', NULL),
(27, 3, 3, 1, 60, 32000, '2024-08-05', NULL),
(28, 1, 1, 2, 60, 33000, '2024-08-06', NULL),
(29, 2, 2, 1, 60, 34000, '2024-08-07', NULL),
(30, 3, 3, 2, 60, 35000, '2024-08-08', NULL),
(31, 1, 1, 1, 60, 36000, '2024-08-09', NULL),
(32, 2, 2, 2, 60, 37000, '2024-08-10', NULL),
(33, 3, 3, 1, 60, 38000, '2024-08-11', NULL),
(34, 1, 1, 2, 60, 39000, '2024-08-12', NULL),
(35, 2, 2, 1, 60, 40000, '2024-08-13', NULL),
(36, 3, 3, 2, 60, 41000, '2024-08-14', NULL),
(37, 1, 1, 1, 60, 42000, '2024-08-15', NULL),
(38, 2, 2, 2, 60, 43000, '2024-08-16', NULL),
(39, 3, 3, 1, 60, 44000, '2024-08-17', NULL),
(40, 1, 1, 2, 60, 45000, '2024-08-18', NULL),
(41, 2, 2, 1, 60, 46000, '2024-08-19', NULL),
(42, 3, 3, 2, 60, 47000, '2024-08-20', NULL),
(43, 1, 1, 1, 60, 48000, '2024-08-21', NULL),
(44, 2, 2, 2, 60, 49000, '2024-08-22', NULL),
(45, 3, 3, 1, 60, 50000, '2024-08-23', NULL),
(46, 1, 1, 2, 60, 51000, '2024-08-24', NULL),
(47, 2, 2, 1, 60, 52000, '2024-08-25', NULL),
(48, 3, 3, 2, 60, 53000, '2024-08-26', NULL),
(49, 1, 1, 1, 60, 54000, '2024-08-27', NULL),
(50, 2, 2, 2, 60, 55000, '2024-08-28', NULL),
(51, 3, 3, 1, 60, 56000, '2024-08-29', NULL),
(52, 1, 1, 2, 60, 57000, '2024-08-30', NULL),
(53, 2, 2, 1, 60, 58000, '2024-08-31', NULL),
(54, 3, 3, 2, 60, 59000, '2024-09-01', NULL),
(55, 1, 1, 1, 60, 60000, '2024-09-02', NULL),
(56, 2, 2, 2, 60, 61000, '2024-09-03', NULL),
(57, 3, 3, 1, 60, 62000, '2024-09-04', NULL),
(58, 1, 1, 2, 60, 63000, '2024-09-05', NULL),
(59, 2, 2, 1, 60, 64000, '2024-09-06', NULL),
(60, 3, 3, 2, 60, 65000, '2024-09-07', NULL),
(61, 1, 1, 1, 60, 66000, '2024-09-08', NULL),
(62, 2, 2, 2, 60, 67000, '2024-09-09', NULL),
(63, 3, 3, 1, 60, 68000, '2024-09-10', NULL),
(64, 1, 1, 2, 60, 69000, '2024-09-11', NULL),
(65, 2, 2, 1, 60, 70000, '2024-09-12', NULL),
(66, 3, 3, 2, 60, 71000, '2024-09-13', NULL),
(67, 1, 1, 1, 60, 72000, '2024-09-14', NULL),
(68, 2, 2, 2, 60, 73000, '2024-09-15', NULL),
(69, 3, 3, 1, 60, 74000, '2024-09-16', NULL),
(70, 1, 1, 2, 60, 75000, '2024-09-17', NULL),
(71, 2, 2, 1, 60, 76000, '2024-09-18', NULL),
(72, 3, 3, 2, 60, 77000, '2024-09-19', NULL),
(73, 1, 1, 1, 60, 78000, '2024-09-20', NULL),
(74, 2, 2, 2, 60, 79000, '2024-09-21', NULL),
(75, 3, 3, 1, 60, 80000, '2024-09-22', NULL),
(76, 1, 1, 2, 60, 81000, '2024-09-23', NULL),
(77, 2, 2, 1, 60, 82000, '2024-09-24', NULL),
(78, 3, 3, 2, 60, 83000, '2024-09-25', NULL),
(79, 1, 1, 1, 60, 84000, '2024-09-26', NULL),
(80, 2, 2, 2, 60, 85000, '2024-09-27', NULL),
(81, 3, 3, 1, 60, 86000, '2024-09-28', NULL),
(82, 1, 1, 2, 60, 87000, '2024-09-29', NULL),
(83, 2, 2, 1, 60, 88000, '2024-09-30', NULL),
(84, 3, 3, 2, 60, 89000, '2024-10-01', NULL),
(85, 1, 1, 1, 60, 90000, '2024-10-02', NULL),
(86, 2, 2, 2, 60, 91000, '2024-10-03', NULL),
(87, 3, 3, 1, 60, 92000, '2024-10-04', NULL),
(88, 1, 1, 2, 60, 93000, '2024-10-05', NULL),
(89, 2, 2, 1, 60, 94000, '2024-10-06', NULL),
(90, 3, 3, 2, 60, 95000, '2024-10-07', NULL),
(91, 1, 1, 1, 60, 96000, '2024-10-08', NULL),
(92, 2, 2, 2, 60, 97000, '2024-10-09', NULL),
(93, 3, 3, 1, 60, 98000, '2024-10-10', NULL),
(94, 1, 1, 2, 60, 99000, '2024-10-11', NULL),
(95, 2, 2, 1, 60, 100000, '2024-10-12', NULL),
(96, 3, 3, 2, 60, 101000, '2024-10-13', NULL),
(97, 1, 1, 1, 60, 102000, '2024-10-14', NULL),
(98, 2, 2, 2, 60, 103000, '2024-10-15', NULL),
(99, 3, 3, 1, 60, 104000, '2024-10-16', NULL),
(100, 1, 1, 2, 60, 105000, '2024-10-17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

DROP TABLE IF EXISTS `password`;
CREATE TABLE IF NOT EXISTS `password` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`id`, `email`, `password`, `time`) VALUES
(1, 'rohannavadiya@gmail.com', '$2y$10$yblT.Ah2EqkVwWB7sY0Y.evaHVGEyJDbFEfyvkeV7ckQ1ior44Hy2', '2024-07-12 06:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `courseid` int(11) NOT NULL,
  `title` text NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `courseid`, `title`, `rate`) VALUES
(2, 2, 'IPS', 8000),
(4, 4, 'IAS', 50000),
(6, 6, 'Clark', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` text NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` text NOT NULL,
  `gender` int(11) NOT NULL,
  `qulification` text NOT NULL,
  `experience` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fullname`, `mobile`, `email`, `gender`, `qulification`, `experience`, `photo`) VALUES
(1, 'Ghanshyam Panday', 9625342651, 'ghanshyampanday@gmail.com', 1, 'BCA, MCA', '50', '2776-IMG-20240701-WA0001'),
(2, 'Mohan Sharma', 8315352745, 'mohansharma11@gmail.com', 1, 'MSCit', '50', '2522_WhatsApp Image 2024-07-03 at 6.36.25 PM.jpeg'),
(3, 'Vidhi Patel', 6354102828, 'vidhi95@gmail.com', 1, 'bca', '50', '4239_IMG-20240701-WA0001.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
