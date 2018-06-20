-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 07:28 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `training` (
  `t_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date` varchar(25) NOT NULL,
   PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `training` (`t_id`, `title`, `location`, `date`) VALUES
(10, 'new material', 'upload/Stands for.docx','10/02/18'),
(12, 'dfdsf', 'upload/Gym proposal.docx', '10/02/18');

CREATE TABLE IF NOT EXISTS `comment` (
  `m_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `eq` varchar(25) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `comment` (`m_id`, `fname`, `email`, `eq`, `message`, `date`, `status`) VALUES
(3, 'amankinde', 'amankinde2000@gmail.com', 'dample ', 'the which is enter in this week has been crash plase enter the name', '10/02/2018', 'read'),
(4, 'amanauel', 'amankinde@gmail.com', 'dample', 'sorry system admin we have amdfsdfsdf', '13/02/2018', 'unread');

CREATE TABLE IF NOT EXISTS `equipmenet` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(30) NOT NULL,
  `vendor` varchar(30) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `Etype` varchar(20) NOT NULL,
  `profile` LONGBLOB NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `equipmenet` (`e_id`, `ename`, `vendor`, `user_id`, `phone`, `Etype`,`profile`) VALUES
(9, 'Amana', 'kindea', '1234564', '091085625', 'admina','aa.png'),
(10, 'amans', 'amanc', '4563', '0910723377', 'trainers','aa.png'),
(11, 'amnac', 'amndd', '45564', '0910723378', 'traineed','aa.png');

CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `feedback` (`f_id`, `fname`, `email`, `message`, `date`, `status`) VALUES
(2, 'ddgljg', 'lslkddhglk@yahoo.com', 'kdhjfskdghjdkjhkjh', '10/06/2016', ''),
(3, 'amanfldjf', 'amankinde1@gmail.com', 'vvvvvvvvvvvvvvvvvvvvvvvvvv', '10/02/2018', 'unread'),
(4, 'weare the ', 'amankinde1@gmail.com', 'we are', '13/02/2018', 'unread');

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `worktype` varchar(10) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profile` LONGBLOB NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `member` (`member_id`, `fname`, `lname`, `user_id`, `phone`,`age`,`email`,`worktype`,`user_type`,`gender`,`username`, `password`,`profile`) VALUES
(9, 'Aman', 'kinde', '123456', '091085623','10','amankinde10@gmail.com','','admin','male', 'admin', 'admin','ac.png'),
(10, 'aman', 'aman', '456', '0910723379', '12','aman@gmail.com','','trainer', 'male','trainer', 'trainer','ab.png'),
(11, 'amna', 'amnd', '4556', '0910723379','20','amanu@gmail.com','staff','trainee', 'female','trainee', 'trainee','a.png'),
(12, 'Acountant', 'acconter', '123', '092085623','10','amankinde10@gmail.com','','accountant','male', 'account', 'account','');


CREATE TABLE IF NOT EXISTS `news` (
  `n_id` int(10) NOT NULL AUTO_INCREMENT,
  `news` varchar(250) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `news` (`n_id`, `news`, `date`) VALUES
(2, 'kdhjfskdghjdkjhkjh', '10/06/2016'),
(0, 'we are\r\nthe developer\r\nin the name for the use \r\nof the technology that\r\nhelps to developer \r\nin the name for the use of technology\r\n', '18/02/2018');


CREATE TABLE IF NOT EXISTS `schedule` (
   `s_id` int(11) NOT NULL AUTO_INCREMENT,
   `tgym` varchar(20) NOT NULL,
  `day` varchar(50) NOT NULL,
  `tstart` varchar(20) NOT NULL,
  `tend` varchar(25) NOT NULL,
  `trainername` varchar(25) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `schedule` (`s_id`,`tgym`,`day`, `tstart`, `tend`, `trainername`) VALUES
(9,'areobics','monday', '2:00', '4:00', 'aman'),
(10, 'areobics','tuesday', '8:00', '10:00', 'aman');

CREATE TABLE IF NOT EXISTS `report`(
   `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `activity` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
   PRIMARY KEY (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `report` (`date`, `time`, `activity`, `username`, `status`) VALUES
('2016-06-06', '00:01:10', 'change password', 'admin', 0),
('2016-06-06', '00:01:11', 'add schedule', 'trianer', 0);


