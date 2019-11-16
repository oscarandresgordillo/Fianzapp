
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 04:58 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

-- Database: `fianzapp`
-- Inicio sesión UI Fianzapp : User Admin password: Admin

CREATE DATABASE fianzapp;
USE fianzapp;
-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `nombre_administrador` varchar(50) NOT NULL,
  `documento_administrador` varchar(45) NOT NULL,
  `correo_administrador` varchar(45) DEFAULT NULL,
  `usuario_administrador` varchar(50) NOT NULL,
  `contrasena_administrador` varchar(256) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`id_admin`, `nombre_administrador`, `documento_administrador`, `correo_administrador`, `usuario_administrador`, `contrasena_administrador`, `id_rol`) VALUES
(1, 'Julian Sanchez', '1016078300', 'julian16gmail.com', 'admin', 'admin', 1),
(2, 'oscar', '1', 'oscar@mi.com', 'oscar', '123456', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(45) NOT NULL,
  `nit_cliente` varchar(45) NOT NULL,
  `telefono_cliente` varchar(45) DEFAULT NULL,
  `celular_cliente` varchar(40) DEFAULT NULL,
  `direccion_cliente` varchar(45) DEFAULT NULL,
  `correo_cliente` varchar(45) NOT NULL,
  `usuario_cliente` varchar(45) NOT NULL,
  `contrasena_cliente` varchar(256) NOT NULL,
  `numero_fianza` int(250) NOT NULL,
  `roles_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_cliente`, `nit_cliente`, `telefono_cliente`, `celular_cliente`, `direccion_cliente`, `correo_cliente`, `usuario_cliente`, `contrasena_cliente`, `numero_fianza`, `roles_id`) VALUES
