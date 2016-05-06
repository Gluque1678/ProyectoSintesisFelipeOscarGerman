-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2016 a las 10:32:42
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mossos`
--
CREATE DATABASE IF NOT EXISTS `mossos` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `mossos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dni`
--

DROP TABLE IF EXISTS `dni`;
CREATE TABLE IF NOT EXISTS `dni` (
  `Num` varchar(9) COLLATE utf8_bin NOT NULL,
  `Primerapellido` varchar(75) COLLATE utf8_bin NOT NULL,
  `Segundoapellido` varchar(75) COLLATE utf8_bin NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `Sexo` enum('Hombre','Mujer') COLLATE utf8_bin NOT NULL,
  `Nacionalidad` varchar(50) COLLATE utf8_bin NOT NULL,
  `Fechanacimiento` date NOT NULL,
  `Validez` date NOT NULL,
  `Lugarnacimiento` varchar(50) COLLATE utf8_bin NOT NULL,
  `Provincia` varchar(50) COLLATE utf8_bin NOT NULL,
  `Hijode` varchar(100) COLLATE utf8_bin NOT NULL,
  `Domicilio` varchar(150) COLLATE utf8_bin NOT NULL,
  `Lugardomicilio` varchar(100) COLLATE utf8_bin NOT NULL,
  `Equipo` varchar(9) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `dni`
--

INSERT INTO `dni` (`Num`, `Primerapellido`, `Segundoapellido`, `Nombre`, `Sexo`, `Nacionalidad`, `Fechanacimiento`, `Validez`, `Lugarnacimiento`, `Provincia`, `Hijode`, `Domicilio`, `Lugardomicilio`, `Equipo`) VALUES
('46997126F', 'Ortiz', 'Fernandez', 'Oscar', 'Hombre', 'ESP', '1995-12-19', '2018-02-02', 'Barcelona', 'Barcelona', 'Alberto/Cristina', 'C.Mineria 9 PO5 7', 'Barcelona', '08055L6D1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itv`
--

DROP TABLE IF EXISTS `itv`;
CREATE TABLE IF NOT EXISTS `itv` (
  `Matricula` varchar(8) COLLATE utf8_bin NOT NULL,
  `Numeroidentificacion` varchar(17) COLLATE utf8_bin NOT NULL,
  `Marca` varchar(50) COLLATE utf8_bin NOT NULL,
  `Denominacioncomercial` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisoconducir`
--

DROP TABLE IF EXISTS `permisoconducir`;
CREATE TABLE IF NOT EXISTS `permisoconducir` (
  `Apellidos` varchar(150) COLLATE utf8_bin NOT NULL,
  `Nombre` varchar(75) COLLATE utf8_bin NOT NULL,
  `Pais` varchar(50) COLLATE utf8_bin NOT NULL,
  `Fechanacimiento` date NOT NULL,
  `Fechaexpedicion` date NOT NULL,
  `Fechaexpiracion` date NOT NULL,
  `Expedidopor` int(4) NOT NULL,
  `Numeropermiso` int(9) NOT NULL,
  `Codigos` varchar(15) COLLATE utf8_bin NOT NULL,
  `Tipopermiso` varchar(3) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguro`
--

DROP TABLE IF EXISTS `seguro`;
CREATE TABLE IF NOT EXISTS `seguro` (
  `Matricula` varchar(8) COLLATE utf8_bin NOT NULL,
  `Fechavalidez` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopermiso`
--

DROP TABLE IF EXISTS `tipopermiso`;
CREATE TABLE IF NOT EXISTS `tipopermiso` (
  `id` int(11) NOT NULL,
  `tipopermiso` varchar(3) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipopermiso`
--

INSERT INTO `tipopermiso` (`id`, `tipopermiso`) VALUES
(1, 'AM'),
(2, 'A1'),
(3, 'A2'),
(4, 'A'),
(5, 'B1'),
(6, 'B'),
(7, 'C1'),
(8, 'C'),
(9, 'D1'),
(10, 'D'),
(11, 'BE'),
(12, 'C1E'),
(13, 'CE'),
(14, 'D1E'),
(15, 'DE'),
(16, 'BTP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

DROP TABLE IF EXISTS `vehiculo`;
CREATE TABLE IF NOT EXISTS `vehiculo` (
  `DNI` varchar(9) COLLATE utf8_bin NOT NULL,
  `Matricula` varchar(8) COLLATE utf8_bin NOT NULL,
  `Marca` varchar(255) COLLATE utf8_bin NOT NULL,
  `Modelo` varchar(255) COLLATE utf8_bin NOT NULL,
  `Color` varchar(50) COLLATE utf8_bin NOT NULL,
  `Titular` int(9) NOT NULL,
  `Direccion` varchar(150) COLLATE utf8_bin NOT NULL,
  `Municipio` varchar(75) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dni`
--
ALTER TABLE `dni`
  ADD PRIMARY KEY (`Num`),
  ADD UNIQUE KEY `Num` (`Num`);

--
-- Indices de la tabla `itv`
--
ALTER TABLE `itv`
  ADD PRIMARY KEY (`Matricula`);

--
-- Indices de la tabla `permisoconducir`
--
ALTER TABLE `permisoconducir`
  ADD PRIMARY KEY (`Numeropermiso`);

--
-- Indices de la tabla `seguro`
--
ALTER TABLE `seguro`
  ADD PRIMARY KEY (`Matricula`);

--
-- Indices de la tabla `tipopermiso`
--
ALTER TABLE `tipopermiso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`Matricula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tipopermiso`
--
ALTER TABLE `tipopermiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
