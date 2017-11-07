-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versie:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Structuur van  tabel pretpark.pretpark_admin wordt geschreven
CREATE TABLE IF NOT EXISTS `pretpark_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel pretpark.pretpark_admin: ~3 rows (ongeveer)
/*!40000 ALTER TABLE `pretpark_admin` DISABLE KEYS */;
INSERT INTO `pretpark_admin` (`id`, `username`, `hashed_password`) VALUES
	(1, 'kskoglund', '$2y$10$NmZiNzcxMzhiY2E0NTg2YO9X4eeRSo03H6r0A5bqHkZnF1hI8sLX.'),
	(2, 'shradhand', '$2y$10$V4Xlh5ZTJh8h2jp11DxITORAP8lsZ52fjWgDrun5a45sSTgC65u.6'),
	(3, 'johndoe', '$2y$10$NTdmODYxZWQ0OGMwYmMxZ.Q3I4i0FtO/X9DWv1tpsF5hiS9LBXqmu');
/*!40000 ALTER TABLE `pretpark_admin` ENABLE KEYS */;

-- Structuur van  tabel pretpark.pretpark_attractie wordt geschreven
CREATE TABLE IF NOT EXISTS `pretpark_attractie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel pretpark.pretpark_attractie: ~3 rows (ongeveer)
/*!40000 ALTER TABLE `pretpark_attractie` DISABLE KEYS */;
INSERT INTO `pretpark_attractie` (`id`, `name`, `type`) VALUES
	(1, 'Spinning around', 'Reuzenrad'),
	(10, 'Splash', 'Waterbaan'),
	(12, 'Robin hood', 'Achtbaan');
/*!40000 ALTER TABLE `pretpark_attractie` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
