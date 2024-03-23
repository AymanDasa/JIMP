INSERT INTO `info` ( `name`, `value`, `type`, `active`) VALUES ('port_nameEn', 'Jeddah Islamic Port', 'text', '1'); 
INSERT INTO `info` ( `name`, `value`, `type`, `active`) VALUES ( 'AdressCompanyEN', 'ZSC', 'text', '0');


INSERT INTO `info` (   `name`, `value`, `type`, `active`) VALUES 
(  'name_user1En', NULL, 'text', '1'), 
(  'name_user2En', NULL, 'text', '1'), 
(  'name_user3En', NULL, 'text', '1'), 
(  'job_user1En', NULL, 'text', '1'), 
(  'job_user2En', NULL, 'text', '1'), 
(  'job_user3En', NULL, 'text', '1');




DROP TABLE `config`;
CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text DEFAULT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'text',
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci; 
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);  
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1; 
  
  INSERT INTO `config` (`id`, `name`, `value`, `type`, `active`) VALUES (NULL, 'SSCount', '5', 'text', '1'); 
  INSERT INTO `config` (`id`, `name`, `value`, `type`, `active`) VALUES (NULL, 'AdressMamwani', '<span style=\"font-size:8pt\" lang=\"ar-SA\">\r\nالمملكة العربية السعودية \r\n<br>\r\nالهيئة العامة للموانئ\r\n<br>\r\nميناء جدة الإسلامي\r\n<br>\r\nwww.ports.gov.sa\r\n</span>', 'text', '1'), (NULL, 'AdressCompany', '<span lang=\"ar-SA\"> \r\nالمملكة العربية السعودية <br>\r\nشركة الزامل للخدمات البحرية <br>\r\n<span lang=\"ar-SA\">هـاتف :8696300 013</span>\r\n<br>\r\n<span lang=\"ar-SA\">فـاكس :8574202 013</span> \r\n</span>', 'text', '1'), (NULL, 'footerAR', 'فيما يلي تفاصيل الحساب المذكور مع <br> البنك السعودي الأول \r\n<br> \r\nإسم الحساب: شركة ساحل الغربية لخدمات الموانىء \r\n<br> \r\nرقم السجل التجاري: 4030534211 \r\n<br>\r\nرقم الحساب: 242-379501-001 \r\n<br>\r\nSA7745000000242379501001 : رقم الايبان\r\n<br>\r\nإسم البنك: البنك السعودي الأول\r\n<br>\r\nSABBSAR : رمز سويفت \r\n<br>\r\nSAR : العملة ', 'text', '1'), (NULL, 'footerEN', 'Below are the details of the aforementioned account with <br> First Saudi Bank \r\n<br>\r\nAccount name: West Coast Port Services Company\r\n<br>\r\nC.R number: 4030534211 \r\n<br>\r\n Account number: 001-379501-242\r\n<br>\r\nIBAN number: SA7745000000242379501001 \r\n<br>\r\nBank name: First Saudi Bank\r\n<br>\r\nCurrency: SAR \r\n<br>\r\nSWIFT code: SABBSAR', 'text', '1'), (NULL, 'AdressCompanyEN', 'Kingdom Of Saudi Arabia<br>Zamil Offshore Services<br>Tel: 0138822494 <br> Fax: 0138068805', 'text', '1'), (NULL, 'Activate2FA', '0', 'text', '1'), (NULL, 'vat', '15', 'text', '1');
  
  
  DELETE FROM info WHERE `info`.`name` = 'AdressMamwani';
  DELETE FROM info WHERE `info`.`name` = 'AdressCompany';
  DELETE FROM info WHERE `info`.`name` = 'footerAR';
  DELETE FROM info WHERE `info`.`name` = 'footerEN';
  DELETE FROM info WHERE `info`.`name` = 'AdressCompanyEN';
  DELETE FROM info WHERE `info`.`name` = 'companyXLogo';
  DELETE FROM info WHERE `info`.`name` = 'Activate2FA';
  DELETE FROM info WHERE `info`.`name` = 'vat'; 
  -- jimp_projrct_name_is hear
  -- STRONG PASSWORD
  -- change the password in tow files 
  -- change root password 
  -- add bulck action to approve from-to
  -- 
  
  
  
  
  
