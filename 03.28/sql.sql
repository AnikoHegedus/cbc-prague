CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `product_id` int(11) NULL DEFAULT NULL,
  `text` text NULL COLLATE utf8_czech_ci DEFAULT NULL,
  `is_banned` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


INSERT INTO `comment` (`id`, `user_id`, `product_id`, `text`, `is_banned`, `created_at`) VALUES ("15", "17", "25", "text", "0", '2016-11-12 00:00:00')
$statement = $db -> prepare ("INSERT INTO `comment` (`id`, `user_id`, `product_id`, `text`, `is_banned`, `created_at`) VALUES (?, ?, ?, ?, ?, ?)");
$statement -> execute (["15", "17", "25", "text", "0", '2016-11-12 00:00:00']);
