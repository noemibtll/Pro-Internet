-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2024 a las 16:02:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `eliminado` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `correo`, `pass`, `status`, `eliminado`) VALUES
(1, 'noemi', 'noemi@outlook.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 0),
(2, 'alma', 'almaaa', '1234', 1, 0),
(3, 'no', 'no@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 0),
(4, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1, 0),
(5, 'na', 'na@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 0),
(7, 'mimi', 'mimi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `apellidos` varchar(128) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `rol` int(1) NOT NULL,
  `archivo_n` varchar(255) NOT NULL,
  `archivo` varchar(128) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `eliminado` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellidos`, `correo`, `pass`, `rol`, `archivo_n`, `archivo`, `status`, `eliminado`) VALUES
(1, 'Felipe', 'Jimenez', 'felipe@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1, '', '', 1, 0),
(2, 'Noemi', 'Botello', 'noemi@empleado.com', '21232f297a57a5a743894a0e4a801fc3', 2, 'default.png', 'c21f969b5f03d33d43e04f8f136e7682.png', 1, 1),
(3, 'Jose', 'Jimenez', 'jose@empleado.com', '21232f297a57a5a743894a0e4a801fc3', 1, 'default.png', 'c21f969b5f03d33d43e04f8f136e7682.png', 1, 0),
(4, 'Comprar', 'Donde', 'comprar@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1, 'default.png', 'c21f969b5f03d33d43e04f8f136e7682.png', 1, 0),
(5, 'nadia', 'botello', 'nadia@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'images.png', '59b514174bffe4ae402b3d63aad79fe0.png', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `total` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cerrado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `fecha`, `total`, `id_cliente`, `cerrado`) VALUES
(1, '2023-12-09 01:39:49', 1499, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_producto`
--

CREATE TABLE `pedido_producto` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `costo` double NOT NULL DEFAULT 0,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido_producto`
--

INSERT INTO `pedido_producto` (`id`, `id_pedido`, `id_producto`, `costo`, `cantidad`) VALUES
(10, 1, 3, 499, 1),
(11, 1, 2, 500, 1),
(12, 1, 2, 500, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `codigo` varchar(128) NOT NULL,
  `descripcion` text NOT NULL,
  `costo` double NOT NULL,
  `stock` int(11) NOT NULL,
  `archivo_n` varchar(255) NOT NULL,
  `archivo` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `eliminado` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `codigo`, `descripcion`, `costo`, `stock`, `archivo_n`, `archivo`, `status`, `eliminado`) VALUES
(2, 'Mochila Roja', 'MO01', 'Mochila Roja', 500, 20, 'mochila1.jpg', '3db9e44ce0a3317d2e085558533d129b.jpg', 1, 0),
(3, 'Mochila Azul', 'MO02', 'Mochila Azul', 499, 25, 'mochila2.jpg', '8cc73eaef48b822ff71a7aac7dc84752.jpg', 1, 0),
(4, 'Mochila Rosa', 'MO03', 'Mochila Rosa', 499, 40, 'mochila3.jpg', '767ab0f8aacd0886208ae66552377c71.jpg', 1, 0),
(5, 'mochila negra', '30', 'mochila negra', 500, 30, 'mochila_negra.jpg', '3a3565592c39e210895406aa317bd06b.jpg', 1, 0),
(6, 'ruben', '78', 'mo', 400, 30, 'mochila_amarilla.jpg', 'fe0b0e5c10a8198c7cfa5b431dc0e0cb.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `archivo` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `eliminado` int(11) NOT NULL DEFAULT 0,
  `archivo_n` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `nombre`, `archivo`, `status`, `eliminado`, `archivo_n`) VALUES
(3, 'cyberMonday', 'cf45070a017d70c16ac793b6107bcc3b.jpg', 1, 0, 'cybermonday.jpg'),
(5, 'promo', '51b6076ed7a7f544f55a9f5868fc8359.', 1, 1, 'promo'),
(6, 'promo', '001711dae3975175cfe1d8d19b53b1bb.jpg', 1, 0, 'promociones.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
