CREATE TABLE `tbregiones` (
  `t5codigorg` INT(1) NOT NULL PRIMARY KEY,
  `t5rgnombre` CHAR(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE  `tbregiones` ADD INDEX (  `t5codigorg` ) ;

INSERT INTO `tbregiones` VALUES (1,'Xalapa');
INSERT INTO `tbregiones` VALUES (2,'Veracruz');
INSERT INTO `tbregiones` VALUES (3,'Poza Rica-Tuxpan');
INSERT INTO `tbregiones` VALUES (4,'Orizaba-Córdoba');
INSERT INTO `tbregiones` VALUES (5,'Coatzacoalcos-Minatitlán');