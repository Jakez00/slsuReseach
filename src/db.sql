/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.4.24-MariaDB : Database - capstone
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
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=utf8mb4;

/*Data for the table `employee` */

insert  into `employee`(`id`,`firstname`,`lastname`,`middlename`,`phone`,`department`) values (103,'Admin','','','09650922671',NULL),(111,'Joselle','Narra','','09108541601','CCSIT'),(112,'Charrize','Rallos','','09108541602','CCSIT'),(113,'Patrick','Fabon','','09108541602','CCSIT'),(114,'Jevie','Vanz','','09108541602','CCSIT'),(139,'Jomar','Dan','','123','CCSIT'),(152,'Minchi','Narido','D','09279832411','CCSIT'),(153,'Claire','Yash','Libro','09092345678','CCSIT'),(159,'getil','jake','','09630741829','COE'),(160,'Izuko','Midoria','','091231111','COE'),(161,'bakugo','Explosion','','0921212145','COT'),(162,'Shoto','Vanzuela','','0912121387','CCJ'),(163,'Rhod','Malangsa','','09441541','COE'),(164,'josellee','Narra','','09650922644','CCSIT');

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
  `title` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=476 DEFAULT CHARSET=utf8mb4;

/*Data for the table `logs` */

insert  into `logs`(`id`,`proposalid`,`description`,`dateprocess`,`timeprocess`,`userid`,`comment`,`attachment`,`title`) values (410,222,'Forward proposal','2022-12-23','20:26:40',152,'Wag kana mawala','Aging Brain (1) (1).docx','Sample ragyud'),(411,222,'Forward proposal','2022-12-23','20:27:36',139,'Ngayuuuuuuuuuuuuuuuun','Aging Brain (1) (1).docx','Sample ragyud'),(412,222,'Forward proposal','2022-12-23','20:43:06',152,'Look again','Aging Brain (1) (1) (1) (1).docx','Sample ragyud'),(413,222,'Edited proposal','2022-12-23','23:12:26',152,'',NULL,'Storm Surge Innovation'),(414,222,'Edited proposal','2022-12-23','23:14:01',152,'',NULL,'Storm Surge Innovation'),(415,222,'Forward proposal','2022-12-25','03:37:01',152,'awdwad','Fabon_Patrick_4A.docx','Storm Surge Innovation'),(416,222,'Return proposal','2022-12-25','03:39:50',139,'awd','jhihol.docx','Storm Surge Innovation'),(417,222,'Resubmit Proposal sucessfully submitted','2022-12-24','20:40:47',152,'',NULL,'Storm Surge Innovation'),(418,222,'Return proposal','2022-12-25','03:41:20',139,'awd','[Book1]NoynoyTheBest','Storm Surge Innovation'),(419,223,'Proposal sucessfully created','2022-12-25','03:53:57',152,'',NULL,'WAZZZAPPPPPPP'),(420,222,'Resubmit Proposal sucessfully submitted','2022-12-24','21:26:26',152,'',NULL,'Storm Surge Innovation'),(421,224,'Proposal sucessfully created','2022-12-25','04:46:48',152,'',NULL,'Nganu man'),(422,225,'Proposal sucessfully created','2022-12-25','04:49:42',152,'',NULL,'awd'),(423,225,'Proposal Deleted ','2022-12-26','12:11:35',152,'',NULL,'awd'),(424,223,'Proposal Deleted ','2022-12-26','12:11:39',152,'',NULL,'WAZZZAPPPPPPP'),(425,224,'Forward proposal','2022-12-27','23:36:49',139,'wdawd','21 MB Text File.txt','Nganu man'),(426,224,'Forward proposal','2022-12-27','23:38:10',139,'wdawd','21 MB Text File.txt','Nganu man'),(427,224,'Edited proposal','2022-12-28','12:58:56',152,'',NULL,'Nganu man'),(428,224,'Edited proposal','2022-12-28','12:59:00',152,'',NULL,'Nganu man'),(429,222,'Edited proposal','2022-12-28','13:01:46',152,'',NULL,'Storm Surge Innovation'),(430,224,'Edited proposal','2022-12-28','13:02:29',152,'',NULL,'Nganu man'),(431,224,'Edited proposal','2022-12-28','13:02:39',152,'',NULL,'Nganu man'),(432,224,'Edited proposal','2022-12-28','13:03:02',152,'',NULL,'Nganu man'),(433,224,'Forward proposal','2022-12-28','13:11:51',139,'awd','Selfie.jpg','Nganu man'),(434,222,'Forward proposal','2022-12-28','13:20:03',139,'awd','Selfie.jpg','Storm Surge Innovation'),(435,224,'Return proposal','2022-12-28','13:21:08',111,'AWd','FS RESUME chen.docx','Nganu man'),(436,222,'Forward proposal','2022-12-28','13:26:24',111,'awd','Selfie.jpg','Storm Surge Innovation'),(437,222,'Forward proposal','2022-12-28','13:31:13',113,'awd','Selfie.jpg','Storm Surge Innovation'),(438,224,'Forward proposal','2022-12-29','21:54:46',139,'awd','New Text Document.txt','Nganu man'),(439,224,'Forward proposal','2022-12-29','21:54:48',139,'awd','New Text Document.txt','Nganu man'),(440,224,'Forward proposal','2022-12-29','21:54:54',139,'awd','New Text Document.txt','Nganu man'),(441,224,'Forward proposal','2022-12-29','21:57:06',111,'w','New Text Document.txt','Nganu man'),(442,224,'Forward proposal','2022-12-29','21:57:07',111,'w','New Text Document.txt','Nganu man'),(443,224,'Forward proposal','2022-12-29','21:57:57',113,'d','New Text Document.txt','Nganu man'),(444,224,'Forward proposal','2022-12-29','21:59:14',112,'w','New Text Document.txt','Nganu man'),(445,224,'Forward proposal','2022-12-29','21:59:27',112,'w','New Text Document.txt','Nganu man'),(446,224,'Forward proposal','2022-12-29','22:00:05',114,'a','New Text Document.txt','Nganu man'),(447,222,'Forward proposal','2022-12-29','22:02:51',112,'a','New Text Document.txt','Storm Surge Innovation'),(448,222,'Forward proposal','2022-12-29','22:03:17',114,'a','New Text Document.txt','Storm Surge Innovation'),(449,224,'Forward proposal','2022-12-29','22:06:07',152,'2','New Text Document.txt','Nganu man'),(450,224,'Forward proposal','2022-12-29','22:06:23',152,'s','New Text Document.txt','Nganu man'),(451,222,'Forward proposal','2022-12-29','22:06:34',152,'s','New Text Document.txt','Storm Surge Innovation'),(452,222,'Forward proposal','2022-12-29','22:06:59',152,'a','New Text Document.txt','Storm Surge Innovation'),(453,222,'Forward proposal','2022-12-29','22:07:26',152,'w','New Text Document.txt','Storm Surge Innovation'),(454,222,'Forward proposal','2022-12-29','22:07:46',152,'a','New Text Document.txt','Storm Surge Innovation'),(455,226,'Proposal sucessfully created','2022-12-29','22:22:17',152,'',NULL,'d'),(456,226,'Return proposal','2022-12-29','22:35:51',139,'sad','New Text Document.txt','d'),(457,224,'Forward proposal','2022-12-29','23:12:29',152,'a','New Text Document.txt','Nganu man'),(458,224,'Forward proposal','2022-12-29','23:12:55',152,'a','New Text Document.txt','Nganu man'),(459,224,'Forward proposal','2022-12-29','23:13:15',152,'a','New Text Document.txt','Nganu man'),(460,224,'Forward proposal','2022-12-29','23:13:24',152,'a','New Text Document.txt','Nganu man'),(461,224,'Forward proposal','2022-12-29','23:15:25',152,'a','New Text Document.txt','Nganu man'),(462,224,'Forward proposal','2022-12-29','23:15:29',152,'a','New Text Document.txt','Nganu man'),(463,224,'Forward proposal','2022-12-29','23:15:41',152,'aaa','New Text Document.txt','Nganu man'),(464,224,'Forward proposal','2022-12-29','23:15:46',152,'aaa','New Text Document.txt','Nganu man'),(465,224,'Forward proposal','2022-12-29','23:15:55',152,'a','New Text Document.txt','Nganu man'),(466,224,'Proposal Deleted ','2023-01-13','20:38:18',152,'',NULL,'Nganu man'),(467,222,'Proposal Deleted ','2023-01-13','20:38:23',152,'',NULL,'Storm Surge Innovation'),(468,226,'Proposal Deleted ','2023-01-13','20:38:26',152,'',NULL,'d'),(469,227,'Proposal sucessfully created','2023-01-13','20:41:50',152,'',NULL,'Storm Surge Awareness'),(470,227,'Forward proposal','2023-01-13','20:46:19',139,'Please see the attachment','Sample Attachment.docx','Storm Surge Awareness'),(471,227,'Forward proposal','2023-01-13','20:50:07',111,'Please follow up the this','Sample Attachment.docx','Storm Surge Awareness'),(472,227,'Proposal Deleted ','2023-01-16','14:02:52',152,'',NULL,'Storm Surge Awareness'),(473,228,'Proposal sucessfully created','2023-02-14','16:56:07',152,'',NULL,'awd'),(474,229,'Proposal sucessfully created','2023-02-14','17:17:51',152,'',NULL,'a'),(475,230,'Proposal sucessfully created','2023-02-14','17:22:14',152,'',NULL,'s');

