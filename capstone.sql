-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 09:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT '',
  `lastname` varchar(50) DEFAULT '',
  `middlename` varchar(50) DEFAULT '',
  `phone` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `lastname`, `middlename`, `phone`) VALUES
(103, 'Admin', '', '', '09650922671'),
(104, 'Jevie', 'Vanzuela', '', '09108541601'),
(105, 'Coordinator', '', '', '09108541601'),
(111, 'Director', '', '', '09108541601'),
(112, 'Information System & Data Analytics', '', '', '09108541602'),
(113, 'Evaluation and Review', '', '', '09108541602'),
(114, 'Monitoring and Evaluation Head', '', '', '09108541602'),
(115, 'Paty', 'Yeah', '', '232323'),
(116, 'Jake', 'Getil', '', '0909099'),
(117, 'Da', 'asd', 'asd', 'asd'),
(124, 'dsfdsf s ew', 'sdf ', 'sdf ', '223432423'),
(125, 'tyu', 'ghgjhgj', 'tyu', '546646'),
(126, 'tyu', 'zxc', 'asd', '234234'),
(127, 'Testme', 'Testme', 'Testme', 'sd'),
(128, 'John', 'Yong', 'Lee', '0987656789'),
(129, 'Mark', 'Chong', 'Yu', '98745679234'),
(130, 'John', 'Uy', 'John', '987654567890'),
(131, 'Jake', 'Sample', 'sample', '0987654323'),
(132, 'Jake', 'G', '', '1234'),
(133, 'patrick', 'fabon', 'cagadas', '09557180639'),
(134, 'patricks', 'fabon', 'cagadas', '09557180639');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `proposalid` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `dateprocess` date DEFAULT NULL,
  `timeprocess` time DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `attachment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `proposalid`, `description`, `dateprocess`, `timeprocess`, `userid`, `comment`, `attachment`) VALUES
(1, 73, 'New Proposal Create', '2022-09-17', '17:12:19', 115, '', NULL),
(2, 73, 'Proposal Para Masaya Deleted ', '2022-09-17', '11:12:29', 115, '', NULL),
(3, 74, 'New Proposal Create', '2022-09-17', '17:17:26', 115, '', NULL),
(4, 75, 'New Proposal Create', '2022-09-17', '17:18:17', 115, '', NULL),
(5, 76, 'New Proposal Create', '2022-09-17', '17:18:22', 115, '', NULL),
(6, 77, 'New Proposal Create', '2022-09-17', '17:18:26', 115, '', NULL),
(7, 76, 'Proposal Yeaj Deleted ', '2022-09-17', '11:19:26', 115, '', NULL),
(8, 75, 'Proposal Yea Deleted ', '2022-09-17', '11:19:52', 115, '', NULL),
(9, 78, 'New Proposal Create', '2022-09-22', '13:28:26', 115, '', NULL),
(10, 79, 'New Proposal Create', '2022-09-22', '13:39:30', 115, '', NULL),
(11, 80, 'New Proposal Create', '2022-09-22', '13:47:49', 115, '', NULL),
(12, 81, 'New Proposal Create', '2022-09-22', '21:28:57', 115, '', NULL),
(13, 82, 'New Proposal Create', '2022-09-22', '21:30:42', 115, '', NULL),
(14, 83, 'New Proposal Create', '2022-09-22', '21:31:41', 115, '', NULL),
(15, 84, 'New Proposal Create', '2022-09-22', '21:32:54', 104, '', NULL),
(16, 85, 'New Proposal Create', '2022-09-22', '21:33:14', 104, '', NULL),
(17, 86, 'New Proposal Create', '2022-09-22', '21:33:58', 104, '', NULL),
(18, 87, 'New Proposal Create', '2022-09-22', '21:36:20', 115, '', NULL),
(19, 88, 'New Proposal Create', '2022-09-22', '21:42:43', 115, '', NULL),
(20, 89, 'New Proposal Create', '2022-09-22', '21:43:05', 115, '', NULL),
(21, 90, 'New Proposal Create', '2022-09-22', '21:48:43', 115, '', NULL),
(22, 90, 'Proposal aa Deleted ', '2022-09-22', '15:48:58', 115, '', NULL),
(23, 89, 'Proposal aaaaaaaa Deleted ', '2022-09-22', '15:49:04', 115, '', NULL),
(24, 88, 'Proposal awda Deleted ', '2022-09-22', '15:49:09', 115, '', NULL),
(25, 74, 'Proposal Yeah Yeah Deleted ', '2022-09-22', '15:49:14', 115, '', NULL),
(26, 91, 'New Proposal  Create', '2022-09-22', '21:52:18', 115, '', NULL),
(27, 92, 'New Proposal aaa Create', '2022-09-22', '21:54:05', 115, '', NULL),
(28, 93, 'Proposal To the Moon sucessfully created', '2022-09-22', '21:55:20', 115, '', NULL),
(29, 92, 'Proposal aaa Deleted ', '2022-09-22', '15:55:54', 115, '', NULL),
(30, 91, 'Proposal adsd Deleted ', '2022-09-22', '15:55:58', 115, '', NULL),
(31, 87, 'Proposal yeahhh Deleted ', '2022-09-22', '15:56:03', 115, '', NULL),
(32, 94, 'Proposal ssss sucessfully created', '2022-09-23', '10:53:07', 115, '', NULL),
(33, 94, 'Proposal ssss Deleted ', '2022-09-23', '04:53:42', 115, '', NULL),
(34, 95, 'Proposal zzz sucessfully created', '2022-09-23', '10:53:54', 115, '', NULL),
(35, 96, 'Proposal asda sucessfully created', '2022-09-23', '10:55:26', 115, '', NULL),
(36, 97, 'Proposal Taw sucessfully created', '2022-09-23', '10:56:01', 115, '', NULL),
(37, 96, 'Proposal asda Deleted ', '2022-09-23', '04:56:13', 115, '', NULL),
(38, 97, 'Proposal Taw Deleted ', '2022-09-23', '04:56:19', 115, '', NULL),
(39, 95, 'Proposal zzz Deleted ', '2022-09-23', '04:56:25', 115, '', NULL),
(40, 98, 'Proposal Laaya sucessfully created', '2022-09-23', '11:03:24', 115, '', NULL),
(41, 98, 'Proposal Laaya Deleted ', '2022-09-23', '05:03:40', 115, '', NULL),
(42, 99, 'Proposal a sucessfully created', '2022-09-23', '11:13:44', 115, '', NULL),
(43, 99, 'Proposal a Deleted ', '2022-09-23', '05:59:11', 103, '', NULL),
(44, 100, 'Proposal awdawddd sucessfully created', '2022-10-08', '10:39:56', 115, '', NULL),
(45, 100, 'Proposal awdawddd Deleted ', '2022-10-08', '04:40:20', 115, '', NULL),
(46, 101, 'Proposal dsdsds sucessfully created', '2022-10-08', '17:13:19', 115, '', NULL),
(47, 102, 'Proposal dsdsdssds sucessfully created', '2022-10-08', '17:13:25', 115, '', NULL),
(48, 103, 'Proposal 11 sucessfully created', '2022-10-08', '17:13:30', 115, '', NULL),
(49, 104, 'Proposal 1112 sucessfully created', '2022-10-08', '17:13:35', 115, '', NULL),
(50, 105, 'Proposal 33 sucessfully created', '2022-10-08', '17:13:39', 115, '', NULL),
(51, 106, 'Proposal 333 sucessfully created', '2022-10-08', '17:13:45', 115, '', NULL),
(52, 103, 'Proposal 11 Deleted ', '2022-10-08', '11:32:29', 115, '', NULL),
(53, 104, 'Proposal 1112 Deleted ', '2022-10-08', '11:32:34', 115, '', NULL),
(54, 105, 'Proposal 33 Deleted ', '2022-10-08', '11:32:38', 115, '', NULL),
(55, 106, 'Proposal 333 Deleted ', '2022-10-08', '11:32:42', 115, '', NULL),
(56, 80, 'Proposal aaddsdasda Deleted ', '2022-10-08', '11:32:45', 115, '', NULL),
(57, 101, 'Proposal dsdsds Deleted ', '2022-10-08', '11:32:49', 115, '', NULL),
(58, 107, 'Proposal 1 sucessfully created', '2022-10-08', '17:33:36', 115, '', NULL),
(59, 108, 'Proposal 11 sucessfully created', '2022-10-08', '17:33:40', 115, '', NULL),
(60, 109, 'Proposal 111 sucessfully created', '2022-10-08', '17:33:45', 115, '', NULL),
(61, 110, 'Proposal 1112 sucessfully created', '2022-10-08', '17:33:49', 115, '', NULL),
(62, 111, 'Proposal 11111 sucessfully created', '2022-10-08', '17:33:55', 115, '', NULL),
(63, 112, 'Proposal 111111 sucessfully created', '2022-10-08', '17:34:00', 115, '', NULL),
(64, 113, 'Proposal 1111111 sucessfully created', '2022-10-08', '17:34:06', 115, '', NULL),
(65, 114, 'Proposal 11111111 sucessfully created', '2022-10-08', '17:34:11', 115, '', NULL),
(66, 115, 'Proposal 111111111 sucessfully created', '2022-10-08', '17:34:17', 115, '', NULL),
(67, 116, 'Proposal 1111111111 sucessfully created', '2022-10-08', '17:34:21', 115, '', NULL),
(68, 117, 'Proposal q sucessfully created', '2022-10-08', '18:00:00', 115, '', NULL),
(69, 118, 'Proposal qq sucessfully created', '2022-10-08', '18:00:06', 115, '', NULL),
(70, 119, 'Proposal qqq sucessfully created', '2022-10-08', '18:00:10', 115, '', NULL),
(71, 120, 'Proposal qqqq sucessfully created', '2022-10-08', '18:00:16', 115, '', NULL),
(72, 121, 'Proposal qqqqq sucessfully created', '2022-10-08', '18:00:22', 115, '', NULL),
(73, 122, 'Proposal qqqqqq sucessfully created', '2022-10-08', '18:00:36', 115, '', NULL),
(74, 123, 'Proposal awd sucessfully created', '2022-10-08', '18:12:15', 115, '', NULL),
(75, 124, 'Proposal awdaa sucessfully created', '2022-10-08', '18:12:30', 115, '', NULL),
(76, 125, 'Proposal awddd sucessfully created', '2022-10-08', '18:13:59', 115, '', NULL),
(77, 126, 'Proposal aaa sucessfully created', '2022-10-08', '18:14:42', 115, '', NULL),
(78, 127, 'Proposal 111111111111 sucessfully created', '2022-10-08', '18:14:56', 115, '', NULL),
(79, 0, 'Proposal  sucessfully forwarded to director', '2022-10-08', '12:19:15', NULL, '', NULL),
(80, 128, 'Proposal aaaa sucessfully created', '2022-10-08', '18:21:12', 115, '', NULL),
(81, 128, 'Proposal aaaa Deleted ', '2022-10-08', '12:21:59', 115, '', NULL),
(82, 122, 'Proposal qqqqqq Deleted ', '2022-10-08', '12:22:04', 115, '', NULL),
(83, 107, 'Proposal 1 Deleted ', '2022-10-08', '12:22:07', 115, '', NULL),
(84, 112, 'Proposal 111111 Deleted ', '2022-10-08', '12:33:02', 115, '', NULL),
(85, 129, 'Proposal dai sucessfully created', '2022-10-08', '20:06:27', 115, '', NULL),
(86, 130, 'Proposal daia sucessfully created', '2022-10-08', '22:07:38', 115, '', NULL),
(87, 131, 'Proposal daiaa sucessfully created', '2022-10-08', '22:07:45', 115, '', NULL),
(88, 130, 'Proposal daia Deleted ', '2022-10-11', '08:01:45', 115, '', NULL),
(89, 131, 'Proposal daiaa Deleted ', '2022-10-11', '08:01:50', 115, '', NULL),
(90, 132, 'Proposal Sampleeee sucessfully created', '2022-10-21', '11:08:31', 115, '', NULL),
(91, 133, 'Proposal sad sucessfully created', '2022-11-10', '23:32:33', 116, '', NULL),
(92, 134, 'Proposal sads sucessfully created', '2022-11-10', '23:32:56', 116, '', NULL),
(93, 135, 'Proposal sadsdd sucessfully created', '2022-11-10', '23:33:06', 116, '', NULL),
(94, 136, 'Proposal Renovation of University Main Gate sucessfully created', '2022-12-16', '01:14:29', 130, '', NULL),
(95, 136, 'Forward proposal', NULL, NULL, 37, 'asdasd', ''),
(96, 136, 'Forward proposal', NULL, NULL, 37, 'sdsvxc sdsf sfsf', ''),
(97, 136, 'Forward proposal', NULL, NULL, 37, 'ssad asd', 'images (9) (15).jpeg'),
(101, 136, 'Forward proposal', NULL, NULL, 38, 'zzxc', 'images (9) (15).jpeg'),
(102, 136, 'Forward proposal', NULL, NULL, 40, 'dsfs sdf sdfsd sdfsdf', 'images (9) (28).jpeg'),
(103, 111, 'Forward proposal', NULL, NULL, 40, 'asdasd', 'images (9) (16).jpeg'),
(104, 113, 'Forward proposal', NULL, NULL, 40, 'ssf sdfsdf sf', 'images (9) (14).jpeg'),
(105, 136, 'Forward proposal', NULL, NULL, 39, 'zxczxc asddasd asdas asdasd', 'images (9) (15).jpeg'),
(106, 136, 'Forward proposal', NULL, NULL, 41, 'asdasd', 'images (9) (25).jpeg'),
(107, 136, 'Forward proposal', NULL, NULL, 52, 'dsfsdf sfsdf sdfdsf sdf sdf sd', 'images (9) (24).jpeg'),
(108, 137, 'Proposal asdasd sucessfully created', '2022-12-17', '10:10:39', 131, '', NULL),
(109, 138, 'Proposal SLSU Building Project sucessfully created', '2022-12-17', '10:11:02', 131, '', NULL),
(110, 139, 'Proposal Sample Title sucessfully created', '2022-12-17', '10:20:34', 116, '', NULL),
(111, 140, 'Proposal aasd sucessfully created', '2022-12-17', '10:21:36', 131, '', NULL),
(112, 141, 'Proposal SLSU Sample sucessfully created', '2022-12-17', '10:25:59', 131, '', NULL),
(113, 142, 'Proposal Sample SLSU Project sucessfully created', '2022-12-17', '10:28:46', 131, '', NULL),
(114, 143, 'Proposal asd sucessfully created', '2022-12-17', '10:29:47', 131, '', NULL),
(115, 144, 'Proposal xcv sucessfully created', '2022-12-17', '10:33:32', 131, '', NULL),
(116, 140, 'Proposal aasd Deleted ', '2022-12-17', '04:16:53', 131, '', NULL),
(117, 144, 'Proposal xcv Deleted ', '2022-12-17', '04:16:58', 131, '', NULL),
(118, 143, 'Proposal asd Deleted ', '2022-12-17', '04:17:02', 131, '', NULL),
(119, 137, 'Proposal asdasd Deleted ', '2022-12-17', '04:17:05', 131, '', NULL),
(120, 141, 'Proposal SLSU Sample Deleted ', '2022-12-17', '04:17:28', 131, '', NULL),
(121, 138, 'Forward proposal', '2022-12-17', '04:28:12', 105, 'wqeqwe  wqeq qwwq', 'Sample Project.docx'),
(122, 135, 'Forward proposal', '2022-12-17', '04:40:26', 111, 'Directors comment', 'Traverse.pdf'),
(123, 138, 'Forward proposal', '2022-12-17', '05:19:47', 112, 'sample comment', 'Electric Service.pdf'),
(124, 138, 'Forward proposal', '2022-12-17', '05:25:46', 113, 'qwqwe qweqwe asdasd', 'Sample Project.docx'),
(125, 138, 'Forward proposal', '2022-12-17', '05:26:21', 112, ' asda asasd asd', 'Sample Project.docx'),
(126, 138, 'Forward proposal', '2022-12-17', '05:27:06', 114, 'asda asdasda sd', 'Sample Project.docx'),
(127, 145, 'Proposal dsa sucessfully created', '2022-12-17', '19:32:53', 131, '', NULL),
(128, 145, 'Return proposal', '2022-12-17', '12:54:10', 105, 'asdasd', 'indexhmtl.txt'),
(129, 145, 'Return proposal', '2022-12-17', '12:55:26', 105, 'asdasd', 'indexhmtl.txt'),
(130, 145, 'Return proposal', '2022-12-17', '12:58:41', 105, 'wqr we wer wasdfasdfsa dsf', 'indexhmtl.txt'),
(131, 146, 'Proposal SHHHHHHHHHHHHHH sucessfully created', '2022-12-17', '20:34:02', 131, '', NULL),
(132, 146, 'Forward proposal', '2022-12-17', '13:34:40', 105, 'YAWA', '.gitignore'),
(133, 146, 'Return proposal', '2022-12-17', '13:35:46', 111, 'SAyup', 'Research-and-Innovation-Monitoring-and-Evaluation-System (2).pptx'),
(134, 136, 'Forward proposal', '2022-12-17', '16:00:15', 105, 'd,n fnsdfd', 'Sample Project (1).docx'),
(135, 136, 'Return proposal', '2022-12-17', '16:01:34', 111, 'dn nf sdf', 'Sample Project (1).docx'),
(136, 133, 'Forward proposal', '2022-12-17', '16:02:25', 105, 'asdsf', 'flowchart-caostone (1).docx'),
(137, 133, 'Return proposal', '2022-12-17', '16:14:35', 111, 'awdawd', 'Sample Project (1).docx'),
(138, 134, 'Forward proposal', '2022-12-17', '16:15:07', 105, 'awda', 'FS 1 Portfolio chen.docx'),
(139, 134, 'Return proposal', '2022-12-17', '16:15:20', 111, 'awd', 'FS 1 Portfolio chen.docx'),
(140, 147, 'Proposal  sucessfully created', '2022-12-18', '00:15:29', 131, '', NULL),
(141, 148, 'Proposal HAHAH sucessfully created', '2022-12-18', '00:16:04', 131, '', NULL),
(142, 149, 'Proposal skwis2 sucessfully created', '2022-12-18', '00:20:15', 131, '', NULL),
(143, 150, 'Proposal skwis2haha sucessfully created', '2022-12-18', '00:20:52', 131, '', NULL),
(144, 151, 'Proposal hahaha sucessfully created', '2022-12-18', '00:24:16', 131, '', NULL),
(145, 148, 'Proposal HAHAH Deleted ', '2022-12-17', '17:29:53', 131, '', NULL),
(146, 150, 'Proposal skwis2haha Deleted ', '2022-12-17', '17:29:58', 131, '', NULL),
(147, 149, 'Proposal skwis2 Deleted ', '2022-12-17', '17:30:01', 131, '', NULL),
(148, 147, 'Proposal  Deleted ', '2022-12-17', '17:30:08', 131, '', NULL),
(149, 152, 'Proposal  sucessfully created', '2022-12-18', '00:31:53', 131, '', NULL),
(150, 153, 'Proposal yawrds sucessfully created', '2022-12-18', '00:33:09', 131, '', NULL),
(151, 154, 'Proposal piste sucessfully created', '2022-12-18', '00:34:01', 131, '', NULL),
(152, 153, 'Proposal yawrds Deleted ', '2022-12-17', '17:34:07', 131, '', NULL),
(153, 155, 'Proposal exist sucessfully created', '2022-12-18', '00:34:34', 131, '', NULL),
(154, 154, 'Proposal piste Deleted ', '2022-12-17', '17:38:38', 131, '', NULL),
(155, 155, 'Proposal exist Deleted ', '2022-12-17', '17:38:44', 131, '', NULL),
(156, 151, 'Proposal hahaha Deleted ', '2022-12-17', '17:38:52', 131, '', NULL),
(157, 152, 'Proposal  Deleted ', '2022-12-17', '17:38:59', 131, '', NULL),
(158, 156, 'Proposal  sucessfully created', '2022-12-18', '00:40:33', 131, '', NULL),
(159, 157, 'Proposal atay sucessfully created', '2022-12-18', '00:58:52', 131, '', NULL),
(160, 158, 'Proposal Testing1 sucessfully created', '2022-12-18', '01:04:51', 131, '', NULL),
(161, 159, 'Proposal Testing2 sucessfully created', '2022-12-18', '01:05:51', 131, '', NULL),
(162, 160, 'Proposal Testing3 sucessfully created', '2022-12-18', '01:09:31', 131, '', NULL),
(163, 161, 'Proposal Testing4 sucessfully created', '2022-12-18', '01:11:13', 131, '', NULL),
(164, 138, 'Proposal SLSU Building Project Deleted ', '2022-12-17', '18:33:37', 131, '', NULL),
(165, 156, 'Proposal  Deleted ', '2022-12-17', '18:33:44', 131, '', NULL),
(166, 157, 'Proposal atay Deleted ', '2022-12-17', '18:33:47', 131, '', NULL),
(167, 145, 'Proposal dsa Deleted ', '2022-12-17', '18:33:52', 131, '', NULL),
(168, 142, 'Proposal Sample SLSU Project Deleted ', '2022-12-17', '18:33:55', 131, '', NULL),
(169, 146, 'Proposal SHHHHHHHHHHHHHH Deleted ', '2022-12-17', '18:33:59', 131, '', NULL),
(170, 158, 'Proposal Testing1 Deleted ', '2022-12-17', '18:34:02', 131, '', NULL),
(171, 162, 'Proposal Testing5 sucessfully created', '2022-12-18', '01:34:59', 131, '', NULL),
(172, 163, 'Proposal First Title sucessfully created', '2022-12-18', '01:37:40', 131, '', NULL),
(173, 164, 'Proposal Second Titleeeeeeeeeeee sucessfully created', '2022-12-18', '01:44:47', 131, '', NULL),
(174, 163, 'Return proposal', '2022-12-17', '18:48:48', 105, 'PAGsureeeeeeee', 'index (3).php'),
(175, 139, 'Return proposal', '2022-12-17', '18:50:41', 105, 'shesh', 'index (3).php'),
(176, 164, 'Return proposal', '2022-12-17', '18:50:59', 105, 'wewe', 'index (3).php'),
(177, 159, 'Return proposal', '2022-12-17', '18:52:36', 105, 'awd', 'Sample Project.docx'),
(178, 160, 'Return proposal', '2022-12-17', '18:53:55', 105, 'adw', 'index.php'),
(179, 165, 'Proposal AKO sucessfully created', '2022-12-18', '01:56:27', 131, '', NULL),
(180, 166, 'Proposal SampleNotif sucessfully created', '2022-12-18', '02:01:06', 131, '', NULL),
(181, 167, 'Proposal SampleNotifdd sucessfully created', '2022-12-18', '02:03:09', 131, '', NULL),
(182, 168, 'Proposal WEWS sucessfully created', '2022-12-18', '02:05:31', 131, '', NULL),
(183, 169, 'Proposal WEWSyyy sucessfully created', '2022-12-18', '02:06:50', 131, '', NULL),
(184, 170, 'Proposal aaaaaaaaa sucessfully created', '2022-12-18', '02:13:47', 131, '', NULL),
(185, 162, 'Forward proposal', '2022-12-17', '19:15:58', 105, 'Good', 'index.php'),
(186, 162, 'Return proposal', '2022-12-17', '19:25:14', 111, 'awd', 'Sample Project (1).docx'),
(187, 165, 'Forward proposal', '2022-12-17', '19:25:58', 105, 'awd', 'Sample Project.docx'),
(188, 165, 'Return proposal', '2022-12-17', '19:26:17', 111, 'wews', 'Sample Project.docx'),
(189, 166, 'Forward proposal', '2022-12-17', '19:27:06', 105, 's', 'Sample Project (1) (1).docx'),
(190, 166, 'Return proposal', '2022-12-17', '19:27:18', 111, 'aa', 'Sample Project (1) (1).docx'),
(191, 161, 'Forward proposal', '2022-12-17', '20:47:08', 105, 'awdawdawd', 'index.php'),
(192, 161, 'Return proposal', '2022-12-17', '20:47:28', 111, 'awda', 'index (3).php'),
(193, 167, 'Forward proposal', '2022-12-17', '20:54:30', 105, 'awd', 'Sample Project (1).docx'),
(194, 168, 'Forward proposal', '2022-12-17', '20:54:39', 105, 'awd', 'Sample Project (1).docx'),
(195, 167, 'Return proposal', '2022-12-17', '20:54:52', 111, 'awdd', 'Sample Project.docx'),
(196, 167, 'Return proposal', '2022-12-17', '20:55:23', 111, 'awdd', 'Sample Project.docx'),
(197, 167, 'Return proposal', '2022-12-17', '20:55:24', 111, 'awdd', 'Sample Project.docx'),
(198, 167, 'Return proposal', '2022-12-17', '20:55:25', 111, 'awdd', 'Sample Project.docx'),
(199, 167, 'Return proposal', '2022-12-17', '20:55:25', 111, 'awdd', 'Sample Project.docx'),
(200, 168, 'Return proposal', '2022-12-17', '20:55:58', 111, 'awd', 'Sample Project.docx'),
(201, 161, 'Forward proposal', '2022-12-17', '21:00:24', 105, 'testingan', 'index.php'),
(202, 161, 'Return proposal', '2022-12-17', '21:00:46', 111, 'Testing langs', 'Sample Project (1).docx'),
(203, 161, 'Forward proposal', '2022-12-17', '21:01:52', 105, 'balik napod nako', 'Sample Project.docx'),
(204, 161, 'Return proposal', '2022-12-17', '21:02:12', 111, 'tanan', 'Research-and-Innovation-Monitoring-and-Evaluation-System (2).pptx'),
(205, 170, 'Forward proposal', '2022-12-17', '21:05:27', 105, 'forward ha', 'index.php'),
(206, 170, 'Return proposal', '2022-12-18', '02:55:17', 111, 'aa', 'index.php'),
(207, 170, 'Forward proposal', '2022-12-18', '03:02:05', 105, 'balik napod', 'Sample Project.docx'),
(208, 170, 'Return proposal', '2022-12-18', '03:07:04', 111, 'aaa', 'Sample Project.docx'),
(209, 170, 'Return proposal', '2022-12-18', '03:07:05', 111, 'aaa', 'Sample Project.docx'),
(210, 170, 'Return proposal', '2022-12-18', '03:07:05', 111, 'aaa', 'Sample Project.docx'),
(211, 170, 'Return proposal', '2022-12-18', '03:07:06', 111, 'aaa', 'Sample Project.docx'),
(212, 170, 'Return proposal', '2022-12-18', '03:07:06', 111, 'aaa', 'Sample Project.docx'),
(213, 170, 'Return proposal', '2022-12-18', '03:07:30', 111, 'aaa', 'Sample Project.docx'),
(214, 170, 'Forward proposal', '2022-12-18', '03:08:01', 105, 'awd', 'Sample Project (1).docx'),
(215, 170, 'Return proposal', '2022-12-18', '03:20:35', 111, 'kkawd', 'Sample Project.docx'),
(216, 170, 'Return proposal', '2022-12-18', '03:20:36', 111, 'kkawd', 'Sample Project.docx'),
(217, 170, 'Return proposal', '2022-12-18', '03:20:36', 111, 'kkawd', 'Sample Project.docx'),
(218, 170, 'Return proposal', '2022-12-18', '03:20:36', 111, 'kkawd', 'Sample Project.docx'),
(219, 170, 'Return proposal', '2022-12-18', '03:20:36', 111, 'kkawd', 'Sample Project.docx'),
(220, 170, 'Return proposal', '2022-12-18', '03:20:37', 111, 'kkawd', 'Sample Project.docx'),
(221, 170, 'Return proposal', '2022-12-18', '03:20:37', 111, 'kkawd', 'Sample Project.docx'),
(222, 170, 'Return proposal', '2022-12-18', '03:20:40', 111, 'kkawd', 'Sample Project.docx'),
(223, 166, 'Forward proposal', '2022-12-18', '03:20:56', 105, 'awda', 'Sample Project.docx'),
(224, 170, 'Forward proposal', '2022-12-18', '03:21:07', 105, 'awd', 'Sample Project.docx'),
(225, 171, 'Proposal Earthquake Preventiom sucessfully created', '2022-12-18', '13:19:48', 131, '', NULL),
(226, 172, 'Proposal Tidal Wave Monitoring sucessfully created', '2022-12-18', '13:20:18', 131, '', NULL),
(227, 173, 'Proposal Storm Surge sucessfully created', '2022-12-18', '13:21:50', 131, '', NULL),
(228, 171, 'Forward proposal', '2022-12-18', '06:34:29', 105, 'awd', 'index.php'),
(229, 170, 'Forward proposal', '2022-12-18', '06:42:14', 111, 'awdj', 'index (7).php'),
(230, 114, 'Forward proposal', '2022-12-18', '06:43:36', 113, 'aaaaaw', 'index (6).php'),
(231, 174, 'Proposal water falls sucessfully created', '2022-12-18', '14:19:43', 131, '', NULL),
(232, 175, 'Proposal AHHAHAHaa sucessfully created', '2022-12-18', '14:23:34', 131, '', NULL),
(233, 176, 'Proposal AHHAHAHaaee sucessfully created', '2022-12-18', '14:24:09', 131, '', NULL),
(234, 177, 'Proposal AHHAHAHaaees sucessfully created', '2022-12-18', '14:24:22', 131, '', NULL),
(235, 178, 'Proposal Debug sucessfully created', '2022-12-18', '14:25:18', 131, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `newproposal`
--

CREATE TABLE `newproposal` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT '',
  `description` text DEFAULT NULL,
  `tags` varchar(100) DEFAULT '',
  `filename` varchar(100) DEFAULT '',
  `employeeid` varchar(50) DEFAULT NULL,
  `employeeid2` varchar(50) DEFAULT NULL,
  `employeeid3` varchar(50) DEFAULT NULL,
  `DateCreated` date DEFAULT NULL,
  `TimeCreated` time DEFAULT NULL,
  `AddedBy` varchar(11) DEFAULT NULL,
  `proposalstatus` int(11) DEFAULT 0,
  `entrylevel` int(11) DEFAULT 1,
  `ca` varchar(150) NOT NULL,
  `pd` varchar(150) NOT NULL,
  `pb` bigint(150) NOT NULL,
  `ra` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newproposal`
