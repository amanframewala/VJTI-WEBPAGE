-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: college
-- ------------------------------------------------------
-- Server version	5.7.18-log

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Dhiren R Patel','Director'),(2,'Dr. V. M. Topkar','Deputy Director'),(3,'Dr.  K. K. Sangle','Dean Academic Programmes'),(4,' S.P.Borkar','Dean Administration'),(5,'Dr Sanjay M.G.','Associate Dean Students'),(6,'Dr. A.S.Wayal','Assoicate Dean Infrastructure & Planning'),(7,'Dr. B.E Narkhede','Associate Dean Infrastructure  & Maintenance'),(8,'Dr. A.N. Bambole','Faculty Incharge  Library'),(9,' A.A. Pandit','Faculty Incharge Institute Website'),(10,'Dr. M.R. Shirole','Controller of Examination Degree'),(11,'Prof. S.V. Diwan','Controller of Examination Diploma'),(12,'Dr. V. M. Phalle','Training and Placement Officer'),(13,'Dr. V. N. Palaskar','Registrar'),(14,'Dr. R. D Daruwalla','Head Electrical , Electronics , Electronics & Telecommunication Dept'),(15,'Dr. A.S. Wayal','Head Civil & Environmental Engg Dept'),(16,'Dr. Sujatha P.','Head Technical & Applied Chemistry Dept'),(17,'Dr. N.P. Gulhane','Head Mechanical Engg Dept'),(18,'Dr. A. A. Pandit','Head MCA Dept'),(19,'Dr. V .B. Nikam','Head Computer & Informatiom Technology Dept'),(20,'Prof. Usha Nair','I/C Humanities and Management Dept'),(21,'Dr. V. B. Deshmukh','Head Structural Engg Dept'),(22,'Dr. D. K. Shinde','Head Production Engg Dept'),(23,'Dr. V.D. Gotmare','Head Textile Manufactures Dept'),(24,'Dr. D.S. Wavhal','I/C  Head Physics Dept'),(25,'Prof. B.G. Bilapatte','I/C Head Mathematics Dept'),(26,'Dr. R.D. Daruwalla','Principal Rector, Hostel');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `administartion`
--

