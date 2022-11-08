CREATE DATABASE  IF NOT EXISTS `beep_crms` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `beep_crms`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: beep_crms
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
-- Table structure for table `tbl_accepted_task`
--

DROP TABLE IF EXISTS `tbl_accepted_task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_accepted_task` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_uuid` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_id` int DEFAULT NULL,
  `distance` int DEFAULT NULL,
  `is_active` int DEFAULT NULL,
  `is_challenge` int DEFAULT NULL,
  `is_expired` int DEFAULT NULL,
  `is_completed` int DEFAULT NULL,
  `is_redeemed` int DEFAULT NULL,
  `is_archive` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_accepted_task`
--

LOCK TABLES `tbl_accepted_task` WRITE;
/*!40000 ALTER TABLE `tbl_accepted_task` DISABLE KEYS */;
INSERT INTO `tbl_accepted_task` VALUES (1,'0e68-26db-5413-4039',1,15,0,1,1,1,1,1);
/*!40000 ALTER TABLE `tbl_accepted_task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_brand`
--

DROP TABLE IF EXISTS `tbl_brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_brand` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_brand`
--

LOCK TABLES `tbl_brand` WRITE;
/*!40000 ALTER TABLE `tbl_brand` DISABLE KEYS */;
INSERT INTO `tbl_brand` VALUES (1,'No Brand');
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
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_category`
--

LOCK TABLES `tbl_category` WRITE;
/*!40000 ALTER TABLE `tbl_category` DISABLE KEYS */;
INSERT INTO `tbl_category` VALUES (1,'No Category');
/*!40000 ALTER TABLE `tbl_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cyclist`
--

DROP TABLE IF EXISTS `tbl_cyclist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_cyclist` (
  `id` int NOT NULL,
  `user_uuid` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cyclist`
--

