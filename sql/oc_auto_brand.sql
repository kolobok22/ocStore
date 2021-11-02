-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: db
-- Время создания: Ноя 02 2021 г., 19:24
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `oc_store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `oc_auto_brand`
--

CREATE TABLE `oc_auto_brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_short` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `oc_auto_brand`
--

INSERT INTO `oc_auto_brand` (`id`, `name`, `name_short`) VALUES
(1, 'Acura', 'acura'),
(2, 'Alfa-Romeo', 'alfa-romeo'),
(3, 'Aston-Martin', 'aston-martin'),
(4, 'Audi', 'audi'),
(5, 'BMW', 'bmw'),
(6, 'BYD', 'byd'),
(7, 'Bentley', 'bentley'),
(8, 'Brilliance', 'brilliance'),
(9, 'Cadillac', 'cadillac'),
(10, 'Changan', 'changan'),
(11, 'Chery', 'chery'),
(12, 'Cheryexeed', 'cheryexeed'),
(13, 'Chevrolet', 'chevrolet'),
(14, 'Chrysler', 'chrysler'),
(15, 'Citroen', 'citroen'),
(16, 'Daewoo', 'daewoo'),
(17, 'Daihatsu', 'daihatsu'),
(18, 'Datsun', 'datsun'),
(19, 'Dodge', 'dodge'),
(20, 'Dongfeng', 'dongfeng'),
(21, 'Ds', 'ds'),
(22, 'Dw', 'dw'),
(23, 'FAW', 'faw'),
(24, 'Ferrari', 'ferrari'),
(25, 'Fiat', 'fiat'),
(26, 'Ford', 'ford'),
(27, 'Foton', 'foton'),
(28, 'Gac', 'gac'),
(29, 'Geely', 'geely'),
(30, 'Genesis', 'genesis'),
(31, 'Great-Wall', 'great-wall'),
(32, 'Hafei', 'hafei'),
(33, 'Haima', 'haima'),
(34, 'Haval', 'haval'),
(35, 'Hawtai', 'hawtai'),
(36, 'Honda', 'honda'),
(37, 'Hummer', 'hummer'),
(38, 'Hyundai', 'hyundai'),
(39, 'Infiniti', 'infiniti'),
(40, 'Iran-Khodro', 'iran-khodro'),
(41, 'Isuzu', 'isuzu'),
(42, 'Iveco', 'iveco'),
(43, 'Jac', 'jac'),
(44, 'Jaguar', 'jaguar'),
(45, 'Jeep', 'jeep'),
(46, 'Kia', 'kia'),
(47, 'Lamborghini', 'lamborghini'),
(48, 'Land Rover', 'land-rover'),
(49, 'Lexus', 'lexus'),
(50, 'Lifan', 'lifan'),
(51, 'Lincoln', 'lincoln'),
(52, 'Maserati', 'maserati'),
(53, 'Maybach', 'maybach'),
(54, 'Mazda', 'mazda'),
(55, 'Mercedes', 'mercedes'),
(56, 'Mini', 'mini'),
(57, 'Mitsubishi', 'mitsubishi'),
(58, 'Nissan', 'nissan'),
(59, 'Opel', 'opel'),
(60, 'Peugeot', 'peugeot'),
(61, 'Pontiac', 'pontiac'),
(62, 'Porsche', 'porsche'),
(63, 'Ravon', 'ravon'),
(64, 'Renault', 'renault'),
(65, 'Rolls-Royce', 'rolls-royce'),
(66, 'Rover', 'rover'),
(67, 'Saab', 'saab'),
(68, 'Seat', 'seat'),
(69, 'Skoda', 'skoda'),
(70, 'Smart', 'smart'),
(71, 'Ssang-Yong', 'ssang-yong'),
(72, 'Subaru', 'subaru'),
(73, 'Suzuki', 'suzuki'),
(74, 'Tagaz', 'tagaz'),
(75, 'Tesla', 'tesla'),
(76, 'Toyota', 'toyota'),
(77, 'Volkswagen', 'volkswagen'),
(78, 'Volvo', 'volvo'),
(79, 'Vortex (tagaz)', 'vortex-tagaz'),
(80, 'ZAZ', 'zaz'),
(81, 'Zotye', 'zotye'),
(82, 'АЗЛК', 'azlk'),
(83, 'ВАЗ', 'vaz'),
(84, 'ГАЗ', 'gaz'),
(85, 'Ока', 'oka'),
(86, 'УАЗ', 'uaz');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `oc_auto_brand`
--
ALTER TABLE `oc_auto_brand`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `oc_auto_brand`
--
ALTER TABLE `oc_auto_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
