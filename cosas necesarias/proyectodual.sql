-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 14-12-2021 a las 09:34:15
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectodual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `ID_Profesor` int(3) DEFAULT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido1` varchar(20) DEFAULT NULL,
  `2º Apellido` varchar(20) DEFAULT NULL,
  `Contraseña` varchar(64) DEFAULT NULL,
  `DNI` varchar(9) DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `Telefono` int(9) DEFAULT NULL,
  `Empresa` varchar(64) NOT NULL,
  `Tutor` varchar(64) DEFAULT NULL,
  `NºHoras_Dual` int(3) DEFAULT NULL,
  `NºHoras_FCT` int(3) DEFAULT NULL,
  `Observaciones` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `ID_Empresa` int(64) NOT NULL,
  `Nombre_Empresa` varchar(64) DEFAULT NULL,
  `Telefono` int(9) DEFAULT NULL,
  `Email` int(64) DEFAULT NULL,
  `Responsable` varchar(64) DEFAULT NULL,
  `Observaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `Nombre` varchar(20) DEFAULT NULL,
  `1ºApellido` varchar(20) DEFAULT NULL,
  `2ºApellido` varchar(20) DEFAULT NULL,
  `Contraseña` varchar(64) DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `ID_Profesor` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`ID_Empresa`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`ID_Profesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `ID_Empresa` int(64) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `ID_Profesor` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
