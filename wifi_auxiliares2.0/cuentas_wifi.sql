/*
Navicat MySQL Data Transfer

Source Server         : cuentas
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : cuentas_wifi

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-26 21:05:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for administradores
-- ----------------------------
DROP TABLE IF EXISTS `administradores`;
CREATE TABLE `administradores` (
  `nombre` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of administradores
-- ----------------------------
INSERT INTO `administradores` VALUES ('marcelo', 'marcelo');

-- ----------------------------
-- Table structure for usuarios_wifi2
-- ----------------------------
DROP TABLE IF EXISTS `usuarios_wifi2`;
CREATE TABLE `usuarios_wifi2` (
  `nombre` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `CI` int(10) NOT NULL,
  `codigo_sis` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios_wifi2
-- ----------------------------
INSERT INTO `usuarios_wifi2` VALUES ('josue', 'josue', 'jimenez', '123456', '4567890');
INSERT INTO `usuarios_wifi2` VALUES ('chino', 'chino', 'chino', '1234567', '567890');
INSERT INTO `usuarios_wifi2` VALUES ('carolina', 'carolina', 'melgarejo', '1255237623', '21346213');
