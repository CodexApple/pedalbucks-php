CREATE DATABASE  IF NOT EXISTS `pedalbucks` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pedalbucks`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: pedalbucks
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `tbl_brand`
--

DROP TABLE IF EXISTS `tbl_brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_brand` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brandName` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_brand`
--

LOCK TABLES `tbl_brand` WRITE;
/*!40000 ALTER TABLE `tbl_brand` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brandName` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_category`
--

LOCK TABLES `tbl_category` WRITE;
/*!40000 ALTER TABLE `tbl_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cycledata`
--

DROP TABLE IF EXISTS `tbl_cycledata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_cycledata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userUUID` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataDistance` int DEFAULT NULL,
  `dataCalories` int DEFAULT NULL,
  `dataSpeed` float DEFAULT NULL,
  `createdAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cycledata`
--

LOCK TABLES `tbl_cycledata` WRITE;
/*!40000 ALTER TABLE `tbl_cycledata` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cycledata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cycleinfo`
--

DROP TABLE IF EXISTS `tbl_cycleinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_cycleinfo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userUUID` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cycleChoice` int DEFAULT NULL,
  `userHeight` float DEFAULT NULL,
  `userWeight` float DEFAULT NULL,
  `targetDistance` int DEFAULT NULL,
  `targetCarlories` int DEFAULT NULL,
  `createdAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cycleinfo`
--

LOCK TABLES `tbl_cycleinfo` WRITE;
/*!40000 ALTER TABLE `tbl_cycleinfo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cycleinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brandId` int DEFAULT NULL,
  `categoryId` int DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coinPoints` int DEFAULT NULL,
  `createdAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product`
--

LOCK TABLES `tbl_product` WRITE;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_system`
--

DROP TABLE IF EXISTS `tbl_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_system` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codeLevel` int DEFAULT NULL,
  `codeAction` int DEFAULT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_system`
--

LOCK TABLES `tbl_system` WRITE;
/*!40000 ALTER TABLE `tbl_system` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_task`
--

DROP TABLE IF EXISTS `tbl_task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_task` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taskDistance` int DEFAULT NULL,
  `taskDifficulty` int DEFAULT NULL,
  `taskReward` int DEFAULT NULL,
  `isChallenge` int DEFAULT NULL,
  `createdAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_task`
--

LOCK TABLES `tbl_task` WRITE;
/*!40000 ALTER TABLE `tbl_task` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_taskaccept`
--

DROP TABLE IF EXISTS `tbl_taskaccept`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_taskaccept` (
  `id` int NOT NULL AUTO_INCREMENT,
  `taskId` int DEFAULT NULL,
  `userUUID` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currentDistance` int DEFAULT NULL,
  `isActive` int DEFAULT NULL,
  `isRedeemed` int DEFAULT NULL,
  `expiredAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_taskaccept`
--

LOCK TABLES `tbl_taskaccept` WRITE;
/*!40000 ALTER TABLE `tbl_taskaccept` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_taskaccept` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uuid` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oldPassword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userType` int DEFAULT NULL,
  `createdAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_userinventory`
--

DROP TABLE IF EXISTS `tbl_userinventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_userinventory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userUUID` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productId` int DEFAULT NULL,
  `productCode` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isUsed` int DEFAULT NULL,
  `expiredAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_userinventory`
--

LOCK TABLES `tbl_userinventory` WRITE;
/*!40000 ALTER TABLE `tbl_userinventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_userinventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_userprofile`
--

DROP TABLE IF EXISTS `tbl_userprofile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_userprofile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userUUID` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstName` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middleName` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeAddress` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cellphone` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_userprofile`
--

LOCK TABLES `tbl_userprofile` WRITE;
/*!40000 ALTER TABLE `tbl_userprofile` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_userprofile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_userwallet`
--

DROP TABLE IF EXISTS `tbl_userwallet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_userwallet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userUUID` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userPoints` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updatedAt` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_userwallet`
--

LOCK TABLES `tbl_userwallet` WRITE;
/*!40000 ALTER TABLE `tbl_userwallet` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_userwallet` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-29 21:14:15