DROP TABLE IF EXISTS `administartion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administartion` (
  `name` varchar(25) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administartion`
--

LOCK TABLES `administartion` WRITE;
/*!40000 ALTER TABLE `administartion` DISABLE KEYS */;
INSERT INTO `administartion` VALUES ('Dhiren R Patel','Director',0),('Dr. M.R. Shirole','Controller of Examination Degree',0),('Prof. S.V. Diwan','Controller of Examination Diploma',0),('Dr. V. M. Phalle','Training and Placement Officer',0),('Dr. R. D Daruwalla','Head Electrical , Electronics , Electronics & Telecommunication Dept',0),('Dr. V. M. Topkar','Deputy Director',0),('Dr. V. B. Deshmukh','Head Structural Engg Dept',0),('Dr. D. K. Shinde','Head Production Engg Dept',0),('Dr. V.D. Gotmare','Head Textile Manufactures Dept',0),('Dr. D.S. Wavhal','I/C  Head Physics Dept',0),('Prof. B.G. Bilapatte','I/C Head Mathematics Dept',0),('Dr. R.D. Daruwalla','Principal Rector, Hostel',0),('Dr.  K. K. Sangle','Dean Academic Programmes',0),(' S.P.Borkar','Dean Administration',0),('Dr Sanjay M.G.','Associate Dean Students',0),('Dr. A.S.Wayal','Assoicate Dean Infrastructure & Planning',0),('Dr. B.E Narkhede','Associate Dean Infrastructure  & Maintenance',0),('Dr. A.N. Bambole','Faculty Incharge  Library',0),(' A.A. Pandit','Faculty Incharge Institute Website',0),('Dr. V. N. Palaskar','Registrar',0),('Dr. A.S. Wayal','Head Civil & Environmental Engg Dept',0),('Dr. Sujatha P.','Head Technical & Applied Chemistry Dept',0),('Dr. N.P. Gulhane','Head Mechanical Engg Dept',0),('Dr. A. A. Pandit','Head MCA Dept',0),('Dr. V .B. Nikam','Head Computer & Informatiom Technology Dept',0),('Prof. Usha Nair','I/C Humanities and Management Dept',0);
/*!40000 ALTER TABLE `administartion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cons`
--

DROP TABLE IF EXISTS `cons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cons` (
  `cons_id` int(11) NOT NULL AUTO_INCREMENT,
  `Designation` varchar(45) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Telephone` varchar(25) DEFAULT NULL,
  `Purpose_for_Contact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cons_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cons`
--

LOCK TABLES `cons` WRITE;
/*!40000 ALTER TABLE `cons` DISABLE KEYS */;
INSERT INTO `cons` VALUES (1,'Director',' Dhiren R Patel','director@vjti.org.in',' 24198101','For everything- highest emergency'),(2,'Deputy Director',' Dr. V.M. Topkar','  vmtopkar@vjti.org.in',' 24198142',' For everything- emergency'),(3,'Dean - Academic Programmes',' Dr. K.K.Sangle','dean_ap@vjti.org.in','24198252','Academic matters, relating to B.Tech, M.Tech and Ph.D Programmes.'),(4,'Dean - Administration','  S.P.Borkar','spborkar@vjti.org.in',NULL,'Administration related'),(5,' Registrar',' Dr. V. N. Palaskar','registrar@vjti.org.in',' 24198106','Administration related'),(6,'Controller of Examination Degree',' Prof. M. R. Shirole','coe@vjti.org.in',' 24198156/24198109',' Degree Examination related matters'),(7,'Controller of Examination Diploma',' Prof S. V. Diwan','coediploma2011@vjti.org.in',' 022-24198307/120','Diploma Examination related matters'),(8,'Dean Diploma',' Dr. S. S. Lokegaonkar',' dean_diploma@vjti.org.in',' 24198120','Academic matters related to Diploma Programmes'),(9,'P.A. to Director',NULL,'pa_to_director@vjti.org.in','24198102/24152874','General'),(10,'TEQIP office',NULL,'teqipcell@vjti.org.in','24198117','TEQIP related communications'),(11,'Accounts Officer',NULL,NULL,'24198114/ 24198114','Accounts related communications'),(12,'Security Officer',' Mr. S. G. Sabnis',NULL,'24198110','Security related communications'),(13,'Stores I/C',NULL,NULL,'24198111','Purchase related communications'),(14,'Heads of the Dept.',NULL,NULL,NULL,'Departmental communications (All matters related to Departments)'),(15,'Electrical & Electronics',' Dr. R. D. Daruwala','rddaruwala@vjti.org.in','24198170','-do-'),(16,'Computer Engineering & Information Technology',' Dr. V. B. Nikam','vbnikam@vjti.org.in','24198150','-do-'),(17,'Master of Comp. Applications','[Ms] Anala .A.Pandit','aapandit@vjti.org.in','24198159','-do-'),(18,'Mechanical',' Dr. N.P. Gulhane','npgulhane@vjti.org.in','24198200','-do-'),(19,'Civil',' Dr. A.S. Wayal','aswayal@vjti.org.in','24198138/141','-do-'),(20,'Textile Manufacturing',' Dr. V. D. Gotmare','vdgotmare@vjti.org.in','24198255','-do-'),(21,'Production Engineering',' Dr. D.K.Shinde','dkshinde@vjti.org.in','24198235','-do-'),(22,'Structural',' Dr. V.B.Deshmukh','vbdeshmukh@vjti.org.in',' 24198245','-do-'),(23,'Chemistry',' Dr. Sujatha P.','sujathap@vjti.org.in',' 24198126/127','-do-'),(24,'Physics (I/C)',' Dr. D.S. Wavhal','dswavhal@vjti.org.in','24198280','-do-'),(25,'Mathematics (I/C)',' Prof. B.G. Bilapatte','bgbilapatte@vjti.org.in',' 24198275','-do-'),(26,'Humanities & Mgmt (I/C)',' Prof. Usha Nair','ushanair@vjti.org.in','24198270','-do-');
/*!40000 ALTER TABLE `cons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `designation` varchar(100) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `EMAIL` varchar(45) DEFAULT NULL,
  `TELEPHONE` varchar(45) DEFAULT NULL,
  `PURPOSE OF CONTACT` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`designation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES ('Dean - Academic Programmes','Dr. K.K.Sangle','dean_ap@vjti.org.in','24198252','Academic matters, relating to B.Tech, M.Tech and Ph.D Programmes.'),('Dean - Administration','S.P.Borkar','spborkar@vjti.org.in',NULL,'Administration related'),('Deputy Director','Dr. V.M. Topkar','vmtopkar@vjti.org.in','24198142','For everything- emergency'),('Director','Dhiren R Patel','director@vjti.org.in','24198101','For everything- highest emergency'),('Registrar','Dr. V. N. Palaskar','registrar@vjti.org.in','24198106','Administration related');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `division`
--

DROP TABLE IF EXISTS `division`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `division` (
  `iddivision` varchar(50) NOT NULL,
  `divisiondel` text NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`iddivision`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `division`
--

LOCK TABLES `division` WRITE;
/*!40000 ALTER TABLE `division` DISABLE KEYS */;
INSERT INTO `division` VALUES ('Civil & Environmental ','The Department of Civil and Environmental Engineering was established in 1912. The department is situated on the first floor in an extension of the main building.The department conducts courses at the diploma, graduate and post graduate levels. The department is also recognized for doctoral research by the University of Mumbai. It has laboratories equipped with the most modern equipments and test facilities. The department continuously undertakes research and consultancy projects to share and enhance technical knowledge. The faculty and students both benefit from the exposure they get through these activities.',1),('Computer Technology','Vision\n\nTo become the world-class student-centred department which fosters high- quality learning and research for both undergraduate and graduate students.\n\nMission :\n\nTo equip our graduates with the knowledge and expertise to contribute significantly to the knowledge and information industry and to continue to grow professionally.\nTo collaborate with local, state, national, and international entities in education and research.\nTo engage faculty, students and alumni in research activities.\nTo nurture our graduate\'s interpersonal and entrepreneurial skills so they can provide leadership within the information industry\'s diverse culture.',3),('Electrical Engineering','The Electrical Engineering Department is the largest department in the institute consisting of: \n\ni) U.G. (3 programs-B.Tech.-Electrical, Electronics, Electronics & Telecomm.) \n\nii) P.G. (4 programs- M.Tech. - Electrical-Power & Control, Electronics, Electronics & Telecomm.) \n\niii) Ph.D. (2 programs- Electrical& Electronics). At present there are 52 students registered for Ph.D. \n\niv) Diploma (2 programs- Electrical & Electronics).\n\nIt is recognized for doctoral research heritage and competent faculty members in many diverse fields. The Department has laboratories needed for the teaching and practical experiments of various courses stated above. Apart from the regular teaching of diploma, UG and PG courses, the department has excellent industry institute interaction. It has developed state of art - High Voltage Laboratory due to generous funding by Siemens (Germany) and All India Council for Technical Education (AICTE).  This laboratory caters to various testing needs of industry, carries out consultancy & research for industries and Government organizations. The Department has recently developed state of art VJTI- L&T Low Voltage Switchgear Laboratory to bridge the gap between industry and Academics.  \n\nThe Department is also in the process of setting up a centre for EMF studies which will strengthen the   fundamentals of the students and contribute extensively to research in the area of computational dynamics and design of electrical machines. Under TEQIP program it has procured equipment for Communication, Virtual Instrumentation (A new laboratory of Virtual Instrumentation is developed under TEQIP I), Control System, DSP.\n\nThe aim of the Department is to strengthen the Diploma, UG & PG programs by bridging the gap between academics and industry, increase the research with adequate sponsored projects and industry - institute interaction. \n\nYear of establishment: 1900 (Started with Diploma in Electrical Engineering)',4),('Humanities & Management','The department had its origin in the need for engineers to be proficient in Basic English, Economics and Management.\n\nThe department has been functioning independently since 1973. The department conducts courses for both degree and diploma students in Communication Skills, Economics, Management and Humanities.\nThe department also conducts a number of activities of the institute. The administrative activities include the conduction of class elections, co-curricular activities for diploma students and preparing of reports. The department also actively participates in social and extracurricular activities including the annual magazine and the institutes\' cultural and technical festivals.',11),('Mathematics','In order to have a strong mathematical base at both the degree and diploma levels, the department conducts lectures for the first four semesters of diploma courses and the first five semesters of the degree courses.\n\nThe department takes the responsibility of preparing students for the high levels of mathematical skills required in modern engineering.',9),('Mechanical Engineering','Established in 1887, the department of Mechanical engineering remains among the premier departments of VJTI. It has had a long and illustrious history and offers courses at the graduate and postgraduate levels. The department is recognized for doctoral research by the University of Mumbai.\n\nThe department has kept pace with the rapid development of computer aided methods of design and manufacture with state of the art robotics and CAD/CAM facilities.\n\nThe laboratories in the department are recognized in a number of areas as testing facilities. The department also has workshops for training in smithy, carpentry, welding and machine tools.',5),('Physics','The department of Physics was established in 1970 to impart basic training in physics to the diploma and degree students.\n\nThe department conducts physics lectures for the first year degree and diploma students. It has laboratory facilities for limited testing of conductivities of materials, optical properties of materials and other areas of research.\n\nThe laboratories are equipped with He-Ne laser systems, optical communication kits and ultrasonic flow detectors.',10),('Production Engineering','The department of Production engineering was established in 1959 as the department of industrial engineering to conduct part time course leading to postgraduate diploma in production engineering. At present the department offers undergraduate and postgraduate programmes as well as postgraduate diploma in industrial engineering (DIE) which is a multi disciplinary programme.\n\nLaboratories and \nTesting Facilities\n\nProcess Laboratory\nMeteorology\nComputer Laboratory\n\nThe B.E. production programme is of sandwich type and is recognized by the board of apprenticeship training. Because of this, the students undertake live projects in various industries as a part of their curriculum. Postgraduate students also undertake industrial projects. The department has very good industrial interaction through these projects and industrial visiting faculty.\n\nThe department has three major laboratories - production process laboratory, meteorology laboratory and computer laboratory. Production process laboratory is equipped with sophisticated machine tools for students training and also for consultation work such as prototype making and testing. Meterology laboratory is equipped with various precision measuring instruments and standards. Various projects have been carried out in calibration and standardization activities in the laboratory. This department  also undertakes Testing/Consultancy in Trailer Design, etc.\n\n ',6),('Structural Engineering','This department was established in the year 1960. It deals with Structural engineering and Geotechnical engineering. It also provides the base needed for all the degree courses run by the institute in the subjects of strength of materials and engineering mechanics for diploma and degree students.\nIt conducts postgraduate degree courses in civil engineering with structural engineering as an area of specialization. The department has an excellent relationship with industry and undertakes considerable amount of consultancy work. The department is situated in the northern and southern sections of the main building.',2),('Technical & Applied Chemistry','The department of Technical and Applied Chemistry has been established to make students proficient in basic applied chemistry. This subjects is common for all first year bachelor\'s degree students. the department also conducts a variety of courses in the areas of cosmetics, foods, drugs, and paints at the diploma and post graduate levels.\n\nIn addition to research work, the department also conducts industrial testing in the fields of textiles, paints, detergents, cements and other materials.',8),('Textile Manufacturing','The department of Textile Manufactures was started as the Ripon Textile School in the early days of the institute.\n\nThe department is currently located in the northern light steel trussed roof building. It has variety of modern spinning and weaving machines and laboratory equipment. The department carries out industry consultancy projects and is recognized by the Government of India as an official testing facility.\n\nBTech and MText degrees are awarded at the graduate and postgraduate levels. In-plant training is an integral part of the learning process at the diploma and B. Text levels.',7);
/*!40000 ALTER TABLE `division` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manage`
--

DROP TABLE IF EXISTS `manage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manage` (
  `manage_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `affiliation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`manage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manage`
--

LOCK TABLES `manage` WRITE;
/*!40000 ALTER TABLE `manage` DISABLE KEYS */;
INSERT INTO `manage` VALUES (1,1,'Smt. Sandra R. Shroff ','Vice Chairman, '),(2,NULL,'Chairman, ','United Phosphorus Ltd (UPL),'),(3,NULL,'Nominee of Government of Maharashtra ','Uniphos House, Madhu Park, 11th Road,'),(4,NULL,NULL,'Khar (W), MUMBAI 400052'),(5,2,'Dr. Deepak B. Pathak','CSE Department, '),(6,NULL,'Member, ','I.I.T. POWAI,'),(7,NULL,'Nominee of Government of Maharashtra','MUMBAI'),(8,3,'Dr.. Mangesh V. Joshi','CEO, Sanrachana Structural Strengthening Pvt. Ltd. (SSSPL), '),(9,NULL,'Member, ','Monalisa Co-Op Hsg. Soc.,  '),(10,NULL,'Nominee of Government of Maharashtra','101-102, Ground Floor, Hari Niwas Circle,'),(11,NULL,NULL,'Thane (W), MUMBAI 400602'),(12,4,'Shri. Narain Singh','Former, '),(13,NULL,'Member,','JS,UGC, H-3/21,Bengali Colony,  '),(14,NULL,'Nominee of UGC','Mahavir Enclave, New Delhi-45'),(15,5,'Shri S.J .Kunte','Principal Secretary, '),(16,NULL,'Member, ','Higher and Technical Education,Govt. of Maharashtra,  '),(17,NULL,'Representative of Government of Maharashtra','Mantralaya, Mumbai 400032'),(18,6,'Dr. Prachi Gharpure ','Sardar Patel Institute of Technology(SPIT)'),(19,NULL,'Member,',NULL),(20,NULL,'Nominee of University of Mumbai','Versova Road, Munshi Nagar, Bhavans College Campus, Andheri -(West) Mumbai 400 053'),(21,7,'Dhiren R. Patel','Director,'),(22,NULL,'Member Secretary','Veermata  Jijabai  Technological  Institute'),(23,8,'Dr. R. D. Daruwala','Professor, Electrical Engineering Department,'),(24,NULL,'Member, Institute\'s Teacher Representative','Veermata  Jijabai  Technological  Institute'),(25,9,'Dr. G. P. Bhole','Associate Professor, Computer Engineering & IT Department,'),(26,NULL,'Member, Institute\'s Teacher Representative','Veermata  Jijabai  Technological  Institute');
/*!40000 ALTER TABLE `manage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `management`
--

DROP TABLE IF EXISTS `management`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `management` (
  `management_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name_of_BOG_Member` varchar(255) DEFAULT NULL,
  `Affiliation` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`management_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `management`
--

LOCK TABLES `management` WRITE;
/*!40000 ALTER TABLE `management` DISABLE KEYS */;
INSERT INTO `management` VALUES (1,'Smt. Sandra R. Shroff Chairman, Nominee of Government of Maharashtra ','Vice Chairman,United Phosphorus Ltd (UPL),Uniphos House, Madhu Park, 11th Road,Khar (W), MUMBAI 400052'),(2,'Dr. Deepak B. PathakMember, Nominee of Government of Maharashtra','CSE Department, I.I.T. POWAI,MUMBAI'),(3,'Dr.. Mangesh V. JoshiMember, Nominee of Government of Maharashtra','CEO, Sanrachana Structural Strengthening Pvt. Ltd. (SSSPL), Monalisa Co-Op Hsg. Soc.,  101-102, Ground Floor, Hari Niwas Circle,Thane (W), MUMBAI 400602'),(4,'Shri. Narain SinghMember,Nominee of UGC','Former, JS,UGC, H-3/21,Bengali Colony,  Mahavir Enclave, New Delhi-45'),(5,'Shri S.J .KunteMember, Representative of Government of Maharashtra','Principal Secretary, Higher and Technical Education,Govt. of Maharashtra,  Mantralaya, Mumbai 400032'),(6,'Dr. Prachi Gharpure Member,Nominee of University of Mumbai','Sardar Patel Institute of Technology(SPIT)Versova Road, Munshi Nagar, Bhavans College Campus, Andheri -(West) Mumbai 400 053'),(7,'Dhiren R. PatelMember Secretary','Director,Veermata  Jijabai  Technological  Institute'),(8,'Dr. R. D. DaruwalaMember, Institute\'s Teacher Representative','Professor, Electrical Engineering Department,Veermata  Jijabai  Technological  Institute'),(9,'Dr. G. P. BholeMember, Institute\'s Teacher Representative','Associate Professor, Computer Engineering & IT Department,Veermata  Jijabai  Technological  Institute');
/*!40000 ALTER TABLE `management` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'college'
--

--
-- Dumping routines for database 'college'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-29 23:15:19
