-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 15 2021 г., 14:27
-- Версия сервера: 8.0.19
-- Версия PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zay`
--

-- --------------------------------------------------------

--
-- Структура таблицы `managers`
--

CREATE TABLE `managers` (
  `id` int NOT NULL,
  `surname` text NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `mail` text NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `managers`
--

INSERT INTO `managers` (`id`, `surname`, `name`, `password`, `mail`, `phone`) VALUES
(1, 'Векслер', 'Евгений', '12', 'wexler@mail.ru', '8986237645');

-- --------------------------------------------------------

--
-- Структура таблицы `zayava`
--

CREATE TABLE `zayava` (
  `id_zay` int NOT NULL,
  `FIO` text NOT NULL,
  `Address` text NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` bigint NOT NULL,
  `opis` text,
  `date1` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zayava`
--

INSERT INTO `zayava` (`id_zay`, `FIO`, `Address`, `email`, `phone`, `opis`, `date1`) VALUES
(7, 'Иван Иванов', 'hj@han.ru', 'ул Ленина 12', 8911567854, 'Позвоните мне', '2021-07-14'),
(8, 'Мария Смирнова', 'smir@yandex.ru', 'ул Ленина 15', 8911567822, 'Свяжитесь через почту', '2021-07-05'),
(9, 'Мария Валерьевна Конокова', 'smir@yandex.ru', 'conac@ik.ru', 8981890122, 'Перенести конференцию на два дня', '2021-07-14'),
(10, 'Гженов Андрей', 'Москва, ул Мореходова 12', 'more3@yandex.ru', 89160777202, 'Измените мои данные в вашей системе', '2021-07-15'),
(11, 'Фомина Елена', 'lena@mail.ru', 'Москва, ул Ленина12', 89160777233, 'Измените мои данные в вашей системе', '2021-07-15');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zayava`
--
ALTER TABLE `zayava`
  ADD PRIMARY KEY (`id_zay`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `zayava`
--
ALTER TABLE `zayava`
  MODIFY `id_zay` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
