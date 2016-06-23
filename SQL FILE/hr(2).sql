-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2015 at 07:36 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `app_id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `experience` int(11) NOT NULL,
  `contact` bigint(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `app_depart` varchar(10) NOT NULL,
  PRIMARY KEY (`app_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`app_id`, `name`, `age`, `gender`, `qualification`, `experience`, `contact`, `email`, `app_depart`) VALUES
(1, 'Vinay Yadav', 21, 'MALE', 'BT.ECH', 2, 123456789, 'rit2013029@iiita.ac.in', 'FINANCE'),
(2, 'Narendra Kumar', 18, 'MALE', 'BT.ECH', 1, 945604, 'narendrak393@gmail.com', 'IM'),
(3, 'Pradyumna Newalkar', 21, 'MALE', 'BT.ECH', 2, 9452737626, 'rit2013005@iiita.ac.in', 'FINANCE'),
(4, 'vipul', 19, 'MALE', 'BT.ECH', 1, 9005136243, 'vipul@gmail.com', 'FINANCE');

-- --------------------------------------------------------

--
-- Table structure for table `applies`
--

CREATE TABLE IF NOT EXISTS `applies` (
  `app_no` int(30) NOT NULL,
  `app_date` datetime NOT NULL,
  PRIMARY KEY (`app_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applies`
--

INSERT INTO `applies` (`app_no`, `app_date`) VALUES
(1, '2016-04-15 11:01:21'),
(2, '2016-04-15 11:04:56'),
(3, '2016-04-15 11:07:39'),
(4, '2016-04-15 11:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `app_login`
--

CREATE TABLE IF NOT EXISTS `app_login` (
  `app_id` int(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_login`
--

INSERT INTO `app_login` (`app_id`, `password`) VALUES
(1, 'microsoft'),
(2, 'nnd123'),
(3, 'micro'),
(4, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `app_status`
--

CREATE TABLE IF NOT EXISTS `app_status` (
  `app_id` int(30) NOT NULL,
  `result` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_status`
--

INSERT INTO `app_status` (`app_id`, `result`, `date`, `time`) VALUES
(1, 'IN PROGRESS', '', ''),
(2, 'IN PROGRESS', '', ''),
(3, 'IN PROGRESS', '', ''),
(4, 'Selected', '29/10/2015', '9 am');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` int(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `contact` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `password`, `name`, `gender`, `age`, `department`, `designation`, `contact`, `email`) VALUES
(1, 'hr_head1', 'HIMANSHU', 'MALE', 37, 'FINANCE', 'HR HEAD', 908765431, 'himanshu13@gmail.com'),
(2, 'hr_head2', 'VIKAS', 'MALE', 47, 'IM', 'HR HEAD', 987654321, 'vikas@gmail.com'),
(3, 'manager', 'VINAY YADAV', 'MALE', 48, 'FINANCE', 'MANAGER', 987363662, 'manager@gmail.com'),
(4, 'manager', 'ADITYA KUMAR SINGH', 'MALE', 47, 'IM', 'MANAGER', 56, 'manager2@gmail.com'),
(5, 'interviewer', 'AKASH SHARAN', 'MALE', 35, 'FINANCE', 'INTERVIEWER', 938484747, 'akashsharan13@gmail.com'),
(6, 'interviewer', 'PRADYUMNA NEWALKAR', 'MALE', 45, 'IM', 'INTERVIEWER', 73468738, 'pradyumna@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hr_head`
--

CREATE TABLE IF NOT EXISTS `hr_head` (
  `app_id` int(30) NOT NULL,
  `emp_id` int(30) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr_head`
--

INSERT INTO `hr_head` (`app_id`, `emp_id`) VALUES
(1, 1),
(2, 2),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE IF NOT EXISTS `interview` (
  `app_id` int(30) NOT NULL,
  `emp_id` int(30) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`app_id`, `emp_id`) VALUES
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `emp_id` int(20) NOT NULL,
  `app_id` int(20) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`emp_id`, `app_id`) VALUES
(4, 2),
(3, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
