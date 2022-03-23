# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.27)
# Database: dinosaurs
# Generation Time: 2021-11-09 09:18:16 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table dinos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dinos`;

CREATE TABLE `dinos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `species` varchar(60) DEFAULT NULL,
  `foodType` int(2) DEFAULT NULL,
  `height` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `length` float DEFAULT NULL,
  `killerRating` int(11) DEFAULT NULL,
  `intelligence` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `imageUrl` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `dinos` WRITE;
/*!40000 ALTER TABLE `dinos` DISABLE KEYS */;

INSERT INTO `dinos` (`id`, `species`, `foodType`, `height`, `weight`, `length`, `killerRating`, `intelligence`, `age`, `imageUrl`)
VALUES
	(1,'Pachycephalosaurus',1,19.7,6614,26.2,2,7,76,'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Pachycephalosaurus_wyomingensis_ROM.jpg/220px-Pachycephalosaurus_wyomingensis_ROM.jpg'),
	(2,'Tyrannosaurus Rex',2,18.4,13227,39.3,9,9,67,'https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Tyrannosaurus_Rex_Holotype.jpg/250px-Tyrannosaurus_Rex_Holotype.jpg'),
	(3,'Barosaurus',1,85.3,8819,85.3,3,2,156,'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Barosaurus_mount_1.jpg/220px-Barosaurus_mount_1.jpg'),
	(4,'Heterodontosaurus',1,1.6,22,3.9,1,5,208,'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Heterodontosaurus_tucki_cast_-_University_of_California_Museum_of_Paleontology_-_Berkeley%2C_CA_-_DSC04696.JPG/500px-Heterodontosaurus_tucki_cast_-_University_of_California_Museum_of_Paleontology_-_Berkeley%2C_CA_-_DSC04696.JPG'),
	(5,'Suchomimus',2,13.1,11023,39.3,8,7,100,'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/CCM_Suchomimus_2018.jpg/220px-CCM_Suchomimus_2018.jpg'),
	(6,'Pachyrhinosaurus',1,9.8,8000,23,2,4,70,'https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Pachyrhinosaurus_perotorum_skeleton.jpg/240px-Pachyrhinosaurus_perotorum_skeleton.jpg'),
	(7,'Compsognathus',2,2.3,6.6,4.6,5,7,145,'https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Compy.jpg/250px-Compy.jpg'),
	(8,'Iguanodon',1,16.4,9920,32.8,3,6,135,'https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Iguanodon_de_Bernissart_IRSNB_01.JPG/220px-Iguanodon_de_Bernissart_IRSNB_01.JPG'),
	(9,'Pentaceratops',1,9.8,17636,26.2,3,5,75,'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Pentaceratops_sternbergii_holotype_AMNH6325.jpg/250px-Pentaceratops_sternbergii_holotype_AMNH6325.jpg'),
	(10,'Coelophysis',2,6.6,59.5,9.8,4,7,225,'https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/Coelophysis_bauri_mount.jpg/220px-Coelophysis_bauri_mount.jpg'),
	(11,'Velociraptor',2,3.3,33,6.6,9,10,85,'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Velociraptor_fruita_2.jpg/220px-Velociraptor_fruita_2.jpg'),
	(12,'Centrosaurus',1,6.6,2205,19.7,2,4,76,'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Centrosaurus_apertus_skull_and_jaws%2C_Dinosaur_Provincial_Park%2C_Alberta%2C_Canada%2C_Late_Cretaceous_-_Royal_Ontario_Museum_-_DSC00078.JPG/480px-Centrosaurus_apertus_skull_and_jaws%2C_Dinosaur_Provincial_Park%2C_Alberta%2C_Canada%2C_Late_Cretaceous_-_Royal_Ontario_Museum_-_DSC00078.JPG'),
	(13,'Megalosaurus',2,9.8,2205,29.5,9,8,175,'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Megalosaurus_display.JPG/220px-Megalosaurus_display.JPG'),
	(14,'Protoceratops',1,4.9,881,6.6,2,4,72,'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Protoceratops_andrewsi_-_IMG_0691.jpg/240px-Protoceratops_andrewsi_-_IMG_0691.jpg'),
	(15,'Giganotosaurus',2,19.7,17636,52.5,10,7,100,'https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Giganotosaurus_at_Fernbank.jpg/220px-Giganotosaurus_at_Fernbank.jpg'),
	(16,'Brachiosaurus',1,52.5,17636,85.3,3,2,156,'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Brachiosaurus_mount.jpg/220px-Brachiosaurus_mount.jpg'),
	(17,'Herrerasaurus',2,3.3,772,16.4,7,6,230,'https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Herrerasaurus_ischigualastensis_DSC_2929.jpg/240px-Herrerasaurus_ischigualastensis_DSC_2929.jpg'),
	(18,'Gallimimus',3,9.8,440.9,18.3,5,7,74,'https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Gallimimus_bullatus.001_-_Natural_History_Museum_of_London.JPG/220px-Gallimimus_bullatus.001_-_Natural_History_Museum_of_London.JPG'),
	(19,'Triceratops',1,9.8,12125,29.5,2,4,72,'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/LA-Triceratops_mount-2.jpg/220px-LA-Triceratops_mount-2.jpg'),
	(20,'Corythosaurus',1,16.4,11023,26.2,2,5,80,'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Carnegie_Corythosaurus.jpg/220px-Carnegie_Corythosaurus.jpg'),
	(21,'Maiasaura',1,8.2,6614,29.5,2,3,80,'https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Maiasaura_skeleton.jpg/220px-Maiasaura_skeleton.jpg'),
	(22,'Dimorphodon',2,0.82,8.8,0.82,4,4,200,'https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Dimorphodon_Flight_Pose.png/220px-Dimorphodon_Flight_Pose.png'),
	(23,'Stegosaurus',1,9.8,6834,29.5,2,1,76,'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Journal.pone.0138352.g001A.jpg/220px-Journal.pone.0138352.g001A.jpg'),
	(24,'Stenonychosaurus',2,5.9,132,6.6,7,10,76,'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Stenonychosaurus_skeleton.jpg/220px-Stenonychosaurus_skeleton.jpg'),
	(25,'Hypsilophodon',1,2.6,110,6.6,1,6,125,'https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/HypsilophodonBrussels.jpg/240px-HypsilophodonBrussels.jpg'),
	(26,'Camarasaurus',1,29.5,4409,59.1,3,2,150,'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/MUJA-Sauropod.JPG/220px-MUJA-Sauropod.JPG'),
	(27,'Styracosaurus',1,6.6,6614,16.4,2,3,77,'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Torosaurus%2C_is_it%3F_%2820752673005%29.jpg/220px-Torosaurus%2C_is_it%3F_%2820752673005%29.jpg'),
	(28,'Euoplocephalus',1,5.9,4409,19.7,3,3,76,'https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Euoplocephalus_TMP_1991.127.1.tif/lossy-page1-220px-Euoplocephalus_TMP_1991.127.1.tif.jpg'),
	(29,'Archaeopteryx',3,1,13.2,1,6,5,150,'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Archaeopteryx_lithographica_%28Berlin_specimen%29.jpg/220px-Archaeopteryx_lithographica_%28Berlin_specimen%29.jpg'),
	(30,'Oviraptor',2,2.6,44,5.9,5,8,70,'https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Oviraptor_holotype.jpg/220px-Oviraptor_holotype.jpg');

/*!40000 ALTER TABLE `dinos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table foodTypes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `foodTypes`;

CREATE TABLE `foodTypes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(11) DEFAULT NULL,
  `imageUrl` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `foodTypes` WRITE;
/*!40000 ALTER TABLE `foodTypes` DISABLE KEYS */;

INSERT INTO `foodTypes` (`id`, `name`, `imageUrl`)
VALUES
	(1,'Herbivore','herbivore.png'),
	(2,'Carnivore','carnivore.png'),
	(3,'Omnivore','omnivore.png');

/*!40000 ALTER TABLE `foodTypes` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
