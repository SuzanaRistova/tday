-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2014 at 07:27 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tday`
--
CREATE DATABASE IF NOT EXISTS `tday` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tday`;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL,
  `naslov` varchar(200) DEFAULT NULL,
  `sodrzina` varchar(200) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `naslov`, `sodrzina`, `users_id`) VALUES
(0, 'fHJFF', 'HSJM', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tema`
--

CREATE TABLE IF NOT EXISTS `tema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tema`
--

INSERT INTO `tema` (`id`, `naslov`) VALUES
(1, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, 'suznaa'),
(11, 'TEMA add'),
(12, 'SEMEJSTVO'),
(13, ''),
(14, ''),
(15, ''),
(16, 'aertgshyr'),
(17, ''),
(18, ''),
(19, 'suzana'),
(20, 'suzana'),
(21, ''),
(22, 'asB');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `uname`, `email`, `pass`) VALUES
(3, 'suzana', 'ristova', 'suze', 'suzana@yahoo.com', '202cb962ac59075b964b07152d234b'),
(4, '', '', '', 'suzana@yahoo.com', '202cb962ac59075b964b07152d234b'),
(5, '', '', '', 'zance@yahoo.com', '202cb962ac59075b964b07152d234b'),
(6, 'zana', 'ristova', 'zance', 'zance@yahoo.com', '202cb962ac59075b964b07152d234b'),
(7, 'suzana', 'ristova', 'suzeee', 'zance@yahoo.com', '202cb962ac59075b964b07152d234b'),
(8, 'suzanaaa', 'ristova', 'suzance', 'suzana@yahoo.com', '202cb962ac59075b964b07152d234b'),
(9, 'sefg', 'xbzdnfmg,', 'zxdgbhjfck', 'suzana@yahoo.com', 'e10adc3949ba59abbe56e057f20f88'),
(10, 'Suzana', 'Ristova', 'suzana@yahoo.com', 'suzana@yahoo.com', '25f9e794323b453885f5181f1b624d'),
(11, 'afsgaa', 'gsahn', 'sghjnsm', 'suzana@yahoo.com', '25f9e794323b453885f5181f1b624d'),
(12, 'Stole', 'Ristov', 'Stole', 'zance@yahoo.com', '25f9e794323b453885f5181f1b624d'),
(13, 'ssgbhdn', 'dgzbhxjf', 'su', 'suzana@yahoo.com', '202cb962ac59075b964b07152d234b'),
(14, 'zivko', 'ristov', 'zivko', 'suzana@yahoo.com', '202cb962ac59075b964b07152d234b'),
(15, 'afsgdhxfjm', 'zsfgdhxjfc', 'fzsdghxjfcg', 'suzana@yahoo.com', '202cb962ac59075b964b07152d234b'),
(16, 'afsgdhxfjm', 'zsfgdhxjfc', 'mile', 'suzana@yahoo.com', '202cb962ac59075b964b07152d234b'),
(17, 'suzana', 'Ristova', 'suzanaa', 'suzana@yahoo.com', '202cb962ac59075b964b07152d234b70'),
(18, 'Suzana', 'Ristova', 'zane', 'suzana@yahoo.com', '202cb962ac59075b964b07152d234b70'),
(19, 'afgb', 'Ristova', 'dbhnsfmd', 'suzana@yahoo.com', '202cb962ac59075b964b07152d234b70'),
(20, 'afgb', 'Ristova', 'afsghd', 'suzana@yahoo.com', '202cb962ac59075b964b07152d234b70'),
(21, 'afgb', 'Ristova', 'afgshfndm', 'suzana@yahoo.com', '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
