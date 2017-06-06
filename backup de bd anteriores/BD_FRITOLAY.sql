CREATE DATABASE  IF NOT EXISTS `bd_fritolay` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bd_fritolay`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bd_fritolay
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Table structure for table `tbl_detallepedido`
--

DROP TABLE IF EXISTS `tbl_detallepedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_detallepedido` (
  `DEPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DEPE_CANTIDAD` double DEFAULT NULL,
  `INVE_ID` int(11) NOT NULL,
  `PEDI_ID` int(11) NOT NULL,
  PRIMARY KEY (`DEPE_ID`),
  KEY `fk_TBL_DETALLEPEDIDO_TBL_PEDIDOS1_idx` (`PEDI_ID`),
  KEY `fk_TBL_DETALLEPEDIDO_TBL_INVENTARIOS_idx` (`INVE_ID`),
  CONSTRAINT `fk_TBL_DETALLEPEDIDO_TBL_INVENTARIOS` FOREIGN KEY (`INVE_ID`) REFERENCES `tbl_invetarios` (`INVE_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_TBL_DETALLEPEDIDO_TBL_PEDIDOS1` FOREIGN KEY (`PEDI_ID`) REFERENCES `tbl_pedidos` (`PEDI_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_detallepedido`
--

LOCK TABLES `tbl_detallepedido` WRITE;
/*!40000 ALTER TABLE `tbl_detallepedido` DISABLE KEYS */;
INSERT INTO `tbl_detallepedido` VALUES (1,2,1,1),(2,2,2,10),(3,5,1,11),(4,2,1,12),(6,20,2,12),(9,2,1,15),(10,2,1,19),(11,18,1,19),(12,2,2,19),(13,2,2,19),(14,5,1,20);
/*!40000 ALTER TABLE `tbl_detallepedido` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `actualiza_stok_inventario` BEFORE INSERT ON `tbl_detallepedido` FOR EACH ROW update tbl_invetarios
set INVE_STOk = INVE_STOK - NEW.DEPE_CANTIDAD
where tbl_invetarios.INVE_ID = NEW.INVE_ID */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `tbl_estados`
--

DROP TABLE IF EXISTS `tbl_estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_estados` (
  `ESTA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ESTA_DETALLE` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ESTA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estados`
--

