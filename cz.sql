-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 23 日 23:44
-- 服务器版本: 5.5.21
-- PHP 版本: 5.4.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `cz`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(64) NOT NULL COMMENT '账号',
  `name` varchar(64) NOT NULL COMMENT '操作员',
  `role` varchar(64) NOT NULL COMMENT '角色',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `root` varchar(32) DEFAULT NULL COMMENT '权限',
  `tel` varchar(16) DEFAULT NULL COMMENT '手机号',
  `level` tinyint(2) unsigned NOT NULL DEFAULT '2' COMMENT '等级',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `name`, `role`, `password`, `root`, `tel`, `level`) VALUES
(4, 'xch19950126', '谢超', '技术部', 'af44b630ecdd9bd6477a9df427c6d950', '1,2,3', NULL, 1),
(5, 'fei', '飞', '技术部', 'f4cc399f0effd13c888e310ea2cf5399', '1,2,3', NULL, 2),
(7, 'root', '寻菜', '技术部', '63a9f0ea7bb98050796b649e85481845', '1,2,3', NULL, 2);

-- --------------------------------------------------------

--
-- 表的结构 `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `orderid` varchar(16) NOT NULL COMMENT '订单号',
  `name` varchar(24) DEFAULT NULL COMMENT '姓名',
  `sex` tinyint(2) DEFAULT NULL COMMENT '性别',
  `birthday` int(10) DEFAULT NULL COMMENT '生日',
  `area` varchar(128) DEFAULT NULL COMMENT '地区',
  `idcard` varchar(24) DEFAULT NULL COMMENT '身份证',
  `industry` tinyint(2) DEFAULT NULL COMMENT '行业',
  `level` varchar(128) NOT NULL DEFAULT '0' COMMENT '代理等级',
  `email` varchar(128) DEFAULT NULL COMMENT '邮箱',
  `wechat` varchar(128) DEFAULT NULL COMMENT '微信',
  `address` varchar(128) DEFAULT NULL COMMENT '地址',
  `dawk` varchar(8) DEFAULT NULL COMMENT '邮政编码',
  `work` varchar(128) DEFAULT NULL COMMENT '工作地址',
  `balance` double(8,2) unsigned DEFAULT '0.00' COMMENT '余额',
  `commission` double(8,2) unsigned DEFAULT '0.00' COMMENT '佣金',
  `paypass` varchar(32) DEFAULT NULL COMMENT '支付密码',
  `company` varchar(64) NOT NULL COMMENT '代理商公司',
  `license` varchar(64) DEFAULT NULL COMMENT '营业执照',
  `state` tinyint(2) unsigned DEFAULT NULL COMMENT '审核状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `information`
--

INSERT INTO `information` (`id`, `orderid`, `name`, `sex`, `birthday`, `area`, `idcard`, `industry`, `level`, `email`, `wechat`, `address`, `dawk`, `work`, `balance`, `commission`, `paypass`, `company`, `license`, `state`) VALUES
(6, '1476769119721', '张三', 1, 930711, '湖北', '123456', NULL, '1', NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, NULL, '大理', NULL, 1),
(7, '1476769127223', '张三', 2, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, NULL, '大连', NULL, NULL),
(8, '147676913290', '李四', 1, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, NULL, '河南', NULL, 1),
(9, '1476688467598', '李四', 1, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, NULL, '河南', NULL, NULL),
(10, '1476693601993', '王五', 1, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, NULL, '郑州', NULL, NULL),
(11, '1476693619645', '赵六', 2, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, NULL, '石家庄', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(64) NOT NULL COMMENT '账号',
  `ip` varchar(32) NOT NULL COMMENT '登录ip',
  `time` int(10) unsigned NOT NULL COMMENT '登录时间',
  `role` tinyint(2) unsigned NOT NULL COMMENT '用户角色',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `login`
--

INSERT INTO `login` (`id`, `user`, `ip`, `time`, `role`) VALUES
(1, 'xch19950126', '127.0.0.1', 1476927604, 3),
(2, 'xch19950126', '127.0.0.1', 1476927644, 3),
(3, 'xch19950126', '127.0.0.1', 1476932538, 3),
(4, 'xch19950126', '127.0.0.1', 1476932870, 3);

-- --------------------------------------------------------

--
-- 表的结构 `operation`
--

CREATE TABLE IF NOT EXISTS `operation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(64) NOT NULL COMMENT '账号',
  `operation` varchar(255) NOT NULL COMMENT '操作内容',
  `ip` varchar(16) NOT NULL COMMENT 'ip地址',
  `time` int(10) unsigned NOT NULL COMMENT '操作时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `operation`
--

