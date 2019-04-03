CREATE TABLE `tbSolicitudes` (
  `t1FolioMkatsina` CHAR(8) NOT NULL,
  `t1FolioINFOMEX` CHAR(8) NOT NULL,
  `t1SolicitudText` LongText NOT NULL,
  `t1FechaRecepcion` DATE,
  `t1FechaTurno` DATE ,
  `t1FechaPrevencionSO` DATE,
  `t1LimPetProrroga` DATE,
  `t1FechaProrroga` DATE,
  `t1FechaLimiteRespoSO` DATE,
  `t1FechaLimiteResponder` DATE,
  `t1FechaLimiteInfeomex` DATE,
  `t1FechaConcluida` DATE,
  `t1NumerPreg` INT(2),
  `t1Recepcion` CHAR(25),
  `t1ConDatosPer` BIT,
  `t1FolioRRInfomex` CHAR(10),
  `t1FolioRRivai` CHAR(9),
  `t1status` INT(1)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `tbSolicitudes` ADD PRIMARY KEY(`t1FolioMkatsina`);
ALTER TABLE  `tbSolicitudes` ADD INDEX (  `t1FolioMkatsina` ) ;
ALTER TABLE `tbSolicitudes` ADD INDEX (`t1FolioMkatsina`);
ALTER TABLE `tbSolicitudes` add INDEX (`t1FolioINFOMEX`);
ALTER TABLE `tbSolicitudes` ADD INDEX (`t1FolioRRInfomex`);
ALTER TABLE `tbSolicitudes` ADD INDEX (`t1FolioRRivai`);
