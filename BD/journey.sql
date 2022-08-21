-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2022 a las 04:16:29
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `journey`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE `item` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Ataque` int(11) NOT NULL,
  `Defensa` int(11) NOT NULL,
  `Vida` int(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Username` varchar(70) NOT NULL,
  `Url_item` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `item`
--

INSERT INTO `item` (`Id`, `Nombre`, `Tipo`, `Ataque`, `Defensa`, `Vida`, `Precio`, `Username`, `Url_item`) VALUES
(1, 'Hoja Helada', 'Espada', 100, 50, 10, 100, 'Bazar', 'https://previews.123rf.com/images/robuart/robuart1611/robuart161100871/66292730-fantástico-modelo-de-espada-juego-en-el-diseño-de-estilo-plano-ilustración-de-la-hada-arma-fría-para.jpg'),
(2, 'Escudo del Mono', 'Escudo', 5, 60, 30, 60, 'Bazar', 'https://preview.free3d.com/img/2019/04/2146753334948661021/ktuw7rjw-900.jpg'),
(3, 'Botas del Carpintero', 'Botas', 20, 10, 40, 30, 'Bazar', 'https://i.pinimg.com/600x315/19/d7/53/19d7530fd0b16166167c5a163bed4621.jpg'),
(4, 'Anillo 8-Bits', 'Anillo', 60, 20, 50, 95, 'Bazar', 'https://cdn.create.vista.com/api/media/small/546259754/stock-vector-pixel-magic-ring-gem-games'),
(5, 'Collar Misterioso', 'Collar', 100, 0, 0, 200, 'Bazar', 'https://m.media-amazon.com/images/I/41wsb67AOhL._AC_SX355_.jpg'),
(6, 'Hoja Helada', 'Espada', 100, 50, 10, 90, 'Bazar', 'https://previews.123rf.com/images/robuart/robuart1611/robuart161100871/66292730-fantástico-modelo-de-espada-juego-en-el-diseño-de-estilo-plano-ilustración-de-la-hada-arma-fría-para.jpg'),
(7, 'Escudo del Mono', 'Anillo', 5, 60, 30, 55, 'Bazar', 'https://preview.free3d.com/img/2019/04/2146753334948661021/ktuw7rjw-900.jpg'),
(10, 'Escudo del Mono', 'Botas', 33, 33, 33, 33, 'Bazar', 'https://m.media-amazon.com/images/I/41wsb67AOhL._AC_SX355_.jpg'),
(13, 'Hoja Helada', 'Anillo', 23, 223, 232, 232, 'Bazar', 'https://m.media-amazon.com/images/I/41wsb67AOhL._AC_SX355_.jpg'),
(17, 'Hoja Helada', 'Anillo', 11, 11, 11, 11, 'Bazar', 'https://preview.free3d.com/img/2019/04/2146753334948661021/ktuw7rjw-900.jpg'),
(18, 'Escudo del Mono', 'Anillo', 2, 2, 2, 2, 'Bazar', 'https://i.pinimg.com/600x315/19/d7/53/19d7530fd0b16166167c5a163bed4621.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Username` varchar(70) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contraseña` varchar(200) NOT NULL,
  `Tipo_Usuario` varchar(20) NOT NULL,
  `Nombre_Completo` varchar(100) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Url_imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Username`, `Email`, `Contraseña`, `Tipo_Usuario`, `Nombre_Completo`, `Telefono`, `Url_imagen`) VALUES
('Bazar', 'bazar@journey.com', '4173ece297b5e750b7af3ee52b525db055a65353d5d684c157e4c448774ee67b33e6bf2a35f38e919a817765eec7410b5278af9dd2023fde64b0bb632cdc2d8b', 'Bazar', 'Bazar', '', 'https://i.pinimg.com/originals/de/a5/d0/dea5d0dddeeeb28b2084977e677a76a8.jpg'),
('Rose', 'rose@journey.com', '48a020262c025a571f8b302330b049906787f2ffc861093fcef08a0e8d8997b2dc9f0a30b02b0344a14332dbeec22707e7bb052134ad90d2ca1f20695e12efe5', 'Admin', 'Rose', '', 'https://cdn.pixabay.com/photo/2021/02/05/11/10/watercolor-5984221_1280.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `item`
--
ALTER TABLE `item`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
