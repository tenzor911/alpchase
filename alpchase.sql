-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2014 at 03:27 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alpchase`
--

-- --------------------------------------------------------

--
-- Table structure for table `system_countries`
--

CREATE TABLE IF NOT EXISTS `system_countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(60) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `system_podservice`
--

CREATE TABLE IF NOT EXISTS `system_podservice` (
  `podservice_id` int(11) NOT NULL AUTO_INCREMENT,
  `podservice_name` int(11) NOT NULL,
  PRIMARY KEY (`podservice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `system_services`
--

CREATE TABLE IF NOT EXISTS `system_services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(60) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_customers`
--

CREATE TABLE IF NOT EXISTS `users_customers` (
  `quest_date` varchar(60) NOT NULL,
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(60) NOT NULL,
  `customer_surn` varchar(60) NOT NULL,
  `customer_midd` varchar(60) NOT NULL,
  `customer_email` varchar(60) NOT NULL,
  `customer_pass` varchar(40) NOT NULL,
  `customer_form` varchar(60) NOT NULL,
  `customer_primaryphone` varchar(20) NOT NULL,
  `customer_additphone` varchar(20) NOT NULL,
  `customer_duty` varchar(60) NOT NULL,
  `customer_city` varchar(60) NOT NULL,
  `customer_country` varchar(60) NOT NULL,
  `customer_actuality` varchar(20) NOT NULL,
  `customer_questions` varchar(3000) NOT NULL,
  `customer_compname` varchar(60) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_managers`
--

CREATE TABLE IF NOT EXISTS `users_managers` (
  `um_id` int(11) NOT NULL AUTO_INCREMENT,
  `um_login` varchar(40) NOT NULL,
  `um_pass` varchar(40) NOT NULL,
  `um_email` varchar(40) NOT NULL,
  `um_role` varchar(10) NOT NULL,
  PRIMARY KEY (`um_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users_managers`
--

INSERT INTO `users_managers` (`um_id`, `um_login`, `um_pass`, `um_email`, `um_role`) VALUES
(1, 'admin_test', '22c14f311a60486b36f79f3bc962be66', 'tradebox@inbox.ru', 'admin'),
(8, '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(9, 'tenzor', '22c14f311a60486b36f79f3bc962be66', 'toolbar@nm.ru', 'user'),
(10, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'braindead@bk.ru', 'admin'),
(11, 'test', '098f6bcd4621d373cade4e832627b4f6', 'tema@tema.ru', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
