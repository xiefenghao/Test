-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `shop_auth_group`;
CREATE TABLE `shop_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `rules` char(80) NOT NULL DEFAULT '',
  `remark` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `shop_auth_group` (`id`, `title`, `status`, `rules`, `remark`) VALUES
(1,	'管理员',	1,	'1',	'拥有产品管理全路'),
(2,	'管理员2',	1,	'1,2',	'1'),
(3,	'产品分类添加/删除',	1,	'1,2,3',	'拥有');

DROP TABLE IF EXISTS `shop_auth_group_access`;
CREATE TABLE `shop_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `shop_auth_group_access` (`uid`, `group_id`) VALUES
(39,	3);

DROP TABLE IF EXISTS `shop_auth_rule`;
CREATE TABLE `shop_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `shop_auth_rule` (`id`, `name`, `title`, `type`, `status`, `condition`) VALUES
(1,	'admin/index/productdel',	'admin.php/index/prod',	1,	1,	''),
(2,	'index/index/productcategoryadd',	'管理员',	1,	1,	''),
(3,	'admin/index/productaddadd',	'aaa',	1,	1,	'');

DROP TABLE IF EXISTS `shop_cart`;
CREATE TABLE `shop_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ptid` int(11) NOT NULL COMMENT '用户id',
  `gid` int(11) NOT NULL COMMENT '商品id',
  `num` int(11) NOT NULL DEFAULT 1 COMMENT '商品数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='收藏';

INSERT INTO `shop_cart` (`id`, `ptid`, `gid`, `num`) VALUES
(188,	0,	0,	1),
(194,	39,	102,	1);

DROP TABLE IF EXISTS `shop_code`;
CREATE TABLE `shop_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '发送id',
  `number` varchar(11) DEFAULT NULL COMMENT '号码',
  `time` int(11) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `shop_code` (`id`, `number`, `time`) VALUES
(1,	NULL,	1568035083),
(2,	NULL,	1568035148),
(3,	NULL,	1568120409);

