-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2026 a las 02:35:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `certificados_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificados`
--

CREATE TABLE `certificados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `logo_club` varchar(255) DEFAULT NULL,
  `logo_conquistadores` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `certificados`
--

INSERT INTO `certificados` (`id`, `nombre`, `fecha`, `logo_club`, `logo_conquistadores`, `fecha_registro`) VALUES
(33, 'AARON KEYLOR CAPUñAY ZAMORA', '2026-05-30', '1000500021.jpg', '1000500020.jpg', '2026-05-28 20:15:14'),
(35, 'ANDREA BARBARA BELEN VASQUEZ MOREYRA', '2026-05-30', '1000500021.jpg', '1000500020.jpg', '2026-05-28 20:16:50'),
(36, 'DIEGO FERNANDO SALAS RODRíGUEZ ', '2026-05-30', '1000500021.jpg', '1000500020.jpg', '2026-05-28 20:17:17'),
(37, 'FABIANA VALENTINA FARFAN CHAVEZ', '2026-05-30', '1000500021.jpg', '1000500020.jpg', '2026-05-28 20:18:28'),
(38, 'JHON ESNEIDER HERRERA MUñOZ', '2026-05-30', '1000500021.jpg', '1000500020.jpg', '2026-05-28 20:19:15'),
(39, 'JOSÉ CALED CELIZ GARCIA', '2026-05-30', 'mikel.png', 'conquistadores.png', '2026-05-28 20:20:01'),
(40, 'LESLIE TATIANA VALDIVIA BUSTAMANTE', '2026-05-30', 'mikel.png', 'conquistadores.png', '2026-05-28 20:20:45'),
(41, 'LIA FERNANDA CHERAN CAPUÑAY', '2026-05-30', 'mikel.png', 'conquistadores.png', '2026-05-28 20:21:39'),
(42, 'LIAM MATHIAS ARTEMIO LUYO MOREYRA', '2026-05-30', 'mikel.png', 'conquistadores.png', '2026-05-28 20:22:10'),
(43, 'LUCIANA ANTONELLA NIÑO CAPUÑAY', '2026-05-30', 'mikel.png', 'conquistadores.png', '2026-05-28 20:22:47'),
(44, 'LUCIANA VALESKA MARTINEZ MOREYRA		', '2026-05-30', 'mikel.png', 'conquistadores.png', '2026-05-28 20:23:15'),
(45, 'ROSANGELA VALENTINA HUANCAYO NIÑO', '2026-05-30', 'mikel.png', 'conquistadores.png', '2026-05-28 20:30:07'),
(46, 'SOFIA EMILY DOMIGUEZ DIACHENKO', '2026-05-30', 'mikel.png', 'conquistadores.png', '2026-05-28 20:30:40'),
(47, 'THIAGO ALONSO VASQUEZ MOREYRA		', '2026-05-30', 'mikel.png', 'conquistadores.png', '2026-05-28 20:31:06'),
(48, 'VICTORIA ALEJANDRA DOMINGUEZ DIACHENKO', '2026-05-30', 'mikel.png', 'conquistadores.png', '2026-05-28 20:31:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificados_especialidades`
--

CREATE TABLE `certificados_especialidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `especialidad` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `logo_club` varchar(255) DEFAULT NULL,
  `logo_conquistadores` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `certificados_especialidades`
--

INSERT INTO `certificados_especialidades` (`id`, `nombre`, `especialidad`, `fecha`, `logo_club`, `logo_conquistadores`, `fecha_registro`) VALUES
(1, 'AARON KEYLOR CAPUÑAY ZAMORA', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.jpg', 'conquistadores.jpg', '2026-05-29 01:15:14'),
(2, 'ANDREA BARBARA BELEN VASQUEZ MOREYRA', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.jpg', 'conquistadores.jpg', '2026-05-29 01:16:50'),
(3, 'DIEGO FERNANDO SALAS RODRÍGUEZ', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.jpg', 'conquistadores.jpg', '2026-05-29 01:17:17'),
(4, 'FABIANA VALENTINA FARFAN CHAVEZ', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.jpg', 'conquistadores.jpg', '2026-05-29 01:18:28'),
(5, 'JHON ESNEIDER HERRERA MUÑOZ', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.jpg', 'conquistadores.jpg', '2026-05-29 01:19:15'),
(6, 'JOSÉ CALED CELIZ GARCIA', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.png', 'conquistadores.png', '2026-05-29 01:20:01'),
(7, 'LESLIE TATIANA VALDIVIA BUSTAMANTE', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.png', 'conquistadores.png', '2026-05-29 01:20:45'),
(8, 'LIA FERNANDA CHERAN CAPUÑAY', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.png', 'conquistadores.png', '2026-05-29 01:21:39'),
(9, 'LIAM MATHIAS ARTEMIO LUYO MOREYRA', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.png', 'conquistadores.png', '2026-05-29 01:22:10'),
(10, 'LUCIANA ANTONELLA NIÑO CAPUÑAY', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.png', 'conquistadores.png', '2026-05-29 01:22:47'),
(11, 'LUCIANA VALESKA MARTINEZ MOREYRA', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.png', 'conquistadores.png', '2026-05-29 01:23:15'),
(12, 'ROSANGELA VALENTINA HUANCAYO NIÑO', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.png', 'conquistadores.png', '2026-05-29 01:30:07'),
(13, 'SOFIA EMILY DOMIGUEZ DIACHENKO', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.png', 'conquistadores.png', '2026-05-29 01:30:40'),
(14, 'THIAGO ALONSO VASQUEZ MOREYRA', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.png', 'conquistadores.png', '2026-05-29 01:31:06'),
(15, 'VICTORIA ALEJANDRA DOMINGUEZ DIACHENKO', 'PIONEROS ADVENTISTAS', '2026-04-11', 'mikel.png', 'conquistadores.png', '2026-05-29 01:31:33');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `certificados`
--
ALTER TABLE `certificados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `certificados_especialidades`
--
ALTER TABLE `certificados_especialidades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `certificados`
--
ALTER TABLE `certificados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `certificados_especialidades`
--
ALTER TABLE `certificados_especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
