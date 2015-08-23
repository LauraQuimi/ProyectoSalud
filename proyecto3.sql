-- File name: C:\Users\HECTOR-LUIS\Desktop\proyecto3.sql
-- Created by Access2mySQL Pro http://www.data-conversions.net


--
-- Estructura de la tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `idTIPO_USUARIO` INT(11) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTIPO_USUARIO` ASC)
) DEFAULT CHARSET=utf8 ENGINE=InnoDB;

--
-- Estructura de la tabla para la tabla `area_trabajo`
--

CREATE TABLE `area_trabajo` (
  `idAREA_TRABAJO` INT(11) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idAREA_TRABAJO` ASC)
) DEFAULT CHARSET=utf8 ENGINE=InnoDB;

--
-- Estructura de la tabla para la tabla `tipo_institucion`
--

CREATE TABLE `tipo_institucion` (
  `idTIPO_INSTITUCION` INT(11) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTIPO_INSTITUCION` ASC)
) DEFAULT CHARSET=utf8 ENGINE=InnoDB;

--
-- Estructura de la tabla para la tabla `tipo_identificacion`
--

CREATE TABLE `tipo_identificacion` (
  `idTIPO_IDENTIFICACION` INT(11) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTIPO_IDENTIFICACION` ASC)
) DEFAULT CHARSET=utf8 ENGINE=InnoDB;

--
-- Estructura de la tabla para la tabla `tipo_relacion`
--

CREATE TABLE `tipo_relacion` (
  `idTIPO_RELACION` INT(11) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTIPO_RELACION` ASC)
) DEFAULT CHARSET=utf8 ENGINE=InnoDB;

--
-- Estructura de la tabla para la tabla `tipo_notificacion`
--

CREATE TABLE `tipo_notificacion` (
  `idTIPO_NOTIFICACION` INT(11) NOT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTIPO_NOTIFICACION` ASC)
) DEFAULT CHARSET=utf8 ENGINE=InnoDB;

--
-- Estructura de la tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUSUARIO` INT(11) NOT NULL,
  `idTIPO_USUARIO` INT(11) NOT NULL,
  `idTIPO_IDENTIFICACION` INT(11) NOT NULL,
  `num_identificacion` BIGINT(10) NOT NULL,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `fecha_nac` DATE NOT NULL,
  `celular` BIGINT(10) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `genero` TINYINT(2) NOT NULL,
  `user` VARCHAR(10) NOT NULL,
  `password` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idUSUARIO` ASC),
  UNIQUE KEY `user_UNIQUE` (`user` ASC),
  KEY `fk_USUARIO_TIPO_USUARIO_idx` (`idTIPO_USUARIO` ASC),
  KEY `fk_USUARIO_TIPO_IDENTIFICACION1_idx` (`idTIPO_IDENTIFICACION` ASC),
  CONSTRAINT `fk_USUARIO_TIPO_IDENTIFICACION1` FOREIGN KEY (`idTIPO_IDENTIFICACION`) REFERENCES `tipo_identificacion` (`idTIPO_IDENTIFICACION`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_USUARIO_TIPO_USUARIO` FOREIGN KEY (`idTIPO_USUARIO`) REFERENCES `tipo_usuario` (`idTIPO_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) DEFAULT CHARSET=utf8 ENGINE=InnoDB;

--
-- Estructura de la tabla para la tabla `datos_laborales`
--

