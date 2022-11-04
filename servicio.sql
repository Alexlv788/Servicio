create database solicitudmantenimiento;

CREATE TABLE IF NOT EXISTS `mantenimiento`.`SOLICITUD` (
  `id` INT NOT NULL auto_increment,
  `folio` varchar(6) NOT NULL ,
  `departamento` char(7) NOT NULL,
  `areaSolicitante` VARCHAR(20) NOT NULL,
  `nombreSolicitante` VARCHAR(50) NOT NULL,
  `fechaElaboracion` DATE NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`));


  use mantenimiento;
  select * from solicitud;
  select id from solicitud;
 SELECT max(id) as id FROM solicitud ORDER BY id DESC;
 SELECT max(fechaElaboracion) as fechaElaboracion FROM solicitud ORDER BY fechaElaboracion DESC;
 

  drop table solicitud;
  
alter table solicitud  auto_increment =1;




SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'mantenimiento'
AND   TABLE_NAME   = 'SOLICITUD';

TRUNCATE TABLE solicitud;

select version();
