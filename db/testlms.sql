-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2016 at 10:05 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `region`, `branch_name`, `branch_address`, `branch_phone_number`, `branch_email`, `longitude`, `latitude`, `branch_owner`, `branch_description`, `status`, `created_date`) VALUES
(5, 'NS', 'Marsiling', '																										Blk 326 Woodlands St 32 #01-121 (Level 2), Singapore,  730326																										', 6368, 'kipmcgrathmarsiling@gmail.com', 11.23220000, 12.67678600, 'Goh Wei Lan', '<p>test fthrftyrtfytrf</p>\r\n', 1, '2016-01-02 21:29:07'),
(6, 'NS', 'Sembawang', 'BLK791,WoodlandsAvenue6#01-603,Singapore,730791', 6363, 'kipmcgrathsembawang@gmail.com', 11.23232000, 12.23232000, 'Sangeetha Chandra', '', 0, '2016-04-25 00:21:26'),
(7, 'NES', 'Hougang-Green-Mall', '21 Hougang Street 51 #02-19, Singapore,  938719', 6385, 'kmwechg@gmail.com', 11.23220000, 12.23232000, 'Liew Kok Wai', '<p style="text-align:start">Our centre is Kip McGrath &ndash; Hougang Green Mall. Mr. Liew Kok Wai&nbsp;is the Owner of the centre. Feel free to call us at 6385 7996 if we can be of service to you.</p>\r\n\r\n<p style="text-align:start">Kip McGrath tuition is', 1, '2016-01-02 21:32:52'),
(8, 'NES', 'Kovan', 'Block 203 Hougang Street 21 #03-71, Singapore,  530203', 6280, 'alicia.km.kovan@gmail.com', 11.23220000, 12.23232000, 'Alicia Seah', '<p style="text-align:start">We offer tuition for Primary and Secondary school children for the following:</p>\r\n\r\n<p style="text-align:start">Pri 1 &ndash; 6: English and Math</p>\r\n\r\n<p style="text-align:start"><span style="color:rgb(5, 17, 38); font-famil', 1, '2016-01-02 21:34:08'),
(9, 'NS', 'Sengkang', 'We offer tuition for Primary and Secondary school children for the following:\r\n\r\nPri 1 – 6: English and Math\r\n\r\n Pri 3 – 6: Science\r\n\r\nSec 1 – 4: English, E. Math (and A. Math)\r\nFeel free to contact u', 6886, 'kipmcgrathsk@singnet.com.sg', 11.23220000, 12.23232000, 'Gloria Tan', '<p style="text-align:start">Our centre is Kip McGrath &ndash; Sengkang. Ms. Gloria Tan is the Owner of the centre. Feel free to call us at 6886 0880 if we can be of service to you.</p>\r\n\r\n<p style="text-align:start">Kip McGrath tuition is very unique and ', 1, '2016-01-02 21:35:32'),
(10, 'ES', 'dsgsdf', 'sdfgsdf', 2147483647, 'gsdfg@gmaill.com', 0.00000000, 0.00000000, 'sdfgsdf', '<p>sdfgsdf sdfgdsfgsdf</p>\r\n', 1, '2016-02-02 11:42:27'),
(11, 'NS', 'vdbcvbf', 'sdfdsfgvc', 2147483647, 'sdfgdsfg@gm.com', 0.00000000, 0.00000000, 'sdfgdsfgvc', '<p>sdfgdsfg dfsgdsfg dsfgdsfgsdfg dfgsdfg</p>\r\n', 1, '2016-02-02 11:43:16'),
(12, 'CS', 'Jurong East ( Yuhua )', '													bnmbnm													', 784578745, 'bnmbn@gmail.com', 0.00000000, 0.00000000, 'bnmbnm', '<p>sdfgsdf dsfgdsf ds sdfgsd</p>\r\n', 1, '2016-02-04 13:35:25'),
(15, 'CS', '465345', 'sdgsdfsdfasdfasd', 897935646, '5sddasdfasdfsf@dgd.com', 999.99999999, 999.99999999, '3456546', '<p>dsfgsdfgsdf</p>\r\n', 1, '2016-03-14 11:18:51');

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
(6, 'Primary', '2016-04-08 02:14:44', ''),
(7, 'Primary1', '2016-04-08 02:16:16', ''),
(8, 'Primary2', '2016-04-08 02:16:58', ''),
(9, 'Secondary1', '2016-04-08 02:17:15', ''),
(10, 'Secondary2', '2016-04-08 02:17:31', ''),
(11, 'Post-Secondary', '2016-04-08 02:16:45', '');

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
  PRIMARY KEY (`class_attend_students_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `class_attend_students`
--

INSERT INTO `class_attend_students` (`class_attend_students_id`, `region`, `branch_id`, `class_id`, `subject_id`, `student_id`, `teacher_id`, `class_date`, `created_date`, `class_starttime`, `class_endtime`, `present_status`) VALUES
(31, '', 5, 6, 4, 120, 56, '2016-03-29', '2016-03-29 07:29:53', '03:00:00', '07:30:00', 0),
(32, '', 5, 6, 4, 135, 56, '2016-03-29', '2016-03-29 07:29:53', '03:00:00', '07:30:00', 0),
(36, '', 5, 6, 4, 120, 56, '2016-04-19', '2016-04-19 09:14:33', '03:00:00', '07:30:00', 0),
(37, '', 5, 6, 4, 135, 56, '2016-04-19', '2016-04-19 09:14:33', '03:00:00', '07:30:00', 0),
(38, '', 8, 6, 4, 131, 56, '2016-03-27', '2016-03-27 10:05:02', '07:00:00', '08:00:00', 0),
(39, '', 8, 6, 4, 139, 56, '2016-03-27', '2016-03-27 10:05:02', '07:00:00', '08:00:00', 0),
(40, '', 8, 6, 4, 131, 56, '2016-05-22', '2016-05-22 10:05:37', '07:00:00', '08:00:00', 0),
(41, '', 8, 6, 4, 139, 56, '2016-05-22', '2016-05-22 10:05:37', '07:00:00', '08:00:00', 0),
(44, '', 5, 6, 4, 120, 56, '2016-03-28', '2016-03-28 10:17:48', '02:30:00', '02:30:00', 0),
(45, '', 5, 6, 4, 135, 56, '2016-03-28', '2016-03-28 10:17:48', '02:30:00', '02:30:00', 0),
(46, '', 5, 6, 4, 120, 56, '2016-03-30', '2016-03-30 10:18:24', '01:30:00', '03:00:00', 0),
(47, '', 5, 6, 4, 135, 56, '2016-03-30', '2016-03-30 10:18:24', '01:30:00', '03:00:00', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='class_schedule php' AUTO_INCREMENT=107 ;

--
-- Dumping data for table `class_schedules`
--

INSERT INTO `class_schedules` (`class_schedules_id`, `teacher_id`, `day`, `branch_id`, `class_id`, `subject_id`, `start_time`, `end_time`, `num_of_seats`, `status`, `created_date`) VALUES
(62, '56', 'sun', 8, 6, 4, '07:00', '08:00', 1, 1, '2016-03-29 07:22:44'),
(63, '56', 'sun', 6, 7, 7, '08:00', '09:00', 1, 1, '2016-03-29 07:22:45'),
(64, '56', 'tue', 5, 6, 4, '03:00', '07:30', 1, 1, '2016-03-29 07:22:45'),
(65, '56', 'mon', 5, 6, 4, '02:30', '02:30', 1, 1, '2016-03-29 10:16:49'),
(66, '56', 'wed', 5, 6, 4, '01:30', '03:00', 1, 1, '2016-03-29 10:16:49'),
(67, '56', 'sun', 12, 8, 8, '01:30', '04:30', 1, 1, '2016-04-27 15:02:36'),
(68, '114', 'fri', 5, 6, 4, '08:00', '09:00', 1, 1, '2016-04-08 18:03:16'),
(69, '114', 'fri', 5, 6, 5, '04:30', '06:30', 1, 1, '2016-04-08 18:03:16'),
(93, '121', 'fri', 5, 6, 4, '07:30', '09:00', 1, 1, '2016-04-08 08:37:22'),
(94, '121', 'fri', 6, 7, 7, '07:30', '06:30', 68, 1, '2016-04-08 08:37:22'),
(95, '133', 'sun', 5, 6, 4, '05:00', '06:30', 20, 1, '2016-04-08 19:45:25'),
(96, '133', 'sun', 5, 6, 5, '03:00', '05:00', 40, 1, '2016-04-08 19:45:25'),
(97, '133', 'mon', 5, 6, 5, '01:30', '02:30', 20, 1, '2016-04-08 19:45:25'),
(98, '133', 'tue', 5, 6, 4, '01:00', '03:30', 20, 1, '2016-04-08 19:45:25'),
(99, '133', 'wed', 5, 6, 5, '02:00', '04:30', 20, 1, '2016-04-08 19:45:25'),
(100, '133', 'wed', 5, 6, 4, '01:30', '04:30', 40, 1, '2016-04-08 19:45:25'),
(101, '133', 'wed', 5, 6, 5, '01:00', '02:00', 12, 1, '2016-04-08 19:45:25'),
(102, '133', 'thu', 5, 6, 5, '00:30', '04:00', 20, 1, '2016-04-08 19:45:25'),
(103, '133', 'fri', 5, 6, 5, '01:00', '02:30', 20, 1, '2016-04-08 19:45:25'),
(104, '133', 'sat', 5, 6, 5, '01:00', '01:30', 20, 1, '2016-04-08 19:45:25'),
(105, '133', 'sat', 5, 6, 5, '01:00', '03:00', 40, 1, '2016-04-08 19:45:25'),
(106, '56', 'sat', 6, 7, 6, '04:00', '03:30', 20, 1, '2016-04-12 18:47:53');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `student_requests`
--

INSERT INTO `student_requests` (`student_request_id`, `branch_id`, `class_id`, `subject_id`, `student_id`) VALUES
(5, 6, 7, 6, 39),
(6, 7, 6, 5, 40),
(7, 7, 6, 5, 41),
(8, 7, 6, 5, 42),
(9, 5, 6, 4, 51),
(10, 5, 6, 5, 51),
(11, 6, 6, 4, 51),
(12, 5, 6, 4, 44),
(13, 5, 6, 5, 44),
(14, 6, 6, 4, 44),
(15, 9, 6, 4, 44),
(16, 9, 6, 5, 44),
(17, 6, 6, 5, 44),
(18, 11, 6, 4, 44),
(19, 11, 6, 5, 44),
(20, 9, 6, 4, 51),
(21, 9, 6, 5, 51),
(22, 11, 6, 4, 51),
(23, 11, 6, 5, 51),
(24, 5, 7, 6, 45),
(25, 5, 7, 7, 45),
(26, 6, 7, 6, 45),
(27, 6, 7, 7, 45),
(28, 9, 7, 6, 45),
(29, 9, 7, 7, 45),
(30, 11, 7, 6, 45),
(31, 11, 7, 7, 45),
(32, 5, 6, 4, 52),
(33, 5, 6, 5, 52),
(34, 6, 6, 4, 52),
(35, 6, 6, 5, 52),
(36, 9, 6, 4, 52),
(37, 9, 6, 5, 52),
(38, 11, 6, 4, 52),
(39, 11, 6, 5, 52),
(40, 12, 7, 7, 43),
(41, 12, 7, 6, 43),
(42, 12, 6, 5, 60),
(43, 12, 6, 5, 65),
(44, 9, 7, 7, 68);

-- --------------------------------------------------------

--
-- Table structure for table `student_teacher_allocation`
--

CREATE TABLE IF NOT EXISTS `student_teacher_allocation` (
  `student_teacher_allocation_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `schedule_id` int(10) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`student_teacher_allocation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=231 ;

--
-- Dumping data for table `student_teacher_allocation`
--

INSERT INTO `student_teacher_allocation` (`student_teacher_allocation_id`, `student_id`, `schedule_id`, `created_date`, `status`) VALUES
(128, 142, 63, '2016-04-01 04:20:00', 1),
(136, 120, 65, '2016-04-24 22:41:08', 1),
(139, 135, 65, '2016-04-24 22:41:08', 1),
(156, 120, 66, '2016-04-25 02:42:14', 1),
(157, 135, 66, '2016-04-25 02:42:14', 1),
(161, 169, 67, '2016-04-27 15:04:32', 1),
(162, 135, 64, '2016-04-08 17:16:43', 1),
(184, 120, 93, '2016-04-08 19:06:25', 1),
(185, 135, 93, '2016-04-08 19:06:25', 1),
(186, 135, 95, '2016-04-08 19:47:03', 1),
(187, 135, 98, '2016-04-08 19:47:16', 1),
(188, 135, 100, '2016-04-08 19:47:35', 1),
(189, 135, 96, '2016-04-08 19:57:31', 1),
(190, 135, 97, '2016-04-08 19:57:45', 1),
(191, 135, 99, '2016-04-08 19:58:00', 1),
(192, 135, 101, '2016-04-08 19:58:14', 1),
(193, 135, 102, '2016-04-08 19:59:00', 1),
(194, 135, 103, '2016-04-08 19:59:17', 1),
(195, 135, 104, '2016-04-08 19:59:31', 1),
(196, 135, 105, '2016-04-08 19:59:44', 1),
(198, 120, 69, '2016-04-07 23:28:59', 1),
(199, 135, 69, '2016-04-07 23:28:59', 1),
(229, 135, 68, '2016-04-13 18:08:15', 1),
(230, 131, 62, '2016-04-12 18:49:00', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `class_id`, `subject_title`, `short_description`, `long_description`, `subject_code`, `acedemic_year`, `allowed_student`, `status`, `created_date`) VALUES
(4, 6, 'Maths', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(0, 84, 159); font-family:arial,helvetica,sans-serif; font-size:16px">The maths tuition program is designed for students who are having difficulty with maths, in any grade. A free initial consu', 'Maths-PRI', '2015', 20, 0, '2016-04-08 07:48:00'),
(5, 6, 'English', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(0, 84, 159); font-family:arial,helvetica,sans-serif; font-size:16px">The English tutoring program is designed for students who need help with reading, comprehension, grammar, writing and spell', 'ENGLISH-PRI', '2015', 20, 1, '2016-01-02 21:39:40'),
(6, 7, 'Maths', '', '<p>test</p>\r\n', 'Maths-SEC', '2015', 20, 1, '2016-01-12 12:40:58'),
(7, 7, 'English', '', '<p>test</p>\r\n', 'English-SEC', '2015', 20, 1, '2016-01-12 12:41:50'),
(8, 8, '123123', '<p>1231231</p>\r\n', '<p>123123</p>\r\n', '123123', '', 0, 0, '2016-03-18 05:21:43');

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

--
-- Dumping data for table `teacher_class_subject_branch`
--

INSERT INTO `teacher_class_subject_branch` (`teacher_class_subject_branch_id`, `branch_id`, `user_id`, `class_id`, `subject_id`, `start_date`, `end_date`, `short_desc`, `allowed_student`, `current_student_count`, `created_date`) VALUES
(10, 0, 38, 0, 4, '2016-01-23 21:00:00', '2016-01-13 21:00:00', '', 0, 0, '2016-01-13 11:46:50');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `temp_stu_attend_class`
--

INSERT INTO `temp_stu_attend_class` (`temp_stu_attend_class_id`, `previous_branch_id`, `branch_id`, `class_id`, `subject_id`, `temp_stu_name`, `teacher_id`, `class_date`, `created_date`, `class_starttime`, `class_endtime`) VALUES
(1, 8, 8, 7, 6, 'kannans', 111, '2016-03-27', '0000-00-00 00:00:00', '06:00:00', '07:00:00'),
(2, 8, 8, 7, 6, 'siva', 111, '2016-03-27', '0000-00-00 00:00:00', '06:00:00', '07:00:00'),
(3, 8, 8, 7, 6, 'ss', 111, '2016-03-27', '0000-00-00 00:00:00', '06:00:00', '07:00:00'),
(4, 0, 8, 7, 6, 'swe', 111, '2016-03-27', '0000-00-00 00:00:00', '06:00:00', '07:00:00'),
(5, 8, 8, 7, 6, 'kk', 111, '2016-03-27', '2016-03-26 18:30:00', '06:00:00', '07:00:00'),
(6, 8, 8, 7, 6, 'rere', 111, '2016-03-27', '0000-00-00 00:00:00', '06:00:00', '07:00:00'),
(7, 8, 8, 6, 6, 'll', 111, '2016-03-27', '0000-00-00 00:00:00', '01:00:00', '02:00:00'),
(41, 7, 6, 6, 4, 're', 111, '2016-03-27', '2016-03-27 07:49:43', '08:00:00', '09:00:00'),
(42, 6, 6, 6, 4, 'ree', 111, '2016-03-27', '2016-03-27 07:49:43', '08:00:00', '09:00:00'),
(43, 8, 5, 6, 4, 'siva', 56, '2016-03-29', '2016-03-29 07:29:53', '03:00:00', '07:30:00'),
(44, 8, 5, 6, 4, 'siva', 56, '2016-03-24', '2016-03-29 07:29:53', '03:00:00', '07:30:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `username`, `password`, `firstname`, `lastname`, `phone_number`, `email`, `photo`, `description`, `gender`, `region`, `city`, `activation`, `created_date`, `status`, `classes`) VALUES
(21, 'admin', 'admin', 'admin', 'sastha', 'mano', 9786243201, 'vgfdbfvsdvd@gmail.com', '', '', 1, 'WS', '10', '0', '2016-04-25 00:14:38', 0, NULL),
(56, 'teacher', 'florence', 'Kip123', 'MS FLORENCE', 'LIM', 82321840, 'florence@kipmcgrath.com.sg', '', '', 0, 'CS', '11', '', '2016-02-25 06:20:49', 0, NULL),
(73, 'student', 'ram.s', '', 'ram', 's', 8975754764, 'ram05@gmail.com', 'uploads/', '', 1, 'WS', '8', '', '2016-03-22 15:33:57', 0, 7),
(91, 'student', 'verify2', '45', 'verify23', 'fsdfdsf', 87856757, 'gdfgdfg@gmail.com', '', '', 2, 'ES', '8', '', '2016-04-13 18:19:40', 0, 7),
(95, 'teacher', 'verify7', 'gtrgtrg', 'verify7', 'gegtrg', 976856756, 'htghfg@gmail.com', '', '', 0, 'NS', '9', '', '2016-02-25 18:19:51', 0, 0),
(111, 'teacher', 'teacher102', 'Kannan@5795', 'teacher102', 'dfsvd', 9578565567, 'sweetkannan05@gmail.com', 'uploads/IMG-20160219-WA0001.jpg', '', 2, 'NS', '6', '54de92f3a654cde9ecf701c480c54bc0', '2016-04-01 04:24:40', 0, 0),
(112, 'student', 'okolkkl', 'lll;lll;', 'k,l;', 'lo,l,', 9768765756, 'ghdfhfgh@gmail.com', '', '', 2, 'NS', '7', '', '2016-04-01 02:20:48', 0, 0),
(114, 'teacher', 'teacher105', 'ggdfdfgdffg', 'teacher105', 'gdfgdfgdf', 86775856, 'hgbdgdf@gmail.com', '', '', 0, 'NES', '7', '', '2016-02-25 18:21:30', 0, 0),
(120, 'student', 'student203', 'ss', 'student2033', 'fgdffdg', 895675674, 'gfdvgdg@gmail.com', '', 'tyjjhhhj', 0, 'NS', '5', '', '2016-03-18 08:07:00', 0, 6),
(121, 'teacher', 'test', 'Test@123', 'sample', 'sample', 7845784578, 'sample@sample.com', 'uploads/andy.jpg', '', 2, 'NES', '8', 'a7e343ce27a750a671f4f1597d305566', '2016-02-25 18:22:25', 0, 0),
(122, 'teacher', 'test100', 'sss', 'test100', 'dfsdf', 978567654, 'gdfgffg@gmail.com', '', '', 0, 'NS', '6', '', '2016-03-19 07:03:45', 0, 0),
(124, 'teacher', 'test101', 'gdgdkv', 'test101', 'dufdsk', 958469456, 'gkgkvgjdkgk@gmail.com', '', '', 0, 'NES', '7', '', '2016-02-25 18:22:50', 0, 0),
(131, 'student', 'sample100', '65tyu8', 'sample100', 'fdgddgds', 9458694649, 'gdfgddf@gmail.com', '', '', 0, 'NES', '8', '', '2016-03-19 06:19:17', 0, 6),
(133, 'teacher', 'test30', 'siva@5795', 'test300', 'test', 8759435, 'hfhdfdfjh@gmail.com', '', 'gidfhgjkdfnd', 0, 'NS', '5', '', '2016-02-25 18:24:08', 0, 0),
(134, 'student', 'sam1', 'dfgdfg', 'sam1', 'bfgbhgvbh', 8575677, 'hfhvnbg@gmail.com', '', 'ewredfsf', 0, 'NS', '6', '', '2016-03-17 11:43:57', 0, 6),
(135, 'student', 'sivaramakannan', 'sivaramakannan', 'sivaramakannan', 'dfgdfg', 86967876, 'hhfghfghf@gmail.com', '', 'i am siva', 0, 'NS', '5', '', '2016-03-17 11:44:02', 0, 6),
(136, 'student', 'ashok1495', 'ashok1495', 'ashok', 'raj', 952269822, 'ashokraj1495@gmail.com', '', 'i am ashok...', 0, 'CS', '12', '', '2016-03-17 11:44:07', 0, 6),
(138, 'student', 'siva_ashok', 'vsvsdvcds34r', 'siva', 'ashok', 8775644654, 'ghghfghgf@gmail.com', 'uploads/client_1.png', '', 0, '', '7', '', '2016-03-17 11:44:14', 0, 6),
(139, 'student', 'ashok_user', 'bdgdfg867y6', 'ashok', 'siva', 9689468549, 'jhfjek@gmail.com', 'uploads/', 'juytjhnh', 1, 'NS', '8', '', '2016-03-17 11:44:26', 0, 6),
(140, 'student', 'siva1000', 'siva1000', 'siva1000', 'siva1000', 9678678568, 'gbgff@gmail.com', 'uploads/banner_bg.png', ' ikhkjhkmhjkm', 0, 'ES', '10', '', '2016-03-17 11:44:29', 0, 6),
(141, 'student', 'gfdgfg', 'ghgfh', 'hgfhgfh', 'hgfhgf', 87567567, 'hgffgfnf@gmail.com', 'uploads/client_6.png', 'kjh', 0, 'NES', '7', '', '2016-03-17 11:45:02', 0, 7),
(142, 'student', 'hgfgf', 'jhgfjghfbj', 'tyuuytuhjg', 'hjgf', 78578757, 'gjghjghbvn@gmail.com', 'uploads/gslogo.png', 'jghmnbn female', 0, 'NS', '6', '', '2016-03-17 11:44:57', 0, 7),
(143, 'student', '', 'jhghjgjghfjgh', 'kgjk', '', 96786787857, 'jmhmghj@gmail.com', 'uploads/about_us_icon.png', '', 1, 'ES', '', '', '2016-03-17 11:44:55', 0, 7),
(144, 'student', '', 'kjhgmjhn6y7uyt', 'female', '', 7686875686, 'jghnghjgh@gmail.com', 'uploads/gslogo.png', '', 2, 'ES', '', '', '2016-03-17 11:44:52', 0, 7),
(147, 'student', 'teststudent1', 'teststudent1', 'teststudent1', 'teststudent1', 98765432101, 'spmuthu211@gmail.com', '', 'adsfas', 1, 'NES', '7', '', '2016-03-17 11:44:47', 0, 7),
(150, 'student', 'self', 'self', 'self', 'self', 789465, 'self@self.com', '', 'fdasdfa', 1, 'NS', '5', '', '2016-03-17 10:18:02', 0, 0),
(151, 'student', '', '', '', '', 0, '', '', '', 2, 'Select Region', 'Select branch', '', '2016-03-31 03:47:50', 0, 0),
(162, 'student', '', '', 'First Name', '', 0, 'ygj@gmail', '', '', 1, 'Select Region', 'Select branch', '', '2016-03-31 04:12:18', 0, 0),
(166, 'student', 'User Name', 'PassWord', 'First Name', 'Last Name', 0, 'Email Address', '', '', 2, 'Select Region', 'Select branch', '', '2016-03-31 22:17:49', 0, 0),
(167, 'student', 'kmsdfsd', 'fgdsdsfsdf', 'jdkfsmdf', 'nfmksldmfcls', 87878998, 'fsdfsdfsf@gmai.com', '', '', 2, 'NS', '5', '', '2016-04-01 00:20:51', 0, 7),
(168, 'student', 'kkk', '56576gn', 'kkkk', 'kkkkk', 7687878787, 'sweetkannan@jkmdlada.com', '', '', 1, 'NES', '8', '', '2016-04-01 03:31:48', 0, 6),
(169, 'student', 'pandiarajan', 'jaga', 'pandi', 'kannan', 8754119337, 'kl@gmail.com', '', '', 1, 'CS', '12', '', '2016-04-27 14:58:33', 0, 8);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='User Preference Table for teacher class and subject' AUTO_INCREMENT=77 ;

--
-- Dumping data for table `user_preference`
--

INSERT INTO `user_preference` (`user_preferenceId`, `usersId`, `user_classId`, `user_subjectId`) VALUES
(22, 38, 6, 4),
(52, 106, 7, 7),
(53, 107, 6, 4),
(54, 110, 6, 4),
(55, 111, 6, 4),
(56, 111, 6, 5),
(57, 113, 6, 5),
(58, 113, 7, 6),
(59, 114, 6, 5),
(60, 121, 6, 4),
(61, 121, 6, 5),
(62, 121, 7, 6),
(63, 121, 7, 7),
(64, 0, 6, 4),
(65, 0, 6, 4),
(66, 129, 6, 4),
(67, 129, 6, 5),
(68, 130, 6, 4),
(69, 130, 6, 5),
(70, 130, 7, 6),
(71, 133, 6, 4),
(72, 133, 6, 5),
(73, 148, 6, 4),
(74, 148, 6, 5),
(75, 149, 6, 4),
(76, 149, 6, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
