-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2019 a las 19:53:29
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
(6, 2),
(8, 2),
(8, 3),
(8, 4),
(8, 5),
(9, 1),
(9, 2),
(9, 3),
(10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(100) NOT NULL,
  `id_usr_comentado` int(100) NOT NULL,
  `id_usr_comentante` int(100) NOT NULL,
  `calificacion` tinyint(4) NOT NULL,
  `cont_comentario` varchar(1000) NOT NULL,
  `cont_numero` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_usr_comentado`, `id_usr_comentante`, `calificacion`, `cont_comentario`, `cont_numero`) VALUES
(1, 3, 1, 5, 'capa', 1),
(2, 3, 1, 5, 'genia', 1),
(3, 3, 1, 3, 'asd', 1),
(4, 3, 1, 3, 'asd', 1),
(5, 3, 1, 1, 'malita', 1),
(6, 3, 1, 1, 'malita', 1),
(7, 3, 1, 2, 'cas', 1),
(8, 5, 1, 5, 'buen gym', 1),
(9, 5, 1, 0, 'asd', 1);

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
(4, 3),
(4, 4),
(4, 5),
(11, 1),
(11, 2),
(11, 3),
(11, 4),
(11, 5),
(12, 1),
(12, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id_foto` int(100) NOT NULL,
  `id_foto_usr` int(100) NOT NULL,
  `nombrefoto` varchar(100) NOT NULL,
  `fecha_foto` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id_foto`, `id_foto_usr`, `nombrefoto`, `fecha_foto`) VALUES
(1, 1, '141a880237280b1068ffdb62d5d181e6.jpg', '2019-07-24 14:02:42'),
(3, 1, 'a74787139aa78afbff153475ba13696c.jpg', '2019-07-24 14:27:41'),
(4, 4, '658d5b0eaccaab87390ce59cf482936a.jpg', '2019-07-24 16:30:46'),
(5, 6, 'd0a6c9464791f408f5bd9e1b2ff395b5.jpg', '2019-07-24 16:34:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `id_like` int(100) NOT NULL,
  `id_usuario_likeado` int(100) NOT NULL,
  `id_usuario_likeante` int(100) NOT NULL,
  `num_like` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`id_like`, `id_usuario_likeado`, `id_usuario_likeante`, `num_like`) VALUES
(33, 1, 4, 1),
(35, 3, 1, 1);

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
(6, 'Hola como va?', 1, '2019-07-19 22:09:30'),
(7, 'Hola alejo\r\n', 1, '2019-08-02 12:12:06'),
(8, 'hello', 1, '2019-08-02 12:13:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progreso_1k`
--

CREATE TABLE `progreso_1k` (
  `id_1k` int(100) NOT NULL,
  `id_usr_1k` int(100) NOT NULL,
  `minutos_1k` decimal(10,2) NOT NULL,
  `dia_1k` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progreso_3k`
--

CREATE TABLE `progreso_3k` (
  `id_3k` int(100) NOT NULL,
  `id_usr_3k` int(100) NOT NULL,
  `minutos_3k` decimal(10,2) NOT NULL,
  `dia_3k` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `progreso_3k`
--

INSERT INTO `progreso_3k` (`id_3k`, `id_usr_3k`, `minutos_3k`, `dia_3k`) VALUES
(1, 1, '18.00', '2019-08-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `progreso_10k`
--

CREATE TABLE `progreso_10k` (
  `id_10k` int(100) NOT NULL,
  `id_usr_10k` int(100) NOT NULL,
  `minutos_10k` decimal(10,2) NOT NULL,
  `dia_10k` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `progreso_10k`
--

INSERT INTO `progreso_10k` (`id_10k`, `id_usr_10k`, `minutos_10k`, `dia_10k`) VALUES
(1, 1, '50.00', '2019-08-07');

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
(1, 'Luciano Natiello', '1559964866', 'natielloluciano@gmail.com', 5, '123456', 'lucianonatiello.png', 'https://www.facebook.com/lnatiello', 'https://www.instagram.com/diego.aguilar.1986/?hl=es-la', 'https://twitter.com/TyCSports', 26, '', '2019-08-01 20:31:24.423084'),
(2, 'Carla Monte', '1559964856', 'carlamonte@gmail.com', 6, '123456', 'carlamonte.png', 'https://www.facebook.com/abbigommez', 'https://www.instagram.com/maisa/?hl=es-la', 'https://twitter.com/TyCSports', 24, '', '2019-07-09 03:00:00.000000'),
(3, 'Juana Manta', '1524998095', 'profe1@gmail.com', 3, '123456', 'mantajuana.png', 'https://www.facebook.com/groups/285960468476158/', 'https://www.instagram.com/bclsinclair/?hl=es-la', 'https://twitter.com/TyCSports', 29, 'toda la onda', '2019-07-14 21:42:54.854318'),
(4, 'Maria Ventre', '1564298824', 'profe2@gmail.com', 4, '123456', 'ventremaria.png', 'https://www.facebook.com/pepitojavier', 'https://www.instagram.com/bipashabasu/?hl=es-la', 'https://twitter.com/TyCSports', 28, 'profe buena onda', '2019-07-14 21:43:13.180547'),
(5, 'FitnessKing', '1121347984', 'info@fitnessking.com.ar', 2, '123456', 'fitnessking.png', 'https://www.facebook.com/fitnesskingarg/', 'https://www.instagram.com/fitnesskingtheking/?hl=es-la', 'https://twitter.com/?lang=ES', 0, 'calidad de atención', '2019-07-14 21:42:03.231692'),
(6, 'JuanGym', '1152468795', 'info@gmail.com', 4, '123456', 'juangym.png', 'https://www.facebook.com/feedback.eyb', 'https://www.instagram.com/explore/tags/juangym/?hl=es-la', 'https://twitter.com/?lang=ES', 0, 'calidad papu', '2019-08-02 21:54:21.872330'),
(7, 'lola', '21', 'asd', 4, 'asda', 'asd', 'asd', 'asd', 'asd', 20, '', '0000-00-00 00:00:00.000000'),
(8, 'Carlos gym', '123', 'carlosgym@gmail.com', 1, '123', '', 'https://www.facebook.com/', 'https://www.instagram.com/?hl=es-la', 'https://twitter.com/home', 0, 'Comentario acerca del local', '2019-07-30 16:19:49.000000'),
(9, 'lalagym', '123', 'lalagym@gmail.com', 2, '123', '', 'https://www.facebook.com/', 'https://www.instagram.com/?hl=es-la', 'https://twitter.com/home', 0, 'super', '2019-07-30 16:23:42.000000'),
(10, 'asdguym', 'asd12', 'asd@asd123.com', 5, '123', '1467c336f6caa5fd19d5aa4973452464.jpg', 'asd', 'asd', 'asd', 0, 'Comentario acerca del local', '2019-07-30 16:39:34.000000'),
(11, 'profecapo', '123', 'profecapo@gmail.com', 1, '123', '05afe68ae9578367b7b707a5157d5721.jpg', 'https://www.facebook.com/', 'https://www.instagram.com/?hl=es-la', 'https://twitter.com/home', 12, 'Soy re copado', '2019-07-30 23:35:12.000000'),
(12, 'Carmela bingo', '123456456', 'carmela@gmail.com', 2, '123456', '6a7b4aa7835f982c73c103531c4a34e9.jpg', 'asd', 'asd', 'asd', 37, 'Soy ultra re copada', '2019-08-02 01:16:43.384591');

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
(6, 'Libertador 888', 'Todo el dia'),
(8, 'Campos maria 222', ' Lu a Vi 8 a 22hs'),
(9, 'Lu a Vi 8 a 22hs', 'Lu a Vi 8 a 22hs'),
(10, '(EJ: Lu a Vi 8 a 22hs)', '(EJ: Lu a Vi 8 a 22hs)');

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
(4, 1, 'cv_ventremaria.doc'),
(11, 1, 'fa9036a044f659e2ba2bb2dfd0657573.pdf'),
(12, 1, '0be9c282cde3588f195038e4670207b0.pdf');

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
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_usr_comentado` (`id_usr_comentado`),
  ADD KEY `id_usr_comentante` (`id_usr_comentante`);

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
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_foto_usr` (`id_foto_usr`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_usuario_likeado` (`id_usuario_likeado`),
  ADD KEY `id_usuario_likeante` (`id_usuario_likeante`);

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
-- Indices de la tabla `progreso_1k`
--
ALTER TABLE `progreso_1k`
  ADD PRIMARY KEY (`id_1k`),
  ADD KEY `id_usr_1k` (`id_usr_1k`);

--
-- Indices de la tabla `progreso_3k`
--
ALTER TABLE `progreso_3k`
  ADD PRIMARY KEY (`id_3k`),
  ADD KEY `id_usr_3k` (`id_usr_3k`);

--
-- Indices de la tabla `progreso_10k`
--
ALTER TABLE `progreso_10k`
  ADD PRIMARY KEY (`id_10k`),
  ADD KEY `id_usr_10k` (`id_usr_10k`);

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
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `especialidades_profes`
--
ALTER TABLE `especialidades_profes`
  MODIFY `esp_profe_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id_foto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `loca_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `posteo`
--
ALTER TABLE `posteo`
  MODIFY `id_posteo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `progreso_1k`
--
ALTER TABLE `progreso_1k`
  MODIFY `id_1k` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `progreso_3k`
--
ALTER TABLE `progreso_3k`
  MODIFY `id_3k` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `progreso_10k`
--
ALTER TABLE `progreso_10k`
  MODIFY `id_10k` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `prov_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_usr_comentado`) REFERENCES `usuarios` (`usr_id`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_usr_comentante`) REFERENCES `usuarios` (`usr_id`);

--
-- Filtros para la tabla `especialidades_usuarios_profesores`
--
ALTER TABLE `especialidades_usuarios_profesores`
  ADD CONSTRAINT `especialidades_usuarios_profesores_ibfk_2` FOREIGN KEY (`id_esp_prof`) REFERENCES `especialidades_profes` (`esp_profe_id`),
  ADD CONSTRAINT `especialidades_usuarios_profesores_ibfk_3` FOREIGN KEY (`id_profesor`) REFERENCES `usuario_profe` (`usr_pf_id`);

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`id_foto_usr`) REFERENCES `usuarios` (`usr_id`);

--
-- Filtros para la tabla `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_usuario_likeado`) REFERENCES `usuarios` (`usr_id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_usuario_likeante`) REFERENCES `usuarios` (`usr_id`);

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
-- Filtros para la tabla `progreso_1k`
--
ALTER TABLE `progreso_1k`
  ADD CONSTRAINT `progreso_1k_ibfk_1` FOREIGN KEY (`id_usr_1k`) REFERENCES `usuarios` (`usr_id`);

--
-- Filtros para la tabla `progreso_3k`
--
ALTER TABLE `progreso_3k`
  ADD CONSTRAINT `progreso_3k_ibfk_1` FOREIGN KEY (`id_usr_3k`) REFERENCES `usuarios` (`usr_id`);

--
-- Filtros para la tabla `progreso_10k`
--
ALTER TABLE `progreso_10k`
  ADD CONSTRAINT `progreso_10k_ibfk_1` FOREIGN KEY (`id_usr_10k`) REFERENCES `usuarios` (`usr_id`);

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
