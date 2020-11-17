-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2020 a las 14:08:48
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admin_sistemas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_sistemas`
--

CREATE TABLE `admin_sistemas` (
  `id` int(11) NOT NULL,
  `asignatura` varchar(255) NOT NULL,
  `profesor` varchar(255) NOT NULL,
  `horas_impartidas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin_sistemas`
--

INSERT INTO `admin_sistemas` (`id`, `asignatura`, `profesor`, `horas_impartidas`) VALUES
(11, 'sad', 'itziar', 23),
(12, 'ingles', 'voldemort', 40);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_sistemas`
--
ALTER TABLE `admin_sistemas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_sistemas`
--
ALTER TABLE `admin_sistemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
