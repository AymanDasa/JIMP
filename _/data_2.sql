-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 07:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `alog_id` int(10) NOT NULL,
  `alog_time` datetime NOT NULL,
  `alog_section` varchar(100) NOT NULL,
  `alog_no` varchar(100) NOT NULL,
  `alog_description` varchar(100) NOT NULL,
  `alog_user` varchar(100) NOT NULL,
  `alog_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `activitylog`
--

INSERT INTO `activitylog` (`alog_id`, `alog_time`, `alog_section`, `alog_no`, `alog_description`, `alog_user`, `alog_note`) VALUES
(54873, '0000-00-00 00:00:00', 'agent', 'شركة التكامل الدولية للملاحة', 'Add  Agent', 'aymanoz', 'AgentNameAr:شركة التكامل الدولية للملاحة + AgentCR:403022= AgentNameEn:AL TAKAMUL MARITIME CO. LTD    '),
(54874, '0000-00-00 00:00:00', 'ship', 'JOLLY GIADA', 'Add Ship', 'aymanoz', 'ShipName:JOLLY GIADA + IMO:9033  +  Weight:42112  + VAT:0    '),
(54875, '0000-00-00 00:00:00', 'invoice', '81', 'Add New Invoice', 'aymanoz', 'Inovice 81MSTOTAL:22452.4 + SSTOTAL:0= TOTAL:22452.4  (VAT)= 0 VAT_TOTAL 22452.4 '),
(54876, '0000-00-00 00:00:00', 'invoice', '81', 'Update Invoice', 'aymanoz', 'Approved:81   '),
(54877, '0000-00-00 00:00:00', 'ship', 'DEFNE', 'Add Ship', 'aymanoz', 'ShipName:DEFNE + IMO:99986  +  Weight:5261  + VAT:0    '),
(54878, '0000-00-00 00:00:00', 'invoice', '82', 'Add New Invoice', 'aymanoz', 'Inovice 82MSTOTAL:13018.74 + SSTOTAL:0= TOTAL:13018.74  (VAT)= 0 VAT_TOTAL 13018.74 '),
(54879, '0000-00-00 00:00:00', 'invoice', '82', 'Update Invoice', 'aymanoz', 'Approved:82   '),
(54880, '0000-00-00 00:00:00', 'ship', 'OVP TAURUS', 'Add Ship', 'aymanoz', 'ShipName:OVP TAURUS + IMO:69996  +  Weight:28596  + VAT:0    '),
(54881, '0000-00-00 00:00:00', 'invoice', '83', 'Add New Invoice', 'aymanoz', 'Inovice 83MSTOTAL:19749.2 + SSTOTAL:0= TOTAL:19749.2  (VAT)= 0 VAT_TOTAL 19749.2 '),
(54882, '0000-00-00 00:00:00', 'invoice', '83', 'Update Invoice', 'aymanoz', 'Approved:83   '),
(54883, '0000-00-00 00:00:00', 'invoice', '84', 'Add New Invoice', 'aymanoz', 'Inovice 84MSTOTAL:13186.02 + SSTOTAL:0= TOTAL:13186.02  (VAT)= 0 VAT_TOTAL 13186.02 '),
(54884, '0000-00-00 00:00:00', 'invoice', '84', 'Update Invoice', 'aymanoz', 'Approved:84   '),
(54885, '0000-00-00 00:00:00', 'ship', 'ALAWAD 1', 'Add Ship', 'aymanoz', 'ShipName:ALAWAD 1 + IMO:1369  +  Weight:1687  + VAT:0    '),
(54886, '0000-00-00 00:00:00', 'invoice', '85', 'Add New Invoice', 'aymanoz', 'Inovice 85MSTOTAL:8830.1 + SSTOTAL:0= TOTAL:8830.1  (VAT)= 0 VAT_TOTAL 8830.1 '),
(54887, '0000-00-00 00:00:00', 'invoice', '85', 'Update Invoice', 'aymanoz', 'Approved:85   '),
(54888, '0000-00-00 00:00:00', 'invoice', '86', 'Add New Invoice', 'aymanoz', 'Inovice 86MSTOTAL:8268.9 + SSTOTAL:0= TOTAL:8268.9  (VAT)= 0 VAT_TOTAL 8268.9 '),
(54889, '0000-00-00 00:00:00', 'invoice', '86', 'Update Invoice', 'aymanoz', 'Approved:86   '),
(54890, '0000-00-00 00:00:00', 'ship', 'HS BURAQ', 'Add Ship', 'aymanoz', 'ShipName:HS BURAQ + IMO:2323  +  Weight:62713  + VAT:0    '),
(54891, '0000-00-00 00:00:00', 'invoice', '87', 'Add New Invoice', 'aymanoz', 'Inovice 87MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54892, '0000-00-00 00:00:00', 'invoice', '87', 'Update Invoice', 'aymanoz', 'Approved:87   '),
(54893, '0000-00-00 00:00:00', 'invoice', '87', 'Update Invoice', 'aymanoz', 'Inovice 87MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54894, '0000-00-00 00:00:00', 'invoice', '87', 'Update Invoice', 'aymanoz', 'Inovice 87MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54895, '0000-00-00 00:00:00', 'invoice', '87', 'Update Invoice', 'aymanoz', 'Approved:87   '),
(54896, '0000-00-00 00:00:00', 'ship', 'BAHRI TABUK', 'Add Ship', 'aymanoz', 'ShipName:BAHRI TABUK + IMO:12367  +  Weight:52714  + VAT:0    '),
(54897, '0000-00-00 00:00:00', 'invoice', '88', 'Add New Invoice', 'aymanoz', 'Inovice 88MSTOTAL:28972.8 + SSTOTAL:0= TOTAL:28972.8  (VAT)= 0 VAT_TOTAL 28972.8 '),
(54898, '0000-00-00 00:00:00', 'invoice', '88', 'Update Invoice', 'aymanoz', 'Approved:88   '),
(54899, '0000-00-00 00:00:00', 'ship', 'ENJOY HARMONY', 'Add Ship', 'aymanoz', 'ShipName:ENJOY HARMONY + IMO:6539  +  Weight:40914  + VAT:0    '),
(54900, '0000-00-00 00:00:00', 'invoice', '89', 'Add New Invoice', 'aymanoz', 'Inovice 89MSTOTAL:0 + SSTOTAL:0= TOTAL:0  (VAT)= 0 VAT_TOTAL 0 '),
(54901, '0000-00-00 00:00:00', 'invoice', '89', 'Update Invoice', 'aymanoz', 'Inovice 89MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54902, '0000-00-00 00:00:00', 'invoice', '89', 'Update Invoice', 'aymanoz', 'Approved:89   '),
(54903, '0000-00-00 00:00:00', 'ship', 'NCC TIHAMA', 'Add Ship', 'aymanoz', 'ShipName:NCC TIHAMA + IMO:36764  +  Weight:29646  + VAT:0    '),
(54904, '0000-00-00 00:00:00', 'invoice', '90', 'Add New Invoice', 'aymanoz', 'Inovice 90MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54905, '0000-00-00 00:00:00', 'invoice', '90', 'Update Invoice', 'aymanoz', 'Approved:90   '),
(54906, '0000-00-00 00:00:00', 'invoice', '91', 'Add New Invoice', 'aymanoz', 'Inovice 91MSTOTAL:14629.66 + SSTOTAL:0= TOTAL:14629.66  (VAT)= 0 VAT_TOTAL 14629.66 '),
(54907, '0000-00-00 00:00:00', 'invoice', '91', 'Update Invoice', 'aymanoz', 'Approved:91   '),
(54908, '0000-00-00 00:00:00', 'ship', 'ELKA COSMOS', 'Add Ship', 'aymanoz', 'ShipName:ELKA COSMOS + IMO:23511  +  Weight:31905  + VAT:0    '),
(54909, '0000-00-00 00:00:00', 'invoice', '92', 'Add New Invoice', 'aymanoz', 'Inovice 92MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54910, '0000-00-00 00:00:00', 'invoice', '92', 'Update Invoice', 'aymanoz', 'Approved:92   '),
(54911, '0000-00-00 00:00:00', 'ship', 'TARMO', 'Add Ship', 'aymanoz', 'ShipName:TARMO + IMO:98790  +  Weight:471  + VAT:0    '),
(54912, '0000-00-00 00:00:00', 'invoice', '93', 'Add New Invoice', 'aymanoz', 'Inovice 93MSTOTAL:250 + SSTOTAL:0= TOTAL:250  (VAT)= 0 VAT_TOTAL 250 '),
(54913, '0000-00-00 00:00:00', 'invoice', '93', 'Update Invoice', 'aymanoz', 'Approved:93   '),
(54914, '0000-00-00 00:00:00', 'ship', 'REMAH', 'Add Ship', 'aymanoz', 'ShipName:REMAH + IMO:2908  +  Weight:18724  + VAT:0    '),
(54915, '0000-00-00 00:00:00', 'invoice', '94', 'Add New Invoice', 'aymanoz', 'Inovice 94MSTOTAL:32468.5 + SSTOTAL:0= TOTAL:32468.5  (VAT)= 0 VAT_TOTAL 32468.5 '),
(54916, '0000-00-00 00:00:00', 'invoice', '94', 'Update Invoice', 'aymanoz', 'Inovice 94MSTOTAL:23668.5 + SSTOTAL:0= TOTAL:23668.5  (VAT)= 0 VAT_TOTAL 23668.5 '),
(54917, '0000-00-00 00:00:00', 'invoice', '94', 'Update Invoice', 'aymanoz', 'Approved:94   '),
(54918, '0000-00-00 00:00:00', 'invoice', '41', 'Update Invoice', 'Samer', 'Inovice 41MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54919, '0000-00-00 00:00:00', 'invoice', '41', 'Update Invoice', 'Samer', 'Approved:41   '),
(54920, '0000-00-00 00:00:00', 'invoice', '56', 'Update Invoice', 'Samer', 'Inovice 56MSTOTAL:20622.4 + SSTOTAL:0= TOTAL:20622.4  (VAT)= 0 VAT_TOTAL 20622.4 '),
(54921, '0000-00-00 00:00:00', 'invoice', '56', 'Update Invoice', 'Samer', 'Approved:56   '),
(54922, '0000-00-00 00:00:00', 'invoice', '56', 'Update Invoice', 'Samer', 'Inovice 56MSTOTAL:20622.4 + SSTOTAL:0= TOTAL:20622.4  (VAT)= 0 VAT_TOTAL 20622.4 '),
(54923, '0000-00-00 00:00:00', 'invoice', '56', 'Update Invoice', 'Samer', 'Approved:56   '),
(54924, '0000-00-00 00:00:00', 'invoice', '48', 'Update Invoice', 'Samer', 'Inovice 48MSTOTAL:9219.4 + SSTOTAL:0= TOTAL:9219.4  (VAT)= 0 VAT_TOTAL 9219.4 '),
(54925, '0000-00-00 00:00:00', 'invoice', '48', 'Update Invoice', 'Samer', 'Approved:48   '),
(54926, '0000-00-00 00:00:00', 'invoice', '51', 'Update Invoice', 'Samer', 'Inovice 51MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54927, '0000-00-00 00:00:00', 'invoice', '51', 'Update Invoice', 'Samer', 'Approved:51   '),
(54928, '0000-00-00 00:00:00', 'invoice', '50', 'Update Invoice', 'Samer', 'Inovice 50MSTOTAL:4800.2 + SSTOTAL:0= TOTAL:4800.2  (VAT)= 0 VAT_TOTAL 4800.2 '),
(54929, '0000-00-00 00:00:00', 'invoice', '50', 'Update Invoice', 'Samer', 'Approved:50   '),
(54930, '0000-00-00 00:00:00', 'invoice', '43', 'Update Invoice', 'Samer', 'Inovice 43MSTOTAL:3302.7 + SSTOTAL:0= TOTAL:3302.7  (VAT)= 0 VAT_TOTAL 3302.7 '),
(54931, '0000-00-00 00:00:00', 'invoice', '43', 'Update Invoice', 'Samer', 'Approved:43   '),
(54932, '0000-00-00 00:00:00', 'invoice', '43', 'Update Invoice', 'Samer', 'Inovice 43MSTOTAL:3302.7 + SSTOTAL:0= TOTAL:3302.7  (VAT)= 0 VAT_TOTAL 3302.7 '),
(54933, '0000-00-00 00:00:00', 'invoice', '43', 'Update Invoice', 'Samer', 'Approved:43   '),
(54934, '0000-00-00 00:00:00', 'invoice', '61', 'Update Invoice', 'syed', 'Inovice 61MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54935, '0000-00-00 00:00:00', 'invoice', '61', 'Update Invoice', 'syed', 'Approved:61   '),
(54936, '0000-00-00 00:00:00', 'invoice', '17', 'Update Invoice', 'syed', 'Inovice 17MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54937, '0000-00-00 00:00:00', 'invoice', '17', 'Update Invoice', 'syed', 'Approved:17   '),
(54938, '0000-00-00 00:00:00', 'invoice', '41', 'Update Invoice', 'syed', 'Inovice 41MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54939, '0000-00-00 00:00:00', 'invoice', '41', 'Update Invoice', 'syed', 'Approved:41   '),
(54940, '0000-00-00 00:00:00', 'invoice', '51', 'Update Invoice', 'syed', 'Inovice 51MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54941, '0000-00-00 00:00:00', 'invoice', '51', 'Update Invoice', 'syed', 'Approved:51   '),
(54942, '0000-00-00 00:00:00', 'invoice', '79', 'Update Invoice', 'syed', 'Inovice 79MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54943, '0000-00-00 00:00:00', 'invoice', '79', 'Update Invoice', 'syed', 'Approved:79   '),
(54944, '0000-00-00 00:00:00', 'agent', '245', 'Update Agent', 'syed', 'AgentID:245 + AgentNameAr:توكيلات باعبود للتجارة والملاحة BTS  +  AgentCR:BTS4030  + AgentNameEn:BAABOUD TRADING &amp; SHIPPING,LTD.    '),
(54945, '0000-00-00 00:00:00', 'invoice', '33', 'Update Invoice', 'syed', 'Inovice 33MSTOTAL:12534.92 + SSTOTAL:0= TOTAL:12534.92  (VAT)= 0 VAT_TOTAL 12534.92 '),
(54946, '0000-00-00 00:00:00', 'invoice', '33', 'Update Invoice', 'syed', 'Approved:33   '),
(54947, '0000-00-00 00:00:00', 'invoice', '24', 'Update Invoice', 'syed', 'Inovice 24MSTOTAL:6006.04 + SSTOTAL:0= TOTAL:6006.04  (VAT)= 0 VAT_TOTAL 6006.04 '),
(54948, '0000-00-00 00:00:00', 'invoice', '24', 'Update Invoice', 'syed', 'Approved:24   '),
(54949, '0000-00-00 00:00:00', 'invoice', '95', 'Add New Invoice', 'syed', 'Inovice 95MSTOTAL:23004.8 + SSTOTAL:0= TOTAL:23004.8  (VAT)= 0 VAT_TOTAL 23004.8 '),
(54950, '0000-00-00 00:00:00', 'invoice', '95', 'Update Invoice', 'syed', 'Approved:95   '),
(54951, '0000-00-00 00:00:00', 'invoice', '96', 'Add New Invoice', 'syed', 'Inovice 96MSTOTAL:14564.38 + SSTOTAL:0= TOTAL:14564.38  (VAT)= 0 VAT_TOTAL 14564.38 '),
(54952, '0000-00-00 00:00:00', 'invoice', '96', 'Update Invoice', 'syed', 'Approved:96   '),
(54953, '0000-00-00 00:00:00', 'ship', 'CMA CGM PUGET', 'Add Ship', 'syed', 'ShipName:CMA CGM PUGET + IMO:9248124  +  Weight:49855  + VAT:0    '),
(54954, '0000-00-00 00:00:00', 'invoice', '97', 'Add New Invoice', 'syed', 'Inovice 97MSTOTAL:26201 + SSTOTAL:0= TOTAL:26201  (VAT)= 0 VAT_TOTAL 26201 '),
(54955, '0000-00-00 00:00:00', 'invoice', '97', 'Update Invoice', 'syed', 'Approved:97   '),
(54956, '0000-00-00 00:00:00', 'ship', 'CHARBEL', 'Add Ship', 'syed', 'ShipName:CHARBEL + IMO:9222558  +  Weight:17859  + VAT:0    '),
(54957, '0000-00-00 00:00:00', 'invoice', '98', 'Add New Invoice', 'syed', 'Inovice 98MSTOTAL:18101.8 + SSTOTAL:0= TOTAL:18101.8  (VAT)= 0 VAT_TOTAL 18101.8 '),
(54958, '0000-00-00 00:00:00', 'invoice', '98', 'Update Invoice', 'syed', 'Inovice 98MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54959, '0000-00-00 00:00:00', 'invoice', '98', 'Update Invoice', 'syed', 'Approved:98   '),
(54960, '0000-00-00 00:00:00', 'agent', '259', 'Update Agent', 'syed', 'AgentID:259 + AgentNameAr:شركة التكامل الدولية للملاحة  +  AgentCR:403022  + AgentNameEn:AL TAKAMUL MARITIME CO. LTD    '),
(54961, '0000-00-00 00:00:00', 'ship', 'JOLLY VANADIO', 'Add Ship', 'syed', 'ShipName:JOLLY VANADIO + IMO:9668972  +  Weight:51055  + VAT:0    '),
(54962, '0000-00-00 00:00:00', 'invoice', '99', 'Add New Invoice', 'syed', 'Inovice 99MSTOTAL:26441 + SSTOTAL:0= TOTAL:26441  (VAT)= 0 VAT_TOTAL 26441 '),
(54963, '0000-00-00 00:00:00', 'invoice', '99', 'Update Invoice', 'syed', 'Approved:99   '),
(54964, '0000-00-00 00:00:00', 'invoice', '100', 'Add New Invoice', 'syed', 'Inovice 100MSTOTAL:14911.1 + SSTOTAL:0= TOTAL:14911.1  (VAT)= 0 VAT_TOTAL 14911.1 '),
(54965, '0000-00-00 00:00:00', 'invoice', '100', 'Update Invoice', 'syed', 'Approved:100   '),
(54966, '0000-00-00 00:00:00', 'ship', 'ENERGY COMMANDER', 'Add Ship', 'syed', 'ShipName:ENERGY COMMANDER + IMO:1326  +  Weight:42172  + VAT:0    '),
(54967, '0000-00-00 00:00:00', 'invoice', '101', 'Add New Invoice', 'syed', 'Inovice 101MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54968, '0000-00-00 00:00:00', 'invoice', '101', 'Update Invoice', 'syed', 'Approved:101   '),
(54969, '0000-00-00 00:00:00', 'ship', 'OUTRIDER', 'Add Ship', 'syed', 'ShipName:OUTRIDER + IMO:5697  +  Weight:21265  + VAT:0    '),
(54970, '0000-00-00 00:00:00', 'invoice', '102', 'Add New Invoice', 'syed', 'Inovice 102MSTOTAL:1000 + SSTOTAL:0= TOTAL:1000  (VAT)= 0 VAT_TOTAL 1000 '),
(54971, '0000-00-00 00:00:00', 'invoice', '102', 'Update Invoice', 'syed', 'Approved:102   '),
(54972, '0000-00-00 00:00:00', 'invoice', '103', 'Add New Invoice', 'syed', 'Inovice 103MSTOTAL:20980.8 + SSTOTAL:0= TOTAL:20980.8  (VAT)= 0 VAT_TOTAL 20980.8 '),
(54973, '0000-00-00 00:00:00', 'invoice', '103', 'Update Invoice', 'syed', 'Approved:103   '),
(54974, '0000-00-00 00:00:00', 'ship', 'AKSON SANDRA', 'Add Ship', 'syed', 'ShipName:AKSON SANDRA + IMO:369863  +  Weight:24050  + VAT:0    '),
(54975, '0000-00-00 00:00:00', 'invoice', '104', 'Add New Invoice', 'syed', 'Inovice 104MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(54976, '0000-00-00 00:00:00', 'invoice', '104', 'Update Invoice', 'syed', 'Approved:104   '),
(54977, '0000-00-00 00:00:00', 'ship', 'ALNAWA EXPRESS', 'Add Ship', 'syed', 'ShipName:ALNAWA EXPRESS + IMO:45678  +  Weight:10035  + VAT:0    '),
(54978, '0000-00-00 00:00:00', 'invoice', '105', 'Add New Invoice', 'syed', 'Inovice 105MSTOTAL:20141.9 + SSTOTAL:0= TOTAL:20141.9  (VAT)= 0 VAT_TOTAL 20141.9 '),
(54979, '0000-00-00 00:00:00', 'invoice', '105', 'Update Invoice', 'syed', 'Approved:105   '),
(54980, '0000-00-00 00:00:00', 'ship', 'GFS PRECIOUS', 'Add Ship', 'syed', 'ShipName:GFS PRECIOUS + IMO:43499  +  Weight:35991  + VAT:0    '),
(54981, '0000-00-00 00:00:00', 'invoice', '106', 'Add New Invoice', 'syed', 'Inovice 106MSTOTAL:21228.2 + SSTOTAL:0= TOTAL:21228.2  (VAT)= 0 VAT_TOTAL 21228.2 '),
(54982, '0000-00-00 00:00:00', 'invoice', '106', 'Update Invoice', 'syed', 'Approved:106   '),
(54983, '0000-00-00 00:00:00', 'ship', 'WAN HAI 316', 'Add Ship', 'syed', 'ShipName:WAN HAI 316 + IMO:444569  +  Weight:27800  + VAT:0    '),
(54984, '0000-00-00 00:00:00', 'invoice', '107', 'Add New Invoice', 'syed', 'Inovice 107MSTOTAL:19590 + SSTOTAL:0= TOTAL:19590  (VAT)= 0 VAT_TOTAL 19590 '),
(54985, '0000-00-00 00:00:00', 'invoice', '107', 'Update Invoice', 'syed', 'Approved:107   '),
(54986, '0000-00-00 00:00:00', 'ship', 'ADEL II', 'Add Ship', 'syed', 'ShipName:ADEL II + IMO:332697  +  Weight:3495  + VAT:0    '),
(54987, '0000-00-00 00:00:00', 'invoice', '108', 'Add New Invoice', 'syed', 'Inovice 108MSTOTAL:13918.3 + SSTOTAL:0= TOTAL:13918.3  (VAT)= 0 VAT_TOTAL 13918.3 '),
(54988, '0000-00-00 00:00:00', 'invoice', '108', 'Update Invoice', 'syed', 'Approved:108   '),
(54989, '0000-00-00 00:00:00', 'invoice', '109', 'Add New Invoice', 'syed', 'Inovice 109MSTOTAL:13186.02 + SSTOTAL:0= TOTAL:13186.02  (VAT)= 0 VAT_TOTAL 13186.02 '),
(54990, '0000-00-00 00:00:00', 'invoice', '109', 'Update Invoice', 'syed', 'Approved:109   '),
(54991, '0000-00-00 00:00:00', 'ship', 'PATMOS', 'Add Ship', 'syed', 'ShipName:PATMOS + IMO:779986  +  Weight:4599  + VAT:0    '),
(54992, '0000-00-00 00:00:00', 'invoice', '110', 'Add New Invoice', 'syed', 'Inovice 110MSTOTAL:13793.66 + SSTOTAL:0= TOTAL:13793.66  (VAT)= 0 VAT_TOTAL 13793.66 '),
(54993, '0000-00-00 00:00:00', 'invoice', '110', 'Update Invoice', 'syed', 'Approved:110   '),
(54994, '0000-00-00 00:00:00', 'ship', 'KOTA RAHMAT', 'Add Ship', 'syed', 'ShipName:KOTA RAHMAT + IMO:2369632147  +  Weight:9725  + VAT:0    '),
(54995, '0000-00-00 00:00:00', 'invoice', '111', 'Add New Invoice', 'syed', 'Inovice 111MSTOTAL:14536.5 + SSTOTAL:0= TOTAL:14536.5  (VAT)= 0 VAT_TOTAL 14536.5 '),
(54996, '0000-00-00 00:00:00', 'invoice', '111', 'Update Invoice', 'syed', 'Approved:111   '),
(54997, '0000-00-00 00:00:00', 'ship', 'FLAGSHIP PRIVET', 'Add Ship', 'syed', 'ShipName:FLAGSHIP PRIVET + IMO:794697  +  Weight:42208  + VAT:0    '),
(54998, '0000-00-00 00:00:00', 'invoice', '112', 'Add New Invoice', 'syed', 'Inovice 112MSTOTAL:1500 + SSTOTAL:0= TOTAL:1500  (VAT)= 0 VAT_TOTAL 1500 '),
(54999, '0000-00-00 00:00:00', 'invoice', '112', 'Update Invoice', 'syed', 'Approved:112   '),
(55000, '0000-00-00 00:00:00', 'ship', 'GFS SAPPHIRE', 'Add Ship', 'syed', 'ShipName:GFS SAPPHIRE + IMO:44456986  +  Weight:15995  + VAT:0    '),
(55001, '0000-00-00 00:00:00', 'invoice', '113', 'Add New Invoice', 'syed', 'Inovice 113MSTOTAL:17229 + SSTOTAL:0= TOTAL:17229  (VAT)= 0 VAT_TOTAL 17229 '),
(55002, '0000-00-00 00:00:00', 'invoice', '113', 'Update Invoice', 'syed', 'Approved:113   '),
(55003, '0000-00-00 00:00:00', 'ship', 'AAL PARIS', 'Add Ship', 'syed', 'ShipName:AAL PARIS + IMO:2322269  +  Weight:22863  + VAT:0    '),
(55004, '0000-00-00 00:00:00', 'invoice', '114', 'Add New Invoice', 'syed', 'Inovice 114MSTOTAL:21302.6 + SSTOTAL:0= TOTAL:21302.6  (VAT)= 0 VAT_TOTAL 21302.6 '),
(55005, '0000-00-00 00:00:00', 'invoice', '114', 'Update Invoice', 'syed', 'Approved:114   '),
(55006, '0000-00-00 00:00:00', 'invoice', '115', 'Add New Invoice', 'syed', 'Inovice 115MSTOTAL:10282 + SSTOTAL:0= TOTAL:10282  (VAT)= 0 VAT_TOTAL 10282 '),
(55007, '0000-00-00 00:00:00', 'invoice', '115', 'Update Invoice', 'syed', 'Approved:115   '),
(55008, '0000-00-00 00:00:00', 'invoice', '116', 'Add New Invoice', 'syed', 'Inovice 116MSTOTAL:9205.6 + SSTOTAL:0= TOTAL:9205.6  (VAT)= 0 VAT_TOTAL 9205.6 '),
(55009, '0000-00-00 00:00:00', 'invoice', '116', 'Update Invoice', 'syed', 'Approved:116   '),
(55010, '0000-00-00 00:00:00', 'ship', 'RUI FU TAI', 'Add Ship', 'syed', 'ShipName:RUI FU TAI + IMO:6369630  +  Weight:27357  + VAT:0    '),
(55011, '0000-00-00 00:00:00', 'invoice', '117', 'Add New Invoice', 'syed', 'Inovice 117MSTOTAL:26101.4 + SSTOTAL:0= TOTAL:26101.4  (VAT)= 0 VAT_TOTAL 26101.4 '),
(55012, '0000-00-00 00:00:00', 'invoice', '117', 'Update Invoice', 'syed', 'Approved:117   '),
(55013, '0000-00-00 00:00:00', 'invoice', '118', 'Add New Invoice', 'Samer', 'Inovice 118MSTOTAL:17564.38 + SSTOTAL:0= TOTAL:17564.38  (VAT)= 0 VAT_TOTAL 17564.38 '),
(55014, '0000-00-00 00:00:00', 'invoice', '118', 'Update Invoice', 'Samer', 'Approved:118   '),
(55015, '0000-00-00 00:00:00', 'ship', 'SANTA INES', 'Add Ship', 'Samer', 'ShipName:SANTA INES + IMO:747475  +  Weight:86601  + VAT:0    '),
(55016, '0000-00-00 00:00:00', 'invoice', '119', 'Add New Invoice', 'Samer', 'Inovice 119MSTOTAL:33550.2 + SSTOTAL:0= TOTAL:33550.2  (VAT)= 0 VAT_TOTAL 33550.2 '),
(55017, '0000-00-00 00:00:00', 'invoice', '119', 'Update Invoice', 'Samer', 'Approved:119   '),
(55018, '0000-00-00 00:00:00', 'invoice', '120', 'Add New Invoice', 'syed', 'Inovice 120MSTOTAL:7705.4 + SSTOTAL:0= TOTAL:7705.4  (VAT)= 0 VAT_TOTAL 7705.4 '),
(55019, '0000-00-00 00:00:00', 'invoice', '120', 'Update Invoice', 'syed', 'Approved:120   '),
(55020, '0000-00-00 00:00:00', 'ship', 'MSC ORIANE', 'Add Ship', 'syed', 'ShipName:MSC ORIANE + IMO:9372482  +  Weight:66399  + VAT:0    '),
(55021, '0000-00-00 00:00:00', 'invoice', '121', 'Add New Invoice', 'syed', 'Inovice 121MSTOTAL:27309.8 + SSTOTAL:0= TOTAL:27309.8  (VAT)= 0 VAT_TOTAL 27309.8 '),
(55022, '0000-00-00 00:00:00', 'invoice', '121', 'Update Invoice', 'syed', 'Approved:121   '),
(55023, '0000-00-00 00:00:00', 'ship', 'YM MOVEMENT', 'Add Ship', 'syed', 'ShipName:YM MOVEMENT + IMO:9660011  +  Weight:71821  + VAT:0    '),
(55024, '0000-00-00 00:00:00', 'invoice', '122', 'Add New Invoice', 'syed', 'Inovice 122MSTOTAL:30594.2 + SSTOTAL:0= TOTAL:30594.2  (VAT)= 0 VAT_TOTAL 30594.2 '),
(55025, '0000-00-00 00:00:00', 'invoice', '122', 'Update Invoice', 'syed', 'Approved:122   '),
(55026, '0000-00-00 00:00:00', 'ship', 'ROYAL 1', 'Add Ship', 'syed', 'ShipName:ROYAL 1 + IMO:9109005  +  Weight:6577  + VAT:0    '),
(55027, '0000-00-00 00:00:00', 'invoice', '123', 'Add New Invoice', 'syed', 'Inovice 123MSTOTAL:1000 + SSTOTAL:0= TOTAL:1000  (VAT)= 0 VAT_TOTAL 1000 '),
(55028, '0000-00-00 00:00:00', 'invoice', '123', 'Update Invoice', 'syed', 'Approved:123   '),
(55029, '0000-00-00 00:00:00', 'ship', 'OSCAR ', 'Add Ship', 'syed', 'ShipName:OSCAR  + IMO:9545510  +  Weight:234944  + VAT:0    '),
(55030, '0000-00-00 00:00:00', 'invoice', '124', 'Add New Invoice', 'syed', 'Inovice 124MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(55031, '0000-00-00 00:00:00', 'invoice', '124', 'Update Invoice', 'syed', 'Approved:124   '),
(55032, '0000-00-00 00:00:00', 'invoice', '125', 'Add New Invoice', 'syed', 'Inovice 125MSTOTAL:19111.2 + SSTOTAL:0= TOTAL:19111.2  (VAT)= 0 VAT_TOTAL 19111.2 '),
(55033, '0000-00-00 00:00:00', 'invoice', '125', 'Update Invoice', 'syed', 'Approved:125   '),
(55034, '0000-00-00 00:00:00', 'ship', 'CS ETISALAT', 'Add Ship', 'syed', 'ShipName:CS ETISALAT + IMO:8900191  +  Weight:2221  + VAT:0    '),
(55035, '0000-00-00 00:00:00', 'invoice', '126', 'Add New Invoice', 'syed', 'Inovice 126MSTOTAL:11408.3 + SSTOTAL:0= TOTAL:11408.3  (VAT)= 0 VAT_TOTAL 11408.3 '),
(55036, '0000-00-00 00:00:00', 'invoice', '126', 'Update Invoice', 'syed', 'Approved:126   '),
(55037, '0000-00-00 00:00:00', 'ship', 'FE OMER', 'Add Ship', 'syed', 'ShipName:FE OMER + IMO:4575478  +  Weight:1533  + VAT:0    '),
(55038, '0000-00-00 00:00:00', 'invoice', '127', 'Add New Invoice', 'syed', 'Inovice 127MSTOTAL:250 + SSTOTAL:0= TOTAL:250  (VAT)= 0 VAT_TOTAL 250 '),
(55039, '0000-00-00 00:00:00', 'invoice', '127', 'Update Invoice', 'syed', 'Approved:127   '),
(55040, '0000-00-00 00:00:00', 'invoice', '128', 'Add New Invoice', 'syed', 'Inovice 128MSTOTAL:20804.8 + SSTOTAL:0= TOTAL:20804.8  (VAT)= 0 VAT_TOTAL 20804.8 '),
(55041, '0000-00-00 00:00:00', 'invoice', '128', 'Update Invoice', 'syed', 'Approved:128   '),
(55042, '0000-00-00 00:00:00', 'agent', '4', 'Update Agent', 'syed', 'AgentID:4 + AgentNameAr:شركة يوسف بن احمد كانو  +  AgentCR:8355764/8355780  + AgentNameEn:Yusuf  Bin  Ahmad  Kanoo Co LTD.    '),
(55043, '0000-00-00 00:00:00', 'agent', '4', 'Update Agent', 'syed', 'AgentID:4 + AgentNameAr:شركة يوسف بن احمد كانو  +  AgentCR:8355764/8355780  + AgentNameEn:Yusuf  Bin  Ahmad  Kanoo Co LTD.    '),
(55044, '0000-00-00 00:00:00', 'agent', '4', 'Update Agent', 'syed', 'AgentID:4 + AgentNameAr:شركة يوسف بن احمد كانو  +  AgentCR:8355764/8355780  + AgentNameEn:Yusuf  Bin  Ahmad  Kanoo Co LTD.    '),
(55045, '0000-00-00 00:00:00', 'invoice', '129', 'Add New Invoice', 'syed', 'Inovice 129MSTOTAL:13186.02 + SSTOTAL:0= TOTAL:13186.02  (VAT)= 0 VAT_TOTAL 13186.02 '),
(55046, '0000-00-00 00:00:00', 'invoice', '129', 'Update Invoice', 'syed', 'Approved:129   '),
(55047, '0000-00-00 00:00:00', 'ship', 'YM MODERATION', 'Add Ship', 'syed', 'ShipName:YM MODERATION + IMO:9664897  +  Weight:71821  + VAT:0    '),
(55048, '0000-00-00 00:00:00', 'invoice', '130', 'Add New Invoice', 'syed', 'Inovice 130MSTOTAL:28394.2 + SSTOTAL:0= TOTAL:28394.2  (VAT)= 0 VAT_TOTAL 28394.2 '),
(55049, '0000-00-00 00:00:00', 'invoice', '130', 'Update Invoice', 'syed', 'Approved:130   '),
(55050, '0000-00-00 00:00:00', 'invoice', '130', 'Update Invoice', 'syed', 'Inovice 130MSTOTAL:28394.2 + SSTOTAL:0= TOTAL:28394.2  (VAT)= 0 VAT_TOTAL 28394.2 '),
(55051, '0000-00-00 00:00:00', 'invoice', '130', 'Update Invoice', 'syed', 'Approved:130   '),
(55052, '0000-00-00 00:00:00', 'invoice', '131', 'Add New Invoice', 'syed', 'Inovice 131MSTOTAL:11956.4 + SSTOTAL:0= TOTAL:11956.4  (VAT)= 0 VAT_TOTAL 11956.4 '),
(55053, '0000-00-00 00:00:00', 'invoice', '131', 'Update Invoice', 'syed', 'Approved:131   '),
(55054, '0000-00-00 00:00:00', 'invoice', '132', 'Add New Invoice', 'syed', 'Inovice 132MSTOTAL:42538.5 + SSTOTAL:0= TOTAL:42538.5  (VAT)= 0 VAT_TOTAL 42538.5 '),
(55055, '0000-00-00 00:00:00', 'invoice', '132', 'Update Invoice', 'syed', 'Inovice 132MSTOTAL:10638.5 + SSTOTAL:0= TOTAL:10638.5  (VAT)= 0 VAT_TOTAL 10638.5 '),
(55056, '0000-00-00 00:00:00', 'invoice', '132', 'Update Invoice', 'syed', 'Approved:132   '),
(55057, '0000-00-00 00:00:00', 'agent', 'شركة مماس لخدمات الموانيء المحدودة', 'Add  Agent', 'syed', 'AgentNameAr:شركة مماس لخدمات الموانيء المحدودة + AgentCR:MAM4222= AgentNameEn:MAMAS PORT SERVICES CO. LTD    '),
(55058, '0000-00-00 00:00:00', 'ship', ' IONIC STORM', 'Add Ship', 'syed', 'ShipName: IONIC STORM + IMO:9332963  +  Weight:31263  + VAT:0    '),
(55059, '0000-00-00 00:00:00', 'invoice', '133', 'Add New Invoice', 'syed', 'Inovice 133MSTOTAL:29082.6 + SSTOTAL:0= TOTAL:29082.6  (VAT)= 0 VAT_TOTAL 29082.6 '),
(55060, '0000-00-00 00:00:00', 'invoice', '133', 'Update Invoice', 'syed', 'Approved:133   '),
(55061, '0000-00-00 00:00:00', 'ship', 'APL SAIPAN', 'Add Ship', 'syed', 'ShipName:APL SAIPAN + IMO:9239850  +  Weight:16916  + VAT:0    '),
(55062, '0000-00-00 00:00:00', 'invoice', '134', 'Add New Invoice', 'syed', 'Inovice 134MSTOTAL:23416.5 + SSTOTAL:0= TOTAL:23416.5  (VAT)= 0 VAT_TOTAL 23416.5 '),
(55063, '0000-00-00 00:00:00', 'invoice', '134', 'Update Invoice', 'syed', 'Approved:134   '),
(55064, '0000-00-00 00:00:00', 'invoice', '133', 'Update Invoice', 'syed', 'Inovice 133MSTOTAL:29082.6 + SSTOTAL:0= TOTAL:29082.6  (VAT)= 0 VAT_TOTAL 29082.6 '),
(55065, '0000-00-00 00:00:00', 'invoice', '133', 'Update Invoice', 'syed', 'Approved:133   '),
(55066, '0000-00-00 00:00:00', 'invoice', '135', 'Add New Invoice', 'syed', 'Inovice 135MSTOTAL:15534.92 + SSTOTAL:0= TOTAL:15534.92  (VAT)= 0 VAT_TOTAL 15534.92 '),
(55067, '0000-00-00 00:00:00', 'invoice', '135', 'Update Invoice', 'syed', 'Approved:135   '),
(55068, '0000-00-00 00:00:00', 'ship', '	DOCTOR O', 'Add Ship', 'syed', 'ShipName:	DOCTOR O + IMO:9181986  +  Weight:6715  + VAT:0    '),
(55069, '0000-00-00 00:00:00', 'invoice', '136', 'Add New Invoice', 'syed', 'Inovice 136MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(55070, '0000-00-00 00:00:00', 'invoice', '136', 'Update Invoice', 'syed', 'Inovice 136MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(55071, '0000-00-00 00:00:00', 'invoice', '136', 'Update Invoice', 'syed', 'Approved:136   '),
(55072, '0000-00-00 00:00:00', 'ship', 'DORO', 'Add Ship', 'syed', 'ShipName:DORO + IMO:9492397  +  Weight:33044  + VAT:0    '),
(55073, '0000-00-00 00:00:00', 'invoice', '137', 'Add New Invoice', 'syed', 'Inovice 137MSTOTAL:500 + SSTOTAL:0= TOTAL:500  (VAT)= 0 VAT_TOTAL 500 '),
(55074, '0000-00-00 00:00:00', 'invoice', '137', 'Update Invoice', 'syed', 'Approved:137   '),
(55075, '0000-00-00 00:00:00', 'ship', 'BARAKAT 1', 'Add Ship', 'syed', 'ShipName:BARAKAT 1 + IMO:4852  +  Weight:4605  + VAT:0    '),
(55076, '0000-00-00 00:00:00', 'invoice', '138', 'Add New Invoice', 'syed', 'Inovice 138MSTOTAL:17295.7 + SSTOTAL:0= TOTAL:17295.7  (VAT)= 0 VAT_TOTAL 17295.7 '),
(55077, '0000-00-00 00:00:00', 'invoice', '138', 'Update Invoice', 'syed', 'Approved:138   '),
(55078, '0000-00-00 00:00:00', 'ship', 'SANTA ROSA', 'Add Ship', 'syed', 'ShipName:SANTA ROSA + IMO:9430363  +  Weight:85676  + VAT:0    '),
(55079, '0000-00-00 00:00:00', 'invoice', '139', 'Add New Invoice', 'syed', 'Inovice 139MSTOTAL:33365.2 + SSTOTAL:0= TOTAL:33365.2  (VAT)= 0 VAT_TOTAL 33365.2 '),
(55080, '0000-00-00 00:00:00', 'invoice', '139', 'Update Invoice', 'syed', 'Approved:139   '),
(55081, '0000-00-00 00:00:00', 'invoice', '140', 'Add New Invoice', 'syed', 'Inovice 140MSTOTAL:70631.8 + SSTOTAL:0= TOTAL:70631.8  (VAT)= 0 VAT_TOTAL 70631.8 '),
(55082, '0000-00-00 00:00:00', 'invoice', '140', 'Update Invoice', 'syed', 'Inovice 140MSTOTAL:26631.8 + SSTOTAL:0= TOTAL:26631.8  (VAT)= 0 VAT_TOTAL 26631.8 '),
(55083, '0000-00-00 00:00:00', 'invoice', '140', 'Update Invoice', 'syed', 'Approved:140   '),
(55084, '0000-00-00 00:00:00', 'invoice', '138', 'Update Invoice', 'syed', 'Inovice 138MSTOTAL:17295.7 + SSTOTAL:0= TOTAL:17295.7  (VAT)= 0 VAT_TOTAL 17295.7 '),
(55085, '0000-00-00 00:00:00', 'invoice', '138', 'Update Invoice', 'syed', 'Approved:138   '),
(55086, '0000-00-00 00:00:00', 'agent', 'السنديان الماسي', 'Add  Agent', 'Gnader81', 'AgentNameAr:السنديان الماسي + AgentCR:SIND4030= AgentNameEn:ALSINDYAN ALMASY    '),
(55087, '0000-00-00 00:00:00', 'agent', 'الشركة السعودية للملاحةوالخدمات البحرية', 'Add  Agent', 'Samer', 'AgentNameAr:الشركة السعودية للملاحةوالخدمات البحرية + AgentCR:SSM= AgentNameEn:SSM. TRANS SHIP CO.    '),
(55088, '0000-00-00 00:00:00', 'ship', 'BADR', 'Add Ship', 'Samer', 'ShipName:BADR + IMO:1  +  Weight:1  + VAT:1    '),
(55089, '0000-00-00 00:00:00', 'ship', 'TARIK', 'Add Ship', 'Samer', 'ShipName:TARIK + IMO:2  +  Weight:2  + VAT:1    '),
(55090, '0000-00-00 00:00:00', 'ship', 'ALMOHAMADIAH', 'Add Ship', 'Samer', 'ShipName:ALMOHAMADIAH + IMO:3  +  Weight:3  + VAT:1    '),
(55091, '0000-00-00 00:00:00', 'ship', 'RIZQ', 'Add Ship', 'Samer', 'ShipName:RIZQ + IMO:4  +  Weight:4  + VAT:1    '),
(55092, '0000-00-00 00:00:00', 'invoice', '141', 'Add New Invoice', 'Samer', 'Inovice 141MSTOTAL:0 + SSTOTAL:2200= TOTAL:2200  (VAT)= 330 VAT_TOTAL 2530 '),
(55093, '0000-00-00 00:00:00', 'agent', '262', 'Update Agent', 'Samer', 'AgentID:262 + AgentNameAr:الشركة السعودية للملاحةوالخدمات البحرية  +  AgentCR:SSM  + AgentNameEn:SAUDI SHIPPING MARITIME SERVICES CO.    '),
(55094, '0000-00-00 00:00:00', 'invoice', '141', 'Update Invoice', 'Samer', 'Inovice 141MSTOTAL:0 + SSTOTAL:2200= TOTAL:2200  (VAT)= 330 VAT_TOTAL 2530 '),
(55095, '0000-00-00 00:00:00', 'invoice', '141', 'Update Invoice', 'Samer', 'Approved:141   '),
(55096, '0000-00-00 00:00:00', 'invoice', '141', 'Update Invoice', 'Samer', 'Inovice 141MSTOTAL:0 + SSTOTAL:1100= TOTAL:1100  (VAT)= 165 VAT_TOTAL 1265 '),
(55097, '0000-00-00 00:00:00', 'invoice', '141', 'Update Invoice', 'Samer', 'Approved:141   '),
(55098, '0000-00-00 00:00:00', 'invoice', '142', 'Add New Invoice', 'Samer', 'Inovice 142MSTOTAL:0 + SSTOTAL:1100= TOTAL:1100  (VAT)= 165 VAT_TOTAL 1265 '),
(55099, '0000-00-00 00:00:00', 'invoice', '142', 'Update Invoice', 'Samer', 'Approved:142   '),
(55100, '0000-00-00 00:00:00', 'invoice', '143', 'Add New Invoice', 'Samer', 'Inovice 143MSTOTAL:0 + SSTOTAL:1100= TOTAL:1100  (VAT)= 165 VAT_TOTAL 1265 '),
(55101, '0000-00-00 00:00:00', 'invoice', '143', 'Update Invoice', 'Samer', 'Approved:143   '),
(55102, '0000-00-00 00:00:00', 'invoice', '144', 'Add New Invoice', 'Samer', 'Inovice 144MSTOTAL:0 + SSTOTAL:2200= TOTAL:2200  (VAT)= 330 VAT_TOTAL 2530 '),
(55103, '0000-00-00 00:00:00', 'invoice', '144', 'Update Invoice', 'Samer', 'Approved:144   '),
(55104, '0000-00-00 00:00:00', 'agent', 'إمداد الغربية', 'Add  Agent', 'Samer', 'AgentNameAr:إمداد الغربية + AgentCR:EDM4030= AgentNameEn:WESTERN SUPPLY    '),
(55105, '0000-00-00 00:00:00', 'agent', '263', 'Update Agent', 'Samer', 'AgentID:263 + AgentNameAr:شركة امداد الغربية للمنتجات البترولية  +  AgentCR:EDM4030  + AgentNameEn:WESTERN SUPPLY CO. SA    '),
(55106, '0000-00-00 00:00:00', 'ship', 'ALBARQ ALSAUDI', 'Add Ship', 'Samer', 'ShipName:ALBARQ ALSAUDI + IMO:101  +  Weight:101  + VAT:0    '),
(55107, '0000-00-00 00:00:00', 'invoice', '145', 'Add New Invoice', 'Samer', 'Inovice 145MSTOTAL:0 + SSTOTAL:4400= TOTAL:4400  (VAT)= 0 VAT_TOTAL 4400 '),
(55108, '0000-00-00 00:00:00', 'invoice', '145', 'Update Invoice', 'Samer', 'Approved:145   '),
(55109, '0000-00-00 00:00:00', 'invoice', '146', 'Add New Invoice', 'Samer', 'Inovice 146MSTOTAL:0 + SSTOTAL:4400= TOTAL:4400  (VAT)= 0 VAT_TOTAL 4400 '),
(55110, '0000-00-00 00:00:00', 'invoice', '146', 'Update Invoice', 'Samer', 'Approved:146   '),
(55111, '0000-00-00 00:00:00', 'invoice', '147', 'Add New Invoice', 'Samer', 'Inovice 147MSTOTAL:0 + SSTOTAL:2200= TOTAL:2200  (VAT)= 0 VAT_TOTAL 2200 '),
(55112, '0000-00-00 00:00:00', 'invoice', '147', 'Update Invoice', 'Samer', 'Approved:147   '),
(55113, '0000-00-00 00:00:00', 'invoice', '148', 'Add New Invoice', 'Samer', 'Inovice 148MSTOTAL:0 + SSTOTAL:2200= TOTAL:2200  (VAT)= 0 VAT_TOTAL 2200 '),
(55114, '0000-00-00 00:00:00', 'invoice', '148', 'Update Invoice', 'Samer', 'Approved:148   '),
(55115, '0000-00-00 00:00:00', 'invoice', '149', 'Add New Invoice', 'Samer', 'Inovice 149MSTOTAL:0 + SSTOTAL:600= TOTAL:600  (VAT)= 0 VAT_TOTAL 600 '),
(55116, '0000-00-00 00:00:00', 'invoice', '149', 'Update Invoice', 'Samer', 'Approved:149   ');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `AgentID` int(10) NOT NULL,
  `AgentCustomerNo` varchar(10) NOT NULL,
  `AgentNameAr` varchar(100) NOT NULL,
  `AgentNameEn` varchar(100) NOT NULL,
  `AgentPhone` varchar(50) NOT NULL,
  `AgentCR` varchar(50) NOT NULL,
  `AgentAddress` text NOT NULL,
  `AgentEmail` varchar(100) NOT NULL,
  `AgentBilling` varchar(50) NOT NULL,
  `AgentURL` varchar(50) NOT NULL,
  `AgentCity` varchar(50) NOT NULL,
  `AgentCountry` varchar(50) NOT NULL,
  `AgentNotes` text NOT NULL,
  `AgentContactName` varchar(100) NOT NULL,
  `AgentContactTitle` varchar(100) NOT NULL,
  `AgentOpeningBalance` int(10) NOT NULL,
  `AgentCategory` int(11) NOT NULL DEFAULT 1,
  `AgentEx1` varchar(100) NOT NULL,
  `AgentEx2` text NOT NULL,
  `AgentEx3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`AgentID`, `AgentCustomerNo`, `AgentNameAr`, `AgentNameEn`, `AgentPhone`, `AgentCR`, `AgentAddress`, `AgentEmail`, `AgentBilling`, `AgentURL`, `AgentCity`, `AgentCountry`, `AgentNotes`, `AgentContactName`, `AgentContactTitle`, `AgentOpeningBalance`, `AgentCategory`, `AgentEx1`, `AgentEx2`, `AgentEx3`) VALUES
