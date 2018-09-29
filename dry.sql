/*
Navicat MySQL Data Transfer

Source Server         : lcoalhost
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : dry

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-09-29 09:59:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `assembly_scrap_rate`
-- ----------------------------
DROP TABLE IF EXISTS `assembly_scrap_rate`;
CREATE TABLE `assembly_scrap_rate` (
  `asr_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '组装报废率ID',
  `asr_year` int(11) NOT NULL COMMENT '年',
  `asr_month` int(11) NOT NULL COMMENT '月',
  `target` text NOT NULL COMMENT 'Target',
  `actual` text NOT NULL COMMENT 'Actual',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `edit_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`asr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of assembly_scrap_rate
-- ----------------------------

-- ----------------------------
-- Table structure for `day`
-- ----------------------------
DROP TABLE IF EXISTS `day`;
CREATE TABLE `day` (
  `d_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `d_year` int(11) NOT NULL COMMENT '年',
  `d_month` int(11) NOT NULL COMMENT '月',
  `d_day` int(11) NOT NULL,
  `safety` int(1) NOT NULL COMMENT '安全',
  `s_plan` text NOT NULL COMMENT '安全改善计划',
  `s_person` text NOT NULL COMMENT '安全负责人',
  `quality` int(1) NOT NULL COMMENT '质量',
  `q_plan` text NOT NULL COMMENT '质量改善计划',
  `q_person` text NOT NULL COMMENT '质量负责人',
  `labor` int(1) NOT NULL COMMENT '劳动',
  `l_plan` text NOT NULL COMMENT '劳动改善计划',
  `l_person` text NOT NULL COMMENT '劳动负责人',
  `scrap` int(1) NOT NULL COMMENT '废料',
  `sc_plan` text NOT NULL COMMENT '废料改善计划',
  `sc_person` text NOT NULL COMMENT '废料负责人',
  `delivery` int(1) NOT NULL COMMENT '传送',
  `d_plan` text NOT NULL COMMENT '传送改善计划',
  `d_person` text NOT NULL COMMENT '传送负责人',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `edit_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of day
-- ----------------------------

-- ----------------------------
-- Table structure for `discarded_ppm`
-- ----------------------------
DROP TABLE IF EXISTS `discarded_ppm`;
CREATE TABLE `discarded_ppm` (
  `dp_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '化成报废PPMID',
  `dp_year` int(11) NOT NULL COMMENT '年',
  `dp_month` int(11) NOT NULL,
  `for` text NOT NULL COMMENT 'FOR',
  `shp` text NOT NULL COMMENT 'SHP',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `edit_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`dp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of discarded_ppm
-- ----------------------------

-- ----------------------------
-- Table structure for `dry_battery_output`
-- ----------------------------
DROP TABLE IF EXISTS `dry_battery_output`;
CREATE TABLE `dry_battery_output` (
  `dbo_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '干电池产量ID',
  `dbo_year` int(11) NOT NULL COMMENT '年',
  `dbo_month` int(11) NOT NULL COMMENT '月',
  `duf` text NOT NULL COMMENT 'DUF',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `edit_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`dbo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dry_battery_output
-- ----------------------------

-- ----------------------------
-- Table structure for `key`
-- ----------------------------
DROP TABLE IF EXISTS `key`;
CREATE TABLE `key` (
  `k_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'keyID',
  `key_name` varchar(50) NOT NULL COMMENT 'key说明',
  `c_id` mediumint(8) NOT NULL COMMENT '颜色ID',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`k_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of key
-- ----------------------------

-- ----------------------------
-- Table structure for `month`
-- ----------------------------
DROP TABLE IF EXISTS `month`;
CREATE TABLE `month` (
  `m_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `m_year` int(11) NOT NULL COMMENT '年',
  `m_month` int(11) NOT NULL COMMENT '月',
  `m_week` int(1) NOT NULL COMMENT '周',
  `safety` text NOT NULL COMMENT '安全',
  `quality` text NOT NULL COMMENT '质量',
  `labor` text NOT NULL COMMENT '劳动',
  `scrap` text NOT NULL COMMENT '废料',
  `delivery` text NOT NULL COMMENT '传送',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `edit_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of month
-- ----------------------------

-- ----------------------------
-- Table structure for `plate_scrap_rate`
-- ----------------------------
DROP TABLE IF EXISTS `plate_scrap_rate`;
CREATE TABLE `plate_scrap_rate` (
  `psr_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '极板涂片报废率',
  `psr_year` int(11) NOT NULL COMMENT '年',
  `psr_month` int(11) NOT NULL COMMENT '月',
  `target` text NOT NULL COMMENT 'Target',
  `pos_plates` text NOT NULL COMMENT 'Pos.Plates',
  `neg_plates` text NOT NULL COMMENT 'Neg.Plates',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `edit_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`psr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of plate_scrap_rate
-- ----------------------------

-- ----------------------------
-- Table structure for `plate_yield`
-- ----------------------------
DROP TABLE IF EXISTS `plate_yield`;
CREATE TABLE `plate_yield` (
  `py_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '极板ID',
  `py_year` int(11) NOT NULL COMMENT '年',
  `py_month` int(11) NOT NULL COMMENT '月',
  `pos_plates` text NOT NULL COMMENT 'Pos.Plates',
  `neg_plates` text NOT NULL COMMENT 'Neg.Plates',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `edit_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`py_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of plate_yield
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `user_name` varchar(60) NOT NULL COMMENT '账号',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `remarks` text NOT NULL COMMENT '备注',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------

-- ----------------------------
-- Table structure for `yield_production`
-- ----------------------------
DROP TABLE IF EXISTS `yield_production`;
CREATE TABLE `yield_production` (
  `yp_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '化成产量ID',
  `yp_year` int(11) NOT NULL COMMENT '年',
  `yp_month` int(11) NOT NULL COMMENT '月',
  `fna` text NOT NULL COMMENT 'FNA',
  `shp` text NOT NULL COMMENT 'SHP',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  `edit_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`yp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yield_production
-- ----------------------------
