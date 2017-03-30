-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para torneo
CREATE DATABASE IF NOT EXISTS `torneo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `torneo`;

-- Volcando estructura para tabla torneo.tournament
CREATE TABLE IF NOT EXISTS `tournament` (
  `id_tournament` int(11) NOT NULL,
  `name` varchar(21) NOT NULL,
  `image_url` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tournament`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando estructura para tabla torneo.phase
CREATE TABLE IF NOT EXISTS `phase` (
  `id_phase` int(2) NOT NULL,
  `id_tournament` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id_phase`,`id_tournament`),
  KEY `fk_phase_tournament1_idx` (`id_tournament`),
  CONSTRAINT `fk_phase_tournament1` FOREIGN KEY (`id_tournament`) REFERENCES `tournament` (`id_tournament`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando estructura para tabla torneo.team
CREATE TABLE IF NOT EXISTS `team` (
  `id_team` int(11) NOT NULL AUTO_INCREMENT,
  `id_phase` int(2) NOT NULL,
  `id_tournament` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_team`,`id_phase`,`id_tournament`),
  KEY `fk_team_phase1_idx` (`id_phase`,`id_tournament`),
  CONSTRAINT `fk_team_phase1` FOREIGN KEY (`id_phase`, `id_tournament`) REFERENCES `phase` (`id_phase`, `id_tournament`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;