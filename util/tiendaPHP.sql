-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: bnjciagdtxueyilzernu-mysql.services.clever-cloud.com:3306
-- Generation Time: Sep 06, 2022 at 09:03 PM
-- Server version: 8.0.22-13
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnjciagdtxueyilzernu`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int NOT NULL,
  `nombre_categoria` varchar(30) DEFAULT NULL,
  `descripcion_categoria` varchar(250) DEFAULT NULL,
  `estado_categoria` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `descripcion_categoria`, `estado_categoria`) VALUES
(1, 'Comida', 'Algo', 0),
(2, 'B', 'chocolatina', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int NOT NULL,
  `nombre_cliente` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellido_cliente` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefono_cliente` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email_cliente` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `direccion_cliente` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `info_cliente` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `estado_cliente` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `apellido_cliente`, `telefono_cliente`, `email_cliente`, `direccion_cliente`, `info_cliente`, `estado_cliente`) VALUES
(1, 'Ronal', 'Ramirez', '3213441221', 'example@gmail.com', 'calle 1', 'info', 0),
(2, 'Ronal', 'Ramirez', '3213441221', 'Ronuldox.2003@gmail.com', 'calle 2', 'client 1', 0),
(3, 'ronal', 'Ramirez', '3', 'Ronuldox.2003@gmail.com', 'calle 2', 'por mejorar', 0),
(4, 'julio', 'Ramirez', '3213441221', 'Ronuldox.2003@gmail.com', 'calle 2', 'Hola', 0),
(5, 'Ronal', 'david', '3213441221', 'Ronuldox.2003@gmail.com', 'calle 1', 'Hola', 0),
(6, 'ronal', 'Ramirez', '', 'Ronuldox.2003@gmail.com', 'calle 1', 'por mejorar', 0),
(7, 'juan', 'david', '3213441221', 'Ronuldox.2003@gmail.com', 'calle 1', 'info demas', 0),
(8, 'jose', 'alex', '321232342', 'ramirez.193@gmail.com', 'calle 2', 'Hola', 0),
(15, 'jose', 'eduardo', 'as', 'Ronuldox.2003@gmail.com', 'carrera #9 con 12', 'colombia', 0),
(123, 'Katherin Daniela', 'Vélez', '3163160666', 'kateamador13@gmail.com', 'Calle 14 a # 25 - 17', 'JJJJ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `entradas`
--

CREATE TABLE `entradas` (
  `id_entrada` int NOT NULL,
  `idProducto_entrada` int NOT NULL,
  `idProveedor_entrada` int NOT NULL,
  `cantidad_entrada` int NOT NULL,
  `costo_entrada` int NOT NULL,
  `total_entrada` int NOT NULL,
  `fecha_entrada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `facturas`
--

CREATE TABLE `facturas` (
  `id_factura` int NOT NULL,
  `idCliente_factura` int NOT NULL,
  `cantidad_factura` int NOT NULL,
  `total_factura` int NOT NULL,
  `fecha_factura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id_producto` int NOT NULL,
  `idProveedor_producto` int NOT NULL,
  `idCategoria_producto` int NOT NULL,
  `nombre_producto` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `costo_producto` int NOT NULL,
  `precio_producto` int NOT NULL,
  `observacion_producto` varchar(250) NOT NULL,
  `estado_producto` tinyint(1) NOT NULL,
  `cantidad_producto` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `idProveedor_producto`, `idCategoria_producto`, `nombre_producto`, `costo_producto`, `precio_producto`, `observacion_producto`, `estado_producto`, `cantidad_producto`) VALUES
(1, 1, 1, 'arroz', 2000, 3000, 'sadasd', 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int NOT NULL,
  `empresa_proveedor` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `direccion_proveedor` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefono_proveedor` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email_proveedor` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `asesor_proveedor` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telAsesor_proveedor` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `infoAdicional_proveedor` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `estado_proveedor` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `empresa_proveedor`, `direccion_proveedor`, `telefono_proveedor`, `email_proveedor`, `asesor_proveedor`, `telAsesor_proveedor`, `infoAdicional_proveedor`, `estado_proveedor`) VALUES
(1, 'osdocorp', 'calle 10', '7585575', 'ejemplo@gmail.com', 'oscar', '875757587875', 'todo ok', 0),
(2, 'udev', 'carrera 7', '123456', 'ejemplo@gmail.com', 'oscar', '456123', 'gbgbggf', 0),
(7, 'kate', 'Calle 14 a # 25 - 17', '3163160666', 'kateamador13@gmail.com', 'Katherin', '3163160666', 'hello', 1);

-- --------------------------------------------------------

--
-- Table structure for table `salidas`
--

CREATE TABLE `salidas` (
  `id_salida` int NOT NULL,
  `idProducto_salida` int NOT NULL,
  `idFactura_salida` int NOT NULL,
  `precioUnidad_salida` int NOT NULL,
  `cantidad_salida` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL,
  `nombre_usuario` varchar(40) NOT NULL,
  `telefono_usuario` varchar(15) NOT NULL,
  `direccion_usuario` varchar(40) NOT NULL,
  `tipo_usuario` varchar(1) NOT NULL,
  `estado_usuario` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `telefono_usuario`, `direccion_usuario`, `tipo_usuario`, `estado_usuario`) VALUES
(123456789, 'Prueba', '456123', 'calle 12', '0', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id_entrada`),
  ADD KEY `idProducto_entrada` (`idProducto_entrada`),
  ADD KEY `idProveedor_entrada` (`idProveedor_entrada`);

--
-- Indexes for table `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `idCliente_factura` (`idCliente_factura`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `idProveedor_producto` (`idProveedor_producto`),
  ADD KEY `idCategoria_producto` (`idCategoria_producto`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indexes for table `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`id_salida`),
  ADD KEY `idProducto_salida` (`idProducto_salida`),
  ADD KEY `idFactura_salida` (`idFactura_salida`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id_entrada` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_factura` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `salidas`
--
ALTER TABLE `salidas`
  MODIFY `id_salida` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `entradas_ibfk_1` FOREIGN KEY (`idProducto_entrada`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `entradas_ibfk_2` FOREIGN KEY (`idProveedor_entrada`) REFERENCES `proveedores` (`id_proveedor`);

--
-- Constraints for table `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`idCliente_factura`) REFERENCES `clientes` (`id_cliente`);

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idCategoria_producto`) REFERENCES `categorias` (`id_categoria`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`idProveedor_producto`) REFERENCES `proveedores` (`id_proveedor`);

--
-- Constraints for table `salidas`
--
ALTER TABLE `salidas`
  ADD CONSTRAINT `salidas_ibfk_1` FOREIGN KEY (`idProducto_salida`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `salidas_ibfk_2` FOREIGN KEY (`idFactura_salida`) REFERENCES `facturas` (`id_factura`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
