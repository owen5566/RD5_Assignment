CREATE TABLE `RD5_db`.`users` 
    ( `uId` INT NOT NULL  AUTO_INCREMENT PRIMARY KEY ,
      `uAccountName` VARCHAR(20) NOT NULL ,
      `uPass` VARCHAR(20) NOT NULL ,
      `uName` VARCHAR(10) NOT NULL ,
      `uBirth` VARCHAR(11) NOT NULL ,
      `uAddress` VARCHAR(50) NOT NULL ,
      `uEmail` VARCHAR(50) NOT NULL ) ENGINE = InnoDB;