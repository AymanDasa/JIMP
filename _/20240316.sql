INSERT INTO `info` (`id`, `name`, `value`, `type`) VALUES (NULL, 'Activate2FA', '0', 'text');
ALTER TABLE `info` ADD `active` TINYINT NOT NULL DEFAULT '1' AFTER `type`; 

-- UPDATE `info` SET `active` = '0' WHERE `info`.`id` = /** All HTML 18; 


