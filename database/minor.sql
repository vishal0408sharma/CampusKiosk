-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2015 at 03:53 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint(10) NOT NULL DEFAULT '0',
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `gender` char(1) NOT NULL DEFAULT 'm',
  `dob` date DEFAULT NULL,
  `mobile_number` bigint(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `type` char(1) NOT NULL DEFAULT 'a',
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `gender`, `dob`, `mobile_number`, `email`, `type`, `username`, `password`) VALUES
(5791, 'vishal', 'sharma', 'm', '1995-06-07', 8285398720, 'vishalsharma@live.co.uk', 's', 'admin', 'admin'),
(75846, 'kapil', 'kumar', 'm', '1979-02-21', 9568452169, 'kapils_admin@gmail.com', 'a', 'kapil', 'kapil');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `course_id` varchar(15) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT '0000-00-00',
  `time` time NOT NULL DEFAULT '00:00:00',
  `student_id` bigint(10) NOT NULL DEFAULT '0',
  `attendance` char(3) DEFAULT 'y',
  `extra` char(1) DEFAULT 'n',
  `suplimentary` char(1) NOT NULL DEFAULT 'n',
  `sup_teach_id` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`course_id`, `date`, `time`, `student_id`, `attendance`, `extra`, `suplimentary`, `sup_teach_id`) VALUES
