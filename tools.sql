/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : tools

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2018-05-19 15:29:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ms_tools_admin`
-- ----------------------------
DROP TABLE IF EXISTS `ms_tools_admin`;
CREATE TABLE `ms_tools_admin` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ms_tools_admin
-- ----------------------------
INSERT INTO `ms_tools_admin` VALUES ('1', 'test@test.com', 'e10adc3949ba59abbe56e057f20f883e', '默笙');

-- ----------------------------
-- Table structure for `ms_tools_all`
-- ----------------------------
DROP TABLE IF EXISTS `ms_tools_all`;
CREATE TABLE `ms_tools_all` (
  `id` int(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `yd` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ms_tools_all
-- ----------------------------
INSERT INTO `ms_tools_all` VALUES ('1', '点击随机话语', '点', '0', '/t/web/click-word/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('2', '全屏滑稽', '滑', '0', '/t/web/doge/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('3', '光效生成画', '光', '0', '/t/web/gxsc/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('4', '在线听音乐美化版', '听', '0', '/t/web/mkplayer/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('5', '音悦台外链', '悦', '0', '/t/web/yinyuetai/?url=http%3A%2F%2Fv.yinyuetai.com%2Fvideo%2F3122963&submit=', '默笙');
INSERT INTO `ms_tools_all` VALUES ('6', '随意小球', '球', '0', '/t/web/qiu/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('7', '仿雷达扫描页面', '雷', '0', '/t/web/leida/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('8', '疯狂的代码', '疯', '0', '/t/web/fk-daima/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('9', '3D扇子导航', '扇', '0', '/t/web/shanzi/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('10', '迷宫', '迷', '0', '/t/web/mg/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('11', '胜利的纸牌', '纸', '0', '/t/web/winning-solitaire/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('12', '打破视频吧', '视', '0', '/t/web/h5video/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('13', '变形金刚', '变', '0', '/t/web/bxjg/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('14', '九宫格解锁', '九', '0', '/t/web/NineSquares/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('15', '在线整人', '整', '0', '/t/web/zxzr/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('16', '在线动画字体', '字', '0', '/t/web/dhzt/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('17', '让我帮你百度', '百', '0', '/t/web/baidu/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('18', '在线音乐搜索', '音', '0', '/t/web/music-master/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('20', '弹跳球', '弹', '0', '/t/web/ttq/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('21', '弹个幕吧', '幕', '0', '/t/web/dm/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('22', '代码爆炸效果', '炸', '0', '/t/webpage/dmbz/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('23', '在线短网址生成', '短', '0', '/t/tool/dwz/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('24', '在线解析抖音视频', '抖', '0', '/t/tool/douyin/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('25', '在线生成3D文字', '字', '0', '/t/tool/3dfont/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('26', '在线谷歌搜索', '谷', '0', '/t/tool/google/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('27', '在线生成二维码', '二', '0', '/t/tool/zxscym/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('28', '在线网贷征信查询', '定', '0', '/t/tool/dkcx/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('29', '在线解析接口', '解', '0', '/t/api/stonetv/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('30', '在线图床', '图', '0', '/t/api/tuchuang/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('31', '在线天气接口', '天', '0', '/t/api/wether/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('32', '请等待添加', '等', '0', '#', '作者');
INSERT INTO `ms_tools_all` VALUES ('33', '2048', '2', '0', '/t/game/2048/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('34', '贪吃蛇纯原生', '贪', '0', '/t/game/tcs/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '在线简历', '简', '', '/t/web/geren/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '在线粒子文字', '粒', '', '/t/webpage/html5text/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '在线MD5加密', '加', '', '/t/tool/md5/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '在线生成防红链', '防', '', '/t/tool/fhl/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '在线生成记仇表情包', '记', '', '/t/tool/jichou/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '在线json格式化', 'J', '', '/t/tool/json', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '在线图片解码编码', '图', '', '/t/tool/imgbase64/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '在线PS工具', 'P', '', '/t/tool/photoshop', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '在线端口扫描', '端', '', '/t/tool/dksm/', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '在线生成鬼畜文', '鬼', '', '/t/tool/guichu', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '在线进制转换', '进', '', '/t/tool/hexconvert', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '在线文本对比工具', '文', '', '/t/tool/wbdb', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '在线摩斯密码', '密', '', '/t/tool/fumosi', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '挖矿小游戏', '挖', '', '/t/game/wakuang', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '一个都不能死', '一', '', '/t/game/onedie', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '模拟人坠落', '人', '', '/t/webpage/rwzl', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '翻滚吧404', '4', '', '/t/webpage/404', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '找到不同的颜色', '找', '', '/t/game/smcs', '默笙');
INSERT INTO `ms_tools_all` VALUES ('0', '飞行棋', '飞', '', '/t/game/fxq', '默笙');

-- ----------------------------
-- Table structure for `ms_tools_api`
-- ----------------------------
DROP TABLE IF EXISTS `ms_tools_api`;
CREATE TABLE `ms_tools_api` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `yd` varchar(255) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ms_tools_api
-- ----------------------------
INSERT INTO `ms_tools_api` VALUES ('1', '解', '在线解析接口', '0', '/t/api/stonetv/', '默笙');
INSERT INTO `ms_tools_api` VALUES ('2', '图', '在线图床', '0', '/t/api/tuchuang/', '默笙');
INSERT INTO `ms_tools_api` VALUES ('3', '天', '在线天气接口', '0', '/t/api/wether/', '默笙');

-- ----------------------------
-- Table structure for `ms_tools_bb`
-- ----------------------------
DROP TABLE IF EXISTS `ms_tools_bb`;
CREATE TABLE `ms_tools_bb` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `fw` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ms_tools_bb
-- ----------------------------
INSERT INTO `ms_tools_bb` VALUES ('1', '永久免费包更新工具包括API');
INSERT INTO `ms_tools_bb` VALUES ('2', '永久免费包升级更新BUG解决');
INSERT INTO `ms_tools_bb` VALUES ('3', '提供详细远程语音技术服务');
INSERT INTO `ms_tools_bb` VALUES ('4', '提供模板定制服务');
INSERT INTO `ms_tools_bb` VALUES ('5', '提供二开详细技术资讯');
INSERT INTO `ms_tools_bb` VALUES ('6', '一次付费终身收益');
INSERT INTO `ms_tools_bb` VALUES ('7', '允许去除所有版权');
INSERT INTO `ms_tools_bb` VALUES ('8', '仅需￥156RMB即可获得哦');

-- ----------------------------
-- Table structure for `ms_tools_game`
-- ----------------------------
DROP TABLE IF EXISTS `ms_tools_game`;
CREATE TABLE `ms_tools_game` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `yd` varchar(255) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ms_tools_game
-- ----------------------------
INSERT INTO `ms_tools_game` VALUES ('1', '2', '2048', '0', '/t/game/2048/', '默笙');
INSERT INTO `ms_tools_game` VALUES ('2', '贪', '贪吃蛇纯原生', '0', '/t/game/tcs/', '默笙');
INSERT INTO `ms_tools_game` VALUES ('3', '挖', '挖矿小游戏', '', '/t/game/wakuang', '默笙');
INSERT INTO `ms_tools_game` VALUES ('4', '一', '一个都不能死', '', '/t/game/onedie', '默笙');
INSERT INTO `ms_tools_game` VALUES ('5', '找', '找到不同的颜色', '', '/t/game/smcs', '默笙');
INSERT INTO `ms_tools_game` VALUES ('6', '飞', '飞行棋', '', '/t/game/fxq', '默笙');

-- ----------------------------
-- Table structure for `ms_tools_links`
-- ----------------------------
DROP TABLE IF EXISTS `ms_tools_links`;
CREATE TABLE `ms_tools_links` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `descc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ms_tools_links
-- ----------------------------
INSERT INTO `ms_tools_links` VALUES ('1', '小Y资源网', 'https://www.iamy.vip', '小Y资源网');
INSERT INTO `ms_tools_links` VALUES ('2', '默笙官网', 'http://www.tecms.net', '官网');
INSERT INTO `ms_tools_links` VALUES ('3', '小刀娱乐网', 'http://www.xiaodao.la', '刀网');

