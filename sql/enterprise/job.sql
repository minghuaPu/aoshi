-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-01-11 18:02:33
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
-- 表的结构 `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(50) NOT NULL,
  `company_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `salary_low` varchar(5) NOT NULL,
  `salary_hig` varchar(5) NOT NULL,
  `work_time` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job_require` text NOT NULL,
  `job_describe` text NOT NULL,
  `add_time` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=193 ;

--
-- 转存表中的数据 `job`
--

INSERT INTO `job` (`id`, `job_name`, `company_id`, `company_name`, `province`, `city`, `area`, `address`, `salary_low`, `salary_hig`, `work_time`, `education`, `email`, `job_require`, `job_describe`, `add_time`, `status`) VALUES
(70, '', 33, '', '', '', '巴林左旗', '', '0', '0', '选择时间', '选择学历', '', '', '', '', 0),
(69, '', 33, '', '', '', '襄州区', '', '0', '0', '选择时间', '选择学历', '', '', '', '', 0),
(68, '', 33, '', '', '', '新县', '', '0', '0', '选择时间', '选择学历', '', '', '', '', 0),
(67, '', 33, '', '', '', '长治市', '', '0', '0', '选择时间', '选择学历', '', '', '', '', 0),
(66, '', 35, '', '', '', '邯郸市', '', '0', '0', '选择时间', '选择学历', '', '', '', '', 0),
(71, '', 33, '', '山西省', '晋城市', '泽州县', '', '0', '0', '选择时间', '选择学历', '', '', '', '', 0),
(174, '1', 38, '源酷', '广东省', '广州市', '天河区', '车陂路', '0', '0', '选择时间', '选择学历', '1232144', '', '', '', 1),
(177, '2132', 38, '源酷', '广东省', '广州市', '天河区', '车陂路', '0', '0', '选择时间', '选择学历', '1232144', '', '', '', 1),
(183, '', 38, '源酷', '广东省', '广州市', '天河区', '车陂路', '', '', '选择时间', '选择学历', '1232144', '', '', '', 0),
(184, '', 38, '源酷', '广东省', '广州市', '天河区', '车陂路', '', '', '选择时间', '选择学历', '1232144', '', '', '', 0),
(185, '', 38, '源酷', '广东省', '广州市', '天河区', '车陂路', '', '', '选择时间', '选择学历', '1232144', '', '', '', 0),
(186, '', 38, '源酷', '广东省', '广州市', '天河区', '车陂路', '', '', '选择时间', '选择学历', '1232144', '', '', '', 0),
(187, '', 38, '源酷', '广东省', '广州市', '天河区', '车陂路', '', '', '选择时间', '大专', '1232144', '', '', '', 0),
(188, '', 38, '源酷', '广东省', '广州市', '天河区', '车陂路', '', '', '选择时间', '选择学历', '1232144', '', '', '', 0),
(189, '', 38, '源酷', '广东省', '广州市', '天河区', '车陂路', '', '', '选择时间', '选择学历', '1232144', '', '', '', 0),
(190, '', 38, '源酷', '广东省', '广州市', '天河区', '车陂路', '', '', '选择时间', '选择学历', '1232144', '', '', '', 0),
(191, '', 38, '源酷', '广东省', '广州市', '天河区', '车陂路', '', '', '选择时间', '选择学历', '1232144', '', '', '', 0),
(192, '', 38, '源酷', '广东省', '广州市', '天河区', '车陂路', '', '', '选择时间', '选择学历', '1232144', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
