# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.25)
# Database: crud
# Generation Time: 2019-05-21 16:27:03 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table departamento
# ------------------------------------------------------------

DROP TABLE IF EXISTS `departamento`;

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;

INSERT INTO `departamento` (`id`, `nombre`)
VALUES
	(1,'Antioquia'),
	(2,'Boyacá');

/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table estado_proceso
# ------------------------------------------------------------

DROP TABLE IF EXISTS `estado_proceso`;

CREATE TABLE `estado_proceso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `estado_proceso` WRITE;
/*!40000 ALTER TABLE `estado_proceso` DISABLE KEYS */;

INSERT INTO `estado_proceso` (`id`, `nombre`)
VALUES
	(1,'Firmado'),
	(2,'En Curso'),
	(3,'Finalizado');

/*!40000 ALTER TABLE `estado_proceso` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table municipio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `municipio`;

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `departamento_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FE98F5E05A91C08D` (`departamento_id`),
  CONSTRAINT `FK_FE98F5E05A91C08D` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `municipio` WRITE;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;

INSERT INTO `municipio` (`id`, `nombre`, `departamento_id`)
VALUES
	(1,'Medellin',1),
	(2,'Manizalez',1),
	(3,'Bello',1),
	(4,'Cucavita',2),
	(5,'Tunja',2),
	(6,'Paipa',2);

/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table proceso
# ------------------------------------------------------------

DROP TABLE IF EXISTS `proceso`;

CREATE TABLE `proceso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_proceso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `municipio_id` int(11) DEFAULT NULL,
  `documento` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario_solicitante_id` int(11) DEFAULT NULL,
  `usuario_aprobador_id` int(11) DEFAULT NULL,
  `estado_proceso_id` int(11) DEFAULT NULL,
  `is_aproved` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_921C44D96DF5464A` (`usuario_solicitante_id`),
  KEY `IDX_921C44D92260138C` (`usuario_aprobador_id`),
  KEY `IDX_921C44D9DDB58332` (`estado_proceso_id`),
  CONSTRAINT `FK_921C44D92260138C` FOREIGN KEY (`usuario_aprobador_id`) REFERENCES `user_app` (`id`),
  CONSTRAINT `FK_921C44D96DF5464A` FOREIGN KEY (`usuario_solicitante_id`) REFERENCES `user_app` (`id`),
  CONSTRAINT `FK_921C44D9DDB58332` FOREIGN KEY (`estado_proceso_id`) REFERENCES `estado_proceso` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `proceso` WRITE;
/*!40000 ALTER TABLE `proceso` DISABLE KEYS */;

INSERT INTO `proceso` (`id`, `numero_proceso`, `descripcion`, `fecha_inicio`, `fecha_fin`, `municipio_id`, `documento`, `usuario_solicitante_id`, `usuario_aprobador_id`, `estado_proceso_id`, `is_aproved`)
VALUES
	(1,'34343','Actualizacion Contratos 2019','2019-01-01 00:00:00','2019-01-01 00:00:00',3,'/uploads/archivo.docx',NULL,NULL,NULL,0),
	(2,'32443534','Contratación Masiva TM','2014-01-01 00:00:00','2014-01-01 00:00:00',1,'/uploads/archivoPrueba.xlsx',NULL,NULL,1,1);

/*!40000 ALTER TABLE `proceso` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tipo_usuario
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tipo_usuario`;

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;

INSERT INTO `tipo_usuario` (`id`, `nombre`)
VALUES
	(1,'Solicitante'),
	(2,'Aprobador');

/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_app
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_app`;

CREATE TABLE `user_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `email` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `identification` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_usuario_id` int(11) DEFAULT NULL,
  `solicitantes` int(11) DEFAULT NULL,
  `aprobadores` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_22781144E7927C74` (`email`),
  KEY `IDX_227811444ABE41B6` (`tipo_usuario_id`),
  KEY `IDX_22781144FD1A6408` (`solicitantes`),
  KEY `IDX_227811448D8F9079` (`aprobadores`),
  CONSTRAINT `FK_227811444ABE41B6` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuario` (`id`),
  CONSTRAINT `FK_227811448D8F9079` FOREIGN KEY (`aprobadores`) REFERENCES `proceso` (`id`),
  CONSTRAINT `FK_22781144FD1A6408` FOREIGN KEY (`solicitantes`) REFERENCES `proceso` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `user_app` WRITE;
/*!40000 ALTER TABLE `user_app` DISABLE KEYS */;

INSERT INTO `user_app` (`id`, `first_name`, `last_name`, `phone`, `is_active`, `email`, `password`, `identification`, `tipo_usuario_id`, `solicitantes`, `aprobadores`)
VALUES
	(2,'Espitia','bayona','87687687',1,'mabea@correo.com','$2y$13$vScfDHKrJma4.yByojgxgeXO4l/JwUl3A0AOA/yInt.2/2AYpABxG','234324',1,NULL,NULL),
	(3,'Miguel','Rangel','7676767',1,'mrangelsdf@correo.com','$2y$13$JK1d2or5YhgmxtnWeA2sueJyLwKdPTA470AFFX1pKzAci89rYVH9i','1023575636',1,NULL,NULL),
	(4,'Lucia','Marin','8768723',1,'lmarin@gmail.com','$2y$13$manTEv6ByBnU2TYselAm4elmrwWAeMMESpDDVmEIbUQ/aYUSyItji','123',2,NULL,NULL),
	(5,'Andres','Murillo','2432',1,'admin@gmail.com','$2y$13$9LiTTgilhRm5xI27xRFrzOL3R0pG0HnATYb1.ODaVG3Cn9sEu4ogm','43253',1,NULL,NULL),
	(6,'Natalia Moreno','Moreno','32445',1,'nmoreno@correo.com','$2y$13$LJHUB./jLZwXQoPhDSKY7eyKg8KYCDXP9a7R3dEuhhQ9.bPVgzV16','43535',1,NULL,NULL);

/*!40000 ALTER TABLE `user_app` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
