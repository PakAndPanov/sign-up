-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 08 2016 г., 02:15
-- Версия сервера: 10.1.16-MariaDB
-- Версия PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sign_up`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `text` longtext CHARACTER SET utf8 NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `author_id`, `receiver_id`, `text`, `status`) VALUES
(78, 1274, 1275, 'Привет', '1'),
(79, 1275, 1274, 'Пока', '1'),
(80, 1275, 1274, 'фывфвф', '1'),
(81, 1275, 1274, 'dasdadasdas', '1'),
(82, 1275, 1274, 'dasdas', '1'),
(83, 1275, 1274, 'dasdas', '1'),
(84, 1275, 1274, 'dasdas', '1'),
(85, 1275, 1274, 'dasdas', '1'),
(86, 1275, 1274, 'dasda', '1'),
(87, 1275, 1274, 'dasdas', '1'),
(88, 1275, 1274, 'dasdasdasda', '1'),
(89, 1275, 1274, 'dasdasdas', '1'),
(90, 1275, 1274, 'dadadas', '1'),
(91, 1275, 1274, 'dasdasda', '1'),
(92, 1275, 1274, 'dasdasdas', '1'),
(93, 1274, 1275, '111111111111', '1'),
(94, 1274, 1275, '1213131312312', '1'),
(95, 1274, 1275, '123123123123131231312312312312', '1'),
(96, 1274, 1275, 'hhhhhhhhhhhhhhhhh', '1'),
(97, 1275, 1274, 'mmmmmmmmmmmmmm', '1'),
(98, 1274, 1275, 'llllllllllllllllllll', '1'),
(99, 1275, 1274, 'kkkkkkkkkkkkkkkkk', '1'),
(100, 1275, 1274, 'nnnnnnnnnnnnnnnnnnnnnnn', '1'),
(101, 1274, 1275, '123', '1'),
(102, 1275, 1274, '123', '1'),
(103, 1275, 1274, '1234', '1'),
(107, 1275, 1274, '123', '1'),
(108, 1274, 1275, '123', '1'),
(109, 1275, 1274, 'чсв', '1'),
(110, 1275, 1274, '123', '1'),
(111, 1275, 1274, '123', '1'),
(112, 1275, 1274, '123', '1'),
(113, 1275, 1274, '12345', '1'),
(114, 1274, 1275, '123', '1'),
(115, 1274, 1275, '32', '1'),
(116, 1275, 1274, '1', '1'),
(117, 1274, 1275, '123', '1'),
(118, 1274, 1275, '123', '1'),
(119, 1275, 1274, '123', '1'),
(120, 1275, 1274, '123', '1'),
(121, 1275, 1274, '123', '1'),
(122, 1275, 1274, '2', '1'),
(123, 1275, 1274, '123', '1'),
(124, 1275, 1274, '123', '1'),
(125, 1275, 1274, '2', '1'),
(126, 1274, 1275, '123', '1'),
(127, 1274, 1275, '42342', '1'),
(128, 1275, 1274, '1312312312321', '1'),
(129, 1275, 1274, '23131', '1'),
(130, 1274, 1275, '2', '1'),
(131, 1274, 1275, '12312', '1'),
(132, 1274, 1275, '422131', '1'),
(133, 1275, 1274, '123', '1'),
(134, 1275, 1274, '123', '1'),
(135, 1274, 1275, '123', '1'),
(136, 1274, 1275, '3231', '1'),
(137, 1274, 1275, '4231', '1'),
(138, 1274, 1275, '123', '1'),
(139, 1274, 1275, '222', '1'),
(140, 1274, 1275, '3231', '1'),
(141, 1274, 1275, '123', '1'),
(142, 1275, 1274, '12321', '1'),
(143, 1275, 1274, '123', '1'),
(144, 1274, 1275, '123', '1'),
(145, 1275, 1274, '111', '1'),
(146, 1275, 1274, '1212', '1'),
(147, 1274, 1275, '12312', '1'),
(148, 1274, 1275, '123131231', '1'),
(149, 1275, 1274, 'asdasdas', '1'),
(150, 1275, 1274, 'asdadas', '1'),
(151, 1275, 1274, 'zzzz', '1'),
(152, 1275, 1274, 'при\r\n', '1'),
(153, 1274, 1275, 'привет\r\n', '1'),
(154, 1284, 1275, 'Привет', '1'),
(155, 1284, 1275, 'вфывфвфы', '1'),
(156, 1274, 1275, '12312', '1'),
(157, 1274, 1275, 'Привет', '1'),
(158, 1275, 1274, 'фывфывф', '1'),
(159, 1274, 1275, 'фывф', '1'),
(160, 1275, 1274, 'фывфывфы', '1'),
(161, 1284, 1274, 'sadasdadas', '1'),
(162, 1274, 1275, 'ыфвфывф', '1'),
(163, 1274, 1275, 'вфывфы', '1'),
(164, 1274, 1275, 'вфывф', '1'),
(165, 1274, 1275, 'прив', '1'),
(166, 1274, 1275, '', '1'),
(167, 1275, 1274, 'цуйцуйц', '1'),
(168, 1284, 1275, '123', '1'),
(169, 1274, 1275, 'прпара', '1'),
(170, 1275, 1284, 'dasdas', '1'),
(171, 1284, 1275, 'фывф', '1'),
(172, 1284, 1275, '1231312', '1'),
(173, 1284, 1275, '123123', '1'),
(174, 1275, 1284, 'ewqeqweq', '1'),
(175, 1275, 1284, '2131', '1'),
(176, 1275, 1284, 'dasdas', '1'),
(177, 1275, 1284, 'dsada', '1'),
(178, 1284, 1275, '1312', '1'),
(179, 1275, 1284, '23', '1'),
(180, 1275, 1284, 'dasda', '1'),
(181, 1275, 1284, 'sadas', '1'),
(182, 1275, 1284, 'dsa', '1'),
(183, 1275, 1284, '123', '1'),
(184, 1275, 1284, '13', '1'),
(185, 1284, 1275, '13', '1'),
(186, 1284, 1275, 'вфывфы', '1'),
(187, 1284, 1275, 'вфывфы', '1'),
(188, 1284, 1275, 'вфывфы', '1'),
(189, 1284, 1275, 'вфы', '1'),
(190, 1284, 1275, 'проп', '1'),
(191, 1284, 1275, 'вфывфы', '1'),
(192, 1284, 1275, 'фывфы', '1'),
(193, 1274, 1275, 'выфвфы', '1'),
(194, 1274, 1275, 'вфывф', '1'),
(195, 1274, 1275, 'вфывфы', '1'),
(196, 1284, 1275, 'вфывфывф', '1'),
(197, 1274, 1275, '21313', '1'),
(198, 1285, 1275, 'dsfsfsd', '1'),
(199, 1285, 1275, 'sadasd', '1'),
(200, 1274, 1275, 'fdsfs', '1'),
(201, 1274, 1275, 'fdss', '1'),
(202, 1274, 1275, '123', '1'),
(203, 1274, 1275, '13', '1'),
(204, 1274, 1275, 'dasdas', '1'),
(205, 1274, 1275, 'dsadas', '1'),
(206, 1285, 1275, 'dasdas', '1'),
(207, 1285, 1275, 'asda', '1'),
(208, 1285, 1275, 'asdas', '1'),
(209, 1285, 1275, 'dasda', '1'),
(210, 1285, 1275, 'dasdas', '1'),
(211, 1285, 1275, 'dasda', '1'),
(212, 1285, 1275, 'dsadas', '1'),
(213, 1285, 1275, 'dasda', '1'),
(214, 1285, 1275, '123', '1'),
(215, 1285, 1275, '12312', '1'),
(216, 1285, 1275, 'dasda', '1'),
(217, 1285, 1275, 'adas', '1'),
(218, 1285, 1275, 'dasda', '1'),
(219, 1274, 1275, 'sadas', '1'),
(220, 1274, 1275, 'dasdas', '1'),
(221, 1274, 1275, 'dasdas', '1'),
(222, 1274, 1275, '12345', '1'),
(223, 1274, 1275, '123', '1'),
(224, 1274, 1275, 'dsada', '1'),
(225, 1274, 1275, 'dasda', '1'),
(226, 1274, 1275, '123', '1'),
(227, 1274, 1275, 'dasda', '1'),
(228, 1274, 1275, 'dasdas', '1'),
(229, 1274, 1275, 'sadadas', '1'),
(230, 1285, 1275, 'dasdas', '1'),
(231, 1286, 1275, '123', '1'),
(232, 1286, 1275, 'sdadas', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `status` enum('0','1') NOT NULL,
  `date` int(11) NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `text`, `status`, `date`, `author`) VALUES
(1, 'Продукты', 'ПродуктыПродуктыПродуктыПродуктыПродуктыПродукты', 'ПродуктыПродуктыПродуктыПродуктыПродуктыПродукты', '', 1477823388, 'Олег'),
(2, 'Автомобиль', 'ПродуктыПродуктыПродуктыПродукты', 'ПродуктыПродуктыПродуктыПродукты', '', 1477823388, 'Андрей'),
(3, 'WikiLeaks рассказал о «проблемах с головой» у Клинтон', 'Решение Испании позволить российскому тяжелому авианесущему крейсеру «Адмирал Кузнецов» и группе российских кораблей, которые движутся к сирийскому Алеппо, дозаправиться в порту Сеута, осудили некоторые европейские политики, пишет PoliticoРешение Испании позволить российскому тяжелому авианесущему крейсеру «Адмирал Кузнецов» и группе российских кораблей, которые движутся к сирийскому Алеппо, дозаправиться в порту Сеута, осудили некоторые европейские политики, пишет Politico', 'Решение Испании позволить российскому тяжелому авианесущему крейсеру «Адмирал Кузнецов» и группе российских кораблей, которые движутся к сирийскому Алеппо, дозаправиться в порту Сеута, осудили некоторые европейские политики, пишет PoliticoРешение Испании позволить российскому тяжелому авианесущему крейсеру «Адмирал Кузнецов» и группе российских кораблей, которые движутся к сирийскому Алеппо, дозаправиться в порту Сеута, осудили некоторые европейские политики, пишет Politico', '1', 1477823388, 'Витя'),
(4, 'Испанию раскритиковали за дозаправку «Адмирала Кузнецова» в ее порту', 'Решение Испании позволить российскому тяжелому авианесущему крейсеру «Адмирал Кузнецов» и группе российских кораблей, которые движутся к сирийскому Алеппо, дозаправиться в порту Сеута, осудили некоторые европейские политики, пишет PoliticoРешение Испании позволить российскому тяжелому авианесущему крейсеру «Адмирал Кузнецов» и группе российских кораблей, которые движутся к сирийскому Алеппо, дозаправиться в порту Сеута, осудили некоторые европейские политики, пишет Politico', 'Решение Испании позволить российскому тяжелому авианесущему крейсеру «Адмирал Кузнецов» и группе российских кораблей, которые движутся к сирийскому Алеппо, дозаправиться в порту Сеута, осудили некоторые европейские политики, пишет PoliticoРешение Испании позволить российскому тяжелому авианесущему крейсеру «Адмирал Кузнецов» и группе российских кораблей, которые движутся к сирийскому Алеппо, дозаправиться в порту Сеута, осудили некоторые европейские политики, пишет Politico', '1', 1477823388, 'Катя');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `birth_date` int(11) DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gender` enum('0','1') NOT NULL,
  `e-mail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `friends` varchar(255) CHARACTER SET utf8 NOT NULL,
  `messages` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `birth_date`, `city`, `gender`, `e-mail`, `password`, `friends`, `messages`) VALUES
(1274, 'Лев', 'Панов', 1477823388, 'Арсеньев', '1', 'paleo@mail.ru', '25d55ad283aa400af464c76d713c07ad', 'YToxOntpOjA7czo0OiIxMjc1Ijt9', 'YToxODp7aTowO3M6MzoiMTk3IjtpOjE7czozOiIyMDAiO2k6MjtzOjM6IjIwMSI7aTozO3M6MzoiMjAyIjtpOjQ7czozOiIyMDMiO2k6NTtzOjM6IjIwNCI7aTo2O3M6MzoiMjA1IjtpOjc7czozOiIyMTkiO2k6ODtzOjM6IjIyMCI7aTo5O3M6MzoiMjIxIjtpOjEwO3M6MzoiMjIyIjtpOjExO3M6MzoiMjIzIjtpOjEyO3M6MzoiMjI0IjtpOjEzO3M6MzoiMjI1IjtpOjE0O3M6MzoiMjI2IjtpOjE1O3M6MzoiMjI3IjtpOjE2O3M6MzoiMjI4IjtpOjE3O3M6MzoiMjI5Ijt9'),
(1275, 'Сергей', 'Пак', 1477823425, 'Артем', '1', 'sergey@mail.ru', '25d55ad283aa400af464c76d713c07ad', 'YTozOntpOjA7aToxMjc0O2k6MTtzOjQ6IjEyODUiO2k6MjtzOjQ6IjEyODYiO30=', 'YTozNjp7aTowO3M6MzoiMTk3IjtpOjE7czozOiIxOTgiO2k6MjtzOjM6IjE5OSI7aTozO3M6MzoiMjAwIjtpOjQ7czozOiIyMDEiO2k6NTtzOjM6IjIwMiI7aTo2O3M6MzoiMjAzIjtpOjc7czozOiIyMDQiO2k6ODtzOjM6IjIwNSI7aTo5O3M6MzoiMjA2IjtpOjEwO3M6MzoiMjA3IjtpOjExO3M6MzoiMjA4IjtpOjEyO3M6MzoiMjA5IjtpOjEzO3M6MzoiMjEwIjtpOjE0O3M6MzoiMjExIjtpOjE1O3M6MzoiMjEyIjtpOjE2O3M6MzoiMjEzIjtpOjE3O3M6MzoiMjE0IjtpOjE4O3M6MzoiMjE1IjtpOjE5O3M6MzoiMjE2IjtpOjIwO3M6MzoiMjE3IjtpOjIxO3M6MzoiMjE4IjtpOjIyO3M6MzoiMjE5IjtpOjIzO3M6MzoiMjIwIjtpOjI0O3M6MzoiMjIxIjtpOjI1O3M6MzoiMjIyIjtpOjI2O3M6MzoiMjIzIjtpOjI3O3M6MzoiMjI0IjtpOjI4O3M6MzoiMjI1IjtpOjI5O3M6MzoiMjI2IjtpOjMwO3M6MzoiMjI3IjtpOjMxO3M6MzoiMjI4IjtpOjMyO3M6MzoiMjI5IjtpOjMzO3M6MzoiMjMwIjtpOjM0O3M6MzoiMjMxIjtpOjM1O3M6MzoiMjMyIjt9'),
(1285, 'Иван', 'Иванов', 749602800, 'fsdfsfsdfsdfs', '1', 'aaa@mail.ru', '25d55ad283aa400af464c76d713c07ad', 'YToxOntpOjA7aToxMjc1O30=', 'YToxNjp7aTowO3M6MzoiMTk4IjtpOjE7czozOiIxOTkiO2k6MjtzOjM6IjIwNiI7aTozO3M6MzoiMjA3IjtpOjQ7czozOiIyMDgiO2k6NTtzOjM6IjIwOSI7aTo2O3M6MzoiMjEwIjtpOjc7czozOiIyMTEiO2k6ODtzOjM6IjIxMiI7aTo5O3M6MzoiMjEzIjtpOjEwO3M6MzoiMjE0IjtpOjExO3M6MzoiMjE1IjtpOjEyO3M6MzoiMjE2IjtpOjEzO3M6MzoiMjE3IjtpOjE0O3M6MzoiMjE4IjtpOjE1O3M6MzoiMjMwIjt9'),
(1286, 'Антон', 'Сергеев', 749602800, 'алваываыыфвф', '1', 'bbb@mail.ru', '25d55ad283aa400af464c76d713c07ad', 'YToxOntpOjA7aToxMjc1O30=', 'YToyOntpOjA7czozOiIyMzEiO2k6MTtzOjM6IjIzMiI7fQ==');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1287;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
