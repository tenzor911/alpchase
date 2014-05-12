-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 12 2014 г., 23:45
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
-- Структура таблицы `order_basket`
--

CREATE TABLE IF NOT EXISTS `order_basket` (
  `customer_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `podservice_id` int(11) NOT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `country_id` (`country_id`),
  KEY `service_id` (`service_id`),
  KEY `podservice_id` (`podservice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `system_con_serv`
--

CREATE TABLE IF NOT EXISTS `system_con_serv` (
  `country_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `system_con_serv`
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
-- Структура таблицы `system_countries`
--

CREATE TABLE IF NOT EXISTS `system_countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(60) CHARACTER SET cp1251 NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `system_countries`
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
  `service_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `system_services`
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
  `quest_status` varchar(60) NOT NULL,
  `customer_notifyperiod` int(11) NOT NULL,
  `customer_position` varchar(60) DEFAULT NULL,
  `customer_answers` varchar(6000) DEFAULT NULL,
  `customer_knowabout` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `users_customers`
--

INSERT INTO `users_customers` (`quest_date`, `customer_id`, `customer_name`, `customer_surn`, `customer_midd`, `customer_email`, `customer_pass`, `customer_form`, `customer_primaryphone`, `customer_additphone`, `customer_duty`, `customer_city`, `customer_country`, `customer_actuality`, `customer_questions`, `customer_compname`, `quest_status`, `customer_notifyperiod`, `customer_position`, `customer_answers`, `customer_knowabout`) VALUES
('26.04.14', 1, 'Фёдор', 'Иванов', 'Викторович', 'test1@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'Частное лицо', '4991234536', '9031234567', 'Частное лицо', 'Москва', 'Россия', '1 день', 'Вопрос по услуге', '', '', 0, NULL, NULL, NULL),
('10.03.14', 2, 'Иван', 'Антонов', 'Андреевич', 'test2@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'Юрлицо', '499234823484', '903234234234', 'Директор', 'Баку', 'Азербайджан', '1 год', 'Вопрос по сервису', 'Опельниссан', '', 0, NULL, NULL, NULL),
('31.07.14', 3, 'Марат', 'Купустин', 'Александрович', 'test3@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'Юрлицо', '499123123', '903234324234', 'Директор', 'Ереван', 'Армения', '1 день', 'Вопрос по услуге', 'Ящикпандоры', '', 0, NULL, NULL, NULL),
('10.07.14', 4, 'Вадим', 'Максимов', 'Кириллович', 'test4@mail.ru', '11223344', 'физлицо', '4992357595', '9038585753', 'Петров Валерий', 'Харьков', 'Украина', '3', '', '', '', 0, NULL, NULL, NULL),
('', 5, 'Петр', 'Петров', 'Петрович', '', '', '', '', '', '', '', '', '', '', '', '', 3, NULL, NULL, NULL),
('', 6, 'sdfsdf', 'sdfsdf', 'fsfsdfs', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL),
('05.11.14', 7, 'asdasd', 'asdasdasd', 'asdasdasd', '', '', '', '', '', '', '', '', '', '', '', '', 0, NULL, NULL, NULL),
('12.05.14', 8, 'qweqwe', '', '', '', '8f55b5e3f7f65c655dbe846e2f8e2a99', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 9, 'asdasda', '', '', '', 'e3aa6b51ec54c9a30df0825f6efa3dd0', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 10, 'adada', '', '', '', 'bd6a500990bcfd2bd2d66d6115184da2', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 11, 'adada', '', '', '', 'bd6a500990bcfd2bd2d66d6115184da2', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 12, 'asdad', '', '', '', '3dcd6edc1e2ffb12b9b79a0102bc8316', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 13, 'asdad', '', '', '', '3dcd6edc1e2ffb12b9b79a0102bc8316', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 14, 'asdasdad', '', '', '', '144b539d39bc356af043e0f50d9fae2d', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 15, '234234', '', '', '', '1d349a2dbb4c7984ec855433ee9a0bbb', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 16, 'eewrwerwr', '', '', '', 'b358b3da8fd392b2532a3085164ff1f0', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 17, 'eewrwerwr', '', '', '', 'b358b3da8fd392b2532a3085164ff1f0', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 18, 'eewrwerwr', '', '', '', 'b358b3da8fd392b2532a3085164ff1f0', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 19, 'eewrwerwr', '', '', '', 'b358b3da8fd392b2532a3085164ff1f0', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 20, 'eewrwerwr', '', '', '', 'b358b3da8fd392b2532a3085164ff1f0', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 21, 'sdfdsfs', '', '', '', '71c41194b0ae69040cc6e743518cbc42', '', '', '', '', '', '', '', '', '', '???????', 0, '', '', NULL),
('12.05.14', 22, '????????', '?????', '????????????', 'president@president.ru', '3068ba5ac8fa1096307c58eb85f6579c', '', '2131313131331321', '2354343454364564', '???????', '??????', '??????', '', '??????? ????', '??????', '???????', 0, '?????????', '? ??? ??? ? ?????', '????????? ????????');

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

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_basket`
--
ALTER TABLE `order_basket`
  ADD CONSTRAINT `order_basket_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users_customers` (`customer_id`),
  ADD CONSTRAINT `order_basket_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `system_countries` (`country_id`),
  ADD CONSTRAINT `order_basket_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `system_services` (`service_id`),
  ADD CONSTRAINT `order_basket_ibfk_4` FOREIGN KEY (`podservice_id`) REFERENCES `system_podservice` (`podservice_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
