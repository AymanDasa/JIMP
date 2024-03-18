INSERT INTO `info` (`id`, `name`, `value`, `type`) VALUES (NULL, 'Activate2FA', '0', 'text');
ALTER TABLE `info` ADD `active` TINYINT NOT NULL DEFAULT '1' AFTER `type`; 
INSERT INTO `info` ( `name`, `value`, `type`, `active`) VALUES( 'AfterMarch', '0', 'text', 1);
-- UPDATE `info` SET `active` = '0' WHERE `info`.`id` = /** All HTML 18; 


