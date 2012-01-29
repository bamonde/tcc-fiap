CREATE DATABASE IF NOT EXISTS `tcc`;

DROP TABLE IF EXISTS `tcc`.`chamados`;
CREATE TABLE `tcc`.`chamados` (
  `id` int  NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45)  NOT NULL,
  `descricao` MEDIUMTEXT  NOT NULL,
  `setor_solicitante_id` int  NOT NULL,
  `usuario_solicitante_id` int  NOT NULL,
  `setor_responsavel_id` int  NOT NULL,
  `usuario_responsavel_id` int  NOT NULL,
  `prioridade_id` int  NOT NULL DEFAULT 0,
  `resolvido` tinyint  NOT NULL DEFAULT 0,
  `modified` datetime  NOT NULL,
  `created` datetime  NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB;

DROP TABLE IF EXISTS `tcc`.`usuarios`;
CREATE TABLE `tcc`.`usuarios` (
  `id` int  NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45)  NOT NULL,
  `setor_id` int  NOT NULL,
  `modified` datetime  NOT NULL,
  `created` datetime  NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB;

DROP TABLE IF EXISTS `tcc`.`setores`;
CREATE TABLE `tcc`.`setores` (
  `id` int  NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45)  NOT NULL,
  `modified` datetime  NOT NULL,
  `created` datetime  NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB;

DROP TABLE IF EXISTS `tcc`.`prioridades`;
CREATE TABLE `tcc`.`prioridades` (
  `id` int  NOT NULL,
  `nome` VARCHAR(45)  NOT NULL,
  `modified` datetime  NOT NULL,
  `created` datetime  NOT NULL
)
ENGINE = InnoDB;
