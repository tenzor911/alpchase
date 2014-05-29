-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2014 at 05:15 PM
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
-- Table structure for table `order_basket`
--

CREATE TABLE IF NOT EXISTS `order_basket` (
  `customer_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `podservice_id` int(11) NOT NULL,
  KEY `country_id` (`country_id`),
  KEY `service_id` (`service_id`),
  KEY `podservice_id` (`podservice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_basket`
--

INSERT INTO `order_basket` (`customer_id`, `country_id`, `service_id`, `podservice_id`) VALUES
(0, 3, 0, 0),
(0, 10, 0, 0),
(0, 15, 0, 0),
(0, 8, 0, 0),
(0, 2, 0, 0),
(0, 7, 0, 0),
(0, 14, 0, 0),
(0, 15, 0, 0),
(0, 2, 0, 0),
(0, 7, 0, 0),
(0, 14, 0, 0),
(0, 15, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_con_serv`
--

CREATE TABLE IF NOT EXISTS `system_con_serv` (
  `country_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_con_serv`
--

INSERT INTO `system_con_serv` (`country_id`, `service_id`) VALUES
(0, 0),
(1, 0),
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 0),
(2, 1),
(2, 5),
(2, 6),
(3, 0),
(3, 1),
(3, 2),
(4, 0),
(4, 5),
(5, 0),
(5, 1),
(6, 0),
(6, 2),
(6, 3),
(7, 0),
(8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_countries`
--

CREATE TABLE IF NOT EXISTS `system_countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(60) CHARACTER SET cp1251 NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `system_countries`
--

INSERT INTO `system_countries` (`country_id`, `country_name`) VALUES
(0, 'страна не выбрана'),
(1, 'Россия'),
(2, 'Азербайджан'),
(3, 'Узбекистан'),
(4, 'Казахстан'),
(5, 'Таджикистан'),
(6, 'Туркменистан'),
(7, 'Украина'),
(8, 'Кыргыстан'),
(9, 'Латвия'),
(10, 'Беларусь'),
(11, 'Молдова'),
(12, 'Литва'),
(13, 'Армения'),
(14, 'Грузия'),
(15, 'Эстония');

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
  `service_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `system_services`
--

INSERT INTO `system_services` (`service_id`, `service_name`) VALUES
(0, 'услуга не назначена'),
(1, 'Регистрация ИП'),
(2, 'Регистрация ООО'),
(3, 'Бухгалтерия'),
(4, 'Регистрация авто'),
(5, 'Налоговый учёт'),
(6, 'Кадровый учёт'),
(7, 'Ликвидация');

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
  `quest_status` varchar(60) NOT NULL,
  `customer_notifyperiod` int(11) NOT NULL,
  `customer_position` varchar(60) DEFAULT NULL,
  `customer_answers` varchar(6000) DEFAULT NULL,
  `customer_knowabout` varchar(20) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users_customers`
--

INSERT INTO `users_customers` (`quest_date`, `customer_id`, `customer_name`, `customer_surn`, `customer_midd`, `customer_email`, `customer_pass`, `customer_form`, `customer_primaryphone`, `customer_additphone`, `customer_duty`, `customer_city`, `customer_country`, `customer_actuality`, `customer_questions`, `customer_compname`, `quest_status`, `customer_notifyperiod`, `customer_position`, `customer_answers`, `customer_knowabout`) VALUES
('26.04.14', 1, 'Фёдор', 'Иванов', 'Викторович', 'test1@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'Частное лицо', '4991234536', '9031234567', 'Частное лицо', 'Москва', 'Россия', '1 день', 'Вопрос по услуге', '', '', 0, NULL, NULL, ''),
('10.03.14', 2, 'Иван', 'Антонов', 'Андреевич', 'test2@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'Юрлицо', '499234823484', '903234234234', 'Директор', 'Баку', 'Азербайджан', '1 год', 'Вопрос по сервису', 'Опельниссан', '', 0, NULL, NULL, ''),
('31.07.14', 3, 'Марат', 'Купустин', 'Александрович', 'test3@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'Юрлицо', '499123123', '903234324234', 'Директор', 'Ереван', 'Армения', '1 день', 'Вопрос по услуге', 'Ящикпандоры', '', 0, NULL, NULL, ''),
('10.07.14', 4, 'Вадим', 'Максимов', 'Кириллович', 'test4@mail.ru', '11223344', 'физлицо', '4992357595', '9038585753', 'Петров Валерий', 'Харьков', 'Украина', '3', '', '', '', 0, NULL, NULL, ''),
('', 5, 'Петр', 'Петров', 'Петрович', '', '', '', '', '', '', '', '', '', '', '', '', 3, NULL, NULL, ''),
('05.12.14', 6, '?›?µ????????', '?‘?€?µ?¶???µ??', '???»?????‡', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, ''),
('05.12.14', 7, 'Ð’Ð»Ð°Ð´Ð¸Ð¼Ð¸Ñ€', 'Ð›ÐµÐ½Ð¸Ð½', 'Ð˜Ð»ÑŒÐ¸Ñ‡', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, ''),
('12.05.14', 8, 'Петр', 'Петров', 'Петрович', 'toolbar@nm.ru', 'b86a8490f3b2411045855fc3203b59ae', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, ''),
('12.05.14', 9, 'цукцку', 'цукцук', 'ыавыаыаыа', 'mail@mail.com', 'c441ac6f27ac0a5895f9996a3e5beecb', '', '3453453453', '53453452324', 'лицо', 'Москва', 'Россия', '', '', 'ымымыма', '', 0, NULL, NULL, ''),
('12.05.14', 10, 'Петр', 'Петров', 'Петрович', 'toolbar@nm.ru', 'b86a8490f3b2411045855fc3203b59ae', '', '2349438923432432', '3453453534534535', 'Дворник', 'Минск', 'Белоруссия', '', '', 'Фирма', 'извещён', 0, 'менеджер', NULL, ''),
('', 11, 'sdfsdf', 'sdf', 'sdf', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, ''),
('', 12, 'Александр', 'Пушкин', 'Сергеевич', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, ''),
('16.05.14', 13, 'dfgdg', 'dg', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, ''),
('21.05.14', 14, 'adsasd', '424', '24243', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, ''),
('29.05.14', 15, 'Имя', 'Фамилия', 'Отчество', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, ''),
('29.05.14', 16, 'Имя', 'Фамилия', 'Отчество', '', '', '', '', '', '', '', '', '', '', 'Организация', '', 0, 'Должность', NULL, ''),
('29.05.14', 17, 'Имя', 'Фамилия', 'Отчество', 'email@email.com', 'dc6d85e05f0d4f3c8727d3aed96d7232', '', '', '', '', '', '', '', '', 'Организация', '', 0, 'Должность', NULL, ''),
('29.05.14', 18, 'Имя', 'Фамилия', 'Отчество', 'email@email.com', 'dc6d85e05f0d4f3c8727d3aed96d7232', '', '1111111111111111', '2222222222222222', '', '', '', '', '', 'Организация', '', 0, 'Должность', NULL, ''),
('29.05.14', 19, 'Имя', 'Фамилия', 'Отчество', 'email@email.com', 'dc6d85e05f0d4f3c8727d3aed96d7232', '', '1111111111111111', '2222222222222222', '', 'Город', 'Страна', '', '', 'Организация', '', 0, 'Должность', NULL, ''),
('29.05.14', 20, 'Имя', 'Фамилия', 'Отчество', 'email@email.com', 'dc6d85e05f0d4f3c8727d3aed96d7232', '', '1111111111111111', '2222222222222222', 'Лицо', 'Город', 'Страна', '', '', 'Организация', '', 0, 'Должность', NULL, 'Интернет'),
('29.05.14', 21, 'Имя', 'Фамилия', 'Отчество', 'email@email.com', 'dc6d85e05f0d4f3c8727d3aed96d7232', '', '1111111111111111', '2222222222222222', 'Лицо', 'Город', 'Страна', '', 'Вопрос', 'Организация', '', 0, 'Должность', 'Ответ', 'Интернет'),
('29.05.14', 22, 'Имя', 'Фамилия', 'Отчество', 'email@email.com', 'dc6d85e05f0d4f3c8727d3aed96d7232', '', '1111111111111111', '2222222222222222', 'Лицо', 'Город', 'Страна', '', 'Вопрос', 'Организация', 'извещён', 0, 'Должность', 'Ответ', 'Интернет');

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
