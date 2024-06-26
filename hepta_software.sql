DROP TABLE IF EXISTS `biblioteca_condiciones_estandar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `biblioteca_condiciones_estandar` (
  `temperatura_centigrados` decimal(10,2) DEFAULT NULL,
  `temperatura_kelvin` decimal(10,2) DEFAULT NULL,
  `presion_bar` decimal(10,2) DEFAULT NULL,
  `presion_atm` decimal(10,5) DEFAULT NULL,
  `presion_kPa` decimal(10,2) DEFAULT NULL,
  `presion_psi` decimal(10,2) DEFAULT NULL,
  `humedad_relativa` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biblioteca_condiciones_estandar`
--

LOCK TABLES `biblioteca_condiciones_estandar` WRITE;
/*!40000 ALTER TABLE `biblioteca_condiciones_estandar` DISABLE KEYS */;
INSERT INTO `biblioteca_condiciones_estandar` VALUES (0.00,1.00,1.33,1.25000,1.00,1.25,1.00);
/*!40000 ALTER TABLE `biblioteca_condiciones_estandar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `biblioteca_condiciones_normales`
--

DROP TABLE IF EXISTS `biblioteca_condiciones_normales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `biblioteca_condiciones_normales` (
  `id_condicionesnormales` int(11) NOT NULL,
  `Temperatura_Centigrados` decimal(10,2) NOT NULL,
  `Temperatura_Kelvin` decimal(10,2) DEFAULT NULL,
  `Presion_Bar` decimal(10,5) DEFAULT NULL,
  `Presion_atm` decimal(10,1) DEFAULT NULL,
  `Presion_kPa` decimal(10,3) DEFAULT NULL,
  `Presion_psia` decimal(10,3) DEFAULT NULL,
  `Humedad_relativa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_condicionesnormales`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biblioteca_condiciones_normales`
--

LOCK TABLES `biblioteca_condiciones_normales` WRITE;
/*!40000 ALTER TABLE `biblioteca_condiciones_normales` DISABLE KEYS */;
INSERT INTO `biblioteca_condiciones_normales` VALUES (1,0.00,273.15,1.01325,1.0,101.325,14.696,0);
/*!40000 ALTER TABLE `biblioteca_condiciones_normales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `biblioteca_tamanos_aerodeslizador`
--

DROP TABLE IF EXISTS `biblioteca_tamanos_aerodeslizador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `biblioteca_tamanos_aerodeslizador` (
  `idtamanos_aerodeslizador` int(11) NOT NULL,
  `size_mm` decimal(10,0) DEFAULT NULL,
  `capacity_cu_m_hr` decimal(10,0) DEFAULT NULL,
  `capacity_cu_ft_hr` decimal(10,0) DEFAULT NULL,
  `b_mm` decimal(10,0) DEFAULT NULL,
  `b_in` decimal(10,3) DEFAULT NULL,
  `c_mm` decimal(10,0) DEFAULT NULL,
  `c_in` decimal(10,3) DEFAULT NULL,
  `d_mm` decimal(10,0) DEFAULT NULL,
  `d_in` decimal(10,3) DEFAULT NULL,
  `weight_kg_m` decimal(10,0) DEFAULT NULL,
  `weight_lb_ft` decimal(10,0) DEFAULT NULL,
  `estado_tamano_aerodeslizador` char(1) DEFAULT NULL,
  PRIMARY KEY (`idtamanos_aerodeslizador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biblioteca_tamanos_aerodeslizador`
--

LOCK TABLES `biblioteca_tamanos_aerodeslizador` WRITE;
/*!40000 ALTER TABLE `biblioteca_tamanos_aerodeslizador` DISABLE KEYS */;
INSERT INTO `biblioteca_tamanos_aerodeslizador` VALUES (1,100,20,720,32,1.250,200,7.870,75,2.950,19,13,NULL),(2,150,34,1200,32,1.250,200,7.870,75,2.950,22,15,NULL),(3,200,87,3060,32,1.250,300,11.810,75,2.950,36,24,NULL),(4,250,165,5830,32,1.250,300,11.810,75,2.950,39,26,NULL),(5,300,315,11125,32,1.250,400,15.750,75,2.950,46,31,NULL),(6,350,450,15900,32,1.250,500,19.690,75,2.950,55,37,NULL),(7,400,630,22250,32,1.250,500,19.690,75,2.950,58,39,NULL),(8,480,1080,38140,38,1.500,560,22.050,75,2.950,66,44,NULL),(9,600,1585,56000,57,2.250,600,23.620,100,3.940,80,54,NULL),(10,850,2460,87000,76,3.000,910,35.830,100,3.940,123,83,NULL);
/*!40000 ALTER TABLE `biblioteca_tamanos_aerodeslizador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `country` (
  `codigo_pais` int(11) NOT NULL AUTO_INCREMENT,
  `pais_codigo` char(3) DEFAULT NULL,
  `pais_nombre_es` varchar(100) DEFAULT NULL,
  `pais_nombre_en` varchar(100) DEFAULT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`codigo_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (3,'BHS','BAHAMAS','BAHAMAS',1),(4,'BRB','BARBADOS','BARBADOS',1),(5,'COL','COLOMBIA','COLOMBIAN',1),(6,'CRI','COSTA RICA','COSTA RICA',1),(7,'GTM','GUATEMALA','GUATEMALA',1),(8,'ISR','ISRAEL','ISRAEL',1),(9,'JAM','JAMAICA','JAMAICA',1),(10,'MEX','MEXICO','MEXICO',1),(11,'NIC','NICARAGUA','NICARAGUA',1),(12,'PAN','PANAMÁ','PANAMÁ',1),(13,'PRI','Puerto Rico','Puerto Rico',1),(14,'DOM','República Dominicana','Dominican Republic',1),(15,'TTO','Trinidad y Tobago','Trinidad and Tobago',1),(16,'USA','Estados Unidos','United States',1),(17,'POL','Polonia','Poland',1),(18,'RFy','ISLANDIA','ISLAN',1),(20,'EPL','EJEMPLO','EXAMPLE',1);
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_usuario` varchar(50) DEFAULT NULL,
  `log_accion` varchar(100) DEFAULT NULL,
  `log_fecha` varchar(10) DEFAULT NULL,
  `log_hora` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES (1,'j.calderon','ACTUALIZAR ESTADO PAIS','17-06-2024','04:24:37'),(2,'j.calderon','ACTUALIZAR ESTADO PAIS','17-06-2024','04:24:51'),(3,'j.calderon','EDITAR PAIS','17-06-2024','04:25:36'),(4,'j.calderon','CREAR PAIS','17-06-2024','04:26:06'),(5,'j.calderon','BORAR PAIS','17-06-2024','04:26:11'),(6,'a.solarte','ACTUALIZAR ESTADO PAIS','17-06-2024','04:31:19'),(7,'j.calderon','ACTUALIZAR ESTADO PAIS','17-06-2024','04:31:39'),(8,'a.solarte','ACTUALIZAR ESTADO PAIS','17-06-2024','04:31:40'),(9,'j.calderon','ACTUALIZAR ESTADO PAIS','17-06-2024','04:32:34'),(10,'a.solarte','CREAR PAIS','17-06-2024','04:32:34'),(11,'j.calderon','ACTUALIZAR ESTADO PAIS','17-06-2024','04:44:07'),(12,'j.calderon','ACTUALIZAR ESTADO PAIS','17-06-2024','04:44:09'),(13,'j.calderon','ACTUALIZAR ESTADO PAIS','17-06-2024','04:44:10'),(14,'a.solarte','ACTUALIZAR ESTADO PAIS','20-06-2024','11:09:56'),(15,'a.solarte','ACTUALIZAR ESTADO PAIS','20-06-2024','11:09:59'),(16,'a.solarte','ACTUALIZAR ESTADO PAIS','20-06-2024','11:10:01'),(17,'a.solarte','ACTUALIZAR ESTADO PAIS','21-06-2024','07:20:55'),(18,'a.solarte','ACTUALIZAR ESTADO PAIS','21-06-2024','07:21:19'),(19,'a.solarte','ACTUALIZAR ESTADO PAIS','21-06-2024','07:24:43'),(20,'a.solarte','ACTUALIZAR ESTADO PAIS','21-06-2024','07:24:45'),(21,'a.solarte','ACTUALIZAR ESTADO PAIS','21-06-2024','07:42:59'),(22,'j.calderon','ACTUALIZAR ESTADO PAIS','21-06-2024','08:08:01'),(23,'j.calderon','ACTUALIZAR ESTADO PAIS','21-06-2024','08:18:40'),(24,'j.calderon','ACTUALIZAR ESTADO PAIS','21-06-2024','08:18:43'),(25,'j.calderon','ACTUALIZAR ESTADO PAIS','21-06-2024','08:44:00'),(26,'a.solarte','ACTUALIZAR ESTADO PAIS','25-06-2024','06:57:39');
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `materials` (
  `MaterialID` int(11) NOT NULL AUTO_INCREMENT,
  `MaterialName` char(60) NOT NULL,
  `Respose_Angle` int(11) NOT NULL,
  `Overload_Angle` int(11) NOT NULL,
  `Density_Transport_kg_m3` float NOT NULL,
  `Density_Transport_lb_ft3` float NOT NULL,
  `Density_Alm_kg_m3` int(11) NOT NULL,
  `Density_Alm_lb_ft3` int(11) NOT NULL,
  `Density_aerated_kg_m3` float DEFAULT NULL,
  `Density_aerated_lb_ft3` float DEFAULT NULL,
  `Heat_Capacity_J_K` int(11) NOT NULL,
  `Specific_Weight_NM` int(11) NOT NULL,
  `Minimum_Size_mm` int(11) NOT NULL,
  `Maximum_Size_mm` int(11) NOT NULL,
  `Plant` char(40) NOT NULL,
  `Year` int(11) NOT NULL,
  `MaterialState` int(11) NOT NULL,
  PRIMARY KEY (`MaterialID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materials`
--

LOCK TABLES `materials` WRITE;
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` VALUES (1,'ARCILLA',40,30,1280,80,1600,100,1280,80,0,0,0,0,'ESTANDAR',2021,0),(3,'CALIZA',40,30,1360,85,1520,95,1360,85,0,0,0,0,'ESTANDAR',2021,0),(4,'MATERIAL DE HIERRO',40,30,2000,125,2400,150,2000,125,0,0,0,0,'ESTANDAR',2021,0),(6,'HARINA CRUDA',15,5,800,50,1280,80,560,35,0,0,0,0,'ESTANDAR',2021,0),(7,'PUZOLANA',37,25,1200,75,1200,75,1200,75,0,0,0,0,'ESTANDAR',2021,0),(9,'YESO',40,35,1280,80,1440,90,1280,80,0,0,0,0,'ESTANDAR',2021,0),(10,'CLINKER',33,25,1200,75,1370,85,1200,75,0,0,0,0,'ESTANDAR',2021,0),(11,'CEMENTO',10,5,960,60,1440,90,560,35,0,0,0,0,'ESTANDAR',2021,0),(13,'PET COKE EN TERRONES',35,25,800,50,800,90,800,50,0,0,0,0,'ESTANDAR',2021,0),(14,'PET COKE PULVERIZADO',15,5,400,25,600,40,400,25,0,0,0,0,'ESTANDAR',2021,0),(15,'CARBON EN TERRONES',38,25,1100,70,1100,70,1100,70,0,0,0,0,'ESTANDAR',2021,1),(16,'CARBON PULVERIZADO',15,5,500,30,650,40,500,30,0,0,0,0,'ESTANDAR',2021,1),(17,'CKD (Polvo de filtro principal de horno)',15,15,600,37.5,800,50,600,37.5,0,0,0,0,'ESTANDAR',2023,1);
/*!40000 ALTER TABLE `materials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plant`
--

DROP TABLE IF EXISTS `plant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plant` (
  `PlantID` int(11) NOT NULL AUTO_INCREMENT,
  `PlantCodeCemex` char(11) NOT NULL,
  `PlantName` varchar(200) NOT NULL,
  `PlantCountry` int(11) DEFAULT NULL,
  `PlantElevación` float DEFAULT NULL,
  `Humedad_porcent` float NOT NULL,
  `AtmosphericPressure_mm_HG` varchar(100) NOT NULL,
  `AtmosphericPressure_psi` varchar(100) NOT NULL,
  `AtmosphericPressure_mm_H2O` varchar(100) NOT NULL,
  `AtmosphericPressure_Pa_N_m2` varchar(100) NOT NULL,
  `AtmosphericPressure_bar` varchar(100) NOT NULL,
  `AtmosphericPressure_mbar` varchar(100) NOT NULL,
  `AtmosphericPressure_KN_m2` varchar(100) NOT NULL,
  `AtmosphericPressure_in_H20` varchar(100) DEFAULT NULL,
  `AtmosphericPressure_in_HG` varchar(100) DEFAULT NULL,
  `PlantTemperatureMin_C` varchar(100) NOT NULL,
  `PlantTemperatureMin_K` varchar(100) NOT NULL,
  `PlantTemperatureMin_F` varchar(100) NOT NULL,
  `PlantTemperatureProm_C` varchar(100) DEFAULT NULL,
  `PlantTemperatureProm_K` varchar(100) NOT NULL,
  `PlantTemperatureProm_F` varchar(100) NOT NULL,
  `PlantTemperatureMax_C` varchar(100) DEFAULT NULL,
  `PlantTemperatureMax_K` varchar(100) NOT NULL,
  `PlantTemperatureMax_F` varchar(100) NOT NULL,
  `PlantState` int(11) DEFAULT NULL,
  PRIMARY KEY (`PlantID`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plant`
--

LOCK TABLES `plant` WRITE;
/*!40000 ALTER TABLE `plant` DISABLE KEYS */;
INSERT INTO `plant` VALUES (70,'BYN','BAYANO',12,161,80,'745.61','14.42','9940.66','99406.58','0.9940657727695936','994','99.41','399.09','29.35','24','297.15','75.20','30','303.15','86.00','32','305.15','89.60',1),(71,'TCL','CLAXTON BAY',15,1,70,'759.91','14.70','10131.30','101312.99','1.0131299253423172','1013','101.31','406.74','29.92','21','294.15','69.80','28','301.15','82.40','35','308.15','95.00',1),(72,'CCC','CARIBBEAN CEMENT COMPANY',9,50,80,'755.51','14.61','10072.60','100726.04','1.0072603616863383','1007','100.73','404.38','29.74','22','295.15','71.60','28','301.15','82.40','31','304.15','87.80',1),(73,'BLC','BALCONES',16,204,67,'741.81','14.35','9889.92','98899.21','0.988992112925814','989','98.90','397.05','29.21','16','289.15','60.80','23','296.15','73.40','36','309.15','96.80',1),(82,'CHE','CHELM',17,187,85,'743.31','14.38','9909.95','99099.55','0.9909954667033949','991','99.10','397.85','29.26','-25','248.15','-13.00','10','283.15','50.00','35','308.15','95.00',1);
/*!40000 ALTER TABLE `plant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project` (
  `proyecto_codigo` int(11) NOT NULL,
  `proyecto_planta` int(11) DEFAULT NULL,
  `codigo_hepta` varchar(15) DEFAULT NULL,
  `proyecto_nombre_es` varchar(255) DEFAULT NULL,
  `orden_compra` varchar(40) DEFAULT NULL,
  `proyecto_firma_GP` varchar(60) DEFAULT NULL,
  `proyecto_firma_IM` varchar(60) DEFAULT NULL,
  `proyecto_firma_IC` varchar(60) DEFAULT NULL,
  `proyecto_firma_IE` varchar(60) DEFAULT NULL,
  `proyecto_firma_CI` varchar(60) DEFAULT NULL,
  `proyecto_estado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (3,69,'2404',' Silo Cemento tipo 5','-','Rolando Guardado','Carlos Neira','-','-','-','0'),(4,69,'2251','Combustibles Alternos L2','00','Freddy Rengifo','Pendiente','Pendiente','Pendiente','Pendiente','0'),(7,69,'2430','SILO CARBON','12345','JUAN','CARLOS','PEDRO','LUIS','JULIO','0'),(8,69,'2415','INYECCIÓN DE CAL','0000','FREDDY RENGIFO','JAIRO DUQUE','JULIO PACHECO','HECTOR CASTELLANOS','NA','0'),(9,69,'2407','CHELM DRYER AND SEPARATOR CLASS 4','-','ADAM BOJARCZUK','CRISTINA GÓMEZ','SIN','ANDRÉS JIMÉNEZ','GABRIEL OLIVERAS','0'),(10,69,'2372','CARGUE A GRANEL','-','CELÍN RODRÍGUEZ ','PENDIENTE','PENDIENTE','PENDIENTE','DIEGO MONTENEGRO','0'),(11,69,'2401','EDIFICIO 104','-','Nicolas Rojas - CMA','N/A','Nicolas Rojas - CMA','N/A','N/A','0'),(12,69,'2370','AMPLIACIÓN ALMACEN PRODUCTO TERMINADO','-','CELÍN RODRÍGUEZ','PENDIENTE','PENDIENTE','PENDIENTE','DIEGO MONTENEGRO','0'),(13,69,'2410','350 Ton off spec clinker bin','PO','Freddy Rengifo','Jairo Duque / Natalia Cardona','Julio Pacheco','Héctor castellanos','Natalia Cardona','0'),(14,69,'2414','CLASS 2 ENGINEERING FOR KILN DUST HANDLING','PENDIENTE','JHONATHAN D HILL','PENDIENTE','PENDIENTE','PENDIENTE','PENDIENTE','0'),(15,69,'2419','DETAIL ENGINEERING FOR PIPES\' SUPPORTS ','PENDIENTE','JUAN HANNA','PENDIENTE','PENDIENTE','PENDIENTE','CARLOS ENRIQUE LEAL ','0'),(16,69,'2421','PUENTE PATIO TALLER','-','Nicolas Rojas - CMA','N/A','Nicolas Rojas - CMA','N/A','N/A','0'),(17,69,'2422','PLATEWORK ARIS MINING MARMATO SAS','-','LUIS EDUARDO MONTOYA - CMA','LUIS EDUARDO MONTOYA - CMA','N/A','N/A','N/A','0'),(18,69,'2417','NUEVO ALCANCE PLANTA MACEO 13 PROYECTOS','OC','JUAN HANNA','JOSE ARGENIS PINANGO','PABLO GONZÁLEZ MILEA','JUAN CARLOS LAVIN','PABLO GONZÁLEZ MILEA','0'),(19,69,'2416','Calcined Clays','-','Freddy Rengifo','Wilmer Sanchez','-','-','-','0'),(20,69,'2420','Additive piping calculation','-','Freddy Rengifo','Wilmer Sanchez','-','-','-','0'),(21,69,'2424','Vía salida bodega Trituradora RDF','-','Orlando Mosquera','-','-','-','-','0'),(22,69,'2408','CUBIERTA PATIO DE MANIOBRAS ÁREA CARBÓN','12345','JUAN HANNA GARCÍA','JOSÉ ARGENIS PIÑANGO VASQUEZ','PABLO GONZÁLEZ MILEA','JUAN CARLOS LAVIN','PABLO GONZÁLEZ MILEA','0'),(23,69,'2411','FUGITIVE DUST AT THE TRANSFER TOWER AND TOP OF CLINKER SILOS','000','Freddy Renfijo','Jairo Duque / Natalia Cardona','Julio Pacheco','Héctor Castellanos','Natalia Cardona','0'),(24,69,'2409','CLINKER RECLAIMING HOPPER','000','Freddy Rengifo','Jairo Duque / Natalia Cardona','Julio Pacheco','Héctor castellanos','Natalia Cardona','0'),(25,69,'2412','STOCKPILES & OPEN AREAS','000','Freddy Rengifo','Jairo Duque / Natalia Cardona','Julio Pacheco','Héctor Castellanos','Natalia Cardona','0'),(26,69,'2413','FUGITIVE DUST EMISSION AT THE FEED MIX BIN','000','Freddy Rengifo','Jairo Duque / Natalia Cardona','Julio Pacheco','Héctor Castellanos','Natalia Cardona','0'),(27,69,'2426','Insuflado RDF Hornos Caracolito','-','FREDY RENGIFO','JORGE RINCON','.','.','.','0'),(28,69,'2423','Adecuación contenedores para Laboratorio, Baños y vestieres','-','JUAN HANNA GARCIA','.','SERGIO GABRIEL MORALES','.','RICARDO MEZA','0'),(29,69,'HTA-2430','SILO CARBON','XX','Juan Hanna','Ernesto Ramirez','José Efren','Juan Carlos lavin','Ricardo Meza','0'),(0,73,'HEPTA - 23345','Proyecto test','00012','ALVARO ISRAEL CABEZAS RIOS','ALVARO ISRAEL CABEZAS RIOS','ALVARO ISRAEL CABEZAS RIOS','ALVARO ISRAEL CABEZAS RIOS','ALVARO ISRAEL CABEZAS RIOS','1'),(0,71,'','','','','','','','','1');
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resultado_calculo_aerodeslizador`
--

DROP TABLE IF EXISTS `resultado_calculo_aerodeslizador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resultado_calculo_aerodeslizador` (
  `idresultado_calculo_aerodeslizador` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_calculo_aerodeslizador` tinytext DEFAULT NULL,
  `codigo_pais` tinytext DEFAULT NULL,
  `codigo_planta` tinytext DEFAULT NULL,
  `codigo_proyecto` tinytext DEFAULT NULL,
  `diagrama_flujo` tinytext DEFAULT NULL,
  `codigo_aerodeslizador` tinytext DEFAULT NULL,
  `codigo_ventilador` tinytext DEFAULT NULL,
  `elevacion_planta` tinytext DEFAULT NULL,
  `temperaturaMinC_planta` tinytext DEFAULT NULL,
  `temperaturaMinF_planta` tinytext DEFAULT NULL,
  `temperaturaProC_planta` tinytext DEFAULT NULL,
  `temperaturaProF_planta` tinytext DEFAULT NULL,
  `temperaturaMaxC_planta` tinytext DEFAULT NULL,
  `temperaturaMaxF_planta` tinytext DEFAULT NULL,
  `codigo_material` tinytext DEFAULT NULL,
  `densidad_transporte_kg_m3` tinytext DEFAULT NULL,
  `densidad_transporte_lb_ft3` tinytext DEFAULT NULL,
  `densidad_aireado_kg_m3` tinytext DEFAULT NULL,
  `densidad_aireado_lb_ft3` tinytext DEFAULT NULL,
  `material_angulo_reposo` tinytext DEFAULT NULL,
  `material_humedad_p_p` tinytext DEFAULT NULL,
  `material_humedad_w_w` tinytext DEFAULT NULL,
  `material_temperaturaC` tinytext DEFAULT NULL,
  `material_temperaturaF` tinytext DEFAULT NULL,
  `capacidad_operacion_tph` tinytext DEFAULT NULL,
  `capacidad_operacion_stph` tinytext DEFAULT NULL,
  `inclinacion` tinytext DEFAULT NULL,
  `longitud_mm` tinytext DEFAULT NULL,
  `longitud_ft` tinytext DEFAULT NULL,
  `eficiencia` tinytext DEFAULT NULL,
  `capacidadAerodeslizador_capacidad_diseño_tph` tinytext DEFAULT NULL,
  `capacidadAerodeslizador_capacidad_diseño_stph` tinytext DEFAULT NULL,
  `capacidadAerodeslizador_factor_cemex` tinytext DEFAULT NULL,
  `capacidadAerodeslizador_capacidad_operacion_tph` tinytext DEFAULT NULL,
  `capacidadAerodeslizador_capacidad_operacion_stph` tinytext DEFAULT NULL,
  `capacidadVentilador_flujoAire_areaTela_Scfm_ft2` tinytext DEFAULT NULL,
  `capacidadVentilador_flujoAire_areaTela_Nm3_h_m2` tinytext DEFAULT NULL,
  `capacidadVentilador_flujoAire_normal_Nm3_h` tinytext DEFAULT NULL,
  `capacidadVentilador_presion_mm_H2O` tinytext DEFAULT NULL,
  `capacidadVentilador_presion_mbar` tinytext DEFAULT NULL,
  `capacidadVentilador_flujoAire_actual_Am3_h` tinytext DEFAULT NULL,
  `capacidadVentilador_flujoAire_actual_Acfm` tinytext DEFAULT NULL,
  `tamanoAerodeslizador_flujoMaterial_3_h` tinytext DEFAULT NULL,
  `tamanoAerodeslizador_tamano_A` tinytext DEFAULT NULL,
  `tamanoAerodeslizador_tamano_B` tinytext DEFAULT NULL,
  `tamanoAerodeslizador_tamano_C` tinytext DEFAULT NULL,
  `tamanoAerodeslizador_tamano_D` tinytext DEFAULT NULL,
  `tamanoAerodeslizador_areaTela_m2` tinytext DEFAULT NULL,
  `potenciaVentilador_perdiaPresion_mbar` tinytext DEFAULT NULL,
  `potenciaVentilador_perdiaPresion_pa` tinytext DEFAULT NULL,
  `potenciaVentilador_perdiaPresion_in_H2O` tinytext DEFAULT NULL,
  `potenciaVentilador_flujoAire_Actual_Am3_s` tinytext DEFAULT NULL,
  `potenciaVentilador_flujoAire_Actual_Acfm` tinytext DEFAULT NULL,
  `potenciaVentilador_potencia_kw` tinytext DEFAULT NULL,
  `potenciaVentilador_potencia_hp` tinytext DEFAULT NULL,
  `aerodeslizador_capacidadOperacion_tph` tinytext DEFAULT NULL,
  `aerodeslizador_capacidadOperacion_stph` tinytext DEFAULT NULL,
  `aerodeslizador_capacidadDiseno_tph` tinytext DEFAULT NULL,
  `aerodeslizador_capacidadDiseno_stph` tinytext DEFAULT NULL,
  `aerodeslizador_densidadMaterial_aireado_kg_m3` tinytext DEFAULT NULL,
  `aerodeslizador_densidadMaterial_aireado_lb_ft3` tinytext DEFAULT NULL,
  `aerodeslizador_ancho_mm` tinytext DEFAULT NULL,
  `aerodeslizador_ancho_inches` tinytext DEFAULT NULL,
  `aerodeslizador_longitud_m` tinytext DEFAULT NULL,
  `aerodeslizador_longitud_ft` tinytext DEFAULT NULL,
  `aerodeslizador_inclinacion` tinytext DEFAULT NULL,
  `ventilador_capacidadOperacion_Am3_h` tinytext DEFAULT NULL,
  `ventilador_capacidadOperacion_Acfm` tinytext DEFAULT NULL,
  `ventilador_potencia_kw` tinytext DEFAULT NULL,
  `ventilador_potencia_hp` tinytext DEFAULT NULL,
  `ventilador_temperatura_C` tinytext DEFAULT NULL,
  `ventilador_temperatura_F` tinytext DEFAULT NULL,
  `ventilador_presionNanometrica_mm_H2O` tinytext DEFAULT NULL,
  `ventilador_presionNanometrica_in_H2O` tinytext DEFAULT NULL,
  PRIMARY KEY (`idresultado_calculo_aerodeslizador`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
