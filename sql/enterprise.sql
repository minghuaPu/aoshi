-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-01-04 17:16:16
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yuanku_job`
--

-- --------------------------------------------------------

--
-- 表的结构 `enterprise`
--

CREATE TABLE IF NOT EXISTS `enterprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `touxiang` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `introduction` text NOT NULL,
  `add_time` varchar(255) NOT NULL,
  `auditing` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `enterprise`
--

INSERT INTO `enterprise` (`id`, `user_name`, `user_pwd`, `company_name`, `name`, `job`, `email`, `touxiang`, `address`, `phone`, `introduction`, `add_time`, `auditing`) VALUES
(15, '123456', 'e10adc3949ba59abbe56e057f20f883e', '源酷创意有限公司', '陈小明', '技术总监', '21241421421@qq.com', '', '广州市天河区车陂路', '18814098838', '广州驿淘网络科技有限公司是一家获得天使轮融资的电商转运企业，目的是打造一个集媒体、导购、转运为一体的消费决策平台。\n2014年公司建立了“优邮转运平台”，主要提供高端海淘服务，实现跨境海淘转运业务，意图在保持商品高品质的前提下保持较低的价格，更利于与国内商品竞争。\n自2015年起建立了“好评淘”www.haopingtao.com网站平台及APP应用，集导购、媒体、工具、社区属性为一体的消费领域门户型网站。', '1482404505', 2),
(14, '123344', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '0', '', '1482392663', 0),
(13, '1233', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '0', '', '', 0),
(12, '123', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '0', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
