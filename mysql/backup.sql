-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: 172.25.0.3    Database: bitnami_app
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.34-MariaDB

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
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `businessName` varchar(255) DEFAULT NULL,
  `type` varchar(11) NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lng` decimal(10,8) NOT NULL,
  `website` varchar(255) NOT NULL,
  `phone` varchar(21) NOT NULL,
  `id_truck` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Centidel','hot dogs',30.25383739,-97.73483555,'https://github.com','(512) 347-1192',NULL),(2,'Centidel','hot dogs',30.25383739,-97.73483555,'https://github.com','(512) 347-1192',NULL),(3,'Minyx','hot dogs',30.24157522,-97.82114169,'https://cafepress.com','(512) 756-6248',NULL),(4,'Fiveclub','tacos',30.29228230,-97.73821851,'https://ask.com','(512) 453-1884',NULL),(5,'Fatz','tacos',30.23240902,-97.76174995,'http://census.gov','(512) 617-0161',NULL),(6,'Topicware','chimichanga',30.29338459,-97.75321357,'http://twitpic.com','(512) 430-5024',NULL),(7,'Jamia','hot dogs',30.21963253,-97.78885376,'https://si.edu','(512) 849-6907',NULL),(8,'Feedfire','burgers',30.25716494,-97.71953618,'https://icq.com','(512) 925-4776',NULL),(9,'Buzzdog','burgers',30.25001350,-97.78131003,'http://psu.edu','(512) 190-7934',NULL),(10,'Jetwire','hot dogs',30.26607818,-97.79197080,'http://typepad.com','(512) 222-8732',NULL),(11,'Roomm','hot dogs',30.22568625,-97.76627272,'https://icq.com','(512) 418-1953',NULL),(12,'Eimbee','tacos',30.22260960,-97.72635061,'https://mashable.com','(512) 965-6711',NULL),(13,'Flipopia','gumbo',30.20059711,-97.74873919,'http://aol.com','(512) 240-9209',NULL),(14,'Yombu','burgers',30.22629280,-97.80151610,'http://china.com.cn','(512) 345-6913',NULL),(15,'Centimia','chimichanga',30.27411709,-97.79465299,'http://printfriendly.com','(512) 252-2885',NULL),(16,'Photolist','tacos',30.28813055,-97.72902043,'http://weibo.com','(512) 141-0028',NULL),(17,'Shufflester','burgers',30.28477082,-97.74472418,'https://myspace.com','(512) 973-6139',NULL),(18,'Photolist','chimichanga',30.20096524,-97.77928556,'http://bbb.org','(512) 997-4762',NULL);
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-19 11:00:48
