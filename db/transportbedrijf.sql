--
-- Table structure for table `Gebruiker`
--

DROP TABLE IF EXISTS `Gebruiker`;
CREATE TABLE `Gebruiker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inlognaam` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `wachtwoord` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `createdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `changedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
--
-- Table structure for table `Rol`
--

CREATE TABLE `Rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(25) COLLATE utf8_bin NOT NULL,
  `createdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Table structure for table `Klant`
--
DROP TABLE IF EXISTS `Klant`;
CREATE TABLE `Klant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(80) COLLATE utf8_bin NOT NULL,
  `cp` varchar(80) COLLATE utf8_bin DEFAULT NULL COMMENT 'Contactpersoon',
  `straat` varchar(80) COLLATE utf8_bin NOT NULL,
  `huisnummer` int(11) NOT NULL,
  `toevoeging` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `postcode` varchar(6) COLLATE utf8_bin DEFAULT NULL,
  `plaats` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `telefoon` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `notitie` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Table structure for table `Opdracht`
--

DROP TABLE IF EXISTS `Opdracht`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Opdracht` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datumopdr` date DEFAULT NULL,
  `klant_id` int(11) DEFAULT NULL,
  `colli` int(11) DEFAULT NULL,
  `kg` decimal(5,2) DEFAULT NULL,
  `straat` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `huisnummer` int(11) DEFAULT NULL,
  `toevoeging` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `plaats` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `datumplanning` date DEFAULT NULL,
  `datumtransport` date DEFAULT NULL,
  `notitie` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `postcode` varchar(6) COLLATE utf8_bin DEFAULT NULL,
  `bonbin` char(1) COLLATE utf8_bin DEFAULT NULL,
  `mdw` char(3) COLLATE utf8_bin DEFAULT NULL,
  `bedrag` decimal(6,2) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='		';