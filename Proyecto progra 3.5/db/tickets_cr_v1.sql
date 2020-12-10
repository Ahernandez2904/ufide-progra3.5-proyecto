-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2020 a las 06:39:26
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tickets_cr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id_cliente` varchar(15) NOT NULL,
  `nombre_cliente` varchar(100) NOT NULL,
  `telefono_cliente` int(11) NOT NULL,
  `correo_cliente` varchar(100) NOT NULL,
  `contrasenna_cliente` varchar(100) NOT NULL,
  `preguntaSegura_cliente` varchar(100) NOT NULL,
  `respuesta_cliente` varchar(100) NOT NULL,
  `tickets_disponibles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_horarios`
--

CREATE TABLE `tb_horarios` (
  `id_horario` varchar(15) NOT NULL,
  `id_ruta` varchar(15) NOT NULL,
  `horario` varchar(25) NOT NULL,
  `cupos_disponibles` int(11) NOT NULL,
  `lugar_salida` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_rutas`
--

CREATE TABLE `tb_rutas` (
  `id_ruta` varchar(15) NOT NULL,
  `nombre_ruta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_sugerencias`
--

CREATE TABLE `tb_sugerencias` (
  `id_sugerencia` varchar(15) NOT NULL,
  `comentario` varchar(1000) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tickets`
--

CREATE TABLE `tb_tickets` (
  `id_ticket` varchar(15) NOT NULL,
  `costo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tb_horarios`
--
ALTER TABLE `tb_horarios`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `id_ruta` (`id_ruta`);

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
-- Indices de la tabla `tb_tickets`
--
ALTER TABLE `tb_tickets`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_horarios`
--
ALTER TABLE `tb_horarios`
  ADD CONSTRAINT `tb_horarios_ibfk_1` FOREIGN KEY (`id_ruta`) REFERENCES `tb_rutas` (`id_ruta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
