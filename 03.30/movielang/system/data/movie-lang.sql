# movie

DROP TABLE IF EXISTS `movie`;

CREATE TABLE `movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(4) NULL COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
  
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

# movie_translation

DROP TABLE IF EXISTS `movie_translation`;

CREATE TABLE `movie_translation` (
  `movie_id` int(11) NULL DEFAULT NULL,
  `locale` varchar(2) NULL COLLATE utf8_general_ci DEFAULT NULL,
  `poster_img` varchar(127) NULL COLLATE utf8_general_ci DEFAULT NULL,
  `title` varchar(127) NULL COLLATE utf8_general_ci DEFAULT NULL,
  `plot` text NULL COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`movie_id`, `locale`)
  
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `movie` (`id`, `year`, `created_at`, `updated_at`) VALUES ('1', '2016', NOW(), NOW());

INSERT INTO `movie_translation` (`movie_id`, `locale`, `poster_img`, `title`, `plot`) VALUES
(1, 'en', 'monster-calls.jpg', 'A Monster Calls', 'A boy seeks the help of a tree monster to cope with his single mother\'s terminal illness.'),
(1, 'cz', 'volani-netvora.jpg', 'Volání netvora: Příběh života ', 'Adaptace fantasy povídky Patricka Nesse. Příběh o velké odvaze malého kluka, který se postavil svému největšímu strachu. ');
