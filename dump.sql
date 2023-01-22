CREATE DATABASE super;
USE super;

CREATE TABLE `super`.`contatos` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `mci` INT NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `telefone` VARCHAR(20) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`usuario_id`));