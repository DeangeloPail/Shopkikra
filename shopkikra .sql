-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-05-2023 a las 15:53:44
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shopkikra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apelacion_suscripcion`
--

DROP TABLE IF EXISTS `apelacion_suscripcion`;
CREATE TABLE IF NOT EXISTS `apelacion_suscripcion` (
  `id_apelacion` int(11) NOT NULL AUTO_INCREMENT,
  `estatus_suscripcion` int(11) NOT NULL,
  `descripción` varchar(250) DEFAULT NULL,
  `fecha_apelacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ref_pago` int(11) NOT NULL,
  PRIMARY KEY (`id_apelacion`),
  KEY `ref_pago` (`ref_pago`),
  KEY `estatus_suscripcion` (`estatus_suscripcion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

DROP TABLE IF EXISTS `estatus`;
CREATE TABLE IF NOT EXISTS `estatus` (
  `cod_estatus` int(50) NOT NULL AUTO_INCREMENT,
  `tip_estatus` varchar(200) NOT NULL,
  PRIMARY KEY (`cod_estatus`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`cod_estatus`, `tip_estatus`) VALUES
(1, 'Inactivo'),
(2, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodos_pago`
--

DROP TABLE IF EXISTS `metodos_pago`;
CREATE TABLE IF NOT EXISTS `metodos_pago` (
  `id_met_pago` int(11) NOT NULL AUTO_INCREMENT,
  `numero_cuenta` varchar(450) DEFAULT NULL,
  `banco` varchar(250) NOT NULL,
  `num_telefono` varchar(250) DEFAULT NULL,
  `doc_identidad` varchar(250) DEFAULT NULL,
  `tip_cuenta` varchar(150) DEFAULT NULL,
  `correo_electro` varchar(250) DEFAULT NULL,
  `nom_propietario` varchar(300) NOT NULL,
  PRIMARY KEY (`id_met_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `metodos_pago`
--

INSERT INTO `metodos_pago` (`id_met_pago`, `numero_cuenta`, `banco`, `num_telefono`, `doc_identidad`, `tip_cuenta`, `correo_electro`, `nom_propietario`) VALUES
(1, '012302030120301203102300123012', 'Paypal', '0412-6420093', 'V-28156733', 'ahorro', 'deangelo.pail@gmail.com', 'Abraham Josue Hurtado Urbina'),
(2, '', 'Paypal', '', '28156733', '', 'hurtado.abraham23@gmail.com', 'brando'),
(3, '', 'mercado pago', '', '231321', '', '', 'asdasdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles_usuario`
--

DROP TABLE IF EXISTS `niveles_usuario`;
CREATE TABLE IF NOT EXISTS `niveles_usuario` (
  `codigo_nivl` int(50) NOT NULL AUTO_INCREMENT,
  `nombre_nivl` varchar(200) NOT NULL,
  `valor_nivel` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`codigo_nivl`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `niveles_usuario`
--

INSERT INTO `niveles_usuario` (`codigo_nivl`, `nombre_nivl`, `valor_nivel`) VALUES
(1, 'Administrador', NULL),
(2, 'Nivel Bronce \r\n', '15 $'),
(3, 'Nivel Plata', '30 $'),
(4, 'Nivel Oro', '50 $'),
(5, 'Nivel Diamante', '70 $'),
(6, 'Nivel Gratis', '0 $');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_suscripcion`
--

DROP TABLE IF EXISTS `pago_suscripcion`;
CREATE TABLE IF NOT EXISTS `pago_suscripcion` (
  `id_pago_sus` int(15) NOT NULL AUTO_INCREMENT,
  `ref_usuario` int(11) NOT NULL,
  `ref_met_pago` int(11) NOT NULL,
  `captura` varchar(250) NOT NULL,
  `ref_tp_suscrip` int(11) NOT NULL,
  `frecha_emision` date NOT NULL,
  `cod_referencia` varchar(250) NOT NULL,
  PRIMARY KEY (`id_pago_sus`),
  KEY `ref_usuario` (`ref_usuario`),
  KEY `ref_met_pago` (`ref_met_pago`),
  KEY `ref_tp_suscrip` (`ref_tp_suscrip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `codigo_pais` varchar(50) NOT NULL,
  `nombre_pais` varchar(200) NOT NULL,
  PRIMARY KEY (`codigo_pais`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`codigo_pais`, `nombre_pais`) VALUES
('+54', 'Argentina'),
('+57', 'Colombia'),
('+58', 'Venezuela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id_estatus` int(11) NOT NULL AUTO_INCREMENT,
  `tip_status` varchar(150) NOT NULL,
  PRIMARY KEY (`id_estatus`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id_estatus`, `tip_status`) VALUES
(1, 'Aprobado'),
(2, 'Rechazado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminal_correo`
--

DROP TABLE IF EXISTS `terminal_correo`;
CREATE TABLE IF NOT EXISTS `terminal_correo` (
  `cod_termina` int(50) NOT NULL AUTO_INCREMENT,
  `tip_termina` varchar(200) NOT NULL,
  PRIMARY KEY (`cod_termina`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `terminal_correo`
--

INSERT INTO `terminal_correo` (`cod_termina`, `tip_termina`) VALUES
(1, '@gmail.com'),
(2, '@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usuario` int(50) NOT NULL AUTO_INCREMENT,
  `perfil_usua` varchar(150) NOT NULL,
  `foto_usuari` varchar(500) DEFAULT NULL,
  `nom_usuario` varchar(150) NOT NULL,
  `ape_usuario` varchar(150) NOT NULL,
  `doc_usuario` varchar(50) NOT NULL,
  `contrasena_` varchar(30) NOT NULL,
  `fecha_usuar` date NOT NULL,
  `pais_usuari` varchar(50) NOT NULL,
  `telefon_usu` varchar(100) NOT NULL,
  `referido_usu` varchar(150) DEFAULT NULL,
  `nivel_usuar` int(50) DEFAULT NULL,
  `veri_usuari` int(50) DEFAULT NULL,
  `estatu_usua` int(50) DEFAULT NULL,
  `correo_usua` varchar(250) NOT NULL,
  `term_correo` int(50) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `foto_documento` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`cod_usuario`),
  UNIQUE KEY `perfil_usua` (`perfil_usua`),
  KEY `pais_usuari` (`pais_usuari`),
  KEY `nivel_usuar` (`nivel_usuar`),
  KEY `veri_usuari` (`veri_usuari`),
  KEY `estatu_usua` (`estatu_usua`),
  KEY `term_correo` (`term_correo`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `perfil_usua`, `foto_usuari`, `nom_usuario`, `ape_usuario`, `doc_usuario`, `contrasena_`, `fecha_usuar`, `pais_usuari`, `telefon_usu`, `referido_usu`, `nivel_usuar`, `veri_usuari`, `estatu_usua`, `correo_usua`, `term_correo`, `fecha_registro`, `foto_documento`) VALUES
(1, 'Admin', 'blancoshk.png', 'Abraham Josue', 'Hurtado Urbina', '28156733', '123456', '2001-10-04', '+58', '4126420', NULL, 1, 1, 1, 'deangelo.psda', 1, '2023-04-29 23:24:25', NULL),
(2, 'usuario1', 'asd5_O.png', 'abraham josue', 'hurtado urbina', '28156733', '123456', '2001-10-07', '+57', '123123', NULL, 2, 2, 1, 'afd', 1, '2023-04-29 23:24:25', 'asd5_O.png'),
(3, 'usuario2', 'sin_usurio.jpg', 'adf', 'adfadsf', '5454', '123456', '2023-03-01', '+57', '123123', NULL, 3, 1, 2, 'afd', 1, '2023-04-29 23:24:25', NULL),
(4, 'usuario3', 'sin_usurio.jpg', 'adf', 'adfadsf', '5454', '123456', '2023-03-01', '+57', '123123', NULL, 4, 1, 2, 'afd', 1, '2023-04-29 23:24:25', NULL),
(5, 'usuario4', 'sin_usurio.jpg', 'adf', 'adfadsf', '5454', '123456', '2023-03-01', '+57', '123123', NULL, 5, 1, 2, 'afd', 1, '2023-04-29 23:24:25', NULL),
(15, 'usuarioGratis', 'sin_usurio.jpg', 'asdsd', 'asdasd', '7878787', '123456', '2023-03-03', '+58', '78787878', 'asdasd', 6, 2, NULL, 'ads', 1, '2023-04-29 23:24:25', NULL),
(16, 'asd1', 'sin_usurio.jpg', 'asdasd', 'asdasd', '1234567', 'asd', '2023-03-09', '+54', '1234523', 'asd', 6, 1, NULL, 'asdasdas', 2, '2023-04-29 23:24:25', NULL),
(17, 'asd2', 'Cat03.jpg', 'asd2', 'asdasd', '987654', 'asd', '2023-03-01', '+57', '987654', 'usuario1', 6, 2, NULL, 'asd', 1, '2023-04-29 23:24:25', NULL),
(18, 'yosoygringo', 'sin_usurio.jpg', 'jesus fabian', 'pedekjde er ', '28257870', '123456', '2023-03-01', '+58', '454545454', 'usuario1', 6, 1, NULL, 'dsddasd', 1, '2023-04-29 23:24:25', NULL),
(19, 'rodrigo', 'sin_usurio.jpg', 'Jose', 'raul', '281818178', '123456', '2011-02-10', '+58', '282881818', 'usuario1', 6, 2, NULL, 'dasdasdasd', 1, '2023-04-29 23:24:25', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificacion`
--

DROP TABLE IF EXISTS `verificacion`;
CREATE TABLE IF NOT EXISTS `verificacion` (
  `cod_verific` int(50) NOT NULL AUTO_INCREMENT,
  `tip_verific` varchar(200) NOT NULL,
  PRIMARY KEY (`cod_verific`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `verificacion`
--

INSERT INTO `verificacion` (`cod_verific`, `tip_verific`) VALUES
(1, 'Verificado'),
(2, 'No Verificado'),
(3, 'En espera');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apelacion_suscripcion`
--
ALTER TABLE `apelacion_suscripcion`
  ADD CONSTRAINT `apelacion_suscripcion_ibfk_1` FOREIGN KEY (`ref_pago`) REFERENCES `pago_suscripcion` (`id_pago_sus`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `apelacion_suscripcion_ibfk_2` FOREIGN KEY (`estatus_suscripcion`) REFERENCES `status` (`id_estatus`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `pago_suscripcion`
--
ALTER TABLE `pago_suscripcion`
  ADD CONSTRAINT `pago_suscripcion_ibfk_1` FOREIGN KEY (`ref_usuario`) REFERENCES `usuario` (`cod_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pago_suscripcion_ibfk_2` FOREIGN KEY (`ref_tp_suscrip`) REFERENCES `niveles_usuario` (`codigo_nivl`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pago_suscripcion_ibfk_3` FOREIGN KEY (`ref_met_pago`) REFERENCES `metodos_pago` (`id_met_pago`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`estatu_usua`) REFERENCES `estatus` (`cod_estatus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`veri_usuari`) REFERENCES `verificacion` (`cod_verific`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_5` FOREIGN KEY (`term_correo`) REFERENCES `terminal_correo` (`cod_termina`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_6` FOREIGN KEY (`pais_usuari`) REFERENCES `pais` (`codigo_pais`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_7` FOREIGN KEY (`nivel_usuar`) REFERENCES `niveles_usuario` (`codigo_nivl`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
