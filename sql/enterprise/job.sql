-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-01-12 15:45:18
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
  `enterprise_id` int(11) NOT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=228 ;

--
-- 转存表中的数据 `job`
--

INSERT INTO `job` (`id`, `job_name`, `enterprise_id`, `company_name`, `province`, `city`, `area`, `address`, `salary_low`, `salary_hig`, `work_time`, `education`, `email`, `job_require`, `job_describe`, `add_time`, `status`) VALUES
(219, '后台人员', 19, '源酷创意有限公司', '广东省', '广州市', '天河区', '车陂路', '17k', '18k', '1-3年', '大专', '12312412421@163.com', '123124', '', '2017-01-12', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
