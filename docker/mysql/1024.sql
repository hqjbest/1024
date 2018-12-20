-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `adept`;
CREATE TABLE `adept` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT '0',
  `updated_at` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `adept` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1,	'研发部',	'',	0,	0),
(2,	'运营部',	NULL,	0,	0),
(3,	'人事部',	NULL,	0,	0);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `adept_id` int(11) DEFAULT NULL,
  `sex` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `join_time` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `user` (`id`, `username`, `adept_id`, `sex`, `auth_key`, `password_hash`, `password_reset_token`, `number`, `email`, `phone`, `status`, `join_time`, `created_at`, `updated_at`) VALUES
(1,	'何庆甲',	3,	'男',	'',	'$2y$13$UzKjyS5R6FlUF46We29fqOJ5eOM/HGq7e7S01nUg2wv4BbZMUpCFC',	NULL,	'371456199210111614',	'admin@1024.com',	'13245852135',	10,	1535209314,	1535209314,	1535209314),
(2,	'胡敬彬',	1,	'男',	'',	'',	NULL,	'371355199101101314',	'hujingbin@163.com',	'13214567415',	10,	1540016365,	1540016365,	1540016365),
(3,	'杨敏',	2,	'女',	'',	'',	NULL,	'371355199212031314',	'yangmin@163.com',	'13345789632',	10,	1540016388,	1540016388,	1540016388);


-- 2018-12-19 08:51:48