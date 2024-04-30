CREATE TABLE `empleados` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(128) NOT NULL,
  `apellidos` varchar(128) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `rol` int(1) NOT NULL,
  `archivo_n` varchar(255) NOT NULL,
  `archivo` varchar(128) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `eliminado` int(11) NOT NULL DEFAULT 0
);

CREATE TABLE `productos` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(128) NOT NULL,
  `codigo` varchar(128) NOT NULL,
  `descripcion` text NOT NULL,
  `costo` double NOT NULL,
  `stock` int(11) NOT NULL,
  `archivo_n` varchar(255) NOT NULL,
  `archivo` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `eliminado` int(11) NOT NULL DEFAULT 0
);

CREATE TABLE `banners` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(128) NOT NULL,
  `archivo` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `eliminado` int(11) NOT NULL DEFAULT 0
);

CREATE TABLE `pedidos` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `total` int(11) NOT NULL,
  `cerrado` int(1) DEFAULT 0
);

CREATE TABLE `pedido_producto` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` varchar(11) NOT NULL,
  `costo` varchar(255) NOT NULL,
  `cantidad` int(1) NOT NULL
);

ALTER TABLE `pedido_producto` ADD FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id`); 
ALTER TABLE `pedido_producto` ADD FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);