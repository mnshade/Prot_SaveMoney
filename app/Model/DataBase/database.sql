-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_savemoney
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `depositousuario`
--

DROP TABLE IF EXISTS `depositousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `depositousuario` (
  `DepositoEconomiaID` int NOT NULL AUTO_INCREMENT,
  `DepositoEconomiaValor` double DEFAULT NULL,
  `DataDepositoEconomia` date DEFAULT NULL,
  `DepositoEconomiaDesc` varchar(45) DEFAULT NULL,
  `Usuario_UsuarioID` int NOT NULL,
  PRIMARY KEY (`DepositoEconomiaID`),
  KEY `fk_DepositoUsuario_Usuario_idx` (`Usuario_UsuarioID`),
  CONSTRAINT `fk_DepositoUsuario_Usuario` FOREIGN KEY (`Usuario_UsuarioID`) REFERENCES `usuario` (`UsuarioID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `depositousuario`
--




LOCK TABLES `depositousuario` WRITE;
/*!40000 ALTER TABLE `depositousuario` DISABLE KEYS */;
INSERT INTO `depositousuario` VALUES (1,10,'2020-11-17','teste',1),(2,10,'2020-11-17','teste',1),(3,10,'2020-11-17','teste',1),(4,10,'2020-11-17','teste',1),(5,1000,'2020-11-17','teste',1),(6,10,'2020-11-17','asdad',1),(7,10,'2020-11-18','teste',1),(8,0,'2020-11-18','',1),(9,10,'2020-11-18','teste',1),(10,10,'2020-11-18','teste',1),(11,10,'2020-11-19','teste',1),(12,200,'2020-11-19','asdasd',1),(13,10,'2020-11-19','',2),(14,10,'2020-11-19','wqwe',2),(15,100,'2020-11-19','as,dçasd',2),(16,10,'2020-11-19','teste',3),(17,10,'2020-11-19','teste',1),(18,1,'2020-11-19','teste',1),(19,10000,'2020-11-23','sdasdasd',1),(20,100,'2020-11-23','teste',4),(21,1,'2020-11-23','teste lista',1),(22,4,'2020-11-24','teste',1),(23,10,'2020-12-02','teste',10),(24,2000,'2020-12-02','teste',10),(25,100,'2020-12-04','dinheiro suado',11),(26,4034,'2020-12-04','werw',11);
/*!40000 ALTER TABLE `depositousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objetivousuario`
--

DROP TABLE IF EXISTS `objetivousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `objetivousuario` (
  `ObjetivoID` int NOT NULL AUTO_INCREMENT,
  `NomeObjetivo` varchar(45) NOT NULL,
  `DataObjetivoIni` datetime NOT NULL,
  `DataObejtivoFim` datetime NOT NULL,
  `ObjetivoValor` int NOT NULL,
  `ObjetivoDesc` varchar(90) DEFAULT NULL,
  `Usuario_UsuarioID` int NOT NULL,
  PRIMARY KEY (`ObjetivoID`),
  KEY `fk_ObjetivoUsuario_Usuario1_idx` (`Usuario_UsuarioID`),
  CONSTRAINT `fk_ObjetivoUsuario_Usuario1` FOREIGN KEY (`Usuario_UsuarioID`) REFERENCES `usuario` (`UsuarioID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objetivousuario`
--

LOCK TABLES `objetivousuario` WRITE;
/*!40000 ALTER TABLE `objetivousuario` DISABLE KEYS */;
INSERT INTO `objetivousuario` VALUES (1,'Puta','2020-11-12 00:00:00','2020-11-20 00:00:00',200,'comer puta',1),(2,'Carro','2020-01-01 00:00:00','2020-01-01 00:00:00',100000,'Muito caro!',1),(3,'Casa','2020-01-01 00:00:00','2020-01-01 00:00:00',12,'Muito caro! ',1),(4,'Casa','2020-12-01 00:00:00','2021-02-10 00:00:00',200,'Fala ai Joe',1),(5,'Passa de Ano','2020-01-01 00:00:00','2020-12-31 00:00:00',100000,'teste',10),(6,'Carro','2020-01-01 00:00:00','2020-01-01 00:00:00',200,'vrum vrum ',11),(7,'Lancha','2020-01-01 00:00:00','2020-01-01 00:00:00',1000000000,'Sonho meu',11);
/*!40000 ALTER TABLE `objetivousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `UsuarioID` int NOT NULL AUTO_INCREMENT,
  `NomeUsuario` varchar(45) NOT NULL,
  `EmailUsuario` varchar(90) NOT NULL,
  `SenhaUsuario` varchar(45) NOT NULL,
  PRIMARY KEY (`UsuarioID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Teste Testudo','teste@teste.com','e10adc3949ba59abbe56e057f20f883e'),(2,'ze','ze@teste.com','e10adc3949ba59abbe56e057f20f883e'),(3,'ze','ze2@teste.com','e10adc3949ba59abbe56e057f20f883e'),(4,'ze','teste2@teste.com','e10adc3949ba59abbe56e057f20f883e'),(5,'ze','teste3@teste.com','e10adc3949ba59abbe56e057f20f883e'),(6,'teste','teste5@teste.com','827ccb0eea8a706c4c34a16891f84e7b'),(7,'ze','saude_ita@yahoo.com.br','e10adc3949ba59abbe56e057f20f883e'),(8,'ze','teste6@teste.com','e10adc3949ba59abbe56e057f20f883e'),(9,'ze','teste7@teste.com','e10adc3949ba59abbe56e057f20f883e'),(10,'Tatiane Ornelas','tati@teste.com.br','e10adc3949ba59abbe56e057f20f883e'),(11,'alguem','alguem@teste.com','e10adc3949ba59abbe56e057f20f883e');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_savemoney'
--

--
-- Dumping routines for database 'db_savemoney'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-04 19:57:46
