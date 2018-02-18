-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: empyreansaangency.com.mysql:3306
-- Generation Time: Feb 18, 2018 at 04:19 PM
-- Server version: 10.1.30-MariaDB-1~xenial
-- PHP Version: 5.4.45-0+deb7u12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `empyreansaangen`
--
CREATE DATABASE `empyreansaangen` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `empyreansaangen`;

-- --------------------------------------------------------

--
-- Table structure for table `Home`
--

CREATE TABLE IF NOT EXISTS `Home` (
  `HomeId` int(11) NOT NULL AUTO_INCREMENT,
  `HomeMess` varchar(400) DEFAULT NULL,
  `HomeInf` varchar(400) DEFAULT NULL,
  `HomeTel` varchar(25) DEFAULT NULL,
  `HomeFax` varchar(25) DEFAULT NULL,
  `HomePwd` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`HomeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Home`
--

INSERT INTO `Home` (`HomeId`, `HomeMess`, `HomeInf`, `HomeTel`, `HomeFax`, `HomePwd`) VALUES
(1, 'Empyréan SA est une agence immobilière spécialisée dans la location d''appartements dans les cantons de Fribourg et Vaud.\r\n\r\n', 'En cas d''urgence ou pour toutes demandes administratives particulières veuillez contacter le responsable technique en charge de votre immeuble.\r\nLe bureau répond à vos appels tous les matins du lundi au vendredi de 9h00 à 12h00', '+41 26 413 38 34', '+41 26 413 38 54', '46c29f691732b3d0240629329a2d0fe9');

-- --------------------------------------------------------

--
-- Table structure for table `Immeuble`
--

CREATE TABLE IF NOT EXISTS `Immeuble` (
  `ImmeubleId` int(11) NOT NULL AUTO_INCREMENT,
  `ImmeubleCity` int(11) NOT NULL,
  `ImmeubleAdress` varchar(100) DEFAULT NULL,
  `ImmeubleDescription` varchar(400) DEFAULT NULL,
  `ImmeubleFreeSlot` int(11) NOT NULL,
  `ImmeublePathImg` varchar(200) DEFAULT NULL,
  `ImmeubleLvl` int(11) DEFAULT NULL,
  `TechId` int(11) NOT NULL,
  PRIMARY KEY (`ImmeubleId`),
  KEY `FK_Immeuble_TechId` (`TechId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `Immeuble`
--

INSERT INTO `Immeuble` (`ImmeubleId`, `ImmeubleCity`, `ImmeubleAdress`, `ImmeubleDescription`, `ImmeubleFreeSlot`, `ImmeublePathImg`, `ImmeubleLvl`, `TechId`) VALUES
(4, 1, 'Impasse de la Grangette 15 à 1752 Villars-sur-Glâne', 'rez-de-chaussée \r\n3.5 pces avec balcon - \r\nLoyer CHF 1''214.00 + ACPTE CHF 250.00\r\nProche de l''Autoroute et des Centres Commerciaux', 0, NULL, 3, 6),
(6, 1, 'Route du Chasseral 1-3-5 1470 Estavayer-le-lac', 'description des appartements à louer', 1, 'img/fribourg1.png', 4, 4),
(8, 2, 'Avenue des Alpes 60-62 à 1820 Montreux', 'Av. des Alpes 60 - Appartement de 4 pces au 4ème étage. Disponible à partir du 1er avril 2018 ou à convenir avec les locataires actuels. Loyer CHF 1''770.00 + AC CHF 220.00', 0, 'img/vaud2.png', 4, 5),
(10, 2, 'Avenue de Belmont 29 à 1820 Montreux', 'description des appartements à louer', 1, 'img/vaud4.png', 4, 5),
(11, 2, 'Avenue de Collonge 15 à 1820 Territet', 'description des appartements à louer', 1, 'img/vaud5.png', 4, 5),
(18, 1, 'Route du Châtelet 3 à 1700 Fribourg', 'Appartement de 1 pce au 2ème étage. Proche de toutes commodités, du centre ville et de la gare. Loyer CHF 700.00 + AC CHF 100.00. Libre de suite', 0, NULL, 4, 1),
(21, 1, 'Route du Châtelet 3 à 1700 Fribourg', 'Appartement de 4.5 pces au 1er étage avec balcon. Proche de toutes les commodités, du centre ville et de la gare. Loyer CHF 1''620.00 + AC CHF 300.00. Libre de suite. Possibilité de louer une place de parc int. ', 0, NULL, 5, 1),
(23, 1, 'Avenue de Beauregard 9 à Fribourg', 'Appartement de 1.5 pces au 1er étage. Proche de toutes les commodités, du centre ville et de la gare. \r\n\r\nHall d''entrée avec armoire murale,\r\ncuisine séparée habitable.\r\nVitrage aux normes phonique et thermique.\r\n\r\n\r\nLoyer CHF 610.00 + AC CHF 90.00. \r\nLibre de suite. ', 0, NULL, 5, 1),
(24, 1, 'Rte du Centre 23 à Marly', 'Appartement 1.5 pièce au 1er étage.\r\nProche des transports publics des HE et de l''UNI. Cuisine habitable.\r\n\r\nPossibilité de louer une place de parc intérieure.\r\nLoyer CHF 790.- + AC CHF 110.-', 0, 'img/59b03f99b732d1e19ed34e3c6a87d790jpg', 4, 1),
(25, 1, 'Rte du Centre 21 à Marly', 'Appartement spacieux de 3.5 pièces au 4ème étage avec balcon. Proche des transports publics, des HE et de l''Uni. Possibilité de louer une place de parc intérieure. Loyer CHF 1300.- + AC CHF 180.-', 0, 'img/f1ef4e0e71e0b2407010d5db8232560bjpg', 5, 1),
(26, 1, 'Rte du Châtelet 3 à Fribourg', 'Appartement de 3.5 pièces au 2ème étage. Proche de toutes commodités, du centre ville, de la gare et de l''UNI. Possibilité de louer une place de parc intérieure. Loyer CHF 1360.- + AC CHF 150.-\r\nLibre à partir du 01.04.2018', 0, NULL, 4, 1),
(27, 2, 'Rue du Lac 40 - Clarens', '\r\n', 1, 'img/0075fcd22d19ce96e233998776373cb7jpg', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Tech`
--

CREATE TABLE IF NOT EXISTS `Tech` (
  `TechId` int(11) NOT NULL AUTO_INCREMENT,
  `TechName` varchar(100) DEFAULT NULL,
  `TechAdress` varchar(100) DEFAULT NULL,
  `TechPhoneNumber` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`TechId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Tech`
--

INSERT INTO `Tech` (`TechId`, `TechName`, `TechAdress`, `TechPhoneNumber`) VALUES
(1, 'Julio Simao', 'Agence', '026 413 38 34'),
(3, 'Jean-Pierre Morel', '', '026 475 39 09'),
(4, 'Emilia Pereira Rodrigues', NULL, '079 505 73 01'),
(5, 'Philippe Delez', 'Agence', '079 219 24 47'),
(6, 'Empyrean', 'Agence', '+41 26 413 38 34');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Immeuble`
--
ALTER TABLE `Immeuble`
  ADD CONSTRAINT `FK_Immeuble_TechId` FOREIGN KEY (`TechId`) REFERENCES `Tech` (`TechId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
