
-- Dumping structure for table wp_modules.feature_flags
DROP TABLE IF EXISTS `feature_flags`;
CREATE TABLE IF NOT EXISTS `feature_flags` (
  `feature_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `feature` varchar(20) NOT NULL,
  `module_id` varchar(255) NOT NULL,
  `allow_access` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`feature_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table wp_modules.feature_flags: ~0 rows (approximately)
/*!40000 ALTER TABLE `feature_flags` DISABLE KEYS */;
/*!40000 ALTER TABLE `feature_flags` ENABLE KEYS */;

-- Dumping structure for table wp_modules.modules
DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `module_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `module` varchar(255) NOT NULL,
  `lic_code` varchar(10) NOT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table wp_modules.modules: ~3 rows (approximately)
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
REPLACE INTO `modules` (`module_id`, `module`, `lic_code`) VALUES
	(1, 'Strategies', 'wonpager'),
	(2, 'Ledership', 'wonpager'),
	(3, 'Leadership', 'gtr');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;

-- Dumping structure for table wp_modules.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lic_code` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table wp_modules.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`user_id`, `user_name`, `password`, `lic_code`) VALUES
	(4, 'zzzz', '$2y$10$1U6mYvJRqqH4SLFm4qgGw./ZA0AejY7aNoQtFP/7xhGs8FlR8E5ga', 'wonpager'),
	(5, 'aaaa', '$2y$10$cA3G2CkVUYQlT4GYigyjuevSxSkijz8DOwqaioVcwK0piAZ3Kw.I6', 'gtr');
