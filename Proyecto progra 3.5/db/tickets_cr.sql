-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2020 a las 16:35:42
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tickets_cr`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarCantidad`(IN `id_horario1` INT, IN `cupos` INT)
    NO SQL
UPDATE tb_horarios set cupos_disponibles = cupos where id_horario1 = id_horario$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `crearFactura`(IN `tarjeta1` VARCHAR(16), IN `cantidad_tiquetes1` INT, IN `total1` INT, IN `nombre1` VARCHAR(100), IN `id_cliente1` VARCHAR(15), IN `id_horario` INT)
    NO SQL
INSERT INTO tb_factura VALUES (NULL, tarjeta1, cantidad_tiquetes1, total1, nombre1, id_cliente1, id_horario1)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `iniciarSesion`(IN `id1` VARCHAR(15), IN `contrasena1` VARCHAR(100))
    NO SQL
SELECT * 
FROM tb_clientes 
WHERE id1 = id_cliente AND contrasena1 = contrasenna_cliente
LIMIT 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarCliente`(IN `id1` VARCHAR(15), IN `nombre1` VARCHAR(100), IN `telefono1` VARCHAR(8), IN `email1` VARCHAR(100), IN `contrasena1` VARCHAR(100), IN `preguntasegura1` VARCHAR(100), IN `respuestapreguntasegura1` VARCHAR(100))
    NO SQL
INSERT INTO tb_clientes VALUES 
(id1, nombre1, telefono1, email1, contrasena1, preguntasegura1, respuestapreguntasegura1, 0)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarFactura`(IN `tarjeta1` VARCHAR(16), IN `cantidad_tiquetes1` INT, IN `total1` INT, IN `nombre1` VARCHAR(100), IN `id_cliente1` VARCHAR(15), IN `id_horario1` INT)
    NO SQL
INSERT INTO tb_factura VALUES (NULL, tarjeta1, cantidad_tiquetes1, total1, nombre1, id_cliente1, id_horario1)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `seleccionarHorarios`()
    NO SQL
SELECT h.id_horario, h.id_ruta, h.horario, h.cupos_disponibles, h.lugar_salida, r.nombre_ruta
FROM tb_horarios AS h, tb_rutas AS r
WHERE h.id_ruta = r.id_ruta$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `seleccionarHorarios2`(IN `idRuta` INT)
    NO SQL
SELECT h.id_horario, h.id_ruta, h.horario, h.cupos_disponibles, h.lugar_salida, r.nombre_ruta
FROM tb_horarios AS h, tb_rutas AS r
WHERE h.id_ruta = r.id_ruta AND r.id_ruta = idRuta$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `seleccionarHorarios3`(IN `id_horario1` INT)
    NO SQL
SELECT h.id_horario, h.id_ruta, h.horario, h.cupos_disponibles, h.lugar_salida, r.nombre_ruta, r.costo
FROM tb_horarios AS h, tb_rutas AS r
WHERE h.id_ruta = r.id_ruta AND h.id_horario = id_horario1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `seleccionarRutas`()
    NO SQL
SELECT * FROM tb_rutas$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clientes`
--

CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `id_cliente` varchar(15) NOT NULL,
  `nombre_cliente` varchar(100) NOT NULL,
  `telefono_cliente` varchar(8) NOT NULL,
  `correo_cliente` varchar(100) NOT NULL,
  `contrasenna_cliente` varchar(100) NOT NULL,
  `preguntaSegura_cliente` varchar(100) NOT NULL,
  `respuesta_cliente` varchar(100) NOT NULL,
  `tickets_disponibles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_cliente`, `nombre_cliente`, `telefono_cliente`, `correo_cliente`, `contrasenna_cliente`, `preguntaSegura_cliente`, `respuesta_cliente`, `tickets_disponibles`) VALUES
('1', '2', '3', '4', '5', '6', '7', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_factura`
--

CREATE TABLE IF NOT EXISTS `tb_factura` (
  `id_factura` int(11) NOT NULL,
  `tarjeta` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad_tiquetes` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_cliente` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `id_horario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_factura`
--

INSERT INTO `tb_factura` (`id_factura`, `tarjeta`, `cantidad_tiquetes`, `total`, `nombre`, `id_cliente`, `id_horario`) VALUES
(2, '2', 2, 2, '2', '2', 1),
(8, '2', 2, 2, '2', '1', 1),
(9, '1', 1, 1, '1', '1', 1),
(10, '1', 1, 3, '1', '1', 4),
(11, '1', 1, 3, '1', '1', 4),
(12, '3', 3, 9, '3', '1', 4),
(13, '4', 4, 12, '4', '1', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_horarios`
--

CREATE TABLE IF NOT EXISTS `tb_horarios` (
  `id_horario` int(11) NOT NULL,
  `id_ruta` int(11) NOT NULL,
  `horario` varchar(25) NOT NULL,
  `cupos_disponibles` int(11) NOT NULL,
  `lugar_salida` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_horarios`
--

INSERT INTO `tb_horarios` (`id_horario`, `id_ruta`, `horario`, `cupos_disponibles`, `lugar_salida`) VALUES
(1, 1, '9 a.m.', 1, 'San José'),
(2, 1, '12 p.m.', 28, 'San José'),
(3, 1, '3 p.m.', 0, 'San José'),
(4, 2, '9 a.m.', 23, 'San José');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_rutas`
--

CREATE TABLE IF NOT EXISTS `tb_rutas` (
  `id_ruta` int(11) NOT NULL,
  `nombre_ruta` varchar(100) NOT NULL,
  `costo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_rutas`
--

INSERT INTO `tb_rutas` (`id_ruta`, `nombre_ruta`, `costo`) VALUES
(1, 'San José - Heredia', 7),
(2, 'San José - San Pedro', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_sugerencias`
--

CREATE TABLE IF NOT EXISTS `tb_sugerencias` (
  `id_sugerencia` int(11) NOT NULL,
  `comentario` varchar(1000) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_sugerencias`
--

INSERT INTO `tb_sugerencias` (`id_sugerencia`, `comentario`, `correo`, `status`) VALUES
(1, 'Arreglar recuperar contraseña', 'a@a.a', 'Pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tb_factura`
--
ALTER TABLE `tb_factura`
  ADD PRIMARY KEY (`id_factura`);

--
-- Indices de la tabla `tb_horarios`
--
ALTER TABLE `tb_horarios`
  ADD PRIMARY KEY (`id_horario`), ADD KEY `id_ruta` (`id_ruta`);

--
-- Indices de la tabla `tb_rutas`
--
ALTER TABLE `tb_rutas`
  ADD PRIMARY KEY (`id_ruta`);

--
-- Indices de la tabla `tb_sugerencias`
--
ALTER TABLE `tb_sugerencias`
  ADD PRIMARY KEY (`id_sugerencia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_factura`
--
ALTER TABLE `tb_factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tb_horarios`
--
ALTER TABLE `tb_horarios`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tb_rutas`
--
ALTER TABLE `tb_rutas`
  MODIFY `id_ruta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tb_sugerencias`
--
ALTER TABLE `tb_sugerencias`
  MODIFY `id_sugerencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_horarios`
--
ALTER TABLE `tb_horarios`
ADD CONSTRAINT `tb_horarios_ibfk_1` FOREIGN KEY (`id_ruta`) REFERENCES `tb_rutas` (`id_ruta`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
