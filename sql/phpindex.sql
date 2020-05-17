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

 Date: 17/05/2020 11:25:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mark
-- ----------------------------
DROP TABLE IF EXISTS `mark`;
CREATE TABLE `mark`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '/*查询id*/',
  `uuid` varchar(36) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '/*查询uuid*/',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mark
-- ----------------------------
INSERT INTO `mark` VALUES (1, '123456');
INSERT INTO `mark` VALUES (2, '145769');
INSERT INTO `mark` VALUES (3, '915687');
INSERT INTO `mark` VALUES (4, '258193');
INSERT INTO `mark` VALUES (5, '258193');
INSERT INTO `mark` VALUES (6, '258193');
INSERT INTO `mark` VALUES (7, '258193');
INSERT INTO `mark` VALUES (8, '258193');
INSERT INTO `mark` VALUES (9, '258193');
INSERT INTO `mark` VALUES (10, '258193');
INSERT INTO `mark` VALUES (11, '258193');
INSERT INTO `mark` VALUES (12, '258193');
INSERT INTO `mark` VALUES (13, '258193');
INSERT INTO `mark` VALUES (14, '258193');
INSERT INTO `mark` VALUES (15, '597368');
INSERT INTO `mark` VALUES (16, '258193');
INSERT INTO `mark` VALUES (17, '258193');
INSERT INTO `mark` VALUES (18, '258193');
INSERT INTO `mark` VALUES (19, '258193');
INSERT INTO `mark` VALUES (20, '258193');
INSERT INTO `mark` VALUES (21, '[object Object]');
INSERT INTO `mark` VALUES (22, '178325');
INSERT INTO `mark` VALUES (23, '178325');
INSERT INTO `mark` VALUES (24, '178325');
INSERT INTO `mark` VALUES (25, '178325');
INSERT INTO `mark` VALUES (26, '178325');
INSERT INTO `mark` VALUES (27, '178325');
INSERT INTO `mark` VALUES (28, '178325');
INSERT INTO `mark` VALUES (29, '178325');
INSERT INTO `mark` VALUES (30, '178325');
INSERT INTO `mark` VALUES (31, '178325');
INSERT INTO `mark` VALUES (32, '178325');
INSERT INTO `mark` VALUES (33, '178325');
INSERT INTO `mark` VALUES (34, '178325');
INSERT INTO `mark` VALUES (35, '178325');
INSERT INTO `mark` VALUES (36, '178325');
INSERT INTO `mark` VALUES (37, '178325');
INSERT INTO `mark` VALUES (38, '178325');
INSERT INTO `mark` VALUES (39, '178325');
INSERT INTO `mark` VALUES (40, '178325');
INSERT INTO `mark` VALUES (41, '178325');
INSERT INTO `mark` VALUES (42, '178325');
INSERT INTO `mark` VALUES (43, '178325');
INSERT INTO `mark` VALUES (44, '178325');
INSERT INTO `mark` VALUES (45, '178325');
INSERT INTO `mark` VALUES (46, '178325');
INSERT INTO `mark` VALUES (47, '178325');
INSERT INTO `mark` VALUES (48, '178325');
INSERT INTO `mark` VALUES (49, '178325');
INSERT INTO `mark` VALUES (50, '178325');
INSERT INTO `mark` VALUES (51, '178325');
INSERT INTO `mark` VALUES (52, '178325');
INSERT INTO `mark` VALUES (53, '178325');
INSERT INTO `mark` VALUES (54, '209usi');
INSERT INTO `mark` VALUES (55, '209usi');
INSERT INTO `mark` VALUES (56, '209usi');
INSERT INTO `mark` VALUES (57, '209usi');
INSERT INTO `mark` VALUES (58, '209usi');
INSERT INTO `mark` VALUES (59, '209usi');
INSERT INTO `mark` VALUES (60, '209usi');
INSERT INTO `mark` VALUES (61, '209usi');
INSERT INTO `mark` VALUES (62, '209usi');
INSERT INTO `mark` VALUES (63, '209usi');
INSERT INTO `mark` VALUES (64, '209usi');
INSERT INTO `mark` VALUES (65, '209usi');
INSERT INTO `mark` VALUES (66, '209usi');
INSERT INTO `mark` VALUES (67, '209usi');
INSERT INTO `mark` VALUES (68, '209usi');
INSERT INTO `mark` VALUES (69, '209usi');
INSERT INTO `mark` VALUES (70, '209usi');
INSERT INTO `mark` VALUES (71, '209usi');
INSERT INTO `mark` VALUES (72, '209usi');
INSERT INTO `mark` VALUES (73, '209usi');
INSERT INTO `mark` VALUES (74, '209usi');
INSERT INTO `mark` VALUES (75, '209usi');
INSERT INTO `mark` VALUES (76, '209usi');
INSERT INTO `mark` VALUES (77, '209usi');
INSERT INTO `mark` VALUES (78, '209usi');
INSERT INTO `mark` VALUES (79, '209usi');
INSERT INTO `mark` VALUES (80, '209usi');
INSERT INTO `mark` VALUES (81, '209usi');
INSERT INTO `mark` VALUES (82, '209usi');
INSERT INTO `mark` VALUES (83, '209usi');
INSERT INTO `mark` VALUES (84, '209usi');
INSERT INTO `mark` VALUES (85, '209usi');
INSERT INTO `mark` VALUES (86, '209usi');
INSERT INTO `mark` VALUES (87, '209usi');
INSERT INTO `mark` VALUES (88, '209usi');
INSERT INTO `mark` VALUES (89, '209usi');
INSERT INTO `mark` VALUES (90, '209usi');
INSERT INTO `mark` VALUES (91, '209usi');
INSERT INTO `mark` VALUES (92, '209usi');
INSERT INTO `mark` VALUES (93, '209usi');
INSERT INTO `mark` VALUES (94, '209usi');

