CREATE  TABLE IF NOT EXISTS `Usuario` (

  `idUsuario` INT NOT NULL AUTO_INCREMENT ,

  `Nombres` VARCHAR(50) NULL ,

  `Apellidos` VARCHAR(50) NULL ,

  `fechaNacimiento` DATETIME NULL ,

  `Pais` VARCHAR(100) NULL ,

  `Ciudad` VARCHAR(100) NULL ,

  `Referente` VARCHAR(100) NULL ,

  `Email` VARCHAR(100) NULL ,

  `Password` VARCHAR(45) NULL ,

  `Estado` VARCHAR(45) NULL ,

  `Tipo` VARCHAR(45) NULL ,

  PRIMARY KEY (`idUsuario`) )