-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-01-11 02:38:06
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
-- 表的结构 `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `scale` varchar(50) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `add_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- 转存表中的数据 `company`
--

INSERT INTO `company` (`id`, `company_name`, `phone`, `area`, `address`, `scale`, `introduction`, `photo`, `add_time`) VALUES
(25, '阿里巴巴集团', '', '', '平云路163号广电平云广场B塔16层', '', '阿里巴巴移动事业群，以移动互联网领军企业UC优视为基础，整合阿里巴巴集团相关优势资源组建, 旗下拥有UC浏览器、神马搜索、九游、阿里文学、PP助手等多个行业领先的移动互联网产品及平台，为用户提供多领域、全方位的移动互联网服务。阿里移动事业群专注移动互联网业务创新，致力于打造简单，可信赖的移动互联网信息服务平台，用技术和数据创造变量。', '', ''),
(33, '', '', '{"province":"0","city":"","area":""}', '', '', '', '', ''),
(34, '', '', '##', '', '选择规模', '', '', ''),
(35, '', '', '山西省#长治市#长治县', '', '选择规模', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
