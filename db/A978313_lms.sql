-- phpMyAdmin SQL Dump
-- version 4.0.10.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2016 at 11:46 PM
-- Server version: 5.1.68-community-log
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `A978313_lms`
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
  `phone_number` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `latitude` decimal(11,8) NOT NULL,
  `branch_owner` varchar(50) NOT NULL,
  `branch_description` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `region`, `branch_name`, `branch_address`, `phone_number`, `email`, `longitude`, `latitude`, `branch_owner`, `branch_description`, `status`, `created_date`) VALUES
(5, 'NS', 'Marsiling', '																										Blk 326 Woodlands St 32 #01-121 (Level 2), Singapore,  730326																										', 6368, 'kipmcgrathmarsiling@gmail.com', '11.23220000', '12.67678600', 'Goh Wei Lan', '<p>test fthrftyrtfytrf</p>\r\n', 1, '2016-01-02 21:29:07'),
(6, 'NS', 'Sembawang', 'BLK 791, Woodlands Avenue 6 #01-603, Singapore,  730791', 6363, 'kipmcgrathsembawang@gmail.com', '11.23232000', '12.23232000', 'Sangeetha Chandra', '', 1, '2016-01-02 21:30:34'),
(7, 'NES', 'Hougang-Green-Mall', '21 Hougang Street 51 #02-19, Singapore,  938719', 6385, 'kmwechg@gmail.com', '11.23220000', '12.23232000', 'Liew Kok Wai', '<p style="text-align:start">Our centre is Kip McGrath &ndash; Hougang Green Mall. Mr. Liew Kok Wai&nbsp;is the Owner of the centre. Feel free to call us at 6385 7996 if we can be of service to you.</p>\r\n\r\n<p style="text-align:start">Kip McGrath tuition is', 1, '2016-01-02 21:32:52'),
(8, 'NES', 'Kovan', 'Block 203 Hougang Street 21 #03-71, Singapore,  530203', 6280, 'alicia.km.kovan@gmail.com', '11.23220000', '12.23232000', 'Alicia Seah', '<p style="text-align:start">We offer tuition for Primary and Secondary school children for the following:</p>\r\n\r\n<p style="text-align:start">Pri 1 &ndash; 6: English and Math</p>\r\n\r\n<p style="text-align:start"><span style="color:rgb(5, 17, 38); font-famil', 1, '2016-01-02 21:34:08'),
(9, 'NS', 'Sengkang', 'We offer tuition for Primary and Secondary school children for the following:\r\n\r\nPri 1 – 6: English and Math\r\n\r\n Pri 3 – 6: Science\r\n\r\nSec 1 – 4: English, E. Math (and A. Math)\r\nFeel free to contact u', 6886, 'kipmcgrathsk@singnet.com.sg', '11.23220000', '12.23232000', 'Gloria Tan', '<p style="text-align:start">Our centre is Kip McGrath &ndash; Sengkang. Ms. Gloria Tan is the Owner of the centre. Feel free to call us at 6886 0880 if we can be of service to you.</p>\r\n\r\n<p style="text-align:start">Kip McGrath tuition is very unique and ', 1, '2016-01-02 21:35:32'),
(10, 'ES', 'dsgsdf', 'sdfgsdf', 2147483647, 'gsdfg@gmaill.com', '0.00000000', '0.00000000', 'sdfgsdf', '<p>sdfgsdf sdfgdsfgsdf</p>\r\n', 1, '2016-02-02 11:42:27'),
(11, 'NS', 'vdbcvbf', 'sdfdsfgvc', 2147483647, 'sdfgdsfg@gm.com', '0.00000000', '0.00000000', 'sdfgdsfgvc', '<p>sdfgdsfg dfsgdsfg dsfgdsfgsdfg dfgsdfg</p>\r\n', 1, '2016-02-02 11:43:16'),
(12, 'CS', 'Jurong East ( Yuhua )', '													bnmbnm													', 784578745, 'bnmbn@gmail.com', '0.00000000', '0.00000000', 'bnmbnm', '<p>sdfgsdf dsfgdsf ds sdfgsd</p>\r\n', 1, '2016-02-04 13:35:25'),
(13, 'WS', 'cnjkik', 'cvvbvb', 2147483647, 'cvbnvb@gds.com', '0.00000000', '0.00000000', 'cxvcxbc', '<p>fdghfdg fghfghfd</p>\r\n', 1, '2016-02-02 11:47:39');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `created_date`, `class_status`) VALUES
(6, 'Primary', '2016-01-02 20:28:33', ''),
(7, 'Secondary', '2016-01-02 20:28:33', ''),
(8, 'Post-Secondary', '2016-01-02 20:28:33', '');

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
  `created_date` datetime NOT NULL,
  `class_starttime` time NOT NULL,
  `class_endtime` time NOT NULL,
  `present_status` tinyint(2) NOT NULL,
  PRIMARY KEY (`class_attend_students_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

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
(43, 12, 6, 5, 65);

-- --------------------------------------------------------

--
-- Table structure for table `student_teacher_allocation`
--

CREATE TABLE IF NOT EXISTS `student_teacher_allocation` (
  `student_teacher_allocation_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `days` varchar(100) NOT NULL,
  PRIMARY KEY (`student_teacher_allocation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `student_teacher_allocation`
--

INSERT INTO `student_teacher_allocation` (`student_teacher_allocation_id`, `student_id`, `teacher_id`, `branch_id`, `class_id`, `subject_id`, `start_date`, `created_date`, `status`, `start_time`, `end_time`, `days`) VALUES
(11, 40, 38, 7, 6, 5, '2016-02-02', '2016-02-01 13:24:29', 1, '20:00:00', '20:00:00', 'sun,mon,'),
(12, 41, 38, 7, 6, 5, '2016-02-02', '2016-02-01 13:24:30', 1, '20:00:00', '20:00:00', 'sun,mon,'),
(13, 42, 38, 7, 6, 5, '2016-02-02', '2016-02-01 13:24:30', 1, '20:00:00', '20:00:00', 'sun,mon,'),
(14, 44, 55, 6, 6, 5, '0000-00-00', '2016-02-02 13:19:08', 1, '18:00:00', '20:00:00', 'sun,mon,tue,'),
(15, 52, 55, 6, 6, 5, '0000-00-00', '2016-02-02 13:19:08', 1, '18:00:00', '20:00:00', 'sun,mon,tue,'),
(16, 60, 57, 12, 6, 5, '2016-02-01', '2016-02-04 13:46:35', 1, '16:00:00', '18:00:00', 'mon,'),
(17, 60, 66, 12, 6, 5, '2016-02-10', '2016-02-10 12:06:29', 1, '16:00:00', '18:00:00', 'mon,wed,sat,'),
(18, 65, 66, 12, 6, 5, '2016-02-10', '2016-02-10 12:06:29', 1, '16:00:00', '18:00:00', 'mon,wed,sat,');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `class_id`, `subject_title`, `short_description`, `long_description`, `subject_code`, `acedemic_year`, `allowed_student`, `status`, `created_date`) VALUES
(4, 6, 'Maths', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(0, 84, 159); font-family:arial,helvetica,sans-serif; font-size:16px">The maths tuition program is designed for students who are having difficulty with maths, in any grade. A free initial consu', 'MATHS-PRI', '2015', 20, 1, '2016-01-02 21:38:41'),
(5, 6, 'English', '', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(0, 84, 159); font-family:arial,helvetica,sans-serif; font-size:16px">The English tutoring program is designed for students who need help with reading, comprehension, grammar, writing and spell', 'ENGLISH-PRI', '2015', 20, 1, '2016-01-02 21:39:40'),
(6, 7, 'Maths', '', '<p>test</p>\r\n', 'Maths-SEC', '2015', 20, 1, '2016-01-12 12:40:58'),
(7, 7, 'English', '', '<p>test</p>\r\n', 'English-SEC', '2015', 20, 1, '2016-01-12 12:41:50');

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
  `created_date` datetime NOT NULL,
  `class_starttime` time NOT NULL,
  `class_endtime` time NOT NULL,
  PRIMARY KEY (`temp_stu_attend_class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
  `classes` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `username`, `password`, `firstname`, `lastname`, `phone_number`, `email`, `photo`, `description`, `gender`, `region`, `city`, `activation`, `created_date`, `status`, `classes`) VALUES
(21, 'admin', 'admin', 'admin', 'sastha', 'mano', 9786243201, 'sastha@gmail.com', '', '', 0, '', '', '0', '2016-01-02 20:39:13', 0, NULL),
(39, 'student', '', 'Kalai@123', 'kalai', '', 7845784578, 'kalai@gmail.com', 'uploads/', '', 1, 'NS', '', '', '2016-01-12 12:15:34', 0, 'SEC'),
(40, 'student', '', 'Muthu@123', 'muthus', '', 7845784578, 'muthu@gmail.com', 'uploads/sample1.jpg', '', 1, 'NES', '', '', '2016-01-13 14:37:39', 0, 'PR'),
(56, 'teacher', 'florence', 'Kip123', 'MS FLORENCE', 'LIM', 82321840, 'florence@kipmcgrath.com.sg', '', '', 0, 'CS', '', '', '2016-02-04 13:29:18', 0, NULL),
(57, 'teacher', 'florence', 'Kip123..', 'MS FLORENCE', 'LIM', 82321860, 'prabhu.united@gmail.com', 'uploads/chinese.jpg', '', 2, 'CS', '12', 'e7731fa234ac5e16223a966d9964feb6', '2016-02-04 13:33:48', 1, NULL),
(60, 'student', '', 'Kip123..', 'JOSHUA KONG', '', 82321860, 'allaytech@gmail.com', 'uploads/chinese.jpg', '', 1, 'CS', '', '', '2016-02-04 13:44:26', 0, 'PR'),
(65, 'student', '', 'Nithya1982', 'raja', '', 90676940, 'prabhureddi@outlook.com', 'uploads/Tencent_QQ.png', '', 1, 'CS', '', '', '2016-02-10 11:30:57', 0, 'PR'),
(66, 'teacher', 'gowri', 'Nithya@1982', 'gowri', 'prabu', 90676940, 'reddy@advertige.com', 'uploads/Tencent_QQ.png', '', 2, 'CS', '12', '38b61525e5e4c76a684da59593c023fd', '2016-02-10 11:42:32', 1, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='User Preference Table for teacher class and subject' AUTO_INCREMENT=35 ;

--
-- Dumping data for table `user_preference`
--

INSERT INTO `user_preference` (`user_preferenceId`, `usersId`, `user_classId`, `user_subjectId`) VALUES
(22, 38, 6, 4),
(23, 38, 6, 5),
(24, 47, 6, 4),
(25, 47, 7, 7),
(26, 48, 6, 5),
(27, 48, 7, 6),
(28, 50, 6, 4),
(29, 50, 6, 5),
(30, 50, 7, 6),
(31, 55, 6, 5),
(32, 55, 7, 7),
(33, 57, 6, 5),
(34, 66, 6, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