LOCK TABLES `tbl_estados` WRITE;
/*!40000 ALTER TABLE `tbl_estados` DISABLE KEYS */;
INSERT INTO `tbl_estados` VALUES (1,'Enviado'),(2,'Entregado'),(3,'Por entregar');
/*!40000 ALTER TABLE `tbl_estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_favoritos`
--

DROP TABLE IF EXISTS `tbl_favoritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_favoritos` (
  `FAVO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROD_ID` int(11) NOT NULL,
  `PERS_ID` int(11) NOT NULL,
  PRIMARY KEY (`FAVO_ID`),
  KEY `fk_TBL_FAVORITOS_TBL_PRODUCTOS1_idx` (`PROD_ID`),
  KEY `fk_TBL_FAVORITOS_TBL_PERSONAS1_idx` (`PERS_ID`),
  CONSTRAINT `fk_TBL_FAVORITOS_TBL_PERSONAS1` FOREIGN KEY (`PERS_ID`) REFERENCES `tbl_personas` (`PERS_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_TBL_FAVORITOS_TBL_PRODUCTOS1` FOREIGN KEY (`PROD_ID`) REFERENCES `tbl_productos` (`PROD_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_favoritos`
--

LOCK TABLES `tbl_favoritos` WRITE;
/*!40000 ALTER TABLE `tbl_favoritos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_favoritos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_invetarios`
--

DROP TABLE IF EXISTS `tbl_invetarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_invetarios` (
  `INVE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `INVE_PRECIO` double NOT NULL,
  `INVE_STOK` double NOT NULL,
  `INVE_STOK_MIN` double NOT NULL,
  `INVE_ESTADO` char(20) DEFAULT NULL,
  `PROD_ID` int(11) NOT NULL,
  PRIMARY KEY (`INVE_ID`),
  KEY `fk_TBL_INVETARIOS_TBL_PRODUCTOS1_idx` (`PROD_ID`),
  CONSTRAINT `fk_TBL_INVETARIOS_TBL_PRODUCTOS1` FOREIGN KEY (`PROD_ID`) REFERENCES `tbl_productos` (`PROD_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_invetarios`
--

LOCK TABLES `tbl_invetarios` WRITE;
/*!40000 ALTER TABLE `tbl_invetarios` DISABLE KEYS */;
INSERT INTO `tbl_invetarios` VALUES (1,1500,-3,10,'ACTIVO',1),(2,16000,-1,5,'ACTIVO',2),(3,15000,20,5,'desactivado',3);
/*!40000 ALTER TABLE `tbl_invetarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pedidos`
--

DROP TABLE IF EXISTS `tbl_pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pedidos` (
  `PEDI_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PEDI_FECHA` date DEFAULT NULL,
  `PEDI_OBSERVACION` varchar(30) DEFAULT NULL,
  `PEDI_DIRECCION` varchar(45) DEFAULT NULL,
  `ESTA_ID` int(11) NOT NULL,
  `PERS_ID` int(11) NOT NULL,
  PRIMARY KEY (`PEDI_ID`),
  KEY `fk_TBL_PEDIDOS_TBL_ESTADOS1_idx` (`ESTA_ID`),
  KEY `fk_TBL_PEDIDOS_TBL_PERSONAS1_idx` (`PERS_ID`),
  CONSTRAINT `fk_TBL_PEDIDOS_TBL_ESTADOS1` FOREIGN KEY (`ESTA_ID`) REFERENCES `tbl_estados` (`ESTA_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_TBL_PEDIDOS_TBL_PERSONAS1` FOREIGN KEY (`PERS_ID`) REFERENCES `tbl_personas` (`PERS_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pedidos`
--

LOCK TABLES `tbl_pedidos` WRITE;
/*!40000 ALTER TABLE `tbl_pedidos` DISABLE KEYS */;
INSERT INTO `tbl_pedidos` VALUES (1,'2016-05-20','ninguna','calle 15',1,1),(2,'2017-06-04','1515151','15151',3,7),(3,'2017-06-04','ninguna','calle 20',1,3),(4,'2017-06-04','ninguna','calle 20',1,3),(5,'2017-06-04','ninguna','calle 20',1,3),(6,'2017-06-04','NINGUNA','CALLE 15',3,7),(7,'2017-06-04','ninguna','calle 15',1,3),(8,'2017-06-04','ninguna','calle 15',1,3),(9,'2017-06-04','ninguna','calle 15',1,3),(10,'2017-06-04','ninguna','calle 15',1,3),(11,'2017-06-04','ninguna','calle 15',1,3),(12,'2017-06-04','ninguna','calle 15',1,3),(13,'2017-06-04','ninguna','calle 15',1,3),(14,'2017-06-04','NINGUNA','calle20',1,7),(15,'2017-06-04','ninguna','calle 15',2,7),(16,'2017-06-04','15','15',1,3),(17,'2017-06-04','ninguna','calle 15',1,7),(18,'2017-06-04','ninguna','calle 15',1,7),(19,'2017-06-04','NINGUNA','calle 20',1,3),(20,'2017-06-05','ninguna','15151',2,2);
/*!40000 ALTER TABLE `tbl_pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_perfilesroles`
--

DROP TABLE IF EXISTS `tbl_perfilesroles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_perfilesroles` (
  `PERO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ROL_ID` int(11) NOT NULL,
  `PERM_ID` int(11) NOT NULL,
  `PERO_PADRE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PERO_ID`),
  KEY `fk_TBL_PERFILESROLES_TBL_ROLES1_idx` (`ROL_ID`),
  KEY `fk_TBL_PERFILESROLES_TBL_PERMISOS1_idx` (`PERM_ID`),
  KEY `FK_TBL_PERFILESROLES_TBL_PERFILESROLES_idx` (`PERO_PADRE`),
  CONSTRAINT `FK_TBL_PERFILESROLES_TBL_PERFILESROLES` FOREIGN KEY (`PERO_PADRE`) REFERENCES `tbl_perfilesroles` (`PERO_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_TBL_PERFILESROLES_TBL_PERMISOS1` FOREIGN KEY (`PERM_ID`) REFERENCES `tbl_permisos` (`PERM_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_TBL_PERFILESROLES_TBL_ROLES1` FOREIGN KEY (`ROL_ID`) REFERENCES `tbl_roles` (`ROL_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_perfilesroles`
--

LOCK TABLES `tbl_perfilesroles` WRITE;
/*!40000 ALTER TABLE `tbl_perfilesroles` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_perfilesroles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_permisos`
--

DROP TABLE IF EXISTS `tbl_permisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_permisos` (
  `PERM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PERM_ACCION` varchar(45) DEFAULT NULL,
  `PERM_CONTROLADOR` varchar(45) DEFAULT NULL,
  `PERM_MODULO` varchar(45) DEFAULT NULL,
  `PERM_PADRE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PERM_ID`),
  KEY `FK_TBL_PERMISOS_TBL_PERMISOS_idx` (`PERM_PADRE`),
  CONSTRAINT `FK_TBL_PERMISOS_TBL_PERMISOS` FOREIGN KEY (`PERM_PADRE`) REFERENCES `tbl_permisos` (`PERM_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_permisos`
--

LOCK TABLES `tbl_permisos` WRITE;
/*!40000 ALTER TABLE `tbl_permisos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_permisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_persjuridicas`
--

DROP TABLE IF EXISTS `tbl_persjuridicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_persjuridicas` (
  `PEJU_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PEJU_NOMBRE` varchar(30) DEFAULT NULL,
  `PEJU_OBJETOCOMERCIAL` varchar(30) DEFAULT NULL,
  `PERS_ID` int(11) NOT NULL,
  PRIMARY KEY (`PEJU_ID`),
  UNIQUE KEY `PERS_ID_UNIQUE` (`PERS_ID`),
  KEY `fk_TBL_PERSONASJURIDICAS_TBL_PERSONAS1_idx` (`PERS_ID`),
  CONSTRAINT `fk_TBL_PERSONASJURIDICAS_TBL_PERSONAS1` FOREIGN KEY (`PERS_ID`) REFERENCES `tbl_personas` (`PERS_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_persjuridicas`
--

LOCK TABLES `tbl_persjuridicas` WRITE;
/*!40000 ALTER TABLE `tbl_persjuridicas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_persjuridicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_persnaturales`
--

DROP TABLE IF EXISTS `tbl_persnaturales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_persnaturales` (
  `PENA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PENA_NOMBRE` varchar(30) DEFAULT NULL,
  `PENA_APELLIDO` varchar(30) DEFAULT NULL,
  `PENA_FECHANAC` date DEFAULT NULL,
  `PERS_ID` int(11) NOT NULL,
  `SEX_ID` int(11) NOT NULL,
  `TIID_ID` int(11) NOT NULL,
  PRIMARY KEY (`PENA_ID`),
  UNIQUE KEY `PERS_ID_UNIQUE` (`PERS_ID`),
  KEY `fk_TBL_PERSONASNATURALES_TBL_PERSONAS1_idx` (`PERS_ID`),
  KEY `fk_TBL_PERSONASNATURALES_TBL_SEXOS1_idx` (`SEX_ID`),
  KEY `fk_TBL_PERSONASNATURALES_TBL_TIPOIDENTIFICACION1_idx` (`TIID_ID`),
  CONSTRAINT `fk_TBL_PERSONASNATURALES_TBL_PERSONAS1` FOREIGN KEY (`PERS_ID`) REFERENCES `tbl_personas` (`PERS_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_TBL_PERSONASNATURALES_TBL_SEXOS1` FOREIGN KEY (`SEX_ID`) REFERENCES `tbl_sexos` (`SEX_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_TBL_PERSONASNATURALES_TBL_TIPOIDENTIFICACION1` FOREIGN KEY (`TIID_ID`) REFERENCES `tbl_tipoidentificacion` (`TIID_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_persnaturales`
--

LOCK TABLES `tbl_persnaturales` WRITE;
/*!40000 ALTER TABLE `tbl_persnaturales` DISABLE KEYS */;
INSERT INTO `tbl_persnaturales` VALUES (1,'Juan David ','Redondo Robles','0000-00-00',1,1,1),(2,'Kendris Johana','Rodriguez Gomez','0000-00-00',2,2,1),(3,'Lenys milena','Bueno Tovio','0000-00-00',3,2,1),(4,'javier ','Redondo Robles','2006-05-26',7,1,2);
/*!40000 ALTER TABLE `tbl_persnaturales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_personas`
--

DROP TABLE IF EXISTS `tbl_personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_personas` (
  `PERS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PERS_IDENTIFICACION` varchar(30) DEFAULT NULL,
  `PERS_TELEFONO` varchar(30) DEFAULT NULL,
  `PERS_DIRECCION` varchar(30) DEFAULT NULL,
  `PERS_EMAIL` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`PERS_ID`),
  UNIQUE KEY `PERS_IDENTIFICACION_UNIQUE` (`PERS_IDENTIFICACION`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_personas`
--

LOCK TABLES `tbl_personas` WRITE;
/*!40000 ALTER TABLE `tbl_personas` DISABLE KEYS */;
INSERT INTO `tbl_personas` VALUES (1,'1118837113','3043377736','calle 49a # 7h -69','juandredondo@gmail.com'),(2,'1118848946','3135233232','calle 27','kjohanarodriguez@gmail.com'),(3,'111889468825','3115256646','carrera 12b #72','lbueno@gmail.com'),(4,'1118','30433556565','calle 27','dmiranda@gmail.com'),(5,'444','44','44','44@gmail.com'),(6,'dee','ee','ee','jajaj@gmail.com'),(7,'91051323235','000','calle 45','jredondo@gmail.com');
/*!40000 ALTER TABLE `tbl_personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_productos`
--

DROP TABLE IF EXISTS `tbl_productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_productos` (
  `PROD_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROD_DESCRIPCION` varchar(30) DEFAULT NULL,
  `PROD_FECHA_VENCIMIENTO` date DEFAULT NULL,
  PRIMARY KEY (`PROD_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_productos`
--

LOCK TABLES `tbl_productos` WRITE;
/*!40000 ALTER TABLE `tbl_productos` DISABLE KEYS */;
INSERT INTO `tbl_productos` VALUES (1,'PAPA',NULL),(2,'DETODITO',NULL),(3,'GALLETA',NULL);
/*!40000 ALTER TABLE `tbl_productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_roles`
--

DROP TABLE IF EXISTS `tbl_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_roles` (
  `ROL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ROL_NOMBRE` varchar(45) NOT NULL,
  `ROL_ORDEN` varchar(45) NOT NULL,
  PRIMARY KEY (`ROL_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_roles`
--

LOCK TABLES `tbl_roles` WRITE;
/*!40000 ALTER TABLE `tbl_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sexos`
--

DROP TABLE IF EXISTS `tbl_sexos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sexos` (
  `SEX_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SEX_NOMBRE` varchar(25) NOT NULL,
  PRIMARY KEY (`SEX_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sexos`
--

LOCK TABLES `tbl_sexos` WRITE;
/*!40000 ALTER TABLE `tbl_sexos` DISABLE KEYS */;
INSERT INTO `tbl_sexos` VALUES (1,'masculino '),(2,'Femenino');
/*!40000 ALTER TABLE `tbl_sexos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipoidentificacion`
--

DROP TABLE IF EXISTS `tbl_tipoidentificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipoidentificacion` (
  `TIID_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TIID_DESCRIPCION` varchar(30) NOT NULL,
  PRIMARY KEY (`TIID_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipoidentificacion`
--

LOCK TABLES `tbl_tipoidentificacion` WRITE;
/*!40000 ALTER TABLE `tbl_tipoidentificacion` DISABLE KEYS */;
INSERT INTO `tbl_tipoidentificacion` VALUES (1,'Cedula'),(2,'Tarjeta de Identidad'),(3,'Cedula de Extrangeria'),(4,'Pasaporte');
/*!40000 ALTER TABLE `tbl_tipoidentificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuarios` (
  `USUA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USUA_USER` varchar(45) DEFAULT NULL,
  `USUA_PASSWORD` varchar(45) DEFAULT NULL,
  `USUA_ESTADO` tinyint(1) DEFAULT NULL,
  `USUA_TOKEN` varchar(250) DEFAULT NULL,
  `PERS_ID` int(11) NOT NULL,
  `ROL_ID` int(11) NOT NULL,
  PRIMARY KEY (`USUA_ID`),
  KEY `fk_TBL_USUARIOS_TBL_PERSONAS1_idx` (`PERS_ID`),
  KEY `fk_TBL_USUARIOS_TBL_ROLES1_idx` (`ROL_ID`),
  CONSTRAINT `fk_TBL_USUARIOS_TBL_PERSONAS1` FOREIGN KEY (`PERS_ID`) REFERENCES `tbl_personas` (`PERS_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_TBL_USUARIOS_TBL_ROLES1` FOREIGN KEY (`ROL_ID`) REFERENCES `tbl_roles` (`ROL_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'bd_fritolay'
--

--
-- Dumping routines for database 'bd_fritolay'
--
/*!50003 DROP PROCEDURE IF EXISTS `inventariosActivos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `inventariosActivos`()
BEGIN
select tbl_invetarios.inve_id,tbl_productos.prod_descripcion from tbl_productos inner join tbl_invetarios  on tbl_productos.prod_id=tbl_invetarios.prod_id 
 where inve_stok>=1 and  tbl_invetarios.inve_estado like 'activo';
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-04 17:53:16