(1, 'Galias Inmobiliaria SAS', '101846245', '312309909', '312309909', 'carerra 7c # 6-99', 'galias@gmail.com', 'galias', 'e0433587656e45b3f337b090050116a39008460e1d24935d6244d28df6bfddfc', 900890, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `demandado`
--

CREATE TABLE `demandado` (
  `id_usuario_demandado` int(11) NOT NULL,
  `nombre_usuario_demandado` varchar(45) NOT NULL,
  `cedula_usuario_demandado` varchar(45) NOT NULL,
  `telefono_usuario_demandado` varchar(45) DEFAULT NULL,
  `celular_usuario_demandado` varchar(45) NOT NULL,
  `correo_usuario_demandado` varchar(45) NOT NULL,
  `direccion_usuario_demandado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demandado`
--

INSERT INTO `demandado` (`id_usuario_demandado`, `nombre_usuario_demandado`, `cedula_usuario_demandado`, `telefono_usuario_demandado`, `celular_usuario_demandado`, `correo_usuario_demandado`, `direccion_usuario_demandado`) VALUES
(1, 'Lorena Bermero', '101899000', '3120909090', '31209090', 'bermeo@gmail.com', 'calle 123');

-- --------------------------------------------------------

--
-- Table structure for table `estado_proceso`
--

CREATE TABLE `estado_proceso` (
  `id_estado_solicitud` int(11) NOT NULL,
  `nombre_estado_solicitud` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estado_proceso`
--

INSERT INTO `estado_proceso` (`id_estado_solicitud`, `nombre_estado_solicitud`) VALUES
(1, 'Admisión'),
(2, 'Medidas Cautelares'),
(3, 'Notificación');

-- --------------------------------------------------------

--
-- Table structure for table `estado_seguimiento`
--

CREATE TABLE `estado_seguimiento` (
  `id_estado_segui` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estado_seguimiento`
--

INSERT INTO `estado_seguimiento` (`id_estado_segui`, `estado`) VALUES
(1, 'En proceso'),
(2, 'Finalizado');

-- --------------------------------------------------------

--
-- Table structure for table `proceso`
--

CREATE TABLE `proceso` (
  `id_proceso` int(11) NOT NULL,
  `numero_proceso` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_demandado` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `archivo_proceso` varchar(400) NOT NULL,
  `id_administrador` int(11) NOT NULL,
  `Fecha_creacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proceso`
--

INSERT INTO `proceso` (`id_proceso`, `numero_proceso`, `id_estado`, `id_demandado`, `id_cliente`, `descripcion`, `archivo_proceso`, `id_administrador`, `Fecha_creacion`) VALUES
(5, 1, 2, 1, 1, 'gg', 'mydb (3).sql', 1, NULL),
(6, 80090, 3, 1, 1, 'HOLA', 'poster.pdf', 1, NULL),
(8, 0, 2, 1, 1, 'o', '', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `Nombre_rol` varchar(100) NOT NULL,
  `Fecha_creacion` datetime NOT NULL,
  `Fecha_modificado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id`, `Nombre_rol`, `Fecha_creacion`, `Fecha_modificado`) VALUES
(1, 'admin', '0000-00-00 00:00:00', NULL),
(2, 'cliente', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seguimiento_proceso`
--

CREATE TABLE `seguimiento_proceso` (
  `id_seg_proceso` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificado` datetime DEFAULT NULL,
  `observaciones` varchar(100) NOT NULL,
  `archivo_seg_proceso` varchar(200) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_proceso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seguimiento_proceso`
--

INSERT INTO `seguimiento_proceso` (`id_seg_proceso`, `fecha_creacion`, `fecha_modificado`, `observaciones`, `archivo_seg_proceso`, `id_estado`, `id_proceso`) VALUES
(3, '0000-00-00 00:00:00', NULL, 'oscar', 'Diagrama (1).pdf', 1, 5),
(4, '0000-00-00 00:00:00', NULL, 'nose', 'Diagrama.pdf', 2, 5),
(5, '2014-11-19 01:17:43', NULL, 'nose', 'fianzapp.pdf', 1, 5),
(6, '2014-11-19 03:26:47', NULL, 'hola  ', 'fianzapp.sql', 1, 5),
(7, '2015-11-19 00:26:11', NULL, 'soy un segumiento', '', 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_rol_idx` (`id_rol`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_rol_cliente_idx` (`roles_id`);

--
-- Indexes for table `demandado`
--
ALTER TABLE `demandado`
  ADD PRIMARY KEY (`id_usuario_demandado`);

--
-- Indexes for table `estado_proceso`
--
ALTER TABLE `estado_proceso`
  ADD PRIMARY KEY (`id_estado_solicitud`);

--
-- Indexes for table `estado_seguimiento`
--
ALTER TABLE `estado_seguimiento`
  ADD PRIMARY KEY (`id_estado_segui`);

--
-- Indexes for table `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`id_proceso`),
  ADD KEY `id_demnadado_idx` (`id_demandado`),
  ADD KEY `id_cliente_idx` (`id_cliente`),
  ADD KEY `id_administrador_idx` (`id_administrador`),
  ADD KEY `id_estado_idx` (`id_estado`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seguimiento_proceso`
--
ALTER TABLE `seguimiento_proceso`
  ADD PRIMARY KEY (`id_seg_proceso`),
  ADD KEY `id_estado_seguimiento_idx` (`id_estado`),
  ADD KEY `id_estado_seguimiento_fk_idx` (`id_estado`),
  ADD KEY `id_proceso_fk_idx` (`id_proceso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `demandado`
--
ALTER TABLE `demandado`
  MODIFY `id_usuario_demandado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `estado_proceso`
--
ALTER TABLE `estado_proceso`
  MODIFY `id_estado_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `estado_seguimiento`
--
ALTER TABLE `estado_seguimiento`
  MODIFY `id_estado_segui` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proceso`
--
ALTER TABLE `proceso`
  MODIFY `id_proceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seguimiento_proceso`
--
ALTER TABLE `seguimiento_proceso`
  MODIFY `id_seg_proceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `id_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `id_rol_cliente` FOREIGN KEY (`roles_id`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proceso`
--
ALTER TABLE `proceso`
  ADD CONSTRAINT `id_administrador` FOREIGN KEY (`id_administrador`) REFERENCES `administrador` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_demnadado` FOREIGN KEY (`id_demandado`) REFERENCES `demandado` (`id_usuario_demandado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado_proceso` (`id_estado_solicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seguimiento_proceso`
--
ALTER TABLE `seguimiento_proceso`
  ADD CONSTRAINT `id_estado_seguimiento_fk` FOREIGN KEY (`id_estado`) REFERENCES `estado_seguimiento` (`id_estado_segui`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_proceso_fk` FOREIGN KEY (`id_proceso`) REFERENCES `proceso` (`id_proceso`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
