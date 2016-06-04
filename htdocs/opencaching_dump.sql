/*
 Navicat Premium Data Transfer

 Source Server         : http://10.10.0.101/
 Source Server Type    : MySQL
 Source Server Version : 50547
 Source Host           : 10.10.0.101
 Source Database       : opencaching

 Target Server Type    : MySQL
 Target Server Version : 50547
 File Encoding         : utf-8

 Date: 06/02/2016 15:46:56 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `attribute_categories`
-- ----------------------------
DROP TABLE IF EXISTS `attribute_categories`;
CREATE TABLE `attribute_categories` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  `color` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `attribute_groups`
-- ----------------------------
DROP TABLE IF EXISTS `attribute_groups`;
CREATE TABLE `attribute_groups` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` tinyint(3) unsigned NOT NULL,
  `name` varchar(60) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_adoption`
-- ----------------------------
DROP TABLE IF EXISTS `cache_adoption`;
CREATE TABLE `cache_adoption` (
  `cache_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL COMMENT 'via Trigger',
  UNIQUE KEY `id` (`cache_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_adoptions`
-- ----------------------------
DROP TABLE IF EXISTS `cache_adoptions`;
CREATE TABLE `cache_adoptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cache_id` int(10) unsigned NOT NULL,
  `date` datetime NOT NULL,
  `from_user_id` int(10) unsigned NOT NULL,
  `to_user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cache_id` (`cache_id`,`date`),
  KEY `from_user_id` (`from_user_id`),
  KEY `to_user_id` (`to_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_attrib`
-- ----------------------------
DROP TABLE IF EXISTS `cache_attrib`;
CREATE TABLE `cache_attrib` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  `group_id` tinyint(3) unsigned NOT NULL,
  `selectable` tinyint(1) NOT NULL DEFAULT '1',
  `category` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `search_default` tinyint(1) unsigned NOT NULL,
  `default` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `icon_large` varchar(80) NOT NULL COMMENT 'obsolete',
  `icon_no` varchar(80) NOT NULL COMMENT 'obsolete',
  `icon_undef` varchar(80) NOT NULL COMMENT 'obsolete',
  `html_desc` mediumtext NOT NULL,
  `html_desc_trans_id` int(10) unsigned NOT NULL,
  `hidden` tinyint(1) NOT NULL,
  `gc_id` tinyint(3) unsigned NOT NULL,
  `gc_inc` tinyint(1) NOT NULL,
  `gc_name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`,`id`),
  KEY `default` (`default`),
  KEY `selectable` (`selectable`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `cache_coordinates`
-- ----------------------------
DROP TABLE IF EXISTS `cache_coordinates`;
CREATE TABLE `cache_coordinates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `cache_id` int(10) unsigned NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `restored_by` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cache_id` (`cache_id`,`date_created`),
  KEY `longitude` (`longitude`),
  KEY `latitude` (`latitude`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='via Trigger (caches)';

-- ----------------------------
--  Table structure for `cache_countries`
-- ----------------------------
DROP TABLE IF EXISTS `cache_countries`;
CREATE TABLE `cache_countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `cache_id` int(10) unsigned NOT NULL,
  `country` char(2) NOT NULL DEFAULT '',
  `restored_by` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cache_id` (`cache_id`,`date_created`),
  KEY `country` (`country`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='via Trigger (caches)';

-- ----------------------------
--  Table structure for `cache_desc`
-- ----------------------------
DROP TABLE IF EXISTS `cache_desc`;
CREATE TABLE `cache_desc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(36) NOT NULL,
  `node` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL COMMENT 'via Trigger (cache_desc)',
  `last_modified` datetime NOT NULL COMMENT 'via Trigger (cache_desc)',
  `cache_id` int(10) unsigned NOT NULL,
  `language` char(2) NOT NULL,
  `desc` longtext NOT NULL,
  `desc_html` tinyint(1) NOT NULL DEFAULT '1',
  `desc_htmledit` tinyint(1) NOT NULL DEFAULT '1',
  `hint` longtext NOT NULL,
  `short_desc` varchar(120) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cache_id` (`cache_id`,`language`),
  UNIQUE KEY `uuid` (`uuid`),
  KEY `last_modified` (`last_modified`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_desc_modified`
-- ----------------------------
DROP TABLE IF EXISTS `cache_desc_modified`;
CREATE TABLE `cache_desc_modified` (
  `cache_id` int(10) unsigned NOT NULL,
  `language` char(2) NOT NULL,
  `date_modified` date NOT NULL COMMENT 'no time! see restorecaches.php',
  `date_created` datetime NOT NULL,
  `desc` longtext,
  `desc_html` tinyint(1) NOT NULL DEFAULT '0',
  `desc_htmledit` tinyint(1) NOT NULL DEFAULT '0',
  `hint` longtext,
  `short_desc` varchar(120) NOT NULL,
  `restored_by` int(10) NOT NULL,
  UNIQUE KEY `cache_id` (`cache_id`,`date_modified`,`language`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_ignore`
-- ----------------------------
DROP TABLE IF EXISTS `cache_ignore`;
CREATE TABLE `cache_ignore` (
  `cache_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cache_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_list_bookmarks`
-- ----------------------------
DROP TABLE IF EXISTS `cache_list_bookmarks`;
CREATE TABLE `cache_list_bookmarks` (
  `cache_list_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `password` varchar(80) NOT NULL,
  UNIQUE KEY `cache_list_id` (`cache_list_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_list_items`
-- ----------------------------
DROP TABLE IF EXISTS `cache_list_items`;
CREATE TABLE `cache_list_items` (
  `cache_list_id` int(10) NOT NULL,
  `cache_id` int(10) NOT NULL,
  UNIQUE KEY `cache_list_id` (`cache_list_id`,`cache_id`),
  KEY `cache_id` (`cache_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_list_watches`
-- ----------------------------
DROP TABLE IF EXISTS `cache_list_watches`;
CREATE TABLE `cache_list_watches` (
  `cache_list_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  UNIQUE KEY `cache_list_id` (`cache_list_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_lists`
-- ----------------------------
DROP TABLE IF EXISTS `cache_lists`;
CREATE TABLE `cache_lists` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(36) NOT NULL,
  `node` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `last_added` datetime DEFAULT NULL,
  `last_state_change` datetime DEFAULT NULL,
  `name` varchar(80) NOT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT '0',
  `description` longtext NOT NULL,
  `desc_htmledit` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `password` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`),
  KEY `name` (`name`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_location`
-- ----------------------------
DROP TABLE IF EXISTS `cache_location`;
CREATE TABLE `cache_location` (
  `cache_id` int(10) unsigned NOT NULL,
  `last_modified` datetime NOT NULL COMMENT 'via Trigger (cache_location)',
  `adm1` varchar(120) DEFAULT NULL,
  `adm2` varchar(120) DEFAULT NULL,
  `adm3` varchar(120) DEFAULT NULL,
  `adm4` varchar(120) DEFAULT NULL,
  `code1` varchar(2) DEFAULT NULL,
  `code2` varchar(3) DEFAULT NULL,
  `code3` varchar(4) DEFAULT NULL,
  `code4` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`cache_id`),
  KEY `code1` (`code1`,`code2`,`code3`,`code4`),
  KEY `adm1` (`adm1`,`adm2`),
  KEY `adm1_2` (`adm1`,`code1`),
  KEY `code1_2` (`code1`,`adm3`),
  KEY `adm1_3` (`adm1`,`adm3`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='via cronjob';

-- ----------------------------
--  Table structure for `cache_logs`
-- ----------------------------
DROP TABLE IF EXISTS `cache_logs`;
CREATE TABLE `cache_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(36) NOT NULL,
  `node` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL COMMENT 'via Trigger (cache_logs)',
  `entry_last_modified` datetime NOT NULL COMMENT 'via Trigger (cache_logs)',
  `last_modified` datetime NOT NULL COMMENT 'via Trigger (cache_logs)',
  `log_last_modified` datetime NOT NULL COMMENT 'via Triggers',
  `cache_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `oc_team_comment` tinyint(1) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  `order_date` datetime NOT NULL,
  `needs_maintenance` tinyint(1) NOT NULL DEFAULT '0',
  `listing_outdated` tinyint(1) NOT NULL DEFAULT '0',
  `text` longtext NOT NULL,
  `text_html` tinyint(1) NOT NULL DEFAULT '1',
  `text_htmledit` tinyint(1) NOT NULL DEFAULT '1',
  `owner_notified` tinyint(1) NOT NULL DEFAULT '0',
  `picture` smallint(5) unsigned NOT NULL COMMENT 'via Trigger (picture)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`),
  KEY `owner_notified` (`owner_notified`),
  KEY `last_modified` (`last_modified`),
  KEY `type` (`type`,`cache_id`),
  KEY `date_created` (`date_created`),
  KEY `user_id` (`user_id`,`cache_id`),
  KEY `cache_id` (`cache_id`,`user_id`),
  KEY `date` (`cache_id`,`date`,`date_created`),
  KEY `order_date` (`cache_id`,`order_date`,`date_created`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='Attention: modifications to this table may need to be applied also to cache_logs_archived, cache_logs_modified and trigger cacheLogsBeforeUpdate!';

-- ----------------------------
--  Table structure for `cache_logs_archived`
-- ----------------------------
DROP TABLE IF EXISTS `cache_logs_archived`;
CREATE TABLE `cache_logs_archived` (
  `id` int(10) unsigned NOT NULL,
  `uuid` varchar(36) NOT NULL,
  `node` tinyint(3) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `entry_last_modified` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `log_last_modified` datetime NOT NULL,
  `cache_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `oc_team_comment` tinyint(1) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  `order_date` datetime NOT NULL,
  `needs_maintenance` tinyint(1) NOT NULL DEFAULT '0',
  `listing_outdated` tinyint(1) NOT NULL DEFAULT '0',
  `text` longtext NOT NULL,
  `text_html` tinyint(1) NOT NULL,
  `text_htmledit` tinyint(1) NOT NULL,
  `owner_notified` tinyint(1) NOT NULL,
  `picture` smallint(5) unsigned NOT NULL,
  `deletion_date` datetime DEFAULT NULL,
  `deleted_by` int(10) NOT NULL,
  `restored_by` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cache_id` (`cache_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_logs_modified`
-- ----------------------------
DROP TABLE IF EXISTS `cache_logs_modified`;
CREATE TABLE `cache_logs_modified` (
  `id` int(10) unsigned NOT NULL,
  `uuid` varchar(36) NOT NULL,
  `node` tinyint(3) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `entry_last_modified` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `log_last_modified` datetime NOT NULL,
  `cache_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `oc_team_comment` tinyint(1) NOT NULL,
  `date` datetime NOT NULL,
  `needs_maintenance` tinyint(1) NOT NULL DEFAULT '0',
  `listing_outdated` tinyint(1) NOT NULL DEFAULT '0',
  `text` mediumtext NOT NULL,
  `text_html` tinyint(1) NOT NULL,
  `modify_date` date DEFAULT NULL,
  UNIQUE KEY `id` (`id`,`modify_date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_logs_restored`
-- ----------------------------
DROP TABLE IF EXISTS `cache_logs_restored`;
CREATE TABLE `cache_logs_restored` (
  `id` int(10) NOT NULL,
  `date_modified` datetime NOT NULL,
  `cache_id` int(10) unsigned NOT NULL,
  `original_id` int(10) unsigned NOT NULL,
  `restored_by` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `original_id` (`original_id`),
  KEY `cache_id` (`cache_id`,`date_modified`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_logtype`
-- ----------------------------
DROP TABLE IF EXISTS `cache_logtype`;
CREATE TABLE `cache_logtype` (
  `cache_type_id` tinyint(3) unsigned NOT NULL,
  `log_type_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`cache_type_id`,`log_type_id`),
  KEY `log_type_id` (`log_type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='obsolete';

-- ----------------------------
--  Table structure for `cache_maps`
-- ----------------------------
DROP TABLE IF EXISTS `cache_maps`;
CREATE TABLE `cache_maps` (
  `cache_id` int(10) unsigned NOT NULL DEFAULT '0',
  `last_refresh` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`cache_id`),
  KEY `last_refresh` (`last_refresh`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='via cronjob';

-- ----------------------------
--  Table structure for `cache_npa_areas`
-- ----------------------------
DROP TABLE IF EXISTS `cache_npa_areas`;
CREATE TABLE `cache_npa_areas` (
  `cache_id` int(10) unsigned NOT NULL,
  `npa_id` int(10) unsigned NOT NULL,
  `calculated` tinyint(1) NOT NULL,
  PRIMARY KEY (`cache_id`,`npa_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_rating`
-- ----------------------------
DROP TABLE IF EXISTS `cache_rating`;
CREATE TABLE `cache_rating` (
  `cache_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `rating_date` datetime NOT NULL,
  PRIMARY KEY (`cache_id`,`user_id`),
  KEY `user_id` (`user_id`,`cache_id`),
  KEY `date` (`rating_date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_report_reasons`
-- ----------------------------
DROP TABLE IF EXISTS `cache_report_reasons`;
CREATE TABLE `cache_report_reasons` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  `order` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `cache_report_status`
-- ----------------------------
DROP TABLE IF EXISTS `cache_report_status`;
CREATE TABLE `cache_report_status` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `cache_reports`
-- ----------------------------
DROP TABLE IF EXISTS `cache_reports`;
CREATE TABLE `cache_reports` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `cacheid` int(11) unsigned NOT NULL,
  `userid` int(11) unsigned NOT NULL,
  `reason` tinyint(3) unsigned NOT NULL,
  `note` longtext NOT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `adminid` int(11) DEFAULT NULL,
  `lastmodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comment` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`,`adminid`),
  KEY `status_2` (`adminid`,`status`),
  KEY `userid` (`userid`),
  KEY `cacheid` (`cacheid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='submitted reports on caches';

-- ----------------------------
--  Table structure for `cache_size`
-- ----------------------------
DROP TABLE IF EXISTS `cache_size`;
CREATE TABLE `cache_size` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  `ordinal` tinyint(3) unsigned NOT NULL,
  `de` varchar(60) NOT NULL COMMENT 'obsolete',
  `en` varchar(60) NOT NULL COMMENT 'obsolete',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `cache_status`
-- ----------------------------
DROP TABLE IF EXISTS `cache_status`;
CREATE TABLE `cache_status` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  `de` varchar(60) NOT NULL COMMENT 'obsolete',
  `en` varchar(60) NOT NULL COMMENT 'obsolete',
  `allow_user_view` tinyint(1) NOT NULL,
  `allow_owner_edit_status` tinyint(1) NOT NULL,
  `allow_user_log` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `cache_status_modified`
-- ----------------------------
DROP TABLE IF EXISTS `cache_status_modified`;
CREATE TABLE `cache_status_modified` (
  `cache_id` int(10) unsigned NOT NULL,
  `date_modified` datetime NOT NULL,
  `old_state` tinyint(2) unsigned NOT NULL,
  `new_state` tinyint(2) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `cache_id` (`cache_id`,`date_modified`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_type`
-- ----------------------------
DROP TABLE IF EXISTS `cache_type`;
CREATE TABLE `cache_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `trans_id` int(10) NOT NULL,
  `ordinal` tinyint(3) unsigned NOT NULL,
  `short` varchar(10) NOT NULL,
  `de` varchar(60) NOT NULL,
  `en` varchar(60) NOT NULL,
  `icon_large` varchar(60) NOT NULL,
  `short2` varchar(15) NOT NULL,
  `short2_trans_id` int(10) NOT NULL,
  `kml_name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `cache_visits`
-- ----------------------------
DROP TABLE IF EXISTS `cache_visits`;
CREATE TABLE `cache_visits` (
  `cache_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id_ip` varchar(15) NOT NULL DEFAULT '0',
  `count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `last_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'via trigger (cache_visits)',
  PRIMARY KEY (`cache_id`,`user_id_ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_watches`
-- ----------------------------
DROP TABLE IF EXISTS `cache_watches`;
CREATE TABLE `cache_watches` (
  `cache_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cache_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `cache_waypoint_pool`
-- ----------------------------
DROP TABLE IF EXISTS `cache_waypoint_pool`;
CREATE TABLE `cache_waypoint_pool` (
  `wp_oc` char(7) NOT NULL,
  `uuid` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`wp_oc`),
  UNIQUE KEY `uuid` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `caches`
-- ----------------------------
DROP TABLE IF EXISTS `caches`;
CREATE TABLE `caches` (
  `cache_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(36) NOT NULL,
  `node` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL COMMENT 'via Trigger (caches)',
  `is_publishdate` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 = date_created is publication date',
  `last_modified` datetime NOT NULL COMMENT 'via Trigger (caches)',
  `listing_last_modified` datetime NOT NULL COMMENT 'via Trigger (caches, cache_desc, coordinates, pictures)',
  `meta_last_modified` datetime NOT NULL COMMENT 'via Trigger (stat_caches, gk_item_waypoint)',
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `status` tinyint(3) unsigned NOT NULL,
  `country` char(2) NOT NULL,
  `date_hidden` date NOT NULL,
  `size` tinyint(3) unsigned NOT NULL,
  `difficulty` tinyint(3) unsigned NOT NULL,
  `terrain` tinyint(3) unsigned NOT NULL,
  `logpw` varchar(20) DEFAULT NULL,
  `search_time` float unsigned NOT NULL DEFAULT '0',
  `way_length` float unsigned NOT NULL DEFAULT '0',
  `wp_gc` varchar(7) NOT NULL,
  `wp_gc_maintained` varchar(7) NOT NULL,
  `wp_nc` varchar(6) NOT NULL COMMENT 'obsolete',
  `wp_oc` varchar(7) NOT NULL,
  `desc_languages` varchar(60) NOT NULL COMMENT 'via Trigger (cache_desc)',
  `default_desclang` char(2) NOT NULL,
  `date_activate` datetime DEFAULT NULL,
  `need_npa_recalc` tinyint(1) NOT NULL,
  `show_cachelists` tinyint(1) NOT NULL DEFAULT '1',
  `protect_old_coords` tinyint(1) NOT NULL DEFAULT '0',
  `needs_maintenance` tinyint(1) NOT NULL DEFAULT '0',
  `listing_outdated` tinyint(1) NOT NULL DEFAULT '0',
  `flags_last_modified` datetime NOT NULL COMMENT 'via Trigger (caches)',
  PRIMARY KEY (`cache_id`),
  UNIQUE KEY `uuid` (`uuid`),
  UNIQUE KEY `wp_oc` (`wp_oc`),
  KEY `longitude` (`longitude`,`latitude`),
  KEY `date_created` (`date_created`),
  KEY `latitude` (`latitude`),
  KEY `country` (`country`),
  KEY `status` (`status`,`date_activate`),
  KEY `last_modified` (`last_modified`),
  KEY `wp_gc` (`wp_gc`),
  KEY `user_id` (`user_id`),
  KEY `date_activate` (`date_activate`),
  KEY `need_npa_recalc` (`need_npa_recalc`),
  KEY `type` (`type`),
  KEY `size` (`size`),
  KEY `difficulty` (`difficulty`),
  KEY `terrain` (`terrain`),
  KEY `wp_gc_maintained` (`wp_gc_maintained`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `caches_attributes`
-- ----------------------------
DROP TABLE IF EXISTS `caches_attributes`;
CREATE TABLE `caches_attributes` (
  `cache_id` int(10) unsigned NOT NULL,
  `attrib_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`cache_id`,`attrib_id`),
  KEY `attrib_id` (`attrib_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `caches_attributes_modified`
-- ----------------------------
DROP TABLE IF EXISTS `caches_attributes_modified`;
CREATE TABLE `caches_attributes_modified` (
  `cache_id` int(10) unsigned NOT NULL,
  `attrib_id` tinyint(3) unsigned NOT NULL,
  `date_modified` date NOT NULL COMMENT 'no time! see restorecaches.php',
  `was_set` tinyint(1) unsigned NOT NULL,
  `restored_by` int(10) NOT NULL,
  UNIQUE KEY `cache_id` (`cache_id`,`date_modified`,`attrib_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `caches_modified`
-- ----------------------------
DROP TABLE IF EXISTS `caches_modified`;
CREATE TABLE `caches_modified` (
  `cache_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_modified` date NOT NULL COMMENT 'no time! see restorecaches.php',
  `name` varchar(255) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL,
  `date_hidden` date NOT NULL,
  `size` tinyint(3) unsigned NOT NULL,
  `difficulty` tinyint(3) unsigned NOT NULL,
  `terrain` tinyint(3) unsigned NOT NULL,
  `search_time` float unsigned NOT NULL DEFAULT '0',
  `way_length` float unsigned NOT NULL DEFAULT '0',
  `wp_gc` varchar(7) NOT NULL,
  `wp_nc` varchar(6) NOT NULL,
  `restored_by` int(10) NOT NULL,
  UNIQUE KEY `cache_id` (`cache_id`,`date_modified`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `coordinates`
-- ----------------------------
DROP TABLE IF EXISTS `coordinates`;
CREATE TABLE `coordinates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  `type` int(11) NOT NULL,
  `subtype` int(11) DEFAULT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `cache_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `log_id` int(11) DEFAULT NULL,
  `description` mediumtext,
  PRIMARY KEY (`id`),
  KEY `cache_id` (`cache_id`),
  KEY `user_id` (`user_id`),
  KEY `log_id` (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `coordinates_type`
-- ----------------------------
DROP TABLE IF EXISTS `coordinates_type`;
CREATE TABLE `coordinates_type` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  `image` varchar(60) NOT NULL,
  `preposition` varchar(20) NOT NULL,
  `pp_trans_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `countries`
-- ----------------------------
DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `short` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `trans_id` int(10) NOT NULL,
  `de` varchar(128) NOT NULL COMMENT 'obsolete',
  `en` varchar(128) NOT NULL,
  `list_default_de` int(1) NOT NULL DEFAULT '0' COMMENT 'obsolete',
  `sort_de` varchar(128) NOT NULL COMMENT 'obsolete',
  `list_default_en` int(1) NOT NULL DEFAULT '0' COMMENT 'obsolete',
  `sort_en` varchar(128) NOT NULL COMMENT 'obsolete',
  PRIMARY KEY (`short`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `countries_list_default`
-- ----------------------------
DROP TABLE IF EXISTS `countries_list_default`;
CREATE TABLE `countries_list_default` (
  `lang` varchar(2) NOT NULL,
  `show` varchar(2) NOT NULL,
  PRIMARY KEY (`lang`,`show`),
  KEY `show` (`show`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `countries_options`
-- ----------------------------
DROP TABLE IF EXISTS `countries_options`;
CREATE TABLE `countries_options` (
  `country` char(2) NOT NULL,
  `display` tinyint(1) unsigned NOT NULL,
  `gmLat` double NOT NULL,
  `gmLon` double NOT NULL,
  `gmZoom` tinyint(3) unsigned NOT NULL,
  `nodeId` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`country`),
  KEY `ordinal` (`display`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `email_user`
-- ----------------------------
DROP TABLE IF EXISTS `email_user`;
CREATE TABLE `email_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL COMMENT 'via Trigger (email_user)',
  `ipaddress` varchar(20) NOT NULL,
  `from_user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `from_email` varchar(60) NOT NULL,
  `to_user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `to_email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `from_user_id` (`from_user_id`),
  KEY `date` (`date_created`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `geodb_coordinates`
-- ----------------------------
DROP TABLE IF EXISTS `geodb_coordinates`;
CREATE TABLE `geodb_coordinates` (
  `loc_id` int(11) NOT NULL DEFAULT '0',
  `lon` double DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `coord_type` int(11) NOT NULL DEFAULT '0',
  `coord_subtype` int(11) DEFAULT NULL,
  `valid_since` date DEFAULT NULL,
  `date_type_since` int(11) DEFAULT NULL,
  `valid_until` date NOT NULL DEFAULT '0000-00-00',
  `date_type_until` int(11) NOT NULL DEFAULT '0',
  KEY `coord_loc_id_idx` (`loc_id`),
  KEY `coord_lon_idx` (`lon`),
  KEY `coord_lat_idx` (`lat`),
  KEY `coord_type_idx` (`coord_type`),
  KEY `coord_stype_idx` (`coord_subtype`),
  KEY `coord_since_idx` (`valid_since`),
  KEY `coord_until_idx` (`valid_until`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `geodb_hierarchies`
-- ----------------------------
DROP TABLE IF EXISTS `geodb_hierarchies`;
CREATE TABLE `geodb_hierarchies` (
  `loc_id` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  `id_lvl1` int(11) NOT NULL DEFAULT '0',
  `id_lvl2` int(11) DEFAULT NULL,
  `id_lvl3` int(11) DEFAULT NULL,
  `id_lvl4` int(11) DEFAULT NULL,
  `id_lvl5` int(11) DEFAULT NULL,
  `id_lvl6` int(11) DEFAULT NULL,
  `id_lvl7` int(11) DEFAULT NULL,
  `id_lvl8` int(11) DEFAULT NULL,
  `id_lvl9` int(11) DEFAULT NULL,
  `valid_since` date DEFAULT NULL,
  `date_type_since` int(11) DEFAULT NULL,
  `valid_until` date NOT NULL DEFAULT '0000-00-00',
  `date_type_until` int(11) NOT NULL DEFAULT '0',
  KEY `hierarchy_loc_id_idx` (`loc_id`),
  KEY `hierarchy_level_idx` (`level`),
  KEY `hierarchy_lvl1_idx` (`id_lvl1`),
  KEY `hierarchy_lvl2_idx` (`id_lvl2`),
  KEY `hierarchy_lvl3_idx` (`id_lvl3`),
  KEY `hierarchy_lvl4_idx` (`id_lvl4`),
  KEY `hierarchy_lvl5_idx` (`id_lvl5`),
  KEY `hierarchy_lvl6_idx` (`id_lvl6`),
  KEY `hierarchy_lvl7_idx` (`id_lvl7`),
  KEY `hierarchy_lvl8_idx` (`id_lvl8`),
  KEY `hierarchy_lvl9_idx` (`id_lvl9`),
  KEY `hierarchy_since_idx` (`valid_since`),
  KEY `hierarchy_until_idx` (`valid_until`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `geodb_locations`
-- ----------------------------
DROP TABLE IF EXISTS `geodb_locations`;
CREATE TABLE `geodb_locations` (
  `loc_id` int(11) NOT NULL DEFAULT '0',
  `loc_type` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`loc_id`),
  KEY `loc_type_idx` (`loc_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `geodb_search`
-- ----------------------------
DROP TABLE IF EXISTS `geodb_search`;
CREATE TABLE `geodb_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loc_id` int(11) NOT NULL DEFAULT '0',
  `sort` varchar(255) NOT NULL,
  `simple` varchar(255) NOT NULL,
  `simplehash` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`(250)),
  KEY `simple` (`simple`(250)),
  KEY `simplehash` (`simplehash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content, not in use';

-- ----------------------------
--  Table structure for `geodb_textdata`
-- ----------------------------
DROP TABLE IF EXISTS `geodb_textdata`;
CREATE TABLE `geodb_textdata` (
  `loc_id` int(11) NOT NULL DEFAULT '0',
  `text_val` varchar(255) NOT NULL DEFAULT '',
  `text_type` int(11) NOT NULL DEFAULT '0',
  `text_locale` varchar(5) DEFAULT NULL,
  `is_native_lang` smallint(1) DEFAULT NULL,
  `is_default_name` smallint(1) DEFAULT NULL,
  `valid_since` date DEFAULT NULL,
  `date_type_since` int(11) DEFAULT NULL,
  `valid_until` date NOT NULL DEFAULT '0000-00-00',
  `date_type_until` int(11) NOT NULL DEFAULT '0',
  KEY `text_lid_idx` (`loc_id`),
  KEY `text_val_idx` (`text_val`(250)),
  KEY `text_type_idx` (`text_type`),
  KEY `text_locale_idx` (`text_locale`),
  KEY `text_native_idx` (`is_native_lang`),
  KEY `text_default_idx` (`is_default_name`),
  KEY `text_since_idx` (`valid_since`),
  KEY `text_until_idx` (`valid_until`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `gk_item`
-- ----------------------------
DROP TABLE IF EXISTS `gk_item`;
CREATE TABLE `gk_item` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` longtext NOT NULL,
  `userid` int(11) NOT NULL,
  `datecreated` datetime NOT NULL,
  `distancetravelled` float NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `typeid` int(11) NOT NULL,
  `stateid` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `gk_item_type`
-- ----------------------------
DROP TABLE IF EXISTS `gk_item_type`;
CREATE TABLE `gk_item_type` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `gk_item_waypoint`
-- ----------------------------
DROP TABLE IF EXISTS `gk_item_waypoint`;
CREATE TABLE `gk_item_waypoint` (
  `id` int(11) NOT NULL,
  `wp` varchar(10) NOT NULL,
  PRIMARY KEY (`id`,`wp`),
  KEY `wp` (`wp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `gk_move`
-- ----------------------------
DROP TABLE IF EXISTS `gk_move`;
CREATE TABLE `gk_move` (
  `id` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `datemoved` datetime NOT NULL,
  `datelogged` datetime NOT NULL,
  `userid` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `logtypeid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `itemid` (`itemid`,`datemoved`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `gk_move_type`
-- ----------------------------
DROP TABLE IF EXISTS `gk_move_type`;
CREATE TABLE `gk_move_type` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `gk_move_waypoint`
-- ----------------------------
DROP TABLE IF EXISTS `gk_move_waypoint`;
CREATE TABLE `gk_move_waypoint` (
  `id` int(11) NOT NULL,
  `wp` varchar(10) NOT NULL,
  PRIMARY KEY (`id`,`wp`),
  KEY `wp` (`wp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `gk_user`
-- ----------------------------
DROP TABLE IF EXISTS `gk_user`;
CREATE TABLE `gk_user` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `gns_locations`
-- ----------------------------
DROP TABLE IF EXISTS `gns_locations`;
CREATE TABLE `gns_locations` (
  `rc` tinyint(4) NOT NULL DEFAULT '0',
  `ufi` int(11) NOT NULL DEFAULT '0',
  `uni` int(11) NOT NULL DEFAULT '0',
  `lat` double NOT NULL DEFAULT '0',
  `lon` double NOT NULL DEFAULT '0',
  `dms_lat` int(11) NOT NULL DEFAULT '0',
  `dms_lon` int(11) NOT NULL DEFAULT '0',
  `utm` varchar(4) NOT NULL,
  `jog` varchar(7) NOT NULL,
  `fc` char(1) NOT NULL,
  `dsg` varchar(5) NOT NULL,
  `pc` tinyint(4) NOT NULL DEFAULT '0',
  `cc1` char(2) NOT NULL,
  `adm1` char(2) NOT NULL,
  `adm2` varchar(200) NOT NULL,
  `dim` int(11) NOT NULL DEFAULT '0',
  `cc2` char(2) NOT NULL,
  `nt` char(1) NOT NULL,
  `lc` char(2) NOT NULL,
  `SHORT_FORM` varchar(128) NOT NULL,
  `GENERIC` varchar(128) NOT NULL,
  `SORT_NAME` varchar(200) NOT NULL,
  `FULL_NAME` varchar(200) NOT NULL,
  `FULL_NAME_ND` varchar(200) NOT NULL,
  `MOD_DATE` date NOT NULL DEFAULT '0000-00-00',
  `admtxt1` varchar(120) NOT NULL,
  `admtxt3` varchar(120) NOT NULL,
  `admtxt4` varchar(120) NOT NULL,
  `admtxt2` varchar(120) NOT NULL,
  PRIMARY KEY (`uni`),
  KEY `rc` (`rc`,`fc`,`dsg`,`cc1`),
  KEY `ufi` (`ufi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `gns_search`
-- ----------------------------
DROP TABLE IF EXISTS `gns_search`;
CREATE TABLE `gns_search` (
  `uni_id` int(11) NOT NULL DEFAULT '0',
  `sort` varchar(255) NOT NULL,
  `simple` varchar(255) NOT NULL,
  `simplehash` int(11) unsigned NOT NULL DEFAULT '0',
  KEY `simplehash` (`simplehash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `helppages`
-- ----------------------------
DROP TABLE IF EXISTS `helppages`;
CREATE TABLE `helppages` (
  `ocpage` varchar(60) NOT NULL,
  `language` char(2) NOT NULL,
  `helppage` varchar(120) NOT NULL,
  UNIQUE KEY `ocpage` (`ocpage`,`language`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `languages`
-- ----------------------------
DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `short` char(2) NOT NULL,
  `name` varchar(60) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  `native_name` varchar(60) NOT NULL,
  `de` varchar(60) NOT NULL COMMENT 'obsolete',
  `en` varchar(60) NOT NULL COMMENT 'obsolete',
  `list_default_de` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'obsolete',
  `list_default_en` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'obsolete',
  PRIMARY KEY (`short`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `languages_list_default`
-- ----------------------------
DROP TABLE IF EXISTS `languages_list_default`;
CREATE TABLE `languages_list_default` (
  `lang` varchar(2) NOT NULL,
  `show` varchar(2) NOT NULL,
  PRIMARY KEY (`lang`,`show`),
  KEY `show` (`show`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `log_types`
-- ----------------------------
DROP TABLE IF EXISTS `log_types`;
CREATE TABLE `log_types` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  `permission` char(1) NOT NULL COMMENT 'obsolete',
  `cache_status` tinyint(1) NOT NULL DEFAULT '0',
  `de` varchar(60) NOT NULL COMMENT 'obsolete',
  `en` varchar(60) NOT NULL,
  `icon_small` varchar(255) NOT NULL,
  `allow_rating` tinyint(1) NOT NULL,
  `require_password` tinyint(1) NOT NULL,
  `maintenance_logs` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `log_types_text`
-- ----------------------------
DROP TABLE IF EXISTS `log_types_text`;
CREATE TABLE `log_types_text` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'obsolete',
  `log_types_id` int(10) NOT NULL DEFAULT '0' COMMENT 'obsolete',
  `lang` char(2) NOT NULL COMMENT 'obsolete',
  `text_combo` varchar(255) NOT NULL COMMENT 'obsolete',
  `text_listing` varchar(255) NOT NULL COMMENT 'obsolete',
  PRIMARY KEY (`id`),
  UNIQUE KEY `lang` (`lang`,`log_types_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='obsolete';

-- ----------------------------
--  Table structure for `logentries`
-- ----------------------------
DROP TABLE IF EXISTS `logentries`;
CREATE TABLE `logentries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL COMMENT 'via Trigger (logentries)',
  `module` varchar(30) NOT NULL,
  `eventid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `objectid1` int(10) unsigned NOT NULL DEFAULT '0',
  `objectid2` int(10) unsigned NOT NULL DEFAULT '0',
  `logtext` longtext NOT NULL,
  `details` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`,`objectid1`,`module`),
  KEY `date` (`date_created`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `logentries_types`
-- ----------------------------
DROP TABLE IF EXISTS `logentries_types`;
CREATE TABLE `logentries_types` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(30) NOT NULL,
  `eventname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `map2_data`
-- ----------------------------
DROP TABLE IF EXISTS `map2_data`;
CREATE TABLE `map2_data` (
  `result_id` int(10) unsigned NOT NULL,
  `cache_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`result_id`,`cache_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `map2_result`
-- ----------------------------
DROP TABLE IF EXISTS `map2_result`;
CREATE TABLE `map2_result` (
  `result_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slave_id` mediumint(9) NOT NULL,
  `sqlchecksum` int(10) unsigned NOT NULL,
  `sqlquery` mediumtext NOT NULL,
  `shared_counter` int(10) unsigned NOT NULL,
  `request_counter` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_lastqueried` datetime NOT NULL,
  PRIMARY KEY (`result_id`),
  KEY `sqlchecksum` (`sqlchecksum`),
  KEY `date_created` (`date_created`),
  KEY `date_lastqueried` (`date_lastqueried`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `mp3`
-- ----------------------------
DROP TABLE IF EXISTS `mp3`;
CREATE TABLE `mp3` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(36) NOT NULL,
  `node` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL COMMENT 'via Trigger (mp3)',
  `last_modified` datetime NOT NULL COMMENT 'via Trigger (mp3)',
  `url` varchar(255) NOT NULL,
  `title` varchar(250) NOT NULL,
  `last_url_check` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `object_id` int(10) unsigned NOT NULL DEFAULT '0',
  `local` tinyint(1) NOT NULL DEFAULT '1',
  `unknown_format` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `last_modified` (`last_modified`),
  KEY `url` (`url`(250)),
  KEY `title` (`title`),
  KEY `object_id` (`object_id`),
  KEY `uuid` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'via trigger (news)',
  `content` mediumtext NOT NULL,
  `topic` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `display` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `display` (`display`,`date_created`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='obsolete';

-- ----------------------------
--  Table structure for `news_topics`
-- ----------------------------
DROP TABLE IF EXISTS `news_topics`;
CREATE TABLE `news_topics` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='obsolete';

-- ----------------------------
--  Table structure for `nodes`
-- ----------------------------
DROP TABLE IF EXISTS `nodes`;
CREATE TABLE `nodes` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `url` varchar(260) NOT NULL,
  `waypoint_prefix` char(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `waypoint_prefix` (`waypoint_prefix`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `notify_waiting`
-- ----------------------------
DROP TABLE IF EXISTS `notify_waiting`;
CREATE TABLE `notify_waiting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cache_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `cache_user` (`cache_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `npa_areas`
-- ----------------------------
DROP TABLE IF EXISTS `npa_areas`;
CREATE TABLE `npa_areas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` char(3) NOT NULL,
  `exclude` tinyint(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `shape` geometry NOT NULL,
  PRIMARY KEY (`id`),
  SPATIAL KEY `shape` (`shape`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `npa_types`
-- ----------------------------
DROP TABLE IF EXISTS `npa_types`;
CREATE TABLE `npa_types` (
  `id` char(3) NOT NULL,
  `name` varchar(60) NOT NULL,
  `ordinal` tinyint(4) NOT NULL,
  `no_warning` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ordinal` (`ordinal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `nuts_codes`
-- ----------------------------
DROP TABLE IF EXISTS `nuts_codes`;
CREATE TABLE `nuts_codes` (
  `code` varchar(10) NOT NULL,
  `name` varchar(120) NOT NULL,
  PRIMARY KEY (`code`),
  KEY `code` (`code`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `nuts_layer`
-- ----------------------------
DROP TABLE IF EXISTS `nuts_layer`;
CREATE TABLE `nuts_layer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` tinyint(1) NOT NULL,
  `code` varchar(5) NOT NULL,
  `shape` geometry NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `level` (`level`),
  SPATIAL KEY `shape` (`shape`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `object_types`
-- ----------------------------
DROP TABLE IF EXISTS `object_types`;
CREATE TABLE `object_types` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `pictures`
-- ----------------------------
DROP TABLE IF EXISTS `pictures`;
CREATE TABLE `pictures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(36) NOT NULL,
  `node` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL COMMENT 'via Trigger (pictures)',
  `last_modified` datetime NOT NULL COMMENT 'via Trigger (pictures)',
  `url` varchar(255) NOT NULL,
  `title` varchar(250) NOT NULL,
  `last_url_check` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `object_id` int(10) unsigned NOT NULL DEFAULT '0',
  `object_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `thumb_url` varchar(255) NOT NULL,
  `thumb_last_generated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `spoiler` tinyint(1) NOT NULL DEFAULT '0',
  `local` tinyint(1) NOT NULL DEFAULT '1',
  `unknown_format` tinyint(1) NOT NULL DEFAULT '0',
  `display` tinyint(1) NOT NULL DEFAULT '1',
  `mappreview` tinyint(1) NOT NULL DEFAULT '0',
  `seq` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`),
  UNIQUE KEY `object_type` (`object_type`,`object_id`,`seq`),
  KEY `last_modified` (`last_modified`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `pictures_modified`
-- ----------------------------
DROP TABLE IF EXISTS `pictures_modified`;
CREATE TABLE `pictures_modified` (
  `id` int(10) NOT NULL,
  `date_modified` datetime NOT NULL,
  `operation` char(1) NOT NULL,
  `date_created` datetime NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(250) NOT NULL,
  `object_id` int(10) unsigned NOT NULL,
  `object_type` tinyint(3) unsigned NOT NULL,
  `spoiler` tinyint(1) NOT NULL,
  `unknown_format` tinyint(1) NOT NULL,
  `display` tinyint(1) NOT NULL,
  `original_id` int(10) NOT NULL,
  `restored_by` int(10) NOT NULL,
  UNIQUE KEY `id` (`id`,`operation`),
  KEY `object_type` (`object_type`,`object_id`,`date_modified`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `profile_options`
-- ----------------------------
DROP TABLE IF EXISTS `profile_options`;
CREATE TABLE `profile_options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  `internal_use` tinyint(1) NOT NULL DEFAULT '1',
  `default_value` text,
  `check_regex` varchar(255) DEFAULT NULL,
  `option_order` int(11) NOT NULL DEFAULT '100',
  `option_input` varchar(20) NOT NULL DEFAULT 'text',
  `optionset` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `pw_dict`
-- ----------------------------
DROP TABLE IF EXISTS `pw_dict`;
CREATE TABLE `pw_dict` (
  `pw` varchar(40) NOT NULL,
  UNIQUE KEY `pw` (`pw`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `queries`
-- ----------------------------
DROP TABLE IF EXISTS `queries`;
CREATE TABLE `queries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(60) NOT NULL,
  `options` blob NOT NULL,
  `last_queried` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `rating_tops`
-- ----------------------------
DROP TABLE IF EXISTS `rating_tops`;
CREATE TABLE `rating_tops` (
  `cache_id` int(10) unsigned NOT NULL,
  `rating` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cache_id`),
  KEY `rating` (`rating`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `removed_objects`
-- ----------------------------
DROP TABLE IF EXISTS `removed_objects`;
CREATE TABLE `removed_objects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `localID` int(10) unsigned NOT NULL DEFAULT '0',
  `uuid` varchar(36) NOT NULL,
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `removed_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'via Trigger (removed_objects)',
  `node` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UUID` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='via Trigger (caches, cache_logs, cache_dec, pictures, user)';

-- ----------------------------
--  Table structure for `replication`
-- ----------------------------
DROP TABLE IF EXISTS `replication`;
CREATE TABLE `replication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(30) NOT NULL,
  `last_run` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `use` int(1) NOT NULL DEFAULT '0',
  `prio` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='obsolete';

-- ----------------------------
--  Table structure for `replication_notimported`
-- ----------------------------
DROP TABLE IF EXISTS `replication_notimported`;
CREATE TABLE `replication_notimported` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object_uuid` varchar(36) NOT NULL,
  `object_type` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='obsolete';

-- ----------------------------
--  Table structure for `replication_overwrite`
-- ----------------------------
DROP TABLE IF EXISTS `replication_overwrite`;
CREATE TABLE `replication_overwrite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL DEFAULT '0',
  `value` varchar(255) NOT NULL,
  `uuid` varchar(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='obsolete';

-- ----------------------------
--  Table structure for `replication_overwritetypes`
-- ----------------------------
DROP TABLE IF EXISTS `replication_overwritetypes`;
CREATE TABLE `replication_overwritetypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table` varchar(60) NOT NULL,
  `field` varchar(60) NOT NULL,
  `uuid_fieldname` varchar(36) NOT NULL,
  `backupfirst` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='obsolete';

-- ----------------------------
--  Table structure for `saved_texts`
-- ----------------------------
DROP TABLE IF EXISTS `saved_texts`;
CREATE TABLE `saved_texts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `object_type` tinyint(3) NOT NULL,
  `object_id` int(10) NOT NULL,
  `subtype` tinyint(2) NOT NULL,
  `text` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `object_id` (`object_type`,`object_id`,`subtype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `search_doubles`
-- ----------------------------
DROP TABLE IF EXISTS `search_doubles`;
CREATE TABLE `search_doubles` (
  `hash` int(10) unsigned NOT NULL,
  `word` varchar(30) NOT NULL,
  `simple` varchar(30) NOT NULL,
  PRIMARY KEY (`hash`,`word`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='via cronjob';

-- ----------------------------
--  Table structure for `search_ignore`
-- ----------------------------
DROP TABLE IF EXISTS `search_ignore`;
CREATE TABLE `search_ignore` (
  `word` varchar(30) NOT NULL,
  PRIMARY KEY (`word`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `search_index`
-- ----------------------------
DROP TABLE IF EXISTS `search_index`;
CREATE TABLE `search_index` (
  `object_type` tinyint(3) unsigned NOT NULL,
  `cache_id` int(10) unsigned NOT NULL,
  `hash` int(10) unsigned NOT NULL,
  `count` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_type`,`cache_id`,`hash`),
  KEY `object_type` (`object_type`,`hash`,`cache_id`,`count`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='via cronjob';

-- ----------------------------
--  Table structure for `search_index_times`
-- ----------------------------
DROP TABLE IF EXISTS `search_index_times`;
CREATE TABLE `search_index_times` (
  `object_type` tinyint(3) unsigned NOT NULL,
  `object_id` int(10) unsigned NOT NULL,
  `last_refresh` datetime NOT NULL,
  PRIMARY KEY (`object_type`,`object_id`),
  KEY `last_refresh` (`last_refresh`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='via cronjob';

-- ----------------------------
--  Table structure for `stat_cache_lists`
-- ----------------------------
DROP TABLE IF EXISTS `stat_cache_lists`;
CREATE TABLE `stat_cache_lists` (
  `cache_list_id` int(10) NOT NULL,
  `entries` int(6) NOT NULL DEFAULT '0' COMMENT 'via trigger in cache_list_items',
  `watchers` int(6) NOT NULL DEFAULT '0' COMMENT 'via trigger in cache_list_watches',
  PRIMARY KEY (`cache_list_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `stat_cache_logs`
-- ----------------------------
DROP TABLE IF EXISTS `stat_cache_logs`;
CREATE TABLE `stat_cache_logs` (
  `cache_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `found` smallint(5) unsigned NOT NULL,
  `notfound` smallint(5) unsigned NOT NULL,
  `note` smallint(5) unsigned NOT NULL,
  `will_attend` smallint(5) unsigned NOT NULL,
  `maintenance` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`cache_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='via trigger (cache_logs)';

-- ----------------------------
--  Table structure for `stat_caches`
-- ----------------------------
DROP TABLE IF EXISTS `stat_caches`;
CREATE TABLE `stat_caches` (
  `cache_id` int(10) unsigned NOT NULL,
  `found` smallint(5) unsigned NOT NULL,
  `notfound` smallint(5) unsigned NOT NULL,
  `note` smallint(5) unsigned NOT NULL,
  `will_attend` smallint(5) unsigned NOT NULL,
  `maintenance` smallint(5) unsigned NOT NULL,
  `last_found` date DEFAULT NULL,
  `watch` smallint(5) unsigned NOT NULL,
  `ignore` smallint(5) unsigned NOT NULL,
  `toprating` smallint(5) unsigned NOT NULL,
  `picture` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`cache_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='via trigger (caches)';

-- ----------------------------
--  Table structure for `stat_user`
-- ----------------------------
DROP TABLE IF EXISTS `stat_user`;
CREATE TABLE `stat_user` (
  `user_id` int(10) unsigned NOT NULL,
  `found` smallint(5) unsigned NOT NULL,
  `notfound` smallint(5) unsigned NOT NULL,
  `note` smallint(5) unsigned NOT NULL,
  `hidden` smallint(5) unsigned NOT NULL,
  `will_attend` smallint(5) unsigned NOT NULL,
  `maintenance` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='via trigger (user)';

-- ----------------------------
--  Table structure for `statpics`
-- ----------------------------
DROP TABLE IF EXISTS `statpics`;
CREATE TABLE `statpics` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `tplpath` varchar(200) NOT NULL,
  `previewpath` varchar(200) NOT NULL,
  `description` varchar(80) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  `maxtextwidth` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `sys_cron`
-- ----------------------------
DROP TABLE IF EXISTS `sys_cron`;
CREATE TABLE `sys_cron` (
  `name` varchar(60) NOT NULL,
  `last_run` datetime NOT NULL,
  PRIMARY KEY (`name`),
  KEY `last_run` (`last_run`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='via cronjob';

-- ----------------------------
--  Table structure for `sys_login_stat`
-- ----------------------------
DROP TABLE IF EXISTS `sys_login_stat`;
CREATE TABLE `sys_login_stat` (
  `day` date NOT NULL,
  `type` char(10) NOT NULL,
  `count` int(11) NOT NULL,
  UNIQUE KEY `day` (`day`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `sys_logins`
-- ----------------------------
DROP TABLE IF EXISTS `sys_logins`;
CREATE TABLE `sys_logins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL COMMENT 'via trigger (sys_logins)',
  `remote_addr` varchar(15) NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `timestamp` (`date_created`),
  KEY `remote_addr` (`remote_addr`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Records of `sys_logins`
-- ----------------------------
BEGIN;
INSERT INTO `sys_logins` VALUES ('1', '0000-00-00 00:00:00', '10.10.0.1', '0'), ('2', '0000-00-00 00:00:00', '10.10.0.1', '1'), ('3', '0000-00-00 00:00:00', '10.10.0.1', '1');
COMMIT;

-- ----------------------------
--  Table structure for `sys_menu`
-- ----------------------------
DROP TABLE IF EXISTS `sys_menu`;
CREATE TABLE `sys_menu` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_string` varchar(80) NOT NULL,
  `title` varchar(80) NOT NULL,
  `title_trans_id` int(10) unsigned NOT NULL,
  `menustring` varchar(80) NOT NULL,
  `menustring_trans_id` int(10) unsigned NOT NULL,
  `access` tinyint(3) unsigned NOT NULL,
  `href` varchar(80) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `parent` smallint(6) NOT NULL,
  `position` tinyint(3) unsigned NOT NULL,
  `color` varchar(7) NOT NULL,
  `sitemap` tinyint(1) NOT NULL,
  `only_if_parent` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_string` (`id_string`),
  KEY `parent` (`parent`,`position`),
  KEY `href` (`href`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `sys_repl_exclude`
-- ----------------------------
DROP TABLE IF EXISTS `sys_repl_exclude`;
CREATE TABLE `sys_repl_exclude` (
  `user_id` int(10) unsigned NOT NULL,
  `datExclude` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `datExclude` (`datExclude`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `sys_repl_slaves`
-- ----------------------------
DROP TABLE IF EXISTS `sys_repl_slaves`;
CREATE TABLE `sys_repl_slaves` (
  `id` smallint(5) unsigned NOT NULL,
  `server` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `weight` tinyint(4) NOT NULL,
  `online` tinyint(1) NOT NULL,
  `last_check` datetime NOT NULL,
  `time_diff` int(10) unsigned NOT NULL,
  `current_log_name` varchar(60) NOT NULL,
  `current_log_pos` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `sys_repl_timestamp`
-- ----------------------------
DROP TABLE IF EXISTS `sys_repl_timestamp`;
CREATE TABLE `sys_repl_timestamp` (
  `id` tinyint(1) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `sys_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `sys_sessions`;
CREATE TABLE `sys_sessions` (
  `uuid` varchar(36) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `permanent` tinyint(1) NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`uuid`),
  KEY `last_login` (`last_login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `sys_temptables`
-- ----------------------------
DROP TABLE IF EXISTS `sys_temptables`;
CREATE TABLE `sys_temptables` (
  `threadid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`threadid`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `sys_trans`
-- ----------------------------
DROP TABLE IF EXISTS `sys_trans`;
CREATE TABLE `sys_trans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` longtext NOT NULL,
  `last_modified` datetime NOT NULL COMMENT 'via trigger (sys_trans)',
  PRIMARY KEY (`id`),
  KEY `text` (`text`(8))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `sys_trans_ref`
-- ----------------------------
DROP TABLE IF EXISTS `sys_trans_ref`;
CREATE TABLE `sys_trans_ref` (
  `trans_id` int(10) unsigned NOT NULL,
  `resource_name` varchar(80) NOT NULL,
  `line` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`trans_id`,`resource_name`,`line`),
  KEY `style` (`resource_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `sys_trans_text`
-- ----------------------------
DROP TABLE IF EXISTS `sys_trans_text`;
CREATE TABLE `sys_trans_text` (
  `trans_id` int(10) unsigned NOT NULL,
  `lang` varchar(2) NOT NULL,
  `text` longtext NOT NULL,
  `last_modified` datetime NOT NULL COMMENT 'via trigger (sys_trans_text)',
  PRIMARY KEY (`lang`,`trans_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `sysconfig`
-- ----------------------------
DROP TABLE IF EXISTS `sysconfig`;
CREATE TABLE `sysconfig` (
  `name` varchar(60) NOT NULL,
  `value` mediumtext NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='obsolete';

-- ----------------------------
--  Table structure for `towns`
-- ----------------------------
DROP TABLE IF EXISTS `towns`;
CREATE TABLE `towns` (
  `country` char(2) NOT NULL,
  `name` varchar(40) NOT NULL,
  `trans_id` int(10) unsigned NOT NULL,
  `coord_lat` double NOT NULL,
  `coord_long` double NOT NULL,
  `maplist` tinyint(1) NOT NULL DEFAULT '0',
  KEY `country` (`country`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(36) NOT NULL,
  `node` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL COMMENT 'via Trigger (user)',
  `last_modified` datetime NOT NULL COMMENT 'via Trigger (user)',
  `last_login` date DEFAULT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `email_problems` int(10) NOT NULL DEFAULT '0',
  `first_email_problem` date DEFAULT NULL,
  `last_email_problem` datetime DEFAULT NULL,
  `mailing_problems` int(10) unsigned NOT NULL DEFAULT '0',
  `accept_mailing` tinyint(1) NOT NULL DEFAULT '1',
  `usermail_send_addr` tinyint(1) NOT NULL DEFAULT '0',
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `is_active_flag` tinyint(1) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `country` char(2) DEFAULT NULL,
  `pmr_flag` tinyint(1) NOT NULL,
  `new_pw_code` varchar(13) DEFAULT NULL,
  `new_pw_date` datetime DEFAULT NULL,
  `new_email_code` varchar(13) DEFAULT NULL,
  `new_email_date` datetime DEFAULT NULL,
  `new_email` varchar(60) DEFAULT NULL,
  `permanent_login_flag` tinyint(1) NOT NULL,
  `watchmail_mode` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `watchmail_hour` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `watchmail_nextmail` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'via cronjob',
  `watchmail_day` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `activation_code` varchar(13) NOT NULL,
  `statpic_logo` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `statpic_text` varchar(30) NOT NULL DEFAULT 'Opencaching',
  `no_htmledit_flag` tinyint(1) NOT NULL DEFAULT '0',
  `notify_radius` int(10) unsigned NOT NULL DEFAULT '0',
  `notify_oconly` tinyint(1) NOT NULL DEFAULT '1',
  `language` char(2) DEFAULT NULL,
  `language_guessed` tinyint(1) NOT NULL DEFAULT '0',
  `domain` varchar(40) DEFAULT NULL,
  `admin` smallint(5) unsigned NOT NULL DEFAULT '0',
  `data_license` tinyint(1) NOT NULL DEFAULT '0',
  `description` longtext NOT NULL,
  `desc_htmledit` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `uuid` (`uuid`),
  UNIQUE KEY `email` (`email`),
  KEY `notify_radius` (`notify_radius`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Records of `user`
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES ('1', '', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00', null, 'admin', '54f9d917124c6bf35d30670109c6e160', '726761499@qq.com', '0', null, null, '0', '1', '0', '0', '0', '0', 'admin', 'admin', null, '0', null, null, null, null, null, '0', '1', '0', '2016-06-02 09:23:58', '0', 'A1102C17F23C2', '0', 'Opencaching', '0', '0', '1', null, '0', null, '0', '2', '', '1');
COMMIT;

-- ----------------------------
--  Table structure for `user_delegates`
-- ----------------------------
DROP TABLE IF EXISTS `user_delegates`;
CREATE TABLE `user_delegates` (
  `user_id` int(10) unsigned NOT NULL,
  `node` tinyint(3) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`node`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `user_options`
-- ----------------------------
DROP TABLE IF EXISTS `user_options`;
CREATE TABLE `user_options` (
  `user_id` int(10) unsigned NOT NULL,
  `option_id` int(10) unsigned NOT NULL,
  `option_visible` tinyint(1) NOT NULL DEFAULT '1',
  `option_value` longtext,
  PRIMARY KEY (`user_id`,`option_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='user options';

-- ----------------------------
--  Table structure for `user_statpic`
-- ----------------------------
DROP TABLE IF EXISTS `user_statpic`;
CREATE TABLE `user_statpic` (
  `user_id` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `watches_logqueue`
-- ----------------------------
DROP TABLE IF EXISTS `watches_logqueue`;
CREATE TABLE `watches_logqueue` (
  `log_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`log_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `watches_notified`
-- ----------------------------
DROP TABLE IF EXISTS `watches_notified`;
CREATE TABLE `watches_notified` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `object_id` int(10) unsigned NOT NULL DEFAULT '0',
  `object_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'via Trigger (watches_notified)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`object_id`,`object_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `watches_waiting`
-- ----------------------------
DROP TABLE IF EXISTS `watches_waiting`;
CREATE TABLE `watches_waiting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `object_id` int(10) unsigned NOT NULL DEFAULT '0',
  `object_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'via trigger (watches_waiting)',
  `watchtext` longtext NOT NULL,
  `watchtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `watches_waitingtypes`
-- ----------------------------
DROP TABLE IF EXISTS `watches_waitingtypes`;
CREATE TABLE `watches_waitingtypes` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `watchtype` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='static content';

-- ----------------------------
--  Table structure for `waypoint_reports`
-- ----------------------------
DROP TABLE IF EXISTS `waypoint_reports`;
CREATE TABLE `waypoint_reports` (
  `report_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_reported` datetime NOT NULL,
  `wp_oc` varchar(7) NOT NULL,
  `wp_external` varchar(8) NOT NULL,
  `source` varchar(64) NOT NULL,
  `gcwp_processed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`report_id`),
  KEY `gcwp_processed` (`gcwp_processed`,`date_reported`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `xmlsession`
-- ----------------------------
DROP TABLE IF EXISTS `xmlsession`;
CREATE TABLE `xmlsession` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'via trigger (xmlsession)',
  `last_use` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `users` int(10) unsigned NOT NULL DEFAULT '0',
  `caches` int(10) unsigned NOT NULL DEFAULT '0',
  `cachedescs` int(10) unsigned NOT NULL DEFAULT '0',
  `cachelogs` int(10) unsigned NOT NULL DEFAULT '0',
  `pictures` int(10) unsigned NOT NULL DEFAULT '0',
  `removedobjects` int(10) unsigned NOT NULL DEFAULT '0',
  `modified_since` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cleaned` tinyint(1) NOT NULL DEFAULT '0',
  `agent` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Table structure for `xmlsession_data`
-- ----------------------------
DROP TABLE IF EXISTS `xmlsession_data`;
CREATE TABLE `xmlsession_data` (
  `session_id` int(10) unsigned NOT NULL DEFAULT '0',
  `object_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `object_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`session_id`,`object_type`,`object_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

SET FOREIGN_KEY_CHECKS = 1;
