-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2016 at 03:13 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE DATABASE IF NOT EXISTS `breadume`;
--
-- Database: `breadume`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `name` text NOT NULL,
  `userid` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`name`, `userid`, `id`, `time`) VALUES
('48047_248-Social-Media.docx', 'JOB576C85C1A5AB1', 3, '2016-06-24 08:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `userid` text NOT NULL,
  `title` text NOT NULL,
  `skills` text NOT NULL,
  `synopsis` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`userid`, `title`, `skills`, `synopsis`, `time`, `id`) VALUES
('REC576C716D25E77', 'Sys admin', 'C++,cooking,C', 'VIP only', '2016-06-24 04:01:37', 1),
('REC576C716D25E77', 'Python Dev', 'python,c++,cooking', 'Gany job', '2016-06-24 04:12:26', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userid` text NOT NULL,
  `type` char(1) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastlogin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `type`, `email`, `password`, `id`, `lastlogin`) VALUES
('REC576C716D25E77', 'R', 'cprganesh@gmail.com', 'af39f46eec8e261163cbebfd6961e554', 5, '2016-06-24 15:05:57'),
('JOB576C85C1A5AB1', 'J', '102113018@nitt.edu', 'af39f46eec8e261163cbebfd6961e554', 6, '2016-06-24 14:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `fromm` text NOT NULL,
  `to` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `message` mediumtext NOT NULL,
  `seen` int(11) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`fromm`, `to`, `time`, `message`, `seen`, `id`) VALUES
('JOB576C85C1A5AB1', 'REC576C716D25E77', '2016-06-24 07:52:25', 'http://localhost/breadwich/35940_143-Icon-Fun.docx\r\n\r\nhave fun', 1, 1),
('JOB576C85C1A5AB1', 'REC576C716D25E77', '2016-06-24 07:52:25', 'yo bro how are you', 1, 2),
('JOB576C85C1A5AB1', 'REC576C716D25E77', '2016-06-24 07:52:25', 'awdw', 1, 3),
('JOB576C85C1A5AB1', 'REC576C716D25E77', '2016-06-24 07:52:25', 'awdawd', 1, 4),
('JOB576C85C1A5AB1', 'REC576C716D25E77', '2016-06-24 07:52:25', 'http://localhost/breadwich/35940_143-Icon-Fun.docx\r\nawdawdaw', 1, 5),
('JOB576C85C1A5AB1', 'REC576C716D25E77', '2016-06-24 07:52:25', 'asdasdasd', 1, 6),
('JOB576C85C1A5AB1', 'REC576C716D25E77', '2016-06-24 07:52:25', 'awdwa', 1, 7),
('REC576C716D25E77', 'JOB576C85C1A5AB1', '2016-06-24 08:13:30', '\r\nhttp://localhost/breadwich/34461_142-What-a-Doll.docx\r\n\r\nbaali', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `recruiters`
--

CREATE TABLE IF NOT EXISTS `recruiters` (
  `userid` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `recruiters`
--

INSERT INTO `recruiters` (`userid`, `name`, `email`, `mobile`, `id`, `time`) VALUES
('REC576C716D25E77', 'Ganesh Raghavendran', 'cprganesh@gmail.com', '9790892234', 3, '2016-06-23 23:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `type` char(1) NOT NULL,
  `password` text NOT NULL,
  `declaration` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`name`, `mobile`, `email`, `type`, `password`, `declaration`, `time`, `id`) VALUES
('Ganesh Raghavendran', '9790892234', 'cprganesh@gmail.com', 'R', 'af39f46eec8e261163cbebfd6961e554', 1, '2016-06-23 23:31:57', 16),
('Ganesh Raghavendran', '9790892234', '102113018@nitt.edu', 'J', 'af39f46eec8e261163cbebfd6961e554', 1, '2016-06-24 00:58:41', 17);

-- --------------------------------------------------------

--
-- Table structure for table `seekers`
--

CREATE TABLE IF NOT EXISTS `seekers` (
  `userid` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `seekers`
--

INSERT INTO `seekers` (`userid`, `name`, `email`, `mobile`, `id`, `time`) VALUES
('JOB576C85C1A5AB1', 'Ganesh Raghavendran', '102113018@nitt.edu', '9790892234', 3, '2016-06-24 00:58:41');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `userid` text NOT NULL,
  `skill` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`userid`, `skill`, `time`, `id`) VALUES
('JOB576C85C1A5AB1', 'C++', '2016-06-24 03:20:03', 1),
('JOB576C85C1A5AB1', 'Cooking', '2016-06-24 03:20:16', 2),
('JOB576C85C1A5AB1', 'Web Designing', '2016-06-24 03:23:08', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
