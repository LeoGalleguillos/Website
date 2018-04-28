CREATE TABLE `webpage` (
      `webpage_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `website_id` int(10) unsigned NOT NULL,
      `url` VARCHAR(255) NOT NULL,
      `title` VARCHAR(255) NOT NULL,
      `html` MEDIUMTEXT NOT NULL,
      PRIMARY KEY (`webpage_id`),
      KEY `website_id` (`website_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
