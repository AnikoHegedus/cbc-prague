# movie

DROP TABLE IF EXISTS `movie`;

CREATE TABLE `movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poster_img` varchar(127) NULL COLLATE utf8_general_ci DEFAULT NULL,
  `title` varchar(127) NULL COLLATE utf8_general_ci DEFAULT NULL,
  `year` varchar(4) NULL COLLATE utf8_general_ci DEFAULT NULL,
  `plot` text NULL COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
  
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


INSERT INTO `movie` (`id`, `poster_img`, `title`, `year`, `plot`, `created_at`, `updated_at`) VALUES ('1', 'monster-calls.jpg', 'A Monster Calls', '2016', 'A boy seeks the help of a tree monster to cope with his single mother\'s terminal illness.', NOW(), NOW());