/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50728
Source Host           : localhost:3306
Source Database       : du

Target Server Type    : MYSQL
Target Server Version : 50728
File Encoding         : 65001

Date: 2020-05-21 10:18:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `imgs` varchar(255) DEFAULT NULL,
  `status` int(3) DEFAULT '1' COMMENT '1 ok 0 del',
  `create_time` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('1', '发财献策', '/uploads/imgs/fimgs/20200519/665c09b034e0e73a2cdd28760e961784.jpg', '1', '1589899923');
INSERT INTO `banner` VALUES ('2', '一点通', '/uploads/imgs/fimgs/20200519/888692b6ceb61a95004932253e721530.jpg', '1', '1589900087');
INSERT INTO `banner` VALUES ('3', '马经投资', '/uploads/imgs/fimgs/20200519/4be9b231bdd4ccf7e5568b98f36ee312.jpg', '1', '1589901533');

-- ----------------------------
-- Table structure for guang
-- ----------------------------
DROP TABLE IF EXISTS `guang`;
CREATE TABLE `guang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imgs` varchar(255) DEFAULT NULL,
  `status` int(3) DEFAULT '1' COMMENT '0 DEL',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guang
-- ----------------------------
INSERT INTO `guang` VALUES ('1', '/uploads/imgs/fimgs/20200520/b6d1c8fc89b825541bd613ebca50dc78.gif', '1');
INSERT INTO `guang` VALUES ('2', '/uploads/imgs/fimgs/20200520/49a9ede949c933e2ca5ddbb80e424b39.gif', '1');
INSERT INTO `guang` VALUES ('3', '/uploads/imgs/fimgs/20200520/c6c797d13ddddc462e27482ab8ad0655.gif', '1');

-- ----------------------------
-- Table structure for ma
-- ----------------------------
DROP TABLE IF EXISTS `ma`;
CREATE TABLE `ma` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ma
-- ----------------------------
INSERT INTO `ma` VALUES ('1', 'qqqq111');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `create_time` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users` varchar(200) DEFAULT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  `status` int(3) DEFAULT '1' COMMENT '1 =>ok 0=>delete',
  `create_time` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '', '123456', '0', null);
INSERT INTO `users` VALUES ('2', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '1589519635');