DROP TABLE IF EXISTS `shop_collect`;
CREATE TABLE `shop_collect` (
  `id` int(11) NOT NULL,
  `ptid` int(11) NOT NULL COMMENT '用户id',
  `gid` int(11) NOT NULL COMMENT '商品id',
  `num` int(11) NOT NULL COMMENT '商品数量'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `shop_deal`;
CREATE TABLE `shop_deal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ptid` int(11) NOT NULL COMMENT '用户id',
  `gid` int(11) NOT NULL COMMENT '商品id',
  `out_trade_no` varchar(28) NOT NULL COMMENT '订单号',
  `trade_no` varchar(44) NOT NULL COMMENT '阿里云订单号',
  `app_id` varchar(28) NOT NULL COMMENT '商户id',
  `total_amount` float NOT NULL COMMENT '价格',
  `t_body` varchar(255) NOT NULL COMMENT '备注',
  `num` int(11) NOT NULL COMMENT '商品数量',
  `refund` int(11) NOT NULL DEFAULT 0 COMMENT '退款',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `shop_deal` (`id`, `ptid`, `gid`, `out_trade_no`, `trade_no`, `app_id`, `total_amount`, `t_body`, `num`, `refund`) VALUES
(358,	25,	155,	'1552020110420431143',	'2020110422001440800501090887',	'',	0.01,	'1',	1,	1),
(359,	0,	0,	'1502020110420461146',	'',	'',	0.01,	'',	1,	1),
(360,	0,	0,	'1452020110421141114',	'',	'',	0.01,	'',	1,	0),
(361,	0,	0,	'1452020110421141114',	'',	'',	0.01,	'',	1,	0),
(362,	0,	0,	'1452020110421151115',	'',	'',	0.01,	'',	1,	0),
(370,	25,	155,	'1552020110420431143',	'2020110422001440800501090887',	'',	0.01,	'1',	1,	1),
(371,	0,	0,	'1522020111522221122',	'',	'',	0.01,	'kjkjakjsa',	1,	0),
(372,	0,	0,	'1522020111522221122',	'',	'',	0.01,	'',	1,	0),
(373,	0,	0,	'1022020122917491249',	'',	'',	11,	'',	1,	0);

DROP TABLE IF EXISTS `shop_goods`;
CREATE TABLE `shop_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `name` varchar(55) NOT NULL COMMENT '商品名称',
  `tid` int(11) NOT NULL COMMENT '分类id',
  `tpid` int(11) NOT NULL COMMENT '分类父级id',
  `unit` int(11) NOT NULL COMMENT '商品单位',
  `attributes` enum('1','2','3','4','5','6','7','8') NOT NULL COMMENT '商品属性',
  `imagepath` varchar(550) DEFAULT NULL COMMENT '轮播图',
  `number` int(11) NOT NULL COMMENT '商品编号',
  `curprice` float NOT NULL COMMENT '现价',
  `oriprice` float NOT NULL COMMENT '原价',
  `inventory` int(11) NOT NULL COMMENT '库存量',
  `strict` int(11) NOT NULL COMMENT '限制购买量',
  `already` int(11) NOT NULL COMMENT '已购买量',
  `freight` int(11) NOT NULL COMMENT '运费',
  `stauts` enum('0','1') NOT NULL COMMENT '是否上架',
  `text` text DEFAULT NULL COMMENT '商品描述',
  `datemin` date DEFAULT NULL COMMENT '促销开始时间',
  `datemax` date DEFAULT NULL COMMENT '促销结束时间',
  `create_time` date DEFAULT NULL,
  `update_time` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `shop_goods` (`id`, `name`, `tid`, `tpid`, `unit`, `attributes`, `imagepath`, `number`, `curprice`, `oriprice`, `inventory`, `strict`, `already`, `freight`, `stauts`, `text`, `datemin`, `datemax`, `create_time`, `update_time`) VALUES
(1,	'撒啊',	138,	113,	4,	'1',	'\\upImg/20200105/6e5ffae2e258cbb1eef68f6ab577f730.jpg,\\upImg/20200105/186e159876d63c825ea023fbae3710d3.jpg,\\upImg/20200105/6e5ffae2e258cbb1eef68f6ab577f730.jpg,\\upImg/20200105/186e159876d63c825ea023fbae3710d3.jpg',	1,	99,	1111,	0,	0,	0,	0,	'1',	'',	NULL,	NULL,	NULL,	NULL),
(2,	'11',	113,	0,	1,	'1',	'\\upImg/20191219/ceabfdb73d8fb18fd325ad91e29027e9.jpg,\\upImg/20191219/61f7f55bdc15dd5519937904abe7dcbf.jpg,\\upImg/20191219/b133b8b103d2bb9caa527110fc965b74.jpg,\\upImg/20191219/da658e0bd565ccb03cca01e3d7507c89.jpg',	2,	12,	13,	11,	0,	2,	2,	'0',	'<p>22</p>',	NULL,	NULL,	NULL,	NULL),
(134,	'',	0,	0,	0,	'1',	'',	0,	0,	0,	0,	0,	0,	0,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(4,	'1111',	113,	0,	1,	'2',	NULL,	2,	1,	1,	1,	0,	1,	1,	'1',	'<p>1</p>',	NULL,	NULL,	NULL,	NULL),
(5,	'11',	113,	0,	1,	'1',	NULL,	1,	1,	1,	11,	0,	1,	1,	'0',	'<p>11</p>',	NULL,	NULL,	NULL,	NULL),
(6,	'11',	113,	0,	1,	'7',	'/upImg/20191214\\45e2aee0c685adf993eb4d4cfca1e5e5.jpg',	2,	12,	13,	11,	0,	2,	2,	'1',	'<p>22</p>',	NULL,	NULL,	NULL,	NULL),
(7,	'11',	113,	0,	1,	'1',	'/upImg/20191214\\1e28ac7bdf592cec17196f1c1656f1eb.jpg',	2,	12,	13,	11,	0,	2,	2,	'0',	'<p>22</p>',	NULL,	NULL,	NULL,	NULL),
(8,	'11',	113,	0,	1,	'1',	'/upImg/20191214\\1e28ac7bdf592cec17196f1c1656f1eb.jpg',	2,	12,	13,	11,	0,	2,	2,	'0',	'<p>22</p>',	NULL,	NULL,	NULL,	NULL),
(9,	'11',	113,	0,	1,	'1',	'/upImg/20191214\\519f0a6921ca08e41c6398a134103e90.jpg',	2,	12,	13,	11,	0,	2,	2,	'0',	'<p>22</p>',	NULL,	NULL,	NULL,	NULL),
(10,	'11',	113,	0,	1,	'1',	'/upImg/20191214\\f930545227a131eb4160b7f47300a6be.jpg',	2,	12,	13,	11,	0,	2,	2,	'0',	'<p>22</p>',	NULL,	NULL,	NULL,	NULL),
(104,	'同意',	147,	143,	1,	'3',	'\\upImg/20191219/2444f9bdfe9056f57a1c3223ae031828.jpg',	11,	1,	1111,	1,	0,	1,	1,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(102,	'11',	113,	0,	1,	'1',	'\\upImg/20191218/827c7022fca9fb7de6cf158bda672b79.jpg',	11,	11,	111,	1,	0,	1,	1,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(100,	'11212',	113,	0,	1,	'1',	'\\upImg/20191218/d057203e335fe6a4610e7bfe06de9854.jpg,\\upImg/20191218/c472c24e222bdcdc7dfd403311a82205.jpg,\\upImg/20191218/558324902694746ccd45c43577fdd743.jpg,\\upImg/20191218/7383b0897478654924b0262d43dabfa7.jpg,\\upImg/20191218/9a8b54900dabb031e6bd17863dc260a9.jpg,\\upImg/20191217/ad0bb9b89ec224847bbc96e90a2a8ecc.jpg,/upImg\\20191217\\5c546b446104b627af5057d7dfe348e3.jpg',	1,	1,	11,	1,	0,	1,	1,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(98,	'同意',	113,	0,	1,	'1',	NULL,	1122222222,	11,	14,	12,	0,	1,	1,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(99,	'同意',	113,	0,	1,	'1',	'\\upImg/20191218/d057203e335fe6a4610e7bfe06de9854.jpg,\\upImg/20191218/c472c24e222bdcdc7dfd403311a82205.jpg,\\upImg/20191218/558324902694746ccd45c43577fdd743.jpg,\\upImg/20191218/7383b0897478654924b0262d43dabfa7.jpg,\\upImg/20191218/9a8b54900dabb031e6bd17863dc260a9.jpg,\\upImg/20191217/ad0bb9b89ec224847bbc96e90a2a8ecc.jpg,/upImg\\20191217\\5c546b446104b627af5057d7dfe348e3.jpg',	11,	1,	11,	1,	0,	1,	1,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(121,	'12121',	145,	144,	1,	'1',	'\\upImg/20191219/46710a4be3042c503ea2101065223abd.jpg,\\upImg/20191219/c9e1de9f890f2d64ef7a00e55626cddf.jpg,\\upImg/20191219/25103de37eace8ae1c9e820c270ed171.jpg,\\upImg/20191219/b8af9ea9b42db20a2c037ce19d4be593.jpg',	11,	111,	1222,	1,	0,	1,	1,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(135,	'',	0,	0,	0,	'1',	'',	0,	0,	0,	0,	0,	0,	0,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(140,	'华为手机',	157,	155,	1,	'1',	'\\upImg/20201014/7b98d64ff7b135f6b44f06e8c98c414e.jpg,\\upImg/20201014/6ffd7d6d19d56ef1b067e00a27969a5b.jpg,\\upImg/20201014/8e70f090f80790139b7e59546b89ebaf.jpg,\\upImg/20201014/d2f8e519c1bb6a5f38ddc0849bd32b96.jpg',	2147483647,	0,	111,	11,	0,	122,	0,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(145,	'op手机',	169,	0,	1,	'1',	'\\upImg/20201014/d6f4c86fedce841d2876022e5774cf26.jpg,\\upImg/20201014/486a2a361391ea53d9d9f129464ec663.jpg,\\upImg/20201014/c4eed25dba3ec0b27df1090365c5a99f.jpg,\\upImg/20201014/9d75539f1d360a399f66cfe7aadd9ab9.jpg',	1111111111,	0.01,	111,	11,	0,	1,	1,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(151,	'op手机1',	169,	0,	1,	'1',	'\\upImg/20201014/d6f4c86fedce841d2876022e5774cf26.jpg,\\upImg/20201014/486a2a361391ea53d9d9f129464ec663.jpg,\\upImg/20201014/c4eed25dba3ec0b27df1090365c5a99f.jpg,\\upImg/20201014/9d75539f1d360a399f66cfe7aadd9ab9.jpg',	1111111111,	0.01,	111,	11,	0,	1,	1,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(150,	'破手机4',	169,	0,	1,	'1',	'\\upImg/20201014/7c59c5aa3a8189501089dd6b56ab1c8d.jpg,\\upImg/20201014/ac1ae062f363c7152a5f188c1416ecfc.jpg,\\upImg/20201014/5459ac7f17a125c1d71e5948062bee96.jpg,\\upImg/20201014/7b70c74f9779375e177eb6f0b5d50fb9.jpg',	2147483647,	0.01,	11111,	1,	0,	1,	1,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(152,	'破手机1122',	169,	0,	1,	'1',	'\\upImg/20201014/7c59c5aa3a8189501089dd6b56ab1c8d.jpg,\\upImg/20201014/ac1ae062f363c7152a5f188c1416ecfc.jpg,\\upImg/20201014/5459ac7f17a125c1d71e5948062bee96.jpg,\\upImg/20201014/7b70c74f9779375e177eb6f0b5d50fb9.jpg',	2147483647,	0.01,	11111,	1,	0,	1,	1,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(153,	'op手机4',	169,	0,	1,	'1',	'\\upImg/20201014/d6f4c86fedce841d2876022e5774cf26.jpg,\\upImg/20201014/486a2a361391ea53d9d9f129464ec663.jpg,\\upImg/20201014/c4eed25dba3ec0b27df1090365c5a99f.jpg,\\upImg/20201014/9d75539f1d360a399f66cfe7aadd9ab9.jpg',	1111111111,	0.01,	111,	11,	0,	1,	1,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(154,	'op手机15',	169,	0,	1,	'1',	'\\upImg/20201014/d6f4c86fedce841d2876022e5774cf26.jpg,\\upImg/20201014/486a2a361391ea53d9d9f129464ec663.jpg,\\upImg/20201014/c4eed25dba3ec0b27df1090365c5a99f.jpg,\\upImg/20201014/9d75539f1d360a399f66cfe7aadd9ab9.jpg',	1111111111,	0.01,	111,	11,	0,	1,	1,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(155,	'op机151',	169,	0,	1,	'1',	'\\upImg/20201014/d6f4c86fedce841d2876022e5774cf26.jpg,\\upImg/20201014/486a2a361391ea53d9d9f129464ec663.jpg,\\upImg/20201014/c4eed25dba3ec0b27df1090365c5a99f.jpg,\\upImg/20201014/9d75539f1d360a399f66cfe7aadd9ab9.jpg',	1111111111,	0.01,	111,	11,	0,	1,	1,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(161,	'11',	113,	0,	1,	'8',	'\\upImg/20201229/ebbf97d64b51fee4661aa117bae64f83.jpg',	2,	12,	13,	11,	0,	2,	2,	'0',	'<p>22</p>',	NULL,	NULL,	NULL,	NULL),
(160,	'1',	113,	0,	1,	'1',	'\\upImg/20201229/691ccfdfef5d738e2a17bfbd74013510.jpg,\\upImg/20201229/44e4fc873b52bca38b59a9da58e93669.jpg,\\upImg/20201229/4781e0ace3a3b6e7c4cdb734f9065a8d.jpg,\\upImg/20201229/6e4d7f4e97e8a53336d1ef46e90e7263.jpg',	0,	1,	1,	1,	0,	1,	0,	'0',	NULL,	NULL,	NULL,	NULL,	NULL),
(162,	'11',	113,	0,	1,	'8',	'\\upImg/20201229/0f84a772316b6761e73cf49fba9b84ef.jpg',	2,	12,	13,	11,	0,	2,	2,	'0',	'<p>22</p>',	NULL,	NULL,	NULL,	NULL),
(163,	'11',	113,	0,	1,	'8',	'\\upImg/20201229/8580790cf9f62665045475c358abf6af.jpg',	2,	12,	13,	11,	0,	2,	2,	'0',	'<p>22</p>',	NULL,	NULL,	NULL,	NULL),
(164,	'11',	113,	0,	1,	'8',	'\\upImg/20201229/ee9776791828956c8b909e0909efed98.jpg',	2,	12,	13,	11,	0,	2,	2,	'0',	'<p>22</p>',	NULL,	NULL,	NULL,	NULL),
(165,	'',	0,	0,	0,	'1',	'',	0,	0,	0,	0,	0,	0,	0,	'0',	NULL,	NULL,	NULL,	'2020-12-29',	'2020-12-29'),
(166,	'',	0,	0,	0,	'1',	'',	0,	0,	0,	0,	0,	0,	0,	'0',	NULL,	NULL,	NULL,	'2020-12-29',	'2020-12-29');

DROP TABLE IF EXISTS `shop_party`;
CREATE TABLE `shop_party` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(11) NOT NULL,
  `create_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `shop_party` (`id`, `name`, `password`, `number`, `create_time`) VALUES
(23,	'1',	'96e79218965eb72c92a549dd5a330112',	'11111111112',	'2020-10-08 21:21:38'),
(24,	'11111',	'96e79218965eb72c92a549dd5a330112',	'11111111112',	'2020-10-08 21:38:25'),
(25,	'Umms',	'96e79218965eb72c92a549dd5a330112',	'11111111112',	'2020-10-08 21:44:40'),
(26,	'umms',	'7fa8282ad93047a4d6fe6111c93b308a',	'11111111111',	'2020-10-11 19:12:20');

DROP TABLE IF EXISTS `shop_partydz`;
CREATE TABLE `shop_partydz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ptid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `shop_partydz` (`id`, `ptid`, `name`, `number`, `address`) VALUES
(1,	25,	'超级管理员',	2147483647,	'飒飒飒水水水水水水水水'),
(2,	25,	'超级管理员',	2147483647,	'飒飒飒水水水水水水水水');

DROP TABLE IF EXISTS `shop_store`;
CREATE TABLE `shop_store` (
  `shopid` int(11) NOT NULL AUTO_INCREMENT COMMENT '店铺id',
  `storename` varchar(50) NOT NULL COMMENT '店铺名称',
  `password` char(32) NOT NULL COMMENT '店铺密码',
  `number` char(32) DEFAULT NULL COMMENT '号码',
  `content` varchar(55) DEFAULT NULL COMMENT '商家信息',
  `time` varchar(11) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`shopid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `shop_store` (`shopid`, `storename`, `password`, `number`, `content`, `time`) VALUES
(1,	'1212',	'111111',	NULL,	NULL,	'1568152970'),
(2,	'12112',	'111111',	NULL,	NULL,	'1568153406'),
(3,	'111',	'111111',	NULL,	NULL,	'1568153461'),
(4,	'1111',	'111111',	NULL,	NULL,	'1568153552'),
(5,	'11111',	'111111',	NULL,	NULL,	'1568153680'),
(6,	'1111a',	'96e79218965eb72c92a549dd5a330112',	NULL,	NULL,	'1568153896'),
(7,	'1去',	'96e79218965eb72c92a549dd5a330112',	NULL,	NULL,	'1568197031');

DROP TABLE IF EXISTS `shop_type`;
CREATE TABLE `shop_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `pid` int(11) NOT NULL,
  `path` varchar(55) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `shop_type` (`id`, `name`, `pid`, `path`, `level`) VALUES
(155,	'男士鞋',	113,	'0,113,155',	2),
(156,	'男士皮鞋',	155,	'0,113,155,156',	3),
(157,	'超级管理员',	155,	'0,113,155,157',	3),
(166,	'超级管理',	113,	'0,113,166',	2),
(170,	'wx_product_image',	0,	'0,170',	1),
(113,	'鞋',	0,	'0,113',	1),
(138,	'皮鞋',	113,	'0,113,138',	2),
(136,	'服装',	0,	'0,136',	1),
(137,	'西服',	136,	'0,136,137',	2),
(139,	'女士西服',	137,	'0,136,137,139',	3),
(140,	'男士西服',	137,	'0,136,137,140',	3),
(141,	'童装',	136,	'0,136,141',	2),
(149,	'家居',	0,	'0,149',	1),
(143,	'食品',	0,	'0,143',	1),
(160,	'nha童装',	141,	'0,136,141,160',	3),
(147,	'零食',	143,	'0,143,147',	2),
(148,	'方便面',	143,	'0,143,148',	2),
(150,	'厨具',	149,	'0,149,150',	2);

DROP TABLE IF EXISTS `shop_user`;
CREATE TABLE `shop_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `number` varchar(11) DEFAULT NULL COMMENT '手机号',
  `create_time` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `shop_user` (`id`, `username`, `password`, `number`, `create_time`) VALUES
(37,	'dog',	'0b4e7a0e5fe84ad35fb5f95b9ceeac79',	'11222222222',	'2019-09-09 14:11:37'),
(38,	'DOG',	'36d04a9d74392c727b1a9bf97a7bcbac',	'11222222222',	'2019-09-09 14:11:55'),
(39,	'111',	'96e79218965eb72c92a549dd5a330112',	'15217614491',	'2019-09-09 19:32:09'),
(40,	'11111',	'96e79218965eb72c92a549dd5a330112',	'15217614491',	'2019-09-09 20:00:50'),
(41,	'dog123',	'96e79218965eb72c92a549dd5a330112',	NULL,	'2019-09-11 05:48:18'),
(42,	'dog1231',	'96e79218965eb72c92a549dd5a330112',	NULL,	'2019-09-11 05:49:08'),
(43,	'1221',	'96e79218965eb72c92a549dd5a330112',	NULL,	'2019-09-11 06:09:28'),
(44,	'11',	'111111',	'111111',	'2011-11-11 00:00:00');

-- 2021-02-23 05:12:45
