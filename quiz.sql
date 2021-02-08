-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-02-2021 a las 16:55:28
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id_pregunta` int(5) NOT NULL,
  `pregunta` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `respuestaA` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `respuestaB` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `respuestaC` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `respuestaD` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `respuestaCorrecta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` blob DEFAULT NULL,
  `id_categoria` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrarse`
--

CREATE TABLE `registrarse` (
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(2) NOT NULL,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(9) NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'jugador',
  `puntuacion_total` int(11) DEFAULT NULL,
  `p_categoria1` int(11) DEFAULT NULL,
  `p_categoria2` int(11) DEFAULT NULL,
  `p_categoria3` int(11) DEFAULT NULL,
  `p_categoria4` int(11) DEFAULT NULL,
  `p_categoria5` int(11) DEFAULT NULL,
  `p_categoria6` int(11) DEFAULT NULL,
  `p_categoria7` int(11) DEFAULT NULL,
  `p_categoria8` int(11) DEFAULT NULL,
  `p_categoria9` int(11) DEFAULT NULL,
  `p_categoria10` int(11) DEFAULT NULL,
  `p_categoria11` int(11) DEFAULT NULL,
  `p_categoria12` int(11) DEFAULT NULL,
  `t_categoria1` int(11) DEFAULT NULL,
  `t_categoria2` int(11) DEFAULT NULL,
  `t_categoria3` int(11) DEFAULT NULL,
  `t_categoria4` int(11) DEFAULT NULL,
  `t_categoria5` int(11) DEFAULT NULL,
  `t_categoria6` int(11) DEFAULT NULL,
  `t_categoria7` int(11) DEFAULT NULL,
  `t_categoria8` int(11) DEFAULT NULL,
  `t_categoria9` int(11) DEFAULT NULL,
  `t_categoria10` int(11) DEFAULT NULL,
  `t_categoria11` int(11) DEFAULT NULL,
  `t_categoria12` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registrarse`
--

INSERT INTO `registrarse` (`usuario`, `nombre`, `apellido`, `edad`, `dni`, `telefono`, `email`, `pass`, `categoria`, `puntuacion_total`, `p_categoria1`, `p_categoria2`, `p_categoria3`, `p_categoria4`, `p_categoria5`, `p_categoria6`, `p_categoria7`, `p_categoria8`, `p_categoria9`, `p_categoria10`, `p_categoria11`, `p_categoria12`, `t_categoria1`, `t_categoria2`, `t_categoria3`, `t_categoria4`, `t_categoria5`, `t_categoria6`, `t_categoria7`, `t_categoria8`, `t_categoria9`, `t_categoria10`, `t_categoria11`, `t_categoria12`) VALUES
('ghg', 'jh', 'ghg', 0, '4', 5, 'jh', 'kk', 'jugador', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('h', 'h', 'h', 0, 'h', 0, 'h', 'h', 'jugador', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('jhkjh', 'jkhkjh', 'jhkjh', 0, 'kjhkjh', 0, 'jkhkjhk', 'jhkjh', 'jugador', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('kjhkjh', 'kjhkjh', 'kjh', 0, 'ghjhg', 0, 'kjhkjh', 'kjhjkh', 'jugador', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('p', 'p', 'p', 0, 'p', 0, 'p', 'p', 'jugador', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('q', 'q', 'q', 0, 'q', 0, 'q', 'q', 'jugador', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('t', 't', 't', 0, 't', 0, 't', 't', 'jugador', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `FK_id_categoria` (`id_categoria`);

--
-- Indices de la tabla `registrarse`
--
ALTER TABLE `registrarse`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id_pregunta` int(5) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `FK_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
