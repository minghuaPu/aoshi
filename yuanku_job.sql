/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : yuanku_job

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2016-12-26 02:47:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_pwd` varchar(255) CHARACTER SET utf8 NOT NULL,
  `add_time` varchar(100) COLLATE utf8_estonian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('3', 'jenny', '96e79218965eb72c92a549dd5a330112', '1482483071');
INSERT INTO `admin` VALUES ('2', 'Tommy', '5b1b68a9abf4d2cd155c81a9225fd158', '1482402713');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `article_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `article_content` text CHARACTER SET utf8 NOT NULL,
  `article_picture` varchar(50) CHARACTER SET utf8 NOT NULL,
  `add_time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `browse_count` int(255) NOT NULL,
  `cata_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('8', '鱼鱼鱼', '&lt;p&gt;一个GV很可能就&lt;br/&gt;&lt;/p&gt;', '', '1482657178', '0', '');
INSERT INTO `article` VALUES ('9', '语句', '&lt;p&gt;UI胡&lt;img alt=&quot;46.jpg&quot; src=&quot;/Public/upload/image/20161225/1482664713522448.jpg&quot; title=&quot;1482664713522448.jpg&quot;/&gt;&lt;/p&gt;', '', '1482664727', '0', '');

-- ----------------------------
-- Table structure for `categor`
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
-- Table structure for `company`
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
-- Table structure for `enterprise_user`
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
-- Table structure for `job`
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of job
-- ----------------------------
INSERT INTO `job` VALUES ('13', '阿里巴巴数据分析师', '6', '', '23123123', '塑料袋可分解落实扩', '', '0', '1481267113');
INSERT INTO `job` VALUES ('6', 'HTML5程师', '0', '', '88888', '桑兰多夫空军看风景斯蒂芬', '', '0', '1481183427');
INSERT INTO `job` VALUES ('5', 'JS攻城', '0', '', '88888', '会攻城！', '', '0', '1481178395');
INSERT INTO `job` VALUES ('11', 'PHP高级工程师', '0', '', '88888', '', '', '0', '1481187478');
INSERT INTO `job` VALUES ('12', 'HTML5程师', '0', '', '88888', '', '', '0', '1481187494');
INSERT INTO `job` VALUES ('14', 'PHP高级工程师', '6', '', '34234', '234234', '', '0', '1481267449');
INSERT INTO `job` VALUES ('15', 'JavaG程师', '10', '', '88888', 'sf斯蒂芬斯蒂芬', '', '0', '1481531557');
INSERT INTO `job` VALUES ('16', 'Java高级程师', '10', '', '23234234', '', '', '0', '1481531575');
INSERT INTO `job` VALUES ('19', 'UI设计', '10', '', '34234', '234234', '', '0', '1481618126');
INSERT INTO `job` VALUES ('18', '前端工程师', '10', '', '32232', '看见了空间', '', '0', '1481612958');
INSERT INTO `job` VALUES ('20', '产品经理', '10', '', '123123', '123123', '', '0', '1481618138');
INSERT INTO `job` VALUES ('21', '项目经理', '10', '', '234234', '234234', '', '0', '1481618149');
INSERT INTO `job` VALUES ('22', '项目老板', '10', '', '23234234', '234234', '', '0', '1481618163');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `news_content` text CHARACTER SET utf8 NOT NULL,
  `news_picture` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cata_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `add_time` varchar(20) COLLATE utf8_estonian_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0为不发布，1为发布',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('52', '2016年应届生就业竞争力报告：专业与技能篇', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;2016年应届生求职季正不断深入, \r\n实体经济的下行与新一代大学生求职偏好的“进化”，令今年的校招市场呈现出一些不同的景象。移动互联网招聘平台BOSS直聘近日发布的《2016年应届生\r\n就业竞争力报告：专业与技能》指出，随着经济结构转型，互联网逐步成为“基础设施”，更容易获得高起薪和良好发展空间的学科专业，均呈现出清晰的“第三产\r\n业导向”和技能型导向。应届生所需的技能储备进入了“高配时代”，标配款如办公软件操作，已不再能够提升就业竞争力。&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;计算机类专业应届生平均起薪最高，数字媒体技术成为黑马专业，小语种表现抢眼&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;BOSS直聘“2016年应届生起薪最高的30大专业”榜单显示，“互联网+”和万众创新，让一度被认为毕业生数量过剩的计算机类专业，再次变为头号热\r\n门。2016年应届生平均起薪最高的30个专业中，前三名皆为计算机相关，起薪均超过5500元。通信、国际金融等传统热门专业保持在第一集团，应届生平\r\n均薪资超过5000元。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;数字媒体技术是今年的黑马专业，作为典型的“互联网+文化娱乐+消费经济”的产物，这个踩着好几个风口迅速发展的专业就业情况也比较乐观。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;随着更多中国企业开始开拓国际市场，小语种专业在2016年的应届生专业起薪榜上表现抢眼。作为中国企业海外布局的重要地区，西班牙语和法语作为拉丁美洲和非洲的重要通用语言，均有上榜。&lt;/p&gt;&lt;br/&gt;&lt;h4&gt;&lt;strong&gt;工学、经济学、理学占据大类学科平均起薪三甲&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;因为有计算机类专业的助力，工学成为2016年应届生平均起薪最高的大类学科，为4337元，比整体平均薪酬高出9.5%。经济学（4301元）、理学（4286元）分列二三名。哲学、历史学等冷门学科排名垫底。&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;英语、金融学、财政学就业面最广，医疗、工程、土木类学科就业方向最集中&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;除薪酬之外，所学专业的就业面也是应届生普遍关注的问题。根据不同专业毕业生在各个行业的分布比例，BOSS直聘给出了各个专业的就业分散度模型，分散度数值越高，代表该专业学生毕业后可从事的行业越为广泛。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;从最终结果来看，英语、金融学及财政学成为2016年就业面最广的三大专业，毕业生几乎均匀分布在各领域。30大就业面最宽的专业中，73%属于语言、经济、管理类学科。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;相应地，另外一部分技能性和专业性极强的专业，应届生的选择余地有限，毕业后多选择去对口行业发展。这部分专业以医疗、工程、土木类学科为主。尽管就业面相对较窄，但这部分专业多为高知识壁垒，强指向性的专业服务类行业，在就业稳定性和岗位不可替代性上有较大优势。&lt;/p&gt;', 'upphoto/news/585fe207d1441.jpg', '数据报告', '1482678791', '常濛、谢晨', '1');
