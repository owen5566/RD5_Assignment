CREATE TABLE `RD5_db`.`users` 
    ( `uId` INT NOT NULL  AUTO_INCREMENT PRIMARY KEY ,
      `uAccountName` VARCHAR(20) NOT NULL ,
      `uPass` VARCHAR(20) NOT NULL ,
      `uName` VARCHAR(10) NOT NULL ,
      `uBirth` VARCHAR(11) NOT NULL ,
      `uAddress` VARCHAR(50) NOT NULL ,
      `uEmail` VARCHAR(50) NOT NULL ) ENGINE = InnoDB;

CREATE TABLE `RD5_db`.`transactions` 
  ( `transId` INT NOT NULL AUTO_INCREMENT ,
    `uId` INT NOT NULL ,
    `transMode` ENUM('1','0') NOT NULL ,
    `transName` VARCHAR(10) NOT NULL ,
    `transDate` DATETIME NOT NULL ,
    `transUId` INT NULL ,
    `transAmount` INT NOT NULL ,
    `transNote` VARCHAR(30) NOT NULL ,
     PRIMARY KEY (`transId`)) ENGINE = InnoDB;