-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 12:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `value`) VALUES
(1, 'name_user1', 'اسم معد البيان'),
(2, 'job_user1', 'معد البيان'),
(3, 'name_user2', 'اسم مدير المحاسبة'),
(4, 'job_user2', 'مدير المحاسبة'),
(5, 'name_user3', 'اسم المدير التنفيذي'),
(6, 'job_user3', 'مدير التنفيذي'),
(7, 'name_user4', NULL),
(8, 'job_user4', NULL),
(9, 'name_user5', NULL),
(10, 'job_user5', NULL),
(11, 'IBAN', 'SA7745000000242379501001'),
(12, 'invoiceStart', 'JD-'),
(13, 'com_fax', NULL),
(14, 'vat', '15'),
(15, 'AdressMamwani', '<span style=\"font-size:8pt\" lang=\"ar-SA\">\nالمملكة العربية السعودية \n<br>\nالهيئة العامة للموانئ\n<br>\nميناء جدة الإسلامي\n<br>\nwww.ports.gov.sa\n</span>'),
(16, 'AdressCompany', '<span lang=\"ar-SA\">   \r\nالمملكة العربية السعودية <br>\r\nشركة الزامل للخدمات البحرية <br>\r\n<span lang=\"ar-SA\">هـاتف :8696300 013</span>\r\n<br>\r\n<span lang=\"ar-SA\">فـاكس :8574202 013</span>      \r\n</span>'),
(17, 'footerAR', '\nفيما يلي تفاصيل الحساب المذكور مع  <br>   البنك السعودي الأول \n<br> \nإسم الحساب: شركة ساحل الغربية لخدمات الموانىء  \n<br> \nرقم السجل التجاري: 4030534211 \n<br>\nرقم الحساب: 242-379501-001 \n<br>\nSA7745000000242379501001 : رقم الايبان\n<br>\nإسم البنك: البنك السعودي الأول\n<br>\nSABBSAR : رمز سويفت \n<br>\nSAR : العملة\n<br> \nإسم الحساب: شركة ساحل الغربية لخدمات الموانىء  \n<br> \nرقم السجل التجاري: 4030534211 \n<br>\nرقم الحساب: 242-379501-001 \n<br>\nSA77450'),
(18, 'footerEN', 'Below are the details of the aforementioned account with <br> First Saudi Bank   \n<br>\nAccount name: West Coast Port Services Company\n<br>\nC.R number: 4030534211 \n<br>\n	Account number: 001-379501-242\n<br>\nIBAN number: SA7745000000242379501001 \n<br>\nBank name: First Saudi Bank\n<br>\nCurrency: SAR \n<br>\nSWIFT code: SABBSAR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;