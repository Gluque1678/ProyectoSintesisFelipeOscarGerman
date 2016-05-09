-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2016 a las 10:32:26
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
  `Segudoapellido` varchar(75) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
-- Estructura de tabla para la tabla `f_a13pl`
--

DROP TABLE IF EXISTS `f_a13pl`;
CREATE TABLE IF NOT EXISTS `f_a13pl` (
  `DNI` varchar(9) COLLATE utf8_bin NOT NULL,
  `TIP1` int(4) NOT NULL,
  `TIP2` int(4) NOT NULL,
  `Motivoinmobilizacion` varchar(100) COLLATE utf8_bin NOT NULL,
  `Numerodenuncia` int(6) NOT NULL,
  `Tipodenuncia` enum('Municipal','Servicio catalán de transito') COLLATE utf8_bin NOT NULL,
  `Sistemainmobilizacion` varchar(50) COLLATE utf8_bin NOT NULL,
  `Quilometrosactuales` int(6) DEFAULT NULL,
  `Vehiculodisposicion` enum('Juzgado de guardia','Titular','Otro conductor habilitado') COLLATE utf8_bin NOT NULL,
  `Fecharoturainmobilizacion` date DEFAULT NULL,
  `Horaroturainmobilizacion` time DEFAULT NULL,
  `Atestadodesobedienciagrave` int(11) DEFAULT NULL,
  `Desaparicioncausas` tinyint(1) DEFAULT NULL,
  `Otroconductor` tinyint(1) DEFAULT NULL,
  `Ingresodeposito` tinyint(1) DEFAULT NULL,
  `Nombresustituto` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `Permisosustituto` varchar(9) COLLATE utf8_bin DEFAULT NULL,
  `Clasesustituto` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `Paisexpedicionsustituto` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `Retiradaingresodeposito` enum('Victor-0, carrer de la Glòria s/n','Victor-30, parc de la Serp','Victor-10') COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_a21pl`
--

DROP TABLE IF EXISTS `f_a21pl`;
CREATE TABLE IF NOT EXISTS `f_a21pl` (
  `DNI` varchar(9) COLLATE utf8_bin NOT NULL,
  `Numdiligencias` varchar(255) COLLATE utf8_bin NOT NULL,
  `TIP1` int(4) NOT NULL,
  `TIP2` int(4) NOT NULL,
  `Dia` date NOT NULL,
  `Hora` int(4) NOT NULL,
  `Lugar` varchar(255) COLLATE utf8_bin NOT NULL,
  `Altura` int(3) NOT NULL,
  `Peso` int(3) NOT NULL,
  `Descripcionconduccion` varchar(255) COLLATE utf8_bin NOT NULL,
  `Halitosi` tinyint(1) NOT NULL,
  `Constitucion` enum('Corpulento','Mediana','Pequeña') COLLATE utf8_bin NOT NULL,
  `Comportamiento_agresivio` tinyint(1) DEFAULT NULL,
  `Comportamiento_insultante` tinyint(1) DEFAULT NULL,
  `Comportamiento_irrespetuoso` tinyint(1) DEFAULT NULL,
  `Comportamiento_euforico` tinyint(1) DEFAULT NULL,
  `Comportamiento_muyloquaz` tinyint(1) DEFAULT NULL,
  `Comportamiento_excitado` tinyint(1) DEFAULT NULL,
  `Comportamiento_variaciones` tinyint(1) DEFAULT NULL,
  `Descripcioncomportamiento` varchar(255) COLLATE utf8_bin NOT NULL,
  `Mirada_midriaticos` tinyint(1) DEFAULT NULL,
  `Mirada_mioticos` tinyint(1) DEFAULT NULL,
  `Mirada_brillantes` tinyint(1) DEFAULT NULL,
  `Mirada_somnolienta` tinyint(1) DEFAULT NULL,
  `Mirada_perdida` tinyint(1) DEFAULT NULL,
  `Habla_pastosa` tinyint(1) DEFAULT NULL,
  `Habla_clara` tinyint(1) DEFAULT NULL,
  `Habla_vacilante` tinyint(1) DEFAULT NULL,
  `Expresion_ininteligibles` tinyint(1) DEFAULT NULL,
  `Expresion_incoherentes` tinyint(1) DEFAULT NULL,
  `Expresion_repetitivo` tinyint(1) DEFAULT NULL,
  `Expresion_fugaideas` tinyint(1) DEFAULT NULL,
  `Psicomotricidad_vacilante` tinyint(1) DEFAULT NULL,
  `Psicomotricidad_imprecision` tinyint(1) DEFAULT NULL,
  `Psicomotricidad_disminucionreflejos` tinyint(1) DEFAULT NULL,
  `Psicomotricidad_apreciacionfalsa` tinyint(1) DEFAULT NULL,
  `Psicomotricidad_movimientooscilante` tinyint(1) DEFAULT NULL,
  `Descripcionmotricidad` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_n08pl`
--

DROP TABLE IF EXISTS `f_n08pl`;
CREATE TABLE IF NOT EXISTS `f_n08pl` (
  `DNI` int(9) NOT NULL,
  `TIP1` int(4) NOT NULL,
  `TIP2` int(4) NOT NULL,
  `Cuerpoagente` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'Guardia Urbana',
  `Motivoimputacion` varchar(255) COLLATE utf8_bin NOT NULL,
  `Abogado` varchar(100) COLLATE utf8_bin NOT NULL,
  `Abogadooficio` tinyint(1) NOT NULL,
  `Renuncialetrada` tinyint(1) NOT NULL,
  `Idiomainterprete` varchar(50) COLLATE utf8_bin NOT NULL,
  `Causapenal_fecha` date NOT NULL,
  `Causapenal_hora` time(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_t27pl`
--

DROP TABLE IF EXISTS `f_t27pl`;
CREATE TABLE IF NOT EXISTS `f_t27pl` (
  `DNI` int(9) NOT NULL,
  `TIP1` int(4) NOT NULL,
  `TIP2` int(4) NOT NULL,
  `Actuacion` enum('Control preventivo','Accidente tráfico','Infracción del reglamento','Síntomas') COLLATE utf8_bin NOT NULL,
  `negacion` tinyint(1) NOT NULL,
  `negaciondrogas` tinyint(1) NOT NULL,
  `Manifesto` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Horanegativa` time DEFAULT NULL,
  `autorizacion` tinyint(1) DEFAULT NULL,
  `Conductorsubstituto` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Permisosubstituto` varchar(9) COLLATE utf8_bin DEFAULT NULL,
  `Clasesubstituto` varchar(5) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f_t32pl`
--

DROP TABLE IF EXISTS `f_t32pl`;
CREATE TABLE IF NOT EXISTS `f_t32pl` (
  `dni` varchar(9) COLLATE utf8_bin NOT NULL,
  `tip1` int(4) NOT NULL,
  `tip2` int(4) NOT NULL,
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
  `prueba1_hora` time NOT NULL,
  `prueba1_resultado` double NOT NULL,
  `prueba2_hora` time NOT NULL,
  `prueba2_resultado` double NOT NULL,
  `prueba_deteccion` tinyint(1) DEFAULT NULL,
  `hora_traslado` time DEFAULT NULL,
  `centro_medico` char(255) COLLATE utf8_bin DEFAULT NULL,
  `negacion_pruebas` tinyint(1) DEFAULT NULL,
  `diligencia_negarse` tinyint(1) DEFAULT NULL,
  `diligencia_incorrecta` tinyint(1) DEFAULT NULL,
  `diligencia_intentos` tinyint(4) DEFAULT NULL,
  `diligencia_intentos_manifiesta` char(255) COLLATE utf8_bin DEFAULT NULL,
  `diligencia_negarse_manifiesta` char(255) COLLATE utf8_bin DEFAULT NULL,
  `diligencia_altres` int(11) DEFAULT NULL,
  `diligencia_juzgado` tinyint(1) DEFAULT NULL,
  `diligencia_procedimiento` tinyint(1) DEFAULT NULL,
  `diligencia_numProcedimiento` char(255) COLLATE utf8_bin DEFAULT NULL,
  `diligencia_fechain` date DEFAULT NULL,
  `diligencia_fechafin` date DEFAULT NULL,
  `diligencia_desobediencia` tinyint(1) DEFAULT NULL,
  `diligencia_motivo` char(255) COLLATE utf8_bin DEFAULT NULL,
  `descripcion_hechos` varchar(500) COLLATE utf8_bin NOT NULL,
  `mesures_inmobilizacion` tinyint(1) NOT NULL,
  `mesures_substitucion` tinyint(1) DEFAULT NULL,
  `acta_t27` tinyint(1) NOT NULL,
  `acta_a21` tinyint(1) NOT NULL,
  `acta_n8` tinyint(1) NOT NULL,
  `acta_a13` tinyint(1) NOT NULL,
  `tiquet_prueba` tinyint(1) NOT NULL,
  `copia_denuncia` tinyint(1) NOT NULL,
  `comunicado_accidente` tinyint(1) DEFAULT NULL,
  `certificacion` tinyint(1) DEFAULT NULL,
  `impresion_dgt` tinyint(1) DEFAULT NULL,
  `acta_altres` char(255) COLLATE utf8_bin DEFAULT NULL,
  `tramesa_hora` time NOT NULL,
  `tramesa_dia` date NOT NULL,
  `tramesa_juzgado_num` tinyint(4) NOT NULL,
  `tramesa_drets` tinyint(1) NOT NULL,
  `tramesa_fotocopia` tinyint(1) NOT NULL,
  `tramesa_cedula` tinyint(1) NOT NULL,
  `tramesa_altres` tinyint(1) DEFAULT NULL,
  `tramesa_altres_text` char(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
-- Indices de la tabla `f_a21pl`
--
ALTER TABLE `f_a21pl`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `f_n08pl`
--
ALTER TABLE `f_n08pl`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `f_t27pl`
--
ALTER TABLE `f_t27pl`
  ADD PRIMARY KEY (`DNI`),
  ADD UNIQUE KEY `DNI` (`DNI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
