/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : wordpress2

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-12-21 14:31:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wp_commentmeta
-- ----------------------------
DROP TABLE IF EXISTS `wp_commentmeta`;
CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of wp_commentmeta
-- ----------------------------

-- ----------------------------
-- Table structure for wp_comments
-- ----------------------------
DROP TABLE IF EXISTS `wp_comments`;
CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of wp_comments
-- ----------------------------

-- ----------------------------
-- Table structure for wp_links
-- ----------------------------
DROP TABLE IF EXISTS `wp_links`;
CREATE TABLE `wp_links` (
  `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of wp_links
-- ----------------------------

-- ----------------------------
-- Table structure for wp_options
-- ----------------------------
DROP TABLE IF EXISTS `wp_options`;
CREATE TABLE `wp_options` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`)
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of wp_options
-- ----------------------------
INSERT INTO `wp_options` VALUES ('1', 'siteurl', 'http://localhost/wordpress', 'yes');
INSERT INTO `wp_options` VALUES ('2', 'home', 'http://localhost/wordpress', 'yes');
INSERT INTO `wp_options` VALUES ('3', 'blogname', '测试网站', 'yes');
INSERT INTO `wp_options` VALUES ('4', 'blogdescription', '', 'yes');
INSERT INTO `wp_options` VALUES ('5', 'users_can_register', '1', 'yes');
INSERT INTO `wp_options` VALUES ('6', 'admin_email', '123456@qq.com', 'yes');
INSERT INTO `wp_options` VALUES ('7', 'start_of_week', '1', 'yes');
INSERT INTO `wp_options` VALUES ('8', 'use_balanceTags', '0', 'yes');
INSERT INTO `wp_options` VALUES ('9', 'use_smilies', '1', 'yes');
INSERT INTO `wp_options` VALUES ('10', 'require_name_email', '1', 'yes');
INSERT INTO `wp_options` VALUES ('11', 'comments_notify', '1', 'yes');
INSERT INTO `wp_options` VALUES ('12', 'posts_per_rss', '10', 'yes');
INSERT INTO `wp_options` VALUES ('13', 'rss_use_excerpt', '0', 'yes');
INSERT INTO `wp_options` VALUES ('14', 'mailserver_url', 'mail.example.com', 'yes');
INSERT INTO `wp_options` VALUES ('15', 'mailserver_login', 'login@example.com', 'yes');
INSERT INTO `wp_options` VALUES ('16', 'mailserver_pass', 'password', 'yes');
INSERT INTO `wp_options` VALUES ('17', 'mailserver_port', '110', 'yes');
INSERT INTO `wp_options` VALUES ('18', 'default_category', '1', 'yes');
INSERT INTO `wp_options` VALUES ('19', 'default_comment_status', 'open', 'yes');
INSERT INTO `wp_options` VALUES ('20', 'default_ping_status', 'open', 'yes');
INSERT INTO `wp_options` VALUES ('21', 'default_pingback_flag', '0', 'yes');
INSERT INTO `wp_options` VALUES ('22', 'posts_per_page', '10', 'yes');
INSERT INTO `wp_options` VALUES ('23', 'date_format', 'Y年n月j日', 'yes');
INSERT INTO `wp_options` VALUES ('24', 'time_format', 'ag:i', 'yes');
INSERT INTO `wp_options` VALUES ('25', 'links_updated_date_format', 'Y年n月j日ag:i', 'yes');
INSERT INTO `wp_options` VALUES ('26', 'comment_moderation', '0', 'yes');
INSERT INTO `wp_options` VALUES ('27', 'moderation_notify', '1', 'yes');
INSERT INTO `wp_options` VALUES ('28', 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes');
INSERT INTO `wp_options` VALUES ('29', 'rewrite_rules', 'a:95:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:18:\"frontend-editor/?$\";s:34:\"index.php?pagename=frontend-editor\";s:27:\"frontend-editor/([0-9]+)/?$\";s:51:\"index.php?pagename=frontend-editor&post=$matches[1]\";s:15:\"profile-edit/?$\";s:31:\"index.php?pagename=profile-edit\";s:16:\"reacted-posts/?$\";s:32:\"index.php?pagename=reacted-posts\";s:23:\"reaction/([a-zA-Z]+)/?$\";s:48:\"index.php?pagename=reaction&reaction=$matches[1]\";s:37:\"reaction/([a-zA-Z]+)/page/([0-9]+)/?$\";s:48:\"index.php?pagename=reaction&reaction=$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes');
INSERT INTO `wp_options` VALUES ('30', 'hack_file', '0', 'yes');
INSERT INTO `wp_options` VALUES ('31', 'blog_charset', 'UTF-8', 'yes');
INSERT INTO `wp_options` VALUES ('32', 'moderation_keys', '', 'no');
INSERT INTO `wp_options` VALUES ('33', 'active_plugins', 'a:2:{i:0;s:33:\"membership-by-supsystic/index.php\";i:1;s:29:\"wp-postviews/wp-postviews.php\";}', 'yes');
INSERT INTO `wp_options` VALUES ('34', 'category_base', '', 'yes');
INSERT INTO `wp_options` VALUES ('35', 'ping_sites', 'http://rpc.pingomatic.com/', 'yes');
INSERT INTO `wp_options` VALUES ('36', 'comment_max_links', '2', 'yes');
INSERT INTO `wp_options` VALUES ('37', 'gmt_offset', '0', 'yes');
INSERT INTO `wp_options` VALUES ('38', 'default_email_category', '1', 'yes');
INSERT INTO `wp_options` VALUES ('39', 'recently_edited', 'a:2:{i:0;s:64:\"D:\\xampp\\htdocs\\wordpress/wp-content/themes/press-grid/style.css\";i:2;s:0:\"\";}', 'no');
INSERT INTO `wp_options` VALUES ('40', 'template', 'press-grid', 'yes');
INSERT INTO `wp_options` VALUES ('41', 'stylesheet', 'press-grid', 'yes');
INSERT INTO `wp_options` VALUES ('42', 'comment_whitelist', '1', 'yes');
INSERT INTO `wp_options` VALUES ('43', 'blacklist_keys', '', 'no');
INSERT INTO `wp_options` VALUES ('44', 'comment_registration', '0', 'yes');
INSERT INTO `wp_options` VALUES ('45', 'html_type', 'text/html', 'yes');
INSERT INTO `wp_options` VALUES ('46', 'use_trackback', '0', 'yes');
INSERT INTO `wp_options` VALUES ('47', 'default_role', 'subscriber', 'yes');
INSERT INTO `wp_options` VALUES ('48', 'db_version', '38590', 'yes');
INSERT INTO `wp_options` VALUES ('49', 'uploads_use_yearmonth_folders', '1', 'yes');
INSERT INTO `wp_options` VALUES ('50', 'upload_path', '', 'yes');
INSERT INTO `wp_options` VALUES ('51', 'blog_public', '0', 'yes');
INSERT INTO `wp_options` VALUES ('52', 'default_link_category', '2', 'yes');
INSERT INTO `wp_options` VALUES ('53', 'show_on_front', 'posts', 'yes');
INSERT INTO `wp_options` VALUES ('54', 'tag_base', '', 'yes');
INSERT INTO `wp_options` VALUES ('55', 'show_avatars', '1', 'yes');
INSERT INTO `wp_options` VALUES ('56', 'avatar_rating', 'G', 'yes');
INSERT INTO `wp_options` VALUES ('57', 'upload_url_path', '', 'yes');
INSERT INTO `wp_options` VALUES ('58', 'thumbnail_size_w', '150', 'yes');
INSERT INTO `wp_options` VALUES ('59', 'thumbnail_size_h', '150', 'yes');
INSERT INTO `wp_options` VALUES ('60', 'thumbnail_crop', '1', 'yes');
INSERT INTO `wp_options` VALUES ('61', 'medium_size_w', '300', 'yes');
INSERT INTO `wp_options` VALUES ('62', 'medium_size_h', '300', 'yes');
INSERT INTO `wp_options` VALUES ('63', 'avatar_default', 'mystery', 'yes');
INSERT INTO `wp_options` VALUES ('64', 'large_size_w', '1024', 'yes');
INSERT INTO `wp_options` VALUES ('65', 'large_size_h', '1024', 'yes');
INSERT INTO `wp_options` VALUES ('66', 'image_default_link_type', 'file', 'yes');
INSERT INTO `wp_options` VALUES ('67', 'image_default_size', '', 'yes');
INSERT INTO `wp_options` VALUES ('68', 'image_default_align', '', 'yes');
INSERT INTO `wp_options` VALUES ('69', 'close_comments_for_old_posts', '0', 'yes');
INSERT INTO `wp_options` VALUES ('70', 'close_comments_days_old', '14', 'yes');
INSERT INTO `wp_options` VALUES ('71', 'thread_comments', '1', 'yes');
INSERT INTO `wp_options` VALUES ('72', 'thread_comments_depth', '5', 'yes');
INSERT INTO `wp_options` VALUES ('73', 'page_comments', '0', 'yes');
INSERT INTO `wp_options` VALUES ('74', 'comments_per_page', '50', 'yes');
INSERT INTO `wp_options` VALUES ('75', 'default_comments_page', 'newest', 'yes');
INSERT INTO `wp_options` VALUES ('76', 'comment_order', 'asc', 'yes');
INSERT INTO `wp_options` VALUES ('77', 'sticky_posts', 'a:0:{}', 'yes');
INSERT INTO `wp_options` VALUES ('78', 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('79', 'widget_text', 'a:0:{}', 'yes');
INSERT INTO `wp_options` VALUES ('80', 'widget_rss', 'a:0:{}', 'yes');
INSERT INTO `wp_options` VALUES ('81', 'uninstall_plugins', 'a:1:{s:33:\"membership-by-supsystic/index.php\";a:2:{i:0;s:27:\"Membership_Installer_Module\";i:1;s:11:\"onUninstall\";}}', 'no');
INSERT INTO `wp_options` VALUES ('82', 'timezone_string', 'Asia/Shanghai', 'yes');
INSERT INTO `wp_options` VALUES ('83', 'page_for_posts', '0', 'yes');
INSERT INTO `wp_options` VALUES ('84', 'page_on_front', '0', 'yes');
INSERT INTO `wp_options` VALUES ('85', 'default_post_format', '0', 'yes');
INSERT INTO `wp_options` VALUES ('86', 'link_manager_enabled', '0', 'yes');
INSERT INTO `wp_options` VALUES ('87', 'finished_splitting_shared_terms', '1', 'yes');
INSERT INTO `wp_options` VALUES ('88', 'site_icon', '0', 'yes');
INSERT INTO `wp_options` VALUES ('89', 'medium_large_size_w', '768', 'yes');
INSERT INTO `wp_options` VALUES ('90', 'medium_large_size_h', '0', 'yes');
INSERT INTO `wp_options` VALUES ('91', 'initial_db_version', '38590', 'yes');
INSERT INTO `wp_options` VALUES ('92', 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes');
INSERT INTO `wp_options` VALUES ('93', 'fresh_site', '0', 'yes');
INSERT INTO `wp_options` VALUES ('94', 'WPLANG', 'zh_CN', 'yes');
INSERT INTO `wp_options` VALUES ('95', 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('96', 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('97', 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('98', 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('99', 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('100', 'sidebars_widgets', 'a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:7:\"sidebar\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:12:\"sidebar-page\";a:0:{}s:13:\"array_version\";i:3;}', 'yes');
INSERT INTO `wp_options` VALUES ('101', 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('102', 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('103', 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('104', 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('105', 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('106', 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('107', 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('108', 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('109', 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('110', 'cron', 'a:4:{i:1513868053;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1513909221;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1513911372;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}', 'yes');
INSERT INTO `wp_options` VALUES ('111', 'theme_mods_twentyseventeen', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1513735906;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}}}}', 'yes');
INSERT INTO `wp_options` VALUES ('121', '_site_transient_timeout_browser_be27b970fa0cb03c8fff17d26a85b3f6', '1514170462', 'no');
INSERT INTO `wp_options` VALUES ('122', '_site_transient_browser_be27b970fa0cb03c8fff17d26a85b3f6', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:13:\"58.0.3029.110\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no');
INSERT INTO `wp_options` VALUES ('124', 'can_compress_scripts', '0', 'no');
INSERT INTO `wp_options` VALUES ('174', 'current_theme', 'Press-Grid', 'yes');
INSERT INTO `wp_options` VALUES ('175', 'theme_mods_press-grid', 'a:87:{i:0;b:0;s:18:\"nav_menu_locations\";a:1:{s:7:\"primary\";i:3;}s:18:\"generals_subtitle1\";s:0:\"\";s:11:\"brand-color\";s:7:\"#ff0f34\";s:11:\"color-title\";s:7:\"#000000\";s:10:\"color-text\";s:7:\"#4D4D4D\";s:12:\"color-second\";s:7:\"#E5E5E5\";s:15:\"body-background\";s:7:\"#f9f9f9\";s:16:\"content-bg-color\";s:4:\"#fff\";s:18:\"generals_subtitle2\";s:0:\"\";s:9:\"topbar-bg\";s:4:\"#fff\";s:12:\"topbar-color\";s:7:\"#343434\";s:13:\"topbar-border\";s:7:\"#e5e5e5\";s:18:\"generals_subtitle3\";s:0:\"\";s:9:\"header-bg\";s:4:\"#fff\";s:10:\"logo-color\";s:7:\"#2f363c\";s:10:\"menu-color\";s:7:\"#000000\";s:10:\"menu-hover\";s:12:\"@brand-color\";s:11:\"menu-bg-sub\";s:4:\"#fff\";s:14:\"menu-color-sub\";s:4:\"#000\";s:18:\"generals_subtitle4\";s:0:\"\";s:15:\"search-bg-color\";s:4:\"#FFF\";s:12:\"search-color\";s:4:\"#000\";s:18:\"generals_subtitle5\";s:0:\"\";s:9:\"footer-bg\";s:7:\"#0a0a0a\";s:12:\"footer-color\";s:7:\"#ffffff\";s:14:\"font_subtitle1\";s:0:\"\";s:10:\"font-title\";s:7:\"Raleway\";s:9:\"font-text\";s:6:\"Roboto\";s:11:\"font-second\";s:10:\"Montserrat\";s:14:\"font_subtitle2\";s:0:\"\";s:11:\"topbar-font\";s:7:\"Raleway\";s:9:\"logo-font\";s:7:\"Raleway\";s:9:\"menu-font\";s:7:\"Raleway\";s:11:\"footer-font\";s:10:\"Montserrat\";s:21:\"topbar_option_section\";s:0:\"\";s:13:\"topbar-height\";s:4:\"52px\";s:18:\"topbar-font-weight\";s:3:\"500\";s:16:\"topbar-font-size\";s:4:\"12px\";s:21:\"header_option_section\";s:0:\"\";s:15:\"header-bg-alpha\";s:2:\"0%\";s:13:\"header-height\";s:5:\"116px\";s:10:\"logo-width\";s:5:\"189px\";s:19:\"menu_option_section\";s:0:\"\";s:16:\"menu-font-weight\";s:3:\"600\";s:14:\"menu-font-size\";s:4:\"14px\";s:10:\"menu-space\";s:4:\"12px\";s:23:\"content_option_subtitle\";s:0:\"\";s:15:\"content_columns\";s:45:\"col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12\";s:18:\"content_human_time\";s:1:\"0\";s:17:\"content-font-size\";s:4:\"14px\";s:19:\"content-line-height\";s:4:\"28px\";s:14:\"content-margin\";s:5:\"100px\";s:18:\"content_pagination\";s:7:\"default\";s:17:\"home_slider_title\";s:0:\"\";s:11:\"home_slider\";s:1:\"0\";s:15:\"home_slider_cat\";s:0:\"\";s:24:\"content_option_subtitle1\";s:0:\"\";s:20:\"frontend_post_status\";s:5:\"draft\";s:13:\"banner_header\";s:0:\"\";s:13:\"banner_footer\";s:0:\"\";s:13:\"reaction_like\";s:0:\"\";s:19:\"reaction_like_label\";s:4:\"Like\";s:13:\"reaction_haha\";s:0:\"\";s:19:\"reaction_haha_label\";s:4:\"Haha\";s:13:\"reaction_love\";s:0:\"\";s:19:\"reaction_love_label\";s:4:\"Love\";s:12:\"reaction_sad\";s:0:\"\";s:18:\"reaction_sad_label\";s:3:\"Sad\";s:14:\"reaction_angry\";s:0:\"\";s:20:\"reaction_angry_label\";s:5:\"Angry\";s:9:\"social_fb\";s:1:\"#\";s:9:\"social_tw\";s:1:\"#\";s:9:\"social_gp\";s:1:\"#\";s:9:\"social_vm\";s:0:\"\";s:9:\"social_yt\";s:1:\"#\";s:9:\"social_in\";s:0:\"\";s:9:\"social_ln\";s:0:\"\";s:11:\"footer_logo\";s:71:\"http://localhost/wordpress/wp-content/themes/press-grid/images/logo.svg\";s:16:\"footer-font-size\";s:4:\"13px\";s:14:\"footer-padding\";s:4:\"30px\";s:17:\"copyright_content\";s:53:\"Copyright 2017 &copy; Themeton | All Rights Reserved.\";s:14:\"transport_mode\";s:7:\"refresh\";s:17:\"preloader_disable\";s:1:\"0\";s:15:\"custom_sidebars\";s:0:\"\";s:15:\"backup_settings\";s:0:\"\";s:18:\"custom_css_post_id\";i:-1;}', 'yes');
INSERT INTO `wp_options` VALUES ('176', 'theme_switched', '', 'yes');
INSERT INTO `wp_options` VALUES ('177', 'widget_themeton_nav_menu_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('178', 'widget_themeton_social_links_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('179', 'widget_themeton_recent_posts_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('180', 'widget_themeton_address_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('181', 'themeton_admin_notice', '0', 'yes');
INSERT INTO `wp_options` VALUES ('182', 'the_champ_login', 'a:1:{s:6:\"enable\";s:1:\"1\";}', 'yes');
INSERT INTO `wp_options` VALUES ('183', 'the_champ_facebook', 'a:0:{}', 'yes');
INSERT INTO `wp_options` VALUES ('184', 'the_champ_sharing', 'a:0:{}', 'yes');
INSERT INTO `wp_options` VALUES ('185', 'dismissed_update_core', 'a:1:{s:11:\"4.9.1|zh_CN\";b:1;}', 'no');
INSERT INTO `wp_options` VALUES ('187', '_transient_timeout_plugin_slugs', '1513834607', 'no');
INSERT INTO `wp_options` VALUES ('188', '_transient_plugin_slugs', 'a:3:{i:0;s:19:\"akismet/akismet.php\";i:1;s:33:\"membership-by-supsystic/index.php\";i:2;s:29:\"wp-postviews/wp-postviews.php\";}', 'no');
INSERT INTO `wp_options` VALUES ('189', 'recently_activated', 'a:0:{}', 'yes');
INSERT INTO `wp_options` VALUES ('204', 'nav_menu_options', 'a:2:{i:0;b:0;s:8:\"auto_add\";a:0:{}}', 'yes');
INSERT INTO `wp_options` VALUES ('210', 'supsystic_membership_installed_version', '1.1.25', 'yes');
INSERT INTO `wp_options` VALUES ('211', 'widget_membership_activity_widgets_popularactivities', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('212', 'widget_membership_groups_widgets_popular_groups', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('213', 'widget_membership_groups_widgets_suggestedgroups', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('214', 'supsystic_membership_reviewNotice', 'a:2:{s:4:\"time\";i:1514343927;s:5:\"shown\";b:0;}', 'yes');
INSERT INTO `wp_options` VALUES ('215', 'mbs_plug_welcome_show', '1513739128', 'yes');
INSERT INTO `wp_options` VALUES ('227', 'views_options', 'a:11:{s:5:\"count\";i:1;s:12:\"exclude_bots\";i:0;s:12:\"display_home\";i:0;s:14:\"display_single\";i:0;s:12:\"display_page\";i:0;s:15:\"display_archive\";i:0;s:14:\"display_search\";i:0;s:13:\"display_other\";i:0;s:8:\"use_ajax\";i:1;s:8:\"template\";s:18:\"%VIEW_COUNT% views\";s:20:\"most_viewed_template\";s:89:\"<li><a href=\"%POST_URL%\"  title=\"%POST_TITLE%\">%POST_TITLE%</a> - %VIEW_COUNT% views</li>\";}', 'yes');
INSERT INTO `wp_options` VALUES ('228', 'widget_views', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes');
INSERT INTO `wp_options` VALUES ('242', 'category_children', 'a:0:{}', 'yes');
INSERT INTO `wp_options` VALUES ('246', '_site_transient_timeout_theme_roots', '1513826681', 'no');
INSERT INTO `wp_options` VALUES ('247', '_site_transient_theme_roots', 'a:4:{s:10:\"press-grid\";s:7:\"/themes\";s:13:\"twentyfifteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:13:\"twentysixteen\";s:7:\"/themes\";}', 'no');
INSERT INTO `wp_options` VALUES ('248', '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:2:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:65:\"https://downloads.wordpress.org/release/zh_CN/wordpress-4.9.1.zip\";s:6:\"locale\";s:5:\"zh_CN\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:65:\"https://downloads.wordpress.org/release/zh_CN/wordpress-4.9.1.zip\";s:10:\"no_content\";b:0;s:11:\"new_bundled\";b:0;s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"4.9.1\";s:7:\"version\";s:5:\"4.9.1\";s:11:\"php_version\";s:5:\"5.2.4\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"4.7\";s:15:\"partial_version\";s:0:\"\";}i:1;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-4.9.1.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-4.9.1.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-4.9.1-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-4.9.1-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"4.9.1\";s:7:\"version\";s:5:\"4.9.1\";s:11:\"php_version\";s:5:\"5.2.4\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"4.7\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1513824886;s:15:\"version_checked\";s:5:\"4.9.1\";s:12:\"translations\";a:1:{i:0;a:7:{s:4:\"type\";s:4:\"core\";s:4:\"slug\";s:7:\"default\";s:8:\"language\";s:5:\"zh_CN\";s:7:\"version\";s:5:\"4.9.1\";s:7:\"updated\";s:19:\"2017-11-17 22:20:52\";s:7:\"package\";s:64:\"https://downloads.wordpress.org/translation/core/4.9.1/zh_CN.zip\";s:10:\"autoupdate\";b:1;}}}', 'no');
INSERT INTO `wp_options` VALUES ('249', '_site_transient_update_themes', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1513824891;s:7:\"checked\";a:4:{s:10:\"press-grid\";s:3:\"1.1\";s:13:\"twentyfifteen\";s:3:\"1.9\";s:15:\"twentyseventeen\";s:3:\"1.4\";s:13:\"twentysixteen\";s:3:\"1.4\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:1:{i:0;a:7:{s:4:\"type\";s:5:\"theme\";s:4:\"slug\";s:15:\"twentyseventeen\";s:8:\"language\";s:5:\"zh_CN\";s:7:\"version\";s:3:\"1.4\";s:7:\"updated\";s:19:\"2017-12-15 16:35:19\";s:7:\"package\";s:79:\"https://downloads.wordpress.org/translation/theme/twentyseventeen/1.4/zh_CN.zip\";s:10:\"autoupdate\";b:1;}}}', 'no');
INSERT INTO `wp_options` VALUES ('250', '_site_transient_update_plugins', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1513824888;s:8:\"response\";a:0:{}s:12:\"translations\";a:1:{i:0;a:7:{s:4:\"type\";s:6:\"plugin\";s:4:\"slug\";s:7:\"akismet\";s:8:\"language\";s:5:\"zh_CN\";s:7:\"version\";s:5:\"4.0.2\";s:7:\"updated\";s:19:\"2017-11-10 03:23:38\";s:7:\"package\";s:74:\"https://downloads.wordpress.org/translation/plugin/akismet/4.0.2/zh_CN.zip\";s:10:\"autoupdate\";b:1;}}s:9:\"no_update\";a:3:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.0.2\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.0.2.zip\";s:5:\"icons\";a:3:{s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:7:\"default\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";}s:7:\"banners\";a:2:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";s:7:\"default\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}}s:33:\"membership-by-supsystic/index.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:37:\"w.org/plugins/membership-by-supsystic\";s:4:\"slug\";s:23:\"membership-by-supsystic\";s:6:\"plugin\";s:33:\"membership-by-supsystic/index.php\";s:11:\"new_version\";s:6:\"1.1.25\";s:3:\"url\";s:54:\"https://wordpress.org/plugins/membership-by-supsystic/\";s:7:\"package\";s:66:\"https://downloads.wordpress.org/plugin/membership-by-supsystic.zip\";s:5:\"icons\";a:3:{s:2:\"1x\";s:76:\"https://ps.w.org/membership-by-supsystic/assets/icon-128x128.png?rev=1684325\";s:2:\"2x\";s:76:\"https://ps.w.org/membership-by-supsystic/assets/icon-256x256.png?rev=1734179\";s:7:\"default\";s:76:\"https://ps.w.org/membership-by-supsystic/assets/icon-256x256.png?rev=1734179\";}s:7:\"banners\";a:3:{s:2:\"2x\";s:79:\"https://ps.w.org/membership-by-supsystic/assets/banner-1544x500.png?rev=1684328\";s:2:\"1x\";s:78:\"https://ps.w.org/membership-by-supsystic/assets/banner-772x250.png?rev=1684327\";s:7:\"default\";s:79:\"https://ps.w.org/membership-by-supsystic/assets/banner-1544x500.png?rev=1684328\";}s:11:\"banners_rtl\";a:0:{}}s:29:\"wp-postviews/wp-postviews.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:26:\"w.org/plugins/wp-postviews\";s:4:\"slug\";s:12:\"wp-postviews\";s:6:\"plugin\";s:29:\"wp-postviews/wp-postviews.php\";s:11:\"new_version\";s:4:\"1.75\";s:3:\"url\";s:43:\"https://wordpress.org/plugins/wp-postviews/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/wp-postviews.1.75.zip\";s:5:\"icons\";a:2:{s:3:\"svg\";s:56:\"https://ps.w.org/wp-postviews/assets/icon.svg?rev=978002\";s:7:\"default\";s:56:\"https://ps.w.org/wp-postviews/assets/icon.svg?rev=978002\";}s:7:\"banners\";a:3:{s:2:\"2x\";s:68:\"https://ps.w.org/wp-postviews/assets/banner-1544x500.jpg?rev=1206762\";s:2:\"1x\";s:67:\"https://ps.w.org/wp-postviews/assets/banner-772x250.jpg?rev=1206762\";s:7:\"default\";s:68:\"https://ps.w.org/wp-postviews/assets/banner-1544x500.jpg?rev=1206762\";}s:11:\"banners_rtl\";a:0:{}}}}', 'no');

-- ----------------------------
-- Table structure for wp_postmeta
-- ----------------------------
DROP TABLE IF EXISTS `wp_postmeta`;
CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of wp_postmeta
-- ----------------------------
INSERT INTO `wp_postmeta` VALUES ('1', '2', '_wp_page_template', 'default');
INSERT INTO `wp_postmeta` VALUES ('5', '5', '_edit_last', '1');
INSERT INTO `wp_postmeta` VALUES ('6', '5', '_edit_lock', '1513737748:1');
INSERT INTO `wp_postmeta` VALUES ('7', '6', '_wp_attached_file', '2017/12/MADNESS.mp4');
INSERT INTO `wp_postmeta` VALUES ('8', '6', '_wp_attachment_metadata', 'a:10:{s:8:\"filesize\";i:9750364;s:9:\"mime_type\";s:9:\"video/mp4\";s:6:\"length\";i:31;s:16:\"length_formatted\";s:4:\"0:31\";s:5:\"width\";i:960;s:6:\"height\";i:540;s:10:\"fileformat\";s:3:\"mp4\";s:10:\"dataformat\";s:9:\"quicktime\";s:5:\"audio\";a:7:{s:10:\"dataformat\";s:3:\"mp4\";s:5:\"codec\";s:19:\"ISO/IEC 14496-3 AAC\";s:11:\"sample_rate\";d:48000;s:8:\"channels\";i:2;s:15:\"bits_per_sample\";i:16;s:8:\"lossless\";b:0;s:11:\"channelmode\";s:6:\"stereo\";}s:17:\"created_timestamp\";i:1491976538;}');
INSERT INTO `wp_postmeta` VALUES ('10', '5', 'enclosure', 'http://localhost/wordpress/wp-content/uploads/2017/12/MADNESS.mp4\r\n0\r\nvideo/mp4\r\n');
INSERT INTO `wp_postmeta` VALUES ('11', '8', '_wp_attached_file', '2017/12/aaeabe50f81986183fdd020a4fed2e7389d4e69c.jpg');
INSERT INTO `wp_postmeta` VALUES ('12', '8', '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:580;s:6:\"height\";i:580;s:4:\"file\";s:52:\"2017/12/aaeabe50f81986183fdd020a4fed2e7389d4e69c.jpg\";s:5:\"sizes\";a:6:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:52:\"aaeabe50f81986183fdd020a4fed2e7389d4e69c-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:52:\"aaeabe50f81986183fdd020a4fed2e7389d4e69c-300x300.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"post-thumbnail\";a:4:{s:4:\"file\";s:52:\"aaeabe50f81986183fdd020a4fed2e7389d4e69c-400x400.jpg\";s:5:\"width\";i:400;s:6:\"height\";i:400;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:23:\"press-grid-image-medium\";a:4:{s:4:\"file\";s:52:\"aaeabe50f81986183fdd020a4fed2e7389d4e69c-400x400.jpg\";s:5:\"width\";i:400;s:6:\"height\";i:400;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:29:\"press-grid-image-medium-thumb\";a:4:{s:4:\"file\";s:50:\"aaeabe50f81986183fdd020a4fed2e7389d4e69c-40x40.jpg\";s:5:\"width\";i:40;s:6:\"height\";i:40;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:22:\"press-grid-image-large\";a:4:{s:4:\"file\";s:52:\"aaeabe50f81986183fdd020a4fed2e7389d4e69c-580x480.jpg\";s:5:\"width\";i:580;s:6:\"height\";i:480;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}');
INSERT INTO `wp_postmeta` VALUES ('13', '5', '_thumbnail_id', '8');
INSERT INTO `wp_postmeta` VALUES ('15', '5', '_post_views', '18');
INSERT INTO `wp_postmeta` VALUES ('38', '11', '_menu_item_type', 'custom');
INSERT INTO `wp_postmeta` VALUES ('39', '11', '_menu_item_menu_item_parent', '0');
INSERT INTO `wp_postmeta` VALUES ('40', '11', '_menu_item_object_id', '11');
INSERT INTO `wp_postmeta` VALUES ('41', '11', '_menu_item_object', 'custom');
INSERT INTO `wp_postmeta` VALUES ('42', '11', '_menu_item_target', '');
INSERT INTO `wp_postmeta` VALUES ('43', '11', '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES ('44', '11', '_menu_item_xfn', '');
INSERT INTO `wp_postmeta` VALUES ('45', '11', '_menu_item_url', 'http://localhost/wordpress');
INSERT INTO `wp_postmeta` VALUES ('47', '11', '_menu_item_activemega', '');
INSERT INTO `wp_postmeta` VALUES ('48', '11', '_menu_item_vsubmenu', '');
INSERT INTO `wp_postmeta` VALUES ('71', '14', '_menu_item_type', 'custom');
INSERT INTO `wp_postmeta` VALUES ('72', '14', '_menu_item_menu_item_parent', '0');
INSERT INTO `wp_postmeta` VALUES ('73', '14', '_menu_item_object_id', '14');
INSERT INTO `wp_postmeta` VALUES ('74', '14', '_menu_item_object', 'custom');
INSERT INTO `wp_postmeta` VALUES ('75', '14', '_menu_item_target', '');
INSERT INTO `wp_postmeta` VALUES ('76', '14', '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES ('77', '14', '_menu_item_xfn', '');
INSERT INTO `wp_postmeta` VALUES ('78', '14', '_menu_item_url', 'http://localhost/wordpress/?orderby=comment_count');
INSERT INTO `wp_postmeta` VALUES ('80', '14', '_menu_item_activemega', '');
INSERT INTO `wp_postmeta` VALUES ('81', '14', '_menu_item_vsubmenu', '');
INSERT INTO `wp_postmeta` VALUES ('82', '15', '_menu_item_type', 'custom');
INSERT INTO `wp_postmeta` VALUES ('83', '15', '_menu_item_menu_item_parent', '0');
INSERT INTO `wp_postmeta` VALUES ('84', '15', '_menu_item_object_id', '15');
INSERT INTO `wp_postmeta` VALUES ('85', '15', '_menu_item_object', 'custom');
INSERT INTO `wp_postmeta` VALUES ('86', '15', '_menu_item_target', '');
INSERT INTO `wp_postmeta` VALUES ('87', '15', '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES ('88', '15', '_menu_item_xfn', '');
INSERT INTO `wp_postmeta` VALUES ('89', '15', '_menu_item_url', 'http://localhost/wordpress/?orderby=views');
INSERT INTO `wp_postmeta` VALUES ('91', '15', '_menu_item_activemega', '');
INSERT INTO `wp_postmeta` VALUES ('92', '15', '_menu_item_vsubmenu', '');
INSERT INTO `wp_postmeta` VALUES ('93', '16', '_menu_item_type', 'custom');
INSERT INTO `wp_postmeta` VALUES ('94', '16', '_menu_item_menu_item_parent', '0');
INSERT INTO `wp_postmeta` VALUES ('95', '16', '_menu_item_object_id', '16');
INSERT INTO `wp_postmeta` VALUES ('96', '16', '_menu_item_object', 'custom');
INSERT INTO `wp_postmeta` VALUES ('97', '16', '_menu_item_target', '');
INSERT INTO `wp_postmeta` VALUES ('98', '16', '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES ('99', '16', '_menu_item_xfn', '');
INSERT INTO `wp_postmeta` VALUES ('100', '16', '_menu_item_url', 'http://localhost/wordpress/?orderby=date');
INSERT INTO `wp_postmeta` VALUES ('102', '16', '_menu_item_activemega', '');
INSERT INTO `wp_postmeta` VALUES ('103', '16', '_menu_item_vsubmenu', '');

-- ----------------------------
-- Table structure for wp_posts
-- ----------------------------
DROP TABLE IF EXISTS `wp_posts`;
CREATE TABLE `wp_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of wp_posts
-- ----------------------------
INSERT INTO `wp_posts` VALUES ('2', '1', '2017-12-18 10:54:11', '2017-12-18 02:54:11', '这是示范页面。页面和博客文章不同，它的位置是固定的，通常会在站点导航栏显示。很多用户都创建一个“关于”页面，向访客介绍自己。例如：\n\n<blockquote>欢迎！我白天是个邮递员，晚上就是个有抱负的演员。这是我的博客。我住在天朝的帝都，有条叫做Jack的狗。</blockquote>\n\n……或这个：\n\n<blockquote>XYZ Doohickey公司成立于1971年，自从建立以来，我们一直向社会贡献着优秀doohickies。我们的公司总部位于天朝魔都，有着超过两千名员工，对魔都政府税收有着巨大贡献。</blockquote>\n\n而您，作为一个WordPress用户，我们建议您访问<a href=\"http://localhost/wordpress/wp-admin/\">控制板</a>，删除本页面，然后添加您自己的页面。祝您使用愉快！', '示例页面', '', 'publish', 'closed', 'open', '', 'sample-page', '', '', '2017-12-18 10:54:11', '2017-12-18 02:54:11', '', '0', 'http://localhost/wordpress/?page_id=2', '0', 'page', '', '0');
INSERT INTO `wp_posts` VALUES ('3', '1', '2017-12-18 10:54:22', '0000-00-00 00:00:00', '', '自动草稿', '', 'auto-draft', 'open', 'open', '', '', '', '', '2017-12-18 10:54:22', '0000-00-00 00:00:00', '', '0', 'http://localhost/wordpress/?p=3', '0', 'post', '', '0');
INSERT INTO `wp_posts` VALUES ('5', '1', '2017-12-20 10:21:18', '2017-12-20 02:21:18', '[video width=\"960\" height=\"540\" mp4=\"http://localhost/wordpress/wp-content/uploads/2017/12/MADNESS.mp4\"][/video]', 'Demo 01', '', 'publish', 'open', 'open', '', 'demo-01', '', '', '2017-12-20 10:22:16', '2017-12-20 02:22:16', '', '0', 'http://localhost/wordpress/?p=5', '0', 'post', '', '0');
INSERT INTO `wp_posts` VALUES ('6', '1', '2017-12-20 10:20:53', '2017-12-20 02:20:53', '', 'MADNESS', '', 'inherit', 'open', 'closed', '', 'madness', '', '', '2017-12-20 10:20:53', '2017-12-20 02:20:53', '', '5', 'http://localhost/wordpress/wp-content/uploads/2017/12/MADNESS.mp4', '0', 'attachment', 'video/mp4', '0');
INSERT INTO `wp_posts` VALUES ('7', '1', '2017-12-20 10:21:18', '2017-12-20 02:21:18', '[video width=\"960\" height=\"540\" mp4=\"http://localhost/wordpress/wp-content/uploads/2017/12/MADNESS.mp4\"][/video]', 'Demo 01', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2017-12-20 10:21:18', '2017-12-20 02:21:18', '', '5', 'http://localhost/wordpress/2017/12/20/5-revision-v1/', '0', 'revision', '', '0');
INSERT INTO `wp_posts` VALUES ('8', '1', '2017-12-20 10:22:09', '2017-12-20 02:22:09', '', 'aaeabe50f81986183fdd020a4fed2e7389d4e69c', '', 'inherit', 'open', 'closed', '', 'aaeabe50f81986183fdd020a4fed2e7389d4e69c', '', '', '2017-12-20 10:22:09', '2017-12-20 02:22:09', '', '5', 'http://localhost/wordpress/wp-content/uploads/2017/12/aaeabe50f81986183fdd020a4fed2e7389d4e69c.jpg', '0', 'attachment', 'image/jpeg', '0');
INSERT INTO `wp_posts` VALUES ('11', '1', '2017-12-20 11:12:15', '2017-12-20 03:12:15', '', '首页', '', 'inherit', 'closed', 'closed', '', '%e9%a6%96%e9%a1%b5', '', '', '2017-12-20 13:50:38', '2017-12-20 05:50:38', '', '0', 'http://localhost/wordpress/?p=11', '1', 'nav_menu_item', '', '0');
INSERT INTO `wp_posts` VALUES ('14', '1', '2017-12-20 11:27:56', '2017-12-20 03:27:56', '', '评论量', '', 'inherit', 'closed', 'closed', '', '%e8%af%84%e8%ae%ba%e9%87%8f', '', '', '2017-12-20 13:50:39', '2017-12-20 05:50:39', '', '0', 'http://localhost/wordpress/?p=14', '3', 'nav_menu_item', '', '0');
INSERT INTO `wp_posts` VALUES ('15', '1', '2017-12-20 11:29:17', '2017-12-20 03:29:17', '', '浏览量', '', 'inherit', 'closed', 'closed', '', '%e6%b5%8f%e8%a7%88%e9%87%8f', '', '', '2017-12-20 13:50:39', '2017-12-20 05:50:39', '', '0', 'http://localhost/wordpress/?p=15', '4', 'nav_menu_item', '', '0');
INSERT INTO `wp_posts` VALUES ('16', '1', '2017-12-20 13:50:39', '2017-12-20 05:50:39', '', '发布时间', '', 'inherit', 'closed', 'closed', '', '%e5%8f%91%e5%b8%83%e6%97%b6%e9%97%b4', '', '', '2017-12-20 13:50:39', '2017-12-20 05:50:39', '', '0', 'http://localhost/wordpress/?p=16', '2', 'nav_menu_item', '', '0');

-- ----------------------------
-- Table structure for wp_supsystic_membership_activity
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_activity`;
CREATE TABLE `wp_supsystic_membership_activity` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `type` varchar(45) NOT NULL,
  `object_id` bigint(20) unsigned DEFAULT NULL,
  `target_id` bigint(20) unsigned DEFAULT NULL,
  `data` mediumtext,
  `foreign_id` bigint(20) unsigned DEFAULT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `object_id` (`object_id`,`type`),
  KEY `user_id` (`user_id`,`type`),
  KEY `target_id` (`target_id`,`type`),
  KEY `foreign_id` (`foreign_id`),
  KEY `created_at` (`created_at`),
  KEY `type` (`type`),
  CONSTRAINT `wp_supsystic_membership_activity_ibfk_1` FOREIGN KEY (`foreign_id`) REFERENCES `wp_supsystic_membership_activity` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_activity
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_activity_images
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_activity_images`;
CREATE TABLE `wp_supsystic_membership_activity_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `activity_id` bigint(20) unsigned NOT NULL,
  `image_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `activity_id` (`activity_id`,`image_id`),
  KEY `image_id` (`image_id`),
  CONSTRAINT `wp_supsystic_membership_activity_images_ibfk_1` FOREIGN KEY (`activity_id`) REFERENCES `wp_supsystic_membership_activity` (`id`) ON DELETE CASCADE,
  CONSTRAINT `wp_supsystic_membership_activity_images_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `wp_supsystic_membership_images` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_activity_images
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_activity_links
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_activity_links`;
CREATE TABLE `wp_supsystic_membership_activity_links` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `activity_id` bigint(20) unsigned DEFAULT NULL,
  `link_id` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `activity_links_activity_id_link_id_UNIQUE` (`activity_id`,`link_id`),
  KEY `wp_supsystic_membership_activity_links_activity_id_idx` (`activity_id`),
  KEY `wp_supsystic_membership_activity_links_link_id_idx` (`link_id`),
  CONSTRAINT `wp_supsystic_membership_activity_links_activity_id` FOREIGN KEY (`activity_id`) REFERENCES `wp_supsystic_membership_activity` (`id`) ON DELETE CASCADE,
  CONSTRAINT `wp_supsystic_membership_activity_links_link_id` FOREIGN KEY (`link_id`) REFERENCES `wp_supsystic_membership_links` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_activity_links
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_activity_tags
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_activity_tags`;
CREATE TABLE `wp_supsystic_membership_activity_tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(150) DEFAULT NULL,
  `activity_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_tags_tag_activity_id` (`tag`,`activity_id`),
  KEY `activity_tags_activity_id` (`activity_id`),
  CONSTRAINT `activity_tags_activity_id` FOREIGN KEY (`activity_id`) REFERENCES `wp_supsystic_membership_activity` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_activity_tags
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_albums
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_albums`;
CREATE TABLE `wp_supsystic_membership_albums` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_albums
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_albums_images
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_albums_images`;
CREATE TABLE `wp_supsystic_membership_albums_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `album_id` bigint(20) unsigned NOT NULL,
  `image_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `album_id` (`album_id`,`image_id`),
  KEY `image_id` (`image_id`),
  CONSTRAINT `wp_supsystic_membership_albums_images_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `wp_supsystic_membership_albums` (`id`) ON DELETE CASCADE,
  CONSTRAINT `wp_supsystic_membership_albums_images_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `wp_supsystic_membership_images` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_albums_images
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_attachments
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_attachments`;
CREATE TABLE `wp_supsystic_membership_attachments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `source` text NOT NULL,
  `type` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_attachments
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_conversations
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_conversations`;
CREATE TABLE `wp_supsystic_membership_conversations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint(20) unsigned NOT NULL,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_conversations
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_conversations_users
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_conversations_users`;
CREATE TABLE `wp_supsystic_membership_conversations_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `conversation_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `conversation_state` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `conversation_id` (`conversation_id`,`user_id`),
  CONSTRAINT `wp_supsystic_membership_conversations_users_ibfk_1` FOREIGN KEY (`conversation_id`) REFERENCES `wp_supsystic_membership_conversations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_conversations_users
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_conversations_users_blocks
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_conversations_users_blocks`;
CREATE TABLE `wp_supsystic_membership_conversations_users_blocks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `blocked_user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blocked_users` (`user_id`,`blocked_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_conversations_users_blocks
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_fields
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_fields`;
CREATE TABLE `wp_supsystic_membership_fields` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `privacy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id_name` (`user_id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_fields
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_fields_data
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_fields_data`;
CREATE TABLE `wp_supsystic_membership_fields_data` (
  `field_id` bigint(20) unsigned NOT NULL,
  `data` text NOT NULL,
  KEY `field_id` (`field_id`),
  CONSTRAINT `wp_supsystic_membership_fields_data_ibfk_1` FOREIGN KEY (`field_id`) REFERENCES `wp_supsystic_membership_fields` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_fields_data
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_followers
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_followers`;
CREATE TABLE `wp_supsystic_membership_followers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `following_id` bigint(20) unsigned NOT NULL,
  `followed_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id_2` (`user_id`,`following_id`),
  KEY `user_id` (`user_id`),
  KEY `following_id` (`following_id`),
  KEY `followed_at` (`followed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_followers
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_friends
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_friends`;
CREATE TABLE `wp_supsystic_membership_friends` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `friend_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id_2` (`user_id`,`friend_id`),
  KEY `user_id` (`user_id`),
  KEY `friend_id` (`friend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_friends
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_google_maps_easy
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_google_maps_easy`;
CREATE TABLE `wp_supsystic_membership_google_maps_easy` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `maps_preset_id` int(11) NOT NULL,
  `post_id` bigint(20) unsigned DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `position` int(11) DEFAULT '0',
  `data` text,
  `date_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_wp_supsystic_membership__activity_id` (`post_id`),
  CONSTRAINT `fk_wp_supsystic_membership__activity_id` FOREIGN KEY (`post_id`) REFERENCES `wp_supsystic_membership_activity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_google_maps_easy
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_groups
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_groups`;
CREATE TABLE `wp_supsystic_membership_groups` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `alias` varchar(255) NOT NULL,
  `is_blocked` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_groups
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_groups_albums
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_groups_albums`;
CREATE TABLE `wp_supsystic_membership_groups_albums` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) unsigned NOT NULL,
  `album_id` bigint(20) unsigned NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `album_id` (`album_id`),
  CONSTRAINT `wp_supsystic_membership_groups_albums_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `wp_supsystic_membership_albums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_groups_albums
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_groups_blacklists
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_groups_blacklists`;
CREATE TABLE `wp_supsystic_membership_groups_blacklists` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `blocked_by` bigint(20) unsigned NOT NULL,
  `reason` varchar(45) DEFAULT NULL,
  `commentary` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_id` (`group_id`,`user_id`),
  CONSTRAINT `wp_supsystic_membership_groups_blacklists_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `wp_supsystic_membership_groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_groups_blacklists
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_groups_followers
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_groups_followers`;
CREATE TABLE `wp_supsystic_membership_groups_followers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `group_id` bigint(20) unsigned NOT NULL,
  `followed_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id_2` (`user_id`,`group_id`),
  KEY `user_id` (`user_id`),
  KEY `group_id` (`group_id`),
  KEY `followed_at` (`followed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_groups_followers
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_groups_images
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_groups_images`;
CREATE TABLE `wp_supsystic_membership_groups_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) unsigned NOT NULL,
  `image_id` bigint(20) unsigned NOT NULL,
  `type` varchar(45) NOT NULL,
  `crop` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_id` (`group_id`,`type`),
  KEY `image_id` (`image_id`),
  CONSTRAINT `wp_supsystic_membership_groups_images_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `wp_supsystic_membership_images` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_groups_images
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_groups_invites
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_groups_invites`;
CREATE TABLE `wp_supsystic_membership_groups_invites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `invited_by` bigint(20) unsigned NOT NULL,
  `invitation_type` varchar(45) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_id` (`group_id`,`user_id`),
  CONSTRAINT `wp_supsystic_membership_groups_invites_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `wp_supsystic_membership_groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_groups_invites
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_groups_settings
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_groups_settings`;
CREATE TABLE `wp_supsystic_membership_groups_settings` (
  `group_id` bigint(20) unsigned NOT NULL,
  `setting` varchar(45) NOT NULL,
  `value` varchar(45) NOT NULL,
  UNIQUE KEY `group_id` (`group_id`,`setting`),
  UNIQUE KEY `group_id_2` (`group_id`,`setting`),
  CONSTRAINT `wp_supsystic_membership_groups_settings_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `wp_supsystic_membership_groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_groups_settings
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_groups_tags
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_groups_tags`;
CREATE TABLE `wp_supsystic_membership_groups_tags` (
  `group_id` bigint(20) unsigned NOT NULL,
  `tag_id` bigint(20) unsigned NOT NULL,
  KEY `wp_supsystic_membership_groups_tags_ifbk_1` (`group_id`),
  KEY `wp_supsystic_membership_groups_tags_ifbk_2` (`tag_id`),
  CONSTRAINT `wp_supsystic_membership_groups_tags_ifbk_1` FOREIGN KEY (`group_id`) REFERENCES `wp_supsystic_membership_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `wp_supsystic_membership_groups_tags_ifbk_2` FOREIGN KEY (`tag_id`) REFERENCES `wp_supsystic_membership_tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_groups_tags
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_groups_users
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_groups_users`;
CREATE TABLE `wp_supsystic_membership_groups_users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `group_id` bigint(20) unsigned NOT NULL,
  `group_role` varchar(255) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_id` (`group_id`,`user_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `wp_supsystic_membership_groups_users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `wp_supsystic_membership_groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_groups_users
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_images
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_images`;
CREATE TABLE `wp_supsystic_membership_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `source` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_images
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_images_thumbnails
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_images_thumbnails`;
CREATE TABLE `wp_supsystic_membership_images_thumbnails` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image_id` bigint(20) unsigned NOT NULL,
  `source` varchar(255) NOT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `image_id` (`image_id`),
  CONSTRAINT `wp_supsystic_membership_images_thumbnails_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `wp_supsystic_membership_images` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_images_thumbnails
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_links
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_links`;
CREATE TABLE `wp_supsystic_membership_links` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `url_hash` varchar(40) NOT NULL,
  `meta` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `links_url_hash_UNIQUE` (`url_hash`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_links
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_messages
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_messages`;
CREATE TABLE `wp_supsystic_membership_messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `message` mediumtext NOT NULL,
  `author_id` bigint(20) unsigned NOT NULL,
  `conversation_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `conversation_id` (`conversation_id`),
  CONSTRAINT `wp_supsystic_membership_messages_ibfk_1` FOREIGN KEY (`conversation_id`) REFERENCES `wp_supsystic_membership_conversations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_messages
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_messages_users
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_messages_users`;
CREATE TABLE `wp_supsystic_membership_messages_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `message_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `message_state` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `message_id` (`message_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `wp_supsystic_membership_messages_users_ibfk_1` FOREIGN KEY (`message_id`) REFERENCES `wp_supsystic_membership_messages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_messages_users
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_notifications
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_notifications`;
CREATE TABLE `wp_supsystic_membership_notifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `type` varchar(45) NOT NULL,
  `target_id` bigint(20) unsigned DEFAULT NULL,
  `object_id` bigint(20) unsigned DEFAULT NULL,
  `viewed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wp_supsystic_membership_notifications_id_uindex` (`id`),
  KEY `wp_supsystic_membership_notifications_ifbk_1` (`user_id`),
  KEY `target_id` (`target_id`),
  KEY `object_id` (`object_id`),
  KEY `viewed` (`viewed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_notifications
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_photo_gallery
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_photo_gallery`;
CREATE TABLE `wp_supsystic_membership_photo_gallery` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `gallery_preset_id` bigint(20) NOT NULL,
  `post_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `position` int(11) DEFAULT '0',
  `date_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `wp_supsystic_membership_pgallery_ind1` (`post_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_photo_gallery
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_photo_gallery_images
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_photo_gallery_images`;
CREATE TABLE `wp_supsystic_membership_photo_gallery_images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `photo_gallery_id` bigint(20) NOT NULL,
  `height` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `url` varchar(1000) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `date_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `wp_supsystic_membership_pgallery_images_ind1` (`photo_gallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_photo_gallery_images
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_reports
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_reports`;
CREATE TABLE `wp_supsystic_membership_reports` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `reporter_id` bigint(20) unsigned NOT NULL,
  `reported_id` bigint(20) NOT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'new',
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reported_id` (`reported_id`),
  KEY `reporter_id` (`reporter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_reports
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_roles
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_roles`;
CREATE TABLE `wp_supsystic_membership_roles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `permissions` mediumtext NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'custom',
  `settings` mediumtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_roles
-- ----------------------------
INSERT INTO `wp_supsystic_membership_roles` VALUES ('1', 'Membership Administrator', 'a:0:{}', 'administrator', null);
INSERT INTO `wp_supsystic_membership_roles` VALUES ('2', 'Membership User', 'a:0:{}', 'subscriber', null);
INSERT INTO `wp_supsystic_membership_roles` VALUES ('3', 'Membership Guest', 'a:0:{}', '__guest__', null);

-- ----------------------------
-- Table structure for wp_supsystic_membership_settings
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_settings`;
CREATE TABLE `wp_supsystic_membership_settings` (
  `setting` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  UNIQUE KEY `setting` (`setting`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_settings
-- ----------------------------
INSERT INTO `wp_supsystic_membership_settings` VALUES ('design', 'a:6:{s:7:\"general\";a:15:{s:20:\"default-theme-colors\";s:5:\"false\";s:12:\"avatar-style\";s:5:\"round\";s:20:\"primary-button-color\";s:17:\"rgb(33, 133, 208)\";s:26:\"primary-button-hover-color\";s:17:\"rgb(25, 105, 164)\";s:25:\"primary-button-text-color\";s:18:\"rgb(255, 255, 255)\";s:22:\"secondary-button-color\";s:18:\"rgb(224, 225, 225)\";s:28:\"secondary-button-hover-color\";s:18:\"rgb(202, 203, 205)\";s:27:\"secondary-button-text-color\";s:18:\"rgba(0, 0, 0, 0.8)\";s:16:\"label-text-color\";s:19:\"rgba(0, 0, 0, 0.87)\";s:18:\"input-border-color\";s:21:\"rgba(34, 36, 38, .15)\";s:24:\"input-border-focus-color\";s:18:\"rgb(133, 183, 217)\";s:22:\"input-background-color\";s:18:\"rgb(255, 255, 255)\";s:28:\"input-background-focus-color\";s:18:\"rgb(255, 255, 255)\";s:16:\"input-text-color\";s:19:\"rgba(0, 0, 0, 0.87)\";s:23:\"input-placeholder-color\";s:19:\"rgba(0, 0, 0, 0.67)\";}s:4:\"menu\";a:2:{s:15:\"add-logout-link\";s:5:\"false\";s:25:\"remove-login-registration\";s:5:\"false\";}s:8:\"activity\";a:3:{s:11:\"show-filter\";s:4:\"true\";s:14:\"default-filter\";s:9:\"site-wide\";s:4:\"type\";a:8:{s:5:\"posts\";s:4:\"true\";s:6:\"photos\";s:4:\"true\";s:6:\"shares\";s:4:\"true\";s:5:\"likes\";s:4:\"true\";s:8:\"comments\";s:4:\"true\";s:6:\"groups\";s:4:\"true\";s:6:\"social\";s:4:\"true\";s:5:\"forum\";s:4:\"true\";}}s:7:\"profile\";a:3:{s:19:\"container-max-width\";s:4:\"100%\";s:23:\"header-background-color\";s:18:\"rgb(255, 255, 255)\";s:17:\"show-display-name\";s:4:\"true\";}s:4:\"auth\";a:10:{s:32:\"registration-primary-button-text\";s:12:\"Registration\";s:25:\"login-primary-button-text\";s:6:\"Log In\";s:22:\"login-secondary-button\";s:4:\"true\";s:27:\"login-secondary-button-text\";s:14:\"Create account\";s:26:\"login-secondary-button-url\";s:13:\"/registration\";s:22:\"login-show-remember-me\";s:4:\"true\";s:29:\"login-google-recaptcha-enable\";s:5:\"false\";s:28:\"login-google-recaptcha-theme\";s:5:\"light\";s:27:\"login-google-recaptcha-type\";s:5:\"image\";s:27:\"login-google-recaptcha-size\";s:6:\"normal\";}s:7:\"members\";a:7:{s:16:\"roles-to-display\";a:1:{i:0;s:3:\"all\";}s:21:\"show-only-with-avatar\";s:5:\"false\";s:20:\"show-only-with-cover\";s:5:\"false\";s:21:\"show-load-more-button\";s:5:\"false\";s:10:\"show-pages\";s:5:\"false\";s:13:\"sort-users-by\";s:15:\"new-users-first\";s:26:\"show-friends-and-followers\";s:4:\"true\";}}');
INSERT INTO `wp_supsystic_membership_settings` VALUES ('groups', 'a:10:{s:9:\"logo-size\";a:2:{s:5:\"width\";s:3:\"160\";s:6:\"height\";s:3:\"160\";}s:15:\"logo-large-size\";a:2:{s:5:\"width\";s:3:\"100\";s:6:\"height\";s:3:\"100\";}s:16:\"logo-medium-size\";a:2:{s:5:\"width\";s:2:\"50\";s:6:\"height\";s:2:\"50\";}s:15:\"logo-small-size\";a:2:{s:5:\"width\";s:2:\"32\";s:6:\"height\";s:2:\"32\";}s:12:\"default-logo\";s:115:\"http://localhost/wordpress/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/assets/images/group.jpg\";s:10:\"cover-size\";a:2:{s:5:\"width\";s:3:\"800\";s:6:\"height\";s:3:\"300\";}s:17:\"cover-medium-size\";a:2:{s:5:\"width\";s:3:\"399\";s:6:\"height\";s:3:\"150\";}s:16:\"cover-small-size\";a:2:{s:5:\"width\";s:3:\"300\";s:6:\"height\";s:3:\"113\";}s:13:\"default-cover\";s:121:\"http://localhost/wordpress/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/assets/images/group-cover.jpg\";s:14:\"permalink-base\";s:10:\"groupalias\";}');
INSERT INTO `wp_supsystic_membership_settings` VALUES ('mail', 'a:2:{s:6:\"emails\";a:36:{s:17:\"mail-appears-from\";s:12:\"测试网站\";s:25:\"mail-appears-from-address\";s:13:\"123456@qq.com\";s:19:\"use-html-for-emails\";s:4:\"true\";s:21:\"account-welcome-email\";s:4:\"true\";s:29:\"account-welcome-email-subject\";s:26:\"欢迎访问{site_name}！\";s:26:\"account-welcome-email-body\";s:332:\"您好，{display_name}。\n感谢注册 {site_name}!\n\n您可以访问下面的链接进行登录： \n\n<a href=\"{login_url}\">{login_url}</a>\n\n您的邮箱： {email}\n\n您的用户名： {username}\n\n您的密码： {password}\n\n如果有什么问题，请通过以下邮箱地址与我们联系：  {admin_email}\n\n谢谢！\n{site_name}\";s:24:\"account-activation-email\";s:4:\"true\";s:32:\"account-activation-email-subject\";s:21:\"请激活您的账户\";s:29:\"account-activation-email-body\";s:277:\"Thank you for signing up with {site_name}!\r\nTo activate your account, please click the link below to confirm your email address: <a href=\"{account_activation_link}\">{account_activation_link}</a>\r\nIf you have any problems, please contact us at {admin_email}\r\nThanks, {site_name}\";s:20:\"pending-review-email\";s:4:\"true\";s:28:\"pending-review-email-subject\";s:30:\"您的账户正在等待审核\";s:25:\"pending-review-email-body\";s:237:\"您好，{display_name}。\n感谢注册 {site_name}!\n您的账户正在等待审核。\n审核需要一定的时间，请耐心等待。\n有什么问题，请通过以下邮箱地址与我们联系： {admin_email}\n\n谢谢！\n {site_name}\";s:22:\"account-approved-email\";s:4:\"true\";s:30:\"account-approved-email-subject\";s:38:\"您在{site_name}的账户现已启用\";s:27:\"account-approved-email-body\";s:375:\"您好，{display_name}。\n感谢注册 {site_name}!\n您的账户已通过审核，可以正常使用了。\n您可以点击下面的链接进行登录： <a href=\"{login_url}\">{login_url}</a>\n您的邮箱： {email}\n您的用户名： {username}\n您的密码： {password}\n有什么问题，请通过以下邮箱地址与我们联系：  {admin_email}\n\n谢谢！\n {site_name}\";s:22:\"account-rejected-email\";s:4:\"true\";s:30:\"account-rejected-email-subject\";s:24:\"您的账户已被拒绝\";s:27:\"account-rejected-email-body\";s:241:\"您好， {display_name}。		 \n感谢您申请成为 {site_name} 的会员！\n我们已经审查了您的信息，不幸的是，我们目前无法接受您的会员申请。\n请随时在以后的日期再次申请。\n\n谢谢！\n {site_name}\";s:26:\"account-deactivation-email\";s:4:\"true\";s:34:\"account-deactivation-email-subject\";s:24:\"您的账户已被停用\";s:31:\"account-deactivation-email-body\";s:209:\"您好 {display_name}\n这是一封自动发送的邮件，用以告知您在 {site_name} 的账户已被禁用。\n如果您希望重新启用您的账号，请联系我们  {admin_email}\n谢谢！\n {site_name}\";s:21:\"account-deleted-email\";s:4:\"true\";s:29:\"account-deleted-email-subject\";s:24:\"您的账户已被删除\";s:26:\"account-deleted-email-body\";s:349:\"您好，{display_name}。\n这是一封自动发送的邮件，用以 通知您在{site_name} 的账户已被删除。\n您的所有个人信息都已被永久删除，并且您将无法使用这个账户登录 {site_name}.\n\n如果您的账户是被意外删除的，请通过以下邮箱地址与我们联系： {admin_email}\n\n谢谢！\n {site_name}\";s:20:\"password-reset-email\";s:4:\"true\";s:28:\"password-reset-email-subject\";s:18:\"重置您的密码\";s:25:\"password-reset-email-body\";s:281:\"您好， {display_name}。\n我们收到要重置您的密码的请求。\n如果是您请求的，请点击下面的链接修改密码：\n<a href=\"{password_reset_link}\">{password_reset_link}</a>\n\n如果您没有提交过请求，可直接忽略本邮件。\n\n谢谢！\n {site_name}\";s:22:\"password-changed-email\";s:4:\"true\";s:30:\"password-changed-email-subject\";s:32:\"您的{site_name}密码已更改\";s:27:\"password-changed-email-body\";s:365:\"您好， {display_name}。\n您最近已要求更改您在 {site_name} 的账户密码。\n要确认您的请求，请访问下面的链接： <a href=\"{password_change_url}\">{password_change_url}</a>\n如果您没有进行此更改，并且相信您的{site_name}账户已被盗用，请通过以下邮箱地址与我们联系：{admin_email}\n\n谢谢！\n {site_name}\";s:30:\"notification-friends-followers\";s:5:\"false\";s:38:\"notification-friends-followers-subject\";s:30:\"You have new {friend_follower}\";s:35:\"notification-friends-followers-body\";s:113:\"Hi {display_name}.\r\nYou have new {friend_follower}.\r\nСheck it <a target=\"_blank\" href=\"{followers_url}\">here</a>\";s:28:\"message-recieve-notification\";s:5:\"false\";s:36:\"message-recieve-notification-subject\";s:42:\"You have new message from {from_username}.\";s:33:\"message-recieve-notification-body\";s:130:\"Hi {display_name}.\r\nYou have new message from {from_username}. \r\nTo check it - go <a target=\"_blank\" href=\"{message_url}\">here</a>\";}s:13:\"notifications\";a:11:{s:23:\"messages-refresh-period\";s:1:\"7\";s:27:\"notifications-email-address\";s:13:\"123456@qq.com\";s:21:\"new-user-notification\";s:4:\"true\";s:29:\"new-user-notification-subject\";s:29:\"[{site_name}] 新用户账户\";s:26:\"new-user-notification-body\";s:220:\"{display_name} 刚刚在 {site_name} 创建了一个账户。\n点击下面的链接可查看成员信息： <a href=\"{user_profile_link}\">{user_profile_link}</a>\n以下是提交的注册表单：\n{submitted_registration}\";s:33:\"account-needs-review-notification\";s:5:\"false\";s:41:\"account-needs-review-notification-subject\";s:35:\"[{site_name}] 新用户等待审核\";s:38:\"account-needs-review-notification-body\";s:240:\"{display_name} 刚刚申请成为 {site_name}会员，正在等待您的审核。\n点击下面的链接可查看成员信息： <a href=\"{user_profile_link}\">{user_profile_link}</a>\n以下是提交的注册表单：\n{submitted_registration}\";s:29:\"account-deletion-notification\";s:5:\"false\";s:37:\"account-deletion-notification-subject\";s:29:\"[{site_name}] 账户被删除\";s:34:\"account-deletion-notification-body\";s:59:\"{display_name} 刚刚删除了他在 {site_name} 的账户.\";}}');
INSERT INTO `wp_supsystic_membership_settings` VALUES ('profile', 'a:25:{s:12:\"default-role\";s:1:\"2\";s:10:\"use-avatar\";s:3:\"yes\";s:12:\"use-gravatar\";s:3:\"yes\";s:11:\"avatar-size\";a:2:{s:5:\"width\";s:3:\"160\";s:6:\"height\";s:3:\"160\";}s:17:\"avatar-large-size\";a:2:{s:5:\"width\";s:3:\"100\";s:6:\"height\";s:3:\"100\";}s:18:\"avatar-medium-size\";a:2:{s:5:\"width\";s:2:\"50\";s:6:\"height\";s:2:\"50\";}s:17:\"avatar-small-size\";a:2:{s:5:\"width\";s:2:\"32\";s:6:\"height\";s:2:\"32\";}s:14:\"default-avatar\";s:90:\"http://localhost/wordpress/wp-content/uploads/membership/images/39/d3/9c/5a39d39c115d4.jpg\";s:20:\"default-avatar-large\";s:90:\"http://localhost/wordpress/wp-content/uploads/membership/images/d3/9c/1a/5a39d39c1ae2e.jpg\";s:21:\"default-avatar-medium\";s:90:\"http://localhost/wordpress/wp-content/uploads/membership/images/39/d3/9c/5a39d39c213c0.jpg\";s:20:\"default-avatar-small\";s:90:\"http://localhost/wordpress/wp-content/uploads/membership/images/c2/71/81/5a39d39c27181.jpg\";s:21:\"default-avatar-source\";s:98:\"http://localhost/wordpress/wp-content/uploads/2017/12/aaeabe50f81986183fdd020a4fed2e7389d4e69c.jpg\";s:24:\"default-avatar-crop-data\";s:49:\"{\"x\":0,\"y\":0,\"width\":580,\"height\":580,\"rotate\":0}\";s:9:\"use-cover\";s:3:\"yes\";s:10:\"cover-size\";a:2:{s:5:\"width\";s:4:\"1000\";s:6:\"height\";s:3:\"375\";}s:17:\"cover-medium-size\";a:2:{s:5:\"width\";s:3:\"399\";s:6:\"height\";s:3:\"150\";}s:16:\"cover-small-size\";a:2:{s:5:\"width\";s:3:\"300\";s:6:\"height\";s:3:\"113\";}s:13:\"default-cover\";s:121:\"http://localhost/wordpress/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/assets/images/group-cover.jpg\";s:20:\"default-cover-medium\";s:0:\"\";s:19:\"default-cover-small\";s:0:\"\";s:20:\"default-cover-source\";s:0:\"\";s:23:\"default-cover-crop-data\";s:0:\"\";s:14:\"permalink-base\";s:8:\"username\";s:12:\"display-name\";s:18:\"firstname-lastname\";s:25:\"registration-confirmation\";s:4:\"auto\";}');

-- ----------------------------
-- Table structure for wp_supsystic_membership_slider
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_slider`;
CREATE TABLE `wp_supsystic_membership_slider` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `slider_preset_id` bigint(20) NOT NULL,
  `post_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `position` int(11) DEFAULT '0',
  `date_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `wp_supsystic_membership_slider_ind1` (`post_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_slider
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_slider_images
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_slider_images`;
CREATE TABLE `wp_supsystic_membership_slider_images` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `slider_id` bigint(20) NOT NULL,
  `height` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `url` varchar(1000) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `date_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `wp_supsystic_membership_slider_images_ind1` (`slider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_slider_images
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_tags
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_tags`;
CREATE TABLE `wp_supsystic_membership_tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `wp_supsystic_membership_tags_id_uindex` (`id`),
  UNIQUE KEY `wp_supsystic_membership_tags_tag_uindex` (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_tags
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_users_albums
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_users_albums`;
CREATE TABLE `wp_supsystic_membership_users_albums` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `album_id` bigint(20) unsigned NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `album_id` (`album_id`),
  CONSTRAINT `wp_supsystic_membership_users_albums_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `wp_supsystic_membership_albums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_users_albums
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_users_images
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_users_images`;
CREATE TABLE `wp_supsystic_membership_users_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `image_id` bigint(20) unsigned NOT NULL,
  `type` varchar(45) NOT NULL,
  `crop` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`type`),
  KEY `image_id` (`image_id`),
  CONSTRAINT `wp_supsystic_membership_users_images_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `wp_supsystic_membership_images` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_users_images
-- ----------------------------

-- ----------------------------
-- Table structure for wp_supsystic_membership_users_roles
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_users_roles`;
CREATE TABLE `wp_supsystic_membership_users_roles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `role_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `wp_supsystic_membership_users_roles_user_id_index` (`user_id`),
  KEY `wp_supsystic_membership_users_roles_id_fk` (`role_id`),
  CONSTRAINT `wp_supsystic_membership_users_roles_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `wp_supsystic_membership_roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_users_roles
-- ----------------------------
INSERT INTO `wp_supsystic_membership_users_roles` VALUES ('1', '1', '1');

-- ----------------------------
-- Table structure for wp_supsystic_membership_users_statuses
-- ----------------------------
DROP TABLE IF EXISTS `wp_supsystic_membership_users_statuses`;
CREATE TABLE `wp_supsystic_membership_users_statuses` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `wp_supsystic_membership_users_statuses_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wp_supsystic_membership_users_statuses
-- ----------------------------
INSERT INTO `wp_supsystic_membership_users_statuses` VALUES ('1', '1', '0');

-- ----------------------------
-- Table structure for wp_termmeta
-- ----------------------------
DROP TABLE IF EXISTS `wp_termmeta`;
CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`meta_id`),
  KEY `term_id` (`term_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of wp_termmeta
-- ----------------------------
INSERT INTO `wp_termmeta` VALUES ('1', '1', '_category_color', '');

-- ----------------------------
-- Table structure for wp_terms
-- ----------------------------
DROP TABLE IF EXISTS `wp_terms`;
CREATE TABLE `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of wp_terms
-- ----------------------------
INSERT INTO `wp_terms` VALUES ('1', '绘本', 'draw', '0');
INSERT INTO `wp_terms` VALUES ('3', 'demo', 'demo', '0');

-- ----------------------------
-- Table structure for wp_term_relationships
-- ----------------------------
DROP TABLE IF EXISTS `wp_term_relationships`;
CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of wp_term_relationships
-- ----------------------------
INSERT INTO `wp_term_relationships` VALUES ('5', '1', '0');
INSERT INTO `wp_term_relationships` VALUES ('11', '3', '0');
INSERT INTO `wp_term_relationships` VALUES ('14', '3', '0');
INSERT INTO `wp_term_relationships` VALUES ('15', '3', '0');
INSERT INTO `wp_term_relationships` VALUES ('16', '3', '0');

-- ----------------------------
-- Table structure for wp_term_taxonomy
-- ----------------------------
DROP TABLE IF EXISTS `wp_term_taxonomy`;
CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of wp_term_taxonomy
-- ----------------------------
INSERT INTO `wp_term_taxonomy` VALUES ('1', '1', 'category', '', '0', '1');
INSERT INTO `wp_term_taxonomy` VALUES ('3', '3', 'nav_menu', '', '0', '4');

-- ----------------------------
-- Table structure for wp_usermeta
-- ----------------------------
DROP TABLE IF EXISTS `wp_usermeta`;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of wp_usermeta
-- ----------------------------
INSERT INTO `wp_usermeta` VALUES ('1', '1', 'nickname', 'admin');
INSERT INTO `wp_usermeta` VALUES ('2', '1', 'first_name', '');
INSERT INTO `wp_usermeta` VALUES ('3', '1', 'last_name', '');
INSERT INTO `wp_usermeta` VALUES ('4', '1', 'description', '');
INSERT INTO `wp_usermeta` VALUES ('5', '1', 'rich_editing', 'true');
INSERT INTO `wp_usermeta` VALUES ('6', '1', 'syntax_highlighting', 'true');
INSERT INTO `wp_usermeta` VALUES ('7', '1', 'comment_shortcuts', 'false');
INSERT INTO `wp_usermeta` VALUES ('8', '1', 'admin_color', 'fresh');
INSERT INTO `wp_usermeta` VALUES ('9', '1', 'use_ssl', '0');
INSERT INTO `wp_usermeta` VALUES ('10', '1', 'show_admin_bar_front', 'true');
INSERT INTO `wp_usermeta` VALUES ('11', '1', 'locale', '');
INSERT INTO `wp_usermeta` VALUES ('12', '1', 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}');
INSERT INTO `wp_usermeta` VALUES ('13', '1', 'wp_user_level', '10');
INSERT INTO `wp_usermeta` VALUES ('14', '1', 'dismissed_wp_pointers', 'theme_editor_notice');
INSERT INTO `wp_usermeta` VALUES ('15', '1', 'show_welcome_panel', '1');
INSERT INTO `wp_usermeta` VALUES ('16', '1', 'session_tokens', 'a:1:{s:64:\"c0fc3e600e36a534c1b82c6e1ad131f032638237dd14464ff443094e81de1fde\";a:4:{s:10:\"expiration\";i:1513911359;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:109:\"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36\";s:5:\"login\";i:1513738559;}}');
INSERT INTO `wp_usermeta` VALUES ('17', '1', 'wp_dashboard_quick_press_last_post_id', '3');
INSERT INTO `wp_usermeta` VALUES ('18', '1', 'community-events-location', 'a:1:{s:2:\"ip\";s:2:\"::\";}');
INSERT INTO `wp_usermeta` VALUES ('19', '1', 'wp_user-settings', 'libraryContent=browse');
INSERT INTO `wp_usermeta` VALUES ('20', '1', 'wp_user-settings-time', '1513736476');
INSERT INTO `wp_usermeta` VALUES ('21', '1', 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}');
INSERT INTO `wp_usermeta` VALUES ('22', '1', 'metaboxhidden_nav-menus', 'a:2:{i:0;s:12:\"add-post_tag\";i:1;s:15:\"add-post_format\";}');
INSERT INTO `wp_usermeta` VALUES ('23', '1', 'supsystic_membership_last_activity', '1513837324');
INSERT INTO `wp_usermeta` VALUES ('24', '1', 'supsystic_membership_tutorialShowed', '1');
INSERT INTO `wp_usermeta` VALUES ('25', '1', 'supsystic_membership_welcomePageShowed', '1');
INSERT INTO `wp_usermeta` VALUES ('26', '1', 'nav_menu_recently_edited', '3');

-- ----------------------------
-- Table structure for wp_users
-- ----------------------------
DROP TABLE IF EXISTS `wp_users`;
CREATE TABLE `wp_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`),
  KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of wp_users
-- ----------------------------
INSERT INTO `wp_users` VALUES ('1', 'admin', '$P$BA5BjDn5vNrpRU1GqslUjHkUuxlu/q.', 'admin', '123456@qq.com', '', '2017-12-18 02:54:09', '', '0', 'admin');
