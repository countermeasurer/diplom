-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 11 2021 г., 09:38
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mdk2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `calculation`
--

CREATE TABLE `calculation` (
  `calc_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `calculation`
--

INSERT INTO `calculation` (`calc_id`, `user_id`, `date`) VALUES
(1, 7, '2021-01-24 16:58:37'),
(2, 7, '2021-01-24 17:25:14'),
(3, 7, '2021-01-24 17:27:04'),
(4, 7, '2021-02-05 18:11:10'),
(5, 7, '2021-02-05 18:17:02'),
(6, 7, '2021-02-12 19:27:25'),
(7, 7, '2021-02-12 19:28:59'),
(8, 7, '2021-02-12 19:34:41'),
(9, 7, '2021-02-12 19:35:39'),
(10, 7, '2021-02-12 19:37:45'),
(12, 7, '2021-03-18 15:07:55'),
(13, 7, '2021-03-18 15:10:07'),
(14, 7, '2021-03-18 15:10:28'),
(15, 7, '2021-03-18 15:10:37'),
(16, 7, '2021-03-18 15:15:36'),
(17, 7, '2021-03-18 15:15:59'),
(18, 7, '2021-03-18 15:16:29'),
(19, 7, '2021-03-18 15:19:52'),
(20, 7, '2021-04-27 11:38:26'),
(21, 7, '2021-04-27 11:41:36'),
(22, 7, '2021-04-27 11:41:40'),
(23, 7, '2021-04-27 11:42:50'),
(24, 7, '2021-04-27 11:43:09'),
(25, 7, '2021-04-27 11:44:51'),
(26, 7, '2021-04-27 11:45:15'),
(27, 7, '2021-04-27 11:45:21'),
(28, 7, '2021-04-27 11:49:13'),
(29, 7, '2021-04-27 11:49:48'),
(30, 7, '2021-04-27 11:53:32'),
(31, 7, '2021-04-27 11:54:30'),
(32, 7, '2021-04-27 11:54:57'),
(33, 7, '2021-04-27 11:55:06'),
(34, 7, '2021-04-27 12:26:03'),
(35, 7, '2021-04-27 15:42:07'),
(36, 7, '2021-04-28 10:16:04'),
(37, 7, '2021-04-28 10:19:04'),
(38, 7, '2021-04-28 10:40:38'),
(39, 7, '2021-04-28 10:44:30'),
(40, 7, '2021-04-28 10:44:55'),
(41, 7, '2021-04-28 10:45:25'),
(42, 7, '2021-04-28 10:45:51'),
(43, 7, '2021-04-28 10:46:29'),
(44, 7, '2021-04-28 10:48:01'),
(45, 7, '2021-04-28 10:48:46'),
(46, 7, '2021-04-28 10:50:04'),
(47, 7, '2021-04-28 10:57:09'),
(48, 7, '2021-04-28 10:57:23'),
(49, 7, '2021-04-28 10:57:35'),
(50, 7, '2021-04-28 10:59:41'),
(51, 7, '2021-04-28 11:10:09'),
(52, 7, '2021-04-29 11:28:13'),
(53, 7, '2021-04-29 11:29:48'),
(54, 7, '2021-04-29 11:30:09'),
(55, 7, '2021-04-29 11:30:17'),
(56, 7, '2021-04-29 11:30:27'),
(57, 7, '2021-04-29 11:30:39'),
(59, 7, '2021-04-30 14:43:55'),
(60, 7, '2021-04-30 14:44:29'),
(64, 7, '2021-05-01 00:40:30'),
(65, 7, '2021-05-01 00:44:57'),
(67, 7, '2021-05-01 00:48:50'),
(68, 7, '2021-05-01 00:52:31'),
(70, 7, '2021-05-01 01:16:32'),
(72, 7, '2021-05-01 15:25:51'),
(73, 7, '2021-05-01 15:26:13'),
(74, 7, '2021-05-02 16:16:12'),
(75, 7, '2021-05-02 16:18:09'),
(76, 7, '2021-05-02 16:18:19'),
(77, 7, '2021-05-02 16:19:05'),
(78, 7, '2021-05-02 16:19:36'),
(79, 7, '2021-05-02 16:19:56'),
(80, 7, '2021-05-02 16:20:25'),
(81, 7, '2021-05-02 16:20:51'),
(82, 7, '2021-05-02 16:21:04'),
(83, 7, '2021-05-02 16:22:17'),
(84, 7, '2021-05-02 16:22:42'),
(85, 7, '2021-05-02 16:22:59'),
(86, 7, '2021-05-02 16:23:43'),
(87, 7, '2021-05-02 16:23:58'),
(88, 7, '2021-05-02 16:25:03'),
(89, 7, '2021-05-02 16:25:59'),
(90, 7, '2021-05-04 00:12:42'),
(91, 7, '2021-05-04 00:13:08'),
(92, 7, '2021-05-04 00:14:06'),
(93, 7, '2021-05-04 00:14:35'),
(96, 7, '2021-05-04 10:34:43'),
(99, 7, '2021-05-04 11:41:38'),
(100, 7, '2021-05-04 11:42:00'),
(101, 7, '2021-05-04 11:42:42'),
(103, 7, '2021-05-04 11:47:08'),
(105, 7, '2021-05-04 14:07:28'),
(106, 7, '2021-05-04 14:07:36'),
(107, 7, '2021-05-04 14:07:43'),
(108, 7, '2021-05-04 14:10:32'),
(109, 7, '2021-05-04 14:11:44'),
(112, 7, '2021-05-04 14:20:47'),
(113, 7, '2021-05-04 14:21:29'),
(114, 7, '2021-05-04 14:21:35'),
(115, 7, '2021-05-04 14:21:42'),
(116, 7, '2021-05-04 14:21:50'),
(117, 7, '2021-05-04 14:21:58'),
(118, 7, '2021-05-04 14:22:35'),
(120, 7, '2021-05-05 10:09:52'),
(121, 7, '2021-05-08 13:48:26'),
(122, 7, '2021-05-08 14:20:45'),
(123, 7, '2021-05-08 14:28:07'),
(124, 7, '2021-05-09 17:39:13'),
(125, 7, '2021-05-09 17:41:07'),
(126, 7, '2021-05-09 20:14:05'),
(127, 7, '2021-05-09 23:12:08');

-- --------------------------------------------------------

--
-- Структура таблицы `input`
--

CREATE TABLE `input` (
  `calc_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `date` datetime NOT NULL,
  `input_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `input`
--

INSERT INTO `input` (`calc_id`, `user_id`, `date`, `input_name`, `data_type`, `discription`, `unit`, `value`) VALUES
(122, 7, '2021-05-08 14:20:45', 'p', 'INT', 'плотность', 'кг/м^3', 1557),
(122, 7, '2021-05-08 14:20:45', 'N1', 'REAL', 'Размер насадки 1', 'мм', 12.7),
(122, 7, '2021-05-08 14:20:45', 'N2', 'REAL', 'Размер насадки 2', 'мм', 12.7),
(122, 7, '2021-05-08 14:20:45', 'N3', 'REAL', 'Размер насадки 3', 'мм', 12.7),
(122, 7, '2021-05-08 14:20:45', 'P1', 'INT', 'Давление насоса 1', 'МПа', 23),
(122, 7, '2021-05-08 14:20:45', 'P2', 'REAL', 'Давление насоса 2', 'МПа', 8.9),
(122, 7, '2021-05-08 14:20:45', 'Pnas1', 'REAL', 'Подача насоса 1', 'л/с', 0),
(122, 7, '2021-05-08 14:20:45', 'Pns2', 'REAL', 'Подача насоса 2', 'МПа', 0),
(122, 7, '2021-05-08 14:20:45', 'Pma', 'INT', 'Максимальное давление на устье', 'МПа', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `input2`
--

CREATE TABLE `input2` (
  `calc_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `date` date NOT NULL,
  `input_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `input2`
--

INSERT INTO `input2` (`calc_id`, `user_id`, `date`, `input_name`, `data_type`, `discription`, `unit`, `value`) VALUES
(121, 7, '2021-05-08', 'pbr', 'INT', 'плотность', 'кг/м^3', 1438),
(121, 7, '2021-05-08', 'pbr', 'INT', 'Плотность бурового раствора', 'мм', 1438),
(121, 7, '2021-05-08', 'Q', 'REAL', 'Скорость циркуляции', 'мм', 32.7),
(121, 7, '2021-05-08', 'rN1', 'REAL', 'Размер насадки 1', 'мм', 9.5),
(121, 7, '2021-05-08', 'rN2', 'REAL', 'Размер насадки 2', 'мм', 9.5),
(121, 7, '2021-05-08', 'rN3', 'REAL', 'Размер насадки 3', 'мм', 9.5),
(121, 7, '2021-05-08', 'Dsk', 'INT', 'Диаметр скважины', 'мм', 311),
(121, 7, '2021-05-08', 'nD', 'INT', 'Наружный диаметр бурильных труб', 'мм', 127),
(121, 7, '2021-05-08', 'yDav', 'INT', 'Устьевое давление', 'мм', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `input3`
--

CREATE TABLE `input3` (
  `calc_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `date` date NOT NULL,
  `input_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `input4`
--

CREATE TABLE `input4` (
  `calc_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `date` date NOT NULL,
  `input_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `input4`
--

INSERT INTO `input4` (`calc_id`, `user_id`, `date`, `input_name`, `data_type`, `discription`, `unit`, `value`) VALUES
(123, 7, '2021-05-08', 'R', 'INT', 'плотность', 'кг/м^3', 9.1),
(123, 7, '2021-05-08', 'Nob', 'INT', 'Размер насадки 1', 'мм', 120),
(123, 7, '2021-05-08', 'W', 'INT', 'Размер насадки 1', 'мм', 155),
(123, 7, '2021-05-08', 'Diamdol', 'REAL', 'Размер насадки 1', 'мм', 216),
(124, 7, '2021-05-09', 'R', 'INT', 'плотность', 'кг/м^3', 9.1),
(124, 7, '2021-05-09', 'Nob', 'INT', 'Размер насадки 1', 'мм', 120),
(124, 7, '2021-05-09', 'W', 'INT', 'Размер насадки 1', 'мм', 155),
(124, 7, '2021-05-09', 'Diamdol', 'REAL', 'Размер насадки 1', 'мм', 216),
(125, 7, '2021-05-09', 'R', 'INT', 'плотность', 'кг/м^3', 9.1),
(125, 7, '2021-05-09', 'Nob', 'INT', 'Размер насадки 1', 'мм', 120),
(125, 7, '2021-05-09', 'W', 'INT', 'Размер насадки 1', 'мм', 155),
(125, 7, '2021-05-09', 'Diamdol', 'REAL', 'Размер насадки 1', 'мм', 216),
(127, 7, '2021-05-09', 'R', 'INT', 'плотность', 'кг/м^3', 9.1),
(127, 7, '2021-05-09', 'Nob', 'INT', 'Размер насадки 1', 'мм', 120),
(127, 7, '2021-05-09', 'W', 'INT', 'Размер насадки 1', 'мм', 155),
(127, 7, '2021-05-09', 'Diamdol', 'REAL', 'Размер насадки 1', 'мм', 216);

-- --------------------------------------------------------

--
-- Структура таблицы `input5`
--

CREATE TABLE `input5` (
  `calc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `input_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `input5c`
--

CREATE TABLE `input5c` (
  `calc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `input_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `input6`
--

CREATE TABLE `input6` (
  `calc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `input_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `input6`
--

INSERT INTO `input6` (`calc_id`, `user_id`, `date`, `input_name`, `data_type`, `discription`, `unit`, `value`) VALUES
(126, 7, '2021-05-09', 'pr6', 'INT', 'Плотность бурового раствора', 'кг/м^3', 1498),
(126, 7, '2021-05-09', 'plv', 'INT', 'Пластическая вязкость', 'мм', 24),
(126, 7, '2021-05-09', 'pns', 'INT', 'Предельное напряжение сдвига', 'мм', 5.76),
(126, 7, '2021-05-09', 'dskv6', 'REAL', 'Диаметр скважины', 'мм', 216),
(126, 7, '2021-05-09', 'dn6', 'INT', 'Наружный диаметр бурильных труб', 'мм', 127),
(126, 7, '2021-05-09', 'sc', 'INT', 'Скорость циркуляции', 'мм', 0),
(126, 7, '2021-05-09', 'L', 'INT', 'Длина колонны бурильных труб', 'мм', 3444),
(126, 7, '2021-05-09', 'dn26', 'INT', 'Наружный диаметр УБТ', 'мм', 165),
(126, 7, '2021-05-09', 'Lybt', 'INT', 'Длина колонны УБТ', 'мм', 213),
(126, 7, '2021-05-09', 'glv', 'INT', 'Глубина по вертикали', 'мм', 3658);

-- --------------------------------------------------------

--
-- Структура таблицы `output`
--

CREATE TABLE `output` (
  `calc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `output_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `output`
--

INSERT INTO `output` (`calc_id`, `user_id`, `date`, `output_name`, `data_type`, `discription`, `unit`, `value`) VALUES
(122, 7, '2021-05-08 14:20:45', 'Snas', 'INT', 'Площадь сечения насадок', 'мм^2', 379.8),
(122, 7, '2021-05-08 14:20:45', 'P1a', 'REAL', 'Число рейнольдса', 'дробное число', 3.79),
(122, 7, '2021-05-08 14:20:45', 'P2b', 'REAL', 'Коэффициент гидравлических сопротивлений', 'дробное число', 1.62),
(122, 7, '2021-05-08 14:20:45', 'Pc1z', 'REAL', '111', 'МПа', 19.21),
(122, 7, '2021-05-08 14:20:45', 'Pc2g', 'REAL', 'Потеря давления по длине на течение при движении нефти', 'МПа', 7.28),
(122, 7, '2021-05-08 14:20:45', 'M', 'REAL', ' при движении нефти', 'МПа', 2.276995305164319),
(122, 7, '2021-05-08 14:20:45', 'Poptz', 'REAL', ' при движении нефти', 'МПа', 9.4),
(122, 7, '2021-05-08 14:20:45', 'Poptg', 'REAL', 'при движении нефти', 'МПа', 6.1),
(122, 7, '2021-05-08 14:20:45', 'Qoptz', 'REAL', ' при движении нефти', 'МПа', 13.79),
(122, 7, '2021-05-08 14:20:45', 'Qoptg', 'REAL', ' при движении нефти', 'МПа', 11.4),
(122, 7, '2021-05-08 14:20:45', 'P1z', 'REAL', ' при движении нефти', 'МПа', 10.6),
(122, 7, '2021-05-08 14:20:45', 'P1g', 'REAL', 'при движении нефти', 'МПа', 13.9),
(122, 7, '2021-05-08 14:20:45', 'Snasz', 'INT', ' при движении нефти', 'МПа', 118.2),
(122, 7, '2021-05-08 14:20:45', 'Snasg', 'INT', ' при движении нефти', 'МПа', 85.3),
(122, 7, '2021-05-08 14:20:45', 'Dnasz', 'REAL', ' при движении нефти', 'МПа', 7.1),
(122, 7, '2021-05-08 14:20:45', 'Dnasg', 'REAL', ' при движении нефти', 'МПа', 6),
(122, 7, '2021-05-08 14:20:45', 'Nnasz', 'REAL', ' при движении нефти', 'МПа', 8.7),
(122, 7, '2021-05-08 14:20:45', 'Nnasg', 'REAL', 'Давление на устье скважины', 'МПа', 7.4);

-- --------------------------------------------------------

--
-- Структура таблицы `output2`
--

CREATE TABLE `output2` (
  `calc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `output_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `output2`
--

INSERT INTO `output2` (`calc_id`, `user_id`, `date`, `output_name`, `data_type`, `discription`, `unit`, `value`) VALUES
(121, 7, '2021-05-08', 'Vkol', 'INT', 'Скорость течения в кольцевом пространстве', 'мм^2', 0.43),
(121, 7, '2021-05-08', 'P_dav', 'REAL', 'Потеря давления на струйных насадках бурового долота', 'МПа', 17),
(121, 7, '2021-05-08', 'Nmos', 'INT', 'Гидравлическая мощность на буровом долоте', 'МПа', 654),
(121, 7, '2021-05-08', 'Ndel', 'INT', 'Потеря давления на долоте', 'МПа', 556),
(121, 7, '2021-05-08', 'Nmk', 'REAL', 'Потеря давления на долоте', 'МПа', 0.73),
(121, 7, '2021-05-08', 'procpot', 'INT', '% Потери давления на долоте', 'МПа', 85),
(121, 7, '2021-05-08', 'Vnas', 'REAL', 'Скорость струи из насадки бурового долота', 'МПа', 154),
(121, 7, '2021-05-08', 'J', 'INT', 'Сила удара струи о забой', 'МПа', 7241),
(121, 7, '2021-05-08', 'Jmm', 'INT', 'Сила удара струи о забой на квадратный мм площади долота', 'МПа', 0.095);

-- --------------------------------------------------------

--
-- Структура таблицы `output3`
--

CREATE TABLE `output3` (
  `calc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `output_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `output4`
--

CREATE TABLE `output4` (
  `calc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `output_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `output4`
--

INSERT INTO `output4` (`calc_id`, `user_id`, `date`, `output_name`, `data_type`, `discription`, `unit`, `value`) VALUES
(123, 7, '2021-05-08', 'dex', 'INT', 'Площадь сечения насадок', 'мм^2', 1.82),
(124, 7, '2021-05-09', 'dex', 'INT', 'Площадь сечения насадок', 'мм^2', 1.82),
(125, 7, '2021-05-09', 'dex', 'INT', 'Площадь сечения насадок', 'мм^2', 1.82),
(127, 7, '2021-05-09', 'dex', 'INT', 'Площадь сечения насадок', 'мм^2', 1.82);

-- --------------------------------------------------------

--
-- Структура таблицы `output5`
--

CREATE TABLE `output5` (
  `calc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `output_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `output5c`
--

CREATE TABLE `output5c` (
  `calc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `output_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `output6`
--

CREATE TABLE `output6` (
  `calc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `output_name` varchar(255) NOT NULL,
  `data_type` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `output6`
--

INSERT INTO `output6` (`calc_id`, `user_id`, `date`, `output_name`, `data_type`, `discription`, `unit`, `value`) VALUES
(126, 7, '2021-05-09', 'q36', 'INT', 'Отсчет вискозиметра', 'мм^2', 36),
(126, 7, '2021-05-09', 'q66', 'INT', 'Отсчет вискозиметра', 'мм', 60),
(126, 7, '2021-05-09', 'n6', 'INT', 'Реологические показания', 'л/с', 0.6891),
(126, 7, '2021-05-09', 'K6', 'INT', 'Реологические показания', 'м/c', 0.3644),
(126, 7, '2021-05-09', 'vx66', 'INT', 'Скорость в кольцевом пространстве вокруг бурильных труб', 'МПа', 1.05),
(126, 7, '2021-05-09', 'v62', 'INT', 'НСкорость в кольцевом пространстве вокруг УБТ', 'м/c', 1.65),
(126, 7, '2021-05-09', 'vkr6', 'INT', 'Критическкая скорость вокруг бурильных труб', 'м/c', 0.1),
(126, 7, '2021-05-09', 'vkry6', 'INT', 'Критическая скорость вокруг УБТ', 'м/c', 0.94),
(126, 7, '2021-05-09', 'pekv', 'INT', 'Эквивалентная циркуляция плотности', 'м/c', 1527.01);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `banned` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`, `status`, `banned`) VALUES
(7, 'Вася', 'admin', 'admin@mail.ru', '21232f297a57a5a743894a0e4a801fc3', 'uploads/1585034233xU5hAU-V2aY.jpg', 'admin', 0),
(8, 'Юзер сайта', 'user', 'user@mail.ru', 'ee11cbb19052e40b07aac0ca060c23ee', 'uploads/1585034630ARHIjis4Ojw.jpg', 'user', 0),
(10, 'fdsfsadf', 'test5', 'test5@mail.ru', '3997a400b89c107c998b2cae24ee378f', NULL, 'user', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `calculation`
--
ALTER TABLE `calculation`
  ADD PRIMARY KEY (`calc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `input`
--
ALTER TABLE `input`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `calc_id` (`calc_id`) USING BTREE,
  ADD KEY `value` (`value`);

--
-- Индексы таблицы `input2`
--
ALTER TABLE `input2`
  ADD KEY `calc_id` (`calc_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `value` (`value`);

--
-- Индексы таблицы `input3`
--
ALTER TABLE `input3`
  ADD KEY `calc_id` (`calc_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `value` (`value`);

--
-- Индексы таблицы `input4`
--
ALTER TABLE `input4`
  ADD KEY `calc_id` (`calc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `input5`
--
ALTER TABLE `input5`
  ADD KEY `calc_id` (`calc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `input5c`
--
ALTER TABLE `input5c`
  ADD KEY `calc_id` (`calc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `input6`
--
ALTER TABLE `input6`
  ADD KEY `calc_id` (`calc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `output`
--
ALTER TABLE `output`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `calc_id` (`calc_id`) USING BTREE;

--
-- Индексы таблицы `output2`
--
ALTER TABLE `output2`
  ADD KEY `calc_id` (`calc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `output3`
--
ALTER TABLE `output3`
  ADD KEY `calc_id` (`calc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `output4`
--
ALTER TABLE `output4`
  ADD KEY `calc_id` (`calc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `output5`
--
ALTER TABLE `output5`
  ADD KEY `calc_id` (`calc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `output5c`
--
ALTER TABLE `output5c`
  ADD KEY `calc_id` (`calc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `output6`
--
ALTER TABLE `output6`
  ADD KEY `calc_id` (`calc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `calculation`
--
ALTER TABLE `calculation`
  MODIFY `calc_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `calculation`
--
ALTER TABLE `calculation`
  ADD CONSTRAINT `calculation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `input`
--
ALTER TABLE `input`
  ADD CONSTRAINT `input_ibfk_1` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `input_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `input2`
--
ALTER TABLE `input2`
  ADD CONSTRAINT `input2_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `input2_ibfk_3` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `input3`
--
ALTER TABLE `input3`
  ADD CONSTRAINT `input3_ibfk_1` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `input3_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `input4`
--
ALTER TABLE `input4`
  ADD CONSTRAINT `input4_ibfk_1` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `input4_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `input5`
--
ALTER TABLE `input5`
  ADD CONSTRAINT `input5_ibfk_1` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `input5_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `input5c`
--
ALTER TABLE `input5c`
  ADD CONSTRAINT `input5c_ibfk_1` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `input5c_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `input6`
--
ALTER TABLE `input6`
  ADD CONSTRAINT `input6_ibfk_1` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `input6_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `output`
--
ALTER TABLE `output`
  ADD CONSTRAINT `output_ibfk_1` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `output_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `output2`
--
ALTER TABLE `output2`
  ADD CONSTRAINT `output2_ibfk_1` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `output2_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `output3`
--
ALTER TABLE `output3`
  ADD CONSTRAINT `output3_ibfk_1` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `output3_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `output4`
--
ALTER TABLE `output4`
  ADD CONSTRAINT `output4_ibfk_1` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `output4_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `output5`
--
ALTER TABLE `output5`
  ADD CONSTRAINT `output5_ibfk_1` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `output5_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `output5c`
--
ALTER TABLE `output5c`
  ADD CONSTRAINT `output5c_ibfk_1` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `output5c_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `output6`
--
ALTER TABLE `output6`
  ADD CONSTRAINT `output6_ibfk_1` FOREIGN KEY (`calc_id`) REFERENCES `calculation` (`calc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `output6_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `calculation` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
