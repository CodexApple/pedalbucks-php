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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_accepted_task`
--

LOCK TABLES `tbl_accepted_task` WRITE;
/*!40000 ALTER TABLE `tbl_accepted_task` DISABLE KEYS */;
INSERT INTO `tbl_accepted_task` VALUES (1,'6a44-4131-4bba-47dc',2,32,0,0,0,1,1,1),(2,'6a44-4131-4bba-47dc',1,22,0,0,0,1,1,1);
/*!40000 ALTER TABLE `tbl_accepted_task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_advertisement`
--

DROP TABLE IF EXISTS `tbl_advertisement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_advertisement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_ad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_advertisement`
--

LOCK TABLES `tbl_advertisement` WRITE;
/*!40000 ALTER TABLE `tbl_advertisement` DISABLE KEYS */;
INSERT INTO `tbl_advertisement` VALUES (1,'Pancit Canton','Lucky Me!','Lucky Me Pancit Canton!',' '),(2,'100peso Nitro Code','Otakunity','Get a Nitro Code with a load of 100 pesos','https://cdn.discordapp.com/attachments/1001090233326112798/1028359385250021469/julie.png'),(3,'Nitro Code','Otakunity','Get a Nitro Code with a load of 500 pesos','https://cdn.discordapp.com/attachments/1001090233326112798/1028359385250021469/julie.png'),(4,'Nitro Code','Otakunity','Get a Nitro Code with a load of 200 pesos','https://cdn.discordapp.com/attachments/1001090233326112798/1028359385250021469/julie.png');
/*!40000 ALTER TABLE `tbl_advertisement` ENABLE KEYS */;
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
-- Table structure for table `tbl_economy`
--

DROP TABLE IF EXISTS `tbl_economy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_economy` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_uuid` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_points` int DEFAULT NULL,
  `is_archive` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_economy`
--

LOCK TABLES `tbl_economy` WRITE;
/*!40000 ALTER TABLE `tbl_economy` DISABLE KEYS */;
INSERT INTO `tbl_economy` VALUES (1,'6a44-4131-4bba-47dc',703,1),(2,'2d16-a447-2eb2-4eef',0,1);
/*!40000 ALTER TABLE `tbl_economy` ENABLE KEYS */;
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
INSERT INTO `tbl_log` VALUES (1,'bda0-ef3b-dfa5-4bca',0,'Created new Task','CodexApple created a new task, detailed link: pedalbucks.gq?taskid','2022-11-14','06:02:20',1,1),(2,'bda0-ef3b-dfa5-4bca',0,'Created new Task','CodexApple created a new task, detailed link: pedalbucks.gq?taskid','2022-11-17','06:26:48',1,1),(3,'bda0-ef3b-dfa5-4bca',0,'Created new Task','CodexApple created a new task, detailed link: pedalbucks.gq?taskid','2022-11-24','11:49:54',1,1),(4,'6a44-4131-4bba-47dc',0,'Added a new Product','pedalbucks added a new product, detailed link: pedalbucks.gq?pid=','2022-12-12','19:12:04',1,1);
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
  `image` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `current_claim` int DEFAULT NULL,
  `max_claim` int DEFAULT NULL,
  `is_archive` int DEFAULT NULL,
  `is_discount` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product`
--

LOCK TABLES `tbl_product` WRITE;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` VALUES (1,1,1,'Julie\'s Bakeshop Cheesy Ensaimada','https://cdn.discordapp.com/attachments/1001090233326112798/1028359385250021469/julie.png','Claim this voucher for one (1) free Julie\'s Cheesy Ensaimada',250,10,11,0,0),(2,1,1,'Julie\'s Bakeshop Cheesy Ensaimada','https://cdn.discordapp.com/attachments/1001090233326112798/1028359385250021469/julie.png','Claim this voucher for one (1) free Julie\'s Cheesy Ensaimada',250,0,10,0,0);
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
  `type_choice` int DEFAULT NULL,
  `distance_goal` int DEFAULT NULL,
  `height` int DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `calories` int DEFAULT NULL,
  `is_archive` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_profile`
--

LOCK TABLES `tbl_profile` WRITE;
/*!40000 ALTER TABLE `tbl_profile` DISABLE KEYS */;
INSERT INTO `tbl_profile` VALUES (2,'6a44-4131-4bba-47dc','Pedal','','Bucks','','09154217926','somewhere','2022-12-4',3,5,180,60,500,0),(3,'2d16-a447-2eb2-4eef','Test','','Tester','','09154217926','somewhere','2022-12-12',3,1,160,60,500,0);
/*!40000 ALTER TABLE `tbl_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_redeem`
--

DROP TABLE IF EXISTS `tbl_redeem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_redeem` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_uuid` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `product_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_used` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_redeem`
--

LOCK TABLES `tbl_redeem` WRITE;
/*!40000 ALTER TABLE `tbl_redeem` DISABLE KEYS */;
INSERT INTO `tbl_redeem` VALUES (1,'6a44-4131-4bba-47dc',1,'81d2be38',0),(2,'6a44-4131-4bba-47dc',1,'abf9ecfb',0),(3,'6a44-4131-4bba-47dc',1,'b55f3a13',0),(4,'6a44-4131-4bba-47dc',1,'56d0a613',0),(5,'6a44-4131-4bba-47dc',1,'db664d35',0),(6,'6a44-4131-4bba-47dc',1,'656336eb',0),(7,'6a44-4131-4bba-47dc',1,'cbbbcf1f',0),(8,'6a44-4131-4bba-47dc',1,'dd77a1a1',0),(9,'6a44-4131-4bba-47dc',1,'05c7e7aa',0),(10,'6a44-4131-4bba-47dc',1,'b40da288',0);
/*!40000 ALTER TABLE `tbl_redeem` ENABLE KEYS */;
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
  `datetime` bigint DEFAULT NULL,
  `duration` bigint DEFAULT NULL,
  `speed` float DEFAULT NULL,
  `distance` int DEFAULT NULL,
  `calories` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_statistic`
