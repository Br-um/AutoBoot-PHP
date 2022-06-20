CREATE SCHEMA `autoboot` ;

CREATE TABLE `autoboot`.`usuario` (
  `idUsuario` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`idUsuario`));