-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2019 a las 17:06:30
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
-- Base de datos: `proyectof`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_centro`
--

CREATE TABLE `actividad_centro` (
  `act_id` int(50) NOT NULL,
  `actividad` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividad_centro`
--

INSERT INTO `actividad_centro` (`act_id`, `actividad`) VALUES
(1, 'Gimnasio'),
(2, 'Crossfit');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion_fisica`
--

CREATE TABLE `educacion_fisica` (
  `edu_id` int(50) NOT NULL,
  `condicion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `educacion_fisica`
--

INSERT INTO `educacion_fisica` (`edu_id`, `condicion`) VALUES
(1, 'Profesor de Educación Física'),
(2, 'Estudiante de Educación Física');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad_profe`
--

CREATE TABLE `especialidad_profe` (
  `esp_profe_id` int(50) NOT NULL,
  `especialidad` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialidad_profe`
--

INSERT INTO `especialidad_profe` (`esp_profe_id`, `especialidad`) VALUES
(1, 'Personal trainer'),
(2, 'Deportes'),
(3, 'funcional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `localidad_id` int(50) NOT NULL,
  `localidad_prov_id` int(50) NOT NULL,
  `localidad` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`localidad_id`, `localidad_prov_id`, `localidad`) VALUES
(1, 1, 'Palermo'),
(2, 1, 'Retiro'),
(3, 7, 'San miguel'),
(4, 7, 'Don torcuato'),
(5, 7, 'Boulogne'),
(6, 7, 'Munro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `prov_id` int(50) NOT NULL,
  `prov_nombre` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`prov_id`, `prov_nombre`) VALUES
(1, 'caba'),
(7, 'buenos aires');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usr_id` int(100) NOT NULL,
  `usr_nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_apellido` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_tel` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_mail` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_provincia` int(50) NOT NULL,
  `usr_localidad` int(50) NOT NULL,
  `usr_contrasena` varchar(20) CHARACTER SET utf8 NOT NULL,
  `usr_foto` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_facebook` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_twitter` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_instagram` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_edad` int(200) NOT NULL,
  `usr_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usr_id`, `usr_nombre`, `usr_apellido`, `usr_tel`, `usr_mail`, `usr_provincia`, `usr_localidad`, `usr_contrasena`, `usr_foto`, `usr_facebook`, `usr_twitter`, `usr_instagram`, `usr_edad`, `usr_registro`) VALUES
