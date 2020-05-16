/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3308
 Source Schema         : phpindex

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 16/05/2020 21:54:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mark
-- ----------------------------
DROP TABLE IF EXISTS `mark`;
CREATE TABLE `mark`  (
  `id` int(11) NOT NULL COMMENT '/*查询id*/',
  `uuid` varchar(36) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '/*查询uuid*/',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for phpindex
-- ----------------------------
DROP TABLE IF EXISTS `phpindex`;
CREATE TABLE `phpindex`  (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `result` double(10, 2) NOT NULL,
  `host` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `port` int(15) NOT NULL DEFAULT 80,
  `testtime` int(32) NOT NULL,
  `uuid_id` int(15) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `uuid`(`uuid_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
