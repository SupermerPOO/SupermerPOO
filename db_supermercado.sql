-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-11-2016 a las 07:33:54
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `tbl_area_trabajo`
--

CREATE TABLE IF NOT EXISTS `tbl_area_trabajo` (
  `codigo_area` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_area`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tbl_area_trabajo`
--

INSERT INTO `tbl_area_trabajo` (`codigo_area`, `tipo`) VALUES
(1, 'Depto. Ventas'),
(2, 'Depto. Administracion'),
(3, 'Visitantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_balanza_comprobacion`
--

CREATE TABLE IF NOT EXISTS `tbl_balanza_comprobacion` (
  `codigo_balanza_comprobacion` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_mayor` int(11) NOT NULL,
  `movimiento_deudor` double NOT NULL,
  `moviemiento_acreedor` double NOT NULL,
  `saldo_deudor` double NOT NULL,
  `saldo_acreeor` double NOT NULL,
  PRIMARY KEY (`codigo_balanza_comprobacion`,`codigo_mayor`),
  KEY `fk_tbl_balanza_comprobacion_tbl_libro_mayor1_idx` (`codigo_mayor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE IF NOT EXISTS `tbl_categorias` (
  `codigo_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`codigo_categoria`, `descripcion`) VALUES
(1, 'Carnes'),
(2, 'Bebidas'),
(3, 'Snacks'),
(4, 'Vegetales'),
(5, 'Cocina'),
(6, 'Condimentos'),
(7, 'Higiene'),
(8, 'Lacteos'),
(9, 'Detergente'),
(10, 'Papeleria y oficina'),
(11, 'Jugueteria'),
(12, 'Panaderia'),
(13, 'Congelados'),
(14, 'Mascotas'),
(15, 'Embutidos'),
(16, 'prueba'),
(17, 'Jabones'),
(18, 'Pastas'),
(19, 'Zapateria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE IF NOT EXISTS `tbl_clientes` (
  `codigo_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(45) NOT NULL,
  `apellido_cliente` varchar(45) NOT NULL,
  `genero` varchar(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`codigo_cliente`, `nombre_cliente`, `apellido_cliente`, `genero`, `fecha_nacimiento`, `direccion`, `telefono`) VALUES
(1, 'Nohelia', 'Euceda', 'F', '2016-11-01', 'Col. Honduras', '9538-7598'),
(2, 'Donald', 'Trump''eta', 'M', '2016-11-08', 'Col. USA', '1 800 89 78 36 45'),
(3, 'El Tobal', 'Rodriguez', 'M', '1995-11-01', 'Col. El atolladero', '9878-1548'),
(4, 'La Gaby', 'Guerrero', 'F', '1995-11-01', 'Col. Centro America El GUETTO', '8978-5869'),
(5, 'El Erick', 'Omelon', 'M', '1885-11-01', 'Co. El Monte', '9789-5236'),
(6, 'No frecuente', 'Para Llegar', 'F', '2016-11-01', 'Col. No tengo idea', 'No me lo se');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cuenta`
--

CREATE TABLE IF NOT EXISTS `tbl_cuenta` (
  `codigo_cuenta` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_naturaleza` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_cuenta`),
  KEY `fk_tbl_cuenta_tbl_naturaleza1_idx` (`codigo_naturaleza`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `tbl_cuenta`
--

INSERT INTO `tbl_cuenta` (`codigo_cuenta`, `codigo_naturaleza`, `nombre`) VALUES
(1, 2, 'Caja'),
(2, 2, 'Bancos'),
(3, 2, 'Clientes'),
(4, 2, 'Documentos por cobrar'),
(5, 2, 'Deudores Varios'),
(6, 2, 'Almacen'),
(7, 2, 'Impuesto Sobre Venta Pagado'),
(8, 2, 'Publicidad'),
(9, 2, 'Accesorios y Suministros'),
(10, 2, 'Depositos a Plazo Fijo'),
(11, 2, 'Terrenos'),
(12, 2, 'Edicios'),
(13, 2, 'Mobiliario y Equipo'),
(14, 2, 'Equipo de Reparto'),
(15, 2, 'Equipo de Transporte'),
(16, 2, 'Herramientas'),
(17, 2, 'Marcas'),
(18, 2, 'Patentes'),
(19, 2, 'Franquicias'),
(20, 2, 'Gastos de Instalacion'),
(21, 1, 'Proveedores'),
(22, 1, 'Documentos por Pagar'),
(23, 1, 'Prestamos Bancarios'),
(24, 1, 'Acreedores Varios'),
(25, 1, 'Impuestos por Pagar'),
(26, 1, 'Otras cuentas por pagar'),
(27, 1, 'Capital'),
(28, 1, 'Utilidad del ejercicio'),
(29, 1, 'Perdida del ejercicio'),
(30, 1, 'Reserva Legal'),
(31, 1, 'Reserva de Reinversion'),
(32, 1, 'Utilidades No distribuidas o Acumuladas'),
(33, 1, 'Perdidas no Aplicadas'),
(34, 2, 'Gastos de Venta'),
(35, 2, 'Gastos de Administracion'),
(36, 2, 'Gastos Personales'),
(37, 2, 'Gastos No Deducibles'),
(38, 2, 'Gastos Financieros'),
(39, 1, 'Productos Financieros'),
(40, 1, 'Otros Productos'),
(41, 2, 'Otros Gastos'),
(42, 1, 'Ventas'),
(43, 1, 'Impuesto Sobre Ventas Cobrado'),
(44, 2, 'Compras'),
(45, 2, 'Gastos Varios'),
(46, 2, 'Papeleria y Utiles'),
(47, 2, 'Primas de Seguro'),
(50, 2, 'Devoluciones sobre Ventas'),
(51, 2, 'Gastos de Constitucion'),
(52, 2, 'Tobal'),
(53, 1, 'Devoluciones sobre Compras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleados`
--

CREATE TABLE IF NOT EXISTS `tbl_empleados` (
  `codigo_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_privilegio` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_area_trabajo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `no_identidad` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `domicilio` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fecha_de_ingreso` varchar(45) NOT NULL,
  `sueldo` double NOT NULL,
  PRIMARY KEY (`codigo_empleado`),
  KEY `fk_tbl_personal_tbl_cargo1_idx` (`codigo_privilegio`),
  KEY `fk_tbl_personal_tbl_usuarios1_idx` (`codigo_usuario`),
  KEY `fk_tbl_empleados_tbl_area_trabajo1_idx` (`codigo_area_trabajo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tbl_empleados`
--

INSERT INTO `tbl_empleados` (`codigo_empleado`, `codigo_privilegio`, `codigo_usuario`, `codigo_area_trabajo`, `nombre`, `apellido`, `no_identidad`, `fecha_nacimiento`, `domicilio`, `telefono`, `email`, `fecha_de_ingreso`, `sueldo`) VALUES
(1, 1, 1, 2, 'Carlos', 'Rodriguez', '0801-1995-01816', '1995-11-01', '', '', '', '', 8500),
(2, 2, 2, 2, 'Tiburcio', 'Carias', '0801-1985-52896', '1984-11-13', '', '', '', '', 8900),
(3, 3, 3, 1, 'Raul', 'Cajas', '0801-1990-25896', '1990-11-06', '', '', '', '', 8500),
(4, 1, 1, 2, 'administrador', 'Gonzales', '0801-1989-25789', '1990-11-08', '', '', '', '', 8500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empresas`
--

CREATE TABLE IF NOT EXISTS `tbl_empresas` (
  `codigo_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_producto` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_empresa`),
  KEY `fk_tbl_empresas_tbl_productos1_idx` (`codigo_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tbl_empresas`
--

INSERT INTO `tbl_empresas` (`codigo_empresa`, `codigo_producto`, `nombre`) VALUES
(1, 1, 'Mogami'),
(2, 3, 'Coca-Cola'),
(3, 16, 'LEYDE'),
(4, 19, 'Head and Shoulder'),
(5, 15, 'Sula'),
(6, 8, 'Papas Olanchanas S. de R. L.'),
(7, 3, 'Pepsi'),
(8, 15, 'Sula'),
(9, 6, 'Yumix');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_factura`
--

CREATE TABLE IF NOT EXISTS `tbl_factura` (
  `codigo_factura` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_sucursal` int(11) NOT NULL,
  `codigo_empleado` int(11) NOT NULL,
  `codigo_cliente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`codigo_factura`),
  KEY `fk_tbl_ventas_tbl_sucursales1_idx` (`codigo_sucursal`),
  KEY `fk_tbl_ventas_tbl_personal1_idx` (`codigo_empleado`),
  KEY `fk_tbl_ventas_tbl_clientes1_idx` (`codigo_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tbl_factura`
--

INSERT INTO `tbl_factura` (`codigo_factura`, `codigo_sucursal`, `codigo_empleado`, `codigo_cliente`, `fecha`, `total`) VALUES
(1, 1, 3, 6, '2016-11-02', 25),
(2, 2, 3, 3, '2016-11-09', 1560),
(3, 2, 3, 3, '2016-11-08', 1780),
(4, 1, 3, 6, '2016-11-01', 40),
(5, 1, 4, 6, '2016-11-01', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_factura_x_tbl_productos`
--

CREATE TABLE IF NOT EXISTS `tbl_factura_x_tbl_productos` (
  `codigo_factura` int(11) NOT NULL,
  `codigo_producto` int(11) NOT NULL,
  PRIMARY KEY (`codigo_factura`,`codigo_producto`),
  KEY `fk_tbl_factura_has_tbl_productos_tbl_productos1_idx` (`codigo_producto`),
  KEY `fk_tbl_factura_has_tbl_productos_tbl_factura1_idx` (`codigo_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_factura_x_tbl_productos`
--

INSERT INTO `tbl_factura_x_tbl_productos` (`codigo_factura`, `codigo_producto`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_libro_diario`
--

CREATE TABLE IF NOT EXISTS `tbl_libro_diario` (
  `codigo_partida` int(11) NOT NULL AUTO_INCREMENT,
  `monto_cargado` decimal(45,0) NOT NULL,
  `monto_acreditado` decimal(45,0) NOT NULL,
  `fecha_partida` date NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`codigo_partida`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `tbl_libro_diario`
--

INSERT INTO `tbl_libro_diario` (`codigo_partida`, `monto_cargado`, `monto_acreditado`, `fecha_partida`, `descripcion`) VALUES
(1, '1000', '1000', '2016-11-01', 'Compra de sillas para administracion'),
(2, '1000', '1000', '2016-11-01', 'Venta de productos'),
(3, '30000', '30000', '2016-11-01', 'Acreditacion de capital'),
(4, '5000', '5000', '2016-11-13', 'Venta'),
(5, '10000', '10000', '2016-11-04', 'Compra de sillas'),
(6, '50000', '50000', '2016-11-14', 'Venta'),
(11, '10000', '10000', '2016-11-15', 'Compra de Sillas para Cajeros'),
(12, '1000', '1000', '2016-11-16', 'Venta'),
(13, '500', '500', '2012-11-16', 'Compra de Bolsas para los clientes'),
(14, '500', '500', '2016-11-16', 'Compra de bolsas para los baÃ±os'),
(15, '1000', '1000', '2016-11-16', 'Deposito en cuenta de bancos'),
(16, '1000', '1000', '2016-11-17', 'Compra de papeleria para administracion'),
(17, '1000', '1000', '2016-11-18', 'Compra de papeles para oficina'),
(18, '1000', '1000', '2016-11-18', 'Venta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_libro_diario_x_tbl_cuenta_acreditada`
--

CREATE TABLE IF NOT EXISTS `tbl_libro_diario_x_tbl_cuenta_acreditada` (
  `codigo_partida` int(11) NOT NULL,
  `codigo_cuenta` int(11) NOT NULL,
  `monto` double NOT NULL,
  `facturaX` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo_partida`,`codigo_cuenta`),
  KEY `fk_tbl_libro_diario_has_tbl_cuenta_tbl_cuenta2_idx` (`codigo_cuenta`),
  KEY `fk_tbl_libro_diario_has_tbl_cuenta_tbl_libro_diario2_idx` (`codigo_partida`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_libro_diario_x_tbl_cuenta_acreditada`
--

INSERT INTO `tbl_libro_diario_x_tbl_cuenta_acreditada` (`codigo_partida`, `codigo_cuenta`, `monto`, `facturaX`) VALUES
(1, 2, 1000, '3549'),
(2, 42, 850, '358'),
(2, 43, 150, '358'),
(3, 27, 30000, '400'),
(4, 42, 4250, '1'),
(4, 43, 750, '1'),
(5, 2, 10000, '555'),
(6, 42, 42500, '555'),
(6, 43, 7500, '555'),
(11, 2, 10000, '741'),
(12, 42, 850, '753'),
(12, 43, 150, '753'),
(13, 1, 500, '963'),
(14, 1, 500, '123'),
(15, 1, 1000, '456'),
(16, 1, 1000, '177'),
(17, 1, 1000, '159'),
(18, 42, 850, '142'),
(18, 43, 150, '142');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_libro_diario_x_tbl_cuenta_cargada`
--

CREATE TABLE IF NOT EXISTS `tbl_libro_diario_x_tbl_cuenta_cargada` (
  `codigo_partida` int(11) NOT NULL,
  `codigo_cuenta` int(11) NOT NULL,
  `monto` double NOT NULL,
  `FacturaX` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo_partida`,`codigo_cuenta`),
  KEY `fk_tbl_libro_diario_has_tbl_cuenta_tbl_cuenta1_idx` (`codigo_cuenta`),
  KEY `fk_tbl_libro_diario_has_tbl_cuenta_tbl_libro_diario1_idx` (`codigo_partida`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_libro_diario_x_tbl_cuenta_cargada`
--

INSERT INTO `tbl_libro_diario_x_tbl_cuenta_cargada` (`codigo_partida`, `codigo_cuenta`, `monto`, `FacturaX`) VALUES
(1, 13, 1000, '3549'),
(2, 1, 1000, '358'),
(3, 2, 30000, '400'),
(4, 1, 5000, '1'),
(5, 13, 10000, '555'),
(6, 1, 50000, '555'),
(11, 34, 10000, '741'),
(12, 1, 1000, '753'),
(13, 34, 500, '963'),
(14, 9, 500, '123'),
(15, 2, 1000, '456'),
(16, 35, 1000, '177'),
(17, 46, 1000, '159'),
(18, 1, 1000, '142');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_libro_mayor`
--

CREATE TABLE IF NOT EXISTS `tbl_libro_mayor` (
  `codigo_mayor` int(11) NOT NULL AUTO_INCREMENT,
  `concepto` varchar(45) NOT NULL,
  `fecha_concepto` date NOT NULL,
  `monto_cargado` double NOT NULL,
  `monto_acreditado` double NOT NULL,
  `saldo_mayor` double NOT NULL,
  PRIMARY KEY (`codigo_mayor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

--
-- Volcado de datos para la tabla `tbl_libro_mayor`
--

INSERT INTO `tbl_libro_mayor` (`codigo_mayor`, `concepto`, `fecha_concepto`, `monto_cargado`, `monto_acreditado`, `saldo_mayor`) VALUES
(15, 'Caja', '0000-00-00', 58000, 4000, 54000),
(16, 'Bancos', '0000-00-00', 31000, 21000, 10000),
(17, 'Clientes', '0000-00-00', 0, 0, 0),
(18, 'Documentos por cobrar', '0000-00-00', 0, 0, 0),
(19, 'Deudores Varios', '0000-00-00', 0, 0, 0),
(20, 'Almacen', '0000-00-00', 0, 0, 0),
(21, 'Impuesto Sobre Venta Pagado', '0000-00-00', 0, 0, 0),
(22, 'Publicidad', '0000-00-00', 0, 0, 0),
(23, 'Accesorios y Suministros', '0000-00-00', 500, 0, 500),
(24, 'Depositos a Plazo Fijo', '0000-00-00', 0, 0, 0),
(25, 'Terrenos', '0000-00-00', 0, 0, 0),
(26, 'Edicios', '0000-00-00', 0, 0, 0),
(27, 'Mobiliario y Equipo', '0000-00-00', 11000, 0, 11000),
(28, 'Equipo de Reparto', '0000-00-00', 0, 0, 0),
(29, 'Equipo de Transporte', '0000-00-00', 0, 0, 0),
(30, 'Herramientas', '0000-00-00', 0, 0, 0),
(31, 'Marcas', '0000-00-00', 0, 0, 0),
(32, 'Patentes', '0000-00-00', 0, 0, 0),
(33, 'Franquicias', '0000-00-00', 0, 0, 0),
(34, 'Gastos de Instalacion', '0000-00-00', 0, 0, 0),
(35, 'Proveedores', '0000-00-00', 0, 0, 0),
(36, 'Documentos por Pagar', '0000-00-00', 0, 0, 0),
(37, 'Prestamos Bancarios', '0000-00-00', 0, 0, 0),
(38, 'Acreedores Varios', '0000-00-00', 0, 0, 0),
(39, 'Impuestos por Pagar', '0000-00-00', 0, 0, 0),
(40, 'Otras cuentas por pagar', '0000-00-00', 0, 0, 0),
(41, 'Capital', '0000-00-00', 0, 30000, -30000),
(42, 'Utilidad del ejercicio', '0000-00-00', 0, 0, 0),
(43, 'Perdida del ejercicio', '0000-00-00', 0, 0, 0),
(44, 'Reserva Legal', '0000-00-00', 0, 0, 0),
(45, 'Reserva de Reinversion', '0000-00-00', 0, 0, 0),
(46, 'Utilidades No distribuidas o Acumuladas', '0000-00-00', 0, 0, 0),
(47, 'Perdidas no Aplicadas', '0000-00-00', 0, 0, 0),
(48, 'Gastos de Venta', '0000-00-00', 10500, 0, 10500),
(49, 'Gastos de Administracion', '0000-00-00', 1000, 0, 1000),
(50, 'Gastos Personales', '0000-00-00', 0, 0, 0),
(51, 'Gastos No Deducibles', '0000-00-00', 0, 0, 0),
(52, 'Gastos Financieros', '0000-00-00', 0, 0, 0),
(53, 'Productos Financieros', '0000-00-00', 0, 0, 0),
(54, 'Otros Productos', '0000-00-00', 0, 0, 0),
(55, 'Otros Gastos', '0000-00-00', 0, 0, 0),
(56, 'Ventas', '0000-00-00', 0, 49300, -49300),
(57, 'Impuesto Sobre Ventas Cobrado', '0000-00-00', 0, 8700, -8700),
(58, 'Compras', '0000-00-00', 0, 0, 0),
(59, 'Gastos Varios', '0000-00-00', 0, 0, 0),
(60, 'Papeleria y Utiles', '0000-00-00', 1000, 0, 1000),
(61, 'Primas de Seguro', '0000-00-00', 0, 0, 0),
(62, 'Devoluciones sobre Ventas', '0000-00-00', 0, 0, 0),
(63, 'Gastos de Constitucion', '0000-00-00', 0, 0, 0),
(64, 'Tobal', '0000-00-00', 0, 0, 0),
(65, 'Devoluciones sobre Compras', '0000-00-00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_marca`
--

CREATE TABLE IF NOT EXISTS `tbl_marca` (
  `codigo_marca` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_marca` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_marca`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `tbl_marca`
--

INSERT INTO `tbl_marca` (`codigo_marca`, `nombre_marca`) VALUES
(1, 'Mogami'),
(2, 'El padre de la costa'),
(3, 'Coca-Cola'),
(4, 'Heineken'),
(5, 'Yukatekas'),
(6, 'Doritos'),
(7, 'sin marca'),
(8, 'Onix'),
(9, 'Oster'),
(10, 'Don Julio'),
(11, 'Sasson'),
(12, 'Limpiox'),
(13, 'Fabuloso'),
(14, 'Sula'),
(15, 'Leyde'),
(16, 'Mister Musculo'),
(17, 'Patito'),
(18, 'Jonhson''s Baby'),
(19, 'PACASA'),
(20, 'Amigo'),
(21, 'Lego'),
(22, 'TONKA'),
(23, 'Panadeli'),
(24, 'Panquesito'),
(25, 'Pinguinito'),
(26, 'Osito Polar'),
(27, 'Bayer Mascotas'),
(28, 'Perrito Feliz'),
(29, 'Delicia'),
(30, 'Delikatesen'),
(32, 'Lambo'),
(33, 'prueba0'),
(34, 'marca'),
(35, 'Tengo SueÃ±o'),
(36, 'Carlos tiene sueÃ±o'),
(37, 'Lidis'),
(38, 'Carlos'),
(39, 'Carlitos'),
(40, 'Mi Pasta'),
(41, 'calzado'),
(42, 'adidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_naturaleza`
--

CREATE TABLE IF NOT EXISTS `tbl_naturaleza` (
  `codigo_naturaleza` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_naturaleza`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_naturaleza`
--

INSERT INTO `tbl_naturaleza` (`codigo_naturaleza`, `tipo`) VALUES
(1, 'Acreedora'),
(2, 'Deudora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedidos`
--

CREATE TABLE IF NOT EXISTS `tbl_pedidos` (
  `codigo_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_sucursal` int(11) NOT NULL,
  `codigo_producto` int(11) NOT NULL,
  `cantidad_pedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`codigo_pedido`),
  KEY `fk_tbl_pedidos_tbl_sucursales1_idx` (`codigo_sucursal`),
  KEY `fk_tbl_pedidos_tbl_productos1_idx` (`codigo_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tbl_pedidos`
--

INSERT INTO `tbl_pedidos` (`codigo_pedido`, `codigo_sucursal`, `codigo_producto`, `cantidad_pedido`, `fecha`) VALUES
(1, 1, 2, 20, '2016-11-08'),
(2, 2, 2, 20, '2016-11-08'),
(3, 1, 9, 10, '2016-11-03'),
(4, 1, 13, 25, '2016-11-22'),
(5, 2, 15, 30, '2016-11-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_privilegio`
--

CREATE TABLE IF NOT EXISTS `tbl_privilegio` (
  `codigo_privilegio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cargo` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_privilegio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tbl_privilegio`
--

INSERT INTO `tbl_privilegio` (`codigo_privilegio`, `nombre_cargo`) VALUES
(1, 'Administrador'),
(2, 'Contador'),
(3, 'Cajero'),
(4, 'Visitante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE IF NOT EXISTS `tbl_productos` (
  `codigo_producto` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_categoria` int(11) NOT NULL,
  `codigo_marca` int(11) NOT NULL,
  `nombre_producto` varchar(45) NOT NULL,
  `fecha_elaboracion` date NOT NULL,
  `fecha_expiracion` date NOT NULL,
  `precio_venta` double NOT NULL,
  `precio_compra` double NOT NULL,
  PRIMARY KEY (`codigo_producto`),
  KEY `fk_tbl_productos_tbl_categorias1_idx` (`codigo_categoria`),
  KEY `fk_tbl_productos_tbl_marca1_idx` (`codigo_marca`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`codigo_producto`, `codigo_categoria`, `codigo_marca`, `nombre_producto`, `fecha_elaboracion`, `fecha_expiracion`, `precio_venta`, `precio_compra`) VALUES
(1, 1, 1, 'Carne de Res', '2016-11-01', '2016-11-30', 40, 25),
(2, 1, 2, 'Pollo', '2016-11-01', '2016-11-30', 30, 15),
(3, 2, 3, 'Soda', '2016-11-01', '2016-11-30', 40, 35),
(4, 2, 4, 'Cerveza', '2016-11-01', '2016-11-30', 20, 14),
(5, 3, 5, 'Churro', '2016-11-01', '2016-11-30', 3, 1),
(6, 3, 6, 'Churro', '2016-11-01', '2016-11-30', 6, 4),
(7, 4, 7, 'Pepino', '2016-11-01', '2016-11-05', 6, 3),
(8, 4, 7, 'Papas', '2016-11-01', '2016-11-05', 10, 5),
(9, 5, 8, 'Ollas', '2016-11-01', '2016-11-30', 500, 350),
(10, 5, 9, 'Tostador', '2016-11-01', '2016-11-30', 1500, 1000),
(11, 6, 10, 'Pimienta', '2016-11-01', '2016-11-30', 20, 15),
(12, 6, 11, 'Jengibre', '2016-11-01', '2016-11-30', 30, 15),
(13, 7, 12, 'Desinfectante para ventanas', '2016-11-01', '2016-11-30', 100, 80),
(14, 7, 13, 'Desinfectante para piso', '2016-11-01', '2016-11-30', 100, 80),
(15, 8, 14, 'Mantequilla', '2016-11-01', '2016-11-10', 15, 10),
(16, 8, 15, 'Leche', '2016-11-01', '2016-11-30', 25, 18),
(17, 9, 16, 'Cloro', '2016-11-01', '2016-11-30', 10, 5),
(18, 9, 17, 'Pastilla para toilet', '2016-11-01', '2016-11-30', 30, 20),
(19, 7, 18, 'Shampoo', '2016-11-01', '2016-11-30', 70, 50),
(20, 10, 19, 'Cuadernos', '2016-11-01', '2016-11-30', 100, 80),
(21, 10, 20, 'Plumas', '2016-11-01', '2016-11-30', 24, 18),
(22, 11, 21, 'Legos', '2016-11-01', '2016-11-30', 200, 150),
(23, 11, 22, 'Carro', '2016-11-01', '2016-11-30', 1000, 800),
(24, 12, 23, 'Cemitas', '2016-11-01', '2016-11-05', 24, 18),
(25, 12, 24, 'Rosquetes', '2016-11-01', '2016-11-12', 24, 20),
(26, 13, 25, 'Conos', '2016-11-01', '2016-11-12', 20, 15),
(27, 13, 26, 'Ice Cream', '2016-11-01', '2016-11-12', 70, 60),
(28, 14, 27, 'Collar antipulgas', '2016-11-01', '2016-11-30', 350, 300),
(29, 14, 28, 'Comida', '2016-11-01', '2016-11-30', 1000, 800),
(30, 15, 29, 'Mortadela', '2016-11-01', '2016-11-26', 34, 30),
(31, 15, 30, 'Copetines', '2016-11-01', '2016-11-30', 35, 28),
(32, 18, 40, 'Caracolitos', '2016-11-11', '2017-01-23', 20, 10),
(33, 19, 41, 'tenis', '0000-00-00', '0000-00-00', 4545, 454),
(34, 19, 42, 'chancletas', '2016-12-21', '2016-12-21', 250, 250);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedor`
--

CREATE TABLE IF NOT EXISTS `tbl_proveedor` (
  `codigo_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_empresa` int(11) NOT NULL,
  `RTN` varchar(45) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `correo_electronico` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `registro_sanitario` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_proveedor`),
  KEY `fk_tbl_proveedor_tbl_empresas1_idx` (`codigo_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `tbl_proveedor`
--

INSERT INTO `tbl_proveedor` (`codigo_proveedor`, `codigo_empresa`, `RTN`, `direccion`, `correo_electronico`, `telefono`, `registro_sanitario`) VALUES
(6, 1, '25111995', 'Col. Tu Carnita asada', 'carnesfrias@gmail.com', '22254058', '000563155451'),
(7, 2, '4562689532525', 'Col. capita sodas', 'cocacola@gmail.com', '22254028', '25558789544'),
(13, 3, '17417', 'Col. CAO', 'leyde@gmail.com', '2227-1603', '4590216'),
(14, 7, '5858585858', 'Col. las torres', 'pepsi@yahoo.com', '2225 4022', '54547856951'),
(15, 1, '54545458', 'Col.  su sulita', 'sula@hotmail.com', '22258778', '545456946');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sucursales`
--

CREATE TABLE IF NOT EXISTS `tbl_sucursales` (
  `codigo_sucursal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_sucursal` varchar(45) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_sucursal`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tbl_sucursales`
--

INSERT INTO `tbl_sucursales` (`codigo_sucursal`, `nombre_sucursal`, `direccion`, `telefono`) VALUES
(1, 'La Kennedy', 'Col. Kennedy calle principal', '2223 80 21'),
(2, 'La Torocagua', 'Col. La Torocagua', '2225 5051');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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
-- Filtros para la tabla `tbl_balanza_comprobacion`
--
ALTER TABLE `tbl_balanza_comprobacion`
  ADD CONSTRAINT `fk_tbl_balanza_comprobacion_tbl_libro_mayor1` FOREIGN KEY (`codigo_mayor`) REFERENCES `tbl_libro_mayor` (`codigo_mayor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_cuenta`
--
ALTER TABLE `tbl_cuenta`
  ADD CONSTRAINT `fk_tbl_cuenta_tbl_naturaleza1` FOREIGN KEY (`codigo_naturaleza`) REFERENCES `tbl_naturaleza` (`codigo_naturaleza`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  ADD CONSTRAINT `fk_tbl_empleados_tbl_area_trabajo1` FOREIGN KEY (`codigo_area_trabajo`) REFERENCES `tbl_area_trabajo` (`codigo_area`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_personal_tbl_cargo1` FOREIGN KEY (`codigo_privilegio`) REFERENCES `tbl_privilegio` (`codigo_privilegio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_personal_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_empresas`
--
ALTER TABLE `tbl_empresas`
  ADD CONSTRAINT `fk_tbl_empresas_tbl_productos1` FOREIGN KEY (`codigo_producto`) REFERENCES `tbl_productos` (`codigo_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  ADD CONSTRAINT `fk_tbl_ventas_tbl_clientes1` FOREIGN KEY (`codigo_cliente`) REFERENCES `tbl_clientes` (`codigo_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_ventas_tbl_personal1` FOREIGN KEY (`codigo_empleado`) REFERENCES `tbl_empleados` (`codigo_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_ventas_tbl_sucursales1` FOREIGN KEY (`codigo_sucursal`) REFERENCES `tbl_sucursales` (`codigo_sucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_factura_x_tbl_productos`
--
ALTER TABLE `tbl_factura_x_tbl_productos`
  ADD CONSTRAINT `fk_tbl_factura_has_tbl_productos_tbl_factura1` FOREIGN KEY (`codigo_factura`) REFERENCES `tbl_factura` (`codigo_factura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_factura_has_tbl_productos_tbl_productos1` FOREIGN KEY (`codigo_producto`) REFERENCES `tbl_productos` (`codigo_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_libro_diario_x_tbl_cuenta_acreditada`
--
ALTER TABLE `tbl_libro_diario_x_tbl_cuenta_acreditada`
  ADD CONSTRAINT `fk_tbl_libro_diario_has_tbl_cuenta_tbl_cuenta2` FOREIGN KEY (`codigo_cuenta`) REFERENCES `tbl_cuenta` (`codigo_cuenta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_libro_diario_has_tbl_cuenta_tbl_libro_diario2` FOREIGN KEY (`codigo_partida`) REFERENCES `tbl_libro_diario` (`codigo_partida`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_libro_diario_x_tbl_cuenta_cargada`
--
ALTER TABLE `tbl_libro_diario_x_tbl_cuenta_cargada`
  ADD CONSTRAINT `fk_tbl_libro_diario_has_tbl_cuenta_tbl_cuenta1` FOREIGN KEY (`codigo_cuenta`) REFERENCES `tbl_cuenta` (`codigo_cuenta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_libro_diario_has_tbl_cuenta_tbl_libro_diario1` FOREIGN KEY (`codigo_partida`) REFERENCES `tbl_libro_diario` (`codigo_partida`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  ADD CONSTRAINT `fk_tbl_pedidos_tbl_productos1` FOREIGN KEY (`codigo_producto`) REFERENCES `tbl_productos` (`codigo_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_pedidos_tbl_sucursales1` FOREIGN KEY (`codigo_sucursal`) REFERENCES `tbl_sucursales` (`codigo_sucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD CONSTRAINT `fk_tbl_productos_tbl_categorias1` FOREIGN KEY (`codigo_categoria`) REFERENCES `tbl_categorias` (`codigo_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_productos_tbl_marca1` FOREIGN KEY (`codigo_marca`) REFERENCES `tbl_marca` (`codigo_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_proveedor`
--
ALTER TABLE `tbl_proveedor`
  ADD CONSTRAINT `fk_tbl_proveedor_tbl_empresas1` FOREIGN KEY (`codigo_empresa`) REFERENCES `tbl_empresas` (`codigo_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `fk_tbl_usuarios_tbl_cargo1` FOREIGN KEY (`codigo_privilegio`) REFERENCES `tbl_privilegio` (`codigo_privilegio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