(1, 'Luciano', 'Natiello', '1559964867', 'natielloluciano@gmail.com', 7, 5, '123456', 'lucianonatiello.png', 'https://www.facebook.com/lnatiello', 'https://twitter.com/TyCSports', 'https://www.instagram.com/diego.aguilar.1986/?hl=es-la', 26, '2019-07-09'),
(2, 'Carla', 'Monte', '1559964856', 'carlamonte@gmail.com', 7, 6, '123456', 'carlamonte.png', 'https://www.facebook.com/abbigommez', 'https://twitter.com/TyCSports', 'https://www.instagram.com/maisa/?hl=es-la', 24, '2019-07-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_centro`
--

CREATE TABLE `usuario_centro` (
  `usr_cen_id` int(100) NOT NULL,
  `usr_cen_nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_cen_contrasena` varchar(30) CHARACTER SET utf8 NOT NULL,
  `usr_cen_direccion` varchar(50) CHARACTER SET utf8 NOT NULL,
  `prov_id` int(50) NOT NULL,
  `usr_cen_localidad` int(50) NOT NULL,
  `usr_cen_actividad` int(50) NOT NULL,
  `usr_cen_foto` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_cen_facebook` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_cen_instagram` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_cen_twitter` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_cen_mail` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_cen_descripción` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `usr_cen_tel` int(11) NOT NULL,
  `usr_cen_dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_centro`
--

INSERT INTO `usuario_centro` (`usr_cen_id`, `usr_cen_nombre`, `usr_cen_contrasena`, `usr_cen_direccion`, `prov_id`, `usr_cen_localidad`, `usr_cen_actividad`, `usr_cen_foto`, `usr_cen_facebook`, `usr_cen_instagram`, `usr_cen_twitter`, `usr_cen_mail`, `usr_cen_descripción`, `usr_cen_tel`, `usr_cen_dia`) VALUES
(1, 'fitness king', '123456', 'Av Cordoba 3358', 1, 1, 1, 'fitnessking.png', 'https://www.facebook.com/fitnesskingarg/', 'https://www.instagram.com/fitnesskingtheking/?hl=es-la', 'https://twitter.com/?lang=ES', 'info@fitnessking.com.ar', 'calidad de atención', 1121347984, '2019-07-08'),
(3, 'juangym', '123456', 'libertador 222', 1, 2, 1, 'juangym.png', 'https://www.facebook.com/feedback.eyb', 'https://www.instagram.com/explore/tags/juangym/?hl=es-la', 'lalo', 'info@gmail.com', 'calidad papu', 1152468795, '2019-07-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_profe`
--

CREATE TABLE `usuario_profe` (
  `usr_pf_id` int(100) NOT NULL,
  `usr_pf_nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_apellido` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_tel` int(50) NOT NULL,
  `usr_pf_edad` int(50) NOT NULL,
  `usr_pf_mail` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_provincia` int(50) NOT NULL,
  `usr_pf_localidad` int(50) NOT NULL,
  `usr_pf_contrasena` varchar(30) CHARACTER SET utf8 NOT NULL,
  `usr_pf_facebook` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_instagram` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_twitter` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_descripcion` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `usr_pf_foto` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_ed_fisica` int(50) NOT NULL,
  `usr_pf_especialidad` int(50) NOT NULL,
  `usr_pf_cv` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_profe`
--

INSERT INTO `usuario_profe` (`usr_pf_id`, `usr_pf_nombre`, `usr_pf_apellido`, `usr_pf_tel`, `usr_pf_edad`, `usr_pf_mail`, `usr_pf_provincia`, `usr_pf_localidad`, `usr_pf_contrasena`, `usr_pf_facebook`, `usr_pf_instagram`, `usr_pf_twitter`, `usr_pf_descripcion`, `usr_pf_foto`, `usr_pf_ed_fisica`, `usr_pf_especialidad`, `usr_pf_cv`, `usr_pf_dia`) VALUES
(1, 'Manta', 'Juana', 1524998095, 29, 'profe1@gmail.com', 7, 3, '123456', 'https://www.facebook.com/groups/285960468476158/', 'https://www.instagram.com/bclsinclair/?hl=es-la', 'https://twitter.com/TyCSports', 'toda la onda', 'mantajuana.png', 1, 2, 'cv_mantajuana.docx', '2019-07-09'),
(2, 'Ventre', 'Maria', 1564298824, 28, 'profe2@gmail.com', 7, 4, '123456', 'https://www.facebook.com/pepitojavier', 'https://www.instagram.com/bipashabasu/?hl=es-la', 'https://twitter.com/TyCSports', 'profe buena onda', 'ventremaria.png', 1, 3, 'cv_ventremaria.doc', '2019-07-09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad_centro`
--
ALTER TABLE `actividad_centro`
  ADD PRIMARY KEY (`act_id`);

--
-- Indices de la tabla `educacion_fisica`
--
ALTER TABLE `educacion_fisica`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indices de la tabla `especialidad_profe`
--
ALTER TABLE `especialidad_profe`
  ADD PRIMARY KEY (`esp_profe_id`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`localidad_id`),
  ADD KEY `localidad_prov_id` (`localidad_prov_id`);

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
  ADD KEY `usr_provincia` (`usr_provincia`),
  ADD KEY `usr_localidad` (`usr_localidad`);

--
-- Indices de la tabla `usuario_centro`
--
ALTER TABLE `usuario_centro`
  ADD PRIMARY KEY (`usr_cen_id`),
  ADD KEY `prov_id` (`prov_id`),
  ADD KEY `usr_cen_localidad` (`usr_cen_localidad`),
  ADD KEY `usr_cen_actividad` (`usr_cen_actividad`);

--
-- Indices de la tabla `usuario_profe`
--
ALTER TABLE `usuario_profe`
  ADD PRIMARY KEY (`usr_pf_id`),
  ADD KEY `usr_pf_provincia` (`usr_pf_provincia`),
  ADD KEY `usr_pf_localidad` (`usr_pf_localidad`),
  ADD KEY `usr_pf_ed_fisica` (`usr_pf_ed_fisica`),
  ADD KEY `usr_pf_especialidad` (`usr_pf_especialidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad_centro`
--
ALTER TABLE `actividad_centro`
  MODIFY `act_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `educacion_fisica`
--
ALTER TABLE `educacion_fisica`
  MODIFY `edu_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `especialidad_profe`
--
ALTER TABLE `especialidad_profe`
  MODIFY `esp_profe_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `localidad_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `prov_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario_centro`
--
ALTER TABLE `usuario_centro`
  MODIFY `usr_cen_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario_profe`
--
ALTER TABLE `usuario_profe`
  MODIFY `usr_pf_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD CONSTRAINT `localidad_ibfk_1` FOREIGN KEY (`localidad_prov_id`) REFERENCES `provincia` (`prov_id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`usr_localidad`) REFERENCES `localidad` (`localidad_id`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`usr_provincia`) REFERENCES `provincia` (`prov_id`);

--
-- Filtros para la tabla `usuario_centro`
--
ALTER TABLE `usuario_centro`
  ADD CONSTRAINT `usuario_centro_ibfk_1` FOREIGN KEY (`prov_id`) REFERENCES `provincia` (`prov_id`),
  ADD CONSTRAINT `usuario_centro_ibfk_2` FOREIGN KEY (`usr_cen_localidad`) REFERENCES `localidad` (`localidad_id`),
  ADD CONSTRAINT `usuario_centro_ibfk_3` FOREIGN KEY (`usr_cen_actividad`) REFERENCES `actividad_centro` (`act_id`);

--
-- Filtros para la tabla `usuario_profe`
--
ALTER TABLE `usuario_profe`
  ADD CONSTRAINT `usuario_profe_ibfk_1` FOREIGN KEY (`usr_pf_provincia`) REFERENCES `provincia` (`prov_id`),
  ADD CONSTRAINT `usuario_profe_ibfk_2` FOREIGN KEY (`usr_pf_localidad`) REFERENCES `localidad` (`localidad_id`),
  ADD CONSTRAINT `usuario_profe_ibfk_3` FOREIGN KEY (`usr_pf_especialidad`) REFERENCES `especialidad_profe` (`esp_profe_id`),
  ADD CONSTRAINT `usuario_profe_ibfk_4` FOREIGN KEY (`usr_pf_ed_fisica`) REFERENCES `educacion_fisica` (`edu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
