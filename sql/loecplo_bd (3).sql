-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2024 a las 08:12:01
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
-- Base de datos: `loecplo_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `categoria_id` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `nombre_categoria`, `created_at`, `updated_at`) VALUES
(19, 'hoteles', '2024-10-16 01:33:26', '2024-10-16 01:33:26'),
(20, 'hoteles', '2024-10-16 06:03:36', '2024-10-16 06:03:36'),
(21, 'hoteles', '2024-10-16 06:03:45', '2024-10-16 06:03:45'),
(22, 'hoteles', '2024-10-16 06:05:06', '2024-10-16 06:05:06'),
(23, 'hoteles', '2024-10-16 06:07:36', '2024-10-16 06:07:36'),
(24, 'hoteles', '2024-10-16 06:09:23', '2024-10-16 06:09:23'),
(25, 'hoteles', '2024-10-16 07:40:00', '2024-10-16 07:40:00'),
(26, 'hoteles', '2024-10-16 07:41:29', '2024-10-16 07:41:29'),
(27, 'hoteles', '2024-10-16 07:42:49', '2024-10-16 07:42:49'),
(28, 'hoteles', '2024-10-16 07:43:30', '2024-10-16 07:43:30'),
(29, 'otro', '2024-10-16 07:46:58', '2024-10-16 07:46:58'),
(30, 'restaurantes', '2024-10-16 08:19:43', '2024-10-16 08:19:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `motivo` varchar(250) NOT NULL,
  `comentario` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `email`, `motivo`, `comentario`, `created_at`) VALUES
(1, '', '', 'freryhdt', 'fghdhbvb', '2024-10-16 20:58:27'),
(2, 'Sara Vanessa', 'dana@gamil.com', 'freryhdt', 'fghdhbvb', '2024-10-16 21:07:22'),
(3, 'Sara Vanessa', 'dana@gamil.com', 'asfdgh', 'hgnghngnc', '2024-10-16 21:07:40'),
(4, 'Sara Vanessa', 'dana@gamil.com', 'bbnfchgngh', 'gfgdtr', '2024-10-17 02:39:27'),
(5, 'sara', 'dana@gamil.com', 'bbnfchgngh', 'fgjytjncg', '2024-10-17 02:45:22'),
(6, 'sara', 'dana@gamil.com', 'bbnfchgngh', 'fgjytjncg', '2024-10-17 02:46:45'),
(7, 'Sara Vanessa', 'sara.vasallo1@soy.sena.edu.co', 'freryhdt', 'b, ,nvjh', '2024-10-17 02:51:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `local_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagenes` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `local_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagenes`, `img`, `local_id`, `created_at`, `updated_at`) VALUES
(8, '../Views/uploads/descarga (1).jpg', 19, '2024-10-16 01:33:26', '2024-10-16 01:33:26'),
(9, '../Views/uploads/vv.jpg', 20, '2024-10-16 06:03:36', '2024-10-16 06:03:36'),
(10, '../Views/uploads/vv.jpg', 21, '2024-10-16 06:03:45', '2024-10-16 06:03:45'),
(11, '../Views/uploads/vv.jpg', 22, '2024-10-16 06:05:06', '2024-10-16 06:05:06'),
(12, '../Views/uploads/descarga (1).jpg', 23, '2024-10-16 06:07:36', '2024-10-16 06:07:36'),
(13, '../Views/uploads/descarga (1).jpg', 24, '2024-10-16 06:09:23', '2024-10-16 06:09:23'),
(14, '../Views/uploads/descarga (1).jpg', 25, '2024-10-16 07:40:00', '2024-10-16 07:40:00'),
(15, '../Views/uploads/descarga (1).jpg', 26, '2024-10-16 07:41:29', '2024-10-16 07:41:29'),
(16, '../Views/uploads/descarga (1).jpg', 27, '2024-10-16 07:42:49', '2024-10-16 07:42:49'),
(17, '../Views/uploads/descarga (1).jpg', 28, '2024-10-16 07:43:30', '2024-10-16 07:43:30'),
(18, '../Views/uploads/descarga (1).jpg', 29, '2024-10-16 07:46:58', '2024-10-16 07:46:58'),
(19, '../Views/uploads/descarga (1).jpg', 30, '2024-10-16 08:19:43', '2024-10-16 08:19:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locales`
--