(1, '910004', 'الحاج عبدالله علي رضا و شركاه المحدوده', 'H. ALI  REZA', '8324133', '8337575', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR. SAFWAT(119)', '', 0, 1, '', '', 0),
(2, '910009', 'شركة الخدمات البحرية العالمية', 'GLOBE Marine Services Co.', '8352222', '8351222', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR.AMANULLAH(1323)', '', 0, 1, '', '', 0),
(3, '910007', 'توكيلات  بارويل  المحدودة', 'BARWIL  Agencies  Ltd.', '8339975/8142411', '8333393', 'POBox 293 / Postal Code 31411', 'salah.al-yousif@barwil.com', '', '', 'Dammam', 'Saudia Arabia', '', 'Mr.Abdur Razzaq(203)', 'Mr.Zaheeruddin (202)', 0, 1, '', '', 0),
(4, '910019', 'شركة يوسف بن احمد كانو', 'Yusuf  Bin  Ahmad  Kanoo Co LTD.', '8356000', '8355764/8355780', 'POBox 37 / Postal Code 31411', '', '', '', 'Dammam', 'Saudia Arabia', '', 'Mr.HamoodGrp Acct 249', 'MR.Husein Sadiq 310', 0, 1, '', '', 0),
(5, '910012', 'شركة الوطنية السعودة للنقل البحرى', 'NATIONAL SHIPPING CO.SA', '8348553', '8348655', 'POBox 3732 / Postal Code 31481', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR.MUKHTAR 400', 'Mr. Shamim  404', 0, 1, '', '', 0),
(6, '910013', 'شركة الشرق للتجارة والملاحة المحدودة', 'ORIENTAL Com. & Shipping Co. ', '8260529/8274696', '8260661', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR.ABDUL KHADER', '', 0, 1, '', '', 0),
(7, '9100185', 'الشركة البحرية السعوديه', 'SAUDI MARITIME CO.', '8252047', '8324793', '', '', '', '', 'Dammam', 'Saudia Arabia', '', ' Yusuf 212) Latif 217', 'Alfanso/Dawood (217)', 0, 1, '', '', 0),
(8, '910010', 'شركة وكا لة الخليج السعوديه', 'GULF AGENCY CO. SA', '8328762', '8323035', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR.QASIM KARORI 8323426', 'Mr.Paily', 0, 1, '', '', 0),
(9, '910016', 'شركة الملاحة البحرية العربية ', 'Shipping Corp. of Saudi Arabia ', '8265271', '8264593', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR.MAZHAR', '', 0, 1, '', '', 0),
(10, '910018', 'المشاريع المتحدة', 'UNENCO', '8255500/8250350', '8250370', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR. Mohammad', '', 0, 1, '', '0505050505', 0),
(11, '910014', 'الموسسة العربية السعودية للتصنيع والتجارة', 'SAITE', '8329102', '8331696', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR. UNNI', '', 0, 1, '', '', 0),
(233, '', 'ايمن', 'Ayman', '', '11442255', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(234, '', 'جلوب للخدمات البحرية', 'Globe marine services', '5555', '4111222', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(235, '', 'شركة سي ام ايه سي جي ام العربيه السعودية المحدودة', 'CMA CGM K.S.A Ltd.', '', '40303666945', '', '', '', '', '', '', '7051 Prince Sultan - As Salamah Dist.\r\nUnit No 1008\r\nJeddah 23525 - 2661\r\nShort Address JEMA7051\r\nKingdom of Saudi Arabia', 'Kamar', '', 0, 1, '', '', 0),
(236, '', 'شركة الخليج العربي للشحن ', 'ARABIAN GULF SHIPPING COMPANY', '0533315648', '522912', '', '', '', '', '', '', '', 'HANI', '', 0, 1, '', '', 0),
(237, '', 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '', '0047022912', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(238, '', 'شركة فيصل منصور حجى التجارية FMII', 'FAISAL M.HIGGI EST.', '', '52254', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(239, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(240, '', 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '', '4000521', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(241, '', 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '', '400045', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(242, '', 'شركة ترايدنت السعودية للشحن', 'TRAIDENT SUADI ARABIA', '', '400023', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(243, '', 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '', '0022022912', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(244, '', 'شركة بحري   ', 'NATIONAL SHIPPING AGENCIES CO.LTD', '', '252525', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(245, '', 'توكيلات باعبود للتجارة والملاحة BTS', 'BAABOUD TRADING &amp; SHIPPING,LTD.', '', 'BTS4030', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(246, '', 'شركة البحر الأبيض المتوسط للملاحة السعودية', 'MSC. Mediterranean shipping company', '', '52200', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(247, '', 'شركة البراك للتوكيلات الملاحية المحدودة', 'AL BARRAK SHIPPING AGENCIES CO.LTD', '', '400002', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(248, '', 'انشكيب لخدمات الشحن السعودية المحدودة', 'INCHCAPE SHIPPING SERVICES SAUDI CO.', '', 'INC-420025', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(249, '', 'الشركة العالمية للمحروقات المحدودة', 'INTERNATIONAL BUNKERING CO.LTD.', '', 'INT4000023', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(250, '', 'قودريتش', 'GOODRICH MARITIME PVT. LTD', '', 'GOOD42253', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(251, '', 'شركة الملاحة البحرية العربية السعودية عزيز عرب', 'THE SHIPPING CORPORATION SAUDI ARABIA LTD.', '', 'SCSA4252', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(252, '', 'الشركة الفنية الدولية', 'UTCL- UNIVERSAL TECHNICAL CO. LTD', '', 'YTC14040', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(253, '', 'وكالة أطلس', 'ATLAS SHIPPING AGENCY', '', 'ATLAS4030', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(254, '', 'شركة نما ', 'NAMA SHIPPING CO.', '', 'NMA4251', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(255, '', 'مؤسسة سليمان سعيد عبده الجابري للنقل', 'Sulaiman Saeed Abdo Al Jabri Transport Corporation', '', 'JABRI4582', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(256, '', 'المؤسسة العربية للتجارة والملاحة ', 'ARABIAN EST. FOR TRAADE AND SHIPPING, LTD.', '', 'AET.4030163749', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(257, '', 'الشركة الملاحية للوكالات البحرية', 'MARITIME COMPANY FOR MARINE AGENCIES', '', 'MRTM4200052', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(258, '', 'شركة الخماسية', 'AL KHOMASIA SHHIPING AGENCIES', '', 'KHO4581', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(259, '', 'شركة التكامل الدولية للملاحة', 'AL TAKAMUL MARITIME CO. LTD', '', '403022', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(260, '', 'شركة مماس لخدمات الموانيء المحدودة', 'MAMAS PORT SERVICES CO. LTD', '', 'MAM4222', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(261, '', 'السنديان الماسي', 'ALSINDYAN ALMASY', '', 'SIND4030', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(262, '', 'الشركة السعودية للملاحةوالخدمات البحرية', 'SAUDI SHIPPING MARITIME SERVICES CO.', '', 'SSM', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(263, '', 'شركة امداد الغربية للمنتجات البترولية', 'WESTERN SUPPLY CO. SA', '', 'EDM4030', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` varchar(100) DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `name`, `value`, `note`) VALUES
(1, 'company_name', 'ZAMIL OFFSHORE SERVICES COMPANY', NULL),
(2, 'company_bldg', 'AL-ZAMIL BLDG - AL BANDARIYAH', NULL),
(3, 'company_pobox', 'POBox 1922 ALKHOBAR 31952 , Saudi Arabia', NULL),
(4, 'company_tel', 'TEL: 03-882-2494, 03-882-2495, FAX-03-882-2032', NULL),
(5, 'company_cr', '2051003290 ', NULL),
(6, 'company_vat', '310132626800003', NULL),
(7, 'company_name_ar', 'شركة الزامل للخدمات البحرية', NULL),
(8, 'company_bldg_ar', 'بناية الزامل - حى البندرية', NULL),
(9, 'company_pobox_ar', 'ص.ب 1922, الخبر  31952 , المملكة العربية السعودية', NULL),
(10, 'company_tel_ar', 'تليفون :2494-882-013 , فاكس : 2032-882-013', NULL),
(11, 'cc1', '104.1260.41111.00000.000000.000.00000', NULL),
(12, 'cc2', '104.1810.41111.00000.000000.000.00000', NULL),
(13, 'vat', '15', NULL),
(14, 'company_logo', 'logo.png', NULL),
(15, 'company_contract', 'بناية الزامل - حى البندرية', NULL),
(16, 'company_vendor', '10005686', NULL),
(17, 'SSCount', '5', 'Special Service count not more than 10\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text DEFAULT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `value`, `type`) VALUES
(1, 'name_user1', 'اسم معد البيان', 'text'),
(2, 'job_user1', 'معد البيان', 'text'),
(3, 'name_user2', 'اسم مدير المحاسبة', 'text'),
(4, 'job_user2', 'مدير المحاسبة', 'text'),
(5, 'name_user3', 'اسم المدير المالي', 'text'),
(6, 'job_user3', 'المدير المالي', 'text'),
(7, 'name_user4', NULL, 'text'),
(8, 'job_user4', NULL, 'text'),
(9, 'name_user5', NULL, 'text'),
(10, 'job_user5', NULL, 'text'),
(11, 'IBAN', 'SA7745000000242379501001', 'text'),
(12, 'invoiceStart', 'JD-', 'text'),
(13, 'com_fax', NULL, 'text'),
(14, 'vat', '15', 'text'),
(15, 'AdressMamwani', '<span style=\"font-size:8pt\" lang=\"ar-SA\">\nالمملكة العربية السعودية \n<br>\nالهيئة العامة للموانئ\n<br>\nميناء جدة الإسلامي\n<br>\nwww.ports.gov.sa\n</span>', 'textarea '),
(16, 'AdressCompany', '<span lang=\"ar-SA\">   \nالمملكة العربية السعودية <br>\nشركة الزامل للخدمات البحرية <br>\n<span lang=\"ar-SA\">هـاتف :8696300 013</span>\n<br>\n<span lang=\"ar-SA\">فـاكس :8574202 013</span>      \n</span>', 'textarea '),
(17, 'footerAR', '\nفيما يلي تفاصيل الحساب المذكور مع  <br>   البنك السعودي الأول \n<br> \nإسم الحساب: شركة ساحل الغربية لخدمات الموانىء  \n<br> \nرقم السجل التجاري: 4030534211 \n<br>\nرقم الحساب: 242-379501-001 \n<br>\nSA7745000000242379501001 : رقم الايبان\n<br>\nإسم البنك: البنك السعودي الأول\n<br>\nSABBSAR : رمز سويفت \n<br>\nSAR : العملة\n<br> \nإسم الحساب: شركة ساحل الغربية لخدمات الموانىء  \n<br> \nرقم السجل التجاري: 4030534211 \n<br>\nرقم الحساب: 242-379501-001 \n<br>\nSA77450', 'text'),
(18, 'footerEN', 'Below are the details of the aforementioned account with <br> First Saudi Bank   \n<br>\nAccount name: West Coast Port Services Company\n<br>\nC.R number: 4030534211 \n<br>\n	Account number: 001-379501-242\n<br>\nIBAN number: SA7745000000242379501001 \n<br>\nBank name: First Saudi Bank\n<br>\nCurrency: SAR \n<br>\nSWIFT code: SABBSAR', 'text'),
(19, 'mawniLogo', 'mawani.png', 'text'),
(20, 'companyLogo', 'logo_s1.png', 'text'),
(21, 'company_vat', '311940454500003', 'text'),
(22, 'port_name', 'ميناء جدة الإسلامي', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `ID` int(5) NOT NULL,
  `name_user1` varchar(60) NOT NULL,
  `job_user1` varchar(60) NOT NULL,
  `name_user2` varchar(60) NOT NULL,
  `job_user2` varchar(60) NOT NULL,
  `name_user3` varchar(60) NOT NULL,
  `job_user3` varchar(60) NOT NULL,
  `name_user4` varchar(60) NOT NULL,
  `job_user4` varchar(60) NOT NULL,
  `name_user5` varchar(60) NOT NULL,
  `job_user5` varchar(60) NOT NULL,
  `IBAN` varchar(50) NOT NULL,
  `com_tel` varchar(50) NOT NULL,
  `com_fax` varchar(50) NOT NULL,
  `com_address` text NOT NULL,
  `vat` varchar(20) NOT NULL,
  `align` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`ID`, `name_user1`, `job_user1`, `name_user2`, `job_user2`, `name_user3`, `job_user3`, `name_user4`, `job_user4`, `name_user5`, `job_user5`, `IBAN`, `com_tel`, `com_fax`, `com_address`, `vat`, `align`) VALUES
(2, 'اسم معد البيان', 'معد البيان', 'اسم مدير المحاسبة', 'مدير المحاسبة', 'اسم المدير المالي', 'المدير المالي', 'اسم مدير تشغي الميناء', 'مدير تشغيل الميناء', '', '', 'SA123456798000132465798000', '', '', '', '15', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `InvoiceID` int(10) NOT NULL,
  `ShipID` int(10) NOT NULL,
  `ShipName` varchar(50) NOT NULL,
  `ShipWeight` int(10) NOT NULL,
  `AgentID` int(10) NOT NULL,
  `AgentNameAr` text NOT NULL,
  `AgentNameEn` text NOT NULL,
  `ServiceType` varchar(50) NOT NULL,
  `ServiceTypeName` varchar(50) NOT NULL,
  `ServiceTypeFactor` double NOT NULL,
  `InvoiceDate` datetime NOT NULL DEFAULT current_timestamp(),
  `InvoiceDateT` varchar(50) NOT NULL,
  `InvoiceDateH` varchar(50) NOT NULL,
  `ArrivalDate` datetime NOT NULL,
  `ArrivalDateT` varchar(50) NOT NULL,
  `ArrivalDateH` varchar(50) NOT NULL,
  `DepartureDate` datetime NOT NULL,
  `DepartureDateT` varchar(50) NOT NULL,
  `DepartureDateH` varchar(50) NOT NULL,
  `PeriodDays` int(10) NOT NULL,
  `AnchorageEntry` datetime DEFAULT NULL,
  `AnchorageEntryT` varchar(50) NOT NULL,
  `AnchorageEntryH` varchar(50) NOT NULL,
  `AnchorageLeave` datetime NOT NULL,
  `AnchorageLeaveT` varchar(50) NOT NULL,
  `AnchorageLeaveH` varchar(50) NOT NULL,
  `AnchorageDays` int(10) NOT NULL,
  `MSericeAnchoragePrice` double NOT NULL,
  `MovePort1` varchar(50) NOT NULL,
  `MovePort2` varchar(50) NOT NULL,
  `MovePort3` varchar(50) NOT NULL,
  `TripNo` varchar(50) NOT NULL,
  `DockingNo` varchar(50) NOT NULL,
  `RouteNo` varchar(50) NOT NULL,
  `ShiftedNo` varchar(50) NOT NULL,
  `Reason` text NOT NULL,
  `Note` text NOT NULL,
  `MSFraction1` double NOT NULL DEFAULT 1,
  `MSFraction2` double NOT NULL DEFAULT 1,
  `MSFraction3` double NOT NULL DEFAULT 1,
  `MService1` varchar(50) NOT NULL,
  `MService2` varchar(50) NOT NULL,
  `MService3` varchar(50) NOT NULL,
  `CA0` double NOT NULL,
  `CA1` double NOT NULL,
  `CA2` double NOT NULL,
  `CA3` double NOT NULL,
  `MSericeInPrice` double NOT NULL,
  `CB0` double NOT NULL,
  `CB1` double NOT NULL,
  `CB2` double NOT NULL,
  `CB3` double NOT NULL,
  `MSericeOutPrice` double NOT NULL,
  `MA` double NOT NULL,
  `MA0` double NOT NULL,
  `MA1` double NOT NULL,
  `MA2` double NOT NULL,
  `MA3` double NOT NULL,
  `MB` double NOT NULL,
  `MB0` double NOT NULL,
  `MB1` double NOT NULL,
  `MB2` double NOT NULL,
  `MB3` double NOT NULL,
  `MC` double NOT NULL,
  `MC0` double NOT NULL,
  `MC1` double NOT NULL,
  `MC2` double NOT NULL,
  `MC3` double NOT NULL,
  `MovePortPrice` double NOT NULL,
  `MSericeBathPrice` double NOT NULL,
  `MSNote1` varchar(50) NOT NULL,
  `MSNote2` varchar(50) NOT NULL,
  `MSNote3` varchar(50) NOT NULL,
  `MGPrice` double NOT NULL,
  `MSTOTAL` double NOT NULL,
  `SService1` text NOT NULL,
  `SService2` text NOT NULL,
  `SService3` text NOT NULL,
  `SService4` text NOT NULL,
  `SService5` text NOT NULL,
  `SServiceCode1` varchar(10) NOT NULL,
  `SServiceCode2` varchar(10) NOT NULL,
  `SServiceCode3` varchar(10) NOT NULL,
  `SServiceCode4` varchar(10) NOT NULL,
  `SServiceCode5` varchar(10) NOT NULL,
  `SSName1` text NOT NULL,
  `SSName2` text NOT NULL,
  `SSName3` text NOT NULL,
  `SSName4` text NOT NULL,
  `SSName5` text NOT NULL,
  `SSNote1` text NOT NULL,
  `SSNote2` text NOT NULL,
  `SSNote3` text NOT NULL,
  `SSNote4` text NOT NULL,
  `SSNote5` text NOT NULL,
  `SSUnit1` text NOT NULL,
  `SSUnit2` text NOT NULL,
  `SSUnit3` text NOT NULL,
  `SSUnit4` text NOT NULL,
  `SSUnit5` text NOT NULL,
  `SSQut1` text NOT NULL,
  `SSQut2` text NOT NULL,
  `SSQut3` text NOT NULL,
  `SSQut4` text NOT NULL,
  `SSQut5` text NOT NULL,
  `SSUPrice1` text NOT NULL,
  `SSUPrice2` text NOT NULL,
  `SSUPrice3` text NOT NULL,
  `SSUPrice4` text NOT NULL,
  `SSUPrice5` text NOT NULL,
  `SSPrice1` text NOT NULL,
  `SSPrice2` text NOT NULL,
  `SSPrice3` text NOT NULL,
  `SSPrice4` text NOT NULL,
  `SSPrice5` text NOT NULL,
  `SSTOTAL` double NOT NULL,
  `TOTAL` double NOT NULL,
  `is_VAT` int(4) NOT NULL DEFAULT 0,
  `VAT` double NOT NULL DEFAULT 0,
  `VAT_TOTAL` double NOT NULL DEFAULT 0,
  `Status` int(10) NOT NULL DEFAULT 0,
  `OracleCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`InvoiceID`, `ShipID`, `ShipName`, `ShipWeight`, `AgentID`, `AgentNameAr`, `AgentNameEn`, `ServiceType`, `ServiceTypeName`, `ServiceTypeFactor`, `InvoiceDate`, `InvoiceDateT`, `InvoiceDateH`, `ArrivalDate`, `ArrivalDateT`, `ArrivalDateH`, `DepartureDate`, `DepartureDateT`, `DepartureDateH`, `PeriodDays`, `AnchorageEntry`, `AnchorageEntryT`, `AnchorageEntryH`, `AnchorageLeave`, `AnchorageLeaveT`, `AnchorageLeaveH`, `AnchorageDays`, `MSericeAnchoragePrice`, `MovePort1`, `MovePort2`, `MovePort3`, `TripNo`, `DockingNo`, `RouteNo`, `ShiftedNo`, `Reason`, `Note`, `MSFraction1`, `MSFraction2`, `MSFraction3`, `MService1`, `MService2`, `MService3`, `CA0`, `CA1`, `CA2`, `CA3`, `MSericeInPrice`, `CB0`, `CB1`, `CB2`, `CB3`, `MSericeOutPrice`, `MA`, `MA0`, `MA1`, `MA2`, `MA3`, `MB`, `MB0`, `MB1`, `MB2`, `MB3`, `MC`, `MC0`, `MC1`, `MC2`, `MC3`, `MovePortPrice`, `MSericeBathPrice`, `MSNote1`, `MSNote2`, `MSNote3`, `MGPrice`, `MSTOTAL`, `SService1`, `SService2`, `SService3`, `SService4`, `SService5`, `SServiceCode1`, `SServiceCode2`, `SServiceCode3`, `SServiceCode4`, `SServiceCode5`, `SSName1`, `SSName2`, `SSName3`, `SSName4`, `SSName5`, `SSNote1`, `SSNote2`, `SSNote3`, `SSNote4`, `SSNote5`, `SSUnit1`, `SSUnit2`, `SSUnit3`, `SSUnit4`, `SSUnit5`, `SSQut1`, `SSQut2`, `SSQut3`, `SSQut4`, `SSQut5`, `SSUPrice1`, `SSUPrice2`, `SSUPrice3`, `SSUPrice4`, `SSUPrice5`, `SSPrice1`, `SSPrice2`, `SSPrice3`, `SSPrice4`, `SSPrice5`, `SSTOTAL`, `TOTAL`, `is_VAT`, `VAT`, `VAT_TOTAL`, `Status`, `OracleCode`) VALUES
(1, 15032, 'TOPAZ LENA', 3183, 236, 'شركة الخليج العربي للشحن ', 'ARABIAN GULF SHIPPING COMPANY', '1', 'عادية', 1, '2024-02-20 11:05:00', '11:05', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-19 01:29:00', '01:29', '1445/08/09', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '6', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 31.11, 0, 5406.11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 5406.11, 5406.11, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 5406.11, 1, 0, 5406.11, 800, ''),
(2, 15033, 'AMMAN', 5453, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-02-20 11:26:00', '11:26', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-19 00:38:00', '00:38', '1445/08/09', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '17', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 417.01, 0, 5792.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 5792.01, 5792.01, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 5792.01, 1, 0, 5792.01, 800, ''),
(3, 15034, 'DA HONG XIA', 20454, 238, 'شركة فيصل منصور حجى التجارية FMII', 'FAISAL M.HIGGI EST.', '1', 'عادية', 1, '2024-02-20 11:46:00', '11:46', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-19 02:29:00', '02:29', '1445/08/09', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 2040, 545.4, 7960.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 7960.4, 7960.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 7960.4, 1, 0, 7960.4, 800, ''),
(4, 15035, 'WADI DUKA', 33998, 1, 'الحاج عبدالله علي رضا و شركاه المحدوده', 'H. ALI  REZA', '1', 'عادية', 1, '2024-02-20 11:55:00', '11:55', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-19 03:35:00', '03:35', '1445/08/09', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 2040, 1899.8, 9314.8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 9314.8, 9314.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 9314.8, 1, 0, 9314.8, 800, ''),
(5, 15036, 'LADY MARIA', 998, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-20 12:13:00', '12:13', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-19 08:10:00', '08:10', '1445/08/09', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '37', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 572.7, 0, 0, 3072.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 3072.7, 3072.7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 3072.7, 1, 0, 3072.7, 800, ''),
(6, 15037, 'MAYSA', 1372, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-20 12:23:00', '12:23', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-19 08:19:00', '08:19', '1445/08/09', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '37', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 1002.8, 0, 0, 3502.8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 3502.8, 3502.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 3502.8, 1, 0, 3502.8, 800, ''),
(7, 15038, 'PRINCESS HIYAM', 1945, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-02-20 12:36:00', '12:36', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-20 10:38:00', '10:38', '1445/08/10', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '35', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 1661.75, 0, 0, 4161.75, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 4161.75, 4161.75, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 4161.75, 1, 0, 4161.75, 800, ''),
(8, 15039, 'TB ANPING', 25836, 242, 'شركة ترايدنت السعودية للشحن', 'TRAIDENT SUADI ARABIA', '1', 'عادية', 1, '2024-02-20 13:50:00', '13:50', '1445/08/10', '2024-02-19 03:22:00', '03:22', '1445/08/09', '2024-02-19 14:40:00', '14:40', '1445/08/09', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', 'R1', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1083.6, 8498.6, 2500, 2875, 2040, 1083.6, 8498.6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 16997.2, 19197.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 19197.2, 1, 0, 19197.2, 800, ''),
(9, 15040, 'VICTORY LIGHT', 11951, 4, 'شركة يوسف بن احمد كانو', 'Yusuf  Bin  Ahmad  KANOO', '1', 'عادية', 1, '2024-02-20 14:02:00', '14:02', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-19 12:13:00', '12:13', '1445/08/09', 0, '2024-02-19 12:13:00', '12:13', '1445/08/09', '2024-02-19 13:39:00', '13:39', '1445/08/09', 1, 500, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(10, 15032, 'TOPAZ LENA', 3183, 236, 'شركة الخليج العربي للشحن ', 'ARABIAN GULF SHIPPING COMPANY', '1', 'عادية', 1, '2024-02-20 14:27:00', '14:27', '1445/08/10', '2024-02-19 11:14:00', '11:14', '1445/08/09', '2024-02-19 16:10:00', '16:10', '1445/08/09', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '53', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 31.11, 0, 5406.11, 2500, 2875, 31.11, 0, 5406.11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 10812.22, 12312.22, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 12312.22, 1, 0, 12312.22, 800, ''),
(11, 15041, 'SAFEEN PEARL', 9999, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-20 14:39:00', '14:39', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-19 19:25:00', '19:25', '1445/08/09', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '9', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 1189.83, 0, 6564.83, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 6564.83, 6564.83, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 6564.83, 1, 0, 6564.83, 800, ''),
(12, 15042, 'BAHRI HOFUF', 50714, 244, 'شركة بحري   ', 'NATIONAL SHIPPING AGENCIES CO.LTD', '1', 'عادية', 1, '2024-02-20 15:01:00', '15:01', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-19 19:25:00', '19:25', '1445/08/09', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '22', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 2040, 3571.4, 10986.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 10986.4, 10986.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 10986.4, 1, 0, 10986.4, 800, ''),
(13, 15043, 'HAJH GHSN J', 2438, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-02-20 15:13:00', '15:13', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-19 22:50:00', '22:50', '1445/08/09', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '34', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2228.7, 0, 0, 4728.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 4728.7, 4728.7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 4728.7, 1, 0, 4728.7, 800, ''),
(14, 15044, 'ADDISON', 27779, 236, 'شركة الخليج العربي للشحن ', 'ARABIAN GULF SHIPPING COMPANY', '1', 'عادية', 1, '2024-02-20 15:25:00', '15:25', '1445/08/10', '2024-02-19 11:15:00', '11:15', '1445/08/09', '2024-02-19 23:50:00', '23:50', '1445/08/09', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '52', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1277.9, 8692.9, 2500, 2875, 2040, 1277.9, 8692.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 17385.8, 19585.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 19585.8, 1, 0, 19585.8, 800, ''),
(15, 15045, 'SINAA', 9807, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-02-20 15:46:00', '15:46', '1445/08/10', '2024-02-19 17:30:00', '17:30', '1445/08/09', '2024-02-20 00:25:00', '00:25', '1445/08/10', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '17', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 1157.19, 0, 6532.19, 2500, 2875, 1157.19, 0, 6532.19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 13064.38, 14564.38, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14564.38, 1, 0, 14564.38, 800, ''),
(16, 15046, 'OMEGA STAR', 3578, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-02-20 00:00:00', '00:00', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-20 00:13:00', '00:13', '1445/08/10', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '34', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 98.26, 0, 5473.26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 5473.26, 5473.26, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 5473.26, 1, 0, 5473.26, 800, ''),
(17, 15047, 'JOSCO JIN ZOU', 33188, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-22 07:18:00', '07:18', '1445/08/12', '2024-02-19 08:00:00', '08:00', '1445/08/09', '2024-02-20 02:12:00', '02:12', '1445/08/10', 1, '2024-02-19 08:00:00', '08:00', '1445/08/09', '2024-02-20 02:12:00', '02:12', '1445/08/10', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(18, 15048, 'GFS JUNO', 25535, 234, 'جلوب للخدمات البحرية', 'Globe marine services', '1', 'عادية', 1, '2024-02-20 00:00:00', '00:00', '1445/08/10', '2024-02-19 19:15:00', '19:15', '1445/08/09', '2024-02-20 05:02:00', '05:02', '1445/08/10', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', 'R1', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1053.5, 8468.5, 2500, 2875, 2040, 1053.5, 8468.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 16937, 19137, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 19137, 1, 0, 19137, 800, ''),
(19, 15050, 'WADI AL RAYAN', 34744, 235, 'شركة سي ام ايه سي جي ام العربيه السعودية المحدودة', 'CMA CGM K.S.A Ltd.', '1', 'عادية', 1, '2024-02-20 07:27:00', '07:27', '1445/08/10', '2024-02-19 13:50:00', '13:50', '1445/08/09', '2024-02-20 09:45:00', '09:45', '1445/08/10', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1974.4, 9389.4, 2500, 2875, 2040, 1974.4, 9389.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 18778.8, 20978.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 20978.8, 1, 0, 20978.8, 800, ''),
(20, 15049, 'GFS PERFECT', 36483, 234, 'جلوب للخدمات البحرية', 'Globe marine services', '1', 'عادية', 1, '2024-02-20 00:00:00', '00:00', '1445/08/10', '2024-02-19 07:02:00', '07:02', '1445/08/09', '2024-02-20 05:13:00', '05:13', '1445/08/10', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '1', '', '', '', 'R2', '', 'R2.53', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 2148.3, 9563.3, 2500, 2875, 2040, 2148.3, 9563.3, 4781.65, 1250, 1437.5, 1020, 1074.15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4781.65, 2200, '', '', '', 23908.25, 26108.25, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 26108.25, 1, 0, 26108.25, 800, ''),
(21, 15051, 'FRONT SIRIUS', 62849, 238, 'شركة فيصل منصور حجى التجارية FMII', 'FAISAL M.HIGGI EST.', '1', 'عادية', 1, '2024-02-20 09:55:00', '09:55', '1445/08/10', '2024-02-20 11:50:00', '11:50', '1445/08/10', '2024-02-20 12:30:00', '12:30', '1445/08/10', 1, '2024-02-20 11:50:00', '11:50', '1445/08/10', '2024-02-20 12:30:00', '12:30', '1445/08/10', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 4784.9, 12199.9, 2500, 2875, 2040, 4784.9, 12199.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 24399.8, 27099.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 27099.8, 1, 0, 27099.8, 800, ''),
(22, 15051, 'FRONT SIRIUS', 62849, 238, 'شركة فيصل منصور حجى التجارية FMII', 'FAISAL M.HIGGI EST.', '1', 'عادية', 1, '2024-02-20 14:02:00', '14:02', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-22 08:17:41', '08:17', '1445/08/12', 0, '2024-02-20 11:50:00', '11:50', '1445/08/10', '2024-02-20 12:30:00', '12:30', '1445/08/10', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(23, 15052, 'MAO GANG SHANG HAI', 17121, 242, 'شركة ترايدنت السعودية للشحن', 'TRAIDENT SUADI ARABIA', '1', 'عادية', 1, '2024-02-20 13:23:00', '13:23', '1445/08/10', '2024-02-19 22:10:00', '22:10', '1445/08/09', '2024-02-20 14:53:00', '14:53', '1445/08/10', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '6', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 212.1, 7627.1, 2500, 2875, 2040, 212.1, 7627.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 15254.2, 17454.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 17454.2, 1, 0, 17454.2, 800, ''),
(24, 15053, 'DORRAT JEDDAH', 6712, 245, 'توكيلات باعبود للتجارة والملاحة BTS', 'BAABOUD TRADING &amp; SHIPPING,LTD.', '1', 'عادية', 1, '2024-02-20 10:31:00', '10:31', '1445/08/10', '0000-00-00 00:00:00', '01:00', '', '2024-02-20 15:37:00', '15:37', '1445/08/10', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '20', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 631.04, 0, 6006.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 6006.04, 6006.04, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 6006.04, 1, 0, 6006.04, 800, ''),
(25, 15054, 'MSC MALIN', 21586, 246, 'شركة البحر الأبيض المتوسط للملاحة السعودية', 'MSC. Mediterranean shipping company', '1', 'عادية', 1, '2024-02-20 10:44:00', '10:44', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-22 08:44:24', '08:44', '1445/08/12', 0, '2024-02-20 06:36:00', '06:36', '1445/08/10', '2024-02-20 16:00:00', '16:00', '1445/08/10', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(26, 15055, 'PING AN', 59172, 236, 'شركة الخليج العربي للشحن ', 'ARABIAN GULF SHIPPING COMPANY', '1', 'عادية', 1, '2024-02-20 14:50:00', '14:50', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-22 08:51:32', '08:51', '1445/08/12', 0, '2024-02-19 20:00:00', '20:00', '1445/08/09', '2024-02-20 17:10:00', '17:10', '1445/08/10', 1, 500, '', '', '', '', 'F2', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(27, 15056, 'MARIONA ', 2181, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-02-20 12:54:00', '12:54', '1445/08/10', '2024-02-19 12:29:00', '12:29', '1445/08/09', '2024-02-20 19:30:00', '19:30', '1445/08/10', 2, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '1', '', '', '', '34', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1933.15, 0, 0, 4433.15, 2500, 1933.15, 0, 0, 4433.15, 2216.575, 1250, 966.575, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2216.575, 2200, '', '', '', 11082.875, 15482.875, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 15482.875, 1, 0, 15482.875, 800, ''),
(28, 15057, 'LILY J', 6415, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-20 13:01:00', '13:01', '1445/08/10', '2024-02-19 12:08:00', '12:08', '1445/08/09', '2024-02-20 20:40:00', '20:40', '1445/08/10', 2, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '37', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 580.55, 0, 5955.55, 2500, 2875, 580.55, 0, 5955.55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3000, '', '', '', 11911.1, 14911.1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14911.1, 1, 0, 14911.1, 800, ''),
(29, 15058, 'MEZARA', 42538, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-20 16:05:00', '16:05', '1445/08/10', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-22 09:06:32', '09:06', '1445/08/12', 0, '2024-02-20 20:45:00', '20:45', '1445/08/10', '2024-02-20 21:45:00', '21:45', '1445/08/10', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(30, 15033, 'AMMAN', 5453, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-02-25 10:16:00', '10:16', '1445/08/15', '2024-02-20 14:40:00', '14:40', '1445/08/10', '2024-02-21 00:10:00', '00:10', '1445/08/11', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '18', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 417.01, 0, 5792.01, 2500, 2875, 417.01, 0, 5792.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 11584.02, 13084.02, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 13084.02, 1, 0, 13084.02, 800, ''),
(31, 15059, 'SIDRA AHLAM', 15095, 1, 'الحاج عبدالله علي رضا و شركاه المحدوده', 'H. ALI  REZA', '1', 'عادية', 1, '2024-02-25 10:42:00', '10:42', '1445/08/15', '2024-02-20 11:00:00', '11:00', '1445/08/10', '2024-02-21 02:47:00', '02:47', '1445/08/11', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', 'R2', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 9.5, 7424.5, 2500, 2875, 2040, 9.5, 7424.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 14849, 17049, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 17049, 1, 0, 17049, 800, ''),
(32, 15060, 'X-PRESS ALTAIR', 34754, 247, 'شركة البراك للتوكيلات الملاحية المحدودة', 'AL BARRAK SHIPPING AGENCIES CO.LTD', '1', 'عادية', 1, '2024-02-25 10:49:00', '10:49', '1445/08/15', '2024-02-20 15:03:00', '15:03', '1445/08/10', '2024-02-21 02:00:00', '02:00', '1445/08/11', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1975.4, 9390.4, 2500, 2875, 2040, 1975.4, 9390.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 18780.8, 20980.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 20980.8, 1, 0, 20980.8, 800, ''),
(33, 15061, 'AL AHMED', 3838, 245, 'توكيلات باعبود للتجارة والملاحة BTS', 'BAABOUD TRADING &amp; SHIPPING,LTD.', '1', 'عادية', 1, '2024-02-25 10:53:00', '10:53', '1445/08/15', '2024-02-20 12:35:00', '12:35', '1445/08/10', '2024-02-21 06:21:00', '06:21', '1445/08/11', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '7', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 142.46, 0, 5517.46, 2500, 2875, 142.46, 0, 5517.46, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 11034.92, 12534.92, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 12534.92, 1, 0, 12534.92, 800, ''),
(34, 15062, 'PORTSMOUTH', 25406, 248, 'انشكيب لخدمات الشحن السعودية المحدودة', 'INCHCAPE SHIPPING SERVICES SAUDI CO.', '1', 'عادية', 1, '2024-02-25 11:02:00', '11:02', '1445/08/15', '2024-02-20 10:25:00', '10:25', '1445/08/10', '2024-02-21 06:52:00', '06:52', '1445/08/11', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', 'R1', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1040.6, 8455.6, 2500, 2875, 2040, 1040.6, 8455.6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 16911.2, 19111.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 19111.2, 1, 0, 19111.2, 800, ''),
(35, 15063, 'AS PROUDA', 42263, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-25 11:06:00', '11:06', '1445/08/15', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-25 09:07:45', '09:07', '1445/08/15', 0, '2024-02-20 18:20:00', '18:20', '1445/08/10', '2024-02-21 07:40:00', '07:40', '1445/08/11', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(36, 15064, 'CROSS OCEAN', 57567, 249, 'الشركة العالمية للمحروقات المحدودة', 'INTERNATIONAL BUNKERING CO.LTD.', '1', 'عادية', 1, '2024-02-25 11:12:00', '11:12', '1445/08/15', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-25 09:13:16', '09:13', '1445/08/15', 0, '2024-02-21 00:42:00', '00:42', '1445/08/11', '2024-02-21 10:31:00', '10:31', '1445/08/11', 1, 500, '', '', '', '', 'F', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(37, 15065, 'A DAISEN', 18326, 242, 'شركة ترايدنت السعودية للشحن', 'TRAIDENT SUADI ARABIA', '1', 'عادية', 1, '2024-02-25 11:17:00', '11:17', '1445/08/15', '2024-02-20 20:50:00', '20:50', '1445/08/10', '2024-02-21 10:48:00', '10:48', '1445/08/11', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 332.6, 7747.6, 2500, 2875, 2040, 332.6, 7747.6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 15495.2, 17695.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 17695.2, 1, 0, 17695.2, 800, ''),
(38, 15066, 'ELONA 11', 18848, 250, 'قودريتش', 'GOODRICH MARITIME PVT. LTD', '1', 'عادية', 1, '2024-02-25 11:26:00', '11:26', '1445/08/15', '2024-02-21 03:27:00', '03:27', '1445/08/11', '2024-02-21 12:53:00', '12:53', '1445/08/11', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '6', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 384.8, 7799.8, 2500, 2875, 2040, 384.8, 7799.8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 15599.6, 17799.6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 17799.6, 1, 0, 17799.6, 800, ''),
(39, 15067, 'ZHONG YANG MEN', 34859, 251, 'شركة الملاحة البحرية العربية السعودية عزيز عرب', 'THE SHIPPING CORPORATION SAUDI ARABIA LTD.', '1', 'عادية', 1, '2024-02-25 11:32:00', '11:32', '1445/08/15', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-21 14:26:00', '14:26', '1445/08/11', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '1', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 2040, 1985.9, 9400.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 9400.9, 9400.9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 9400.9, 1, 0, 9400.9, 800, ''),
(40, 15068, 'YM MUTUALITY', 76787, 252, 'الشركة الفنية الدولية', 'UTCL- UNIVERSAL TECHNICAL CO. LTD', '1', 'عادية', 1, '2024-02-25 11:42:00', '11:42', '1445/08/15', '2024-02-20 22:20:00', '22:20', '1445/08/10', '2024-02-21 13:55:00', '13:55', '1445/08/11', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '53', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 6178.7, 13593.7, 2500, 2875, 2040, 6178.7, 13593.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 27187.4, 29387.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 29387.4, 1, 0, 29387.4, 800, ''),
(41, 15069, 'THESSUS', 60208, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-25 11:45:00', '11:45', '1445/08/15', '2024-02-21 01:48:00', '01:48', '1445/08/11', '2024-02-21 16:00:00', '16:00', '1445/08/11', 1, '2024-02-21 01:48:00', '01:48', '1445/08/11', '2024-02-21 16:00:00', '16:00', '1445/08/11', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(42, 15070, 'MEKELE', 21024, 251, 'شركة الملاحة البحرية العربية السعودية عزيز عرب', 'THE SHIPPING CORPORATION SAUDI ARABIA LTD.', '1', 'عادية', 1, '2024-02-25 11:47:00', '11:47', '1445/08/15', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-21 16:34:00', '16:34', '1445/08/11', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '21', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 2040, 602.4, 8017.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 8017.4, 8017.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 8017.4, 1, 0, 8017.4, 800, ''),
(43, 15071, '5PEARLS', 1198, 253, 'وكالة أطلس', 'ATLAS SHIPPING AGENCY', '1', 'عادية', 1, '2024-02-25 11:52:00', '11:52', '1445/08/15', '2024-02-16 00:00:00', '00:00', '1445/08/06', '2024-02-21 22:44:00', '22:44', '1445/08/11', 6, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R4', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 802.7, 0, 0, 3302.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 3302.7, 3302.7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 3302.7, 1, 0, 3302.7, 800, ''),
(44, 15073, 'VOS HESTIA', 1678, 234, 'جلوب للخدمات البحرية', 'Globe marine services', '1', 'عادية', 1, '2024-02-25 11:55:00', '11:55', '1445/08/15', '2024-02-19 12:00:00', '12:00', '1445/08/09', '2024-02-21 23:10:00', '23:10', '1445/08/11', 3, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '11', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1354.7, 0, 0, 3854.7, 2500, 1354.7, 0, 0, 3854.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3300, '', '', '', 7709.4, 11009.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 11009.4, 1, 0, 11009.4, 800, ''),
(45, 15045, 'SINAA', 9807, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-02-25 12:03:00', '12:03', '1445/08/15', '2024-02-21 15:45:00', '15:45', '1445/08/11', '2024-02-22 02:07:00', '02:07', '1445/08/12', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '18', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 1157.19, 0, 6532.19, 2500, 2875, 1157.19, 0, 6532.19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 13064.38, 14564.38, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14564.38, 1, 0, 14564.38, 800, ''),
(46, 15075, 'AZIZ EXPRESS', 22874, 254, 'شركة نما ', 'NAMA SHIPPING CO.', '1', 'عادية', 1, '2024-02-25 12:12:00', '12:12', '1445/08/15', '2024-02-20 20:07:00', '20:07', '1445/08/10', '2024-02-22 02:18:00', '02:18', '1445/08/12', 2, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '15', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 787.4, 8202.4, 2500, 2875, 2040, 787.4, 8202.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 16404.8, 20804.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 20804.8, 1, 0, 20804.8, 800, ''),
(47, 15076, 'ALMABROUKA 10', 1443, 255, 'مؤسسة سليمان سعيد عبده الجابري للنقل', 'Sulaiman Saeed Abdo Al Jabri Transport Corporation', '1', 'عادية', 1, '2024-02-25 12:24:00', '12:24', '1445/08/15', '2024-02-21 02:19:00', '02:19', '1445/08/11', '2024-02-22 05:35:00', '05:35', '1445/08/12', 2, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '35', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1084.45, 0, 0, 3584.45, 2500, 1084.45, 0, 0, 3584.45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 7168.9, 9368.9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 9368.9, 1, 0, 9368.9, 800, ''),
(48, 15077, 'CL DJIBOUTI', 33044, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-25 12:34:00', '12:34', '1445/08/15', '0000-00-00 00:00:00', '01:00', '', '2024-02-22 09:03:00', '09:03', '1445/08/12', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '38', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 2040, 1804.4, 9219.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 9219.4, 9219.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 9219.4, 1, 0, 9219.4, 800, ''),
(49, 15078, 'CMA CGM GANGES', 94730, 235, 'شركة سي ام ايه سي جي ام العربيه السعودية المحدودة', 'CMA CGM K.S.A Ltd.', '1', 'عادية', 1, '2024-02-25 12:40:00', '12:40', '1445/08/15', '2024-02-21 08:40:00', '08:40', '1445/08/11', '2024-02-22 10:25:00', '10:25', '1445/08/12', 2, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', 'R2', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 7973, 15388, 2500, 2875, 2040, 7973, 15388, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 30776, 35176, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 35176, 1, 0, 35176, 800, ''),
(50, 15079, 'ABDELRAHMAN K', 1848, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-25 12:45:00', '12:45', '1445/08/15', '0000-00-00 00:00:00', '01:00', '', '2024-02-22 10:58:00', '10:58', '1445/08/12', 1, '2024-02-20 03:05:00', '03:05', '1445/08/10', '2024-02-22 10:58:00', '10:58', '1445/08/12', 3, 750, '', '', '', '', 'D1', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 1550.2, 0, 0, 4050.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 4050.2, 4800.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 4800.2, 1, 0, 4800.2, 800, ''),
(51, 15080, 'ANEMOS', 19701, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-25 13:06:00', '13:06', '1445/08/15', '2024-02-22 04:50:00', '04:50', '1445/08/12', '2024-02-22 14:04:00', '14:04', '1445/08/12', 1, '2024-02-22 04:50:00', '04:50', '1445/08/12', '2024-02-22 14:04:00', '14:04', '1445/08/12', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(52, 15081, 'LADY RASHA', 1777, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-02-25 13:13:00', '13:13', '1445/08/15', '2024-02-21 03:46:00', '03:46', '1445/08/11', '2024-02-22 13:36:00', '13:36', '1445/08/12', 2, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '37', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1468.55, 0, 0, 3968.55, 2500, 1468.55, 0, 0, 3968.55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 7937.1, 10137.1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 10137.1, 1, 0, 10137.1, 800, ''),
(53, 15082, 'CATALONIA', 24960, 247, 'شركة البراك للتوكيلات الملاحية المحدودة', 'AL BARRAK SHIPPING AGENCIES CO.LTD', '1', 'عادية', 1, '2024-02-25 13:22:00', '13:22', '1445/08/15', '2024-02-21 14:03:00', '14:03', '1445/08/11', '2024-02-22 15:12:00', '15:12', '1445/08/12', 2, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '1', '', '', '', '52', '', '6', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 996, 8411, 2500, 2875, 2040, 996, 8411, 4205.5, 1250, 1437.5, 1020, 498, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4205.5, 4400, '', '', '', 21027.5, 25427.5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 25427.5, 1, 0, 25427.5, 800, ''),
(54, 15083, 'TRANSMAR LEGACY', 22801, 256, 'المؤسسة العربية للتجارة والملاحة ', 'ARABIAN EST. FOR TRAADE AND SHIPPING, LTD.', '1', 'عادية', 1, '2024-02-25 13:33:00', '13:33', '1445/08/15', '2024-02-21 12:34:00', '12:34', '1445/08/11', '2024-02-22 15:32:00', '15:32', '1445/08/12', 2, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 780.1, 8195.1, 2500, 2875, 2040, 780.1, 8195.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 16390.2, 20790.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 20790.2, 1, 0, 20790.2, 800, ''),
(55, 15084, 'AL MABROUUKA 11', 1840, 255, 'مؤسسة سليمان سعيد عبده الجابري للنقل', 'Sulaiman Saeed Abdo Al Jabri Transport Corporation', '1', 'عادية', 1, '2024-02-25 13:38:00', '13:38', '1445/08/15', '2024-02-21 03:55:00', '03:55', '1445/08/11', '2024-02-22 16:40:00', '16:40', '1445/08/12', 2, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '34', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1541, 0, 0, 4041, 2500, 1541, 0, 0, 4041, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 8082, 10282, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 10282, 1, 0, 10282, 800, ''),
(56, 15085, 'VAN KNIGHT', 32962, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-25 13:43:00', '13:43', '1445/08/15', '2024-02-21 21:28:00', '21:28', '1445/08/11', '2024-02-22 17:00:00', '17:00', '1445/08/12', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '1', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1796.2, 9211.2, 2500, 2875, 2040, 1796.2, 9211.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 18422.4, 20622.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 20622.4, 1, 0, 20622.4, 800, ''),
(57, 15086, 'LEO', 27104, 234, 'جلوب للخدمات البحرية', 'Globe marine services', '1', 'عادية', 1, '2024-02-25 13:55:00', '13:55', '1445/08/15', '2024-02-21 19:15:00', '19:15', '1445/08/11', '2024-02-22 20:46:00', '20:46', '1445/08/12', 2, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '1', '', '', '', 'R1', '', '52', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1210.4, 8625.4, 2500, 2875, 2040, 1210.4, 8625.4, 4312.7, 1250, 1437.5, 1020, 605.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4312.7, 4400, '', '', '', 21563.5, 25963.5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 25963.5, 1, 0, 25963.5, 800, ''),
(58, 15087, 'AMANAH', 19009, 254, 'شركة نما ', 'NAMA SHIPPING CO.', '1', 'عادية', 1, '2024-02-25 14:03:00', '14:03', '1445/08/15', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-22 23:54:00', '23:54', '1445/08/12', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '17', '', '', '', '', 1, 1, 1, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 2040, 400.9, 7815.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 7815.9, 7815.9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 7815.9, 1, 0, 7815.9, 800, ''),
(59, 15088, 'JERSEY', 2350, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-26 09:22:00', '09:22', '1445/08/16', '2024-02-21 05:05:00', '05:05', '1445/08/11', '2024-02-23 01:40:00', '01:40', '1445/08/13', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '1', '', '', '', '35', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2127.5, 0, 0, 4627.5, 2500, 2127.5, 0, 0, 4627.5, 2313.75, 1250, 1063.75, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2313.75, 2200, '', '', '', 11568.75, 13768.75, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 13768.75, 1, 0, 13768.75, 800, ''),
(60, 15033, 'AMMAN', 5753, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-02-26 09:27:00', '09:27', '1445/08/16', '2024-02-22 13:34:00', '13:34', '1445/08/12', '2024-02-23 01:40:00', '01:40', '1445/08/13', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '18', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 468.01, 0, 5843.01, 2500, 2875, 468.01, 0, 5843.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 11686.02, 13186.02, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 13186.02, 1, 0, 13186.02, 800, ''),
(61, 15089, 'JAWAN', 11947, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-26 09:38:00', '09:38', '1445/08/16', '2024-02-22 11:44:00', '11:44', '1445/08/12', '2024-02-23 01:56:00', '01:56', '1445/08/13', 1, '2024-02-22 11:44:00', '11:44', '1445/08/12', '2024-02-23 01:56:00', '01:56', '1445/08/13', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(62, 15090, 'BC ZOE', 21168, 253, 'وكالة أطلس', 'ATLAS SHIPPING AGENCY', '1', 'عادية', 1, '2024-02-26 09:51:00', '09:51', '1445/08/16', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-26 07:54:25', '07:54', '1445/08/16', 0, '2024-02-22 17:47:00', '17:47', '1445/08/12', '2024-02-23 07:20:00', '07:20', '1445/08/13', 1, 500, '', '', '', '', 'F2', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(63, 15091, 'SAFEEN PRIZE', 26412, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-26 10:02:00', '10:02', '1445/08/16', '2024-02-22 12:31:00', '12:31', '1445/08/12', '2024-02-23 09:23:00', '09:23', '1445/08/13', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', 'R2', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1141.2, 8556.2, 2500, 2875, 2040, 1141.2, 8556.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 17112.4, 19312.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 19312.4, 1, 0, 19312.4, 800, ''),
(64, 15092, 'BASHAR ONTRANSPORT', 18341, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-26 10:09:00', '10:09', '1445/08/16', '0000-00-00 00:00:00', '01:00', '1389/10/22', '2024-02-23 10:40:00', '10:40', '1445/08/13', 0, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '1', '', '', '', '36', '', '', '', '', 1, 1, 5, '0', '1', '0', 0, 0, 0, 0, 0, 2500, 2875, 2040, 334.1, 7749.1, 3874.55, 1250, 1437.5, 1020, 167.05, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3874.55, 0, '', '', '', 11623.65, 11623.65, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 11623.65, 1, 0, 11623.65, 800, '');
INSERT INTO `invoice` (`InvoiceID`, `ShipID`, `ShipName`, `ShipWeight`, `AgentID`, `AgentNameAr`, `AgentNameEn`, `ServiceType`, `ServiceTypeName`, `ServiceTypeFactor`, `InvoiceDate`, `InvoiceDateT`, `InvoiceDateH`, `ArrivalDate`, `ArrivalDateT`, `ArrivalDateH`, `DepartureDate`, `DepartureDateT`, `DepartureDateH`, `PeriodDays`, `AnchorageEntry`, `AnchorageEntryT`, `AnchorageEntryH`, `AnchorageLeave`, `AnchorageLeaveT`, `AnchorageLeaveH`, `AnchorageDays`, `MSericeAnchoragePrice`, `MovePort1`, `MovePort2`, `MovePort3`, `TripNo`, `DockingNo`, `RouteNo`, `ShiftedNo`, `Reason`, `Note`, `MSFraction1`, `MSFraction2`, `MSFraction3`, `MService1`, `MService2`, `MService3`, `CA0`, `CA1`, `CA2`, `CA3`, `MSericeInPrice`, `CB0`, `CB1`, `CB2`, `CB3`, `MSericeOutPrice`, `MA`, `MA0`, `MA1`, `MA2`, `MA3`, `MB`, `MB0`, `MB1`, `MB2`, `MB3`, `MC`, `MC0`, `MC1`, `MC2`, `MC3`, `MovePortPrice`, `MSericeBathPrice`, `MSNote1`, `MSNote2`, `MSNote3`, `MGPrice`, `MSTOTAL`, `SService1`, `SService2`, `SService3`, `SService4`, `SService5`, `SServiceCode1`, `SServiceCode2`, `SServiceCode3`, `SServiceCode4`, `SServiceCode5`, `SSName1`, `SSName2`, `SSName3`, `SSName4`, `SSName5`, `SSNote1`, `SSNote2`, `SSNote3`, `SSNote4`, `SSNote5`, `SSUnit1`, `SSUnit2`, `SSUnit3`, `SSUnit4`, `SSUnit5`, `SSQut1`, `SSQut2`, `SSQut3`, `SSQut4`, `SSQut5`, `SSUPrice1`, `SSUPrice2`, `SSUPrice3`, `SSUPrice4`, `SSUPrice5`, `SSPrice1`, `SSPrice2`, `SSPrice3`, `SSPrice4`, `SSPrice5`, `SSTOTAL`, `TOTAL`, `is_VAT`, `VAT`, `VAT_TOTAL`, `Status`, `OracleCode`) VALUES
(65, 15037, 'MAYSA', 1372, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-26 10:14:00', '10:14', '1445/08/16', '2024-02-22 04:15:00', '04:15', '1445/08/12', '2024-02-23 10:55:00', '10:55', '1445/08/13', 2, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '', '', '', '', '34', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1002.8, 0, 0, 3502.8, 2500, 1002.8, 0, 0, 3502.8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 7005.6, 9205.6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 9205.6, 1, 0, 9205.6, 800, ''),
(66, 15032, 'TOPAZ LENA', 3183, 236, 'شركة الخليج العربي للشحن ', 'ARABIAN GULF SHIPPING COMPANY', '1', 'عادية', 1, '2024-02-26 10:16:00', '10:16', '1445/08/16', '2024-02-23 03:33:00', '03:33', '1445/08/13', '2024-02-23 19:45:00', '19:45', '1445/08/13', 1, '0000-00-00 00:00:00', '01:00', '1389/10/22', '0000-00-00 00:00:00', '01:00', '1389/10/22', 0, 0, '1', '', '', '', '52', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 31.11, 0, 5406.11, 2500, 2875, 31.11, 0, 5406.11, 2703.055, 1250, 1437.5, 15.555, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2703.055, 1500, '', '', '', 13515.275, 15015.275, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 15015.275, 1, 0, 15015.275, 800, ''),
(67, 15093, 'TIMON', 75604, 236, 'شركة الخليج العربي للشحن ', 'ARABIAN GULF SHIPPING COMPANY', '1', 'عادية', 1, '2024-02-26 08:19:00', '08:19', '1445/08/16', '2024-02-23 09:33:00', '09:33', '1445/08/13', '2024-02-24 03:06:00', '03:06', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R2', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 6060.4, 13475.4, 2500, 2875, 2040, 6060.4, 13475.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 26950.8, 29150.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 29150.8, 1, 0, 29150.8, 800, ''),
(68, 15094, 'MSC MELISSA', 73819, 246, 'شركة البحر الأبيض المتوسط للملاحة السعودية', 'MSC. Mediterranean shipping company', '1', 'عادية', 1, '2024-02-27 08:31:00', '08:31', '1445/08/17', '2024-02-23 09:29:00', '09:29', '1445/08/13', '2024-02-24 01:38:00', '01:38', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R2', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 5881.9, 13296.9, 2500, 2875, 2040, 5881.9, 13296.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 26593.8, 28793.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 28793.8, 1, 0, 28793.8, 800, ''),
(69, 15074, 'SINNA', 9807, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-02-27 08:36:00', '08:36', '1445/08/17', '2024-02-23 22:10:00', '22:10', '1445/08/13', '2024-02-24 03:27:00', '03:27', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '19', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 1157.19, 0, 6532.19, 2500, 2875, 1157.19, 0, 6532.19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 13064.38, 14564.38, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14564.38, 1, 0, 14564.38, 800, ''),
(70, 15095, 'ADEL 1', 8314, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-27 09:10:00', '09:10', '1445/08/17', '2024-02-21 12:42:00', '12:42', '1445/08/11', '2024-02-24 03:36:00', '03:36', '1445/08/14', 3, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '1', '', '', '', '37', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 903.38, 0, 6278.38, 2500, 2875, 903.38, 0, 6278.38, 3139.19, 1250, 1437.5, 451.69, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3139.19, 4500, '', '', '', 15695.95, 20195.95, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 20195.95, 1, 0, 20195.95, 800, ''),
(71, 15096, 'SAFEEN PRIME', 26374, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-27 09:17:00', '09:17', '1445/08/17', '2024-02-23 18:55:00', '18:55', '1445/08/13', '2024-02-24 04:45:00', '04:45', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '6', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1137.4, 8552.4, 2500, 2875, 2040, 1137.4, 8552.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 17104.8, 19304.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 19304.8, 1, 0, 19304.8, 800, ''),
(72, 15097, 'GRAND BALTIMORA', 62134, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-27 09:25:00', '09:25', '1445/08/17', '2024-02-23 12:27:00', '12:27', '1445/08/13', '2024-02-24 08:11:00', '08:11', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '22', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 4713.4, 12128.4, 2500, 2875, 2040, 4713.4, 12128.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 24256.8, 26456.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 26456.8, 1, 0, 26456.8, 800, ''),
(73, 15038, 'PRINCESS HIYAM', 1995, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-02-27 09:32:00', '09:32', '1445/08/17', '2024-02-22 20:40:00', '20:40', '1445/08/12', '2024-02-24 09:10:00', '09:10', '1445/08/14', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '1', '', '', '', '35', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1719.25, 0, 0, 4219.25, 2500, 1719.25, 0, 0, 4219.25, 2109.625, 1250, 859.625, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2109.625, 2200, '', '', '', 10548.125, 12748.125, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 12748.125, 1, 0, 12748.125, 800, ''),
(74, 15098, 'BARAKAT', 2568, 255, 'مؤسسة سليمان سعيد عبده الجابري للنقل', 'Sulaiman Saeed Abdo Al Jabri Transport Corporation', '1', 'عادية', 1, '2024-02-27 09:38:00', '09:38', '1445/08/17', '2024-02-23 12:30:00', '12:30', '1445/08/13', '2024-02-24 10:40:00', '10:40', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '36', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2378.2, 0, 0, 4878.2, 2500, 2378.2, 0, 0, 4878.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1100, '', '', '', 9756.4, 10856.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 10856.4, 1, 0, 10856.4, 800, ''),
(75, 15099, 'SEASPAN SAIGON', 39941, 4, 'شركة يوسف بن احمد كانو', 'Yusuf  Bin  Ahmad  KANOO', '1', 'عادية', 1, '2024-02-27 09:55:00', '09:55', '1445/08/17', '2024-02-23 07:20:00', '07:20', '1445/08/13', '2024-02-24 15:13:00', '15:13', '1445/08/14', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '54', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 2494.1, 9909.1, 2500, 2875, 2040, 2494.1, 9909.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 19818.2, 24218.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 24218.2, 1, 0, 24218.2, 800, ''),
(76, 15100, 'SFT TURKEY', 39941, 242, 'شركة ترايدنت السعودية للشحن', 'TRAIDENT SUADI ARABIA', '1', 'عادية', 1, '2024-02-27 10:06:00', '10:06', '1445/08/17', '2024-02-24 00:03:00', '00:03', '1445/08/14', '2024-02-24 12:45:00', '12:45', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 2494.1, 9909.1, 2500, 2875, 2040, 2494.1, 9909.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 19818.2, 22018.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 22018.2, 1, 0, 22018.2, 700, ''),
(77, 15101, 'EA BLUE NILE', 24960, 247, 'شركة البراك للتوكيلات الملاحية المحدودة', 'AL BARRAK SHIPPING AGENCIES CO.LTD', '1', 'عادية', 1, '2024-02-27 10:29:00', '10:29', '1445/08/17', '2024-02-22 17:10:00', '17:10', '1445/08/12', '2024-02-24 17:45:00', '17:45', '1445/08/14', 3, '2024-02-23 10:11:00', '10:11', '1445/08/13', '2024-02-24 17:45:00', '17:45', '1445/08/14', 2, 1000, '1', '1', '', '', '6', '', '51-52', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 996, 8411, 2500, 2875, 2040, 996, 8411, 4205.5, 1250, 1437.5, 1020, 498, 4205.5, 1250, 1437.5, 1020, 498, 0, 0, 0, 0, 0, 8411, 6600, '', '', '', 25233, 32833, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 32833, 1, 0, 32833, 800, ''),
(78, 15102, 'NARGIS', 310, 258, 'شركة الخماسية', 'AL KHOMASIA SHHIPING AGENCIES', '1', 'عادية', 1, '2024-02-27 10:45:00', '10:45', '1445/08/17', '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 1, '2024-02-27 14:22:00', '14:22', '1445/08/17', '2024-02-24 20:23:00', '20:23', '1445/08/14', 3, 750, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 750, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 750, 1, 0, 750, 800, ''),
(79, 15103, 'VALOUR', 62330, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-27 10:52:00', '10:52', '1445/08/17', '2024-02-24 16:30:00', '16:30', '1445/08/14', '2024-02-24 23:06:00', '23:06', '1445/08/14', 1, '2024-02-24 16:30:00', '16:30', '1445/08/14', '2024-02-24 23:06:00', '23:06', '1445/08/14', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(80, 15104, 'MSC INES', 107551, 246, 'شركة البحر الأبيض المتوسط للملاحة السعودية', 'MSC. Mediterranean shipping company', '1', 'عادية', 1, '2024-02-28 08:31:00', '08:31', '1445/08/18', '2024-02-24 09:57:00', '09:57', '1445/08/14', '2024-02-25 01:35:00', '01:35', '1445/08/15', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R1', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 9255.1, 16670.1, 2500, 2875, 2040, 9255.1, 16670.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 33340.2, 35540.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 35540.2, 1, 0, 35540.2, 800, ''),
(81, 15105, 'JOLLY GIADA', 42112, 259, 'شركة التكامل الدولية للملاحة', 'AL TAKAMUL MARITIME CO. LTD', '1', 'عادية', 1, '2024-02-28 09:12:00', '09:12', '1445/08/18', '2024-02-24 11:30:00', '11:30', '1445/08/14', '2024-02-25 02:50:00', '02:50', '1445/08/15', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 2711.2, 10126.2, 2500, 2875, 2040, 2711.2, 10126.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 20252.4, 22452.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 22452.4, 1, 0, 22452.4, 800, ''),
(82, 15106, 'DEFNE', 5261, 4, 'شركة يوسف بن احمد كانو', 'Yusuf  Bin  Ahmad  KANOO', '1', 'عادية', 1, '2024-02-28 09:14:00', '09:14', '1445/08/18', '2024-02-24 12:35:00', '12:35', '1445/08/14', '2024-02-25 01:44:00', '01:44', '1445/08/15', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '21', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 384.37, 0, 5759.37, 2500, 2875, 384.37, 0, 5759.37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 11518.74, 13018.74, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 13018.74, 1, 0, 13018.74, 800, ''),
(83, 15107, 'OVP TAURUS', 28596, 242, 'شركة ترايدنت السعودية للشحن', 'TRAIDENT SUADI ARABIA', '1', 'عادية', 1, '2024-02-28 09:17:00', '09:17', '1445/08/18', '2024-02-24 14:39:00', '14:39', '1445/08/14', '2024-02-25 03:55:00', '03:55', '1445/08/15', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R2', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1359.6, 8774.6, 2500, 2875, 2040, 1359.6, 8774.6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 17549.2, 19749.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 19749.2, 1, 0, 19749.2, 800, ''),
(84, 15033, 'AMMAN', 5753, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-02-28 09:18:00', '09:18', '1445/08/18', '2024-02-24 14:15:00', '14:15', '1445/08/14', '2024-02-25 03:45:00', '03:45', '1445/08/15', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '18', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 468.01, 0, 5843.01, 2500, 2875, 468.01, 0, 5843.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 11686.02, 13186.02, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 13186.02, 1, 0, 13186.02, 800, ''),
(85, 15108, 'ALAWAD 1', 1687, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-02-28 09:20:00', '09:20', '1445/08/18', '2024-02-24 12:25:00', '12:25', '1445/08/14', '2024-02-25 04:30:00', '04:30', '1445/08/15', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '35', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1365.05, 0, 0, 3865.05, 2500, 1365.05, 0, 0, 3865.05, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1100, '', '', '', 7730.1, 8830.1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 8830.1, 1, 0, 8830.1, 800, ''),
(86, 15076, 'ALMABROUKA 10', 1443, 255, 'مؤسسة سليمان سعيد عبده الجابري للنقل', 'Sulaiman Saeed Abdo Al Jabri Transport Corporation', '1', 'عادية', 1, '2024-02-28 09:22:00', '09:22', '1445/08/18', '2024-02-24 16:47:00', '16:47', '1445/08/14', '2024-02-25 08:15:00', '08:15', '1445/08/15', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '36', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1084.45, 0, 0, 3584.45, 2500, 1084.45, 0, 0, 3584.45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1100, '', '', '', 7168.9, 8268.9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 8268.9, 1, 0, 8268.9, 800, ''),
(87, 15109, 'HS BURAQ', 62713, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-28 09:24:00', '09:24', '1445/08/18', '2024-02-24 22:00:00', '22:00', '1445/08/14', '2024-02-25 09:15:00', '09:15', '1445/08/15', 1, '2024-02-24 22:00:00', '22:00', '1445/08/14', '2024-02-25 09:15:00', '09:15', '1445/08/15', 1, 500, '', '', '', '', 'F', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(88, 15110, 'BAHRI TABUK', 52714, 5, 'شركة الوطنية السعودة للنقل البحرى', 'NATIONAL SHIPPING CO.SA', '1', 'عادية', 1, '2024-02-28 09:28:00', '09:28', '1445/08/18', '2024-02-23 12:05:00', '12:05', '1445/08/13', '2024-02-25 13:35:00', '13:35', '1445/08/15', 3, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '24', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 3771.4, 11186.4, 2500, 2875, 2040, 3771.4, 11186.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6600, '', '', '', 22372.8, 28972.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 28972.8, 1, 0, 28972.8, 800, ''),
(89, 15111, 'ENJOY HARMONY', 40914, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-28 09:31:00', '09:31', '1445/08/18', '2024-02-25 02:45:00', '02:45', '1445/08/15', '2024-02-25 14:08:00', '14:08', '1445/08/15', 1, '2024-02-25 02:45:00', '02:45', '1445/08/15', '2024-02-25 14:08:00', '14:08', '1445/08/15', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(90, 15112, 'NCC TIHAMA', 29646, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-28 09:34:00', '09:34', '1445/08/18', '2024-02-25 06:10:00', '06:10', '1445/08/15', '2024-02-25 14:40:00', '14:40', '1445/08/15', 1, '2024-02-25 06:10:00', '06:10', '1445/08/15', '2024-02-25 14:40:00', '14:40', '1445/08/15', 1, 500, '', '', '', '', 'F1', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(91, 15041, 'SAFEEN PEARL', 9999, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-28 09:36:00', '09:36', '1445/08/18', '2024-02-25 07:25:00', '07:25', '1445/08/15', '2024-02-25 19:44:00', '19:44', '1445/08/15', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 1189.83, 0, 6564.83, 2500, 2875, 1189.83, 0, 6564.83, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 13129.66, 14629.66, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14629.66, 1, 0, 14629.66, 800, ''),
(92, 15113, 'ELKA COSMOS', 31905, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-28 09:37:00', '09:37', '1445/08/18', '2024-02-25 20:00:00', '20:00', '1445/08/15', '2024-02-25 20:19:00', '20:19', '1445/08/15', 1, '2024-02-25 20:00:00', '20:00', '1445/08/15', '2024-02-25 20:19:00', '20:19', '1445/08/15', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(93, 15114, 'TARMO', 471, 249, 'الشركة العالمية للمحروقات المحدودة', 'INTERNATIONAL BUNKERING CO.LTD.', '1', 'عادية', 1, '2024-02-28 09:40:00', '09:40', '1445/08/18', '2024-02-25 11:33:00', '11:33', '1445/08/15', '2024-02-25 22:15:00', '22:15', '1445/08/15', 1, '2024-02-25 11:33:00', '11:33', '1445/08/15', '2024-02-25 22:15:00', '22:15', '1445/08/15', 1, 250, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 250, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 250, 1, 0, 250, 800, ''),
(94, 15115, 'REMAH', 18724, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-28 09:43:00', '09:43', '1445/08/18', '2024-02-25 09:15:00', '09:15', '1445/08/15', '2024-02-25 22:59:00', '22:59', '1445/08/15', 1, '2024-02-21 16:50:00', '16:50', '1445/08/11', '2024-02-25 07:50:00', '07:50', '1445/08/15', 4, 2000, '1', '', '', '', 'R2', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 372.4, 7787.4, 2500, 2875, 2040, 372.4, 7787.4, 3893.7, 1250, 1437.5, 1020, 186.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3893.7, 2200, '', '', '', 19468.5, 23668.5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 23668.5, 1, 0, 23668.5, 800, ''),
(95, 15075, 'AZIZ EXPRESS', 22874, 254, 'شركة نما ', 'NAMA SHIPPING CO.', '1', 'عادية', 1, '2024-02-29 10:56:00', '10:56', '1445/08/19', '2024-02-23 01:20:00', '01:20', '1445/08/13', '2024-02-26 01:05:00', '01:05', '1445/08/16', 3, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '15', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 787.4, 8202.4, 2500, 2875, 2040, 787.4, 8202.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6600, '', '', '', 16404.8, 23004.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 23004.8, 1, 0, 23004.8, 800, ''),
(96, 15045, 'SINAA', 9807, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-02-29 11:05:00', '11:05', '1445/08/19', '2024-02-25 14:15:00', '14:15', '1445/08/15', '2024-02-26 03:20:00', '03:20', '1445/08/16', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '19', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 1157.19, 0, 6532.19, 2500, 2875, 1157.19, 0, 6532.19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 13064.38, 14564.38, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14564.38, 1, 0, 14564.38, 800, ''),
(97, 15116, 'CMA CGM PUGET', 49855, 235, 'شركة سي ام ايه سي جي ام العربيه السعودية المحدودة', 'CMA CGM K.S.A Ltd.', '1', 'عادية', 1, '2024-02-29 11:14:00', '11:14', '1445/08/19', '2024-02-25 02:05:00', '02:05', '1445/08/15', '2024-02-26 05:40:00', '05:40', '1445/08/16', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '52', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 3485.5, 10900.5, 2500, 2875, 2040, 3485.5, 10900.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 21801, 26201, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 26201, 1, 0, 26201, 800, ''),
(98, 15117, 'CHARBEL', 17859, 251, 'شركة الملاحة البحرية العربية السعودية عزيز عرب', 'THE SHIPPING CORPORATION SAUDI ARABIA LTD.', '1', 'عادية', 1, '2024-02-29 11:29:00', '11:29', '1445/08/19', '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 1, '2024-02-25 22:00:00', '22:00', '1445/08/15', '2024-02-26 07:35:00', '07:35', '1445/08/16', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(99, 15118, 'JOLLY VANADIO', 51055, 259, 'شركة التكامل الدولية للملاحة', 'AL TAKAMUL MARITIME CO. LTD', '1', 'عادية', 1, '2024-02-29 11:35:00', '11:35', '1445/08/19', '2024-02-24 22:20:00', '22:20', '1445/08/14', '2024-02-26 08:55:00', '08:55', '1445/08/16', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '22', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 3605.5, 11020.5, 2500, 2875, 2040, 3605.5, 11020.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 22041, 26441, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 26441, 1, 0, 26441, 800, ''),
(100, 15057, 'LILY J', 6415, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-29 11:41:00', '11:41', '1445/08/19', '2024-02-25 04:10:00', '04:10', '1445/08/15', '2024-02-26 11:30:00', '11:30', '1445/08/16', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '37', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 580.55, 0, 5955.55, 2500, 2875, 580.55, 0, 5955.55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3000, '', '', '', 11911.1, 14911.1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14911.1, 1, 0, 14911.1, 800, ''),
(101, 15119, 'ENERGY COMMANDER', 42172, 238, 'شركة فيصل منصور حجى التجارية FMII', 'FAISAL M.HIGGI EST.', '1', 'عادية', 1, '2024-02-29 11:44:00', '11:44', '1445/08/19', '2024-02-26 00:59:00', '00:59', '1445/08/16', '2024-02-26 12:55:00', '12:55', '1445/08/16', 1, '2024-02-26 00:59:00', '00:59', '1445/08/16', '2024-02-26 12:55:00', '12:55', '1445/08/16', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(102, 15120, 'OUTRIDER', 21265, 8, 'شركة وكا لة الخليج السعوديه', 'GULF AGENCY CO. SA', '1', 'عادية', 1, '2024-02-29 11:47:00', '11:47', '1445/08/19', '2024-02-25 14:06:00', '14:06', '1445/08/15', '2024-02-26 15:23:00', '15:23', '1445/08/16', 2, '2024-02-25 14:06:00', '14:06', '1445/08/15', '2024-02-26 15:23:00', '15:23', '1445/08/16', 2, 1000, '', '', '', '', 'F', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 1000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1000, 1, 0, 1000, 800, ''),
(103, 15060, 'X-PRESS ALTAIR', 34754, 247, 'شركة البراك للتوكيلات الملاحية المحدودة', 'AL BARRAK SHIPPING AGENCIES CO.LTD', '1', 'عادية', 1, '2024-02-29 11:50:00', '11:50', '1445/08/19', '2024-02-26 07:11:00', '07:11', '1445/08/16', '2024-02-26 15:43:00', '15:43', '1445/08/16', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '51', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1975.4, 9390.4, 2500, 2875, 2040, 1975.4, 9390.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 18780.8, 20980.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 20980.8, 1, 0, 20980.8, 800, ''),
(104, 15121, 'AKSON SANDRA', 24050, 249, 'الشركة العالمية للمحروقات المحدودة', 'INTERNATIONAL BUNKERING CO.LTD.', '1', 'عادية', 1, '2024-02-29 11:54:00', '11:54', '1445/08/19', '2024-02-25 17:30:00', '17:30', '1445/08/15', '2024-02-26 16:11:00', '16:11', '1445/08/16', 1, '2024-02-25 17:30:00', '17:30', '1445/08/15', '2024-02-26 16:11:00', '16:11', '1445/08/16', 1, 500, '', '', '', '', 'F', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(105, 15122, 'ALNAWA EXPRESS', 10035, 254, 'شركة نما ', 'NAMA SHIPPING CO.', '1', 'عادية', 1, '2024-02-29 11:57:00', '11:57', '1445/08/19', '2024-02-23 15:33:00', '15:33', '1445/08/13', '2024-02-26 16:32:00', '16:32', '1445/08/16', 4, '2024-02-21 20:50:00', '20:50', '1445/08/11', '2024-02-23 13:30:00', '13:30', '1445/08/13', 2, 1000, '', '', '', '', '18', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 1195.95, 0, 6570.95, 2500, 2875, 1195.95, 0, 6570.95, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6000, '', '', '', 13141.9, 20141.9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 20141.9, 1, 0, 20141.9, 800, ''),
(106, 15123, 'GFS PRECIOUS', 35991, 234, 'جلوب للخدمات البحرية', 'Globe marine services', '1', 'عادية', 1, '2024-02-29 12:00:00', '12:00', '1445/08/19', '2024-02-25 21:55:00', '21:55', '1445/08/15', '2024-02-26 18:12:00', '18:12', '1445/08/16', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 2099.1, 9514.1, 2500, 2875, 2040, 2099.1, 9514.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 19028.2, 21228.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 21228.2, 1, 0, 21228.2, 800, ''),
(107, 15124, 'WAN HAI 316', 27800, 252, 'الشركة الفنية الدولية', 'UTCL- UNIVERSAL TECHNICAL CO. LTD', '1', 'عادية', 1, '2024-02-29 12:04:00', '12:04', '1445/08/19', '2024-02-26 08:54:00', '08:54', '1445/08/16', '2024-02-26 20:57:00', '20:57', '1445/08/16', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'B03', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1280, 8695, 2500, 2875, 2040, 1280, 8695, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 17390, 19590, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 19590, 1, 0, 19590, 800, ''),
(108, 15125, 'ADEL II', 3495, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-29 12:07:00', '12:07', '1445/08/19', '2024-02-25 14:46:00', '14:46', '1445/08/15', '2024-02-26 21:15:00', '21:15', '1445/08/16', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '36', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 84.15, 0, 5459.15, 2500, 2875, 84.15, 0, 5459.15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3000, '', '', '', 10918.3, 13918.3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 13918.3, 1, 0, 13918.3, 800, ''),
(109, 15033, 'AMMAN', 5753, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-02-29 12:08:00', '12:08', '1445/08/19', '2024-02-26 13:44:00', '13:44', '1445/08/16', '2024-02-26 23:59:00', '23:59', '1445/08/16', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '19', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 468.01, 0, 5843.01, 2500, 2875, 468.01, 0, 5843.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 11686.02, 13186.02, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 13186.02, 1, 0, 13186.02, 800, ''),
(110, 15126, 'PATMOS', 4599, 238, 'شركة فيصل منصور حجى التجارية FMII', 'FAISAL M.HIGGI EST.', '1', 'عادية', 1, '2024-02-29 12:14:00', '12:14', '1445/08/19', '2024-02-26 18:00:00', '18:00', '1445/08/16', '2024-02-27 03:42:00', '03:42', '1445/08/17', 1, '2024-02-24 22:50:00', '22:50', '1445/08/14', '2024-02-26 16:24:00', '16:24', '1445/08/16', 2, 1000, '', '', '', '', 'B02', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 271.83, 0, 5646.83, 2500, 2875, 271.83, 0, 5646.83, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 11293.66, 13793.66, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 13793.66, 1, 0, 13793.66, 800, ''),
(111, 15127, 'KOTA RAHMAT', 9725, 6, 'شركة الشرق للتجارة والملاحة المحدودة', 'ORIENTAL Com. & Shipping Co. ', '1', 'عادية', 1, '2024-02-29 12:17:00', '12:17', '1445/08/19', '2024-02-26 10:32:00', '10:32', '1445/08/16', '2024-02-27 03:56:00', '03:56', '1445/08/17', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '6', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 1143.25, 0, 6518.25, 2500, 2875, 1143.25, 0, 6518.25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 13036.5, 14536.5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14536.5, 1, 0, 14536.5, 800, ''),
(112, 15128, 'FLAGSHIP PRIVET', 42208, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-29 12:21:00', '12:21', '1445/08/19', '2024-02-24 13:40:00', '13:40', '1445/08/14', '2024-02-27 06:45:00', '06:45', '1445/08/17', 3, '2024-02-24 13:40:00', '13:40', '1445/08/14', '2024-02-27 06:45:00', '06:45', '1445/08/17', 3, 1500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 1500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1500, 1, 0, 1500, 800, ''),
(113, 15129, 'GFS SAPPHIRE', 15995, 234, 'جلوب للخدمات البحرية', 'Globe marine services', '1', 'عادية', 1, '2024-02-29 12:28:00', '12:28', '1445/08/19', '2024-02-26 20:35:00', '20:35', '1445/08/16', '2024-02-27 08:30:00', '08:30', '1445/08/17', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 99.5, 7514.5, 2500, 2875, 2040, 99.5, 7514.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 15029, 17229, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 17229, 1, 0, 17229, 800, ''),
(114, 15130, 'AAL PARIS', 22863, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-29 12:31:00', '12:31', '1445/08/19', '2024-02-26 10:13:00', '10:13', '1445/08/16', '2024-02-27 10:24:00', '10:24', '1445/08/17', 2, '2024-02-25 16:24:00', '16:24', '1445/08/15', '2024-02-26 08:30:00', '08:30', '1445/08/16', 1, 500, '', '', '', '', '21', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 786.3, 8201.3, 2500, 2875, 2040, 786.3, 8201.3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 16402.6, 21302.6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 21302.6, 1, 0, 21302.6, 800, ''),
(115, 15084, 'AL MABROUUKA 11', 1840, 255, 'مؤسسة سليمان سعيد عبده الجابري للنقل', 'Sulaiman Saeed Abdo Al Jabri Transport Corporation', '1', 'عادية', 1, '2024-02-29 12:33:00', '12:33', '1445/08/19', '2024-02-26 05:42:00', '05:42', '1445/08/16', '2024-02-27 13:25:00', '13:25', '1445/08/17', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '35', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1541, 0, 0, 4041, 2500, 1541, 0, 0, 4041, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 8082, 10282, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 10282, 1, 0, 10282, 800, ''),
(116, 15037, 'MAYSA', 1372, 246, 'شركة البحر الأبيض المتوسط للملاحة السعودية', 'MSC. Mediterranean shipping company', '1', 'عادية', 1, '2024-02-29 12:35:00', '12:35', '1445/08/19', '2024-02-26 08:24:00', '08:24', '1445/08/16', '2024-02-27 13:55:00', '13:55', '1445/08/17', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '34', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1002.8, 0, 0, 3502.8, 2500, 1002.8, 0, 0, 3502.8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 7005.6, 9205.6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 9205.6, 1, 0, 9205.6, 800, ''),
(117, 15131, 'RUI FU TAI', 27357, 4, 'شركة يوسف بن احمد كانو', 'Yusuf  Bin  Ahmad  KANOO', '1', 'عادية', 1, '2024-02-29 12:42:00', '12:42', '1445/08/19', '2024-02-23 22:47:00', '22:47', '1445/08/13', '2024-02-27 19:00:00', '19:00', '1445/08/17', 4, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '31', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1235.7, 8650.7, 2500, 2875, 2040, 1235.7, 8650.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8800, '', '', '', 17301.4, 26101.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 26101.4, 1, 0, 26101.4, 800, ''),
(118, 15074, 'SINNA', 9807, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-02-29 13:05:00', '13:05', '1445/08/19', '2024-02-25 14:15:00', '14:15', '1445/08/15', '2024-02-27 19:18:00', '19:18', '1445/08/17', 3, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '19', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 1157.19, 0, 6532.19, 2500, 2875, 1157.19, 0, 6532.19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4500, '', '', '', 13064.38, 17564.38, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 17564.38, 1, 0, 17564.38, 800, ''),
(119, 15132, 'SANTA INES', 86601, 248, 'انشكيب لخدمات الشحن السعودية المحدودة', 'INCHCAPE SHIPPING SERVICES SAUDI CO.', '1', 'عادية', 1, '2024-02-29 13:10:00', '13:10', '1445/08/19', '2024-02-26 00:20:00', '00:20', '1445/08/16', '2024-02-27 21:36:00', '21:36', '1445/08/17', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R1', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 7160.1, 14575.1, 2500, 2875, 2040, 7160.1, 14575.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 29150.2, 33550.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 33550.2, 1, 0, 33550.2, 800, ''),
(120, 15071, '5PEARLS', 1198, 253, 'وكالة أطلس', 'ATLAS SHIPPING AGENCY', '1', 'عادية', 1, '2024-02-29 13:17:00', '13:17', '1445/08/19', '2024-02-27 22:37:00', '22:37', '1445/08/17', '2024-02-28 02:01:00', '02:01', '1445/08/18', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '7', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 802.7, 0, 0, 3302.7, 2500, 802.7, 0, 0, 3302.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1100, '', '', '', 6605.4, 7705.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 7705.4, 1, 0, 7705.4, 800, ''),
(121, 15133, 'MSC ORIANE', 66399, 246, 'شركة البحر الأبيض المتوسط للملاحة السعودية', 'MSC. Mediterranean shipping company', '1', 'عادية', 1, '2024-02-29 13:43:00', '13:43', '1445/08/19', '2024-02-27 19:52:00', '19:52', '1445/08/17', '2024-02-28 06:30:00', '06:30', '1445/08/18', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 5139.9, 12554.9, 2500, 2875, 2040, 5139.9, 12554.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 25109.8, 27309.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 27309.8, 1, 0, 27309.8, 800, ''),
(122, 15134, 'YM MOVEMENT', 71821, 252, 'الشركة الفنية الدولية', 'UTCL- UNIVERSAL TECHNICAL CO. LTD', '1', 'عادية', 1, '2024-02-29 13:50:00', '13:50', '1445/08/19', '2024-02-26 14:36:00', '14:36', '1445/08/16', '2024-02-28 13:29:00', '13:29', '1445/08/18', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 5682.1, 13097.1, 2500, 2875, 2040, 5682.1, 13097.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 26194.2, 30594.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 30594.2, 1, 0, 30594.2, 800, ''),
(123, 15135, 'ROYAL 1', 6577, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-02-29 13:55:00', '13:55', '1445/08/19', '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 1, '2024-02-26 23:55:00', '23:55', '1445/08/16', '2024-02-28 13:45:00', '13:45', '1445/08/18', 2, 1000, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 1000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1000, 1, 0, 1000, 800, ''),
(124, 15136, 'OSCAR ', 234944, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-29 14:02:00', '14:02', '1445/08/19', '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 1, '2024-02-28 07:15:00', '07:15', '1445/08/18', '2024-02-28 14:47:00', '14:47', '1445/08/18', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(125, 15062, 'PORTSMOUTH', 25406, 248, 'انشكيب لخدمات الشحن السعودية المحدودة', 'INCHCAPE SHIPPING SERVICES SAUDI CO.', '1', 'عادية', 1, '2024-02-29 14:07:00', '14:07', '1445/08/19', '2024-02-27 22:56:00', '22:56', '1445/08/17', '2024-02-28 19:40:00', '19:40', '1445/08/18', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R1', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1040.6, 8455.6, 2500, 2875, 2040, 1040.6, 8455.6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 16911.2, 19111.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 19111.2, 1, 0, 19111.2, 800, ''),
(126, 15137, 'CS ETISALAT', 2221, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-29 14:48:00', '14:48', '1445/08/19', '2024-02-27 15:50:00', '15:50', '1445/08/17', '2024-02-28 20:16:00', '20:16', '1445/08/18', 2, '2024-02-27 06:35:00', '06:35', '1445/08/17', '2024-02-27 14:40:00', '14:40', '1445/08/17', 1, 250, '', '', '', '', '11', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1979.15, 0, 0, 4479.15, 2500, 1979.15, 0, 0, 4479.15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 8958.3, 11408.3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 11408.3, 1, 0, 11408.3, 800, ''),
(127, 15138, 'FE OMER', 1533, 8, 'شركة وكا لة الخليج السعوديه', 'GULF AGENCY CO. SA', '1', 'عادية', 1, '2024-02-29 14:53:00', '14:53', '1445/08/19', '2024-02-27 20:20:00', '20:20', '1445/08/17', '2024-02-28 19:32:00', '19:32', '1445/08/18', 1, '2024-02-27 20:20:00', '20:20', '1445/08/17', '2024-02-28 19:32:00', '19:32', '1445/08/18', 1, 250, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 250, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 250, 1, 0, 250, 800, ''),
(128, 15075, 'AZIZ EXPRESS', 22874, 254, 'شركة نما ', 'NAMA SHIPPING CO.', '1', 'عادية', 1, '2024-02-29 14:56:00', '14:56', '1445/08/19', '2024-02-27 20:49:00', '20:49', '1445/08/17', '2024-02-28 22:55:00', '22:55', '1445/08/18', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '15', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 787.4, 8202.4, 2500, 2875, 2040, 787.4, 8202.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 16404.8, 20804.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 20804.8, 1, 0, 20804.8, 800, ''),
(129, 15033, 'AMMAN', 5753, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-02-29 08:32:00', '08:32', '1445/08/19', '2024-02-28 13:45:00', '13:45', '1445/08/18', '2024-02-29 01:36:00', '01:36', '1445/08/19', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '19', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 468.01, 0, 5843.01, 2500, 2875, 468.01, 0, 5843.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 11686.02, 13186.02, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 13186.02, 1, 0, 13186.02, 800, '');
INSERT INTO `invoice` (`InvoiceID`, `ShipID`, `ShipName`, `ShipWeight`, `AgentID`, `AgentNameAr`, `AgentNameEn`, `ServiceType`, `ServiceTypeName`, `ServiceTypeFactor`, `InvoiceDate`, `InvoiceDateT`, `InvoiceDateH`, `ArrivalDate`, `ArrivalDateT`, `ArrivalDateH`, `DepartureDate`, `DepartureDateT`, `DepartureDateH`, `PeriodDays`, `AnchorageEntry`, `AnchorageEntryT`, `AnchorageEntryH`, `AnchorageLeave`, `AnchorageLeaveT`, `AnchorageLeaveH`, `AnchorageDays`, `MSericeAnchoragePrice`, `MovePort1`, `MovePort2`, `MovePort3`, `TripNo`, `DockingNo`, `RouteNo`, `ShiftedNo`, `Reason`, `Note`, `MSFraction1`, `MSFraction2`, `MSFraction3`, `MService1`, `MService2`, `MService3`, `CA0`, `CA1`, `CA2`, `CA3`, `MSericeInPrice`, `CB0`, `CB1`, `CB2`, `CB3`, `MSericeOutPrice`, `MA`, `MA0`, `MA1`, `MA2`, `MA3`, `MB`, `MB0`, `MB1`, `MB2`, `MB3`, `MC`, `MC0`, `MC1`, `MC2`, `MC3`, `MovePortPrice`, `MSericeBathPrice`, `MSNote1`, `MSNote2`, `MSNote3`, `MGPrice`, `MSTOTAL`, `SService1`, `SService2`, `SService3`, `SService4`, `SService5`, `SServiceCode1`, `SServiceCode2`, `SServiceCode3`, `SServiceCode4`, `SServiceCode5`, `SSName1`, `SSName2`, `SSName3`, `SSName4`, `SSName5`, `SSNote1`, `SSNote2`, `SSNote3`, `SSNote4`, `SSNote5`, `SSUnit1`, `SSUnit2`, `SSUnit3`, `SSUnit4`, `SSUnit5`, `SSQut1`, `SSQut2`, `SSQut3`, `SSQut4`, `SSQut5`, `SSUPrice1`, `SSUPrice2`, `SSUPrice3`, `SSUPrice4`, `SSUPrice5`, `SSPrice1`, `SSPrice2`, `SSPrice3`, `SSPrice4`, `SSPrice5`, `SSTOTAL`, `TOTAL`, `is_VAT`, `VAT`, `VAT_TOTAL`, `Status`, `OracleCode`) VALUES
(130, 15139, 'YM MODERATION', 71821, 246, 'شركة البحر الأبيض المتوسط للملاحة السعودية', 'MSC. Mediterranean shipping company', '1', 'عادية', 1, '2024-02-29 08:40:00', '08:40', '1445/08/19', '2024-02-28 08:21:00', '08:21', '1445/08/18', '2024-02-29 05:30:00', '05:30', '1445/08/19', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '53', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 5682.1, 13097.1, 2500, 2875, 2040, 5682.1, 13097.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 26194.2, 28394.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 28394.2, 1, 0, 28394.2, 800, ''),
(131, 15098, 'BARAKAT', 2568, 255, 'مؤسسة سليمان سعيد عبده الجابري للنقل', 'Sulaiman Saeed Abdo Al Jabri Transport Corporation', '1', 'عادية', 1, '2024-02-29 08:53:00', '08:53', '1445/08/19', '2024-02-27 20:27:00', '20:27', '1445/08/17', '2024-02-29 04:50:00', '04:50', '1445/08/19', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '35', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2378.2, 0, 0, 4878.2, 2500, 2378.2, 0, 0, 4878.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 9756.4, 11956.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 11956.4, 1, 0, 11956.4, 800, ''),
(132, 15038, 'PRINCESS HIYAM', 1995, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-02-29 08:59:00', '08:59', '1445/08/19', '2024-02-27 21:17:00', '21:17', '1445/08/17', '2024-02-29 07:15:00', '07:15', '1445/08/19', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '36', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1719.25, 0, 0, 4219.25, 2500, 1719.25, 0, 0, 4219.25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 8438.5, 10638.5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 10638.5, 1, 0, 10638.5, 800, ''),
(133, 15140, ' IONIC STORM', 31263, 260, 'شركة مماس لخدمات الموانيء المحدودة', 'MAMAS PORT SERVICES CO. LTD', '1', 'عادية', 1, '2024-02-29 09:21:00', '09:21', '1445/08/19', '2024-02-24 20:55:00', '20:55', '1445/08/14', '2024-02-29 11:53:00', '11:53', '1445/08/19', 5, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '30', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1626.3, 9041.3, 2500, 2875, 2040, 1626.3, 9041.3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11000, '', '', '', 18082.6, 29082.6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 29082.6, 1, 0, 29082.6, 800, ''),
(134, 15141, 'APL SAIPAN', 16916, 235, 'شركة سي ام ايه سي جي ام العربيه السعودية المحدودة', 'CMA CGM K.S.A Ltd.', '1', 'عادية', 1, '2024-02-29 09:31:00', '09:31', '1445/08/19', '2024-02-28 04:37:00', '04:37', '1445/08/18', '2024-02-29 12:33:00', '12:33', '1445/08/19', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '1', '', '', '', '54', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 191.6, 7606.6, 2500, 2875, 2040, 191.6, 7606.6, 3803.3, 1250, 1437.5, 1020, 95.8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3803.3, 4400, '', '', '', 19016.5, 23416.5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 23416.5, 1, 0, 23416.5, 800, ''),
(135, 15061, 'AL AHMED', 3838, 245, 'توكيلات باعبود للتجارة والملاحة BTS', 'BAABOUD TRADING &amp; SHIPPING,LTD.', '1', 'عادية', 1, '2024-02-29 09:44:00', '09:44', '1445/08/19', '2024-02-28 10:25:00', '10:25', '1445/08/18', '2024-02-29 18:20:00', '18:20', '1445/08/19', 2, '2024-02-25 20:40:00', '20:40', '1445/08/15', '2024-02-28 09:00:00', '09:00', '1445/08/18', 3, 1500, '', '', '', '', '7', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 142.46, 0, 5517.46, 2500, 2875, 142.46, 0, 5517.46, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3000, '', '', '', 11034.92, 15534.92, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 15534.92, 1, 0, 15534.92, 800, ''),
(136, 15142, '	DOCTOR O', 6715, 249, 'الشركة العالمية للمحروقات المحدودة', 'INTERNATIONAL BUNKERING CO.LTD.', '1', 'عادية', 1, '2024-02-29 09:54:00', '09:54', '1445/08/19', '2024-02-29 10:15:00', '10:15', '1445/08/19', '2024-02-29 17:41:00', '17:41', '1445/08/19', 1, '2024-02-29 10:15:00', '10:15', '1445/08/19', '2024-02-29 17:41:00', '17:41', '1445/08/19', 1, 500, '', '', '', '', 'F1', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(137, 15143, 'DORO', 33044, 249, 'الشركة العالمية للمحروقات المحدودة', 'INTERNATIONAL BUNKERING CO.LTD.', '1', 'عادية', 1, '2024-02-29 10:04:00', '10:04', '1445/08/19', '2024-02-29 07:30:00', '07:30', '1445/08/19', '2024-02-29 20:50:00', '20:50', '1445/08/19', 1, '2024-02-29 07:30:00', '07:30', '1445/08/19', '2024-02-29 20:50:00', '20:50', '1445/08/19', 1, 500, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(138, 15144, 'AL BARAKA 1', 4605, 255, 'مؤسسة سليمان سعيد عبده الجابري للنقل', 'Sulaiman Saeed Abdo Al Jabri Transport Corporation', '1', 'عادية', 1, '2024-02-29 10:18:00', '10:18', '1445/08/19', '2024-02-26 05:12:00', '05:12', '1445/08/16', '2024-02-29 21:00:00', '21:00', '1445/08/19', 4, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '35', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 272.85, 0, 5647.85, 2500, 2875, 272.85, 0, 5647.85, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6000, '', '', '', 11295.7, 17295.7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 17295.7, 1, 0, 17295.7, 800, ''),
(139, 15145, 'SANTA ROSA', 85676, 248, 'انشكيب لخدمات الشحن السعودية المحدودة', 'INCHCAPE SHIPPING SERVICES SAUDI CO.', '1', 'عادية', 1, '2024-02-29 23:45:00', '23:45', '1445/08/19', '2024-02-28 02:24:00', '02:24', '1445/08/18', '2024-02-29 23:44:00', '23:44', '1445/08/19', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R2', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 7067.6, 14482.6, 2500, 2875, 2040, 7067.6, 14482.6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 28965.2, 33365.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 33365.2, 1, 0, 33365.2, 800, ''),
(140, 15087, 'AMANAH', 19009, 254, 'شركة نما ', 'NAMA SHIPPING CO.', '1', 'عادية', 1, '2024-02-29 23:25:00', '23:25', '1445/08/19', '2024-02-25 21:35:00', '21:35', '1445/08/15', '2024-02-29 23:25:00', '23:25', '1445/08/19', 5, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '17', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 400.9, 7815.9, 2500, 2875, 2040, 400.9, 7815.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11000, '', '', '', 15631.8, 26631.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 26631.8, 1, 0, 26631.8, 800, ''),
(141, 15146, 'BADR', 1, 262, 'الشركة السعودية للملاحةوالخدمات البحرية', 'SAUDI SHIPPING MARITIME SERVICES CO.', '1', 'عادية', 1, '2024-02-29 13:16:00', '13:16', '1445/08/19', '2024-02-19 00:01:00', '00:01', '1445/08/09', '2024-02-29 23:59:00', '23:59', '1445/08/19', 11, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '13', '', '', '', '', '', '', '', '', '', 'طول 20 قدما أو أقل', '', '', '', '', '', '', '', '', '', 'للوحدة', '', '', '', '', '11', '', '', '', '', '100', '', '', '', '', '1100', '', '', '', '', 1100, 1100, 1, 165, 1265, 800, ''),
(142, 15147, 'TARIK', 2, 261, 'السنديان الماسي', 'ALSINDYAN ALMASY', '1', 'عادية', 1, '2024-02-29 13:30:00', '13:30', '1445/08/19', '2024-02-19 00:01:00', '00:01', '1445/08/09', '2024-02-29 23:59:00', '23:59', '1445/08/19', 11, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '13', '', '', '', '', '', '', '', '', '', 'طول 20 قدما أو أقل', '', '', '', '', '', '', '', '', '', 'للوحدة', '', '', '', '', '11', '', '', '', '', '100', '', '', '', '', '1100', '', '', '', '', 1100, 1100, 1, 165, 1265, 800, ''),
(143, 15148, 'ALMOHAMADIAH', 3, 249, 'الشركة العالمية للمحروقات المحدودة', 'INTERNATIONAL BUNKERING CO.LTD.', '1', 'عادية', 1, '2024-02-29 13:33:00', '13:33', '1445/08/19', '2024-02-19 00:01:00', '00:01', '1445/08/09', '2024-02-29 23:59:00', '23:59', '1445/08/19', 11, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '13', '', '', '', '', '', '', '', '', '', 'طول 20 قدما أو أقل', '', '', '', '', '', '', '', '', '', 'للوحدة', '', '', '', '', '11', '', '', '', '', '100', '', '', '', '', '1100', '', '', '', '', 1100, 1100, 1, 165, 1265, 800, ''),
(144, 15149, 'RIZQ', 4, 249, 'الشركة العالمية للمحروقات المحدودة', 'INTERNATIONAL BUNKERING CO.LTD.', '1', 'عادية', 1, '2024-02-29 13:34:00', '13:34', '1445/08/19', '2024-02-19 00:01:00', '00:01', '1445/08/09', '2024-02-29 23:59:00', '23:59', '1445/08/19', 11, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '14', '', '', '', '', '', '', '', '', '', 'أطول من 20 قدما و حتى 40 قدما', '', '', '', '', '', '', '', '', '', 'للوحدة', '', '', '', '', '11', '', '', '', '', '200', '', '', '', '', '2200', '', '', '', '', 2200, 2200, 1, 330, 2530, 800, ''),
(145, 15150, 'ALBARQ ALSAUDI', 101, 263, 'شركة امداد الغربية للمنتجات البترولية', 'WESTERN SUPPLY CO. SA', '1', 'عادية', 1, '2024-02-29 13:39:00', '13:39', '1445/08/19', '2024-02-22 21:15:00', '21:15', '1445/08/12', '2024-02-22 22:29:00', '22:29', '1445/08/12', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '41', '', '', '', '', '', '', '', '', '', 'اكثر من 2000 حصان الى 4000 حصان', '', '', '', '', '', '', '', '', '', 'ساعة', '', '', '', '', '2', '', '', '', '', '2200', '', '', '', '', '4400', '', '', '', '', 4400, 4400, 1, 0, 4400, 800, ''),
(146, 15150, 'ALBARQ ALSAUDI', 101, 263, 'شركة امداد الغربية للمنتجات البترولية', 'WESTERN SUPPLY CO. SA', '1', 'عادية', 1, '2024-02-29 13:41:00', '13:41', '1445/08/19', '2024-02-23 08:00:00', '08:00', '1445/08/13', '2024-02-23 08:30:00', '08:30', '1445/08/13', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '41', '41', '', '', '', '', '', '', '', '', 'اكثر من 2000 حصان الى 4000 حصان', 'اكثر من 2000 حصان الى 4000 حصان', '', '', '', 'JED-32', 'JED-33', '', '', '', 'ساعة', 'ساعة', '', '', '', '1', '1', '', '', '', '2200', '2200', '', '', '', '2200', '2200', '', '', '', 4400, 4400, 1, 0, 4400, 800, ''),
(147, 15150, 'ALBARQ ALSAUDI', 101, 263, 'شركة امداد الغربية للمنتجات البترولية', 'WESTERN SUPPLY CO. SA', '1', 'عادية', 1, '2024-02-29 13:43:00', '13:43', '1445/08/19', '2024-02-25 20:10:00', '20:10', '1445/08/15', '2024-02-25 22:55:00', '22:55', '1445/08/15', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '41', '', '', '', '', '', '', '', '', '', 'اكثر من 2000 حصان الى 4000 حصان', '', '', '', '', '', '', '', '', '', 'ساعة', '', '', '', '', '1', '', '', '', '', '2200', '', '', '', '', '2200', '', '', '', '', 2200, 2200, 1, 0, 2200, 800, ''),
(148, 15150, 'ALBARQ ALSAUDI', 101, 263, 'شركة امداد الغربية للمنتجات البترولية', 'WESTERN SUPPLY CO. SA', '1', 'عادية', 1, '2024-02-29 13:46:00', '13:46', '1445/08/19', '2024-02-25 15:10:00', '15:10', '1445/08/15', '2024-02-25 16:30:00', '16:30', '1445/08/15', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '41', '', '', '', '', '', '', '', '', '', 'اكثر من 2000 حصان الى 4000 حصان', '', '', '', '', '', '', '', '', '', 'ساعة', '', '', '', '', '1', '', '', '', '', '2200', '', '', '', '', '2200', '', '', '', '', 2200, 2200, 1, 0, 2200, 800, ''),
(149, 15132, 'SANTA INES', 86601, 248, 'انشكيب لخدمات الشحن السعودية المحدودة', 'INCHCAPE SHIPPING SERVICES SAUDI CO.', '1', 'عادية', 1, '2024-02-29 13:48:00', '13:48', '1445/08/19', '2024-02-26 12:00:00', '12:00', '1445/08/16', '2024-02-26 14:30:00', '14:30', '1445/08/16', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '39', '', '', '', '', '', '', '', '', '', 'حتى 1200 حصان', '', '', '', '', 'JED-20', '', '', '', '', 'ساعة', '', '', '', '', '1', '', '', '', '', '600', '', '', '', '', '600', '', '', '', '', 600, 600, 1, 0, 600, 800, '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `privileges` varchar(10) NOT NULL,
  `align1` int(10) NOT NULL DEFAULT 58,
  `align2` int(10) NOT NULL DEFAULT 8,
  `align3` int(10) NOT NULL DEFAULT 12,
  `align4` int(10) NOT NULL DEFAULT 9
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(10) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_invoice` int(50) NOT NULL,
  `pay_agent` varchar(100) NOT NULL,
  `pay_method` varchar(100) NOT NULL,
  `pay_description` text NOT NULL,
  `pay_amount` double NOT NULL,
  `pay_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sappo`
--

CREATE TABLE `sappo` (
  `id` int(11) NOT NULL,
  `no` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `amount` double DEFAULT 0,
  `balance` double NOT NULL DEFAULT 0,
  `is_paid` varchar(10) DEFAULT 'No',
  `is_active` int(1) NOT NULL DEFAULT 1,
  `sappoExpDate` date NOT NULL DEFAULT current_timestamp(),
  `note` text DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Service_ID` int(4) NOT NULL,
  `code` varchar(9) NOT NULL DEFAULT '0',
  `Description` varchar(200) NOT NULL,
  `DescriptionEn` varchar(200) NOT NULL,
  `ServiceType` int(2) NOT NULL,
  `Unit` varchar(100) NOT NULL,
  `UnitEn` varchar(100) NOT NULL,
  `WeightFactor` int(2) NOT NULL,
  `DoubleFactor` int(2) NOT NULL,
  `ProfitPercent` int(100) NOT NULL,
  `Cost` double NOT NULL,
  `MinCost` double NOT NULL,
  `Notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Service_ID`, `code`, `Description`, `DescriptionEn`, `ServiceType`, `Unit`, `UnitEn`, `WeightFactor`, `DoubleFactor`, `ProfitPercent`, `Cost`, `MinCost`, `Notes`) VALUES
(1, '1-1', 'البضائع العامة', 'General Cargo', 0, 'للطن أو للمترالمكعب', 'per ton or cubic meter or part thereof, whichever is higher', 0, 1, 0, 20, 0, ''),
(2, '1-2', 'الأسمنت المكيس (المصدر)', 'Cement (exporter) handled by the owner of the goods and my equipment', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 8, 0, ''),
(3, '1-3-1', 'أقل من 3 طن', 'Less than 3 tons', 0, 'للوحدة', 'For unity', 0, 1, 0, 140, 0, ''),
(4, '1-3-2', 'من 3 طن إلى 10 طن', '3 tons to 10 tons', 0, 'للوحدة', 'For unity', 0, 1, 0, 200, 0, ''),
(5, '1-3-3', 'أكتر من 10 طن إلى 40 طن', 'More than 10 tons to 40 tons', 0, 'للوحدة', 'For unity', 0, 1, 0, 540, 0, ''),
(6, '1-3-4', 'أكثر من 40 طن', 'More than 40 tons', 0, 'للوحدة', 'For unity', 0, 1, 0, 1350, 0, ''),
(7, '1-4-1', 'الأغنام', 'Sheep', 0, 'عن الرأس', 'head', 0, 1, 0, 3, 0, ''),
(8, '1-4-2', 'المواشي الأخرى', 'Other livestock', 0, 'عن الرأس', 'head', 0, 1, 0, 7, 0, ''),
(9, '1-5-1', 'البضائع السائبة', 'Bulk cargo', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 8, 0, ''),
(10, '1-5-2', 'البضائع السائبه الخاصه بالمشاريع المقامة  ', 'Bulk cargo for projects established in ports and handled by them with their knowledge and using their equipment including goods handled at the berths of projects in industrial ports', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 4, 0, ''),
(11, '1-5-3', 'الأسمنت السائب و الكلتكر ', 'Bulk cement and clutcher exports  which are handled by the owner of the goods and his equipment', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 1, 0, ''),
(12, '1-5-4', 'النفط و الغاز و منتجات النفط السائلة', 'Oil gas and liquid petroleum products handled at their designated berths', 0, 'للطن أو جزء منة', 'per ton or part of it', 0, 1, 0, 1, 0, ''),
(13, '1-6-1', 'طول 20 قدما أو أقل', '20 feet tall or less', 0, 'للوحدة', 'For unity', 0, 1, 0, 270, 0, ''),
(14, '1-6-2', 'أطول من 20 قدما و حتى 40 قدما', 'Longer than 20 feet to 40 feet', 0, 'للوحدة', 'For unity', 0, 1, 0, 400, 0, ''),
(15, '1-6-3', 'أطول من 40 قدما', 'Longer than 40 feet', 0, 'للوحدة', 'For unity', 0, 1, 0, 540, 0, ''),
(16, '1-7-1', 'طول 20 قدما أو أقل (وارد معبأ)', '20 feet or less (incoming packed)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 300, 0, ''),
(17, '1-7-2', 'أطول من 20 قدما و حتى 40 قدما (وارد معبأ) ', 'Longer than 20 feet to 40 feet (incoming filled)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 450, 0, ''),
(18, '1-7-3', 'أطول 40 قدما أو أقل (وارد معبأ)', 'Longer than 20 feet to 40 feet (incoming filled)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 560, 0, ''),
(19, '1-7-4', 'طول من 20 قدما أو أقل(وارد فارغ) ', 'Length of 20 feet or less (blank incoming)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 280, 0, ''),
(20, '1-7-5', 'أطول من 20 قدما و حتى 40 قدما (وارد فارغ) ', 'Longer than 20 feet to 40 feet (blank incoming)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 420, 0, ''),
(21, '1-7-6', 'أطول من 40 قدما (وارد فارغ)', 'Longer than 40 feet (blank incoming)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 560, 0, ''),
(22, '1-7-7', 'طول 20 قدما أو أقل (صادر معبأ)', '20 feet or less (packaged outbound)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 280, 0, ''),
(23, '1-7-8', 'أطول من 20 قدما و حتى 40 قدما (صادر معبأ)', 'Longer than 20 feet to 40 feet (packaged outgoing)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 430, 0, ''),
(24, '1-7-9', 'أطول من 40 قدما (صادر معبأ)', 'Longer than 40 feet (Exported Packaged)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 560, 0, ''),
(25, '1-7-10', 'طول 20 قدما أو أقل (صادر فارغ)', '20 feet or less (blank outgoing)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 300, 0, ''),
(26, '1-7-11', 'أطول من 20 قدما و حتى 40 قدما (صادر فارغ)', 'Longer than 20 feet to 40 feet (empty export)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 450, 0, ''),
(27, '1-7-12', 'أطول من 40 قدما (صادر فارغ)', 'Longer than 40 feet (blank outgoing)', 0, 'للوحدة / حركة', 'For Unity / Movement', 0, 1, 0, 560, 0, ''),
(28, '1-8-1', 'طول 20 قدما أو أقل ', '20 feet tall or less', 0, 'للوحدة / حركة', 'Unity / Movement', 0, 1, 0, 450, 0, ''),
(29, '1-8-2', 'أطول من 20 قدما و حتى 40 قدما', 'Longer than 20 feet to 40 feet', 0, 'للوحدة / حركة', 'Unity / Movement', 0, 1, 0, 700, 0, ''),
(30, '1-8-3', 'أطول من 40 قدما', 'Longer than 40 feet', 0, 'للوحدة / حركة', 'Unity / Movement', 0, 1, 0, 740, 0, ''),
(31, '1-9-1', 'التى يبلغ طولها 20 قدما أو أقل', '20 feet tall or less', 0, 'للوحدة', 'For unity', 0, 1, 0, 450, 0, ''),
(32, '1-9-2', 'التى يزيد طولها عن 20 قدما', 'that are more than 20 feet tall', 0, 'للوحدة', 'For unity', 0, 1, 0, 700, 0, ''),
(33, '1-10-1', 'طول 20 قدما أو أقل', '20 feet tall or less', 0, 'للوحدة', 'For unity', 0, 1, 0, 120, 0, ''),
(34, '1-10-2', 'أطول من 20 قدما و حتى 40 قدما', 'Longer than 20 feet to 40 feet', 0, 'للوحدة', 'For unity', 0, 1, 0, 120, 0, ''),
(35, '1-10-3', 'أطول من 40 قدما', 'Longer than 40 feet', 0, 'للوحدة', 'For unity', 0, 1, 0, 120, 0, ''),
(36, '3-2-1', 'استخدام رصيف غير تجاري حتى 30 م', '', 0, 'يوم', 'Day', 0, 1, 0, 100, 0, ''),
(37, '3-2-2', 'استخدام رصيف غير تجاري اكثر من 30 حتى 40 م', '', 0, 'يوم', 'Day', 0, 1, 0, 200, 0, ''),
(38, '3-2-3', 'استخدام رصيف غير تجاري أكثر من 40 م', '', 0, 'يوم', 'Day', 0, 1, 0, 500, 0, ''),
(39, '2-2-1', 'حتى 1200 حصان', '', 0, 'ساعة', 'Hour', 0, 1, 0, 660, 0, ''),
(40, '2-2-2', 'اكثر من 1200 حصان الى 2000 حصان', '', 0, 'ساعة', 'Hour', 0, 1, 0, 1650, 0, ''),
(41, '2-2-3', 'اكثر من 2000 حصان الى 4000 حصان', '', 0, 'ساعة', 'Hour', 0, 1, 0, 2200, 0, ''),
(42, '2-2-4', 'اكثر من 4000', '', 0, 'ساعة', 'Hour', 0, 1, 0, 3300, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `ship`
--

CREATE TABLE `ship` (
  `ShipID` int(10) NOT NULL,
  `IMO` varchar(20) NOT NULL,
  `ShipName` varchar(100) NOT NULL,
  `Weight` double NOT NULL,
  `AgentID` int(10) NOT NULL,
  `VAT` int(4) NOT NULL DEFAULT 0,
  `Notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ship`
--

INSERT INTO `ship` (`ShipID`, `IMO`, `ShipName`, `Weight`, `AgentID`, `VAT`, `Notes`) VALUES
(14983, '198982158d', 'HUANG UPs', 16000, 4, 1, 'HUANG UPs'),
(14984, '9539377 ', 'BASILISK', 1500, 9, 0, ''),
(14985, '432270533 ', 'AL-HAJI KASIM', 524, 4, 0, ''),
(14986, '232617071 ', 'SSI CHALLENGER', 31242, 4, 0, ''),
(14987, '336979549 ', 'ASTRO PROCYON', 883, 2, 1, ''),
(14988, '9665683 ', 'CARL SCHULTE', 51872, 10, 0, ''),
(14989, '501808731 ', 'APL SAVANNAH', 109699, 1, 0, ''),
(14990, '469031190 ', 'MANTA FATMA', 23264, 1, 0, ''),
(14991, '481776631 ', 'MTS STATUM', 309, 1, 1, ''),
(14992, '333271349 ', 'ULTRA SERVAL', 43644, 10, 0, ''),
(14993, '441200580 ', 'GLOVIS SUNRISE', 64572, 4, 0, ''),
(14994, '253220692 ', 'ZAKHER STAR', 1416, 3, 1, ''),
(14995, '268308628 ', 'WAN HAI 611', 68687, 3, 0, ''),
(14996, '336816879 ', 'OOCL TAIPEI', 91499, 10, 0, ''),
(14997, '430373088 ', 'NABUCCO', 73358, 8, 0, ''),
(14998, '589771339 ', 'LUCKY GLORY', 20238, 5, 0, ''),
(14999, '434465218 ', 'LUCKY GLORY II', 9955, 3, 0, ''),
(15000, '296753825 ', 'PROMETHEUS LEADER', 41886, 7, 0, ''),
(15001, '198982158', 'AYMAN DASA', 111111, 3, 1, 'ADD NEW'),
(15002, '123456', 'ABCDE', 9000, 4, 1, ''),
(15003, '944440', 'bahri', 15000, 234, 0, ''),
(15004, '21321321', 'ZAMIL-406', 2000, 1, 1, ''),
(15005, '234234234234', 'ZAMIL/406', 10000, 2, 1, ''),
(15006, '22333', 'ZAMIL 406', 2222, 3, 1, ''),
(15008, '65655', 'ereererr', 526352, 11, 1, ''),
(15012, '198982158c', '198982158d', 33, 2, 1, ''),
(15018, '432270533	', '432270533	', 33, 2, 1, '32'),
(15023, '22', '22', 33, 5, 1, ''),
(15031, '232', '22', 32, 2, 1, ''),
(15032, '', 'TOPAZ LENA', 3183, 236, 0, ''),
(15033, '254', 'AMMAN', 5753, 237, 0, ''),
(15034, '9451355', 'DA HONG XIA', 20454, 238, 0, ''),
(15035, '945352', 'WADI DUKA', 33998, 1, 0, ''),
(15036, '94225552', 'LADY MARIA', 998, 240, 0, ''),
(15037, '94000', 'MAYSA', 1372, 240, 0, ''),
(15038, '7405089', 'PRINCESS HIYAM', 1995, 241, 0, ''),
(15039, '9237084', 'TB ANPING', 25836, 242, 0, ''),
(15040, '9161871', 'VICTORY LIGHT', 11951, 4, 0, ''),
(15041, '9491604', 'SAFEEN PEARL', 9999, 243, 0, ''),
(15042, '9620956', 'BAHRI HOFUF', 50714, 244, 0, ''),
(15043, '7607417', 'HAJH GHSN J', 2438, 241, 0, ''),
(15044, '9337250', 'ADDISON', 27779, 236, 0, ''),
(15045, '9081318', 'SINAA', 9807, 237, 0, ''),
(15046, '8917742', 'OMEGA STAR', 3578, 241, 0, ''),
(15047, '9638484', 'JOSCO JIN ZOU', 33188, 240, 0, ''),
(15048, '9187875', 'GFS JUNO', 25535, 234, 0, ''),
(15049, '9308039', 'GFS PERFECT', 36483, 234, 0, ''),
(15050, '9208875', 'WADI AL RAYAN', 34744, 235, 0, ''),
(15051, ' IMO number	9767340', 'FRONT SIRIUS', 62849, 238, 0, ''),
(15052, '9940461', 'MAO GANG SHANG HAI', 17121, 242, 0, ''),
(15053, '7203912', 'DORRAT JEDDAH', 6712, 245, 0, ''),
(15054, '8201636', 'MSC MALIN', 21586, 246, 0, ''),
(15055, '9378632', 'PING AN', 59172, 236, 0, ''),
(15056, '7113624', 'MARIONA ', 2181, 241, 0, ''),
(15057, '7802079', 'LILY J', 6415, 240, 0, ''),
(15058, '9487275', 'MEZARA', 42538, 243, 0, ''),
(15059, '9108233', 'SIDRA AHLAM', 15095, 1, 0, ''),
(15060, '9875379', 'X-PRESS ALTAIR', 34754, 247, 0, ''),
(15061, '251', 'AL AHMED', 3838, 245, 0, ''),
(15062, '9302437', 'PORTSMOUTH', 25406, 248, 0, ''),
(15063, '9478729', 'AS PROUDA', 42263, 243, 0, ''),
(15064, '9251810', 'CROSS OCEAN', 57567, 249, 0, ''),
(15065, '9433066', 'A DAISEN', 18326, 242, 0, ''),
(15066, '9683489', 'ELONA 11', 18848, 250, 0, ''),
(15067, '9743306', 'ZHONG YANG MEN', 34859, 251, 0, ''),
(15068, '91', 'YM MUTUALITY', 76787, 252, 0, ''),
(15069, '6208', 'THESSUS', 60208, 240, 0, ''),
(15070, '21024', 'MEKELE', 21024, 251, 0, ''),
(15071, '40', '5PEARLS', 1198, 253, 0, ''),
(15072, '403', '5PEARLS', 1198, 253, 0, ''),
(15073, '1678', 'VOS HESTIA', 1678, 234, 0, ''),
(15074, '7482', 'SINNA', 9807, 237, 0, ''),
(15075, '8311895', 'AZIZ EXPRESS', 22874, 254, 0, ''),
(15076, '6817003', 'ALMABROUKA 10', 1443, 255, 0, ''),
(15077, '4500', 'CL DJIBOUTI', 33044, 240, 0, ''),
(15078, '9718117', 'CMA CGM GANGES', 94730, 235, 0, ''),
(15079, '9895977', 'ABDELRAHMAN K', 1848, 240, 0, ''),
(15080, '451', 'ANEMOS', 19701, 240, 0, ''),
(15081, '7223041', 'LADY RASHA', 1777, 241, 0, ''),
(15082, '9309526', 'CATALONIA', 24960, 247, 0, ''),
(15083, '9357121', 'TRANSMAR LEGACY', 22801, 256, 0, ''),
(15084, '7106994', 'AL MABROUUKA 11', 1840, 255, 0, ''),
(15085, '9602966', 'VAN KNIGHT', 32962, 240, 0, ''),
(15086, '9363390', 'LEO', 27104, 234, 0, ''),
(15087, '7602106', 'AMANAH', 19009, 254, 0, ''),
(15088, '554', 'JERSEY', 2350, 240, 0, ''),
(15089, '4522', 'JAWAN', 11947, 240, 0, ''),
(15090, '9711901', 'BC ZOE', 21168, 253, 0, ''),
(15091, '9603594', 'SAFEEN PRIZE', 26412, 243, 0, ''),
(15092, '8506361', 'BASHAR ONTRANSPORT', 18341, 240, 0, ''),
(15093, '9415844', 'TIMON', 75604, 236, 0, ''),
(15094, '9226918', 'MSC MELISSA', 73819, 246, 0, ''),
(15095, '8017970', 'ADEL 1', 8314, 240, 0, ''),
(15096, '9504607', 'SAFEEN PRIME', 26374, 243, 0, ''),
(15097, '9784037', 'GRAND BALTIMORA', 62134, 243, 0, ''),
(15098, '4758', 'BARAKAT', 2568, 255, 0, ''),
(15099, '93018039', 'SEASPAN SAIGON', 39941, 4, 0, ''),
(15100, '9238753', 'SFT TURKEY', 39941, 242, 0, ''),
(15101, '9262572', 'EA BLUE NILE', 24960, 247, 0, ''),
(15102, '7845', 'NARGIS', 310, 258, 0, ''),
(15103, '9426257', 'VALOUR', 62330, 240, 0, ''),
(15104, '123', 'MSC INES', 107551, 246, 0, ''),
(15105, '9033', 'JOLLY GIADA', 42112, 259, 0, ''),
(15106, '99986', 'DEFNE', 5261, 4, 0, ''),
(15107, '69996', 'OVP TAURUS', 28596, 242, 0, ''),
(15108, '1369', 'ALAWAD 1', 1687, 241, 0, ''),
(15109, '2323', 'HS BURAQ', 62713, 240, 0, ''),
(15110, '12367', 'BAHRI TABUK', 52714, 5, 0, ''),
(15111, '6539', 'ENJOY HARMONY', 40914, 240, 0, ''),
(15112, '36764', 'NCC TIHAMA', 29646, 243, 0, ''),
(15113, '23511', 'ELKA COSMOS', 31905, 243, 0, ''),
(15114, '98790', 'TARMO', 471, 249, 0, ''),
(15115, '2908', 'REMAH', 18724, 243, 0, ''),
(15116, '9248124', 'CMA CGM PUGET', 49855, 235, 0, ''),
(15117, '9222558', 'CHARBEL', 17859, 251, 0, ''),
(15118, '9668972', 'JOLLY VANADIO', 51055, 259, 0, ''),
(15119, '1326', 'ENERGY COMMANDER', 42172, 238, 0, ''),
(15120, '5697', 'OUTRIDER', 21265, 8, 0, ''),
(15121, '369863', 'AKSON SANDRA', 24050, 249, 0, ''),
(15122, '45678', 'ALNAWA EXPRESS', 10035, 254, 0, ''),
(15123, '43499', 'GFS PRECIOUS', 35991, 234, 0, ''),
(15124, '444569', 'WAN HAI 316', 27800, 252, 0, ''),
(15125, '332697', 'ADEL II', 3495, 240, 0, ''),
(15126, '779986', 'PATMOS', 4599, 238, 0, ''),
(15127, '2369632147', 'KOTA RAHMAT', 9725, 6, 0, ''),
(15128, '794697', 'FLAGSHIP PRIVET', 42208, 243, 0, ''),
(15129, '44456986', 'GFS SAPPHIRE', 15995, 234, 0, ''),
(15130, '2322269', 'AAL PARIS', 22863, 243, 0, ''),
(15131, '6369630', 'RUI FU TAI', 27357, 4, 0, ''),
(15132, '747475', 'SANTA INES', 86601, 248, 0, ''),
(15133, '9372482', 'MSC ORIANE', 66399, 246, 0, ''),
(15134, '9660011', 'YM MOVEMENT', 71821, 252, 0, ''),
(15135, '9109005', 'ROYAL 1', 6577, 241, 0, ''),
(15136, '9545510', 'OSCAR ', 234944, 240, 0, ''),
(15137, '8900191', 'CS ETISALAT', 2221, 243, 0, ''),
(15138, '4575478', 'FE OMER', 1533, 8, 0, ''),
(15139, '9664897', 'YM MODERATION', 71821, 246, 0, ''),
(15140, '9332963', ' IONIC STORM', 31263, 260, 0, ''),
(15141, '9239850', 'APL SAIPAN', 16916, 235, 0, ''),
(15142, '9181986', '	DOCTOR O', 6715, 249, 0, ''),
(15143, '9492397', 'DORO', 33044, 249, 0, ''),
(15144, '4852', 'AL BARAKA 1', 4605, 255, 0, ''),
(15145, '9430363', 'SANTA ROSA', 85676, 248, 0, ''),
(15146, '1', 'BADR', 1, 262, 1, ''),
(15147, '2', 'TARIK', 2, 261, 1, ''),
(15148, '3', 'ALMOHAMADIAH', 3, 249, 1, ''),
(15149, '4', 'RIZQ', 4, 249, 1, ''),
(15150, '101', 'ALBARQ ALSAUDI', 101, 263, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cr` varchar(20) NOT NULL,
  `vat` varchar(20) NOT NULL,
  `conatct` text DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `cr`, `vat`, `conatct`, `is_active`, `create_date`, `update_date`) VALUES
(292, 'مؤسسة الرصد المتابعة لصيانة المعدات', '2051229255', '8609902341617732867', ' ', 0, '2022-08-18 17:46:26', '2022-08-18 17:09:34'),
(295, 'مؤسسة خبراء الاسناد للمقاولات العامة', '2050135521', '5471324538773599327', ' 22', 1, '2022-08-18 17:46:26', '2024-01-19 17:19:06'),
(296, 'مؤسسة نايف محمد علي القحطاني للمقاولات العامة', '2050135837', '9355148370446575448', '     xzccxzxcx\r\nzxzc\r\nxzc\r\nxzc\r\nxzc\r\ncxz', 1, '2022-08-18 17:46:26', '2022-08-19 07:44:45'),
(297, 'sssasas', '2051230553', '8487575591548983317', ' ', 0, '2022-08-18 17:46:26', '2022-08-19 20:45:11'),
(298, 'مؤسسة هدف الريادة للمقاولات العامة', '2051232396', '2433587455106864704', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(299, 'مؤسسة يوسف سالم بن عبدالعزيز الوشمي للمقاولات العامة', '2051232782', '7754727519557102175', ' ', 1, '2022-08-18 17:46:26', '2024-01-19 19:08:29'),
(300, 'مؤسسة سعيد متعب طامي الهاجري للمقاولات العامة', '2055100000', '8955846050352154256', ' ', 1, '2022-08-18 17:46:26', '2022-08-19 07:47:10'),
(301, 'مؤسسة تركي عبدالله عيسى العجمي للمقاولات العامة', '2060622902', '8503634786569690557', '', 1, '2022-08-18 17:46:26', '2022-08-19 07:48:15'),
(302, 'مؤسسة سمر عائش عبدالله العتيبي للمقاولات العامة', '2050132006', '1224114463596484436', '', 1, '2022-08-18 17:46:26', '2022-08-19 07:48:28'),
(303, 'مؤسسة فهد بن صالح بن حسن اليامي للمقاولات', '2050140256', '4616211642681058103', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(304, 'مؤسسة ابتكار الريادة للمقاولات العامة', '2051231090', '9641564170625754482', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(305, 'مؤسسة قايد صالح حسين القحطاني للمقاولات', '2051231869', '1836830570306633286', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(306, 'أكاديمية فرسان الخليج الرياضية', '2050138250', '6101490047348167765', ' ', 1, '2022-08-18 17:46:26', '2022-08-20 00:58:26'),
(307, 'مكتب راشد علي راشد الهتلان للاستشارات الأمنية', '2050134777', '2081601141792869367', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(308, 'شركة جازل للاستشارات الأمنية', '2051232186', '9591910246626935393', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(309, 'مكتب الراي السديد للاستشارات الأمنية', '2051232850', '3559377267831169259', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(311, 'شركة شروق الأمل للمقاولات المعمارية العامة', '2051233154', '4517641788059376287', ' ', 1, '2022-08-18 17:46:26', '2022-08-19 04:21:37'),
(314, 'شركة شدن للتجارة', '2050133143', '4500041000059326287', '   ', 1, '2022-08-18 17:46:26', '2022-08-19 04:22:41'),
(315, 'يحسن علي حسن آل الزعبي التجارية', '2050038741', '6489809946294556865', '   ', 1, '2022-08-18 17:46:26', '2022-08-19 07:29:07'),
(316, 'مؤسسة أحمد فوزي بن علي آل الشيخ التجارية', '2050137901', '4280454111561206648', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(317, 'مؤسسة عادل محمد الشيوخ التجارية', '2050139682', '4784962452502398824', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(318, 'مؤسسة مهدي صالح بن عيسى المهري التجارية', '2051229304', '6753769480011527561', '  asdsadsadsadsasda', 1, '2022-08-18 17:46:26', '2022-08-19 08:31:36'),
(319, 'مؤسسة اسطورة الالوان التجارية', '2051231416', '6381334416226112981', '  2051229304d', 0, '2022-08-18 17:46:26', '2022-08-19 08:34:01'),
(320, 'مؤسسة عبدالرحمن مروان عمر الغامدي التجارية', 'D2051231648', 'S3223601888758536584', '          sadsadd', 1, '2022-08-18 17:46:26', '2022-08-19 09:48:11'),
(321, 'مؤسسة ابتكار الالوان التجارية', '2051232583', '1313711986722514935', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(322, 'مؤسسة عالية العربية للتجارة', '2051233083', '1691506946231747432', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(323, 'محل دهانات الوطنية التجارية', '2055127351', '8022247922812194313', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(324, 'شركة مصنع الجزيره للدهانات', '2055128129', '8360234654444032322', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(325, 'مؤسسة اروى خلف فالح القنزع التجارية', '2057472929', '5304705435651649493', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(326, 'مؤسسة خلود خالد سيف العازمي التجارية', '2057472942', '7596510592491083417', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(327, 'مؤسسة سحر عبدالله بن خلف الشمري التجارية', '2057472960', '7802259370235201459', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(328, 'مؤسسة مها راضي بن حامد العنزي التجارية', '2057472967', '9732482989454717194', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(329, 'مؤسسة الطاف تركى بن غريب الخالدى التجارية', '2057472968', '9425827714704686181', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(330, 'مؤسسة ضحى راضي بن حامد العنزي التجارية', '2057472969', '3399714529728785351', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(331, 'مؤسسة بدر محمد خلوي الظفيري التجارية', '2057472971', '3054896329701921902', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(332, 'مؤسسة تهاني حماد ذيبان الشمري التجارية', '2057472983', '7696359722353953878', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(333, 'مؤسسة ناصر سالم عبدالمحسن العجمي التجارية', '2057472987', '1394975837855610651', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(334, 'مؤسسة صالح حمود عبيد الشمري التجارية', '2057472994', '2978749974387278499', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(335, 'مؤسسة عطاالله بن مبارك بن صلف المطيري التجارية', '2057473009', '7029733267823381307', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(336, 'مؤسسة محمد علوش بن محمد القحطاني التجارية', '2057473013', '5961627413422407160', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(337, 'مؤسسة تركي فهد بن محمد العتيبي التجارية', '2057473024', '9218559983712109712', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(338, 'مؤسسة عبدالرحمن عبد الله شرعان الظفيري التجارية', '2057473030', '3744323095253300949', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(339, 'مؤسسة نجلاء عجير ابن غالي العازمي التجارية', '2057473033', '9487183155244939757', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(340, 'مؤسسة حسن عوض حسن العنزي التجارية', '2057473035', '8483772795714018763', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(341, 'مؤسسة دلال محمد صنيتان العتيبي التجارية', '2057473049', '9187147364347038209', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(342, 'مؤسسة صباح المزينى عائض العتيبي التجارية', '2057473063', '9591951024245966945', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(343, 'مؤسسة منى سعد شباب العتيبي التجارية', '2057473089', '2075966934066060601', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(344, 'مؤسسة نايف نخيلان منصور الشمري التجارية', '2057473158', '7871923265167881209', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(345, 'مؤسسة نظر مسلط بن مطلق العتيبي التجارية', '2057473314', '5243164243022113650', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(346, 'مؤسسة ماريه محمد بن فاضل الغامدي التجارية', '2057473344', '3804973291011344467', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(347, 'مؤسسة فاديه محمد بن فاضل الغامدي التجارية', '2057473346', '8928270187955515239', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(348, 'مؤسسة عبدالعزيز محمد بن فاضل الغامدي التجارية', '2057473375', '8817592178521402214', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(349, 'مؤسسة فرحه هليل عسكر الماجدي التجارية', '2057473383', '1754108570579499477', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(350, 'مؤسسة هاجر أحمد صايل الظفيري التجارية', '2057473477', '1754255424138797393', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(351, 'مؤسسة ابتسام ابراهيم ناصر المرشود التجارية', '2057473481', '4939446449346007152', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(352, 'مؤسسة حلا فهد بن مخلف الشمري التجارية', '2057473488', '3983521141595811239', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(353, 'مؤسسة سيف ثاني خليف الشمري التجارية', '2057473513', '2144624728223543883', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(354, 'مؤسسة فوزيه بنت عياد بن دغفق الشمري التجارية', '2057473533', '1456106030907501484', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(355, 'مؤسسة فهاد خليفه بن مطلق الشمري التجارية', '2057473546', '6981228942806449217', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(356, 'مؤسسة برغش حمود شرعان الظفيري التجارية', '2057473575', '6094184667006745790', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(357, 'مؤسسة نايف بن يوسف عيسى العمره التجارية', '2050132696', '1564731523758039370', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(358, 'مؤسسة هاجر حمدان علي الشمراني لمواد البناء', '2050135159', '7500381872121758952', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(359, 'مؤسسة مناهل المدينة التجارية', '2055129413', '7919265984128401489', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(360, 'مؤسسة مجال الإختصاص للتجارة', '2050132240', '7500414958248743898', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(361, 'مؤسسة ألاء لمواد البناء', '2050140914', '2240517127011420223', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(362, 'مؤسسة عالم المجد لمواد البناء', '2050141058', '8897414112451876699', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(363, 'مؤسسة الانجاز الامثل لمواد البناء', '2055128067', '7835772747658888609', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(364, 'شركة كلاس التجارية (شركة شخص واحد)', '2050133810', '4897327867258060828', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(365, 'مؤسسة ساره علي بن ناشي المسلم التجارية', '2050138080', '2759925977046414569', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(366, 'مؤسسة جمعه قاسم سلمان غزواني التجارية', '2050138768', '2780228176003044605', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(367, 'مؤسسة نور البلد التجارية', '2050140812', '6225258819878453145', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(368, 'مؤسسة فاطمه سعد علي السالم التجارية', '2051233070', '6065690247596495605', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(369, 'مؤسسة سالم صالح بن سالم ال جيده التجارية', '2050136480', '5339538471166653669', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(370, 'محل اللون الثامن للتجارة', '2050136189', '7119410115103571848', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(371, 'مؤسسة حسين تركي بن محمد الشوملي التجارية', '2050137745', '4234860139986076660', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(372, 'مؤسسة الأنامل السحرية التجارية', '2051233432', '6594959188896577900', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(373, 'مؤسسة أوتاد الجبيل التجارية', '2055128449', '4653233314692550322', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(374, 'مؤسسة الجسر الصلب للتجارة', '2050133485', '4866472652369780951', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(375, 'مؤسسة علي حسين بن عباس الجميعه التجارية', '2050134136', '9042415146246219430', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(377, 'مؤسسة مروي السديري صنيدح العنزي لتقنية المعلومات', '2050137685', '4606406562727723441', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(378, 'مؤسسة هياء أحمد بن نهار القحطاني التجارية', '2050138394', '3294858043435765646', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(379, 'محل صالحه محمد سعد الزهراني التجارية', '2050138404', '2645139762323186854', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(380, 'مؤسسة خالد محمد عايض الدوسري التجارية', '2051229277', '8725670323558084826', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(383, 'مؤسسة أديب امين عبدالحميد المجددي للتجارة', '2051232133', '2717204273047418136', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(384, 'مؤسسة رشيد راشد بن سعود الحربي للتجارة', '2055128470', '4994656049837617299', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(385, 'مؤسسة الخليج سوفت التجارية', '2060622768', '6768298823176019152', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(386, 'مؤسسة ريان محمد عياش ماحي للتجارة', '2066612086', '1491489224987988457', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(387, 'مؤسسة نايف ناصر موسى غبيسي للتجارة', '2066612148', '5071878381849240108', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(388, 'مؤسسة احمد بن عبدالرضاء بن احمد الحمود التجارية', '2050134462', '9697137549456385680', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(389, 'مؤسسة مستوره عطيه سفر الزهراني لبيع الجوالات وصيانتها', '2050138075', '4622731683683021877', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(390, 'مؤسسة ايزي ستور للتجارة', '2051230646', '8029933993927746454', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(391, 'مؤسسة ريدان الريادة للتجارة', '2050132385', '4458599910615507289', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(392, 'مؤسسة حذيفه عماد بن عبدالعزيز الرشود التجارية', '2050135629', '8157143142286834947', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(393, 'مؤسسة بروق الشرق للاتصالات', '2050133406', '1912786215723899988', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(394, 'مؤسسة شبكات الإرسال للاتصالات', '2050136287', '8116671490662190878', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(395, 'مؤسسة هياء أحمد بن نهار القحطاني للاتصالات', '2050138332', '3702495269876678229', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(396, 'مؤسسة الجوال المتقدم للاتصالات', '2050139817', '8386311979405149118', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(397, 'مؤسسة خليج الخير للاتصالات', '2050140633', '4217506149527564428', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(398, 'مؤسسة العدسة الذكية للاتصالات', '2051231380', '6485260257847710741', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(400, 'مؤسسة الواحة الذهبي للاتصالات', '2055128207', '7435800410786707915', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(401, 'مؤسسة فرسان الجبيل التجارية', '2055128561', '6082202411682444803', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(402, 'مؤسسة حزام بن محمد بن مبخوت الدوسري لبيع الجوالات وصيانتها', '2057473325', '5509390165172370567', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(403, 'مؤسسة حسين عيسى البدن التجارية', '2051230589', '7123744936234033593', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(404, 'مؤسسة زبرقان التجارية', '2050136889', '8928129074916722192', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(405, 'موسسة باكو للتجارة', '2051233486', '5934677052095803380', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(406, 'مؤسسة علي سعيد بن مسعود آل مهدي للاتصالات', '2050134468', '3300616643074986563', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(407, 'مؤسسة فريق البدر الرياضي للتجارة', '2050135416', '5616937148542078557', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(408, 'مؤسسة مسار الحلم للتجارة', '2050137605', '5173932861162132173', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(409, 'مؤسسة توي ستار التجارية', '2051231778', '6960304380987169851', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(410, 'محل نطاق ابتكار لبيع الجوالات وصيانتها', '2051231852', '3851728113761690134', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(411, 'مؤسسة اجهزة المستقبل للتجارة', '2050139481', '1704464137727388912', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(412, 'مؤسسة رؤية الجوهرة لتقنية المعلومات', '2051231543', '5345737522191209218', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(413, 'مؤسسة وادي النظم التجارية', '2051231691', '2029834539507875787', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(414, 'مؤسسة نجاح المحاسبة لتقنية المعلومات', '2050134710', '7197837695791266202', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(415, 'مؤسسة عمر مشعل بن ابراهيم الصقير لتقنية المعلومات', '2051229093', '6151593235712848788', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(416, 'مؤسسة محمد جعفر بن حسين آل درويش التجارية', '2051230356', '9215487076867394670', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(417, 'مؤسسة فلاح لافي حديد الحربي لمواد البناء', '2057473397', '2782307664777909793', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(418, 'مؤسسة تمكين الشرق التجارية', '2050132682', '6476147534024649623', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(419, 'مؤسسة صالح عطيه الزهراني للإطارات', '2050132129', '8485238338234634831', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(420, 'مؤسسة يافع الخضراء التجارية', '2050137916', '2751935061404379920', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(421, 'مؤسسة حمد صالح بن سالم الشهي للاطارات', '2050140376', '9257179564522465964', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(422, 'مؤسسة خلود عبدالله ظافر آل سلوم للإطارات', '2051229499', '2207611480242927128', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(423, 'مؤسسة شباب البحرين للإطارات', '2051229866', '5253206687042101658', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(424, 'مؤسسة عماد على بن احمد الزهراني التجارية', '2050132471', '1856351155137237344', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(425, 'مؤسسة دروب الطريق التجارية', '2050135555', '9564443163531744357', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(426, 'مؤسسة محسنه مرشد عسكر صلاح للتجارة', '2050140879', '2694797870904976596', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(427, 'شركة الجميح للاطارات المحدودة', '2055127332', '7604572887686510374', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(428, 'مؤسسة سميره سعيد بن علي القاسم التجارية', '2050133024', '8314838960936641276', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(429, 'مؤسسة نواف محمد بن عبدالرحمن المبرزي للبطاريات', '2050135088', '4295695280252475604', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(430, 'مؤسسة جوهرة دله للبطاريات', '2050135119', '6437114366824070607', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(431, 'مؤسسة محمد مهدي محمد اليامي للتجارة', '2050135441', '9299896825532017366', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(432, 'مؤسسة منصور علي حسن مدخلي لتجارة الجملة و التجزئة', '2050135726', '9531392559197097659', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(433, 'مؤسسة حكاية عبير للبطاريات', '2050136924', '4153114976981089112', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(434, 'مؤسسة أنوار الشرقية للبطاريات', '2050137528', '3435364111619599898', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(435, 'مؤسسة صالح سعيد عبدالله البريكي للبطاريات', '2050138845', '5040883175255731514', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(436, 'مؤسسة بوابة القطع للتجارة', '2050139047', '7163225187308966304', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(437, 'مؤسسة حنان سالم شينان العيسي للبطاريات', '2050140920', '9079662319282160609', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(438, 'مؤسسة علي أحمد على حكمي للبطاريات', '2051229182', '6575521781249376596', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(439, 'مؤسسة محمد عبدالعزيز احمد الراجحي للبطاريات', '2051232279', '1586710089281037218', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(440, 'مؤسسة جزء مشرق للتجارة', '2055128218', '2928532322388627857', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(441, 'مؤسسة صالح سالم المهري التجارية', '2055128239', '6655893135277758687', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(442, 'مؤسسة صالح سعيد عبدالله البريكي للبطاريات', '2055128611', '5078765298036244325', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(443, 'مؤسسة زمزم بنت علي بن محمد السليم التجارية', '2060622851', '4273490616905392614', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(444, 'مؤسسة حمد بن حميد بن بسيس الهذلي للبطاريات', '2066612073', '2796273190791410279', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(445, 'مؤسسة صابرين يحي على جعونى للمقاولات العامة', '2050137638', '1788195669433178970', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(446, 'مؤسسة البناء الدائم للمقاولات', '2051233064', '7303348822603659516', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(447, 'شركة كانو لخدمات الخزانات', '2050132527', '9417215846035488808', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(448, 'ورشة فهد سامر ضبان المطيري لصيانة المعدات', '2055127440', '7747961659585315400', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(449, 'مؤسسة إمداد الخليج للصيانة', '2050131947', '1441399187334554708', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(450, 'شركة سيمنس للطاقة', '2051231499', '8724833910785671186', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(451, 'ورشة لفات تقنية الخليج الصناعية', '2055127334', '2911371819985186300', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(452, 'ورشة الهدى الصناعية', '2055127822', '8423652528549217320', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(453, 'مؤسسة مكانكم لتقنية المعلومات', '2050133195', '8818823852523260715', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(454, 'مؤسسة شبكة المنهاج لتقنية المعلومات', '2050136861', '4020481781806832274', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(455, 'مؤسسة تزايد للاتصالات و تقنية المعلومات', '2051230025', '1857198561646245650', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(456, 'مؤسسة منطقة المستقبل للاتصالات و تقنية المعلومات', '2051230152', '9531735981063054283', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(457, 'مؤسسة استضافة مربع لتقنية المعلومات', '2051230352', '2017311525788599855', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(458, 'مؤسسة علي عدنان بن باقر الحداد للاتصالات و تقنية المعلومات', '2051230487', '9615641021936237141', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(459, 'مؤسسة كيان سوفت لتقنية المعلومات', '2051231496', '3533584662548295921', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(460, 'مؤسسة النمط الرائع لتقنية المعلومات', '2055127569', '6727797266326903715', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(461, 'مؤسسة الدكان العجيب لتقنية المعلومات', '2055128326', '7759168277574845436', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(462, 'مؤسسة اتاح لتقنية المعلومات', '2055128342', '7604510669668277686', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(463, 'مؤسسة خالد بن سعود بن دغش الهاجري لتقنية المعلومات', '2060622867', '3300328797838052110', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(464, 'فرع شركة نيلم تكنولوجيز ش ش', '2050133475', '4007881768416793252', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(465, 'شركة تربه الشمال للزراعة', '2051230913', '8167188482517448271', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(466, 'مؤسسة عصام بن عثمان بن عبدالواحد اليوسف للمقاولات العامة', '2055129205', '1885395194686981577', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(467, 'مكتب نخيل الواحة للاستشارات الادارية', '2050138141', '1862806263954824727', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(468, 'مكتب برق السمان للاستشارات الادارية', '2050140571', '7364210610766380175', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(469, 'مكتب عبدالله بن علي بن محمد الصانع للاستشارات الادارية', '2050141005', '9097477958381848111', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(470, 'مكتب ادارات المرافق للاستشارات الادارية', '2051232516', '5747913785763112354', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(471, 'مكتب عبدالعزيز محمد علي الوادعي للاستشارات الادارية', '2055128573', '5191708795554487913', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(472, 'مكتب جدا للاستشارات الادارية', '2050137977', '1310719119716090226', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(473, 'مكتب بوارق للاستشارات الادارية', '2050139902', '5795720469387286408', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(474, 'مكتب النور الاول للاستشارات الادارية', '2050140822', '1656172213741524495', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(475, 'مكتب ذياب عايد العنزي للاستشارات الادارية', '2057473065', '8770445186479496400', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(476, 'مكتب رائد بن عبدالله بن ابراهيم العجاجي للاستشارات الصناعية', '2055127799', '6156401210669529965', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(477, 'شركة بيت الخبرة للاستشارات الصناعية', '2055128220', '1593728741674626931', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(478, 'مكتب خلايا فعاله للاستشارات الفنية والمختبرات', '2050133443', '2602278484178805876', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(479, 'مكتب رواد التميز للإستشارات الفنية والمختبرات', '2050140401', '2222843564639056325', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(480, 'مكتب مشاري مطلق بن سفر العتيبي للإستشارات المالية لغير الأوراق المالية', '2057473400', '1866780037108678838', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(481, 'مكتب الحياة للإستشارات المالية لغير الأوراق المالية', '2050138059', '9017491234997356548', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(482, 'مكتب رياس للإستشارات المالية لغير الأوراق المالية', '2051233060', '6822618114781811173', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(483, 'مكتب عبدالله عبدالمحسن علي الشايب للاستشارات الهندسية', '2050133316', '1160437037334357339', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(484, 'مكتب ديوان العمارة للاستشارات الهندسية', '2050133938', '9385769592028292948', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(485, 'مكتب سامي بن علي بن عبدالله الماضي للاستشارات الهندسية', '2050134669', '5041834044974790294', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(486, 'مكتب شبكة الانجاز للاستشارات الهندسية', '2050137131', '7584500734281353402', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(487, 'مكتب رنا منيراحمد قاضي القاضي للاستشارات الهندسية', '2050137218', '3966432222149260199', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(488, 'مكتب شلال فرحان جلال الشمري للاستشارات الهندسية', '2050138906', '3885911327724972232', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(489, 'مكتب حسن محمدصغير علي فقيه للاستشارات الهندسية', '2050139949', '5256170665764109802', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(490, 'مكتب بسمه خيري عبدالحليم بدر للاستشارات الهندسية', '2050140731', '7799190686487771448', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(491, 'مكتب مدن المستقبل للاستشارات الهندسية', '2050140792', '9573672111511462779', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(492, 'مكتب نبراس احمد بن علي آل ثواب للاستشارات الهندسية', '2050141021', '2339747240654654363', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(493, 'مكتب أحمد بن عبداللطيف بن احمد البراك للاستشارات الهندسية', '2051229932', '3731935578745347667', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(494, 'مكتب المعماريون السعوديون للاستشارات الهندسية', '2051230088', '8011718931439477214', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(495, 'مكتب عمرو فريد محمد زيدان للاستشارات الهندسية', '2051230484', '5763773062502037195', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(496, 'مكتب محمد أحمد رشيد الرشيد للاستشارات الهندسية', '2051230585', '2411344352214630240', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(497, 'مكتب ارتداد للاستشارات الهندسية', '2051230629', '3447374510275160106', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(498, 'شركة تكنيكاس ريونيداس العالمية للاستشارات الهندسية شركة الشخص الواحد', '2051230837', '9278946213648950572', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(499, 'شركة الخبراء المميزين للاستشارات الهندسية', '2051231050', '4942857472276414432', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(500, 'مكتب العمارة العربية للاستشارات الهندسية', '2051231106', '2579177686178516576', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(501, 'شركة مساحة للاستشارات الهندسية', '2051231178', '6651256618682058778', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(502, 'فرع شركة الرؤية الحديثة للاستشارات الهندسية', '2051231264', '2334477789041770751', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(503, 'مكتب أنس سعيد سعدي عسيري للاستشارات الهندسية', '2051231355', '8035188549654145304', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(504, 'مكتب الارتكاز للاستشارات الهندسية', '2051231709', '1138728797803110686', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(505, 'مكتب مهند محمد القرون للاستشارات الهندسية', '2051231836', '7238577452043444388', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(506, 'مكتب راديان للاستشارات الهندسية', '2051232698', '7232769960698672561', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(507, 'شركة البيكس الشرق الاوسط للاستشارات الهندسية', '2051232805', '3985368587649323691', '   ', 1, '2022-08-18 17:46:26', '2024-01-11 01:52:20'),
(508, 'مكتب نايل بن دهلوس بن نايل الرشيد للاستشارات الهندسية', '2051232844', '2307579854054422662', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(509, 'مكتب أروى محمد احمد عسيري للاستشارات الهندسية', '2051232965', '8655427672778907829', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(510, 'مكتب شقير صعفق حاكم الدويش للاستشارات الهندسية', '2051233512', '4725827290089474927', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(511, 'مكتب دقة التصاميم للاستشارات الهندسية', '2057473341', '8169572714381232935', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(512, 'مكتب بداية للاستشارات الهندسية', '2057473547', '2782129538116669507', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(513, 'مكتب سعد بن زاهي بن درويش الشمري للاستشارات الهندسية', '2055127401', '3314601648614015964', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(514, 'مكتب المنفذ الثلاثي للاستشارات في مجال الاتصالات وتقنية المعلومات', '2050135296', '4675923385207979380', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(515, 'مكتب تكامل الذكاء والبدائل للاستشارات في مجال الاتصالات وتقنية المعلومات', '2050136455', '9028643230795427537', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(516, 'مكتب يوسف عبدالله العريفي للاستشارات في مجال الحاسب الآلي', '2050133078', '5641795379743965705', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(517, 'مكتب يوسف بن احمد بن حسن ال موسى للاستشارات في مجال الزكاة وضريبة الدخل', '2050136150', '9710120378026564686', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(518, 'مكتب ميسان للاستشارات في مجال الزكاة وضريبة الدخل', '2050137221', '9582690212356095357', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(519, 'مكتب مفلح بن دواس بن مبارك الخالدي للاستشارات في مجال الزكاة وضريبة الدخل', '2050137417', '7238569861516665316', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(520, 'مكتب لميس حسن جميل ثقه للاستشارات في مجال الزكاة وضريبة الدخل', '2051230875', '4843772045165501841', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(521, 'مكتب علي عدنان بن باقر الحداد للاستشارات في مجال الزكاة وضريبة الدخل', '2051232523', '1575331757552202237', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(522, 'مؤسسة صبا التجارية', '2050137000', '4816957411688119863', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(523, 'مؤسسة هزاع بن ناصر بن علي الشمراني التجارية', '2051230145', '7851749558891597536', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(524, 'مؤسسة رايات الاعمال التجارية', '2051231880', '2712749223784233235', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(525, 'مؤسسة العشب الاخضر التجارية', '2050132289', '4117262634426839873', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(526, 'مؤسسة فن العشب التجارية', '2050133761', '8332845763591672505', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(527, 'مؤسسة ضياء العشب التجارية', '2050138854', '9122305345294574147', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(528, 'مؤسسة وردة شامية للتجارة', '2050139710', '5951922889347255571', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(529, 'مؤسسة عشب البستان التجارية', '2050140280', '5406200512112936270', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(530, 'مؤسسة فاطمه جابر بن احمد العوض لتأجير المعدات', '2050132505', '1835199324947193847', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(531, 'مؤسسة دولية المتكاملة التجارية', '2050132371', '4149162313082090545', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(532, 'مؤسسة فهد بن محمد بن علي الزهراني للالات والمعدات', '2050139302', '8848835376714242639', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(533, 'مؤسسة سعد حسن عوده الجلاسي التجارية', '2050140440', '6920632539098559943', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(534, 'مؤسسة مرجان الشرق للتجارة', '2051229946', '6516355873072176560', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(535, 'مؤسسة مرتضى سعيد بن محمد سبيتي للتجارة', '2055127879', '2812535869461638732', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(536, 'مؤسسة بخيت عيظه الزهراني التجارية', '2066612151', '1564321416659575232', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(537, 'مؤسسة اجهزه الاطفاء للتجارة', '2050132524', '1065192173749482938', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(538, 'مؤسسة رؤيا الاعمال لاجهزة السلامة', '2050134520', '6817141594282440330', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(539, 'مؤسسة نوره بنت بلال بن سالم الدوسري التجارية', '2050135442', '1376472948839424194', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(540, 'مؤسسة علي ناصر بن محمد السلطان لاجهزة السلامة', '2050136386', '7662824430055698491', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(541, 'مؤسسة علي حسين احمد بجوي التجارية', '2050137253', '5984214417425331800', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(542, 'مؤسسة متعب بن عبدالله بن شاهر الشمري لاجهزة السلامة', '2050137318', '6961429036704742161', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(543, 'مؤسسة نسمة الخليج لاجهزة السلامة', '2050137335', '8539452151298700475', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(544, 'مؤسسة احمد سالم مران اليامي لاجهزة السلامة', '2050138379', '5298808321887337248', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(545, 'مؤسسة معجبه علي محمد آل المحاضي لاجهزة السلامة', '2051229121', '1760570840036017415', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(546, 'مؤسسة ديوان الخبر لاجهزة السلامة', '2051230554', '3447553546606453876', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(547, 'مؤسسة الفارس الخيال لاجهزة السلامة', '2051232409', '8792631139552232691', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(548, 'مؤسسة أداة المشروع للتجارة', '2055127755', '3482496929796976887', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(549, 'مؤسسة حسن أحمد يوسف الصومالي لاجهزة السلامة', '2055127877', '6748540527994728827', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(550, 'مؤسسة زين الكون التجارية', '2055128498', '2609685965942879521', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(551, 'مؤسسة عبدالرحمن مساعد ابن مخاسر الشمراني للتجارة', '2055129183', '3022799038216264467', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(552, 'مؤسسة زايد جمعان صالح الدوسري لاجهزة السلامة', '2050136285', '3103484525979064703', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(553, 'مؤسسة تداول التدفق للتجارة', '2050137831', '9645961942609225251', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(554, 'مؤسسة علي سعيد عبدالله الغامدي لاجهزة السلامة', '2050138378', '4501939513896418651', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(555, 'مؤسسة نجوم الحريق للتجارة', '2050140138', '9741110715493978645', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(556, 'شركة الخليج للانظمه الصناعية', '2051229844', '9267299597136898713', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(557, 'مؤسسة فاطمه عبدالله بن حسن المحمدعلي لصيانة المعدات', '2050136418', '5422453087164333588', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(558, 'مؤسسة الوسط البديل لصيانة المعدات', '2050141068', '6981412748095857550', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(559, 'مؤسسة موثوقة و مسؤولة للصيانة', '2051229483', '4170219671295804386', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(560, 'مؤسسة قمة التفتيش للصيانة', '2057473256', '2327645422111973752', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(561, 'مؤسسة أصول الرخام للمقاولات العامة', '2050134156', '8874264585744775457', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(562, 'مصنع أحمد عيسى بن علي الدوسري للصناعة', '2050137566', '7119247893217670386', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(563, 'مصنع عبدالخالق محمد حسين الوادعي للصناعة', '2050139237', '8686595873728173972', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(564, 'مصنع زين صالح سالم ال منجم للحديد', '2050140959', '8452684885241615816', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(565, 'مصنع نايف سعد بن مرعي القحطاني للأنابيب', '2055128950', '8557603131386632178', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(566, 'مصنع أماني نومان بن فرحان الشمري للصناعة', '2057473007', '6441134569865853318', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(567, 'مصنع عبدالله سليمان بن غريب الشمري للحديد', '2057473108', '4641500971397203288', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(568, 'شركة الفاس التجارية (شركة شخص واحد)', '2051230316', '3771339139064227457', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(569, 'مؤسسة المحيط الهادئ المتحدة للتجارة', '2051231485', '4107837443612099236', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(570, 'مؤسسة وهج الشرقية التجارية', '2055128060', '2161974845256137347', NULL, 1, '2022-08-18 17:46:26', '2022-08-18 17:46:26'),
(576, '11111', '1111', '1111', ' 95827', 1, '2024-01-16 18:28:26', '2024-01-16 18:28:26'),
(577, '1111', '11111112', '11211111', ' 111111', 1, '2024-01-19 20:46:53', '2024-01-19 20:46:53'),
(578, '33', '33', '333', 'gfhghf', 1, '2024-02-14 21:10:41', '2024-02-14 19:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `is_admin` int(11) DEFAULT 0,
  `max_list` varchar(10) NOT NULL DEFAULT '100',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `clear_pass` varchar(50) DEFAULT NULL,
  `user_2fa_enable` int(11) DEFAULT 0,
  `user_2fa_secret` varchar(50) DEFAULT NULL,
  `user_2fa_code` varchar(50) DEFAULT NULL,
  `debug` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `f_name`, `l_name`, `avatar`, `created_at`, `is_admin`, `max_list`, `is_active`, `clear_pass`, `user_2fa_enable`, `user_2fa_secret`, `user_2fa_code`, `debug`) VALUES
(1, 'aymanoz', '$2y$10$Ianl25aGLKaDwlYcaaminubcrSvU.KcnjXAWiCyuXMPXw0ctnUOhG', 'Ayman', 'Dasa', 'Untitled.ipynb', '2022-05-17 19:21:05', 1, '25', 1, '1234512345', 1, 'MWKNBQFWARLMJPNQ', '', 0),
(4, 'admin', '$2y$10$YLmOh1mihx620toUI5kH9ObzGUDVCbi3bnd2YnPwFPvj9RVlmFuSW', 'sys', 'admin', '', '2024-01-07 14:33:17', 1, '100', 1, '123456', 1, 'UCIZBRRRGVHTBMYV', NULL, 0),
(7, 'adomom', '$2y$10$jJ7.cCywCGJCUY.DWhFbxO/DcSNKS.ycw7tFcl4tH8AtopkVgrzLK', 'Ahmad', 'Dooom', '', '2024-01-13 12:12:59', 0, '100', 1, '123456', 0, NULL, NULL, 0),
(8, 'abc', '$2y$10$.cevWGeGomvl/4pdiL586uLc8osYKHIRP6Pz2dqJj4CNC/TsHmYO.', 'abc', 'abc', '', '2024-02-18 13:05:00', 0, '100', 1, '1234567890', 1, 'AZOSDTAPUNTFMIAF', NULL, 1),
(9, 'syed', '$2y$10$zZSslISjSOUeAJHznVSHC.y9uXzovgo3E9XK5rn0MpdXagdpX4P7e', 'Syed', 'Asad', '9_240229113631.png', '2024-02-18 14:25:57', 0, '100', 1, 'Asad1415', 1, 'PDGGSFKICJNCPJME', NULL, 0),
(10, 'Samer', '$2y$10$5.PTuDicdDhsZRiaFV3WIO3DOB3EbQDHQ5Bs9bZ2uSDWfYcDnGk22', 'Samer', 'quraish', '', '2024-02-20 16:36:23', 0, '100', 1, 'Retal123', 1, 'PVLRHQQUUHVXLXSV', NULL, 0),
(11, 'Gnader81', '$2y$10$COhMGamDZVnd2SMXldgKgOPrekpn3r9ys2ON4KGCReH7aN8ktwJj2', 'Gamal', 'Nader', '', '2024-02-20 16:40:34', 0, '100', 1, 'G81nader', 1, 'HTTPNRASDWTPCRSH', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
  ADD PRIMARY KEY (`alog_id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`AgentID`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`InvoiceID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `sappo`
--
ALTER TABLE `sappo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Service_ID`);

--
-- Indexes for table `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`ShipID`),
  ADD UNIQUE KEY `IMO` (`IMO`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cr` (`cr`),
  ADD UNIQUE KEY `vat` (`vat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `alog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55117;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `AgentID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sappo`
--
ALTER TABLE `sappo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Service_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ship`
--
ALTER TABLE `ship`
  MODIFY `ShipID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15151;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=579;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
