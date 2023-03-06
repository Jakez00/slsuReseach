/*
SQLyog Enterprise - MySQL GUI v8.18 
MySQL - 5.5.5-10.4.24-MariaDB : Database - capstone
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`capstone` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `capstone`;

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT '',
  `lastname` varchar(50) DEFAULT '',
  `middlename` varchar(50) DEFAULT '',
  `phone` varchar(50) DEFAULT '',
  `department` varbinary(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4;

/*Data for the table `employee` */

insert  into `employee`(`id`,`firstname`,`lastname`,`middlename`,`phone`,`department`) values (103,'Admin','','','09650922671',NULL),(104,'Jevie','Vanzuela','','09108541601',NULL),(105,'Jake','Cor','','09108541601','CCSIT'),(111,'Director','','','09108541601',NULL),(112,'Information System & Data Analytics','','','09108541602',NULL),(113,'Evaluation and Review','','','09108541602',NULL),(114,'Monitoring and Evaluation Head','','','09108541602',NULL),(115,'Paty','Yeah','','232323',NULL),(116,'Jake','Getil','','0909099','CCSIT'),(117,'Da','asd','asd','asd',NULL),(124,'dsfdsf s ew','sdf ','sdf ','223432423',NULL),(125,'tyu','ghgjhgj','tyu','546646',NULL),(126,'tyu','zxc','asd','234234','COE'),(127,'Testme','Testme','Testme','sd',NULL),(128,'John','Yong','Lee','0987656789',NULL),(129,'Mark','Chong','Yu','98745679234',NULL),(130,'John','Uy','John','987654567890',NULL),(131,'Jake','Sample','sample','0987654323','CCSIT'),(133,'ME','LEE','LEE','(053) 577-3233',NULL),(134,'asd','asd','asd','0987456789','CCSIT'),(135,'Lai','lai','lai','1231323123','COE');

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proposalid` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `dateprocess` date DEFAULT NULL,
  `timeprocess` time DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4;

/*Data for the table `logs` */

insert  into `logs`(`id`,`proposalid`,`description`,`dateprocess`,`timeprocess`,`userid`,`comment`,`attachment`) values (1,73,'New Proposal Create','2022-09-17','17:12:19',115,'',NULL),(2,73,'Proposal Para Masaya Deleted ','2022-09-17','11:12:29',115,'',NULL),(3,74,'New Proposal Create','2022-09-17','17:17:26',115,'',NULL),(4,75,'New Proposal Create','2022-09-17','17:18:17',115,'',NULL),(5,76,'New Proposal Create','2022-09-17','17:18:22',115,'',NULL),(6,77,'New Proposal Create','2022-09-17','17:18:26',115,'',NULL),(7,76,'Proposal Yeaj Deleted ','2022-09-17','11:19:26',115,'',NULL),(8,75,'Proposal Yea Deleted ','2022-09-17','11:19:52',115,'',NULL),(9,78,'New Proposal Create','2022-09-22','13:28:26',115,'',NULL),(10,79,'New Proposal Create','2022-09-22','13:39:30',115,'',NULL),(11,80,'New Proposal Create','2022-09-22','13:47:49',115,'',NULL),(12,81,'New Proposal Create','2022-09-22','21:28:57',115,'',NULL),(13,82,'New Proposal Create','2022-09-22','21:30:42',115,'',NULL),(14,83,'New Proposal Create','2022-09-22','21:31:41',115,'',NULL),(15,84,'New Proposal Create','2022-09-22','21:32:54',104,'',NULL),(16,85,'New Proposal Create','2022-09-22','21:33:14',104,'',NULL),(17,86,'New Proposal Create','2022-09-22','21:33:58',104,'',NULL),(18,87,'New Proposal Create','2022-09-22','21:36:20',115,'',NULL),(19,88,'New Proposal Create','2022-09-22','21:42:43',115,'',NULL),(20,89,'New Proposal Create','2022-09-22','21:43:05',115,'',NULL),(21,90,'New Proposal Create','2022-09-22','21:48:43',115,'',NULL),(22,90,'Proposal aa Deleted ','2022-09-22','15:48:58',115,'',NULL),(23,89,'Proposal aaaaaaaa Deleted ','2022-09-22','15:49:04',115,'',NULL),(24,88,'Proposal awda Deleted ','2022-09-22','15:49:09',115,'',NULL),(25,74,'Proposal Yeah Yeah Deleted ','2022-09-22','15:49:14',115,'',NULL),(26,91,'New Proposal  Create','2022-09-22','21:52:18',115,'',NULL),(27,92,'New Proposal aaa Create','2022-09-22','21:54:05',115,'',NULL),(28,93,'Proposal To the Moon sucessfully created','2022-09-22','21:55:20',115,'',NULL),(29,92,'Proposal aaa Deleted ','2022-09-22','15:55:54',115,'',NULL),(30,91,'Proposal adsd Deleted ','2022-09-22','15:55:58',115,'',NULL),(31,87,'Proposal yeahhh Deleted ','2022-09-22','15:56:03',115,'',NULL),(32,94,'Proposal ssss sucessfully created','2022-09-23','10:53:07',115,'',NULL),(33,94,'Proposal ssss Deleted ','2022-09-23','04:53:42',115,'',NULL),(34,95,'Proposal zzz sucessfully created','2022-09-23','10:53:54',115,'',NULL),(35,96,'Proposal asda sucessfully created','2022-09-23','10:55:26',115,'',NULL),(36,97,'Proposal Taw sucessfully created','2022-09-23','10:56:01',115,'',NULL),(37,96,'Proposal asda Deleted ','2022-09-23','04:56:13',115,'',NULL),(38,97,'Proposal Taw Deleted ','2022-09-23','04:56:19',115,'',NULL),(39,95,'Proposal zzz Deleted ','2022-09-23','04:56:25',115,'',NULL),(40,98,'Proposal Laaya sucessfully created','2022-09-23','11:03:24',115,'',NULL),(41,98,'Proposal Laaya Deleted ','2022-09-23','05:03:40',115,'',NULL),(42,99,'Proposal a sucessfully created','2022-09-23','11:13:44',115,'',NULL),(43,99,'Proposal a Deleted ','2022-09-23','05:59:11',103,'',NULL),(44,100,'Proposal awdawddd sucessfully created','2022-10-08','10:39:56',115,'',NULL),(45,100,'Proposal awdawddd Deleted ','2022-10-08','04:40:20',115,'',NULL),(46,101,'Proposal dsdsds sucessfully created','2022-10-08','17:13:19',115,'',NULL),(47,102,'Proposal dsdsdssds sucessfully created','2022-10-08','17:13:25',115,'',NULL),(48,103,'Proposal 11 sucessfully created','2022-10-08','17:13:30',115,'',NULL),(49,104,'Proposal 1112 sucessfully created','2022-10-08','17:13:35',115,'',NULL),(50,105,'Proposal 33 sucessfully created','2022-10-08','17:13:39',115,'',NULL),(51,106,'Proposal 333 sucessfully created','2022-10-08','17:13:45',115,'',NULL),(52,103,'Proposal 11 Deleted ','2022-10-08','11:32:29',115,'',NULL),(53,104,'Proposal 1112 Deleted ','2022-10-08','11:32:34',115,'',NULL),(54,105,'Proposal 33 Deleted ','2022-10-08','11:32:38',115,'',NULL),(55,106,'Proposal 333 Deleted ','2022-10-08','11:32:42',115,'',NULL),(56,80,'Proposal aaddsdasda Deleted ','2022-10-08','11:32:45',115,'',NULL),(57,101,'Proposal dsdsds Deleted ','2022-10-08','11:32:49',115,'',NULL),(58,107,'Proposal 1 sucessfully created','2022-10-08','17:33:36',115,'',NULL),(59,108,'Proposal 11 sucessfully created','2022-10-08','17:33:40',115,'',NULL),(60,109,'Proposal 111 sucessfully created','2022-10-08','17:33:45',115,'',NULL),(61,110,'Proposal 1112 sucessfully created','2022-10-08','17:33:49',115,'',NULL),(62,111,'Proposal 11111 sucessfully created','2022-10-08','17:33:55',115,'',NULL),(63,112,'Proposal 111111 sucessfully created','2022-10-08','17:34:00',115,'',NULL),(64,113,'Proposal 1111111 sucessfully created','2022-10-08','17:34:06',115,'',NULL),(65,114,'Proposal 11111111 sucessfully created','2022-10-08','17:34:11',115,'',NULL),(66,115,'Proposal 111111111 sucessfully created','2022-10-08','17:34:17',115,'',NULL),(67,116,'Proposal 1111111111 sucessfully created','2022-10-08','17:34:21',115,'',NULL),(68,117,'Proposal q sucessfully created','2022-10-08','18:00:00',115,'',NULL),(69,118,'Proposal qq sucessfully created','2022-10-08','18:00:06',115,'',NULL),(70,119,'Proposal qqq sucessfully created','2022-10-08','18:00:10',115,'',NULL),(71,120,'Proposal qqqq sucessfully created','2022-10-08','18:00:16',115,'',NULL),(72,121,'Proposal qqqqq sucessfully created','2022-10-08','18:00:22',115,'',NULL),(73,122,'Proposal qqqqqq sucessfully created','2022-10-08','18:00:36',115,'',NULL),(74,123,'Proposal awd sucessfully created','2022-10-08','18:12:15',115,'',NULL),(75,124,'Proposal awdaa sucessfully created','2022-10-08','18:12:30',115,'',NULL),(76,125,'Proposal awddd sucessfully created','2022-10-08','18:13:59',115,'',NULL),(77,126,'Proposal aaa sucessfully created','2022-10-08','18:14:42',115,'',NULL),(78,127,'Proposal 111111111111 sucessfully created','2022-10-08','18:14:56',115,'',NULL),(79,0,'Proposal  sucessfully forwarded to director','2022-10-08','12:19:15',NULL,'',NULL),(80,128,'Proposal aaaa sucessfully created','2022-10-08','18:21:12',115,'',NULL),(81,128,'Proposal aaaa Deleted ','2022-10-08','12:21:59',115,'',NULL),(82,122,'Proposal qqqqqq Deleted ','2022-10-08','12:22:04',115,'',NULL),(83,107,'Proposal 1 Deleted ','2022-10-08','12:22:07',115,'',NULL),(84,112,'Proposal 111111 Deleted ','2022-10-08','12:33:02',115,'',NULL),(85,129,'Proposal dai sucessfully created','2022-10-08','20:06:27',115,'',NULL),(86,130,'Proposal daia sucessfully created','2022-10-08','22:07:38',115,'',NULL),(87,131,'Proposal daiaa sucessfully created','2022-10-08','22:07:45',115,'',NULL),(88,130,'Proposal daia Deleted ','2022-10-11','08:01:45',115,'',NULL),(89,131,'Proposal daiaa Deleted ','2022-10-11','08:01:50',115,'',NULL),(90,132,'Proposal Sampleeee sucessfully created','2022-10-21','11:08:31',115,'',NULL),(91,133,'Proposal sad sucessfully created','2022-11-10','23:32:33',116,'',NULL),(92,134,'Proposal sads sucessfully created','2022-11-10','23:32:56',116,'',NULL),(93,135,'Proposal sadsdd sucessfully created','2022-11-10','23:33:06',116,'',NULL),(94,136,'Proposal Renovation of University Main Gate sucessfully created','2022-12-16','01:14:29',130,'',NULL),(95,136,'Forward proposal',NULL,NULL,37,'asdasd',''),(96,136,'Forward proposal',NULL,NULL,37,'sdsvxc sdsf sfsf',''),(97,136,'Forward proposal',NULL,NULL,37,'ssad asd','images (9) (15).jpeg'),(101,136,'Forward proposal',NULL,NULL,38,'zzxc','images (9) (15).jpeg'),(102,136,'Forward proposal',NULL,NULL,40,'dsfs sdf sdfsd sdfsdf','images (9) (28).jpeg'),(103,111,'Forward proposal',NULL,NULL,40,'asdasd','images (9) (16).jpeg'),(104,113,'Forward proposal',NULL,NULL,40,'ssf sdfsdf sf','images (9) (14).jpeg'),(105,136,'Forward proposal',NULL,NULL,39,'zxczxc asddasd asdas asdasd','images (9) (15).jpeg'),(106,136,'Forward proposal',NULL,NULL,41,'asdasd','images (9) (25).jpeg'),(107,136,'Forward proposal',NULL,NULL,52,'dsfsdf sfsdf sdfdsf sdf sdf sd','images (9) (24).jpeg'),(108,137,'Proposal asdasd sucessfully created','2022-12-17','10:10:39',131,'',NULL),(109,138,'Proposal SLSU Building Project sucessfully created','2022-12-17','10:11:02',131,'',NULL),(110,139,'Proposal Sample Title sucessfully created','2022-12-17','10:20:34',116,'',NULL),(111,140,'Proposal aasd sucessfully created','2022-12-17','10:21:36',131,'',NULL),(112,141,'Proposal SLSU Sample sucessfully created','2022-12-17','10:25:59',131,'',NULL),(113,142,'Proposal Sample SLSU Project sucessfully created','2022-12-17','10:28:46',131,'',NULL),(114,143,'Proposal asd sucessfully created','2022-12-17','10:29:47',131,'',NULL),(115,144,'Proposal xcv sucessfully created','2022-12-17','10:33:32',131,'',NULL),(116,140,'Proposal aasd Deleted ','2022-12-17','04:16:53',131,'',NULL),(117,144,'Proposal xcv Deleted ','2022-12-17','04:16:58',131,'',NULL),(118,143,'Proposal asd Deleted ','2022-12-17','04:17:02',131,'',NULL),(119,137,'Proposal asdasd Deleted ','2022-12-17','04:17:05',131,'',NULL),(120,141,'Proposal SLSU Sample Deleted ','2022-12-17','04:17:28',131,'',NULL),(121,138,'Forward proposal','2022-12-17','04:28:12',105,'wqeqwe  wqeq qwwq','Sample Project.docx'),(122,135,'Forward proposal','2022-12-17','04:40:26',111,'Directors comment','Traverse.pdf'),(123,138,'Forward proposal','2022-12-17','05:19:47',112,'sample comment','Electric Service.pdf'),(124,138,'Forward proposal','2022-12-17','05:25:46',113,'qwqwe qweqwe asdasd','Sample Project.docx'),(125,138,'Forward proposal','2022-12-17','05:26:21',112,' asda asasd asd','Sample Project.docx'),(126,138,'Forward proposal','2022-12-17','05:27:06',114,'asda asdasda sd','Sample Project.docx'),(127,145,'Proposal dsa sucessfully created','2022-12-17','19:32:53',131,'',NULL),(128,145,'Return proposal','2022-12-17','12:54:10',105,'asdasd','indexhmtl.txt'),(129,145,'Return proposal','2022-12-17','12:55:26',105,'asdasd','indexhmtl.txt'),(130,145,'Return proposal','2022-12-17','12:58:41',105,'wqr we wer wasdfasdfsa dsf','indexhmtl.txt'),(131,146,'Proposal asd sucessfully created','2022-12-18','19:55:44',131,'',NULL),(132,147,'Proposal asd aaa sucessfully created','2022-12-18','19:58:28',131,'',NULL),(133,148,'Proposal kddjd sucessfully created','2022-12-18','20:16:33',131,'',NULL),(134,149,'Proposal nvbnvb sucessfully created','2022-12-18','20:19:46',131,'',NULL),(135,150,'Proposal nvbnvb d sucessfully created','2022-12-18','20:20:54',131,'',NULL),(136,151,'Proposal SLSU Project plaza sucessfully created','2022-12-18','20:27:43',126,'',NULL),(137,151,'Forward proposal','2022-12-18','13:32:55',135,'asdasd','GREENGRASS.png'),(138,151,'Return proposal','2022-12-18','14:11:09',111,'asd sad','Sample Project.docx'),(139,151,'Resubmit Proposal sucessfully submitted','2022-12-18','14:33:02',126,'',NULL),(140,151,'Resubmit Proposal sucessfully submitted','2022-12-18','14:33:59',126,'',NULL),(141,151,'Resubmit Proposal sucessfully submitted','2022-12-18','14:34:30',126,'',NULL),(142,151,'Resubmit Proposal sucessfully submitted','2022-12-18','14:34:38',126,'',NULL);

/*Table structure for table `newproposal` */

DROP TABLE IF EXISTS `newproposal`;

CREATE TABLE `newproposal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '',
  `description` text DEFAULT NULL,
  `tags` varchar(100) DEFAULT '',
  `filename` varchar(100) DEFAULT '',
  `employeeid` varchar(11) DEFAULT NULL,
  `employeeid2` varchar(11) DEFAULT NULL,
  `employeeid3` varchar(11) DEFAULT NULL,
  `DateCreated` date DEFAULT NULL,
  `TimeCreated` time DEFAULT NULL,
  `AddedBy` varchar(11) DEFAULT NULL,
  `proposalstatus` int(11) DEFAULT 0,
  `entrylevel` int(11) DEFAULT 1,
  `ca` varchar(150) DEFAULT NULL,
  `pd` varchar(150) DEFAULT NULL,
  `pb` varchar(150) DEFAULT NULL,
  `ra` varchar(150) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8mb4;

