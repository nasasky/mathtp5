/*
 Navicat Premium Data Transfer

 Source Server         : work
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : mathtp5

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 19/01/2019 15:33:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tp_answer_list
-- ----------------------------
DROP TABLE IF EXISTS `tp_answer_list`;
CREATE TABLE `tp_answer_list`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `math_id` int(255) NULL DEFAULT NULL COMMENT '题目id',
  `answer` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '答题',
  `status` int(255) NULL DEFAULT NULL COMMENT '是否正确: 1表示答对，0表示错误',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '//答题表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tp_math_nums
-- ----------------------------
DROP TABLE IF EXISTS `tp_math_nums`;
CREATE TABLE `tp_math_nums`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '题目',
  `result_a` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'A选项',
  `result_b` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'B选项',
  `result_c` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'C选项',
  `result_d` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'D选项',
  `true_select` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '选项 A \\ 选项 B \\ 选项 C \\ 选项 D',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '//题库表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tp_math_nums
-- ----------------------------
INSERT INTO `tp_math_nums` VALUES (1, '一辆汽车13:30由甲地出发开往乙地，17:50到达，它在路上行驶了（    ）。', '4小时 ', '4小时20分钟 ', '5小时', '5小时20分钟 ', 'B');
INSERT INTO `tp_math_nums` VALUES (2, '在一个长8cm、宽6cm的长方形纸上剪下一个最大的正方形，这个正方形的周长是（   ）。', '32cm', '24cm', '14cm', '20cm', 'B');
INSERT INTO `tp_math_nums` VALUES (3, '小强面向东南方，他的背面是（    ）方。', '东北', '西北', '西南', '东南', 'B');
INSERT INTO `tp_math_nums` VALUES (4, '在计算52×4时，“5”与“4”相乘表示（  ）。', '5×4 ', '50×40 ', '50×4', '5×40', 'C');
INSERT INTO `tp_math_nums` VALUES (5, '两个加数调换位置,和(　　)。', '变小了', '不变 ', '变大了', '不确定', 'B');
INSERT INTO `tp_math_nums` VALUES (6, '不能验算437+355=792的算式是(　　)。', '355+437 ', '792-355 ', '437-355', '792-437', 'C');
INSERT INTO `tp_math_nums` VALUES (7, '估算498+303-599的结果大约是(　　)。', '100	', '200', '300', '400', 'B');
INSERT INTO `tp_math_nums` VALUES (8, '一个数与459的和是790,求这个数。列式为(　　)。', '459+790', '790-459', '790+459', '以上各项都不对', 'B');
INSERT INTO `tp_math_nums` VALUES (9, '一根铁丝长100米，第一次用去23米，第二次用去46米，现在铁丝的长度比原来短了多少米？（）', '100 - 23-46', '100 -（23+46）', '23+46', '46', 'B');
INSERT INTO `tp_math_nums` VALUES (10, '703×4的积的十位上的数是（  ）。', '3', '0', '1', '5', 'C');
INSERT INTO `tp_math_nums` VALUES (11, '做一套衣服用2 米布，35米长的布最多可以做（  ）套衣服。', '16', '17', '18', '19', 'B');

SET FOREIGN_KEY_CHECKS = 1;
