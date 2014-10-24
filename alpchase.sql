-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 15 2014 г., 17:34
-- Версия сервера: 5.5.27
-- Версия PHP: 5.4.7

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
  `basket_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `podservice_id` int(11) NOT NULL,
  PRIMARY KEY (`basket_id`),
  UNIQUE KEY `basket_id` (`basket_id`),
  KEY `country_id` (`country_id`),
  KEY `service_id` (`service_id`),
  KEY `podservice_id` (`podservice_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=218 ;

--
-- Дамп данных таблицы `order_basket`
--

INSERT INTO `order_basket` (`basket_id`, `customer_id`, `country_id`, `service_id`, `podservice_id`) VALUES
(1, 2, 1, 2, 4),
(2, 3, 3, 4, 10),
(3, 4, 1, 4, 10),
(4, 4, 1, 2, 4),
(5, 4, 3, 2, 3),
(6, 4, 3, 3, 6),
(7, 6, 2, 4, 11),
(8, 16, 2, 3, 7),
(113, 21, 3, 3, 7),
(90, 17, 4, 2, 3),
(99, 7, 3, 4, 11),
(89, 17, 1, 4, 10),
(88, 17, 1, 3, 6),
(87, 17, 1, 2, 4),
(114, 12, 2, 4, 10),
(86, 17, 1, 1, 1),
(130, 22, 1, 1, 1),
(156, 18, 4, 0, 0),
(155, 18, 3, 4, 10),
(154, 18, 1, 1, 1),
(96, 19, 3, 2, 3),
(97, 19, 2, 3, 7),
(95, 19, 3, 1, 1),
(94, 19, 1, 4, 10),
(29, 20, 2, 1, 1),
(30, 20, 2, 3, 5),
(143, 23, 4, 1, 1),
(140, 16, 3, 3, 9),
(139, 16, 3, 2, 4),
(142, 23, 3, 2, 4),
(141, 23, 1, 1, 2),
(134, 15, 1, 4, 10),
(131, 22, 3, 4, 10),
(133, 15, 3, 3, 9),
(132, 15, 3, 2, 4),
(118, 0, 3, 3, 7),
(117, 0, 1, 2, 3),
(112, 21, 3, 2, 3),
(98, 8, 2, 1, 1),
(136, 15, 2, 3, 7),
(111, 21, 2, 2, 3),
(135, 15, 2, 2, 3),
(110, 21, 2, 2, 3),
(144, 17, 1, 2, 4),
(145, 17, 1, 3, 9),
(146, 25, 4, 1, 2),
(147, 25, 0, 0, 0),
(157, 18, 2, 2, 3),
(158, 18, 2, 3, 7),
(159, 27, 2, 2, 4),
(165, 28, 2, 2, 3),
(164, 28, 2, 1, 1),
(183, 29, 3, 4, 11),
(182, 29, 3, 4, 10),
(181, 29, 1, 2, 4),
(184, 30, 2, 2, 4),
(170, 31, 2, 3, 5),
(176, 32, 3, 2, 3),
(175, 32, 2, 3, 6),
(174, 32, 2, 2, 3),
(179, 33, 2, 2, 3),
(197, 37, 2, 3, 5),
(196, 37, 2, 2, 3),
(188, 37, 0, 0, 0),
(204, 39, 1, 2, 3),
(192, 35, 3, 2, 4),
(203, 38, 1, 3, 7),
(202, 38, 1, 3, 7),
(201, 38, 3, 1, 1),
(205, 39, 1, 3, 5),
(215, 40, 1, 3, 5),
(214, 40, 1, 2, 3),
(216, 40, 2, 0, 0),
(217, 41, 4, 2, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `packets_basket`
--

CREATE TABLE IF NOT EXISTS `packets_basket` (
  `pbasket_id` int(11) NOT NULL AUTO_INCREMENT,
  `sbasket_id` int(11) NOT NULL,
  `packet_id` int(11) NOT NULL,
  PRIMARY KEY (`pbasket_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `packets_basket`
--

INSERT INTO `packets_basket` (`pbasket_id`, `sbasket_id`, `packet_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2),
(6, 2, 3),
(7, 3, 1),
(8, 3, 2),
(9, 3, 3),
(10, 3, 4),
(11, 3, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `services_basket`
--

CREATE TABLE IF NOT EXISTS `services_basket` (
  `sbasket_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `podservice_id` int(11) NOT NULL,
  PRIMARY KEY (`sbasket_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `services_basket`
--

INSERT INTO `services_basket` (`sbasket_id`, `country_id`, `service_id`, `podservice_id`) VALUES
(1, 1, 2, 1),
(2, 4, 2, 3),
(3, 5, 3, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `system_con_serv`
--

CREATE TABLE IF NOT EXISTS `system_con_serv` (
  `id_con_ser` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`id_con_ser`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `system_con_serv`
--

INSERT INTO `system_con_serv` (`id_con_ser`, `country_id`, `service_id`) VALUES
(1, 3, 1),
(2, 1, 1),
(3, 1, 2),
(5, 6, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `system_countries`
--

CREATE TABLE IF NOT EXISTS `system_countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(40) NOT NULL,
  PRIMARY KEY (`country_id`),
  UNIQUE KEY `country_id` (`country_id`),
  UNIQUE KEY `country_name` (`country_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `system_countries`
--

INSERT INTO `system_countries` (`country_id`, `country_name`) VALUES
(8, 'Армения'),
(4, 'Грузия'),
(3, 'Казахстан'),
(5, 'Латвия'),
(6, 'Литва'),
(11, 'Пакистан'),
(7, 'прр'),
(1, 'Россия'),
(0, 'страна не выбрана'),
(9, 'США'),
(12, 'Таджикистан'),
(10, 'Узбекистан'),
(2, 'Украина');

-- --------------------------------------------------------

--
-- Структура таблицы `system_packets`
--

CREATE TABLE IF NOT EXISTS `system_packets` (
  `packet_id` int(11) NOT NULL AUTO_INCREMENT,
  `packet_name` varchar(100) NOT NULL,
  `packet_type` varchar(40) NOT NULL,
  `price_common` int(11) NOT NULL,
  `price_econom` int(11) NOT NULL,
  `price_standart` int(11) NOT NULL,
  `price_vip` int(11) NOT NULL,
  PRIMARY KEY (`packet_id`),
  UNIQUE KEY `packet_name` (`packet_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `system_packets`
--

INSERT INTO `system_packets` (`packet_id`, `packet_name`, `packet_type`, `price_common`, `price_econom`, `price_standart`, `price_vip`) VALUES
(1, 'Заверение документов', '', 111, 222, 333, 444),
(2, 'Создание свидетельства', 'vip', 100, 222, 333, 444),
(3, 'Консультации', '', 50, 50, 120, 400),
(4, 'Курьерская доставка', '', 200, 300, 500, 600),
(5, 'Перевод документов', 'standart', 100, 30, 25, 800),
(6, 'пакет10', 'vip', 0, 0, 0, 0),
(7, 'пакет8', 'standart', 0, 0, 0, 0),
(8, 'пакеты', 'standart', 0, 0, 0, 0),
(9, 'Создание печати', 'standart', 0, 0, 0, 0),
(10, 'pavel', '', 11, 22, 33, 44);

-- --------------------------------------------------------

--
-- Структура таблицы `system_podservice`
--

CREATE TABLE IF NOT EXISTS `system_podservice` (
  `podservice_id` int(11) NOT NULL AUTO_INCREMENT,
  `podservice_name` varchar(100) NOT NULL,
  `podservice_description` varchar(400) NOT NULL,
  `podservice_price` int(11) NOT NULL,
  PRIMARY KEY (`podservice_id`),
  UNIQUE KEY `podservice_id` (`podservice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `system_podservice`
--

INSERT INTO `system_podservice` (`podservice_id`, `podservice_name`, `podservice_description`, `podservice_price`) VALUES
(0, 'подуслуга не назначена', 'Подуслуга не была выбрана в анкете.', 0),
(1, 'Регистрация ИП с резидентами', '', 2000),
(2, 'Регистрация ИП с нерезидентами (иностранцами)', '', 3000),
(3, 'Регистрация ООО с резидентами', '', 4000),
(4, 'Регистрация ООО с нерезидентами (иностранцами)', '', 8000),
(5, 'Бухгалтерский учет до 10 документов в месяц', '', 1000),
(6, 'Бухгалтерский учет до 20 документов в месяц', '', 2000),
(7, 'Бухгалтерский учет до 30 документов в месяц', '', 3000),
(8, 'Бухгалтерский учет до 40 документов в месяц', '', 4000),
(9, 'Бухгалтерский учет до 60 документов в месяц', '', 5000),
(10, 'Официальная ликвидация компании', '', 3000),
(11, 'Ликвидация путем реорганизации ', '', 4000),
(12, 'Тест12', '', 0),
(13, 'test2222', '', 0),
(14, 'Подуслуга1', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `system_roles`
--

CREATE TABLE IF NOT EXISTS `system_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(40) NOT NULL,
  PRIMARY KEY (`role_id`),
  UNIQUE KEY `role_name` (`role_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `system_roles`
--

INSERT INTO `system_roles` (`role_id`, `role_name`) VALUES
(4, 'belarus'),
(5, 'europe'),
(3, 'moldova'),
(1, 'russia'),
(7, 'uganda'),
(2, 'ukraine'),
(6, 'usa');

-- --------------------------------------------------------

--
-- Структура таблицы `system_services`
--

CREATE TABLE IF NOT EXISTS `system_services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(40) NOT NULL,
  `service_description` varchar(400) NOT NULL,
  `service_price` int(11) NOT NULL,
  PRIMARY KEY (`service_id`),
  UNIQUE KEY `service_id` (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `system_services`
--

INSERT INTO `system_services` (`service_id`, `service_name`, `service_description`, `service_price`) VALUES
(0, 'услуга не назначена', 'Услуга не была выбрана в анкете', 0),
(1, 'Регистрация ИП', 'Услуга по регистрации юридического лица. Тип - Индивидуальный предприниматель.', 1000),
(2, 'Регистрация ООО', 'Услуга по регистрации юридического лица. Тип - Общество с ограниченой отвественностью.', 2000),
(3, 'Бухгалтерский учёт', 'Ведение и сопровождение бухгалтерии для юридических лиц.', 500),
(4, 'Ликвидация ИП', 'Ликвидация ИП', 800),
(5, 'Ntcn', '', 0),
(6, 'Тест2', '', 0),
(7, 'Test8', '', 0),
(8, 'test1', '', 0),
(9, 'Услуга1', '', 0),
(10, 'test4', '', 0),
(11, 'test53333', '', 0),
(12, 'Готовая компания', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `system_serv_pod`
--

CREATE TABLE IF NOT EXISTS `system_serv_pod` (
  `id_ser_pod` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `podservice_id` int(11) NOT NULL,
  PRIMARY KEY (`id_ser_pod`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `system_serv_pod`
--

INSERT INTO `system_serv_pod` (`id_ser_pod`, `service_id`, `podservice_id`) VALUES
(1, 1, 1),
(3, 3, 5),
(4, 3, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `time`) VALUES
(1, '2014-07-21 11:28:27'),
(2, '2014-07-23 11:34:08'),
(3, '2014-07-23 11:34:08'),
(4, '2014-08-01 11:34:13'),
(5, '2014-07-23 12:59:57'),
(6, '2014-07-24 21:50:31'),
(7, '2014-07-24 21:50:31'),
(8, '2014-07-24 21:50:55'),
(9, '2014-07-24 21:50:55');

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
  `customer_knowabout` varchar(20) NOT NULL,
  `customer_ip` varchar(15) NOT NULL,
  `customer_visits` int(255) NOT NULL,
  `customer_offer` varchar(4000) NOT NULL,
  `customer_subscriptionperiod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Дамп данных таблицы `users_customers`
--

INSERT INTO `users_customers` (`quest_date`, `customer_id`, `customer_name`, `customer_surn`, `customer_midd`, `customer_email`, `customer_pass`, `customer_form`, `customer_primaryphone`, `customer_additphone`, `customer_duty`, `customer_city`, `customer_country`, `customer_actuality`, `customer_questions`, `customer_compname`, `quest_status`, `customer_notifyperiod`, `customer_position`, `customer_answers`, `customer_knowabout`, `customer_ip`, `customer_visits`, `customer_offer`, `customer_subscriptionperiod`) VALUES
('15.07.14', 1, 'Юрий', 'Долгорукий', '', 'mail@mail.org', 'acf9a6c0e6c786069930e9ae1014dce6', '', '3324234234344', '2222233333333333', 'Некто', 'Москва', 'Россия', '', '', 'Кремль', 'извещён', 0, 'Президент', '', 'Интернет', '', 0, '', '0000-00-00 00:00:00'),
('15.07.14', 2, 'Виктор', 'Степанов', '', 'mail@mail.com', '', '', '233242344424', '2333333', '', 'Москва', 'Россия', '', '', 'Жилстрой', 'черновик', 0, 'Менеджер', '', 'Интернет', '', 0, '', '0000-00-00 00:00:00'),
('15.07.14', 3, 'Иван', 'Петров', '', 'mail@ivanov.org', '', '', '4992330303', '', '', 'Москва', 'Россия', '', '', '', 'черновик', 0, '', '', 'Интернет', '', 0, '', '0000-00-00 00:00:00'),
('15.07.14', 4, 'Владилен', 'Александров', '', 'manager@mail.ru', 'e106e31359708406d544c85d3a8d4928', '', '4991234567', '903172723', 'Некто', 'Петербург', 'Россия', '', '', 'Бэтатранс', 'извещён', 0, 'Менеджер', '', 'СМИ', '', 12, '', '0000-00-00 00:00:00'),
('15.07.14', 5, 'Артур', 'Балашов', '', 'mail@mail.ua', '06bc1b9c20c72d9a6d0468d83c5e4d5c', '', '2343244242424234', '', 'Директор', 'Харьков', 'Украина', '', '', 'Новатек', 'извещён', 0, '', '', 'Интернет', '', 0, '', '0000-00-00 00:00:00'),
('15.07.14', 6, 'Виктор', 'Борисов', '', 'Mail@mail.by', 'ada354774c71e351a4e1208cfe04d289', '', '342425', '', 'цукцк', 'Минск', 'Белоруссия', '', '', '', 'извещён', 0, '', '', 'Интернет', '', 0, '', '0000-00-00 00:00:00'),
('17.07.14', 7, 'Павлов', 'Семён', '', 'treska@mail.ru', 'a07769f00b14f2f69c6e390ffdc3342b', '', '1241241241241241', '1223124444444444', 'трэйдер', 'Москва', 'Россия', '', '', 'Трескахаус', 'черновик', 0, 'Менеджер', '', 'Интернет', '', 0, '', '0000-00-00 00:00:00'),
('18.07.14', 8, 'Владимир', 'Корнеев', '', 'tradebo@inbox.ru', 'a344c4707ac4167caac3a539832f4f45', '', '124214124', '2324324', '', 'Киев', 'Украина', '', '', '', 'извещён', 0, '', '', 'Интернет', '', 1, '', '0000-00-00 00:00:00'),
('25.09.14', 40, 'Вася', 'Иванов', '', '', '', '', '353453', '', '', '', '', '', '', '23432532', 'черновик', 0, 'цкц5', '', 'Интернет', '', 0, '', '2014-09-25 18:51:27'),
('25.09.14', 41, 'Вася', 'Андреев', '', 'mail@mail', '', '', '', '', '', '', '', '', '', '', 'черновик', 0, '', '', 'Интернет', '', 0, '', '2014-09-25 18:52:55'),
('18.07.14', 12, 'Владимир', 'Никонов', '', 'tenz@gmail.com', '41b54e60eb76d6d5af885a95ec544152', '', '23423424324', '1231231313213', '', 'Петербург', 'Россия', '', '', '', 'извещён', 0, '', '', 'Знакомые', '', 0, '', '0000-00-00 00:00:00'),
('01.08.14', 17, 'Виктор', 'Журавлёв', '', '', '', '', '234234', '49932021123', '', 'Харьков', 'Украина', '', '', '', 'черновик', 0, '', '', 'Интернет', '', 0, '', '0000-00-00 00:00:00'),
('15.08.14', 26, 'Владимир', 'Некий', '', 'tra@inbox.ru', '6ecb007e13d6558783e736b87fefa47f', '', '1214124', '', '', 'Москва', 'Россия', '', '', 'Неважно', 'извещён', 0, 'Никто', '', 'Интернет', '', 0, '', '2014-08-14 20:08:58'),
('01.08.14', 19, 'Александр', 'Иванов', '', 'braindead3@bk.ru', '9d10f11749230a0fd54552c83b623a2e', '', '2393939329239', '1283141941203', 'Ктото', 'Москва', 'Россия', '', '', 'Либертитрэйд', 'извещён', 0, 'Менеджер', '', 'Интернет', '', 1, '', '0000-00-00 00:00:00'),
('03.08.14', 21, 'test', 'Testov', '', 'gray@bk.ru', '', '', '89161234567', '', 'Director', 'Новгород', 'Россия', '', '', '', 'извещён', 0, '', '', 'Интернет', '', 0, '', '2014-08-14 13:24:57'),
('15.08.14', 29, 'Владимир', 'Павлов', '', 'brain@bk.ru', '58b83a5617d5743c11177eb73bbcfee7', '', '234234234', '1231313', 'Наше лицо', 'Астана', 'Казахстан', '', 'Вопросы', 'Энергосервис', 'извещён', 0, 'Президент', 'Ответы', 'Интернет', '', 0, '', '2014-08-19 09:05:15'),
('15.08.14', 30, 'Григорий', 'Федоров', '', 'trade@inbox.ru', 'dac02ec9b4d892c4f58b35bffe41a210', '', '2342342424', '', '', 'Омск', '', '', '', '', 'извещён', 0, '', '', 'Интернет', '', 1, '', '2014-08-19 09:05:43'),
('15.08.14', 31, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'черновик', 0, '', '', 'Интернет', '', 0, '', '2014-08-15 09:09:31'),
('19.08.14', 36, 'Анна', 'Анна', '', 'ananyan@alpschase.com', '914c7eb231006c0694ede0c483e0f0eb', '', '89265226556', '89265226556', 'ЛПР', 'Москва', 'Россия', '', 'Как зарегистрировать ООО?', '', 'извещён', 0, '', 'ООО регистрируют в 46 инспекции', 'Интернет', '', 13, '', '2014-09-09 09:32:25'),
('19.08.14', 35, 'аыва', 'ываыа', '', 'ываыва', '', '', '', '', '', 'ываыа', 'ываыва', '', '', '', 'черновик', 0, '', '', 'Интернет', '', 0, '', '2014-08-19 09:38:36'),
('04.09.14', 37, 'Николай', 'Абрамов', '', 'tradebox@inbox.ru', '503d04ebd13f22b520a844ab80f595ad', '', '23252525', '2352525235', '', 'Москва', 'Россия', '', 'ываыаыа', 'Организация', 'извещён', 0, '', 'ыаыа', 'Интернет', '', 4, '', '2014-09-05 05:33:24'),
('25.09.14', 39, 'Ковалёв', 'Иван', '', 'braindead@bk.ru', '81b09e2a680c9534a4c835342c3ae27e', '', '+790354647484', '+654757599559', 'некое лицо', 'Астана', 'Казахстан', '', '', 'некая', 'извещён', 0, 'некая', '', 'СМИ', '', 7, '', '2014-09-25 18:26:09');

-- --------------------------------------------------------

--
-- Структура таблицы `users_managers`
--

CREATE TABLE IF NOT EXISTS `users_managers` (
  `um_id` int(11) NOT NULL AUTO_INCREMENT,
  `um_login` varchar(20) NOT NULL,
  `um_pass` varchar(40) NOT NULL,
  `um_email` varchar(40) NOT NULL,
  `um_role` varchar(40) NOT NULL,
  PRIMARY KEY (`um_id`),
  UNIQUE KEY `um_login` (`um_login`,`um_email`),
  UNIQUE KEY `um_login_2` (`um_login`),
  UNIQUE KEY `um_email` (`um_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `users_managers`
--

INSERT INTO `users_managers` (`um_id`, `um_login`, `um_pass`, `um_email`, `um_role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'tradebox@inbox.ru', 'admin'),
(2, 'user_rus', '285f01c6fb3921781c9726533d34dce0', 'braindead@inbox.ru', 'russia'),
(3, 'user_ukr', 'd54d1702ad0f8326224b817c796763c9', 'mail@mail.ru', 'ukraine'),
(4, 'user_mol', '9aefeef9c7e53f9de9bb36f32649dc3f', 'mail@mail.com', 'moldova'),
(5, 'user_geo', '3b712de48137572f3849aabd5666a4e3', 'mailing', 'usa'),
(8, 'usr', 'd0970714757783e6cf17b26fb8e2298f', 'toolbar@nm.ru', 'russia'),
(9, 'vasya', '8b38898653cb9421e60fb136b6e02aaa', 'toolwefer', 'russia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