/*Data for the table `newproposal` */

insert  into `newproposal`(`id`,`title`,`description`,`tags`,`filename`,`employeeid`,`employeeid2`,`employeeid3`,`DateCreated`,`TimeCreated`,`AddedBy`,`proposalstatus`,`entrylevel`,`ca`,`pd`,`pb`,`ra`,`department`) values (77,'ssssssssss','aaaaaaaaaaaa','aaaaa','upload/Act3.qgz','115',NULL,NULL,'2022-09-17','17:18:26',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(78,'awdaw','adwadw','awd','upload/Activity 1.docx','115',NULL,NULL,'2022-09-22','13:28:26',NULL,6,1,NULL,NULL,NULL,NULL,NULL),(79,'awdawd','awdawdawd','adwda ','upload/Activity-1-ENTREP.docx','115',NULL,NULL,'2022-09-22','13:39:30',NULL,7,1,NULL,NULL,NULL,NULL,NULL),(81,'New Proposal','First','1','upload/Activity 1.docx','104',NULL,NULL,'2022-09-22','21:28:57',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(82,'Test','awda','awd','upload/Activity 1.docx','104',NULL,NULL,'2022-09-22','21:30:42',NULL,7,1,NULL,NULL,NULL,NULL,NULL),(83,'wew','asdasd','aaa','upload/Activity 1.docx','104',NULL,NULL,'2022-09-22','21:31:41',NULL,6,1,NULL,NULL,NULL,NULL,NULL),(84,'Jev1','awdawd','awd','upload/Activity 1.docx','104',NULL,NULL,'2022-09-22','21:32:54',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(85,'jev 2','awdawd','awda','upload/Activity 1.docx','104',NULL,NULL,'2022-09-22','21:33:14',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(86,'jev 3','333333333','3','upload/Activity-1-ENTREP.docx','104',NULL,NULL,'2022-09-22','21:33:58',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(93,'To the Moon','aaa','111','upload/Activity 1.docx','115',NULL,NULL,'2022-09-22','21:55:20',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(102,'dsdsdssds','awdawd','aw','upload/My Hero Academia (Boku No Hero Academia) • r_BokuNoHeroAcademia (1).png','115',NULL,NULL,'2022-10-08','17:13:25',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(108,'11','1','1','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','17:33:40',NULL,7,1,NULL,NULL,NULL,NULL,NULL),(109,'111','1','1','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','17:33:45',NULL,6,1,NULL,NULL,NULL,NULL,NULL),(110,'1112','1','1','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','17:33:49',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(111,'11111','1','1','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','17:33:55',NULL,6,1,NULL,NULL,NULL,NULL,NULL),(113,'1111111','1','1','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','17:34:06',NULL,6,1,NULL,NULL,NULL,NULL,NULL),(114,'11111111','1','1','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','17:34:11',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(115,'111111111','1','1','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','17:34:17',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(116,'1111111111','1','1','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','17:34:21',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(117,'q','q','q','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','18:00:00',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(118,'qq','q','q','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','18:00:06',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(119,'qqq','q','q','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','18:00:10',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(120,'qqqq','q','q','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','18:00:16',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(121,'qqqqq','q','q','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','18:00:22',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(123,'awd','awda','qaaqq','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','18:12:15',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(124,'awdaa','awda','qaaqq','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','18:12:30',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(125,'awddd','adad','aa','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','18:13:59',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(126,'aaa','aa','ddd','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','18:14:42',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(127,'111111111111','aa','ddd','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','18:14:56',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(129,'dai','1231','1','upload/1664726261895.jpg','115',NULL,NULL,'2022-10-08','20:06:27',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(132,'Sampleeee','awdawd','awd','upload/xxx.png','115',NULL,NULL,'2022-10-21','11:08:31',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(133,'sad','ad','asd','upload/289582570_153845290552433_8304070735699913644_n.jpg','116',NULL,NULL,'2022-11-10','23:32:33',NULL,3,1,NULL,NULL,NULL,NULL,NULL),(134,'sads','ad','asd','upload/289582570_153845290552433_8304070735699913644_n.jpg','116',NULL,NULL,'2022-11-10','23:32:56',NULL,3,1,NULL,NULL,NULL,NULL,NULL),(135,'sadsdd','ad','asd','upload/289582570_153845290552433_8304070735699913644_n.jpg','116',NULL,NULL,'2022-11-10','23:33:06',NULL,5,1,NULL,NULL,NULL,NULL,NULL),(136,'Renovation of University Main Gate','sfsdfsdfsdf','asdadasd','upload/Sample project.docx','130','128','129','2022-12-16','01:14:29',NULL,3,2,NULL,NULL,NULL,NULL,NULL),(138,'SLSU Building Project','asdasdas','asdad','upload/Traverse.pdf','131','130','128','2022-12-17','10:11:02',NULL,2,2,NULL,NULL,NULL,NULL,NULL),(139,'Sample Title','zx','sad','upload/Traverse.pdf','116','104','0','2022-12-17','10:20:34',NULL,3,2,NULL,NULL,NULL,NULL,NULL),(142,'Sample SLSU Project','asdasd','asdasd','upload/Sample Project.docx','131','0','0','2022-12-17','10:28:46',NULL,3,1,NULL,NULL,NULL,NULL,NULL),(145,'dsa','asd','asd','upload/indexhmtl.txt','131','0','0','2022-12-17','19:32:53',NULL,2,4,NULL,NULL,NULL,NULL,NULL),(146,'asd','asd','2','upload/indexhmtl.txt','131','sdasdasd','asdasd','2022-12-18','19:55:44',NULL,3,1,'asd','asd','1333','asd',NULL),(147,'asd aaa','asd','xcv','upload/indexhmtl.txt','131','asd','asd','2022-12-18','19:58:28',NULL,3,1,'asd','xzxz','2333','xxv',NULL),(148,'kddjd','asd','zxc','upload/indexhmtl.txt','131','asd','asd','2022-12-18','20:16:33',NULL,3,1,'asd','asd','asd','zxczc',''),(149,'nvbnvb','cvbbc','xcv','upload/B156HAN02.1_2.jpg','131','zxczxc','zxczxc','2022-12-18','20:19:46',NULL,3,1,'ddfgd','dfg','234','sd','CCSIT'),(150,'nvbnvb d','cvbbc','xcv','upload/B156HAN02.1_2.jpg','131','zxczxc','zxczxc','2022-12-18','20:20:54',NULL,3,1,'ddfgd','dfg','234','sd','CCSIT'),(151,'SLSU Project plaza','SLSU','2','upload/Sample project.docx','126','Sample Auth','','2022-12-18','20:27:43',NULL,3,1,'Sogod Lgu','10 months','100000','asdas','COE');

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fromid` int(11) DEFAULT NULL,
  `toid` int(11) DEFAULT NULL,
  `updates` varchar(255) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp(),
  `isread` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `notifications` */

insert  into `notifications`(`id`,`fromid`,`toid`,`updates`,`date_created`,`isread`) values (1,114,131,'Project has been return to you for compliance','2022-12-17 18:19:50',1),(2,105,131,'Proposal has been returned by coordinator!','2022-12-17 19:54:10',1),(3,105,131,'Proposal has been returned by coordinator!','2022-12-17 19:55:26',1),(4,105,131,'Proposal has been returned by coordinator!','2022-12-17 19:58:41',1),(5,131,105,'New proposal has been submitted!','2022-12-18 20:20:54',0),(6,126,135,'New proposal has been submitted!','2022-12-18 20:27:43',1),(7,111,135,'You Proposal has been returned to coordinator by Director!','2022-12-18 21:11:09',1),(8,111,126,'Proposal has been returned by coordinator!','2022-12-18 21:11:09',1),(9,0,0,'Re-submitted proposal has been submitted!','2022-12-18 21:33:02',0),(10,126,135,'Re-submitted proposal has been submitted!','2022-12-18 21:33:59',1),(11,126,135,'Re-submitted proposal has been submitted!','2022-12-18 21:34:30',1),(12,126,135,'Re-submitted proposal has been submitted!','2022-12-18 21:34:38',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT '',
  `password` varchar(50) DEFAULT '',
  `accounttype` int(5) DEFAULT 0,
  `accountholder` int(11) DEFAULT NULL,
  `isverify` int(11) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password`,`accounttype`,`accountholder`,`isverify`) values (35,'admin','81dc9bdb52d04dc20036dbd8313ed055',1,103,1),(36,'jevs','81dc9bdb52d04dc20036dbd8313ed055',2,104,1),(37,'coordinator','81dc9bdb52d04dc20036dbd8313ed055',3,105,1),(38,'director','81dc9bdb52d04dc20036dbd8313ed055',4,111,1),(39,'isda','81dc9bdb52d04dc20036dbd8313ed055',6,112,1),(40,'er','81dc9bdb52d04dc20036dbd8313ed055',5,113,1),(41,'hue','81dc9bdb52d04dc20036dbd8313ed055',7,114,1),(42,'pat','81dc9bdb52d04dc20036dbd8313ed055',2,115,1),(43,'ninz00','81dc9bdb52d04dc20036dbd8313ed055',2,116,1),(44,'asd','289dff07669d7a23de0ef88d2f7129e7',2,117,1),(46,'sf@gmail.com','81dc9bdb52d04dc20036dbd8313ed055',2,124,1),(47,'dsffff@gmail.com','202cb962ac59075b964b07152d234b70',2,125,1),(48,'sad@gmail.com','81dc9bdb52d04dc20036dbd8313ed055',2,126,1),(49,'Testme@gmail.com','6cf82ee1020caef069e753c67a97a70d',2,127,1),(50,'johnlee@gmail.com','2fe6e16030fcc60282b7fe642108e84c',2,128,1),(51,'markchong@gmail.com','2fe6e16030fcc60282b7fe642108e84c',2,129,1),(52,'johnuy@gmail.com','2fe6e16030fcc60282b7fe642108e84c',2,130,1),(53,'jake@gmail.com','827ccb0eea8a706c4c34a16891f84e7b',2,131,1),(54,'me@gmail.com','d8578edf8458ce06fbc5bb76a58c5ca4',2,133,1),(55,'lee@gmail.com','76d80224611fc919a5d54f0ff9fba446',2,134,1),(56,'jakse@gmail.com','81dc9bdb52d04dc20036dbd8313ed055',3,135,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
