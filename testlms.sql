-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 06:45 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testlms`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(10) NOT NULL,
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
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `region`, `branch_name`, `branch_address`, `branch_phone_number`, `branch_email`, `longitude`, `latitude`, `branch_owner`, `branch_description`, `status`, `created_date`) VALUES
(5, 'NS', 'Marsiling', '																										Blk 326 Woodlands St 32 #01-121 (Level 2), Singapore,  730326																										', 6368, 'kipmcgrathmarsiling@gmail.com', '11.23220000', '12.67678600', 'Goh Wei Lan', '<p>test fthrftyrtfytrf</p>\r\n', 1, '2016-01-02 21:29:07'),
(6, 'NS', 'Sembawang', 'BLK 791, Woodlands Avenue 6 #01-603, Singapore,  730791', 6363, 'kipmcgrathsembawang@gmail.com', '11.23232000', '12.23232000', 'Sangeetha Chandra', '', 1, '2016-01-02 21:30:34'),
(7, 'NES', 'Hougang-Green-Mall', '21 Hougang Street 51 #02-19, Singapore,  938719', 6385, 'kmwechg@gmail.com', '11.23220000', '12.23232000', 'Liew Kok Wai', '<p style="text-align:start">Our centre is Kip McGrath &ndash; Hougang Green Mall. Mr. Liew Kok Wai&nbsp;is the Owner of the centre. Feel free to call us at 6385 7996 if we can be of service to you.</p>\r\n\r\n<p style="text-align:start">Kip McGrath tuition is', 1, '2016-01-02 21:32:52'),
(8, 'NES', 'Kovan', 'Block 203 Hougang Street 21 #03-71, Singapore,  530203', 6280, 'alicia.km.kovan@gmail.com', '11.23220000', '12.23232000', 'Alicia Seah', '<p style="text-align:start">We offer tuition for Primary and Secondary school children for the following:</p>\r\n\r\n<p style="text-align:start">Pri 1 &ndash; 6: English and Math</p>\r\n\r\n<p style="text-align:start"><span style="color:rgb(5, 17, 38); font-famil', 1, '2016-01-02 21:34:08'),
(9, 'NS', 'Sengkang', 'We offer tuition for Primary and Secondary school children for the following:\r\n\r\nPri 1 – 6: English and Math\r\n\r\n Pri 3 – 6: Science\r\n\r\nSec 1 – 4: English, E. Math (and A. Math)\r\nFeel free to contact u', 6886, 'kipmcgrathsk@singnet.com.sg', '11.23220000', '12.23232000', 'Gloria Tan', '<p style="text-align:start">Our centre is Kip McGrath &ndash; Sengkang. Ms. Gloria Tan is the Owner of the centre. Feel free to call us at 6886 0880 if we can be of service to you.</p>\r\n\r\n<p style="text-align:start">Kip McGrath tuition is very unique and ', 1, '2016-01-02 21:35:32'),
(10, 'ES', 'dsgsdf', 'sdfgsdf', 2147483647, 'gsdfg@gmaill.com', '0.00000000', '0.00000000', 'sdfgsdf', '<p>sdfgsdf sdfgdsfgsdf</p>\r\n', 1, '2016-02-02 11:42:27'),
(11, 'NS', 'vdbcvbf', 'sdfdsfgvc', 2147483647, 'sdfgdsfg@gm.com', '0.00000000', '0.00000000', 'sdfgdsfgvc', '<p>sdfgdsfg dfsgdsfg dsfgdsfgsdfg dfgsdfg</p>\r\n', 1, '2016-02-02 11:43:16'),
(12, 'CS', 'Jurong East ( Yuhua )', '													bnmbnm													', 784578745, 'bnmbn@gmail.com', '0.00000000', '0.00000000', 'bnmbnm', '<p>sdfgsdf dsfgdsf ds sdfgsd</p>\r\n', 1, '2016-02-04 13:35:25'),
(15, 'CS', '465345', 'sdgsdfsdfasdfasd', 897935646, '5sddasdfasdfsf@dgd.com', '999.99999999', '999.99999999', '3456546', '<p>dsfgsdfgsdf</p>\r\n', 1, '2016-03-14 11:18:51'),
(16, 'CS', 'asdf', 'asdfa', 43567567, 'asdfas@dfg.com', '999.99999999', '999.99999999', 'asdf', '<p>ertexcvb tgyhdhfgh</p>\r\n', 1, '2016-03-14 11:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `class_status` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `created_date`, `class_status`) VALUES
(6, 'Primary', '2016-03-14 11:21:02', ''),
(7, 'Secondary', '2016-01-02 20:28:33', ''),
(8, 'Post-Secondary', '2016-01-02 20:28:33', '');

-- --------------------------------------------------------

--
-- Table structure for table `class_attend_students`
--

CREATE TABLE `class_attend_students` (
  `class_attend_students_id` int(11) NOT NULL,
  `region` varchar(20) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_date` date NOT NULL,
  `created_date` datetime NOT NULL,
  `class_starttime` time NOT NULL,
  `class_endtime` time NOT NULL,
  `present_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_attend_students`
