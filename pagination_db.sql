-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.3.9-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for test_db
CREATE DATABASE IF NOT EXISTS `test_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test_db`;

-- Dumping structure for table test_db.brg_1
CREATE TABLE IF NOT EXISTS `brg_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_brg` varchar(50) DEFAULT NULL,
  `hrg` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table test_db.brg_1: ~6 rows (approximately)
/*!40000 ALTER TABLE `brg_1` DISABLE KEYS */;
INSERT INTO `brg_1` (`id`, `nama_brg`, `hrg`) VALUES
	(1, 'processor', 722000),
	(2, 'mainboard', 525000),
	(3, 'power_supply', 150000),
	(4, 'hardisk', 460000),
	(5, 'optical_disk', 179000),
	(6, 'cooler', 95000);
/*!40000 ALTER TABLE `brg_1` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
