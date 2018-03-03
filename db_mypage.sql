-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-01-11 05:45:06
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mypage`
--

-- --------------------------------------------------------

--
-- 表的结构 `class_table`
--

DROP TABLE IF EXISTS `class_table`;
CREATE TABLE IF NOT EXISTS `class_table` (
  `timeId` int(6) DEFAULT NULL,
  `ClassName` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `class_table`
--

INSERT INTO `class_table` (`timeId`, `ClassName`) VALUES
(0, ''),
(1, ''),
(2, 'Web应用程序设计与开发'),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, 'Web应用程序设计与开发'),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, '宽带接入技术'),
(17, '数字图像处理'),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, '宽带接入技术'),
(24, '数字图像处理'),
(25, ''),
(26, ''),
(27, ''),
(28, '社交礼仪英语'),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, '社交礼仪英语'),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, ''),
(47, ''),
(48, ''),
(49, ''),
(50, ''),
(51, ''),
(52, ''),
(53, ''),
(54, ''),
(55, '');

-- --------------------------------------------------------

--
-- 表的结构 `grade_table`
--

DROP TABLE IF EXISTS `grade_table`;
CREATE TABLE IF NOT EXISTS `grade_table` (
  `Coursename` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `Coursegrade` int(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `grade_table`
--

INSERT INTO `grade_table` (`Coursename`, `Coursegrade`) VALUES
('数学', 97),
('政治', 27),
('历史', 83);

-- --------------------------------------------------------

--
-- 表的结构 `user_manage`
--

DROP TABLE IF EXISTS `user_manage`;
CREATE TABLE IF NOT EXISTS `user_manage` (
  `Username` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user_manage`
--

INSERT INTO `user_manage` (`Username`, `Password`) VALUES
('yizitong', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
