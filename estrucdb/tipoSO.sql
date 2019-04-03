CREATE TABLE `tbTipoSO` (
  `t6TipoOP` INT(1) NOT NULL PRIMARY KEY,
  `t6NombreOP` CHAR(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE  `tbTipoSO` ADD INDEX (  `t6TipoOP` ) ;

ALTER TABLE  `tbTipoSO` ADD INDEX (  `t6TipoOP` ) ;

INSERT INTO `tbTipoSO` VALUES (0,'Dependencia');
INSERT INTO `tbTipoSO` VALUES (1,'Sujeto Obligado');
INSERT INTO `tbTipoSO` VALUES (2,'Titular de Sujeto Obligado');
INSERT INTO `tbTipoSO` VALUES (3,'Respansable de Sujeto Obligado');
INSERT INTO `tbTipoSO` VALUES (4,'Respnasable de Datos Personales');
INSERT INTO `tbTipoSO` VALUES (5,'Sujeto Obligado - Respnasable de Datos Personales');
INSERT INTO `tbTipoSO` VALUES (6,'Respansable de Sujeto Obligado - Datos Personales');

