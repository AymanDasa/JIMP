CREATE VIEW IF NOT EXISTS `full_invoice_view` AS 
select `i`.`InvoiceID` AS `InvoiceID`,`i`.`ShipID` AS `ShipID`,`i`.`ShipName` AS `ShipName`,`i`.`ShipWeight` AS `ShipWeight`,`i`.`AgentID` AS `AgentID`,`i`.`AgentNameAr` AS `AgentNameAr`,`i`.`AgentNameEn` AS `AgentNameEn`,`i`.`ServiceType` AS `ServiceType`,`i`.`ServiceTypeName` AS `ServiceTypeName`,`i`.`ServiceTypeFactor` AS `ServiceTypeFactor`,`i`.`InvoiceDate` AS `InvoiceDate`,`i`.`InvoiceDateT` AS `InvoiceDateT`,`i`.`ArrivalDate` AS `ArrivalDate`,`i`.`ArrivalDateT` AS `ArrivalDateT`,`i`.`DepartureDate` AS `DepartureDate`,`i`.`DepartureDateT` AS `DepartureDateT`,`i`.`PeriodDays` AS `PeriodDays`,`i`.`MSericeBathPrice` AS `MSericeBathPrice`,`i`.`AnchorageEntry` AS `AnchorageEntry`,`i`.`AnchorageEntryT` AS `AnchorageEntryT`,`i`.`AnchorageLeave` AS `AnchorageLeave`,`i`.`AnchorageLeaveT` AS `AnchorageLeaveT`,`i`.`AnchorageDays` AS `AnchorageDays`,`i`.`MSericeAnchoragePrice` AS `MSericeAnchoragePrice`,`i`.`MovePort1` AS `MovePort1`,`i`.`MovePort2` AS `MovePort2`,`i`.`MovePort3` AS `MovePort3`,`i`.`MovePortPrice` AS `MovePortPrice`,`i`.`TripNo` AS `TripNo`,`i`.`DockingNo` AS `DockingNo`,`i`.`RouteNo` AS `RouteNo`,`i`.`ShiftedNo` AS `ShiftedNo`,`i`.`Reason` AS `Reason`,`i`.`MSFraction1` AS `MSFraction1`,`i`.`MSFraction2` AS `MSFraction2`,`i`.`MSFraction3` AS `MSFraction3`,`i`.`MService1` AS `MService1`,`i`.`MService2` AS `MService2`,`i`.`MService3` AS `MService3`,`i`.`MSericeInPrice` AS `MSericeInPrice`,`i`.`MSericeOutPrice` AS `MSericeOutPrice`,`i`.`MSTOTAL` AS `MSTOTAL`,`s1`.`code` AS `SScode1`,`s1`.`Description` AS `Description1`,`i`.`SSName1` AS `SSName1`,`i`.`SSUnit1` AS `SSUnit1`,`i`.`SSQut1` AS `SSQut1`,`i`.`SSPrice1` AS `SSPrice1`,`i`.`SSNote1` AS `SSNote1`,`i`.`SSUPrice1` AS `SSUPrice1`,`s2`.`code` AS `SScode2`,`s2`.`Description` AS `Description2`,`i`.`SSName2` AS `SSName2`,`i`.`SSUnit2` AS `SSUnit2`,`i`.`SSQut2` AS `SSQut2`,`i`.`SSPrice2` AS `SSPrice2`,`i`.`SSNote2` AS `SSNote2`,`i`.`SSUPrice2` AS `SSUPrice2`,`s3`.`code` AS `SScode3`,`s3`.`Description` AS `Description3`,`i`.`SSName3` AS `SSName3`,`i`.`SSUnit3` AS `SSUnit3`,`i`.`SSQut3` AS `SSQut3`,`i`.`SSPrice3` AS `SSPrice3`,`i`.`SSNote3` AS `SSNote3`,`i`.`SSUPrice3` AS `SSUPrice3`,`s4`.`code` AS `SScode4`,`s4`.`Description` AS `Description4`,`i`.`SSName4` AS `SSName4`,`i`.`SSUnit4` AS `SSUnit4`,`i`.`SSQut4` AS `SSQut4`,`i`.`SSPrice4` AS `SSPrice4`,`i`.`SSNote4` AS `SSNote4`,`i`.`SSUPrice4` AS `SSUPrice4`,`s5`.`code` AS `SScode5`,`s5`.`Description` AS `Description5`,`i`.`SSUnit5` AS `SSUnit5`,`i`.`SSQut5` AS `SSQut5`,`i`.`SSName5` AS `SSName5`,`i`.`SSNote5` AS `SSNote5`,`i`.`SSUPrice5` AS `SSUPrice5`,`i`.`SSPrice5` AS `SSPrice5`,`i`.`SSTOTAL` AS `SSTOTAL`,`i`.`MGPrice` AS `MGPrice`,`i`.`TOTAL` AS `TOTAL`,`i`.`VAT` AS `VAT`,`i`.`is_VAT` AS `is_VAT`,`i`.`Status` AS `Status`,`i`.`VAT_TOTAL` AS `VAT_TOTAL` from (((((`data`.`invoice` `i` left join `data`.`services` `s1` on(cast(`i`.`SService1` as unsigned) = `s1`.`Service_ID`)) left join `data`.`services` `s2` on(cast(`i`.`SService2` as unsigned) = `s2`.`Service_ID`)) left join `data`.`services` `s3` on(cast(`i`.`SService3` as unsigned) = `s3`.`Service_ID`)) left join `data`.`services` `s4` on(cast(`i`.`SService4` as unsigned) = `s4`.`Service_ID`)) left join `data`.`services` `s5` on(cast(`i`.`SService5` as unsigned) = `s5`.`Service_ID`));

-- USERS TANBLE
ALTER TABLE `users` ADD `signature` VARCHAR(20) NOT NULL AFTER `user_2fa_code`; 
ALTER TABLE `users` CHANGE `signature` `signature` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'nosignature.png'; 
UPDATE `users` SET `signature` = 'nosignature.png' WHERE  1; 

-- INFO TANBLE
INSERT INTO `info` (`id`, `name`, `value`, `type`) VALUES (NULL, 'companyXLogo', 'ECPO_xlogo_s1.png', 'text'), (NULL, 'companySlog', 'WCPO', 'text'); 
INSERT INTO `info` (`id`, `name`, `value`, `type`) VALUES (NULL, 'LIMIT', '100', 'text'), (NULL, 'CompanyName', 'شركة ساحل الغربية لخدمات الموانئ', 'text'); 
INSERT INTO `info` (`id`, `name`, `value`, `type`) VALUES (NULL, 'PortPercentage', '10', 'text');

DROP TABLE IF EXISTS `suppliers`;
DROP TABLE IF EXISTS `sappo`;
DROP TABLE IF EXISTS `member`; 