-- ----------------------------
-- Table structure for phpindex
-- ----------------------------
DROP TABLE IF EXISTS `phpindex`;
CREATE TABLE `phpindex`  (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `result` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `host` varchar(68) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `port` int(15) NOT NULL DEFAULT 80,
  `testtime` int(32) NOT NULL,
  `uuid_id` int(15) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `uuid`(`uuid_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of phpindex
-- ----------------------------
INSERT INTO `phpindex` VALUES (1, '1ms', '127.0.0.1', 80, 123, 123456);
INSERT INTO `phpindex` VALUES (2, '1 ms', '127.0.0.1', 80, 1589679235, 258193);
INSERT INTO `phpindex` VALUES (3, '10 ms', 'www.baidu.com', 80, 1589679292, 258193);
INSERT INTO `phpindex` VALUES (4, '11 ms', 'www.baidu.com', 80, 1589679292, 258193);
INSERT INTO `phpindex` VALUES (5, '11 ms', 'www.baidu.com', 80, 1589679292, 258193);
INSERT INTO `phpindex` VALUES (6, '11 ms', 'www.baidu.com', 80, 1589679292, 258193);
INSERT INTO `phpindex` VALUES (7, '11 ms', 'www.baidu.com', 80, 1589679292, 258193);
INSERT INTO `phpindex` VALUES (8, 'Host could not be reached.', 'www.baidu.com:9090', 80, 1589679337, 258193);
INSERT INTO `phpindex` VALUES (9, 'Host could not be reached.', 'www.baidu.com:9090', 80, 1589679337, 258193);
INSERT INTO `phpindex` VALUES (10, 'Host could not be reached.', 'www.baidu.com:9090', 80, 1589679337, 258193);
INSERT INTO `phpindex` VALUES (11, 'Host could not be reached.', 'www.baidu.com:9090', 80, 1589679337, 258193);
INSERT INTO `phpindex` VALUES (12, 'Host could not be reached.', 'www.baidu.com:9090', 80, 1589679337, 258193);
INSERT INTO `phpindex` VALUES (13, '1 ms', '127.0.0.1', 80, 1589680536, 597368);
INSERT INTO `phpindex` VALUES (14, '1 ms', '127.0.0.1', 80, 1589680679, 258193);
INSERT INTO `phpindex` VALUES (15, '1 ms', '127.0.0.1', 80, 1589680820, 258193);
INSERT INTO `phpindex` VALUES (16, '1 ms', '127.0.0.1', 80, 1589680873, 258193);
INSERT INTO `phpindex` VALUES (17, '1 ms', '127.0.0.1', 80, 1589680893, 258193);
INSERT INTO `phpindex` VALUES (18, '1 ms', '127.0.0.1', 80, 1589680942, 258193);
INSERT INTO `phpindex` VALUES (19, '1 ms', '127.0.0.1', 80, 1589681229, 0);
INSERT INTO `phpindex` VALUES (20, '1 ms', '127.0.0.1', 80, 1589681318, 178325);
INSERT INTO `phpindex` VALUES (21, '10 ms', 'www.baidu.com', 80, 1589681426, 178325);
INSERT INTO `phpindex` VALUES (22, '10 ms', 'www.baidu.com', 80, 1589681465, 178325);
INSERT INTO `phpindex` VALUES (23, '10 ms', 'www.baidu.com', 80, 1589681465, 178325);
INSERT INTO `phpindex` VALUES (24, '11 ms', 'www.baidu.com', 80, 1589681465, 178325);
INSERT INTO `phpindex` VALUES (25, '11 ms', 'www.baidu.com', 80, 1589681465, 178325);
INSERT INTO `phpindex` VALUES (26, '10 ms', 'www.baidu.com', 80, 1589681465, 178325);
INSERT INTO `phpindex` VALUES (27, '10 ms', 'www.baidu.com', 80, 1589681465, 178325);
INSERT INTO `phpindex` VALUES (28, '10 ms', 'www.baidu.com', 80, 1589681465, 178325);
INSERT INTO `phpindex` VALUES (29, '10 ms', 'www.baidu.com', 80, 1589681465, 178325);
INSERT INTO `phpindex` VALUES (30, '10 ms', 'www.baidu.com', 80, 1589681465, 178325);
INSERT INTO `phpindex` VALUES (31, '10 ms', 'www.baidu.com', 80, 1589681465, 178325);
INSERT INTO `phpindex` VALUES (32, '10 ms', 'www.baidu.com', 80, 1589681528, 178325);
INSERT INTO `phpindex` VALUES (33, '10 ms', 'www.baidu.com', 80, 1589681528, 178325);
INSERT INTO `phpindex` VALUES (34, '10 ms', 'www.baidu.com', 80, 1589681528, 178325);
INSERT INTO `phpindex` VALUES (35, '10 ms', 'www.baidu.com', 80, 1589681528, 178325);
INSERT INTO `phpindex` VALUES (36, '10 ms', 'www.baidu.com', 80, 1589681528, 178325);
INSERT INTO `phpindex` VALUES (37, '10 ms', 'www.baidu.com', 80, 1589681528, 178325);
INSERT INTO `phpindex` VALUES (38, '10 ms', 'www.baidu.com', 80, 1589681528, 178325);
INSERT INTO `phpindex` VALUES (39, '10 ms', 'www.baidu.com', 80, 1589681528, 178325);
INSERT INTO `phpindex` VALUES (40, '247 ms', 'chaxun.mzlblog.com', 80, 1589681540, 178325);
INSERT INTO `phpindex` VALUES (41, '245 ms', 'chaxun.mzlblog.com', 80, 1589681540, 178325);
INSERT INTO `phpindex` VALUES (42, '244 ms', 'chaxun.mzlblog.com', 80, 1589681540, 178325);
INSERT INTO `phpindex` VALUES (43, '245 ms', 'chaxun.mzlblog.com', 80, 1589681540, 178325);
INSERT INTO `phpindex` VALUES (44, '245 ms', 'chaxun.mzlblog.com', 80, 1589681541, 178325);
INSERT INTO `phpindex` VALUES (45, '246 ms', 'chaxun.mzlblog.com', 80, 1589681541, 178325);
INSERT INTO `phpindex` VALUES (46, '246 ms', 'chaxun.mzlblog.com', 80, 1589681550, 178325);
INSERT INTO `phpindex` VALUES (47, 'Host could not be reached.', 'chaxun.mzlblog.com', 80, 1589681550, 178325);
INSERT INTO `phpindex` VALUES (48, 'Host could not be reached.', '', 80, 1589681906, 178325);
INSERT INTO `phpindex` VALUES (49, 'Host could not be reached.', '', 80, 1589681914, 178325);
INSERT INTO `phpindex` VALUES (50, '32 ms', 'baidu.com', 80, 1589682208, 178325);
INSERT INTO `phpindex` VALUES (51, '31 ms', 'baidu.com', 80, 1589682251, 178325);
INSERT INTO `phpindex` VALUES (52, '31 ms', 'baidu.com', 80, 1589682442, 209);
INSERT INTO `phpindex` VALUES (53, '245 ms', 'www.mzlblog.com', 80, 1589682588, 209);
INSERT INTO `phpindex` VALUES (54, '246 ms', 'www.mzlblog.com', 80, 1589682588, 209);
INSERT INTO `phpindex` VALUES (55, '246 ms', 'www.mzlblog.com', 80, 1589682588, 209);
INSERT INTO `phpindex` VALUES (56, '246 ms', 'www.mzlblog.com', 80, 1589682588, 209);
INSERT INTO `phpindex` VALUES (57, '248 ms', 'www.mzlblog.com', 80, 1589682589, 209);
INSERT INTO `phpindex` VALUES (58, '248 ms', 'www.mzlblog.com', 80, 1589682589, 209);
INSERT INTO `phpindex` VALUES (59, '248 ms', 'www.mzlblog.com', 80, 1589682589, 209);
INSERT INTO `phpindex` VALUES (60, '248 ms', 'www.mzlblog.com', 80, 1589682589, 209);
INSERT INTO `phpindex` VALUES (61, '245 ms', 'www.mzlblog.com', 80, 1589682598, 209);
INSERT INTO `phpindex` VALUES (62, 'Host could not be reached.', 'www.mzlblog.com', 80, 1589682598, 209);
INSERT INTO `phpindex` VALUES (63, '150 ms', 'hostloc.com', 80, 1589682627, 209);
INSERT INTO `phpindex` VALUES (64, '150 ms', 'hostloc.com', 80, 1589682627, 209);
INSERT INTO `phpindex` VALUES (65, '150 ms', 'hostloc.com', 80, 1589682627, 209);
INSERT INTO `phpindex` VALUES (66, '150 ms', 'hostloc.com', 80, 1589682627, 209);
INSERT INTO `phpindex` VALUES (67, '150 ms', 'hostloc.com', 80, 1589682627, 209);
INSERT INTO `phpindex` VALUES (68, '150 ms', 'hostloc.com', 80, 1589682627, 209);
INSERT INTO `phpindex` VALUES (69, '150 ms', 'hostloc.com', 80, 1589682628, 209);
INSERT INTO `phpindex` VALUES (70, '150 ms', 'hostloc.com', 80, 1589682628, 209);
INSERT INTO `phpindex` VALUES (71, '149 ms', 'hostloc.com', 80, 1589682628, 209);
INSERT INTO `phpindex` VALUES (72, '150 ms', 'hostloc.com', 80, 1589682628, 209);
INSERT INTO `phpindex` VALUES (73, 'Host could not be reached.', 'android.google.com', 80, 1589682660, 209);
INSERT INTO `phpindex` VALUES (74, 'Host could not be reached.', 'android.google.com', 80, 1589682660, 209);
INSERT INTO `phpindex` VALUES (75, 'Host could not be reached.', 'android.google.com', 80, 1589682660, 209);
INSERT INTO `phpindex` VALUES (76, 'Host could not be reached.', 'android.google.com', 80, 1589682660, 209);
INSERT INTO `phpindex` VALUES (77, 'Host could not be reached.', 'android.google.com', 80, 1589682660, 209);
INSERT INTO `phpindex` VALUES (78, 'Host could not be reached.', 'android.google.com', 80, 1589682660, 209);
INSERT INTO `phpindex` VALUES (79, 'Host could not be reached.', 'android.google.com', 80, 1589682661, 209);
INSERT INTO `phpindex` VALUES (80, 'Host could not be reached.', 'android.google.com', 80, 1589682661, 209);
INSERT INTO `phpindex` VALUES (81, 'Host could not be reached.', 'android.google.com', 80, 1589682661, 209);
INSERT INTO `phpindex` VALUES (82, 'Host could not be reached.', 'android.google.com', 80, 1589682661, 209);
INSERT INTO `phpindex` VALUES (83, '244 ms', 'chaxun.mzlblog.com', 80, 1589682671, 209);
INSERT INTO `phpindex` VALUES (84, '244 ms', 'chaxun.mzlblog.com', 80, 1589682671, 209);
INSERT INTO `phpindex` VALUES (85, '244 ms', 'chaxun.mzlblog.com', 80, 1589682671, 209);
INSERT INTO `phpindex` VALUES (86, '244 ms', 'chaxun.mzlblog.com', 80, 1589682671, 209);
INSERT INTO `phpindex` VALUES (87, '243 ms', 'chaxun.mzlblog.com', 80, 1589682672, 209);
INSERT INTO `phpindex` VALUES (88, '243 ms', 'chaxun.mzlblog.com', 80, 1589682672, 209);
INSERT INTO `phpindex` VALUES (89, 'Host could not be reached.', 'chaxun.mzlblog.com', 80, 1589682681, 209);
INSERT INTO `phpindex` VALUES (90, 'Host could not be reached.', 'chaxun.mzlblog.com', 80, 1589682681, 209);
INSERT INTO `phpindex` VALUES (91, '244 ms', 'chaxun.mzlblog.com', 80, 1589682681, 209);
INSERT INTO `phpindex` VALUES (92, 'Host could not be reached.', 'chaxun.mzlblog.com', 80, 1589682681, 209);

SET FOREIGN_KEY_CHECKS = 1;
