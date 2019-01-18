-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2018 at 05:37 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs342_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `cid` int(11) NOT NULL COMMENT 'Class ID',
  `cname` varchar(100) NOT NULL COMMENT 'Class Name',
  `ccode` varchar(10) NOT NULL COMMENT 'Class Code'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`cid`, `cname`, `ccode`) VALUES
(1, 'Database Design', 'CS-342'),
(2, 'Funny English', 'LR-235'),
(3, 'God Programming', 'Gp-999'),
(4, 'ROV Basic', 'RB-101'),
(5, 'Communicate', 'Cm-011'),
(6, 'Statistic', 'St-203'),
(7, 'Geology', 'Ge-845'),
(8, 'Chemistry', 'Cm-215'),
(9, 'Physics', 'Ps-210'),
(10, 'Mechanical Courses', 'MC-301');

-- --------------------------------------------------------

--
-- Table structure for table `classregister`
--

CREATE TABLE `classregister` (
  `crid` int(11) NOT NULL COMMENT 'ClassRegister ID',
  `sid` int(11) NOT NULL COMMENT 'sid from table students',
  `cid` int(11) NOT NULL COMMENT 'cid from table class',
  `c_rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classregister`
--

INSERT INTO `classregister` (`crid`, `sid`, `cid`, `c_rid`) VALUES
(1, 1, 1, 7),
(2, 1, 2, 5),
(3, 2, 5, 4),
(4, 2, 3, 9),
(5, 2, 4, 3),
(6, 3, 6, 2),
(7, 3, 7, 6),
(8, 3, 8, 1),
(9, 4, 9, 10),
(10, 4, 10, 9),
(11, 5, 1, 8),
(12, 5, 3, 5),
(13, 5, 4, 7),
(14, 6, 2, 9),
(15, 6, 5, 1),
(16, 7, 9, 3),
(17, 7, 7, 2),
(18, 7, 3, 8),
(19, 7, 4, 4),
(20, 9, 8, 6),
(21, 9, 6, 10),
(22, 10, 2, 7),
(23, 10, 3, 3),
(24, 11, 1, 9),
(25, 11, 3, 6),
(37, 12, 4, 9),
(38, 14, 2, 7),
(39, 14, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `c_rid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`c_rid`, `cid`, `rid`) VALUES
(1, 5, 1),
(2, 1, 1),
(3, 4, 1),
(4, 10, 2),
(5, 7, 2),
(6, 3, 2),
(7, 2, 3),
(8, 6, 3),
(9, 8, 3),
(10, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `mid` int(11) NOT NULL,
  `mname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`mid`, `mname`) VALUES
(1, 'Computer Science'),
(2, 'Computer Engineer'),
(3, 'Information Technology'),
(4, 'Digital Community');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `rid` int(11) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `rcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`rid`, `rname`, `rcode`) VALUES
(1, 'Laboratory4', 'Lab04'),
(2, 'Science3202', 'S-3202'),
(3, 'Digital2507', 'D-2507');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `scode` varchar(10) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `sname`, `scode`, `mid`) VALUES
(1, 'Kukkik', '0', 1),
(2, 'Wiraya Pongpitthayut', '5904101365', 2),
(3, 'Rotchana Kota', '5904101357', 2),
(4, 'Supisara Jandang', '5904101375', 2),
(5, 'Wiraiwan Kanyana', '5904101362', 3),
(6, 'Suwitchaya Nantachai', '5904101386', 4),
(7, 'Sunisa Kongkasam', '5904101380', 1),
(9, 'Samatcha Bansri', '5904101395', 3),
(10, 'Sumsak Rakdee', '5904101301', 4),
(11, 'Sumsak Sawadee', '5904101303', 1),
(12, 'Sumsri Sawadee', '5904101305', 4),
(14, 'Som Jidee', '5904101309', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `classregister`
--
ALTER TABLE `classregister`
  ADD PRIMARY KEY (`crid`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`c_rid`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Class ID', AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `classregister`
--
ALTER TABLE `classregister`
  MODIFY `crid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ClassRegister ID', AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `c_rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
