-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 04 2014 г., 22:13
-- Версия сервера: 5.5.16
-- Версия PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `alpchase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `system_countries`
--

CREATE TABLE IF NOT EXISTS `system_countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(60) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `system_countries`
--

INSERT INTO `system_countries` (`country_id`, `country_name`) VALUES
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
-- Структура таблицы `system_podservice`
--

CREATE TABLE IF NOT EXISTS `system_podservice` (
  `podservice_id` int(11) NOT NULL AUTO_INCREMENT,
  `podservice_name` int(11) NOT NULL,
  PRIMARY KEY (`podservice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `system_services`
--

CREATE TABLE IF NOT EXISTS `system_services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(60) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users_customers`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users_customers`
--

INSERT INTO `users_customers` (`quest_date`, `customer_id`, `customer_name`, `customer_surn`, `customer_midd`, `customer_email`, `customer_pass`, `customer_form`, `customer_primaryphone`, `customer_additphone`, `customer_duty`, `customer_city`, `customer_country`, `customer_actuality`, `customer_questions`, `customer_compname`) VALUES
('26.04.14', 1, 'Фёдор', 'Иванов', 'Викторович', 'test1@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'Частное лицо', '4991234536', '9031234567', 'Частное лицо', 'Москва', 'Россия', '1 день', 'Вопрос по услуге', ''),
('10.03.14', 2, 'Иван', 'Антонов', 'Андреевич', 'test2@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'Юрлицо', '499234823484', '903234234234', 'Директор', 'Баку', 'Азербайджан', '1 год', 'Вопрос по сервису', 'Опельниссан'),
('31.07.14', 3, 'Марат', 'Купустин', 'Александрович', 'test3@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'Юрлицо', '499123123', '903234324234', 'Директор', 'Ереван', 'Армения', '1 день', 'Вопрос по услуге', 'Ящикпандоры');

-- --------------------------------------------------------

--
-- Структура таблицы `users_managers`
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
-- Дамп данных таблицы `users_managers`
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
