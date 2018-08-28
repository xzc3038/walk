--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `username` varchar(32) NOT NULL DEFAULT '' COMMENT '用户名',
  `realname` varchar(32) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `password` varchar(32) NOT NULL DEFAULT '' COMMENT '密码',
  `salt` varchar(30) NOT NULL DEFAULT '' COMMENT '密码盐',
  `status` enum('normal','freeze') NOT NULL DEFAULT 'normal' COMMENT '状态',
  `mobile` varchar(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `qqnumber` varchar(11) NOT NULL DEFAULT '' COMMENT 'qq号',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `gender` tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '性别',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `bio` varchar(100) NOT NULL DEFAULT '' COMMENT '格言',
  `jointime` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '加入时间',
  `lastime` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '上次登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户表' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `salt`, `mobile`, `avatar`, `gender`, `birthday`, `bio`, `jointime`, `lastime`) VALUES
(1, 'xzc', '123456', '', '15057725708', '', 0, NULL, '', 0, 0);
COMMIT;


--
-- 表的结构 `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `cid` int(12) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'CID',
  `title` text NOT NULL COMMENT '标题',
  `introduction` text NOT NULL COMMENT '简介',
  `content` text NOT NULL COMMENT '内容',
  `label` VARCHAR(12) COMMENT '标签',
  `author` VARCHAR(12) NOT NULL DEFAULT '佚名' COMMENT '作者',
  `image` varchar(32) COMMENT '文章图片',
  `status` enum('normal','hidden') NOT NULL DEFAULT 'normal' COMMENT '状态',
  `createtime` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updatetime` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '更新时间',
  `view` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '浏览次数',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章表' ROW_FORMAT=COMPACT;
COMMIT;

--
-- 表的结构 `sentence`
--

CREATE TABLE `sentence`(
`sid` INT(12) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'SID',
`status` enum('normal','hidden') NOT NULL DEFAULT 'normal' COMMENT '状态',
`content` text COMMENT '内容',
`createtime` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '创建时间',
`updatetime` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '更新时间',
PRIMARY KEY (`sid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='每日一句' ROW_FORMAT=COMPACT;
COMMIT;


--
-- 表的结构 `message`
--

CREATE TABLE `message`(
`mid` INT(12) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'MID',
`uid` bigint(20) UNSIGNED NOT NULL COMMENT 'UID',
`status` enum('normal','hidden') NOT NULL DEFAULT 'normal' COMMENT '状态',
`content` text COMMENT '内容',
`createtime` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '创建时间',
`updatetime` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '更新时间',
PRIMARY KEY (`mid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='留言' ROW_FORMAT=COMPACT;
COMMIT;

