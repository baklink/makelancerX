-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2017 at 10:40 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer_table`
--

CREATE TABLE IF NOT EXISTS `employer_table` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `employer_table`
--

INSERT INTO `employer_table` (`id`, `email`, `username`, `password`, `confirm_pass`) VALUES
(1, 'emmanumanu123@gmail.com', 'emma', 'emma', 'emma'),
(2, 'fava@gmail.com', 'fava', 'fava', 'fava'),
(3, '', '', '', ''),
(4, 'asds', 'asds', 'asds', 'asds'),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, 'hello', 'hello', 'hello', 'hello'),
(8, 'fasd', 'fasd', 'fasd', 'fasd'),
(9, '', '', '', ''),
(10, 'jai', 'jai', 'jai', 'jai'),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, 'jith', 'jith', 'jith', 'jith'),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, 'hello', 'hello', 'hello', 'hello'),
(23, 'yasispy@gmail.com', 'yasispy', 'pwdyasispy', 'pwdyasispy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
