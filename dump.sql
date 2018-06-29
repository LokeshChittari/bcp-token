-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: enaira
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_of_updation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `coin_type` enum('b','e','l') NOT NULL,
  `public` varchar(255) NOT NULL,
  `private` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` VALUES (1,1,'0x926af4627e42D07038C8Cc29a9123C7f00Df7Ac9','2018-02-01 09:04:59','2018-02-16 09:41:02','e','',''),(12,11,'0x81888682285191ff773c0f5a35241fd2f9b9c42d','2018-02-06 18:34:07','2018-02-06 18:34:07','e','',''),(13,12,'0x684d8f5ac15a39ab49baf71ba82188ab33d0ae28','2018-02-06 18:36:25','2018-02-06 18:36:25','e','',''),(14,13,'0x11510267a79708492becb4d507b2a1c61a607da5','2018-02-06 18:42:11','2018-02-06 18:42:11','e','',''),(15,14,'0x78aa48e211848bbeabcb1a4a530247b545f5eb2e','2018-02-11 01:14:14','2018-02-11 01:14:14','e','',''),(16,15,'0x97ac7652f188c66f419c32ef3b985848103e0972','2018-02-12 18:44:24','2018-02-12 18:44:24','e','',''),(17,16,'0x705ab677e073209291a8748fbdc81c553ea5da60','2018-02-16 12:12:17','2018-02-16 12:12:17','e','',''),(18,17,'0xd62895d46862e663ce7a4b9d78c70ad855075ffd','2018-02-16 16:25:18','2018-02-16 17:01:51','e','',''),(21,0,'','2018-02-17 20:44:06','2018-02-17 20:44:06','e','',''),(22,0,'','2018-02-18 10:19:58','2018-02-18 10:19:58','e','',''),(23,22,'','2018-02-18 10:24:41','2018-02-18 10:24:41','e','',''),(24,23,'','2018-02-18 10:57:56','2018-02-18 10:57:56','e','',''),(25,24,'','2018-02-18 11:17:57','2018-02-18 11:17:57','e','',''),(26,25,'0xe67e4b19720dfa3e96fae04c14e19cb13c0d3738','2018-02-18 11:22:07','2018-02-18 11:22:07','e','',''),(27,26,'0xc69b62b540e5007dde25b0575ba2c3e5f5042ba8','2018-02-18 17:03:12','2018-02-18 17:03:12','e','',''),(28,27,'0xd8516fef394bc888b32fc3488aa08d8d5ce80f7b','2018-02-18 18:33:07','2018-02-18 18:33:07','e','',''),(29,28,'','2018-02-18 18:46:57','2018-02-18 18:46:57','e','',''),(30,29,'','2018-02-18 18:49:59','2018-02-18 18:49:59','e','',''),(31,30,'0xf55f43f16d5dbb42d80e813fab339145db179b7d','2018-02-18 19:01:10','2018-02-18 19:01:10','e','',''),(32,31,'','2018-02-18 19:10:47','2018-02-18 19:10:47','e','',''),(33,32,'','2018-02-18 19:16:55','2018-02-18 19:16:55','e','',''),(34,33,'0x4ae3f65a2e5c8fafa156d7e7643d226c2df2ca22','2018-02-18 19:18:48','2018-02-18 19:18:48','e','',''),(35,34,'0xbdddf85f190639bc06ff666ff4dda8a55df5b28c','2018-02-18 19:25:06','2018-02-18 19:25:06','e','',''),(36,35,'0x25743aebdb76ca6b25edf69b19ebf0eacb7997e2','2018-02-18 19:28:21','2018-02-18 19:28:21','e','',''),(37,36,'0x178618a1b0e9570eb97a113ab8458a0b51cf572d','2018-02-18 21:07:34','2018-02-18 21:07:34','e','','');
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','466dbedf95000da7195b8a6bc475c17e15df64ab41aaa745c5f54cdeee89a2e9','2017-11-25 10:48:06');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_address`
--

