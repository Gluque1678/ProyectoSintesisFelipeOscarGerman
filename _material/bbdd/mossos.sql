-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2016 a las 09:25:19
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

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

CREATE TABLE `dni` (
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
('46452322G', 'iglesias', 'macarro', 'felipe', 'Hombre', 'Española', '1980-01-08', '2024-01-08', 'L''Hospitalet de Llobregat', 'barcelona', 'Antonio y Luisa', 'Rambla Marina 200, 11-2', 'L''Hospitalet de Llobregat', '56486468D'),
('46997126F', 'Ortiz', 'Fernandez', 'Oscar', 'Hombre', 'ESP', '1995-12-19', '2018-02-02', 'Barcelona', 'Barcelona', 'Alberto/Cristina', 'C.Mineria 9 PO5 7', 'Barcelona', '08055L6D1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itv`
--

CREATE TABLE `itv` (
  `Matricula` varchar(8) COLLATE utf8_bin NOT NULL,
  `Numeroidentificacion` varchar(17) COLLATE utf8_bin NOT NULL,
  `Marca` varchar(50) COLLATE utf8_bin NOT NULL,
  `Denominacioncomercial` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisoconducir`
--

CREATE TABLE `permisoconducir` (
  `Apellidos` varchar(150) COLLATE utf8_bin NOT NULL,
  `Nombre` varchar(75) COLLATE utf8_bin NOT NULL,
  `Pais` varchar(50) COLLATE utf8_bin NOT NULL,
  `Fechanacimiento` date NOT NULL,
  `Fechaexpedicion` date NOT NULL,
  `Fechaexpiracion` date NOT NULL,
  `Expedidopor` int(4) NOT NULL,
  `Numeropermiso` char(9) COLLATE utf8_bin NOT NULL,
  `Codigos` varchar(15) COLLATE utf8_bin NOT NULL,
  `Tipopermiso` varchar(3) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `permisoconducir`
--

INSERT INTO `permisoconducir` (`Apellidos`, `Nombre`, `Pais`, `Fechanacimiento`, `Fechaexpedicion`, `Fechaexpiracion`, `Expedidopor`, `Numeropermiso`, `Codigos`, `Tipopermiso`) VALUES
('Iglesias Macarro', 'Felipe', 'España', '1980-01-08', '1999-05-03', '2024-05-03', 800, '46452322G', '', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguro`
--

CREATE TABLE `seguro` (
  `Matricula` varchar(8) COLLATE utf8_bin NOT NULL,
  `Fechavalidez` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `DNI` varchar(9) COLLATE utf8_bin NOT NULL,
  `Matricula` varchar(8) COLLATE utf8_bin NOT NULL,
  `Marca` varchar(255) COLLATE utf8_bin NOT NULL,
  `Modelo` varchar(255) COLLATE utf8_bin NOT NULL,
  `Color` varchar(50) COLLATE utf8_bin NOT NULL,
  `Titular` int(9) NOT NULL,
  `Direccion` varchar(150) COLLATE utf8_bin NOT NULL,
  `Municipio` varchar(75) COLLATE utf8_bin NOT NULL,
  `Segurovigente` tinyint(1) NOT NULL,
  `Estadorobo` tinyint(1) NOT NULL,
  `Itvvigente` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`DNI`, `Matricula`, `Marca`, `Modelo`, `Color`, `Titular`, `Direccion`, `Municipio`, `Segurovigente`, `Estadorobo`, `Itvvigente`) VALUES
('46997126F', '6666KLS', 'Audi', 'TT Sport', 'Blanco', 46997126, 'Calle Mineria 9', 'Barcelona', 0, 0, 0),
('46452322G', '6699BHT', 'VOLKSWAGEN', 'GOLF', 'NEGRO', 46452322, 'Rambla Marina 200, 11-2', 'Barcelona', 1, 0, 0);

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
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`Matricula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
