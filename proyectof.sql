-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2019 a las 03:47:52
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
  `act_id` int(11) NOT NULL,
  `actividad` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion_fisica`
--

CREATE TABLE `educacion_fisica` (
  `edu_id` int(50) NOT NULL,
  `condicion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad_profe`
--

CREATE TABLE `especialidad_profe` (
  `esp_profe_id` int(50) NOT NULL,
  `especialidad` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 1, 'Retiro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `prov_id` int(30) NOT NULL,
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
  `usr_id` int(30) NOT NULL,
  `usr_nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_apellido` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_tel` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_mail` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_provincia` int(50) NOT NULL,
  `usr_localidad` int(50) NOT NULL,
  `usr_password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `usr_foto` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_facebook` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_twitter` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_instagram` varchar(100) CHARACTER SET utf8 NOT NULL,
  `usr_edad` int(200) NOT NULL,
  `usr_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_centro`
--

CREATE TABLE `usuario_centro` (
  `usr_cen_id` int(30) NOT NULL,
  `usr_cen_nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_cen_contrasena` varchar(30) CHARACTER SET utf8 NOT NULL,
  `usr_cen_direccion` varchar(50) CHARACTER SET utf8 NOT NULL,
  `prov_id` int(30) NOT NULL,
  `usr_cen_localidad` int(30) NOT NULL,
  `usr_cen_actividad` int(30) NOT NULL,
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
  `usr_pf_id` int(50) NOT NULL,
  `usr_pf_nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_apellido` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_tel` int(50) NOT NULL,
  `usr_pf_edad` int(50) NOT NULL,
  `usr_pf_mail` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_provincia` int(50) NOT NULL,
  `usr_pf_localidad` int(50) NOT NULL,
  `usr_pf_contraseña` varchar(30) CHARACTER SET utf8 NOT NULL,
  `usr_pf_facebook` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_instagram` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_twitter` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_descripcion` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `usr_pf_foto` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_ed_fisica` int(30) NOT NULL,
  `usr_pf_especialidad` int(30) NOT NULL,
  `usr_pf_cv` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usr_pf_dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`localidad_id`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`prov_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usr_id`);

--
-- Indices de la tabla `usuario_centro`
--
ALTER TABLE `usuario_centro`
  ADD PRIMARY KEY (`usr_cen_id`);

--
-- Indices de la tabla `usuario_profe`
--
ALTER TABLE `usuario_profe`
  ADD PRIMARY KEY (`usr_pf_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad_centro`
--
ALTER TABLE `actividad_centro`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `educacion_fisica`
--
ALTER TABLE `educacion_fisica`
  MODIFY `edu_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especialidad_profe`
--
ALTER TABLE `especialidad_profe`
  MODIFY `esp_profe_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `localidad_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `prov_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_centro`
--
ALTER TABLE `usuario_centro`
  MODIFY `usr_cen_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario_profe`
--
ALTER TABLE `usuario_profe`
  MODIFY `usr_pf_id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
