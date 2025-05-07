-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2014 at 09:25 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sucss_last`
--
CREATE DATABASE IF NOT EXISTS `db_sucss_last` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_sucss_last`;

-- --------------------------------------------------------

--
-- Table structure for table `acadamic_year`
--

CREATE TABLE IF NOT EXISTS `acadamic_year` (
  `acadamic_year_id` int(11) NOT NULL AUTO_INCREMENT,
  `acadamic_year` varchar(50) NOT NULL,
  PRIMARY KEY (`acadamic_year_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `acadamic_year`
--

INSERT INTO `acadamic_year` (`acadamic_year_id`, `acadamic_year`) VALUES
(1, '2013/14 GC (2006EC)');

-- --------------------------------------------------------

--
-- Table structure for table `bulding`
--

CREATE TABLE IF NOT EXISTS `bulding` (
  `bulding_id` int(1) NOT NULL AUTO_INCREMENT,
  `bulding_name` varchar(30) NOT NULL,
  `no_of_room` int(11) NOT NULL,
  PRIMARY KEY (`bulding_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `bulding`
--

INSERT INTO `bulding` (`bulding_id`, `bulding_name`, `no_of_room`) VALUES
(1, 'Reg A', 12),
(3, 'Reg B', 10),
(8, 'Bulding 1', 20),
(5, 'Reg C', 9),
(9, 'Bulding 2', 20),
(10, 'Lh1 and Lh 2 (old) ', 2),
(11, 'Lh 3 & Lh 4 (New)', 2),
(12, 'Cs Lab ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `comments` text,
  `msg_id_fk` int(11) DEFAULT NULL,
  PRIMARY KEY (`com_id`),
  KEY `msg_id_fk` (`msg_id_fk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `comments`, `msg_id_fk`) VALUES
(1, 'Why?', 4),
(2, 'i heat this news!!!! :(', 4),
(3, 'I Think Mr. Mohammed Osmann was Better!!', 1),
(4, 'wow thts realy cool lol ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(30) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `course_category` varchar(100) NOT NULL,
  `year` varchar(30) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `lab_hours` varchar(50) NOT NULL,
  `lecture_hours` varchar(50) NOT NULL,
  `total_chr` varchar(40) NOT NULL,
  `mode_of_delivery` varchar(30) NOT NULL,
  `instractor` varchar(100) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`course_id`),
  UNIQUE KEY `course_code` (`course_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `department`, `course_code`, `course_title`, `course_category`, `year`, `semester`, `lab_hours`, `lecture_hours`, `total_chr`, `mode_of_delivery`, `instractor`, `note`) VALUES
(20, 'Computer scines', 'ddd3', 'dede', 'Major', '1st year', '1st', 'No Lab', '3 hrs', '3', 'Parallel', '', ''),
(17, 'Economics', 'bbb', 'bbb', 'Major', '2nd year', '1st', 'No Lab', '3 hrs', '3', 'Parallel', '', ''),
(79, 'Computer Science', 'CS201', 'Introduction to computer Scinece', 'Major', '1st year', '1st', '3 hrs', '3 hrs', '4', 'Block', 'Mr.Woldu W/Gebriel', 'this is edited course the instructor changed.'),
(2, 'Plant sciense', 'www', 'wwww', 'Major', '3rd year', '1st', 'No Lab', '3 hrs', '3', 'Parallel', '', ''),
(21, 'Computer scines', 'eee', 'eeeeee', 'Minor', '4th year', '1st', 'No Lab', '3 hrs', '3', 'Parallel', '', ''),
(22, 'Computer scines', 'cs 222', 'networking', 'Major', '2nd year', '2nd', '1 hrs', '3 hrs', '4', 'Parallel', '', ''),
(23, 'Computer scines', 'cs 223', 'programming 2', 'Major', '2nd year', '2nd', '2 hrs', '3 hrs', '4', 'Parallel', '', ''),
(24, 'Computer scines', 'cs 233', 'computer disign and archtecture', 'Major', '2nd year', '2nd', 'No Lab', '3 hrs', '3', 'Parallel', '', ''),
(25, 'Computer scines', 'cs244', 'information system', 'Major', '2nd year', '1st', 'No Lab', '3 hrs', '3', 'Parallel', '', ''),
(28, 'Computer Science', 'Phil201', 'Introduction to Logic', 'Minor', '1st year', '1st', 'No Lab', '3 hrs', '3', 'Block', '', ''),
(29, 'Computer Science', 'Stat270', 'Introduction to statistics', 'Minor', '1st year', '1st', 'No Lab', '3 hrs', '3', 'Block', '', ''),
(30, 'Computer Science', 'EnLa201', 'Communicative English', 'Minor', '1st year', '1st', 'No Lab', '3 hrs', '3', 'Block', '', ''),
(31, 'Computer Science', 'Math264', 'Calculus 1', 'Minor', '1st year', '1st', 'No Lab', '3 hrs', '3', 'Parallel', '', ''),
(32, 'Computer Science', 'Phy351', 'Fundamentals of electricity and Electronics', 'Minor', '1st year', '1st', 'No Lab', '3 hrs', '3', 'Parallel', '', ''),
(33, 'Computer Science', 'cs222', 'Programing 1', 'Major', '1st year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(34, 'Computer Science', 'EnLa202', 'Basic Writing skills', 'Minor', '1st year', '2nd', 'No Lab', '3 hrs', '', 'Block', '', ''),
(35, 'Computer Science', 'cs212', 'Information and society', 'Major', '1st year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(36, 'Computer Science', 'CvEt201', 'Civics and Ethical Education', 'Minor', '1st year', '2nd', 'No Lab', '3 hrs', '', 'Block', '', ''),
(37, 'Computer Science', 'Phy454', 'Digital Electronics and Logic Design', 'Minor', '1st year', '2nd', 'No Lab', '3 hrs', '', 'Block', '', ''),
(38, 'Computer Science', 'Math365', 'Calculus 11', 'Minor', '1st year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(39, 'Computer Science', 'SpSc212', 'General Fitness and Fundamental sport skill', 'Minor', '1st year', '1st', 'No Lab', '2 hrs', '', 'Block', '', ''),
(40, 'Computer Science', 'cs371', 'System Analysis and design', 'Major', '2nd year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(41, 'Computer Science', 'cs341', 'Computer Organization and Architecture', 'Major', '2nd year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(42, 'Computer Science', 'cs311', 'Fundamentals of Database system', 'Major', '2nd year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(43, 'Computer Science', 'cs321', 'Programing 11', 'Major', '2nd year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(44, 'Computer Science', 'Math321', 'Introduction to linear Algebra', 'Major', '2nd year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(45, 'Computer Science', 'SpSc221', 'General Fitness and Fundamental sport 11', 'Minor', '2nd year', '1st', 'No Lab', '3 hrs', '', 'Block', '', ''),
(46, 'Computer Science', 'cs332', 'Data structure and Algorithm', 'Major', '2nd year', '2nd', 'No Lab', '4 hrs', '', 'Parallel', '', ''),
(47, 'Computer Science', 'cs322', 'Object Oriented Programig', 'Major', '2nd year', '2nd', 'No Lab', '4 hrs', '', 'Parallel', '', ''),
(48, 'Computer Science', 'cs352', 'Introduction to Webpage Development', 'Major', '2nd year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(49, 'Computer Science', 'cs362', 'Data Communication and Network', 'Major', '2nd year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(50, 'Computer Science', 'Math335', 'Discreate mathematics and Combinarory', 'Minor', '2nd year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(51, 'Computer Science', 'cs441', 'Oprating System', 'Major', '3rd year', '1st', 'No Lab', '4 hrs', '', 'Parallel', '', ''),
(52, 'Computer Science', 'cs451', 'Rapid Application Development', 'Major', '3rd year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(53, 'Computer Science', 'cs411', 'Advanced Database Mgmt', 'Major', '3rd year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(54, 'Computer Science', 'cs421', 'Microprocessors and Assembly', 'Major', '3rd year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(55, 'Computer Science', 'Math339', 'Numeric Analysis', 'Major', '3rd year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(56, 'Computer Science', 'cs453', 'Internet Programing', 'Major', '3rd year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(57, 'Computer Science', 'cs432', 'Design and Analysis of Algorithm ', 'Major', '3rd year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(58, 'Computer Science', 'cs422', 'Advanced Programing with Java', 'Major', '3rd year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(59, 'Computer Science', 'cs424', 'Computer Graphics', 'Major', '3rd year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(60, 'Computer Science', 'cs462', 'Network System Administration', 'Major', '3rd year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(61, 'Computer Science', 'cs472', 'Software Engineering', 'Major', '3rd year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(62, 'Computer Science', 'EnLa303', 'Research Method and Report Writing', 'Minor', '3rd year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(63, 'Computer Science', 'cs553', 'Formal Language Theory', 'Major', '4th year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(64, 'Computer Science', 'cs551', 'Introduction to Artifitial Inteligence', 'Major', '4th year', '1st', 'No Lab', '4 hrs', '', 'Parallel', '', ''),
(65, 'Computer Science', 'cs521', 'System Programing', 'Major', '4th year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(66, 'Computer Science', 'cs513', 'Information Storage and Rtrieval', 'Major', '4th year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(67, 'Computer Science', 'cs565', 'Elective 1', 'Major', '4th year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(68, 'Computer Science', 'cs581', 'Final Year Project 1', 'Major', '4th year', '1st', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(69, 'Computer Science', 'cs542', 'Computer System Security', 'Major', '4th year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(70, 'Computer Science', 'cs552', 'Complexity Theory', 'Major', '4th year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(71, 'Computer Science', 'cs524', 'Priciples of Compiler Design', 'Major', '4th year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(72, 'Computer Science', 'MGMT422', 'Enterpreneurship and small Bussines Management', 'Minor', '4th year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(73, 'Computer Science', 'cs5xx', 'Elective 11', 'Major', '4th year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(74, 'Computer Science', 'cs582', 'Final Year Project 11', 'Major', '4th year', '2nd', 'No Lab', '3 hrs', '', 'Parallel', '', ''),
(77, 'Management', 'ddd12', 'ddd12', 'Major', '2nd year', '1st', 'No Lab', '3 hrs', '3', 'Parallel', '', ''),
(78, 'Mathematics', 'zzzz', 'fffff', 'Major', '6th year', '1st', 'No Lab', '3 hrs', '3', 'Parallel', '', ''),
(80, 'Information Technology', 'It202', 'Introduction to computer Scinece', 'Major', '2nd year', '1st', '1 hrs', '3 hrs', '3', 'Parallel', '', ''),
(81, 'Horticulture', '3232', '232', 'Major', '1st year', '1st', 'No Lab', '3 hrs', '232', 'Parallel', '', ''),
(84, 'Mathematics', 'aaaa', 'aaaaaa', 'Major', '1st year', '1st', 'No Lab', '3 hrs', '5', 'Parallel', 'Mr. Aregaw Abera', 'this course have to complte withen 8 weeks. '),
(89, 'Computer Science', 'asd', 'asd', 'Major', '1st year', '1st', 'No Lab', '3 hrs', '123', 'Parallel', '--Select--', 'asdas ');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculity_name` varchar(150) NOT NULL,
  `department_name` varchar(150) NOT NULL,
  `person_incharge` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`department_id`),
  UNIQUE KEY `department_name` (`department_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `faculity_name`, `department_name`, `person_incharge`, `address`) VALUES
(55, 'Faculty of Engineering and Technology(FET)', 'Chemical Engineering', 'Mr Wondosen Sime', 'Engineering building-R-201'),
(25, 'Faculty of Engineering and Technology(FET)', 'Computer Science', 'Mr.Tesfahun.G', 'Engineering building-R-006'),
(54, 'Faculty of Engineering and Technology(FET)', 'Civil Engineering', 'Mr Ahmed Mohammed', 'Engineering building-R-101'),
(53, 'Faculty of Engineering and Technology(FET)', 'Information Technology', 'Mr Timketab', 'Engineering building-R-108'),
(56, 'Faculty of Engineering and Technology(FET)', 'Electrical Engineering', 'Mr Kidus G/Hiwot', 'Engineering building-R-105'),
(57, 'Faculty of Engineering and Technology(FET)', 'Mechanical Engineering', 'Mr Addisu Haile', 'Engineering building-R-209'),
(58, 'Faculity of Bussiness and Economics(FBE)', 'Accounting', 'Mr Mused mohammed', 'Registrar Building R-62'),
(59, 'Faculity of Bussiness and Economics(FBE)', 'Economics', 'Mr Tekloy Negash', 'Registrar Building R-57'),
(60, 'Faculity of Dryland Agreculture(FDA)', 'Management', 'Mr G/Mikeal W/Gebreal', 'Registrar Building R-58'),
(61, 'Faculity of Bussiness and Economics(FBE)', 'Business and Administrative', 'Mr.', 'Block'),
(62, 'Faculity of Dryland Agreculture(FDA)', 'Animal Science', 'Mr Gebre Hawaria ', 'Natural science Block B-84'),
(63, 'Faculity of Dryland Agreculture(FDA)', 'Horticulture', 'Mr Abduselam Mohammed', 'Natural science Block B-83'),
(64, 'Faculity of Dryland Agreculture(FDA)', 'Natural Resource Management', 'Mr Tefera Jagura', 'Natural science Block B-85'),
(65, 'Faculity of Dryland Agreculture(FDA)', 'Plant Science', 'Mr Shimels Getu', 'Academic Vice presedant Block-B-36'),
(67, 'Faculity of Natural and Computational science(FNCS', 'Biology ', 'Mr Hussien Ahmed', 'Natural science Block B-305'),
(68, 'Faculity of Natural and Computational science(FNCS', 'Chemistry', 'Mr Tekle Kebede', 'Natural science Block B-306'),
(69, 'Faculity of Natural and Computational science(FNCS', 'Earth Science', 'Mr Jemal Ahmed', 'Natural science Block B-304'),
(70, 'Faculity of Natural and Computational science(FNCS', 'Mathematics', 'Mr Gosa Gadisa', 'Natural science Block B-303'),
(71, 'Faculity of Natural and Computational science(FNCS', 'Physics', 'Mr Shimels lenmu', 'Natural science Block B-310'),
(72, 'Faculity of Natural and Computational science(FNCS', 'Statistics', 'Mr Taye Abuhay', 'Natural science Block B-309'),
(73, 'Faculity of Natural and Computational science(FNCS', 'Sport Science', 'Mr Temesgen', 'Natural science Block B-307'),
(74, 'Faculity of Social Science and Humanity(FSSH)', 'Antropology', 'Mr Bizuayehu Hailu', 'Social science Block B-47'),
(75, 'Faculity of Social Science and Humanity(FSSH)', 'Ethiopian Language and Litrature(Amharic)', 'Mr Yetuyal Worku', 'Social science Block B-50'),
(76, 'Faculity of Social Science and Humanity(FSSH)', 'Forign Language and Literature (English)', 'Mr belayneh Adamu', 'Social science Block B-49'),
(77, 'Faculity of Social Science and Humanity(FSSH)', 'Professional Education', 'Mr.', 'block'),
(78, 'Faculity of Social Science and Humanity(FSSH)', 'Geography', 'Mr Amanuel Merone', 'Social science Block B-53'),
(79, 'Faculity of Social Science and Humanity(FSSH)', 'History', 'Mr Abreham Habtom', 'Social science Block B-54'),
(80, 'Faculity of Social Science and Humanity(FSSH)', 'Sociology', 'Mr kemal Ahmed', 'Social science Block-B-'),
(81, 'Faculity of Social Science and Humanity(FSSH)', 'Afaraf', 'Mr Esmael Mohammed', 'Social science Block B-52'),
(82, 'Faculity of Social Science and Humanity(FSSH)', 'Civic and Ethical Education', 'Mr Addisalem.B', 'Social science Block B-45'),
(83, 'Faculity of Social Science and Humanity(FSSH)', 'Law', 'Mr.', 'Block'),
(84, 'Health Science', 'Clinical nursing', 'Mr Neja', 'block'),
(85, 'Health Science', 'Midwifery', 'Mr.', 'Block'),
(86, 'Health Science', 'Public Health Officer', 'Mr Molla', 'Block'),
(87, 'Veternary Medicine', 'Veternay Medicine', 'Mr ', 'Block'),
(89, 'Faculty of Engineering and Technology(FET)', '232', '23232', 'ere'),
(91, 'Faculty of Engineering and Technology(FET)', 'dee', 'deee', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `faculity`
--

CREATE TABLE IF NOT EXISTS `faculity` (
  `faculity_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculity_name` varchar(100) NOT NULL,
  `person_incharge` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`faculity_id`),
  UNIQUE KEY `faculity_name` (`faculity_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `faculity`
--

INSERT INTO `faculity` (`faculity_id`, `faculity_name`, `person_incharge`, `address`) VALUES
(1, 'Faculty of Engineering and Technology(FET)  ', 'Mr Bezuyehu Bogale', 'Engineering building-R-205'),
(2, 'Faculity of Bussiness and Economics(FBE)', 'Mr Ali Hussen', 'Registrar Building R-59'),
(3, 'Faculity of Dryland Agreculture(FDA)', 'Mr Kebede Feyesa', 'Natural science Block B-82'),
(4, 'Faculity of Natural and Computational science(FNCS', 'Mr Adisu Kinfu', 'Natural science Block B-300'),
(5, 'Faculity of Social Science and Humanity(FSSH)', 'Mr Abdurehman Talema', 'Social science Block B-56'),
(6, 'Faculty of Health Science', 'Mr Chalachew', 'Academic Vice presedant Block'),
(7, 'Faculty of Veternary Medicine', 'Dr Fekre ', 'Academic Vice presedant Block');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `to` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email`, `comment`, `to`, `date`) VALUES
(1, 'mb', 'mb@mb.com', 'This is try try try!!!', '', '2014-06-21'),
(2, 'Hamid', 'hamidmebri@yahoo.com', 'I think it working', '', '2014-06-21'),
(3, 'Hamid Mebri', 'hamidmebri@yahoo.com', 'Congradulation feedback is working with validation!!!!', '', '2014-06-21'),
(4, 'zeynia Ibrahim', 'zanimebri@yahoo.com', 'Hello admin! i cant get my schedule, will u help me on that??? please send me on this email 10x for ur help!!', '', '2014-06-21'),
(5, 'Tesfahun (Dep Head)', 'tesfahun@mail.com', 'O! 10x admin I thouth that u will not see that message but u see it ha! any way I will wait ur response soon.', '', '2014-06-21'),
(6, 'Scheuler MB', 'schduler@mb', 'Hi Admin This is Scheduler MB and its working i recived your Notice and congratulation!!', '', '2014-06-21'),
(7, 'Scheuler MB', 'schduler@mb', 'This is Schedulere MB,\r\n10x admin Korahebegn ayedel ende nen!!!', '', '2014-06-21'),
(8, 'User MB', 'user@mb', 'Hi Admin This is User MB,\r\nI Summited the sleep for cs3rd years but that was the wrong one and I sent it again the second one is the edited sleep, with best Regarded @ User. ', '', '2014-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_scheduler`
--

CREATE TABLE IF NOT EXISTS `feedback_scheduler` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `to` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback_scheduler`
--

INSERT INTO `feedback_scheduler` (`feedback_id`, `name`, `email`, `comment`, `to`, `date`) VALUES
(1, 'Admin MB', 'admin@mb', 'Hi Scheduler this is Admin Mebri for trying the system!', '', '2014-06-21'),
(2, 'Admin MB', 'admin@mb', 'Hi Scheduler,\r\nCS 4A students says there is some problem on the schedule and when i caked it yeas there is!\r\nu prepare the schedule for the course cs5xx only two days but the credit hour is 3 so u have to add one class schedule for that course, with best Regard @ Admin!!', '', '2014-06-21'),
(3, 'Admin MB', 'admin@mb', 'This is Admin MB, how u doing scheduler?\r\nya i see the schedule now its corrected 10x for your fast response!!!', '', '2014-06-21'),
(4, 'User MB', 'user@mb', 'Hi Scheduler This Is user MB,\r\nMy students (SC 4A) sayd that the schedule for source cs5XX is not equivalent to the total creadit hours, u prepar 2 creadit hour for that but it have to be 3 chr, so will u change that? with Best Regard sc Dep Head Tesfahun!', '', '2014-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_user`
--

CREATE TABLE IF NOT EXISTS `feedback_user` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `to` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback_user`
--

INSERT INTO `feedback_user` (`feedback_id`, `name`, `email`, `comment`, `to`, `date`) VALUES
(1, 'Admin MB', 'admin@mb', 'hi user i see ur message and i promiss i will fix that as soom as possible and 10x for ur info Br', '', '2014-06-21'),
(2, 'Admin MB', 'admin@mb', 'Hi CS Dep Head, Ya I see the problem and i will work hard to find solution in short time!!!\r\nand 10x for ur information!', '', '2014-06-21'),
(3, 'Admin MB`', 'admin@mb', 'Hi User This is Admin MB,\r\nok i see that and i will change the old course with this one!!!', '', '2014-06-21'),
(4, 'Scheduler MB', 'scheduler@mb', 'Hi User This is Scheduler MB, For CS Dep Head, ya when i revised the schedule i find the problem so i will fix it soon, and 10x for ur Info!!!', '', '2014-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `user` varchar(20) NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=122 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `date`, `data`, `action`, `user`) VALUES
(1, '2014-06-20 12:20:10', 'Abdul hamid Nesru', 'Login', 'Admin'),
(2, '2014-06-20 12:20:49', 'aaa', 'Add Entry Department', 'Admin'),
(3, '2014-06-20 12:21:34', 'dee', 'Add Entry Department', 'Admin'),
(4, '2014-06-20 12:21:42', '', 'Delete Department', 'Admin'),
(5, '2014-06-20 12:35:58', 'Abdul hamid Nesru', 'Login', 'Admin'),
(6, '2014-06-20 12:36:04', 'Abdul hamid Nesru', 'Login', 'Admin'),
(7, '2014-06-20 12:37:07', 'Abdul hamid Nesru', 'Login', 'Admin'),
(8, '2014-06-20 12:58:39', 'Abdul hamid Nesru', 'Login', 'Admin'),
(9, '2014-06-20 14:50:55', 'Abdul hamid Nesru', 'Logout', 'Admin'),
(10, '2014-06-20 14:51:07', 'Abdul hamid Nesru', 'Login', 'Scheduler'),
(11, '2014-06-20 15:23:01', 'Abdul hamid Nesru', 'Login', 'Admin'),
(12, '2014-06-20 15:57:43', 'Abdul hamid Nesru', 'Logout', 'Admin'),
(13, '2014-06-20 15:57:51', 'Abdul hamid Nesru', 'Login', 'Scheduler'),
(14, '2014-06-20 16:36:45', ' ', 'Login', ''),
(15, '2014-06-20 16:38:49', ' ', 'Login', ''),
(16, '2014-06-20 16:39:45', ' ', 'Login', ''),
(17, '2014-06-20 16:39:54', 'Abdul hamid Nesru', 'Login', 'Admin'),
(18, '2014-06-20 16:40:39', 'Abdul hamid Nesru', 'Login', 'Admin'),
(19, '2014-06-20 16:46:07', 'AAAFFFAAAA', 'Add Entry Faculityt', 'Admin'),
(20, '2014-06-20 16:46:32', 'AAAFFFAAAA', 'Update Entry Faculity', 'Admin'),
(21, '2014-06-20 16:48:02', 'AAAFFFAAAA', 'Update Entry Faculity', 'Admin'),
(22, '2014-06-20 16:48:20', 'aaaaaaaaaaa', 'Update Entry Faculity', 'Admin'),
(23, '2014-06-20 16:48:44', '', 'Delete Faculity', 'Admin'),
(24, '2014-06-20 16:52:20', 'AAAAAA', 'Add Entry Department', 'Admin'),
(25, '2014-06-20 16:52:47', '', 'Delete Department', 'Admin'),
(26, '2014-06-20 16:54:16', '', 'Add Entry Instractor', 'aaaa'),
(27, '2014-06-20 16:54:25', '', 'Delete Instractor', ''),
(28, '2014-06-20 16:57:43', 'Lh 3 & Lh 4 (New)', 'Update Entry Bulding', 'Admin'),
(29, '2014-06-20 16:59:26', '2015', 'Add Entry acadamic Year', 'Admin'),
(30, '2014-06-20 16:59:38', '2015', 'Delete Acadamic Year', 'Admin'),
(31, '2014-06-20 17:00:46', 'Hello Cs 4th Year!', 'Update Notification', 'Admin'),
(32, '2014-06-20 17:01:11', 'hello', 'Update Notification', 'Admin'),
(33, '2014-06-20 17:02:35', 'ghgh', 'Update Notification', 'Admin'),
(34, '2014-06-20 17:08:00', 'Abdul hamid Nesru', 'Login', 'Admin'),
(35, '2014-06-20 17:08:56', 'Dawit&nbsp;Milkiyas', 'Add User', 'Admin'),
(36, '2014-06-20 17:16:37', 'Abdul hamid Nesru', 'Login', 'Scheduler'),
(37, '2014-06-20 17:19:45', 'Abdul hamid Nesru', 'Login', 'User'),
(38, '2014-06-20 17:20:03', ' ', 'Login', ''),
(39, '2014-06-20 17:20:05', 'Abdul hamid Nesru', 'Login', 'Admin'),
(40, '2014-06-20 17:22:30', 'Abdul hamid Nesru', 'Login', 'Scheduler'),
(41, '2014-06-20 17:23:17', 'Abdul hamid Nesru', 'Login', 'User'),
(42, '2014-06-20 17:29:06', '4:30 AM &nbsp; 5:20 AM', 'Add Schedule', 'Scheduler'),
(43, '2014-06-20 17:31:10', '4:30 AM &nbsp; 5:20 AM', 'Add Schedule', 'Scheduler'),
(44, '2014-06-20 17:32:14', '--Select-- &nbsp; --Select--', 'Add Schedule', 'Scheduler'),
(45, '2014-06-20 17:32:35', '--Select-- &nbsp; --Select--', 'Add Schedule', 'Scheduler'),
(46, '2014-06-20 17:35:03', '--Select-- &nbsp; --Select--', 'Add Schedule', 'Scheduler'),
(47, '2014-06-20 17:59:55', 'Abdul hamid Nesru', 'Login', 'Admin'),
(48, '2014-06-20 19:04:15', 'Abdul hamid Nesru', 'Login', 'Admin'),
(49, '2014-06-20 19:04:24', 'hi hi hi', 'Update Notification', 'Admin'),
(50, '2014-06-21 01:25:24', 'Abdul hamid Nesru', 'Login', 'Admin'),
(51, '2014-06-21 02:01:25', 'hihihi', 'Update Notification', 'Admin'),
(52, '2014-06-21 02:01:47', 'hihihihih', 'Update Notification', 'Admin'),
(53, '2014-06-21 02:09:02', 'why?', 'Comment on Notification', 'Admin'),
(54, '2014-06-21 02:09:17', 'why?', 'Comment on Notification', 'Admin'),
(55, '2014-06-21 02:10:11', 'lolo', 'Update Notification', 'Admin'),
(56, '2014-06-21 02:12:55', 'hihh', 'Update Notification', 'Admin'),
(57, '2014-06-21 02:13:05', 'lololo', 'Comment on Notification', 'Admin'),
(58, '2014-06-21 02:14:28', 'why?', 'Comment on Notification', 'Admin'),
(59, '2014-06-21 02:49:18', '', 'Delete feedback', ''),
(60, '2014-06-21 02:49:24', '', 'Delete feedback', ''),
(61, '2014-06-21 03:16:45', 'Abdul hamid Nesru', 'Logout', 'Admin'),
(62, '2014-06-21 03:17:15', 'Noooo thats not good idea!!!', 'Comment on Notification', ''),
(63, '2014-06-21 04:09:44', 'Abdul hamid Nesru', 'Login', 'Scheduler'),
(64, '2014-06-21 04:11:41', 'Abdul hamid Nesru', 'Login', 'Admin'),
(65, '2014-06-21 04:24:41', 'Abdul hamid Nesru', 'Login', 'User'),
(66, '2014-06-21 04:24:41', 'Abdul hamid Nesru', 'Login', 'User'),
(67, '2014-06-21 04:43:54', 'Abdul hamid Nesru', 'Logout', 'Scheduler'),
(68, '2014-06-21 04:44:24', 'Abdul hamid Nesru', 'Login', 'User'),
(69, '2014-06-21 04:54:29', 'Abdul hamid Nesru', 'Login', 'Scheduler'),
(70, '2014-06-21 05:00:35', ' ', 'Logout', ''),
(71, '2014-06-21 05:00:50', 'Abdul hamid Nesru', 'Login', 'User'),
(72, '2014-06-21 06:31:50', '3232', 'Add Entry course', 'User'),
(73, '2014-06-21 07:02:49', 'sds', 'Add Entry course', 'User'),
(74, '2014-06-21 07:07:36', 'aaaa', 'Add Entry course', 'User'),
(75, '2014-06-21 07:08:08', 'aaaa', 'Add Entry course', 'User'),
(76, '2014-06-21 07:28:30', 'aaaa', 'Add Entry course', 'User'),
(77, '2014-06-21 07:53:58', 'asas', 'Add Entry course', 'User'),
(78, '2014-06-21 07:57:44', 'ewew', 'Add Entry course', 'Admin'),
(79, '2014-06-21 07:58:28', 'ewew', 'Add Entry course', 'Admin'),
(80, '2014-06-21 08:01:30', 'ewew', 'Delete course', 'Admin'),
(81, '2014-06-21 08:01:35', 'sds', 'Delete course', 'Admin'),
(82, '2014-06-21 08:01:38', 'asas', 'Delete course', 'Admin'),
(83, '2014-06-21 08:01:41', 'ewew', 'Delete course', 'Admin'),
(84, '2014-06-21 08:01:54', 'aaaa', 'Delete course', 'Admin'),
(85, '2014-06-21 08:02:01', 'aaaa', 'Delete course', 'Admin'),
(86, '2014-06-21 08:02:07', 'aaaa', 'Delete course', 'Admin'),
(87, '2014-06-21 08:05:37', 'asd', 'Add Entry course', 'User'),
(88, '2014-06-21 08:12:06', 'Abdul hamid Nesru', 'Login', 'Scheduler'),
(89, '2014-06-21 08:22:49', 'Abdul hamid Nesru', 'Logout', 'Scheduler'),
(90, '2014-06-21 08:23:01', ' ', 'Login', ''),
(91, '2014-06-21 08:23:12', ' ', 'Login', ''),
(92, '2014-06-21 08:23:27', 'Abdul hamid Nesru', 'Login', 'Scheduler'),
(93, '2014-06-21 08:55:19', '', 'Delete  Schedule', ''),
(94, '2014-06-21 08:55:25', '', 'Delete  Schedule', ''),
(95, '2014-06-21 08:55:30', '', 'Delete  Schedule', ''),
(96, '2014-06-21 08:55:37', '', 'Delete  Schedule', ''),
(97, '2014-06-21 08:55:41', '', 'Delete  Schedule', ''),
(98, '2014-06-21 08:55:49', '', 'Delete  Schedule', ''),
(99, '2014-06-21 08:55:54', '', 'Delete  Schedule', ''),
(100, '2014-06-21 08:56:20', '', 'Delete  Schedule', ''),
(101, '2014-06-21 08:56:51', 'Abdul hamid Nesru', 'Logout', 'Scheduler'),
(102, '2014-06-21 08:56:58', 'Abdul hamid Nesru', 'Login', 'Admin'),
(103, '2014-06-21 08:57:33', 'Hello Our Gust!!!!\r\nWelcome to our presrntaion cllass!!!!~~~', 'Update Notification', 'Admin'),
(104, '2014-06-21 08:58:00', 'hey', 'Update Notification', 'Admin'),
(105, '2014-06-21 09:04:50', 'Why?', 'Comment on Notification', 'Admin'),
(106, '2014-06-21 09:05:22', 'i heat this news!!!! :(', 'Comment on Notification', 'Admin'),
(107, '2014-06-21 09:06:24', 'I Think Mr. Mohammed Osmann was Better!!', 'Comment on Notification', 'Admin'),
(108, '2014-06-21 09:07:00', 'wow thts realy cool lol ', 'Comment on Notification', 'Admin'),
(109, '2014-06-21 09:57:20', 'CS201', 'Update Entry course', 'Admin'),
(110, '2014-06-21 10:16:10', 'lll', 'Delete year and section', 'Admin'),
(111, '2014-06-21 11:48:57', 'Abdul hamid Nesru', 'Logout', 'Admin'),
(112, '2014-06-21 11:53:32', 'Abdul hamid Nesru', 'Login', 'Scheduler'),
(113, '2014-06-21 12:06:48', 'Abdul hamid Nesru', 'Logout', 'Scheduler'),
(114, '2014-06-21 12:07:08', 'Abdul hamid Nesru', 'Login', 'Scheduler'),
(115, '2014-06-21 12:38:12', 'Abdul hamid Nesru', 'Logout', 'Scheduler'),
(116, '2014-06-21 12:38:31', 'Abdul hamid Nesru', 'Login', 'User'),
(117, '2014-06-21 13:00:02', ' ', 'Login', ''),
(118, '2014-06-21 13:00:16', 'Abdul hamid Nesru', 'Login', 'User'),
(119, '2014-06-21 13:00:47', 'Abdul hamid Nesru', 'Login', 'Scheduler'),
(120, '2014-06-21 13:00:52', 'Abdul hamid Nesru', 'Logout', 'Scheduler'),
(121, '2014-06-21 14:21:05', 'Abdul hamid Nesru', 'Login', 'Scheduler');

-- --------------------------------------------------------

--
-- Table structure for table `instractor`
--

CREATE TABLE IF NOT EXISTS `instractor` (
  `instractor_id` int(11) NOT NULL AUTO_INCREMENT,
  `instractor_name` varchar(50) NOT NULL,
  `academic_rank` varchar(100) NOT NULL,
  `distination` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  PRIMARY KEY (`instractor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=309 ;

--
-- Dumping data for table `instractor`
--

INSERT INTO `instractor` (`instractor_id`, `instractor_name`, `academic_rank`, `distination`, `department`) VALUES
(140, 'Ms. Mulubrehan Hailay                    ', 'BSc', '1st year', 'Computer Science'),
(141, 'Mr. Ankama Raoj                ', 'M.tech', '1st year', 'Information Technology'),
(142, 'Mr.kumneger Zewdu', 'BSc', '2nd year', 'Information Technology'),
(143, 'Mr.Timketab', 'BSc', '3rd year', 'Information Technology'),
(144, 'Mr.Sami', 'BSc', '1st year', 'Information Technology'),
(145, 'Mr. Germay', 'MSc', '4th year', 'Information Technology'),
(146, 'Ms. Rosi', 'MSc', '4th year', 'Information Technology'),
(135, 'Mr. G/Egziabher Tsegay', 'BSc', '2nd year', 'Computer Science'),
(136, 'Mr. Tesfahun G.', 'BSc', '2nd year', 'Computer Science'),
(137, 'Mr. Solomon.G', 'MSc', '2nd year', 'Computer Science'),
(138, 'Ms. Kalkidan Abebe', 'BSc', '2nd year', 'Computer Science'),
(139, 'Ms. Tsadu zeray                ', 'BSc', '1st year', 'Computer Science'),
(133, 'Mr. Abel Damtew', 'Msc', '4th year', 'Computer Science'),
(134, 'Mr. Biset Dessalegn                               ', 'MSc', '3rd year', 'Computer Science'),
(147, 'Mr.wasihun', 'BSc', '1st-4th year', 'Information Technology'),
(148, 'Mr. Bekele Tesfaye', 'BSc', '1st year', 'Civil Engineering'),
(149, 'Mr.Sewl Toyebo                          ', 'BSc', '1st-2nd', 'Civil Engineering'),
(150, 'Mr. Adino Sisay                       ', 'BSc', '1st year', 'Civil Engineering'),
(151, 'Mr.Mohammed Hussien                  ', 'BSc', '1st-2nd', 'Civil Engineering'),
(152, 'Mr. Ahmed Mohammed               ', 'BSc', '1st year', 'Civil Engineering'),
(153, 'Mr. Eng.jay                           ', 'MSc', '1st year', 'Civil Engineering'),
(154, 'Mr.Tegegne markos                       ', 'BSc', '1st year', 'Civil Engineering'),
(155, 'Ms.Asiya ali                            ', 'BSc', '1st year', 'Civil Engineering'),
(156, 'Mr.Kedir Abdela                            ', 'BSc', '1st year', 'Civil Engineering'),
(157, 'Mr. Ahmed Abera                   ', 'BSc', '1st year', 'Civil Engineering'),
(158, 'Mr.Lense Tesfaye                          ', 'BSc', '1st year', 'Civil Engineering'),
(159, 'Mr. Bizuayehu Bogale               ', 'MSc', '1st year', 'Electrical Engineering'),
(160, 'Mr.Kidus G/hiwot                  ', 'BSc', '1st year', 'Electrical Engineering'),
(161, 'Mr. Emanu Sultan                    ', 'BSc', '1st year', 'Electrical Engineering'),
(162, 'Mr.Siraj Hajo                            ', 'BSc', '1st year', 'Electrical Engineering'),
(163, 'Mr. Endale Nega                  ', 'BSc', '1st year', 'Electrical Engineering'),
(164, 'Mr. Aregahegne Miteku              ', 'BSc', '1st year', 'Electrical Engineering'),
(165, 'Mr.Yesuf Mohammed          ', 'Diploma', '1st year', 'Electrical Engineering'),
(166, 'Mr.P.Korunoker                    ', 'Assist Profesor', '1st year', 'Electrical Engineering'),
(167, 'Mr. A.Raoj                              ', 'Assist Profesor', '1st year', 'Electrical Engineering'),
(168, 'Mr. Addisu Haile                     ', 'MSc', '1st year', 'Mechanical Engineering'),
(169, 'Mr. Hailay Birhane                   ', 'MSc', '1st year', 'Mechanical Engineering'),
(170, 'Mr.Shushay G/her                 ', 'MSc', '1st year', 'Mechanical Engineering'),
(171, 'Mr.Sirnivas y.v                     ', 'MSc', '1st year', 'Mechanical Engineering'),
(172, 'Mr.Sisay Yami                      ', 'MSc', '1st year', 'Mechanical Engineering'),
(173, 'Mr. Abdu Esie                         ', 'BSc', '1st year', 'Mechanical Engineering'),
(174, 'Mr.Mohammed Keral Mohammedabrar', 'BSc', '1st year', 'Mechanical Engineering'),
(175, 'Mr. Amsalu Gelaneh Derso', 'BSc', '1st year', 'Accounting'),
(176, 'Mr. Anwar Mohammed Yimer', 'MSc', '1st year', 'Accounting'),
(177, 'Mr. Belaye Asnake          ', 'BSc', '3rd year', 'Natural Resource Management'),
(178, 'Mr. Dereje Gema                            ', 'MSc', '3rd year', 'Natural Resource Management'),
(179, 'Mr. Biruk Tagesse                            ', 'MSc', '3rd year', 'Natural Resource Management'),
(180, 'Mr. Hailemariam Mengistu         ', 'BSc', '3rd year', 'Natural Resource Management'),
(181, 'Mr.Milishaw Ergatu                       ', 'MSc', '3rd year', 'Natural Resource Management'),
(182, 'Mr.Jemal Seid                       ', 'BSc', '1st year', 'Natural Resource Management'),
(183, 'Mr. Degene Adugya           ', 'BSc', '2nd year', 'Natural Resource Management'),
(184, 'Mr. Getahun Fikire               ', 'BSc', '2nd year', 'Natural Resource Management'),
(185, 'Mr.Nugusu Tareke                          ', 'BSc', '2nd year', 'Natural Resource Management'),
(186, 'Mr.Saxiye Abebe                 ', 'BSc', '2nd year', 'Natural Resource Management'),
(187, 'Mr.Markine Mesene                     ', 'MSc', '2nd year', 'Natural Resource Management'),
(188, 'Mr.Sisay Shumet                             ', 'BSc', '1st year', 'Natural Resource Management'),
(189, 'Mr.Tolera Abrehaam                    ', 'BSc', '1st year', 'Natural Resource Management'),
(190, 'Mr.Kebru Feyise                             ', 'MSc', '1st year', 'Natural Resource Management'),
(191, 'Mr.Tsegay Habtamu                    ', 'BSc', '1st year', 'Natural Resource Management'),
(192, 'Mr. Aregaw Abera               ', 'MSc', '2nd-3rd', 'Animal Science'),
(193, 'Mr. Abreha H.                         ', 'MSc', '3rd year', 'Animal Science'),
(194, 'Mr. Amare Berhe                ', 'MSc', '2nd year', 'Animal Science'),
(195, 'Mr.Tolora Chla                       ', 'MSc', '2nd year', 'Animal Science'),
(196, 'Mr. Bushira Badhaso            ', 'MSc', '3rd year', 'Animal Science'),
(197, 'Mr.Shishay Giirmay              ', 'MSc', '2nd-3rd', 'Animal Science'),
(198, 'Mr. Berhane Hagos              ', 'MSc', '2nd year', 'Animal Science'),
(199, 'Mr.Natnael  D.', 'MSc', '2nd year', 'Animal Science'),
(200, 'Mr. Gebrehawaria K.            ', 'MSc', '3rd year', 'Animal Science'),
(201, 'Mr. Endashw Ashn            ', 'MSc', '1st-2nd', 'Animal Science'),
(202, 'Mr.Hssien Ahmed                 ', 'BSc', '1st-3rd', 'Biology'),
(203, 'Mr. Addisu Kinfu                   ', 'BSc', '1st-3rd', 'Biology'),
(204, 'Mr.Mohammed Shumbahri', 'BSc', '1st-3rd', 'Biology'),
(205, 'Mr. Etay Gittet                       ', 'BSc', '1st-3rd', 'Biology'),
(206, 'Mr. Abushi Zinaw                 ', 'BSc', '1st-3rd', 'Biology'),
(207, 'Mr.Minalu Birie                    ', 'BSc', '1st-3rd', 'Biology'),
(208, 'Mr.Kiflay G/hiwot               ', 'BSc', '1st-3rd', 'Biology'),
(209, 'Mr. Abdulmejid Muteba   ', 'BSc', '1st-3rd', 'Biology'),
(210, 'Mr.Sibhatu G/hiwot           ', 'BSc', '1st-3rd', 'Biology'),
(211, 'Mr.Mohammed Sied            ', 'BSc', '1st-3rd', 'Biology'),
(212, 'Mr. Dagmawi  Kindu              ', 'BSc', '1st-3rd', 'Biology'),
(213, 'Mr.Tadesse Tilahun             ', 'BSc', '1st-3rd', 'Biology'),
(214, 'Mr. Betemariam Kebede    ', 'BSc', '1st-3rd', 'Biology'),
(215, 'Mr. Abdela Ibrahim        ', 'GI', '1st-3rd', 'Biology'),
(216, 'Mr. Ali Zeynu                            ', 'GI', '1st-3rd', 'Biology'),
(217, 'Mr.Zulaliya Jemal        ', 'GI', '1st-3rd', 'Biology'),
(218, 'Mr. Solomon H/silasy     ', 'MSc', '1st-2nd', 'Earth Science'),
(219, 'Mr. Getachew G/tsadikan  ', 'MSc', '1st-3rd', 'Earth Science'),
(220, 'Mr.wondumu Tesfaye Ayene     ', 'MSc', '1st-2nd', 'Earth Science'),
(221, 'Mr.Jemal  Mohammed              ', 'MSc', '1st-3rd', 'Earth Science'),
(222, 'Mr. Hindiya Gebiru               ', 'MSc', '1st-3rd', 'Earth Science'),
(223, 'Mr.Yonas Teshome             ', 'MSc', '1st-3rd', 'Earth Science'),
(224, 'Mr.Kinde Hafte Belay         ', 'BSc', '1st-3rd', 'Physics'),
(225, 'Mr. Annjirao', 'MSc', '1st-3rd', 'Physics'),
(226, 'Mr. Haimanot Mengistu                             ', 'BSc', '1st-3rd', 'Physics'),
(227, 'Mr.Sewnet Demelash                 ', 'BSc', '1st-3rd', 'Physics'),
(228, 'Mr.Shimels Lema                  ', 'BSc', '1st-3rd', 'Physics'),
(229, 'Ms.Migibar Wende             ', 'BSc', '1st-3rd', 'Physics'),
(230, 'Mr. Epherem Beshir            ', 'BSc', '1st-3rd', 'Physics'),
(231, 'Ms.Marta Haile                         ', 'BSc', '1st-3rd', 'Physics'),
(232, 'Ms.Sinet Welelaw             ', 'BSc', '1st-3rd', 'Physics'),
(233, 'Mr.Wassu Hassen        ', 'BSc', '1st-3rd', 'Physics'),
(234, 'Mr. Bizuyehu hailu', 'Bsc', '2nd year', 'Antropology'),
(235, 'Mr. Tilahun Assefa', 'Assistant', '2nd year', 'Antropology'),
(236, 'Mr. Fraol Haillu', 'Assistant', '2nd year and 3rd year', 'Antropology'),
(237, 'Ms. Woynshet Legesse', 'Bsc', '1st year and 3rd year', 'Antropology'),
(238, 'Tilahun Tsetargew', 'Bsc', '1st year and 2nd year', 'Antropology'),
(239, 'Santime Sagay', 'Bsc', '1st year and 3rd year', 'Antropology'),
(240, 'Dr.Ravi kumar', 'Assistance profecer', '2nd year and 3rd year', 'Antropology'),
(241, 'Mr.Abrah G/Yohnis', 'Bsc', '1st-3rd year', 'Ethiopian Language and Litrature(Amharic)'),
(242, 'Mr. Belayneh Haile', 'Bsc', '1st-3rd year', 'Ethiopian Language and Litrature(Amharic)'),
(243, 'Mr.Yitayal Worku', 'Bsc', '1st-3rd year', 'Ethiopian Language and Litrature(Amharic)'),
(244, 'Mr.Minwuyelet Denekew', 'Bsc', '1st-3rd year', 'Ethiopian Language and Litrature(Amharic)'),
(245, 'Mr.Nebyu Gashu', 'Bsc', '1st-3rd year', 'Ethiopian Language and Litrature(Amharic)'),
(246, 'Mr.Temesgen Tadesse', 'Bsc', '1st-3rd year', 'Ethiopian Language and Litrature(Amharic)'),
(247, 'Mr.Fitsum Kurabachew', 'Bsc', '1st-3rd year', 'Ethiopian Language and Litrature(Amharic)'),
(248, 'Mr.Mohammed Ibrahim', 'Bsc', '1st year', 'English Language and Literature'),
(249, 'Mr. Behailu Korma', 'Bsc', '1st year and 2nd year', 'Forign Language and Literature'),
(250, 'Mr.Zelalem Gebesa', 'Bsc', '1st year', 'Forign Language and Literature'),
(251, 'Mr.Tigstu Tiruneh', 'Bsc', '2nd year', 'Forign Language and Literature'),
(252, 'Mr.Mulat Kidane', 'Bsc', '3rd year', 'Forign Language and Literature'),
(253, 'Mr.Alemu Mergia', 'Bsc', '3rd year', 'Forign Language and Literature'),
(254, 'Mr.Damtew Bililbla', 'Bsc', '1st year', 'Forign Language and Literature'),
(255, 'Mr.Tarekegn Tessema', 'Bsc', '1st year', 'Forign Language and Literature'),
(256, 'Mr.abdulaziz Yirga', 'Bsc', '1st year', 'Forign Language and Literature'),
(257, 'Mr Amanuel Mekonnen', 'Bsc', '1st year', 'Geography'),
(258, 'Mr.Bewuketu Mamaru ', 'Bsc', '1st year', 'Geography'),
(259, 'Mr.Takele Ashambo', 'Bsc', '1st year', 'Geography'),
(260, 'Mr.Yonas Mulu', 'Bsc', '1st year', 'Geography'),
(261, 'Mr.Masued Shaid', 'Bsc', '2nd year', 'Geography'),
(262, 'Mr.Gebrei Tsegay', 'Bsc', '2nd year', 'Geography'),
(264, 'Mr.Nurhussen Ahmed', 'Bsc', '2nd year', 'Geography'),
(265, 'Mr.Ahmed Mossa', 'Bsc', '1st year', 'Geography'),
(266, 'Mr.Abrha Haftom', 'Msc', '2nd year', 'History'),
(267, 'Mr.Endris Ali', 'Msc', '1st year', 'History'),
(268, 'Mr.Tofiq Yitogo', 'Msc', '1st year and 2nd year', 'History'),
(269, 'Dr.Shivanand', 'PHD', '2nd year', 'History'),
(270, 'Mr.Jemal Abebe', 'PHD', '1st year and 2nd year', 'History'),
(271, 'Mr.Merwan Abdulahi', 'PHD', '1st year and 2nd year', 'History'),
(272, 'Mr.Ayenew Silesh', 'PHD', '2nd year', 'History'),
(273, 'Mr.Communist Girma', 'PHD', '1st year and 2nd year', 'History'),
(274, 'Mr.Kemal Ahmed', 'Bsc', '1st-3rd year', 'Sociology'),
(275, 'Mr.Woldu W/Gebriel', 'Bsc', '1st-3rd year', 'Sociology'),
(276, 'Mr.Bkila Olgra', 'Bsc', '1st-3rd year', 'Sociology'),
(277, 'Mr Mebratu Alfnur', 'Bsc', '1st-3rd year', 'Sociology'),
(278, 'Mr. Adamu Amenu', 'Bsc', '1st-3rd year', 'Sociology'),
(279, 'Mr.Ahmed Shami', 'Bsc', '1st-3rd year', 'Sociology'),
(280, 'Mr.Farazan Issaibrahim', 'Bsc', '1st-3rd year', 'Sociology'),
(281, 'Mr.Efa Tadesse', 'Bsc', '1st-3rd year', 'Sociology'),
(282, 'Mr.Mohammed Indris', 'Msc', '1st year', 'Afaraf'),
(283, 'Mr.Esmael Mohammed', 'Bsc', '1st year', 'Afaraf'),
(284, 'Mr. Bereket Seyu', 'Bsc', '1st-3rd year', 'Accounting'),
(285, 'Mr. Daniel Kebede', 'Bsc', '1st-3rd year', 'Accounting'),
(286, 'Mr. Ibrahim Mohammed', 'Bsc', '1st-3rd year', 'Accounting'),
(287, 'Mr. Iyasu Paulos', 'Bsc', '1st-3rd year', 'Accounting'),
(288, 'Mr. Kinfu Kene', 'Bsc', '1st-3rd year', 'Accounting'),
(289, 'Mr. Habtamu Ayele', 'Bsc', '1st-3rd year', 'Accounting'),
(290, 'Mr. Mohammed Adem', 'Bsc', '1st-3rd year', 'Accounting'),
(291, 'Mr. Mohammed Aman', 'Bsc', '1st-3rd year', 'Accounting'),
(292, 'Ms. Sityna Akmel', 'Bsc', '1st-3rd year', 'Accounting'),
(293, 'Mr. Ahmed Hassan', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(294, 'Mr. Balachew Abeje', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(295, 'Mr. Daniel Amare', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(296, 'Mr. Filimon Negussie', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(297, 'Mr. Libeamlak Dessie', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(298, 'Mr. Meset Abeje', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(299, 'Mr. Nega Abebe', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(300, 'Mr. Misgana Abadi', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(301, 'Mr. Sherifa Idris', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(302, 'Mr. Thomas Haile', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(303, 'Ms. Tsehay Assefa', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(304, 'Mr. Yibabe Nigussie', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(305, 'Mr. Zelalem Solomon', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(306, 'Mr. Zewde Kifle ', 'Bsc', '1st-3rd year', 'Business and Administrative'),
(307, 'Mr. Ahmed Adem (Ani)', 'Bsc', '1st - 4th Year', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text,
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `message`) VALUES
(1, ' <b>Samara University Presedant Mr. Mohammed Ousman Transfer his Autority to the former Presedant Mr. Adem Bori</b>\r\n<br>\r\n<br>\r\n\r\nlast week samara university President  M.r Mohammed Usman transfers his power of the university to the old president of samara university m,r Adem bori this power transformation is easly and successfully formed when during all the university managers are living and meeting and all the university society gives tanks  for the current and the oldest president.\r\n\r\n<br>\r\n<br>\r\n(source: Public Relation office)'),
(2, '<b> Samara university start online Grade Reporting System </b>\r\n<br>\r\n<br>\r\n\r\n Samara university start online grade reporting system in the year 2007 or 2014/15 online grade reporting system is started in samara university these new system solves different problems that are occurred in samara university that are related with grade any student of samara university can easly seen his grade report where every he/she living.'),
(3, '<b>Samara University starts Teaching in Masters Program </b> \r\n<br>\r\n<br>\r\n\r\nSamara University starts teaching in masters program  in regular time of the university 30 students are learned in masters program in business administrative these indicates that time to time the capacity of learning /teaching process in samara university is growth.'),
(4, '<b>Samara University Extend the schedule for the 2006/14  acadamic Year</b>\r\n<br>\r\n<br>\r\n\r\nsamara university change its schedule for the acadamic year 2006/2014 these schedules changed because of one student fight with one teacher and because of these are week teaching learning process stops that is why samara university changes the graduation time 21 to 28 2014 .');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `bulding_name` varchar(11) NOT NULL,
  `room_name` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `max_capasty` int(11) NOT NULL,
  PRIMARY KEY (`room_id`),
  UNIQUE KEY `room_name` (`room_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `bulding_name`, `room_name`, `description`, `max_capasty`) VALUES
(65, 'Reg A', 'Reg A3 (MPA)', '1st floor', 40),
(62, 'Reg A', 'Reg A6', '1st floor', 60),
(64, 'Reg A', 'Reg A8', '1st floor', 60),
(63, 'Reg A', 'Reg A7', '1st floor', 60),
(61, 'Reg A', 'Reg A5', '1st floor', 60),
(60, 'Reg A', 'Reg A4', '1st floor', 80),
(58, 'Reg A', 'Reg A1', 'Ground', 80),
(59, 'Reg A', 'Reg A2', 'Ground', 50),
(66, 'Reg A', 'Reg A9 (Enla Lab)', '1st floor', 40),
(67, 'Reg A', 'Reg A10', '1st flloor ', 60),
(68, 'Reg A', 'Reg A11', '1st floor ', 112),
(69, 'Reg A', 'Reg A12', '1st floor', 60),
(70, 'Reg B', 'Reg B1', 'Ground', 60),
(71, 'Reg B', 'Reg B2', 'Ground', 50),
(72, 'Reg B', 'Reg B3', 'Ground', 112),
(73, 'Reg B', 'Reg B4', '1st floor', 80),
(74, 'Reg B', 'Reg B5', '1st floor', 80),
(75, 'Reg B', 'Reg B6', '1st floor', 80),
(76, 'Reg B', 'Reg B7', '1st floor', 60),
(77, 'Reg B', 'Reg B8', '1st floor', 60),
(78, 'Reg B', 'Reg B9', '2nd floor', 112),
(79, 'Reg B', 'Reg B11', '2nd floor', 80),
(80, 'Reg B', 'Reg B12', '2nd floor', 50),
(81, 'Reg C', 'Reg C1', '1st floor', 50),
(82, 'Reg C', 'Reg C2', '1st floor', 80),
(83, 'Reg C', 'Reg C3', '1st floor', 80),
(84, 'Reg C', 'Reg C4', '1st floor', 80),
(85, 'Reg C', 'Reg C5', '1st floor', 80),
(86, 'Reg C', 'Reg C6', '2nd floor', 112),
(87, 'Reg C', 'Reg C7', '2nd floor', 80),
(88, 'Reg C', 'Reg C8', '2nd floor', 112),
(89, 'Reg C', 'Reg C9', '2nd floor', 50),
(90, 'Reg B', 'Reg B10', '2nd floor', 60),
(91, 'Block 1', 'B11', 'Ground', 50),
(92, 'Block 1', 'B12', 'Ground', 50),
(93, 'Block 1', 'B13 (LAB)', 'Ground', 50),
(94, 'Block 1', 'B14', 'Ground', 50),
(95, 'Block 1', 'B15', 'Ground', 50),
(96, 'Block 1', 'B16', 'Ground', 50),
(97, 'Block 1', 'B17', 'Ground', 50),
(98, 'Block 1', 'B18', 'Ground', 50),
(99, 'Block 1', 'B19', 'Ground', 50),
(100, 'Block 1', 'B110 (MBA)', 'Ground', 50),
(101, 'Block 1', 'B111', '1st floor', 50),
(102, 'Block 1', 'B112', '1st floor', 50),
(103, 'Block 1', 'B113', '1st floor', 50),
(104, 'Block 1', 'B114', '1st floor', 50),
(105, 'Block 1', 'B115', '1st floor', 50),
(106, 'Block 1', 'B116', '1st floor', 50),
(107, 'Block 1', 'B117', '1st floor', 50),
(108, 'Block 1', 'B118', '1st floor', 50),
(109, 'Block 1', 'B119', '1st floor', 50),
(110, 'Block 2', 'B21', 'Ground', 50),
(111, 'Block 2', 'B22', 'Ground', 50),
(112, 'Block 2', 'B23', 'Ground', 50),
(113, 'Block 2', 'B24', 'Ground', 50),
(114, 'Block 2', 'B25', 'Ground', 50),
(115, 'Block 2', 'B26', 'Ground', 50),
(116, 'Block 2', 'B27', 'Ground', 50),
(117, 'Block 2', 'B28', 'Ground', 50),
(118, 'Block 2', 'B29', 'Ground', 50),
(119, 'Block 2', 'B210', 'Ground', 50),
(120, 'Block 2', 'B211', '1st floor', 50),
(121, 'Block 2', 'B212', '1st floor', 50),
(122, 'Block 2', 'B213', '1st floor', 50),
(123, 'Block 2', 'B214 (LAB)', '1st floor', 50),
(124, 'Block 2', 'B215 (Lab)', '1st floor', 50),
(125, 'Block 2', 'B216', '1st floor', 50),
(126, 'Block 2', 'B217', '1st floor', 50),
(127, 'Block 2', 'B219', '1st floor', 50),
(128, 'Block 2', 'B220', '1st floor', 50),
(129, 'Block 2', 'B221', '1st floor', 50),
(130, 'Lectur Hell', 'Lh1', 'the Older one', 200),
(131, 'Lectur Hell', 'Lh2', 'the Older one', 200),
(132, 'Lectur Hell', 'Lh3', 'The New one', 200),
(133, 'Lectur Hell', 'Lh4', 'The New one', 200),
(134, 'CS Lab', 'CS Lab1', 'Ground (Geography & Adminstrativ) ', 28),
(135, 'CS Lab', 'CS Lab2', 'second floor (fresh)', 30),
(136, 'CS Lab', 'CS Lab3', 'First Floor (3rd Year)', 28),
(137, 'CS Lab', 'CS Lab4', 'First Floor (4th Year)', 28),
(138, 'Reg A', 'aaaa', '', 455),
(141, 'Reg B', 'ddd', '', 33),
(140, 'Reg A', 'www', 'www', 41);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(30) NOT NULL,
  `acadamic_year` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `year_section` varchar(100) NOT NULL,
  `course` varchar(50) NOT NULL,
  `instractor` varchar(50) NOT NULL,
  `room` varchar(20) NOT NULL,
  `day` varchar(100) NOT NULL,
  `day1` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `time_start` varchar(20) NOT NULL,
  `time_end` varchar(50) NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `department`, `acadamic_year`, `semester`, `year_section`, `course`, `instractor`, `room`, `day`, `day1`, `type`, `time_start`, `time_end`) VALUES
(1, 'Computer Science', '2013/14 GC (2006 EC)', '1st', 'CS 1A', 'cs201', 'Mr. Solomon.G', 'B12', 'Monday Tuesday   ', '', '', '1:30 AM', '2:20 AM'),
(2, 'Computer Science', '2013/14 GC (2006 EC)', '1st', 'CS 1A', 'cs212', 'Ms. Tsadu zeray', 'B18', 'Monday Tuesday   ', '', '', '2:30 AM', '3:20 AM'),
(3, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 1A', 'cs222', 'Mr. Ahmed Adem (Ani)', 'B14', '  Wednesday  ', '', '', '1:30 AM', '2:20 AM'),
(4, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 2A', 'cs222', 'Ms. Kalkidan Abebe', 'B118', 'Monday    ', '', '', '4:30 AM', '5:20 AM'),
(5, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 2A', 'cs321', 'Mr. Tesfahun G.', 'B17', ' Tuesday Wednesday  ', '', '', '3:30 AM', '4:20 AM'),
(6, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs5xx', 'Mr. Ahmed Adem (Ani)', 'B11', 'Monday Tuesday Wednesday Thursday Friday', '', '', '1:30 AM', '2:20 AM'),
(8, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs441', 'Mr. Abel Damtew', 'B18', 'Monday   Thursday ', '', '', '11:30 AM', '12:20 PM'),
(9, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs453', 'Mr. Tesfahun G.', 'B119', '  Wednesday  Friday', '', '', '11:30 AM', '12:20 PM'),
(10, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs582', 'Mr. G/Egziabher Tsegay', 'Reg B1', '  Wednesday Thursday ', '', '', '5:30 AM', '6:20 AM'),
(11, 'Computer Science', '2013/14 GC (2006 EC)', '--Select s', 'CS 1A', 'cs222', 'Mr. Biset Dessalegn', 'B113', 'Monday   Thursday ', '', '', '1:30 AM', '2:20 AM'),
(12, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 2B', 'cs311', 'Computer Science=>Ms. Mulubrehan Hailay', 'B18', 'Monday Tuesday   ', '', '', '9:30 AM', '10:20 AM'),
(13, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 3A', 'cs341', 'Mr. Abel Damtew', 'B17', 'Monday Tuesday Wednesday Thursday Friday', '', '', '9:30 AM', '10:20 AM'),
(14, '--Select Department--', '2013/14 GC (2006 EC)', '--Select s', '--Select Year and section--', '--Select Course--', '--Select--', '--Select--', '  Wednesday Thursday ', '', '', '--Select--', '--Select--'),
(26, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs411', 'Mr. Bizuayehu Bogale', 'B118', 'Monday   Thursday ', '', '', '2:30 AM', '3:20 AM'),
(16, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', '--Select Year and section--', 'cs453', 'Mr. Biset Dessalegn', 'B15', 'Monday   Thursday ', '', '', '1:30 AM', '2:20 AM'),
(17, 'Computer Science', '2013/14 GC (2006 EC)', '1st', 'CS 2B', 'cs321', 'Mr. G/Egziabher Tsegay', 'B119', '  Wednesday  ', '', '', '4:30 AM', '5:20 AM'),
(18, 'Computer Science', '2013/14 GC (2006 EC)', '--Select s', 'CS 2A', 'cs322', 'Mr. Ahmed Adem (Ani)', 'B115', ' Tuesday  Thursday ', '', '', '11:30 AM', '12:20 PM'),
(19, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 2B', 'cs453', 'Ms. Tsadu zeray', 'B16', 'Monday  Wednesday  ', '', '', '1:30 AM', '2:20 AM'),
(20, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 2A', 'cs432', 'Mr. Abel Damtew', 'B111', '  Wednesday  ', '', '', '4:30 AM', '4:20 AM'),
(21, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 1A', 'cs212', 'Mr. G/Egziabher Tsegay', 'B115', 'Monday  Wednesday  ', '', '', '3:30 AM', '2:20 AM'),
(22, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs453', 'Mr. Ahmed Adem (Ani)', 'B114', 'Monday Tuesday   ', '', '', '4:30 AM', '5:20 AM'),
(23, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 2B', 'cs453', 'Mr. Biset Dessalegn', 'B118', 'Monday    Friday', '', '', '2:30 AM', '3:20 AM'),
(24, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 3A', 'cs371', 'Ms. Kalkidan Abebe', 'B115', 'Monday  Wednesday  ', '', '', '5:30 AM', '6:20 AM'),
(25, 'Accounting', '2013/14 GC (2006 EC)', '2nd', 'ACC 1A', 'cs424', 'Ms. Mulubrehan Hailay', 'B18', 'Monday Tuesday Wednesday Thursday Friday', '', '', '10:30 AM', '11:20 AM'),
(28, 'Accounting', '2013/14 GC (2006 EC)', '2nd', 'ACC 3A', 'cs441', 'Mr.Natnael D.', 'B16', 'Monday Tuesday  Thursday ', '', '', '1:30 AM', '3:20 AM'),
(29, '--Select Department--', '2013/14 GC (2006 EC)', '--Select s', '--Select Year and section--', '--Select Course--', '--Select--', '--Select--', '    ', '', '', '--Select--', '--Select--'),
(62, 'Midwifery', '2013/14 GC (2006 EC)', '2nd', 'MIDWI 1A', '--Select Course--', 'Mr. Ahmed Hassan', 'Reg C7', '   Thursday ', '', '', '11:30 AM', '12:20 PM'),
(63, 'Public Health Officer', '2013/14 GC (2006 EC)', '2nd', 'HO 1A', '--Select Course--', 'Mr. Abdulmejid Muteba', 'Reg B10', '  Wednesday  ', '', '', '10:30 AM', '12:20 PM'),
(33, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4B', 'cs424', 'Mr. Amsalu Gelaneh Derso', 'B15', 'Monday  Wednesday  Friday', '', '', '11:30 AM', '12:20 PM'),
(34, 'Information Technology', '2013/14 GC (2006 EC)', '2nd', 'IT 1A', '--Select Course--', 'Mr. Amsalu Gelaneh Derso', 'B17', '  Wednesday Thursday ', '', '', '4:30 AM', '5:20 AM'),
(35, 'Civil Engineering', '2013/14 GC (2006 EC)', '2nd', 'CIV ENG 1A', '--Select Course--', 'Mr.Tolora Chla', 'B29', 'Monday   Thursday ', '', '', '1:30 AM', '2:20 AM'),
(36, 'Chemical Engineering', '2013/14 GC (2006 EC)', '2nd', 'CHEM ENG 1A', '--Select Course--', 'Mr. Endashw Ashn', 'B28', ' Tuesday  Thursday ', '', '', '2:30 AM', '3:20 AM'),
(37, 'Mechanical Engineering', '2013/14 GC (2006 EC)', '2nd', 'MECH ENG 1A', '--Select Course--', 'Mr.Zulaliya Jemal', 'B213', 'Monday   Thursday ', '', '', '3:30 AM', '4:20 AM'),
(38, 'Economics', '2013/14 GC (2006 EC)', '2nd', '--Select Year and section--', 'bbb', 'Mr. Endashw Ashn', 'Reg B11', 'Monday  Wednesday  ', '', '', '2:30 AM', '2:20 AM'),
(39, 'Management', '2013/14 GC (2006 EC)', '2nd', 'MGT 1A', 'ddd12', 'Mr. Mohammed Adem', 'Reg B6', 'Monday Tuesday   ', '', '', '2:30 AM', '3:20 AM'),
(40, 'Business and Administrative', '2013/14 GC (2006 EC)', '2nd', '--Select Year and section--', '--Select Course--', 'Mr. Mohammed Aman', 'Reg B4', 'Monday   Thursday ', '', '', '2:30 AM', '3:20 AM'),
(41, 'Animal Science', '2013/14 GC (2006 EC)', '2nd', 'ANIM 1A', '--Select Course--', 'Mr. Bereket Seyu', 'Reg C1', 'Monday    Friday', '', '', '10:30 AM', '11:20 AM'),
(42, 'Biology', '2013/14 GC (2006 EC)', '2nd', 'BIO 1A', '--Select Course--', 'Mr. Mohammed Aman', 'B117', 'Monday    Friday', '', '', '3:30 AM', '4:20 AM'),
(43, 'Chemistry', '2013/14 GC (2006 EC)', '2nd', 'CHEMIS 1A', '--Select Course--', 'Mr.Tolora Chla', 'Reg B4', 'Monday   Thursday ', '', '', '10:30 AM', '11:20 AM'),
(44, 'Earth Science', '2013/14 GC (2006 EC)', '2nd', 'EARTH 1A', '--Select Course--', 'Mr. Abushi Zinaw', 'B221', 'Monday    Friday', '', '', '9:30 AM', '10:20 AM'),
(45, 'Mathematics', '2013/14 GC (2006 EC)', '2nd', 'MATH 1A', 'zzzz', 'Mr. Bereket Seyu', 'B16', 'Monday   Thursday ', '', '', '4:30 AM', '5:20 AM'),
(46, 'Physics', '2013/14 GC (2006 EC)', '2nd', 'PHY 1A', '--Select Course--', 'Mr. Iyasu Paulos', 'Reg B1', 'Monday  Wednesday  ', '', '', '2:30 AM', '3:20 AM'),
(47, 'Statistics', '2013/14 GC (2006 EC)', '2nd', 'STAT 1A', '--Select Course--', 'Mr. Mohammed Adem', 'Reg B4', '  Wednesday  ', '', '', '4:30 AM', '5:20 AM'),
(48, 'Antropology', '2013/14 GC (2006 EC)', '2nd', 'ANTRO 1A', '--Select Course--', 'Mr.Natnael D.', 'Reg B5', ' Tuesday   ', '', '', '5:30 AM', '6:20 AM'),
(49, 'Ethiopian Language and Litratu', '2013/14 GC (2006 EC)', '--Select s', 'AMHA 1A', '--Select Course--', 'Mr. Daniel Kebede', 'Reg B6', 'Monday    ', '', '', '3:30 AM', '4:20 AM'),
(50, 'Forign Language and Literature', '2013/14 GC (2006 EC)', '2nd', '--Select Year and section--', '--Select Course--', 'Mr. Abdulmejid Muteba', 'Reg B5', 'Monday  Wednesday  ', '', '', '2:30 AM', '3:20 AM'),
(51, 'Forign Language and Literature', '2013/14 GC (2006 EC)', '--Select s', '--Select Year and section--', '--Select Course--', 'Mr.Natnael D.', 'Reg A6', ' Tuesday   ', '', '', '9:30 AM', '10:20 AM'),
(52, 'Forign Language and Literature', '2013/14 GC (2006 EC)', '2nd', '--Select Year and section--', '--Select Course--', 'Mr. Etay Gittet', 'Reg B7', ' Tuesday Wednesday  ', '', '', '2:30 AM', '3:20 AM'),
(53, 'Professional Education', '2013/14 GC (2006 EC)', '2nd', '--Select Year and section--', '--Select Course--', 'Mr.Fitsum Kurabachew', 'Reg C6', 'Monday  Wednesday  ', '', '', '5:30 AM', '6:20 AM'),
(54, 'Geography', '2013/14 GC (2006 EC)', '2nd', 'GEO 1A', '--Select Course--', 'Mr. Adino Sisay', 'Reg B5', 'Monday    ', '', '', '10:30 AM', '11:20 AM'),
(55, 'History', '2013/14 GC (2006 EC)', '2nd', 'HIST 1A', '--Select Course--', 'Mr. Balachew Abeje', 'B118', ' Tuesday   ', '', '', '5:30 AM', '6:20 AM'),
(56, 'Sociology', '2013/14 GC (2006 EC)', '2nd', 'SOCIO 1A', '--Select Course--', 'Mr. Thomas Haile', 'Reg B5', 'Monday   Thursday ', '', '', '9:30 AM', '10:20 AM'),
(57, 'Afaraf', '2013/14 GC (2006 EC)', '2nd', 'AFA 1A', '--Select Course--', 'Mr.Yitayal Worku', 'Reg B9', 'Monday    ', '', '', '11:30 AM', '12:20 PM'),
(58, 'Civic and Ethical Education', '2013/14 GC (2006 EC)', '--Select s', 'CIV 1A', '--Select Course--', 'Mr. Adino Sisay', 'Reg C3', 'Monday    ', '', '', '9:30 AM', '10:20 AM'),
(59, 'Forign Language and Literature', '2013/14 GC (2006 EC)', '--Select s', 'ENG 3A', '--Select Course--', 'Mr.Jemal Abebe', 'Reg B6', 'Monday    ', '', '', '4:30 AM', '5:20 AM'),
(60, 'Law', '2013/14 GC (2006 EC)', '2nd', 'LAW 1A', '--Select Course--', 'Mr.Sewl Toyebo', 'Reg B6', ' Tuesday   ', '', '', '10:30 AM', '11:20 AM'),
(61, 'Clinical nursing', '2013/14 GC (2006 EC)', '2nd', 'CLIN 1A', '--Select Course--', 'Mr. Thomas Haile', 'Reg B10', 'Monday    ', '', '', '10:30 AM', '11:20 AM'),
(64, 'Veternay Medicine', '2013/14 GC (2006 EC)', '2nd', 'VETR 1A', '--Select Course--', 'Mr. Belayneh Haile', 'Reg C8', '   Thursday ', '', '', '9:30 AM', '12:20 PM'),
(65, 'Ethiopian Language and Litratu', '2013/14 GC (2006 EC)', '2nd', 'AMHA 1A', '--Select Course--', 'Mr. Anwar Mohammed Yimer', 'Reg A7', 'Monday    ', '', '', '1:30 AM', '2:20 AM'),
(66, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4B', 'cs422', 'Mr.Woldu W/Gebriel', 'B19', 'Monday   Thursday ', '', '', '2:30 AM', '3:20 AM'),
(67, 'Information Technology', '2013/14 GC (2006 EC)', '2nd', 'IT 2A', '--Select Course--', 'Ms. Sityna Akmel', 'B16', 'Monday   Thursday ', '', '', '1:30 AM', '2:20 AM'),
(68, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs451', 'Mr. Aregaw Abera', 'B18', 'Monday Tuesday   ', '', '', '11:30 AM', '12:20 PM'),
(69, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs451', 'Mr. Aregaw Abera', 'B18', 'Monday Tuesday   ', '', '', '11:30 AM', '12:20 PM'),
(90, 'Computer Science', '2013/14 GC (2006 EC)', '1st', 'CS 1B', 'cs451', 'Mr.kumneger Zewdu', 'B11', ' Tuesday Wednesday  ', '', '', '1:30 AM', '2:20 AM'),
(88, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 1A', 'cs212', 'Mr. Bushira Badhaso', 'B18', 'Monday Tuesday Wednesday Thursday Friday', '', '', '1:30 AM', '2:20 AM'),
(89, 'Computer Science', '2013/14 GC (2006 EC)', '1st', 'CS 1B', 'cs451', 'Mr.kumneger Zewdu', 'B11', 'Monday  Wednesday  ', '', '', '1:30 AM', '2:20 AM'),
(73, '', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs432', 'Mr. Anwar Mohammed Yimer', 'B116', 'Monday      ', '', '', '5:30 AM', '6:20 AM'),
(74, '', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs432', 'Mr. Anwar Mohammed Yimer', 'B16', 'Monday      ', '', '', '5:30 AM', '6:20 AM'),
(75, '', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs432', 'Mr. Anwar Mohammed Yimer', 'B16', 'Monday    ', '', '', '5:30 AM', '6:20 AM'),
(91, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 1B', 'cs451', 'Mr.kumneger Zewdu', 'B11', 'Monday  Wednesday  ', '', '', '1:30 AM', '2:20 AM'),
(92, 'Computer Science', '2013/14 GC (2006 EC)', '1st', 'CS 1B', 'cs451', 'Mr.kumneger Zewdu', 'B119', 'Monday  Wednesday  ', '', '', '1:30 AM', '2:20 AM'),
(93, 'Computer Science', '2013/14 GC (2006 EC)', '1st', 'CS 3A', 'cs451', 'Mr. G/Egziabher Tsegay', 'B119', 'Monday  Wednesday  ', '', '', '1:30 AM', '2:20 AM'),
(95, 'Computer Science', '2013/14 GC (2006 EC)', '1st', 'CS 3A', 'cs451', 'Mr. G/Egziabher Tsegay', 'B119', 'Monday  Wednesday  ', '', '', '1:30 AM', '2:20 AM'),
(96, 'Computer Science', '2013/14 GC (2006 EC)', '1st', 'CS 2A', 'cs441', 'Ms. Rosi', 'Reg A1', 'Monday Tuesday Wednesday Thursday Friday', '', '', '10:30 AM', '11:20 AM'),
(82, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs432', 'Mr. Anwar Mohammed Yimer', 'B16', 'Monday Tuesday Wednesday Thursday Friday', '', '', '5:30 AM', '6:20 AM'),
(83, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 3A', 'cs451', 'Mr.Shishay Giirmay', 'B18', 'Monday Tuesday  Thursday ', '', '', '11:30 AM', '12:20 PM'),
(84, '--Select--', '2013/14 GC (2006 EC)', '--Select--', '--Select--', '--Select--', '--Select--', '--Select--', '    ', '', '', '--Select--', '--Select--'),
(97, 'Computer Science', '2013/14 GC (2006 EC)', '1st', 'CS 2A', 'cs441', 'Mr. Germay', 'Reg A10', 'Monday Tuesday Wednesday Thursday Friday', '', '', '10:30 AM', '11:20 AM'),
(86, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 3A', 'cs422', 'Mr.Shishay Giirmay', 'B18', 'Monday  Wednesday  ', '', '', '1:30 AM', '2:20 AM'),
(87, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 3A', 'cs422', 'Mr.Shishay Giirmay', 'B18', 'Monday  Wednesday  ', '', '', '1:30 AM', '2:20 AM'),
(102, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs421', 'Mr. G/Egziabher Tsegay', 'Reg C7', 'Monday Tuesday Wednesday Thursday Friday', '', '', '5:30 AM', '6:20 AM'),
(99, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs322', 'Mr. Solomon.G', 'Reg C1', 'Monday Tuesday Wednesday Thursday Friday', '', '', '3:30 AM', '4:20 AM'),
(103, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs421', 'Ms. Mulubrehan Hailay', 'Reg C6', 'Monday Tuesday Wednesday Thursday Friday', '', '', '5:30 AM', '6:20 AM'),
(101, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs424', 'Ms. Mulubrehan Hailay', 'B16', 'Monday  Wednesday  ', '', '', '9:30 AM', '11:20 AM'),
(104, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 3A', 'cs421', 'Mr. Abel Damtew', 'Reg C8', 'Monday  Wednesday  Friday', '', '', '5:30 AM', '6:20 AM'),
(107, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs424', 'Ms. Tsadu zeray', 'B28', '   Thursday ', '', '', '10:30 AM', '11:20 AM'),
(108, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs5xx', 'Mr. Tesfahun G.', 'Reg B3', ' Tuesday Wednesday  ', '', '', '9:30 AM', '10:20 AM'),
(109, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', '--Select--', 'cs341', 'Mr.Sami', 'B114', 'Monday Tuesday Wednesday Thursday Friday', '', '', '5:30 AM', '6:20 AM'),
(110, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 2B', 'cs341', 'Mr.Timketab', 'B18', 'Monday Tuesday Wednesday Thursday Friday', '', '', '5:30 AM', '6:20 AM'),
(111, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 2A', 'cs341', 'Mr.wasihun', 'B210', 'Monday Tuesday Wednesday Thursday Friday', '', '', '5:30 AM', '6:20 AM'),
(120, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs422', 'Ms. Tsadu zeray', 'B28', '   Thursday ', '', '', '10:30 AM', '11:20 AM'),
(121, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs422', 'Ms. Tsadu zeray', 'B28', '   Thursday ', '', '', '10:30 AM', '11:20 AM'),
(122, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs422', 'Ms. Tsadu zeray', 'B28', '   Thursday ', '', '', '10:30 AM', '11:20 AM'),
(119, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'MGMT422', 'Mr. Bushira Badhaso', 'Reg B12', 'Monday Tuesday Wednesday Thursday Friday', '', '', '2:30 AM', '3:20 AM'),
(124, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs422', 'Ms. Tsadu zeray', 'B28', 'Monday Tuesday Wednesday Thursday Friday', '', '', '10:30 AM', '11:20 AM'),
(125, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs422', 'Ms. Kalkidan Abebe', 'B27', '  Wednesday  Friday', '', '', '5:30 AM', '6:20 AM'),
(126, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 2B', 'cs422', 'Mr. Solomon.G', 'B26', '  Wednesday  Friday', '', '', '5:30 AM', '6:20 AM'),
(127, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs422', 'Mr. Biset Dessalegn', 'B28', '  Wednesday  Friday', '', '', '5:30 AM', '6:20 AM'),
(128, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs422', 'Mr. Biset Dessalegn', 'B28', '    Friday', '', '', '9:30 AM', '10:20 AM'),
(129, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs422', 'Mr. Ahmed Adem (Ani)', 'B29', '    Friday', '', '', '5:30 AM', '6:20 AM'),
(130, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4B', 'cs441', 'Mr. Abel Damtew', 'B217', 'Monday    ', '', '', '2:30 AM', '3:20 AM'),
(133, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs582', 'Ms. Mulubrehan Hailay', 'B113', '    Friday', '', '', '4:30 AM', '5:20 AM'),
(158, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs432', 'Mr. Ahmed Adem (Ani)', 'B18', 'Monday Tuesday Wednesday Thursday Friday', '', '', '3:30 AM', '5:20 AM'),
(154, '--Select--', '2013/14 GC (2006 EC)', '--Select--', '--Select--', '--Select--', '--Select--', '--Select--', '    ', '', '', '--Select--', '--Select--'),
(145, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4B', 'cs441', 'Mr. Amare Berhe', 'B213', '  Wednesday  ', '', '', '1:30 AM', '2:20 AM'),
(151, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 2A', 'cs212', 'Mr. Abreha H.', 'B17', 'Monday  Wednesday  Friday', '', '', '1:30 AM', '2:20 AM'),
(152, 'Information Technology', '2013/14 GC (2006 EC)', '2nd', 'IT 1A', 'It202', 'Mr. Kinfu Kene', 'B18', 'Monday Tuesday   ', '', '', '3:30 AM', '4:20 AM'),
(163, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs553', 'Mr.Sami', 'B114', ' Tuesday  Thursday ', '', '', '4:30 AM', '5:20 AM'),
(164, '--Select--', '2013/14 GC (2006 EC)', '--Select--', '--Select--', '--Select--', '--Select--', '--Select--', '    ', '', '', '--Select--', '--Select--'),
(167, 'Computer Science', '2013/14 GC (2006 EC)', '2nd', 'CS 4A', 'cs441', 'Mr. Iyasu Paulos', 'B117', 'Monday    ', '', '', '5:30 AM', '6:20 AM');

-- --------------------------------------------------------

--
-- Table structure for table `time_end`
--

CREATE TABLE IF NOT EXISTS `time_end` (
  `time_end_id` int(11) NOT NULL AUTO_INCREMENT,
  `time_end` varchar(30) NOT NULL,
  PRIMARY KEY (`time_end_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `time_end`
--

INSERT INTO `time_end` (`time_end_id`, `time_end`) VALUES
(1, '2:20 AM'),
(2, '3:20 AM'),
(3, '4:20 AM'),
(4, '5:20 AM'),
(5, '6:20 AM'),
(6, '10:20 AM'),
(7, '11:20 AM'),
(8, '12:20 PM');

-- --------------------------------------------------------

--
-- Table structure for table `time_start`
--

CREATE TABLE IF NOT EXISTS `time_start` (
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  `time_start` varchar(20) NOT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `time_start`
--

INSERT INTO `time_start` (`time_id`, `time_start`) VALUES
(1, '1:30 AM'),
(2, '2:30 AM'),
(3, '3:30 AM'),
(4, '4:30 AM'),
(5, '5:30 AM'),
(11, '9:30 AM'),
(12, '10:30 AM'),
(13, '11:30 AM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `faculity` varchar(20) NOT NULL,
  `department` varchar(30) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `security_q` varchar(100) NOT NULL,
  `security_a` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_name`, `password`, `email`, `faculity`, `department`, `user_type`, `security_q`, `security_a`) VALUES
(25, 'Mr. Hayelachew', 'Tessema', 'hayelachew', 'hayelachew', '', 'Coputer science', '', 'Admin', '', ''),
(44, 'Abdul hamid', 'Nesru', 'lopp', 'lopp', 'hamidmebri@yahoo.com', '', 'Computer scines', 'Admin', '2. Where you spend your childhood time?', 'gerji'),
(39, 'fff', 'fff', 'fff', 'fff', 'fff@fff', 'hhhh', 'Computer scines', 'Admin', 'fff', 'fff'),
(18, 'seada', 'abdu', 'seada', '090909', '', 'Plant', '', 'Admin', '', ''),
(37, 'rtrtrtrt', 'rtrtrtr', 'eeeee', 'eeeee', 'rtrtrtr@jj', 'hhhh', 'Computer scines', 'Admin', 'what is ur name?', 'mebri'),
(50, 'mmmm', 'mmmm', 'mmm', 'mmm', 'mmm@hh', '', 'Plant Science', 'User', '1. What is your beloved ancle name?', 'mmm'),
(42, 'bbb', 'bbb', 'bbb', 'bbb', 'bbb@bbb', '', 'Computer scines', 'User', '1. What is your beloved ancle name?', 'amina'),
(43, 'buze', 'zeleke', 'buze', 'buze', 'buze@buze.com', '', 'Computer scines', 'Admin', '2. Where you spend your childhood time?', 'hirna'),
(45, 'aaaaaa', 'aaaaaaa', 'abab', 'abab', 'aaa@aaa', '', 'Computer scines', 'Admin', '1. What is your beloved ancle name?', 'amina'),
(46, 'hamid', 'mebri', 'hamidmebri', 'hamidmebri', 'hamidmebri@yahoo.com', '', 'Computer Science', 'User', '1. What is your beloved ancle name?', 'mami'),
(47, 'Abdul hamid', 'Nesru', 'loppp', 'loppp', 'hamdimebri@my.com', '', 'Computer Science', 'User', '1. What is your beloved ancle name?', 'mami'),
(48, 'Abdul hamid', 'Nesru', 'loopp', 'lopp', 'hamdimebri@my.com', '', 'Computer Science', 'User', '1. What is your beloved ancle name?', 'mami'),
(49, 'Abdul hamid', 'Nesru', 'loooppp', 'lopp', 'hamidmebri@yahoo.com', '', 'Computer Science', 'Scheduler', '1. What is your beloved ancle name?', 'amina'),
(51, 'wewe', 'ewew', 'wewe', 'wew', 'wetwret@dfdf', '', 'Earth Science', 'User', '1. What is your beloved ancle name?', 'wewe'),
(52, 'Dawit', 'Milkiyas', 'dave', 'dave', 'dave@gmail.com', '', 'Computer Science', 'Admin', '2. Where you spend your childhood time?', 'Nekemt');

-- --------------------------------------------------------

--
-- Table structure for table `year_section`
--

CREATE TABLE IF NOT EXISTS `year_section` (
  `year_section_id` int(11) NOT NULL AUTO_INCREMENT,
  `year_section` varchar(30) NOT NULL,
  `department` varchar(100) NOT NULL,
  `no_of_student` int(30) NOT NULL,
  PRIMARY KEY (`year_section_id`),
  UNIQUE KEY `year_section` (`year_section`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

--
-- Dumping data for table `year_section`
--

INSERT INTO `year_section` (`year_section_id`, `year_section`, `department`, `no_of_student`) VALUES
(12, 'CS 2B', 'Computer Science', 35),
(9, 'CS 1A', 'Computer Science', 46),
(10, 'CS 1B', 'Computer Science', 47),
(11, 'CS 2A', 'Computer Science', 35),
(13, 'CS 3A', 'Computer Science', 34),
(14, 'CS 3B', 'Computer Science', 35),
(15, 'CS 4A', 'Computer Science', 29),
(16, 'CS 4B', 'Computer Science', 30),
(19, 'IT 1A', 'Information Technology', 29),
(18, 'IT 2A', 'Information Technology', 25),
(20, 'CIV ENG 1A', 'Civil Engineering', 25),
(21, 'CIV ENG 1B', 'Civil Engineering', 28),
(24, 'CIV ENG 1C', 'Civil Engineering', 30),
(25, 'CIV ENG 1D', 'Civil Engineering', 40),
(26, 'CIV ENG 1E', 'Civil Engineering', 40),
(27, 'CIV ENG 1F', 'Civil Engineering', 40),
(28, 'CIV ENG 2A', 'Civil Engineering', 29),
(29, 'CIV ENG 2B', 'Civil Engineering', 29),
(30, 'CHEM ENG 1A', 'Chemical Engineering', 40),
(31, 'CHEM ENG 1B', 'Chemical Engineering', 40),
(32, 'CHEM ENG 1C', 'Chemical Engineering', 42),
(33, 'CHEM ENG 2A', 'Chemical Engineering', 19),
(34, 'CHEM ENG 3A', 'Chemical Engineering', 23),
(35, 'ELEC ENG 1A', 'Electrical Engineering', 57),
(36, 'MECH ENG 1A', 'Mechanical Engineering', 36),
(37, 'ACC 1A', 'Accounting', 35),
(38, 'ACC 1B', 'Accounting', 43),
(39, 'ACC 1C', 'Accounting', 34),
(40, 'ACC 2A', 'Accounting', 46),
(41, 'ACC 2B', 'Accounting', 44),
(42, 'ACC 3A', 'Accounting', 41),
(44, 'ACC 3B', 'Accounting', 41),
(45, 'ECO 1A', 'Economics', 33),
(46, 'ECO 1B', 'Economics', 33),
(47, 'ECO 1C', 'Economics', 33),
(48, 'ECO 2A', 'Economics', 49),
(49, 'ECO 3A', 'Economics', 40),
(50, 'ECO 3B', 'Economics', 50),
(51, 'MGT 1A', 'Management', 45),
(52, 'MGT 1B', 'Management', 45),
(53, 'MGT 1C', 'Management', 48),
(54, 'MGT 1D', 'Management', 46),
(55, 'MGT 2A', 'Management', 38),
(56, 'MGT 2B', 'Management', 41),
(57, 'MGT 2C', 'Management', 46),
(58, 'MGT 3A', 'Management', 57),
(59, 'MGT 3B', 'Management', 56),
(60, 'NRM 1A', 'Natural Resource Management', 23),
(61, 'NRM 1B', 'Natural Resource Management', 29),
(62, 'NRM 2A', 'Natural Resource Management', 35),
(63, 'NRM 2B', 'Natural Resource Management', 40),
(64, 'NRM 3A', 'Natural Resource Management', 28),
(65, 'NRM 3B', 'Natural Resource Management', 35),
(66, 'HOR 1A', 'Horticulture', 44),
(67, 'HOR 2A', 'Horticulture', 35),
(68, 'HOR 2B', 'Horticulture', 35),
(69, 'HOR 3A', 'Horticulture', 31),
(70, 'ANIM 1A', 'Animal Science', 32),
(71, 'ANIM 2A', 'Animal Science', 35),
(72, 'ANIM 2B', 'Animal Science', 38),
(73, 'ANIM 3A', 'Animal Science', 35),
(74, 'PLAN 1A', 'Plant Science', 40),
(75, 'PLAN 1B', 'Plant Science', 38),
(76, 'PLAN 2A', 'Plant Science', 59),
(77, 'PLAN 3A', 'Plant Science', 42),
(78, 'BIO 1A', 'Biology', 30),
(79, 'BIO 1B', 'Biology', 27),
(80, 'BIO 2A', 'Biology', 33),
(81, 'BIO 2B', 'Biology', 36),
(82, 'BIO 3A', 'Biology', 37),
(83, 'BIO 3B', 'Biology', 44),
(84, 'CHEMIS 1A', 'Chemistry', 29),
(85, 'CHEMIS 2A', 'Chemistry', 31),
(86, 'CHEMIS 3A', 'Chemistry', 31),
(87, 'CHEMIS 3B', 'Chemistry', 27),
(88, 'EARTH 1A', 'Earth Science', 33),
(89, 'EARTH 2A', 'Earth Science', 38),
(90, 'EARTH 3A', 'Earth Science', 30),
(91, 'MATH 1A', 'Mathematics', 22),
(92, 'MATH 2A', 'Mathematics', 33),
(93, 'MATH 3A', 'Mathematics', 44),
(94, 'STAT 1A', 'Statistics', 28),
(95, 'STAT 2A', 'Statistics', 38),
(96, 'STAT 2B', 'Statistics', 40),
(97, 'PHY 1A', 'Physics', 16),
(98, 'PHY 2A', 'Physics', 22),
(99, 'ANTRO 1A', 'Antropology', 49),
(100, 'ANTRO 2A', 'Antropology', 39),
(101, 'ANTRO 3A', 'Antropology', 20),
(102, 'AMHA 1A', 'Ethiopian Language and Litrature(Amharic)', 47),
(103, 'AMHA 2A', 'Ethiopian Language and Litrature(Amharic)', 37),
(104, 'ENG 1A', 'Forign Language and Literature', 39),
(105, 'ENG 2A', 'Forign Language and Literature', 27),
(106, 'ENG 3A', 'Forign Language and Literature', 18),
(107, 'GEO 1A', 'Geography', 50),
(108, 'GEO 2A', 'Geography', 34),
(109, 'GEO 2B', 'Geography', 34),
(110, 'GEO 3A', 'Geography', 33),
(111, 'HIST 1A', 'History', 34),
(112, 'HIST 2A', 'History', 31),
(113, 'SOCIO 1A', 'Sociology', 48),
(114, 'SOCIO 1B', 'Sociology', 47),
(115, 'SOCIO 2A', 'Sociology', 32),
(116, 'SOCIO 2B', 'Sociology', 30),
(117, 'SOCIO 3A', 'Sociology', 28),
(118, 'SOCIO 3B', 'Sociology', 33),
(119, 'AFA 1A', 'Afaraf', 46),
(120, 'CIV 1A', 'Civic and Ethical Education', 57),
(121, 'LAW 1A', 'Law', 39),
(122, 'LAW 2A', 'Law', 29),
(123, 'CLIN 1A', 'Clinical nursing', 40),
(124, 'CLIN 2A', 'Clinical nursing', 50),
(125, 'CLIN 3A', 'Clinical nursing', 35),
(126, 'MIDWI 1A', 'Midwifery', 32),
(127, 'MIDWI 2A', 'Midwifery', 28),
(128, 'HO 1A', 'Public Health Officer', 43),
(129, 'HO 2A', 'Public Health Officer', 48),
(130, 'VETR 1A', 'Veternay Medicine', 39),
(131, 'VETR 2A', 'Veternay Medicine', 37),
(132, 'VETR 3A', 'Veternay Medicine', 28);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
