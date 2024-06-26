-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: hepta_software
-- ------------------------------------------------------
-- Server version	8.0.35

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

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `country` (
  `codigo_pais` int NOT NULL AUTO_INCREMENT,
  `pais_codigo_cemex` char(3) DEFAULT NULL,
  `pais_nombre_es` varchar(100) DEFAULT NULL,
  `pais_nombre_en` varchar(100) DEFAULT NULL,
  `state` int NOT NULL,
  PRIMARY KEY (`codigo_pais`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (2,'DEU','Alemania','Germany',1),(3,'BHS','Bahamas','Bahamas',1),(4,'BRB','Barbados','Barbados',1),(5,'COL','Colombia','Colombia',1),(6,'CRI','Costa Rica','Costa Rica',1),(7,'GTM','Guatemala','Guatemala',1),(8,'ISR','Israel','Israel',1),(9,'JAM','Jamaica','Jamaica',1),(10,'MEX','México','Mexico',1),(11,'NIC','Nicaragua','Nicaragua',1),(12,'PAN','Panamá','Panama',1),(13,'PRI','Puerto Rico','Puerto Rico',1),(14,'DOM','República Dominicana','Dominican Republic',1),(15,'TTO','Trinidad y Tobago','Trinidad and Tobago',1),(16,'USA','Estados Unidos','United States',1);
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipmentcal_memory`
--

DROP TABLE IF EXISTS `equipmentcal_memory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipmentcal_memory` (
  `EquipID` int NOT NULL AUTO_INCREMENT,
  `EquipCodeHTA` int NOT NULL,
  `EquipoName` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `EquipoEstado` int NOT NULL,
  PRIMARY KEY (`EquipID`),
  UNIQUE KEY `EquipCodeHTA` (`EquipCodeHTA`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipmentcal_memory`
--

LOCK TABLES `equipmentcal_memory` WRITE;
/*!40000 ALTER TABLE `equipmentcal_memory` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipmentcal_memory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipmenthta_codes`
--

DROP TABLE IF EXISTS `equipmenthta_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipmenthta_codes` (
  `EquipmentID` int NOT NULL AUTO_INCREMENT,
  `EquipmentName_ES` varchar(150) DEFAULT NULL,
  `EquipmentName_ENG` varchar(150) DEFAULT NULL,
  `EquipmentSubgroupCod` varchar(7) DEFAULT NULL,
  `equipo_col_eet` varchar(3) DEFAULT NULL,
  `equipo_activo` char(1) DEFAULT 'S',
  PRIMARY KEY (`EquipmentID`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipmenthta_codes`
--

LOCK TABLES `equipmenthta_codes` WRITE;
/*!40000 ALTER TABLE `equipmenthta_codes` DISABLE KEYS */;
INSERT INTO `equipmenthta_codes` VALUES (2,'Equipo De Computo(1)','Computer Equipment (1)','000-099','010','1'),(3,'Equipo De Cómputo (2)','Computer Equipment (2)','000-099','020','1'),(4,'Equipo De Laboratorio (1)','Laboratory Equipment (1)','000-099','030','1'),(5,'Equipo De Laboratorio (2)','Laboratory Equipment (2)','000-099','040','1'),(6,'Equipo, Mobiliario Y Enseres Varios','Equipment, Furniture And Various Fixtures','000-099','060','1'),(7,'Equipos Pruebas No Destructivas','Non Destructive Testing Equipment','000-099','080','1'),(8,'Equipo Portátil De Medición','Portable Measurement Equipment','000-099','090','1'),(9,'Estudios Y Pruebas','Studies And Tests','110-190','110','1'),(10,'Demoliciones Y Desmantelamiento','Demolitions And Dismantling','110-190','120','1'),(11,'Caminos, Vías Y Estacionamientos','Roads, Rail Roads And Parking Lots','110-190','150','1'),(12,'Obras Marítimas','Maritime Works','110-190','160','1'),(13,'Drenaje Y Puentes','Drainages And Bridges','110-190','170','1'),(14,'Bardas Y Cercas','Fences And Enclosures','110-190','180','1'),(15,'Ornamentaciones','Ornamental Work ','110-190','190','1'),(16,'Terrenos Y Movimiento De Tierras','Lands And Earth Movements','210-290','210','1'),(17,'Cimentacion','Foundations','210-290','220','1'),(18,'Estructura De Concreto','Concrete Structure','210-290','230','1'),(19,'Estructura De Acero','Steel Structure','210-290','240','1'),(20,'Muros De Contencion','Retaining Walls','210-290','250','1'),(21,'Bases Para Equipo','Equipment Bases','210-290','260','1'),(22,'Construcciones Adjuntas','Adjacent Constructions','210-290','270','1'),(23,'Albañileria','Masonry Work','210-290','280','1'),(24,'Acabados Y Recubrimientos','Finishes And Covers','210-290','290','1'),(25,'Control Ambiental','Enviromental Control ','310-390','310','1'),(26,'Manejo De Gases Y Aire','Gas And Air Handling ','310-390','320','1'),(27,'Manejo De Fluidos','Fluids Handling ','310-390','330','1'),(28,'Manejo Y Despacho De Cemento','Cement Handling And Dispatch ','310-390','340','1'),(29,'Transmisiones Y Componentes','Transmissions And Components ','310-390','350','1'),(30,'Equipo Diverso','Various Equipment ','310-390','360','1'),(31,'Sistema Contra Incendio Y De Seguridad','Fire Fighting And Safety Equipment ','310-390','380','1'),(32,'Válvulas De Sólidos','Solids Valves ','310-390','390','1'),(33,'Manejo De Materiales','Materials Handling','410-490','410','1'),(34,'Alimentadores Y Clasificadores','Feeders And Classifiers','410-490','420','1'),(35,'Molinos','Mills','410-490','430','1'),(36,'Trituradoras','Crushers','410-490','440','1'),(37,'Secadores','Dryers','410-490','450','1'),(38,'Precalentador','Preheaters','410-490','460','1'),(39,'Hornos Y Enfriadores','Kilns And Coolers','410-490','470','1'),(40,'Equipos Varios Cemento',NULL,'410-490','480','1'),(41,'Concreto Y Agregados','Concrete And Agregates','410-490','490','1'),(42,'Transformadores','Transformers','510-590','510','1'),(43,'Tableros De Fuerza','Power Panels','510-590','520','1'),(44,'Tableros De Control','Control Panel','510-590','530','1'),(45,'Interruptores','Switches','510-590','540','1'),(46,'Arrancadores','Starters','510-590','550','1'),(47,'Motores Y Genradores','Motors And Generators','510-590','560','1'),(48,'Equipo De Comunicaciones','Communications Equipment','510-590','570','1'),(49,'Equipo Diverso','Various Equipment','510-590','590','1'),(50,'Equipo De Control De Proceso','Process Control Equipment','610-690','610','1'),(51,'Dispositivos De Control (1)','Control Devices (1)','610-690','620','1'),(52,'Instrumentacion De Campo (1)','Field Instrumentation (1)','610-690','630','1'),(53,'Instrumentacion De Tablero','Panel Instrumentation','610-690','640','1'),(54,'Equipo De Control Secuencial','Sequential Control Equipment','610-690','670','1'),(55,'Dispositivos De Control (2)','Control Devices (2)','610-690','680','1'),(56,'Instrumentacion De Campo (2)','Field Instrumentation (2)','610-690','690','1'),(57,'Acero Estructural','Structural Steel','710-790','710','1'),(58,'Tolvas','Hoppers','710-790','720','1'),(59,'Tanques','Tanks','710-790','730','1'),(60,'Chutes Y Ductos','Chutes And Ducts','710-790','740','1'),(61,'Tuberias Y Accesorios','Pipelines And Accessories','710-790','750','1'),(62,'Aislamientos Termicos Y Acusticos','Thermic And Acoustic Insulation','710-790','760','1'),(63,'Anclajes Y Rellenos De Equipo','Equipment Anchorages And Fills','710-790','770','1'),(64,'Desempolvamiento','Dedusting','710-790','780','1'),(65,'Pintura','Paint','710-790','790','1'),(66,'Alta Tensión','High Tension','810-890','810','1'),(67,'Distribucion De Fuerza','Power Distribution','810-890','820','1'),(68,'Distribucion De Control','Control Distribution','810-890','830','1'),(69,'Alumbrado','Lighting','810-890','840','1'),(70,'Tierras Y Apartarrayos','Grounds And Lightning Rods','810-890','850','1'),(71,'Instrumentacion','Instrumentation','810-890','860','1'),(72,'Comunicaciones','Communications','810-890','870','1'),(73,'Equipo De Extracción Y Manejo De Materia Prima','Raw Material Extraction And Handling Equipment','910-990','910','1'),(74,'Equipo De Autotransporte','Automotive Equipment','910-990','930','1'),(75,'Equipo De Ffcc','Railroad Equipment','910-990','940','1'),(76,'Equipo De Navegacion Maritimo/Aereo','Navigation Equipment','910-990','950','1'),(77,'Equipo De Levante','Lifting Equipment','910-990','960','1'),(78,'Equipo De Servicios Generales','General Services Equipment','910-990','970','1'),(79,'Equipo Para Pavimentos De Concreto','Concrete Pavement Equipment','910-990','980','1'),(80,'Equipo Para Distribucion De Concreto','Concrete Distribution Equipment','910-990','990','1');
/*!40000 ALTER TABLE `equipmenthta_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `materials` (
  `MaterialID` int NOT NULL AUTO_INCREMENT,
  `MaterialName` char(60) COLLATE utf8mb4_general_ci NOT NULL,
  `Respose_angle_deg` int NOT NULL,
  `Overload_angle_deg` int NOT NULL,
  `Density_Transport_kg_m3` float NOT NULL,
  `Density_Transport_lb_ft3` float NOT NULL,
  `Density_storage_kg_m3` int NOT NULL,
  `Density_storage_lb_ft3` int NOT NULL,
  `Heat_capacity_J_K` int NOT NULL,
  `Specific_ceight_N_m3` int NOT NULL,
  `Minimum_Size_mm` int NOT NULL,
  `Maximum_Size_mm` int NOT NULL,
  `Moisture_w_w` int NOT NULL,
  `Plant` char(40) COLLATE utf8mb4_general_ci NOT NULL,
  `Year` int NOT NULL,
  `MaterialState` int NOT NULL,
  PRIMARY KEY (`MaterialID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materials`
--

LOCK TABLES `materials` WRITE;
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` VALUES (1,'ARCILLA',40,30,1280,80,1600,100,0,0,0,0,0,'ESTANDAR',2021,0),(3,'CALIZA',40,30,1360,85,1520,95,0,0,0,0,0,'ESTANDAR',2021,0),(4,'MATERIAL DE HIERRO',40,30,2000,125,2400,150,0,0,0,0,0,'ESTANDAR',2021,0),(6,'HARINA CRUDA',15,5,800,50,1280,80,0,0,0,0,0,'ESTANDAR',2021,0),(7,'PUZOLANA',37,25,1200,75,1200,75,0,0,0,0,0,'ESTANDAR',2021,0),(8,'HARINA CRUDA AIREADA',15,5,560,35,1200,75,0,0,0,0,0,'ESTANDAR',2021,0),(9,'YESO',40,35,1280,80,1440,90,0,0,0,0,0,'ESTANDAR',2021,0),(10,'KLINKER',33,25,1200,75,1370,85,0,0,0,0,0,'ESTANDAR',2021,0),(11,'CEMENTO',10,5,960,60,1440,90,0,0,0,0,0,'ESTANDAR',2021,0),(12,'CEMENTO AIREADO',10,5,560,35,0,0,0,0,0,0,0,'ESTANDAR',2021,0),(13,'PET COKE EN TERRONES',35,25,800,50,800,90,0,0,0,0,0,'ESTANDAR',2021,0),(14,'PET COKE PULVERIZADO',15,5,400,25,600,40,0,0,0,0,0,'ESTANDAR',2021,0),(15,'CARBON EN TERRONES',38,25,1100,70,1100,70,0,0,0,0,0,'ESTANDAR',2021,1),(16,'CARBON PULVERIZADO',15,5,500,30,650,40,0,0,0,0,0,'ESTANDAR',2021,1),(17,'CKD (Polvo del filtro principal del horno)',15,5,600,37.5,800,50,0,0,0,0,0,'ESTANDAR',2023,1);
/*!40000 ALTER TABLE `materials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plant`
--

DROP TABLE IF EXISTS `plant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plant` (
  `PlantID` int NOT NULL AUTO_INCREMENT,
  `PlantCodeCemex` char(11) COLLATE utf8mb4_general_ci NOT NULL,
  `PlantName` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `PlantCountry` int DEFAULT NULL,
  `PlantElevación` float DEFAULT NULL,
  `Humedad_porcent` float NOT NULL,
  `AtmosphericPressure_mm_HG` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `AtmosphericPressure_psi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `AtmosphericPressure_mm_H2O` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `AtmosphericPressure_Pa_N_m2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `AtmosphericPressure_bar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `AtmosphericPressure_mbar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `AtmosphericPressure_KN_m2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `AtmosphericPressure_in_H20` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `AtmosphericPressure_in_HG` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `PlantTemperatureMin_C` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `PlantTemperatureMin_K` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `PlantTemperatureMin_F` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `PlantTemperatureProm_C` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `PlantTemperatureProm_K` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `PlantTemperatureProm_F` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `PlantTemperatureMax_C` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `PlantTemperatureMax_K` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `PlantTemperatureMax_F` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `PlantState` int DEFAULT NULL,
  PRIMARY KEY (`PlantID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plant`
--

LOCK TABLES `plant` WRITE;
/*!40000 ALTER TABLE `plant` DISABLE KEYS */;
INSERT INTO `plant` VALUES (55,'CRL','Caracolito',5,60,10,'754.61','14.60','10060.66','100606.59','1.0060658807757552','1006','100.61','403.91','29.71','-231.15','42','-384.07','20','293.15','68.00','20','293.15','68.00',1),(56,'CRL','CARACOLITO',2,40,100,'756.40','14.63','10084.56','100845.60','1.008455990389574','1008','100.85','404.86','29.78','-6.67','266.48','20','10.00','283.15','50.00','-263.15','10','-441.67',1);
/*!40000 ALTER TABLE `plant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project` (
  `project_ID` int NOT NULL AUTO_INCREMENT,
  `project_codigo` int DEFAULT NULL,
  `project_planta` int DEFAULT NULL,
  `project_codigo_cemex` varchar(15) DEFAULT NULL,
  `project_nombre_es` varchar(255) DEFAULT NULL,
  `project_nombre_en` varchar(255) DEFAULT NULL,
  `project_etapa` char(2) DEFAULT NULL,
  `project_activo` char(1) DEFAULT 'S',
  `project_numero_cemex` varchar(15) DEFAULT NULL,
  `project_firma_a` varchar(60) DEFAULT NULL,
  `project_firma_b` varchar(60) DEFAULT NULL,
  `project_firma_c` varchar(60) DEFAULT NULL,
  `project_firma_d` varchar(60) DEFAULT NULL,
  `project_firma_e` varchar(60) DEFAULT NULL,
  `project_email_a` varchar(100) DEFAULT NULL,
  `project_email_b` varchar(100) DEFAULT NULL,
  `project_email_c` varchar(100) DEFAULT NULL,
  `project_email_d` varchar(100) DEFAULT NULL,
  `project_email_e` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`project_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (3,3,10,'2404',' Silo Cemento tipo 5',' Silo Cemento tipo 5','ID','S','-','Rolando Guardado','Carlos Neira','-','-','-',NULL,NULL,NULL,NULL,NULL),(4,4,29,'2251','Combustibles Alternos L2','Combustibles Alternos L2','IC','S','00','Freddy Rengifo','Pendiente','Pendiente','Pendiente','Pendiente',NULL,NULL,NULL,NULL,NULL),(7,7,8,'2430','SILO CARBON','SILO CARBON','IC','S','12345','JUAN','CARLOS','PEDRO','LUIS','JULIO',NULL,NULL,NULL,NULL,NULL),(8,8,10,'2415','INYECCIÓN DE CAL','INYECCIÓN DE CAL','IC','S','0000','FREDDY RENGIFO','JAIRO DUQUE','JULIO PACHECO','HECTOR CASTELLANOS','NA',NULL,NULL,NULL,NULL,NULL),(9,9,37,'2407','CHELM DRYER AND SEPARATOR CLASS 4','CHELM DRYER AND SEPARATOR CLASS 4','IC','S','-','ADAM BOJARCZUK','CRISTINA GÓMEZ','SIN','ANDRÉS JIMÉNEZ','GABRIEL OLIVERAS',NULL,NULL,NULL,NULL,NULL),(10,10,30,'2372','CARGUE A GRANEL','CARGUE A GRANEL','IC','S','-','CELÍN RODRÍGUEZ ','PENDIENTE','PENDIENTE','PENDIENTE','DIEGO MONTENEGRO',NULL,NULL,NULL,NULL,NULL),(11,11,39,'2401','EDIFICIO 104','EDIFICIO 104','ID','S','-','Nicolas Rojas - CMA','N/A','Nicolas Rojas - CMA','N/A','N/A',NULL,NULL,NULL,NULL,NULL),(12,12,40,'2370','AMPLIACIÓN ALMACEN PRODUCTO TERMINADO','AMPLIACIÓN ALMACEN PRODUCTO TERMINADO','IC','S','-','CELÍN RODRÍGUEZ','PENDIENTE','PENDIENTE','PENDIENTE','DIEGO MONTENEGRO',NULL,NULL,NULL,NULL,NULL),(13,13,9,'2410','350 Ton off spec clinker bin','350 Ton off spec clinker bin','IC','S','PO','Freddy Rengifo','Jairo Duque / Natalia Cardona','Julio Pacheco','Héctor castellanos','Natalia Cardona',NULL,NULL,NULL,NULL,NULL),(14,14,25,'2414','CLASS 2 ENGINEERING FOR KILN DUST HANDLING','CLASS 2 ENGINEERING FOR KILN DUST HANDLING','IC','S','PENDIENTE','JHONATHAN D HILL','PENDIENTE','PENDIENTE','PENDIENTE','PENDIENTE',NULL,NULL,NULL,NULL,NULL),(15,15,14,'2419','DETAIL ENGINEERING FOR PIPES\' SUPPORTS ','DETAIL ENGINEERING FOR PIPES\' SUPPORTS ','ID','S','PENDIENTE','JUAN HANNA','PENDIENTE','PENDIENTE','PENDIENTE','CARLOS ENRIQUE LEAL ',NULL,NULL,NULL,NULL,NULL),(16,16,39,'2421','PUENTE PATIO TALLER','PUENTE PATIO TALLER','ID','N','-','Nicolas Rojas - CMA','N/A','Nicolas Rojas - CMA','N/A','N/A',NULL,NULL,NULL,NULL,NULL),(17,17,41,'2422','PLATEWORK ARIS MINING MARMATO SAS','PLATEWORK ARIS MINING MARMATO SAS','ID','N','-','LUIS EDUARDO MONTOYA - CMA','LUIS EDUARDO MONTOYA - CMA','N/A','N/A','N/A',NULL,NULL,NULL,NULL,NULL),(18,18,21,'2417','NUEVO ALCANCE PLANTA MACEO 13 PROYECTOS','NUEVO ALCANCE PLANTA MACEO 13 PROYECTOS','IC','S','OC','JUAN HANNA','JOSE ARGENIS PINANGO','PABLO GONZÁLEZ MILEA','JUAN CARLOS LAVIN','PABLO GONZÁLEZ MILEA',NULL,NULL,NULL,NULL,NULL),(19,19,34,'2416','Calcined Clays','Calcined Clays','ID','S','-','Freddy Rengifo','Wilmer Sanchez','-','-','-',NULL,NULL,NULL,NULL,NULL),(20,20,34,'2420','Additive piping calculation','Additive piping calculation','ID','S','-','Freddy Rengifo','Wilmer Sanchez','-','-','-',NULL,NULL,NULL,NULL,NULL),(21,21,8,'2424','Vía salida bodega Trituradora RDF','Vía salida bodega Trituradora RDF','ID','S','-','Orlando Mosquera','-','-','-','-',NULL,NULL,NULL,NULL,NULL),(22,22,21,'2408','CUBIERTA PATIO DE MANIOBRAS ÁREA CARBÓN','CUBIERTA PATIO DE MANIOBRAS ÁREA CARBÓN','IC','S','12345','JUAN HANNA GARCÍA','JOSÉ ARGENIS PIÑANGO VASQUEZ','PABLO GONZÁLEZ MILEA','JUAN CARLOS LAVIN','PABLO GONZÁLEZ MILEA',NULL,NULL,NULL,NULL,NULL),(23,23,9,'2411','FUGITIVE DUST AT THE TRANSFER TOWER AND TOP OF CLINKER SILOS','FUGITIVE DUST AT THE TRANSFER TOWER AND TOP OF CLINKER SILOS','IC','S','000','Freddy Renfijo','Jairo Duque / Natalia Cardona','Julio Pacheco','Héctor Castellanos','Natalia Cardona',NULL,NULL,NULL,NULL,NULL),(24,24,9,'2409','CLINKER RECLAIMING HOPPER','CLINKER RECLAIMING HOPPER','IC','S','000','Freddy Rengifo','Jairo Duque / Natalia Cardona','Julio Pacheco','Héctor castellanos','Natalia Cardona',NULL,NULL,NULL,NULL,NULL),(25,25,9,'2412','STOCKPILES & OPEN AREAS','STOCKPILES & OPEN AREAS','IC','S','000','Freddy Rengifo','Jairo Duque / Natalia Cardona','Julio Pacheco','Héctor Castellanos','Natalia Cardona',NULL,NULL,NULL,NULL,NULL),(26,26,9,'2413','FUGITIVE DUST EMISSION AT THE FEED MIX BIN','FUGITIVE DUST EMISSION AT THE FEED MIX BIN','IC','S','000','Freddy Rengifo','Jairo Duque / Natalia Cardona','Julio Pacheco','Héctor Castellanos','Natalia Cardona',NULL,NULL,NULL,NULL,NULL),(27,27,8,'2426','Insuflado RDF Hornos Caracolito','Insuflado RDF Hornos Caracolito','IC','S','-','FREDY RENGIFO','JORGE RINCON','.','.','.',NULL,NULL,NULL,NULL,NULL),(28,28,6,'2423','Adecuación contenedores para Laboratorio, Baños y vestieres','Adecuación contenedores para Laboratorio, Baños y vestieres','IC','S','-','JUAN HANNA GARCIA','.','SERGIO GABRIEL MORALES','.','RICARDO MEZA',NULL,NULL,NULL,NULL,NULL),(29,29,17,'HTA-2430','SILO CARBON','SILO CARBON','IC','S','XX','Juan Hanna','Ernesto Ramirez','José Efren','Juan Carlos lavin','Ricardo Meza',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `UserName` text COLLATE utf8mb4_general_ci NOT NULL,
  `FirstName` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `LastName` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `UserEmail` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `UserPassword` int NOT NULL,
  `UserRol` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `UserState` tinyint(1) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (47,'j.calderon','John','Calderon','j.calderon@heptapro.com',1234,'Administrator',1),(51,'y.moreno','Yimmy','Moreno','Y.Moreno@heptapro.com',1234,'Administrator',1),(52,'A.cabezas','Alvaro','cabezas','A.cabezas@heptapro.com',1234,'Invitado',1);
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

-- Dump completed on 2024-04-01 21:14:10
