-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.7.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table uas_praksi.alternatif
CREATE TABLE IF NOT EXISTS `alternatif` (
  `id_alternatif` int(11) NOT NULL AUTO_INCREMENT,
  `nama_alternatif` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

-- Dumping data for table uas_praksi.alternatif: ~5 rows (approximately)
/*!40000 ALTER TABLE `alternatif` DISABLE KEYS */;
INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`) VALUES
	(1, 'Pantai Tambakrejo'),
	(2, 'Pantai Serang'),
	(3, 'Pantai Peh Pulo'),
	(4, 'Pantai Pangi'),
	(5, 'Pantai Gondo Mayit');
/*!40000 ALTER TABLE `alternatif` ENABLE KEYS */;

-- Dumping structure for table uas_praksi.bobot
CREATE TABLE IF NOT EXISTS `bobot` (
  `id_bobot` int(11) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(11) DEFAULT NULL,
  `value_bobot` float DEFAULT NULL,
  PRIMARY KEY (`id_bobot`),
  KEY `id_kriteria` (`id_kriteria`),
  CONSTRAINT `fk_kriteria_bobot` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

-- Dumping data for table uas_praksi.bobot: ~3 rows (approximately)
/*!40000 ALTER TABLE `bobot` DISABLE KEYS */;
INSERT INTO `bobot` (`id_bobot`, `id_kriteria`, `value_bobot`) VALUES
	(1, 2, 0.611111),
	(2, 3, 0.277778),
	(3, 1, 0.111111);
/*!40000 ALTER TABLE `bobot` ENABLE KEYS */;

-- Dumping structure for table uas_praksi.kriteria
CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

-- Dumping data for table uas_praksi.kriteria: ~3 rows (approximately)
/*!40000 ALTER TABLE `kriteria` DISABLE KEYS */;
INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
	(1, 'Akses'),
	(2, 'Keindahan'),
	(3, 'Fasilitas');
/*!40000 ALTER TABLE `kriteria` ENABLE KEYS */;

-- Dumping structure for table uas_praksi.matrix_penilaian
CREATE TABLE IF NOT EXISTS `matrix_penilaian` (
  `id_penilaian` int(11) NOT NULL AUTO_INCREMENT,
  `id_bobot` int(11) DEFAULT NULL,
  `id_alternatif` int(11) DEFAULT NULL,
  `value_penilaian` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_penilaian`),
  KEY `id_bobot` (`id_bobot`),
  KEY `id_alternatif` (`id_alternatif`),
  CONSTRAINT `fk_penilaian_alternatif` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`),
  CONSTRAINT `fk_penilaian_bobot` FOREIGN KEY (`id_bobot`) REFERENCES `bobot` (`id_bobot`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

-- Dumping data for table uas_praksi.matrix_penilaian: ~16 rows (approximately)
/*!40000 ALTER TABLE `matrix_penilaian` DISABLE KEYS */;
INSERT INTO `matrix_penilaian` (`id_penilaian`, `id_bobot`, `id_alternatif`, `value_penilaian`) VALUES
	(1, 1, 1, '8'),
	(2, 2, 1, '7'),
	(3, 3, 1, '8'),
	(4, 1, 2, '8'),
	(5, 2, 2, '8'),
	(6, 3, 2, '8'),
	(7, 1, 3, '8'),
	(8, 2, 3, '6'),
	(9, 3, 3, '6'),
	(10, 1, 4, '8'),
	(11, 2, 4, '7'),
	(12, 3, 4, '7'),
	(13, 1, 5, '7'),
	(14, 2, 5, '7'),
	(15, 3, 5, '7');
/*!40000 ALTER TABLE `matrix_penilaian` ENABLE KEYS */;

-- Dumping structure for view uas_praksi.multimoora_1
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `multimoora_1` (
	`id_penilaian` INT(11) NOT NULL,
	`id_alternatif` INT(11) NOT NULL,
	`nama_alternatif` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`id_kriteria` INT(11) NOT NULL,
	`nama_kriteria` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`id_bobot` INT(11) NOT NULL,
	`value_bobot` FLOAT NULL,
	`nilai` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`pra` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view uas_praksi.multimoora_2
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `multimoora_2` (
	`id_penilaian` INT(11) NOT NULL,
	`id_alternatif` INT(11) NOT NULL,
	`nama_alternatif` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`id_kriteria` INT(11) NOT NULL,
	`nama_kriteria` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`id_bobot` INT(11) NOT NULL,
	`value_bobot` FLOAT NULL,
	`nilai` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`pra` DOUBLE NULL,
	`normalisasi` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view uas_praksi.multimoora_3
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `multimoora_3` (
	`id_penilaian` INT(11) NOT NULL,
	`id_alternatif` INT(11) NOT NULL,
	`nama_alternatif` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`id_kriteria` INT(11) NOT NULL,
	`nama_kriteria` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`id_bobot` INT(11) NOT NULL,
	`value_bobot` FLOAT NULL,
	`nilai` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`pra` DOUBLE NULL,
	`normalisasi` DOUBLE NULL,
	`normalisasibobot` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view uas_praksi.multimoora_4
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `multimoora_4` (
	`id_alternatif` INT(11) NOT NULL,
	`nama_alternatif` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`hasil` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for table uas_praksi.register
CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uas_praksi.register: ~2 rows (approximately)
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` (`username`, `password`, `nama`, `email`, `level`) VALUES
	('ardana', '123', 'ardana', 'ardana@gmail.com', 'Pengguna'),
	('candra', '123', 'candra', 'candra@gmail.com', 'Admin');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;