CREATE TABLE `locales` (
  `id_local` int(11) NOT NULL,
  `nombre_empresa` varchar(255) NOT NULL,
  `nit` varchar(70) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `descripcion` varchar(350) NOT NULL,
  `servicios` varchar(250) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `locales`
--

INSERT INTO `locales` (`id_local`, `nombre_empresa`, `nit`, `direccion`, `telefono`, `descripcion`, `servicios`, `url`, `categoria_id`, `created_at`, `updated_at`) VALUES
(19, 'sena', '99909', 'calle 1C 12A-29', '3105014235', 'dfreera', 'faef', 'https://www.google.com/maps.', 19, '2024-10-16 01:33:26', '2024-10-16 01:33:26'),
(20, 'sena', 'eee', 'calle 1C 12A-29', '3105014235', 'njhghfd', 'bvhgfyt', 'https://www.google.com/maps.', 20, '2024-10-16 06:03:36', '2024-10-16 06:03:36'),
(21, 'sena', 'eee', 'calle 1C 12A-29', '3105014235', 'njhghfd', 'bvhgfyt', 'https://www.google.com/maps.', 21, '2024-10-16 06:03:45', '2024-10-16 06:03:45'),
(22, 'sena', 'eee', 'calle 1C 12A-29', '3105014235', 'njhghfd', 'bvhgfyt', 'https://www.google.com/maps.', 22, '2024-10-16 06:05:06', '2024-10-16 06:05:06'),
(23, 'sena', 'cdsvd', 'calle 1C 12A-29', '3105014235', 'jhjghbn', 'ghgvj', 'https://www.google.com/maps.', 23, '2024-10-16 06:07:36', '2024-10-16 06:07:36'),
(24, 'sena', 'cdsvd', 'calle 1C 12A-29', '3105014235', 'jhjghbn', 'ghgvj', 'https://www.google.com/maps.', 24, '2024-10-16 06:09:23', '2024-10-16 06:09:23'),
(25, 'sena', 'eee', 'calle 1C 12A-29', '3105014235', '1234567io', 'bvhgfyt', 'https://www.google.com/maps', 25, '2024-10-16 07:40:00', '2024-10-16 07:40:00'),
(26, 'sena', 'cdsvd', 'calle 1C 12A-29', '3105014235', 'iuytdxfcvbnm', 'ffdcfhjjj', 'https://www.google.com/maps.', 26, '2024-10-16 07:41:29', '2024-10-16 07:41:29'),
(27, 'sena', 'cdsvd', 'calle 1C 12A-29', '3105014235', 'iuytdxfcvbnm', 'ffdcfhjjj', 'https://www.google.com/maps.', 27, '2024-10-16 07:42:49', '2024-10-16 07:42:49'),
(28, 'sena', '8456789', 'calle 1C 12A-29', '3105014235', 'jlkhgjfdxdcvbn', 'jjbnvbhj', 'https://www.google.com/maps', 28, '2024-10-16 07:43:30', '2024-10-16 07:43:30'),
(29, 'sena', '3456789', 'calle 1C 12A-29', '3105014235', 'cvbnm,.', 'ffdcfhjjj', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31796.40215139454!2d-74.49084861394745!3d5.014082428047944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e409a46b61023ff%3A0x82094f500526ecb4!2sVilleta%2C%20Cundinamarca!5e0!3m2!1ses!2sco!4', 29, '2024-10-16 07:46:58', '2024-10-16 07:46:58'),
(30, 'sena', 'eee', 'calle 1C 12A-29', '3105014235', 'xcvbnm', 'zxcvbnm,', 'https://www.google.com/maps.', 30, '2024-10-16 08:19:43', '2024-10-16 08:19:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `codigo_postal` varchar(20) NOT NULL,
  `numero_tarjeta` varchar(16) NOT NULL,
  `mes_expiracion` varchar(2) NOT NULL,
  `anio_expiracion` varchar(4) NOT NULL,
  `cvv` varchar(4) NOT NULL,
  `plan` varchar(50) NOT NULL,
  `fecha_pago` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id_pago`, `nombre`, `email`, `direccion`, `ciudad`, `codigo_postal`, `numero_tarjeta`, `mes_expiracion`, `anio_expiracion`, `cvv`, `plan`, `fecha_pago`) VALUES
(4, 'Sara Vanessa', 'pagaribello@misena.edu.co', 'calle 1C 12A-29', 'VILLETA', '253410', '1234567887654323', '43', '5678', '3245', 'basico', '2024-10-17 13:10:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resenas`
--

CREATE TABLE `resenas` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `local_id` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL CHECK (`calificacion` >= 1 and `calificacion` <= 5),
  `comentario` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(3, 'sara', 'sara.vasallo1@soy.sena.edu.co', '$2y$10$DX6SUIMzF0GvKpGvBwobZ.TeJ.ULL.iSIsQI5uYr820Wit/mEuS5a', 'user', '2024-10-12 19:28:52', '2024-10-12 19:28:52'),
(12, 'dana', 'dana@gamil.com', '$2y$10$AqsO1VmVDBlmKud3Fc9pS.saiesG/GIhfA5qB1DMVmS3PBmssoYDW', 'admin', '2024-10-12 21:45:54', '2024-10-12 21:45:54'),
(27, 'saravasallo612@gmail.com', 'vgbhtc@tf', '$2y$10$1QFTxyMDxCVKJSTE5BKnbecJ38.3EoBuG/7m2L0WP0FLt4LHAXV/m', 'user', '2024-10-14 23:00:46', '2024-10-14 23:00:46'),
(28, 'saravasallo612@gmail.com', 'bjhgfngdbc@fghj', '$2y$10$9C2kUfe4ew4IvpFSq21ayOFjwD8V7EFRhVph3taJ.7A.A3PUIaz42', 'user', '2024-10-16 06:10:09', '2024-10-16 06:10:09'),
(30, 'saravasallo612@gmail.com', 'kjhgfhvbn@bhvjh', '$2y$10$T3m51L//TwY/fuydjjnt9uV/WU5lxWhC6qTN6hyuN9sZbC8iDDQ3O', 'user', '2024-10-16 06:11:09', '2024-10-16 06:11:09'),
(31, 'dana', 'pagaribello@misena.edu.co', '$2y$10$9B05.KzSe3rFf.RCULZwNuj55Kof4AssJ7L013ChMVPyJSwqTtuWa', 'user', '2024-10-16 17:46:39', '2024-10-16 17:46:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_favorito` (`usuario_id`),
  ADD KEY `fk_local_favorito` (`local_id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagenes`),
  ADD KEY `fk_local_imagen` (`local_id`);

--
-- Indices de la tabla `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`id_local`),
  ADD KEY `fk_categoria` (`categoria_id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `fk_user_password_reset` (`user_id`);

--
-- Indices de la tabla `resenas`
--
ALTER TABLE `resenas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_reseña` (`usuario_id`),
  ADD KEY `fk_local_reseña` (`local_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagenes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `locales`
--
ALTER TABLE `locales`
  MODIFY `id_local` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `resenas`
--
ALTER TABLE `resenas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `fk_local_favorito` FOREIGN KEY (`local_id`) REFERENCES `locales` (`id_local`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usuario_favorito` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `fk_local_imagen` FOREIGN KEY (`local_id`) REFERENCES `locales` (`id_local`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `locales`
--
ALTER TABLE `locales`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`categoria_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD CONSTRAINT `fk_user_password_reset` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `resenas`
--
ALTER TABLE `resenas`
  ADD CONSTRAINT `fk_local_reseña` FOREIGN KEY (`local_id`) REFERENCES `locales` (`id_local`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_usuario_reseña` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
