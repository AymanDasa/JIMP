-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 10:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `value` text DEFAULT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'text',
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `value`, `type`, `active`) VALUES
(1, 'name_user1', 'اسم معد البيان', 'text', 1),
(2, 'job_user1', 'معد البيان', 'text', 1),
(3, 'name_user2', 'اسم مدير المحاسبة', 'text', 1),
(4, 'job_user2', 'مدير المحاسبة', 'text', 1),
(5, 'name_user3', 'اسم المدير المالي', 'text', 1),
(6, 'job_user3', 'المدير المالي', 'text', 1),
(7, 'name_user4', '', 'text', 1),
(8, 'job_user4', '', 'text', 1),
(9, 'name_user5', '', 'text', 1),
(10, 'job_user5', '', 'text', 1),
(11, 'IBAN', 'SA07745000000242379501001', 'text', 1),
(12, 'invoiceStart', 'JBI-', 'text', 1),
(13, 'com_fax', '', 'text', 1),
(14, 'vat', '15', 'text', 1),
(15, 'AdressMamwani', '<span style=\"font-size:8pt\" lang=\"ar-SA\">\nالمملكة العربية السعودية \n<br>\nالهيئة العامة للموانئ\n<br>\nميناء جدة الإسلامي\n<br>\nwww.ports.gov.sa\n</span>', 'textarea ', 0),
(16, 'AdressCompany', '<span lang=\"ar-SA\">   \nالمملكة العربية السعودية <br>\nشركة الزامل للخدمات البحرية <br>\n<span lang=\"ar-SA\">هـاتف :8696300 013</span>\n<br>\n<span lang=\"ar-SA\">فـاكس :8574202 013</span>      \n</span>', 'textarea ', 0),
(17, 'footerAR', 'فيما يلي تفاصيل الحساب المذكور مع<br>البنك السعودي الأول\n<br>\nإسم الحساب: شركة ساحل الشرق لخدمات الموانىء\n<br>\nرقم السجل التجاري: 2051252156\n<br>\nرقم الحساب:   001-379543-242\n<br>\nSA07745000000242379501001 : رقم الايبان\n<br>\nإسم البنك: البنك السعودي الأول\n<br>\nSABBSAR : رمز سويفت\n<br>\nSAR : العملة\nSA77450', 'text', 0),
(18, 'footerEN', 'Below are the details of the aforementioned account with <br> First Saudi Bank   \n<br>\nAccount name: East Coast Port Services Company\n<br>\nC.R number: 2051252156\n<br>\nAccount number: 242-379543-001\n<br>\nIBAN number: SA07745000000242379501001\n<br>\nBank name: First Saudi Bank\n<br>\nCurrency: SAR \n<br>\nSWIFT code: SABBSAR', 'text', 0),
(19, 'mawniLogo', 'mawani.png', 'text', 1),
(20, 'companyLogo', 'ECPS_logo_s1.png', 'text', 1),
(21, 'company_vat', '311940431200003', 'text', 1),
(22, 'port_name', 'ميناء الجبيل الصناعي', 'text', 1),
(23, 'companyXLogo', 'ECPS_xlogo_s1.png', 'text', 1),
(24, 'companySlog', 'ECPS', 'text', 1),
(25, 'LIMIT', '500', 'text', 1),
(26, 'CompanyName', 'شركة ساحل الشرق لخدمات الموانئ', 'text', 1),
(27, 'CompanyNam', 'شركة ساحل الشرق لخدمات الموانئ', 'text', 1),
(30, 'EmptyLineEn', 'Contract No', 'text', 1),
(31, 'EmptyLineAr', 'رقم العقد', 'text', 1),
(32, 'PortPercentage', '10', 'text', 1),
(33, 'Activate2FA', '0', 'text', 0),
(34, 'AfterMarch', '0', 'text', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
