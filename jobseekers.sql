-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-02-14 10:14:31
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yuanku_job`
--

-- --------------------------------------------------------

--
-- 表的结构 `jobseekers`
--

CREATE TABLE `jobseekers` (
  `uid` int(11) NOT NULL COMMENT ' 用户主键',
  `username` varchar(18) NOT NULL COMMENT '用户帐号',
  `password` varchar(32) NOT NULL COMMENT '用户密码',
  `create_time` datetime DEFAULT NULL COMMENT ' 注册时间',
  `photo` varchar(100) DEFAULT NULL COMMENT ' 用户头像'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jobseekers`
--

INSERT INTO `jobseekers` (`uid`, `username`, `password`, `create_time`, `photo`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-02-12 03:02:52', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `jobseekers_describe`
--

CREATE TABLE `jobseekers_describe` (
  `describe_id` int(11) NOT NULL COMMENT '序号',
  `describe` varchar(500) NOT NULL COMMENT '自我描述',
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jobseekers_describe`
--

INSERT INTO `jobseekers_describe` (`describe_id`, `describe`, `uid`) VALUES
(1, '555555', 1);

-- --------------------------------------------------------

--
-- 表的结构 `resume_basic`
--

CREATE TABLE `resume_basic` (
  `basic_id` int(11) NOT NULL COMMENT ' 序号',
  `uid` int(11) NOT NULL COMMENT '简历所有者',
  `sex` varchar(2) COLLATE utf8_bin DEFAULT '男' COMMENT '用户性别',
  `peculiarity` varchar(32) CHARACTER SET utf8 DEFAULT NULL COMMENT '自我推荐的一句话',
  `birth` varchar(6) CHARACTER SET utf8 DEFAULT '90后' COMMENT '出生年月',
  `top_edu` varchar(4) CHARACTER SET utf8 DEFAULT '大专' COMMENT '最高学历',
  `work_years` varchar(10) CHARACTER SET utf8 DEFAULT '1-3年' COMMENT '工作年限',
  `current_city` varchar(10) CHARACTER SET utf8 DEFAULT '广州' COMMENT '所在城市',
  `phone` varchar(11) CHARACTER SET utf8 DEFAULT NULL COMMENT '联系号码',
  `e_mail` varchar(32) CHARACTER SET utf8 DEFAULT NULL COMMENT '用户邮箱',
  `current_status` varchar(18) CHARACTER SET utf8 DEFAULT '目前正在找工作' COMMENT '工作状态',
  `nickname` varchar(18) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `resume_basic`
--

INSERT INTO `resume_basic` (`basic_id`, `uid`, `sex`, `peculiarity`, `birth`, `top_edu`, `work_years`, `current_city`, `phone`, `e_mail`, `current_status`, `nickname`) VALUES
(1, 1, '男', '一句话介绍自己，告诉我为什么选择你而不是别人', '90后', '大专', '应届毕业生', '广州', '13226267239', '648253615@qq.com', '目前正在找工作', '林国胜'),
(2, 2, '男', '一句话介绍自己，告诉我为什么选择你而不是别人', '90后', '大专', '1-3年', '广州', '13226267239', '648253615@qq.com', '目前正在找工作', 'lgs');

-- --------------------------------------------------------

--
-- 表的结构 `resume_delivery`
--

CREATE TABLE `resume_delivery` (
  `jobseeker_id` int(11) NOT NULL COMMENT '求职者ID',
  `job_id` int(11) NOT NULL COMMENT '职位序号',
  `delivery_time` varchar(21) NOT NULL COMMENT '投递时间',
  `delivery_status` tinytext COMMENT '投递状态',
  `id` int(11) NOT NULL COMMENT '序号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='投递中转站';

-- --------------------------------------------------------

--
-- 表的结构 `resume_education`
--

CREATE TABLE `resume_education` (
  `education_id` int(11) NOT NULL COMMENT '序号',
  `uid` int(11) NOT NULL COMMENT '简历所有者',
  `degree` varchar(10) DEFAULT '大专' COMMENT '学历/学位',
  `graduated` varchar(7) DEFAULT '2017-09' COMMENT '毕业时间',
  `school_name` varchar(20) DEFAULT NULL COMMENT '学校名称',
  `major` varchar(10) DEFAULT NULL COMMENT '专业名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='简历_教育经历';

--
-- 转存表中的数据 `resume_education`
--

INSERT INTO `resume_education` (`education_id`, `uid`, `degree`, `graduated`, `school_name`, `major`) VALUES
(1, 1, '大专', '2017-09', '源酷创意', '软件技术'),
(2, 1, '本科', '2017-09', '源酷大学', '计算机技术');

-- --------------------------------------------------------

--
-- 表的结构 `resume_experience`
--

CREATE TABLE `resume_experience` (
  `experience_id` int(11) NOT NULL COMMENT '序号',
  `uid` int(11) NOT NULL COMMENT '所属者',
  `re_company_name` varchar(60) NOT NULL COMMENT '公司名称',
  `job_description` varchar(320) DEFAULT NULL COMMENT '行业类别',
  `job_title` varchar(12) DEFAULT NULL COMMENT '职位名称',
  `working_time` varchar(21) DEFAULT NULL COMMENT '工作时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='简历_最近工作/实习经历';

--
-- 转存表中的数据 `resume_experience`
--

INSERT INTO `resume_experience` (`experience_id`, `uid`, `re_company_name`, `job_description`, `job_title`, `working_time`) VALUES
(1, 1, '源酷创意', '互联网开发', 'Web前端', '2017'),
(2, 1, '源酷企业', '互联网开发', 'Web前端', '2016');

-- --------------------------------------------------------

--
-- 表的结构 `resume_prefered`
--

CREATE TABLE `resume_prefered` (
  `prefered_id` int(11) NOT NULL COMMENT '序号',
  `uid` int(11) NOT NULL COMMENT '简历所有者',
  `job_type` varchar(10) DEFAULT '全职' COMMENT '期望工作性质',
  `expected_location` varchar(10) DEFAULT '无限' COMMENT '期望工作地点(市)',
  `expected_position` varchar(20) DEFAULT NULL COMMENT '期望从事职业',
  `expected_monthly_income` varchar(10) DEFAULT '5k-10k' COMMENT '期望月薪'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='简历_求职意向';

--
-- 转存表中的数据 `resume_prefered`
--

INSERT INTO `resume_prefered` (`prefered_id`, `uid`, `job_type`, `expected_location`, `expected_position`, `expected_monthly_income`) VALUES
(1, 1, '全职', '广州', 'Web前端开发', '5k-10k');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobseekers`
--
ALTER TABLE `jobseekers`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `username_3` (`username`);

--
-- Indexes for table `jobseekers_describe`
--
ALTER TABLE `jobseekers_describe`
  ADD PRIMARY KEY (`describe_id`);

--
-- Indexes for table `resume_basic`
--
ALTER TABLE `resume_basic`
  ADD PRIMARY KEY (`basic_id`);

--
-- Indexes for table `resume_delivery`
--
ALTER TABLE `resume_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_education`
--
ALTER TABLE `resume_education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `resume_experience`
--
ALTER TABLE `resume_experience`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `resume_prefered`
--
ALTER TABLE `resume_prefered`
  ADD PRIMARY KEY (`prefered_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `jobseekers`
--
ALTER TABLE `jobseekers`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT ' 用户主键', AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `jobseekers_describe`
--
ALTER TABLE `jobseekers_describe`
  MODIFY `describe_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `resume_basic`
--
ALTER TABLE `resume_basic`
  MODIFY `basic_id` int(11) NOT NULL AUTO_INCREMENT COMMENT ' 序号', AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `resume_delivery`
--
ALTER TABLE `resume_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号';
--
-- 使用表AUTO_INCREMENT `resume_education`
--
ALTER TABLE `resume_education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `resume_experience`
--
ALTER TABLE `resume_experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `resume_prefered`
--
ALTER TABLE `resume_prefered`
  MODIFY `prefered_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
