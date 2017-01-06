/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : yuanku_job

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2016-12-30 16:13:02
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
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('52', '2016年应届生就业竞争力报告：专业与技能篇', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;2016年应届生求职季正不断深入, \r\n实体经济的下行与新一代大学生求职偏好的“进化”，令今年的校招市场呈现出一些不同的景象。移动互联网招聘平台BOSS直聘近日发布的《2016年应届生\r\n就业竞争力报告：专业与技能》指出，随着经济结构转型，互联网逐步成为“基础设施”，更容易获得高起薪和良好发展空间的学科专业，均呈现出清晰的“第三产\r\n业导向”和技能型导向。应届生所需的技能储备进入了“高配时代”，标配款如办公软件操作，已不再能够提升就业竞争力。&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;计算机类专业应届生平均起薪最高，数字媒体技术成为黑马专业，小语种表现抢眼&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;BOSS直聘“2016年应届生起薪最高的30大专业”榜单显示，“互联网+”和万众创新，让一度被认为毕业生数量过剩的计算机类专业，再次变为头号热\r\n门。2016年应届生平均起薪最高的30个专业中，前三名皆为计算机相关，起薪均超过5500元。通信、国际金融等传统热门专业保持在第一集团，应届生平\r\n均薪资超过5000元。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;数字媒体技术是今年的黑马专业，作为典型的“互联网+文化娱乐+消费经济”的产物，这个踩着好几个风口迅速发展的专业就业情况也比较乐观。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;随着更多中国企业开始开拓国际市场，小语种专业在2016年的应届生专业起薪榜上表现抢眼。作为中国企业海外布局的重要地区，西班牙语和法语作为拉丁美洲和非洲的重要通用语言，均有上榜。&lt;/p&gt;&lt;br/&gt;&lt;h4&gt;&lt;strong&gt;工学、经济学、理学占据大类学科平均起薪三甲&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;因为有计算机类专业的助力，工学成为2016年应届生平均起薪最高的大类学科，为4337元，比整体平均薪酬高出9.5%。经济学（4301元）、理学（4286元）分列二三名。哲学、历史学等冷门学科排名垫底。&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;英语、金融学、财政学就业面最广，医疗、工程、土木类学科就业方向最集中&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;除薪酬之外，所学专业的就业面也是应届生普遍关注的问题。根据不同专业毕业生在各个行业的分布比例，BOSS直聘给出了各个专业的就业分散度模型，分散度数值越高，代表该专业学生毕业后可从事的行业越为广泛。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;从最终结果来看，英语、金融学及财政学成为2016年就业面最广的三大专业，毕业生几乎均匀分布在各领域。30大就业面最宽的专业中，73%属于语言、经济、管理类学科。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;相应地，另外一部分技能性和专业性极强的专业，应届生的选择余地有限，毕业后多选择去对口行业发展。这部分专业以医疗、工程、土木类学科为主。尽管就业面相对较窄，但这部分专业多为高知识壁垒，强指向性的专业服务类行业，在就业稳定性和岗位不可替代性上有较大优势。&lt;/p&gt;', 'upphoto/news/585fe207d1441.jpg', '数据报告', '1482678791', '常濛、谢晨', '1');
INSERT INTO `news` VALUES ('48', '职场人士如何利用业余时间实现自我提升', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;职场是个靠实力说话的地方，不想被淘汰，就必须想办法持续提升自己的能力，要学会如何做事，如何搞定客户，如何与同事相处，如何拍领导马屁，如何教导下属……这些能力固然可以在工作中获得提升，但若想快人一步，还得学会如何充分利用业余时间进行自我提升。&lt;/p&gt;&lt;p&gt;这其实是三个问题，第一是如何充分利用时间，第二是提升什么，第三是如何提升。&lt;/p&gt;&lt;h4 style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;一、如何充分利用业余时间&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;首先，需要将碎片时间整合为大块时间。主要是从住和吃两方面考虑。&lt;/p&gt;&lt;p&gt;如果租房（有房的同学当我没说），尽量离上班的地方近一点，可节省下来大量的时间和精力。想想看，白天工作已经累的跟条狗似的，下班再挤一两个小时的车，到家就变成死狗了，完全没有精力做其它的事情。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;你说可以利用路上的时间？确实可以，但由于要开车或挤车，相对而言效率会低很多，而且形式受限（基本只能用听的），这些时间都是碎片时间，虽然可以利用，但只适于获取信息。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;所以，如果现在租的房子离公司比较远的话，就不要节省那点房租了，搬家吧。我当初为了节省花在交通上的时间就换了房子，房租高了一倍，面积小了很多，环境也差了不少，但相信我，这些都是值得的。&lt;/p&gt;&lt;p&gt;吃的方面，如果想要提升的能力不包括烹饪的话，还是在外解决吧，平时挑上菜快一点的，卫生有保证的餐厅搞定就行了，最多半个小时。有很多朋友对这点非常抵触，认为这对健康不好，我很认同。所以咱们得找好一点的馆子，别整天吃快餐。&lt;/p&gt;&lt;p&gt;当然在外吃饭永远也赶不上吃住家饭的感觉，现在网上有很多适合单身人士的菜谱，很多都是既快又好吃，有兴趣做饭的朋友们可以尝试。&lt;/p&gt;&lt;p&gt;除了这两方面，还有其它节省时间的方法，而且不仅仅是业余时间。比如，与其花大量的时间下载电子书，不如直接网上下单，不过一顿快餐钱而已；比如，与其跟朋友有一搭没一搭的聊微信，不如直接打个电话嘘寒问暖一次搞定，即亲切又省事。&lt;/p&gt;&lt;p&gt;说到这里大家可能已经发现，其实这些手段无非都是用金钱换时间。这么做是因为时间的价值比我们想象的要大的多，钱没有了还可以再赚，时间没有了就真的没有了。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;从\r\n这个角度看，可以认为“自我提升”本质上是一种投资行为，成本是这些“买到的时间”+“购买时间所花费的金钱”+“提升自己所付出的努力”，回报就是未来\r\n从工作中获得的收益，长远来看，这是非常划算的。时间就是金钱，这绝对是真理，各位同学如果有心的话，不妨计算一下自己每天丢掉了多少钱。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;另\r\n外，当我们有了时间的时候，还得想办法让自己聚焦于真正有意义的事情，否则就会使好不容易聚集起来的大块时间重新变得碎片化。从以往的经验来看，在当前的\r\n环境下，网络是把时间变得碎片化的重要原因。许多人希望通过断网来解决这个问题，但往往很难实施下去，况且在网络时代，没有必要将自己置于完全封闭的环境\r\n中。实际上，我们需要的不是断网，而是养成不被网络（或其他事务）分散注意力的能力。要知道，网络固然能帮助我们提高效率，但也仅仅是一个能够提高效率的\r\n工具而已。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;坦白讲，我实在想不出到底哪些自我提升的项目是必须要在网络环境中进行的。即便是我当年学习网络技术的时候，都是通过在虚拟机里\r\n搭建虚拟网络解决的（ 好吧，事实是我买不起cisco的设备来做实验），所以啊，那些“需要上网才能学习”的言论统统是借口！我建议大家体验一下不被网络\r\n控制的生活，你会发现只需经过几天的适应期，信息焦虑症就会逐渐消失，我们又有心情去思考人生哲理和宇宙的未来了。&lt;/p&gt;&lt;p&gt;接下来，就讨论一下“提升什么”的问题吧。&lt;/p&gt;&lt;h4 style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;二、提升哪些方面&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;“自我提升”实际上是个很“自我”的事情，没有好坏对错之分，只有特点的不同。大家结合自己的实际情况，分析一下工作和生活方面现存的问题，展望一下未来的发展方向，就能大致有一些眉目了。以普适性来讲，我建议从下面几个方向考虑。&lt;/p&gt;&lt;p&gt;健康：这是人在年轻的时候最容易忽视但实际上却是最重要的一件事，君不见无数中年大叔捶胸顿足就是在懊悔这件事。若有人不服，我只问一句：“你病得起吗？”&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;当前岗位所需的技能：先把眼前的事情做好永远是最重要的。销售就去学习怎样沟通，项目经理就去学习项目管理。&lt;/p&gt;&lt;p&gt;升职所需的技能：如果不知道，那就观察一下，你的顶头上司都会些什么？如果你觉得他什么都不懂，那就继续好好观察。&lt;/p&gt;&lt;p&gt;为未来发展所储备的技能：早一天打算，便多一分轻松，为未来多做一些累积，等待厚积薄发的那一天吧。比如，如果希望未来能够创业，那么就需要了解和练习管理、人力、财务、沟通、行业等方面的知识和技能，这些准备，当然越早开始越好。&lt;/p&gt;&lt;p&gt;无论何时何地都用得到的基本能力：这些技能出色了，不管到哪里，无论做什么，都不会太差。比如沟通、办公软件、思维模式、逻辑、学习能力等等。&lt;/p&gt;&lt;p&gt;个人兴趣：这个完全是个人喜好，不会对人生轨迹造成很明显的影响（扎克伯格表示不同意—_—!!!）。&lt;/p&gt;&lt;p&gt;以上分类作为参考，优先级由高到低。下面来看看具体实施的办法。&lt;/p&gt;&lt;h4 style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;三、如何提升&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;很简单，就是六个字：&lt;strong&gt;“多学、多做、多想”。&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;多学&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;我们从一出生就在不停的学习，不过许多人在成年之后就丧失了学习的意愿，永久止步于某个层级，再也不曾窥见更广阔的世界，所以愿意持续学习同时也会学习的人，无疑是幸福的。学习的方式有很多，最有效的有两个，一个是请教他人，一个是读书。&lt;/p&gt;&lt;p&gt;请教他人最直接，在交流的过程中可以不断的质疑、思考、汲取，是学习效率最高的方式。同事、老师、上司、同行等等一切比我们牛的人都可以是请教的对象。跟牛人交流，经验值跟开了挂一样啊，所以如果有这样的机会，大家一定要好好把握。&lt;/p&gt;&lt;p&gt;读书有个好处，就是范围特别广。读书的过程，也是与作者进行思想交流的过程，效率虽然不如谈话那么高，但胜在可以交流的人特别多。只需翻开几本书，便可以同时与不同时代、不同种族、不同视点、不同领域的大师们交流，这种体验，只有读书能带给你。&lt;/p&gt;&lt;p&gt;除了这两种，还有许多其它的学习方式，比如听课或者阅读各类文章等等（可参考“学习金字塔”）。总而言之，只要有心，人人都能学习，并且在任何情况下都能学习（所以别再找借口买水果三件套了）。&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;多做（做事的做）&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;通过学习，我们可以掌握许多理论知识，但理论与实践相结合才有价值，用理论来指导实践，不仅实践会变得更有效率，而且也能对理论理解的更加深刻和透彻。那具体到提升能力方面，我们要怎么做呢？下面几点tips可供参考：&lt;/p&gt;&lt;p&gt;多做高价值的事务，摒弃那些低价值的事务：一个简单判断事务价值的方法就是看其中包含了多少机械的重复性劳动，因为创造性劳动永远是含金量最高的。另一个方法就是看它是否能够直接带来明显的收益，一般可以认为，越是直接的，事务的含金量越高，当然难度也越高。&lt;/p&gt;&lt;p&gt;做的时候尽量“偷懒”：理论这种伟光正的武器可以帮助我们更聪明的做事，所以别傻傻的闷头干，用你学到的理论知识来提高效率吧。&lt;/p&gt;&lt;p&gt;搞搞新意思：有时候，难免有许多重复性劳动是甩不掉的，这个时候，可以考虑搞点创意，这样不仅有机会找到更多解决问题的办法，也能让自己不无聊。&lt;/p&gt;&lt;p&gt;要做就做好：其实就是大前研一强调的专业精神。如果凡事凑合的话，根本就是浪费时间，无法得到任何能力上的提高。&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;多想&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;学\r\n而不思则罔，所以我们得多思考，而且还得能独立思考，这样才能有效的将理论应用在实践中。思考其实是很有乐趣的，会上瘾，特别是当你了解很多思维方法之\r\n后，运用各种方法和工具去分析一个问题，这时候不仅会有解决问题的成就感，也会产生一种智力上的优越感。思考本质上是一个提高信息利用率的手段，同样看一\r\n本书，大家接受的信息量是一样的，但有人看完就算了，有人写了读书笔记，有人写了观点剖析，每个人最终的收获肯定不一样，区别就在于思考的深度不同导致对\r\n信息的利用率也不同。&lt;/p&gt;&lt;p&gt;思考的话题太大了，简直无从谈起，这里只能勉强凑几个tips。&lt;/p&gt;&lt;p&gt;凡事多想想“为什么”：大多数真实的问题都藏在一连串的“为什么”里面，通常只要找准了问题就很容易找到解决方案了。&lt;/p&gt;&lt;p&gt;多想想未来：如果能够站在历史的角度思考问题，就有助于我们在更高的地方俯视人生。&lt;/p&gt;&lt;p&gt;尽量将思考进行输出：比如在知乎回答问题、写文章、讲给别人听等等，这才是训练思考能力的最好方法，否则只能称之为灵光一闪，闪完了就忘了。&lt;/p&gt;&lt;p&gt;以\r\n上就是如何充分利用业余时间提升能力的方法，如果上面所说的状态能坚持一段时间的话，就会变成一种习惯，它会驱使着我们去行动，让“提升自我”就变成一个\r\n内化的、隐含的目标。最后再次重申，不要纠结细节和完美的规划，重点在于是否开始了行动，即便每天只能抽出十分钟，那就从这十分钟开始吧。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'upphoto/news/5860ac34ac72a.jpg', '干货文章', '1482731016', 'Cher Deo', '1');
INSERT INTO `news` VALUES ('49', 'BOSS直聘启动“攻薪季”招聘周，撮合优质大厂与实力牛人', '&lt;p&gt;导语：&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em&gt;1KB=1024B&lt;/em&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em&gt;1MB=1024KB&lt;/em&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em&gt;1GB=1024MB&lt;/em&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em&gt;1TB=1024GB&lt;/em&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;em&gt;...&lt;/em&gt;&lt;/p&gt;&lt;p&gt;&lt;em&gt;&amp;nbsp;&amp;nbsp;简单的字节如细胞一样构建了我们丰富多样的互联网世界，也给人力资源领域带来了全新、高效的数字化招聘机会。&lt;/em&gt;&lt;/p&gt;&lt;p&gt;&lt;em&gt;在10月24日，值得一次全新的数字体验，让大厂招聘成为一件更为简单的事。&lt;/em&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&amp;nbsp; BOSS直聘（北京），2016年10月18日&lt;/strong&gt; ——随着招聘旺季金秋十月的深入，以“为价值而生”为企业理念的BOSS直聘今日宣布，10月24日至30日将启动北上广深杭五城联动的 “攻薪季” 线上招聘周。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp; 据活动负责人透露，“攻薪季”这一名称，希望牛人能够在金秋10月做出明智的决定，获得更好的机会，更高的薪资。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp; 本次“攻薪季”活动主要基于对目前招聘市场的观察。虽然创业公司普遍受资本寒冬影响，放缓了招聘的节奏，但现金流良好的大厂和部分创业公司此时开始果断出手，囤积优质人才。BOSS直聘希望借助“攻薪季”活动更好的帮助优质人才和实力大厂进行对接。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp; 目前，BOSS直聘 “攻薪季”活动招募已如火如荼地开展。报名参加“攻薪季”的企业可随即获得活动同步带来的曝光。购买优质资源位组合超值套餐，将进一步增加匹配优质应聘者的精准度。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp; 对于需求足够旺盛的公司，的BOSS直聘为进一步提升使用体验，优化产品结构，还推出优质资源位组合超值套餐。帮助企业基于地域、职位等需求精准的找到合适人才。&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp; 同时，企业用户可跳过与求职者的聊天环节，直接获取对方简历。购买超值套餐的企业还可获得增值赠送的网页版聊天工具。企业报名通道将于10月23日关闭，报名链接：&lt;a href=&quot;https://www.bosszhipin.com/activity/goldenfall/combolist.html?stage=4&amp;sid=fanyao_taocan5&quot;&gt;https://www.bosszhipin.com/activity/goldenfall/combolist.html?stage=4&amp;amp;sid=fanyao_taocan5&lt;/a&gt;报名参加“攻薪季”活动的企业，即可获赠品牌流量提升，迅速提升职位搜索排名，增加急聘职位的曝光率。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;\r\n \r\n自2014年7月BOSS直聘上线以来，用户增长迅猛，产品从第1位用户诞生到第100万个用户积累历时413天，而产品中出现的第2个100万的用户增\r\n长仅用时49天。BOSS直聘拥有行业领先的大数据运算能力，截止2016年9月30日，平台拥有1186万C端用户，及198万企业BOSS，互联网渗\r\n透率高达80%。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp; \r\n数据显示，BOSS直聘拥有高粘度的产品用户，平均企业用户每天登陆产品频率为12次，求职者为9次，而从使用时长看企业端用户平均每天使用10分钟，求\r\n职者为7分钟。求职者及企业Boss的回复率分别高达60%和70%。精准的大数据算法实现每月匹配双向用户700万对，求职与招聘信息在前三页匹配度达\r\n到80%。对于企业用户，简化招聘流程，发布职位无需等待，1分钟就可开票，第二天就可面试，提升招聘效率。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'upphoto/news/585faa200ebb8.jpg', '公司动态', '1482731092', 'PR Team', '1');
INSERT INTO `news` VALUES ('50', '做好这七步，分分钟化解同事间冲突', '&lt;blockquote&gt;&lt;p&gt;&lt;strong&gt;原标题：&lt;/strong&gt;7 Emergency Steps For Ending Team Conflict&lt;/p&gt;&lt;p&gt;&lt;strong&gt;原作者：&lt;/strong&gt;John Rampton&lt;/p&gt;&lt;p&gt;&lt;strong&gt;翻译自：&lt;/strong&gt;www.fastcompany.com&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;前不久，和朋友赵小四聊天，他吐槽现在带团队真是太难了，团队成员间常会出现一些矛盾，稍处理不好，就大有愈演愈烈的趋势，搞得他天天很苦闷。&lt;/p&gt;&lt;p&gt;看着哥们唉声叹气，实在不忍心，说：“夫妻之间尚且会发生冲突，更不消说同事之间了。其实你只是没找对方法，找对方法，化解同事间冲突就是分分钟的问题。”&lt;/p&gt;&lt;p&gt;于是乎，和他分享了一篇干货。据反映十分有效果，现在团队带的顺风顺水，年底业绩拿下No.1，信心满满。既然这么有用，那就分享出来。&lt;/p&gt;&lt;p&gt;我们每个人都是独立的个体，具有独特的天赋、能力和个性，但也正因这样，我们会因坚持己见而和其他同事产生矛盾。所以说，有时候这种多元个性的结果能创造出巨大的力量，但有时候并不是这样，特别是在高压情况下。&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;一、准确并快速地找到冲突源头&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;并不是每一个冲突都是因为个性差异，有时是因为双方持有不同的观点，而彼此双方都不愿去妥协让步，有时是因为外界压力而把情绪带到工作中来，有时是因为资源有限，管理者的不恰当期许，甚至是单纯地因为大家待在一起太久而产生矛盾，从而导致一个本来高效的团队变得效率低下。&lt;/p&gt;&lt;p&gt;作\r\n为一名管理者，重要的是在你准备试图解决它之前，要找出是什么导致的冲突，而且必须要很快速地找到。并不总是团队中的某一个人故意给其他人制造混乱，通常\r\n是团队中的几个成员的正面冲突导致大家的处境变得更加困难。所以越早找出导致冲突的“罪魁祸首”, \r\n就可以越早解决问题，反过来，就意味着可以越早解决团队里的冲突问题。&lt;/p&gt;&lt;p&gt;也许一些管理者喜欢用不干涉的方法去任由事态发展，让团队成员自己去解决这些问题，但以我的经验来看，这样只会让事态变得更加糟糕，早些调解冲突可以让事情早一步解决。&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;二、把各自的想法说出来&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;一旦介入冲突，是时候让矛盾双方同意就这个问题做一次沟通，即使不情愿也要做，因为只有沟通才能解决问题，一些最具破坏性的误会往往会变成一个小问题，除非个别成员认为他们能够争夺绝对的话语权。&lt;/p&gt;&lt;p&gt;你\r\n不能找出问题所在是因为没有做细分，管理者需要适度把控谈话以至于尽可能让沟通过程有条不紊，这就意味着需要设置一些指导规则，让各自的意见分享出来而不\r\n是指出问题。当他们说出意见时也要认真聆听，这样的话，你的团队成员就可以理解摩擦产生的原因，不会再仅仅根据自己的经历去看待问题了。&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;三、提醒大家注意共同目标&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 进行沟通后，冲突双方的脾气应该比开始会冷静很多，这时候就要提醒团队成员注意为什么要把相互合作放在第一位。理想情况下，整个团队的目标是实现那些独自工作情况下无法成功的集体目标，这样一来，他们就都能意识到解决问题的好处了。&lt;/p&gt;&lt;p&gt;向你的团队成员指出，虽然他们不一定要总是认同对方的看法，但他们仍然是有共通点的，比如都希望公司成功，这样可以帮助彼此跳过那些琐碎的差异，达到求同存异的目的。&lt;/p&gt;&lt;p&gt;个别人的成功不是真的成功，公司成功了才是真的成功，而每个团队成员的成功都是依赖于公司的成功。&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;四、建议其中一方做出妥协&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;团队的存在是为了帮助公司更好的成功，冲突双方就需要开始考虑各自需要做出什么样的妥协，当他们明白为了创造团队的和平共处而不得不放弃一些东西时，冲突可能会突然不像最开始那样激烈和重要了。&lt;/p&gt;&lt;p&gt;在\r\n一个团队冲突中，一方做出牺牲后，接下来的思路就会变得清晰起来。我常会假设自己就是产生冲突的团队成员，这是一个能够快速有效缓解双方紧张气氛的方法，\r\n我惊奇地发现这对于自己也很受益，我有更多的空闲时间和更少的压力，我有种如释重负的感觉，因为可以释放一部分最初想要带头承担的责任。在那之后，我们彼\r\n此和睦相处，整个团队也在不断改进提升。&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;五、到工作外的环境去解决&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 有一次，我决定在工作\r\n时间外邀请一位产生冲突的同事，看看在工作以外得而环境是不是会更好地帮助我们解决事情。事实证明这确实有不少帮助。我们用一个不同的方式更好地了解彼\r\n此，聊得很开心，就像老朋友一样。这件事证明我们需要的是一个独处的时间去弄清楚每个人的出发点是什么。&lt;/p&gt;&lt;p&gt;也许这不能消除每一个不同的意见，但这样可以使团队成员暂时避开繁重的工作，以一种轻松的气氛去获得他们想要获得的一些观点。&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;六、近距离的沟通交流&lt;/strong&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;虽然说团队合作是重点，但是在一个狭小的空间里一起工作时间太久，难免导致工作做的不好。所以说有限度的协作是富有成效的，但这种限度对于每个人又不可能都是一样的。&lt;/p&gt;&lt;p&gt;近距离的沟通交流就可以更方便地把不同转移到工作时间之外，从而减少交互，达到降低团队成员间冲突的可能性的目的。这听起来很像是要分离出团队中某些特定的个性，但当事情偏离正轨时，这种方法有助于提供一个他们需要的喘息空间。&lt;/p&gt;&lt;p&gt;这种“分而治之”的方法在我管理的一些团队中已经被证明非常有用，即使那只是一个暂时性的解决方案。当他们说没有什么能够像这样使两颗心靠得更近，我就知道这种方法是正确的。无论如何，这帮助人们更好地和睦相处而不是被迫去相处。&lt;/p&gt;&lt;h4&gt;&lt;strong&gt;七、当所有方法都不见效，那就改善关系&lt;/strong&gt; &lt;br/&gt;&lt;/h4&gt;&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;当尝试过各种方法，发现现实情况中的一些团队关系依然很糟糕，那最好是通过重新构建团队成员关系，代之以有更强能力、更好价值观和更高协作技能水平的团队合作方式。既然冲突必然会发生，那么有时做一下改变或许比注入时间和资源来让大家和睦相处更为有效。&lt;/p&gt;&lt;p&gt;最终，每一个步骤属于一个共同的主题：目标是采取一种积极的、有前瞻性的方法来处理冲突，而不是用惩罚、威胁或严厉的手段等方法，因为那样解决不了根本问题，那只会让冲突更加激烈，所以当管理者需要做的第一件事就是包容。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'upphoto/news/585faf521f278.jpg', '干货文章', '1482731375', 'John', '1');
INSERT INTO `news` VALUES ('51', '社会即将分层，你将会在第几层？', '', 'upphoto/news/585fb20cd0738.jpg', '干货文章', '1483002978', '缓缓君', '1');
INSERT INTO `news` VALUES ('53', '我的工作岗位最需要品质是什么？', '&lt;blockquote style=&quot;color: rgb(17, 17, 17); font-family: arial, helvetica, &amp;#39;Microsoft Yahei&amp;#39;; letter-spacing: 0.5px; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&lt;p style=&quot;padding: 15px 0px; margin-top: 0px; margin-bottom: 0px; -webkit-tap-highlight-color: transparent;&quot;&gt;9月22日，互联网招聘APP“BOSS直聘”宣布，已经于2016年8月完成由华映资本领投的C1轮及高榕资本主导的C2轮融资，C1、C2两轮融资共计2800万美元。老投资方策源创投、和玉另类投资、今日资本、顺为资本全部跟投。&lt;/p&gt;&lt;p style=&quot;padding: 15px 0px; margin-top: 0px; margin-bottom: 0px; -webkit-tap-highlight-color: transparent;&quot;&gt;在融资发布会上，Boss直聘C2轮主导投资方高榕资本合伙人高翔先生就目前的创业大环境做了一次演讲，他认为在感受到资本寒冬的同时，其实在周围也有很多热钱，建议创业者们少看世界多看看自己。&lt;/p&gt;&lt;/blockquote&gt;&lt;p style=&quot;padding: 15px 0px; margin-top: 0px; margin-bottom: 0px; -webkit-tap-highlight-color: transparent; color: rgb(17, 17, 17); font-family: arial, helvetica, &amp;#39;Microsoft Yahei&amp;#39;; letter-spacing: 0.5px; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&lt;strong&gt;以下为高翔先生演讲全文：&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;padding: 15px 0px; margin-top: 0px; margin-bottom: 0px; -webkit-tap-highlight-color: transparent; color: rgb(17, 17, 17); font-family: arial, helvetica, &amp;#39;Microsoft Yahei&amp;#39;; letter-spacing: 0.5px; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;其实我刚才在下面感触蛮深的，因为我回想自己2002年找工作那一阵儿，我也是因&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'upphoto/news/5860096f7989a.jpg', '干货文章', '1483004847', '责任编辑：隗俊', '1');
INSERT INTO `news` VALUES ('59', '古典：未来五年职场上，什么人最抢手？', '&lt;blockquote&gt;&lt;p&gt;&lt;strong&gt;来源：&lt;/strong&gt;馒头商学院（ID：mantousxy）&lt;/p&gt;&lt;p&gt;内容节选自馒头2016开学大课古典老师的现场分享。古典，著名生涯规划师，新精英生涯创始人，橙子学院创始人，全球职业教练（BCC）中国区首席导师。著有《拆掉思维里的墙》销量超过300万册。微信公众号：古典古少侠（ID：gudian515）&lt;/p&gt;&lt;/blockquote&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;1&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;未来5年，职业到底有什么趋势？&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;我\r\n们必须要知道未来5年的职业到底有什么趋势，我们才会知道今天所做的一切准备到底有用还是没用。小的时候，我爸爸经常教育我说一定要好好练字，长大一定会\r\n有用。到了今天，可能我们只有在写自己名字的时候才会写字。练字有用吗？肯定是有用的，但是没有老一辈人想的那么有用。&lt;/p&gt;&lt;p&gt;&lt;strong&gt;所以，未来5年，职业到底有什么趋势呢？&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;高性价比的高感性能力&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;日本的动漫产业已经占到其GDP的三分之一。电器、汽车行业都比不过动漫行业。这个时代已经从一个高理性时代逐渐变成充满科技和机器的高感性时代。对于职场人的要求从纯粹的高理性变成高感性。如果过去我们觉得程序员这样的工作很酷，这个时代的产品经理，运营更加酷。&lt;/p&gt;&lt;p&gt;&lt;strong&gt;个人需求升级，在热爱的领域努力地玩&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;在美国有一个现象很特别，美国毕业博士中40%都是心理学博士，这是为什么？因为他们发现心理学可能是下一个能够创造让人幸福点的领域。未来5到10年如何让人的体验更好，感觉更好绝对是商业的全新蓝海，也是我们每个人都需要思考的问题。&lt;/p&gt;&lt;p&gt;上一辈人对于好工作的理解是公司好，能赚钱，因为责任感把这个活干好，同时追求极度的稳定。下一个5年，职场人都会思考哪些事情？&lt;/p&gt;&lt;p&gt;第一，有没有自主权。在工作中能不能做自己想做的事情。&lt;/p&gt;&lt;p&gt;第\r\n二，精专。什么是精专？你会发现今天专业领导者越来越多，纯管理者越来越少。你是依靠权利，纯靠关系上位的，在公司里会越来越难，但是如果你不是依靠权利\r\n上位，而是本身能力就很强的话，你可能管理起来就很简单。去年，LinkdIn在中国做过一次调查，在离职原因中，钱不再是排在第一位，而是职业发展不\r\n好。所谓职业发展不好，就是看不到未来的可能性，学不到东西，所以今天成为一个专业人士比成为一个纯管理者而言要更有意义。因为今天整个世界都在追求更精\r\n专，更好，更强。&lt;/p&gt;&lt;p&gt;第三，意义感。我们不仅仅需要为了赚钱而工作，还需要知道这个工作有什么价值。&lt;/p&gt;&lt;p&gt;我举个例子，前段时间有个顺丰的朋友抱怨顺丰快递员收入很高，但是很苦，总被人骂，包裹坏了都要你赔。他问我快递员怎么招到好的年轻人？我认为要先让快递员知道做这份工作的意义。&lt;/p&gt;&lt;p&gt;我\r\n做了一个实验，能不能和熟悉的客户问一下为什么寄这个包裹？最后收到了200多个答案。有说这个包裹是给我老爸的，我老爸退休以后舍不得买报销以外的药\r\n物，所以从网上寄给他，骗他说这个公司能报销。有的说这是我送给我女朋友的礼物，有的说我是网店小老板，没有上过大学，凭网店一年挣十几万，很开心。还有\r\n说这是我给孙女买的奶粉。这些快递员开始把这些东西列出来作为送快递的意义，有没有觉得这样的工作会让你快乐一些。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'upphoto/news/5864d56828998.jpg', '干货文章', '1483003240', '古典', '1');
INSERT INTO `news` VALUES ('54', '面试时HR一定会问的5大问题和你需要的一个对策！', '&lt;blockquote&gt;&lt;strong&gt;翻译自：&lt;/strong&gt;http://www.fastcompany.com&lt;p&gt;&lt;strong&gt;原标题：&lt;/strong&gt;5 curveball interview questions to ask final round job candidates&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;适逢校招季来临，很多求职者都感到很焦虑，因为初入职场不知如何应对面试。不要说初入职场的求职者不会应对面试，就连职场老司机偶尔也会翻车。因为应聘者的各方面能力在面试时是很难一次性表现出来的。&lt;/p&gt;&lt;p&gt;HR面试时，是在识别应聘者自身具有的品质，能力是其中一项，但却不是一个很显眼的品质。所以，面试时HR通常都会问几个问题试图考察面试者，一方面是为了帮助HR了解应聘者身上具备的品质，另一方面是想看看应聘者在未来工作中可能会面临哪些问题。&lt;/p&gt;&lt;p&gt;那么HR关注的是什么呢？他们通常会问什么问题呢？&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;1&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;你的缺点是什么？&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;其实HR问这个问题时，是在考察面试者的自我意识。如果你愿意说出自己的缺点，HR可以依此判断出让你产生负面情绪的因素。&lt;/p&gt;&lt;p&gt;可是很多人在面对这个问题时，会不敢说，或者答案碰到雷区。例如，“我是个完美主义者”或“我是工作狂”这类表面上是说缺点，实则是夸自己的回答。事实上，HR在听到这种答案时会很头痛，因为这种答案是毫无意义的。比起这种回答，可能说“我是手机奴”更容易被HR录用。&lt;/p&gt;&lt;p&gt;如果你连自己的缺点都说不出来，可能还是不够了解自己，或者不愿意直面这些缺点。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;2&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;10分满分的话，你给自己的能力打几分？&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;面试时遇到HR让你给自己打分，其实是在把你和其它面试者作区分，你的自我评分对HR是有价值的。和第一个问题一样，这也是HR在考察面试者的自我意识，同时也能创造一些与你继续聊下去的话题。但必须注意，这可能是HR制造的“陷阱”。&lt;/p&gt;&lt;p&gt;其实HR并不在意你对自己打了几分，他们深知有前途的员工不在意这10分谦卑的信心，所以不会拘泥于这个分数的评判。他们真正想知道的是你为什么给自己打这个分数，或者之前做了什么事情让你的能力达到这个分数。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'upphoto/news/5864d30bd7182.jpg', '干货文章', '1483002635', '外网', '0');
INSERT INTO `news` VALUES ('55', '高管和中层管理多久见一次面？', '&lt;p style=&quot;padding: 15px 0px; margin-top: 0px; margin-bottom: 0px; -webkit-tap-highlight-color: transparent; color: rgb(17, 17, 17); font-family: arial, helvetica, &amp;#39;Microsoft Yahei&amp;#39;; letter-spacing: 0.5px; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;困惑是说到底融人民币还是融美元，因为前几年国内资本市场很好，所以很多原来美元基金投的项目，都做VIE结构拆完回来了，今天你发现有很多人拆回来又做回去了，所以到底融人民币还是融美元，这也是经常大家困惑的问题。&lt;/p&gt;&lt;p style=&quot;padding: 15px 0px; margin-top: 0px; margin-bottom: 0px; -webkit-tap-highlight-color: transparent; color: rgb(17, 17, 17); font-family: arial, helvetica, &amp;#39;Microsoft Yahei&amp;#39;; letter-spacing: 0.5px; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;第三个困惑，一方面大家感觉到，身边越来越多的人开始创业，我们讲万众创业。原来在我们毕业时，创业应该是作为就业选择的最后一位，你实在找不到工作就创业了。但是今天，创业已经变成今天毕业之后的前三位吧，所以越来越多的人开始创业了。但是另外一个层面，当我们去跟很多大公司的高管交流，说你们是不是应该考虑出来创业啦？那大家聊很多次，发现没有太多好的方向可以给到他们去创业，因此他们迟迟也不敢出来。所以万众创业跟无业可创，这是另外一个矛盾。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'upphoto/news/5864d3469fb30.jpg', '干货文章', '1483004911', 'VALERIE', '1');
INSERT INTO `news` VALUES ('56', '团队是怎么做出决策的？', '&lt;p style=&quot;padding: 15px 0px; margin-top: 0px; margin-bottom: 0px; -webkit-tap-highlight-color: transparent; color: rgb(17, 17, 17); font-family: arial, helvetica, &amp;#39;Microsoft Yahei&amp;#39;; letter-spacing: 0.5px; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;在IDG我待了12年，从2013年离开跟另外两位同事在一起创立了高榕资本。所以确实网络招聘可以给很多人带来很多机会和有价值的一件事儿，在过去十几年其实我也是一直关注这个方向。但是说实话在赵总以前我没有觉得这个行业让我觉得特别兴奋的变化。2016年初，我们在威斯汀见面，我才认为这次可以是一次变化了。赵总邀请我参加这次发布会，以前参加发布会坐那儿就完了。他说给我准备8分钟，我说不能夸你夸8分钟吧，他说大部分人来的都是创业者，所以他让我讲讲关于创业，关于投资这件事情，我想了很久但是都没想到一个非常好的主题，所以这不是我的题目，这只是一个背景。&lt;/p&gt;&lt;p style=&quot;padding: 15px 0px; margin-top: 0px; margin-bottom: 0px; -webkit-tap-highlight-color: transparent; color: rgb(17, 17, 17); font-family: arial, helvetica, &amp;#39;Microsoft Yahei&amp;#39;; letter-spacing: 0.5px; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;为什么想不到一个特别好的主题呢，其实我在想说过去的这两三个月，我见创业者时，创业者给我们提的问题是什么。我可能从这个角度讲一讲。&lt;/p&gt;&lt;p style=&quot;padding: 15px 0px; margin-top: 0px; margin-bottom: 0px; -webkit-tap-highlight-color: transparent; color: rgb(17, 17, 17); font-family: arial, helvetica, &amp;#39;Microsoft Yahei&amp;#39;; letter-spacing: 0.5px; line-height: 30px; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;其实现在创业者在获取了大量的信息&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'upphoto/news/5864d386e7812.jpg', '干货文章', '1483004877', 'jenny', '1');
INSERT INTO `news` VALUES ('58', '我的工作岗位最需要品质是什么？', '&lt;p&gt;听到这些回答要预警：有裙带关系&lt;/p&gt;&lt;p&gt;问这个问题并不是在怀疑面试者的能力，而是要确定这家公司是否是一个家族企业。加入公司后才了解到公司内部人员和老板关系的时候已经晚了。如果有人因为家族原因进入公司，没有能力还被安排在管理职位的话，对公司未来发展多少都会有影响。&lt;/p&gt;&lt;p&gt;如果这家公司已经是家族企业，那么求职者进入公司后很难成为主心骨，在职业发展前景上也有阻碍。所以问面试官这个问题，确保因为家族关系进入公司的人是有能力的，要确保这个公司是一个公平竞争的公司，非常重要。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;5&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;我的工作岗位最需要品质是什么？&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;听到这些回答要预警：经理想要的是一个朋友，而不是一个工作伙伴&lt;/p&gt;&lt;p&gt;除了一个厉害的工程师、营销、产品经理、项目经理、业务分析师、或HR，领导想要找一个什么样的人？领导喜欢踢足球，而你正好踢得不错，所以他需要的是一个玩伴吗？领导喜欢购物，而你对时尚品牌讯息非常了解，所以她需要的是一个陪她逛街的人吗？&lt;/p&gt;&lt;p&gt;问这个问题，让面试官再次总结这个岗位的职责，确保得到这份工作是因为个人能力，而不是其他花边原因。也可以知道在工作之余大家都把时间花在了什么事情上，这与工作氛围有着密不可分的关系。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;6&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;你的经理能很好的回应你的反馈吗？&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;听到这些回答要预警：当经理们犯了错或者不清楚自己在做什么的时候他们是不会承认的。&lt;/p&gt;&lt;p&gt;虽\r\n然这个建议最好不要用在与你合作的小组成员身上，但它可以帮你更好的理解你的经理与他的老板之间的关系。人无完人，特别是第一次当经理的人容易走弯路。如\r\n果经理人比较年轻，一开始时缺乏专业经验，他们会犯错误——其实这也很好。不论年纪和专业水平如何，拒绝承认这些缺陷也不愿意去学习的话，是不值得跟随\r\n的。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;7&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;可以描述一下你的日常工作时间吗？&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;听到这些回答要预警：管理不体贴员工&lt;/p&gt;&lt;p&gt;如果你不希望每周工作80个小时，不想失去节假日，不想每周进行三次电话会议的话，必须问清楚这个问题。找到工作与生活的平衡点是必须要做的，要求员工描述日常工作时间都在进行工作量评估。如果这个公司的工作内容需要占用到个人私生活时间的话，必须要有心理准备。&lt;/p&gt;&lt;p&gt;面试结束后，可以去各大论坛平台，找到至少一个之前的员工问类似的问题，听听他们的回答。毕竟以前的员工是最诚实的。&lt;/p&gt;&lt;p&gt;生命是很短暂的，能找一份干着舒服的工作很重要。所以面试时对自己负责一点，提出一些关于公司和岗位的问题，根据面试官的回答进行了解和判断，睁大眼睛仔细选工作。跟对老板吃肉，跟错老板不仅让你吃土，也许还把土往你脸上抹......&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'upphoto/news/5864d4e81ddb2.jpg', '干货文章', '1483003112', '风度', '1');
INSERT INTO `news` VALUES ('57', '你认识领导多久了？因为什么被赞赏？', '&lt;p&gt;听到这些回答要预警：有裙带关系&lt;/p&gt;&lt;p&gt;问这个问题并不是在怀疑面试者的能力，而是要确定这家公司是否是一个家族企业。加入公司后才了解到公司内部人员和老板关系的时候已经晚了。如果有人因为家族原因进入公司，没有能力还被安排在管理职位的话，对公司未来发展多少都会有影响。&lt;/p&gt;&lt;p&gt;如果这家公司已经是家族企业，那么求职者进入公司后很难成为主心骨，在职业发展前景上也有阻碍。所以问面试官这个问题，确保因为家族关系进入公司的人是有能力的，要确保这个公司是一个公平竞争的公司，非常重要。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;5&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;我的工作岗位最需要品质是什么？&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;听到这些回答要预警：经理想要的是一个朋友，而不是一个工作伙伴&lt;/p&gt;&lt;p&gt;除了一个厉害的工程师、营销、产品经理、项目经理、业务分析师、或HR，领导想要找一个什么样的人？领导喜欢踢足球，而你正好踢得不错，所以他需要的是一个玩伴吗？领导喜欢购物，而你对时尚品牌讯息非常了解，所以她需要的是一个陪她逛街的人吗？&lt;/p&gt;&lt;p&gt;问这个问题，让面试官再次总结这个岗位的职责，确保得到这份工作是因为个人能力，而不是其他花边原因。也可以知道在工作之余大家都把时间花在了什么事情上，这与工作氛围有着密不可分的关系。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;6&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;你的经理能很好的回应你的反馈吗？&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;听到这些回答要预警：当经理们犯了错或者不清楚自己在做什么的时候他们是不会承认的。&lt;/p&gt;&lt;p&gt;虽\r\n然这个建议最好不要用在与你合作的小组成员身上，但它可以帮你更好的理解你的经理与他的老板之间的关系。人无完人，特别是第一次当经理的人容易走弯路。如\r\n果经理人比较年轻，一开始时缺乏专业经验，他们会犯错误——其实这也很好。不论年纪和专业水平如何，拒绝承认这些缺陷也不愿意去学习的话，是不值得跟随\r\n的。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'upphoto/news/5864d3c8e02de.jpg', '干货文章', '1483002825', '多多', '1');