/*Table structure for table `newproposal` */

DROP TABLE IF EXISTS `newproposal`;

CREATE TABLE `newproposal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '',
  `description` text DEFAULT NULL,
  `tags` varchar(100) DEFAULT '',
  `filename` varchar(100) DEFAULT '',
  `employeeid` varchar(50) DEFAULT NULL,
  `employeeid2` varchar(50) DEFAULT NULL,
  `employeeid3` varchar(50) DEFAULT NULL,
  `DateCreated` date DEFAULT NULL,
  `TimeCreated` time DEFAULT NULL,
  `proposalstatus` int(11) DEFAULT 0,
  `entrylevel` int(11) DEFAULT 1,
  `ca` varchar(150) DEFAULT NULL,
  `pd` varchar(150) DEFAULT NULL,
  `pb` varchar(150) DEFAULT NULL,
  `ra` varchar(150) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=231 DEFAULT CHARSET=utf8mb4;

/*Data for the table `newproposal` */

insert  into `newproposal`(`id`,`title`,`description`,`tags`,`filename`,`employeeid`,`employeeid2`,`employeeid3`,`DateCreated`,`TimeCreated`,`proposalstatus`,`entrylevel`,`ca`,`pd`,`pb`,`ra`,`department`) values (228,'awd','awd','adw','upload/IMG_3789.JPG','152','awd','awd','2023-02-14','16:56:07',3,1,'adw','2023-02-23','12312','awd','CCSIT'),(229,'a','a','a','upload/1675412489878.JPEG','152','a','a','2023-02-14','17:17:51',3,1,'a','a','1','a','CCSIT'),(230,'s','s','s','upload/1675412489878.JPEG','152','s','s','2023-02-14','17:22:14',3,1,'s','s','1','s','CCSIT');

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fromid` int(11) DEFAULT NULL,
  `toid` int(11) DEFAULT NULL,
  `updates` varchar(255) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp(),
  `isread` int(11) DEFAULT 0,
  `title` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=358 DEFAULT CHARSET=utf8mb4;

