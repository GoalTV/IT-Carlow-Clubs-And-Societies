-- MariaDB dump 10.19  Distrib 10.5.15-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Project
-- ------------------------------------------------------
-- Server version	10.5.15-MariaDB-0ubuntu0.21.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User ID',
  `email` varchar(320) NOT NULL DEFAULT '0' COMMENT 'Email',
  `image` varchar(320) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0' COMMENT 'Password',
  `f_name` varchar(50) NOT NULL DEFAULT '0' COMMENT 'First Name',
  `l_name` varchar(50) NOT NULL DEFAULT '0' COMMENT 'Last Name',
  `gender` int(1) DEFAULT NULL,
  `s_id` varchar(50) NOT NULL DEFAULT '0' COMMENT 'Student ID',
  `p_country` int(3) NOT NULL DEFAULT 0 COMMENT 'Phone Country',
  `p_number` int(15) NOT NULL DEFAULT 0 COMMENT 'Phone Number',
  `dob` date NOT NULL DEFAULT '0000-00-00' COMMENT 'Date of Birth',
  `m_d_1` int(1) NOT NULL DEFAULT 0 COMMENT 'Medical Declaration',
  `m_d_2` int(1) NOT NULL DEFAULT 0 COMMENT 'Asthma, wheezing, Respiratory?',
  `m_d_3` int(1) NOT NULL DEFAULT 0 COMMENT 'Bronchitis and/or shortness of breath?',
  `m_d_4` int(1) NOT NULL DEFAULT 0 COMMENT 'Physical disability or other disability?',
  `m_d_5` int(1) NOT NULL DEFAULT 0 COMMENT 'Are you pregnant?',
  `m_d_6` int(1) NOT NULL DEFAULT 0 COMMENT 'Do you smoke?',
  `m_d_7` int(1) NOT NULL DEFAULT 0 COMMENT 'Epilepsy, seizures, fainting attacks or convulsions?',
  `m_d_8` int(1) NOT NULL DEFAULT 0 COMMENT 'Any other neurological problem?',
  `m_d_9` int(1) NOT NULL DEFAULT 0 COMMENT 'Recurring migraine headaches, Blackouts? ',
  `m_d_10` int(1) NOT NULL DEFAULT 0 COMMENT 'Recurring joint, mobility or back problems/surgery? ',
  `m_d_11` int(1) NOT NULL DEFAULT 0 COMMENT 'Diabetes?',
  `m_d_12` int(1) NOT NULL DEFAULT 0 COMMENT 'Any hearing loss or problems with balance?',
  `m_d_13` int(1) NOT NULL DEFAULT 0 COMMENT 'Any serious eyesight issues?',
  `m_c` longtext DEFAULT NULL COMMENT 'Medical Condition',
  `d_i_n` text NOT NULL COMMENT 'Doctor Information',
  `d_i_p_c` int(3) NOT NULL DEFAULT 0,
  `d_i_p_n` bigint(20) NOT NULL DEFAULT 0,
  `n_o_k_f_n` varchar(50) NOT NULL DEFAULT '0' COMMENT 'Next of Kim First Name',
  `n_o_k_l_n` varchar(50) NOT NULL DEFAULT '' COMMENT 'Next of Kim Last Name',
  `n_o_k_p_c` int(3) NOT NULL DEFAULT 0 COMMENT 'next of Kim Phone Country',
  `n_o_k_p_n` int(15) NOT NULL DEFAULT 0 COMMENT 'Next of Kim Phone Number',
  `n_o_k_r_s` varchar(50) NOT NULL DEFAULT '' COMMENT 'Nextt of Kim Relation Status',
  `registred` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0 COMMENT 'Account Status',
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COMMENT='User MySQL Tables';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'C000000@itcarlow.ie','img/user_profile/3ff15c44ad7401a1286cc6c8cc13f6ff.jpg','$2y$10$jztzcVT1PF48tIl9oXjcDuhW/0CPbWG2AyXGm0Eh4fDh0hAYXg0uq','Test','Account',1,'C000000',353,873609721,'2020-01-10',2,2,1,1,2,1,1,1,2,1,2,1,1,'TestNote','Elon Musk',353,873609722,'John','Tyson',353,87360973,'Friend','2022-03-06 20:42:17',0),(6,'C00176885@itcarlow.ie','img/user_profile/76852aca024b6d094ca5442eb6b227a7.jpg','$2y$10$.OoOh.Gnsqa6WUJjoOsV9.s8S9hZQkO9tBRDwx1D9YSPbSZ1f7TE.','Janusz','Czeropski',2,'C00176885',353,873609720,'1995-10-25',1,1,2,1,1,2,2,1,2,1,1,1,2,'None','Dr James Smith',353,59123543432,'Alexa','Amazon',44,74543895,'Work','2022-03-06 22:13:58',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-06 23:28:10