--

LOCK TABLES `tbl_statistic` WRITE;
/*!40000 ALTER TABLE `tbl_statistic` DISABLE KEYS */;
INSERT INTO `tbl_statistic` VALUES (1,'6a44-4131-4bba-47dc',1670407020654,0,2,300,200),(2,'6a44-4131-4bba-47dc',1670504618889,0,0.0506814,2,5),(3,'6a44-4131-4bba-47dc',1670585049663,0,0.417308,4,1),(4,'6a44-4131-4bba-47dc',1670585540591,0,0.506623,5,1),(7,'6a44-4131-4bba-47dc',1670829645174,300,2,300,200),(8,'bda0-ef3b-dfa5-4bca',1670830221240,243,2,300,200),(9,'6a44-4131-4bba-47dc',1670832727312,78,0.303704,21,9),(10,'6a44-4131-4bba-47dc',1670834787938,89,0.268602,23,11);
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
  `task_difficulty` int DEFAULT NULL,
  `task_reward` int DEFAULT NULL,
  `is_challenge` int DEFAULT NULL,
  `is_expired` int DEFAULT NULL,
  `is_archive` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_task`
--

LOCK TABLES `tbl_task` WRITE;
/*!40000 ALTER TABLE `tbl_task` DISABLE KEYS */;
INSERT INTO `tbl_task` VALUES (1,'Cycle for 20M','Cycle for 20 meters to receive a reward.','20',1,100,1,0,0),(2,'Cycle for 15M','Cycle for 15 meters to receive a reward.','15',1,100,1,0,0),(3,'Cycle for 30M','Cycle for 30 meters to receive a reward.','30',2,150,0,0,0);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (2,'2d16-a447-2eb2-4eef','testtester','tester@test.com','$2y$10$Y94wnj/B76n3g.UcwEyJq.ek4uR.W2K34QhKgY.H74ajucIKGGnXu','$2y$10$Y94wnj/B76n3g.UcwEyJq.ek4uR.W2K34QhKgY.H74ajucIKGGnXu','2022-11-20 11:05:03',1,0,0,0),(3,'6a44-4131-4bba-47dc','pedalbucks','pedalbucks@pedalbucks.com','$2y$10$9swtcPjJOcP/5GO43oyXEudoW7mvDr5595ELvePgb59OPFPGsBaVi','$2y$10$9swtcPjJOcP/5GO43oyXEudoW7mvDr5595ELvePgb59OPFPGsBaVi','2022-12-04 10:32:51',1,0,0,0);
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

-- Dump completed on 2022-12-13  2:53:56
