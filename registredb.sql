-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2021 a las 17:12:44
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registredb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrevacant`
--

CREATE TABLE `registrevacant` (
  `id_vacant` int(3) NOT NULL,
  `titol_vacant` varchar(40) NOT NULL,
  `descripcio_vacant` varchar(100) NOT NULL,
  `descripcio_treball` varchar(100) NOT NULL,
  `tipus_vacant` varchar(30) NOT NULL,
  `empresa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrevacant`
--

INSERT INTO `registrevacant` (`id_vacant`, `titol_vacant`, `descripcio_vacant`, `descripcio_treball`, `tipus_vacant`, `empresa`) VALUES
(3, 'asdsad', 'asdad', 'asdad', 'asdad', 'kevanx'),
(4, 'qweqe', 'qweqe', 'qweqe', 'fct', 'kevin'),
(5, 'adsf', 'asdff', 'asdf', 'dual', 'si'),
(6, 'hola', 'hola', 'hola', 'fct', 'si'),
(7, 'Helpdesk', 'sadasdfg', 'Dar soporte', 'Dual', 'si'),
(8, 'dfasf', 'erwt', 'Dar soporte', 'fct', 'si'),
(9, '', '', '', '', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id_rol`, `rol`) VALUES
(1, 'alumne'),
(2, 'exalumne'),
(3, 'empresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE `usuaris` (
  `usuari` varchar(30) NOT NULL,
  `empresas` varchar(30) NOT NULL,
  `contacte` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `id_alumne` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`usuari`, `empresas`, `contacte`, `email`, `password`, `id_alumne`, `id_rol`) VALUES
('kevin', 'kevin', 'kevin', 'kevin@kevin.com', '1234', 15, 3),
('kevin2', '', 'kevin2', 'kevin@kevan.com', '1234', 16, 1),
('si', 'si', 'si', 'si', '1234', 17, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrevacant`
--
ALTER TABLE `registrevacant`
  ADD PRIMARY KEY (`id_vacant`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id_alumne`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrevacant`
--
ALTER TABLE `registrevacant`
  MODIFY `id_vacant` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id_alumne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD CONSTRAINT `usuaris_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rols` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
