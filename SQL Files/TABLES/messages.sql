-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2016 at 03:19 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `breadume`
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
