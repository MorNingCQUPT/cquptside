/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : cquptsite

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2014-05-29 16:27:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jsj_article
-- ----------------------------
DROP TABLE IF EXISTS `jsj_article`;
CREATE TABLE `jsj_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章id号',
  `plate_id` int(11) NOT NULL COMMENT '该文章所属板块（栏目）',
  `column_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL COMMENT '文章标题',
  `postuser` varchar(255) NOT NULL COMMENT '文章作者（发布管理员）',
  `postdate` datetime NOT NULL COMMENT '发布时间',
  `modifieduser` varchar(255) DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL COMMENT '最后一次修改时间',
  `content` varchar(255) DEFAULT NULL COMMENT '文章内容',
  `isshow` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jsj_article
-- ----------------------------
INSERT INTO `jsj_article` VALUES ('1', '0', '0', '标题1', 'admin', '2014-05-28 00:00:00', null, '2014-05-28 09:58:42', '内容1', null);

-- ----------------------------
-- Table structure for jsj_attachment
-- ----------------------------
DROP TABLE IF EXISTS `jsj_attachment`;
CREATE TABLE `jsj_attachment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jsj_attachment
-- ----------------------------

-- ----------------------------
-- Table structure for jsj_column
-- ----------------------------
DROP TABLE IF EXISTS `jsj_column`;
CREATE TABLE `jsj_column` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '栏目id',
  `name` varchar(255) NOT NULL COMMENT '栏目名称',
  `ofplateid` int(11) NOT NULL COMMENT '栏目所属板块id',
  `isshow` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jsj_column
-- ----------------------------

-- ----------------------------
-- Table structure for jsj_plate
-- ----------------------------
DROP TABLE IF EXISTS `jsj_plate`;
CREATE TABLE `jsj_plate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `isshow` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jsj_plate
-- ----------------------------

-- ----------------------------
-- Table structure for jsj_user
-- ----------------------------
DROP TABLE IF EXISTS `jsj_user`;
CREATE TABLE `jsj_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '账户编号',
  `user` varchar(255) NOT NULL COMMENT '用户名',
  `password` varchar(255) NOT NULL COMMENT '密码',
  `authority` varchar(255) NOT NULL COMMENT '权限配置',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jsj_user
-- ----------------------------
INSERT INTO `jsj_user` VALUES ('1', 'admin', 'admin', '');
