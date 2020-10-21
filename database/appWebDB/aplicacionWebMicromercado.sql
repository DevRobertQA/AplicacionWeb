-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-10-2020 a las 20:40:44
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aplicacionWebMicromercado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Gestion`
--

CREATE TABLE `Gestion` (
  `idGestion` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `montoIngreso` decimal(10,2) DEFAULT NULL,
  `montoEgreso` decimal(10,2) DEFAULT NULL,
  `Utilidad` decimal(10,2) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Gestion`
--

INSERT INTO `Gestion` (`idGestion`, `fecha`, `montoIngreso`, `montoEgreso`, `Utilidad`, `idUsuario`) VALUES
(1, '2020-10-19', '2100.00', '1800.00', '300.00', 1),
(2, '2020-10-19', '1890.20', '1554.30', '335.90', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `idUsuario` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `Cuenta` varchar(45) DEFAULT NULL,
  `Clave` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`idUsuario`, `Nombre`, `Apellido`, `Correo`, `Cuenta`, `Clave`) VALUES
(1, 'Manuel', 'Carrasco', 'manuelcarrasco@gamil.com', 'MicromercadoManuel', '123456789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Gestion`
--
ALTER TABLE `Gestion`
  ADD PRIMARY KEY (`idGestion`),
  ADD KEY `fk_Gestion_Usuario` (`idUsuario`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Gestion`
--
ALTER TABLE `Gestion`
  MODIFY `idGestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Gestion`
--
ALTER TABLE `Gestion`
  ADD CONSTRAINT `fk_Gestion_Usuario` FOREIGN KEY (`idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
