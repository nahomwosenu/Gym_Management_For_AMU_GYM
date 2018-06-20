-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 09:36 PM
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
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`m_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `eq` varchar(25) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`m_id`, `fname`, `email`, `eq`, `message`, `date`, `status`) VALUES
(3, 'amankinde', 'amankinde2000@gmail.com', 'dample ', 'the which is enter in this week has been crash plase enter the name', '10/02/2018', 'read'),
(4, 'amanauel', 'amankinde@gmail.com', 'dample', 'sorry system admin we have amdfsdfsdf', '13/02/2018', 'unread');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipmenet`
--

INSERT INTO `equipmenet` (`e_id`, `ename`, `vendor`, `user_id`, `phone`, `Etype`, `profile`) VALUES
(9, 'Amana', 'kindea', '1234564', '091085625', 'admina', 0x61612e706e67),
(10, 'amans', 'amanc', '4563', '0910723377', 'trainers', 0x61612e706e67),
(11, 'amnac', 'amndd', '45564', '0910723378', 'traineed', 0x61612e706e67);

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
(2, 'ddgljg', 'lslkddhglk@yahoo.com', 'kdhjfskdghjdkjhkjh', '10/06/2016', ''),
(3, 'amanfldjf', 'amankinde1@gmail.com', 'vvvvvvvvvvvvvvvvvvvvvvvvvv', '10/02/2018', 'read'),
(4, 'weare the ', 'amankinde1@gmail.com', 'we are', '13/02/2018', 'read');

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
  `profile` longblob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `fname`, `lname`, `user_id`, `phone`, `age`, `email`, `worktype`, `tgym`, `user_type`, `gender`, `username`, `password`, `profile`) VALUES
(9, 'Aman', 'kinde', '123456', '091085623', 10, 'amankinde10@gmail.com', '', '', 'admin', 'male', 'admin', 'admin', 0x61632e706e67),
(10, 'aman', 'aman', '456', '0910723379', 12, 'aman@gmail.com', '', '', 'trainer', 'male', 'trainer', 'trainer', 0x61622e706e67),
(11, 'amna', 'amnd', '4556', '0910723379', 20, 'amanu@gmail.com', 'staff', 'erobics', 'trainee', 'female', 'trainee', 'trainee', 0x612e706e67),
(12, 'Acountant', 'acconter', '123', '092085623', 10, 'amankinde10@gmail.com', '', '', 'accountant', 'male', 'account', 'account', 0x612e706e67),
(13, 'amanulw', 'kinde', 'amankk', 'kloipuytre', 50, 'amankinde380@gmail.com', 'student', '', 'trainee', 'female', 'j', 'j', 0x433a78616d7070096d70706870423738362e746d70),
(14, 'abebe', 'bekele', '1234', '0934345444', 11, 'n@a.com', 'student', '', 'trainee', 'male', 'abc', '123', 0x433a78616d7070096d70706870374431332e746d70);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`n_id` int(10) NOT NULL,
  `news` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `news`, `date`) VALUES
(0, 'we are\r\nthe developer\r\nin the name for the use \r\nof the technology that\r\nhelps to developer \r\nin the name for the use of technology\r\n', '18/02/2018'),
(2, 'kdhjfskdghjdkjhkjh', '10/06/2016');

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
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`m_id`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `equipmenet`
--
ALTER TABLE `equipmenet`
MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `n_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