--

INSERT INTO `class_attend_students` (`class_attend_students_id`, `region`, `branch_id`, `class_id`, `subject_id`, `student_id`, `teacher_id`, `class_date`, `created_date`, `class_starttime`, `class_endtime`, `present_status`) VALUES
(1, '', 7, 6, 5, 40, 38, '2016-02-02', '2016-02-02 19:20:53', '20:00:00', '20:00:00', 0),
(2, '', 7, 6, 5, 41, 38, '2016-02-02', '2016-02-02 19:20:53', '20:00:00', '20:00:00', 0),
(3, '', 7, 6, 5, 42, 38, '2016-02-02', '2016-02-02 19:20:53', '20:00:00', '20:00:00', 0),
(4, '', 7, 6, 5, 40, 38, '2016-02-02', '2016-02-02 20:34:12', '20:00:00', '20:00:00', 0),
(5, '', 7, 6, 5, 41, 38, '2016-02-02', '2016-02-02 20:34:12', '20:00:00', '20:00:00', 0),
(6, '', 7, 6, 5, 42, 38, '2016-02-02', '2016-02-02 20:34:12', '20:00:00', '20:00:00', 0),
(7, '', 12, 6, 5, 60, 66, '2016-02-10', '0000-00-00 00:00:00', '16:00:00', '18:00:00', 0),
(8, '', 12, 6, 5, 65, 66, '2016-02-10', '0000-00-00 00:00:00', '16:00:00', '18:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `class_schedules`
--

CREATE TABLE `class_schedules` (
  `class_schedules_id` int(11) NOT NULL,
  `teacher_id` varchar(50) NOT NULL,
  `day` varchar(10) NOT NULL,
  `branch_id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `end_time` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='class_schedule php';

--
-- Dumping data for table `class_schedules`
--

INSERT INTO `class_schedules` (`class_schedules_id`, `teacher_id`, `day`, `branch_id`, `class_id`, `subject_id`, `start_time`, `end_time`, `status`, `created_date`) VALUES
(25, '121', 'sun', 5, 6, 4, '00:00', '00:00', 1, '2016-03-17 09:37:10'),
(26, '121', 'sun', 5, 6, 4, '00:00', '00:00', 1, '2016-03-17 09:37:10'),
(27, '121', 'mon', 5, 6, 4, '00:00', '00:00', 1, '2016-03-17 09:37:10'),
(28, '121', 'mon', 5, 6, 4, '00:00', '00:00', 1, '2016-03-17 09:37:10'),
(29, '121', 'tue', 5, 6, 4, '01:00', '00:30', 1, '2016-03-17 09:37:10'),
(30, '121', 'wed', 5, 6, 4, '00:00', '00:30', 1, '2016-03-17 09:37:10'),
(31, '121', 'thu', 5, 6, 4, '00:00', '00:00', 1, '2016-03-17 09:37:10'),
(32, '121', 'fri', 5, 6, 4, '00:30', '00:00', 1, '2016-03-17 09:37:10'),
(33, '121', 'sat', 5, 6, 4, '00:00', '00:00', 1, '2016-03-17 09:37:10'),
(34, '121', 'sun', 5, 6, 4, '00:00', '00:00', 1, '2016-03-17 09:39:28'),
(35, '121', 'sun', 5, 6, 4, '00:00', '00:00', 1, '2016-03-17 09:39:28'),
(36, '121', 'mon', 5, 6, 4, '00:00', '00:00', 1, '2016-03-17 09:39:28'),
(37, '121', 'mon', 5, 6, 4, '00:00', '00:00', 1, '2016-03-17 09:39:28'),
(38, '121', 'tue', 5, 6, 4, '01:00', '00:30', 1, '2016-03-17 09:39:28'),
(39, '121', 'wed', 5, 6, 4, '00:00', '00:30', 1, '2016-03-17 09:39:28'),
(40, '121', 'thu', 5, 6, 4, '00:00', '00:00', 1, '2016-03-17 09:39:28'),
(41, '121', 'fri', 5, 6, 4, '00:30', '00:00', 1, '2016-03-17 09:39:28'),
(42, '121', 'sat', 5, 6, 4, '00:00', '00:00', 1, '2016-03-17 09:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `student_class_subject_branch`
--

CREATE TABLE `student_class_subject_branch` (
  `student_class_subject_branch_id` int(11) NOT NULL,
  `teacher_class_subject_branch_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_requests`
--

CREATE TABLE `student_requests` (
  `student_request_id` int(11) NOT NULL,
  `branch_id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `student_teacher_allocation` (
  `student_teacher_allocation_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `schedule_id` int(10) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_teacher_allocation`
--

INSERT INTO `student_teacher_allocation` (`student_teacher_allocation_id`, `student_id`, `schedule_id`, `created_date`, `status`) VALUES
(53, 60, 25, '2016-03-17 12:40:27', 1),
(54, 120, 25, '2016-03-17 12:40:27', 1),
(55, 60, 27, '2016-03-17 12:44:10', 1),
(56, 120, 27, '2016-03-17 12:44:10', 1),
(57, 132, 27, '2016-03-17 12:44:10', 1),
(58, 135, 27, '2016-03-17 12:44:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(55) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_title` varchar(100) NOT NULL,
  `short_description` longtext NOT NULL,
  `long_description` varchar(255) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `acedemic_year` varchar(20) NOT NULL,
  `allowed_student` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `class_id`, `subject_title`, `short_description`, `long_description`, `subject_code`, `acedemic_year`, `allowed_student`, `status`, `created_date`) VALUES
(4, 6, 'Maths', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(0, 84, 159); font-family:arial,helvetica,sans-serif; font-size:16px">The maths tuition program is designed for students who are having difficulty with maths, in any grade. A free initial consu', 'MATHS-PRI', '2015', 20, 1, '2016-01-02 21:38:41'),
(5, 6, 'English', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(0, 84, 159); font-family:arial,helvetica,sans-serif; font-size:16px">The English tutoring program is designed for students who need help with reading, comprehension, grammar, writing and spell', 'ENGLISH-PRI', '2015', 20, 1, '2016-01-02 21:39:40'),
(6, 7, 'Maths', '', '<p>test</p>\r\n', 'Maths-SEC', '2015', 20, 1, '2016-01-12 12:40:58'),
(7, 7, 'English', '', '<p>test</p>\r\n', 'English-SEC', '2015', 20, 1, '2016-01-12 12:41:50'),
(8, 8, '123123', '<p>1231231</p>\r\n', '<p>123123</p>\r\n', '123123', '', 0, 0, '2016-03-18 05:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class_subject_branch`
--

CREATE TABLE `teacher_class_subject_branch` (
  `teacher_class_subject_branch_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `allowed_student` int(3) NOT NULL,
  `current_student_count` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_class_subject_branch`
--

INSERT INTO `teacher_class_subject_branch` (`teacher_class_subject_branch_id`, `branch_id`, `user_id`, `class_id`, `subject_id`, `start_date`, `end_date`, `short_desc`, `allowed_student`, `current_student_count`, `created_date`) VALUES
(10, 0, 38, 0, 4, '2016-01-23 21:00:00', '2016-01-13 21:00:00', '', 0, 0, '2016-01-13 11:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `temp_stu_attend_class`
--

CREATE TABLE `temp_stu_attend_class` (
  `temp_stu_attend_class_id` int(11) NOT NULL,
  `previous_branch_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `temp_stu_name` varchar(200) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_date` date NOT NULL,
  `created_date` datetime NOT NULL,
  `class_starttime` time NOT NULL,
  `class_endtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_stu_attend_class`
--

INSERT INTO `temp_stu_attend_class` (`temp_stu_attend_class_id`, `previous_branch_id`, `branch_id`, `class_id`, `subject_id`, `temp_stu_name`, `teacher_id`, `class_date`, `created_date`, `class_starttime`, `class_endtime`) VALUES
(1, 0, 7, 6, 5, 'dsgdsfg', 38, '2016-01-13', '2016-01-28 21:27:37', '00:00:00', '00:00:00'),
(2, 0, 7, 6, 5, 'dsfgdsfg', 38, '2016-01-13', '2016-01-28 21:27:37', '00:00:00', '00:00:00'),
(3, 0, 7, 6, 5, 'dfgdsfg4retert', 38, '2016-01-13', '2016-01-28 21:27:37', '00:00:00', '00:00:00'),
(4, 0, 12, 6, 5, 'Priya', 66, '2016-02-10', '0000-00-00 00:00:00', '16:00:00', '18:00:00'),
(5, 7, 12, 6, 5, 'Sam', 66, '2016-02-10', '0000-00-00 00:00:00', '16:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
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
  `classes` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `username`, `password`, `firstname`, `lastname`, `phone_number`, `email`, `photo`, `description`, `gender`, `region`, `city`, `activation`, `created_date`, `status`, `classes`) VALUES
(21, 'admin', 'admin', 'admin', 'sastha', 'mano', 9786243201, 'sastha@gmail.com', '', '', 1, 'WS', '10', '0', '2016-03-14 06:28:01', 0, NULL),
(40, 'student', 'muthu', 'muthu', 'muthus', 'gfdgdf', 7845784578, 'muthu@gmail.com', 'uploads/sample1.jpg', 'regvfdgrf', 2, 'NS', '7', '', '2016-03-17 11:42:46', 0, 6),
(56, 'teacher', 'florence', 'Kip123', 'MS FLORENCE', 'LIM', 82321840, 'florence@kipmcgrath.com.sg', '', '', 0, 'CS', '11', '', '2016-02-25 06:20:49', 0, NULL),
(60, 'student', '123', '123', 'JOSHUA KONG', 'egetge', 82321860, 'allaytech@gmail.com', 'uploads/chinese.jpg', '', 1, 'CS', '5', '', '2016-03-17 12:45:56', 0, 6),
(65, 'student', 'hgfhgf', 'Nithya1982', 'raja', 'ghbgfh', 90676940, 'prabhureddi@outlook.com', 'uploads/Tencent_QQ.png', '', 2, 'NS', 'Select branch', '', '2016-03-17 11:42:55', 0, 6),
(67, 'student', '', 'siva5795', 'kannan s', '', 8754063617, 'sweetkannan05@gmail.com', 'uploads/tim.PNG', '', 1, 'NS', '5', '', '2016-03-17 11:43:01', 0, 7),
(68, 'student', '', 'kannan5795', 'siva g.s', '', 8754063617, 'sfdsedfr@gmail.com', 'uploads/tim.PNG', '', 1, 'NS', '5', '', '2016-03-17 11:43:08', 0, 7),
(73, 'student', 'ram.s', '', 'ram', 's', 8975754764, 'ram05@gmail.com', 'uploads/', '', 1, 'WS', '5', '', '2016-03-17 11:43:12', 0, 7),
(91, 'student', 'verify2', '', 'verify23', 'fsdfdsf', 87856757, 'gdfgdfg@gmail.com', '', '', 2, 'ES', '5', '', '2016-03-17 11:43:16', 0, 7),
(95, 'teacher', 'verify7', 'gtrgtrg', 'verify7', 'gegtrg', 976856756, 'htghfg@gmail.com', '', '', 0, 'NS', '9', '', '2016-02-25 18:19:51', 0, 0),
(108, 'student', 'student100', 'fdfgfdfd', 'student100', 'ghdfdf', 967876876, 'tjghjjgbfg@gmail.com', '', '', 0, 'NS', '9', '', '2016-03-17 11:43:20', 0, 7),
(109, 'student', 'student101', '', 'student1011', 'gdfegdfg', 7587585, 'dfvbvcb@gmail.com', '', 'hi ...i am kannan', 1, 'NES', '6', '', '2016-03-17 11:43:25', 0, 7),
(110, 'teacher', 'teacher101', 'fegdfg', 'teacher101', 'gfdgdf', 9756856754, 'ytrhfvgjhg@gmail.com', '', '', 0, 'NES', '7', '', '2016-02-25 18:20:56', 0, 0),
(111, 'teacher', 'teacher102', 'Kannan@5795', 'teacher102', 'dfsvd', 9578565567, 'dfgfdgfg@gmail.com', 'uploads/IMG-20160219-WA0001.jpg', '', 2, 'NS', '6', '54de92f3a654cde9ecf701c480c54bc0', '2016-02-25 18:21:06', 0, 0),
(112, 'student', 'gdfgdfgdf', 'fdgdfgdf', 'fgdfgdf', 'fdsgdfgdf', 9768765756, 'ghdfhfgh@gmail.com', '', '', 0, 'Select Region', '7', '', '2016-03-17 11:43:29', 0, 6),
(113, 'teacher', 'hgfhfg', 'hgfhfghfghfgA@3re', 'bfgfd', 'gdfgfdg', 98697686, 'dfgdfgdf@gmail.com', 'uploads/IMG-20160219-WA0001.jpg', '', 2, 'ES', '10', '2f117978e78db6f11437818f4a033238', '2016-02-25 18:21:24', 0, 0),
(114, 'teacher', 'teacher105', 'ggdfdfgdffg', 'teacher105', 'gdfgdfgdf', 86775856, 'hgbdgdf@gmail.com', '', '', 0, 'NES', '7', '', '2016-02-25 18:21:30', 0, 0),
(115, 'student', '', '', '', '', 0, 'hfghfhfhf@gmail.com', 'uploads/', '', 0, 'NES', '7', 'dba905cae8dba40d48d2ab80db526e82', '2016-03-17 11:43:36', 0, 6),
(118, 'teacher', 'jghjghjghj', 'jgjgjghj@432Q', 'jghjgh', 'jghjgh', 979878556, 'mghjgh@gmail.com', 'uploads/IMG-20160219-WA0001.jpg', '', 1, 'NS', '5', '4617a435b76d4745549453a16d885b37', '2016-02-25 18:22:00', 0, 0),
(119, 'student', 'student201', '', 'student200', 'gfsgdfg', 976585676, 'jfnhfhfg@gmail.com', '', 'i am siva', 1, 'NES', '12', '', '2016-03-17 11:43:40', 0, 6),
(120, 'student', 'student203', '', 'student2033', 'fgdffdg', 895675674, 'gfdvgdg@gmail.com', '', 'tyjjhhhj', 0, 'NS', '5', '', '2016-03-17 11:43:43', 0, 6),
(121, 'teacher', 'test', 'Test@123', 'sample', 'sample', 7845784578, 'sample@sample.com', 'uploads/andy.jpg', '', 2, 'NES', '8', 'a7e343ce27a750a671f4f1597d305566', '2016-02-25 18:22:25', 0, 0),
(122, 'teacher', 'test100', 'gfsdgsfdg', 'test100', 'dfsdf', 978567654, 'gdfgffg@gmail.com', '', '', 0, 'NS', '6', '', '2016-02-25 18:22:36', 0, 0),
(124, 'teacher', 'test101', 'gdgdkv', 'test101', 'dufdsk', 958469456, 'gkgkvgjdkgk@gmail.com', '', '', 0, 'NES', '7', '', '2016-02-25 18:22:50', 0, 0),
(126, 'student', 'hfghfg', 'hfghfg', 'jfhfghfg', 'hfghfg', 976976876, 'jjghgjh@gmail.com', '', '', 0, 'NES', '7', '', '2016-03-17 11:43:47', 0, 6),
(127, 'teacher', 'hrghf', 'hfghfghfgh', 'hrhrhrg', 'hrhrg', 765765756, 'hfghfgfg@gmail.com', '', '', 0, 'NES', '7', '', '2016-02-25 18:23:36', 0, 0),
(129, 'teacher', 'uwfhjdsvdsj', '99547359584', 'test103', 'usfhsjdns', 8938593485, 'fghfhfg@gmail.com', '', '', 0, 'NES', '7', '', '2016-02-25 18:23:46', 0, 0),
(130, 'teacher', 'dgdfgdfdfg', 'dfgdfgdfA@453d', 'test105', 'bbgbfgbfg', 9578575544, 'jghnng@gmail.com', 'uploads/banner_bg2.png', '', 2, 'NES', '8', 'c873fc0f1b7b17899d7916eef8a047d7', '2016-02-25 18:23:57', 0, 0),
(131, 'student', 'sample100', 'dbgdfgvfd', 'sample100', 'fdgddgds', 9458694649, 'gdfgddf@gmail.com', '', '', 0, 'NES', '8', '', '2016-03-17 11:43:50', 0, 6),
(132, 'student', 'jghjgh', '9768uyjhg', 'jghjg', 'gyhjgh', 976876, 'yfhfghg@gmai.com', '', '', 0, 'NS', '5', '', '2016-03-17 11:43:54', 0, 6),
(133, 'teacher', 'test30', 'siva@5795', 'test300', 'test', 8759435, 'hfhdfdfjh@gmail.com', '', 'gidfhgjkdfnd', 0, 'NS', '5', '', '2016-02-25 18:24:08', 0, 0),
(134, 'student', 'sam1', 'dfgdfg', 'sam1', 'bfgbhgvbh', 8575677, 'hfhvnbg@gmail.com', '', 'ewredfsf', 0, 'NS', '6', '', '2016-03-17 11:43:57', 0, 6),
(135, 'student', 'sivaramakannan', 'sivaramakannan', 'sivaramakannan', 'dfgdfg', 86967876, 'hhfghfghf@gmail.com', '', 'i am siva', 0, 'NS', '5', '', '2016-03-17 11:44:02', 0, 6),
(136, 'student', 'ashok1495', 'ashok1495', 'ashok', 'raj', 952269822, 'ashokraj1495@gmail.com', '', 'i am ashok...', 0, 'CS', '12', '', '2016-03-17 11:44:07', 0, 6),
(137, 'student', 'jghjh', 'jghjhg', 'yjhg', 'jhgjgh', 7896786, 'hjkhhj@gmail.com', '', '', 0, '', '7', '', '2016-03-17 11:44:10', 0, 6),
(138, 'student', 'siva_ashok', 'vsvsdvcds34r', 'siva', 'ashok', 8775644654, 'ghghfghgf@gmail.com', 'uploads/client_1.png', '', 0, '', '7', '', '2016-03-17 11:44:14', 0, 6),
(139, 'student', 'ashok_user', 'bdgdfg867y6', 'ashok', 'siva', 9689468549, 'jhfjek@gmail.com', 'uploads/', 'juytjhnh', 1, 'NS', '8', '', '2016-03-17 11:44:26', 0, 6),
(140, 'student', 'siva1000', 'siva1000', 'siva1000', 'siva1000', 9678678568, 'gbgff@gmail.com', 'uploads/banner_bg.png', ' ikhkjhkmhjkm', 0, 'ES', '10', '', '2016-03-17 11:44:29', 0, 6),
(141, 'student', 'gfdgfg', 'ghgfh', 'hgfhgfh', 'hgfhgf', 87567567, 'hgffgfnf@gmail.com', 'uploads/client_6.png', 'kjh', 0, 'NES', '7', '', '2016-03-17 11:45:02', 0, 7),
(142, 'student', 'hgfgf', 'jhgfjghfbj', 'tyuuytuhjg', 'hjgf', 78578757, 'gjghjghbvn@gmail.com', 'uploads/gslogo.png', 'jghmnbn female', 0, 'NS', '6', '', '2016-03-17 11:44:57', 0, 7),
(143, 'student', '', 'jhghjgjghfjgh', 'kgjk', '', 96786787857, 'jmhmghj@gmail.com', 'uploads/about_us_icon.png', '', 1, 'ES', '', '', '2016-03-17 11:44:55', 0, 7),
(144, 'student', '', 'kjhgmjhn6y7uyt', 'female', '', 7686875686, 'jghnghjgh@gmail.com', 'uploads/gslogo.png', '', 2, 'ES', '', '', '2016-03-17 11:44:52', 0, 7),
(147, 'student', 'teststudent1', 'teststudent1', 'teststudent1', 'teststudent1', 98765432101, 'spmuthu211@gmail.com', '', 'adsfas', 1, 'NES', '7', '', '2016-03-17 11:44:47', 0, 7),
(148, 'teacher', 'testteacher', 'testteacher', 'testteacher', 'testteacher', 9876543210, 'testteacher@gmail.com', '', 'sdasdf3e sdsa asd', 1, 'NS', '5', '', '2016-03-15 07:16:56', 0, NULL),
(149, 'teacher', 'asdfas', 'asdfasdf', 'sdfasd', 'asdfasd', 9876546797, 'spmuthu21@gmail.com', '', 'asdfas', 2, 'NS', '5', '', '2016-03-15 07:26:06', 0, NULL),
(150, 'student', 'self', 'self', 'self', 'self', 789465, 'self@self.com', '', 'fdasdfa', 1, 'NS', '5', '', '2016-03-17 10:18:02', 0, 0),
(152, 'student', 'wertw', 'etwert', 'rewtwer', 'ewrtwer', 7867456, 'wertwe@dfgd.com', '', 'asdfasdf', 1, 'NS', '5', '', '2016-03-17 10:59:20', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_preference`
--

CREATE TABLE `user_preference` (
  `user_preferenceId` int(55) NOT NULL,
  `usersId` int(55) NOT NULL,
  `user_classId` int(55) NOT NULL,
  `user_subjectId` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='User Preference Table for teacher class and subject';

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `class_attend_students`
--
ALTER TABLE `class_attend_students`
  ADD PRIMARY KEY (`class_attend_students_id`);

--
-- Indexes for table `class_schedules`
--
ALTER TABLE `class_schedules`
  ADD PRIMARY KEY (`class_schedules_id`);

--
-- Indexes for table `student_class_subject_branch`
--
ALTER TABLE `student_class_subject_branch`
  ADD PRIMARY KEY (`student_class_subject_branch_id`);

--
-- Indexes for table `student_requests`
--
ALTER TABLE `student_requests`
  ADD PRIMARY KEY (`student_request_id`);

--
-- Indexes for table `student_teacher_allocation`
--
ALTER TABLE `student_teacher_allocation`
  ADD PRIMARY KEY (`student_teacher_allocation_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `fk_class_id` (`class_id`);

--
-- Indexes for table `teacher_class_subject_branch`
--
ALTER TABLE `teacher_class_subject_branch`
  ADD PRIMARY KEY (`teacher_class_subject_branch_id`);

--
-- Indexes for table `temp_stu_attend_class`
--
ALTER TABLE `temp_stu_attend_class`
  ADD PRIMARY KEY (`temp_stu_attend_class_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_preference`
--
ALTER TABLE `user_preference`
  ADD PRIMARY KEY (`user_preferenceId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `class_attend_students`
--
ALTER TABLE `class_attend_students`
  MODIFY `class_attend_students_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `class_schedules`
--
ALTER TABLE `class_schedules`
  MODIFY `class_schedules_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `student_class_subject_branch`
--
ALTER TABLE `student_class_subject_branch`
  MODIFY `student_class_subject_branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `student_requests`
--
ALTER TABLE `student_requests`
  MODIFY `student_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `student_teacher_allocation`
--
ALTER TABLE `student_teacher_allocation`
  MODIFY `student_teacher_allocation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `teacher_class_subject_branch`
--
ALTER TABLE `teacher_class_subject_branch`
  MODIFY `teacher_class_subject_branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `temp_stu_attend_class`
--
ALTER TABLE `temp_stu_attend_class`
  MODIFY `temp_stu_attend_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `user_preference`
--
ALTER TABLE `user_preference`
  MODIFY `user_preferenceId` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
