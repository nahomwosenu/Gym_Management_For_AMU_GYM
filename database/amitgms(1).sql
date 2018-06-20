-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 03:32 PM
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
  `profile` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipmenet`
--

INSERT INTO `equipmenet` (`e_id`, `ename`, `vendor`, `user_id`, `phone`, `Etype`, `profile`) VALUES
(15, 'afdfdsf', 'sdfsdfds', 'sdfdsf', '0923071030', 'volleyball', 'C:xampp	mpphp36F5.tmp'),
(16, 'dddd', 'vvvv', 'sfdsffsdfds', '0923071030', 'erobics', 'C:xampp	mpphp2B74.tmp');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `fname`, `email`, `message`, `date`, `status`) VALUES
(3, 'amanfldjf', 'amankinde1@gmail.com', 'vvvvvvvvvvvvvvvvvvvvvvvvvv', '10/02/2018', 'read');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`m_id`, `fname`, `email`, `eq`, `message`, `date`, `status`) VALUES
(8, 'dfdfdf dfdf', 'dfdsf@gami.com', 'dsfdsf', 'dsfdsf', '21/04/2018', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`member_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `worktype` varchar(10) NOT NULL,
  `tgym` varchar(25) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `registration_date` varchar(255) DEFAULT NULL,
  `last_payment` decimal(10,0) DEFAULT NULL,
  `profile` text
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `fname`, `lname`, `phone`, `age`, `email`, `worktype`, `tgym`, `user_type`, `gender`, `username`, `password`, `payment`, `registration_date`, `last_payment`, `profile`) VALUES
(9, 'Aman', 'kinde', '091085623', 10, 'amankinde10@gmail.com', '', '', 'admin', 'male', 'admin', 'admin', NULL, NULL, NULL, ''),
(10, 'aman', 'aman', '0910723379', 12, 'aman@gmail.com', '', '', 'trainer', 'male', 'trainer', 'trainer', NULL, NULL, NULL, 'Capture1110.PNG'),
(11, 'amna', 'amndd', '0910723379', 20, 'amanu@gmail.com', 'staff', 'erobics', 'trainee', 'female', 'trainee', 'trainee', NULL, NULL, NULL, ''),
(12, 'Acountant', 'acconter', '092085623', 10, 'amankinde10@gmail.com', '', '', 'accountant', 'male', 'account', 'account', NULL, NULL, NULL, NULL),
(35, 'amanuelkin', 'mucxhe', '0931648595', 40, 'amankinde@gmail.com', '', '', 'admin', 'male', 'aa', 'a', NULL, NULL, NULL, ''),
(36, 'asdfsd', 'fsdfsdf', '0910302510', 10, 'abe@abe.com', 'student', '', 'trainee', 'male', 'add', 'd', 'waiting for approval', '1818/0404/0404', '0', ''),
(38, 'aman', 'kinde', '0923074012', 40, 'abe@abe.com', 'staff', '', 'trainee', 'female', 'y', 'y', 'waiting for approval', '1818/0404/0404', '0', 'IMG_20170125_111040.jpg'),
(43, 'amanuel', 'kindee', '0910321414', 10, 'amankinde380@gmail.com', '', '', 'admin', 'male', 'ramit/14/14', 'aa', NULL, NULL, NULL, ''),
(44, 'aman', 'kinde', '0910723379', 40, 'aman@gmaill.com', '', '', 'trainer', 'female', 'ramit/44', 'aman', NULL, NULL, NULL, ''),
(46, 'ffgfgf', 'fgfgf', '0000000000', 40, 'amankinde380@gmail.com', 'student', '', 'trainee', 'male', 'f', 'f', 'waiting for approval', '1818/0404/1515', '0', 'maxresdefault.jpg'),
(48, 'hhh', 'hhhh', '0931648574', 41, 'amankinde380@gmail.com', '', '', 'admin', 'female', 'admin', 'a', NULL, NULL, NULL, 'C:xampp	mpphp3629.tmp'),
(49, 'amauel', 'assefa', '09132020204', 20, 'aman@yahoo.com', 'student', '', 'trainee', 'female', 'uuuu', 'a', 'waiting for approval', '1818/0404/1616', '0', 'Capture 2.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`n_id` int(10) NOT NULL,
  `news` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `news`, `date`) VALUES
(5, 'bodidttytttt', '04/04/2018'),
(7, 'machine is brok \r\n', '26/04/2018');

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`s_id`, `tgym`, `day`, `tstart`, `tend`, `trainername`) VALUES
(11, 'erobics', 'monday', '1:00 AM', '3:00 AM', 'amanl'),
(12, 'fitteness', 'sunday', '12:00 PM', '2:00 AM', 'amanuel kinde'),
(13, 'erobics', 'monday', '1:00 AM', '5:00 AM', 'aaaaa'),
(14, 'erobics', 'monday', '1:00 AM', '1:00 AM', '33'),
(15, 'volleyball', 'tuesday', '10:00 AM', '1:00 AM', 'awdsd'),
(16, 'volleyball', 'tuesday', '9:00 AM', '12:00 AM', 'Thanks'),
(17, 'bodymass', 'tuesday', '10:00 AM', '11:00 AM', 'sads');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
`t_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`t_id`, `title`, `location`, `date`) VALUES
(10, 'new material', 'upload/Stands for.docx', '10/02/18'),
(13, 'theklkjlkdsjflkdjsf', 'upload/2010 EC  AC 2nd year and above.pdf', '18/03/18'),
(16, 'first tutorail', 'upload/Chapter 1 Introdction.pdf', '05/04/18');

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
MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `n_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
