-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2025 a las 06:49:50
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `programacion`
--
CREATE DATABASE IF NOT EXISTS `programacion` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `programacion`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_programa`
--

CREATE TABLE `tb_programa` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cedula` int(11) NOT NULL,
  `tlfono` varchar(11) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `contrasena` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_programa`
--

INSERT INTO `tb_programa` (`id`, `nombres`, `apellidos`, `cedula`, `tlfono`, `correo`, `contrasena`) VALUES
(4, 'Maria Alejandra', 'Rodriguez Rivero', 31015236, '04267845963', 'Maria@gmail.com', '123'),
(5, 'Lola Sofia', 'Gomez Rivas', 30555076, '2147483647', 'Lola@gmail.com', '123'),
(6, 'Marta Julia', 'Mendez Mato', 31716295, '04124998758', 'Marta@gmail.com', '123'),
(7, 'Michelle Rowina', 'Medina Gangone', 31716295, '04123322556', 'Michelle@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_programa`
--
ALTER TABLE `tb_programa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_programa`
--
ALTER TABLE `tb_programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
