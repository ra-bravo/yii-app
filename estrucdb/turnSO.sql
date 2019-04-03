CREATE TABLE `tbTurnoSO` (
  `t2FolioMK` CHAR(8) NOT NULL PRIMARY KEY,
  `t2CodigoSO` INT(5) NOT NULL,
  `t2FechaTurno` DATE,
  `t2FechaPrevencion` DATE,
  `t2FechaProrroga` DATE,
  `t2FechaRespuesta` DATE,
  `t2status` INT(1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE  `tbTurnoSO` ADD INDEX (  `t2FolioMK` ) ;
ALTER TABLE  `tbTurnoSO` ADD INDEX (  `t2CodigoSO` ) ;

ALTER TABLE `tbSolicitudes` ADD PRIMARY KEY(`t1FolioMkatsina`);

CREATE TABLE `tbTurnoSO` (
  `t2ID` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  `t2FolioMK` CHAR(8) NOT NULL, 
  `t2CodigoSO` INT(5) NOT NULL,
  `t2FechaTurno` DATE,
  `t2FechaPrevencion` DATE,
  `t2FechaProrroga` DATE,
  `t2FechaRespuesta` DATE,
  `t2status` INT(1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE  `tbTurnoSO` ADD PRIMARY KEY(  `t2ID` ) ;

models/TurnoSujeto.php