CREATE TABLE `datos_laborales` (
  `idDATOS_LABORALES` INT(11) NOT NULL,
  `nombre_institucion` VARCHAR(45) NOT NULL,
  `anio_ingreso` DATE NOT NULL,
  `idTIPO_INSTITUCION` INT(11) NOT NULL,
  `idAREA_TRABAJO` INT(11) NOT NULL,
  `idUSUARIO` INT(11) NOT NULL,
  PRIMARY KEY (`idDATOS_LABORALES` ASC),
  KEY `fk_DATOS_LABORALES_TIPO_INSTITUCION1_idx` (`idTIPO_INSTITUCION` ASC),
  KEY `fk_DATOS_LABORALES_AREA_TRABAJO1_idx` (`idAREA_TRABAJO` ASC),
  KEY `fk_DATOS_LABORALES_USUARIO1_idx` (`idUSUARIO` ASC),
  CONSTRAINT `fk_DATOS_LABORALES_AREA_TRABAJO1` FOREIGN KEY (`idAREA_TRABAJO`) REFERENCES `area_trabajo` (`idAREA_TRABAJO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_DATOS_LABORALES_TIPO_INSTITUCION1` FOREIGN KEY (`idTIPO_INSTITUCION`) REFERENCES `tipo_institucion` (`idTIPO_INSTITUCION`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_DATOS_LABORALES_USUARIO1` FOREIGN KEY (`idUSUARIO`) REFERENCES `usuario` (`idUSUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) DEFAULT CHARSET=utf8 ENGINE=InnoDB;

--
-- Estructura de la tabla para la tabla `directorio`
--

CREATE TABLE `directorio` (
  `idDIRECTORIO` INT(11) NOT NULL,
  `nombre_contacto` VARCHAR(45) NOT NULL,
  `apellido_contacto` VARCHAR(45) NOT NULL,
  `celular_contacto` VARCHAR(10) NOT NULL,
  `email_contacto` VARCHAR(45) NOT NULL,
  `idTIPO_RELACION` INT(11) NOT NULL,
  `idUSUARIO` INT(11) NOT NULL,
  PRIMARY KEY (`idDIRECTORIO` ASC),
  KEY `fk_DIRECTORIO_TIPO_RELACION1_idx` (`idTIPO_RELACION` ASC),
  KEY `fk_DIRECTORIO_USUARIO1_idx` (`idUSUARIO` ASC),
  CONSTRAINT `fk_DIRECTORIO_TIPO_RELACION1` FOREIGN KEY (`idTIPO_RELACION`) REFERENCES `tipo_relacion` (`idTIPO_RELACION`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_DIRECTORIO_USUARIO1` FOREIGN KEY (`idUSUARIO`) REFERENCES `usuario` (`idUSUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) DEFAULT CHARSET=utf8 ENGINE=InnoDB;

--
-- Estructura de la tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `idNOTIFICACION` INT(11) NOT NULL,
  `fecha` DATETIME NULL DEFAULT NULL,
  `observacion` VARCHAR(45) NOT NULL,
  `idDIRECTORIO` INT(11) NOT NULL,
  `idTIPO_NOTIFICACION` INT(11) NOT NULL,
  PRIMARY KEY (`idNOTIFICACION` ASC),
  KEY `fk_NOTIFICACION_DIRECTORIO1_idx` (`idDIRECTORIO` ASC),
  KEY `fk_NOTIFICACION_TIPO_NOTIFICACION1_idx` (`idTIPO_NOTIFICACION` ASC),
  CONSTRAINT `fk_NOTIFICACION_DIRECTORIO1` FOREIGN KEY (`idDIRECTORIO`) REFERENCES `directorio` (`idDIRECTORIO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_NOTIFICACION_TIPO_NOTIFICACION1` FOREIGN KEY (`idTIPO_NOTIFICACION`) REFERENCES `tipo_notificacion` (`idTIPO_NOTIFICACION`) ON DELETE NO ACTION ON UPDATE NO ACTION
) DEFAULT CHARSET=utf8 ENGINE=InnoDB;

--
-- Estructura de la tabla para la tabla `datos_profesionales`
--

CREATE TABLE `datos_profesionales` (
  `idDATOS_PROFESIONALES` INT(11) NOT NULL,
  `idUSUARIO` INT(11) NOT NULL,
  `universidad` VARCHAR(45) NOT NULL,
  `titulo` VARCHAR(45) NOT NULL,
  `anio_graduacion` DATE NOT NULL,
  PRIMARY KEY (`idDATOS_PROFESIONALES` ASC),
  KEY `fk_DATOS_PROFESIONALES_USUARIO1_idx` (`idUSUARIO` ASC),
  CONSTRAINT `fk_DATOS_PROFESIONALES_USUARIO1` FOREIGN KEY (`idUSUARIO`) REFERENCES `usuario` (`idUSUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) DEFAULT CHARSET=utf8 ENGINE=InnoDB;

--
-- Estructura de la tabla para la tabla `actividad_cardiaca`
--

CREATE TABLE `actividad_cardiaca` (
  `idACTIVIDAD_CARDIACA` BIGINT(12) NOT NULL,
  `idUSUARIO` INT(11) NOT NULL,
  `fecha_hora` DATETIME NOT NULL,
  `pulso` TINYINT(2) NOT NULL,
  PRIMARY KEY (`idACTIVIDAD_CARDIACA` ASC),
  KEY `fk_ACTIVIDAD_CARDIACA_USUARIO1_idx` (`idUSUARIO` ASC),
  CONSTRAINT `fk_ACTIVIDAD_CARDIACA_USUARIO1` FOREIGN KEY (`idUSUARIO`) REFERENCES `usuario` (`idUSUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION
) DEFAULT CHARSET=utf8 ENGINE=InnoDB;