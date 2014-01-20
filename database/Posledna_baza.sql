-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2014 at 12:01 AM
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(200) DEFAULT NULL,
  `sodrzina` varchar(200) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id` (`users_id`),
  KEY `users_id_2` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `naslov`, `sodrzina`, `users_id`) VALUES
(11, 'hfalhgh', 'sGHjmk', 0),
(12, 'rwtayesuik', 'rtyeusrdio', 0),
(13, 'dcfvgbhjnk', 'fghjkl;', 14),
(14, 'sadsfhfj', 'dfszdghxfjgh,j', 14),
(15, 'fegshj', 'tgeyui', 0),
(16, 'fegshj', 'tgeyui', 0),
(17, 'fegshj', 'tgeyui', 0),
(18, 'ASDSFDHJ', 'FSGZDHJK', 0),
(19, 'vhkbjlk', 'vgbhjnk', 14),
(20, 'hjko;lp;pl', ';kk[[k[', 15),
(21, '', '', 15),
(22, 'dsvdsd', 'dsbn ', 15),
(23, 'vgrbfntm', 'rnjnm,', 15),
(24, 'vgrbfntm', 'rnjnm,', 15),
(25, 'dwfbh', 'ehwjek', 15),
(26, 'fasbN', 'aGBN', 0),
(27, 'fasbN', 'aGBN', 0),
(28, 'fasbN', 'aGBN', 0),
(29, 'fasbN', 'aGBN', 0),
(30, 'fasbN', 'aGBN', 0),
(31, 'fasbN', 'aGBN', 0),
(32, 'fasbN', 'aGBN', 0),
(33, 'fasbN', 'aGBN', 0),
(34, 'wwwww', 'erdssf', 0),
(35, 'wwwww', 'erdssf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tema`
--

CREATE TABLE IF NOT EXISTS `tema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

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
(22, 'asB'),
(23, 'tema saka');

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `post` (`users_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
