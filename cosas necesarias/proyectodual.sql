-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: proyectodual
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

--
-- Current Database: `proyectodual`
--

CREATE DATABASE IF NOT EXISTS `proyectodual`;

USE `proyectodual`;

--
-- Table structure for table `actividades`
--


CREATE TABLE `actividades` (
  `ID_Actividad` int NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `Tipo_práctica` varchar(4) NOT NULL,
  `Total_Horas` int NOT NULL,
  `Actividad_realizada` text NOT NULL,
  `Observaciones` text,
  PRIMARY KEY (`ID_Actividad`)
) ENGINE=InnoDB AUTO_INCREMENT=4;

--
-- Dumping data for table `actividades`
--

INSERT INTO `actividades` VALUES (1,'2021-12-15','Dual',5,'He programado en PHP',NULL),(2,'2021-12-17','FCT',6,'He programado un base de datos',NULL),(3,'2021-12-18','FCT',8,'He desmontado una pc',NULL);

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno` (
  `ID_Alumno` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  `Apellido1` varchar(20) NOT NULL,
  `Apellido2` varchar(20) NOT NULL,
  `Contraseña` varchar(64) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Telefono` int NOT NULL,
  `Empresa` varchar(64) NOT NULL,
  `Tutor` varchar(64) NOT NULL,
  `NºHoras_Dual` int NOT NULL,
  `NºHoras_FCT` int NOT NULL,
  `Observaciones` text,
  PRIMARY KEY (`ID_Alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=2;

--
-- Dumping data for table `alumno`
--

INSERT INTO `alumno` VALUES (1,'Pepe','Fernandez','Rodriguez','Alumno','43563478F','1995-11-16','pepefernandez@cesurformacion.com',622546485,'montajes Paco','Franciso',12,14,NULL);

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE `empresa` (
  `ID_Empresa` int NOT NULL AUTO_INCREMENT,
  `Nombre_Empresa` varchar(64) DEFAULT NULL,
  `Telefono` int DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `Responsable` varchar(64) DEFAULT NULL,
  `Observaciones` text NOT NULL,
  PRIMARY KEY (`ID_Empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` VALUES (1,'Montajes Paco',655456743,'montajespaco@gmail.com','Paco','');

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE `profesor` (
  `ID_Profesor` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  `Apellido1` varchar(20) NOT NULL,
  `Apellido2` varchar(20) NOT NULL,
  `Contraseña` varchar(64) NOT NULL,
  `Email` varchar(64) NOT NULL,
  PRIMARY KEY (`ID_Profesor`)
) ENGINE=InnoDB AUTO_INCREMENT=4;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` VALUES (1,'Francisco','Mejia','Robles','Profesor','FranciscoMejia@cesurformacion.com'),(2,'Antonio','Maldonado','Mora','ekisde','tuhprofehreshulon@cesurformacion.com'),(3,'Jose Miguel','Castaño','Rubio','ekisde','josemiquel@cesur.es');

--
-- Table structure for table `alumno_actividad`
--

DROP TABLE IF EXISTS `alumno_actividad`;
CREATE TABLE `alumno_actividad` (
  `ID_Actividad` int NOT NULL,
  `ID_Alumno` int NOT NULL,
  PRIMARY KEY (`ID_Actividad`,`ID_Alumno`),
  KEY `secundaria_alm_act` (`ID_Alumno`),
  CONSTRAINT `secundaria_act_alm` FOREIGN KEY (`ID_Actividad`) REFERENCES `actividades` (`ID_Actividad`) ON UPDATE CASCADE,
  CONSTRAINT `secundaria_alm_act` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON UPDATE CASCADE
) ENGINE=InnoDB;

--
-- Dumping data for table `alumno_actividad`
--

INSERT INTO `alumno_actividad` VALUES (1,1);

--
-- Table structure for table `alumno_profesor`
--

DROP TABLE IF EXISTS `alumno_profesor`;
CREATE TABLE `alumno_profesor` (
  `ID_Profesor` int NOT NULL,
  `ID_Alumno` int NOT NULL,
  PRIMARY KEY (`ID_Profesor`,`ID_Alumno`),
  KEY `secundaria_alumno` (`ID_Alumno`),
  CONSTRAINT `secundaria_alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON UPDATE CASCADE,
  CONSTRAINT `secundaria_profesor` FOREIGN KEY (`ID_Profesor`) REFERENCES `profesor` (`ID_Profesor`) ON UPDATE CASCADE
) ENGINE=InnoDB;

--
-- Dumping data for table `alumno_profesor`
--

INSERT INTO `alumno_profesor` VALUES (1,1);