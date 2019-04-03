CREATE TABLE `tbResponsableOperativo` (
  `t5CodigoOP` INT(5) NOT NULL PRIMARY KEY,
  `t5CodigoSO` INT(1) NOT NULL,
  `t5TipoOP` INT(5) NOT NULL,
  `t5Nombre` CHAR(30) NOT NULL,
  `t5ApelldoPOP` CHAR(30),
  `t5ApelldoMOP` CHAR(30) NOT NULL,
  `t5CorreoOP` CHAR(128),
  `t5Lada` CHAR(3),
  `t5Telefono` CHAR(7),
  `t5Celular` CHAR(10),
  `t5ExtOP` CHAR(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE  `tbResponsableOperativo` ADD INDEX ( `t5CodigoOP` ) ;
ALTER TABLE  `tbResponsableOperativo` ADD INDEX (  `t5CodigoSO` ) ;
ALTER TABLE  `tbResponsableOperativo` ADD INDEX (  `t5TipoOP` ) ;