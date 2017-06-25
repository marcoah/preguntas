CREATE TABLE `tbl_preguntas` (
  `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` text NOT NULL,
  `fecha_hora` timestamp NULL DEFAULT NULL,
  `nombre_completo` varchar(75) DEFAULT NULL,
  `correo_e` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `leido` int(11) DEFAULT '0',
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;