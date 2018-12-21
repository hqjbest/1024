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
  `toptime` char(5) COLLATE utf8_unicode_ci DEFAULT '09:00',
  `undertime` char(5) COLLATE utf8_unicode_ci DEFAULT '18:00',
  `created_at` int(11) DEFAULT '0',
  `updated_at` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `adept` (`id`, `name`, `description`, `toptime`, `undertime`, `created_at`, `updated_at`) VALUES
(1,	'研发部',	'',	'10:00',	'19:00',	1545401297,	1545401297),
(2,	'运营部',	'',	'09:30',	'18:30',	1545401297,	1545401297),
(3,	'人事部',	'',	'09:00',	'18:00',	1545401297,	1545401297);

DROP TABLE IF EXISTS `holiday`;
CREATE TABLE `holiday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `first_time` int(11) DEFAULT NULL,
  `last_time` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `holiday` (`id`, `name`, `first_time`, `last_time`, `created_at`, `updated_at`) VALUES
(1,	'春节',	20180101,	20180101,	1545400000,	1545400000),
(2,	'劳动节',	20180501,	20180501,	1545400000,	1545400000),
(3,	'国庆节',	20181001,	20181007,	1545400000,	1545400000);

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

DROP TABLE IF EXISTS `user_action`;
CREATE TABLE `user_action` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `adept_id` int(11) DEFAULT NULL,
  `first_time` char(5) DEFAULT '0',
  `last_time` char(5) DEFAULT '0',
  `status` varchar(16) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `created_at` int(11) DEFAULT '0',
  `updated_at` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user_action` (`id`, `user_id`, `date`, `adept_id`, `first_time`, `last_time`, `status`, `description`, `created_at`, `updated_at`) VALUES
(0,	3,	20181111,	3,	'08:00',	'15:00',	'早退',	NULL,	0,	0),
(1,	2,	20181111,	2,	'11:00',	'19:30',	'迟到',	NULL,	0,	0),
(2,	1,	20181111,	1,	'08:00',	'19:30',	'正常',	NULL,	0,	0),
(4,	1,	20181112,	1,	'0',	'0',	'矿工',	NULL,	0,	0),
(5,	2,	20181112,	2,	'08:00',	'19:30',	'正常',	NULL,	0,	0),
(6,	3,	20181001,	3,	'08:00',	'19:30',	'加班',	NULL,	0,	0);

DROP TABLE IF EXISTS `worktime`;
CREATE TABLE `worktime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adept_id` int(11) DEFAULT NULL,
  `top_time` char(5) DEFAULT '0',
  `undertime` char(5) DEFAULT '0',
  ` created_at` int(11) DEFAULT '0',
  `updated_at` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `adept_id_UNIQUE` (`adept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `worktime` (`id`, `adept_id`, `top_time`, `undertime`, ` created_at`, `updated_at`) VALUES
(1,	1,	'09:00',	'18:00',	1545400060,	1545400060),
(2,	2,	'09:30',	'18:30',	1545400000,	1545400000),
(3,	3,	'10:00',	'19:00',	1545400000,	1545400000);

-- 2018-12-21 19:46:25