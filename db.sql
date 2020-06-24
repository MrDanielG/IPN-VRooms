-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema ipn_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ipn_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ipn_db` DEFAULT CHARACTER SET utf8 ;
USE `ipn_db` ;

-- -----------------------------------------------------
-- Table `ipn_db`.`grupo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ipn_db`.`grupo` (
  `id_grupo` VARCHAR(45) NOT NULL,
  `semestre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_grupo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ipn_db`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ipn_db`.`usuario` (
  `num_boleta` INT(10) NOT NULL,
  `clave` VARCHAR(100) NOT NULL,
  `tipo_usuario` VARCHAR(45) NOT NULL,
  `id_grupo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`num_boleta`),
  INDEX `fk_usuario_grupo1_idx` (`id_grupo` ASC) ,
  CONSTRAINT `fk_usuario_grupo1`
    FOREIGN KEY (`id_grupo`)
    REFERENCES `ipn_db`.`grupo` (`id_grupo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ipn_db`.`persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ipn_db`.`persona` (
  `id_persona` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `paterno` VARCHAR(45) NOT NULL,
  `materno` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `num_boleta` INT(10) NOT NULL,
  PRIMARY KEY (`id_persona`),
  INDEX `fk_persona_usuario1_idx` (`num_boleta` ASC) ,
  CONSTRAINT `fk_persona_usuario1`
    FOREIGN KEY (`num_boleta`)
    REFERENCES `ipn_db`.`usuario` (`num_boleta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ipn_db`.`publicacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ipn_db`.`publicacion` (
  `id_publicacion` INT(11) NOT NULL AUTO_INCREMENT,
  `asunto` VARCHAR(45) NOT NULL,
  `contenido` VARCHAR(500) NOT NULL,
  `fecha` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `num_boleta` INT(10) NOT NULL,
  `id_grupo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_publicacion`),
  INDEX `fk_publicacion_usuario1_idx` (`num_boleta` ASC) ,
  INDEX `fk_publicacion_grupo1_idx` (`id_grupo` ASC) ,
  CONSTRAINT `fk_publicacion_usuario1`
    FOREIGN KEY (`num_boleta`)
    REFERENCES `ipn_db`.`usuario` (`num_boleta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_publicacion_grupo1`
    FOREIGN KEY (`id_grupo`)
    REFERENCES `ipn_db`.`grupo` (`id_grupo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
