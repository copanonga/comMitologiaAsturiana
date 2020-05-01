CREATE TABLE IF NOT EXISTS `#__ma_mitologia_asturiana` (
    `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `criatura` varchar(100) NOT NULL DEFAULT '',
    `descripcion` varchar(255) NOT NULL DEFAULT '',
    `anotaciones` varchar(255) NOT NULL DEFAULT '',
    `estado` tinyint(1) NOT NULL DEFAULT '1',
    `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
PRIMARY KEY (`id`),
INDEX (`criatura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;