/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : yuanku_job

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-12-23 10:37:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `user_pwd` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `add_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('2', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '1482389688');
INSERT INTO `admin` VALUES ('3', 'smith', 'e10adc3949ba59abbe56e057f20f883e', '1', '1482389758');
INSERT INTO `admin` VALUES ('4', 'smith1', 'e10adc3949ba59abbe56e057f20f883e', '1', '1482390125');

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `cate_id` int(11) NOT NULL,
  `article_picture` varchar(255) NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `add_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('6', '快圣诞节了', '有事件了吗！', '0', '', null, '1482222933');
INSERT INTO `article` VALUES ('7', '快圣诞节了', '有事件了吗！', '0', '', null, '1482222998');
INSERT INTO `article` VALUES ('16', '冬至', '汤圆有了！', '0', '', null, '1482304513');
INSERT INTO `article` VALUES ('17', '在不在？！', '在呀！', '0', '', null, '1482308062');
INSERT INTO `article` VALUES ('20', '快圣诞节了', '圣诞老人来了', '0', '', null, '1482397690');
INSERT INTO `article` VALUES ('21', '快圣诞节了', '&lt;h1 style=&quot;font-size: 32px; font-weight: bold; border-bottom: 2px solid rgb(204, 204, 204); padding: 0px 4px 0px 0px; text-align: center; margin: 0px 0px 20px;&quot;&gt;在哪里，老人家&lt;br/&gt;&lt;/h1&gt;&lt;p&gt;在这里，来吧！&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/image/20161223/1482458254782231.jpg&quot; title=&quot;1482458254782231.jpg&quot; alt=&quot;6159252dd42a2834de2d67e25eb5c9ea14cebf54.jpg&quot;/&gt;&lt;/p&gt;', '0', '', '/Public/upload/news/585c8d36b1827.jpg', '1482460470');
INSERT INTO `article` VALUES ('22', '快圣诞节了', '', '0', '', '/Public/upload/news/585c8db363a92.jpg', '1482460595');

-- ----------------------------
-- Table structure for categor
-- ----------------------------
DROP TABLE IF EXISTS `categor`;
CREATE TABLE `categor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) NOT NULL,
  `sort` smallint(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categor
-- ----------------------------

-- ----------------------------
-- Table structure for company
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `telphone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `add_time` varchar(255) NOT NULL,
  `enterprise_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of company
-- ----------------------------
INSERT INTO `company` VALUES ('3', '哈弗健康公司', '13399998888', '美国345', '/uploads/1481269066.jpeg', '1481269066', '10');
INSERT INTO `company` VALUES ('5', '休斯敦松岛公司', '13399998888', '123123', '/uploads/1481533946.png', '1481533946', '6');

-- ----------------------------
-- Table structure for enterprise_user
-- ----------------------------
DROP TABLE IF EXISTS `enterprise_user`;
CREATE TABLE `enterprise_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `reg_time` varchar(255) NOT NULL,
  `vip_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of enterprise_user
-- ----------------------------
INSERT INTO `enterprise_user` VALUES ('6', '13388889999', 'e10adc3949ba59abbe56e057f20f883e', '', '0');
INSERT INTO `enterprise_user` VALUES ('5', '13335446667', 'e10adc3949ba59abbe56e057f20f883e', '', '0');
INSERT INTO `enterprise_user` VALUES ('7', 'O\'reilly', 'e10adc3949ba59abbe56e057f20f883e', '', '0');
INSERT INTO `enterprise_user` VALUES ('8', '\' or 1=1#', 'd41d8cd98f00b204e9800998ecf8427e', '', '0');
INSERT INTO `enterprise_user` VALUES ('10', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1481270142', '0');

-- ----------------------------
-- Table structure for job
-- ----------------------------
DROP TABLE IF EXISTS `job`;
CREATE TABLE `job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(50) NOT NULL,
  `enterprise_id` int(11) NOT NULL,
  `place` varchar(255) NOT NULL,
  `money` int(11) NOT NULL,
  `job_require` text NOT NULL,
  `job_describe` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0:岗位不显示;1:显示',
  `add_time` varchar(255) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of job
-- ----------------------------
INSERT INTO `job` VALUES ('13', '阿里巴巴数据分析师', '6', '', '23123123', '塑料袋可分解落实扩', '', '0', '1481267113', '', '');
INSERT INTO `job` VALUES ('6', 'HTML5程师', '0', '', '88888', '桑兰多夫空军看风景斯蒂芬', '', '0', '1481183427', '', '');
INSERT INTO `job` VALUES ('5', 'JS攻城', '0', '', '88888', '会攻城！', '', '0', '1481178395', '', '');
INSERT INTO `job` VALUES ('11', 'PHP高级工程师', '0', '', '88888', '', '', '0', '1481187478', '', '');
INSERT INTO `job` VALUES ('12', 'HTML5程师', '0', '', '88888', '', '', '0', '1481187494', '', '');
INSERT INTO `job` VALUES ('14', 'PHP高级工程师', '6', '', '34234', '234234', '', '0', '1481267449', '', '');
INSERT INTO `job` VALUES ('15', 'JavaG程师', '10', '', '88888', 'sf斯蒂芬斯蒂芬', '', '0', '1481531557', '', '');
INSERT INTO `job` VALUES ('16', 'Java高级程师', '10', '', '23234234', '', '', '0', '1481531575', '', '');
INSERT INTO `job` VALUES ('19', 'UI设计', '10', '', '34234', '234234', '', '0', '1481618126', '', '');
INSERT INTO `job` VALUES ('18', '前端工程师', '10', '', '32232', '看见了空间', '', '0', '1481612958', '', '');
INSERT INTO `job` VALUES ('20', '产品经理', '10', '', '123123', '123123', '', '0', '1481618138', '', '');
INSERT INTO `job` VALUES ('21', '项目经理', '10', '', '234234', '234234', '', '0', '1481618149', '', '');
INSERT INTO `job` VALUES ('22', '项目老板', '10', '', '23234234', '234234', '', '0', '1481618163', '113.334431', '23.138594');
INSERT INTO `job` VALUES ('24', '前端工程师', '10', '', '88888', '234234', '', '0', '1481770860', '113.373595', '23.047211');
INSERT INTO `job` VALUES ('26', '前端中级工程师', '10', '', '88888', '唯品会起端期待您的光临！', '', '0', '1481872286', '113.239081', '23.104581');
