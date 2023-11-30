-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 18:13:20
-- Versión del servidor: 8.0.33
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_la_palmita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categorias` int NOT NULL,
  `nombre_categoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categorias`, `nombre_categoria`) VALUES
(55698, 'BEBIDAS GASEOSAS'),
(124587, 'ABARROTES'),
(548720, 'PRODUCTOS ENLATADOS'),
(558715, 'DULCERIA'),
(996587, 'LACTEOS'),
(1478930, 'FRUTAS Y VERDURAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marcas` int NOT NULL,
  `nombre_marcas` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marcas`, `nombre_marcas`) VALUES
(124587, 'Aceite Soya Uno A'),
(441078, 'Zenú'),
(456987, 'Coca-Cola'),
(883014, 'Alpina'),
(990587, 'Bimbo'),
(1256974, 'Postobón');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int NOT NULL,
  `id_categorias` int NOT NULL,
  `id_marcas` int NOT NULL,
  `precio` int NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `id_categorias`, `id_marcas`, `precio`, `descripcion`) VALUES
(2598, 55698, 1256974, 18000, 'manzana postobón 400 cc'),
(5598, 124587, 124587, 15000, 'Aceite Uno A x 1000 cc'),
(14755, 996587, 883014, 26000, 'Bon Yurt Frootloops 161 g'),
(45872, 55698, 456987, 25000, 'Coca-cola 400 cc'),
(45873, 55698, 456987, 5000, 'coca-cola 1.5 cc  '),
(45874, 996587, 883014, 32000, 'Yogurt Griego Natural sin azúcar 1000 g'),
(45875, 124587, 441078, 5000, 'Lomos de atún en aceite de oliva'),
(45876, 55698, 456987, 5000, 'COCA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marcas`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`),
  ADD KEY `id_categoria_idx` (`id_categorias`),
  ADD KEY `id_marcas_idx` (`id_marcas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45877;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `id_categoria` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id_categorias`),
  ADD CONSTRAINT `id_marcas` FOREIGN KEY (`id_marcas`) REFERENCES `marcas` (`id_marcas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
