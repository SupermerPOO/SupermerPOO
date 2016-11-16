-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2016 a las 07:11:41
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_supermercado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_privilegio` int(11) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`codigo_usuario`),
  KEY `fk_tbl_usuarios_tbl_cargo1_idx` (`codigo_privilegio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`codigo_usuario`, `codigo_privilegio`, `nombre_usuario`, `password`) VALUES
(1, 1, 'admin', '8f166a7160232373afa9f02d24ae73875f136369'),
(2, 2, 'contador', '2acc50a6ef002ef226b25ee960f40c7d1cca47bd'),
(3, 3, 'cajero', '36a88c5d74122454e4dd3f1d55fa0a76fe4e4c54'),
(4, 4, 'visitante', '2a83f4749a07358643584a1f23bb46d485d3d30e');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `fk_tbl_usuarios_tbl_cargo1` FOREIGN KEY (`codigo_privilegio`) REFERENCES `tbl_privilegio` (`codigo_privilegio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
