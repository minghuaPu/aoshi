-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-28 01:44:40
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
-- 表的结构 `resumes_basic`
--

CREATE TABLE `resumes_basic` (
  `rid` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `intro` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `sex` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `birth` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `xl` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `gzjy` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `city` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `des` varchar(320) COLLATE utf8_bin DEFAULT NULL,
  `state` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `resumes_basic`
--

INSERT INTO `resumes_basic` (`rid`, `name`, `intro`, `sex`, `birth`, `xl`, `gzjy`, `city`, `phone`, `email`, `des`, `state`, `uid`) VALUES
(17, '姓名', '一句话介绍', '男', '90后', '本科', '应届毕业生', '广州', '01234567890', '123456@qq.com', '自我描述...QQ等等', '我是应届毕业生', 1);

-- --------------------------------------------------------

--
-- 表的结构 `resumes_career`
--

CREATE TABLE `resumes_career` (
  `iid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_bin NOT NULL,
  `type` varchar(32) COLLATE utf8_bin NOT NULL,
  `city` varchar(32) COLLATE utf8_bin NOT NULL,
  `wages` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `resumes_career`
--

INSERT INTO `resumes_career` (`iid`, `uid`, `name`, `type`, `city`, `wages`) VALUES
(5, 1, 'Web前端', '全职', '广州', '10k-15k');

-- --------------------------------------------------------

--
-- 表的结构 `resumes_eduexp`
--

CREATE TABLE `resumes_eduexp` (
  `eid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_bin NOT NULL,
  `xl` varchar(32) COLLATE utf8_bin NOT NULL,
  `major` varchar(32) COLLATE utf8_bin NOT NULL,
  `grad` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `resumes_eduexp`
--

INSERT INTO `resumes_eduexp` (`eid`, `uid`, `name`, `xl`, `major`, `grad`) VALUES
(13, 1, '学校', '大专', '专业', '2017');

-- --------------------------------------------------------

--
-- 表的结构 `resumes_jobexp`
--

CREATE TABLE `resumes_jobexp` (
  `jid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_bin NOT NULL,
  `job` varchar(32) COLLATE utf8_bin NOT NULL,
  `time` varchar(32) COLLATE utf8_bin NOT NULL,
  `cont` varchar(320) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `resumes_jobexp`
--

INSERT INTO `resumes_jobexp` (`jid`, `uid`, `name`, `job`, `time`, `cont`) VALUES
(19, 1, '公司', '职位', '2017-至今', '工作内容');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resumes_basic`
--
ALTER TABLE `resumes_basic`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `resumes_career`
--
ALTER TABLE `resumes_career`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `resumes_eduexp`
--
ALTER TABLE `resumes_eduexp`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `resumes_jobexp`
--
ALTER TABLE `resumes_jobexp`
  ADD PRIMARY KEY (`jid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `resumes_basic`
--
ALTER TABLE `resumes_basic`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- 使用表AUTO_INCREMENT `resumes_career`
--
ALTER TABLE `resumes_career`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `resumes_eduexp`
--
ALTER TABLE `resumes_eduexp`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `resumes_jobexp`
--
ALTER TABLE `resumes_jobexp`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
