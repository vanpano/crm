CREATE TABLE `workflow`.`attendees` ( `id` INT NOT NULL AUTO_INCREMENT , `projectId` INT NULL DEFAULT NULL , `pelicanId` INT NULL DEFAULT NULL , `email` VARCHAR(35) NOT NULL , `createdAt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `updatedAt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `used` INT NOT NULL DEFAULT '0' , `status` BOOLEAN NOT NULL DEFAULT TRUE , PRIMARY KEY (`id`)) ENGINE = InnoDB; 