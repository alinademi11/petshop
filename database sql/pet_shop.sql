-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 12 2023 г., 23:46
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pet_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `addcart`
--

CREATE TABLE `addcart` (
  `cart_id` int NOT NULL,
  `pet_id` int NOT NULL,
  `user_id` int NOT NULL,
  `qty` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `addcart`
--

INSERT INTO `addcart` (`cart_id`, `pet_id`, `user_id`, `qty`) VALUES
(1, 10, 2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `newuser`
--

CREATE TABLE `newuser` (
  `id` int NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `user_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `newuser`
--

INSERT INTO `newuser` (`id`, `username`, `password`, `email`, `pincode`, `user_img`) VALUES
(1, 'user', 'user', 'example@gmail.com', '605005', 'beagle dog1.jpg'),
(2, 'hgjhg', '2222', 'ffgdfg@ss', '222222', 'Animals (30).jpg'),
(3, 'Alina', '1234', 'aa@aa', '122222', 'air13.jpg'),
(4, 'alya', '123456', 'asa@aa1', '123456', 'best_dinner_116004.png');

-- --------------------------------------------------------

--
-- Структура таблицы `order_placed`
--

CREATE TABLE `order_placed` (
  `order_id` int NOT NULL,
  `pet_id` int NOT NULL,
  `qty` int NOT NULL,
  `user_id` int NOT NULL,
  `order_cancel` int NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `order_placed`
--

INSERT INTO `order_placed` (`order_id`, `pet_id`, `qty`, `user_id`, `order_cancel`, `order_date`) VALUES
(15, 6, 5, 1, 0, '2020-07-12 10:43:23');

-- --------------------------------------------------------

--
-- Структура таблицы `petdetails`
--

CREATE TABLE `petdetails` (
  `pet_id` int NOT NULL,
  `pet_name` varchar(50) NOT NULL,
  `pet_type` varchar(50) NOT NULL,
  `pet_color` varchar(20) NOT NULL,
  `pet_rate` varchar(10) NOT NULL,
  `pet_keywords` varchar(200) NOT NULL,
  `pet_img1` varchar(50) NOT NULL,
  `pet_img2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `petdetails`
--

INSERT INTO `petdetails` (`pet_id`, `pet_name`, `pet_type`, `pet_color`, `pet_rate`, `pet_keywords`, `pet_img1`, `pet_img2`) VALUES
(14, 'Cesar', 'lakom', '50 g', '53', 'lakom', 'best_dinner_116004.png', 'best_dinner_116004.png'),
(22, 'Cesar', 'vlkorm', '18 g', '20', 'mini', 'b02b684e9540c2998b614aa89571be85.jpg', 'dd206f659e518e2db04ec58cdee8e33d.jpg'),
(23, 'Cesar', 'vlkorm', '18 g', '23', 'mini', 'ec0f0983f86b03106aa252d471cc768d.jpg', '0d098602d5ce278530308a3adc057741.jpg'),
(24, 'Cesar', 'vlkorm', '18 g', '20 ', 'mini', '6de056019326280417c6dbed5030c2a5.jpg', '6a41b1d9970276039441ec0b6eb7767e.jpg'),
(25, 'Petstages', 'play', '200 g', '56', 'Petstages', '509ef94934d7e14122287ef174333527.jpg', '509ef94934d7e14122287ef174333527.jpg'),
(26, 'Petstages', 'play', '110 g', '40', 'Petstages', '3a5b2e499ec543bb22c55a67fa614bd0.jpg', '3a5b2e499ec543bb22c55a67fa614bd0.jpg'),
(27, 'Royal Canin', 'mgkorm', '4 kg', '233', 'mini', 'rc_31850300r0_1.png', 'rc_31850300r0_1.png'),
(28, 'Royal Canin', 'mgkorm', '3 kg', '564', 'mini', 'rc_24470100r0_1.png', 'rc_24470100r0_1.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Индексы таблицы `newuser`
--
ALTER TABLE `newuser`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_placed`
--
ALTER TABLE `order_placed`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `petdetails`
--
ALTER TABLE `petdetails`
  ADD PRIMARY KEY (`pet_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `addcart`
--
ALTER TABLE `addcart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `newuser`
--
ALTER TABLE `newuser`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `order_placed`
--
ALTER TABLE `order_placed`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `petdetails`
--
ALTER TABLE `petdetails`
  MODIFY `pet_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
