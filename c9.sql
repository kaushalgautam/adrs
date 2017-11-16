-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: c9
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Table structure for table `admin_credentials`
--

DROP TABLE IF EXISTS `admin_credentials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_credentials` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_credentials`
--

LOCK TABLES `admin_credentials` WRITE;
/*!40000 ALTER TABLE `admin_credentials` DISABLE KEYS */;
INSERT INTO `admin_credentials` VALUES (1,'admin','password');
/*!40000 ALTER TABLE `admin_credentials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumni_credentials`
--

DROP TABLE IF EXISTS `alumni_credentials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumni_credentials` (
  `alumni_id` int(11) NOT NULL AUTO_INCREMENT,
  `alumni_roll` varchar(12) NOT NULL,
  `alumni_name` varchar(30) NOT NULL,
  `alumni_password` varchar(20) NOT NULL,
  `alumni_phone` bigint(20) NOT NULL,
  `alumni_email` varchar(50) NOT NULL,
  `alumni_school` varchar(3) NOT NULL,
  `alumni_dept` varchar(20) NOT NULL,
  `alumni_program` varchar(20) NOT NULL,
  `alumni_batch` smallint(6) NOT NULL,
  PRIMARY KEY (`alumni_id`),
  UNIQUE KEY `alumni_roll` (`alumni_roll`),
  UNIQUE KEY `alumni_email` (`alumni_email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumni_credentials`
--

LOCK TABLES `alumni_credentials` WRITE;
/*!40000 ALTER TABLE `alumni_credentials` DISABLE KEYS */;
INSERT INTO `alumni_credentials` VALUES (1,'ET14BT0154','Kaushal','hello',7002383717,'kaushal.gautam@kazirangauniversity.in','SET','CSE','BTECH',2014),(2,'ET13BT0147','Viki','',123456,'viki@ku.in','SET','CSE','BTECH',2014),(6,'asd','asd','asd',123,'asd','asd','asd','asd',2014);
/*!40000 ALTER TABLE `alumni_credentials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requester`
--

DROP TABLE IF EXISTS `requester`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requester` (
  `alumni_id` int(11) NOT NULL AUTO_INCREMENT,
  `alumni_roll` varchar(12) NOT NULL,
  `alumni_name` varchar(30) NOT NULL,
  `alumni_password` varchar(20) NOT NULL,
  `alumni_phone` bigint(20) NOT NULL,
  `alumni_email` varchar(50) NOT NULL,
  `alumni_school` varchar(3) NOT NULL,
  `alumni_dept` varchar(20) NOT NULL,
  `alumni_program` varchar(20) NOT NULL,
  `alumni_batch` smallint(6) NOT NULL,
  PRIMARY KEY (`alumni_id`),
  UNIQUE KEY `alumni_roll` (`alumni_roll`,`alumni_email`),
  UNIQUE KEY `alumni_roll_2` (`alumni_roll`),
  UNIQUE KEY `alumni_email` (`alumni_email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requester`
--

LOCK TABLES `requester` WRITE;
/*!40000 ALTER TABLE `requester` DISABLE KEYS */;
/*!40000 ALTER TABLE `requester` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-16  7:52:44
