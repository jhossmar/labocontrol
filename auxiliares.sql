/*
Navicat MySQL Data Transfer

Source Server         : labo2.0
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : auxiliares

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2017-05-16 15:38:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `password` char(0) NOT NULL,
  `usuarios` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('', 'carolina');
INSERT INTO `usuarios` VALUES ('', 'chino');
INSERT INTO `usuarios` VALUES ('', 'josue 123');

-- ----------------------------
-- Table structure for usuarios2
-- ----------------------------
DROP TABLE IF EXISTS `usuarios2`;
CREATE TABLE `usuarios2` (
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios2
-- ----------------------------
INSERT INTO `usuarios2` VALUES ('josue', '123');
INSERT INTO `usuarios2` VALUES ('carolina', '123');
INSERT INTO `usuarios2` VALUES ('chino', '123');
INSERT INTO `usuarios2` VALUES ('cristina', '');
INSERT INTO `usuarios2` VALUES ('', 'abc');
INSERT INTO `usuarios2` VALUES ('chino', '123');
SET FOREIGN_KEY_CHECKS=1;
