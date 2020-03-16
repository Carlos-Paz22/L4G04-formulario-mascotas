-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para mascotas
CREATE DATABASE IF NOT EXISTS `mascotas` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mascotas`;

-- Volcando estructura para tabla mascotas.mascotas
CREATE TABLE IF NOT EXISTS `mascotas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `raza` varchar(50) NOT NULL DEFAULT '',
  `edad` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mascotas.mascotas: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `mascotas` DISABLE KEYS */;
INSERT INTO `mascotas` (`id`, `nombre`, `raza`, `edad`) VALUES
	(1, 'Beethoven', 'Beagle', '5'),
	(2, 'Scooby Doo,', 'Border Terrier', '7'),
	(3, 'Goofy', 'Bulldog', '1'),
	(4, 'Brian', 'Bullmastiff', '4'),
	(5, 'Seymour', 'Caniche Grande', '7'),
	(6, 'Brian', 'Chihuahua', '2'),
	(7, 'Pancho', 'DÃ¡lmata', '2'),
	(8, 'Pluto', 'DÃ³bermann', '5'),
	(9, 'Rex', 'Gran DanÃ©s', '4'),
	(10, 'MilÃº', 'Golden Retriever', '7');
/*!40000 ALTER TABLE `mascotas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
