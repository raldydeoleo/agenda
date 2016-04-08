-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-04-2016 a las 15:35:46
-- Versión del servidor: 5.5.35-1ubuntu1
-- Versión de PHP: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Test1`
--
CREATE DATABASE IF NOT EXISTS `Test1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Test1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

DROP TABLE IF EXISTS `contactos`;
CREATE TABLE IF NOT EXISTS `contactos` (
  `id_contacto` int(11) NOT NULL AUTO_INCREMENT,
  `nom_contacto` varchar(30) NOT NULL,
  `ape_contacto` varchar(30) NOT NULL,
  `init` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tel_contacto` varchar(40) NOT NULL,
  `correo_contacto` varchar(30) NOT NULL,
  PRIMARY KEY (`id_contacto`),
  KEY `init` (`init`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id_contacto`, `nom_contacto`, `ape_contacto`, `init`, `tel_contacto`, `correo_contacto`) VALUES
(1, 'Jose', 'Perez', 'A0001B', '809-555-6666', 'jpz@hotmail.com'),
(2, 'Ramon', 'Estevez', 'B0001C', '8092220320', 'restevez@gmail.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

DROP TABLE IF EXISTS `Usuarios`;
CREATE TABLE IF NOT EXISTS `Usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `init` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`init`),
  UNIQUE KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id_usuario`, `username`, `password`, `init`) VALUES
(3, 'Admin', '123456', 'A0001B'),
(4, 'Comun', '123', 'B0001C');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `contactos_ibfk_1` FOREIGN KEY (`init`) REFERENCES `Usuarios` (`init`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