('10B11CI311', '2015-11-30', '09:00:00', 9914103122, 'y', 'n', 'n', 0),
('10B11CI311', '2015-11-30', '09:00:00', 9914103129, 'y', 'n', 'n', 0),
('10B11CI311', '2015-11-30', '09:00:00', 9914103130, 'y', 'n', 'n', 0),
('10B11CI311', '2015-11-30', '09:00:00', 9914103131, 'y', 'n', 'n', 0),
('10B11CI311', '2015-11-30', '09:00:00', 9914103132, 'y', 'n', 'n', 0),
('10B11CI311', '2015-11-30', '09:00:00', 9914103133, 'y', 'n', 'n', 0),
('10B11CI311', '2015-11-30', '09:00:00', 9914103134, 'y', 'n', 'n', 0),
('10B11CI311', '2015-11-30', '09:00:00', 9914103135, 'y', 'n', 'n', 0),
('10B11CI311', '2015-11-30', '09:00:00', 9914103136, 'y', 'n', 'n', 0),
('10B11CI311', '2015-11-30', '09:00:00', 9914103137, 'y', 'n', 'n', 0),
('10B11CI311', '2015-11-30', '09:00:00', 9914103138, 'y', 'n', 'n', 0),
('10B17CI371', '2001-01-20', '10:00:00', 9914103122, 'n', 'n', 'n', 0),
('10B17CI371', '2001-01-20', '10:00:00', 9914103129, 'y', 'n', 'n', 0),
('10B17CI371', '2001-01-20', '10:00:00', 9914103130, 'n', 'n', 'n', 0),
('10B17CI371', '2001-01-20', '10:00:00', 9914103131, 'y', 'n', 'n', 0),
('10B17CI371', '2001-01-20', '10:00:00', 9914103132, 'y', 'n', 'n', 0),
('10B17CI371', '2001-01-20', '10:00:00', 9914103133, 'n', 'n', 'n', 0),
('10B17CI371', '2001-01-20', '10:00:00', 9914103134, 'n', 'n', 'n', 0),
('10B17CI371', '2001-01-20', '10:00:00', 9914103135, 'y', 'n', 'n', 0),
('10B17CI371', '2001-01-20', '10:00:00', 9914103136, 'y', 'n', 'n', 0),
('10B17CI371', '2001-01-20', '10:00:00', 9914103137, 'y', 'n', 'n', 0),
('10B17CI371', '2001-01-20', '10:00:00', 9914103138, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '12:00:00', 9914103122, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '12:00:00', 9914103129, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '12:00:00', 9914103130, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '12:00:00', 9914103131, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '12:00:00', 9914103132, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '12:00:00', 9914103133, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '12:00:00', 9914103134, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '12:00:00', 9914103135, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '12:00:00', 9914103136, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '12:00:00', 9914103137, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '12:00:00', 9914103138, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '23:00:00', 9914103139, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '23:00:00', 9914103141, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '23:00:00', 9914103144, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '23:00:00', 9914103145, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '23:00:00', 9914103146, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '23:00:00', 9914103147, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '23:00:00', 9914103148, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '23:00:00', 9914103149, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '23:00:00', 9914103151, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-01', '23:00:00', 9914103153, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-03', '10:00:00', 9914103122, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-03', '10:00:00', 9914103129, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-03', '10:00:00', 9914103130, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-03', '10:00:00', 9914103131, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-03', '10:00:00', 9914103132, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-03', '10:00:00', 9914103133, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-03', '10:00:00', 9914103134, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-03', '10:00:00', 9914103135, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-03', '10:00:00', 9914103136, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-03', '10:00:00', 9914103137, 'y', 'n', 'n', 0),
('10B17CI371', '2015-12-03', '10:00:00', 9914103138, 'y', 'n', 'n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_name` varchar(30) DEFAULT NULL,
  `course_id` varchar(15) NOT NULL DEFAULT '',
  `course_type` varchar(30) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `semester` int(1) DEFAULT NULL,
  `year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_name`, `course_id`, `course_type`, `department`, `semester`, `year`) VALUES
('OOP', '10B11CI311', 'Lecture', 'CSE', 3, 2003),
('OOP lab', '10B17CI371', 'Lab', 'CSE', 3, 2003),
('DBMS', '10B17CI372', 'Lab', 'CSE', 3, 2003),
('DBMS lab', '15B11CI312', 'Lecture', 'CSE', 3, 2003),
('MPC', '15B11EC313', 'Lecture', 'CSE', 3, 2003),
('MPC lab', '15B17EC373', 'Lab', 'CSE', 3, 2003);

-- --------------------------------------------------------

--
-- Table structure for table `crs_teach_stud`
--

CREATE TABLE IF NOT EXISTS `crs_teach_stud` (
  `course_id` varchar(15) NOT NULL,
  `teacher_id` bigint(10) NOT NULL,
  `student_id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crs_teach_stud`
--

INSERT INTO `crs_teach_stud` (`course_id`, `teacher_id`, `student_id`) VALUES
('10B11CI311', 201001, 9914103129),
('10B11CI311', 201001, 9914103122),
('10B11CI311', 201001, 9914103130),
('10B11CI311', 201001, 9914103131),
('10B11CI311', 201001, 9914103132),
('10B11CI311', 201001, 9914103133),
('10B11CI311', 201001, 9914103134),
('10B11CI311', 201001, 9914103135),
('10B11CI311', 201001, 9914103136),
('10B11CI311', 201001, 9914103137),
('10B11CI311', 201001, 9914103139),
('10B11CI311', 201001, 9914103141),
('10B11CI311', 201001, 9914103144),
('10B11CI311', 201001, 9914103145),
('10B11CI311', 201001, 9914103146),
('10B11CI311', 201001, 9914103147),
('10B11CI311', 201001, 9914103148),
('10B11CI311', 201001, 9914103149),
('10B11CI311', 201001, 9914103151),
('10B11CI311', 201001, 9914103153),
('10B11CI311', 201001, 9914103138),
('10B17CI371', 201001, 9914103129),
('10B17CI371', 201001, 9914103122),
('10B17CI371', 201001, 9914103130),
('10B17CI371', 201001, 9914103131),
('10B17CI371', 201001, 9914103132),
('10B17CI371', 201001, 9914103133),
('10B17CI371', 201001, 9914103134),
('10B17CI371', 201001, 9914103135),
('10B17CI371', 201001, 9914103136),
('10B17CI371', 201001, 9914103137),
('10B17CI371', 201001, 9914103139),
('10B17CI371', 201001, 9914103141),
('10B17CI371', 201001, 9914103144),
('10B17CI371', 201001, 9914103145),
('10B17CI371', 201001, 9914103146),
('10B17CI371', 201001, 9914103147),
('10B17CI371', 201001, 9914103148),
('10B17CI371', 201001, 9914103149),
('10B17CI371', 201001, 9914103151),
('10B17CI371', 201001, 9914103153),
('10B17CI371', 201001, 9914103138),
('10B17CI372', 201002, 9914103129),
('10B17CI372', 201002, 9914103122),
('10B17CI372', 201002, 9914103130),
('10B17CI372', 201002, 9914103131),
('10B17CI372', 201002, 9914103132),
('10B17CI372', 201002, 9914103133),
('10B17CI372', 201002, 9914103134),
('10B17CI372', 201002, 9914103135),
('10B17CI372', 201002, 9914103136),
('10B17CI372', 201002, 9914103137),
('10B17CI372', 201002, 9914103139),
('10B17CI372', 201002, 9914103141),
('10B17CI372', 201002, 9914103144),
('10B17CI372', 201002, 9914103145),
('10B17CI372', 201002, 9914103146),
('10B17CI372', 201002, 9914103147),
('10B17CI372', 201002, 9914103148),
('10B17CI372', 201002, 9914103149),
('10B17CI372', 201002, 9914103151),
('10B17CI372', 201002, 9914103153),
('10B17CI372', 201002, 9914103138),
('15B11CI312', 201002, 9914103129),
('15B11CI312', 201002, 9914103122),
('15B11CI312', 201002, 9914103130),
('15B11CI312', 201002, 9914103131),
('15B11CI312', 201002, 9914103132),
('15B11CI312', 201002, 9914103133),
('15B11CI312', 201002, 9914103134),
('15B11CI312', 201002, 9914103135),
('15B11CI312', 201002, 9914103136),
('15B11CI312', 201002, 9914103137),
('15B11CI312', 201002, 9914103139),
('15B11CI312', 201002, 9914103141),
('15B11CI312', 201002, 9914103144),
('15B11CI312', 201002, 9914103145),
('15B11CI312', 201002, 9914103146),
('15B11CI312', 201002, 9914103147),
('15B11CI312', 201002, 9914103148),
('15B11CI312', 201002, 9914103149),
('15B11CI312', 201002, 9914103151),
('15B11CI312', 201002, 9914103153),
('15B11CI312', 201002, 9914103138),
('15B11EC313', 201003, 9914103129),
('15B11EC313', 201003, 9914103122),
('15B11EC313', 201003, 9914103130),
('15B11EC313', 201003, 9914103131),
('15B11EC313', 201003, 9914103132),
('15B11EC313', 201003, 9914103133),
('15B11EC313', 201003, 9914103134),
('15B11EC313', 201003, 9914103135),
('15B11EC313', 201003, 9914103136),
('15B11EC313', 201003, 9914103137),
('15B11EC313', 201003, 9914103139),
('15B11EC313', 201003, 9914103141),
('15B11EC313', 201003, 9914103144),
('15B11EC313', 201003, 9914103145),
('15B11EC313', 201003, 9914103146),
('15B11EC313', 201003, 9914103147),
('15B11EC313', 201003, 9914103148),
('15B11EC313', 201003, 9914103149),
('15B11EC313', 201003, 9914103151),
('15B11EC313', 201003, 9914103153),
('15B11EC313', 201003, 9914103138),
('15B17EC373', 201003, 9914103129),
('15B17EC373', 201003, 9914103122),
('15B17EC373', 201003, 9914103130),
('15B17EC373', 201003, 9914103131),
('15B17EC373', 201003, 9914103132),
('15B17EC373', 201003, 9914103133),
('15B17EC373', 201003, 9914103134),
('15B17EC373', 201003, 9914103135),
('15B17EC373', 201003, 9914103136),
('15B17EC373', 201003, 9914103137),
('15B17EC373', 201003, 9914103139),
('15B17EC373', 201003, 9914103141),
('15B17EC373', 201003, 9914103144),
('15B17EC373', 201003, 9914103145),
('15B17EC373', 201003, 9914103146),
('15B17EC373', 201003, 9914103147),
('15B17EC373', 201003, 9914103148),
('15B17EC373', 201003, 9914103149),
('15B17EC373', 201003, 9914103151),
('15B17EC373', 201003, 9914103153),
('15B17EC373', 201003, 9914103138);

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `student_id` bigint(10) NOT NULL,
  `receipt_no` bigint(10) NOT NULL,
  `sem` int(3) NOT NULL,
  `amount` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=788899 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`student_id`, `receipt_no`, `sem`, `amount`) VALUES
(9914103129, 788878, 3, 45000),
(9914103122, 788879, 3, 45000),
(9914103130, 788880, 3, 45000),
(9914103131, 788881, 3, 45000),
(9914103132, 788882, 3, 45000),
(9914103133, 788883, 3, 45000),
(9914103134, 788884, 3, 45000),
(9914103135, 788885, 3, 45000),
(9914103136, 788886, 3, 45000),
(9914103137, 788887, 3, 45000),
(9914103139, 788888, 3, 45000),
(9914103141, 788889, 3, 45000),
(9914103144, 788890, 3, 45000),
(9914103145, 788891, 3, 45000),
(9914103146, 788892, 3, 45000),
(9914103147, 788893, 3, 45000),
(9914103148, 788894, 3, 45000),
(9914103149, 788895, 3, 45000),
(9914103151, 788896, 3, 45000),
(9914103153, 788897, 3, 45000),
(9914103138, 788898, 3, 45000);

-- --------------------------------------------------------

--
-- Table structure for table `marks_lab`
--

CREATE TABLE IF NOT EXISTS `marks_lab` (
  `course_id` varchar(15) NOT NULL DEFAULT '',
  `max_marks` int(3) DEFAULT '20',
  `marks_obtained` int(3) DEFAULT NULL,
  `entrytime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `type` int(3) NOT NULL DEFAULT '0',
  `backlog` char(1) NOT NULL DEFAULT 'n',
  `student_id` bigint(10) NOT NULL,
  `backlogsem` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks_lab`
--

INSERT INTO `marks_lab` (`course_id`, `max_marks`, `marks_obtained`, `entrytime`, `type`, `backlog`, `student_id`, `backlogsem`) VALUES
('10B17CI371', 20, 19, '2015-12-02 17:56:57', 1, 'n', 9914103122, NULL),
('10B17CI371', 20, 7, '2015-12-02 17:56:57', 1, 'n', 9914103129, NULL),
('10B17CI371', 20, 5, '2015-12-02 17:56:57', 1, 'n', 9914103130, NULL),
('10B17CI371', 20, 4, '2015-12-02 17:56:57', 1, 'n', 9914103131, NULL),
('10B17CI371', 20, 7, '2015-12-02 17:56:57', 1, 'n', 9914103132, NULL),
('10B17CI371', 20, 8, '2015-12-02 17:56:57', 1, 'n', 9914103133, NULL),
('10B17CI371', 20, 9, '2015-12-02 17:56:57', 1, 'n', 9914103134, NULL),
('10B17CI371', 20, 11, '2015-12-02 17:56:58', 1, 'n', 9914103135, NULL),
('10B17CI371', 20, 18, '2015-12-02 17:56:58', 1, 'n', 9914103136, NULL),
('10B17CI371', 20, 19, '2015-12-02 17:56:58', 1, 'n', 9914103137, NULL),
('10B17CI371', 20, 15, '2015-12-02 17:56:58', 1, 'n', 9914103138, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marks_theory`
--

CREATE TABLE IF NOT EXISTS `marks_theory` (
  `course_id` varchar(15) NOT NULL DEFAULT '',
  `student_id` bigint(10) NOT NULL,
  `max_marks` int(3) DEFAULT NULL,
  `marks_obtained` int(3) DEFAULT '20',
  `entrytime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `type` int(3) NOT NULL,
  `backlog` char(1) NOT NULL DEFAULT 'n',
  `backlogsem` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks_theory`
--

INSERT INTO `marks_theory` (`course_id`, `student_id`, `max_marks`, `marks_obtained`, `entrytime`, `type`, `backlog`, `backlogsem`) VALUES
('10B11CI311', 9914103122, 20, 5, NULL, 1, 'n', NULL),
('10B11CI311', 9914103129, 20, 7, NULL, 1, 'n', NULL),
('10B11CI311', 9914103130, 20, 9, NULL, 1, 'n', NULL),
('10B11CI311', 9914103131, 20, 1, NULL, 1, 'n', NULL),
('10B11CI311', 9914103132, 20, 11, NULL, 1, 'n', NULL),
('10B11CI311', 9914103133, 20, 15, NULL, 1, 'n', NULL),
('10B11CI311', 9914103134, 20, 16, NULL, 1, 'n', NULL),
('10B11CI311', 9914103135, 20, 12, NULL, 1, 'n', NULL),
('10B11CI311', 9914103136, 20, 12, NULL, 1, 'n', NULL),
('10B11CI311', 9914103137, 20, 13, NULL, 1, 'n', NULL),
('10B11CI311', 9914103138, 20, 13, NULL, 1, 'n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `med_info`
--

CREATE TABLE IF NOT EXISTS `med_info` (
  `student_id` bigint(10) NOT NULL,
  `disability` varchar(3) NOT NULL DEFAULT 'no',
  `type_of_dis` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med_info`
--

INSERT INTO `med_info` (`student_id`, `disability`, `type_of_dis`) VALUES
(9914103604, 'nil', 'nill'),
(9914103604, 'nil', 'nill'),
(9914103064, 'nil', 'nill'),
(9914103064, 'nil', 'nill'),
(9914103064, 'nil', 'nill'),
(9914103065, 'nil', 'nill'),
(9914103065, 'nil', 'nill'),
(9914103065, 'nil', 'nill'),
(9914103122, 'nil', 'nill'),
(9914103122, 'nil', 'nill'),
(9914103122, 'nil', 'nill'),
(9914103122, 'nil', 'nill'),
(9914103122, 'nil', 'nill'),
(9914103129, 'nil', 'nill'),
(9914103130, 'nil', 'nill'),
(9914103064, 'nil', 'nill'),
(9914103131, 'nil', 'nill'),
(9914103132, 'nil', 'nill'),
(9914103133, 'nil', 'nill'),
(9914103138, 'nil', 'nill'),
(9914103134, 'nil', 'nill'),
(9914103135, 'nil', 'nill'),
(9913103457, 'nil', 'nill'),
(9914103153, 'nil', 'nill'),
(9914103153, 'nil', 'nill'),
(9914103468, '', ''),
(9914105874, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `msg_admin`
--

CREATE TABLE IF NOT EXISTS `msg_admin` (
  `msg_id` bigint(10) NOT NULL,
  `sender_id` bigint(10) NOT NULL,
  `sender_type` char(3) NOT NULL,
  `receiver_id` bigint(10) NOT NULL,
  `receiver_cc_id` bigint(10) DEFAULT NULL,
  `receiver_bcc_id` bigint(10) DEFAULT NULL,
  `subject` varchar(30) NOT NULL,
  `entrytime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `readcheck` char(3) NOT NULL DEFAULT 'n',
  `msg` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `msg_student`
--

CREATE TABLE IF NOT EXISTS `msg_student` (
  `msg_id` bigint(10) NOT NULL,
  `sender_id` bigint(10) DEFAULT NULL,
  `sender_type` char(3) DEFAULT 's',
  `receiver_id` bigint(10) DEFAULT NULL,
  `receiver_cc_id` bigint(10) DEFAULT NULL,
  `receiver_bcc_id` bigint(10) DEFAULT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `entrytime` datetime DEFAULT CURRENT_TIMESTAMP,
  `readcheck` char(3) DEFAULT 'n',
  `msg` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `msg_teacher`
--

CREATE TABLE IF NOT EXISTS `msg_teacher` (
  `msg_id` bigint(10) NOT NULL,
  `sender_id` bigint(10) DEFAULT NULL,
  `sender_type` char(3) DEFAULT NULL,
  `receiver_id` bigint(10) DEFAULT NULL,
  `receiver_cc_id` bigint(10) DEFAULT NULL,
  `receiver_bcc_id` bigint(10) DEFAULT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `entrytime` datetime DEFAULT CURRENT_TIMESTAMP,
  `readcheck` char(3) DEFAULT 'n',
  `msg` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `enroll` bigint(10) NOT NULL DEFAULT '0',
  `pwd` varchar(15) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile_no` bigint(10) DEFAULT NULL,
  `batch` varchar(2) DEFAULT NULL,
  `date_of_adm` date DEFAULT NULL,
  `semester` int(1) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `temp_addr` varchar(50) DEFAULT NULL,
  `perm_addr` varchar(50) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `bld_grp` char(3) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enroll`, `pwd`, `first_name`, `last_name`, `gender`, `dob`, `mobile_no`, `batch`, `date_of_adm`, `semester`, `email`, `temp_addr`, `perm_addr`, `fname`, `mname`, `bld_grp`, `branch`) VALUES
(9914103122, 'samriddh@jiit', 'Samriddh', 'Jain', 'm', '1998-11-10', 9211787811, 'a1', '2015-07-24', 3, 'samriddhjaini@gmail.com', 'Ramprastha ,Ghaziabad', 'Ramprastha ,Ghaziabad', 'Manohar Jain', 'Avni Jain', 'a+', 'cse'),
(9914103129, 'aashay@3129', 'Aashay', 'Kumar', 'm', '1998-01-09', 7504564466, 'a1', '2015-07-27', 3, 'aashaykom@gmail.com', 'Jhilmil,Shahdra', 'Jhilmil,Shahdra', 'Gopinath Kumar', 'Seema Kumar', 'b-', 'cse'),
(9914103130, 'meshiv3130', 'Shivarpit', 'Sharma', 'm', '1997-08-28', 9913103449, 'a1', '1997-08-28', 3, 'meshivarpit@yahoo.com', 'Sector-63,NOIDA', 'Sector-63,NOIDA', 'Shiv Sharma', 'Kanchan Sharma', 'a+', 'cse'),
(9914103131, 'priyanshu@3131', 'Priyanshu', 'Khare', 'f', '1998-02-15', 9913103450, 'a1', '1998-02-15', 3, 'priyanshukhare@gmail.com', 'Sector-37,NOIDA', 'Sector-37,NOIDA', 'Awnish Khare', 'Deeksha Khare', 'a+', 'cse'),
(9914103132, 'aditya@3132', 'Aditya', 'Bakliwal', 'm', '1996-11-30', 9913103451, 'a1', '1996-11-30', 3, 'bakaditya@yahoo.com', 'Lucknow', 'Lucknow', 'Manoj Bakliwal', 'Ruchi Bakliwal', 'a+', 'cse'),
(9914103133, 'saumya@3133', 'Saumya', 'Garg', 'f', '1998-03-29', 9913103452, 'a1', '1998-03-29', 3, 'saumyagarg@gmail.com', 'Sahibabad, Ghaziabad', 'Sahibabad, Ghaziabad', 'Pramod Garg', 'Neelam Garg', 'a+', 'cse'),
(9914103134, 'nilesh@3134', 'Nilesh', 'Kumar', 'm', '1998-12-25', 9913103453, 'a1', '1998-12-25', 3, 'nilesh123@yahoo.coom', 'Bihar', 'Bihar', 'Rajat Kumar', 'Rani kumar', 'a+', 'cse'),
(9914103135, 'himanshi@3135', 'Himanshi', 'Singh', 'f', '1998-04-15', 9913103454, 'a1', '1998-04-15', 3, 'himanshi_sing@gmail.com', 'Punjab', 'Punjab', 'Mukesh Singh', 'Mansi Singh', 'a+', 'cse'),
(9914103136, 'rajat@3136', 'Rajat', 'Dhupar', 'm', '2015-07-26', 9913103455, 'a1', '2015-07-27', 3, 'rajatdhuppper2gmail.com', 'NOIDA', 'NOIDA', 'Mahesh Dhupara', 'Urvashi Dhupar', 'a-', 'cse'),
(9914103137, 'rishabh@3137', 'Rishabh', 'Jain', 'm', '1998-02-15', 9913103456, 'a1', '2015-08-10', 3, 'rishabh_jain@gmail.com', 'Allahabad', 'Allahabad', 'Sanjay Jain', 'Nirmala Jain', 'b+', 'cse'),
(9914103138, 'kajal@3138', 'Kajal ', 'Gupta', 'f', '1998-08-17', 9987665433, 'a1', '2015-07-27', 3, 'kajalqueen@gmail.com', 'Shahdra, Delhi', 'Shahdra, Delhi', 'Anil Gupta', 'Savita Gupta', 'ab+', 'cse'),
(9914103139, 'namit@3139', 'Namit', 'Goyal', 'm', '1998-04-30', 9913103457, 'a2', '2015-07-27', 3, 'namitbaniya@yahoo.com', 'Mohan Nagar, Ghaziabad', 'Mohan Nagar, Ghaziabad', 'Pranit Goyal', 'Sakshi Goyal', 'b-', 'cse'),
(9914103141, 'tarun@3141', 'Tarun', 'Agarwal', 'm', '1998-05-10', 9913103458, 'a2', '2015-07-27', 3, 'tarunagrwl@gmail.com', 'Lucknow', 'Lucknow', 'Nishant Agarwal', 'Simran Agarwal', 'o+', 'cse'),
(9914103144, 'vaibhav@3144', 'Vaibhav', 'Rajpurohit', 'm', '1998-11-01', 9913103459, 'a2', '2015-07-27', 3, 'vaibhav_delhi@gmail.com', 'Patparganj,Delhi', 'Patparganj,Delhi', 'Ranjit Rajpurohit', 'Aneesha Rajpurohit', 'b+', 'cse'),
(9914103145, 'dipanshu@3145', 'Dipanshu', 'Magoo', 'm', '1998-12-29', 9913103460, 'a2', '2015-07-27', 3, 'dipanshoogam@gmail.com', 'bihar', 'bihar', 'Gautam Magoo', 'Anjali Magoo', 'a-', 'cse'),
(9914103146, 'ayush@3146', 'Ayushi', 'Khanduri', 'f', '1997-06-21', 9913103462, 'a2', '2015-07-29', 3, 'ayushi.khan@gmail.com', 'Vijaynagar, Ghaziabad', 'Vijaynagar, Ghaziabad', 'Amit Khanduri', 'Amrita Khanduri', 'b+', 'cse'),
(9914103147, 'aditya@3147', 'Aditya', 'Shukla', 'm', '1998-01-21', 9913103465, 'a2', '2015-07-27', 3, 'aditflash@gmail.com', 'Delhi', 'Delhi', 'Anupam Shukla', 'Anupama Shukla', 'a+', 'cse'),
(9914103148, 'aditya@3148', 'Aditya', 'Kumar', 'm', '1996-01-09', 9913103466, 'a2', '2015-07-27', 3, 'adityakumar@gmail.com', 'Dehradoon', 'Dehradoon', 'Ankit Kumar', 'Ankita Kumar', 'a+', 'cse'),
(9914103149, 'anupam@3149', 'Anupam', 'Srivastava', 'm', '1998-08-14', 9913103467, 'a2', '2015-07-27', 3, 'anupam_real@yahoo.com', 'Indrapuram,Ghaziabad', 'Indrapuram,Ghaziabad', 'Gaurav Srivastava', 'Prerna Srivastava', 'o+', 'cse'),
(9914103151, 'ashutosh@3151', 'Ashutosh', 'Kumar', 'm', '1998-10-01', 9913103468, 'a2', '2015-07-27', 3, 'ashutosh.kumar@gmail.com', 'Anand Vihar, Delhi', 'Anand Vihar, Delhi', 'Himanshu Kumar ', 'Neha Kumar', 'b-', 'cse'),
(9914103153, 'lovedeep@3153', 'Lovedeep', 'Mittal', 'f', '1998-10-21', 9913103469, 'a2', '2015-07-27', 3, 'love.deep@gmail.com', 'Chandigarh', 'Chandigarh', 'Dinesh Mittal', 'Lata Mittal', 'b-', 'cse'),
(9914103468, 'arnavsharma', 'arnav', 'sharma', 'm', '1996-03-22', 8475985645, 'a1', '2015-09-24', 3, 'arnav_sharma@gmail.com', 'noida', 'andheri, mumbai', 'gajanan sharma', 'paro sharma', 'o+', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` bigint(10) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile_no` bigint(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `temp_addr` varchar(50) DEFAULT NULL,
  `perm_addr` varchar(50) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `specialisations` varchar(30) DEFAULT NULL,
  `salary` bigint(18) DEFAULT NULL,
  `position` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=201004 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `first_name`, `last_name`, `gender`, `dob`, `mobile_no`, `email`, `joining_date`, `temp_addr`, `perm_addr`, `dept`, `specialisations`, `salary`, `position`, `username`, `password`) VALUES
(201001, 'Anuradha ', 'Gupta', 'f', '1987-01-12', 97176944177, 'anuradha@kiet.ac.in', '2007-07-21', 'NOIDA', 'NOIDA', 'cse', 'Security Information', 1200000, 'Assistant Professor', 'anuradha.gupta', 'anuradha201001'),
(201002, 'Shelly', 'Sachdeva', 'f', '1985-05-12', 85112578787, 'shelly@kiet.ac.in', '2003-08-04', 'Delhi', 'Delhi', 'cse', 'Database Management', 1800000, 'Head Professor', 'shelly.sachdeva', 'shelly201002'),
(201003, 'Shipra', 'Madan', 'f', '1987-07-08', 9717694417, 'shipra@kiet.ac.in', '2007-07-21', 'Delhi', 'Delhi', 'cse', 'Logical and Design Handling', 1200000, 'Assitant Professor', 'shipra.madan', 'shipra201003');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `course_id` varchar(15) DEFAULT NULL,
  `teacher_id` bigint(10) DEFAULT NULL,
  `venue` varchar(5) NOT NULL DEFAULT '',
  `time` time NOT NULL,
  `day` int(3) NOT NULL,
  `batch` varchar(2) DEFAULT NULL,
  `sem` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`course_id`, `teacher_id`, `venue`, `time`, `day`, `batch`, `sem`) VALUES
('10B17CI371', 201001, 'CL1', '12:00:00', 2, 'a1', 1),
('10B17CI372', 201002, 'CL1', '12:00:00', 4, 'a1', 1),
('15B17EC373', 201003, 'CL1', '12:00:00', 6, 'a1', 1),
('10B11CI311', 201002, 'CR12', '20:57:00', 1, 'a2', 3),
('10B11CI311', 201001, 'LT1', '09:00:00', 1, 'a1', 1),
('15B11CI312', 201002, 'LT1', '09:00:00', 3, 'a1', 1),
('15B11EC313', 201003, 'LT1', '09:00:00', 5, 'a1', 1),
('10B11CI311', 201001, 'LT1', '10:00:00', 1, 'a2', 1),
('15B11CI312', 201002, 'LT1', '10:00:00', 3, 'a2', 1),
('15B11EC313', 201003, 'LT1', '10:00:00', 5, 'a2', 1),
('10B17CI371', 201001, 'LT2', '11:00:00', 2, 'a2', 1),
('10B17CI372', 201002, 'LT2', '11:00:00', 4, 'a2', 1),
('15B17EC373', 201003, 'LT2', '11:00:00', 6, 'a2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile_number` (`mobile_number`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`course_id`,`date`,`time`,`student_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `crs_teach_stud`
--
ALTER TABLE `crs_teach_stud`
  ADD KEY `fk_stud` (`student_id`),
  ADD KEY `fk_teach` (`teacher_id`),
  ADD KEY `fk_crs` (`course_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`receipt_no`);

--
-- Indexes for table `marks_lab`
--
ALTER TABLE `marks_lab`
  ADD PRIMARY KEY (`course_id`,`type`,`student_id`);

--
-- Indexes for table `marks_theory`
--
ALTER TABLE `marks_theory`
  ADD PRIMARY KEY (`course_id`,`student_id`,`type`,`backlog`);

--
-- Indexes for table `msg_admin`
--
ALTER TABLE `msg_admin`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `msg_student`
--
ALTER TABLE `msg_student`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `msg_teacher`
--
ALTER TABLE `msg_teacher`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`enroll`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`venue`,`time`,`day`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `receipt_no` bigint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=788899;
--
-- AUTO_INCREMENT for table `msg_admin`
--
ALTER TABLE `msg_admin`
  MODIFY `msg_id` bigint(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `msg_student`
--
ALTER TABLE `msg_student`
  MODIFY `msg_id` bigint(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `msg_teacher`
--
ALTER TABLE `msg_teacher`
  MODIFY `msg_id` bigint(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=201004;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
