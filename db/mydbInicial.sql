-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2018 a las 17:26:57
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

DROP TABLE IF EXISTS `administradores`;
CREATE TABLE IF NOT EXISTS `administradores` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_administrador` varchar(50) DEFAULT NULL,
  `documento_administrador` varchar(45) DEFAULT NULL,
  `correo_administrador` varchar(45) DEFAULT NULL,
  `usuario_administrador` varchar(50) DEFAULT NULL,
  `contrasena_administrador` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `administradores`:
--

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_admin`, `nombre_administrador`, `documento_administrador`, `correo_administrador`, `usuario_administrador`, `contrasena_administrador`) VALUES
(1, 'WILMAR DIAZ', '1110477810', 'SISTEMAS@FIANZASDECOLOMBIA.COM', 'admin', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(4, 'jonathan alexander gomez pastor', '1012450191', 'sistemas@fianzasdecolombia.com', 'admin2', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(45) DEFAULT NULL,
  `nit_cliente` varchar(45) DEFAULT NULL,
  `telefono_cliente` varchar(45) DEFAULT NULL,
  `celular_cliente` varchar(40) NOT NULL,
  `direccion_cliente` varchar(45) DEFAULT NULL,
  `correo_cliente` varchar(45) DEFAULT NULL,
  `usuario_cliente` varchar(45) DEFAULT NULL,
  `contrasena_cliente` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `clientes`:
--

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `nit_cliente`, `telefono_cliente`, `celular_cliente`, `direccion_cliente`, `correo_cliente`, `usuario_cliente`, `contrasena_cliente`) VALUES
(1, 'inmobliliaria la mejor', '9004569752', '123456789', '320359954', 'bogota', 'ibm@gmail.com', 'ibmlamejor', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
(2, 'inmobliliaria la mejor b', '9004569752', '123456789', '320359954', 'bogota', 'ibm@gmail.com', 'ibmlamejorb', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_solicitudes`
--

DROP TABLE IF EXISTS `estados_solicitudes`;
CREATE TABLE IF NOT EXISTS `estados_solicitudes` (
  `id_estado_solicitud` int(11) NOT NULL,
  `nombre_estado_solicitud` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_estado_solicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `estados_solicitudes`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

DROP TABLE IF EXISTS `solicitudes`;
CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id_solicitud` int(11) NOT NULL AUTO_INCREMENT,
  `numero_solicitud` int(11) DEFAULT NULL,
  `descripcion_solicitud` int(11) DEFAULT NULL,
  `id_estado_sol` int(11) DEFAULT NULL,
  `id_usuario_sol` int(11) DEFAULT NULL,
  `id_cliente_sol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_solicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `solicitudes`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_solicitudes`
--

DROP TABLE IF EXISTS `usuarios_solicitudes`;
CREATE TABLE IF NOT EXISTS `usuarios_solicitudes` (
  `id_usuario_solicitud` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario_solicitud` varchar(45) DEFAULT NULL,
  `cedula_usuario_solicitud` varchar(45) DEFAULT NULL,
  `telefono_usuario_solicitud` varchar(45) DEFAULT NULL,
  `celular_usuario_solicitud` varchar(45) DEFAULT NULL,
  `correo_usuario_solicitud` varchar(45) DEFAULT NULL,
  `direccion_usuario_solicitud` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario_solicitud`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- RELACIONES PARA LA TABLA `usuarios_solicitudes`:
--

--
-- Volcado de datos para la tabla `usuarios_solicitudes`
--

INSERT INTO `usuarios_solicitudes` (`id_usuario_solicitud`, `nombre_usuario_solicitud`, `cedula_usuario_solicitud`, `telefono_usuario_solicitud`, `celular_usuario_solicitud`, `correo_usuario_solicitud`, `direccion_usuario_solicitud`) VALUES
(1, 'freddy milton mena rodriguez', '12345678910', '896256300', '321654987', 'freddy.mena@hotmail.com', 'bogota calle 87 # 90-98');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
