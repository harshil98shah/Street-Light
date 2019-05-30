-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2019 at 06:25 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streetlight`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

DROP TABLE IF EXISTS `admin_table`;
CREATE TABLE IF NOT EXISTS `admin_table` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `email_id`, `password`) VALUES
(1, 'amc@gmail.com', 'amcstreet');

-- --------------------------------------------------------

--
-- Table structure for table `area_table`
--

DROP TABLE IF EXISTS `area_table`;
CREATE TABLE IF NOT EXISTS `area_table` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(20) NOT NULL,
  `is_active` int(2) NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_table`
--

INSERT INTO `area_table` (`area_id`, `area_name`, `is_active`) VALUES
(1, 'south', 1),
(3, 'north', 1),
(4, 'west', 1);

-- --------------------------------------------------------

--
-- Table structure for table `common_problems`
--

DROP TABLE IF EXISTS `common_problems`;
CREATE TABLE IF NOT EXISTS `common_problems` (
  `com_prob_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_prob_name` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`com_prob_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `common_problems`
--

INSERT INTO `common_problems` (`com_prob_id`, `com_prob_name`, `is_active`) VALUES
(1, 'blub broken', 1),
(2, 'Dim light', 1),
(3, 'Pole Bend', 1),
(4, 'Bulb not working', 1),
(5, 'short circuit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `complaint_table`
--

DROP TABLE IF EXISTS `complaint_table`;
CREATE TABLE IF NOT EXISTS `complaint_table` (
  `complaint_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pole_number` int(11) NOT NULL,
  `com_prob_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`complaint_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_table`
--

INSERT INTO `complaint_table` (`complaint_id`, `user_id`, `pole_number`, `com_prob_name`, `description`, `status`, `is_active`) VALUES
(1, 1, 7, 'short circuit', 'Rain problem', 25, 1),
(2, 1, 4, 'Dim light', 'Happening since last 7 days', 25, 1),
(3, 1, 5, 'Pole Bend', 'Accident happened last night', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comp_assign_table`
--

DROP TABLE IF EXISTS `comp_assign_table`;
CREATE TABLE IF NOT EXISTS `comp_assign_table` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `complaint_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`comp_id`),
  KEY `complaint_id` (`complaint_id`),
  KEY `id` (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_assign_table`
--

INSERT INTO `comp_assign_table` (`comp_id`, `user_id`, `complaint_id`, `id`, `is_active`) VALUES
(1, 1, 1, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(20) NOT NULL AUTO_INCREMENT,
  `complaint_id` varchar(20) NOT NULL,
  `description` varchar(150) NOT NULL,
  `user_id` int(20) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `complaint_id`, `description`, `user_id`) VALUES
(1, '1', 'good', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pole_table`
--

DROP TABLE IF EXISTS `pole_table`;
CREATE TABLE IF NOT EXISTS `pole_table` (
  `pole_id` int(11) NOT NULL AUTO_INCREMENT,
  `pole_char` varchar(20) NOT NULL,
  `pole_int` int(5) NOT NULL,
  `area_name` varchar(30) NOT NULL,
  `ward_name` varchar(30) NOT NULL,
  `pole_add` varchar(100) NOT NULL,
  `asset_type` varchar(30) NOT NULL,
  `bracket_type` varchar(50) NOT NULL,
  `lamp_type` varchar(30) NOT NULL,
  `longitude` decimal(9,6) NOT NULL,
  `latitude` decimal(9,6) NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`pole_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pole_table`
--

INSERT INTO `pole_table` (`pole_id`, `pole_char`, `pole_int`, `area_name`, `ward_name`, `pole_add`, `asset_type`, `bracket_type`, `lamp_type`, `longitude`, `latitude`, `is_active`) VALUES
(1, 'VM', 2066, '3', '2', 'parimal', 'street Lighting', 'single', '06 w', '23.025750', '72.559025', 1),
(2, 'zw', 1166, '1', '2', 'relief road', 'street Lighting', 'single', '06 w', '23.020504', '72.554818', 1),
(3, 'zw', 1156, '3', '2', 'opp garden', 'street Lighting', 'double', '12 w', '23.021408', '72.554840', 1),
(4, 'nw', 2326, '4', '2', 'near garden', 'street Lighting', 'three', '18 w', '23.021906', '72.555569', 1),
(5, 'gr', 8987, '3', '2', 'inside the park', 'street Lighting', 'double', '12 w', '23.022262', '72.556009', 1),
(6, 'dr', 6465, '1', '2', 'beside the park', 'street Lighting', 'three', '18 w', '23.021566', '72.555044', 1),
(7, 'ad', 1222, '4', '2', 'parimal', 'street Lighting', 'double', '12 w', '23.021403', '72.554781', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `is_active` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `phone`, `is_active`) VALUES
(1, 'ravi', '+917990365825', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ward_name_table`
--

DROP TABLE IF EXISTS `ward_name_table`;
CREATE TABLE IF NOT EXISTS `ward_name_table` (
  `ward_id` int(11) NOT NULL AUTO_INCREMENT,
  `ward_name` varchar(20) NOT NULL,
  `area_id` int(11) NOT NULL,
  `is_active` int(2) NOT NULL,
  PRIMARY KEY (`ward_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward_name_table`
--

INSERT INTO `ward_name_table` (`ward_id`, `ward_name`, `area_id`, `is_active`) VALUES
(1, 'kalupur', 1, 1),
(2, 'Parimal Garden', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `worker_table`
--

DROP TABLE IF EXISTS `worker_table`;
CREATE TABLE IF NOT EXISTS `worker_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_table`
--

INSERT INTO `worker_table` (`id`, `name`, `mobile`, `email_id`, `worker_id`, `type`, `is_active`) VALUES
(1, 'amal', 8469571006, 'amal@gmail.com', 1064, 'Electrician', 1),
(2, 'harshil', 9586095789, 'harshil98shah@gmail.com', 123, 'Civil', 1),
(3, 'ravi', 9978859141, 'ravi@gmail.com', 25, 'Line Tester', 1),
(4, 'yash', 8980496566, 'yash@gmail.com', 55, 'Line Tester', 1),
(5, 'aayush', 8980898141, 'aayush@gmail.com', 66, 'Line Tester', 1),
(6, 'sajo', 9409079139, 'sajo@gmail.com', 77, 'Civil', 1),
(7, 'vidhi', 8320450148, 'vidhi@gmail.com', 99, 'Civil', 0),
(8, 'jaymin', 7405755503, 'jaymin@gmail.com', 102, 'Electrician', 1),
(9, 'janki', 9925697396, 'janki@gmail.com', 302, 'Electrician', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
