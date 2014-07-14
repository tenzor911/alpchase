-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 15 2014 г., 00:28
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Дамп данных таблицы `order_basket`
--

INSERT INTO `order_basket` (`basket_id`, `customer_id`, `country_id`, `service_id`, `podservice_id`) VALUES
(1, 12, 3, 2, 3),
(2, 12, 3, 2, 3),
(29, 18, 4, 1, 2),
(27, 16, 2, 2, 2),
(5, 2, 3, 1, 1),
(6, 11, 2, 4, 10),
(7, 15, 1, 3, 9),
(8, 15, 2, 4, 10),
(9, 14, 2, 3, 6),
(10, 14, 2, 3, 0),
(11, 14, 2, 3, 0),
(12, 13, 1, 3, 6),
(28, 0, 2, 2, 2),
(14, 12, 4, 2, 4),
(15, 11, 2, 3, 5),
(16, 11, 1, 4, 10),
(17, 11, 1, 2, 4),
(18, 7, 2, 1, 1),
(19, 6, 1, 1, 1),
(20, 5, 1, 2, 2),
(21, 4, 1, 2, 2),
(22, 4, 2, 1, 1),
(23, 4, 2, 1, 1),
(24, 2, 1, 1, 1),
(25, 1, 2, 1, 1),
(26, 1, 1, 1, 1),
(30, 18, 3, 3, 9),
(31, 19, 1, 2, 3),
(32, 19, 3, 2, 4),
(33, 20, 1, 1, 1),
(34, 20, 1, 3, 5),
(35, 20, 3, 2, 3),
(36, 20, 3, 3, 9),
(37, 21, 1, 1, 1),
(40, 22, 2, 2, 2),
(39, 22, 2, 2, 2),
(42, 23, 4, 2, 3),
(43, 23, 1, 3, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `system_con_serv`
--

CREATE TABLE IF NOT EXISTS `system_con_serv` (
  `country_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `system_con_serv`
--

INSERT INTO `system_con_serv` (`country_id`, `service_id`) VALUES
(4, 1),
(3, 4),
(3, 3),
(3, 2),
(3, 1),
(2, 4),
(2, 3),
(2, 2),
(2, 1),
(1, 4),
(1, 3),
(1, 2),
(1, 1),
(0, 0),
(4, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `system_countries`
--

CREATE TABLE IF NOT EXISTS `system_countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(40) NOT NULL,
  PRIMARY KEY (`country_id`),
  UNIQUE KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `system_countries`
--

INSERT INTO `system_countries` (`country_id`, `country_name`) VALUES
(0, 'страна не выбрана'),
(1, 'Россия'),
(2, 'Украина'),
(3, 'Казахстан'),
(4, 'Грузия');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

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
(9, 'Бухгалтерский учет до 50 документов в месяц', '', 5000),
(10, 'Официальная ликвидация компании', '', 3000),
(11, 'Ликвидация путем реорганизации ', '', 4000);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `system_services`
--

INSERT INTO `system_services` (`service_id`, `service_name`, `service_description`, `service_price`) VALUES
(0, 'услуга не назначена', 'Услуга не была выбрана в анкете', 0),
(1, 'Регистрация ИП', 'Услуга по регистрации юридического лица. Тип - Индивидуальный предприниматель.', 1000),
(2, 'Регистрация ООО', 'Услуга по регистрации юридического лица. Тип - Общество с ограниченой отвественностью.', 2000),
(3, 'Бухгалтерский учёт', 'Ведение и сопровождение бухгалтерии для юридических лиц.', 500),
(4, 'Ликвидация ИП', 'Ликвидация ИП', 800);

-- --------------------------------------------------------

--
-- Структура таблицы `system_serv_pod`
--

CREATE TABLE IF NOT EXISTS `system_serv_pod` (
  `service_id` int(11) NOT NULL,
  `podservice_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `system_serv_pod`
--

INSERT INTO `system_serv_pod` (`service_id`, `podservice_id`) VALUES
(3, 6),
(3, 5),
(2, 4),
(2, 3),
(1, 2),
(1, 1),
(3, 7),
(0, 0),
(3, 8),
(3, 9),
(4, 10),
(4, 11);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `nicename` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_n` (`username`),
  UNIQUE KEY `user_e` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `nicename`, `email`, `password`) VALUES
(1, 'swashata', 'Swashata Ghosh', 'abc@domain.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684');

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
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `users_customers`
--

INSERT INTO `users_customers` (`quest_date`, `customer_id`, `customer_name`, `customer_surn`, `customer_midd`, `customer_email`, `customer_pass`, `customer_form`, `customer_primaryphone`, `customer_additphone`, `customer_duty`, `customer_city`, `customer_country`, `customer_actuality`, `customer_questions`, `customer_compname`, `quest_status`, `customer_notifyperiod`, `customer_position`, `customer_answers`, `customer_knowabout`) VALUES
('31.07.14', 1, 'Марат', 'Купустин', 'Александрович', 'mail@dotcom.com', '098f6bcd4621d373cade4e832627b4f6', 'Юрлицо', '499123123', '903234324234', 'Директор', 'Ереван', 'Армения', '1 день', 'Вопрос по услуге', 'Ящикпандоры', 'извещён', 0, NULL, NULL, ''),
('12.05.14', 2, 'Петр', 'Петров', 'Петрович', 'toolbar@nm.ru', 'b86a8490f3b2411045855fc3203b59ae', '', '2349438923432432', '3453453534534535', 'Дворник', 'Минск', 'Белоруссия', '', '', 'Фирма', 'черновик', 0, 'менеджер', NULL, ''),
('29.05.14', 3, 'Имя', 'Фамилия', 'Отчество', 'email@email.com', 'dc6d85e05f0d4f3c8727d3aed96d7232', '', '1111111111111111', '22223333000000000000', 'Лицо', 'Город', 'Страна', '', 'Вопрос', 'Организация', 'извещён', 0, 'Должность', 'Ответ', 'Интернет'),
('31.05.14', 4, 'Владилен', 'Невзоров', 'Александрович', 'mail@mail.to', 'da4579e7a087876af2104d38737e7d0a', '', '00000000000', '4444444333', 'Директор', 'Баку', 'Азербайджан', '', '', 'Нимфа', 'извещён', 0, 'Менеджер по развитию', '', 'СМИ'),
('31.05.14', 5, 'Павел', 'Гришин', 'Павлович', 'mail@mail.usa', '17054db617e7666c97149e69b44d3c4f', '', '42141414', '32322323523', 'Директор', 'Астана', 'Казахстан', '', '', 'Трио', 'извещён', 0, 'Директор', '', 'Интернет'),
('02.06.14', 6, 'Акабов', 'Виктор', 'Степанович', 'trader@mail.com', '1277ea1119a152cb0c4923398485d3a1', '', '2222222222222222', '1231231231231232', 'Директор', 'Баку', 'Азербайджан', '', 'фвфвфыв', 'Моя', 'извещён', 0, '', 'фвфывфвфв', 'Интернет'),
('08.06.14', 7, 'Иван', 'Кашапов', 'Анатольевич', 'tool@nm.ru', '97e379267cd72fa651f7dbb8080924b9', '', '2322233131323213', '3333333333333333', 'Менеджер', 'Тбилиси', 'Грузия', '', 'фыафыа', '', 'извещён', 0, '', 'фыафа', 'СМИ'),
('08.06.14', 8, 'Виктор', 'Владленов', 'Александрович', 'mymail@gmail.com', '', '', '0101010101', '235235235', '', 'Астана', 'Казахстан', '', '', 'Трикита', 'черновик', 0, '', '', 'Интернет'),
('19.06.14', 9, 'Михаил', 'Лаврентьев', '', 'mail@mail.org', 'f36c9e6fcae9450742299d40f3fd3da7', '', '2342424242424242', '', 'некое лицо', 'Петербург', 'Россия', '', 'пароль 4qk4lB3b', '', 'извещён', 0, '', '', 'Интернет'),
('22.06.14', 10, 'Антон', 'Борисов', 'Владимирович', 'hamachi@mail.org', '280550b04eace241a81dd48e2c25d56b', '', '84955637291', '89047575281', 'Менеджер по продажам', 'Москва', 'Россия', '', 'Неа', 'Соларинвест', 'извещён', 0, 'Генеральный директор', 'Окей', 'СМИ'),
('10.07.14', 11, 'Григорий', 'Подонов', '', 'hungary@mail.ru', '', '', '234234', '', '', 'Минск', 'Белоруссия', '', '', '', 'извещён', 0, '', '', 'Интернет'),
('10.07.14', 12, 'Василий', 'Пупкин', '', 'toolbar@gmail.com', '72fe1f9bd1a008ec7d79880fb1b9d046', '', '3123123123123', '', 'менеджер', 'Актобе', 'Казахстан', '', '', '', 'извещён', 0, '', '', 'Интернет'),
('11.07.14', 13, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'черновик', 0, '', '', 'Интернет'),
('11.07.14', 14, 'test', 'test', '', 'testtest', '07496d30ce15babfb9192bca2ae853aa', '', '312123213', '', 'test', 'test', 'test', '', '', '', 'извещён', 0, '', '', 'Интернет'),
('13.07.14', 15, 'Вячеслав', 'Фёдоров', '', 'mail@trade.ru', '5ad21f98985f108ef062127dbfda2068', '', '2222', '3333333', 'Некто', 'Тбилиси', 'Грузия', '', '', '', 'извещён', 0, '', '', 'Интернет'),
('13.07.14', 16, 'Любомир', 'Завьялов', '', '', '', '', '234234234', '22223333', '', 'Петербург', 'Россия', '', '', '', 'черновик', 0, '', '', 'Интернет'),
('13.07.14', 17, 'Гарри', 'Поттер', '', '', '', '', '', '', '', 'Киев', 'Украина', '', '', '', 'черновик', 0, '', '', 'Интернет'),
('13.07.14', 18, 'Том', 'Фарр', '', '', '', '', '', '', '', 'Харьков', 'Украина', '', '', '', 'черновик', 0, '', '', 'Интернет'),
('13.07.14', 19, 'Грачёв', 'Виктов', '', '', '', '', '', '', '', '', '', '', '', 'Труляля', 'черновик', 0, '', '', 'Интернет'),
('14.07.14', 20, 'Павел', 'Бородин', '', 'nekii@mail.ru', 'fc362292c09c5fd5e34321a69b0a99b7', '', '2222222222222222', '9999999999999999', 'Менеджер', 'Петербург', 'Россия', '', '', 'ЭкстраМ', 'извещён', 0, 'Директор', '', 'Интернет'),
('14.07.14', 21, 'Виктор', 'Григорьев', '', 'seva@mail.ua', '2d2097c11cc4a361577d6a40fabc95f6', '', '2222222222222222', '1111111111111111', 'Никто', 'Севастополь', 'Украина', '', '', 'Газмяс', 'извещён', 0, 'Директор', '', 'Интернет'),
('14.07.14', 22, 'Прокофий', 'Анатольев', '', 'email', '', '', '4991234567', '9032734734', '', 'Петербург', 'Россия', '', '', 'ВекторИнк', 'черновик', 0, '', '', 'Интернет'),
('15.07.14', 24, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'черновик', 0, '', '', 'Интернет');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users_managers`
--

INSERT INTO `users_managers` (`um_id`, `um_login`, `um_pass`, `um_email`, `um_role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'braindead@bk.ru', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
