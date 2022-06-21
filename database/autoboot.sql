CREATE SCHEMA `autoboot` ;

CREATE TABLE `autoboot`.`usuario` (
  `idUsuario` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`idUsuario`));

  CREATE TABLE `autoboot`.`carros` (
  `idcarros` INT NOT NULL AUTO_INCREMENT,
  `nomeCarro` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `ano` INT NOT NULL,
  `valor` DECIMAL(20) NOT NULL,
  PRIMARY KEY (`idcarros`));