INSERT INTO `news` VALUES ('48', '教育吗', '能否', 'upphoto/news/585fa7956a9cb.jpg', '教育类', '1482663829', '', '0');
INSERT INTO `news` VALUES ('49', '今天', '&lt;h1 style=&quot;font-size: 32px; font-weight: bold; border-bottom: 2px solid rgb(204, 204, 204); padding: 0px 4px 0px 0px; text-align: center; margin: 0px 0px 20px;&quot; label=&quot;标题居中&quot;&gt;腐败和书法家的&lt;/h1&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;是的v柜员机白色的不错十点半&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;img alt=&quot;67.jpg&quot; src=&quot;/ueditor/php/upload/image/20161225/1482664385656708.jpg&quot; title=&quot;1482664385656708.jpg&quot;/&gt;&lt;/p&gt;', 'upphoto/news/585faa200ebb8.jpg', '教育类', '1482664480', '', '0');
INSERT INTO `news` VALUES ('50', '个IE欧人那么', '&lt;p&gt;&lt;img alt=&quot;13.jpg&quot; src=&quot;/Public/upload/image/20161225/1482666488152848.jpg&quot; title=&quot;1482666488152848.jpg&quot;/&gt;&lt;/p&gt;', 'upphoto/news/585faf521f278.jpg', '教育类', '1482672646', '', '1');
INSERT INTO `news` VALUES ('51', '个IE欧人那么', '&lt;p&gt;&lt;img alt=&quot;13.jpg&quot; src=&quot;/Public/upload/image/20161225/1482666488152848.jpg&quot; title=&quot;1482666488152848.jpg&quot;/&gt;&lt;/p&gt;', 'upphoto/news/585fb20cd0738.jpg', '教育类', '1482673095', '', '1');
INSERT INTO `news` VALUES ('53', '习近平就加强党内法规制度建设作出重要指示', '&lt;p&gt;&lt;strong&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;央视网消息&lt;/strong&gt;（新闻联播）：中共中央总书记、国家主席、中央军委主席习近平日前作出重要指示强调，党的十八大以来，党中\r\n央高度重视党内法规制度建设，推动这项工作取得重要进展和成效。加强党内法规制度建设是全面从严治党的长远之策、根本之策。我们党要履行好执政兴国的重大\r\n历史使命、赢得具有许多新的历史特点的伟大斗争胜利、实现党和国家的长治久安，必须坚持依法治国与制度治党、依规治党统筹推进、一体建设。要按照十八大和\r\n十八届三中、四中、五中、六中全会部署，认真贯彻落实《中共中央关于加强党内法规制度建设的意见》，以改革创新精神加快补齐党建方面的法规制度短板，力争\r\n到建党100周年时形成比较完善的党内法规制度体系，为提高党的执政能力和领导水平、推进国家治理体系和治理能力现代化、实现中华民族伟大复兴的中国梦提\r\n供有力的制度保障。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;　全国党内法规工作会议24日至25日在京召开。中共中央政治局常委、中央书记处书记刘云山出席会议并讲话。他指出，习近平总书记重要指示从全局和\r\n战略高度深刻阐明了加强党内法规制度建设的重大意义、主要任务和基本要求，为做好党内法规工作提供了重要遵循。落实好习近平总书记重要指示和党中央部署，\r\n要牢牢把握党内法规制度建设的正确方向，以党章为根本依据，切实体现党的意志主张，体现全面从严治党要求，强化“四个意识”特别是核心意识、看齐意识，坚\r\n持依法治国与制度治党、依规治党统筹推进、一体建设，推动党的制度优势更好转化为治国理政的实际效能。要突出工作重点，坚持目标导向和问题导向相统一，加\r\n快形成内容科学、程序严密、配套完备、运行有效的党内法规制度体系。要以改革创新精神推进党内法规制度建设，提高党内法规制度质量。要抓好党内法规制度的\r\n落实，发挥领导干部带头示范作用，以良好的党内政治文化提升法规制度的执行力、影响力。中央各部门和地方各级党委要强化政治责任和领导责任，把党内法规制\r\n度建设纳入党的建设总体安排，为党内法规制度建设提供有力保证。&lt;/p&gt;&lt;p&gt;　　刘奇葆、赵乐际、赵洪祝出席会议，栗战书传达了习近平总书记的重要指示并讲话。&lt;/p&gt;&lt;p&gt;　　会上，中央纪委机关、中央组织部、北京、浙江、福建、湖北、深圳等部门和地方有关负责同志作交流发言。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'upphoto/news/5860096f7989a.jpg', '教育类', '1482688879', '责任编辑：隗俊', '0');
