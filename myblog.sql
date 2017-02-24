-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-02-24 12:53:53
-- 服务器版本： 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `name`, `title`, `type`, `content`) VALUES
(1, '111', '这些年', 'php', '<p>　&nbsp;&nbsp; 2013年的8月13日，群主打开自己的QQ，建立了第一个技术交流群，也就是现在的交流一群。</p>\r\n\r\n<p>　　时光飞逝，转眼之间，3年半已经过去了。</p>\r\n\r\n<p>　　当初建群的时候，群主才工作不到两年，期间借着业余时间，写了一个设计模式的系列</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 因此吸引了一批同道中人一起学习。为了给大家一个一起交流的地方，群主便顺手建了一个QQ群。</p>\r\n\r\n<p>　　</p>\r\n'),
(2, '111', '微信后台技术“干货们”带来的启发', 'php', '<p>在前文中提过，循证大概是我们读技术干货文章的一个原始诉求，通过分析别人走过的路径，来拨开自己技术道路探索上的迷雾。</p>\r\n\r\n<p>关于 IM 类消息应用最重要的一个技术决策就是关于消息模型，微信采用了存储转发模型，其具体描述如下（参考[1]）：</p>\r\n\r\n<blockquote>\r\n<p>消息被发出后，会先在后台临时存储；为使接收者能更快接收到消息，会推送消息通知给接收者；最后客户端主动到服务器收取消息。</p>\r\n</blockquote>\r\n\r\n<p>简单描述这个模型就是三个步骤：</p>\r\n\r\n<ol>\r\n	<li>消息接收后在服务端临时存储，并通知发送端已发送成功。</li>\r\n	<li>通知接收端有消息，请来拉取。</li>\r\n	<li>接收端收到通知后，再来拉取真正的消息。</li>\r\n</ol>\r\n\r\n<p>初一看这个模型多了一层通知再拉取的冗余，为什么不直接把消息推下去？对，最早期我们自己做 IM 就设计的先尝试直接推消息下去，若接收端没有确认收到，再临时存储的模型。后者减少了临时存储的量和时间，也没有一个多余的通知。</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, '111', '【前端】:JavaScript ', 'JavaScript ', '<p><span style="font-size:15px"><span style="font-size:16px">前言</span>: 开始学JavaScript,Dom,jQuery了，知识好杂，本身记忆力就不行的~~这篇博客简单介绍下JavaScript. 下篇博客写关于Dom的。</span></p>\r\n\r\n<p><span style="font-size:15px">JavaScript是<span style="color:#ff0000">一门编程语言(之前一直误以为是有关java的知识)</span>，<span style="color:#ff0000">浏览器内置了JavaScript语言的解释器</span>，所以在浏览器上按照JavaScript语言的规则编写相应代码之，浏览器可以解释并做出相应的处理。JS目前广泛用于Web应用开发,常用来为网页添加各式各样的<span style="color:#ff0000">动态功能</span>,为用户提供更流畅美观的浏览效果。通常<span style="color:#ff0000">JavaScript脚本是通过嵌入在HTML中来实现自身的功能的</span>。</span><span style="display:none">&nbsp;</span></p>\r\n'),
(4, '111', '【前端】:JavaScript ', 'JavaScript ', '<p>一、JavaScript代码存在形式与存放位置</p>\r\n\r\n<p><strong>1. JavaScript代码有两种存在形式</strong>，一种是直接在html内部编写javascript，另一种是导入JS文件。</p>\r\n\r\n<p>方式一:<strong>在html内部编写javascript</strong></p>\r\n\r\n<pre>\r\n1 &lt;script&gt;\r\n2     function f1(){\r\n3     alert(&#39;f1&#39;)\r\n4     }\r\n5     f1();\r\n6 &lt;/script&gt;</pre>\r\n\r\n<p>方式二:<strong>通过文件导入</strong></p>\r\n\r\n<pre>\r\n1 &lt;script src=&quot;common.js&quot;&gt;&lt;/script&gt;\r\n2 &lt;script&gt;f2();&lt;/script&gt;</pre>\r\n\r\n<p>第一行&lt;script src=&quot;common.js&quot;&gt;&lt;/script&gt;，表示导入common.js文件，common.js文件的内容:</p>\r\n\r\n<pre>\r\n1 function f2(){\r\n2     alert(&#39;f2&#39;)\r\n3     }</pre>\r\n\r\n<p><strong>2、JavaScript代码存在位置</strong></p>\r\n\r\n<ul>\r\n	<li>HTML的head中</li>\r\n	<li>HTML的body代码块底部(<strong>推荐</strong>)</li>\r\n</ul>\r\n\r\n<p>由于Html代码是从上到下执行，如果放在head头部中的js代码耗时严重，就会导致用户长时间无法看到页面；如果放置在body代码块底部，那么即使js代码耗时严重，也不会影响用户看到页面效果，只是js实现特效慢而已。<br />\r\n一般把js代码放在body代码块的最后面</p>\r\n'),
(5, '031502424', '博客系统', 'php', '<p>博客园是一个面向开发者的知识分享社区。自创建以来,<em>博客园</em>一直致力并专注于为开发者打造一个纯净的技术交流社区,推动并帮助开发者通过互联网分享知识,从而让更多巴巴爸爸巴巴爸爸啊叭叭叭叭叭叭吧把吧</p>\r\n'),
(6, '031502424', 'database', 'php', '<div class="para" label-module="para">数据库(Database)是按照<a href="http://baike.baidu.com/view/9900.htm" target="_blank"><font color="#0066cc">数据结构</font></a>来组织、<a href="http://baike.baidu.com/view/87682.htm" target="_blank"><font color="#0066cc">存储</font></a>和管理数据的仓库，它产生于距今六十多年前，随着<a href="http://baike.baidu.com/view/3226.htm" target="_blank"><font color="#0066cc">信息技术</font></a>和市场的发展，特别是二十世纪九十年代以后，<a href="http://baike.baidu.com/view/14717.htm" target="_blank"><font color="#0066cc">数据管理</font></a>不再仅仅是存储和管理数据，而转变成用户所需要的各种数据管理的方式。数据库有很多种<a data-lemmaid="33084" href="http://baike.baidu.com/subview/738155/8050031.htm" target="_blank"><font color="#0066cc">类型</font></a>，从最简单的存储有各种数据的<a href="http://baike.baidu.com/view/899068.htm" target="_blank"><font color="#0066cc">表格</font></a>到能够进行海量<a href="http://baike.baidu.com/view/551712.htm" target="_blank"><font color="#0066cc">数据存储</font></a>的大型<a href="http://baike.baidu.com/view/7809.htm" target="_blank"><font color="#0066cc">数据库系统</font></a>都在各个方面得到了广泛的应用。</div>\r\n\r\n<div class="para" label-module="para">在信息化社会，充分有效地管理和利用各类信息资源，是进行科学研究和决策管理的前提条件。数据库技术是管理信息系统、办公自动化系统、决策支持系统等各类信息系统的核心部分，是进行科学研究和决策管理的重要技术手段。<span style="display:none">&nbsp;</span></div>\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, '111', 'c4ca4238a0b923820dcc509a6f75849b'),
(3, '031502424', 'c4ca4238a0b923820dcc509a6f75849b'),
(5, '刘双玉', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
