-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2023 a las 06:18:15
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
-- Base de datos: `jobflex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleadores`
--

CREATE TABLE `empleadores` (
  `id_empleador` int(11) NOT NULL,
  `nombre_empleador` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `numero_telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleadores`
--

INSERT INTO `empleadores` (`id_empleador`, `nombre_empleador`, `correo`, `descripcion`, `numero_telefono`) VALUES
(1, 'navi', 'navi@contacto.com', 'jugador profesional', '9911223344');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `tipo_rol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `tipo_rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE `trabajos` (
  `id_trabajo` int(11) NOT NULL,
  `nombre_trabajo` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `Turno` varchar(100) NOT NULL,
  `tipo_jornada` varchar(40) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `fecha_fin_vacante` date NOT NULL,
  `nombre_publicante` varchar(100) NOT NULL,
  `telefono_contacto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trabajos`
--

INSERT INTO `trabajos` (`id_trabajo`, `nombre_trabajo`, `descripcion`, `Turno`, `tipo_jornada`, `fecha_publicacion`, `fecha_fin_vacante`, `nombre_publicante`, `telefono_contacto`) VALUES
(1, 'trabajo1', 'trabajo1', 'matutino', 'completa', '2023-08-12', '2023-08-31', 'McDonalds', ''),
(2, 'auxiliar de ventas', 'auxiliar de ventas en una empresa', 'matutino', 'completa', '2023-08-14', '2023-08-31', 'NAVI', ''),
(4, 'Repartidor de pizzas', 'Repartidor de pizzas', 'Matutino', 'Medio tiempo', '2023-08-08', '2023-09-27', 'Domino\'s', ''),
(6, 'Cocinero', 'Cocinero en restarurante famoso', 'Matutino', 'Completa', '0000-00-00', '2023-08-23', 'Vips', ''),
(7, 'Vendedor de ropa', 'Vendedor de ropa en una tienda departamental', 'Vespertino', 'Medio tiempo', '2023-08-15', '2023-08-30', 'Liverpool', ''),
(8, 'Repartidor', 'aw', 'Matutino', 'Completa', '2023-08-15', '2023-08-31', 'Vips', ''),
(9, 'Mesero', 'Se parte de esta gran familia, conviértete en un mesero de la mano de los mejores', 'Matutino', 'Completa', '2023-08-21', '2023-09-08', 'El Porton', '9123458560');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre_usuario` varchar(50) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `fecha_registro` date NOT NULL,
  `numero_telefono` varchar(15) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre_usuario`, `Nombre`, `correo`, `contraseña`, `fecha_registro`, `numero_telefono`, `id_rol`) VALUES
(1, 'luis', 'Luis Ernesto', 'prueba@prueba.com', '123456', '2023-08-08', '', 2),
(2, 'gato', 'gatito', 'prueba@prueba.com', '123', '2023-08-08', '', 0),
(3, 'dsadasd', 'asas', 'aas', 'as', '2023-08-08', '', 0),
(4, 'AMY', 'Amy', 'prueba@prueba.com', '1234', '2023-08-09', '', 0),
(6, 'luiss', 'luis2', 'prueba@prueba.com', '1234', '2023-08-13', '121212', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleadores`
--
ALTER TABLE `empleadores`
  ADD PRIMARY KEY (`id_empleador`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`id_trabajo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleadores`
--
ALTER TABLE `empleadores`
  MODIFY `id_empleador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `id_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