-- Dumping structure for view uas_praksi.viewrankingpantai
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `viewrankingpantai` (
	`id_alternatif` INT(11) NOT NULL,
	`nama_alternatif` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`hasil` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view uas_praksi.view_matrixkeputusan
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_matrixkeputusan` (
	`id_penilaian` INT(11) NOT NULL,
	`id_alternatif` INT(11) NOT NULL,
	`nama_alternatif` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`id_kriteria` INT(11) NOT NULL,
	`nama_kriteria` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`id_bobot` INT(11) NOT NULL,
	`value_bobot` FLOAT NULL,
	`nilai` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view uas_praksi.multimoora_1
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `multimoora_1`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `multimoora_1` AS SELECT view_matrixkeputusan.*,SQRT(SUM(POW(view_matrixkeputusan.nilai,2))) AS pra FROM view_matrixkeputusan GROUP BY view_matrixkeputusan.id_kriteria ;

-- Dumping structure for view uas_praksi.multimoora_2
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `multimoora_2`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `multimoora_2` AS SELECT view_matrixkeputusan.*,multimoora_1.pra, (view_matrixkeputusan.nilai/multimoora_1.pra) AS normalisasi FROM view_matrixkeputusan,multimoora_1 WHERE multimoora_1.id_kriteria=view_matrixkeputusan.id_kriteria GROUP BY view_matrixkeputusan.id_penilaian ;

-- Dumping structure for view uas_praksi.multimoora_3
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `multimoora_3`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `multimoora_3` AS SELECT multimoora_2.*,(multimoora_2.normalisasi*multimoora_2.value_bobot) AS normalisasibobot FROM multimoora_2 GROUP BY multimoora_2.id_penilaian ;

-- Dumping structure for view uas_praksi.multimoora_4
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `multimoora_4`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `multimoora_4` AS SELECT multimoora_3.id_alternatif,multimoora_3.nama_alternatif,SUM(multimoora_3.normalisasibobot) AS hasil FROM multimoora_3 GROUP BY multimoora_3.id_alternatif ;

-- Dumping structure for view uas_praksi.viewrankingpantai
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `viewrankingpantai`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `viewrankingpantai` AS SELECT * FROM multimoora_4 ORDER BY hasil DESC ;

-- Dumping structure for view uas_praksi.view_matrixkeputusan
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_matrixkeputusan`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_matrixkeputusan` AS SELECT matrix_penilaian.id_penilaian, alternatif.*, kriteria.*, bobot.id_bobot, bobot.value_bobot, matrix_penilaian.value_penilaian AS nilai
FROM matrix_penilaian, kriteria, bobot, alternatif 
WHERE matrix_penilaian.id_alternatif = alternatif.id_alternatif
AND matrix_penilaian.id_bobot = bobot.id_bobot
AND kriteria.id_kriteria = bobot.id_kriteria
AND matrix_penilaian.id_penilaian = matrix_penilaian.id_penilaian ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
