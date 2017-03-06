# song
CREATE TABLE `song` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NULL DEFAULT NULL,
  `name` varchar(127) NULL COLLATE utf8_general_ci DEFAULT NULL,
  `released` year NULL DEFAULT NULL,
  PRIMARY KEY (`id`)

) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

# author
CREATE TABLE `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(127) NULL COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)

) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `song`
(`id`, `author_id`, `name`, `released`)
VALUES
(2, 3, 'Rocky Mountain High', 1972);

INSERT INTO `author`
(`id`, `name`)
VALUES
(3, 'John Denver');