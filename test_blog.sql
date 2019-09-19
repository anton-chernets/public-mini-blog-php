-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 20 2019 г., 01:31
-- Версия сервера: 5.7.25
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `post` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `postid`, `name`, `post`) VALUES
(38, 55, 'voluptas', 'voluptas'),
(39, 47, '  required', '  required'),
(37, 45, 'voluptas', 'voluptas'),
(36, 45, 'voluptas', 'voluptas'),
(35, 45, 'voluptas', 'voluptas'),
(34, 43, 'voluptas', 'voluptas'),
(33, 43, 'voluptas', 'voluptas'),
(32, 43, 'voluptas', 'voluptas'),
(31, 43, 'voluptas', 'voluptas'),
(30, 43, 'voluptas', 'voluptas'),
(29, 43, 'voluptas', 'voluptas'),
(28, 43, 'dolorem', 'voluptas'),
(40, 55, 'тест', 'тест'),
(41, 55, 'тест', 'тест'),
(42, 55, 'тест', 'тест'),
(43, 54, 'тест', 'тест'),
(44, 54, 'тест', 'тест'),
(45, 54, 'тест', 'тест'),
(46, 54, 'тест', 'тест'),
(47, 54, 'тест', 'тест'),
(48, 55, 'тест', 'тест'),
(49, 55, 'тест', 'тест'),
(50, 55, 'тест', 'тест'),
(51, 55, 'тест', 'тест'),
(52, 55, 'тест', 'тест'),
(53, 55, 'тест', 'тест'),
(54, 54, 'тест', 'тест'),
(55, 54, 'тест', 'тест'),
(56, 54, 'тест', 'тест'),
(57, 54, 'тест', 'тест'),
(58, 54, 'тест', 'тест'),
(59, 54, 'тест', 'тест'),
(60, 54, 'тест', 'тест'),
(61, 54, 'тест', 'тест');

-- --------------------------------------------------------

--
-- Структура таблицы `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `ctime` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `post` text NOT NULL,
  `commentsCount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `publications`
--

INSERT INTO `publications` (`id`, `author`, `ctime`, `title`, `post`, `commentsCount`) VALUES
(55, 'тест тест тест тест тест тест', 1568905742, 'тест тест тест тест тест тест', 'тест тест тест тест тест тест', 0),
(50, 'test', 1568902603, 'test', 'test', 0),
(51, 'test', 1568902611, 'test', 'test', 0),
(52, 'test', 1568902666, 'test', 'test', 0),
(53, 'test', 1568903173, 'test', 'test', 0),
(54, 'тест тест тест тест тест тест', 1568903959, 'тест тест тест тест тест тест', 'тест тест тест тест тест тест', 7);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT для таблицы `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
