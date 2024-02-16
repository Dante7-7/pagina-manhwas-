-- phpMyAdmin SQL Dump
-- version 5.2.1-1.fc38
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-12-2023 a las 01:17:17
-- Versión del servidor: 8.0.35
-- Versión de PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pagina_m`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `correo` varchar(30) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `contraseña` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `usuario`, `contraseña`) VALUES
(1, 'dante@gmail.com', 'dante', '123'),
(2, 'gjgj@jajaaj', 'alo', '123'),
(3, '12344@jajaja', 'katy', '321'),
(6, 'hallo@gamil.com', 'paran', '098'),
(7, 'andi@gmail.com', 'andy', 'los12'),
(8, 'gjgj@jajaaj2', 'blan', '845'),
(9, 'los@gmail.com', 'amenadiel', '3425'),
(14, 'jose@gmail.com', 'joselito', '432'),
(15, 'juli@gmail.com', 'jaz', '071'),
(17, 'loco@gmail.com', 'loco', 'lala'),
(18, '007@outlo.com', '007', '007'),
(20, 'ayuda@gma.com', 'ayu', 'ayuda'),
(21, '089@gmalo:com', '08', '$2y$10$kcqpSkXsx/eRQpGN.M8mm.O1H.L/TJvb.dz4xuJVVNWvfSjBFIFVq');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
