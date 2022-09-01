-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-10-2019 a las 00:38:07
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(5) NOT NULL,
  `Codigo` int(5) NOT NULL,
  `Descripcion` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `PrecioUnitario` float NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Codigo`, `Descripcion`, `PrecioUnitario`, `updated_at`, `created_at`) VALUES
(1, 1001, 'Lavandina Ayudin max.limpiez 2 lt ', 172.99, '2019-10-09 02:29:55', '2019-09-27 21:00:00'),
(2, 1002, 'desodorante amb Glade caric.algod 360 cc ', 167.5, '2019-10-09 02:30:16', '2019-09-27 21:28:00'),
(3, 1003, 'Limpiador Lysoform inod.orig. 500 ml ', 243.35, '2019-10-09 02:30:34', '2019-09-28 17:31:08'),
(4, 1004, 'Trapo Rejilla blanco 40x20', 115.6, '2019-09-30 00:43:12', '2019-09-30 00:43:12'),
(5, 1005, 'Esponja Virulana ps2', 40.15, '2019-09-30 00:52:56', '2019-09-30 00:52:56'),
(6, 1020, 'Procenex Duo 900ml', 120, '2019-10-09 00:06:13', '2019-10-09 00:06:13');

-- --------------------------------------------------------
--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
