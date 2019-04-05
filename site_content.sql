-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 03 2019 г., 16:11
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site_content`
--
CREATE DATABASE IF NOT EXISTS `site_content` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `site_content`;

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(80) NOT NULL,
  `h2` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `priority` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `pic`, `h2`, `description`, `priority`) VALUES
(1, '/icon/computer.png', 'Создадим продающий сайт', 'Нет сайта? Не беда. Наши специалисты разработают оптимизированный продающий сайт для Вашей компании в минимальные сроки.', 10),
(2, '/icon/networking2.png', 'Выберем аудиторию', 'Составим аудиторию Ваших потенциальных клиентов для качественных продаж.', 20),
(3, '/icon/settings.png', 'Настроим статистику', 'Настроим статистику сайта, будем анализировать действия пользователей и улучшать функционал.', 30),
(4, '/icon/networking.png', 'Разовьём соц. сети', 'Для качественных продаж крайне необходимо вести активную деятельность в социальных сетях. Наши специалисты комплексно подойдут к вопросу привлечения клиентов через соц. сети.', 40),
(5, '/icon/laptop.png', 'Минимизируем бюджет ', 'Главное не тратить деньги впустую. Мы следим за тем, какая реклама даёт максимальный результат и стремимся найти самые активные точки продаж для минимизации рекламного бюджета.', 50),
(6, '/icon/startup.png', 'Привлечём клиентов', 'Наша цель - максимальное количество клиентов для Ваших продаж. Мы работаем по всем направлениям в интернет-маркетинге для того, чтобы найти именно Ваших потенциальных клиентов!', 60);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
