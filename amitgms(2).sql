-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 03:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amitgms`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipmenet`
--

CREATE TABLE IF NOT EXISTS `equipmenet` (
`e_id` int(11) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `vendor` varchar(30) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `Etype` varchar(20) NOT NULL,
  `profile` longblob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipmenet`
--

INSERT INTO `equipmenet` (`e_id`, `ename`, `vendor`, `user_id`, `phone`, `Etype`, `profile`) VALUES
(9, 'Amana', 'kindea', '1234564', '091085625', 'erobics', 0x61612e706e67),
(10, 'amans', 'amanc', '4563', '0910723377', 'volleyball', 0x61612e706e67),
(11, 'amnac', 'amndd', '45564', '0910723378', 'bodymass', 0x61612e706e67),
(12, 'dampleq', 'seral', '1212', '0931975818', 'erobics', 0x433a78616d7070096d70706870393535462e746d70);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`f_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `fname`, `email`, `message`, `date`, `status`) VALUES
(2, 'ddgljg', 'lslkddhglk@yahoo.com', 'kdhjfskdghjdkjhkjh', '10/06/2016', 'read'),
(3, 'amanfldjf', 'amankinde1@gmail.com', 'vvvvvvvvvvvvvvvvvvvvvvvvvv', '10/02/2018', 'read'),
(4, 'weare the ', 'amankinde1@gmail.com', 'we are', '13/02/2018', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE IF NOT EXISTS `maintenance` (
`m_id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `eq` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`m_id`, `fname`, `email`, `eq`, `message`, `date`, `status`) VALUES
(3, 'amankinde', 'amankinde2000@gmail.com', 'dample ', 'the which is enter in this week has been crash plase enter the name', '10/02/2018', 'read'),
(5, 'boodit', 'bo@gmail.com', 'amankdjfksjd', 'llllllllllllllllll', '24/03/2018', 'read'),
(6, 'adfsdf', 'amankinde@gmail.com', 'adfdsf', 'adfsdf', '24/03/2018', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`member_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `worktype` varchar(10) NOT NULL,
  `tgym` varchar(25) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profile` longblob NOT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `registration_date` varchar(255) DEFAULT NULL,
  `last_payment` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `fname`, `lname`, `user_id`, `phone`, `age`, `email`, `worktype`, `tgym`, `user_type`, `gender`, `username`, `password`, `profile`, `payment`, `registration_date`, `last_payment`) VALUES
(9, 'Aman', 'kinde', '123456', '091085623', 10, 'amankinde10@gmail.com', '', '', 'admin', 'male', 'admin', 'admin', 0x61632e706e67, NULL, NULL, NULL),
(10, 'aman', 'aman', '456', '0910723379', 12, 'aman@gmail.com', '', '', 'trainer', 'male', 'trainer', 'trainer', 0x61622e706e67, NULL, NULL, NULL),
(11, 'amna', 'amnd', '4556', '0910723379', 20, 'amanu@gmail.com', 'staff', 'erobics', 'trainee', 'female', 'trainee', 'trainee', 0x612e706e67, NULL, NULL, NULL),
(12, 'Acountant', 'acconter', '123', '092085623', 10, 'amankinde10@gmail.com', '', '', 'accountant', 'male', 'account', 'account', 0x612e706e67, NULL, NULL, NULL),
(14, 'abebe', 'bekele', '1234', '0934345444', 11, 'n@a.com', 'student', '', 'trainee', 'male', 'abc', '123', 0x433a78616d7070096d70706870374431332e746d70, NULL, NULL, NULL),
(15, 'abebe', 'kebede', 'abebe', '0947474747', 21, 'ab@ab.com', 'student', '', 'trainee', 'male', 'abebe', '1234', 0x433a78616d7070096d70706870363038302e746d70, NULL, NULL, NULL),
(16, 'abebe', 'dereje', 'kebede', '0947474747', 21, 'abe@ab.com', 'student', '', 'trainee', 'male', 'bekele', '12345', 0x433a78616d7070096d70706870353937322e746d70, 'waiting for approval', NULL, NULL),
(18, 'kebe', 'abe', 'abe', '0901010101', 12, 'abe@ab.com', 'staff', '', 'trainee', 'male', 'abe', '12345', 0x433a78616d7070096d70706870363342342e746d70, 'complete', NULL, NULL),
(19, 'john', 'dere', 'john', '1234567890', 12, 'ab@ab.com', 'guest', '', 'trainee', 'male', 'john', '12345', 0x433a78616d7070096d70706870313532312e746d70, 'complete', NULL, NULL),
(20, 'tom', 'hanks', 'tom', '0191010101', 14, 'ab@ab.com', 'student', '', 'trainee', 'male', 'tom', '12345', 0x433a78616d7070096d70706870353541452e746d70, 'waiting for approval', NULL, NULL),
(21, 'aman', 'amanki', 'aman', '0931975818', 78, 'amankinde@gmail.com', 'guest', '', 'trainee', 'male', 'aman', 'aman', 0x433a78616d7070096d70706870343135362e746d70, 'complete', NULL, NULL),
(23, 'aman', 'aman', 'aman', '0000000000', 40, 'amankinde@gmail.com', 'student', '', 'trainee', 'male', 'kk', 'kk', 0x433a78616d7070096d70706870313435442e746d70, 'complete', NULL, NULL),
(24, 'amanul', 'kinde', '1475', '0923071030', 10, 'amankinde@gmail.com', 'student', '', 'trainee', 'male', 'aa', 'a', 0x433a78616d7070096d70706870383238382e746d70, 'waiting for approval', '', '0'),
(25, 'amanuel', 'kinde', '789', '0923071030', 45, 'amankinde@gmail.com', 'guest', '', 'trainee', 'male', 'amanul', 'aman', 0x433a78616d7070096d70706870383638432e746d70, 'waiting for approval', '', '0'),
(26, 'ddd', 'dddd', '122334', '0910792535', 10, 'amankinde@gmail.com', 'student', '', 'trainee', 'male', 'a', 'a', 0x433a78616d7070096d70706870423242372e746d70, 'waiting for approval', '', '0'),
(27, 'dereje', 'buruse', '1223', '0925266557', 14, 'der@gmail.com', 'guest', '', 'trainee', 'male', 'de', 'de', 0x433a78616d7070096d70706870443633372e746d70, 'waiting for approval', '', '0'),
(29, 'giram', 'sebsee', '1232', '0910325848', 36, 'amankinde@gmail.com', 'student', '', 'trainee', 'male', 'i', 'i', 0x433a78616d7070096d70706870353133412e746d70, 'waiting for approval', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`n_id` int(10) NOT NULL,
  `news` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `news`, `date`) VALUES
(0, 'we are\r\nthe developer\r\nin the name for the use \r\nof the technology that\r\nhelps to developer \r\nin the name for the use of technology\r\n', '18/02/2018'),
(2, 'kdhjfskdghjdkjhkjh', '10/06/2016'),
(3, 'tttttt', '24/03/2018');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
`r_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `activity` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`r_id`, `date`, `time`, `activity`, `username`, `status`) VALUES
(1, '2016-06-06', '00:01:10', 'change password', 'admin', 0),
(2, '2016-06-06', '00:01:11', 'add schedule', 'trianer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
`s_id` int(11) NOT NULL,
  `tgym` varchar(20) NOT NULL,
  `day` varchar(50) NOT NULL,
  `tstart` varchar(20) NOT NULL,
  `tend` varchar(25) NOT NULL,
  `trainername` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`s_id`, `tgym`, `day`, `tstart`, `tend`, `trainername`) VALUES
(11, 'erobics', 'monday', '1:00 AM', '3:00 AM', 'aman'),
(12, 'fitteness', 'sunday', '12:00 PM', '2:00 AM', 'amanuel kinde');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
`t_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`t_id`, `title`, `location`, `date`) VALUES
(10, 'new material', 'upload/Stands for.docx', '10/02/18'),
(13, 'theklkjlkdsjflkdjsf', 'upload/2010 EC  AC 2nd year and above.pdf', '18/03/18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipmenet`
--
ALTER TABLE `equipmenet`
 ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
 ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
 ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
 ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
 ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipmenet`
--
ALTER TABLE `equipmenet`
MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `n_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
