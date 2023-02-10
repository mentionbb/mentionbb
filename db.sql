-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Şub 2023, 14:14:02
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sf`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_navigations`
--

CREATE TABLE `admin_navigations` (
  `nav_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `navigation_order` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `admin_navigations`
--

INSERT INTO `admin_navigations` (`nav_id`, `name`, `link`, `parent_id`, `navigation_order`, `icon`) VALUES
(1, 'main', '', 0, 100, 'fas fa-home'),
(2, 'introduction', '/', 1, 100, ''),
(3, 'settings', 'settings', 1, 200, ''),
(4, 'services', '', 1, 300, ''),
(5, 'oauth_service', 'oauth', 4, 100, ''),
(6, 'route_filters', 'route-filters', 4, 200, ''),
(7, 'censor_words', 'censor-words', 4, 300, ''),
(8, 'api', '', 1, 400, ''),
(9, 'define_api', 'api', 8, 100, ''),
(10, 'forums', '', 0, 200, 'fas fa-list'),
(11, 'add_forum', 'forums?addNode', 10, 100, ''),
(12, 'forum_list', 'forums', 10, 200, ''),
(13, 'users', '', 0, 300, 'fas fa-users'),
(15, 'page_users', 'users', 13, 200, ''),
(16, 'add_users', 'users?addUser', 13, 300, ''),
(17, 'data', '', 13, 400, ''),
(18, 'export_users', 'users?export', 17, 100, ''),
(19, 'import_users', 'users?import', 17, 200, ''),
(20, 'stats_data', '', 13, 500, ''),
(21, 'visitors', 'users?stats/visitors', 20, 100, ''),
(22, 'addons', '', 0, 400, 'fas fa-puzzle-piece'),
(23, 'addons', 'addons', 22, 100, ''),
(24, 'attachments', '', 0, 500, 'fas fa-paperclip'),
(25, 'types', 'attachments?types', 24, 100, ''),
(26, 'styles', '', 0, 600, 'fas fa-palette'),
(27, 'edit_styles', 'theme', 26, 100, ''),
(28, 'templates', 'templates', 26, 200, ''),
(72, 'newtype', 'attachments?createFileType', 24, 200, ''),
(30, 'languages', '', 0, 700, 'fas fa-language'),
(31, 'languages', 'languages', 30, 100, ''),
(32, 'sentences', 'languages?sentences', 30, 200, ''),
(33, 'search_sentences', 'languages?searchSentences', 30, 300, ''),
(34, 'edit', '', 30, 400, ''),
(35, 'new_language', 'languages?new', 34, 100, ''),
(37, 'import_languages', 'languages?import', 34, 300, ''),
(38, 'bbcodes', '', 0, 800, 'fas fa-font'),
(39, 'editor_buttons', 'editor?editorButtons', 38, 100, ''),
(40, 'bbcodes', '', 38, 200, ''),
(42, 'bbcode_media_sites', 'editor?bbcodes/mediaSites', 40, 200, ''),
(43, 'emoticons', '', 38, 300, ''),
(44, 'twemoji_settings', 'editor?twemojiSettings', 43, 100, ''),
(73, 'PHPWarnings', 'logs?PHPLogs', 63, 100, ''),
(45, 'communications', '', 0, 900, 'fas fa-envelope'),
(46, 'terms', 'pages?terms', 45, 100, ''),
(47, 'privacy', 'pages?privacy', 45, 200, ''),
(48, 'notifications', '', 45, 300, ''),
(49, 'send', 'communications?notifications/send', 48, 100, ''),
(50, 'send_all', 'communications?notifications/send-all', 48, 200, ''),
(51, 'messages', '', 45, 400, ''),
(52, 'send', 'communications?messages/send', 51, 100, ''),
(53, 'send_all', 'communications?messages/send-all', 51, 200, ''),
(54, 'mail', '', 45, 500, ''),
(55, 'send', 'communications?mails/send', 54, 100, ''),
(56, 'send_all', 'communications?mails/send-all', 54, 200, ''),
(57, 'tools', '', 0, 1000, 'fas fa-wrench'),
(58, 'cron_jobs', 'tools?cronJobs', 57, 100, ''),
(59, 'sitemap', 'tools?sitemap', 57, 200, ''),
(60, 'tests', '', 57, 400, ''),
(61, 'mail', 'tools?tests/mail', 60, 100, ''),
(62, 'file_integrity', 'tools?test/file-integrity', 60, 200, ''),
(63, 'logs', '', 0, 1100, 'fas fa-clipboard-list'),
(64, 'stats', 'logs?stats', 63, 200, ''),
(65, 'user_logs', '', 63, 200, ''),
(66, 'user_moderations', 'logs?moderations/user', 65, 100, ''),
(67, 'moderation_logs', 'logs?moderations', 65, 200, ''),
(68, 'updates', '', 57, 500, ''),
(69, 'check', 'tools?checkUpdates', 68, 100, ''),
(70, 'about_mention', 'tools?aboutMention', 68, 200, ''),
(71, 'rebuild', 'tools?rebuild', 57, 300, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `attachments`
--

CREATE TABLE `attachments` (
  `attach_id` int(11) NOT NULL,
  `filename` text NOT NULL,
  `unique_id` varchar(36) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `attachments`
--

INSERT INTO `attachments` (`attach_id`, `filename`, `unique_id`, `post_id`, `user_id`) VALUES
(5, '2 (1) (1).docx', '56754d08-f90a-4f93-820b-d6bbe333bce4', 179, 1),
(10, 'ryujinx-1.1.391-win_x64.zip', 'eadb4914-8e9a-4e61-b076-50114291e522', 277, 1),
(9, 'laser_2.zip', '2c6ce868-7853-4c3d-a8ff-dded6e27e94b', 240, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `attachment_filetypes`
--

CREATE TABLE `attachment_filetypes` (
  `type_id` int(11) NOT NULL,
  `extension` varchar(10) NOT NULL,
  `mime_type` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `attachment_filetypes`
--

INSERT INTO `attachment_filetypes` (`type_id`, `extension`, `mime_type`, `icon`, `is_active`) VALUES
(1, 'zip', 'application/zip', 'far fa-file-archive', 1),
(2, 'pdf', 'application/pdf', 'far fa-file-pdf', 1),
(3, 'txt', 'text/plain', 'far fa-file-alt', 1),
(4, 'docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'far fa-file-word', 1),
(5, 'xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'far fa-file-excel', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bbmedias`
--

CREATE TABLE `bbmedias` (
  `media_id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `bb_key` varchar(35) NOT NULL,
  `matching_url` longtext NOT NULL,
  `embed_html` longtext NOT NULL,
  `callback` varchar(150) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `bbmedias`
--

INSERT INTO `bbmedias` (`media_id`, `title`, `bb_key`, `matching_url`, `embed_html`, `callback`, `is_active`) VALUES
(1, 'YouTube', 'youtube={number}', 'youtube.com/watch?v={id}&t={number}s\nyoutube.com/watch?v={id}\nyoutube.com/shorts/{id}\nyoutube.com/shorts/{id}?feature=share\nyoutu.be/{id}?t={number}\nyoutu.be/{id}', '<iframe src=\"https://www.youtube.com/embed/{id}?start={number}\" width=\"500\" height=\"282\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '', 1),
(3, 'Spotify', 'spotify={name}', 'open.spotify.com/track/{id}\nopen.spotify.com/album/{id}\nopen.spotify.com/artist/{id}\nopen.spotify.com/user/*/playlist/{id}\nopen.spotify.com/playlist/{id}', '<iframe src=\"https://open.spotify.com/embed/{name}/{id}\" width=\"100%\" height=\"352\" frameborder=\"0\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '\\App\\Renderer\\BBCode\\Helper\\Media\\Spotify', 1),
(2, 'Dailymotion', 'dailymotion', 'dailymotion.com/video/{id}\r\ndai.ly/{id}', '<iframe src=\"https://www.dailymotion.com/embed/video/{id}?\r\nwidth=560&hideInfos=1\" width=\"560\" height=\"315\" allowfullscreen frameborder=\"0\"></iframe>', '', 1),
(4, 'Twitch', 'twitch={name}', 'twitch.tv/videos/{id}\ntwitch.tv/{id}\nclips.twitch.tv/{id}', '<iframe src=\"https://player.twitch.tv/?{name}={id}&parent={url|host}\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"true\" scrolling=\"no\"></iframe>', '\\App\\Renderer\\BBCode\\Helper\\Media\\Twitch', 1),
(5, 'Twitter', 'twitter', 'twitter.com/*/status/{id}\ntwitter.com/statuses/{id}', '<div id=\"tweet\" data-tweet-id=\"{id}\"></div>', '', 1),
(6, 'Soundcloud', 'soundcloud', 'soundcloud.com/{id}', '<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" allow=\"autoplay\" src=\"https://w.soundcloud.com/player/?url=https://soundcloud.com/{id}&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true\"></iframe>', '', 1),
(7, 'Reddit', 'reddit', 'reddit.com/r/{id}', '<blockquote class=\"reddit-card\" >\n<a href=\"https://www.reddit.com/r/{id}?ref_source=embed&amp;ref=share\"></a>\n</blockquote>\n<script async src=\"https://embed.redditmedia.com/widgets/platform.js\" charset=\"UTF-8\"></script>', '', 1),
(8, 'Steam', 'steam', 'store.steampowered.com/app/{number}/{id}/', '<iframe src=\"https://store.steampowered.com/widget/{id}\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', '', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cache_items`
--
-- sf.cache_items tablosu için yapı okuma hatası: #1932 - Table &#039;sf.cache_items&#039; doesn&#039;t exist in engine
-- sf.cache_items tablosu için veri okuma hatası: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `sf`.`cache_items`&#039; at line 1

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `censored_words`
--

CREATE TABLE `censored_words` (
  `word_list` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `censored_words`
--

INSERT INTO `censored_words` (`word_list`) VALUES
('');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `discussions`
--

CREATE TABLE `discussions` (
  `discussion_id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `is_open` int(1) NOT NULL DEFAULT 1,
  `is_sticky` int(1) NOT NULL DEFAULT 0,
  `firstpost_id` int(11) NOT NULL DEFAULT 0,
  `forum_id` int(11) NOT NULL,
  `poll_id` int(11) NOT NULL DEFAULT 0,
  `is_active` int(1) NOT NULL DEFAULT 1,
  `tags` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `discussions`
--

INSERT INTO `discussions` (`discussion_id`, `title`, `is_open`, `is_sticky`, `firstpost_id`, `forum_id`, `poll_id`, `is_active`, `tags`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 0, 0, 1, 1, 0, 1, ''),
(2, 'Deneme konu', 1, 0, 5, 1, 0, 1, ''),
(3, 'Alt forum konusu deneme', 1, 0, 6, 2, 0, 1, ''),
(4, 'BB kod deneme', 1, 0, 7, 1, 0, 1, ''),
(12, 'Bol mesajlı konu', 1, 0, 15, 1, 0, 1, ''),
(13, 'Alıntı mesaj deneme konusu', 1, 0, 37, 1, 0, 1, ''),
(15, 'awdawdawdwdawdawd', 1, 0, 47, 2, 0, 0, ''),
(16, 'deneme123123123123123123123', 1, 0, 53, 2, 0, 0, ''),
(17, 'awdwdawdawdawdaw', 1, 0, 58, 2, 0, 0, ''),
(18, 'deneme konu', 1, 0, 60, 1, 0, 0, ''),
(19, 'Resim upload test', 1, 0, 67, 1, 0, 0, ''),
(20, 'Resim upload test', 1, 0, 68, 1, 0, 0, ''),
(21, 'Resim upload test', 1, 0, 69, 1, 0, 0, ''),
(22, 'Resim upload test', 1, 0, 70, 1, 0, 0, ''),
(23, 'Resim upload test', 1, 0, 71, 1, 0, 0, ''),
(24, 'Media test', 1, 0, 73, 1, 0, 0, ''),
(25, 'Media test', 1, 0, 74, 1, 0, 1, ''),
(26, 'Twitter yerleştirme test', 1, 0, 75, 1, 0, 1, ''),
(27, 'Spotify test', 1, 0, 76, 1, 0, 1, ''),
(28, 'Soundcloud test', 1, 0, 77, 1, 0, 1, ''),
(29, 'Twitch test', 1, 0, 78, 1, 0, 1, ''),
(30, 'Link test deneme', 1, 0, 79, 1, 0, 1, ''),
(31, 'List test123123123', 1, 0, 80, 1, 0, 1, ''),
(32, 'Tablo örneği', 1, 0, 81, 1, 0, 1, ''),
(33, 'Spoiler', 1, 0, 82, 1, 0, 1, ''),
(34, 'İfadeler', 1, 0, 84, 1, 0, 1, ''),
(35, 'wadawdawdawdaw', 1, 0, 85, 1, 0, 0, ''),
(36, 'Code block', 1, 0, 89, 1, 0, 1, ''),
(37, 'Forum dışı alıntı', 1, 0, 90, 1, 0, 1, ''),
(38, 'awdawdawdawdaw', 1, 0, 91, 1, 0, 0, ''),
(39, 'Links', 1, 0, 93, 1, 0, 1, ''),
(40, 'awdwadawdawd', 1, 0, 99, 1, 0, 0, ''),
(41, 'awdawdawdawdawdawdaw', 1, 0, 101, 1, 0, 0, ''),
(42, 'esfsefsefsefse', 1, 0, 102, 1, 0, 0, ''),
(43, 'BBCode yeni', 1, 0, 106, 1, 0, 0, ''),
(44, 'Etiket test', 1, 0, 107, 1, 0, 0, '[\"Etiket\",\"test\"]'),
(45, 'deneme', 1, 0, 108, 1, 0, 0, NULL),
(46, 'Resim upload test', 1, 0, 109, 1, 0, 0, NULL),
(47, 'Resim', 1, 0, 110, 1, 0, 0, NULL),
(48, 'deneme', 1, 0, 0, 1, 0, 0, NULL),
(49, 'deneme', 1, 0, 0, 1, 0, 0, NULL),
(50, 'awdawdawdawdawd', 1, 0, 112, 1, 0, 0, NULL),
(51, 'deneme', 1, 1, 113, 1, 0, 0, NULL),
(52, 'deneme', 1, 1, 114, 1, 0, 0, NULL),
(54, 'awdawdawdawdawdaw', 1, 0, 116, 1, 0, 0, NULL),
(53, 'deneme', 0, 1, 115, 1, 0, 0, NULL),
(55, 'deneme555555', 0, 1, 117, 1, 0, 0, NULL),
(106, 'awdawdawdawdawd', 1, 0, 0, 1, 0, 0, NULL),
(56, 'awdawdawdawdwa', 1, 0, 118, 1, 0, 0, NULL),
(57, 'awdawdawda', 1, 0, 119, 1, 0, 0, NULL),
(58, 'awdawdawdawdaw', 1, 0, 120, 1, 0, 0, NULL),
(59, 'awdawdawdawdwa', 1, 0, 121, 1, 0, 0, NULL),
(60, 'awdawdawdawd', 1, 0, 122, 1, 0, 0, NULL),
(61, 'awdawdawd', 1, 0, 123, 1, 0, 0, NULL),
(62, 'awdawdawdawd', 1, 0, 124, 1, 0, 0, NULL),
(63, 'awdawdawdawdaw', 1, 0, 125, 1, 0, 0, NULL),
(64, 'awdawdawdawdawd', 1, 0, 126, 1, 0, 0, NULL),
(65, 'awdawdawdawd', 1, 0, 128, 1, 0, 0, NULL),
(66, 'wadawdawdawdaw', 1, 0, 129, 1, 0, 0, NULL),
(67, 'awdawdawdaw', 0, 1, 130, 1, 0, 0, NULL),
(68, 'awdawdawdawdawd', 1, 0, 131, 1, 0, 0, NULL),
(69, 'awdawdawdawdawdawd', 1, 0, 132, 1, 0, 0, NULL),
(70, 'awdawdawdawd', 1, 0, 133, 1, 0, 0, NULL),
(71, 'awdawdawdwa', 1, 0, 134, 1, 0, 0, NULL),
(72, 'awdawdawda', 1, 0, 135, 1, 0, 0, NULL),
(96, 'Konu eklenti test', 1, 0, 159, 1, 0, 0, NULL),
(73, 'awdawdawdawdawd', 1, 0, 136, 1, 0, 0, NULL),
(74, 'sefsefsefsef', 1, 0, 137, 1, 0, 0, NULL),
(75, 'awdawdawdawd', 1, 0, 138, 1, 0, 0, NULL),
(76, 'awdawdawd', 1, 0, 139, 1, 0, 0, NULL),
(97, 'awdawdawdawd', 1, 0, 160, 1, 0, 0, NULL),
(77, 'awdawdawdawdawd', 1, 0, 140, 1, 0, 0, NULL),
(78, 'awdawdawdawd', 1, 0, 141, 1, 0, 0, NULL),
(79, 'awdadawdawdawd', 1, 0, 142, 1, 0, 0, NULL),
(80, 'awdawdawdawd', 1, 0, 143, 1, 0, 0, NULL),
(102, 'Konu eklenti test.', 1, 0, 165, 1, 0, 0, NULL),
(81, 'awdawawdawdawdawd', 1, 0, 144, 1, 0, 0, NULL),
(98, 'awdawdawdawdawd', 1, 0, 161, 1, 0, 0, NULL),
(82, 'awdawdawdawdawd', 1, 0, 145, 1, 0, 0, NULL),
(83, 'awdawdawdawd', 1, 0, 146, 1, 0, 0, NULL),
(84, 'awdawdawdawd', 1, 0, 147, 1, 0, 0, NULL),
(85, 'awdawdawdawdawd', 1, 0, 148, 1, 0, 0, NULL),
(99, 'wadawdawdaw', 1, 0, 162, 1, 0, 0, NULL),
(86, 'awdawdaw22222', 1, 0, 149, 1, 0, 0, NULL),
(87, 'awdawdawdawd', 1, 0, 150, 1, 0, 0, NULL),
(88, '1231231231223123123', 1, 0, 151, 1, 0, 0, NULL),
(89, 'awdawdawdawd', 1, 0, 152, 1, 0, 0, NULL),
(100, 'awdawdawdawd', 1, 0, 163, 1, 0, 0, NULL),
(90, 'awdawdawdaw', 1, 0, 153, 1, 0, 0, NULL),
(91, 'awdawdawdawdawd', 1, 0, 154, 1, 0, 0, NULL),
(92, 'awdawdawdawd', 1, 0, 155, 1, 0, 0, NULL),
(93, 'awdawdawdawd', 1, 0, 156, 1, 0, 0, NULL),
(101, 'awdawdaw', 1, 0, 164, 1, 0, 0, NULL),
(94, 'awdawdawdawdaw', 1, 0, 157, 1, 0, 0, NULL),
(95, 'awdawdawdawdaw', 1, 0, 158, 1, 0, 0, NULL),
(103, 'awdawdawdawdaw', 1, 0, 167, 1, 0, 0, NULL),
(104, 'awdawdawdawd', 1, 0, 168, 1, 0, 0, NULL),
(105, 'PDF test', 1, 0, 169, 1, 0, 0, NULL),
(107, 'awdawdawdawdaw', 1, 0, 171, 1, 0, 0, NULL),
(108, 'awdawdawdawd', 1, 0, 172, 1, 0, 0, NULL),
(109, 'awdawdawdawdawd', 1, 0, 177, 1, 0, 0, NULL),
(113, 'awkjdkajwkdjajkwd', 1, 0, 181, 1, 0, 0, NULL),
(110, 'awdawdawdawd', 1, 0, 178, 1, 0, 0, NULL),
(111, 'awdawdawdawdaw', 1, 0, 179, 1, 0, 0, NULL),
(112, 'awdawdawdawdawd', 1, 0, 180, 1, 0, 0, NULL),
(114, 'awdawdawd', 1, 0, 182, 1, 0, 0, NULL),
(115, 'awdawdawdawdaw', 1, 0, 186, 1, 0, 0, NULL),
(116, 'awdawdawdawdawd', 1, 0, 202, 1, 0, 0, NULL),
(117, 'awdawdawdawdawd', 1, 0, 203, 1, 0, 0, NULL),
(118, 'awdawdawdawd', 1, 0, 205, 1, 0, 0, NULL),
(119, 'awdadawdawdawdawd', 1, 0, 207, 1, 0, 0, NULL),
(120, 'awdawdawdawdawd', 1, 0, 209, 1, 0, 0, NULL),
(121, 'awdawdawdaw', 1, 0, 212, 1, 0, 0, NULL),
(122, 'awdawdawda', 1, 0, 213, 1, 0, 0, NULL),
(123, 'kedi köpek', 1, 0, 214, 1, 0, 0, NULL),
(124, 'İığüçşö déjà σσς iıii أهلا بك', 1, 0, 215, 1, 0, 0, NULL),
(125, '!?-s*#/\\{}\'\"[]$%&|=<>^_-£', 1, 0, 216, 1, 0, 0, NULL),
(127, 'awdawdawdaw', 1, 0, 218, 1, 0, 0, NULL),
(128, 'deneme123123123', 1, 0, 220, 1, 0, 0, NULL),
(129, 'Mention BETA Programı', 1, 1, 239, 1, 0, 1, NULL),
(130, 'Yeni filepicker test', 1, 0, 242, 1, 0, 1, NULL),
(131, '1.0.13 Güncellemesi - 22.07.2022', 1, 0, 244, 1, 0, 0, NULL),
(132, '1.0.13 Güncellemesi - 22.07.2022 <div>', 1, 0, 245, 1, 0, 0, NULL),
(133, 'Reddit test', 1, 0, 246, 1, 0, 1, NULL),
(134, 'BBCode img test', 1, 0, 254, 1, 0, 1, NULL),
(135, 'Heading test', 1, 0, 256, 1, 0, 1, NULL),
(136, 'AWDAW', 1, 0, 277, 1, 0, 0, NULL),
(137, 'Steam', 1, 0, 278, 1, 0, 1, NULL),
(138, 'YouTube shorts', 1, 0, 279, 1, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `discussion_subscriptions`
--

CREATE TABLE `discussion_subscriptions` (
  `subscription_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `discussion_id` int(11) NOT NULL,
  `dateline` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `discussion_subscriptions`
--

INSERT INTO `discussion_subscriptions` (`subscription_id`, `user_id`, `discussion_id`, `dateline`) VALUES
(14, 1, 12, 1601650997);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `discussion_views`
--

CREATE TABLE `discussion_views` (
  `view_id` int(11) NOT NULL,
  `ip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `discussion_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `discussion_views`
--

INSERT INTO `discussion_views` (`view_id`, `ip`, `discussion_id`) VALUES
(1, '::1', 13),
(2, '::1', 3),
(3, '::1', 1),
(4, '::1', 12),
(5, '::1', 2),
(6, '::1', 17),
(7, '::1', 18),
(8, '::1', 19),
(9, '::1', 20),
(10, '::1', 21),
(11, '::1', 22),
(12, '::1', 23),
(13, '::1', 24),
(14, '::1', 25),
(15, '::1', 4),
(16, '::1', 26),
(17, '::1', 27),
(18, '::1', 28),
(19, '::1', 29),
(20, '::1', 30),
(21, '::1', 31),
(22, '::1', 32),
(23, '::1', 33),
(24, '::1', 34),
(25, '::1', 35),
(26, '::1', 36),
(27, '::1', 37),
(28, '::1', 38),
(29, '::1', 39),
(30, '::1', 40),
(31, '::1', 41),
(32, '::1', 42),
(33, '::1', 43),
(34, '::1', 44),
(35, '::1', 45),
(36, '::1', 46),
(37, '::1', 47),
(38, '::1', 50),
(39, '::1', 51),
(40, '::1', 52),
(41, '::1', 53),
(42, '::1', 54),
(43, '::1', 55),
(44, '::1', 56),
(45, '::1', 57),
(46, '::1', 58),
(47, '::1', 59),
(48, '::1', 60),
(49, '::1', 61),
(50, '::1', 62),
(51, '::1', 63),
(52, '::1', 64),
(53, '::1', 65),
(54, '::1', 66),
(55, '::1', 67),
(56, '::1', 68),
(57, '::1', 69),
(58, '::1', 70),
(59, '::1', 71),
(60, '::1', 95),
(61, '::1', 94),
(62, '::1', 93),
(63, '::1', 92),
(64, '::1', 91),
(65, '::1', 90),
(66, '::1', 89),
(67, '::1', 88),
(68, '::1', 87),
(69, '::1', 86),
(70, '::1', 85),
(71, '::1', 84),
(72, '::1', 83),
(73, '::1', 82),
(74, '::1', 81),
(75, '::1', 80),
(76, '::1', 79),
(77, '::1', 78),
(78, '::1', 77),
(79, '::1', 76),
(80, '::1', 75),
(81, '::1', 74),
(82, '::1', 73),
(83, '::1', 72),
(84, '::1', 96),
(85, '::1', 101),
(86, '::1', 100),
(87, '::1', 99),
(88, '::1', 98),
(89, '::1', 97),
(90, '::1', 102),
(91, '::1', 103),
(92, '::1', 104),
(93, '::1', 105),
(94, '::1', 106),
(95, '::1', 107),
(96, '::1', 108),
(97, '::1', 110),
(98, '::1', 111),
(99, '::1', 112),
(100, '::1', 109),
(101, '::1', 113),
(102, '::1', 114),
(103, '::1', 115),
(104, '::1', 116),
(105, '::1', 117),
(106, '::1', 118),
(107, '::1', 119),
(108, '::1', 120),
(109, '::1', 121),
(110, '::1', 122),
(111, '::1', 123),
(112, '::1', 124),
(113, '::1', 125),
(114, '::1', 126),
(115, '::1', 127),
(116, '::1', 128),
(117, '127.0.0.1', 1),
(118, '::1', 129),
(119, '::1', 130),
(120, '::1', 131),
(121, '::1', 132),
(122, '127.0.0.1', 129),
(123, '127.0.0.1', 130),
(124, '127.0.0.1', 43),
(125, '127.0.0.1', 25),
(126, '127.0.0.1', 39),
(127, '127.0.0.1', 33),
(128, '127.0.0.1', 37),
(129, '127.0.0.1', 34),
(130, '127.0.0.1', 36),
(131, '127.0.0.1', 3),
(132, '127.0.0.1', 31),
(133, '127.0.0.1', 30),
(134, '127.0.0.1', 29),
(135, '127.0.0.1', 28),
(136, '127.0.0.1', 27),
(137, '127.0.0.1', 26),
(138, '127.0.0.1', 133),
(139, '127.0.0.1', 13),
(140, '127.0.0.1', 4),
(141, '127.0.0.1', 12),
(142, '127.0.0.1', 32),
(143, '127.0.0.1', 134),
(144, '127.0.0.1', 135),
(145, '::1', 135),
(146, '127.0.0.1', 136),
(147, '127.0.0.1', 137),
(148, '127.0.0.1', 138);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `editor_buttons`
--

CREATE TABLE `editor_buttons` (
  `button_id` int(11) NOT NULL,
  `tag` varchar(40) NOT NULL,
  `replace_text` mediumtext NOT NULL,
  `bbcode` varchar(200) NOT NULL,
  `toolbar_id` int(11) NOT NULL,
  `is_string` int(1) NOT NULL DEFAULT 0,
  `is_single` int(1) NOT NULL DEFAULT 0,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `is_active` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `editor_buttons`
--

INSERT INTO `editor_buttons` (`button_id`, `tag`, `replace_text`, `bbcode`, `toolbar_id`, `is_string`, `is_single`, `parent_id`, `is_active`) VALUES
(1, 'example={param}', '<div>{string}</div>', '[example=Example!]{content}[/example]', 27, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `editor_toolbars`
--

CREATE TABLE `editor_toolbars` (
  `toolbar_id` int(11) NOT NULL,
  `toolbar` varchar(40) NOT NULL,
  `alias` varchar(40) NOT NULL,
  `button` varchar(30) NOT NULL,
  `icon` text NOT NULL,
  `is_editable` int(1) NOT NULL DEFAULT 0,
  `order_by` int(11) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `editor_toolbars`
--

INSERT INTO `editor_toolbars` (`toolbar_id`, `toolbar`, `alias`, `button`, `icon`, `is_editable`, `order_by`, `is_active`) VALUES
(1, 'removeformat', 'remove-formatting', 'remove-formatting', '<i class=\"fas fa-remove-format\"></i>', 0, 1, 1),
(2, 'undo', 'undo', 'undo-redo', '<i class=\"fas fa-undo\"></i>', 0, 2, 1),
(3, 'redo', 'redo', 'undo-redo', '<i class=\"fas fa-redo\"></i>', 0, 3, 1),
(4, 'bold', 'bold', 'text', '<i class=\"fas fa-bold\"></i>', 0, 4, 1),
(5, 'italic', 'italic', 'text', '<i class=\"fas fa-italic\"></i>', 0, 5, 1),
(6, 'strikethrough', 'strike-through', 'text', '<i class=\"fas fa-strikethrough\"></i>', 0, 6, 1),
(7, 'underline', 'underline', 'text', '<i class=\"fas fa-underline\"></i>', 0, 7, 1),
(8, 'forecolor', 'text-color', 'text', '<div class=\"d-flex flex-column align-items-center position-relative\"><i class=\"position-absolute fas fa-font\"></i><svg width=\"24\" height=\"24\"><g fill-rule=\"evenodd\"><path d=\"M3 18h18v3H3z\"></path></g></svg></div>', 0, 8, 1),
(9, 'backcolor', 'highlight-bg-color', 'text', '<div class=\"d-flex flex-column align-items-center position-relative\"><i class=\"position-absolute fas fa-fill-drip\"></i><svg width=\"24\" height=\"24\"><g fill-rule=\"evenodd\"><path d=\"M3 18h18v3H3z\"></path></g></svg></div>', 0, 9, 1),
(10, 'emoticons', 'emoji', 'text', '<i class=\"far fa-grin\"></i>', 0, 10, 1),
(11, 'alignleft', 'align-left', 'align', '<i class=\"fas fa-align-left\"></i>', 0, 11, 1),
(12, 'aligncenter', 'align-center', 'align', '<i class=\"fas fa-align-center\"></i>', 0, 12, 1),
(13, 'alignright', 'align-right', 'align', '<i class=\"fas fa-align-right\"></i>', 0, 13, 1),
(15, 'formatselect', '', 'text-formats', '', 0, 14, 1),
(16, 'fontselect', '', 'text-formats', '', 0, 15, 1),
(17, 'fontsizeselect', '', 'text-formats', '', 0, 16, 1),
(18, 'link', 'link', 'media', '<i class=\"fas fa-link\"></i>', 0, 17, 1),
(19, 'image', 'image', 'media', '<i class=\"fas fa-image\"></i>', 0, 18, 1),
(20, 'table', 'table', 'media', '<i class=\"fas fa-table\"></i>', 0, 19, 1),
(21, 'bullist', 'unordered-list', 'list', '<i class=\"fas fa-list-ul\"></i>', 0, 20, 1),
(22, 'numlist', 'ordered-list', 'list', '<i class=\"fas fa-list-ol\"></i>', 0, 21, 1),
(23, 'codesample', 'code-sample', 'code-sample', '<i class=\"fas fa-code\"></i>', 0, 22, 1),
(24, 'code', 'sourcecode', 'code-sample', '<i class=\"far fa-file-code\"></i>', 0, 23, 1),
(25, 'spoiler', 'spoiler', 'extra', '<i class=\"far fa-eye-slash\"></i>', 1, 24, 1),
(26, 'quoteMessage', 'quoteMessage', 'extra', '<i class=\"fas fa-quote-right\"></i>', 1, 25, 1),
(27, 'Example', 'example', 'example', '<i class=\"fas fa-external-link-alt\"></i>', 1, 1, 0),
(28, 'preview', 'preview', 'code-sample', '<i class=\"fas fa-search-plus\"></i>', 0, 26, 1),
(29, 'fullscreen', 'fullscreen', 'code-sample', '<i class=\"fas fa-maximize\"></i>', 0, 27, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `forums`
--

CREATE TABLE `forums` (
  `forum_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `forum_description` text NOT NULL,
  `icon_id` int(11) NOT NULL,
  `forum_order` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `forums`
--

INSERT INTO `forums` (`forum_id`, `parent_id`, `title`, `forum_description`, `icon_id`, `forum_order`) VALUES
(1, 0, 'Test forum', 'Yazılım test forumu', 1, 1),
(2, 1, 'Test alt forum', 'Yazılım test forumu', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `moderations`
--

CREATE TABLE `moderations` (
  `moderation_id` int(11) NOT NULL,
  `moderation_type` varchar(10) NOT NULL,
  `reason` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `operation_user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `shortcode` int(8) NOT NULL,
  `content` text NOT NULL,
  `forum_id` int(11) NOT NULL,
  `discussion_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 1,
  `lastedit_date` int(10) NOT NULL DEFAULT 0,
  `lastedit_userid` int(11) NOT NULL DEFAULT 0,
  `rating_count` int(11) NOT NULL DEFAULT 0,
  `dateline` int(10) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT 1,
  `device` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`device`))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `posts`
--

INSERT INTO `posts` (`post_id`, `shortcode`, `content`, `forum_id`, `discussion_id`, `user_id`, `parent_id`, `lastedit_date`, `lastedit_userid`, `rating_count`, `dateline`, `is_active`, `device`) VALUES
(1, 14560396, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam dolor sed efficitur sodales. Cras sit amet tincidunt lacus, nec tincidunt erat. Sed ornare in magna in mattis. Curabitur varius malesuada ipsum a tincidunt. Curabitur nec ultrices leo. Phasellus ac lectus in ex tristique tincidunt. Maecenas gravida finibus venenatis. Vivamus condimentum pharetra laoreet. Cras sed dui suscipit, tempor elit nec, luctus arcu. Proin efficitur felis vel laoreet pharetra. Sed finibus ipsum mauris. \r\n\r\nVivamus consequat erat et fringilla egestas. Curabitur justo purus, vulputate vel porta ac, dictum ac libero. Morbi quis pulvinar neque. Donec venenatis venenatis nibh, at imperdiet neque mollis in. Morbi ut ipsum pulvinar, pulvinar leo iaculis, pretium sem. Cras vel tincidunt metus. Nam sed massa urna. Morbi commodo ligula non magna placerat commodo. Curabitur sed magna vel magna luctus sagittis. Maecenas non ante sed nulla lobortis pretium ac eu risus. \r\n\r\nCras vitae cursus magna, vel imperdiet neque. Nunc ut fermentum diam. Maecenas ornare efficitur felis, sed ultricies justo rhoncus eu. Aliquam arcu odio, rhoncus et nulla id, blandit tempus ligula. Morbi ornare at ligula id semper. Sed consectetur vel dui a finibus. Proin massa sapien, sodales faucibus felis et, congue eleifend nisi. Nulla sit amet massa a sem hendrerit rutrum vel sit amet nulla. Aliquam erat volutpat. Vestibulum lectus nisi, consectetur a vehicula eu, fringilla eget purus. Nulla egestas felis justo, ac varius sapien porttitor nec. Fusce sed ultricies mauris, ut lacinia velit. Sed faucibus, elit ut posuere posuere, sapien ipsum luctus tortor, a dictum erat lacus a eros. Pellentesque quis libero vel neque molestie tincidunt. In ut magna eu ex commodo faucibus. In dui eros, efficitur at volutpat in, elementum eu urna.', 1, 1, 1, 0, 1654621315, 1, 0, 1593428116, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(2, 19465239, 'Mauris accumsan tempor posuere. Maecenas iaculis dictum nisl, sed feugiat nisl aliquam et. In rutrum metus mauris, ut aliquet mauris eleifend ac. Etiam rhoncus ligula nec convallis venenatis. Fusce vestibulum diam non elit volutpat, quis efficitur leo dapibus. Proin vel augue eu turpis malesuada commodo. Vivamus egestas nisi quis leo facilisis ornare ac ut ex. Sed a sodales nunc. Nullam sagittis fermentum augue tristique gravida. Nunc metus eros, feugiat quis hendrerit et, rhoncus vel augue. Vivamus tincidunt elit sed nisi vestibulum, sed luctus enim laoreet. Duis faucibus congue est et laoreet. \n\nFusce a libero a eros sagittis ornare. In hac habitasse platea dictumst. Donec sit amet metus vitae libero tincidunt tempus. Quisque vitae elit feugiat urna porta rhoncus. Nulla elit justo, fermentum vel pharetra id, tristique imperdiet diam. Pellentesque sollicitudin, quam id sagittis iaculis, justo ipsum ullamcorper urna, sit amet maximus ligula dolor a lacus. Fusce quis luctus nisi, nec condimentum urna. Maecenas a est et metus accumsan bibendum. Ut in massa non elit bibendum sollicitudin vel id libero. Ut vel nunc cursus, mattis tellus eget, feugiat nibh. Nam maximus purus faucibus, luctus sapien ac, efficitur nulla. Aenean non leo convallis sem sollicitudin consectetur finibus non erat. Donec aliquam non ipsum efficitur mattis. Donec fringilla ac erat sit amet tincidunt. Mauris tristique felis vel laoreet eleifend. Pellentesque ac eros mauris.', 1, 1, 1, 0, 1618339058, 1, 0, 1593721490, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(5, 16264933, 'Bu konu editör vasıtasıyla site üzerinden açılmıştır.', 1, 2, 1, 0, 1596206236, 1, 0, 1594056441, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(3, 13398520, 'awdawdawdawdawdawdawdawdawdawdawdawdawdawdawdawd', 1, 1, 1, 0, 0, 0, 0, 1594065216, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(4, 56550115, '123123123123123123123123123123123123123123123123', 1, 1, 1, 0, 1654620992, 1, 0, 1594065933, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(6, 14095476, 'deneme mesaj 20karakter20karakter1245678910111213141567', 2, 3, 1, 0, 1597151356, 1, 0, 1594128321, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(7, 18270040, 'Bu konu bb kod deneme konusudur. [heading=2]Başlık[/heading]\r\n[align=left][size= 36pt][b]Sol[/b][/size][/align]\r\n\r\n\r\n\r\n\r\n\r\n[align=center][size= 36pt][b]Orta[/b][/size][/align]\r\n\r\n\r\n\r\n\r\n\r\n[align=right][size= 36pt][b]Sağ[/b][/size][/align]\r\n\r\n\r\n\r\n[b]Kalın[/b] [i]İtalik[/i] [u]Altı çizili[/u] [b][u][i]Hepsi[/i][/u][/b] [color=#e67e23]Renkli[/color] [u][i][b][color=#e67e23; text-decoration: underline]Renkli hepsi[/color][/b][/i][/u] [url=http://localhost/mention/]Link[/url] 😄😎\r\n\r\n[youtube]0HVet3RH-6Q[/youtube]\r\n[list=disc]\r\n[li]a[/li]\r\n[li]b[/li]\r\n[li]c[/li]\r\n[/list]\r\n[list=decimal]\r\n[li]a[/li]\r\n[li]b[/li]\r\n[li]c[/li]\r\n[/list]', 1, 4, 1, 0, 1674053359, 1, 0, 1594303282, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(14, 39081011, 'Bu mesaj editör ile konu içinden yazılmıştır.', 1, 2, 1, 0, 0, 0, 0, 1594646916, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(15, 97580400, 'Bol mesajlı konudur.(20)', 1, 12, 1, 0, 0, 0, 0, 1594853457, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(16, 42029579, '1\n \n(20202020202020)', 1, 12, 1, 0, 0, 0, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(17, 42029579, '2  \n\n(20202020202020)', 1, 12, 1, 0, 1596204999, 1, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(18, 42029579, '3\r\n \r\n(20202020202020)', 1, 12, 1, 0, 0, 0, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(19, 42029579, '4\r\n \r\n(20202020202020)', 1, 12, 1, 0, 0, 0, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(20, 42029579, '5\r\n \r\n(20202020202020)', 1, 12, 1, 0, 0, 0, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(21, 42029579, '6\r\n \r\n(20202020202020)', 1, 12, 1, 0, 0, 0, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(22, 42029579, '7\r\n \r\n(20202020202020)', 1, 12, 1, 0, 0, 0, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(23, 42029579, '8\r\n \r\n(20202020202020)', 1, 12, 1, 0, 0, 0, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(24, 42029579, '9\r\n \r\n(20202020202020)', 1, 12, 1, 0, 0, 0, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(25, 42029579, '10\r\n \r\n(20202020202020)', 1, 12, 1, 0, 0, 0, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(26, 42029579, '11\r\n \r\n(20202020202020)', 1, 12, 1, 0, 0, 0, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(27, 42029579, '12\r\n \r\n(20202020202020)', 1, 12, 1, 0, 0, 0, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(28, 42029579, '13\r\n \r\n(20202020202020)', 1, 12, 1, 0, 0, 0, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(29, 42029579, '14\r\n \r\n(20202020202020)', 1, 12, 1, 0, 0, 0, 0, 1594853482, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(36, 76523589, 'Bildirim test. (20 karakter)', 2, 3, 2, 0, 0, 0, 0, 1595778641, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(37, 91616907, 'Mesaja alıntı deneme konusu.', 1, 13, 1, 1, 1673963930, 1, 0, 1597138008, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(38, 90744793, '[post-quote]37[/post-quote]\nDeneme cevap.', 1, 13, 1, 1, 0, 0, 0, 1597138027, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(39, 67463511, '[post-quote]37[/post-quote]\nDeneme cevap.', 1, 13, 1, 1, 0, 0, 0, 1597138138, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(40, 28734446, 'awdawdawdawdawdawdawdawd', 1, 13, 1, 1, 0, 0, 0, 1597140831, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(41, 20320986, '[post-quote]37[/post-quote]d', 1, 13, 1, 1, 0, 0, 0, 1597140875, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(42, 55000893, '[post-quote]37[/post-quote]\nDeneme alıntı.', 1, 13, 2, 1, 0, 0, 0, 1597140963, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Android\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"mobile\",\"model\":\"Redmi Note 8\"}'),
(43, 38389375, 'awdawadawdawdawdawdawdawd', 2, 3, 1, 1, 0, 0, 0, 1597143557, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(44, 26673150, '[post-quote]42[/post-quote]\nCevabın cevabı.', 1, 13, 1, 1, 0, 0, 0, 1597144986, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(46, 45436557, 'asdasdasdasdasdasdasd', 1, 13, 1, 1, 0, 0, 0, 1598280027, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(47, 65120242, 'awdawdawdawdaawdawdawda12312121', 2, 15, 1, 1, 1598792132, 1, 0, 1598791987, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(75, 85551304, '[twitter]463440424141459456[/twitter]', 1, 26, 1, 1, 1640609832, 1, 0, 1612914202, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.146\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(48, 59089009, '1231231231233333333333333333333333', 1, 13, 1, 1, 0, 0, 0, 1598918957, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(49, 95371950, 'awdawdawdawdawdawdawdawdawda', 1, 13, 1, 1, 0, 0, 0, 1598918980, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(50, 16448767, '123132212312312312312312313', 1, 13, 1, 1, 0, 0, 0, 1598919116, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(51, 96720746, 'awdawdawdawdawdawdawdawdawda', 1, 13, 1, 1, 0, 0, 0, 1598919291, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(52, 80583397, 'silme deneme......................................', 1, 13, 1, 1, 0, 0, 0, 1598919320, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(53, 35061186, 'awdawdawdawdawdawdawdawdawdawdawdaw', 2, 16, 1, 1, 0, 0, 0, 1598919414, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.83\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(54, 56826237, '12312adwadawdadawdrdrgdrgdrg', 1, 13, 1, 1, 0, 0, 0, 1601476912, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.121\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(55, 69418684, 'wdwadawdawdawd1231231313', 1, 13, 1, 1, 0, 0, 0, 1601477033, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.121\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(56, 14168839, 'dasdasdasdasdasd23123123123', 1, 13, 1, 1, 0, 0, 0, 1601477051, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.121\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(57, 83206807, 'awdawdawdawdawdawdawdawdawdawd', 1, 13, 1, 1, 0, 0, 0, 1601477130, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"85.0.4183.121\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(58, 62840589, 'awdawdawdawdawdawdawdawdawda', 2, 17, 1, 1, 0, 0, 0, 1602892310, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"86.0.4240.75\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(59, 88439985, 'dajkwdjkakwdklawldaawdawdawdawda', 1, 13, 1, 1, 0, 0, 0, 1607966262, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"87.0.4280.88\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(60, 43587733, 'awdklawkldaşlwdşplawşdlalşwdlşaşlwdşlawd', 1, 18, 1, 1, 0, 0, 0, 1607966277, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"87.0.4280.88\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(61, 36376790, '@Demo;\nawdawdawdawdawdawdawdawdawdawda', 1, 13, 1, 1, 1608165696, 1, 0, 1608165658, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"87.0.4280.88\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(62, 29159355, '[color=#3598db][b]@Demo;[/b][/color] Kullanıcı etiket test.', 1, 13, 1, 1, 1608214926, 1, 0, 1608214808, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"87.0.4280.88\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(63, 72212858, '[color=#3598db][b]@Demo;[/b][/color] \nKullanıcı etiket test.', 1, 13, 1, 1, 0, 0, 0, 1608214993, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"87.0.4280.88\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(64, 37123770, '[color=#3598db][b]@Demo;[/b][/color]<span> awdawdawdawdawd</span>', 1, 13, 1, 1, 0, 0, 0, 1608216886, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"87.0.4280.88\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(65, 58649288, '[color=#3598db][b]@Demo;[/b][/color]\nawdawdawdawda', 1, 13, 1, 1, 0, 0, 0, 1608217092, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"87.0.4280.88\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(66, 68596886, '[color=#3598db][b]@Demo;[/b][/color]\nKullanıcı etiket test.', 1, 13, 1, 1, 1618439782, 1, 0, 1608217150, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"87.0.4280.88\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(67, 64869414, '[img]public/uploads/attachments/images/1608475310_41736665.jpg[/img]...........................................', 1, 19, 1, 1, 0, 0, 0, 1608475339, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"87.0.4280.88\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(68, 90014906, '[img]public/uploads/attachments/images/1608477261_44126375.jpg[/img]...........................................................', 1, 20, 1, 1, 0, 0, 0, 1608477282, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"87.0.4280.88\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(69, 85617880, '[img]public/editor/1608477394_80977468.jpg[/img]...............................................', 1, 21, 1, 1, 0, 0, 0, 1608477611, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"87.0.4280.88\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(70, 52741418, '[img]public/editor/1608650930_92640495.jpg[/img]...............................................', 1, 22, 1, 1, 0, 0, 0, 1608650949, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"87.0.4280.88\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(71, 90749753, '[img=manzara]../../public/editor/1608652199_47824281.jpg[/img]....................................', 1, 23, 1, 1, 1615120481, 1, 0, 1608652219, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"87.0.4280.88\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(72, 36115312, 'https://www.youtube.com/watch?v=l9i-0AX5sdo', 1, 23, 1, 1, 1612566185, 1, 0, 1612566175, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.146\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(73, 76765239, '[youtube]jB3C9w3jw3E[/youtube]\n[dailymotion]x7yy41u[/dailymotion]', 1, 24, 1, 1, 1612717479, 1, 0, 1612713959, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.146\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(74, 78695879, '[youtube]vwfe-KQJwNc[/youtube]\n\n[dailymotion]x7yy41u[/dailymotion]', 1, 25, 1, 1, 1640623163, 1, 0, 1612726558, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.146\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(76, 24246226, '[spotify=playlist]0x1rlDOobe9ITkiiPburca[/spotify]\r\n \r\n[spotify=track]05UMQXFCsa9oPnLgfJHVyF[/spotify]', 1, 27, 1, 1, 1673963452, 1, 0, 1613131797, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.150\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(77, 52917410, '[soundcloud]gazapizm-music/unutulacak-duenler[/soundcloud]', 1, 28, 1, 1, 1640609707, 1, 0, 1613132598, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.150\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(78, 50404111, '[twitch=channel]eastergamerstv[/twitch]', 1, 29, 1, 1, 1640609801, 1, 0, 1613223237, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.150\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(79, 79344213, '[url=https://regex101.com/]https://regex101.com/[/url]', 1, 30, 1, 1, 1614797959, 1, 0, 1613919271, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.182\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(80, 41268312, '[list=disc]\n[li]awdawdawd[/li]\n[li]w[/li]\n[li]d[/li]\n[li]aw[/li]\n[li]da[/li]\n[li]wd[/li]\n[li]a[/li]\n[li]wd[/li]\n[li]aw[/li]\n[li]d[/li]\n[/list]\n \n[list=decimal]\n[li]awdawdawd[/li]\n[li]aw[/li]\n[li]da[/li]\n[li]d[/li]\n[li]aw[/li]\n[li]da[/li]\n[li]w[/li]\n[li]daw[/li]\n[li]d[/li]\n[/list]', 1, 31, 1, 1, 1618337260, 1, 0, 1614373589, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.190\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(81, 13029363, '[table=border-collapse: collapse; width: 99.811%; height: 84px;border=1]\n\n[tr]\n[td=width: 9.77453%; height: 21px;][background=#ba372a; color: #f1c40f]awdawdaw[/background][/td]\n[td=width: 9.77453%; height: 21px;]dawda[/td]\n[td=width: 9.77453%; height: 21px;]wdawd[/td]\n[td=width: 9.77453%; height: 21px;]awdawda[/td]\n[td=width: 9.77453%; height: 21px;]wdawd[/td]\n[td=width: 9.77453%; height: 21px;]awda[/td]\n[td=width: 9.77453%; height: 21px;]wdaw[/td]\n[td=width: 9.86922%; height: 21px;]dawdawda[/td]\n[td=width: 9.86922%; height: 21px;]wadawd[/td]\n[/tr]\n[tr]\n[td=width: 9.77453%; height: 21px;]awd[/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.86922%; height: 21px;] [/td]\n[td=width: 9.86922%; height: 21px;] [/td]\n[/tr]\n[tr]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.86922%; height: 21px;] [/td]\n[td=width: 9.86922%; height: 21px;] [/td]\n[/tr]\n[tr]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.77453%; height: 21px;] [/td]\n[td=width: 9.86922%; height: 21px;] [/td]\n[td=width: 9.86922%; height: 21px;] [/td]\n[/tr]\n\n[/table]', 1, 32, 1, 1, 1616462980, 1, 0, 1614383450, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.190\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(82, 30942858, '[spoiler=BB spoiler test]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat ex, lacinia in cursus sed, venenatis sit amet mi. Fusce lacus tortor, eleifend lobortis diam ac, interdum hendrerit dolor. Suspendisse potenti. Praesent rhoncus ullamcorper massa, placerat rhoncus tellus convallis sit amet. Praesent volutpat orci ac nunc vehicula, tempor posuere justo ornare. Phasellus risus urna, imperdiet sit amet hendrerit a, maximus eu nulla. Pellentesque ac libero luctus, molestie urna ac, molestie urna. Vestibulum et libero eu neque varius molestie. Pellentesque ornare eget magna eget euismod. Cras et lobortis risus. In libero erat, tincidunt ac leo a, mollis vestibulum ipsum. Fusce tristique arcu nec dignissim tristique. Ut gravida ante at dignissim sollicitudin. Fusce eget mi rutrum, tincidunt eros vel, scelerisque quam. Sed pellentesque convallis quam sed gravida. Ut sollicitudin nisl enim, id elementum ipsum interdum sit amet.[/spoiler]', 1, 33, 1, 1, 1614862394, 1, 0, 1614604841, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.190\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(83, 22200783, 'Mauris accumsan tempor posuere. Maecenas iaculis dictum nisl, sed feugiat nisl aliquam et. In rutrum metus mauris, ut aliquet mauris eleifend ac. Etiam rhoncus ligula nec convallis venenatis. Fusce vestibulum diam non elit volutpat, quis efficitur leo dapibus. Proin vel augue eu turpis malesuada commodo. Vivamus egestas nisi quis leo facilisis ornare ac ut ex. Sed a sodales nunc. Nullam sagittis fermentum augue tristique gravida. Nunc metus eros, feugiat quis hendrerit et, rhoncus vel augue. Vivamus tincidunt elit sed nisi vestibulum, sed luctus enim laoreet. Duis faucibus congue est et laoreet.\n\nFusce a libero a eros sagittis ornare. In hac habitasse platea dictumst. Donec sit amet metus vitae libero tincidunt tempus. Quisque vitae elit feugiat urna porta rhoncus. Nulla elit justo, fermentum vel pharetra id, tristique imperdiet diam. Pellentesque sollicitudin, quam id sagittis iaculis, justo ipsum ullamcorper urna, sit amet maximus ligula dolor a lacus. Fusce quis luctus nisi, nec condimentum urna. Maecenas a est et metus accumsan bibendum. Ut in massa non elit bibendum sollicitudin vel id libero. Ut vel nunc cursus, mattis tellus eget, feugiat nibh. Nam maximus purus faucibus, luctus sapien ac, efficitur nulla. Aenean non leo convallis sem sollicitudin consectetur finibus non erat. Donec aliquam non ipsum efficitur mattis. Donec fringilla ac erat sit amet tincidunt. Mauris tristique felis vel laoreet eleifend. Pellentesque ac eros mauris.', 1, 1, 1, 1, 0, 0, 0, 1614623260, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.190\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(84, 12955984, '💯 😋 🤩 🙄 🤭 🤮 😍 😜 😃 😄 İfade test. Merhaba 🙂', 1, 34, 1, 1, 1674054609, 1, 0, 1614729991, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.190\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(85, 47283999, ' 🙂 😛 😉 🙂', 1, 35, 1, 1, 0, 0, 0, 1614862164, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.190\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(86, 68026757, '[post-quote]71[/post-quote]\nawdawdawdawdawd', 1, 23, 1, 1, 0, 0, 0, 1615120490, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.190\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(87, 34013621, '[post-quote]71[/post-quote]', 1, 23, 1, 1, 0, 0, 0, 1615160134, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.190\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(88, 61174697, '[post-quote]71[/post-quote]', 1, 23, 1, 1, 0, 0, 0, 1615160967, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.190\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(89, 91137178, '[code=twig]{% if mention is defined %} awd {% endif %}[/code]\n[code=php]<?php echo \'Mention\' ?>[/code]\n[code=markup]<div class=\"index\">[/code]', 1, 36, 1, 1, 1615216924, 1, 0, 1615205246, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.190\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(90, 13846562, '[quote]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquam dolor sed efficitur sodales. Cras sit amet tincidunt lacus, nec tincidunt erat. Sed ornare in magna in mattis. Curabitur varius malesuada ipsum a tincidunt. Curabitur nec ultrices leo. Phasellus ac lectus in ex tristique tincidunt. Maecenas gravida finibus venenatis. Vivamus condimentum pharetra laoreet. Cras sed dui suscipit, tempor elit nec, luctus arcu. Proin efficitur felis vel laoreet pharetra. Sed finibus ipsum mauris. \r\n\r\nVivamus consequat erat et fringilla egestas. Curabitur justo purus, vulputate vel porta ac, dictum ac libero. Morbi quis pulvinar neque. Donec venenatis venenatis nibh, at imperdiet neque mollis in. Morbi ut ipsum pulvinar, pulvinar leo iaculis, pretium sem. Cras vel tincidunt metus. Nam sed massa urna. Morbi commodo ligula non magna placerat commodo. Curabitur sed magna vel magna luctus sagittis. Maecenas non ante sed nulla lobortis pretium ac eu risus. \r\n\r\nCras vitae cursus magna, vel imperdiet neque. Nunc ut fermentum diam. Maecenas ornare efficitur felis, sed ultricies justo rhoncus eu. Aliquam arcu odio, rhoncus et nulla id, blandit tempus ligula. Morbi ornare at ligula id semper. Sed consectetur vel dui a finibus. Proin massa sapien, sodales faucibus felis et, congue eleifend nisi. Nulla sit amet massa a sem hendrerit rutrum vel sit amet nulla. Aliquam erat volutpat. Vestibulum lectus nisi, consectetur a vehicula eu, fringilla eget purus. Nulla egestas felis justo, ac varius sapien porttitor nec. Fusce sed ultricies mauris, ut lacinia velit. Sed faucibus, elit ut posuere posuere, sapien ipsum luctus tortor, a dictum erat lacus a eros. Pellentesque quis libero vel neque molestie tincidunt. In ut magna eu ex commodo faucibus. In dui eros, efficitur at volutpat in, elementum eu urna.[/quote]', 1, 37, 1, 1, 1673962066, 1, 0, 1615299322, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.190\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(91, 71142627, 'awdwadawdawdawd', 1, 38, 1, 1, 0, 0, 0, 1615329204, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"88.0.4324.190\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(92, 58222949, 'awdawdawdawdawd', 1, 37, 2, 1, 0, 0, 0, 1615675212, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.82\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(93, 59368293, '[url=https://regex101.com/]https://regex101.com/[/url] \n[url=https://xenforo.com/community/threads/xenforo-2-2-4-and-add-on-updates-released.192261/#post-1505517]https://xenforo.com/community/threads/xenforo-2-2-4-and-add-on-updates-released.192261/#post-1505517[/url]', 1, 39, 1, 1, 1641145382, 1, 0, 1615765282, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.82\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(94, 38796897, '[url=https://www.sporx.com/]https://www.sporx.com/[/url]', 1, 39, 1, 1, 1615832230, 1, 0, 1615832096, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.82\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(95, 14631932, '[url=https://petabayt.net]https://petabayt.net[/url]', 1, 39, 1, 1, 0, 0, 0, 1615832902, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.82\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(96, 89441583, '[url=../../]http://localhost/mention[/url]', 1, 39, 1, 1, 0, 0, 0, 1615839948, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.82\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(97, 30158663, '[url=http://localhost/mention/d/39-links/]http://localhost/mention/d/39-links[/url]', 1, 39, 1, 1, 1615840370, 1, 0, 1615840058, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.82\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(98, 65246414, '[url=http://petabayt.net]http://petabayt.net[/url]', 1, 39, 1, 1, 0, 0, 0, 1616025452, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(99, 33169721, '[img=]../../public/editor/1616070415_68278790.jpg[/img]\nawdawdawdaw', 1, 40, 1, 1, 1616070428, 1, 0, 1616069972, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(100, 46775678, '[img=]../../public/editor/1616070499_68950634.gif[/img]\n \nswdawdawdawdawd', 1, 40, 1, 1, 0, 0, 0, 1616070508, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(101, 58923467, 'wadawdawdawdawdawdawd\n \n[img=]http://localhost/mention/public/editor/1616071208_44058103.jpg[/img]', 1, 41, 1, 1, 0, 0, 0, 1616071233, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(102, 68634898, 'wadawdawdawd12', 1, 42, 1, 1, 1616071858, 1, 0, 1616071847, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(103, 34353939, 'awdawdawdawdawd', 1, 42, 1, 1, 0, 0, 0, 1616071854, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(104, 88821998, 'zsczsczsczsczsczsczs', 1, 37, 1, 1, 0, 0, 0, 1616157541, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(105, 59067419, 'awdawdawdawdawdawdawd', 1, 37, 2, 1, 0, 0, 0, 1616158041, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(106, 28879656, '[background=#34495e; color: #fbeeb8][b][i][s][u]awdawdawdawdawdawdawdaw23245678910234567981112[/u][/s][/i][/b][/background]', 1, 43, 1, 1, 1623812556, 1, 0, 1616445288, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(107, 26544170, 'awdawdawdawdawd', 1, 44, 1, 1, 0, 0, 0, 1616767201, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(108, 29029570, 'awdawdawdawdawdawd', 1, 45, 1, 1, 0, 0, 0, 1616768875, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(109, 62964396, 'awdawdawdawdawdawdwad\n \n[img=]http://localhost/mention/public/editor/1617031805_47512297.gif[/img]\n\n[img=asd]http://localhost/mention/public/editor/1617029813_33475735.jpg[/img]', 1, 46, 1, 1, 1617031808, 1, 0, 1617029831, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(110, 17144870, 'awdawdawdawdawdawd\n\n[img=başlık]http://localhost/mention/public/editor/1617032613_64746877.jpg[/img]', 1, 47, 1, 1, 1617037254, 1, 0, 1617032625, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(111, 64709183, '[img=awd]https://mention.paranteztr.com/public/editor/1615120156_12933373.png[/img]\n \ndeneme.......................', 1, 47, 1, 1, 0, 0, 0, 1617037400, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(112, 38659557, 'awdawdawdawdawd', 1, 50, 1, 1, 0, 0, 0, 1617054375, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(113, 56963602, 'awdawdawdawdawd', 1, 51, 1, 1, 0, 0, 0, 1617054388, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(114, 80334070, 'awdawdawdawdawdawd', 1, 52, 1, 1, 0, 0, 0, 1617054404, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}');
INSERT INTO `posts` (`post_id`, `shortcode`, `content`, `forum_id`, `discussion_id`, `user_id`, `parent_id`, `lastedit_date`, `lastedit_userid`, `rating_count`, `dateline`, `is_active`, `device`) VALUES
(115, 29384049, 'awdawdawdawdawdawd', 1, 53, 1, 1, 0, 0, 0, 1617054452, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(116, 51409467, 'wdawdawdawdawdawd', 1, 54, 1, 1, 0, 0, 0, 1617054488, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(117, 74327052, 'awdawdawdawdawdaw', 1, 55, 1, 1, 0, 0, 0, 1617055374, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.90\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(118, 19235347, '[youtube]hyPnLpRBZBE[/youtube]', 1, 56, 1, 1, 0, 0, 0, 1618008162, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(119, 16706375, 'wdawdawdawdawdawd', 1, 57, 1, 1, 0, 0, 0, 1618326465, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(120, 32466538, 'awdawdawdawdawdawd', 1, 58, 1, 1, 0, 0, 0, 1618326534, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(121, 79785629, 'awdwadawdawdawdawd', 1, 59, 1, 1, 0, 0, 0, 1618326561, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(122, 20127330, 'wdawdawdawdaw', 1, 60, 1, 1, 0, 0, 0, 1618326883, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(123, 74840115, 'wdawdawdawd', 1, 61, 1, 1, 0, 0, 0, 1618327535, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(124, 89305375, 'wdawdawdawd', 1, 62, 1, 1, 0, 0, 0, 1618327616, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(125, 69550977, 'awdawdadawd', 1, 63, 1, 1, 0, 0, 0, 1618327964, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(126, 53615371, 'awdawdawdawd', 1, 64, 1, 1, 0, 0, 0, 1618328035, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(127, 92992653, 'awdawdawdawd', 1, 43, 1, 1, 0, 0, 0, 1618330202, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(128, 37457821, 'awdawdawdaw', 1, 65, 1, 1, 0, 0, 0, 1618330247, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(129, 11353216, 'awdawdawdawd', 1, 66, 1, 1, 0, 0, 0, 1618332214, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(130, 77048815, 'awdawdawdawdawd', 1, 67, 1, 1, 0, 0, 0, 1618332229, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(131, 50107889, 'awdawdawdawd', 1, 68, 1, 1, 0, 0, 0, 1618332377, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(132, 10794400, 'wdawdawdawd', 1, 69, 1, 1, 0, 0, 0, 1618332724, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(133, 44595113, 'awdawdawdawd', 1, 70, 1, 1, 0, 0, 0, 1618332836, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(134, 80490544, 'awdawdawdaawdad', 1, 71, 1, 1, 0, 0, 0, 1618332860, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(135, 19944435, 'awdawdawdawd', 1, 72, 1, 1, 0, 0, 0, 1618332904, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(136, 71350989, 'awdawdawdawd', 1, 73, 1, 1, 0, 0, 0, 1618333021, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(137, 69217886, 'awdawdawdawd', 1, 74, 1, 1, 0, 0, 0, 1618333064, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(138, 69922559, 'awdawdawdawd', 1, 75, 1, 1, 0, 0, 0, 1618333270, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(139, 90321700, 'awdawdawdawdwa', 1, 76, 1, 1, 0, 0, 0, 1618333314, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(140, 42556008, 'awdawdawdawdawd', 1, 77, 1, 1, 0, 0, 0, 1618333447, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(141, 66283180, 'awdawdawdawda', 1, 78, 1, 1, 0, 0, 0, 1618333479, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(142, 95603952, 'awdawdawdawdaw', 1, 79, 1, 1, 0, 0, 0, 1618333538, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(143, 21698174, 'awdawdawdaw', 1, 80, 1, 1, 0, 0, 0, 1618333587, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(144, 36965124, 'awdawdawdawdawd', 1, 81, 1, 1, 0, 0, 0, 1618333613, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(145, 89863586, 'wdawdawdawdawd', 1, 82, 1, 1, 0, 0, 0, 1618333663, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(146, 61100776, 'awdawdawdawdaw', 1, 83, 1, 1, 0, 0, 0, 1618334007, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(147, 25843786, 'awdawdawdawdawdaw', 1, 84, 1, 1, 0, 0, 0, 1618334076, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(148, 77342587, 'awdawdawdawdawd', 1, 85, 1, 1, 0, 0, 0, 1618334218, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(149, 29636785, 'wdawdawdawd', 1, 86, 1, 1, 0, 0, 0, 1618334282, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(150, 22193355, 'wdawdawdawd', 1, 87, 1, 1, 0, 0, 0, 1618334448, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(151, 42729204, 'wdawdawdawdawdawd', 1, 88, 1, 1, 0, 0, 0, 1618334513, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(152, 80645807, 'wdawdawdawdawd', 1, 89, 1, 1, 0, 0, 0, 1618334649, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(153, 12509832, 'dawdawdawdawd', 1, 90, 1, 1, 0, 0, 0, 1618334977, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(154, 40916899, 'wdawdawdawd', 1, 91, 1, 1, 0, 0, 0, 1618335021, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(155, 26218783, 'awdawdawdawdawd', 1, 92, 1, 1, 0, 0, 0, 1618335117, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(156, 92006183, 'awdawdawdawd', 1, 93, 1, 1, 0, 0, 0, 1618335205, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(157, 62816814, 'awdawdawdaw', 1, 94, 1, 1, 0, 0, 0, 1618335241, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(158, 18214272, 'awdawdawdawd', 1, 95, 1, 1, 0, 0, 0, 1618335264, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(159, 47302461, 'Konu eklenti (attachment) test.', 1, 96, 1, 1, 0, 0, 0, 1618335545, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(160, 96108292, 'Konu eklenti (attachment) test.', 1, 97, 1, 1, 0, 0, 0, 1618335731, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(161, 19915653, 'Konu eklenti (attachment) test.', 1, 98, 1, 1, 0, 0, 0, 1618335746, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(162, 50934343, 'Konu eklenti (attachment) test.awdawdawdaw', 1, 99, 1, 1, 0, 0, 0, 1618336007, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(163, 24325388, 'awdawdawdawd', 1, 100, 1, 1, 0, 0, 0, 1618336080, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(164, 80572981, 'wdawdawdadwadawd', 1, 101, 1, 1, 0, 0, 0, 1618336151, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(165, 28554042, 'Konu eklenti (attachment) test.', 1, 102, 1, 1, 1618617715, 1, 0, 1618336284, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(166, 57612204, 'awdawdawdawdawd', 1, 102, 1, 1, 1618336722, 1, 0, 1618336715, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(167, 39815329, 'awdawdawdawd', 1, 103, 1, 1, 0, 0, 0, 1618348624, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(168, 39098605, 'awdawdawdawdawd', 1, 104, 1, 1, 0, 0, 0, 1618351149, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(169, 92364830, 'PDF upload test.', 1, 105, 1, 1, 1618414743, 1, 0, 1618414627, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(170, 74533172, 'awdawdawdawdawd', 1, 106, 1, 1, 0, 0, 0, 1618442055, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(171, 70000491, 'awdawdawdawdawd', 1, 107, 1, 1, 0, 0, 0, 1618442224, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(172, 89711372, 'wdawdadawdawd', 1, 108, 1, 1, 0, 0, 0, 1618442491, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(173, 38871268, 'awdawdawdawdawd', 1, 102, 1, 1, 0, 0, 0, 1618535373, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(174, 66324823, 'Test attachment.', 1, 102, 1, 1, 0, 0, 0, 1618535395, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(175, 66037919, 'test attachment.', 1, 102, 1, 1, 0, 0, 0, 1618535629, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(176, 82983698, 'awdawdawdawdawdaw', 1, 102, 1, 1, 1618616158, 1, 0, 1618616138, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(177, 88115604, 'awdawdawdawdawdawd', 1, 109, 1, 1, 0, 0, 0, 1618671953, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(178, 69994023, 'awdawdawdawd', 1, 110, 1, 1, 0, 0, 0, 1618671981, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(179, 97525101, 'awdawdawdawdaw', 1, 111, 1, 1, 0, 0, 0, 1618671996, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(180, 96306900, 'awdawdawdawdawd', 1, 112, 1, 1, 1618672250, 1, 0, 1618672213, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(181, 48204604, '[s][i][b]wajhdawjkdkjawkldawdawd[/b][/i][/s]', 1, 113, 1, 1, 0, 0, 0, 1618689772, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(182, 91151592, 'dawdawdawdwdawdaw', 1, 114, 1, 1, 0, 0, 0, 1618689984, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(183, 66939542, '[youtube]RUDQ2-WoN9o[/youtube]', 1, 114, 1, 1, 0, 0, 0, 1618690160, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(184, 97706249, '[url=https://www.webtekno.com/]https://www.webtekno.com/[/url]', 1, 114, 1, 1, 0, 0, 0, 1618690191, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(185, 22727844, '[url=https://xenforo.com/community/]https://xenforo.com/community/[/url]', 1, 114, 1, 1, 0, 0, 0, 1618690220, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"89.0.4389.128\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(186, 71159381, '[img=]http://localhost/mention/public/editor/1624274423_20417871.png[/img]\n \nawdadawdawd', 1, 115, 1, 1, 0, 0, 0, 1624274431, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.106\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(187, 19770885, '[img=]blob:http://localhost/6af8e51a-9bac-41f7-ad80-47973b575a65[/img]\n \nawdawdawdawdawdawd', 1, 43, 1, 1, 0, 0, 0, 1624276854, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.106\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(188, 83695687, '<img src=\"http://localhost/mention/public/editor/1624278315_65115245.png\" width=\"370\" height=\"208\" />\n \nawdawdawdawdawda', 1, 43, 1, 1, 0, 0, 0, 1624278337, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.106\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(189, 54586998, '[img=]http://localhost/mention/public/editor/1624278382_43651621.png[/img]\n \nawdawdawdawdawd', 1, 43, 1, 1, 0, 0, 0, 1624278387, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.106\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(190, 37871069, '[url=http://localhost/mention]http://localhost/mention[/url]', 1, 43, 1, 1, 0, 0, 0, 1624894989, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(191, 31344397, '[url=https://www.itirafname.com/d/28-raki-keyfi]https://www.itirafname.com/d/28-raki-keyfi[/url]', 1, 43, 1, 1, 0, 0, 0, 1624895208, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(192, 57629654, '[url=https://awd.com]https://awd.com[/url]', 1, 43, 1, 1, 0, 0, 0, 1624898212, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(193, 62214384, '[url=https://mention.paranteztr.com/d/28-hayirli-olsun/92]https://mention.paranteztr.com/d/28-hayirli-olsun/92[/url]', 1, 43, 1, 1, 0, 0, 0, 1624898686, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(194, 67797279, '[url=https://mention.paranteztr.com/d/28-hayirli-olsun/92]https://mention.paranteztr.com/d/28-hayirli-olsun/92[/url]', 1, 43, 1, 1, 0, 0, 0, 1624898709, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(195, 23017631, '[url=https://mention.paranteztr.com/d/28-hayirli-olsun/92]https://mention.paranteztr.com/d/28-hayirli-olsun/92[/url]', 1, 43, 1, 1, 0, 0, 0, 1624898715, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(196, 59609194, 'awdawdawdawdawdawd\n \nhttps://mention.paranteztr.com/d/28-hayirli-olsun/92', 1, 43, 1, 1, 1624898949, 1, 0, 1624898746, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(197, 42137612, 'https://\nr10.net', 1, 43, 1, 1, 1624899176, 1, 0, 1624899150, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(198, 70248682, 'awdawdawdaw\n \nr10.net', 1, 43, 1, 1, 0, 0, 0, 1624899509, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(199, 88573986, '[youtube]XXTyC7ImsvQ[/youtube]', 1, 43, 1, 1, 0, 0, 0, 1624899599, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(200, 72893714, 'Deneme link paylasim\n\nhttps://www.itirafname.com/d/28-raki-keyfi', 1, 43, 1, 1, 0, 0, 0, 1624899746, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.114\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(201, 81520870, '[color=#3598db][b]@Demo; [/b][/color]awdawdawdawd', 1, 43, 1, 1, 0, 0, 0, 1625606564, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.124\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(202, 98624370, 'awdawdawdawdawdawd', 1, 116, 1, 1, 1625607057, 1, 0, 1625607040, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.124\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(203, 19474565, '[img=]http://localhost/mention/public/editor/1625666481_61120000.png[/img]\n \nawdawdawdawdawdawdawdawd', 1, 117, 1, 1, 0, 0, 0, 1625666491, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.124\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(204, 64219667, '[img=]http://localhost/mention/public/editor/1625666538_48406604.jpg[/img]\n \nawdawdawdawdaw', 1, 117, 1, 1, 0, 0, 0, 1625666547, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.124\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(205, 15706283, 'awdawdawdawdawdawd', 1, 118, 1, 1, 0, 0, 0, 1625706306, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.124\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(206, 66318814, 'awdawdawdawdawdawdaw111', 1, 118, 1, 1, 1625706320, 1, 0, 1625706313, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.124\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(207, 27264966, 'wdadawdawdawdawdawd', 1, 119, 1, 1, 0, 0, 0, 1625706476, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.124\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(208, 11211912, 'awdawdawdawdawdawdawd12', 1, 119, 1, 1, 0, 0, 0, 1625706489, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.124\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(209, 49191141, 'awdawdawdawdawd', 1, 120, 1, 1, 0, 0, 0, 1625706589, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.124\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(210, 32107095, '212121212121', 1, 120, 1, 1, 0, 0, 0, 1625706597, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"91.0.4472.124\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(211, 94577502, 'dawdawdawdawda12', 1, 43, 1, 1, 1632101414, 1, 0, 1632101392, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"93.0.4577.82\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(212, 56218146, 'awdawdawdaw', 1, 121, 1, 1, 0, 0, 0, 1632101634, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"93.0.4577.82\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(213, 35770521, 'awdawdawdaw', 1, 122, 1, 1, 0, 0, 0, 1632101779, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"93.0.4577.82\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(214, 99415553, 'kedi kedi kedi', 1, 123, 1, 1, 0, 0, 0, 1632226336, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"93.0.4577.82\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(215, 18412141, 'awdawdawda deneme أهلا بك', 1, 124, 1, 1, 1632239777, 1, 0, 1632239604, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"93.0.4577.82\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(216, 46849178, 'awdawdawdawd', 1, 125, 1, 1, 1632273613, 1, 0, 1632272415, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"93.0.4577.82\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(218, 99437910, 'awdawdawdawd', 1, 127, 1, 1, 0, 0, 0, 1633975603, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"94.0.4606.81\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(219, 58908994, 'awdawd22222222222222', 1, 37, 1, 1, 0, 0, 0, 1633975620, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"94.0.4606.81\",\"engine\":\"Blink\",\"engine_version\":\"\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\"},\"device\":\"desktop\",\"model\":\"\"}'),
(220, 12895789, 'awdawdawdawdawdawd', 1, 128, 1, 1, 0, 0, 0, 1638470669, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.45\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(221, 16668653, '[youtube]Yx-ZbRrC-cw[/youtube]', 1, 128, 1, 1, 0, 0, 0, 1638470718, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.45\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(222, 38788971, '[color=#3598db][b]@Demo;[/b][/color]\n \n10101010101010101', 1, 43, 1, 1, 0, 0, 0, 1639601785, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.93\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(223, 55266208, '[url=https://www.hacettepe.edu.tr/]https://www.hacettepe.edu.tr/[/url]', 1, 43, 1, 1, 0, 0, 0, 1639746171, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.110\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(224, 43757941, '[url=https://tr.wikipedia.org/wiki/Hacettepe_%C3%9Cniversitesi]https://tr.wikipedia.org/wiki/Hacettepe_%C3%9Cniversitesi[/url]', 1, 43, 1, 1, 0, 0, 0, 1639746252, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.110\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(225, 20226521, '[url=https://r10.net]https://r10.net[/url]', 1, 43, 1, 1, 0, 0, 0, 1639746389, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.110\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(226, 35837342, '[twitter]1464240927107604480[/twitter]', 1, 43, 1, 1, 0, 0, 0, 1639746807, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.110\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(227, 91608414, '[youtube]CtVoY3eOjrM[/youtube]', 1, 43, 1, 1, 0, 0, 0, 1639746830, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.110\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(228, 52424119, '[twitter]1464240927107604480[/twitter]', 1, 43, 1, 1, 0, 0, 0, 1639747036, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.110\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(229, 48418689, '[youtube]B1s53-hEfpU[/youtube]', 1, 43, 1, 1, 0, 0, 0, 1639747084, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.110\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(230, 14926669, '[youtube]dsawEJwy6Mo[/youtube]&t=12s', 1, 25, 1, 1, 0, 0, 0, 1640605106, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.110\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(231, 31987697, '[youtube]dsawEJwy6Mo[/youtube]&t=12s', 1, 25, 1, 1, 0, 0, 0, 1640605672, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.110\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(232, 45873514, '[youtube=12]dsawEJwy6Mo[/youtube]', 1, 43, 1, 1, 1640609606, 1, 0, 1640607615, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.110\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(233, 10575831, '[url=https://www.donanimhaber.com/]https://www.donanimhaber.com/[/url]', 1, 39, 1, 1, 0, 0, 0, 1641145577, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.110\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(246, 30400260, '[reddit]Amd/comments/swzne5/ryzen_5600x_low_performance_with_pbo_and_curve/[/reddit]', 1, 133, 1, 1, 1673913896, 1, 0, 1673909673, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"108.0\",\"engine\":\"Gecko\",\"engine_version\":\"108.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(234, 44780732, '[url=https://www.amazon.com.tr/dp/B08HSJNN5N/ref=cm_sw_r_apan_glt_i_0RYFND8826NW4BGN9M10?tag=technopattr-21]https://www.amazon.com.tr/dp/B08HSJNN5N/ref=cm_sw_r_apan_glt_i_0RYFND8826NW4BGN9M10?tag=technopattr-21[/url]', 1, 39, 1, 1, 0, 0, 0, 1641146174, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.110\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(235, 50673062, '[url=https://www.amazon.com.tr/dp/B08HSJNN5N/ref=cm_sw_r_apan_glt_i_0RYFND8826NW4BGN9M10?tag=technopattr-21]https://www.amazon.com.tr/dp/B08HSJNN5N/ref=cm_sw_r_apan_glt_i_0RYFND8826NW4BGN9M10?tag=technopattr-21[/url]', 1, 39, 1, 1, 0, 0, 0, 1641146537, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"96.0.4664.110\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(236, 20430989, '[url=http://localhost/mention/d/1-lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit/4]http://localhost/mention/d/1-lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit/4[/url]', 1, 43, 1, 1, 0, 0, 0, 1642337150, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"97.0.4692.71\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(237, 60285828, '[url=https://www.instagram.com/ayc4b/]https://www.instagram.com/ayc4b/[/url]', 1, 39, 1, 1, 0, 0, 0, 1644021290, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"98.0.4758.81\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(238, 14497668, 'awdawdawdawd', 1, 43, 1, 1, 0, 0, 0, 1652840993, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"101.0.4951.67\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(239, 74752519, 'Mention BETA, henüz bazı fonksiyonları tam olmayan, [u]site üzerine kurulabilir, yönetilebilir ve yayınlanabilir[/u] olan versiondur ve satışa çıkarılmıştır.\r\n\r\nBETA programına dahil olarak:\r\n[list=decimal]\r\n[li]Güncellemeleri sık alırsınız.[/li]\r\n[li]Hataları direkt yapımcıya bildirebilirsiniz.[/li]\r\n[li]Yazılımda aklınıza gelen özelliği bildirebilirsiniz.[/li]\r\n[li][b][u]BETA programı kapsamında lisans aktarımı kesinlikle yasaktır.[/u][/b][/li]\r\n[li]Dosyalar açık edilemez, kaynak kodları sunulamaz.[/li]\r\n[li]Eklenti, tema oluşturup bunları ücretli/ücretsiz paylaşabilirsiniz.[/li]\r\n[li][u]Şablon düzenleme, kullanıcı yönetimi, eklenti yönetimi, genel site ayarları vs. bütün ana fonksiyonlar çalışır durumdadır![/u][/li]\r\n[/list]\r\nBETA yazılımında eksik olan bazı temel özellikler:\r\n[list=decimal]\r\n[li]E-Posta fonksiyonları[/li]\r\n[li]Admin panelde, iletişim, araçlar ve kayıtlar kullanılamaz. [u]Bu fonksiyonlar sitenin kullanılmasında önemli yer teşkil etmez![/u][/li]\r\n[li][u]Install arayüzü yoktur.[/u][/li]\r\n[/list]\r\nSistemi kullanabileceğiniz hosting/server gereksinimleri:\r\n[list=decimal]\r\n[li]En az PHP 7.4+ veya 8.1+.[/li]\r\n[li]MySQL 5.5+[/li]\r\n[li]Gerekli PHP eklentileri: cURL, Iconv, DOM, JSON, SimpleXML, PDO[/li]\r\n[/list]', 1, 129, 1, 1, 1675984154, 1, 0, 1654564509, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"102.0.5005.63\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}');
INSERT INTO `posts` (`post_id`, `shortcode`, `content`, `forum_id`, `discussion_id`, `user_id`, `parent_id`, `lastedit_date`, `lastedit_userid`, `rating_count`, `dateline`, `is_active`, `device`) VALUES
(240, 97732787, 'awdawdawdawdawdd', 1, 129, 1, 1, 1654620383, 1, 0, 1654615570, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"102.0.5005.63\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"model\":\"\"}'),
(241, 87580851, '[post-quote]239[/post-quote]\r\nawdawdawdawdawdaw', 1, 129, 1, 1, 0, 0, 0, 1655983805, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"102.0.0.0\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(242, 42255968, '[img=]blob:http://localhost/e2cbb31a-1c92-42fc-92b6-832409c4395c[/img]\r\n \r\ntestestetstawta', 1, 130, 1, 1, 0, 0, 0, 1658498844, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"103.0.0.0\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(243, 82716572, '[img=test:267:267]http://localhost/mention/public/editor/1658498993_16294006.jpg[/img]\r\n\r\ntestestaewawdawdawd', 1, 130, 1, 1, 1674308279, 1, 0, 1658499008, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"103.0.0.0\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(244, 35292520, '[b]22.07.2022[/b] itibarıyla, [b]1.0.13[/b] sürümüne geçiş yapılmıştır.\n \n[heading=3]Yenilikler[/heading]\n[list=decimal]\n[li]SVG resim yükleme güvenlik nedeniyle kaldırıldı, SVG to PNG özelliği bütün sunucularda işlev göstermeyeceği için eklenmedi.[/li]\n[li]Editörden resim yükleme görünümü ve fonksiyonları tamamen değiştirildi.[/li]\n[li]Sitemap fonksiyonları geliştirildi, sayfalama yapıldı. Ayrıca Github paketi kullanıyordu kaldırıldı, sıfırdan XML Render oluşturuldu. İlgili link: [url=https://mentionbb.com/community/sitemap.xml]https://mentionbb.com/community/sitemap.xml[/url][/li]\n[li]Güvenlik ve Cache geliştirilmeleri.[/li]\n[/list]\n \nAyrıca Install yapımına başlandı.', 1, 131, 1, 1, 0, 0, 0, 1658503045, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"103.0.0.0\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(245, 92373066, '[b]22.07.2022[/b] itibarıyla, [b]1.0.13[/b] sürümüne geçiş yapılmıştır. \r\n\r\n\r\n\r\n\r\n\r\n[heading=3]Yenilikler[/heading]\r\n\r\n\r\n\r\n[list=decimal] \r\n[list=disc] \r\n[list=disc] \r\n[list=disc]\r\n[li]SVG resim yükleme güvenlik nedeniyle kaldırıldı, SVG to PNG özelliği bütün sunucularda işlev göstermeyeceği için eklenmedi.[/li]\r\n[/list]\r\n\r\n[/list] \r\n\r\n[/list] \r\n\r\n[list=disc] \r\n[list=disc] \r\n[list=disc]\r\n[li]Editörden resim yükleme görünümü ve fonksiyonları tamamen değiştirildi.[/li]\r\n[/list]\r\n\r\n[/list] \r\n\r\n[/list] \r\n\r\n[list=disc] \r\n[list=disc] \r\n[list=disc]\r\n[li]Sitemap fonksiyonları geliştirildi, sayfalama yapıldı. Ayrıca Github paketi kullanıyordu kaldırıldı, sıfırdan XML Render oluşturuldu. İlgili link: [url=https://mentionbb.com/community/sitemap.xml]https://mentionbb.com/community/sitemap.xml[/url][/li]\r\n[/list]\r\n\r\n[/list] \r\n\r\n[/list] \r\n\r\n[list=disc] \r\n[list=disc] \r\n[list=disc]\r\n[li]Güvenlik ve Cache geliştirilmeleri.[/li]\r\n[/list]\r\n\r\n[/list] \r\n\r\n[/list] \r\n\r\n[/list] \r\n\r\nAyrıca Install yapımına başlandı.', 1, 132, 1, 1, 1658505992, 1, 0, 1658505300, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Chrome\",\"short_name\":\"CH\",\"version\":\"103.0.0.0\",\"engine\":\"Blink\",\"engine_version\":\"\",\"family\":\"Chrome\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(247, 64094565, '[spotify]track/05UMQXFCsa9oPnLgfJHVyF?si=be725278ec4d4ec2[/spotify]', 1, 27, 1, 1, 1673961986, 1, 0, 1673961776, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"108.0\",\"engine\":\"Gecko\",\"engine_version\":\"108.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(248, 25875996, 'testtesttest12\r\n \r\n[reddit]Amd/comments/x3bzoy/what_is_the_correct_value_for_using_pbo_with/[/reddit]', 1, 37, 1, 1, 1673962295, 1, 0, 1673962022, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"108.0\",\"engine\":\"Gecko\",\"engine_version\":\"108.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(249, 74028141, '[spotify=track]05UMQXFCsa9oPnLgfJHVyF[/spotify]', 1, 27, 1, 1, 0, 0, 0, 1673963139, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"108.0\",\"engine\":\"Gecko\",\"engine_version\":\"108.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(250, 86741597, '[reddit]Amd/comments/swzne5/ryzen_5600x_low_performance_with_pbo_and_curve/[/reddit]', 1, 133, 1, 1, 0, 0, 0, 1673964481, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"108.0\",\"engine\":\"Gecko\",\"engine_version\":\"108.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(251, 55518027, '[spotify=playlist]0x1rlDOobe9ITkiiPburca[/spotify]', 1, 27, 1, 1, 0, 0, 0, 1673964581, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"108.0\",\"engine\":\"Gecko\",\"engine_version\":\"108.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(252, 42074938, '[list=decimal]\r\n[li]awdaw[/li]\r\n[li]da[/li]\r\n[li]wd[/li]\r\n[li]a[/li]\r\n[li]dw[/li]\r\n[li]k[/li]\r\n[/list]\r\n \r\n[list=disc]\r\n[li]awdaw[/li]\r\n[li]da[/li]\r\n[li]w[/li]\r\n[li]daw[/li]\r\n[li]da[/li]\r\n[/list]', 1, 129, 1, 1, 1673993122, 1, 0, 1673972463, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"108.0\",\"engine\":\"Gecko\",\"engine_version\":\"108.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(253, 88926282, 'awdawd\r\n\r\nawdawd\r\n\r\n\r\n \r\n \r\n \r\n \r\n \r\n\r\n\r\nawdawdaw', 1, 129, 1, 1, 1673993085, 1, 0, 1673992852, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"108.0\",\"engine\":\"Gecko\",\"engine_version\":\"108.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(254, 37186173, '[img=:960:1200]http://localhost/mention/public/editor/1674310560_15094482.jpg[/img]\r\n \r\nTesttestest', 1, 134, 1, 1, 0, 0, 0, 1674310588, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(255, 81214610, 'Boyutlandırma testi.\n\n[img=test123123123:131:164]http://localhost/mention/public/editor/1674310560_15094482.jpg[/img]', 1, 134, 1, 1, 1674310702, 1, 0, 1674310683, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(257, 92498876, '[post-quote=256]\r\n<h2 id=\"lorem-ipsum-dolor-sit-amet\">Lorem ipsum dolor sit amet</h2>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar ligula ac suscipit pulvinar. Vivamus et sagittis sem. Nunc vitae pretium ligula. Suspendisse in justo eget turpis tincidunt facilisis tempor non velit. Quisque nec placerat eros, sollicitudin dapibus velit. Nam dapibus nunc id nisl suscipit, vel condimentum nulla aliquet. Suspendisse a tortor aliquam, malesuada urna in, posuere massa. Nam mattis tincidunt est id vehicula. Aliquam erat volutpat. In euismod quis neque at volutpat. Quisque nec velit tortor. Etiam elit massa, dignissim vel enim a, fringilla porttitor leo. Integer varius metus laoreet libero porttitor condimentum.[/post-quote]\r\nTesttt', 1, 135, 1, 1, 0, 0, 0, 1675044757, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(256, 69792129, '[heading=2]Lorem ipsum dolor sit amet[/heading]\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar ligula ac suscipit pulvinar. Vivamus et sagittis sem. Nunc vitae pretium ligula. Suspendisse in justo eget turpis tincidunt facilisis tempor non velit. Quisque nec placerat eros, sollicitudin dapibus velit. Nam dapibus nunc id nisl suscipit, vel condimentum nulla aliquet. Suspendisse a tortor aliquam, malesuada urna in, posuere massa. Nam mattis tincidunt est id vehicula. Aliquam erat volutpat. In euismod quis neque at volutpat. Quisque nec velit tortor. Etiam elit massa, dignissim vel enim a, fringilla porttitor leo. Integer varius metus laoreet libero porttitor condimentum.\r\n[heading=2]Maecenas at eros malesuada[/heading]\r\nMaecenas at eros malesuada, malesuada enim eget, vulputate tellus. Nunc ac nunc hendrerit, facilisis metus non, viverra ex. Pellentesque tincidunt, felis scelerisque fringilla ornare, orci velit faucibus quam, eget porta orci purus nec metus. Nullam finibus ac mauris posuere viverra. Aenean leo felis, vestibulum id iaculis vitae, egestas quis velit. Integer nec dignissim dolor. Suspendisse quis sollicitudin ex, in imperdiet sapien. Ut a metus non ex auctor interdum auctor et tortor. Donec mattis laoreet dolor, ac varius augue auctor in.\r\n[heading=2]Aenean non venenatis urna[/heading]\r\nAenean non venenatis urna. Etiam vehicula orci diam, a sagittis urna eleifend dictum. Nunc tempus magna mattis dolor finibus ultricies ut eu dolor. Phasellus ut est sit amet velit bibendum malesuada eget eu dui. Praesent maximus nibh et purus lacinia, vitae pulvinar massa convallis. Proin commodo justo ac iaculis dictum. Fusce sed accumsan nibh. Maecenas ut dui justo. Sed maximus justo eget felis facilisis auctor. Aenean iaculis a mi vel aliquam.', 1, 135, 1, 1, 1674744681, 1, 0, 1674743027, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(258, 56818708, '[post-quote=256]Aenean non venenatis urna\r\nAenean non venenatis urna. Etiam vehicula orci diam, a sagittis urna eleifend dictum. Nunc tempus magna mattis dolor finibus ultricies ut eu dolor. Phasellus ut est sit amet velit bibendum malesuada eget eu dui. Praesent maximus nibh et purus lacinia, vitae pulvinar massa convallis. Proin commodo justo ac iaculis dictum. Fusce sed accumsan nibh. Maecenas ut dui justo. Sed maximus justo eget felis facilisis auctor. Aenean iaculis a mi vel aliquam.[/post-quote]\r\nTesttt', 1, 135, 1, 1, 1675047104, 1, 0, 1675045354, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(259, 19568087, '[post-selected-quote=256]\r\n[heading=2]Lorem ipsum dolor sit amet[/heading]\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar ligula ac suscipit pulvinar. Vivamus et sagittis sem. Nunc vitae pretium ligula. Suspendisse in justo eget turpis tincidunt facilisis tempor non velit. Quisque nec placerat eros, sollicitudin dapibus velit. Nam dapibus nunc id nisl suscipit, vel condimentum nulla aliquet. Suspendisse a tortor aliquam, malesuada urna in, posuere massa. Nam mattis tincidunt est id vehicula. Aliquam erat volutpat. In euismod quis neque at volutpat. Quisque nec velit tortor. Etiam elit massa, dignissim vel enim a, fringilla porttitor leo. Integer varius metus laoreet libero porttitor condimentum.[/post-quote]', 1, 135, 1, 1, 1675047754, 1, 0, 1675047624, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(261, 22756841, '[post-quote]81[/post-quote]', 1, 32, 1, 1, 0, 0, 0, 1675048318, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(262, 70637700, '[post-selected-quote=256]Aenean non venenatis urna Aenean non venenatis urna. Etiam vehicula orci diam, a sagittis urna eleifend dictum. Nunc tempus magna mattis dolor finibus ultricies ut eu dolor. Phasellus ut est sit amet velit bibendum malesuada eget eu dui. Praesent maximus nibh et purus lacinia, vitae pulvinar massa convallis. Proin commodo justo ac iaculis dictum. Fusce sed accumsan nibh. Maecenas ut dui justo. Sed maximus justo eget felis facilisis auctor. Aenean iaculis a mi vel aliquam. [/post-quote]\r\ntestttt', 1, 135, 1, 1, 1675048632, 1, 0, 1675048599, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(263, 26995666, '[post-selected-quote=256]\r\n[heading=2]Aenean non venenatis urna[/heading]\r\nAenean non venenatis urna. Etiam vehicula orci diam, a sagittis urna eleifend dictum. Nunc tempus magna mattis dolor finibus ultricies ut eu dolor. Phasellus ut est sit amet velit bibendum malesuada eget eu dui. Praesent maximus nibh et purus lacinia, vitae pulvinar massa convallis. Proin commodo justo ac iaculis dictum. Fusce sed accumsan nibh. Maecenas ut dui justo. Sed maximus justo eget felis facilisis auctor. Aenean iaculis a mi vel aliquam. [/post-quote]', 1, 135, 1, 1, 0, 0, 0, 1675049178, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(264, 47258303, '[post-selected-quote=239]Mention BETA, henüz bazı fonksiyonları tam olmayan, [u]site üzerine kurulabilir, yönetilebilir ve yayınlanabilir[/u] olan versiondur ve satışa çıkarılmıştır.\r\n\r\nBETA programına dahil olarak:\r\n[list=decimal]\r\n[li]Güncellemeleri sık alırsınız.[/li]\r\n[li]Hataları direkt yapımcıya bildirebilirsiniz.[/li]\r\n[li]Yazılımda aklınıza gelen özelliği bildirebilirsiniz.[/li]\r\n[li][b][u]BETA programı kapsamında lisans aktarımı kesinlikle yasaktır.[/u][/b][/li]\r\n[/list]\r\n[/post-quote]\r\nsfsefs', 1, 129, 1, 1, 0, 0, 0, 1675079942, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(265, 38347262, '[post-quote]255[/post-quote]\r\nasdasda', 1, 134, 1, 1, 0, 0, 0, 1675081212, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(266, 68583111, '[post-selected-quote=254][url=http://localhost/mention/public/editor/1674310560_15094482.jpg]<img class=\"app-AttachmentImage\" style=\"width: 50%; height: 50%;\" title=\"\" src=\"http://localhost/mention/public/editor/1674310560_15094482.jpg\" alt=\"\" width=\"960\" height=\"1200\" data-original-title=\"\" /> [/url]\r\n\r\nTest[/post-quote]\r\nawdawdaw', 1, 134, 1, 1, 1675082637, 1, 0, 1675082234, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(267, 14300638, '[post-selected-quote=254][url=http://localhost/mention/public/editor/1674310560_15094482.jpg]<img class=\"app-AttachmentImage\" style=\"width: 50%; height: 100%;\" title=\"\" src=\"http://localhost/mention/public/editor/1674310560_15094482.jpg\" alt=\"\" width=\"960\" height=\"1200\" data-original-title=\"\" /> [/url]\r\n\r\nTestte[/post-quote]\r\nadadawdaw', 1, 134, 1, 1, 0, 0, 0, 1675083767, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(268, 73457696, '[post-selected-quote=254][url=http://localhost/mention/public/editor/1674310560_15094482.jpg]<img class=\"app-AttachmentImage\" style=\"width: 50%; height: 100%;\" title=\"\" src=\"http://localhost/mention/public/editor/1674310560_15094482.jpg\" alt=\"\" width=\"960\" height=\"1200\" data-original-title=\"\" /> [/url]\r\n\r\nTestteste[/post-quote]', 1, 134, 1, 1, 0, 0, 0, 1675084068, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(269, 74211288, '[post-selected-quote=256]\r\n[heading=2]Aenean non venenatis urna[/heading]\r\nAenean non venenatis urna. Etiam vehicula orci diam, a sagittis urna eleifend dictum. Nunc tempus magna mattis dolor finibus ultricies ut eu dolor. Phasellus ut est sit amet velit bibendum malesuada eget eu dui. Praesent maximus nibh et purus lacinia, vitae pulvinar massa convallis. Proin commodo justo ac iaculis dictum. Fusce sed accumsan nibh. Maecenas ut dui justo. Sed maximus justo eget felis facilisis auctor. Aenean iaculis a mi vel aliquam. [/post-quote]', 1, 135, 1, 1, 0, 0, 0, 1675086246, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(270, 44586234, '[post-selected-quote=254][url=http://localhost/mention/public/editor/1674310560_15094482.jpg]<img class=\"app-AttachmentImage\" style=\"width: 50%; height: 100%;\" title=\"\" src=\"http://localhost/mention/public/editor/1674310560_15094482.jpg\" alt=\"\" width=\"960\" height=\"1200\" data-original-title=\"\" /> [/url]\r\n\r\nTesttes[/post-quote]', 1, 134, 1, 1, 0, 0, 0, 1675086282, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(271, 44557014, '[post-selected-quote=256]\r\n[heading=2]Lorem ipsum dolor sit amet[/heading]\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar ligula ac suscipit pulvinar. Vivamus et sagittis sem. Nunc vitae pretium ligula. Suspendisse in justo eget turpis tincidunt facilisis tempor non velit. Quisque nec placerat eros, sollicitudin dapibus velit. Nam dapibus nunc id nisl suscipit, vel condimentum nulla aliquet. Suspendisse a tortor aliquam, malesuada urna in, posuere massa. Nam mattis tincidunt est id vehicula. Aliquam erat volutpat. In euismod quis neque at volutpat. Quisque nec velit tortor. Etiam elit massa, dignissim vel enim a, fringilla porttitor leo. Integer varius metus laoreet libero porttitor condimentum.[/post-quote]', 1, 135, 1, 1, 0, 0, 0, 1675087681, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(272, 66550481, '[post-selected-quote=239]BETA programına dahil olarak:{line}\r\n[list=decimal]\r\n[li]Güncellemeleri sık alırsınız.[/li]\r\n[li]Hataları direkt yapımcıya bildirebilirsiniz.[/li]\r\n[li]Yazılımda aklınıza gelen özelliği bildirebilirsiniz.[/li]\r\n[li][b][u]BETA programı kapsamında lisans aktarımı kesinlikle yasaktır.[/u][/b][/li]\r\n[li]Dosyalar açık edilemez, kaynak kodları sunulamaz.[/li]\r\n[li]Eklenti, tema oluşturup bunları ücretli/ücretsiz paylaşabilirsiniz.[/li]\r\n[li][u]Şablon düzenleme, kullanıcı yönetimi, eklenti yönetimi, genel site ayarları vs. bütün ana fonksiyonlar çalışır durumdadır![/u][/li]\r\n[/list]\r\n[/post-quote]', 1, 129, 1, 1, 0, 0, 0, 1675087741, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(273, 98380089, '[post-selected-quote=239]Mention BETA, henüz bazı fonksiyonları tam olmayan, [u]site üzerine kurulabilir, yönetilebilir ve yayınlanabilir[/u] olan versiondur ve satışa çıkarılmıştır.{line} \r\nBETA programına dahil olarak:\r\n[list=decimal]\r\n[li]Güncellemeleri sık alırsınız.[/li]\r\n[li]Hataları direkt yapımcıya bildirebilirsiniz.[/li]\r\n[li]Yazılımda aklınıza gelen özelliği bildirebilirsiniz.[/li]\r\n[li][b][u]BETA programı kapsamında lisans aktarımı kesinlikle yasaktır.[/u][/b][/li]\r\n[/list]\r\n[/post-quote]', 1, 129, 1, 1, 0, 0, 0, 1675087782, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(274, 36957035, '[post-selected-quote=239]Mention BETA, henüz bazı fonksiyonları tam olmayan, [u]site üzerine kurulabilir, yönetilebilir ve yayınlanabilir[/u] olan versiondur ve satışa çıkarılmıştır.\r\n\r\nBETA programına dahil olarak:\r\n[list=decimal]\r\n[li]Güncellemeleri sık alırsınız.[/li]\r\n[li]Hataları direkt yapımcıya bildirebilirsiniz.[/li]\r\n[li]Yazılımda aklınıza gelen özelliği bildirebilirsiniz.[/li]\r\n[li][b][u]BETA programı kapsamında lisans aktarımı kesinlikle yasaktır.[/u][/b][/li]\r\n[li]Dosyalar açık edilemez, kaynak kodları sunulamaz.[/li]\r\n[li]Eklenti, tema oluşturup bunları ücretli/ücretsiz paylaşabilirsiniz.[/li]\r\n[/list]\r\n[/post-quote]', 1, 129, 1, 1, 1675089103, 1, 0, 1675087805, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(275, 91558646, '[post-selected-quote=84] Merhaba 🙂\" data-shortcut=\"🙂\" data-title=\"Slight smile\" data-original-title=\"  [/post-quote]', 1, 34, 1, 1, 0, 0, 0, 1675089260, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(276, 89697823, '[post-selected-quote=84]Merhaba 🙂  [/post-quote]', 1, 34, 1, 1, 0, 0, 0, 1675089397, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(277, 41606234, 'DAWDWADADAWD', 1, 136, 1, 1, 0, 0, 0, 1675368604, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(278, 70279730, '[steam]374320[/steam]', 1, 137, 1, 1, 1675692430, 1, 0, 1675687857, 1, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}'),
(279, 48143673, '[youtube]XIPGJ3CZ664[/youtube]', 1, 138, 1, 1, 1675959376, 1, 0, 1675959352, 0, '{\"client\":{\"type\":\"browser\",\"name\":\"Firefox\",\"short_name\":\"FF\",\"version\":\"109.0\",\"engine\":\"Gecko\",\"engine_version\":\"109.0\",\"family\":\"Firefox\"},\"os\":{\"name\":\"Windows\",\"short_name\":\"WIN\",\"version\":\"10\",\"platform\":\"x64\",\"family\":\"Windows\"},\"device\":\"desktop\",\"brand\":\"\",\"model\":\"\"}');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post_bookmarks`
--

CREATE TABLE `post_bookmarks` (
  `bookmark_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dateline` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `post_bookmarks`
--

INSERT INTO `post_bookmarks` (`bookmark_id`, `post_id`, `user_id`, `dateline`) VALUES
(58, 106, 1, 1638471988);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post_likes`
--

CREATE TABLE `post_likes` (
  `like_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reaction` varchar(15) NOT NULL,
  `dateline` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `post_likes`
--

INSERT INTO `post_likes` (`like_id`, `post_id`, `user_id`, `reaction`, `dateline`) VALUES
(1, 5, 2, 'like', 1595787985),
(4, 36, 2, 'like', 1595787985),
(10, 5, 2, 'like', 1596289477),
(46, 36, 1, 'like', 1597055826),
(108, 5, 1, 'love', 1597691642),
(90, 6, 2, 'haha', 1597688177),
(100, 6, 1, 'love', 1597691095),
(119, 60, 1, 'love', 1607966437),
(121, 66, 1, 'love', 1608235496),
(338, 74, 1, 'like', 1652798918),
(174, 220, 1, 'angry', 1638470734);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post_reports`
--

CREATE TABLE `post_reports` (
  `report_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `dateline` int(10) NOT NULL,
  `is_seeing` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `post_reports`
--

INSERT INTO `post_reports` (`report_id`, `post_id`, `user_id`, `content`, `dateline`, `is_seeing`) VALUES
(1, 37, 1, 'Uygunsuz içerik.', 1599056475, 0),
(2, 37, 1, 'Uygunsuz içerik.', 1599056484, 0),
(3, 37, 1, 'Uygunsuz içerik.', 1599063204, 0),
(4, 60, 1, 'Yanlış veya eksik bilgi.', 1607966447, 0),
(5, 165, 1, 'Uygunsuz içerik.', 1618537155, 0),
(6, 1, 1, 'Uygunsuz içerik.', 1654620890, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `report_text` mediumtext NOT NULL,
  `reported_user_id` int(11) NOT NULL,
  `operation_user_id` int(11) NOT NULL,
  `is_seeing` int(1) NOT NULL,
  `is_closed` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sessions`
--

CREATE TABLE `sessions` (
  `sessions_id` int(11) NOT NULL,
  `dateline` int(10) NOT NULL,
  `session_id` varchar(40) NOT NULL,
  `type` varchar(10) NOT NULL,
  `route` varchar(80) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(24) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `sessions`
--

INSERT INTO `sessions` (`sessions_id`, `dateline`, `session_id`, `type`, `route`, `user_id`, `ip`) VALUES
(1, 1676034828, '5fgdg434nohc2vusalh99kr81l', 'user', '/', 1, '127.0.0.1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `setting_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `value` varchar(140) NOT NULL,
  `type` varchar(10) NOT NULL,
  `group_name` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`setting_id`, `name`, `value`, `type`, `group_name`) VALUES
(1, 'site_url', 'http://localhost/mention', 'text', 'site'),
(2, 'site_title', 'Mention', 'text', 'site'),
(3, 'site_short_title', 'Mention', 'text', 'site'),
(4, 'gr_secret_key', '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe', 'text', 'recaptcha'),
(5, 'gr_site_key', '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI', 'text', 'recaptcha'),
(6, 'per_page', '10', 'text', 'posts'),
(7, 'site_logo', 'logo.svg', 'filetext', 'styles'),
(8, 'meta_description', 'Mention Test App', 'text', 'site'),
(9, 'default_language', 'EnglishUS', 'selectbox', 'languages'),
(10, 'title_char_min', '5', 'text', 'posts'),
(11, 'content_char_min', '10', 'text', 'posts'),
(12, 'site_mail', 'demo@demo.com', 'email', 'site'),
(13, 'site_logo_night', 'logo-nightmode.svg', 'filetext', 'styles'),
(14, 'emoticon_database', 'local', 'text', 'styles'),
(15, 'max_attachments', '5', 'text', 'posts'),
(16, 'attachment_max_size', '50MB', 'text', 'posts'),
(17, 'profile_photo_max_size', '500KB', 'text', 'users'),
(18, 'default_theme', 'Default', 'selectbox', 'styles');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `socialsites`
--

CREATE TABLE `socialsites` (
  `site_id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `api_keys` text NOT NULL,
  `callback` text NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `socialsites`
--

INSERT INTO `socialsites` (`site_id`, `title`, `name`, `api_keys`, `callback`, `is_active`) VALUES
(1, 'Google', 'google', '64314263992-ler1as2hq9i1aud4n9m6fakiol5qjk8d.apps.googleusercontent.com\nVBKSmTBr-vDYfzGijzK0GbsB', '\\App\\SubContainer\\Auth\\Service\\Google', 1),
(2, 'Facebook', 'facebook', '220918176482137\r\n3ac4f071669d74940adf286e0397d032', '\\App\\SubContainer\\Auth\\Service\\Facebook', 1),
(4, 'Twitter', 'twitter', '\n', '\\App\\SubContainer\\Auth\\Service\\Twitter', 0),
(5, 'Github', 'github', '\n', '\\App\\SubContainer\\Auth\\Service\\Github', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `usertitle` varchar(80) NOT NULL DEFAULT 'Üye',
  `mail` text NOT NULL,
  `profile_picture` mediumtext NOT NULL,
  `password` mediumtext NOT NULL,
  `secret_key` mediumtext NOT NULL,
  `login_key` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `two_step_verification` int(1) NOT NULL,
  `is_admin` int(1) NOT NULL DEFAULT 0,
  `registration_date` int(10) NOT NULL,
  `last_activity` int(10) NOT NULL DEFAULT 0,
  `use_twofa` int(1) NOT NULL DEFAULT 0,
  `message_bg` varchar(200) NOT NULL DEFAULT '#f8f9fa'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `username`, `usertitle`, `mail`, `profile_picture`, `password`, `secret_key`, `login_key`, `status`, `two_step_verification`, `is_admin`, `registration_date`, `last_activity`, `use_twofa`, `message_bg`) VALUES
(1, 'TestUser', '<span style=\"font-weight: 600; color: #a3c8ff\">Administrator</span>', 'test@test.com', 'testuser.svg', 'YmxMVGlueTg4UkhSR0JxcUN4VDl3Zz09OjrCETwe20w6gbVBavXgMB0L', 'SEZNb0MyNkF6YVFnTGpFaFhpbElUNXUzRE5CY3NaOFkxUm4wNEtrcFY5U2VVN09QcXJmeHRkR3ZtV2J3eUo=\r\n', 'T1RiaVB0RmVsUGIxU1RJRmVvUTgyQTEzOXczZ2ZONUhWYWE5cmNMelk4QT06OqHgSa0DPmRHpEv0lr8P7IY=', 1, 0, 1, 1593522574, 1676034828, 0, '#f8f9fa'),
(2, 'Demo', '__default', 'test@test.com', 'default.svg', 'NnpVN21LWUpPYXJIQkVUSmkvcFZ2QT09OjobQFNTXaQ5zzehsJDHwRX3', 'SEZNb0MyNkF6YVFnTGpFaFhpbElUNXUzRE5CY3NaOFkxUm4wNEtrcFY5U2VVN09QcXJmeHRkR3ZtV2J3eUo=\r\n', 'MEUrejEwRGpjSlhORVNZd09WTGRtak96UkhQaHQ0bk95emZ3N2l6Z2svZz06Ov4rGRs7sQ4E6eoxdhDiXtg=', 1, 0, 0, 1595779759, 1675350610, 0, '#f8f9fa'),
(8, 'asds4', '', 'awdaw@awd.com', 'default.svg', 'OXd3bDUrUTVTQ0pxZFl6RmhnWC9lZz09OjoVfi3K3cOMRKG0qOptbAGv', 'VGZYckVDMXc4VUxBNzVaSnpjQkk2NHhq', 'UVJNd29pcXYvS1JGdEtGb2ZBQkc3T2cwenZRMmFMYks3dTFxWFh4YWVkbz06Oga3/3jnO8pTx7BrAGiMqtk=', 1, 0, 0, 1639757629, 1642529371, 0, '#f8f9fa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_bans`
--

CREATE TABLE `user_bans` (
  `ban_id` int(11) NOT NULL,
  `expires` int(10) NOT NULL,
  `text` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dateline` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `user_bans`
--

INSERT INTO `user_bans` (`ban_id`, `expires`, `text`, `user_id`, `dateline`) VALUES
(1, 0, 'ban deneme', 8, 1642520348),
(2, 0, 'awdawdaw', 8, 1642531707);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_friendships`
--

CREATE TABLE `user_friendships` (
  `friendship_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `awaiting` int(1) NOT NULL DEFAULT 1,
  `dateline` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_messages`
--

CREATE TABLE `user_messages` (
  `message_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` longtext NOT NULL,
  `sender_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_id` int(1) NOT NULL DEFAULT 0,
  `is_seeing` int(1) NOT NULL DEFAULT 0,
  `dateline` int(10) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_archived` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `user_messages`
--

INSERT INTO `user_messages` (`message_id`, `title`, `text`, `sender_id`, `user_id`, `parent_id`, `is_seeing`, `dateline`, `is_active`, `is_archived`) VALUES
(1, 'Deneme', 'Deneme mesaj.....', 2, 1, 1, 1, 1601736249, 1, 0),
(2, 'Deneme', 'Deneme mesaj2222.....', 2, 1, 1, 1, 1601736260, 1, 0),
(3, 'Deneme', 'Deneme mesaj33333.....', 2, 1, 1, 1, 1601738486, 1, 0),
(4, 'Deneme', 'Deneme mesaj4444.....', 2, 1, 1, 1, 1601738528, 1, 0),
(5, 'Deneme', 'Deneme mesaj5555.....', 2, 1, 1, 1, 1601738610, 1, 0),
(6, 'Deneme', 'Deneme mesaj6666.....', 2, 1, 1, 1, 1601738726, 1, 0),
(7, 'Deneme mesaj2', 'deneme mesaj2 1111', 2, 1, 7, 1, 1601738729, 1, 0),
(8, 'Deneme mesaj2', 'deneme cevap...', 1, 2, 7, 1, 1601815943, 1, 0),
(9, 'Deneme mesaj2', 'deneme cevap...', 2, 1, 7, 1, 1601817981, 1, 0),
(11, 'Deneme mesaj2', 'asdasdasdasdas', 1, 2, 7, 1, 1601907465, 1, 0),
(12, 'Deneme mesaj2', 'awdawdawdaw', 1, 2, 7, 1, 1601907980, 1, 0),
(13, 'Deneme mesaj2', 'awdawdawda', 2, 1, 7, 1, 1601908210, 1, 0),
(14, 'Deneme mesaj2', 'awdawdawdawd', 2, 1, 7, 1, 1601908227, 1, 0),
(15, 'Deneme mesaj2', 'asdasdasd231231', 1, 2, 7, 1, 1601909061, 1, 0),
(16, 'Deneme mesaj2', '123123123123123123123', 1, 2, 7, 1, 1601909121, 1, 0),
(17, 'Deneme mesaj2', 'denem bilmem kaç', 1, 2, 7, 1, 1601911162, 1, 0),
(22, 'deneme3333', 'asdasdasdasdsada', 1, 2, 22, 1, 1602094341, 1, 0),
(19, 'Deneme mesaj2', 'asdasdasdas', 1, 2, 7, 1, 1602093959, 1, 0),
(18, 'Deneme mesaj2', 'asdasdasdasda', 1, 2, 7, 1, 1602093870, 1, 0),
(23, 'deneme3333', 'awdalşwdawfawd', 1, 2, 22, 1, 1602100392, 1, 0),
(24, 'deneme3333', 'aeddawdawdaw', 1, 2, 22, 1, 1602100396, 1, 0),
(25, 'deneme3333', '2323232', 1, 2, 22, 1, 1602100400, 1, 0),
(26, 'deneme3333', 'awdadaw', 1, 2, 22, 1, 1602108662, 1, 0),
(27, 'deneme3333', 'awdawda212121', 1, 2, 22, 1, 1602108664, 1, 0),
(28, 'deneme3333', 'cascasc', 1, 2, 22, 1, 1602108667, 1, 0),
(29, 'deneme3333', 'awdawdawdawdawd', 1, 2, 22, 1, 1602339564, 1, 0),
(30, 'deneme3333', 'awdawdawdawda', 1, 2, 22, 1, 1602339682, 1, 0),
(31, 'deneme3333', 'awdawdawdawd', 1, 2, 22, 1, 1602339750, 1, 0),
(32, 'deneme3333', '231231231231231', 1, 2, 22, 1, 1602339778, 1, 0),
(33, 'deneme3333', 'awdawdawdawdawd', 1, 2, 22, 1, 1602339860, 1, 0),
(34, 'deneme3333', 'awdawdawd', 1, 2, 22, 1, 1602339896, 1, 0),
(35, 'deneme3333', 'awdawdawdaw22121212', 1, 2, 22, 1, 1602339924, 1, 0),
(36, 'deneme3333', 'wadwdawdawd', 1, 2, 22, 1, 1602340045, 1, 0),
(37, 'deneme3333', 'awdawdawd', 1, 2, 22, 1, 1602340106, 1, 0),
(38, 'deneme3333', 'wdadawdawdawdasss', 1, 2, 22, 1, 1602340125, 1, 0),
(39, 'deneme3333', 'awdawd', 1, 2, 22, 1, 1602343483, 1, 0),
(40, 'deneme3333', 'awdawd', 1, 2, 22, 1, 1602343779, 1, 0),
(41, 'deneme3333', 'asdasdasdas', 1, 2, 22, 1, 1602343932, 1, 0),
(42, 'deneme3333', '2123121313', 1, 2, 22, 1, 1602344030, 1, 0),
(43, 'deneme3333', '2131231awdwd', 1, 2, 22, 1, 1602344218, 1, 0),
(44, 'deneme3333', '2eadwawdasasa', 1, 2, 22, 1, 1602344331, 1, 0),
(45, 'deneme3333', 'awdawdassss', 1, 2, 22, 1, 1602344371, 1, 0),
(46, 'deneme3333', 'awdawdawdawdass', 1, 2, 22, 1, 1602344404, 1, 0),
(47, 'deneme3333', 'sefsefsefsefsef', 1, 2, 22, 1, 1602344581, 1, 0),
(48, 'deneme3333', 'awdadwd21211', 1, 2, 22, 1, 1602344590, 1, 0),
(49, 'deneme3333', 'kaçıncı deneme acaba', 1, 2, 22, 1, 1602344699, 1, 0),
(50, 'deneme3333', 'olmuş', 1, 2, 22, 1, 1602344708, 1, 0),
(51, 'Deneme mesaj2', 'test12312312', 1, 2, 7, 1, 1603065518, 1, 0),
(52, 'Deneme mesaj2', 'test124123123123123', 1, 2, 7, 1, 1603066289, 1, 0),
(53, 'Deneme mesaj2', 'test23123123123', 1, 2, 7, 1, 1603067542, 1, 0),
(54, 'Deneme mesaj2', 'alwdlawdlalwdlawd', 1, 2, 7, 1, 1607966356, 1, 0),
(55, 'Deneme mesaj2', 'awdawdawdaw', 1, 2, 7, 0, 1616067942, 1, 0),
(56, 'awdawdawd', 'awdawdawd', 1, 2, 0, 0, 1616067964, 1, 0),
(57, 'awdawdawd', 'awdawdawd', 1, 2, 0, 0, 1616068232, 1, 0),
(58, 'awdawdawdaw', 'wadawdawda', 1, 2, 58, 0, 1616068442, 1, 0),
(59, 'awdawdawdaw', 'awdawd', 1, 2, 58, 0, 1616363462, 1, 0),
(60, 'awdawdawdaw', 'awdawdawdawdawd', 1, 2, 58, 0, 1618338274, 1, 0),
(61, 'awdawdawdaw', 'ahjwdajwdkalwdaw', 1, 2, 58, 0, 1618689862, 1, 0),
(62, 'awdawdawdaw', 'awdawd', 1, 2, 58, 0, 1625605978, 1, 0),
(63, 'awdawdawdaw', 'awkldlaşwwdad', 1, 2, 58, 0, 1638470796, 1, 0),
(64, 'awdawdawdaw', 'sefsefesfsf', 1, 2, 58, 0, 1652921672, 1, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_notifications`
--

CREATE TABLE `user_notifications` (
  `notification_id` int(11) NOT NULL,
  `tab` varchar(50) NOT NULL,
  `post_id` int(11) DEFAULT 0,
  `discussion_id` int(11) NOT NULL DEFAULT 0,
  `sender_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_seeing` int(1) NOT NULL DEFAULT 0,
  `dateline` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `user_notifications`
--

INSERT INTO `user_notifications` (`notification_id`, `tab`, `post_id`, `discussion_id`, `sender_id`, `user_id`, `is_seeing`, `dateline`) VALUES
(1, 'reaction-like', 16, 0, 2, 1, 1, 1595769093),
(2, 'reply-discussion', 0, 3, 2, 1, 1, 1595778641),
(3, 'reply-discussion', 0, 13, 1, 1, 1, 1597138027),
(4, 'reply-discussion', 0, 13, 1, 1, 1, 1597138138),
(5, 'reply-discussion', 0, 13, 1, 1, 1, 1597140831),
(9, 'reply-discussion', 0, 13, 1, 1, 1, 1597140963),
(8, 'quote-post', 37, 13, 2, 1, 1, 1597140963),
(11, 'reply-discussion', 0, 3, 1, 1, 1, 1597143557),
(12, 'quote-post', 42, 13, 1, 2, 1, 1597144986),
(13, 'reply-discussion', 0, 13, 1, 1, 1, 1597144986),
(109, 'subscribe', 0, 13, 1, 1, 1, 1607966262),
(86, 'subscribe', 0, 13, 1, 1, 1, 1601477130),
(85, 'reply-discussion', 0, 13, 1, 1, 1, 1601477051),
(84, 'reply-discussion', 0, 13, 1, 1, 1, 1601477033),
(83, 'reply-discussion', 0, 13, 1, 1, 1, 1601476912),
(80, 'reply-discussion', 0, 13, 1, 1, 1, 1598919320),
(79, 'reply-discussion', 0, 13, 1, 1, 1, 1598919291),
(78, 'reply-discussion', 0, 13, 1, 1, 1, 1598919116),
(76, 'reply-discussion', 0, 13, 1, 1, 1, 1598918957),
(30, 'reaction-like', 42, 0, 1, 2, 1, 1597527781),
(77, 'reply-discussion', 0, 13, 1, 1, 1, 1598918980),
(33, 'reaction-love', 6, 0, 1, 1, 1, 1597685505),
(34, 'reaction-love', 6, 0, 1, 1, 1, 1597685592),
(35, 'reaction-love', 6, 0, 1, 1, 1, 1597685602),
(36, 'reaction-love', 6, 0, 1, 1, 1, 1597685642),
(37, 'reaction-love', 6, 0, 1, 1, 1, 1597685723),
(38, 'reaction-love', 6, 0, 1, 1, 1, 1597685768),
(39, 'reaction-love', 6, 0, 1, 1, 1, 1597685810),
(40, 'reaction-love', 6, 0, 1, 1, 1, 1597685933),
(41, 'reaction-love', 6, 0, 1, 1, 1, 1597686142),
(42, 'reaction-love', 6, 0, 1, 1, 1, 1597686289),
(43, 'reaction-love', 6, 0, 1, 1, 1, 1597686544),
(44, 'reaction-love', 6, 0, 1, 1, 1, 1597686624),
(45, 'reaction-love', 6, 0, 1, 1, 1, 1597686649),
(46, 'reaction-love', 6, 0, 1, 1, 1, 1597687361),
(47, 'reaction-haha', 6, 0, 1, 1, 1, 1597688025),
(48, 'reaction-haha', 6, 0, 1, 1, 1, 1597688103),
(49, 'reaction-love', 6, 0, 1, 1, 1, 1597688123),
(50, 'reaction-haha', 6, 0, 2, 1, 1, 1597688177),
(111, 'reaction-love', 60, 0, 1, 1, 1, 1607966437),
(110, 'reply-discussion', 0, 13, 1, 1, 1, 1607966262),
(87, 'reply-discussion', 0, 13, 1, 1, 1, 1601477130),
(72, 'reply-discussion', 0, 13, 1, 1, 1, 1598280027),
(51, 'reaction-love', 6, 0, 1, 1, 1, 1597688969),
(52, 'reaction-love', 6, 0, 1, 1, 1, 1597689172),
(53, 'reaction-angry', 6, 0, 1, 1, 1, 1597689203),
(54, 'reaction-haha', 6, 0, 1, 1, 1, 1597689213),
(55, 'reaction-love', 6, 0, 1, 1, 1, 1597689623),
(60, 'reaction-love', 6, 0, 1, 1, 1, 1597691095),
(68, 'reaction-love', 5, 0, 1, 1, 1, 1597691642),
(113, 'subscribe', 0, 13, 1, 1, 1, 1608165658),
(114, 'reply-discussion', 0, 13, 1, 1, 1, 1608165658),
(115, 'subscribe', 0, 13, 1, 1, 1, 1608214807),
(116, 'reply-discussion', 0, 13, 1, 1, 1, 1608214808),
(117, 'subscribe', 0, 13, 1, 1, 1, 1608214993),
(118, 'reply-discussion', 0, 13, 1, 1, 1, 1608214993),
(119, 'subscribe', 0, 13, 1, 1, 1, 1608216886),
(120, 'reply-discussion', 0, 13, 1, 1, 1, 1608216886),
(121, 'subscribe', 0, 13, 1, 1, 1, 1608217092),
(122, 'reply-discussion', 0, 13, 1, 1, 1, 1608217092),
(123, 'tagged-user', 0, 13, 1, 2, 1, 1608217150),
(124, 'subscribe', 0, 13, 1, 1, 1, 1608217150),
(125, 'reply-discussion', 0, 13, 1, 1, 1, 1608217150),
(126, 'reaction-love', 66, 0, 1, 1, 1, 1608235496),
(128, 'reply-discussion', 0, 23, 1, 1, 1, 1612566175),
(132, 'reply-discussion', 0, 1, 1, 1, 1, 1614623260),
(133, 'quote-post', 71, 23, 1, 1, 1, 1615120490),
(134, 'reply-discussion', 0, 23, 1, 1, 1, 1615120490),
(135, 'quote-post', 71, 23, 1, 1, 1, 1615160134),
(136, 'reply-discussion', 0, 23, 1, 1, 1, 1615160134),
(137, 'quote-post', 71, 23, 1, 1, 1, 1615160967),
(138, 'reply-discussion', 0, 23, 1, 1, 1, 1615160967),
(411, 'reaction-like', 74, 0, 1, 1, 0, 1652798918),
(139, 'reply-discussion', 0, 37, 2, 1, 1, 1615675212),
(140, 'reply-discussion', 0, 39, 1, 1, 1, 1615832096),
(141, 'reply-discussion', 0, 39, 1, 1, 1, 1615832902),
(142, 'reply-discussion', 0, 39, 1, 1, 1, 1615839948),
(143, 'reply-discussion', 0, 39, 1, 1, 1, 1615840058),
(144, 'reply-discussion', 0, 39, 1, 1, 1, 1616025452),
(145, 'reply-discussion', 0, 40, 1, 1, 1, 1616070508),
(146, 'reply-discussion', 0, 42, 1, 1, 1, 1616071854),
(147, 'reply-discussion', 0, 37, 1, 1, 1, 1616157541),
(148, 'reply-discussion', 0, 37, 2, 1, 1, 1616158041),
(149, 'reply-discussion', 0, 47, 1, 1, 0, 1617037400),
(156, 'reply-discussion', 0, 43, 1, 1, 0, 1618330202),
(159, 'reply-discussion', 0, 102, 1, 1, 0, 1618336715),
(161, 'reply-discussion', 0, 102, 1, 1, 0, 1618535373),
(162, 'reply-discussion', 0, 102, 1, 1, 0, 1618535395),
(163, 'reply-discussion', 0, 102, 1, 1, 0, 1618535629),
(164, 'reply-discussion', 0, 102, 1, 1, 0, 1618616138),
(166, 'reply-discussion', 0, 114, 1, 1, 0, 1618690160),
(167, 'reply-discussion', 0, 114, 1, 1, 0, 1618690191),
(168, 'reply-discussion', 0, 114, 1, 1, 0, 1618690220),
(173, 'reply-discussion', 0, 43, 1, 1, 0, 1624276854),
(174, 'reply-discussion', 0, 43, 1, 1, 0, 1624278337),
(175, 'reply-discussion', 0, 43, 1, 1, 0, 1624278387),
(208, 'reply-discussion', 0, 43, 1, 1, 0, 1624894989),
(209, 'reply-discussion', 0, 43, 1, 1, 0, 1624895208),
(210, 'reply-discussion', 0, 43, 1, 1, 0, 1624898212),
(211, 'reply-discussion', 0, 43, 1, 1, 0, 1624898686),
(212, 'reply-discussion', 0, 43, 1, 1, 0, 1624898709),
(213, 'reply-discussion', 0, 43, 1, 1, 0, 1624898715),
(214, 'reply-discussion', 0, 43, 1, 1, 0, 1624898746),
(215, 'reply-discussion', 0, 43, 1, 1, 0, 1624899150),
(216, 'reply-discussion', 0, 43, 1, 1, 0, 1624899509),
(217, 'reply-discussion', 0, 43, 1, 1, 0, 1624899599),
(218, 'reply-discussion', 0, 43, 1, 1, 0, 1624899746),
(219, 'tagged-user', 0, 43, 1, 2, 0, 1625606564),
(220, 'reply-discussion', 0, 43, 1, 1, 0, 1625606564),
(221, 'reply-discussion', 0, 117, 1, 1, 0, 1625666547),
(222, 'reply-discussion', 0, 118, 1, 1, 0, 1625706313),
(223, 'reply-discussion', 0, 119, 1, 1, 0, 1625706489),
(224, 'reply-discussion', 0, 120, 1, 1, 0, 1625706597),
(226, 'reply-discussion', 0, 43, 1, 1, 0, 1632101392),
(228, 'reply-discussion', 0, 37, 1, 1, 0, 1633975620),
(229, 'reply-discussion', 0, 128, 1, 1, 0, 1638470718),
(230, 'reaction-angry', 220, 0, 1, 1, 0, 1638470734),
(231, 'tagged-user', 0, 43, 1, 2, 0, 1639601785),
(232, 'reply-discussion', 0, 43, 1, 1, 0, 1639601785),
(233, 'reply-discussion', 0, 43, 1, 1, 0, 1639746171),
(234, 'reply-discussion', 0, 43, 1, 1, 0, 1639746252),
(235, 'reply-discussion', 0, 43, 1, 1, 0, 1639746389),
(236, 'reply-discussion', 0, 43, 1, 1, 0, 1639746807),
(237, 'reply-discussion', 0, 43, 1, 1, 0, 1639746830),
(238, 'reply-discussion', 0, 43, 1, 1, 0, 1639747036),
(239, 'reply-discussion', 0, 43, 1, 1, 0, 1639747084),
(240, 'reply-discussion', 0, 25, 1, 1, 0, 1640605106),
(241, 'reply-discussion', 0, 25, 1, 1, 0, 1640605672),
(242, 'reply-discussion', 0, 43, 1, 1, 0, 1640607615),
(243, 'reply-discussion', 0, 39, 1, 1, 0, 1641145577),
(244, 'reply-discussion', 0, 39, 1, 1, 0, 1641146174),
(245, 'reply-discussion', 0, 39, 1, 1, 0, 1641146537),
(246, 'reply-discussion', 0, 43, 1, 1, 0, 1642337150),
(247, 'reply-discussion', 0, 39, 1, 1, 0, 1644021290),
(435, 'reply-discussion', 0, 43, 1, 1, 0, 1652840993),
(455, 'reply-discussion', 0, 129, 1, 1, 0, 1654615570),
(456, 'quote-post', 239, 129, 1, 1, 0, 1655983805),
(457, 'reply-discussion', 0, 129, 1, 1, 0, 1655983805),
(462, 'reply-discussion', 0, 130, 1, 1, 0, 1658499008),
(479, 'reply-discussion', 0, 27, 1, 1, 0, 1673961776),
(480, 'reply-discussion', 0, 37, 1, 1, 0, 1673962022),
(481, 'reply-discussion', 0, 27, 1, 1, 0, 1673963139),
(482, 'reply-discussion', 0, 133, 1, 1, 0, 1673964481),
(483, 'reply-discussion', 0, 27, 1, 1, 0, 1673964581),
(484, 'reply-discussion', 0, 129, 1, 1, 0, 1673972463),
(485, 'reply-discussion', 0, 129, 1, 1, 0, 1673992852),
(530, 'reply-discussion', 0, 134, 1, 1, 0, 1674310683),
(531, 'reply-discussion', 0, 135, 1, 1, 0, 1675044757),
(532, 'reply-discussion', 0, 135, 1, 1, 0, 1675045354),
(533, 'reply-discussion', 0, 135, 1, 1, 0, 1675047624),
(534, 'quote-post', 254, 134, 1, 1, 0, 1675048218),
(535, 'reply-discussion', 0, 134, 1, 1, 0, 1675048218),
(536, 'quote-post', 81, 32, 1, 1, 0, 1675048318),
(537, 'reply-discussion', 0, 32, 1, 1, 0, 1675048318),
(538, 'reply-discussion', 0, 135, 1, 1, 0, 1675048599),
(539, 'reply-discussion', 0, 135, 1, 1, 0, 1675049178),
(540, 'reply-discussion', 0, 129, 1, 1, 0, 1675079942),
(541, 'quote-post', 255, 134, 1, 1, 0, 1675081212),
(542, 'reply-discussion', 0, 134, 1, 1, 0, 1675081212),
(543, 'reply-discussion', 0, 134, 1, 1, 0, 1675082234),
(544, 'reply-discussion', 0, 134, 1, 1, 0, 1675083767),
(545, 'reply-discussion', 0, 134, 1, 1, 0, 1675084068),
(546, 'reply-discussion', 0, 135, 1, 1, 0, 1675086246),
(547, 'reply-discussion', 0, 134, 1, 1, 0, 1675086282),
(548, 'reply-discussion', 0, 135, 1, 1, 0, 1675087681),
(549, 'reply-discussion', 0, 129, 1, 1, 0, 1675087741),
(550, 'reply-discussion', 0, 129, 1, 1, 0, 1675087782),
(551, 'reply-discussion', 0, 129, 1, 1, 0, 1675087805),
(552, 'reply-discussion', 0, 34, 1, 1, 0, 1675089260),
(553, 'reply-discussion', 0, 34, 1, 1, 0, 1675089397);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin_navigations`
--
ALTER TABLE `admin_navigations`
  ADD PRIMARY KEY (`nav_id`);

--
-- Tablo için indeksler `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`attach_id`);

--
-- Tablo için indeksler `attachment_filetypes`
--
ALTER TABLE `attachment_filetypes`
  ADD PRIMARY KEY (`type_id`);

--
-- Tablo için indeksler `bbmedias`
--
ALTER TABLE `bbmedias`
  ADD PRIMARY KEY (`media_id`);

--
-- Tablo için indeksler `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`discussion_id`);

--
-- Tablo için indeksler `discussion_subscriptions`
--
ALTER TABLE `discussion_subscriptions`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Tablo için indeksler `discussion_views`
--
ALTER TABLE `discussion_views`
  ADD PRIMARY KEY (`view_id`);

--
-- Tablo için indeksler `editor_buttons`
--
ALTER TABLE `editor_buttons`
  ADD PRIMARY KEY (`button_id`);

--
-- Tablo için indeksler `editor_toolbars`
--
ALTER TABLE `editor_toolbars`
  ADD PRIMARY KEY (`toolbar_id`);

--
-- Tablo için indeksler `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`forum_id`);

--
-- Tablo için indeksler `moderations`
--
ALTER TABLE `moderations`
  ADD PRIMARY KEY (`moderation_id`);

--
-- Tablo için indeksler `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Tablo için indeksler `post_bookmarks`
--
ALTER TABLE `post_bookmarks`
  ADD PRIMARY KEY (`bookmark_id`);

--
-- Tablo için indeksler `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Tablo için indeksler `post_reports`
--
ALTER TABLE `post_reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Tablo için indeksler `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Tablo için indeksler `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`sessions_id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- Tablo için indeksler `socialsites`
--
ALTER TABLE `socialsites`
  ADD PRIMARY KEY (`site_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Tablo için indeksler `user_bans`
--
ALTER TABLE `user_bans`
  ADD PRIMARY KEY (`ban_id`);

--
-- Tablo için indeksler `user_friendships`
--
ALTER TABLE `user_friendships`
  ADD PRIMARY KEY (`friendship_id`);

--
-- Tablo için indeksler `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Tablo için indeksler `user_notifications`
--
ALTER TABLE `user_notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin_navigations`
--
ALTER TABLE `admin_navigations`
  MODIFY `nav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Tablo için AUTO_INCREMENT değeri `attachments`
--
ALTER TABLE `attachments`
  MODIFY `attach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `attachment_filetypes`
--
ALTER TABLE `attachment_filetypes`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `bbmedias`
--
ALTER TABLE `bbmedias`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `discussions`
--
ALTER TABLE `discussions`
  MODIFY `discussion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- Tablo için AUTO_INCREMENT değeri `discussion_subscriptions`
--
ALTER TABLE `discussion_subscriptions`
  MODIFY `subscription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `discussion_views`
--
ALTER TABLE `discussion_views`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- Tablo için AUTO_INCREMENT değeri `editor_buttons`
--
ALTER TABLE `editor_buttons`
  MODIFY `button_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `editor_toolbars`
--
ALTER TABLE `editor_toolbars`
  MODIFY `toolbar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `forums`
--
ALTER TABLE `forums`
  MODIFY `forum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `moderations`
--
ALTER TABLE `moderations`
  MODIFY `moderation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- Tablo için AUTO_INCREMENT değeri `post_bookmarks`
--
ALTER TABLE `post_bookmarks`
  MODIFY `bookmark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Tablo için AUTO_INCREMENT değeri `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=447;

--
-- Tablo için AUTO_INCREMENT değeri `post_reports`
--
ALTER TABLE `post_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sessions`
--
ALTER TABLE `sessions`
  MODIFY `sessions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `socialsites`
--
ALTER TABLE `socialsites`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `user_bans`
--
ALTER TABLE `user_bans`
  MODIFY `ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `user_friendships`
--
ALTER TABLE `user_friendships`
  MODIFY `friendship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Tablo için AUTO_INCREMENT değeri `user_notifications`
--
ALTER TABLE `user_notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=556;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