--

INSERT INTO `newproposal` (`id`, `title`, `description`, `tags`, `filename`, `employeeid`, `employeeid2`, `employeeid3`, `DateCreated`, `TimeCreated`, `AddedBy`, `proposalstatus`, `entrylevel`, `ca`, `pd`, `pb`, `ra`) VALUES
(77, 'ssssssssss', 'aaaaaaaaaaaa', 'aaaaa', 'upload/Act3.qgz', '115', NULL, NULL, '2022-09-17', '17:18:26', NULL, 5, 1, '', '', 0, ''),
(78, 'awdaw', 'adwadw', 'awd', 'upload/Activity 1.docx', '115', NULL, NULL, '2022-09-22', '13:28:26', NULL, 6, 1, '', '', 0, ''),
(79, 'awdawd', 'awdawdawd', 'adwda ', 'upload/Activity-1-ENTREP.docx', '115', NULL, NULL, '2022-09-22', '13:39:30', NULL, 7, 1, '', '', 0, ''),
(81, 'New Proposal', 'First', '1', 'upload/Activity 1.docx', '104', NULL, NULL, '2022-09-22', '21:28:57', NULL, 5, 1, '', '', 0, ''),
(82, 'Test', 'awda', 'awd', 'upload/Activity 1.docx', '104', NULL, NULL, '2022-09-22', '21:30:42', NULL, 7, 1, '', '', 0, ''),
(83, 'wew', 'asdasd', 'aaa', 'upload/Activity 1.docx', '104', NULL, NULL, '2022-09-22', '21:31:41', NULL, 6, 1, '', '', 0, ''),
(84, 'Jev1', 'awdawd', 'awd', 'upload/Activity 1.docx', '104', NULL, NULL, '2022-09-22', '21:32:54', NULL, 5, 1, '', '', 0, ''),
(85, 'jev 2', 'awdawd', 'awda', 'upload/Activity 1.docx', '104', NULL, NULL, '2022-09-22', '21:33:14', NULL, 5, 1, '', '', 0, ''),
(86, 'jev 3', '333333333', '3', 'upload/Activity-1-ENTREP.docx', '104', NULL, NULL, '2022-09-22', '21:33:58', NULL, 5, 1, '', '', 0, ''),
(93, 'To the Moon', 'aaa', '111', 'upload/Activity 1.docx', '115', NULL, NULL, '2022-09-22', '21:55:20', NULL, 5, 1, '', '', 0, ''),
(102, 'dsdsdssds', 'awdawd', 'aw', 'upload/My Hero Academia (Boku No Hero Academia) • r_BokuNoHeroAcademia (1).png', '115', NULL, NULL, '2022-10-08', '17:13:25', NULL, 5, 1, '', '', 0, ''),
(108, '11', '1', '1', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '17:33:40', NULL, 7, 1, '', '', 0, ''),
(109, '111', '1', '1', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '17:33:45', NULL, 6, 1, '', '', 0, ''),
(110, '1112', '1', '1', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '17:33:49', NULL, 5, 1, '', '', 0, ''),
(111, '11111', '1', '1', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '17:33:55', NULL, 6, 1, '', '', 0, ''),
(113, '1111111', '1', '1', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '17:34:06', NULL, 6, 1, '', '', 0, ''),
(114, '11111111', '1', '1', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '17:34:11', NULL, 6, 1, '', '', 0, ''),
(115, '111111111', '1', '1', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '17:34:17', NULL, 5, 1, '', '', 0, ''),
(116, '1111111111', '1', '1', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '17:34:21', NULL, 5, 1, '', '', 0, ''),
(117, 'q', 'q', 'q', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '18:00:00', NULL, 5, 1, '', '', 0, ''),
(118, 'qq', 'q', 'q', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '18:00:06', NULL, 5, 1, '', '', 0, ''),
(119, 'qqq', 'q', 'q', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '18:00:10', NULL, 5, 1, '', '', 0, ''),
(120, 'qqqq', 'q', 'q', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '18:00:16', NULL, 5, 1, '', '', 0, ''),
(121, 'qqqqq', 'q', 'q', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '18:00:22', NULL, 5, 1, '', '', 0, ''),
(123, 'awd', 'awda', 'qaaqq', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '18:12:15', NULL, 5, 1, '', '', 0, ''),
(124, 'awdaa', 'awda', 'qaaqq', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '18:12:30', NULL, 5, 1, '', '', 0, ''),
(125, 'awddd', 'adad', 'aa', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '18:13:59', NULL, 5, 1, '', '', 0, ''),
(126, 'aaa', 'aa', 'ddd', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '18:14:42', NULL, 5, 1, '', '', 0, ''),
(127, '111111111111', 'aa', 'ddd', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '18:14:56', NULL, 5, 1, '', '', 0, ''),
(129, 'dai', '1231', '1', 'upload/1664726261895.jpg', '115', NULL, NULL, '2022-10-08', '20:06:27', NULL, 5, 1, '', '', 0, ''),
(132, 'Sampleeee', 'awdawd', 'awd', 'upload/xxx.png', '115', NULL, NULL, '2022-10-21', '11:08:31', NULL, 5, 1, '', '', 0, ''),
(133, 'sad', 'ad', 'asd', 'upload/289582570_153845290552433_8304070735699913644_n.jpg', '116', NULL, NULL, '2022-11-10', '23:32:33', NULL, 2, 4, '', '', 0, ''),
(134, 'sads', 'ad', 'asd', 'upload/289582570_153845290552433_8304070735699913644_n.jpg', '116', NULL, NULL, '2022-11-10', '23:32:56', NULL, 2, 4, '', '', 0, ''),
(135, 'sadsdd', 'ad', 'asd', 'upload/289582570_153845290552433_8304070735699913644_n.jpg', '116', NULL, NULL, '2022-11-10', '23:33:06', NULL, 5, 1, '', '', 0, ''),
(136, 'Renovation of University Main Gate', 'sfsdfsdfsdf', 'asdadasd', 'upload/Sample project.docx', '130', '128', '129', '2022-12-16', '01:14:29', NULL, 2, 4, '', '', 0, ''),
(139, 'Sample Title', 'zx', 'sad', 'upload/Traverse.pdf', '116', '104', '0', '2022-12-17', '10:20:34', NULL, 2, 4, '', '', 0, ''),
(159, 'Testing2', 'Testing2', 'testing2', 'upload/Research-and-Innovation-Monitoring-and-Evaluation-System (2).pptx', '131', '125', NULL, '2022-12-18', '01:05:51', NULL, 2, 4, '', '', 0, ''),
(160, 'Testing3', 'Testing3', 'Testing3', 'upload/index.php', '131', '115', '104', '2022-12-18', '01:09:31', NULL, 2, 4, 'Testing3', 'Testing3', 33, 'Testing3'),
(161, 'Testing4', 'Testing4', '4', 'upload/index (3).php', '131', 'jevie', 'patrick', '2022-12-18', '01:11:13', NULL, 3, 4, 'Testing4', 'Testing4', 44, 'Testing4'),
(162, 'Testing5', 'Testing5', '55', 'upload/index.php', '131', 'Chariz', 'Joselle', '2022-12-18', '01:34:59', NULL, 2, 4, 'Testing5', 'Testing5', 55, 'Testing5'),
(163, 'First Title', 'First IA', 'First KEYWORD', 'upload/index.php', '131', 'Jomarie Dañ', 'Jevie Vanzu', '2022-12-18', '01:37:40', NULL, 2, 4, 'First CA', 'First PD', 500000, 'First RA'),
(164, 'Second Titleeeeeeeeeeee', 'Second IAAAAAAAAAAAAAAAAAA', 'Second KEYWORD', 'upload/index (3).php', '131', 'Jevie Vanzuela', 'Jomarie Dañolko', '2022-12-18', '01:44:47', NULL, 2, 4, 'Second CAAAAAAAAAAAA', 'Second PDDDDDDDDDD', 666666666666, 'Second Agendaaaaaaaaaaaaa'),
(165, 'AKO', 'AKO IA', 'AKO KEYWORD', 'upload/Sample Project.docx', '131', 'AKO', 'AKOGIHAPON', '2022-12-18', '01:56:27', NULL, 2, 4, 'AKO CA', 'AKO PD', 0, 'AKO RA'),
(166, 'SampleNotif', 'awdaw', 'aaawdw', 'upload/Sample Project.docx', '131', 'Okey keyow', 'Okwad', '2022-12-18', '02:01:06', NULL, 4, 4, 'asda', 'awdaw', 5000, 'awdaw'),
(167, 'SampleNotifdd', 'awdaw', 'aaawdw', 'upload/Sample Project.docx', '131', 'Okey keyow', 'Okwad', '2022-12-18', '02:03:09', NULL, 3, 4, 'asda', 'awdaw', 5000, 'awdaw'),
(168, 'WEWS', 'awd', 'awd', 'upload/Sample Project.docx', '131', 'awd', 'awd', '2022-12-18', '02:05:31', NULL, 3, 4, 'dawd', 'dawd', 555, 'awd'),
(169, 'WEWSyyy', 'awd', 'awd', 'upload/Sample Project.docx', '131', 'awd', 'awd', '2022-12-18', '02:06:50', NULL, 3, 1, 'dawd', 'dawd', 555, 'awd'),
(170, 'aaaaaaaaa', 'adwwa', 'awd', 'upload/Sample Project.docx', '131', 'awd', 'awd', '2022-12-18', '02:13:47', NULL, 5, 4, 'awd', 'awd', 123, 'awd'),
(171, 'Earthquake Preventiom', 'SLSU', 'Monitoring System, Machine Learning', 'upload/Research-and-Innovation-Monitoring-and-Evaluation-System (2).pptx', '131', 'Rhod', 'Malangsa', '2022-12-18', '13:19:48', NULL, 4, 1, 'Municipality of Sogod', '6 months', 1000000, 'Transformative Learning'),
(172, 'Tidal Wave Monitoring', 'SLSU', 'Monitoring System, Machine Learning', 'upload/Research-and-Innovation-Monitoring-and-Evaluation-System (2).pptx', '131', 'Rhod', 'Malangsa', '2022-12-18', '13:20:18', NULL, 3, 1, 'Municipality of Sogod', '6 months', 1000000, 'Transformative Learning'),
(173, 'Storm Surge', 'SLSU', 'Monitoring System, Machine Learning', 'upload/Research-and-Innovation-Monitoring-and-Evaluation-System (2).pptx', '131', 'Rhod', 'Malangsa', '2022-12-18', '13:21:50', NULL, 3, 1, 'Municipality of Sogod', '6 months', 1000000, 'Transformative Learning'),
(174, 'water falls', 'maasin', '123', 'upload/index (7).php', '131', 'jevie', 'awd', '2022-12-18', '14:19:43', NULL, 3, 1, 'fire prevention', 'awd', 50000, 'wawd'),
(175, 'AHHAHAHaa', 'awdahwd', 'Yawa', 'upload/Sample Project.docx', '131', 'awd', 'awdadw', '2022-12-18', '14:23:34', NULL, 3, 1, 'awdawd', 'awdawd', 50000, 'awdawd'),
(176, 'AHHAHAHaaee', 'awdahwd', 'Yawa', 'upload/Sample Project.docx', '131', 'awd', 'awdadw', '2022-12-18', '14:24:09', NULL, 3, 1, 'awdawd', 'awdawd', 50000, 'awdawd'),
(177, 'AHHAHAHaaees', 'awdahwd', 'Yawa', 'upload/Sample Project.docx', '131', 'awd', 'awdadw', '2022-12-18', '14:24:22', NULL, 3, 1, 'awdawd', 'awdawd', 50000, 'awdawd'),
(178, 'Debug', 'awdawd', '1234', 'upload/Sample Project.docx', '131', 'Jevie', 'patrick', '2022-12-18', '14:25:18', NULL, 3, 1, 'asdadsad', 'aawdasda', 5000, 'nawndn');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `fromid` int(11) DEFAULT NULL,
  `toid` int(11) DEFAULT NULL,
  `updates` varchar(255) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp(),
  `isread` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `fromid`, `toid`, `updates`, `date_created`, `isread`) VALUES
