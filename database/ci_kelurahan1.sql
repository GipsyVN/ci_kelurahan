-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ci_kelurahan
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `arsip_surat`
--

DROP TABLE IF EXISTS `arsip_surat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `arsip_surat` (
  `id` int(11) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `pemohon` varchar(50) NOT NULL,
  `pembuat` varchar(50) NOT NULL,
  `tanggal_surat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arsip_surat`
--

/*!40000 ALTER TABLE `arsip_surat` DISABLE KEYS */;
/*!40000 ALTER TABLE `arsip_surat` ENABLE KEYS */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `nip` int(18) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'1234',NULL,'1234@gmail.com','cropped-5120-2880-13150931.jpg','$2y$10$ApsskohgaYNsMoooNT2OY..SQMacydSGhvqPvDA6mfP.cqitrjOUu',1,1,1715404860),(2,'Hajaja',NULL,'hahaja1029@gmail.com','default.jpg','$2y$10$EgQxnGLxLlCSV2XqLTRhTu1RHJ6DgxGVVFkUD3WDqrqa0O8oA3FKi',2,1,1715408088),(3,'Hahaja',NULL,'trantib@gmail.com','default.jpg','$2y$10$/X4qYRxb91hyLFMvM2wjBOWQ.7weIxUyum9pcmloDPFLFOevXsb2q',2,1,1716962608),(8,'sigit',12345,'sigit@gmail.com','default.jpg','$2y$10$XAgZR2zE/ShSuIvFqL/tneEm7g4GQ5WT6Uu778t6WRgKiTtK/p4Ra',2,1,1722318704);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

--
-- Table structure for table `user_access_menu`
--

DROP TABLE IF EXISTS `user_access_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_access_menu`
--

/*!40000 ALTER TABLE `user_access_menu` DISABLE KEYS */;
INSERT INTO `user_access_menu` VALUES (1,1,1),(3,2,2),(11,2,3),(15,3,2),(16,3,3),(17,4,2),(18,4,3),(22,1,2),(25,1,3);
/*!40000 ALTER TABLE `user_access_menu` ENABLE KEYS */;

--
-- Table structure for table `user_access_surat`
--

DROP TABLE IF EXISTS `user_access_surat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_access_surat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `surat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_access_surat`
--

/*!40000 ALTER TABLE `user_access_surat` DISABLE KEYS */;
INSERT INTO `user_access_surat` VALUES (1,2,1),(2,2,2),(3,2,3),(4,2,4),(5,2,5),(6,3,6),(7,3,7),(8,3,8),(9,3,9),(10,3,10),(11,3,11),(12,3,12),(13,3,13),(14,4,14),(15,4,15),(16,4,16),(17,4,17),(18,4,18);
/*!40000 ALTER TABLE `user_access_surat` ENABLE KEYS */;

--
-- Table structure for table `user_lurah`
--

DROP TABLE IF EXISTS `user_lurah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_lurah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip` int(18) NOT NULL,
  `date_edited` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_lurah`
--

/*!40000 ALTER TABLE `user_lurah` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_lurah` ENABLE KEYS */;

--
-- Table structure for table `user_medsos`
--

DROP TABLE IF EXISTS `user_medsos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_medsos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_medsos`
--

/*!40000 ALTER TABLE `user_medsos` DISABLE KEYS */;
INSERT INTO `user_medsos` VALUES (1,1,'','','');
/*!40000 ALTER TABLE `user_medsos` ENABLE KEYS */;

--
-- Table structure for table `user_menu`
--

DROP TABLE IF EXISTS `user_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_menu`
--

/*!40000 ALTER TABLE `user_menu` DISABLE KEYS */;
INSERT INTO `user_menu` VALUES (1,'Admin'),(2,'Surat'),(3,'User');
/*!40000 ALTER TABLE `user_menu` ENABLE KEYS */;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,'Administrator'),(2,'Trantib'),(3,'Kehsos'),(4,'Pemerintahan');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;

--
-- Table structure for table `user_sub_menu`
--

DROP TABLE IF EXISTS `user_sub_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_sub_menu`
--

/*!40000 ALTER TABLE `user_sub_menu` DISABLE KEYS */;
INSERT INTO `user_sub_menu` VALUES (1,1,'Dashboard','admin','fas fa-fw fa-tachometer-alt',1),(2,3,'My Profile','user','fas fa-fw fa-user',1),(3,3,'Edit Profile','user/edit','fas fa-fw fa-user-edit',1),(5,1,'Role','admin/role','fas fa-fw fa-user-tie',1),(6,3,'Ubah Password','user/changepassword','fas fa-fw fa-key',1),(7,2,'Cetak Surat','surat','far fa-fw fa-envelope',1),(8,2,'Arsip','surat/arsip','fas fa-fw fa-envelope-open-text',1),(9,1,'User','admin/user_manage','fas fa-fw fa-users-cog',1);
/*!40000 ALTER TABLE `user_sub_menu` ENABLE KEYS */;

--
-- Table structure for table `user_surat`
--

DROP TABLE IF EXISTS `user_surat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_surat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(50) NOT NULL,
  `url` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_surat`
--

/*!40000 ALTER TABLE `user_surat` DISABLE KEYS */;
INSERT INTO `user_surat` VALUES (1,'Surat Keterangan Catatan Kepolisian',NULL),(2,'Surat Izin Keramaian',NULL),(3,'Surat Izin Tempat Usaha',NULL),(4,'Surat Izin Domisili Usaha',NULL),(5,'Surat Izin Mendirikan Bangunan',NULL),(6,'Surat Keterangan Tidak Mampu',NULL),(7,'Surat Keterangan Usaha',NULL),(8,'Surat Keterangan Janda/Duda',NULL),(9,'Surat Keterangan Belum Memiliki Rumah',NULL),(10,'Surat Izin Nikah',NULL),(11,'Surat Keterangan Belum Menikah',NULL),(12,'Surat Keterangan Cerai',NULL),(13,'Surat Keterangan Penghasilan',NULL),(14,'Surat Keterangan Domisili Penduduk',NULL),(15,'Surat Keterangan Kematian',NULL),(16,'Surat Keterangan Ahli Waris',NULL),(17,'Surat Keterangan Beda Nama',NULL),(18,'Surat Pernyataan Bebas Sangketa',NULL);
/*!40000 ALTER TABLE `user_surat` ENABLE KEYS */;

--
-- Dumping routines for database 'ci_kelurahan'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-06 12:14:46
