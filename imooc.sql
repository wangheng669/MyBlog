/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : imooc

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-11-11 00:36:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章编号',
  `title` char(100) NOT NULL COMMENT '文章标题',
  `author` char(50) NOT NULL COMMENT '文章作者',
  `description` varchar(255) NOT NULL COMMENT '文章简介',
  `content` text NOT NULL COMMENT '文章内容',
  `dateline` int(11) NOT NULL DEFAULT '0' COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('8', '我是王恒', '王恒', '我是一名学生', '我的爱好是打游戏,敲代码,看电影,听音乐,折腾电脑', '1510316803');
