-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 06:45 AM
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
(20, 'companyLogo', 'ECPO_logo_s1.png', 'text'),
(21, 'company_vat', '311940454500003', 'text'),
(22, 'port_name', 'ميناء جدة الإسلامي', 'text'),
(23, 'companyXLogo', 'ECPO_xlogo_s1.png', 'text'),
(24, 'companySlog', 'ECPO', 'text');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
