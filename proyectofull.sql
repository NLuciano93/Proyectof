-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2019 a las 18:01:31
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofull`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_centro`
--

CREATE TABLE `actividades_centro` (
  `act_centro_id` int(50) NOT NULL,
  `actividades` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actividades_centro`
--

INSERT INTO `actividades_centro` (`act_centro_id`, `actividades`) VALUES
(1, 'Musculación'),
(2, 'Crossfit'),
(3, 'Funcional'),
(4, 'Yoga'),
(5, 'Zumba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_usario_centro`
--

CREATE TABLE `actividades_usario_centro` (
  `id_centro` int(50) NOT NULL,
  `id_act_centro` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actividades_usario_centro`
--

INSERT INTO `actividades_usario_centro` (`id_centro`, `id_act_centro`) VALUES
(5, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades_profes`
--

CREATE TABLE `especialidades_profes` (
  `esp_profe_id` int(50) NOT NULL,
  `esp_prof_descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `especialidades_profes`
--

INSERT INTO `especialidades_profes` (`esp_profe_id`, `esp_prof_descripcion`) VALUES
(1, 'Personal Trainer'),
(2, 'Deporte'),
(3, 'Funcional'),
(4, 'Crossfit'),
(5, 'Yoga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades_usuarios_profesores`
--

CREATE TABLE `especialidades_usuarios_profesores` (
  `id_profesor` int(50) NOT NULL,
  `id_esp_prof` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `especialidades_usuarios_profesores`
--

INSERT INTO `especialidades_usuarios_profesores` (`id_profesor`, `id_esp_prof`) VALUES
(3, 5),
(4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `loca_id` int(50) NOT NULL,
  `loca_prov_id` int(50) NOT NULL,
  `loca_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`loca_id`, `loca_prov_id`, `loca_nombre`) VALUES
(1, 1, 'Palermo'),
(2, 1, 'Retiro'),
(3, 2, 'San Miguel'),
(4, 2, 'Don Torcuato'),
(5, 2, 'Boulogne'),
(6, 2, 'Munro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posteo`
--

CREATE TABLE `posteo` (
  `id_posteo` int(100) NOT NULL,
  `texto` varchar(1000) NOT NULL,
  `id_usuario` int(100) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `posteo`
--

INSERT INTO `posteo` (`id_posteo`, `texto`, `id_usuario`, `fecha`) VALUES
(1, 'hola', 1, '0000-00-00 00:00:00'),
(2, 'holaaaaaa', 1, '2019-07-19 18:10:17'),
(3, 'holaaaaaa', 1, '2019-07-19 18:47:12'),
(4, 'que tal', 1, '2019-07-19 18:53:58'),
(5, 'que tal', 1, '2019-07-19 18:58:26'),
(6, 'Hola como va?', 1, '2019-07-19 22:09:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `prov_id` int(50) NOT NULL,
  `prov_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`prov_id`, `prov_nombre`) VALUES
(1, 'CABA'),
(2, 'Buenos Aires');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usr_id` int(100) NOT NULL,
  `usr_nombre` varchar(50) NOT NULL,
  `usr_tel` varchar(50) NOT NULL,
  `usr_mail` varchar(50) NOT NULL,
  `usr_localidad` int(50) NOT NULL,
  `usr_contrasena` varchar(30) NOT NULL,
  `usr_foto` varchar(100) NOT NULL,
  `usr_facebook` varchar(100) NOT NULL,
  `usr_instagram` varchar(100) NOT NULL,
  `usr_twitter` varchar(100) NOT NULL,
  `usr_edad` int(20) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `usr_registro` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usr_id`, `usr_nombre`, `usr_tel`, `usr_mail`, `usr_localidad`, `usr_contrasena`, `usr_foto`, `usr_facebook`, `usr_instagram`, `usr_twitter`, `usr_edad`, `descripcion`, `usr_registro`) VALUES
(1, 'Luciano Natiello', '1559964866', 'natielloluciano@gmail.com', 5, '123456', 'lucianonatiello.png', 'https://www.facebook.com/lnatiello', 'https://www.instagram.com/diego.aguilar.1986/?hl=es-la', 'https://twitter.com/TyCSports', 26, '', '0000-00-00 00:00:00.000000'),
(2, 'Carla Monte', '1559964856', 'carlamonte@gmail.com', 6, '123456', 'carlamonte.png', 'https://www.facebook.com/abbigommez', 'https://www.instagram.com/maisa/?hl=es-la', 'https://twitter.com/TyCSports', 24, '', '2019-07-09 03:00:00.000000'),
(3, 'Juana Manta', '1524998095', 'profe1@gmail.com', 3, '123456', 'mantajuana.png', 'https://www.facebook.com/groups/285960468476158/', 'https://www.instagram.com/bclsinclair/?hl=es-la', 'https://twitter.com/TyCSports', 29, 'toda la onda', '2019-07-14 21:42:54.854318'),
(4, 'Maria Ventre', '1564298824', 'profe2@gmail.com', 4, '123456', 'ventremaria.png', 'https://www.facebook.com/pepitojavier', 'https://www.instagram.com/bipashabasu/?hl=es-la', 'https://twitter.com/TyCSports', 28, 'profe buena onda', '2019-07-14 21:43:13.180547'),
(5, 'FitnessKing', '1121347984', 'info@fitnessking.com.ar', 2, '123456', 'fitnessking.png', 'https://www.facebook.com/fitnesskingarg/', 'https://www.instagram.com/fitnesskingtheking/?hl=es-la', 'https://twitter.com/?lang=ES', 0, 'calidad de atención', '2019-07-14 21:42:03.231692'),
(6, 'JuanGym', '1152468795', 'info@gmail.com', 1, '123456', 'juangym.png', 'https://www.facebook.com/feedback.eyb', 'https://www.instagram.com/explore/tags/juangym/?hl=es-la', 'https://twitter.com/?lang=ES', 0, 'calidad papu', '2019-07-14 21:42:22.917263'),
(7, 'lola', '21', 'asd', 4, 'asda', 'asd', 'asd', 'asd', 'asd', 20, '', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_centro`
--

CREATE TABLE `usuario_centro` (
  `usr_centro_id` int(11) NOT NULL,
  `usr_centro_direccion` varchar(50) NOT NULL,
  `usr_centro_horarios` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_centro`
--

INSERT INTO `usuario_centro` (`usr_centro_id`, `usr_centro_direccion`, `usr_centro_horarios`) VALUES
(5, 'Cordoba 3358', 'Lu a Vi 8 a 22hs'),
(6, 'Libertador 222', 'Lu a Vi 8 a 23hs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_profe`
--

CREATE TABLE `usuario_profe` (
  `usr_pf_id` int(100) NOT NULL,
  `pf_educ_fisica` tinyint(1) NOT NULL,
  `pf_cv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_profe`
--

INSERT INTO `usuario_profe` (`usr_pf_id`, `pf_educ_fisica`, `pf_cv`) VALUES
(3, 1, 'cv_mantajuana.docx'),
(4, 1, 'cv_ventremaria.doc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades_centro`
--
ALTER TABLE `actividades_centro`
  ADD PRIMARY KEY (`act_centro_id`);

--
-- Indices de la tabla `actividades_usario_centro`
--
ALTER TABLE `actividades_usario_centro`
  ADD PRIMARY KEY (`id_centro`,`id_act_centro`),
  ADD KEY `id_act_centro` (`id_act_centro`);

--
-- Indices de la tabla `especialidades_profes`
--
ALTER TABLE `especialidades_profes`
  ADD PRIMARY KEY (`esp_profe_id`);

--
-- Indices de la tabla `especialidades_usuarios_profesores`
--
ALTER TABLE `especialidades_usuarios_profesores`
  ADD PRIMARY KEY (`id_profesor`,`id_esp_prof`),
  ADD KEY `id_esp_prof` (`id_esp_prof`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`loca_id`),
  ADD KEY `loca_prov_id` (`loca_prov_id`);

--
-- Indices de la tabla `posteo`
--
ALTER TABLE `posteo`
  ADD PRIMARY KEY (`id_posteo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`prov_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usr_id`),
  ADD KEY `usr_localidad` (`usr_localidad`);

--
-- Indices de la tabla `usuario_centro`
--
ALTER TABLE `usuario_centro`
  ADD PRIMARY KEY (`usr_centro_id`);

--
-- Indices de la tabla `usuario_profe`
--
ALTER TABLE `usuario_profe`
  ADD PRIMARY KEY (`usr_pf_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades_centro`
--
ALTER TABLE `actividades_centro`
  MODIFY `act_centro_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `especialidades_profes`
--
ALTER TABLE `especialidades_profes`
  MODIFY `esp_profe_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `loca_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `posteo`
--
ALTER TABLE `posteo`
  MODIFY `id_posteo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `prov_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades_usario_centro`
--
ALTER TABLE `actividades_usario_centro`
  ADD CONSTRAINT `actividades_usario_centro_ibfk_1` FOREIGN KEY (`id_centro`) REFERENCES `usuario_centro` (`usr_centro_id`),
  ADD CONSTRAINT `actividades_usario_centro_ibfk_2` FOREIGN KEY (`id_act_centro`) REFERENCES `actividades_centro` (`act_centro_id`);

--
-- Filtros para la tabla `especialidades_usuarios_profesores`
--
ALTER TABLE `especialidades_usuarios_profesores`
  ADD CONSTRAINT `especialidades_usuarios_profesores_ibfk_2` FOREIGN KEY (`id_esp_prof`) REFERENCES `especialidades_profes` (`esp_profe_id`),
  ADD CONSTRAINT `especialidades_usuarios_profesores_ibfk_3` FOREIGN KEY (`id_profesor`) REFERENCES `usuario_profe` (`usr_pf_id`);

--
-- Filtros para la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD CONSTRAINT `localidad_ibfk_1` FOREIGN KEY (`loca_prov_id`) REFERENCES `provincia` (`prov_id`);

--
-- Filtros para la tabla `posteo`
--
ALTER TABLE `posteo`
  ADD CONSTRAINT `posteo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`usr_id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`usr_localidad`) REFERENCES `localidad` (`loca_id`);

--
-- Filtros para la tabla `usuario_centro`
--
ALTER TABLE `usuario_centro`
  ADD CONSTRAINT `usuario_centro_ibfk_1` FOREIGN KEY (`usr_centro_id`) REFERENCES `usuarios` (`usr_id`);

--
-- Filtros para la tabla `usuario_profe`
--
ALTER TABLE `usuario_profe`
  ADD CONSTRAINT `usuario_profe_ibfk_1` FOREIGN KEY (`usr_pf_id`) REFERENCES `usuarios` (`usr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
