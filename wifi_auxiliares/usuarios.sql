/*
Navicat MySQL Data Transfer

Source Server         : cuentas
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : usuarios

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-16 23:55:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for usuarios_wifi
-- ----------------------------
DROP TABLE IF EXISTS `usuarios_wifi`;
CREATE TABLE `usuarios_wifi` (
  `usuarios` varchar(50) DEFAULT '',
  `password` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