LOCK TABLES `tbl_cyclist` WRITE;
/*!40000 ALTER TABLE `tbl_cyclist` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cyclist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_log`
--

DROP TABLE IF EXISTS `tbl_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_uuid` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_type` int DEFAULT NULL,
  `log_name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_description` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_date` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_time` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` int DEFAULT NULL,
  `is_archive` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_log`
--

LOCK TABLES `tbl_log` WRITE;
/*!40000 ALTER TABLE `tbl_log` DISABLE KEYS */;
INSERT INTO `tbl_log` VALUES (1,'0e68-26db-5413-4039',0,'Created new Task','CodexApple created a new task, detailed link: pedalbucks.gq?taskid','2022-10-01','14:00:36',1,1),(2,'0e68-26db-5413-4039',0,'Created new Task','CodexApple created a new task, detailed link: pedalbucks.gq?taskid','2022-10-01','14:01:03',1,1),(3,'0e68-26db-5413-4039',0,'Created new Task','CodexApple created a new task, detailed link: pedalbucks.gq?taskid','2022-10-01','14:01:22',1,1),(4,'0e68-26db-5413-4039',0,'Created new Task','CodexApple created a new task, detailed link: pedalbucks.gq?taskid','2022-11-08','12:57:14',1,1);
/*!40000 ALTER TABLE `tbl_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `is_archive` int DEFAULT NULL,
  `is_discount` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product`
--

LOCK TABLES `tbl_product` WRITE;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` VALUES (1,1,1,'Pancit Canton','Pancit Canton Calamansi Flavour',150,1,1);
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_profile`
--

DROP TABLE IF EXISTS `tbl_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_profile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_uuid` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middlename` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cellphone` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_archive` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_profile`
--

LOCK TABLES `tbl_profile` WRITE;
/*!40000 ALTER TABLE `tbl_profile` DISABLE KEYS */;
INSERT INTO `tbl_profile` VALUES (1,'0e68-26db-5413-4039','Kristofer Martin','Ramirez','Pillarina','123456789','09281642285','Sample Complete Address','11/14/2000',1);
/*!40000 ALTER TABLE `tbl_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_statistic`
--

DROP TABLE IF EXISTS `tbl_statistic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_statistic` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_uuid` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speed` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distance` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_statistic`
--

LOCK TABLES `tbl_statistic` WRITE;
/*!40000 ALTER TABLE `tbl_statistic` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_statistic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_task`
--

DROP TABLE IF EXISTS `tbl_task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_task` (
  `id` int NOT NULL AUTO_INCREMENT,
  `task_name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_description` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_distance` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_reward` int DEFAULT NULL,
  `is_challenge` int DEFAULT NULL,
  `is_expired` int DEFAULT NULL,
  `is_archive` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_task`
--

LOCK TABLES `tbl_task` WRITE;
/*!40000 ALTER TABLE `tbl_task` DISABLE KEYS */;
INSERT INTO `tbl_task` VALUES (1,'Cycle for 15M','Cycle for 15 meters to receive a reward.','15',10,1,1,1),(2,'Cycle for 5M','Cycle for 5 meters to receive a reward.','5',5,1,1,1),(3,'Cycle for 1M','Cycle for 1 meter to receive a reward.','1',5,1,1,1),(4,'Cycle for 20M','Cycle for 20 meters to receive a reward.','20',20,1,1,1);
/*!40000 ALTER TABLE `tbl_task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uuid` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datejoined` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` int DEFAULT NULL,
  `is_firstjoin` int DEFAULT NULL,
  `is_archive` int DEFAULT NULL,
  `is_banned` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,'0e68-26db-5413-4039','CodexApple','codexapple@pedalbucks.ml','$2y$10$JPQhX0sWcbPcWGF2GlGYYe0M6yPGrV3JpAao6upyLx00HRzw3PU9K','$2y$10$JPQhX0sWcbPcWGF2GlGYYe0M6yPGrV3JpAao6upyLx00HRzw3PU9K','2022-09-22 08:36:07',1,1,1,1),(2,'bfbd-5f68-6bb7-4cbf','MilkyTune','milktune@support.gg','$2y$10$Fs7wizJEr9K1JTDbUTvlIelrWod/45PGtDCg.xkb57rbVV7FdKnS2','$2y$10$Fs7wizJEr9K1JTDbUTvlIelrWod/45PGtDCg.xkb57rbVV7FdKnS2','2022-09-28 12:59:52',1,1,1,1),(3,'108c-3e44-48af-405d','GhostedBerry','ghostedberry@support.gg','$2y$10$4iBDdOTAjsxYrE8TJWe9muDZLGgroK3DOLFRCBu6NVGIMsYRxlhIi','$2y$10$4iBDdOTAjsxYrE8TJWe9muDZLGgroK3DOLFRCBu6NVGIMsYRxlhIi','2022-09-28 13:00:09',1,1,1,1),(4,'8af5-4bff-a082-4409','Ghostly','ghostly@pedalbucks.ml','$2y$10$jFHFEwA5jHKACIhflSNgp.9OSFXQpTqrXYz3Q8bUR9cPwhN39gcCO','$2y$10$jFHFEwA5jHKACIhflSNgp.9OSFXQpTqrXYz3Q8bUR9cPwhN39gcCO','2022-09-28 13:22:42',1,1,1,1),(5,'b712-e9a8-b213-40d3','BananaApple','bananaapple@pedalbucks.gg','$2y$10$o7vC.uiy1j8tG4k8nYp38.jO1EexLulmWY30YLUE1qKHgJOcPMeLm','$2y$10$o7vC.uiy1j8tG4k8nYp38.jO1EexLulmWY30YLUE1qKHgJOcPMeLm','2022-09-28 13:26:43',1,1,1,1),(6,'5f57-7f10-ea46-4b0c','HuebertBanana','huebertbanana@support.gg','$2y$10$L4Sa2dQ5o.xM71/QDNXMte8KjgluobNprA5VK04PQEiPyz4QW7312','$2y$10$L4Sa2dQ5o.xM71/QDNXMte8KjgluobNprA5VK04PQEiPyz4QW7312','2022-10-03 09:48:35',NULL,1,1,1),(7,'f196-a529-39f9-441f','MilkyTune','milkytune@elk.support.gg','$2y$10$Zmt0M2eiA/DN1eiyyB35z.ACw3hlBLULMwgQE4hbU8.rJREyaiNnG','$2y$10$Zmt0M2eiA/DN1eiyyB35z.ACw3hlBLULMwgQE4hbU8.rJREyaiNnG','2022-10-18 12:40:50',NULL,1,1,1),(8,'7c30-d7a9-9142-40c3','MilkyTune','milkytune@elk.support.gg','$2y$10$2rsLjQRiapa8JVg384HGPejlAQgsaAfCVCuu1OMDCXQtkD6UHcDaq','$2y$10$2rsLjQRiapa8JVg384HGPejlAQgsaAfCVCuu1OMDCXQtkD6UHcDaq','2022-10-18 12:41:02',NULL,1,1,1),(9,'7c8f-2341-e13e-4009','MilkyTune','milkytune@elk.support.gg','$2y$10$uYWgV1lGI0.4xmLgSzggNeHU/XDsNExcS6xEPzypRDEXLmI9DQA/i','$2y$10$uYWgV1lGI0.4xmLgSzggNeHU/XDsNExcS6xEPzypRDEXLmI9DQA/i','2022-10-18 12:41:28',NULL,1,1,1),(10,'0ffa-2cab-4758-4a4c','MilkyTune1','milkytune1@elk.support.gg','$2y$10$nl/eajkGJ3fFHg9WnTV3x.MuQOPx95NVtETjF/2bA/sV5XTT7ygaC','$2y$10$nl/eajkGJ3fFHg9WnTV3x.MuQOPx95NVtETjF/2bA/sV5XTT7ygaC','2022-10-26 11:51:19',NULL,1,1,1),(11,'8a65-02a0-e192-4295','MilkyTune2','milkytune2@elk.support.gg','$2y$10$jgW.SG00yPQLe4xW.Ws3GOfHd5mlHb.6ARF9FwC4WmZpYqwoCgjvi','$2y$10$jgW.SG00yPQLe4xW.Ws3GOfHd5mlHb.6ARF9FwC4WmZpYqwoCgjvi','2022-10-26 11:57:21',NULL,1,1,1);
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-08 20:45:30