DROP TABLE IF EXISTS `admin_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_address` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `address` varchar(250) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `password` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_address`
--

LOCK TABLES `admin_address` WRITE;
/*!40000 ALTER TABLE `admin_address` DISABLE KEYS */;
INSERT INTO `admin_address` VALUES (10,'0x25743aebdb76ca6b25edf69b19ebf0eacb7997e2',35,'1234567890');
/*!40000 ALTER TABLE `admin_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coin_value`
--

DROP TABLE IF EXISTS `coin_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coin_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` float(15,6) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coin_value`
--

LOCK TABLES `coin_value` WRITE;
/*!40000 ALTER TABLE `coin_value` DISABLE KEYS */;
INSERT INTO `coin_value` VALUES (1,11787.500000,'btc','2017-12-05 10:57:14'),(2,467.221985,'eth','2017-12-05 10:57:14'),(3,321.721008,'ltc','2017-12-05 10:57:14');
/*!40000 ALTER TABLE `coin_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deposit`
--

DROP TABLE IF EXISTS `deposit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deposit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address_id` int(11) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_of_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `coin_type` enum('b','e','l') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deposit`
--

LOCK TABLES `deposit` WRITE;
/*!40000 ALTER TABLE `deposit` DISABLE KEYS */;
/*!40000 ALTER TABLE `deposit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eth_transaction`
--

DROP TABLE IF EXISTS `eth_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eth_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amt` varchar(50) NOT NULL,
  `txn_hash` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `transaction_completed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eth_transaction`
--

LOCK TABLES `eth_transaction` WRITE;
/*!40000 ALTER TABLE `eth_transaction` DISABLE KEYS */;
INSERT INTO `eth_transaction` VALUES (1,'0x81888682285191ff773c0f5a35241fd2f9b9c42d',1,'0.02','0x660a4556fad682404b21e6dc39e0745c47abd8c614bdf6107216b4be216338d5','2018-02-06 18:37:50',1),(2,'0x684d8f5ac15a39ab49baf71ba82188ab33d0ae28',1,'0.02','0xa24da93f1eee5c6369ad162279608b22b85cc55bc8a4ac28ded4280955371bf1','2018-02-06 18:52:51',1),(3,'0xCe1BeF83D3E7f8D11d054EFbcBC483789d780a5B',11,'0.019','0xc008236439ee85acb180cbc4ba3d4a87e035e9b3b00ae8085887b560647223ff','2018-02-16 16:29:08',1),(4,'0x25743aebdb76ca6b25edf69b19ebf0eacb7997e2',1,'0.005','0x6473b92bf944b4b838dcc40bd3403d83aee2c1dc0a21051750e8a5e7f3e8b366','2018-02-18 20:22:22',1),(5,'0x926af4627e42D07038C8Cc29a9123C7f00Df7Ac9',35,'0.0034','0x7f20494a20a24e69913c77ac224277577f1c88a737bb08e5f5cf1f1d64b092cc','2018-02-18 21:03:15',0);
/*!40000 ALTER TABLE `eth_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eth_transfer`
--

DROP TABLE IF EXISTS `eth_transfer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eth_transfer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user` int(11) NOT NULL,
  `to_user` int(11) NOT NULL,
  `value` varchar(50) NOT NULL,
  `transfered_token_id` int(11) NOT NULL,
  `txn_hash` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `transaction_completed` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eth_transfer`
--

LOCK TABLES `eth_transfer` WRITE;
/*!40000 ALTER TABLE `eth_transfer` DISABLE KEYS */;
INSERT INTO `eth_transfer` VALUES (1,12,1,'0.002',2,'0x49522f5b7301329a9d32696d446b9a016a9335dc16f8322eee6c1ec1a1004ac3','2018-02-16 16:30:02','1');
/*!40000 ALTER TABLE `eth_transfer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `external_transaction`
--

DROP TABLE IF EXISTS `external_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `external_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `amount` float(15,7) NOT NULL,
  `date_of_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_of_updation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `transaction_id` varchar(100) NOT NULL,
  `fees` float(15,7) NOT NULL,
  `coin_type` enum('b','e','l') NOT NULL,
  `transaction_completed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `external_transaction`
--

LOCK TABLES `external_transaction` WRITE;
/*!40000 ALTER TABLE `external_transaction` DISABLE KEYS */;
INSERT INTO `external_transaction` VALUES (1,12,'0x81888682285191ff773c0f5a35241fd2f9b9c42d',10.0000000,'2018-02-06 18:41:55','2018-02-06 18:41:55',0,'0x0da05884ba467a9c9bd734d6828421ef6b85d9b38ce998ac7d7a6c084b4c2e1c',0.0001000,'e',0),(2,1,'0xd62895d46862e663ce7a4b9d78c70ad855075ffd',100.0000000,'2018-02-16 16:27:23','2018-02-16 16:29:16',0,'0x0902d405cf78b1aaee2b209b7391917bc1dbfc2fc61d8828f04ca5a2657d95ec',0.0001000,'e',1),(3,1,'0xd62895d46862e663ce7a4b9d78c70ad855075ffd',100.0000000,'2018-02-16 16:29:39','2018-02-16 16:30:18',0,'0x8b6fe5a0998c36b4d6ab3b701174345f735468e20a9ce47e8298df2233025567',0.0001000,'e',1),(4,1,'0xd62895d46862e663ce7a4b9d78c70ad855075ffd',100.0000000,'2018-02-16 16:30:49','2018-02-16 16:31:30',0,'0x783d38273c7350448ff22bf178ba43476144541d989c87a4b05bc6775d6e4b9c',0.0001000,'e',1),(5,1,'0xd62895d46862e663ce7a4b9d78c70ad855075ffd',100.0000000,'2018-02-16 16:32:21','2018-02-16 16:33:08',0,'0xa1a0c235b23034ab47cd8382e9d7e3365c796ada20f8ad76ffad0334f201b3b4',0.0001000,'e',1),(6,1,'0xd62895d46862e663ce7a4b9d78c70ad855075ffd',100.0000000,'2018-02-16 16:38:18','2018-02-16 16:40:21',0,'0x4671ea5e4c7c8f4e707d3452fae708365b6a7b51ca13aeb41bac4db081fd877a',0.0001000,'e',1),(7,1,'0xd62895d46862e663ce7a4b9d78c70ad855075ffd',100.0000000,'2018-02-16 16:40:30','2018-02-16 16:41:29',0,'0xb96c149f6e7523f95db8f7d8a6a7a36cc2d392cde283ed17b99c9abf7193728d',0.0001000,'e',1),(8,1,'0xd62895d46862e663ce7a4b9d78c70ad855075ffd',100.0000000,'2018-02-16 16:41:38','2018-02-18 10:00:23',0,'0x17ac2ad00ac8a79a793d135b00235dd054c20acc5c1e4b5abbc0c11ca4844aba',0.0001000,'e',1),(9,1,'0xc69b62b540e5007dde25b0575ba2c3e5f5042ba8',100000000.0000000,'2018-02-18 17:03:12','2018-02-18 17:03:12',0,'',1.0000000,'e',0),(10,1,'0xd8516fef394bc888b32fc3488aa08d8d5ce80f7b',100000000.0000000,'2018-02-18 18:33:07','2018-02-18 18:33:07',0,'',1.0000000,'e',0),(11,1,'',0.0000000,'2018-02-18 19:10:50','2018-02-18 19:10:50',0,'0x976efef7944a8d69ef6e5796e28c4c488baac47c23713093fd28224e6f027532',1.0000000,'e',0),(12,1,'',0.0000000,'2018-02-18 19:16:58','2018-02-18 19:16:58',0,'0xca99e4855ac2951a16bb4ec01250e8047b78868a2f36ef2d3603f0f8f94af25e',1.0000000,'e',0),(13,1,'0x4ae3f65a2e5c8fafa156d7e7643d226c2df2ca22',0.0000000,'2018-02-18 19:18:49','2018-02-18 19:18:49',0,'0xebd10147352a87ed73a9d485aafcb342632bbefb46c87764fb29b8bdb9f2c6fb',1.0000000,'e',0),(14,1,'0x25743aebdb76ca6b25edf69b19ebf0eacb7997e2',100000000.0000000,'2018-02-18 19:28:23','2018-02-18 20:22:20',0,'0x2b8221f4c5d66132705704c3738bffad2c7276b1e8f094c6ba01b402226d40e7',1.0000000,'e',1),(15,35,'0x926af4627e42D07038C8Cc29a9123C7f00Df7Ac9',100.0000000,'2018-02-18 20:20:51','2018-02-18 20:24:52',0,'0x2d631b978ffe57c2c316057cd7ca48678e3d9ba8267011bd02b137e72e7f1795',0.0001000,'e',1),(16,35,'0x926af4627e42D07038C8Cc29a9123C7f00Df7Ac9',100000000.0000000,'2018-02-18 20:26:31','2018-02-18 20:33:51',0,'0x6efa0f201d353e779f9f15af5329c74c95c24034ebe2d6e51b3b18942108ecda',0.0001000,'e',1),(17,35,'0x926af4627e42D07038C8Cc29a9123C7f00Df7Ac9',1000.0000000,'2018-02-18 20:34:07','2018-02-18 20:35:26',0,'0x21ceec0bc2be621a2abdfbc5ddf8c483882d3f957eeff7ba8d7bde2f2af8339b',0.0001000,'e',1),(18,35,'0x926af4627e42D07038C8Cc29a9123C7f00Df7Ac9',100000000.0000000,'2018-02-18 20:35:57','2018-02-18 20:38:43',0,'0x6013a29d2c1b1c8735a2abeca2c61597c03618c1aee8d6b5fe538f3c05e6c823',0.0001000,'e',1),(19,35,'0x926af4627e42D07038C8Cc29a9123C7f00Df7Ac9',100000000.0000000,'2018-02-18 20:39:44','2018-02-18 20:44:40',0,'0x1311904d7b786f5925c5d086ac4a014b55c6a145edd6a478583556237d690d28',0.0001000,'e',1),(20,35,'0x926af4627e42D07038C8Cc29a9123C7f00Df7Ac9',20.0000000,'2018-02-18 20:44:52','2018-02-18 20:44:52',0,'0x619bec6bffa6db7cb85288adf0c6b09da37a1ffedbb8d212a7cf4fedb1382103',0.0001000,'e',0);
/*!40000 ALTER TABLE `external_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `external` float(15,6) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `date_of_updation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `coin_type` enum('e') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fees`
--

LOCK TABLES `fees` WRITE;
/*!40000 ALTER TABLE `fees` DISABLE KEYS */;
INSERT INTO `fees` VALUES (2,0.000100,1,'2018-02-02 20:57:21','e');
/*!40000 ALTER TABLE `fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internal_transaction`
--

DROP TABLE IF EXISTS `internal_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internal_transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` varchar(10) NOT NULL,
  `receiver_id` varchar(10) NOT NULL,
  `amount` float(15,6) NOT NULL,
  `date_of_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fees` float(15,6) NOT NULL,
  `coin_type` enum('b','e','l') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internal_transaction`
--

LOCK TABLES `internal_transaction` WRITE;
/*!40000 ALTER TABLE `internal_transaction` DISABLE KEYS */;
/*!40000 ALTER TABLE `internal_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `minimum_token`
--

DROP TABLE IF EXISTS `minimum_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `minimum_token` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `minimum_token` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `minimum_token`
--

LOCK TABLES `minimum_token` WRITE;
/*!40000 ALTER TABLE `minimum_token` DISABLE KEYS */;
INSERT INTO `minimum_token` VALUES (1,100);
/*!40000 ALTER TABLE `minimum_token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phase`
--

DROP TABLE IF EXISTS `phase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phase` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `bonus_amount` int(2) NOT NULL,
  `reffral_amount` int(2) NOT NULL,
  `target` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phase`
--

LOCK TABLES `phase` WRITE;
/*!40000 ALTER TABLE `phase` DISABLE KEYS */;
INSERT INTO `phase` VALUES (1,'PHASE 1','2018-02-05','2018-02-22',10,10,10000);
/*!40000 ALTER TABLE `phase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reffral_amount`
--

DROP TABLE IF EXISTS `reffral_amount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reffral_amount` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `amount` decimal(5,4) NOT NULL,
  `ref_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reffral_amount`
--

LOCK TABLES `reffral_amount` WRITE;
/*!40000 ALTER TABLE `reffral_amount` DISABLE KEYS */;
INSERT INTO `reffral_amount` VALUES (1,11,2.0000,'2018-02-06 18:40:09');
/*!40000 ALTER TABLE `reffral_amount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reffral_user`
--

DROP TABLE IF EXISTS `reffral_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reffral_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ref_to` bigint(20) NOT NULL,
  `ref_from` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reffral_user`
--

LOCK TABLES `reffral_user` WRITE;
/*!40000 ALTER TABLE `reffral_user` DISABLE KEYS */;
INSERT INTO `reffral_user` VALUES (1,12,11);
/*!40000 ALTER TABLE `reffral_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transfer_token`
--

DROP TABLE IF EXISTS `transfer_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transfer_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user` int(11) NOT NULL,
  `to_user` int(250) NOT NULL,
  `token` varchar(50) NOT NULL,
  `txn_hash` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transfer_token`
--

LOCK TABLES `transfer_token` WRITE;
/*!40000 ALTER TABLE `transfer_token` DISABLE KEYS */;
INSERT INTO `transfer_token` VALUES (1,1,11,'2000000000000000000','0xc940748c931794d01a375fe9ce51bee717bd366dc2d70710bd853c467488337d','2018-02-06 18:40:09'),(2,1,12,'22000000000000000000','0xfd765b10ade3a1582ae17eb143337c5abb004a09c893743e642e6f81f82bc835','2018-02-06 18:40:09');
/*!40000 ALTER TABLE `transfer_token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_of_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `unique_id` varchar(10) NOT NULL,
  `token_amt` decimal(50,6) DEFAULT NULL,
  `u_status` int(1) NOT NULL DEFAULT '1',
  `secret_key` varchar(25) NOT NULL,
  `refferal_code` varchar(10) NOT NULL,
  `google_enable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin@admin.com','466dbedf95000da7195b8a6bc475c17e15df64ab41aaa745c5f54cdeee89a2e9','2018-02-01 09:08:04','2018-02-18 21:02:49','9949000000',1349999270000000010000000000.000000,1,'3RSXHOCJGRV436TG','',0),(11,'Test','test@test.test','50b43f8f59348c225376112ed871c1de458a4552782f753217148bdfc0285cbd','2018-02-06 18:34:03','2018-02-18 10:13:20','7219000001',12000000000000000000.000000,0,'DDLIMZO56GO5XKH7','oml0HNyU',1),(12,'Rajat','rajat@atventus.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-06 18:36:22','2018-02-06 18:41:54','7645000011',10.000000,1,'','eHZSOoQJ',0),(13,'harsh','harsh.fantastic4@gmail.com','3daf3de589a5b5501bc44adfc1168bb3d666d2d49f57997cf89e29114db37ffb','2018-02-06 18:42:09','2018-02-06 19:12:56','8073000012',0.000000,1,'','YG0GRBpo',0),(14,'Anshuman Tiwar','anshuman.sfi@gmail.com','8959bee1c03eaf288777d8a614f2d13bed9bbb4319d9b1e7225dd5b4ff751456','2018-02-11 01:14:11','2018-02-15 02:14:43','1420000013',0.000000,1,'DDJ3XEH7Z4GXEQ3Y','nctziXiz',0),(15,'Jian Qin','blues.qin@gmail.com','90e7cc06865e1ea0ce0c151835f7193f1995b93ca24fa604cefe83cad72a7158','2018-02-12 18:44:22','2018-02-18 11:41:22','6308000014',NULL,0,'','1LqXTqlX',0),(17,'prabal gupta','prabalgupta@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-16 16:25:16','2018-02-16 17:09:05','1026000015',500.000000,1,'','8Bw8dEj5',0),(18,'donrich','idonrich@gmail.com','51b0f1fcbf293ac8d80f3bac61f5b02bdfd664fa44e072e43670ac8ec40f480f','2018-02-17 08:06:41','2018-02-17 08:06:41','5368000017',NULL,1,'','V7vp9IhZ',0),(20,'test','test@abc.com','50b43f8f59348c225376112ed871c1de458a4552782f753217148bdfc0285cbd','2018-02-17 20:44:05','2018-02-18 10:16:36','3573000018',NULL,0,'','WOsKbSfR',0),(21,'shivam singh','shvmsngh99@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 10:19:58','2018-02-18 10:19:58','7055000020',NULL,1,'','poIDbpyM',0),(22,'shivam singh','shvmsngh1996@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 10:24:41','2018-02-18 10:24:41','3330000021',NULL,1,'','68UDcOMP',0),(23,'suyash','suyash@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 10:57:55','2018-02-18 10:57:55','5972000022',NULL,1,'','GGqw2152',0),(24,'himanshu','hamanshu@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 11:17:57','2018-02-18 11:17:57','7027000023',NULL,1,'','ymd3jypo',0),(25,'janvi','janvi@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 11:22:07','2018-02-18 11:22:07','2021000024',NULL,1,'','NigtIoTC',0),(26,'qwerty','qwerty@qwerty.com','984284f209b7b1bf54b9ca6eb5da8f4b967be756377430384bcae53187e66c07','2018-02-18 17:03:12','2018-02-18 17:03:12','7728000025',NULL,1,'','YtoNdnAz',0),(27,'khemu','khemu@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 18:33:07','2018-02-18 18:33:07','7681000026',NULL,1,'','AlcaL4By',0),(28,'shivam singh','hello@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 18:46:57','2018-02-18 18:46:57','5033000027',NULL,1,'','K5fK99dD',0),(29,'shivam singh','khemuk@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 18:49:59','2018-02-18 18:49:59','7007000028',NULL,1,'','0ybaFttp',0),(30,'shivam singh','hello12@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 19:01:10','2018-02-18 19:01:10','1572000029',NULL,1,'','PfqY7fKI',0),(31,'rajat khemka','rajat.khemka@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 19:10:47','2018-02-18 19:10:47','4384000030',NULL,1,'','ADwTlHtm',0),(32,'shivam singh','shivam.singh@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 19:16:55','2018-02-18 19:16:55','7145000031',NULL,1,'','EBFitGr0',0),(33,'shivam','shivam1999@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 19:18:48','2018-02-18 19:18:48','4446000032',NULL,1,'','HkXZymHL',0),(34,'shivam singh','singhshivam1996@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 19:25:06','2018-02-18 19:25:06','4847000033',NULL,1,'','P2Bv41HS',0),(35,'rocking rajat','rockingrajat@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 19:28:21','2018-02-18 20:48:50','6928000034',999999989800000000.000000,1,'','xw1F47Wz',0),(36,'shivam singh','shivam_singh@gmail.com','8ac2456e310821f0248a32c8d83efbf3dc3cef9f2a6472d0d12f2235c474edff','2018-02-18 21:07:34','2018-02-18 21:07:34','4003000035',NULL,1,'','0q9Yw7l8',0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `withdrawal_permission`
--

DROP TABLE IF EXISTS `withdrawal_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `withdrawal_permission` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `permission` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `withdrawal_permission`
--

LOCK TABLES `withdrawal_permission` WRITE;
/*!40000 ALTER TABLE `withdrawal_permission` DISABLE KEYS */;
INSERT INTO `withdrawal_permission` VALUES (1,1,1),(2,11,1),(3,12,1),(4,13,1),(5,14,1),(6,15,1),(7,16,1),(8,17,1),(9,18,1),(10,19,1),(11,20,1),(12,21,1),(13,22,1),(14,23,1),(15,24,1),(16,25,1),(17,26,1),(18,27,1),(19,28,1),(20,29,1),(21,30,1),(22,31,1),(23,32,1),(24,33,1),(25,34,1),(26,35,1),(27,36,1);
/*!40000 ALTER TABLE `withdrawal_permission` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-19  6:33:04
