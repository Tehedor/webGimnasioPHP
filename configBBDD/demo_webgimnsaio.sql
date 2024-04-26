SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- -------------------------------------------------
-- Estructura de tabla para la tabla `usuarios`
-- -------------------------------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(255)  NOT NULL,
    `email` varchar(255)  NOT NULL,
    `password` varchar(255)  NOT NULL,
    `last_date` DATE,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Registros `usuarios`
-- ----------------------------

INSERT INTO `usuarios` (`username`, `email`, `password`, `last_date`) VALUES
('user', 'user@gmail.com', 'user', '2024-05-07'),
('admin', 'admin@gmail.com', 'admin', '2020-04-26');
