--
-- 表的结构 `jobseekers`
--

CREATE TABLE IF NOT EXISTS `jobseekers` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT ' 用户ID（序号）',
  `username` varchar(8) NOT NULL COMMENT '用户帐号',
  `password` varchar(32) NOT NULL COMMENT '用户密码',
  `create_time` datetime NOT NULL COMMENT ' 注册时间',
  `photo` varchar(200) DEFAULT NULL COMMENT ' 用户头像',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`),
  UNIQUE KEY `username_3` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;





--
-- 表的结构 `jobseekers_describe`
--

CREATE TABLE IF NOT EXISTS `jobseekers_describe` (
  `describe_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `describe` varchar(500) NOT NULL COMMENT '自我描述',
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`describe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;






--
-- 表的结构 `resume_basic`
--

CREATE TABLE IF NOT EXISTS `resume_basic` (
  `basic_id` int(11) NOT NULL AUTO_INCREMENT COMMENT ' 序号',
  `uid` int(11) NOT NULL COMMENT '简历所有者',
  `nickname` varchar(40) DEFAULT NULL COMMENT '用户姓名',
  `sex` varchar(2) DEFAULT NULL COMMENT '用户性别',
  `peculiarity` varchar(30) DEFAULT NULL COMMENT '自我推荐的一句话',
  `birth` varchar(6) DEFAULT NULL COMMENT '出生年月',
  `top_edu` varchar(4) DEFAULT NULL COMMENT '最高学历',
  `work_years` varchar(10) DEFAULT NULL COMMENT '工作年限',
  `current_city` varchar(10) DEFAULT NULL COMMENT '所在城市',
  `address` varchar(100) DEFAULT NULL COMMENT '详细住址',
  `phone` varchar(22) DEFAULT NULL COMMENT '联系号码',
  `e_mail` varchar(30) DEFAULT NULL COMMENT '用户邮箱',
  `current_status` varchar(20) DEFAULT NULL COMMENT '工作状态',
  PRIMARY KEY (`basic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;






CREATE TABLE IF NOT EXISTS `resume_delivery` (
  `jobseeker_id` int(11) NOT NULL COMMENT '求职者ID',
  `job_id` int(11) NOT NULL COMMENT '职位序号',
  `delivery_time` varchar(21) NOT NULL COMMENT '投递时间',
  `delivery_status` tinytext NOT NULL COMMENT '投递状态',
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='投递中转站' AUTO_INCREMENT=1 ;





--
-- 表的结构 `resume_education`
--

CREATE TABLE IF NOT EXISTS `resume_education` (
  `education_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `uid` int(11) NOT NULL COMMENT '简历所有者',
  `degree` varchar(10) NOT NULL COMMENT '学历/学位',
  `graduated` varchar(7) NOT NULL COMMENT '毕业时间',
  `school_name` varchar(20) NOT NULL COMMENT '学校名称',
  `major` varchar(10) NOT NULL COMMENT '专业名称',
  PRIMARY KEY (`education_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='简历_教育经历' AUTO_INCREMENT=1 ;





--
-- 表的结构 `resume_experience`
--

CREATE TABLE IF NOT EXISTS `resume_experience` (
  `experience_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `uid` int(11) NOT NULL COMMENT '所属者',
  `re_company_name` varchar(60) NOT NULL COMMENT '公司名称',
  `job_description` varchar(320) NOT NULL COMMENT '行业类别',
  `job_title` varchar(12) NOT NULL COMMENT '职位名称',
  `working_time` varchar(21) NOT NULL COMMENT '工作时间',
  PRIMARY KEY (`experience_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='简历_最近工作/实习经历' AUTO_INCREMENT=1 ;






--
-- 表的结构 `resume_prefered`
--

CREATE TABLE IF NOT EXISTS `resume_prefered` (
  `prefered_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `uid` int(11) NOT NULL COMMENT '简历所有者',
  `job_type` varchar(10) NOT NULL COMMENT '期望工作性质',
  `expected_location` varchar(10) NOT NULL COMMENT '期望工作地点(市)',
  `expected_position` varchar(20) NOT NULL COMMENT '期望从事职业',
  `expected_monthly_income` varchar(10) NOT NULL COMMENT '期望月薪（税前）',
  PRIMARY KEY (`prefered_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='简历_求职意向' AUTO_INCREMENT=1 ;
