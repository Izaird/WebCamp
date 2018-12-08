-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: gdlwebcamp
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categoria_evento`
--

DROP TABLE IF EXISTS `categoria_evento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria_evento` (
  `id_categoria` tinyint(10) NOT NULL AUTO_INCREMENT,
  `cat_evento` varchar(50) NOT NULL,
  `icono` varchar(15) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria_evento`
--

LOCK TABLES `categoria_evento` WRITE;
/*!40000 ALTER TABLE `categoria_evento` DISABLE KEYS */;
INSERT INTO `categoria_evento` VALUES (1,'Seminario','fa-university'),(2,'Conferencias','fa-comments'),(3,'Talleres','fa-code');
/*!40000 ALTER TABLE `categoria_evento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `evento_id` tinyint(10) NOT NULL AUTO_INCREMENT,
  `nombre_evento` varchar(60) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `id_cat_evento` tinyint(10) NOT NULL,
  `id_inv` tinyint(4) NOT NULL,
  `clave` varchar(10) NOT NULL,
  PRIMARY KEY (`evento_id`),
  KEY `id_cat_evento` (`id_cat_evento`),
  KEY `id_inv` (`id_inv`),
  CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cat_evento`) REFERENCES `categoria_evento` (`id_categoria`),
  CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_inv`) REFERENCES `invitados` (`invitado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES (1,'Responsive Web Design','2016-12-09','10:00:00',3,1,'taller_01'),(2,'Flexbox','2016-12-09','12:00:00',3,2,'taller_02'),(3,'HTML5 y CSS3','2016-12-09','14:00:00',3,3,'taller_03'),(4,'Drupal','2016-12-09','17:00:00',3,4,'taller_04'),(5,'WordPress','2016-12-09','19:00:00',3,5,'taller_05'),(6,'Como ser freelancer','2016-12-09','10:00:00',2,6,'conf_01'),(7,'Tecnologías del Futuro','2016-12-09','17:00:00',2,1,'conf_02'),(8,'Seguridad en la Web','2016-12-09','19:00:00',2,2,'conf_03'),(9,'Diseño UI y UX para móviles','2016-12-09','10:00:00',1,6,'sem_01'),(10,'AngularJS','2016-12-10','10:00:00',3,1,'taller_06'),(11,'PHP y MySQL','2016-12-10','12:00:00',3,2,'taller_07'),(12,'JavaScript Avanzado','2016-12-10','14:00:00',3,3,'taller_08'),(13,'SEO en Google','2016-12-10','17:00:00',3,4,'taller_09'),(14,'De Photoshop a HTML5 y CSS3','2016-12-10','19:00:00',3,5,'taller_10'),(15,'PHP Intermedio y Avanzado','2016-12-10','21:00:00',3,6,'taller_11'),(16,'Como crear una tienda online que venda millones en pocos día','2016-12-10','10:00:00',2,6,'conf_04'),(17,'Los mejores lugares para encontrar trabajo','2016-12-10','17:00:00',2,1,'conf_05'),(18,'Pasos para crear un negocio rentable ','2016-12-10','19:00:00',2,2,'conf_06'),(19,'Aprende a Programar en una mañana','2016-12-10','10:00:00',1,3,'sem_02'),(20,'Diseño UI y UX para móviles','2016-12-10','17:00:00',1,5,'sem_03'),(21,'Laravel','2016-12-11','10:00:00',3,1,'taller_12'),(22,'Crea tu propia API','2016-12-11','12:00:00',3,2,'taller_13'),(23,'JavaScript y jQuery','2016-12-11','14:00:00',3,3,'taller_14'),(24,'Creando Plantillas para WordPress','2016-12-11','17:00:00',3,4,'taller_15'),(25,'Tiendas Virtuales en Magento','2016-12-11','19:00:00',3,5,'taller_16'),(26,'Como hacer Marketing en línea','2016-12-11','10:00:00',2,6,'conf_07'),(27,'¿Con que lenguaje debo empezar?','2016-12-11','17:00:00',2,2,'conf_08'),(28,'Frameworks y librerias Open Source','2016-12-11','19:00:00',2,3,'conf_09'),(29,'Creando una App en Android en una mañana','2016-12-11','10:00:00',1,4,'sem_04'),(30,'Creando una App en iOS en una tarde','2016-12-11','17:00:00',1,1,'sem_05');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invitados`
--

DROP TABLE IF EXISTS `invitados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invitados` (
  `invitado_id` tinyint(10) NOT NULL AUTO_INCREMENT,
  `nombre_invitado` varchar(30) NOT NULL,
  `apellido_invitado` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `url` varchar(50) NOT NULL,
  PRIMARY KEY (`invitado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invitados`
--

LOCK TABLES `invitados` WRITE;
/*!40000 ALTER TABLE `invitados` DISABLE KEYS */;
INSERT INTO `invitados` VALUES (1,'Rafael','Bautista','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar eleifend odio. Sed et tempus nibh. Vestibulum rhoncus mi diam, sed porta orci placerat et.','invitado1.jpg'),(2,'Shari','Herrera','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar eleifend odio. Sed et tempus nibh. Vestibulum rhoncus mi diam, sed porta orci placerat et.','invitado2.jpg'),(3,'Gregorio','Sanchez','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar eleifend odio. Sed et tempus nibh. Vestibulum rhoncus mi diam, sed porta orci placerat et.','invitado3.jpg'),(4,'Susana','Rivera','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar eleifend odio. Sed et tempus nibh. Vestibulum rhoncus mi diam, sed porta orci placerat et.','invitado4.jpg'),(5,'Harold','Garcia','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar eleifend odio. Sed et tempus nibh. Vestibulum rhoncus mi diam, sed porta orci placerat et.','invitado5.jpg'),(6,'Susan','Sanchez','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar eleifend odio. Sed et tempus nibh. Vestibulum rhoncus mi diam, sed porta orci placerat et.','invitado6.jpg');
/*!40000 ALTER TABLE `invitados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regalos`
--

DROP TABLE IF EXISTS `regalos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regalos` (
  `id_regalo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_regalo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_regalo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regalos`
--

LOCK TABLES `regalos` WRITE;
/*!40000 ALTER TABLE `regalos` DISABLE KEYS */;
INSERT INTO `regalos` VALUES (1,'Pulsera'),(2,'Etiquetas'),(3,'Plumas');
/*!40000 ALTER TABLE `regalos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrados`
--

DROP TABLE IF EXISTS `registrados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registrados` (
  `id_registrado` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_registrado` varchar(50) NOT NULL,
  `apellido_registrado` varchar(50) NOT NULL,
  `email_registrado` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `pases_articulos` longtext NOT NULL,
  `talleres_registrados` longtext NOT NULL,
  `regalo` int(11) NOT NULL,
  `total_pagado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_registrado`),
  KEY `regalo` (`regalo`),
  CONSTRAINT `registrados_ibfk_1` FOREIGN KEY (`regalo`) REFERENCES `regalos` (`id_regalo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrados`
--

LOCK TABLES `registrados` WRITE;
/*!40000 ALTER TABLE `registrados` DISABLE KEYS */;
INSERT INTO `registrados` VALUES (1,'Alexander','Morales','iza_alex3@hotmail.com','2018-11-27 13:08:28','{\"un_dia\":2,\"pase_completo\":1,\"camisas\":3,\"etiquetas\":5}','{\"eventos\":[\"taller_01\",\"taller_02\",\"taller_03\",\"conf_04\",\"conf_05\",\"taller_12\",\"taller_13\",\"taller_14\",\"taller_15\"]}',1,'147.9'),(4,'Izaird','Mothelet','izaird@outlook.es','2018-11-27 13:17:10','{\"un_dia\":1,\"camisas\":4,\"etiquetas\":1}','{\"eventos\":[\"taller_01\",\"taller_02\",\"taller_03\",\"taller_04\",\"taller_05\"]}',3,'69.2'),(5,'Lluvia','Mothelet','lluvia@estrella.com','2018-11-27 13:20:47','{\"un_dia\":1,\"camisas\":2,\"etiquetas\":5}','{\"eventos\":[\"taller_01\",\"taller_02\",\"taller_03\",\"taller_04\",\"taller_05\"]}',1,'58.6'),(6,'Agustin','Hernandez','agus@hotmail.com','2018-11-27 13:21:47','{\"un_dia\":1,\"camisas\":1,\"etiquetas\":3}','{\"eventos\":[\"taller_01\",\"taller_03\",\"taller_04\",\"taller_05\",\"conf_02\",\"conf_03\",\"sem_01\"]}',2,'45.3');
/*!40000 ALTER TABLE `registrados` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-07 20:43:39
