CREATE DATABASE `cezao` DEFAULT CHARACTER SET utf8;

CREATE  TABLE IF NOT EXISTS `cezao`.`marca` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descricao` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

CREATE  TABLE IF NOT EXISTS `cezao`.`modelo` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descricao` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

CREATE  TABLE IF NOT EXISTS `cezao`.`produto` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descricao` VARCHAR(45) NOT NULL ,
  `valor` DECIMAL(10,0) NOT NULL ,
  `marca_id` INT NOT NULL ,
  `modelo_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_produto_marca_idx` (`marca_id` ASC) ,
  INDEX `fk_produto_modelo1_idx` (`modelo_id` ASC) ,
  CONSTRAINT `fk_produto_marca`
    FOREIGN KEY (`marca_id` )
    REFERENCES `cezao`.`marca` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_modelo1`
    FOREIGN KEY (`modelo_id` )
    REFERENCES `cezao`.`modelo` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE  TABLE IF NOT EXISTS `cezao`.`estoque` (
  `produto_id` INT NOT NULL ,
  `quantidade` INT NOT NULL ,
  PRIMARY KEY (`produto_id`) ,
  CONSTRAINT `fk_estoque_produto1`
    FOREIGN KEY (`produto_id` )
    REFERENCES `cezao`.`produto` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;