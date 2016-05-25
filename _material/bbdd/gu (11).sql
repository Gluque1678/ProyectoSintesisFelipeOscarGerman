-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2016 a las 11:48:23
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gu`
--
CREATE DATABASE IF NOT EXISTS `gu` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `gu`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agente`
--

DROP TABLE IF EXISTS `agente`;
CREATE TABLE IF NOT EXISTS `agente` (
  `TIP` int(4) NOT NULL,
  `Nombre` varchar(75) COLLATE utf8_bin NOT NULL,
  `Primerapellido` varchar(75) COLLATE utf8_bin NOT NULL,
  `Segundoapellido` varchar(75) COLLATE utf8_bin NOT NULL,
  `Password` varchar(25) COLLATE utf8_bin NOT NULL,
  `nivel` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `agente`
--

INSERT INTO `agente` (`TIP`, `Nombre`, `Primerapellido`, `Segundoapellido`, `Password`, `nivel`) VALUES
(123, 'Victor', 'Cruz', 'Calamar', '1234', 0),
(666, 'Raul', 'Perez', 'Portoles', '1234', 1);

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
  `Equipo` varchar(9) COLLATE utf8_bin NOT NULL,
  `Foto` varchar(255) COLLATE utf8_bin NOT NULL,
  `Tipodocumento` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `dni`
--

INSERT INTO `dni` (`Num`, `Primerapellido`, `Segundoapellido`, `Nombre`, `Sexo`, `Nacionalidad`, `Fechanacimiento`, `Validez`, `Lugarnacimiento`, `Provincia`, `Hijode`, `Domicilio`, `Lugardomicilio`, `Equipo`, `Foto`, `Tipodocumento`) VALUES
('46997126F', 'Ortiz', 'Fernandez', 'Oscar', 'Hombre', 'ESP', '1995-12-19', '2018-02-02', 'Barcelona', 'Barcelona', 'Alberto/Cristina', 'C.Mineria 9 PO5 7', 'Barcelona', '08055L6D1', 'img/dni-foto/46997126F.jpg', 'DNI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_a13pl`
--

DROP TABLE IF EXISTS `f_a13pl`;
CREATE TABLE IF NOT EXISTS `f_a13pl` (
  `DNI` varchar(9) COLLATE utf8_bin NOT NULL,
  `Numdiligencias` varchar(255) COLLATE utf8_bin NOT NULL,
  `TIP1` int(4) NOT NULL,
  `Lugar` varchar(255) COLLATE utf8_bin NOT NULL,
  `Dia` varchar(15) COLLATE utf8_bin NOT NULL,
  `Hora` varchar(10) COLLATE utf8_bin NOT NULL,
  `Motivoinmobilizacion` varchar(100) COLLATE utf8_bin NOT NULL,
  `Numerodenuncia` int(6) NOT NULL,
  `Tipodenuncia` varchar(255) COLLATE utf8_bin NOT NULL,
  `Sistemainmobilizacion` varchar(50) COLLATE utf8_bin NOT NULL,
  `Quilometrosactuales` int(6) NOT NULL,
  `Vehiculodisposicion` varchar(255) COLLATE utf8_bin NOT NULL,
  `Fecharoturainmobilizacion` varchar(10) COLLATE utf8_bin NOT NULL,
  `Horaroturainmobilizacion` varchar(10) COLLATE utf8_bin NOT NULL,
  `Atestadodesobedienciagrave` int(11) NOT NULL,
  `Observaciones` varchar(255) COLLATE utf8_bin NOT NULL,
  `Motivolevantamiento` varchar(255) COLLATE utf8_bin NOT NULL,
  `Dialevantamiento` varchar(25) COLLATE utf8_bin NOT NULL,
  `Horalevantamiento` varchar(25) COLLATE utf8_bin NOT NULL,
  `Nombresustituto` varchar(150) COLLATE utf8_bin NOT NULL,
  `Permisosustituto` varchar(9) COLLATE utf8_bin NOT NULL,
  `Clasesustituto` varchar(5) COLLATE utf8_bin NOT NULL,
  `Paisexpedicionsustituto` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `f_a13pl`
--

INSERT INTO `f_a13pl` (`DNI`, `Numdiligencias`, `TIP1`, `Lugar`, `Dia`, `Hora`, `Motivoinmobilizacion`, `Numerodenuncia`, `Tipodenuncia`, `Sistemainmobilizacion`, `Quilometrosactuales`, `Vehiculodisposicion`, `Fecharoturainmobilizacion`, `Horaroturainmobilizacion`, `Atestadodesobedienciagrave`, `Observaciones`, `Motivolevantamiento`, `Dialevantamiento`, `Horalevantamiento`, `Nombresustituto`, `Permisosustituto`, `Clasesustituto`, `Paisexpedicionsustituto`) VALUES
('46452322G', '1464157708', 666, '', '1980-01-08', '08:28:28', '', 1464157708, 'municipal', '', 0, 'Juzgado de Guardia', '', '', 0, '', 'Desaparecer las causas que lo motivaron', '', '', '', '', '', ''),
('46997126F', '1464160660', 666, '', '1995-12-19', '09:17:40', '', 1464160660, 'municipal', '', 0, 'Juzgado de Guardia', '', '', 0, '', 'Desaparecer las causas que lo motivaron', '', '', '', '', '', ''),
('46452322G', '1464161096', 666, '', '1980-01-08', '09:24:56', '', 1464161096, 'municipal', '', 0, 'Juzgado de Guardia', '', '', 0, '', 'Desaparecer las causas que lo motivaron', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_a21pl`
--

DROP TABLE IF EXISTS `f_a21pl`;
CREATE TABLE IF NOT EXISTS `f_a21pl` (
  `DNI` varchar(9) COLLATE utf8_bin NOT NULL,
  `Numdiligencias` varchar(255) COLLATE utf8_bin NOT NULL,
  `TIP1` int(4) NOT NULL,
  `Dia` varchar(10) COLLATE utf8_bin NOT NULL,
  `Hora` varchar(10) COLLATE utf8_bin NOT NULL,
  `Lugar` varchar(255) COLLATE utf8_bin NOT NULL,
  `Nombre` char(100) COLLATE utf8_bin NOT NULL,
  `Primerapellido` char(100) COLLATE utf8_bin NOT NULL,
  `Segundoapellido` char(100) COLLATE utf8_bin NOT NULL,
  `Permiso` varchar(9) COLLATE utf8_bin NOT NULL,
  `Sexo` enum('Hombre','Mujer') COLLATE utf8_bin NOT NULL,
  `Altura` int(3) NOT NULL,
  `Peso` int(3) NOT NULL,
  `Descripcionconduccion` varchar(255) COLLATE utf8_bin NOT NULL,
  `Halitosi` tinyint(1) NOT NULL,
  `Constitucion` enum('Corpulento','Mediana','Pequeña') COLLATE utf8_bin NOT NULL,
  `Comportamiento_agresivo` tinyint(1) NOT NULL,
  `Comportamiento_insultante` tinyint(1) NOT NULL,
  `Comportamiento_irrespetuoso` tinyint(1) NOT NULL,
  `Comportamiento_euforico` tinyint(1) NOT NULL,
  `Comportamiento_muyloquaz` tinyint(1) NOT NULL,
  `Comportamiento_excitado` tinyint(1) NOT NULL,
  `Comportamiento_variaciones` tinyint(1) NOT NULL,
  `Descripcioncomportamiento` varchar(255) COLLATE utf8_bin NOT NULL,
  `Mirada_midriaticos` tinyint(1) NOT NULL,
  `Mirada_mioticos` tinyint(1) NOT NULL,
  `Mirada_brillantes` tinyint(1) NOT NULL,
  `Mirada_somnolienta` tinyint(1) NOT NULL,
  `Mirada_perdida` tinyint(1) NOT NULL,
  `Habla_pastosa` tinyint(1) NOT NULL,
  `Habla_clara` tinyint(1) NOT NULL,
  `Habla_vacilante` tinyint(1) NOT NULL,
  `Expresion_ininteligibles` tinyint(1) NOT NULL,
  `Expresion_incoherentes` tinyint(1) NOT NULL,
  `Expresion_repetitivo` tinyint(1) NOT NULL,
  `Expresion_fugaideas` tinyint(1) NOT NULL,
  `Psicomotricidad_vacilante` tinyint(1) NOT NULL,
  `Psicomotricidad_imprecision` tinyint(1) NOT NULL,
  `Psicomotricidad_disminucionreflejos` tinyint(1) NOT NULL,
  `Psicomotricidad_apreciacionfalsa` tinyint(1) NOT NULL,
  `Descripcionmotricidad` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `f_a21pl`
--

INSERT INTO `f_a21pl` (`DNI`, `Numdiligencias`, `TIP1`, `Dia`, `Hora`, `Lugar`, `Nombre`, `Primerapellido`, `Segundoapellido`, `Permiso`, `Sexo`, `Altura`, `Peso`, `Descripcionconduccion`, `Halitosi`, `Constitucion`, `Comportamiento_agresivo`, `Comportamiento_insultante`, `Comportamiento_irrespetuoso`, `Comportamiento_euforico`, `Comportamiento_muyloquaz`, `Comportamiento_excitado`, `Comportamiento_variaciones`, `Descripcioncomportamiento`, `Mirada_midriaticos`, `Mirada_mioticos`, `Mirada_brillantes`, `Mirada_somnolienta`, `Mirada_perdida`, `Habla_pastosa`, `Habla_clara`, `Habla_vacilante`, `Expresion_ininteligibles`, `Expresion_incoherentes`, `Expresion_repetitivo`, `Expresion_fugaideas`, `Psicomotricidad_vacilante`, `Psicomotricidad_imprecision`, `Psicomotricidad_disminucionreflejos`, `Psicomotricidad_apreciacionfalsa`, `Descripcionmotricidad`) VALUES
('46997126F', '1464160660', 666, '25/05/2016', '09:17:40', 'C.Mineria 9 PO5 7', 'Oscar', 'Ortiz', 'Fernandez', '46997126F', 'Hombre', 0, 0, '', 1, 'Mediana', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
('46452322G', '1464161096', 666, '25/05/2016', '09:24:56', 'C.Mineria 9 PO5 7', 'felipe', 'iglesias', 'macarro', '46452322G', 'Hombre', 0, 0, '', 1, 'Mediana', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_n08pl`
--

DROP TABLE IF EXISTS `f_n08pl`;
CREATE TABLE IF NOT EXISTS `f_n08pl` (
  `DNI` varchar(9) COLLATE utf8_bin NOT NULL,
  `Numdiligencias` varchar(255) COLLATE utf8_bin NOT NULL,
  `TIP1` int(4) NOT NULL,
  `Municipio` varchar(255) COLLATE utf8_bin NOT NULL,
  `Cuerpoagente` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'Guardia Urbana',
  `Motivoimputacion` varchar(255) COLLATE utf8_bin NOT NULL,
  `Abogado` varchar(100) COLLATE utf8_bin NOT NULL,
  `Abogadooficio` tinyint(1) NOT NULL,
  `Renuncialetrada` tinyint(1) NOT NULL,
  `Idiomainterprete` varchar(50) COLLATE utf8_bin NOT NULL,
  `Observaciones` varchar(255) COLLATE utf8_bin NOT NULL,
  `Causapenal_fecha` varchar(10) COLLATE utf8_bin NOT NULL,
  `Causapenal_hora` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `f_n08pl`
--

INSERT INTO `f_n08pl` (`DNI`, `Numdiligencias`, `TIP1`, `Municipio`, `Cuerpoagente`, `Motivoimputacion`, `Abogado`, `Abogadooficio`, `Renuncialetrada`, `Idiomainterprete`, `Observaciones`, `Causapenal_fecha`, `Causapenal_hora`) VALUES
('46452322G', '1464157708', 666, 'Rambla Marina 200, 11-2', 'Guardia Urbana', '', '0', 0, 0, '', '', '', ''),
('46997126F', '1464160660', 666, 'C.Mineria 9 PO5 7', 'Guardia Urbana', '', '0', 0, 0, '', '', '', ''),
('46452322G', '1464161096', 666, 'Rambla Marina 200, 11-2', 'Guardia Urbana', '', '0', 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_t15pl`
--

DROP TABLE IF EXISTS `f_t15pl`;
CREATE TABLE IF NOT EXISTS `f_t15pl` (
  `DNI` varchar(9) COLLATE utf8_bin NOT NULL,
  `Numdiligencias` varchar(255) COLLATE utf8_bin NOT NULL,
  `TIP` int(4) NOT NULL,
  `Dia` varchar(10) COLLATE utf8_bin NOT NULL,
  `Hora` varchar(10) COLLATE utf8_bin NOT NULL,
  `Ticket1` varchar(255) COLLATE utf8_bin NOT NULL,
  `Ticket2` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `f_t15pl`
--

INSERT INTO `f_t15pl` (`DNI`, `Numdiligencias`, `TIP`, `Dia`, `Hora`, `Ticket1`, `Ticket2`) VALUES
('46997126F', '1464084377', 666, '24/05/2016', '12:06:17', '', ''),
('46452322G', '1464157708', 666, '25/05/2016', '08:28:28', '', ''),
('46997126F', '1464160660', 666, '25/05/2016', '09:17:40', '', ''),
('46452322G', '1464161096', 666, '25/05/2016', '09:24:56', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_t27pl`
--

DROP TABLE IF EXISTS `f_t27pl`;
CREATE TABLE IF NOT EXISTS `f_t27pl` (
  `DNI` varchar(9) COLLATE utf8_bin NOT NULL,
  `Numdiligencias` varchar(255) COLLATE utf8_bin NOT NULL,
  `TIP1` int(4) NOT NULL,
  `Dia` varchar(10) COLLATE utf8_bin NOT NULL,
  `Hora` varchar(10) COLLATE utf8_bin NOT NULL,
  `Actuacion` enum('Control preventivo','Accidente tráfico','Infracción del reglamento','Síntomas') COLLATE utf8_bin NOT NULL,
  `negacion` tinyint(1) NOT NULL,
  `Horanegativa` time NOT NULL,
  `autorizacion` tinyint(1) NOT NULL,
  `Conductorsubstituto` varchar(255) COLLATE utf8_bin NOT NULL,
  `Permisosubstituto` varchar(9) COLLATE utf8_bin NOT NULL,
  `Clasesubstituto` varchar(5) COLLATE utf8_bin NOT NULL,
  `Lugar` char(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `f_t27pl`
--

INSERT INTO `f_t27pl` (`DNI`, `Numdiligencias`, `TIP1`, `Dia`, `Hora`, `Actuacion`, `negacion`, `Horanegativa`, `autorizacion`, `Conductorsubstituto`, `Permisosubstituto`, `Clasesubstituto`, `Lugar`) VALUES
('46452322G', '1464157708', 666, '25/05/2016', '08:28:28', 'Control preventivo', 1, '00:00:00', 0, '', '', '', 'C.Mineria 9 PO5 7'),
('46997126F', '1464160660', 666, '25/05/2016', '09:17:40', 'Control preventivo', 1, '00:00:00', 0, '', '', '', 'C.Mineria 9 PO5 7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_t32pl`
--

DROP TABLE IF EXISTS `f_t32pl`;
CREATE TABLE IF NOT EXISTS `f_t32pl` (
  `dni` varchar(9) COLLATE utf8_bin NOT NULL,
  `Numdiligencias` varchar(255) COLLATE utf8_bin NOT NULL,
  `tip1` int(4) NOT NULL,
  `seguridad_viaria` tinyint(1) NOT NULL DEFAULT '1',
  `conducir_taxa` tinyint(1) NOT NULL,
  `conducir_influencia` tinyint(1) NOT NULL,
  `conducir_negacion` tinyint(1) DEFAULT NULL,
  `conducir_perdida` tinyint(1) DEFAULT NULL,
  `conducir_privat` tinyint(1) DEFAULT NULL,
  `conducir_sincarnet` tinyint(1) DEFAULT NULL,
  `conducir_velocidad` tinyint(1) DEFAULT NULL,
  `desobediencia` tinyint(1) DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `Marcaetilometro` varchar(255) COLLATE utf8_bin NOT NULL,
  `Modelo` varchar(255) COLLATE utf8_bin NOT NULL,
  `Numeroserie` int(9) NOT NULL,
  `Calibradohasta` varchar(20) COLLATE utf8_bin NOT NULL,
  `prueba1_hora` time NOT NULL,
  `prueba1_resultado` double NOT NULL,
  `prueba2_hora` time NOT NULL,
  `prueba2_resultado` double NOT NULL,
  `hora_traslado` time DEFAULT NULL,
  `centro_medico` char(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `f_t32pl`
--

INSERT INTO `f_t32pl` (`dni`, `Numdiligencias`, `tip1`, `seguridad_viaria`, `conducir_taxa`, `conducir_influencia`, `conducir_negacion`, `conducir_perdida`, `conducir_privat`, `conducir_sincarnet`, `conducir_velocidad`, `desobediencia`, `telefono`, `Marcaetilometro`, `Modelo`, `Numeroserie`, `Calibradohasta`, `prueba1_hora`, `prueba1_resultado`, `prueba2_hora`, `prueba2_resultado`, `hora_traslado`, `centro_medico`) VALUES
('46452322G', '1464157708', 666, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Drager Alcotest', 'TT Sport', 0, '2017', '00:00:00', 0, '00:00:00', 0, '00:00:00', ''),
('46997126F', '1464160660', 666, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Drager Alcotest', 'TT Sport', 0, '2017', '00:00:00', 0, '00:00:00', 0, '00:00:00', ''),
('46452322G', '1464161096', 666, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Drager Alcotest', 'TT Sport', 0, '2017', '00:00:00', 0, '00:00:00', 0, '00:00:00', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agente`
--
ALTER TABLE `agente`
  ADD PRIMARY KEY (`TIP`),
  ADD UNIQUE KEY `TIP` (`TIP`);

--
-- Indices de la tabla `dni`
--
ALTER TABLE `dni`
  ADD PRIMARY KEY (`Num`),
  ADD UNIQUE KEY `Num` (`Num`);

--
-- Indices de la tabla `f_a13pl`
--
ALTER TABLE `f_a13pl`
  ADD PRIMARY KEY (`Numdiligencias`);

--
-- Indices de la tabla `f_a21pl`
--
ALTER TABLE `f_a21pl`
  ADD PRIMARY KEY (`Numdiligencias`);

--
-- Indices de la tabla `f_n08pl`
--
ALTER TABLE `f_n08pl`
  ADD PRIMARY KEY (`Numdiligencias`);

--
-- Indices de la tabla `f_t27pl`
--
ALTER TABLE `f_t27pl`
  ADD PRIMARY KEY (`Numdiligencias`),
  ADD UNIQUE KEY `DNI` (`DNI`);

--
-- Indices de la tabla `f_t32pl`
--
ALTER TABLE `f_t32pl`
  ADD PRIMARY KEY (`Numdiligencias`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
