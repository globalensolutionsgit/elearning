-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2016 at 12:25 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testlms`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_id` int(10) NOT NULL AUTO_INCREMENT,
  `region` varchar(50) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `branch_address` varchar(200) NOT NULL,
  `branch_phone_number` bigint(20) NOT NULL,
  `branch_email` varchar(30) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `latitude` decimal(11,8) NOT NULL,
  `branch_owner` varchar(50) NOT NULL,
  `branch_description` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `region`, `branch_name`, `branch_address`, `branch_phone_number`, `branch_email`, `longitude`, `latitude`, `branch_owner`, `branch_description`, `status`, `created_date`) VALUES
(1, 'NS', 'branch1', '3/841,weststreet', 4234234234, 'sweetkankanenan05@gmail.com', 0.00000000, 0.00000000, 'siva1', '<p>This is branch1</p>\r\n', 1, '2016-04-10 23:21:00'),
(2, 'NS', 'branch2', 'northstreet', 5452342343, 'sweetkasddsnnan05@gmail.com', 999.99999999, 999.99999999, 'siva2', '<p>This is branch2</p>\r\n', 1, '2016-04-10 23:22:45'),
(3, 'NES', 'branch3', 'northstreet', 4354323234, 'sweetkandsdcnan05@gmail.com', 999.99999999, 999.99999999, 'siva3', '<p>This is branch3</p>\r\n', 1, '2016-04-10 23:24:14'),
(4, 'ES', 'branch4', 'weststreet', 6435234234, 'sweetkannfsddsan05@gmail.com', 999.99999999, 999.99999999, 'siva4', '<p>This is branch4</p>\r\n', 1, '2016-04-10 23:25:38'),
(5, 'CS', 'branch5', 'southstreet', 6345452423, 'sweetkannfsdfsan05@gmail.com', 999.99999999, 999.99999999, 'siva5', '<p>This is branch5<br />\r\n&nbsp;</p>\r\n', 1, '2016-04-20 09:02:31'),
(6, 'CS', 'branch6', 'weststreet', 6356345435, 'sweetkannafsdfn05@gmail.com', 999.99999999, 999.99999999, 'siva6', '<p>This is branch6</p>\r\n', 1, '2016-04-20 09:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `class_status` tinytext NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `created_date`, `class_status`) VALUES
(1, 'primary1', '2016-04-11 00:30:19', '1'),
(2, 'primary2', '2016-04-11 00:30:28', '1'),
(3, 'primary3', '2016-04-11 00:30:24', '1'),
(4, 'secondary1', '2016-04-11 00:30:32', '1'),
(5, 'secondary2', '2016-04-11 00:30:36', '1'),
(6, 'secondary3', '2016-04-11 00:30:40', '1'),
(7, 'class34', '2016-04-20 05:44:43', '1');

-- --------------------------------------------------------

--
-- Table structure for table `class_attend_students`
--

CREATE TABLE IF NOT EXISTS `class_attend_students` (
  `class_attend_students_id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(20) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_date` date NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `class_starttime` time NOT NULL,
  `class_endtime` time NOT NULL,
  `present_status` tinyint(2) NOT NULL,
  `student_request` varchar(20) NOT NULL,
  PRIMARY KEY (`class_attend_students_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `class_attend_students`
--

INSERT INTO `class_attend_students` (`class_attend_students_id`, `region`, `branch_id`, `class_id`, `subject_id`, `student_id`, `teacher_id`, `class_date`, `created_date`, `class_starttime`, `class_endtime`, `present_status`, `student_request`) VALUES
(2, '', 1, 1, 13, 26, 38, '2016-04-10', '2016-04-10 15:15:30', '05:30:00', '07:30:00', 0, ''),
(3, '', 1, 1, 13, 25, 38, '2016-04-10', '2016-04-10 15:15:30', '05:30:00', '07:30:00', 0, ''),
(4, '', 1, 1, 13, 26, 38, '2016-04-10', '2016-04-10 03:36:40', '04:30:00', '05:30:00', 0, ''),
(8, '', 1, 1, 13, 26, 38, '2016-04-18', '2016-04-18 04:31:24', '05:30:00', '07:30:00', 0, ''),
(9, '', 1, 1, 13, 25, 38, '2016-04-18', '2016-04-18 04:31:24', '05:30:00', '07:30:00', 0, ''),
(29, '', 1, 1, 13, 25, 38, '2016-04-17', '2016-04-17 05:54:45', '04:30:00', '05:30:00', 0, ''),
(30, '', 1, 1, 13, 26, 38, '2016-04-17', '2016-04-17 05:55:26', '05:30:00', '07:30:00', 0, ''),
(31, '', 1, 1, 13, 25, 38, '2016-04-17', '2016-04-17 05:55:26', '05:30:00', '07:30:00', 0, ''),
(33, '', 1, 1, 13, 25, 38, '2016-04-20', '2016-04-20 03:03:45', '03:00:00', '05:00:00', 0, ''),
(36, '', 1, 1, 13, 26, 38, '2016-04-20', '2016-04-20 03:05:20', '01:30:00', '02:30:00', 0, ''),
(45, '', 1, 1, 13, 25, 38, '2016-04-20', '2016-04-20 14:13:01', '01:00:00', '04:00:00', 0, ''),
(46, '', 1, 1, 13, 26, 38, '2016-04-20', '2016-04-20 14:13:01', '01:00:00', '04:00:00', 0, ''),
(53, '', 1, 1, 13, 26, 38, '2016-04-20', '2016-04-20 15:11:34', '03:00:00', '05:00:00', 0, ''),
(54, '', 1, 1, 13, 27, 38, '2016-04-20', '2016-04-20 15:11:34', '03:00:00', '05:00:00', 0, ''),
(55, '', 1, 1, 13, 27, 38, '2016-04-20', '2016-04-20 15:17:22', '03:00:00', '05:00:00', 0, 'requested_student');

-- --------------------------------------------------------

--
-- Table structure for table `class_schedules`
--

CREATE TABLE IF NOT EXISTS `class_schedules` (
  `class_schedules_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(50) NOT NULL,
  `day` varchar(10) NOT NULL,
  `branch_id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `end_time` varchar(10) NOT NULL,
  `num_of_seats` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`class_schedules_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='class_schedule php' AUTO_INCREMENT=59 ;

--
-- Dumping data for table `class_schedules`
--

INSERT INTO `class_schedules` (`class_schedules_id`, `teacher_id`, `day`, `branch_id`, `class_id`, `subject_id`, `start_time`, `end_time`, `num_of_seats`, `status`, `created_date`) VALUES
(1, '38', 'sun', 1, 1, 13, '04:30', '05:30', 1, 1, '2016-04-11 02:09:35'),
(2, '38', 'sun', 1, 2, 13, '05:30', '07:30', 12, 1, '2016-04-11 02:09:35'),
(3, '38', 'sun', 2, 1, 13, '08:00', '06:30', 23, 1, '2016-04-11 02:09:35'),
(4, '38', 'wed', 1, 1, 13, '01:00', '04:00', 20, 1, '2016-04-17 10:51:56'),
(5, '38', 'wed', 1, 1, 13, '03:00', '05:00', 30, 1, '2016-04-17 10:51:56'),
(6, '38', 'wed', 1, 1, 12, '03:30', '05:30', 40, 1, '2016-04-17 10:51:56'),
(7, '38', 'wed', 1, 1, 13, '01:30', '02:30', 50, 1, '2016-04-17 10:51:56'),
(8, '39', 'mon', 1, 1, 13, '02:00', '04:30', 20, 1, '2016-04-17 10:53:37'),
(9, '39', 'mon', 1, 1, 12, '01:30', '03:00', 30, 1, '2016-04-17 10:53:37'),
(10, '39', 'mon', 1, 1, 12, '02:30', '04:00', 40, 1, '2016-04-17 10:53:37'),
(11, '39', 'mon', 1, 2, 12, '01:30', '04:00', 50, 1, '2016-04-17 10:53:37'),
(12, '38', 'fri', 1, 1, 13, '01:30', '07:00', 20, 1, '2016-04-17 10:55:01'),
(13, '38', 'fri', 2, 1, 12, '02:30', '05:00', 30, 1, '2016-04-17 10:55:01'),
(14, '38', 'fri', 1, 1, 12, '00:30', '02:00', 40, 1, '2016-04-17 10:55:01'),
(15, '38', 'fri', 1, 1, 12, '02:00', '04:00', 50, 1, '2016-04-17 10:55:01'),
(16, '49', 'sun', 1, 2, 14, '05:30', '08:00', 12, 1, '2016-04-17 11:05:37'),
(17, '51', 'tue', 2, 3, 16, '00:30', '02:00', 23, 1, '2016-04-17 11:09:07'),
(41, '39', 'thu', 2, 3, 15, '01:30', '02:00', 40, 1, '2016-04-20 13:28:15'),
(42, '39', 'thu', 1, 4, 17, '07:00', '08:30', 50, 1, '2016-04-20 13:28:15'),
(43, '39', 'sat', 2, 4, 17, '02:30', '03:30', 60, 1, '2016-04-20 13:28:15'),
(44, '38', 'sun', 2, 1, 13, '05:30', '07:00', 10, 1, '2016-04-20 13:42:37'),
(45, '38', 'sun', 2, 3, 15, '03:00', '04:00', 20, 1, '2016-04-20 13:42:37'),
(46, '38', 'mon', 2, 3, 16, '01:30', '04:00', 30, 1, '2016-04-20 13:42:37'),
(47, '38', 'mon', 3, 4, 17, '04:00', '08:30', 40, 1, '2016-04-20 13:42:37'),
(48, '38', 'tue', 3, 4, 18, '02:00', '04:00', 50, 1, '2016-04-20 13:42:37'),
(49, '38', 'tue', 2, 3, 16, '04:30', '02:30', 60, 1, '2016-04-20 13:42:37'),
(50, '38', 'wed', 3, 5, 20, '02:30', '03:30', 70, 1, '2016-04-20 13:42:37'),
(51, '38', 'wed', 1, 5, 19, '01:30', '03:30', 80, 1, '2016-04-20 13:42:37'),
(52, '38', 'thu', 2, 5, 20, '02:30', '04:00', 90, 1, '2016-04-20 13:42:37'),
(54, '38', 'thu', 2, 3, 15, '06:30', '08:30', 110, 1, '2016-04-20 13:42:37'),
(55, '38', 'fri', 2, 4, 18, '02:00', '06:00', 120, 1, '2016-04-20 13:42:37'),
(57, '38', 'sat', 2, 4, 17, '02:00', '02:30', 140, 1, '2016-04-20 13:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `request_student_teacher_allocation`
--

CREATE TABLE IF NOT EXISTS `request_student_teacher_allocation` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_schedule_id` int(11) NOT NULL,
  `request_student_id` int(11) NOT NULL,
  `request_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `request_cancellation_status` tinyint(1) NOT NULL,
  `request_class_date` date NOT NULL,
  `request_day` varchar(11) NOT NULL,
  `request_teacher_id` int(11) NOT NULL,
  `request_starttime` varchar(11) NOT NULL,
  `request_endtime` varchar(11) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `request_student_teacher_allocation`
--

INSERT INTO `request_student_teacher_allocation` (`request_id`, `request_schedule_id`, `request_student_id`, `request_created_date`, `request_cancellation_status`, `request_class_date`, `request_day`, `request_teacher_id`, `request_starttime`, `request_endtime`) VALUES
(32, 5, 27, '2016-04-20 05:39:06', 1, '2016-04-20', 'wed', 38, '03:00', '05:00'),
(34, 7, 25, '2016-04-22 05:34:58', 1, '2016-04-27', 'wed', 38, '01:30', '02:30'),
(35, 7, 25, '2016-04-20 05:49:13', 1, '2016-04-20', 'wed', 38, '01:30', '02:30');

-- --------------------------------------------------------

--
-- Table structure for table `student_class_subject_branch`
--

CREATE TABLE IF NOT EXISTS `student_class_subject_branch` (
  `student_class_subject_branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_class_subject_branch_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`student_class_subject_branch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_requests`
--

CREATE TABLE IF NOT EXISTS `student_requests` (
  `student_request_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  PRIMARY KEY (`student_request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_teacher_allocation`
--

CREATE TABLE IF NOT EXISTS `student_teacher_allocation` (
  `student_teacher_allocation_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `schedule_id` int(10) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `allocation_status` tinyint(1) NOT NULL DEFAULT '0',
  `cancellation_status` tinyint(1) NOT NULL DEFAULT '0',
  `cancel_class_date` date NOT NULL,
  PRIMARY KEY (`student_teacher_allocation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `student_teacher_allocation`
--

INSERT INTO `student_teacher_allocation` (`student_teacher_allocation_id`, `student_id`, `schedule_id`, `created_date`, `allocation_status`, `cancellation_status`, `cancel_class_date`) VALUES
(3, 26, 2, '2016-04-17 08:48:47', 1, 0, '0000-00-00'),
(4, 25, 2, '2016-04-17 13:32:39', 1, 1, '2016-04-17'),
(7, 25, 1, '2016-04-17 13:46:43', 1, 1, '2016-04-10'),
(10, 25, 4, '2016-04-20 05:20:37', 1, 1, '2016-04-13'),
(11, 26, 4, '2016-04-17 10:56:09', 1, 0, '0000-00-00'),
(13, 26, 5, '2016-04-17 10:56:38', 1, 0, '0000-00-00'),
(14, 25, 8, '2016-04-17 06:31:35', 1, 1, '2016-04-18'),
(15, 26, 8, '2016-04-17 10:57:02', 1, 0, '0000-00-00'),
(16, 25, 9, '2016-04-17 10:57:35', 1, 0, '0000-00-00'),
(17, 26, 9, '2016-04-17 10:57:35', 1, 0, '0000-00-00'),
(18, 25, 12, '2016-04-20 05:20:59', 1, 1, '2016-04-22'),
(19, 26, 12, '2016-04-17 10:57:52', 1, 0, '0000-00-00'),
(20, 27, 13, '2016-04-17 11:58:37', 1, 0, '0000-00-00'),
(21, 26, 13, '2016-04-17 06:35:33', 1, 0, '2016-04-17'),
(23, 26, 11, '2016-04-17 12:02:14', 1, 0, '0000-00-00'),
(24, 25, 11, '2016-04-17 12:02:14', 1, 0, '0000-00-00'),
(25, 26, 7, '2016-04-20 04:46:17', 1, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(55) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `subject_title` varchar(100) NOT NULL,
  `short_description` longtext NOT NULL,
  `long_description` varchar(255) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `acedemic_year` varchar(20) NOT NULL,
  `allowed_student` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`subject_id`),
  KEY `fk_class_id` (`class_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `class_id`, `subject_title`, `short_description`, `long_description`, `subject_code`, `acedemic_year`, `allowed_student`, `status`, `created_date`) VALUES
(17, 4, 'sec_sub2', '<p>This is secondary1 subject</p>\r\n', '<p>This is secondary1 subject...long</p>\r\n', 'Secondary-pri_sub1', '', 0, 1, '2016-04-20 06:33:02'),
(18, 4, 'sec_sub1', '<p>This is secondary2 subject</p>\r\n', '<p>This is secondary2 subject...long</p>\r\n', 'Secondary-pri_sub1', '', 0, 1, '2016-04-20 06:33:07'),
(14, 2, 'pri_sub2', '<p>This is primary2 subject</p>\r\n', '<p>This is primary2 subject..long</p>\r\n', 'Primary-pri_sub2', '', 0, 1, '2016-04-10 23:55:55'),
(15, 3, 'pri_sub4', '<p>This is primary3 subject</p>\r\n', '<p>This is primary2 subject..long</p>\r\n', 'Primary-pri_sub4', '', 0, 1, '2016-04-10 23:56:46'),
(16, 3, 'pri_sub5', '<p>This is primary5 subject</p>\r\n', '<p>This is primary5 subject....long</p>\r\n', 'Primary-pri_sub5', '', 0, 1, '2016-04-10 23:58:20'),
(13, 1, 'pri_sub3', '<p>This is primary1 subject</p>', '<p>This is primary1 subject....long</p>', 'Primary-pri_sub3', '', 0, 1, '2016-04-10 03:34:28'),
(12, 1, 'pri_sub1', '<p>This is primary1 subject</p>\r\n', '<p>This is primary1 subject..long description</p>\r\n', 'Primary-pri_sub1', '', 0, 1, '2016-04-10 23:45:20'),
(19, 5, 'gfdgfvdgvdfxgdfgdd', '<p>fgvdsfgdfgdfgdbknjbkvndfkvmdkvmckxvncnvx</p>\r\n', '<p>bdsgfjbnxckvbckvmnmcvbmc v</p>\r\n', 'gfdgfdgds', '', 0, 1, '2016-04-20 06:43:22'),
(20, 5, 'sec_sub2', '<p>bgdfxcvxc</p>\r\n', '<p>bdgvxcxc</p>\r\n', 'dfvc', '', 0, 1, '2016-04-20 05:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class_subject_branch`
--

CREATE TABLE IF NOT EXISTS `teacher_class_subject_branch` (
  `teacher_class_subject_branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `allowed_student` int(3) NOT NULL,
  `current_student_count` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`teacher_class_subject_branch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `temp_stu_attend_class`
--

CREATE TABLE IF NOT EXISTS `temp_stu_attend_class` (
  `temp_stu_attend_class_id` int(11) NOT NULL AUTO_INCREMENT,
  `previous_branch_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `temp_stu_name` varchar(200) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_date` date NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `class_starttime` time NOT NULL,
  `class_endtime` time NOT NULL,
  PRIMARY KEY (`temp_stu_attend_class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `temp_stu_attend_class`
--

INSERT INTO `temp_stu_attend_class` (`temp_stu_attend_class_id`, `previous_branch_id`, `branch_id`, `class_id`, `subject_id`, `temp_stu_name`, `teacher_id`, `class_date`, `created_date`, `class_starttime`, `class_endtime`) VALUES
(1, 4, 1, 1, 13, 'temp1', 38, '2016-04-10', '2016-04-10 15:15:30', '05:30:00', '07:30:00'),
(2, 2, 1, 1, 13, 'temp2', 38, '2016-04-10', '2016-04-10 15:15:30', '05:30:00', '07:30:00'),
(3, 2, 1, 1, 13, 'temp10', 38, '2016-04-10', '2016-04-10 03:36:40', '04:30:00', '05:30:00'),
(4, 4, 1, 1, 13, 'temp11', 38, '2016-04-10', '2016-04-10 03:36:40', '04:30:00', '05:30:00'),
(5, 1, 1, 1, 13, 'kannan', 38, '2016-04-17', '2016-04-17 12:23:43', '05:30:00', '07:30:00'),
(6, 1, 1, 1, 13, 'siva', 38, '2016-04-17', '2016-04-17 12:23:43', '05:30:00', '07:30:00'),
(7, 1, 1, 1, 13, 'kannan', 38, '2016-04-18', '2016-04-18 04:31:24', '05:30:00', '07:30:00'),
(8, 1, 1, 1, 13, 'siva', 38, '2016-04-18', '2016-04-18 04:31:24', '05:30:00', '07:30:00'),
(9, 0, 1, 1, 13, 'siva', 38, '2016-04-17', '2016-04-17 05:05:13', '04:30:00', '05:30:00'),
(10, 0, 1, 1, 13, 'siva', 38, '2016-04-17', '2016-04-17 05:05:44', '04:30:00', '05:30:00'),
(11, 0, 1, 1, 13, 'siva', 38, '2016-04-17', '2016-04-17 05:06:35', '04:30:00', '05:30:00'),
(12, 0, 1, 1, 13, 'siva', 38, '2016-04-17', '2016-04-17 05:07:08', '04:30:00', '05:30:00'),
(13, 0, 1, 1, 13, 'siva', 38, '2016-04-17', '2016-04-17 05:29:32', '04:30:00', '05:30:00'),
(14, 0, 1, 1, 13, 'siva', 38, '2016-04-17', '2016-04-17 05:30:30', '04:30:00', '05:30:00'),
(15, 1, 1, 1, 13, 'test21', 38, '2016-04-17', '2016-04-17 05:46:54', '04:30:00', '05:30:00'),
(16, 1, 1, 1, 13, 'test21', 38, '2016-04-17', '2016-04-17 05:54:45', '04:30:00', '05:30:00'),
(17, 1, 1, 1, 13, 'test200', 38, '2016-04-17', '2016-04-17 05:55:26', '05:30:00', '07:30:00'),
(18, 1, 1, 1, 13, 'test201', 38, '2016-04-17', '2016-04-17 05:55:26', '05:30:00', '07:30:00'),
(19, 2, 1, 1, 13, 'test202', 38, '2016-04-17', '2016-04-17 05:55:26', '05:30:00', '07:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone_number` bigint(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gender` tinyint(2) NOT NULL,
  `region` varchar(60) NOT NULL,
  `city` varchar(100) NOT NULL,
  `activation` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `classes` int(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `username`, `password`, `firstname`, `lastname`, `phone_number`, `email`, `photo`, `description`, `gender`, `region`, `city`, `activation`, `created_date`, `status`, `classes`) VALUES
(21, 'admin', 'admin', 'admin', 'sastha', 'mano', 9786243201, 'vgfdbfvsdvd@gmail.com', '', '', 1, 'WS', '10', '0', '2016-04-10 22:52:00', 1, NULL),
(22, 'admin', 'siva', 'siva', 'siva', 'kannan', 8754063617, 'sweetkannan05@gmail.com', '', 'welcome', 1, 'NES', '', '', '2016-04-10 22:51:56', 1, NULL),
(25, 'student', 'student1', 'student1', 'student1', 'student1', 5454523452, 'student1@gmail.com', '', 'student1', 1, 'NS', '1', '', '2016-04-11 00:20:22', 1, 1),
(26, 'student', 'student2', 'student2', 'student2', 'student2', 4578458458, 'student2@gmail.com', '', 'sudent2', 1, 'NS', '1', '', '2016-04-10 06:17:10', 1, 1),
(27, 'student', 'student3', 'student3', 'student3', 'student3', 6834858345, 'student3@gmail.com', '', 'sudent3', 2, 'NS', '1', '', '2016-04-10 06:17:52', 1, 2),
(28, 'student', 'student4', 'student4', 'student4', 'student4', 9874857432, 'student4@gmail.com', '', 'sudent4', 1, 'NS', '1', '', '2016-04-10 06:18:25', 1, 2),
(29, 'student', 'student5', 'student5', 'student5', 'student5', 5843758432, 'student5@gmail.com', '', 'sudent5', 2, 'NS', '1', '', '2016-04-10 06:19:05', 1, 3),
(31, 'student', 'student6', 'student6', 'student6', 'student6', 7456653356, 'student6@gmail.com', '', 'student6', 2, 'NS', '1', '', '2016-04-11 01:19:31', 1, 3),
(32, 'student', 'student7', 'student7', 'student7', 'student7', 8467653465, 'student7@gmail.com', '', 'student7', 1, 'NS', '2', '', '2016-04-11 01:21:43', 1, 6),
(33, 'student', 'student8', 'student8', 'student8', 'student8', 5437858934, 'student8@gmail.com', '', 'student8', 2, 'NS', '2', '', '2016-04-11 01:22:17', 1, 6),
(34, 'student', 'student9', 'student9', 'student9', 'student9', 8678667756, 'student9@gmail.com', '', 'student9', 1, 'NES', '3', '', '2016-04-11 01:23:38', 1, 5),
(35, 'student', 'student10', 'student10', 'student10', 'student10', 5824358943, 'student10@gmail.com', '', 'student10', 1, 'NES', '3', '', '2016-04-11 01:24:32', 1, 5),
(36, 'student', 'student11', 'student11', 'student11', 'student11', 5487582437, 'student11@gmail.com', '', 'student11', 2, 'NES', '3', '', '2016-04-11 01:25:23', 1, 4),
(37, 'student', 'student12', 'student12', 'student12', 'student12', 4857823645, 'student12@gmail.com', '', 'student12', 2, 'NES', '3', '', '2016-04-11 01:26:06', 1, 4),
(38, 'teacher', 'teacher1', 'teacher1', 'teacher1', 'teacher1', 6747467467, 'teacher1@gmail.com', '', 'teacher1', 2, 'NS', '1', '', '2016-04-11 01:44:21', 1, NULL),
(39, 'teacher', 'teacher2', 'teacher2', 'teacher2', 'teacher2', 8564743673, 'teacher2@gmail.com', '', 'teacher2', 2, 'ES', '4', '', '2016-04-11 02:03:11', 1, NULL),
(40, 'teacher', 'teacher3', 'teacher3', 'teacher3', 'teacher3', 7857675676, 'teacher3@gmail.com', '', 'teacher3', 1, 'NES', '3', '', '2016-04-11 02:03:56', 1, NULL),
(41, 'student', 'student13', 'student13', 'student13', 'student13', 8656365655, 'student13@gmail.com', '', 'student13', 1, 'NS', '2', '', '2016-04-10 15:35:33', 1, 1),
(42, 'student', 'sivaram', 'sivaram', 'siva', 'kannan', 8765445354, 'sweetkanfdsfdfdsan05@gmail.com', '', '', 1, 'NS', '1', '', '2016-04-17 12:27:35', 1, 2),
(43, 'teacher', 'test select', '5345342', 'test select', 'test select', 6345233245, 'sweetkatestsnnan05@gmail.com', '', 'welcome', 2, 'NS', '1', '', '2016-04-17 07:15:04', 1, NULL),
(48, 'teacher', '', '', '', '', 0, '', '', '', 1, 'Select Region', 'Select branch', '', '2016-04-17 08:55:50', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_preference`
--

CREATE TABLE IF NOT EXISTS `user_preference` (
  `user_preferenceId` int(55) NOT NULL AUTO_INCREMENT,
  `usersId` int(55) NOT NULL,
  `user_classId` int(55) NOT NULL,
  `user_subjectId` int(55) NOT NULL,
  PRIMARY KEY (`user_preferenceId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='User Preference Table for teacher class and subject' AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user_preference`
--

INSERT INTO `user_preference` (`user_preferenceId`, `usersId`, `user_classId`, `user_subjectId`) VALUES
(3, 38, 1, 13),
(4, 38, 1, 12),
(5, 39, 3, 15),
(6, 39, 3, 16),
(7, 39, 4, 17),
(8, 40, 4, 17),
(9, 43, 1, 13),
(10, 43, 1, 12),
(11, 43, 2, 14),
(12, 48, 1, 12),
(13, 48, 2, 14),
(20, 50, 2, 14),
(21, 50, 3, 15);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