INSERT INTO `operation` (`id`, `user`, `operation`, `ip`, `time`) VALUES
(1, '谢超', '删除管理员', '127.0.0.1', 1476928054),
(2, '谢超', '修改管理员id为5权限', '127.0.0.1', 1476928064),
(3, '谢超', '添加管理员wulei', '127.0.0.1', 1476928161),
(4, '谢超', '修改管理员id为6权限', '127.0.0.1', 1476928180),
(5, '谢超', '删除管理员吴磊', '127.0.0.1', 1476928189),
(6, '谢超', '修改管理员飞的权限为3', '127.0.0.1', 1476928376),
(7, '谢超', '修改管理员飞的权限为1,2,3', '127.0.0.1', 1476928386),
(8, '谢超', '添加经销商bwxcjtyxgs', '127.0.0.1', 1476930939),
(9, '谢超', '添加普通用户5588', '127.0.0.1', 1476931003),
(10, '谢超', '审核用户id为5的经销商申请结果为不通过', '127.0.0.1', 1476931624),
(11, '谢超', '审核用户id为5的经销商申请结果为不通过', '127.0.0.1', 1476931732),
(12, '谢超', '审核用户id为5的经销商申请结果为通过', '127.0.0.1', 1476931760);

-- --------------------------------------------------------

--
-- 表的结构 `orderinfo`
--

CREATE TABLE IF NOT EXISTS `orderinfo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '数据id',
  `uid` varchar(16) NOT NULL COMMENT '用户id',
  `tel` varchar(16) NOT NULL COMMENT '手机号',
  `arrival` int(10) unsigned NOT NULL COMMENT '到账时间',
  `operator` tinyint(2) unsigned NOT NULL COMMENT '运营商',
  `orderid` varchar(16) NOT NULL COMMENT '订单号',
  `cardid` int(11) NOT NULL COMMENT '卡号',
  `create_time` int(10) unsigned NOT NULL COMMENT '创建时间',
  `recharge` tinyint(2) unsigned NOT NULL COMMENT '充值数量',
  `payment` double(6,2) unsigned NOT NULL COMMENT '支付金额',
  `mode` tinyint(2) unsigned NOT NULL COMMENT '支付方式',
  `rebate` double(6,2) unsigned NOT NULL COMMENT '返利',
  `export` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '是否导出',
  `genre` tinyint(2) unsigned NOT NULL COMMENT '充值类型',
  `state` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  `usertype` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '订单类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `orderinfo`
--

INSERT INTO `orderinfo` (`id`, `uid`, `tel`, `arrival`, `operator`, `orderid`, `cardid`, `create_time`, `recharge`, `payment`, `mode`, `rebate`, `export`, `genre`, `state`, `usertype`) VALUES
(1, '15215873463', '15215873463', 1, 3, '1476688467598', 1, 1476688467, 1, 15.00, 1, 0.00, 1, 1, 2, 1),
(6, '15215873463', '15215873463', 2, 1, '1476693601993', 0, 1476693601, 1, 15.00, 2, 0.00, 1, 1, 2, 1),
(7, '18271632203', '15658161186', 1, 2, '1476693619645', 0, 1476693619, 2, 15.00, 1, 0.00, 1, 1, 2, 1),
(8, '18271632203', '15215873463', 1, 1, '1476769119721', 0, 1476769119, 1, 29.98, 1, 0.00, 1, 1, 2, 1),
(9, '15215873463', '15215873463', 2, 1, '1476769127223', 0, 1476769127, 1, 29.98, 1, 0.00, 1, 1, 3, 1),
(10, '15215873463', '15215873463', 2, 1, '147676913290', 0, 1476769132, 1, 29.98, 2, 0.00, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uid` varchar(16) NOT NULL COMMENT '用户id',
  `password` varchar(32) DEFAULT NULL COMMENT '密码',
  `tel` varchar(16) NOT NULL COMMENT '电话',
  `creat_time` int(11) unsigned NOT NULL COMMENT '创建时间',
  `genre` tinyint(2) unsigned NOT NULL COMMENT '角色类型',
  `pic` varchar(128) DEFAULT NULL COMMENT '头像',
  `spic` varchar(128) DEFAULT NULL COMMENT '小头像',
  `state` tinyint(2) unsigned DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `uid`, `password`, `tel`, `creat_time`, `genre`, `pic`, `spic`, `state`) VALUES
(1, '15088211079', 'c60434b584175407879194727facab7b', '15088211079', 1476755410, 1, '/Img/2016-10-18/58057fd29ca0d.jpg', '/Img/2016-10-18/s_58057fd29ca0d.jpg', 2),
(2, '15215873463', 'c60434b584175407879194727facab7b', '15215873463', 1476755422, 1, 'Img/2016-10-18/580594699db00.jpeg', 'Img/2016-10-18/s_580594699db00.jpeg', 1),
(3, '15658161186', NULL, '15658161186', 1476760089, 1, NULL, NULL, 1),
(4, '145858796', 'f4cc399f0effd13c888e310ea2cf5399', '15215879651', 1476848045, 2, NULL, NULL, 1),
(5, 'swjyyxgs', 'f4cc399f0effd13c888e310ea2cf5399', '15215873499', 1476870436, 2, NULL, NULL, 4),
(6, '123123', '1c138be35c6cf9993d329e20cc0f9e4d', '15215879688', 1476870524, 1, NULL, NULL, 1),
(7, 'bwxcjtyxgs', 'f4cc399f0effd13c888e310ea2cf5399', '15876925458', 1476930939, 2, NULL, NULL, 4),
(8, '5588', 'f4cc399f0effd13c888e310ea2cf5399', '15879858585', 1476931003, 1, NULL, NULL, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
