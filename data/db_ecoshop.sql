-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3308
-- 生成日期： 2020-05-26 07:41:07
-- 服务器版本： 8.0.18
-- PHP 版本： 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `db_ecoshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号id',
  `name` varchar(13) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '管理员姓名',
  `pwd` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `name`, `pwd`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- 表的结构 `tb_dingdan`
--

DROP TABLE IF EXISTS `tb_dingdan`;
CREATE TABLE IF NOT EXISTS `tb_dingdan` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '自动编号id',
  `dingdanhao` varchar(125) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '订单号',
  `mingcheng` varchar(125) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '商品名称',
  `shuliang` varchar(125) DEFAULT NULL COMMENT '购买数量',
  `shouhuoren` varchar(25) DEFAULT NULL COMMENT '收货人',
  `sex` varchar(2) DEFAULT NULL COMMENT '性别',
  `dizhi` varchar(125) DEFAULT NULL COMMENT '送货地址',
  `youbian` varchar(10) DEFAULT NULL COMMENT '邮编',
  `dianhua` varchar(25) DEFAULT NULL COMMENT '联系电话',
  `shijian` varchar(25) DEFAULT NULL COMMENT '下单时间',
  `xiadanren` varchar(25) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '下单人',
  `zhuangtai` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '订单状态',
  `zongji` varchar(25) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '价格总计',
  `beizu` mediumtext CHARACTER SET gb2312 COLLATE gb2312_chinese_ci COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_dingdan`
--

INSERT INTO `tb_dingdan` (`id`, `dingdanhao`, `mingcheng`, `shuliang`, `shouhuoren`, `sex`, `dizhi`, `youbian`, `dianhua`, `shijian`, `xiadanren`, `zhuangtai`, `zongji`, `beizu`) VALUES
(1, '2020052615020001', '显示器', '1', '张三', '男', '法外狂徒', '100010', '110', '2020-05-26 15:08:00', '张三', '已发货', '9999', '这是备注');

-- --------------------------------------------------------

--
-- 表的结构 `tb_pingjia`
--

DROP TABLE IF EXISTS `tb_pingjia`;
CREATE TABLE IF NOT EXISTS `tb_pingjia` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号id',
  `userid` int(4) DEFAULT NULL COMMENT '用户id',
  `spid` int(4) DEFAULT NULL COMMENT '商品id',
  `pingjia` text CHARACTER SET gb2312 COLLATE gb2312_chinese_ci COMMENT '评价内容',
  `shijian` varchar(25) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '评价时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_pingjia`
--

INSERT INTO `tb_pingjia` (`id`, `userid`, `spid`, `pingjia`, `shijian`) VALUES
(1, 1, 1, '这是一款好产品！', '2020-05-26 15:40:00');

-- --------------------------------------------------------

--
-- 表的结构 `tb_shangpin`
--

DROP TABLE IF EXISTS `tb_shangpin`;
CREATE TABLE IF NOT EXISTS `tb_shangpin` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '自动编号id',
  `mingcheng` varchar(25) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '商品名称',
  `pingpai` varchar(25) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '商品品牌',
  `leibie` int(4) DEFAULT NULL COMMENT '商品类别id',
  `shichangjia` varchar(25) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '市场价',
  `zhekoujia` varchar(25) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '折扣价',
  `shuliang` int(4) DEFAULT NULL COMMENT '商品数量',
  `xiaoliang` int(4) DEFAULT NULL COMMENT '商品销量',
  `tuijian` int(4) DEFAULT NULL COMMENT '是否推荐',
  `shijian` date DEFAULT NULL COMMENT '上市时间',
  `tupian` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '图片路径',
  `jianjie` mediumtext CHARACTER SET gb2312 COLLATE gb2312_chinese_ci COMMENT '商品简介',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_shangpin`
--

INSERT INTO `tb_shangpin` (`id`, `mingcheng`, `pingpai`, `leibie`, `shichangjia`, `zhekoujia`, `shuliang`, `xiaoliang`, `tuijian`, `shijian`, `tupian`, `jianjie`) VALUES
(1, '显示器', 'Eco', 1, '9999', '8888', 100, 80, 1, '2020-03-12', NULL, '这是一款240HZ的电竞显示器');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号id',
  `name` varchar(25) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '用户名',
  `pwd` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '用户密码',
  `dianhua` varchar(25) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '联系电话',
  `youbian` varchar(25) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '用户邮编',
  `dizhi` varchar(100) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '用户地址',
  `qq` varchar(25) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '用户QQ号',
  `timu` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '密码找回题目',
  `daan` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_chinese_ci DEFAULT NULL COMMENT '密码找回答案',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