-- ----------------------------
-- Table structure for `ms_tools_menu`
-- ----------------------------
DROP TABLE IF EXISTS `ms_tools_menu`;
CREATE TABLE `ms_tools_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `descc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ms_tools_menu
-- ----------------------------
INSERT INTO `ms_tools_menu` VALUES ('1', '默笙官网', 'http://www.tecms.net', '官网官网大大官网');
INSERT INTO `ms_tools_menu` VALUES ('2', '小Y资源网', 'https://www.iamy.vip', '旗下资源网');
INSERT INTO `ms_tools_menu` VALUES ('4', 'QQ群', 'https://jq.qq.com/?_wv=1027&k=59ewtgo', '官方QQ群');

-- ----------------------------
-- Table structure for `ms_tools_system`
-- ----------------------------
DROP TABLE IF EXISTS `ms_tools_system`;
CREATE TABLE `ms_tools_system` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `descc` varchar(255) DEFAULT NULL,
  `t1` varchar(255) DEFAULT NULL,
  `t2` varchar(255) DEFAULT NULL,
  `t3` varchar(255) DEFAULT NULL,
  `t4` varchar(255) DEFAULT NULL,
  `t5` varchar(255) DEFAULT NULL,
  `t6` varchar(255) DEFAULT NULL,
  `ftitle` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `wx` varchar(255) DEFAULT NULL,
  `weibo` varchar(255) DEFAULT NULL,
  `footer` varchar(255) DEFAULT NULL,
  `beian` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ms_tools_system
