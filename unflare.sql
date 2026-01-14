-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2024 a las 02:16:00
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unflare`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal2`
--

CREATE TABLE `personal2` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personal2`
--

INSERT INTO `personal2` (`id`, `name`, `usuario`, `password`, `date`) VALUES
(38, 'Adam ', 'JimMillerGamimg@rague.cz', 'Miller Gaming', '2024-07-11 18:56:42'),
(37, 'Alan cumming', 'cum_buster@gmail.com', 'alan cumming hamburguer', '2024-07-11 18:55:32'),
(45, 'Andres', 'Andres@gmail.com', 'gg', '2024-07-12 18:35:50'),
(42, 'bhvhkvhv ', 'aranjohandavid@gmail.com', 'vhchchgcgjcgcgjc', '2024-07-12 18:25:08'),
(14, 'el duro', 'johandavidardila408@gmail.com', '123', '2024-05-30 19:14:09'),
(15, 'Elver ', 'jj@gmail.com', '123', '2024-05-30 20:08:53'),
(27, 'JAXOF', 'jj@gmail.com', '12345', '2024-07-04 19:03:32'),
(36, 'juasjuas', 'nigga@gmail.com', 'xdxdxddddddd', '2024-07-11 18:54:04'),
(39, 'planta', 'planta@gmail', 'planta', '2024-07-11 19:31:58'),
(16, 'Salamaleco', 'ush@gmail.com', '1111', '2024-06-06 20:11:25'),
(17, 'Tu nigga love shady', 'nigga@gmail.com', '12345', '2024-06-06 21:20:14'),
(35, 'Tulio salamanca', 'ardiladuranjohandavid@gmail.com', 'jj', '2024-07-11 18:53:46'),
(47, 'Valentina Parrado', 'Valeparrado@gmail.com', '12345', '2024-09-06 22:01:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personal2`
--
ALTER TABLE `personal2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD UNIQUE KEY `name_3` (`name`),
  ADD KEY `name` (`name`,`usuario`,`password`,`date`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personal2`
--
ALTER TABLE `personal2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