/*Data for the table `notifications` */

insert  into `notifications`(`id`,`fromid`,`toid`,`updates`,`date_created`,`isread`,`title`) values (291,152,139,'Proposal with form RI05 has been submitted!','2022-12-23 20:26:40',1,NULL),(292,139,111,'Proposal with form RI05 forwarded by CCSIT coordinator','2022-12-23 20:27:36',1,NULL),(293,139,152,'Proposal has been forwarded to director!','2022-12-23 20:27:36',1,NULL),(294,152,139,'Proposal with form RI05 has been submitted!','2022-12-23 20:43:06',1,NULL),(295,152,139,'Proposal with form RI05 has been submitted!','2022-12-25 03:37:01',1,NULL),(296,139,152,'Proposal has been returned by coordinator!','2022-12-25 03:39:50',1,NULL),(297,152,139,'Re-submitted proposal has been submitted!','2022-12-25 03:40:47',1,NULL),(298,139,152,'Proposal has been returned by coordinator!','2022-12-25 03:41:20',1,NULL),(299,152,139,'New proposal has been submitted!','2022-12-25 03:53:57',1,'WAZZZAPPPPPPP'),(300,152,139,'Re-submitted proposal has been submitted!','2022-12-25 04:26:26',1,NULL),(301,152,139,'New proposal has been submitted!','2022-12-25 04:46:48',1,'Nganu man'),(302,152,139,'New proposal has been submitted!','2022-12-25 04:49:42',1,'awd'),(303,139,111,'New proposal forward  forward by CCSIT coordinator','2022-12-28 13:11:51',1,NULL),(304,139,152,'Proposal has been forwarded to director!','2022-12-28 13:11:51',1,NULL),(305,139,111,'New proposal forward  forward by CCSIT coordinator','2022-12-28 13:20:03',1,NULL),(306,139,152,'Proposal has been forwarded to director!','2022-12-28 13:20:03',1,NULL),(307,111,139,'You Proposal has been returned to coordinator by Director!','2022-12-28 13:21:08',1,NULL),(308,111,152,'Proposal has been returned to coordinator!','2022-12-28 13:21:08',1,NULL),(309,111,113,'New proposal forward by director','2022-12-28 13:26:24',0,NULL),(310,111,152,'Proposal has been forwarded to Evaluation and Review!','2022-12-28 13:26:24',1,NULL),(311,113,112,'New proposal forward by Evaluation and Review','2022-12-28 13:31:13',1,NULL),(312,113,152,'Proposal has been forwarded to Information System and Data Analytics!','2022-12-28 13:31:13',1,NULL),(313,139,111,'New proposal forward  forward by CCSIT coordinator','2022-12-29 21:54:46',0,NULL),(314,139,152,'Proposal has been forwarded to director!','2022-12-29 21:54:46',1,NULL),(315,139,111,'New proposal forward  forward by CCSIT coordinator','2022-12-29 21:54:48',0,NULL),(316,139,152,'Proposal has been forwarded to director!','2022-12-29 21:54:48',1,NULL),(317,139,111,'New proposal forward  forward by CCSIT coordinator','2022-12-29 21:54:54',0,NULL),(318,139,152,'Proposal has been forwarded to director!','2022-12-29 21:54:54',1,NULL),(319,111,113,'New proposal forward by director','2022-12-29 21:57:06',0,NULL),(320,111,152,'Proposal has been forwarded to Evaluation and Review!','2022-12-29 21:57:06',1,NULL),(321,111,113,'New proposal forward by director','2022-12-29 21:57:07',0,NULL),(322,111,152,'Proposal has been forwarded to Evaluation and Review!','2022-12-29 21:57:07',1,NULL),(323,113,112,'New proposal forward by Evaluation and Review','2022-12-29 21:57:57',0,NULL),(324,113,152,'Proposal has been forwarded to Information System and Data Analytics!','2022-12-29 21:57:57',1,NULL),(325,112,114,'New proposal forward by Information System & Data Analytics','2022-12-29 21:59:14',0,NULL),(326,112,152,'Proposal has been forwarded to Monitoring and Evaluation Head.','2022-12-29 21:59:14',1,NULL),(327,112,114,'New proposal forward by Information System & Data Analytics','2022-12-29 21:59:27',0,NULL),(328,112,152,'Proposal has been forwarded to Monitoring and Evaluation Head.','2022-12-29 21:59:27',1,NULL),(329,114,152,'Proposal has been approved by Monitoring and Evaluation Head','2022-12-29 22:00:05',1,NULL),(330,112,114,'New proposal forward by Information System & Data Analytics','2022-12-29 22:02:51',0,NULL),(331,112,152,'Proposal has been forwarded to Monitoring and Evaluation Head.','2022-12-29 22:02:51',1,NULL),(332,114,152,'Proposal has been approved by Monitoring and Evaluation Head','2022-12-29 22:03:17',1,NULL),(333,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 22:06:07',0,NULL),(334,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 22:06:23',0,NULL),(335,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 22:06:34',0,NULL),(336,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 22:06:59',0,NULL),(337,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 22:07:26',0,NULL),(338,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 22:07:46',0,NULL),(339,152,139,'New proposal has been submitted!','2022-12-29 22:22:17',0,'d'),(340,139,152,'Proposal has been returned by coordinator!','2022-12-29 22:35:51',1,NULL),(341,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 23:12:29',0,NULL),(342,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 23:12:55',0,NULL),(343,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 23:13:15',0,NULL),(344,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 23:13:24',0,NULL),(345,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 23:15:25',0,NULL),(346,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 23:15:29',0,NULL),(347,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 23:15:41',0,NULL),(348,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 23:15:46',0,NULL),(349,152,139,'Proposal with form RI05 has been submitted!','2022-12-29 23:15:55',0,NULL),(350,152,139,'New proposal has been submitted!','2023-01-13 20:41:50',0,'Storm Surge Awareness'),(351,139,111,'New proposal forward  forward by CCSIT coordinator','2023-01-13 20:46:19',0,NULL),(352,139,152,'Proposal has been forwarded to director!','2023-01-13 20:46:19',1,NULL),(353,111,113,'New proposal forward by director','2023-01-13 20:50:07',0,NULL),(354,111,152,'Proposal has been forwarded to Evaluation and Review!','2023-01-13 20:50:07',1,NULL),(355,152,139,'New proposal has been submitted!','2023-02-14 16:56:07',0,'awd'),(356,152,139,'New proposal has been submitted!','2023-02-14 17:17:51',0,'a'),(357,152,139,'New proposal has been submitted!','2023-02-14 17:22:14',0,'s');

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
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password`,`accounttype`,`accountholder`,`isverify`) values (35,'admin','81dc9bdb52d04dc20036dbd8313ed055',1,103,1),(38,'director','81dc9bdb52d04dc20036dbd8313ed055',4,111,1),(39,'isda','81dc9bdb52d04dc20036dbd8313ed055',6,112,1),(40,'er','81dc9bdb52d04dc20036dbd8313ed055',5,113,1),(41,'hue','81dc9bdb52d04dc20036dbd8313ed055',7,114,1),(60,'coordinator','81dc9bdb52d04dc20036dbd8313ed055',3,139,1),(70,'minchi@gmail.com','81dc9bdb52d04dc20036dbd8313ed055',2,152,1),(71,'claire@gmail.com','81dc9bdb52d04dc20036dbd8313ed055',2,153,1),(77,'jg@yahoo.com','81dc9bdb52d04dc20036dbd8313ed055',2,159,1),(78,'coecoordinator@gmail.com','81dc9bdb52d04dc20036dbd8313ed055',3,160,1),(79,'cotcoordinator@yahoo.com','81dc9bdb52d04dc20036dbd8313ed055',3,161,1),(80,'ccjcoordinator@gmail.com','81dc9bdb52d04dc20036dbd8313ed055',3,162,1),(81,'rhod@gmail.com','81dc9bdb52d04dc20036dbd8313ed055',3,163,1),(82,'josel@gmail.com','81dc9bdb52d04dc20036dbd8313ed055',2,164,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
