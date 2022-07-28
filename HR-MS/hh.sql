-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 06:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hh`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_name` varchar(200) DEFAULT NULL,
  `department_id` varchar(30) DEFAULT NULL,
  `employee_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_name`, `department_id`, `employee_id`) VALUES
('vjgygg', 'chgtf', 'vh78'),
('vjgygg', 'chgtf', 'vh78'),
('hjvuhiws', 'bshhis', 'jksyuhws8jk');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` varchar(60) DEFAULT NULL,
  `employee_name` varchar(45) DEFAULT NULL,
  `address` varchar(600) DEFAULT NULL,
  `department_id` varchar(499) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `salary` int(88) DEFAULT NULL,
  `training_id` varchar(899) DEFAULT NULL,
  `hr_id` varchar(77) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `address`, `department_id`, `email`, `salary`, `training_id`, `hr_id`) VALUES
('vjghygi7', 'jvvhy8', 'jvggt78', 'bjkyg78', 'bhj78@hg', NULL, 'bhu76', 'gh'),
('vjghygi7', 'jvvhy8', 'jvggt78', 'bjkyg78', 'bhj78@hg', NULL, 'bhu76', 'gh'),
(' vhbaiug', 'n bayg', 'hazgy78', 'jbha86tf6g', 'grf@gchy', NULL, 'hvjsx6j89', 'hsxgyus7');

-- --------------------------------------------------------

--
-- Table structure for table `hrr`
--

CREATE TABLE `hrr` (
  `hr_id` varchar(20) DEFAULT NULL,
  `hr_name` varchar(40) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `emailid` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hrr`
--

INSERT INTO `hrr` (`hr_id`, `hr_name`, `password`, `emailid`) VALUES
('ddd', 'dd', 'dd', 'dd@dd'),
('aa', 'aa', 'aa', 'aa@aa'),
('SFGH787', 'hvguys78', 'vht7', 'ghu@yfud'),
('viiii', 'vii', 'viii', 'vii@vv');

-- --------------------------------------------------------

--
-- Table structure for table `leavee`
--

CREATE TABLE `leavee` (
  `employee_id` varchar(400) DEFAULT NULL,
  `leave_id` varchar(400) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leavee`
--

INSERT INTO `leavee` (`employee_id`, `leave_id`, `start_date`, `end_date`) VALUES
('vjghygi7', 'gvjhvj', '0000-00-00', '2022-01-29'),
('vjghygi7', 'gvjhvj', '2022-01-04', '2022-01-29'),
('jgyedhu', 'dwgyw', '2021-02-17', '2022-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `training_name` varchar(456) DEFAULT NULL,
  `training_id` varchar(77) DEFAULT NULL,
  `employee_id` varchar(699) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`training_name`, `training_id`, `employee_id`) VALUES
('', '', 'vhjft'),
(' hhvv', 'hvjg', 'vhjft'),
('ugeduu', 'u', 'u');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