(1, 114, 131, 'Project has been return to you for compliance', '2022-12-17 10:19:50', 1),
(2, 105, 131, 'Proposal has been returned by coordinator!', '2022-12-17 11:54:10', 1),
(3, 105, 131, 'Proposal has been returned by coordinator!', '2022-12-17 11:55:26', 1),
(4, 105, 131, 'Proposal has been returned by coordinator!', '2022-12-17 11:58:41', 1),
(5, 111, 131, 'Proposal has been returned by Director!', '2022-12-17 12:35:46', 1),
(6, 111, 130, 'Proposal has been returned by Director!', '2022-12-17 15:01:34', 0),
(7, 111, 116, 'Proposal has been returned by Director!', '2022-12-17 15:14:35', 0),
(8, 111, 116, 'Proposal has been returned by Director!', '2022-12-17 15:15:20', 0),
(9, 105, 131, 'Proposal has been returned by coordinator!', '2022-12-17 17:48:48', 1),
(10, 105, 116, 'Proposal has been returned by coordinator!', '2022-12-17 17:50:41', 0),
(11, 105, 116, 'Proposal has been returned by coordinator!', '2022-12-17 17:50:59', 1),
(12, 105, 131, 'Proposal has been returned by coordinator!', '2022-12-17 17:52:36', 1),
(13, 105, 131, 'Proposal has been returned by coordinator!', '2022-12-17 17:53:55', 1),
(14, 0, 0, 'New Proposal Arrived', '2022-12-17 18:01:06', 0),
(15, 131, 0, 'New Proposal Arrived', '2022-12-17 18:03:09', 0),
(16, 131, 0, 'New Proposal Arrived', '2022-12-17 18:05:31', 0),
(17, 131, 0, 'New Proposal Arrived', '2022-12-17 18:06:50', 0),
(18, 131, 0, 'New Proposal Arrived', '2022-12-17 18:13:47', 0),
(19, 111, 131, 'Proposal has been returned by Director!', '2022-12-17 18:25:14', 1),
(20, 111, 131, 'Proposal has been returned by Director!', '2022-12-17 18:26:17', 1),
(21, 111, 131, 'Proposal has been returned by Director!', '2022-12-17 18:27:18', 1),
(22, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 19:47:28', 1),
(23, 111, 105, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 19:54:52', 1),
(24, 111, 105, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 19:54:52', 1),
(25, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 19:55:23', 1),
(26, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 19:55:23', 0),
(27, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 19:55:24', 1),
(28, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 19:55:24', 0),
(29, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 19:55:25', 1),
(30, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 19:55:25', 0),
(31, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 19:55:25', 1),
(32, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 19:55:25', 0),
(33, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 19:55:58', 1),
(34, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 19:55:58', 0),
(35, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 20:00:46', 1),
(36, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 20:00:46', 0),
(37, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 20:02:12', 1),
(38, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-17 20:02:12', 0),
(39, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 01:55:17', 1),
(40, 111, 2, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 01:55:17', 0),
(41, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:07:04', 1),
(42, 111, 2, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:07:04', 0),
(43, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:07:05', 1),
(44, 111, 2, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:07:05', 0),
(45, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:07:05', 1),
(46, 111, 2, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:07:05', 0),
(47, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:07:06', 1),
(48, 111, 2, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:07:06', 0),
(49, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:07:06', 1),
(50, 111, 2, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:07:06', 0),
(51, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:07:30', 1),
(52, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:20:35', 0),
(53, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:20:36', 0),
(54, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:20:36', 0),
(55, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:20:36', 0),
(56, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:20:37', 0),
(57, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:20:37', 0),
(58, 111, 0, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:20:37', 0),
(59, 111, 131, 'You Proposal has been returned to coordinator by Director!', '2022-12-18 02:20:40', 1),
(60, 131, 0, 'New Proposal Arrived', '2022-12-18 05:19:48', 0),
(61, 131, 0, 'New Proposal Arrived', '2022-12-18 05:20:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT '',
  `password` varchar(50) DEFAULT '',
  `accounttype` int(5) DEFAULT 0,
  `accountholder` int(11) DEFAULT NULL,
  `isverify` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `accounttype`, `accountholder`, `isverify`) VALUES
(35, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 1, 103, 1),
(36, 'COE', '81dc9bdb52d04dc20036dbd8313ed055', 31, 104, 1),
(37, 'CCSIT', '81dc9bdb52d04dc20036dbd8313ed055', 3, 105, 1),
(38, 'director', '81dc9bdb52d04dc20036dbd8313ed055', 4, 111, 1),
(39, 'isda', '81dc9bdb52d04dc20036dbd8313ed055', 6, 112, 1),
(40, 'er', '81dc9bdb52d04dc20036dbd8313ed055', 5, 113, 1),
(41, 'hue', '81dc9bdb52d04dc20036dbd8313ed055', 7, 114, 1),
(42, 'COT', '81dc9bdb52d04dc20036dbd8313ed055', 32, 115, 1),
(43, 'CCJ', '81dc9bdb52d04dc20036dbd8313ed055', 33, 116, 1),
(44, 'asd', '289dff07669d7a23de0ef88d2f7129e7', 2, 117, 1),
(46, 'sf@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 124, 1),
(47, 'dsffff@gmail.com', '202cb962ac59075b964b07152d234b70', 2, 125, 1),
(48, 'sad@gmail.com', '289dff07669d7a23de0ef88d2f7129e7', 2, 126, 1),
(49, 'Testme@gmail.com', '6cf82ee1020caef069e753c67a97a70d', 2, 127, 1),
(50, 'johnlee@gmail.com', '2fe6e16030fcc60282b7fe642108e84c', 2, 128, 1),
(51, 'markchong@gmail.com', '2fe6e16030fcc60282b7fe642108e84c', 2, 129, 1),
(52, 'johnuy@gmail.com', '2fe6e16030fcc60282b7fe642108e84c', 2, 130, 1),
(53, 'jake@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 131, 1),
(54, 'j@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 132, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newproposal`
--
ALTER TABLE `newproposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `newproposal`
--
ALTER TABLE `newproposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
