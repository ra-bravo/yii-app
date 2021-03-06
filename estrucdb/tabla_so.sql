CREATE TABLE `tbSujetoObligado` (
  `t3Codigo` INT(5) NOT NULL PRIMARY KEY,
  `t3Region` INT(1) NOT NULL DEFAULT '0',
  `t3TipoSO` INT(1) NOT NULL DEFAULT '0',
  `t3SOnombre` CHAR(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE  `tbSujetoObligado` ADD INDEX (  `t3Codigo` ) ;
ALTER TABLE  `tbSujetoObligado` ADD INDEX (  `t3region` ) ;
ALTER TABLE  `tbSujetoObligado` ADD INDEX (  `t3TipoSO` ) ;

INSERT INTO `tbSujetoObligado` VALUES (11816,1,1,	'CENTRO DE AUTOACCESO (USBI)');
INSERT INTO `tbSujetoObligado` VALUES (11718,1,1,	'COORD. DE COOPERACION ACADEMICA');
INSERT INTO `tbSujetoObligado` VALUES (11719,1,4,	'COORD. DE PROG. Y SERVICIOS');
INSERT INTO `tbSujetoObligado` VALUES (11720,1,4,	'COORD. DE MOVIL. EST. Y ACAD.');
INSERT INTO `tbSujetoObligado` VALUES (11724,1,1,	'COORD. DE LA UNIDAD DE GENERO');
INSERT INTO `tbSujetoObligado` VALUES (11725,1,4,	'DOCENCIA E INVESTIGACION');
INSERT INTO `tbSujetoObligado` VALUES (11727,1,1,	'COORD. UNIV DE ATENCION ESTUD');
INSERT INTO `tbSujetoObligado` VALUES (11903,1,4,	'COORD ASESORES');
INSERT INTO `tbSujetoObligado` VALUES (11904,1,1,	'OFICINA DEL ABOGADO GENERAL');
INSERT INTO `tbSujetoObligado` VALUES (11717,1,1,	'DIRECCION DE NORMATIVIDAD');
INSERT INTO `tbSujetoObligado` VALUES (11905,1,3,	'DIR ASUNTOS JURIDICOS');
INSERT INTO `tbSujetoObligado` VALUES (11911,1,4,	'DIRECCION GRAL DE TECNOLOGIA DE INF');
INSERT INTO `tbSujetoObligado` VALUES (11968,1,1,	'DIR.DE SERV.DE RED E INFRAES. TECNO.');
INSERT INTO `tbSujetoObligado` VALUES (11999,1,1,	'DEPTO DE VIDEOCONFERENCIAS');
INSERT INTO `tbSujetoObligado` VALUES (11969,1,1,	'DIR.DE EXTENSION DE SERV. TECNOLOGIA');
INSERT INTO `tbSujetoObligado` VALUES (11970,1,1,	'DIR.DE DESARROLLO INFORM. DE A.ACAD');

ALTER TABLE `tbSujetoObligado` ADD  FOREIGN KEY (`t3Region`) REFERENCES `tbinfomex`.`t5regiones`(`t5codigorg`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `tbSujetoObligado` ADD  FOREIGN KEY (`t3TipoSO`) REFERENCES `tbinfomex`.`t6TipoSO`(`t6TipoOP`) ON DELETE CASCADE ON UPDATE CASCADE;
