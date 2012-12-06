CREATE TABLE `addons` (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`url` varchar(100) DEFAULT NULL,
	`shortname` varchar(100) DEFAULT NULL,
	`description` varchar(255) DEFAULT NULL,
	`params` varchar(255) DEFAULT NULL,
	`search_var` varchar(100) DEFAULT NULL,
	`name` varchar(16) DEFAULT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8

//INSERT INTO `addons` (`id`,`url`,`shortname`,`description`,`params`,`search_var`,`name`)
//VALUES
//	(1, 'your.seach.url', 'Name', 'Description', 'custom:vars|if:needed', 'term', 'web');