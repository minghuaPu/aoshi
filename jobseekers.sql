-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-01-12 05:11:08
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `jobseekers`
--

INSERT INTO `jobseekers` (`uid`, `username`, `password`, `create_time`, `photo`) VALUES
(7, '123456', 'e10adc3949ba59abbe56e057f20f883e', '2017-01-12 11:01:23', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