-- ----------------------------
INSERT INTO `ms_tools_system` VALUES ('1', 'http://tools.tecms.net/', '默笙工具X', '默笙工具箱', '默笙', '分享有趣www.tecms.net', '默', '笙', '工', '具', '箱', 'X', '回归现实-发现有趣', '3494490', '3494490', '不知道', 'Copyright ', '豫ICP备17035777号-1');

-- ----------------------------
-- Table structure for `ms_tools_tool`
-- ----------------------------
DROP TABLE IF EXISTS `ms_tools_tool`;
CREATE TABLE `ms_tools_tool` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `yd` varchar(255) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ms_tools_tool
-- ----------------------------
INSERT INTO `ms_tools_tool` VALUES ('1', '短', '在线短网址生成', '0', '/t/tool/dwz/', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('2', '抖', '在线解析抖音视频', '0', '/t/tool/douyin/', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('3', '字', '在线生成3D文字', '0', '/t/tool/3dfont/', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('4', '谷', '在线谷歌搜索', '0', '/t/tool/google/', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('5', '二', '在线生成二维码', '0', '/t/tool/zxscym/', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('6', '定', '在线网贷征信查询', '0', '/t/tool/dkcx/', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('7', '加', '在线MD5加密', '', '/t/tool/md5/', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('8', '防', '在线生成防红链', '', '/t/tool/fhl/', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('9', '记', '在线生成记仇表情包', '', '/t/tool/jichou/', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('10', 'J', '在线json格式化', '', '/t/tool/json', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('11', '图', '在线图片解码编码', '', '/t/tool/imgbase64/', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('12', 'P', '在线PS工具', '', '/t/tool/photoshop', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('13', '端', '在线端口扫描', '', '/t/tool/dksm/', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('14', '鬼', '在线生成鬼畜文', '', '/t/tool/guichu', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('15', '进', '在线进制转换', '', '/t/tool/hexconvert', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('16', '文', '在线文本对比工具', '', '/t/tool/wbdb', '默笙');
INSERT INTO `ms_tools_tool` VALUES ('17', '密', '在线摩斯密码', '', '/t/tool/fumosi', '默笙');

-- ----------------------------
-- Table structure for `ms_tools_web`
-- ----------------------------
DROP TABLE IF EXISTS `ms_tools_web`;
CREATE TABLE `ms_tools_web` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `yd` varchar(255) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ms_tools_web
-- ----------------------------
INSERT INTO `ms_tools_web` VALUES ('1', '点', '点击随机话语', '0', '/t/web/click-word/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('2', '滑', '全屏滑稽', '0', '/t/web/doge/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('3', '光', '光效生成画', '0', '/t/web/gxsc/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('4', '听', '在线听音乐美化版', '0', '/t/web/mkplayer/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('5', '悦', '音悦台外链', '0', '/t/web/yinyuetai/?url=http%3A%2F%2Fv.yinyuetai.com%2Fvideo%2F3122963&submit=', '默笙');
INSERT INTO `ms_tools_web` VALUES ('6', '球', '随意小球', '0', '/t/web/qiu/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('7', '雷', '仿雷达扫描页面', '0', '/t/web/leida/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('8', '疯', '疯狂的代码', '0', '/t/web/fk-daima/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('9', '扇', '3D扇子导航', '0', '/t/web/shanzi/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('10', '迷', '迷宫', '0', '/t/web/mg/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('11', '纸', '胜利的纸牌', '0', '/t/web/winning-solitaire/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('12', '视', '打破视频吧', '0', '/t/web/h5video/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('13', '变', '变形金刚', '0', '/t/web/bxjg/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('14', '九', '九宫格解锁', '0', '/t/web/NineSquares/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('15', '整', '在线整人', '0', '/t/web/zxzr/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('16', '字', '在线动画字体', '0', '/t/web/dhzt/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('17', '百', '让我帮你百度', '0', '/t/web/baidu/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('18', '音', '在线音乐搜索', '0', '/t/web/music-master/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('20', '弹', '弹跳球', '0', '/t/web/ttq/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('21', '幕', '弹个幕吧', '0', '/t/web/dm/', '默笙');
INSERT INTO `ms_tools_web` VALUES ('22', '简', '在线简历', '', '/t/web/geren/', '默笙');

-- ----------------------------
-- Table structure for `ms_tools_webpage`
-- ----------------------------
DROP TABLE IF EXISTS `ms_tools_webpage`;
CREATE TABLE `ms_tools_webpage` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `yd` varchar(255) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ms_tools_webpage
-- ----------------------------
INSERT INTO `ms_tools_webpage` VALUES ('1', '炸', '代码爆炸效果', '0', '/t/webpage/dmbz/', '默笙');
INSERT INTO `ms_tools_webpage` VALUES ('2', '粒', '在线粒子文字', '', '/t/webpage/html5text/', '默笙');
INSERT INTO `ms_tools_webpage` VALUES ('3', '人', '模拟人坠落', '', '/t/webpage/rwzl', '默笙');
INSERT INTO `ms_tools_webpage` VALUES ('4', '4', '翻滚吧404', '', '/t/webpage/404', '默笙');

-- ----------------------------
-- Table structure for `ms_tools_wxapp`
-- ----------------------------
DROP TABLE IF EXISTS `ms_tools_wxapp`;
CREATE TABLE `ms_tools_wxapp` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `yd` varchar(255) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ms_tools_wxapp
-- ----------------------------
INSERT INTO `ms_tools_wxapp` VALUES ('1', '等', '请等待添加', '0', '#', '作者');

-- ----------------------------
-- Table structure for `ms_tools_yiyan`
-- ----------------------------
DROP TABLE IF EXISTS `ms_tools_yiyan`;
CREATE TABLE `ms_tools_yiyan` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of ms_tools_yiyan
-- ----------------------------
INSERT INTO `ms_tools_yiyan` VALUES ('1', '今天的你一定会感谢曾经努力的自己');
INSERT INTO `ms_tools_yiyan` VALUES ('2', '或许这么做是错的，但是这是我所做出的选择啊。');
INSERT INTO `ms_tools_yiyan` VALUES ('3', '知冷知热的，才是心；相守相望的，才是眼；不离不弃的，才是情；一生一世的，才是爱。');
INSERT INTO `ms_tools_yiyan` VALUES ('4', '在悲剧性的不合理世界，故事开始了。');
INSERT INTO `ms_tools_yiyan` VALUES ('5', '即使是吊车尾，在拼死努力后，也有可能超越精英。');
INSERT INTO `ms_tools_yiyan` VALUES ('6', '鹜然雪化，且静候，飞雪再临之时。');
INSERT INTO `ms_tools_yiyan` VALUES ('7', '现实原本就是最索然无味的答案，这便是真实。');
INSERT INTO `ms_tools_yiyan` VALUES ('8', '后来的我们什么都有，只是没有了我们');
INSERT INTO `ms_tools_yiyan` VALUES ('9', '一切的一切，它本身放着光芒，让你觉得世界明亮，其实跟黑暗中看不见东西的道理一样，照耀同样使你看不清四周。');
INSERT INTO `ms_tools_yiyan` VALUES ('10', '我相信你是善良的');
