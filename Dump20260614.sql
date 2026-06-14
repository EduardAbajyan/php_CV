CREATE DATABASE  IF NOT EXISTS `portfolio_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `portfolio_db`;
-- MySQL dump 10.13  Distrib 8.0.41, for macos15 (arm64)
--
-- Host: 127.0.0.1    Database: portfolio_db
-- ------------------------------------------------------
-- Server version	9.5.0

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
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;

--
-- GTID state at the beginning of the backup 
--


--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('unread','read','replied') COLLATE utf8mb4_unicode_ci DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idx_status` (`status`),
  KEY `idx_created_at` (`created_at`),
  KEY `idx_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_messages`
--

LOCK TABLES `contact_messages` WRITE;
/*!40000 ALTER TABLE `contact_messages` DISABLE KEYS */;
INSERT INTO `contact_messages` VALUES (1,'John Doe','john@example.com','Project Inquiry','My Project ...','127.0.0.1','unread','2025-12-07 19:38:24','2025-12-07 19:38:24'),(2,'John Doe','john@example.com','Project Inquiry','My Project ...','127.0.0.1','unread','2025-12-07 19:39:59','2025-12-07 19:39:59'),(3,'John Doe','john@example.com','Project Inquiry','My Project ...','127.0.0.1','unread','2025-12-07 19:48:46','2025-12-07 19:48:46'),(4,'edaurd','adminmail@gmail.com','123',',hgfk ygfkg fkgf','127.0.0.1','unread','2025-12-07 19:51:59','2025-12-07 19:51:59'),(5,'edaurd','adminmail@gmail.com','Project Inquiry','sdf gsdgsdfg sdf gsdfg','127.0.0.1','unread','2025-12-07 19:55:38','2025-12-07 19:55:38'),(6,'edaurd','adminmail@gmail.com','Project Inquiry','zfd fdg dsf gd gzdfg','127.0.0.1','unread','2025-12-07 19:56:04','2025-12-07 19:56:04'),(7,'edaurd','adminmail@gmail.com','asdf adsf','asd fads fads fa fads','127.0.0.1','unread','2025-12-07 19:59:26','2025-12-07 19:59:26'),(8,'zdlfh lj','admin@admin.admin','Project Inquiry','ad adsf adsf asdf asdf','127.0.0.1','unread','2025-12-07 20:00:11','2025-12-07 20:00:11'),(9,'edaurd','edwardabajyan@gmail.com','Project Inquiry','asf adf adf adf','127.0.0.1','unread','2025-12-07 21:18:48','2025-12-07 21:18:48'),(10,'afdv adfv','sf@adfjn.afg','afdg adage','add gif gaffe afdg adage','127.0.0.1','unread','2025-12-09 16:27:27','2025-12-09 16:27:27'),(11,'fgg@aadf.asdf','adfgg@aadf.asdf','asdfsad asdf','off kasdjhf lasjdkfh laskjhf laksjdfh','127.0.0.1','unread','2025-12-12 13:24:47','2025-12-12 13:24:47');
/*!40000 ALTER TABLE `contact_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_settings`
--

DROP TABLE IF EXISTS `contact_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setting_value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting_key` (`setting_key`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_settings`
--

LOCK TABLES `contact_settings` WRITE;
/*!40000 ALTER TABLE `contact_settings` DISABLE KEYS */;
INSERT INTO `contact_settings` VALUES (1,'admin_email','your.email@example.com','2025-12-07 19:08:31','2025-12-07 19:08:31'),(2,'email_notifications','1','2025-12-07 19:08:31','2025-12-07 19:08:31'),(3,'response_time','24 hours','2025-12-07 19:08:31','2025-12-07 19:08:31');
/*!40000 ALTER TABLE `contact_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `education_list`
--

DROP TABLE IF EXISTS `education_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `education_list` (
  `id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `platform_type` enum('bacherol','book','master','udemy','mosh') NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `platform_name` varchar(255) NOT NULL,
  `starting_year` year NOT NULL,
  `ending_year` year NOT NULL,
  `link` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education_list`
--

LOCK TABLES `education_list` WRITE;
/*!40000 ALTER TABLE `education_list` DISABLE KEYS */;
INSERT INTO `education_list` VALUES (1,'bacherol','Aplied Mathematics and Informatics','Yerevan State University',2015,2020,'YSU'),(2,'mosh','Complete SQL Mastery','CodeWithMosh',2022,2022,'SQLCertificate'),(3,'mosh','Ultimate JavaScript','CodeWithMosh',2022,2022,'JavaScript1,JavaScript2'),(4,'mosh','The Ultimate Git Course','CodeWithMosh',2022,2022,'GIT'),(5,'book','Javascript: The Definitive Guide','O\'Reily, author David Flanagan',2023,2023,'JSBook'),(6,'book','Cryptography: An Introduction(3rd Edition)','author Nigel Smart',2023,2024,'CryptographyBook'),(7,'udemy','The Complete Full-Stack Web Development Bootcamp','Udemy',2025,2025,'FullStackWebDev'),(8,'udemy','Become a PHP Master - CMS Project','Udemy',2025,2025,'PHPCertificate'),(9,'mosh','The Ultimate Docker Course','CodeWithMosh',2025,2025,'Docker'),(10,'mosh','The Ultimate TypeScript Course','CodeWithMosh',2025,2025,'TypeScript');
/*!40000 ALTER TABLE `education_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills_list`
--

DROP TABLE IF EXISTS `skills_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skills_list` (
  `id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `category` enum('Technical Skills','Programming Languages and Frameworks','Languages','Working Style','Additional Experiance') NOT NULL,
  `header` varchar(255) NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `description_text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills_list`
--

LOCK TABLES `skills_list` WRITE;
/*!40000 ALTER TABLE `skills_list` DISABLE KEYS */;
INSERT INTO `skills_list` VALUES (1,'Technical Skills','Frontend Development','frontend','I create the part of a website or application that people actually see and use. This includes the design, buttons, animations, and overall experience. My goal is to make everything look clean, feel smooth, and be easy for anyone to navigate — whether they\'re on a phone, tablet, or computer.'),(2,'Technical Skills','Backend Development','backend','I build the \'behind the scenes\' part of a website or app — the part that handles user accounts, saves information, processes actions, and makes everything work reliably. It’s like creating the engine of a car: you don’t see it, but it’s what keeps everything running smoothly.'),(3,'Technical Skills','Database Structuring','db','I organize information in a clear and efficient way so that it can be easily stored, found, and used when needed. Think of it as designing a well-arranged digital library where every piece of data has its place and can be accessed quickly and safely.'),(4,'Technical Skills','Web 3.0 Development','web3','I work with modern internet technologies that give users more control over their data and allow applications to run without a central company behind them. This includes creating systems where information is stored securely and transparently, similar to how digital ownership works.'),(5,'Programming Languages and Frameworks','HTML5 & CSS','html','Crafting semantic layouts and visually consistent designs with responsive styling and component-based structure.'),(6,'Programming Languages and Frameworks','JavaScrip','JS','Building interactive, dynamic, and optimized web functionality using modern JavaScript and TypeScript.'),(7,'Programming Languages and Frameworks','React','react','Developing fast, reusable UI components and server-rendered pages with React and Next.js for optimized performance and SEO-friendly web applications.'),(9,'Programming Languages and Frameworks','Node','node','Implementing backend APIs, business logic, and services using Node.js and Express for scalable, efficient, and reliable server-side applications.'),(10,'Programming Languages and Frameworks','PHP','php','Creating dynamic server-side applications, backend logic, and database interactions with PHP.'),(11,'Programming Languages and Frameworks','Motoko Language','motoko','Building secure and efficient Internet Computer canisters using Motoko’s actor-based architecture.'),(12,'Programming Languages and Frameworks','Relational DB','sql','Designing structured data models and writing optimized queries for MySQL/PostgreSQL environments.'),(13,'Programming Languages and Frameworks','Mongo DB','mongo','Working with flexible document-oriented databases to handle unstructured and evolving data.'),(14,'Languages','English','eng','Professional working proficiency in reading, writing, and clear communication.'),(15,'Languages','Armenian','arm','Native-level fluency with excellent written and verbal communication.'),(16,'Languages','Russian','ru','Fluent enough to understand Russian shows… and even argue with them!'),(17,'Working Style','Pattern recognition and systematic thinking','pattern','Quickly identifying structures, patterns, and relationships to create organized, logical solutions.'),(18,'Working Style','Deep focus and attention to detail','deepFocus','Maintaining long periods of concentration and delivering work with accuracy and precision.'),(19,'Working Style','Logical problem-solving','logics','Breaking complex problems into smaller parts and solving them through analytical reasoning.'),(20,'Working Style','Honest and direct communication','honesty','Communicating clearly and transparently for efficient teamwork and improved project outcomes.'),(21,'Working Style','Analytical thinking','analitical','Evaluating issues objectively and making decisions based on data, logic, and structured evaluation.'),(22,'Additional Experiance','Piano','piano','Years of experience in piano playing, contributing to discipline, creativity, and fine motor skills.'),(23,'Additional Experiance','Military Service','military','Discipline, teamwork, responsibility, and resilience developed through service experience.'),(24,'Additional Experiance','Sport','sport','Maintaining physical and mental performance through consistent training and competitive discipline.');
/*!40000 ALTER TABLE `skills_list` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-14 20:47:10
