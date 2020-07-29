-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 29 2020 г., 15:55
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `future`
--
use munko;

-- --------------------------------------------------------

--
-- Структура таблицы `future_comments`
--

CREATE TABLE `future_comments` (
  `id` int(32) NOT NULL,
  `comment` text NOT NULL,
  `datetime` datetime NOT NULL,
  `name` text NOT NULL,
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `future_comments`
--

INSERT INTO `future_comments` (`id`, `comment`, `datetime`, `name`, `ip`) VALUES
(1, 'Почему такое сложное задание??? Мне кажется, нужно быть первоклассным программистом, чтобы выполнить его  :(', '2020-07-29 10:13:57', 'Артемий', '127.0.0.1'),
(2, 'Если включить мозги, то все элементарно Ватсон!', '2020-07-29 13:22:37', 'Евдоким', '127.0.0.1'),
(3, 'Спасибо за Ваше тестовое задание. Оно, действительно, изумительное', '2020-07-29 13:23:11', 'Савва', '127.0.0.1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `future_comments`
--
ALTER TABLE `future_comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `future_comments`
--
ALTER TABLE `future_comments`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
