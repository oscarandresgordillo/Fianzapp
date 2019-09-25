-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2019 a las 22:18:54
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--
USE mydb
CREATE TABLE `administradores` (

  `id_admin` int(11) NOT NULL,
  `nombre_administrador` varchar(50) DEFAULT NULL,
  `documento_administrador` varchar(45) DEFAULT NULL,
  `correo_administrador` varchar(45) DEFAULT NULL,
  `usuario_administrador` varchar(50) DEFAULT NULL,
  `contrasena_administrador` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_admin`, `nombre_administrador`, `documento_administrador`, `correo_administrador`, `usuario_administrador`, `contrasena_administrador`) VALUES
(1, 'admin', '1110477810', 'SISTEMAS', 'admin', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(45) DEFAULT NULL,
  `nit_cliente` varchar(45) DEFAULT NULL,
  `telefono_cliente` varchar(45) DEFAULT NULL,
  `celular_cliente` varchar(40) NOT NULL,
  `direccion_cliente` varchar(45) DEFAULT NULL,
  `correo_cliente` varchar(45) DEFAULT NULL,
  `usuario_cliente` varchar(45) DEFAULT NULL,
  `contrasena_cliente` varchar(256) DEFAULT NULL,
  `numero_fianza` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `nit_cliente`, `telefono_cliente`, `celular_cliente`, `direccion_cliente`, `correo_cliente`, `usuario_cliente`, `contrasena_cliente`, `numero_fianza`) VALUES
(1, 'inmobliliaria la mejor', '9004569752', '123456789', '320359954', 'bogota', 'ibm@gmail.com', 'ibmlamejor', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1001),
(2, 'inmobliliaria la mejor b', '9004569752', '123456789', '320359954', 'bogota', 'ibm@gmail.com', 'ibmlamejorb', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1002),
(3, 'inmobiliaria la mejor c', '36987411', '123456789', '369874512', 'bogota', 'ibm@hotmail.com', 'ibmlamejorc', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1003),
(5, 'inmobiliaria la mejor d', '963258741', '147852369', '320156987', 'cali', 'ibmlamejord@gmail.com', 'ibmlamejord@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1004),
(6, 'inmobiliaria la mejor e', '789546210', '6582456', '3562012600', 'bogota', 'ibmlamejore@gmail.com', 'ibmlamejore@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1005),
(7, 'inmobiliaria la mejor f', '78924155', '963248555', '8745332', 'bogota', 'ibmlamejorf@gmail.com', 'ibmlamejorf@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1006);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_solicitudes`
--

CREATE TABLE `estados_solicitudes` (
  `id_estado_solicitud` int(11) NOT NULL,
  `nombre_estado_solicitud` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados_solicitudes`
--

INSERT INTO `estados_solicitudes` (`id_estado_solicitud`, `nombre_estado_solicitud`) VALUES
(1, 'Admisión'),
(2, 'Medidas cautelares'),
(3, 'Notificación'),
(4, 'Pruebas'),
(5, 'Audiencia de trámite y fallo'),
(6, 'Sentencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id_solicitud` int(11) NOT NULL,
  `numero_solicitud` int(11) DEFAULT NULL,
  `id_estado_sol` int(11) DEFAULT NULL,
  `id_usuario_sol` int(11) DEFAULT NULL,
  `id_cliente_sol` int(11) DEFAULT NULL,
  `descripcion_solicitud` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id_solicitud`, `numero_solicitud`, `id_estado_sol`, `id_usuario_sol`, `id_cliente_sol`, `descripcion_solicitud`) VALUES
(1, 1, 1, 2, 2, '28/02/2019\r\n\r\nDescripción de prueba 1.'),
(2, 10978, 1, 1, 2, '28/02/2019\r\n\r\nSe radica proceso en juzgado 28.\r\n\r\n11/03/2019\r\n\r\ndescripcion de prueba 2.'),
(3, 1003, 1, 2, 1, '28/02/2019\r\n\r\nDescripción de prueba 2.'),
(4, 10979, 1, 2, 1, 'demanda por chocolates'),
(5, 10980, 1, 2, 2, '05/03/2019\r\n\r\nDescripción de prueba.'),
(6, 8963, 3, 1, 3, '06/03/2019\r\n\r\ndescripción de prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_solicitudes`
--

CREATE TABLE `usuarios_solicitudes` (
  `id_usuario_solicitud` int(11) NOT NULL,
  `nombre_usuario_solicitud` varchar(45) DEFAULT NULL,
  `cedula_usuario_solicitud` varchar(45) DEFAULT NULL,
  `telefono_usuario_solicitud` varchar(45) DEFAULT NULL,
  `celular_usuario_solicitud` varchar(45) DEFAULT NULL,
  `correo_usuario_solicitud` varchar(45) DEFAULT NULL,
  `direccion_usuario_solicitud` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios_solicitudes`
--

INSERT INTO `usuarios_solicitudes` (`id_usuario_solicitud`, `nombre_usuario_solicitud`, `cedula_usuario_solicitud`, `telefono_usuario_solicitud`, `celular_usuario_solicitud`, `correo_usuario_solicitud`, `direccion_usuario_solicitud`) VALUES
(1, 'freddy milton mena rodriguez', '12345678910', '896256300', '321654987', 'freddy.mena@hotmail.com', 'bogota calle 87 # 90-98'),
(2, 'AMANDA SANCHEZ', '987456', '36448622', '2311516156166', 'AMANDA@HOTMAIL.COM', 'BOGOTA D.C');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `estados_solicitudes`
--
ALTER TABLE `estados_solicitudes`
  ADD PRIMARY KEY (`id_estado_solicitud`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- Indices de la tabla `usuarios_solicitudes`
--
ALTER TABLE `usuarios_solicitudes`
  ADD PRIMARY KEY (`id_usuario_solicitud`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios_solicitudes`
--
ALTER TABLE `usuarios_solicitudes`
  MODIFY `id_usuario_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
