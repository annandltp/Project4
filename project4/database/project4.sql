-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.25a - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for project4
CREATE DATABASE IF NOT EXISTS `project4` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `project4`;

-- Dumping structure for table project4.artikel
CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT '',
  `isi` text,
  `gambar` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `hits` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table project4.galeri
CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table project4.halaman
CREATE TABLE IF NOT EXISTS `halaman` (
  `id_halaman` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  PRIMARY KEY (`id_halaman`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table project4.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(20) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `urutan` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table project4.pesan
CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subjek` varchar(50) DEFAULT NULL,
  `pesan` text,
  `balasan` text,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table project4.submenu
CREATE TABLE IF NOT EXISTS `submenu` (
  `id_submenu` int(5) NOT NULL AUTO_INCREMENT,
  `id_menu` int(5) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `urutan` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_submenu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table project4.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
