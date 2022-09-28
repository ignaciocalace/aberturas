CREATE TABLE `jobs` (
  `id_job` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(60) DEFAULT NULL,
  `descripcion` longtext,
  `info` varchar(45) DEFAULT NULL,
  `foto1` varchar(45) DEFAULT NULL,
  `foto2` varchar(45) DEFAULT NULL,
  `foto3` varchar(45) DEFAULT NULL,
  `foto4` varchar(45) DEFAULT NULL,
  `foto5` varchar(45) DEFAULT NULL,
  `foto6` varchar(45) DEFAULT NULL,
  `foto7` varchar(45) DEFAULT NULL,
  `foto8` varchar(45) DEFAULT NULL,
  `foto9` varchar(45) DEFAULT NULL,
  `foto10` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_job`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `jobs` (`id_job`, `titulo`, `descripcion`, `info`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `foto7`, `foto8`, `foto9`, `foto10`) VALUES
(1, 'Cerramiento en Santa Ana', 'Cerramientos de barbacoa completa, con cierres lara en todas las puertas corredizas. ', 'Modena', 'DSC_8229', 'DSC_8234', 'DSC_8231', 'DSC_8230', 'DSC_8236', 'DSC_8241', 'DSC_8242', 'DSC_8245', 'DSC_8246', 'DSC_8237');
INSERT INTO `jobs` (`id_job`, `titulo`, `descripcion`, `info`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `foto7`, `foto8`, `foto9`, `foto10`) VALUES
(2, 'Cerramiento en Parque Miramar', NULL, 'Serie 30', 'DSC_8214', 'DSC_8225', 'DSC_8222', 'DSC_8217', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `jobs` (`id_job`, `titulo`, `descripcion`, `info`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `foto7`, `foto8`, `foto9`, `foto10`) VALUES
(3, 'Cerramiento en Santa Ana', NULL, 'Modena', 'DSC_8249', 'DSC_8252', 'DSC_8261', 'DSC_8266', 'DSC_8267', 'DSC_8269', 'DSC_8270', 'DSC_8272', 'DSC_8273', 'DSC_8274');

;