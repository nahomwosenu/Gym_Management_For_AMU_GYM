-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 03:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `no` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  `balance` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`no`, `username`, `pin`, `balance`) VALUES
('10001', 'gim', 1234, '3910'),
('10002 ', 'abebe', 1234, '1030'),
('10003', 'abebe', 12345, '3140'),
('10004', 'kebede', 12345, '5000'),
('1005', 'aman', 1234, '7540');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
`no` int(11) NOT NULL,
  `account` varchar(255) DEFAULT NULL,
  `amount` varchar(250) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `payee_account` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`no`, `account`, `amount`, `details`, `client`, `status`, `payee_account`, `username`) VALUES
(1, '10001', '30', 'AMU GYM Club monthly payment, please approve this payment if you want to continue attending in our Gym club.', 'AMU GYM', 'approved', '10001', 'aman'),
(2, '10001', '30', 'AMU GYM Club monthly payment, please approve this payment if you want to continue attending in our Gym club.', 'AMU GYM', 'approved', '10001', 'kk'),
(3, '10001', '30', 'AMU GYM Club monthly payment, please approve this payment if you want to continue attending in our Gym club.', 'AMU GYM', 'not_approved', '10001', 'aa'),
(4, '10001', '740', 'AMU GYM Club monthly payment, please approve this payment if you want to continue attending in our Gym club.', 'AMU GYM', 'not_approved', '10004', 'amanul'),
(5, '10001', '30', 'AMU GYM Club monthly payment, please approve this payment if you want to continue attending in our Gym club.', 'AMU GYM', 'not_approved', '10002', 'a'),
(6, '10001', '30', 'AMU GYM Club monthly payment, please approve this payment if you want to continue attending in our Gym club.', 'AMU GYM', 'not_approved', '10001', 'i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
 ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
