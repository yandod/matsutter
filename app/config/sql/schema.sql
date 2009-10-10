#App sql generated on: 2009-10-10 06:02:45 : 1255168965

DROP TABLE IF EXISTS `posts`;


CREATE TABLE `posts` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`user_id` int(11) NOT NULL,
	`body` text DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`));

