-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.25-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.2.0.6576
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para peluqueria
CREATE DATABASE IF NOT EXISTS `peluqueria` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `peluqueria`;

-- Volcando estructura para tabla peluqueria.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idCliente` int(6) NOT NULL AUTO_INCREMENT,
  `cedula` int(15) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `celular` bigint(15) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  PRIMARY KEY (`idCliente`,`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla peluqueria.usuarios: ~1 rows (aproximadamente)
INSERT INTO `usuarios` (`idCliente`, `cedula`, `nombre`, `celular`, `correo`, `contraseña`) VALUES
	(1, 1143867299, 'wilfer andres perez moreno', 317759559, 'wilferperezm@gmail.com', 'perez7299');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;