-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 09:12 AM
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
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `alog_id` int(10) NOT NULL,
  `alog_time` datetime NOT NULL DEFAULT current_timestamp(),
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
(1, '2024-03-09 23:08:31', 'agent', 'شركة', 'Add  Agent', 'aymanoz', 'AgentNameAr:شركة + AgentCR:85988663= AgentNameEn:Compnay    '),
(2, '2024-03-09 23:09:06', 'ship', 'Ship Name', 'Add Ship', 'aymanoz', 'ShipName:Ship Name + IMO:114477114477  +  Weight:15500  + VAT:1    '),
(3, '2024-03-09 23:09:26', 'invoice', '1', 'Add New Invoice', 'aymanoz', 'Inovice 1MSTOTAL:17130 + SSTOTAL:0= TOTAL:17130  (VAT)= 2569.5 VAT_TOTAL 19699.5 '),
(4, '2024-03-09 23:09:28', 'invoice', '1', 'Update Invoice', 'aymanoz', 'Approved:1   '),
(5, '2024-03-10 23:45:43', 'invoice', '105', 'Add New Invoice', 'aymanoz', 'Inovice 105MSTOTAL:5055.2 + SSTOTAL:0= TOTAL:5055.2  (VAT)= 0 VAT_TOTAL 5055.2 '),
(6, '2024-03-10 23:45:48', 'invoice', '105', 'Update Invoice', 'aymanoz', 'Approved:105   '),
(7, '2024-03-11 18:01:50', 'agent', '249', 'Update Agent', 'aymanoz', 'AgentID:249 + AgentNameAr:الشركة العالمية للمحروقات المحدودة  +  AgentCR:VAT: 3002525000025000254  + AgentNameEn:INTERNATIONAL BUNKERING CO.LTD.    '),
(8, '2024-03-11 18:02:44', 'agent', '249', 'Update Agent', 'aymanoz', 'AgentID:249 + AgentNameAr:الشركة العالمية للمحروقات المحدودة  +  AgentCR:  + AgentNameEn:INTERNATIONAL BUNKERING CO.LTD.    '),
(9, '2024-03-11 18:49:46', 'agent', '249', 'Update Agent', 'aymanoz', 'AgentID:249 + AgentNameAr:الشركة العالمية للمحروقات المحدودة  +  AgentCR:VAT: 35552250000025550002  + AgentNameEn:INTERNATIONAL BUNKERING CO.LTD.    '),
(10, '2024-03-11 19:08:04', 'invoice', '218', 'Add New Invoice', 'aymanoz', 'Inovice 218MSTOTAL:15030 + SSTOTAL:0= TOTAL:15030  (VAT)= 2254.5 VAT_TOTAL 17284.5 '),
(11, '2024-03-11 19:08:06', 'invoice', '218', 'Update Invoice', 'aymanoz', 'Approved:218   '),
(12, '2024-03-11 19:08:16', 'invoice', '218', 'Update Invoice', 'aymanoz', 'Inovice 218MSTOTAL:15030 + SSTOTAL:0= TOTAL:15030  (VAT)= 2254.5 VAT_TOTAL 17284.5 '),
(13, '2024-03-11 19:08:18', 'invoice', '218', 'Update Invoice', 'aymanoz', 'Approved:218   '),
(14, '2024-03-12 01:51:08', 'agent', '1', 'Update Agent', 'aymanoz', 'AgentID:1 + AgentNameAr:الحاج عبدالله علي رضا و شركاه المحدوده  +  AgentCR:VAT : 300252515200002520  + AgentNameEn:H. ALI  REZA    ');

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
(1, '910004', 'الحاج عبدالله علي رضا و شركاه المحدوده', 'H. ALI  REZA', '8324133', 'VAT : 300252515200002520', '', '', '', '', 'Dammam', 'Saudia Arabia', '', 'MR. SAFWAT(119)', '', 0, 1, '', '', 0),
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
(249, '', 'الشركة العالمية للمحروقات المحدودة', 'INTERNATIONAL BUNKERING CO.LTD.', '', 'VAT: 35552250000025550002', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
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
(263, '', 'شركة امداد الغربية للمنتجات البترولية', 'WESTERN SUPPLY CO. SA', '', 'EDM4030', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(264, '', 'الوكالات المتحدة UAS', 'HAPAG LLOYD SAUDI LTD.', '', 'UAS4030', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(265, '', 'مؤسسة حسن الحربي ', 'HASSAN ALHARBI CO. HASCO', '', '', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(266, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(267, '', 'شركة الملاحية للوكالات البحرية', 'MARITIME CO. FOR MARINE AGENCIES', '', 'MACNA4030', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0),
(268, '', 'شركة النقرة الذكية للشحن البحري', 'SMART', '', 'SMART4030386610', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0);

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
-- Stand-in structure for view `full_invoice_view`
-- (See below for the actual view)
--
CREATE TABLE `full_invoice_view` (
`InvoiceID` int(10)
,`ShipID` int(10)
,`ShipName` varchar(50)
,`ShipWeight` int(10)
,`AgentID` int(10)
,`AgentNameAr` text
,`AgentNameEn` text
,`ServiceType` varchar(50)
,`ServiceTypeName` varchar(50)
,`ServiceTypeFactor` double
,`InvoiceDate` datetime
,`InvoiceDateT` varchar(50)
,`ArrivalDate` datetime
,`ArrivalDateT` varchar(50)
,`DepartureDate` datetime
,`DepartureDateT` varchar(50)
,`PeriodDays` int(10)
,`MSericeBathPrice` double
,`AnchorageEntry` datetime
,`AnchorageEntryT` varchar(50)
,`AnchorageLeave` datetime
,`AnchorageLeaveT` varchar(50)
,`AnchorageDays` int(10)
,`MSericeAnchoragePrice` double
,`MovePort1` varchar(50)
,`MovePort2` varchar(50)
,`MovePort3` varchar(50)
,`MovePortPrice` double
,`TripNo` varchar(50)
,`DockingNo` varchar(50)
,`RouteNo` varchar(50)
,`ShiftedNo` varchar(50)
,`Reason` text
,`MSFraction1` double
,`MSFraction2` double
,`MSFraction3` double
,`MService1` varchar(50)
,`MService2` varchar(50)
,`MService3` varchar(50)
,`MSericeInPrice` double
,`MSericeOutPrice` double
,`MSTOTAL` double
,`SScode1` varchar(9)
,`Description1` varchar(200)
,`SSName1` text
,`SSUnit1` text
,`SSQut1` text
,`SSPrice1` text
,`SSNote1` text
,`SSUPrice1` text
,`SScode2` varchar(9)
,`Description2` varchar(200)
,`SSName2` text
,`SSUnit2` text
,`SSQut2` text
,`SSPrice2` text
,`SSNote2` text
,`SSUPrice2` text
,`SScode3` varchar(9)
,`Description3` varchar(200)
,`SSName3` text
,`SSUnit3` text
,`SSQut3` text
,`SSPrice3` text
,`SSNote3` text
,`SSUPrice3` text
,`SScode4` varchar(9)
,`Description4` varchar(200)
,`SSName4` text
,`SSUnit4` text
,`SSQut4` text
,`SSPrice4` text
,`SSNote4` text
,`SSUPrice4` text
,`SScode5` varchar(9)
,`Description5` varchar(200)
,`SSUnit5` text
,`SSQut5` text
,`SSName5` text
,`SSNote5` text
,`SSUPrice5` text
,`SSPrice5` text
,`SSTOTAL` double
,`MGPrice` double
,`TOTAL` double
,`VAT` double
,`is_VAT` int(4)
,`Status` int(10)
,`VAT_TOTAL` double
);

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
(20, 'companyLogo', 'WCPS_logo_s1.png', 'text'),
(21, 'company_vat', '311940454500003', 'text'),
(22, 'port_name', 'ميناء جدة الإسلامي', 'text'),
(23, 'companyXLogo', 'WCPS_xlogo_s1.png', 'text'),
(24, 'companySlog', 'WCPS', 'text'),
(25, 'LIMIT', '200', 'text'),
(26, 'CompanyName', 'شركة ساحل الغربية لخدمات الموانئ', 'text'),
(27, 'PortPercentage', '10', 'text'),
(28, 'companyNameEn', 'Western Coast Port Services Company ', 'text'),
(29, 'EmptyLineEn', 'Route No', 'text'),
(30, 'EmptyLineAr', 'معلومات', 'text');

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
(44, 15073, 'VOS HESTIA', 1678, 236, 'شركة الخليج العربي للشحن ', 'ARABIAN GULF SHIPPING COMPANY', '1', 'عادية', 1, '2024-02-25 11:55:00', '11:55', '1445/08/15', '2024-02-19 12:00:00', '12:00', '1445/08/09', '2024-02-21 23:10:00', '23:10', '1445/08/11', 3, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '11', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1354.7, 0, 0, 3854.7, 2500, 1354.7, 0, 0, 3854.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3300, '', '', '', 7709.4, 11009.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 11009.4, 1, 0, 11009.4, 800, ''),
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
(67, 15093, 'TIMON', 75604, 256, 'المؤسسة العربية للتجارة والملاحة ', 'ARABIAN EST. FOR TRAADE AND SHIPPING, LTD.', '1', 'عادية', 1, '2024-02-26 08:19:00', '08:19', '1445/08/16', '2024-02-23 09:33:00', '09:33', '1445/08/13', '2024-02-24 03:06:00', '03:06', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R2', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 6060.4, 13475.4, 2500, 2875, 2040, 6060.4, 13475.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 26950.8, 29150.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 29150.8, 1, 0, 29150.8, 800, ''),
(68, 15094, 'MSC MELISSA', 73819, 246, 'شركة البحر الأبيض المتوسط للملاحة السعودية', 'MSC. Mediterranean shipping company', '1', 'عادية', 1, '2024-02-27 08:31:00', '08:31', '1445/08/17', '2024-02-23 09:29:00', '09:29', '1445/08/13', '2024-02-24 01:38:00', '01:38', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R2', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 5881.9, 13296.9, 2500, 2875, 2040, 5881.9, 13296.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 26593.8, 28793.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 28793.8, 1, 0, 28793.8, 800, ''),
(69, 15074, 'SINNA', 9807, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-02-27 08:36:00', '08:36', '1445/08/17', '2024-02-23 22:10:00', '22:10', '1445/08/13', '2024-02-24 03:27:00', '03:27', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '19', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 1157.19, 0, 6532.19, 2500, 2875, 1157.19, 0, 6532.19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 13064.38, 14564.38, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14564.38, 1, 0, 14564.38, 800, ''),
(70, 15095, 'ADEL 1', 8314, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-27 09:10:00', '09:10', '1445/08/17', '2024-02-21 12:42:00', '12:42', '1445/08/11', '2024-02-24 03:36:00', '03:36', '1445/08/14', 3, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '1', '', '', '', '37', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 903.38, 0, 6278.38, 2500, 2875, 903.38, 0, 6278.38, 3139.19, 1250, 1437.5, 451.69, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3139.19, 4500, '', '', '', 15695.95, 20195.95, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 20195.95, 1, 0, 20195.95, 800, ''),
(71, 15096, 'SAFEEN PRIME', 26374, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-27 09:17:00', '09:17', '1445/08/17', '2024-02-23 18:55:00', '18:55', '1445/08/13', '2024-02-24 04:45:00', '04:45', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '6', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1137.4, 8552.4, 2500, 2875, 2040, 1137.4, 8552.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 17104.8, 19304.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 19304.8, 1, 0, 19304.8, 800, ''),
(72, 15097, 'GRAND BALTIMORA', 62134, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-02-27 09:25:00', '09:25', '1445/08/17', '2024-02-23 12:27:00', '12:27', '1445/08/13', '2024-02-24 08:11:00', '08:11', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '22', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 4713.4, 12128.4, 2500, 2875, 2040, 4713.4, 12128.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 24256.8, 26456.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 26456.8, 1, 0, 26456.8, 800, ''),
(73, 15038, 'PRINCESS HIYAM', 1995, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-02-27 09:32:00', '09:32', '1445/08/17', '2024-02-22 20:40:00', '20:40', '1445/08/12', '2024-02-24 09:10:00', '09:10', '1445/08/14', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '1', '', '', '', '35', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1719.25, 0, 0, 4219.25, 2500, 1719.25, 0, 0, 4219.25, 2109.625, 1250, 859.625, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2109.625, 2200, '', '', '', 10548.125, 12748.125, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 12748.125, 1, 0, 12748.125, 800, ''),
(74, 15098, 'BARAKAT', 2568, 255, 'مؤسسة سليمان سعيد عبده الجابري للنقل', 'Sulaiman Saeed Abdo Al Jabri Transport Corporation', '1', 'عادية', 1, '2024-02-27 09:38:00', '09:38', '1445/08/17', '2024-02-23 12:30:00', '12:30', '1445/08/13', '2024-02-24 10:40:00', '10:40', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '36', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2378.2, 0, 0, 4878.2, 2500, 2378.2, 0, 0, 4878.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1100, '', '', '', 9756.4, 10856.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 10856.4, 1, 0, 10856.4, 800, ''),
(75, 15099, 'SEASPAN SAIGON', 39941, 264, 'الوكالات المتحدة UAS', 'HAPAG LLOYD SAUDI LTD.', '1', 'عادية', 1, '2024-02-27 09:55:00', '09:55', '1445/08/17', '2024-02-23 07:20:00', '07:20', '1445/08/13', '2024-02-24 15:13:00', '15:13', '1445/08/14', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '54', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 2494.1, 9909.1, 2500, 2875, 2040, 2494.1, 9909.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 19818.2, 24218.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 24218.2, 1, 0, 24218.2, 800, ''),
(76, 15100, 'SFT TURKEY', 39941, 242, 'شركة ترايدنت السعودية للشحن', 'TRAIDENT SUADI ARABIA', '1', 'عادية', 1, '2024-02-27 10:06:00', '10:06', '1445/08/17', '2024-02-24 00:03:00', '00:03', '1445/08/14', '2024-02-24 12:45:00', '12:45', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 2494.1, 9909.1, 2500, 2875, 2040, 2494.1, 9909.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 19818.2, 22018.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 22018.2, 1, 0, 22018.2, 800, ''),
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
(98, 15117, 'CHARBEL', 17859, 251, 'شركة الملاحة البحرية العربية السعودية عزيز عرب', 'THE SHIPPING CORPORATION SAUDI ARABIA LTD.', '1', 'عادية', 1, '2024-02-29 11:29:00', '11:29', '1445/08/19', '2024-02-25 22:00:00', '22:00', '1445/08/15', '2024-02-26 07:35:00', '07:35', '1445/08/16', 1, '2024-02-25 22:00:00', '22:00', '1445/08/15', '2024-02-26 07:35:00', '07:35', '1445/08/16', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
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
(123, 15135, 'ROYAL 1', 6577, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-02-29 13:55:00', '13:55', '1445/08/19', '2024-02-26 23:55:00', '23:55', '1445/08/16', '2024-02-28 13:45:00', '13:45', '1445/08/18', 2, '2024-02-26 23:55:00', '23:55', '1445/08/16', '2024-02-28 13:45:00', '13:45', '1445/08/18', 2, 1000, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 1000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1000, 1, 0, 1000, 800, ''),
(124, 15136, 'OSCAR ', 23494, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-02-29 14:02:00', '14:02', '1445/08/19', '2024-02-28 07:15:00', '07:15', '1445/08/18', '2024-02-28 16:10:00', '16:10', '1445/08/18', 1, '2024-02-28 07:15:00', '07:15', '1445/08/18', '2024-02-28 16:10:00', '16:10', '1445/08/18', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
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
(149, 15132, 'SANTA INES', 86601, 248, 'انشكيب لخدمات الشحن السعودية المحدودة', 'INCHCAPE SHIPPING SERVICES SAUDI CO.', '1', 'عادية', 1, '2024-02-29 13:48:00', '13:48', '1445/08/19', '2024-02-26 12:00:00', '12:00', '1445/08/16', '2024-02-26 14:30:00', '14:30', '1445/08/16', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '39', '', '', '', '', '', '', '', '', '', 'حتى 1200 حصان', '', '', '', '', 'JED-20', '', '', '', '', 'ساعة', '', '', '', '', '1', '', '', '', '', '600', '', '', '', '', '600', '', '', '', '', 600, 600, 1, 0, 600, 800, ''),
(150, 15151, 'AL AWAD 1', 1687, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-03-05 09:23:00', '09:23', '1445/08/24', '2024-02-28 22:10:00', '22:10', '1445/08/18', '2024-03-01 03:23:00', '03:23', '1445/08/20', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '34', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1365.05, 0, 0, 3865.05, 2500, 1365.05, 0, 0, 3865.05, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 7730.1, 9930.1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 9930.1, 1, 0, 9930.1, 800, ''),
(151, 15152, 'SEA ETIQUETTE', 32969, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-03-05 09:44:00', '09:44', '1445/08/24', '2024-02-24 09:10:00', '09:10', '1445/08/14', '2024-03-01 03:15:00', '03:15', '1445/08/20', 6, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '38', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1796.9, 9211.9, 2500, 2875, 2040, 1796.9, 9211.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13200, '', '', '', 18423.8, 31623.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 31623.8, 1, 0, 31623.8, 800, ''),
(152, 15048, 'GFS JUNO', 25535, 234, 'جلوب للخدمات البحرية', 'Globe marine services', '1', 'عادية', 1, '2024-03-05 09:48:00', '09:48', '1445/08/24', '2024-02-28 21:05:00', '21:05', '1445/08/18', '2024-03-01 06:20:00', '06:20', '1445/08/20', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '1', '', '', '', 'B4', '', 'B3', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1053.5, 8468.5, 2500, 2875, 2040, 1053.5, 8468.5, 4234.25, 1250, 1437.5, 1020, 526.75, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4234.25, 4400, '', '', '', 21171.25, 25571.25, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 25571.25, 1, 0, 25571.25, 800, ''),
(153, 15153, 'SIMBA', 70704, 256, 'المؤسسة العربية للتجارة والملاحة ', 'ARABIAN EST. FOR TRAADE AND SHIPPING, LTD.', '1', 'عادية', 1, '2024-03-05 09:56:00', '09:56', '1445/08/24', '2024-02-28 22:20:00', '22:20', '1445/08/18', '2024-03-01 06:40:00', '06:40', '1445/08/20', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R1', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 5570.4, 12985.4, 2500, 2875, 2040, 5570.4, 12985.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 25970.8, 30370.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 30370.8, 1, 0, 30370.8, 800, ''),
(154, 15154, 'KOTA CANTIK', 76633, 6, 'شركة الشرق للتجارة والملاحة المحدودة', 'ORIENTAL Com. & Shipping Co. ', '1', 'عادية', 1, '2024-03-05 10:03:00', '10:03', '1445/08/24', '2024-02-29 08:27:00', '08:27', '1445/08/19', '2024-03-01 07:10:00', '07:10', '1445/08/20', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 6163.3, 13578.3, 2500, 2875, 2040, 6163.3, 13578.3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 27156.6, 29356.6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 29356.6, 1, 0, 29356.6, 800, ''),
(155, 15051, 'FRONT SIRIUS', 62849, 238, 'شركة فيصل منصور حجى التجارية FMII', 'FAISAL M.HIGGI EST.', '1', 'عادية', 1, '2024-03-05 10:06:00', '10:06', '1445/08/24', '2024-03-01 06:15:00', '06:15', '1445/08/20', '2024-03-01 08:27:00', '08:27', '1445/08/20', 1, '2024-03-01 06:15:00', '06:15', '1445/08/20', '2024-03-01 08:27:00', '08:27', '1445/08/20', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(156, 15155, 'FATMA S', 2450, 265, 'مؤسسة حسن الحربي ', 'HASSAN ALHARBI CO. HASCO', '1', 'عادية', 1, '2024-03-05 10:29:00', '10:29', '1445/08/24', '2024-03-01 02:39:00', '02:39', '1445/08/20', '2024-03-01 11:45:00', '11:45', '1445/08/20', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '7', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2242.5, 0, 0, 4742.5, 2500, 2242.5, 0, 0, 4742.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1100, '', '', '', 9485, 10585, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 10585, 1, 0, 10585, 800, ''),
(157, 15156, 'KALINKA', 26897, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-03-05 10:47:00', '10:47', '1445/08/24', '2024-03-01 06:30:00', '06:30', '1445/08/20', '2024-03-01 11:18:00', '11:18', '1445/08/20', 1, '2024-03-01 06:30:00', '06:30', '1445/08/20', '2024-03-01 11:18:00', '11:18', '1445/08/20', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(158, 15157, 'MARSA VICTORY', 12004, 1, 'الحاج عبدالله علي رضا و شركاه المحدوده', 'H. ALI  REZA', '1', 'عادية', 1, '2024-03-05 10:57:00', '10:57', '1445/08/24', '2024-02-28 09:20:00', '09:20', '1445/08/18', '2024-03-01 19:05:00', '19:05', '1445/08/20', 3, '2024-02-29 06:28:00', '06:28', '1445/08/19', '2024-03-01 08:10:00', '08:10', '1445/08/20', 2, 1000, '1', '', '', '', '53', '', 'B2', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 1530.68, 0, 6905.68, 2500, 2875, 1530.68, 0, 6905.68, 3452.84, 1250, 1437.5, 765.34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3452.84, 4500, '', '', '', 17264.2, 22764.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 22764.2, 1, 0, 22764.2, 800, ''),
(159, 15158, 'EFES', 4086, 253, 'وكالة أطلس', 'ATLAS SHIPPING AGENCY', '1', 'عادية', 1, '2024-03-05 09:08:00', '09:08', '1445/08/24', '2024-03-01 11:20:00', '11:20', '1445/08/20', '2024-03-01 20:20:00', '20:20', '1445/08/20', 1, '2024-03-01 11:20:00', '11:20', '1445/08/20', '2024-03-01 20:20:00', '20:20', '1445/08/20', 1, 500, '', '', '', '', 'E2', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(160, 15159, 'FLEUR N', 35887, 264, 'الوكالات المتحدة UAS', 'HAPAG LLOYD SAUDI LTD.', '1', 'عادية', 1, '2024-03-05 11:12:00', '11:12', '1445/08/24', '2024-02-28 19:27:00', '19:27', '1445/08/18', '2024-03-01 21:12:00', '21:12', '1445/08/20', 3, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'B1', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 2088.7, 9503.7, 2500, 2875, 2040, 2088.7, 9503.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6600, '', '', '', 19007.4, 25607.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 25607.4, 1, 0, 25607.4, 800, ''),
(161, 15160, ' NCC WAFA', 29785, 244, 'شركة بحري   ', 'NATIONAL SHIPPING AGENCIES CO.LTD', '1', 'عادية', 1, '2024-03-05 11:20:00', '11:20', '1445/08/24', '2024-03-01 16:17:00', '16:17', '1445/08/20', '2024-03-01 22:45:00', '22:45', '1445/08/20', 1, '2024-03-01 16:17:00', '16:17', '1445/08/20', '2024-03-01 22:45:00', '22:45', '1445/08/20', 1, 500, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(162, 15059, 'SIDRA AHLAM', 15095, 244, 'شركة بحري   ', 'NATIONAL SHIPPING AGENCIES CO.LTD', '1', 'عادية', 1, '2024-03-05 11:22:00', '11:22', '1445/08/24', '2024-03-01 02:04:00', '02:04', '1445/08/20', '2024-03-02 00:11:00', '00:11', '1445/08/21', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '51', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 9.5, 7424.5, 2500, 2875, 2040, 9.5, 7424.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 14849, 17049, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 17049, 1, 0, 17049, 800, ''),
(163, 15161, 'AL KAHERA', 6203, 267, 'شركة الملاحية للوكالات البحرية', 'MARITIME CO. FOR MARINE AGENCIES', '1', 'عادية', 1, '2024-03-06 13:03:00', '13:03', '1445/08/25', '2024-02-24 10:44:00', '10:44', '1445/08/14', '2024-02-24 17:44:00', '17:44', '1445/08/14', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '43', '', '', '', '', 0.5, 0.5, 1, '1', '1', '1', 1250, 1437.5, 272.255, 0, 2959.755, 1250, 1437.5, 272.255, 0, 2959.755, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 5919.51, 7419.51, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 7419.51, 1, 0, 7419.51, 800, ''),
(164, 15053, 'DORRAT JEDDAH', 6712, 245, 'توكيلات باعبود للتجارة والملاحة BTS', 'BAABOUD TRADING &amp; SHIPPING,LTD.', '1', 'عادية', 1, '2024-03-06 13:05:00', '13:05', '1445/08/25', '2024-02-29 16:46:00', '16:46', '1445/08/19', '2024-03-02 20:02:00', '20:02', '1445/08/21', 3, '2024-02-29 03:38:00', '03:38', '1445/08/19', '2024-02-29 15:09:00', '15:09', '1445/08/19', 1, 500, '', '', '', '', '20', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 631.04, 0, 6006.04, 2500, 2875, 631.04, 0, 6006.04, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4500, '', '', '', 12012.08, 17012.08, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 17012.08, 1, 0, 17012.08, 800, ''),
(165, 15043, 'HAJH GHSN J', 2438, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-03-06 13:40:00', '13:40', '1445/08/25', '2024-02-28 17:40:00', '17:40', '1445/08/18', '2024-03-02 11:14:00', '11:14', '1445/08/21', 3, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '37', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2228.7, 0, 0, 4728.7, 2500, 2228.7, 0, 0, 4728.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3300, '', '', '', 9457.4, 12757.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 12757.4, 1, 0, 12757.4, 800, ''),
(166, 15086, 'LEO', 27104, 234, 'جلوب للخدمات البحرية', 'Globe marine services', '1', 'عادية', 1, '2024-03-06 13:42:00', '13:42', '1445/08/25', '2024-02-29 03:34:00', '03:34', '1445/08/19', '2024-03-02 00:40:00', '00:40', '1445/08/21', 2, '2024-03-01 01:36:00', '01:36', '1445/08/20', '2024-03-01 08:05:00', '08:05', '1445/08/20', 1, 500, '1', '1', '', '', '52', '', 'R1', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1210.4, 8625.4, 2500, 2875, 2040, 1210.4, 8625.4, 4312.7, 1250, 1437.5, 1020, 605.2, 4312.7, 1250, 1437.5, 1020, 605.2, 0, 0, 0, 0, 0, 8625.4, 4400, '', '', '', 25876.2, 30776.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 30776.2, 1, 0, 30776.2, 800, ''),
(167, 15162, 'GFS RUBY', 18321, 234, 'جلوب للخدمات البحرية', 'Globe marine services', '1', 'عادية', 1, '2024-03-06 13:49:00', '13:49', '1445/08/25', '2024-02-29 09:30:00', '09:30', '1445/08/19', '2024-03-02 02:31:00', '02:31', '1445/08/21', 2, '2024-02-27 10:31:00', '10:31', '1445/08/17', '2024-02-29 08:05:00', '08:05', '1445/08/19', 2, 1000, '1', '', '', '', '54', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 332.1, 7747.1, 2500, 2875, 2040, 332.1, 7747.1, 3873.55, 1250, 1437.5, 1020, 166.05, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3873.55, 4400, '', '', '', 19367.75, 24767.75, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 24767.75, 1, 0, 24767.75, 800, ''),
(168, 15032, 'TOPAZ LENA', 3183, 236, 'شركة الخليج العربي للشحن ', 'ARABIAN GULF SHIPPING COMPANY', '1', 'عادية', 1, '2024-03-06 13:57:00', '13:57', '1445/08/25', '2024-02-29 20:25:00', '20:25', '1445/08/19', '2024-03-02 02:37:00', '02:37', '1445/08/21', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '1', '1', '', '', '53', '', '7-9', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 31.11, 0, 5406.11, 2500, 2875, 31.11, 0, 5406.11, 2703.055, 1250, 1437.5, 15.555, 0, 2703.055, 1250, 1437.5, 15.555, 0, 0, 0, 0, 0, 0, 5406.11, 3000, '', '', '', 16218.33, 19218.33, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 19218.33, 1, 0, 19218.33, 800, ''),
(169, 15163, 'CMA CGM T.ROOSEVELT', 141950, 235, 'شركة سي ام ايه سي جي ام العربيه السعودية المحدودة', 'CMA CGM K.S.A Ltd.', '1', 'عادية', 1, '2024-03-06 14:04:00', '14:04', '1445/08/25', '2024-03-01 01:55:00', '01:55', '1445/08/20', '2024-03-02 11:41:00', '11:41', '1445/08/21', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R2', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 12695, 20110, 2500, 2875, 2040, 12695, 20110, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 40220, 44620, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 44620, 1, 0, 44620, 800, ''),
(170, 15084, 'AL MABROUUKA 11', 1840, 255, 'مؤسسة سليمان سعيد عبده الجابري للنقل', 'Sulaiman Saeed Abdo Al Jabri Transport Corporation', '1', 'عادية', 1, '2024-03-06 14:07:00', '14:07', '1445/08/25', '2024-03-01 02:29:00', '02:29', '1445/08/20', '2024-03-02 04:49:00', '04:49', '1445/08/21', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '36', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1541, 0, 0, 4041, 2500, 1541, 0, 0, 4041, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 8082, 10282, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 10282, 1, 0, 10282, 800, ''),
(171, 15076, 'ALMABROUKA 10', 1443, 255, 'مؤسسة سليمان سعيد عبده الجابري للنقل', 'Sulaiman Saeed Abdo Al Jabri Transport Corporation', '1', 'عادية', 1, '2024-03-06 14:11:00', '14:11', '1445/08/25', '2024-02-29 23:50:00', '23:50', '1445/08/19', '2024-03-02 02:50:00', '02:50', '1445/08/21', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '36', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1084.45, 0, 0, 3584.45, 2500, 1084.45, 0, 0, 3584.45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 7168.9, 9368.9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 9368.9, 1, 0, 9368.9, 800, ''),
(172, 15083, 'TRANSMAR LEGACY', 22801, 256, 'المؤسسة العربية للتجارة والملاحة ', 'ARABIAN EST. FOR TRAADE AND SHIPPING, LTD.', '1', 'عادية', 1, '2024-03-06 14:16:00', '14:16', '1445/08/25', '2024-02-29 21:00:00', '21:00', '1445/08/19', '2024-03-02 02:46:00', '02:46', '1445/08/21', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 780.1, 8195.1, 2500, 2875, 2040, 780.1, 8195.1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 16390.2, 20790.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 20790.2, 1, 0, 20790.2, 800, ''),
(173, 15033, 'AMMAN', 5753, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-03-06 14:18:00', '14:18', '1445/08/25', '2024-03-01 18:00:00', '18:00', '1445/08/20', '2024-03-02 02:02:00', '02:02', '1445/08/21', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '18', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 468.01, 0, 5843.01, 2500, 2875, 468.01, 0, 5843.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 11686.02, 13186.02, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 13186.02, 1, 0, 13186.02, 800, ''),
(174, 15164, 'PANTA REI 1', 59158, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-03-06 14:26:00', '14:26', '1445/08/25', '2024-03-02 07:30:00', '07:30', '1445/08/21', '2024-03-02 19:58:00', '19:58', '1445/08/21', 1, '2024-03-02 07:30:00', '07:30', '1445/08/21', '2024-03-02 19:58:00', '19:58', '1445/08/21', 1, 500, '', '', '', '', 'E1', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(175, 15165, 'GARLAND', 26966, 253, 'وكالة أطلس', 'ATLAS SHIPPING AGENCY', '1', 'عادية', 1, '2024-03-06 14:42:00', '14:42', '1445/08/25', '2024-03-02 11:30:00', '11:30', '1445/08/21', '2024-03-02 17:21:00', '17:21', '1445/08/21', 1, '2024-03-02 11:30:00', '11:30', '1445/08/21', '2024-03-02 17:21:00', '17:21', '1445/08/21', 1, 500, '', '', '', '', 'F', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(176, 15166, 'IXORA', 63413, 258, 'شركة الخماسية', 'AL KHOMASIA SHHIPING AGENCIES', '1', 'عادية', 1, '2024-03-06 14:46:00', '14:46', '1445/08/25', '2024-03-01 18:00:00', '18:00', '1445/08/20', '2024-03-02 04:50:00', '04:50', '1445/08/21', 1, '2024-03-01 18:00:00', '18:00', '1445/08/20', '2024-03-02 04:50:00', '04:50', '1445/08/21', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(177, 15168, 'VANTAGE LADY', 36518, 249, 'الشركة العالمية للمحروقات المحدودة', 'INTERNATIONAL BUNKERING CO.LTD.', '1', 'عادية', 1, '2024-03-06 14:52:00', '14:52', '1445/08/25', '2024-03-01 22:04:00', '22:04', '1445/08/20', '2024-03-02 04:12:00', '04:12', '1445/08/21', 1, '2024-03-01 22:04:00', '22:04', '1445/08/20', '2024-03-02 04:12:00', '04:12', '1445/08/21', 1, 500, '', '', '', '', 'F2', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(178, 15074, 'SINNA', 9807, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-03-07 09:44:00', '09:44', '1445/08/26', '2024-02-27 15:07:00', '15:07', '1445/08/17', '2024-02-27 19:18:00', '19:18', '1445/08/17', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '19', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 1157.19, 0, 6532.19, 2500, 2875, 1157.19, 0, 6532.19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 13064.38, 14564.38, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14564.38, 1, 0, 14564.38, 800, ''),
(179, 15075, 'AZIZ EXPRESS', 22874, 254, 'شركة نما ', 'NAMA SHIPPING CO.', '1', 'عادية', 1, '2024-03-07 09:49:00', '09:49', '1445/08/26', '2024-03-01 20:00:00', '20:00', '1445/08/20', '2024-03-03 23:43:00', '23:43', '1445/08/22', 3, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '15', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 787.4, 8202.4, 2500, 2875, 2040, 787.4, 8202.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6600, '', '', '', 16404.8, 23004.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 23004.8, 1, 0, 23004.8, 800, ''),
(180, 15169, 'JAZAN', 2438, 267, 'شركة الملاحية للوكالات البحرية', 'MARITIME CO. FOR MARINE AGENCIES', '1', 'عادية', 1, '2024-03-07 09:55:00', '09:55', '1445/08/26', '2024-03-01 11:55:00', '11:55', '1445/08/20', '2024-03-03 16:08:00', '16:08', '1445/08/22', 3, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '43', '', '', '', '', 0.5, 0.5, 1, '1', '1', '1', 1250, 1114.35, 0, 0, 2364.35, 1250, 1114.35, 0, 0, 2364.35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3300, '', '', '', 4728.7, 8028.7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 8028.7, 1, 0, 8028.7, 800, ''),
(181, 15170, 'TRUST 1', 2975, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-03-07 10:01:00', '10:01', '1445/08/26', '2024-03-01 03:14:00', '03:14', '1445/08/20', '2024-03-03 05:55:00', '05:55', '1445/08/22', 3, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '35N', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2846.25, 0, 0, 5346.25, 2500, 2846.25, 0, 0, 5346.25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3300, '', '', '', 10692.5, 13992.5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 13992.5, 1, 0, 13992.5, 800, ''),
(182, 15171, 'JASMINE', 7624, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-03-07 10:07:00', '10:07', '1445/08/26', '2024-03-01 22:10:00', '22:10', '1445/08/20', '2024-03-03 19:13:00', '19:13', '1445/08/22', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '34', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 786.08, 0, 6161.08, 2500, 2875, 786.08, 0, 6161.08, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3000, '', '', '', 12322.16, 15322.16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 15322.16, 1, 0, 15322.16, 800, ''),
(183, 15050, 'WADI AL RAYAN', 34744, 235, 'شركة سي ام ايه سي جي ام العربيه السعودية المحدودة', 'CMA CGM K.S.A Ltd.', '1', 'عادية', 1, '2024-03-07 10:10:00', '10:10', '1445/08/26', '2024-03-01 23:28:00', '23:28', '1445/08/20', '2024-03-03 16:21:00', '16:21', '1445/08/22', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1974.4, 9389.4, 2500, 2875, 2040, 1974.4, 9389.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4400, '', '', '', 18778.8, 23178.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 23178.8, 1, 0, 23178.8, 800, ''),
(184, 15036, 'LADY MARIA', 998, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-03-07 10:13:00', '10:13', '1445/08/26', '2024-03-01 20:28:00', '20:28', '1445/08/20', '2024-03-03 14:00:00', '14:00', '1445/08/22', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '38', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 572.7, 0, 0, 3072.7, 2500, 572.7, 0, 0, 3072.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 6145.4, 8345.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 8345.4, 1, 0, 8345.4, 800, ''),
(185, 15172, 'MARONA STAR', 1895, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-03-07 10:20:00', '10:20', '1445/08/26', '2024-03-02 04:35:00', '04:35', '1445/08/21', '2024-03-03 11:08:00', '11:08', '1445/08/22', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '36', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1604.25, 0, 0, 4104.25, 2500, 1604.25, 0, 0, 4104.25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 8208.5, 10408.5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 10408.5, 1, 0, 10408.5, 800, ''),
(186, 15081, 'LADY RASHA', 1777, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-03-07 10:23:00', '10:23', '1445/08/26', '2024-03-01 16:23:00', '16:23', '1445/08/20', '2024-03-03 10:58:00', '10:58', '1445/08/22', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '37', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1468.55, 0, 0, 3968.55, 2500, 1468.55, 0, 0, 3968.55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 7937.1, 10137.1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 10137.1, 1, 0, 10137.1, 800, ''),
(187, 15124, 'WAN HAI 316', 27800, 252, 'الشركة الفنية الدولية', 'UTCL- UNIVERSAL TECHNICAL CO. LTD', '1', 'عادية', 1, '2024-03-07 10:28:00', '10:28', '1445/08/26', '2024-03-03 16:05:00', '16:05', '1445/08/22', '2024-03-04 01:14:00', '01:14', '1445/08/23', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '52/302', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1280, 8695, 2500, 2875, 2040, 1280, 8695, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 17390, 19590, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 19590, 1, 0, 19590, 800, ''),
(188, 15173, 'WAN HAI 613', 68687, 252, 'الشركة الفنية الدولية', 'UTCL- UNIVERSAL TECHNICAL CO. LTD', '1', 'عادية', 1, '2024-03-07 10:31:00', '10:31', '1445/08/26', '2024-03-03 08:20:00', '08:20', '1445/08/22', '2024-03-04 00:32:00', '00:32', '1445/08/23', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '53', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 5368.7, 12783.7, 2500, 2875, 2040, 5368.7, 12783.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 25567.4, 27767.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 27767.4, 1, 0, 27767.4, 800, ''),
(189, 15174, 'MSC LUISA', 75590, 246, 'شركة البحر الأبيض المتوسط للملاحة السعودية', 'MSC. Mediterranean shipping company', '1', 'عادية', 1, '2024-03-07 10:34:00', '10:34', '1445/08/26', '2024-03-02 20:05:00', '20:05', '1445/08/21', '2024-03-03 09:03:00', '09:03', '1445/08/22', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R2', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 6059, 13474, 2500, 2875, 2040, 6059, 13474, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 26948, 29148, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 29148, 1, 0, 29148, 800, ''),
(190, 15115, 'REMAH', 18724, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-03-07 10:40:00', '10:40', '1445/08/26', '2024-03-02 20:29:00', '20:29', '1445/08/21', '2024-03-03 04:55:00', '04:55', '1445/08/22', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '6', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 372.4, 7787.4, 2500, 2875, 2040, 372.4, 7787.4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 15574.8, 17774.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 17774.8, 1, 0, 17774.8, 800, ''),
(191, 15135, 'ROYAL 1', 6577, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-03-07 10:52:00', '10:52', '1445/08/26', '2024-03-02 10:10:00', '10:10', '1445/08/21', '2024-03-03 02:32:00', '02:32', '1445/08/22', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '21', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 608.09, 0, 5983.09, 2500, 2875, 608.09, 0, 5983.09, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 11966.18, 13466.18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 13466.18, 1, 0, 13466.18, 800, ''),
(192, 15175, 'LEGEND', 53661, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-03-07 10:58:00', '10:58', '1445/08/26', '2024-03-03 01:00:00', '01:00', '1445/08/22', '2024-03-03 11:32:00', '11:32', '1445/08/22', 1, '2024-03-03 01:00:00', '01:00', '1445/08/22', '2024-03-03 11:32:00', '11:32', '1445/08/22', 1, 500, '', '', '', '', 'F2', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(193, 15066, 'ELONA 11', 18848, 234, 'جلوب للخدمات البحرية', 'Globe marine services', '1', 'عادية', 1, '2024-03-10 11:42:00', '11:42', '1445/08/29', '2024-03-07 11:42:00', '11:42', '1445/08/26', '2024-03-07 11:42:00', '11:42', '1445/08/26', 0, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'SLIPWAY', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, '39', '', '', '', '', '', '', '', '', '', 'حتى 1200 حصان', '', '', '', '', '', '', '', '', '', 'ساعة', '', '', '', '', '1', '', '', '', '', '600', '', '', '', '', '600', '', '', '', '', 600, 600, 1, 0, 600, 800, '');
INSERT INTO `invoice` (`InvoiceID`, `ShipID`, `ShipName`, `ShipWeight`, `AgentID`, `AgentNameAr`, `AgentNameEn`, `ServiceType`, `ServiceTypeName`, `ServiceTypeFactor`, `InvoiceDate`, `InvoiceDateT`, `InvoiceDateH`, `ArrivalDate`, `ArrivalDateT`, `ArrivalDateH`, `DepartureDate`, `DepartureDateT`, `DepartureDateH`, `PeriodDays`, `AnchorageEntry`, `AnchorageEntryT`, `AnchorageEntryH`, `AnchorageLeave`, `AnchorageLeaveT`, `AnchorageLeaveH`, `AnchorageDays`, `MSericeAnchoragePrice`, `MovePort1`, `MovePort2`, `MovePort3`, `TripNo`, `DockingNo`, `RouteNo`, `ShiftedNo`, `Reason`, `Note`, `MSFraction1`, `MSFraction2`, `MSFraction3`, `MService1`, `MService2`, `MService3`, `CA0`, `CA1`, `CA2`, `CA3`, `MSericeInPrice`, `CB0`, `CB1`, `CB2`, `CB3`, `MSericeOutPrice`, `MA`, `MA0`, `MA1`, `MA2`, `MA3`, `MB`, `MB0`, `MB1`, `MB2`, `MB3`, `MC`, `MC0`, `MC1`, `MC2`, `MC3`, `MovePortPrice`, `MSericeBathPrice`, `MSNote1`, `MSNote2`, `MSNote3`, `MGPrice`, `MSTOTAL`, `SService1`, `SService2`, `SService3`, `SService4`, `SService5`, `SServiceCode1`, `SServiceCode2`, `SServiceCode3`, `SServiceCode4`, `SServiceCode5`, `SSName1`, `SSName2`, `SSName3`, `SSName4`, `SSName5`, `SSNote1`, `SSNote2`, `SSNote3`, `SSNote4`, `SSNote5`, `SSUnit1`, `SSUnit2`, `SSUnit3`, `SSUnit4`, `SSUnit5`, `SSQut1`, `SSQut2`, `SSQut3`, `SSQut4`, `SSQut5`, `SSUPrice1`, `SSUPrice2`, `SSUPrice3`, `SSUPrice4`, `SSUPrice5`, `SSPrice1`, `SSPrice2`, `SSPrice3`, `SSPrice4`, `SSPrice5`, `SSTOTAL`, `TOTAL`, `is_VAT`, `VAT`, `VAT_TOTAL`, `Status`, `OracleCode`) VALUES
(194, 15176, 'OCEAN AMBITION', 35812, 260, 'شركة مماس لخدمات الموانيء المحدودة', 'MAMAS PORT SERVICES CO. LTD', '1', 'عادية', 1, '2024-03-10 13:01:00', '13:01', '1445/08/29', '2024-02-19 04:01:00', '04:01', '1445/08/09', '2024-03-04 04:00:00', '04:00', '1445/08/23', 14, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '3', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 2081.2, 9496.2, 2500, 2875, 2040, 2081.2, 9496.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30800, '', '', '', 18992.4, 49792.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 49792.4, 1, 0, 49792.4, 800, ''),
(195, 15087, 'AMANAH', 19009, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-03-10 13:06:00', '13:06', '1445/08/29', '2024-03-02 18:45:00', '18:45', '1445/08/21', '2024-03-04 23:01:00', '23:01', '1445/08/23', 3, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '17', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 400.9, 7815.9, 2500, 2875, 2040, 400.9, 7815.9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6600, '', '', '', 15631.8, 22231.8, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 22231.8, 1, 0, 22231.8, 800, ''),
(196, 15079, 'ABDELRAHMAN K', 1848, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-03-10 13:10:00', '13:10', '1445/08/29', '2024-03-03 10:28:00', '10:28', '1445/08/22', '2024-03-04 10:45:00', '10:45', '1445/08/23', 2, '2024-03-03 03:35:00', '03:35', '1445/08/22', '2024-03-03 09:28:00', '09:28', '1445/08/22', 1, 250, '', '', '', '', '35', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1550.2, 0, 0, 4050.2, 2500, 1550.2, 0, 0, 4050.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 8100.4, 10550.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 10550.4, 1, 0, 10550.4, 800, ''),
(197, 15038, 'PRINCESS HIYAM', 1995, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-03-10 13:17:00', '13:17', '1445/08/29', '2024-03-02 20:41:00', '20:41', '1445/08/21', '2024-03-04 07:50:00', '07:50', '1445/08/23', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '35', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1719.25, 0, 0, 4219.25, 2500, 1719.25, 0, 0, 4219.25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 8438.5, 10638.5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 10638.5, 1, 0, 10638.5, 800, ''),
(198, 15178, 'SEA WAVE 1', 7095, 268, 'شركة النقرة الذكية للشحن البحري', 'SMART', '1', 'عادية', 1, '2024-03-10 16:19:00', '16:19', '1445/08/29', '2024-03-03 16:19:00', '16:19', '1445/08/22', '2024-03-04 17:00:00', '17:00', '1445/08/23', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '19', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 696.15, 0, 6071.15, 2500, 2875, 696.15, 0, 6071.15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3000, '', '', '', 12142.3, 15142.3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 15142.3, 1, 0, 15142.3, 800, ''),
(199, 15178, 'SEA WAVE 1', 7095, 268, 'شركة النقرة الذكية للشحن البحري', 'SMART', '1', 'عادية', 1, '2024-03-10 13:28:00', '13:28', '1445/08/29', '2024-02-21 16:55:00', '16:55', '1445/08/11', '2024-02-23 02:05:00', '02:05', '1445/08/13', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '19', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 696.15, 0, 6071.15, 2500, 2875, 696.15, 0, 6071.15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3000, '', '', '', 12142.3, 15142.3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 15142.3, 1, 0, 15142.3, 800, ''),
(200, 15151, 'AL AWAD 1', 1687, 241, 'شركة نجم البحر للملاحة والخدمات البحرية والخدماتالبحريه', 'SEA STAR CO.LTD SHIPPING &amp; MARINE SERVICES', '1', 'عادية', 1, '2024-03-10 13:32:00', '13:32', '1445/08/29', '2024-03-03 20:45:00', '20:45', '1445/08/22', '2024-03-04 17:50:00', '17:50', '1445/08/23', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '37', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1365.05, 0, 0, 3865.05, 2500, 1365.05, 0, 0, 3865.05, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1100, '', '', '', 7730.1, 8830.1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 8830.1, 1, 0, 8830.1, 800, ''),
(201, 15179, ' GFS PRIDE', 28340, 234, 'جلوب للخدمات البحرية', 'Globe marine services', '1', 'عادية', 1, '2024-03-10 13:36:00', '13:36', '1445/08/29', '2024-03-04 01:27:00', '01:27', '1445/08/23', '2024-03-04 10:57:00', '10:57', '1445/08/23', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R2', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 1334, 8749, 2500, 2875, 2040, 1334, 8749, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 17498, 19698, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 19698, 1, 0, 19698, 800, ''),
(202, 15180, 'HARMONY LIVESTOCK', 2062, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-03-10 15:40:00', '15:40', '1445/08/29', '2024-03-03 15:33:00', '15:33', '1445/08/22', '2024-03-04 09:45:00', '09:45', '1445/08/23', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '37', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 1796.3, 0, 0, 4296.3, 2500, 1796.3, 0, 0, 4296.3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1100, '', '', '', 8592.6, 9692.6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 9692.6, 1, 0, 9692.6, 800, ''),
(203, 15041, 'SAFEEN PEARL', 9999, 256, 'المؤسسة العربية للتجارة والملاحة ', 'ARABIAN EST. FOR TRAADE AND SHIPPING, LTD.', '1', 'عادية', 1, '2024-03-10 13:44:00', '13:44', '1445/08/29', '2024-03-03 19:32:00', '19:32', '1445/08/22', '2024-03-04 07:09:00', '07:09', '1445/08/23', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 1189.83, 0, 6564.83, 2500, 2875, 1189.83, 0, 6564.83, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 13129.66, 14629.66, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 14629.66, 1, 0, 14629.66, 800, ''),
(204, 15181, 'HOPE ISLAND', 35975, 259, 'شركة التكامل الدولية للملاحة', 'AL TAKAMUL MARITIME CO. LTD', '1', 'عادية', 1, '2024-03-10 13:55:00', '13:55', '1445/08/29', '2024-03-03 10:00:00', '10:00', '1445/08/22', '2024-03-04 02:37:00', '02:37', '1445/08/23', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '6', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 2097.5, 9512.5, 2500, 2875, 2040, 2097.5, 9512.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 19025, 21225, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 21225, 1, 0, 21225, 800, ''),
(205, 15033, 'AMMAN', 5753, 237, 'مؤسسة بسام احمد عفاشة التجارية ', 'BASSAM AFASHAH', '1', 'عادية', 1, '2024-03-10 13:57:00', '13:57', '1445/08/29', '2024-03-03 15:09:00', '15:09', '1445/08/22', '2024-03-04 01:35:00', '01:35', '1445/08/23', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '18', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 468.01, 0, 5843.01, 2500, 2875, 468.01, 0, 5843.01, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1500, '', '', '', 11686.02, 13186.02, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 13186.02, 1, 0, 13186.02, 800, ''),
(206, 15138, 'FE OMER', 1533, 236, 'شركة الخليج العربي للشحن ', 'ARABIAN GULF SHIPPING COMPANY', '1', 'عادية', 1, '2024-03-10 14:05:00', '14:05', '1445/08/29', '2024-02-29 15:08:00', '15:08', '1445/08/19', '2024-03-04 19:09:00', '19:09', '1445/08/23', 0, '2024-02-29 15:08:00', '15:08', '1445/08/19', '2024-03-04 19:09:00', '19:09', '1445/08/23', 5, 1250, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 1250, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1250, 1, 0, 1250, 800, ''),
(207, 15182, 'MARGARI TA', 42331, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-03-10 14:11:00', '14:11', '1445/08/29', '2024-03-02 22:50:00', '22:50', '1445/08/21', '2024-03-04 10:10:00', '10:10', '1445/08/23', 0, '2024-03-02 22:50:00', '22:50', '1445/08/21', '2024-03-04 10:10:00', '10:10', '1445/08/23', 2, 1000, '', '', '', '', 'F1', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 1000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1000, 1, 0, 1000, 800, ''),
(208, 15183, 'DIGNITY', 83594, 240, 'شركة الطاقة البحرية للخدمات البحرية ', 'SEA POWER FOR MARINE SERVICES LTD. CO.', '1', 'عادية', 1, '2024-03-10 14:15:00', '14:15', '1445/08/29', '2024-03-04 08:00:00', '08:00', '1445/08/23', '2024-03-04 18:25:00', '18:25', '1445/08/23', 0, '2024-03-04 08:00:00', '08:00', '1445/08/23', '2024-03-04 18:25:00', '18:25', '1445/08/23', 1, 500, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(209, 15184, 'WESTERN MAPLE', 20867, 4, 'شركة يوسف بن احمد كانو', 'Yusuf  Bin  Ahmad  Kanoo Co LTD.', '1', 'عادية', 1, '2024-03-10 14:24:00', '14:24', '1445/08/29', '2024-03-03 03:55:00', '03:55', '1445/08/22', '2024-03-05 05:17:00', '05:17', '1445/08/24', 3, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '21', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 586.7, 8001.7, 2500, 2875, 2040, 586.7, 8001.7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6600, '', '', '', 16003.4, 22603.4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 22603.4, 1, 0, 22603.4, 800, ''),
(210, 15185, 'DAREEN', 12959, 255, 'مؤسسة سليمان سعيد عبده الجابري للنقل', 'Sulaiman Saeed Abdo Al Jabri Transport Corporation', '1', 'عادية', 1, '2024-03-10 14:27:00', '14:27', '1445/08/29', '2024-03-04 17:35:00', '17:35', '1445/08/23', '2024-03-05 23:20:00', '23:20', '1445/08/24', 2, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '38', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 1693.03, 0, 7068.03, 2500, 2875, 1693.03, 0, 7068.03, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3000, '', '', '', 14136.06, 17136.06, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 17136.06, 1, 0, 17136.06, 800, ''),
(211, 15123, 'GFS PRECIOUS', 35991, 234, 'جلوب للخدمات البحرية', 'Globe marine services', '1', 'عادية', 1, '2024-03-10 14:30:00', '14:30', '1445/08/29', '2024-03-04 13:50:00', '13:50', '1445/08/23', '2024-03-05 09:09:00', '09:09', '1445/08/24', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '1', '', '', '', 'R4', '', 'B03', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 2099.1, 9514.1, 2500, 2875, 2040, 2099.1, 9514.1, 4757.05, 1250, 1437.5, 1020, 1049.55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4757.05, 2200, '', '', '', 23785.25, 25985.25, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 25985.25, 1, 0, 25985.25, 800, ''),
(212, 15186, 'MSC CANDICE', 108930, 246, 'شركة البحر الأبيض المتوسط للملاحة السعودية', 'MSC. Mediterranean shipping company', '1', 'عادية', 1, '2024-03-10 14:36:00', '14:36', '1445/08/29', '2024-03-04 11:03:00', '11:03', '1445/08/23', '2024-03-05 04:56:00', '04:56', '1445/08/24', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', 'R1', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 9393, 16808, 2500, 2875, 2040, 9393, 16808, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 33616, 35816, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 35816, 1, 0, 35816, 800, ''),
(213, 15187, 'SAFEEN PRIDE', 15636, 7, 'الشركة البحرية السعوديه', 'SAUDI MARITIME CO.', '1', 'عادية', 1, '2024-03-10 12:45:00', '12:45', '1445/08/29', '2024-03-04 21:07:00', '21:07', '1445/08/23', '2024-03-05 17:19:00', '17:19', '1445/08/24', 1, '0000-00-00 00:00:00', '01:00', '', '0000-00-00 00:00:00', '01:00', '', 0, 0, '', '', '', '', '4', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 63.6, 7478.6, 2500, 2875, 2040, 63.6, 7478.6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2200, '', '', '', 14957.2, 17157.2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 17157.2, 1, 0, 17157.2, 800, ''),
(214, 15188, 'SEYCHELLES PATRIOT', 27007, 243, 'شركة وكالة شرف للملاحة', 'SHARAF SHIPPING AGENT CO.', '1', 'عادية', 1, '2024-03-10 14:49:00', '14:49', '1445/08/29', '2024-02-27 08:24:00', '08:24', '1445/08/17', '2024-03-05 13:07:00', '13:07', '1445/08/24', 0, '2024-02-27 08:24:00', '08:24', '1445/08/17', '2024-03-05 13:07:00', '13:07', '1445/08/24', 8, 4000, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 4000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 4000, 1, 0, 4000, 800, ''),
(215, 15189, 'AL MAHFOZA', 56659, 258, 'شركة الخماسية', 'AL KHOMASIA SHHIPING AGENCIES', '1', 'عادية', 1, '2024-03-10 15:02:00', '15:02', '1445/08/29', '2024-03-03 16:25:00', '16:25', '1445/08/22', '2024-03-05 00:48:00', '00:48', '1445/08/24', 0, '2024-03-03 16:25:00', '16:25', '1445/08/22', '2024-03-05 00:48:00', '00:48', '1445/08/24', 2, 1000, '', '', '', '', '', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 1000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1000, 1, 0, 1000, 800, ''),
(216, 15190, 'TALIA', 1775, 253, 'وكالة أطلس', 'ATLAS SHIPPING AGENCY', '1', 'عادية', 1, '2024-03-10 15:05:00', '15:05', '1445/08/29', '2024-03-05 00:30:00', '00:30', '1445/08/24', '2024-03-05 11:53:00', '11:53', '1445/08/24', 0, '2024-03-05 00:30:00', '00:30', '1445/08/24', '2024-03-05 11:53:00', '11:53', '1445/08/24', 1, 250, '', '', '', '', 'E', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 250, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 250, 1, 0, 250, 800, ''),
(217, 15191, 'LARUS', 4276, 249, 'الشركة العالمية للمحروقات المحدودة', 'INTERNATIONAL BUNKERING CO.LTD.', '1', 'عادية', 1, '2024-03-10 15:11:00', '15:11', '1445/08/29', '2024-03-04 14:05:00', '14:05', '1445/08/23', '2024-03-05 05:45:00', '05:45', '1445/08/24', 0, '2024-03-04 14:05:00', '14:05', '1445/08/23', '2024-03-05 05:45:00', '05:45', '1445/08/24', 1, 500, '', '', '', '', 'F', '', '', '', '', 1, 1, 1, '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 500, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 500, 1, 0, 500, 800, ''),
(218, 14983, 'HUANG UPs', 16000, 1, 'الحاج عبدالله علي رضا و شركاه المحدوده', 'H. ALI  REZA', '1', 'عادية', 1, '2024-03-11 19:08:00', '19:08', '1445/09/01', '2024-03-11 19:08:00', '19:08', '1445/09/01', '2024-03-11 19:08:00', '19:08', '1445/09/01', 0, '0000-00-00 00:00:00', '03:00', '', '0000-00-00 00:00:00', '03:00', '', 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1, '1', '1', '1', 2500, 2875, 2040, 100, 7515, 2500, 2875, 2040, 100, 7515, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 15030, 15030, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 15030, 1, 2254.5, 17284.5, 800, '');

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
(15136, '9545510', 'OSCAR ', 23494, 240, 0, ''),
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
(15150, '101', 'ALBARQ ALSAUDI', 101, 263, 0, ''),
(15151, '7367976', 'AL AWAD 1', 1687, 241, 0, ''),
(15152, '9533359', 'SEA ETIQUETTE', 32969, 241, 0, ''),
(15153, '9719862', 'SIMBA', 70704, 256, 0, ''),
(15154, '9494591', 'KOTA CANTIK', 76633, 6, 0, ''),
(15155, '9006265', 'FATMA S', 2450, 265, 0, ''),
(15156, '9367683', 'KALINKA', 26897, 243, 0, ''),
(15157, '9204116', 'MARSA VICTORY', 12004, 1, 0, ''),
(15158, '9197686', 'EFES', 4086, 253, 0, ''),
(15159, '9509138', 'FLEUR N', 35887, 4, 0, ''),
(15160, '9688348', ' NCC WAFA', 29785, 244, 0, ''),
(15161, '9441788', 'AL KAHERA', 6203, 267, 0, ''),
(15162, '9455909', 'GFS RUBY', 18321, 234, 0, ''),
(15163, '9780873', 'CMA CGM T.ROOSEVELT', 141950, 235, 0, ''),
(15164, '9332781', 'PANTA REI 1', 59158, 240, 0, ''),
(15165, '9182497', 'GARLAND', 26966, 253, 0, ''),
(15166, '9940459', 'IXORA', 63413, 258, 0, ''),
(15167, '	9737369', 'VANTAGE LADY', 0, 249, 1, ''),
(15168, '9737369', 'VANTAGE LADY', 36518, 249, 0, ''),
(15169, '9441829', 'JAZAN', 2438, 267, 0, ''),
(15170, '7504158', 'TRUST 1', 2975, 240, 0, ''),
(15171, '8902826', 'JASMINE', 7624, 240, 0, ''),
(15172, '9485752', 'MARONA STAR', 1895, 240, 0, ''),
(15173, '9224520', 'WAN HAI 613', 68687, 252, 0, ''),
(15174, '9225677', 'MSC LUISA', 75590, 235, 0, ''),
(15175, '947512', 'LEGEND', 53661, 240, 0, ''),
(15176, '9883364', 'OCEAN AMBITION', 35812, 260, 0, ''),
(15177, '7350002', 'ABDUEL RAHMAN.K', 1848, 240, 0, ''),
(15178, '8420426', 'SEA WAVE 1', 7095, 268, 0, ''),
(15179, '9349045', ' GFS PRIDE', 28340, 234, 0, ''),
(15180, '7349871', 'HARMONY LIVESTOCK', 2062, 240, 0, ''),
(15181, '9263320', 'HOPE ISLAND', 35975, 259, 0, ''),
(15182, '9426594', 'MARGARI TA', 42331, 243, 0, ''),
(15183, '9283241', 'DIGNITY', 83594, 240, 0, ''),
(15184, '9587154', 'WESTERN MAPLE', 20867, 4, 0, ''),
(15185, '9074913', 'DAREEN', 12959, 255, 0, ''),
(15186, '9339284', 'MSC CANDICE', 108930, 246, 0, ''),
(15187, '9506540', 'SAFEEN PRIDE', 15636, 262, 0, ''),
(15188, '9365635', 'SEYCHELLES PATRIOT', 27007, 243, 0, ''),
(15189, '9271365', 'AL MAHFOZA', 56659, 258, 0, ''),
(15190, '8877825', 'TALIA', 1775, 253, 0, ''),
(15191, '9148506', 'LARUS', 4276, 249, 0, '');

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
  `signature` varchar(20) NOT NULL DEFAULT 'nosignature.png',
  `debug` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `f_name`, `l_name`, `avatar`, `created_at`, `is_admin`, `max_list`, `is_active`, `clear_pass`, `user_2fa_enable`, `user_2fa_secret`, `user_2fa_code`, `signature`, `debug`) VALUES
(1, 'aymanoz', '$2y$10$Ianl25aGLKaDwlYcaaminubcrSvU.KcnjXAWiCyuXMPXw0ctnUOhG', 'Ayman', 'Dasa', '1_aymanoz.png', '2022-05-17 19:21:05', 1, '25', 1, '1234512345', 1, 'MWKNBQFWARLMJPNQ', '', 'nosignature.png', 0),
(4, 'admin', '$2y$10$YLmOh1mihx620toUI5kH9ObzGUDVCbi3bnd2YnPwFPvj9RVlmFuSW', 'sys', 'admin', '', '2024-01-07 14:33:17', 1, '100', 1, '123456', 1, 'UCIZBRRRGVHTBMYV', NULL, 'nosignature.png', 0),
(7, 'adomom', '$2y$10$jJ7.cCywCGJCUY.DWhFbxO/DcSNKS.ycw7tFcl4tH8AtopkVgrzLK', 'Ahmad', 'Dooom', '', '2024-01-13 12:12:59', 0, '100', 1, '123456', 0, NULL, NULL, 'nosignature.png', 0),
(8, 'abc', '$2y$10$.cevWGeGomvl/4pdiL586uLc8osYKHIRP6Pz2dqJj4CNC/TsHmYO.', 'abc', 'abc', '', '2024-02-18 13:05:00', 0, '100', 1, '1234567890', 1, 'AZOSDTAPUNTFMIAF', NULL, 'nosignature.png', 1),
(9, 'syed', '$2y$10$zZSslISjSOUeAJHznVSHC.y9uXzovgo3E9XK5rn0MpdXagdpX4P7e', 'Syed', 'Asad', '9_240229113631.png', '2024-02-18 14:25:57', 0, '100', 1, 'Asad1415', 1, 'PDGGSFKICJNCPJME', NULL, 'nosignature.png', 0),
(10, 'Samer', '$2y$10$5.PTuDicdDhsZRiaFV3WIO3DOB3EbQDHQ5Bs9bZ2uSDWfYcDnGk22', 'Samer', 'quraish', '', '2024-02-20 16:36:23', 0, '100', 1, 'Retal123', 1, 'PVLRHQQUUHVXLXSV', NULL, 'nosignature.png', 0),
(11, 'Gnader81', '$2y$10$COhMGamDZVnd2SMXldgKgOPrekpn3r9ys2ON4KGCReH7aN8ktwJj2', 'Gamal', 'Nader', '', '2024-02-20 16:40:34', 0, '100', 1, 'G81nader', 1, 'HTTPNRASDWTPCRSH', NULL, 'nosignature.png', 0),
(12, 'noor', '$2y$10$ks5rOcj9NY.Lmr5zU5Of/O6oiux3m6qxMHjWHaDehDk2SLUoZi9PG', 'dfs', 'sdfsdf', '', '2024-03-06 09:06:51', 0, '100', 1, '123456', 0, NULL, NULL, 'nosignature.png', 0),
(13, 'user', '$2y$10$vctl067Q7AK9z5u70YOnQ.FnuosGFBOmoPXimNDmmjK.wqHC7U6G6', 'user', '.', '13_user.png', '2024-03-06 16:27:36', 0, '100', 1, '12345', 1, 'STQRQUSVDMBDFEVS', NULL, 'nosignature.png', 0);

-- --------------------------------------------------------

--
-- Structure for view `full_invoice_view`
--
DROP TABLE IF EXISTS `full_invoice_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `full_invoice_view`  AS SELECT `i`.`InvoiceID` AS `InvoiceID`, `i`.`ShipID` AS `ShipID`, `i`.`ShipName` AS `ShipName`, `i`.`ShipWeight` AS `ShipWeight`, `i`.`AgentID` AS `AgentID`, `i`.`AgentNameAr` AS `AgentNameAr`, `i`.`AgentNameEn` AS `AgentNameEn`, `i`.`ServiceType` AS `ServiceType`, `i`.`ServiceTypeName` AS `ServiceTypeName`, `i`.`ServiceTypeFactor` AS `ServiceTypeFactor`, `i`.`InvoiceDate` AS `InvoiceDate`, `i`.`InvoiceDateT` AS `InvoiceDateT`, `i`.`ArrivalDate` AS `ArrivalDate`, `i`.`ArrivalDateT` AS `ArrivalDateT`, `i`.`DepartureDate` AS `DepartureDate`, `i`.`DepartureDateT` AS `DepartureDateT`, `i`.`PeriodDays` AS `PeriodDays`, `i`.`MSericeBathPrice` AS `MSericeBathPrice`, `i`.`AnchorageEntry` AS `AnchorageEntry`, `i`.`AnchorageEntryT` AS `AnchorageEntryT`, `i`.`AnchorageLeave` AS `AnchorageLeave`, `i`.`AnchorageLeaveT` AS `AnchorageLeaveT`, `i`.`AnchorageDays` AS `AnchorageDays`, `i`.`MSericeAnchoragePrice` AS `MSericeAnchoragePrice`, `i`.`MovePort1` AS `MovePort1`, `i`.`MovePort2` AS `MovePort2`, `i`.`MovePort3` AS `MovePort3`, `i`.`MovePortPrice` AS `MovePortPrice`, `i`.`TripNo` AS `TripNo`, `i`.`DockingNo` AS `DockingNo`, `i`.`RouteNo` AS `RouteNo`, `i`.`ShiftedNo` AS `ShiftedNo`, `i`.`Reason` AS `Reason`, `i`.`MSFraction1` AS `MSFraction1`, `i`.`MSFraction2` AS `MSFraction2`, `i`.`MSFraction3` AS `MSFraction3`, `i`.`MService1` AS `MService1`, `i`.`MService2` AS `MService2`, `i`.`MService3` AS `MService3`, `i`.`MSericeInPrice` AS `MSericeInPrice`, `i`.`MSericeOutPrice` AS `MSericeOutPrice`, `i`.`MSTOTAL` AS `MSTOTAL`, `s1`.`code` AS `SScode1`, `s1`.`Description` AS `Description1`, `i`.`SSName1` AS `SSName1`, `i`.`SSUnit1` AS `SSUnit1`, `i`.`SSQut1` AS `SSQut1`, `i`.`SSPrice1` AS `SSPrice1`, `i`.`SSNote1` AS `SSNote1`, `i`.`SSUPrice1` AS `SSUPrice1`, `s2`.`code` AS `SScode2`, `s2`.`Description` AS `Description2`, `i`.`SSName2` AS `SSName2`, `i`.`SSUnit2` AS `SSUnit2`, `i`.`SSQut2` AS `SSQut2`, `i`.`SSPrice2` AS `SSPrice2`, `i`.`SSNote2` AS `SSNote2`, `i`.`SSUPrice2` AS `SSUPrice2`, `s3`.`code` AS `SScode3`, `s3`.`Description` AS `Description3`, `i`.`SSName3` AS `SSName3`, `i`.`SSUnit3` AS `SSUnit3`, `i`.`SSQut3` AS `SSQut3`, `i`.`SSPrice3` AS `SSPrice3`, `i`.`SSNote3` AS `SSNote3`, `i`.`SSUPrice3` AS `SSUPrice3`, `s4`.`code` AS `SScode4`, `s4`.`Description` AS `Description4`, `i`.`SSName4` AS `SSName4`, `i`.`SSUnit4` AS `SSUnit4`, `i`.`SSQut4` AS `SSQut4`, `i`.`SSPrice4` AS `SSPrice4`, `i`.`SSNote4` AS `SSNote4`, `i`.`SSUPrice4` AS `SSUPrice4`, `s5`.`code` AS `SScode5`, `s5`.`Description` AS `Description5`, `i`.`SSUnit5` AS `SSUnit5`, `i`.`SSQut5` AS `SSQut5`, `i`.`SSName5` AS `SSName5`, `i`.`SSNote5` AS `SSNote5`, `i`.`SSUPrice5` AS `SSUPrice5`, `i`.`SSPrice5` AS `SSPrice5`, `i`.`SSTOTAL` AS `SSTOTAL`, `i`.`MGPrice` AS `MGPrice`, `i`.`TOTAL` AS `TOTAL`, `i`.`VAT` AS `VAT`, `i`.`is_VAT` AS `is_VAT`, `i`.`Status` AS `Status`, `i`.`VAT_TOTAL` AS `VAT_TOTAL` FROM (((((`invoice` `i` left join `services` `s1` on(cast(`i`.`SService1` as unsigned) = `s1`.`Service_ID`)) left join `services` `s2` on(cast(`i`.`SService2` as unsigned) = `s2`.`Service_ID`)) left join `services` `s3` on(cast(`i`.`SService3` as unsigned) = `s3`.`Service_ID`)) left join `services` `s4` on(cast(`i`.`SService4` as unsigned) = `s4`.`Service_ID`)) left join `services` `s5` on(cast(`i`.`SService5` as unsigned) = `s5`.`Service_ID`))  ;

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

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
  MODIFY `alog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `AgentID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Service_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ship`
--
ALTER TABLE `ship`
  MODIFY `ShipID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15192;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
