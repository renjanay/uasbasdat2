-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: karyawan
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

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
-- Table structure for table `t_jabatan`
--

DROP TABLE IF EXISTS `t_jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_jabatan` (
  `id_jabatan` int(2) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `gaji` int(9) NOT NULL,
  `cuti` int(2) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_jabatan`
--

LOCK TABLES `t_jabatan` WRITE;
/*!40000 ALTER TABLE `t_jabatan` DISABLE KEYS */;
INSERT INTO `t_jabatan` VALUES (1,'General Manager',3500000,20),(2,'Sales Manager',2500000,20),(3,'Supervisor',3000000,20),(4,'Branch Manager',3250000,20),(5,'HRD',3000000,25),(6,'Warehouse Chief',2500000,20);
/*!40000 ALTER TABLE `t_jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_karyawan`
--

DROP TABLE IF EXISTS `t_karyawan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_karyawan` (
  `id_karyawan` int(4) NOT NULL,
  `nama_karyawan` tinytext NOT NULL,
  `no_hp` int(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `gender` enum('P','L') NOT NULL,
  `id_jabatan` int(2) NOT NULL,
  `id_tunjangan` int(2) NOT NULL,
  PRIMARY KEY (`id_karyawan`),
  KEY `id_tunjangan` (`id_tunjangan`),
  KEY `id_jabatan` (`id_jabatan`),
  CONSTRAINT `t_karyawan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `t_jabatan` (`id_jabatan`),
  CONSTRAINT `t_karyawan_ibfk_2` FOREIGN KEY (`id_tunjangan`) REFERENCES `t_tunjangan` (`id_tunjangan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_karyawan`
--

LOCK TABLES `t_karyawan` WRITE;
/*!40000 ALTER TABLE `t_karyawan` DISABLE KEYS */;
INSERT INTO `t_karyawan` VALUES (1001,'Surya',8762735,'sunshineee@mail.com','Jl. Sukajaya12','L',6,12),(1003,'Jasmin Maharani',987628330,'jasjasmin@email.com','Jl. Samudra Pasai','P',5,12),(1006,'Melya',987628330,'Susansan@gmail.com','Jl. Merdeka','P',5,12),(1007,'Muhammad',87765468,'muhmmadi@mail.com','Griya surya inda','L',5,10),(1010,'Bima',81262830,'bimasakti@mail.com','Jl. Galaksi 21','L',5,10);
/*!40000 ALTER TABLE `t_karyawan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_tunjangan`
--

DROP TABLE IF EXISTS `t_tunjangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_tunjangan` (
  `id_tunjangan` int(2) NOT NULL,
  `tunjangan_jabatan` int(9) NOT NULL,
  `tunjangan_transport` int(9) NOT NULL,
  `tunjangan_makan` int(9) NOT NULL,
  `tunjangan_kesehatan` int(9) NOT NULL,
  PRIMARY KEY (`id_tunjangan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_tunjangan`
--

LOCK TABLES `t_tunjangan` WRITE;
/*!40000 ALTER TABLE `t_tunjangan` DISABLE KEYS */;
INSERT INTO `t_tunjangan` VALUES (10,500000,250000,600000,400000),(11,400000,250000,600000,400000),(12,300000,250000,600000,400000);
/*!40000 ALTER TABLE `t_tunjangan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-14 22:13:55
