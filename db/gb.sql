-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Апр 21 2022 г., 08:52
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `session_id`, `product_id`) VALUES
(10, 'ndgr017vnhso62kpqu9ukeo3fe5jtqc1', 1),
(11, 'ndgr017vnhso62kpqu9ukeo3fe5jtqc1', 2),
(12, 'acca5bbjkqd8t1n9emjq3knc9hcvlpdq', 10),
(13, 'acca5bbjkqd8t1n9emjq3knc9hcvlpdq', 6),
(14, '8i08ofurf1e6eat1e28foa4s7km0lp9t', 12),
(15, '8i08ofurf1e6eat1e28foa4s7km0lp9t', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `feedback` text NOT NULL,
  `img_id` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `user_name`, `feedback`, `img_id`) VALUES
(149, 'Гудислав', 'Где я?', 0),
(158, 'Брячислава', 'Кто я?', 0),
(160, 'Акакий', 'Что я?', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `views` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `img_name`, `views`) VALUES
(1, '01.jpg', 6),
(2, '02.jpg', 1),
(3, '03.jpg', 0),
(4, '04.jpg', 0),
(5, '05.jpg', 0),
(6, '06.jpg', 0),
(7, '07.jpg', 0),
(8, '08.jpg', 0),
(9, '09.jpg', 0),
(10, '10.jpg', 0),
(11, '11.jpg', 0),
(12, '12.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `views` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `product_name`, `price`, `product_img`, `description`, `views`) VALUES
(1, 'Product 1', 100, 'product-01.jpg', 'Description product 1', 26),
(2, 'Product 2', 200, 'product-02.jpg', 'Description product 2', 22),
(3, 'Product 3', 300, 'product-03.jpg', 'Description product 3', 24),
(4, 'Product 4', 400, 'product-04.jpg', 'Description product 4', 2),
(5, 'Product 5', 500, 'product-05.jpg', 'Description product 5', 0),
(6, 'Product 6', 600, 'product-06.jpg', 'Description product 6', 1),
(7, 'Product 7', 700, 'product-07.jpg', 'Description product 7', 1),
(8, 'Product 8', 800, 'product-08.jpg', 'Description product 8', 2),
(9, 'Product 9', 900, 'product-09.jpg', 'Description product 9', 7),
(10, 'Product 10', 1000, 'product-10.jpg', 'Description product 10', 15),
(11, 'Product 11', 1100, 'product-11.jpg', 'Description product 11', 0),
(12, 'Product 12', 1200, 'product-12.jpg', 'Description product 12', 2),
(13, 'Product 13', 1300, 'product-13.jpg', 'Description product 13', 0),
(88, 'Пицца', 100, 'pizza.jpg', 'Yummy', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `user_session` text NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_surname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `total_price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_session`, `user_name`, `user_surname`, `phone`, `status`, `total_price`) VALUES
(22, '8i08ofurf1e6eat1e28foa4s7km0lp9t', 'Путята', 'Акакиев', '456456', 'В обработке', 2300);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', '123', '$2y$10$hzcAJWKf4KGoFP94HgqgiuqkKK3BD3DObf9je255wGzQvVHC5nZ6q'),
(2, 'user1', '321', '$2y$10$MUjky0ZxCKKP5G75EYKlnuQkCHDq8HfJUaOnh7W.c.qJ1oBuqXvn2'),
(10, 'Путята', '234', '$2y$10$m2yKhODvt6nzwMoZC87xeu0uT3Z4GxTfy3CaipuQeroIOh4iSkmMW');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`product_name`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
