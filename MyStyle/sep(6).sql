-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2015 at 11:23 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sep`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL,
  `about_us` varchar(2000) NOT NULL,
  `History` varchar(2000) NOT NULL,
  `Chmn_msg` varchar(2000) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about_us`, `History`, `Chmn_msg`, `img_path`) VALUES
(1, 'About US', 'This is History', 'chairmans message', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `online` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `gender`, `telephone`, `status`, `online`) VALUES
(33, 'a', 'a', 'a', 'a', '2', 1, 1),
(34, 'sithira', 'sithira2011@gmail.com', '1', NULL, '0255', 1, 0),
(35, 'sithira', 'sithira20114@gmail.com', '1', NULL, '555', 1, 1),
(36, 'aa', 'sithira20112@gmail.com', 'a', 'm', '0716279549', 1, 1),
(37, 'sit', 'sitt@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'm', '0716279549', 1, 0),
(38, 'aaaa', 'aaa', 'aaa', NULL, NULL, 1, 1),
(39, 'ashen', 'ashen', 'ashen', NULL, NULL, NULL, 0),
(40, 'sithira', 'sithira2014@gmail.com', '87d4eeb7dec7686410748d174c0e0a11', 'Male', '0716279549', 1, 0),
(41, 'sit', 'chandimalperera7890@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'm', '0716279549', 1, 0),
(42, 'sit', 'chandimalperera7890@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'm', '0716279549', NULL, 0),
(43, 'sit', 'chandimalperera7890@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'm', '0716279549', 1, 1),
(44, 'sit', 'chandimalperera7890@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'm', '0716279549', 1, 1),
(45, 's', 's@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', 'm', '0716279549', 1, 1),
(46, 's', 's@gmail.com', '202cb962ac59075b964b07152d234b70', 'm', '0716279549', NULL, 1),
(47, 'sithira', 'a@gmail.com', '74b87337454200d4d33f80c4663dc5e5', 'm', '0716279549', NULL, 1),
(48, 'Admin', 'aa@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 'Male', '0716279549', 1, 1),
(49, 'sithira', 'ss@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', 'm', '0716279549', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
  `idcat` int(11) NOT NULL,
  `date` varchar(45) DEFAULT '2015-3-22'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT '2015-03-22',
  `Description` varchar(45) DEFAULT NULL,
  `cat_link` varchar(1000) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `cat_name`, `date`, `Description`, `cat_link`) VALUES
(1, 'Hotel Product', '2015-03-20', 'Manufactured for hotel Items', '#'),
(2, 'Promotional', '2015-03-18', 'Promotional Product information', '#'),
(3, 'Advertising', '2015-03-21', 'Advertising purposes', '#'),
(4, 'Souvenirs', '2015-03-22', 'Souvenirs', '#'),
(5, 'Online Store', '2015-03-22', 'Online Store', '#'),
(6, 'Sewing Classes', '2015-03-22', 'Sewing Classes', '#');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` varchar(255) NOT NULL DEFAULT '',
  `to` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `to` (`to`),
  KEY `from` (`from`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=429 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `message`, `sent`, `recd`) VALUES
(1, 'a', 'aa', 'lol', '2015-05-08 16:26:11', 0),
(11, 'a', 'b', 'lol', '2015-05-08 16:43:32', 1),
(12, 'b', 'a', 'n', '2015-05-08 16:49:45', 1),
(13, 'a', 'b', 'l;lkj', '2015-05-08 16:56:37', 1),
(14, 'a', 'b', 'efd', '2015-05-08 16:58:08', 1),
(15, 'a', 'b', 'efe', '2015-05-08 16:58:09', 1),
(16, 'a', 'b', 'ss', '2015-05-08 17:00:42', 1),
(17, 'a', 'b', 'lll', '2015-05-08 17:01:58', 1),
(18, 'a', 'b', 'th', '2015-05-08 17:02:33', 1),
(318, 'Admin', 'sithira', 'ff', '2015-05-10 16:25:08', 1),
(319, 'Admin', 'sithira', 's', '2015-05-10 16:25:58', 1),
(320, 'sithira', 'Admin', 'ddd', '2015-05-10 16:26:03', 1),
(321, 'Guest088', 'Admin', 'sss', '2015-05-10 16:27:24', 1),
(322, 'Guest088', 'Admin', 'sooo', '2015-05-10 16:27:38', 1),
(323, 'Admin', 'Guest088', 'lol', '2015-05-10 16:27:47', 1),
(324, 'Guest065', 'Admin', 'dd', '2015-05-10 16:28:19', 1),
(325, 'Guest088', 'Admin', 'koo', '2015-05-10 16:30:42', 1),
(326, 'Admin', 'Guest065', 'll', '2015-05-10 16:31:43', 1),
(327, 'Guest088', 'Admin', 'hoo', '2015-05-10 16:41:33', 1),
(328, 'Guest088', 'Admin', 'www', '2015-05-10 16:41:48', 1),
(329, 'Admin', 'Guest088', 'www', '2015-05-10 16:41:53', 1),
(330, 'Admin', 'Guest088', 'aw', '2015-05-10 16:42:12', 1),
(331, 'Guest088', 'Admin', 'qq', '2015-05-10 16:42:19', 1),
(332, 'Admin', 'sithira', 'lo', '2015-05-10 16:55:40', 1),
(333, 'Admin', 'sithira', 'lo', '2015-05-10 16:55:40', 1),
(334, 'Guest087', 'Admin', 'cc', '2015-05-10 16:57:44', 1),
(335, 'Admin', 'Guest087', 'ddd', '2015-05-10 16:58:35', 1),
(336, 'Guest087', 'Admin', 'sss', '2015-05-10 16:58:40', 1),
(337, 'Guest094', 'Admin', 'ss', '2015-05-10 17:00:15', 1),
(338, 'Admin', 'Guest087', 'ss', '2015-05-10 17:00:43', 0),
(339, 'Guest077', 'Admin', 'lol', '2015-05-10 17:01:37', 1),
(340, 'Guest03', 'Admin', 'ss', '2015-05-10 17:02:26', 1),
(341, 'Guest03', 'Admin', 'ss', '2015-05-10 17:02:35', 1),
(342, 'Guest03', 'Admin', 'jkk', '2015-05-10 17:03:07', 1),
(343, 'Guest03', 'Admin', 'kk', '2015-05-10 17:03:16', 1),
(344, 'Guest03', 'Admin', 'aa', '2015-05-10 17:03:49', 1),
(345, 'Guest03', 'Admin', ';p', '2015-05-10 17:04:17', 1),
(346, 'Guest01', 'Admin', 'ss', '2015-05-10 17:39:01', 1),
(347, '', 'Guest01', 'jj', '2015-05-10 19:58:16', 1),
(348, 'Admin', 'Admin', 'lol', '2015-05-11 10:46:23', 1),
(349, 'sithira', 'Admin', 'lol', '2015-05-11 10:47:14', 1),
(350, 'Admin', 'Admin', 'lop', '2015-05-11 10:51:24', 1),
(351, 'Admin', 'aaaa', 'lol', '2015-05-11 10:52:05', 0),
(352, 'Guest05', 'Admin', 'lol', '2015-05-11 10:52:52', 1),
(353, 'Admin', 'Guest05', 'llo', '2015-05-11 10:57:14', 1),
(354, 'Admin', 'Guest05', 'ooo', '2015-05-11 10:57:50', 1),
(355, 'sithira', 'Admin', 'fggg', '2015-05-11 12:40:06', 1),
(356, 'sithira', 'Admin', 'lol', '2015-05-11 12:40:29', 1),
(375, 'Admin', 'Guest00', 'aa', '2015-05-12 02:26:20', 1),
(376, 'Guest01', 'Admin', 'aa', '2015-05-12 02:26:41', 1),
(377, 'Admin', 'Guest01', 'aa', '2015-05-12 02:27:03', 1),
(378, 'Guest01', 'Admin', 'lop', '2015-05-12 02:27:09', 1),
(379, 'Guest01', 'Admin', 'lol', '2015-05-12 09:16:00', 1),
(380, '', 'Guest01', 'hii', '2015-05-12 09:16:40', 1),
(381, 'Admin', 'Guest01', 'so', '2015-05-12 09:17:13', 1),
(382, 'Guest01', 'Admin', 'lol', '2015-05-12 12:49:06', 1),
(383, 'Guest01', 'Admin', 'kooo', '2015-05-12 12:49:49', 1),
(384, 'Admin', 'Guest01', 'sooo', '2015-05-12 12:56:58', 1),
(385, 'Guest01', 'Admin', 'ko', '2015-05-12 12:59:49', 1),
(386, 'Guest01', 'Admin', 'hii', '2015-05-12 14:13:02', 1),
(387, 'Guest01', 'Admin', 'how', '2015-05-12 14:15:42', 1),
(388, 'Admin', 'Guest01', 'sooo', '2015-05-12 14:16:06', 1),
(389, 'Guest01', 'Admin', 'wt do u  want', '2015-05-12 14:16:58', 1),
(390, 'Guest01', 'Admin', 'wt ?', '2015-05-12 14:21:12', 1),
(391, 'Admin', 'Guest01', 'sooo', '2015-05-12 14:21:24', 1),
(392, 'Guest01', 'Admin', 'hii', '2015-05-12 14:22:11', 1),
(393, 'Admin', 'Guest01', 'aaa', '2015-05-12 14:22:28', 1),
(394, 'Admin', 'Guest01', 'wt', '2015-05-12 14:22:40', 1),
(395, 'Guest01', 'Admin', '(Y)', '2015-05-12 14:22:51', 1),
(396, 'sithira', 'Admin', 'aa', '2015-05-12 14:24:04', 1),
(397, 'Admin', 'sithira', 'soo', '2015-05-12 14:24:15', 1),
(398, 'Admin', 'Guest01', 'xx', '2015-05-12 14:30:54', 1),
(399, 'Admin', 'aa', 'jl', '2015-05-20 11:48:22', 0),
(400, 'Admin', 'Admin', 'lol', '2015-05-20 11:50:15', 1),
(401, 'Guest00', 'Admin', 'hii', '2015-05-20 11:52:35', 1),
(402, 'Guest02', 'Guest00', 'hii', '2015-05-20 11:55:51', 1),
(403, 'Guest02', 'Guest00', 'lol', '2015-05-20 11:56:04', 1),
(404, 'Guest02', 'Admin', ';kkk', '2015-05-20 11:56:40', 1),
(405, 'Guest01', 'Admin', 'lol', '2015-06-03 10:27:29', 1),
(406, 'Admin', 'Guest01', 'soo', '2015-06-03 10:29:25', 1),
(407, 'Admin', 'Guest01', 'what can i do for you?', '2015-06-03 10:29:39', 1),
(408, '', 'Admin', 'ddd', '2015-06-03 13:12:59', 1),
(409, '', 'Guest01', 'kk', '2015-06-03 13:13:11', 1),
(410, '', 'Guest01', 'kk', '2015-06-03 14:35:08', 1),
(411, '', 'ashen', 'k', '2015-06-03 14:35:14', 0),
(412, 'Guest04', 'Admin', 'lol', '2015-06-03 14:45:50', 1),
(413, '', 'aaaa', 'lol', '2015-06-03 14:48:29', 0),
(414, '', 'aaaa', 'll', '2015-06-04 08:10:34', 0),
(415, 'Admin', 'Guest04', 'dd', '2015-06-04 08:12:51', 0),
(416, 'Admin', 'Guest04', 'lol', '2015-06-04 08:18:58', 0),
(417, '', 'Guest001', 'lol', '2015-06-04 08:20:37', 0),
(418, '', 'aa', 'l', '2015-06-04 08:52:43', 0),
(419, 'Admin', 'aa', 'hii', '2015-06-04 11:12:45', 0),
(420, 'Admin', 'Admin', 'hii', '2015-06-04 11:59:28', 1),
(421, 'Admin', 'Admin', 'lol', '2015-06-04 11:59:42', 1),
(422, 'Admin', 'Admin', 'll', '2015-06-04 12:01:01', 1),
(423, 'Admin', 'Admin', 'hiiii', '2015-06-04 14:40:11', 1),
(424, 'Admin', 'Admin', 'hello', '2015-06-04 14:40:23', 1),
(425, 'Admin', 'Admin', 'lol', '2015-06-04 14:45:07', 1),
(426, 'Guest01', 'Admin', 'lol', '2015-06-16 21:02:25', 1),
(427, 'Guest00', 'Admin', 'lol', '2015-06-20 11:10:07', 1),
(428, 'Admin', 'Admin', 'ddd', '2015-06-20 12:35:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('033c5edefb8db71ce7d67c49c7750efe', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512016, ''),
('064e3deb1763541700d23a6b927233d9', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512014, ''),
('0702c5fd97b88064c177c089b14a5a7a', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512737, ''),
('07d33468e416112ed527fbff65fb3d80', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430511903, ''),
('0a89f96070f4e879189f438b9a2da24a', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430562654, ''),
('0dfc109fce6812a4cb0436af828a8cdd', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512575, ''),
('14bda5691aa52dd2f009235b0b7af5d3', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512935, ''),
('16c3c93376c2e7ad6b08147541b35f9f', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512665, ''),
('186929ce51ef14080ca853a71fded9bb', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:37.0) Gecko', 1430646296, ''),
('1b5f4a7f355086c6f58bb0321e03eb05', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512884, ''),
('1c1d6b83144a34f3bf67a620df7551da', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512675, ''),
('1ce8ceb58d1efb743cc20d262de06fce', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430513664, ''),
('1e86267a56bf4b8c0b33bd4ffcd479c7', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512932, ''),
('23b7221ea8210387abbf19e19b543b74', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512922, ''),
('25245c3bb5649759c485c834aea2ba5d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430511453, ''),
('279791e3c50f12dbccfd71b51dcd46ee', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512064, ''),
('2866242201e2c1f8e1e568d3c58dae8f', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430511378, ''),
('292e13ee29163a73a9f78c395fb4bf01', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512580, ''),
('31640d1aac5ae7b8fc554dd71d0e9d04', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430562553, ''),
('39f69dd847ce0f2dbb442f14a978f177', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512604, ''),
('3bfd7b0af014a32a987fafdece5d9817', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512093, ''),
('3ef4f5fa3b3c4200214011d00d357732', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512694, ''),
('3f00d535e092ef4d265b923abf263a94', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:37.0) Gecko', 1430646342, ''),
('3f56f81df027e98b351866a52b0cedc2', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512811, ''),
('3f572d535fa7b0de30add981dd6c9a9c', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512822, ''),
('3f8f6a7480ce1c82961589a357405295', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430562590, ''),
('3fe1c846491f20a5e3511690a83df73e', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512851, ''),
('40d73bd7835b7c710740682dbd174971', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430511942, ''),
('4306ed8bcaf4027117b6644e78e321f9', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512470, ''),
('43f17ccbdc7c13a51c48ef068734e382', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430513294, ''),
('4504a469ab8e70f13bb8f576d5288ef3', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430511908, ''),
('47f57d3340d95b620c55e8e0d6f3c0b4', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512042, ''),
('48df03d300bfd8aad94eeb2e5c6ca1bb', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512962, ''),
('4efc7e719f0060e17344f4e2910adb82', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512855, ''),
('4f54d5e1e6214abf24ca301645e03b41', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430561916, ''),
('553f7e84e78d48949dd61e12b23565c8', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512721, ''),
('5f05846a3306c58c43c1821d54c6d375', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430562652, ''),
('611dfba5e02fc7965dbf6613497d53fa', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512847, ''),
('622f14524382a3632e3049a504939f2b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430511450, ''),
('691eacfc4a4e404ef95b2cfe6c3b74a6', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512539, ''),
('6b8387b3472aba12c768cc3e863adaa0', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512949, ''),
('6cd3a971f682376a99310a8e898cab1c', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512944, ''),
('6cecbe2999dda4c609b2b59f921e0633', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512928, ''),
('6dfd4ac62894116b1ca6413dd2a28500', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512060, ''),
('6f9fe867f662633dcbf42f109cba9036', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512668, ''),
('704c4f6d7680c6773ead170c6080a5e7', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430511883, ''),
('7b0a44cd0e171a4793689313405de64f', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512879, ''),
('80a24780cff8f055003012cc6bbd565e', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430562548, ''),
('869353a158300a139320fe96cbbbb5fa', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512472, ''),
('88dc7418b3ea2a42364779bff8763248', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512095, ''),
('8ba2d05547aa32f3715d9f131547c858', '127.0.0.1', 'Java/1.8.0_31', 1430512917, ''),
('8c0639743794f8de53b69bb7569fbcc4', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430562632, ''),
('8dea098b2a1b0a2fe10203bda44edf75', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512721, ''),
('967730987cdcf1639b0d4288eeaf633b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512940, ''),
('9b385f7727fc5af4b763e75a79a33017', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512690, ''),
('9c56d6934634c507f2f9a85e518b9fc0', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512113, ''),
('9e819e09d3443baafeaa2da16751446e', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430511463, ''),
('9ec52911b3bf49e44ed3d7aa4df74508', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430511838, ''),
('a5362de2478c339e1302632106e23e91', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430562612, ''),
('a987a37fbb3b18520335a9583546ab1c', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512836, ''),
('a9eb0b2ff9a6daa18c9d6a4500fe0931', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512116, ''),
('af89fc1dccbdd8e701c569aa5770cf14', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430511886, ''),
('b33ba272914804d12a8ba817e85fcc75', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512839, ''),
('b4f48135b946cbd7c7f1b543f9acd69d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430511841, ''),
('b56b860c669930228d4097616b20cb83', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512737, ''),
('baec5edea5afe9414e6418a3b0a171cb', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430561928, ''),
('bbd335bfaaff31334ba188c9f37f451e', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512045, ''),
('bc1d34879c07c27c46fb086251571055', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512843, ''),
('c144b1996164af6688666acf233795bd', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512495, ''),
('c1f016dd1c4744127a335a784bd67a45', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512715, ''),
('c374c100d7cf2d8628ab1da0c822b25a', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430562592, ''),
('cdd40b7709312c76aaaf3f33cd5df78f', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512699, ''),
('d18b348813832d9b5800408f03bdf236', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430562634, ''),
('d211b002b6bd19ab75626200c4200ded', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430513555, ''),
('d37f90810ea6da0ebc70e145f1e8853d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512872, ''),
('de5505486439f9aaab68dc6700f2a2e5', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430511946, ''),
('deb1101b9d502da455f985fa97ddefe2', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430513657, ''),
('e01d17d1a4f0a46f299011ef2273572b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512491, ''),
('e51e4ebf68ca93526645d06da948948e', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512502, ''),
('e7788e6a1a768f8846caa9cb54e65357', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512679, ''),
('eccd174187497158034b6929f7f5cce3', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512825, ''),
('f307f3eb9f4b0e271ef560b2d12635fe', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430562617, ''),
('fac28e08552e44cc32ff3b002c4df494', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430513575, ''),
('fc7dd8288e081cae696a2f9f3354e467', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512876, ''),
('fe9361a4b0fdc92aaa7fab41dff6a5cb', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', 1430512888, '');

-- --------------------------------------------------------

--
-- Table structure for table `ci_users`
--

CREATE TABLE IF NOT EXISTS `ci_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `registered_date` datetime NOT NULL,
  `status` int(5) NOT NULL,
  `online` int(5) NOT NULL,
  PRIMARY KEY (`user_id`,`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ci_users`
--

INSERT INTO `ci_users` (`user_id`, `user_name`, `user_email`, `user_password`, `registered_date`, `status`, `online`) VALUES
(1, 'Admin', 'aa@gmail.com', 'aaa', '0000-00-00 00:00:00', 1, 1),
(2, 'Sithira', 'a@gmail.com', 'aaa', '0000-00-00 00:00:00', 0, 0),
(3, 'Pramudith', 'b@gmail.com', 'b', '0000-00-00 00:00:00', 1, 1),
(4, 'Guest001', 'aaa@gmail.com', 'aaa', '0000-00-00 00:00:00', 1, 1),
(5, 'aaa', '', 'aaa', '0000-00-00 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `id_post` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `topic`, `name`, `email`, `comment`, `id_post`, `date`) VALUES
(1, 'Cap', 'Saman', 'Saman@gmail.com', 'What is the price of this cap?', 1, '2015-04-30 14:52:06'),
(2, 'Cap', 'Amal', 'Amal@yahoo.com', 'This is a nice cap!', 1, '2015-05-01 06:20:42'),
(3, 'Cap', 'Niaml', 'Nimal@yahoo.com', 'This is a nice cap!', 2, '2015-05-01 06:20:45'),
(4, '', 'Test', 'Test', 'Test', 1, '2015-05-01 08:10:25'),
(13, 'Cap', 'sasa', 'sasasas', 'This is Test Comment', 2, '2015-05-01 08:59:31'),
(22, 'T-Shirt', 'Saman', 'Saman', 'Whereis the details of this tshirt?', 2, '2015-05-02 03:55:09'),
(23, 'Clothes Pack', 'Amal', 'Amal', 'This Cloth Pack is beautiful !!!', 2, '2015-05-02 04:18:15'),
(24, 'Clothes Pack', 'Saman', 'Saman', 'This is nice', 2, '2015-05-02 04:22:47'),
(26, 'Clothes Pack', 'please', 'please', 'please', 2, '2015-05-02 04:25:51'),
(31, 'T-Shirt', 'tst', 'T1', 't1', 2, '2015-05-02 05:48:29'),
(32, 'Clothes', 'MyStyle', 'MyStyle', 'Test', 0, '2015-06-20 08:47:30'),
(33, 'Clothes', 'MyStyle', 'MyStyle', '0', 0, '2015-06-20 08:47:31'),
(34, 'Clothes', 'MyStyle', 'MyStyle', '0', 0, '2015-06-20 08:47:32'),
(35, 'Clothes', 'MyStyle', 'MyStyle', '0', 0, '2015-06-20 08:47:32'),
(36, 'Clothes', 'MyStyle', 'MyStyle', '0', 0, '2015-06-20 08:47:32'),
(37, 'Clothes', 'MyStyle', 'MyStyle', '0', 0, '2015-06-20 08:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Gender` varchar(45) DEFAULT NULL,
  `Contact_No` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `Name`, `Email`, `Gender`, `Contact_No`) VALUES
(3, 'Ashen', 'Ashe$@gmail.com', 'male', '071658984'),
(4, 'Sajith', 'sajja@gmail.com', 'male', '071627984');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Email` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `No` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Email`, `Name`, `Message`, `Status`, `Subject`, `No`) VALUES
('imantha788@gmail.com', 'imantha', 'helloooo', 'Success', 'feedback', 1),
('shaluka@gmail.com', 'ramesh', 'hiiii', 'Pending', 'feedback', 2),
('isuru@gmail.com', 'isuru', 'bad....', 'Pending', 'helloooo', 3),
('thilini@ramesh.com', 'thilini', 'that is good', 'Pending', 're feedback', 4),
('imantha788@gmail.com', 'shaluka', 'ok.......', 'Pending', 'ok', 5),
('abc@gmail.com', 'mino', 'hellooooo', 'Pending', 'ac', 6),
('deshani@gmail.com', 'deshani', 'not ok...', 'Pending', 'garbage', 7),
('perera@gmail.com', 'perer', 'sdddffgfgfgfg', 'Pending', 'ssd', 8),
('kesh@gmail.com', 'keshan', 'better improve', 'Pending', 'services', 9),
('dra@gmail.com', 'darsha', 'we want another stadium', 'Pending', 'regarding city', 10),
('ruwan@gmail.com', 'ruwan', 'better if can improve those', 'Pending', 'regarding services', 11),
('imantha788@gmail.com', 'imantha', 'hjhhh', 'Success', 'ggg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(105) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `path`, `date`) VALUES
(1, 'assets/images/1.jpg', '2015-03-15'),
(2, 'assets/images/2.jpg', '2015-03-15'),
(3, 'assets/images/3.jpg', '2015-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(105) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `topic` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `sub_cat` varchar(200) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `path`, `date`, `topic`, `description`, `type`, `sub_cat`) VALUES
(2, 'assets/images/items/2.jpg', '2015-03-17 18:30:00', 'Cap', 'This is a cap ', 'Promotional', 'Caps'),
(3, 'assets/images/items/3.jpg', '2015-03-17 18:30:00', 'Clothes Pack', 'This product is specially designed for gifts', 'Promotional', 'Test'),
(4, 'assets/images/items/4.jpg', '2015-03-18 18:30:00', 'T-Shirt', NULL, 'Promotional', 'Test'),
(5, 'assets/images/images_(10).jpg', NULL, 'TTTT', 'Just', 'Advertising', 'Membership Cards'),
(6, 'assets/images/items/3.jpg', '2015-05-10 14:07:29', 'dfd', 'fdfdf', 'Promotional', 'Cap');

-- --------------------------------------------------------

--
-- Table structure for table `item_rating`
--

CREATE TABLE IF NOT EXISTS `item_rating` (
  `item_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_rating`
--

INSERT INTO `item_rating` (`item_id`, `rating`) VALUES
(4, 2),
(2, 1),
(3, 2),
(5, 2),
(4, 2),
(2, 2),
(3, 2),
(5, 2),
(2, 3),
(3, 3),
(3, 4),
(3, 5),
(4, 3),
(4, 3),
(5, 3),
(2, 4),
(4, 5),
(5, 4),
(5, 4),
(4, 1),
(0, 3),
(0, 4),
(0, 1),
(0, 3),
(4, 2),
(2, 1),
(3, 2),
(5, 2),
(4, 2),
(2, 2),
(3, 2),
(5, 2),
(2, 3),
(3, 3),
(3, 4),
(3, 5),
(4, 3),
(4, 3),
(5, 3),
(2, 4),
(4, 5),
(5, 4),
(5, 4),
(4, 1),
(0, 3),
(0, 4),
(0, 1),
(0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mail_requests`
--

CREATE TABLE IF NOT EXISTS `mail_requests` (
  `req_id` int(11) NOT NULL AUTO_INCREMENT,
  `req_name` varchar(500) NOT NULL,
  `req_contactno` int(15) NOT NULL,
  `req_mail` varchar(500) NOT NULL,
  `req_request` varchar(5000) NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mail_requests`
--

INSERT INTO `mail_requests` (`req_id`, `req_name`, `req_contactno`, `req_mail`, `req_request`) VALUES
(1, 'fdSF', 3243, 'sdgsG', 'SDGS');

-- --------------------------------------------------------

--
-- Table structure for table `newsfeed`
--

CREATE TABLE IF NOT EXISTS `newsfeed` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `newsfeed`
--

INSERT INTO `newsfeed` (`news_id`, `heading`, `description`, `image`) VALUES
(9, 'Bridge reconstruction', '', 'http://localhost:8080/SEP/uploads/default_product.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `NIC` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `email`, `password`, `address`, `phone`, `image`, `lastname`, `level`, `NIC`) VALUES
(1, 'imantha', 'imantha788@gmail.com', '73bebce395b6f1efedcf6842fbdb4d76', '', '', '', 'shaluka', 'General', '940293014v'),
(2, 'chairmen', 'ch@gmail.com', '73bebce395b6f1efedcf6842fbdb4d76', '', '', '', 'chairmen', 'Chairmen', '940293014v'),
(3, 'admin', 'admin@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '', '', '', 'admin', 'Admin', '940293014v'),
(4, 'i', 'imantha7889@gmail.com', '865c0c0b4ab0e063e5caa3387c1a8741', '', '', '', 'i', 'General', '940293014V');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `sub_cat_name` varchar(100) NOT NULL,
  `sub_cat_date` date NOT NULL,
  `sub_cat_description` varchar(500) NOT NULL,
  `sub_cat_link` varchar(1000) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_cat_id`, `cat_id`, `cat_name`, `sub_cat_name`, `sub_cat_date`, `sub_cat_description`, `sub_cat_link`) VALUES
(1, 2, 'Promotional', 'Promotional T-Shirts', '2015-04-20', 'Promotional T-Shirts', '#'),
(2, 2, 'Promotional', 'Sports Wear', '2015-04-20', 'Sports Wear', '#'),
(3, 2, 'Promotional', 'Caps', '2015-04-20', 'Caps', '#'),
(4, 1, 'Hotel Product', 'Hotel Wear', '2015-04-20', 'Hotel Wear', '#'),
(5, 3, 'Advertising', 'Membership Cards', '2015-04-20', 'Membership Cards', '#'),
(6, 4, 'Souvenirs', 'Medals', '2015-04-20', 'Medals', '#'),
(7, 5, 'Online Store', 'Give aways', '2015-04-20', 'Give aways', '#'),
(8, 6, 'Sewing Classes', 'Dress Maling', '2015-04-20', 'Dress Maling', '#');

-- --------------------------------------------------------

--
-- Table structure for table `supplierregform`
--

CREATE TABLE IF NOT EXISTS `supplierregform` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `supplierrenotice`
--

CREATE TABLE IF NOT EXISTS `supplierrenotice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `supplierrenotice`
--

INSERT INTO `supplierrenotice` (`id`, `name`, `path`) VALUES
(2, 'CF_LabSheet_05.pdf', '/var/www/html/SEP/regform/'),
(3, 'CF_LabSheet_03.pdf', '/var/www/html/SEP/regform/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE IF NOT EXISTS `tbl_album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `album_cover_image` text,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1 = deleted , 0  =  not deleted',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `title`, `album_cover_image`, `is_deleted`, `status`, `added_date`, `added_by`, `updated_by`, `updated_date`) VALUES
(1, 'dsd', NULL, '0', 1, '2014-08-14 03:43:16', 1, NULL, NULL),
(2, 'jfgj', NULL, '0', 1, '2014-08-14 05:54:50', 1, NULL, NULL),
(3, 'jfgj', 'alc_1407997369-gallery-cat3.png', '0', 1, '2014-08-14 05:56:28', 1, 1, '2014-08-14 06:22:50'),
(4, 'jfgj', 'alc_1407995925-caters-high-speed-photography-21-jpg_182934.jpg', '0', 1, '2014-08-14 05:58:47', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album_category`
--

CREATE TABLE IF NOT EXISTS `tbl_album_category` (
  `album_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `album_id` int(11) NOT NULL,
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1 = deleted , 0  =  not deleted',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`album_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_album_category`
--

INSERT INTO `tbl_album_category` (`album_category_id`, `title`, `album_id`, `is_deleted`, `status`, `added_date`, `added_by`, `updated_by`, `updated_date`) VALUES
(1, 'sfs', 1, '0', 1, '2014-08-14 03:44:57', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album_image`
--

CREATE TABLE IF NOT EXISTS `tbl_album_image` (
  `album_image_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_category_id` int(11) NOT NULL,
  `caption` varchar(50) DEFAULT NULL,
  `image_thumb` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `is_cover_image` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1 = cover image , 0  =  not cover image',
  `is_deleted` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1 = deleted , 0  =  not deleted',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`album_image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_album_image`
--

INSERT INTO `tbl_album_image` (`album_image_id`, `album_category_id`, `caption`, `image_thumb`, `image`, `is_cover_image`, `is_deleted`, `status`, `added_date`, `added_by`, `updated_by`, `updated_date`) VALUES
(1, 1, 'asfs', 'caters-high-speed-photography-21-jpg_182934 (1).jpg', 'caters-high-speed-photography-21-jpg_182934 (1).jpg', '0', '0', 1, '2014-08-14 03:45:25', 1, NULL, NULL),
(2, 1, 'dasd', 'caters-high-speed-photography-21-jpg_182934 (2).jpg', 'caters-high-speed-photography-21-jpg_182934 (2).jpg', '0', '0', 1, '2014-08-14 03:45:47', 1, NULL, NULL),
(3, 1, 'gdgsd', 'menu-6.jpg,menu-8.jpg,menu-7.jpg', 'menu-6.jpg,menu-8.jpg,menu-7.jpg', '0', '1', 1, '2014-08-18 07:47:06', 1, NULL, NULL),
(4, 1, '', 'menu-6 (1).jpg', 'menu-6 (1).jpg', '0', '0', 1, '2014-08-18 07:48:38', 1, NULL, NULL),
(5, 1, '', 'menu-6 (1).jpg,menu-7 (1).jpg', 'menu-6 (1).jpg,menu-7 (1).jpg', '0', '1', 1, '2014-08-18 07:48:39', 1, NULL, NULL),
(6, 1, '', 'menu-6 (1).jpg,menu-7 (1).jpg,menu-8 (1).jpg', 'menu-6 (1).jpg,menu-7 (1).jpg,menu-8 (1).jpg', '0', '1', 1, '2014-08-18 07:48:40', 1, NULL, NULL),
(7, 1, '', 'img3 (1).jpg', 'img3 (1).jpg', '0', '0', 1, '2014-08-18 08:03:44', 1, NULL, NULL),
(8, 1, '', 'img5.jpg', 'img5.jpg', '0', '0', 1, '2014-08-18 08:03:44', 1, NULL, NULL),
(9, 1, '', 'img4.jpg', 'img4.jpg', '0', '0', 1, '2014-08-18 08:03:44', 1, NULL, NULL),
(10, 1, '', 'gallery-cat.png', 'gallery-cat.png', '0', '0', 1, '2014-08-18 08:10:53', 1, NULL, NULL),
(11, 1, '', 'gallery-cat (1).png', 'gallery-cat (1).png', '0', '0', 1, '2014-08-19 03:13:32', 1, NULL, NULL),
(12, 1, '', 'gallery-cat2.png', 'gallery-cat2.png', '0', '0', 1, '2014-08-19 03:14:11', 1, NULL, NULL),
(13, 1, '', 'gallery-cat (2).png', 'gallery-cat (2).png', '0', '0', 1, '2014-08-19 03:14:11', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE IF NOT EXISTS `tbl_brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_brands`
--

INSERT INTO `tbl_brands` (`brand_id`, `description`, `added_date`, `is_deleted`, `status`) VALUES
(23, 'new brands', '2014-08-06 05:06:06', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms_users`
--

CREATE TABLE IF NOT EXISTS `tbl_cms_users` (
  `cms_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_user_email` varchar(30) NOT NULL,
  `cms_user_password` varchar(50) NOT NULL,
  `cms_user_name` varchar(100) NOT NULL,
  `cms_user_added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cms_user_status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`cms_user_id`),
  KEY `cms_user_id` (`cms_user_id`,`cms_user_email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_cms_users`
--

INSERT INTO `tbl_cms_users` (`cms_user_id`, `cms_user_email`, `cms_user_password`, `cms_user_name`, `cms_user_added_date`, `cms_user_status`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Randika Nonis', '2014-07-24 11:52:46', '1'),
(4, 'admin2', '81dc9bdb52d04dc20036dbd8313ed055', 'lakmini', '2014-09-04 07:22:11', '0'),
(5, 'admin3', '1234', 'dilani', '2014-09-04 07:42:39', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contents`
--

CREATE TABLE IF NOT EXISTS `tbl_contents` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_title` varchar(100) NOT NULL,
  `content_image` varchar(50) DEFAULT NULL,
  `content` longtext NOT NULL,
  `content_hcode` varchar(20) NOT NULL,
  `delete_status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1 = deleted , 0  =  not deleted',
  `added_by` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_contents`
--

INSERT INTO `tbl_contents` (`content_id`, `content_title`, `content_image`, `content`, `content_hcode`, `delete_status`, `added_by`, `added_date`, `updated_by`, `updated_date`) VALUES
(1, 'About Us', 'ib_1409888432-Chrysanthemum.jpg', '<div class="col-md-8">\n	<p>\n		asss Sun Lanka Auto Traders (pvt) Ltd was founded on 16th may 2001. Today Sun Lanka become the one of the largest pioneer organization with the influential outlet network providing best products, on vehicle accessories, Vehicle Security Alarm system &amp; car audio &amp; video system and today sun lanka has become Sri Lanka&rsquo;s number one vehicle dressing company.</p>\n	<p>\n		Our work force consists of over 100 staff member including 40 well trained electricians to give the remarkable service to our customer. And also we have three major brands and approximately 500 products, 5000 items of that have own domestic market with our major seven branches which are situated Maradana, Narahenpita, Park Road, Kandana, Kurunegala, Kandy &amp; Galle.</p>\n	<p>\n		As a domestic leader of vehicle accessories &amp; vehicle security alarm systems in the industry we have planned to expand our branch network &amp; aim to provide quality customer satisfaction &amp; after sales service to our valuable customers.</p>\n	<p>\n		And also Sun Lanka will be the channel of vehicle related communications for Sri Lanka with the relevant bodies in the world. To introduce advance vehicle related technology to the Sri Lanka.&nbsp;&nbsp; &nbsp;</p>\n</div>\n<div class="col-md-4">\n	<h4>\n		<strong>Our Vision :</strong></h4>\n	<p>\n		A pioneer organization with an influential outlet-network providing best products, technology and service to customers.</p>\n	<hr />\n	<h4>\n		<strong>Our Mission</strong> :</h4>\n	<p>\n		To promote and market the best quality vehicle-related products in Sri Lanka, to improve sales &amp; after-sales service to customers, to provide a channel of vehicle-related communications for Sri Lanka with the relevant bodies in the world, to introduce advance vehiclerelatd technology to Sri Lanka.</p>\n</div>\n', 'ABOUTUS', '0', 1, '2014-05-28 07:12:16', NULL, NULL),
(2, 'Branches', 'ib_1408360739-dealers.png', '<div class="col-md-12 content-right">\n	<div class="row">\n		<div class="col-md-12">\n			Sun Lanka took an innovative step in the year 2000, now Sun lanka is proud to have an expanding number of branch located across the cuntry. For your convenience, Simply click on map and find details of Sun Lanka branch with our state-of-the-art facilities and workmanship had managed to be the market leading &quot;Service Organization&quot; in town. To become the &#39;Market Lader&#39; in the industry. we have always rendered the best of our service to customer. with kind supportive service and branded products. We managed to win a Motoring Socity today!<br />\n			<br />\n			We are open seven days a week (including Sundays and Poyadays) From 9.00am to 6.00pm to fulfill all your motoring needs. With our friendly Customer Service after sales, and ample parking space. We at Sun lanka - Maradana, Narahenpita, Park Road, Kandana, Kandy, Kurunegala, Galle.. Request your presence.. and feel the difference.!\n			<hr />\n		</div>\n	</div>\n	<section id="menu">\n	<div class="row">\n		<div class="col-md-3 col-sm-3 col-xs-12 search-results-wrap">\n<!--<h4 class="purple_head"><i class="fa fa-map-marker"></i>Dealers</h4>-->			<div class="gmap_controls" id="controls">\n				&nbsp;</div>\n		</div>\n		<div class="col-md-9 col-sm-9 col-xs-12">\n			<div class="gmap" id="gmap-4">\n				&nbsp;</div>\n		</div>\n	</div>\n	</section></div>\n\n', 'BRANCHES', '0', 1, '2014-05-28 00:00:00', NULL, NULL),
(3, 'Technical Support', 'ib_1409888682-Koala.jpg', '<h4>\n	Technical Support</h4>\n', 'TECHNICALSUPPORT', '0', 1, '2014-05-28 06:28:41', NULL, NULL),
(4, 'Contact Us', 'ib_1408360739-dealers.png', '<div class="panel panel-default">\n	<div class="panel-heading">\n		<h4 class="panel-title">\n			<a class="collapse" data-parent="#accordion" data-toggle="collapse" href="#collapseOne"> Maradana </a></h4>\n	</div>\n	<div class="panel-collapse collapse in" id="collapseOne">\n		<div class="panel-body">\n			<table border="0" cellpadding="0" cellspacing="2" width="397">\n				<tbody>\n					<tr>\n						<td colspan="2">\n							No: 197, T.B Jayah Mawatha, Colombo !0.</td>\n					</tr>\n					<tr>\n						<td width="78">\n							Tel</td>\n						<td width="313">\n							0094 112683929</td>\n					</tr>\n					<tr>\n						<td>\n							Fax</td>\n						<td>\n							0094 112683929</td>\n					</tr>\n					<tr>\n						<td>\n							E mail</td>\n						<td>\n							<a href="mailto:maradana@sunlanka.lk">maradana@sunlanka.lk</a></td>\n					</tr>\n					<tr>\n						<td>\n							Hot Line</td>\n						<td>\n							0094 77 3436677 | 0094 77 1070760</td>\n					</tr>\n				</tbody>\n			</table>\n		</div>\n	</div>\n</div>\n<div class="panel panel-default">\n	<div class="panel-heading">\n		<h4 class="panel-title">\n			<a data-parent="#accordion" data-toggle="collapse" href="#collapseTwo"> Park Road </a></h4>\n	</div>\n	<div class="panel-collapse collapse" id="collapseTwo">\n		<div class="panel-body">\n			<table border="0" cellpadding="0" cellspacing="2" width="397">\n				<tbody>\n					<tr>\n						<td colspan="2">\n							No: 340, Park Road, Colombo 05.</td>\n					</tr>\n					<tr>\n						<td width="78">\n							Tel</td>\n						<td width="313">\n							0094 11 2368899</td>\n					</tr>\n					<tr>\n						<td>\n							Fax</td>\n						<td>\n							0094 11 2368899</td>\n					</tr>\n					<tr>\n						<td>\n							E mail</td>\n						<td>\n							<a href="mailto:caraudio@sunlanka.lk">caraudio@sunlanka.lk</a></td>\n					</tr>\n					<tr>\n						<td>\n							Hot Line</td>\n						<td>\n							0094 77 3960444 | 0094 77 7354258</td>\n					</tr>\n				</tbody>\n			</table>\n		</div>\n	</div>\n</div>\n<div class="panel panel-default">\n	<div class="panel-heading">\n		<h4 class="panel-title">\n			<a data-parent="#accordion" data-toggle="collapse" href="#collapseThree"> Narahenpita </a></h4>\n	</div>\n	<div class="panel-collapse collapse" id="collapseThree">\n		<div class="panel-body">\n			<table border="0" cellpadding="0" cellspacing="2" width="397">\n				<tbody>\n					<tr>\n						<td colspan="2">\n							No: 36/651, Elvitigala Mawatha, Colombo 05.</td>\n					</tr>\n					<tr>\n						<td width="78">\n							Tel</td>\n						<td width="313">\n							0094 11 2368999</td>\n					</tr>\n					<tr>\n						<td>\n							Fax</td>\n						<td>\n							0094 11 2368999</td>\n					</tr>\n					<tr>\n						<td>\n							E mail</td>\n						<td>\n							<a href="mailto:narahenpita@sunlanka.lk">narahenpita@sunlanka.lk</a></td>\n					</tr>\n					<tr>\n						<td>\n							Hot Line</td>\n						<td>\n							0094 77 7553583 | 0094 77 7552996</td>\n					</tr>\n				</tbody>\n			</table>\n		</div>\n	</div>\n</div>\n<div class="panel panel-default">\n	<div class="panel-heading">\n		<h4 class="panel-title">\n			<a data-parent="#accordion" data-toggle="collapse" href="#collapseFour"> Kandana </a></h4>\n	</div>\n	<div class="panel-collapse collapse" id="collapseFour">\n		<div class="panel-body">\n			<table border="0" cellpadding="0" cellspacing="2" width="397">\n				<tbody>\n					<tr>\n						<td colspan="2">\n							No: 233, Negombo Road, Kandana.</td>\n					</tr>\n					<tr>\n						<td width="78">\n							Tel</td>\n						<td width="313">\n							0094 11 2228800</td>\n					</tr>\n					<tr>\n						<td>\n							Fax</td>\n						<td>\n							0094 11 2228800</td>\n					</tr>\n					<tr>\n						<td>\n							E mail</td>\n						<td>\n							<a href="mailto:kandana@sunlanka.lk">kandana@sunlanka.lk</a></td>\n					</tr>\n					<tr>\n						<td>\n							Hot Line</td>\n						<td>\n							0094 77 3064444</td>\n					</tr>\n				</tbody>\n			</table>\n		</div>\n	</div>\n</div>\n<div class="panel panel-default">\n	<div class="panel-heading">\n		<h4 class="panel-title">\n			<a data-parent="#accordion" data-toggle="collapse" href="#collapseFive"> Kurunegala </a></h4>\n	</div>\n	<div class="panel-collapse collapse" id="collapseFive">\n		<div class="panel-body">\n			<table border="0" cellpadding="0" cellspacing="2" width="397">\n				<tbody>\n					<tr>\n						<td colspan="2">\n							No: 243, Negombo Road, Kurunegala.</td>\n					</tr>\n					<tr>\n						<td width="119">\n							Tel</td>\n						<td width="261">\n							0094 37 2221617</td>\n					</tr>\n					<tr>\n						<td>\n							Fax</td>\n						<td>\n							0094 37 2221617</td>\n					</tr>\n					<tr>\n						<td>\n							E mail</td>\n						<td>\n							<a href="mailto:kurunegala@sunlanka.lk">kurunegala@sunlanka.lk</a></td>\n					</tr>\n					<tr>\n						<td>\n							Hot Line</td>\n						<td>\n							0094 77 3960337</td>\n					</tr>\n				</tbody>\n			</table>\n		</div>\n	</div>\n</div>\n<div class="panel panel-default">\n	<div class="panel-heading">\n		<h4 class="panel-title">\n			<a data-parent="#accordion" data-toggle="collapse" href="#collapseSix"> Kandy </a></h4>\n	</div>\n	<div class="panel-collapse collapse" id="collapseSix">\n		<div class="panel-body">\n			<table border="0" cellpadding="0" cellspacing="2" width="397">\n				<tbody>\n					<tr>\n						<td colspan="2">\n							<p>\n								No: 260, Polgahamula Junction, Colombo Road, <br />\n								Peradeniya,Kandy.</p>\n						</td>\n					</tr>\n					<tr>\n						<td>\n							Tel</td>\n						<td>\n							0094 81 2386677</td>\n					</tr>\n					<tr>\n						<td>\n							Fax</td>\n						<td>\n							0094 81 2386677</td>\n					</tr>\n					<tr>\n						<td>\n							E mail</td>\n						<td>\n							<a href="mailto:kandy@sunlanka.lk">kandy@sunlanka.lk</a></td>\n					</tr>\n					<tr>\n						<td>\n							Hot Line</td>\n						<td>\n							0094 77 2277733</td>\n					</tr>\n				</tbody>\n			</table>\n		</div>\n	</div>\n</div>\n<div class="panel panel-default">\n	<div class="panel-heading">\n		<h4 class="panel-title">\n			<a data-parent="#accordion" data-toggle="collapse" href="#collapseSeven"> Galle </a></h4>\n	</div>\n	<div class="panel-collapse collapse" id="collapseSeven">\n		<div class="panel-body">\n			<table border="0" cellpadding="0" cellspacing="2" width="397">\n				<tbody>\n					<tr>\n						<td colspan="2">\n							<p>\n								No: 381, Dangedara Road, Galle.</p>\n						</td>\n					</tr>\n					<tr>\n						<td width="120">\n							Tel</td>\n						<td width="271">\n							0094 91 2227600</td>\n					</tr>\n					<tr>\n						<td>\n							Fax</td>\n						<td>\n							0094 91 2227600</td>\n					</tr>\n					<tr>\n						<td>\n							E mail</td>\n						<td>\n							<a href="mailto:galle@sunlanka.lk">galle@sunlanka.lk</a></td>\n					</tr>\n					<tr>\n						<td>\n							Hot Line</td>\n						<td>\n							0094 77 2920620</td>\n					</tr>\n				</tbody>\n			</table>\n		</div>\n	</div>\n</div>\n', 'CONTACTUS', '0', 1, '2014-05-28 06:28:41', NULL, NULL),
(6, 'Sitemap', 'ib_1408360573-dealers.png', '<p>\n	This is the sitemap !</p>\n', 'SITEMAP', '0', 1, '2014-06-30 09:55:00', NULL, NULL);
INSERT INTO `tbl_contents` (`content_id`, `content_title`, `content_image`, `content`, `content_hcode`, `delete_status`, `added_by`, `added_date`, `updated_by`, `updated_date`) VALUES
(7, 'Dealers', 'ib_1408360739-dealers.png', '<div class="col-md-6 delares-text">\n	<p>\n		Sun Lanka is proud to have an expanding number of dealers located across the Sri Lanka. For your convenience, we&#39;ve organized our dealers by city to make it easy for you to find the dealer closest to you. Simply select your city from the map and find contact details of Sun Lanka dealers</p>\n	<p>\n		No dealers near you? <br />\n		No problem! Call us 0094 11 2695525 or email us at info@sunlanka.lk ,<br />\n		and we&#39;ll help you find what you need.</p>\n	<br />\n	<p class="orange-txt">\n		Click on Districts map to find the Sun Lanka dealer closest to you</p>\n</div>\n<div class="col-md-offset-1 col-md-4 search-results-wrap">\n	<img border="0" class="rwdImageMaps" id="Image1" src="http://localhost/sunlanka_web/resources/img/delars-map.png" style="width:100%; height:auto" usemap="#Image1Map" /> <map id="Image1Map" name="Image1Map"> <area alt="colombo" class="btn" coords="102,797,106,798,105,800,104,803,104,804,108,803,109,804,112,805,113,805,115,805,116,805,118,805,119,806,121,808,123,808,125,808,127,807,129,808,132,809,134,809,134,807,137,807,140,806,141,809,142,810,144,812,146,812,147,813,149,814,151,815,153,818,155,817,157,816,159,815,161,814,163,813,162,811,162,808,163,806,166,804,167,803,169,802,171,799,173,799,176,799,179,799,181,799,184,797,187,799,190,799,194,799,195,800,196,801,196,803,196,805,197,807,197,808,196,809,197,810,196,811,195,813,193,814,193,815,190,817,189,819,188,820,186,823,185,826,185,828,184,830,189,832,190,835,192,838,191,840,188,842,186,842,182,841,179,840,176,839,172,842,169,844,169,847,171,849,170,853,167,854,165,852,163,849,162,846,161,844,157,841,155,846,153,847,150,847,146,845,144,846,141,849,138,850,136,853,135,855,131,856,127,857,124,857,122,858,120,860,116,860,114,859,112,855,110,854,107,853,107,853,110,864,110,867,105,859,102,846,100,838,100,834,98,825,95,818,95,811,94,808,96,806,100,799" data-target="#colombo" data-toggle="modal" href="#" shape="poly" /> <area alt="Gampaha" class="btn" coords="101,798,101,792,100,787,98,780,96,772,95,767,95,763,99,763,101,760,101,752,100,746,99,742,97,740,93,740,91,738,94,732,94,727,94,722,94,718,98,719,100,719,103,717,106,719,109,718,110,718,112,720,116,718,117,717,122,718,125,714,130,713,135,709,138,707,139,706,143,708,145,709,147,710,150,712,151,715,153,715,158,713,161,711,166,708,170,706,171,704,176,707,175,709,179,714,183,717,185,720,187,721,189,723,191,725,190,726,188,730,187,734,187,738,185,740,182,741,179,742,179,746,178,749,178,753,180,756,181,759,185,756,188,755,192,757,194,758,192,761,190,763,189,765,188,766,186,768,184,772,182,775,181,778,182,782,183,785,183,789,184,793,185,796,185,799,182,799,178,800,174,800,170,800,169,803,167,805,163,807,162,808,162,811,161,814,160,815,158,817,156,818,153,819,150,817,148,815,145,814,142,812,141,810,140,808,139,808,136,808,134,809,133,811,130,809,127,808,125,808,124,810,122,810,120,808,119,806,116,806,114,805,112,806,109,805,107,805,105,804,105,801,104,800" data-target="#gampaha" data-toggle="modal" href="#" shape="poly" /> <area alt="kegalle" class="btn" coords="186,799,191,800,195,801,195,804,197,806,196,810,198,812,199,814,199,818,200,818,203,820,207,824,211,827,212,829,213,831,210,831,207,832,209,836,213,837,214,836,216,834,217,836,217,839,217,841,222,843,224,843,228,840,231,838,233,835,238,833,243,834,245,833,250,835,253,835,259,840,265,839,269,838,272,837,275,835,273,832,272,831,271,828,271,824,270,823,267,821,263,819,258,819,255,816,254,815,255,813,256,807,256,805,257,802,256,800,254,798,252,796,254,793,256,793,259,791,262,788,262,786,261,784,260,781,262,777,263,775,263,772,261,770,260,766,258,764,257,761,258,760,261,760,264,759,266,759,270,758,272,757,274,757,276,755,276,752,278,752,279,752,281,748,285,747,283,745,282,743,280,741,277,738,276,735,278,732,278,730,276,727,275,725,272,722,270,721,267,720,264,718,267,715,266,714,263,712,260,710,257,707,255,706,253,703,251,700,250,695,250,692,247,690,245,689,243,687,242,686,239,686,236,688,234,688,232,688,231,689,233,693,232,697,229,698,230,700,231,703,229,705,228,706,226,705,224,706,221,706,217,708,213,707,211,707,208,709,204,712,200,716,196,718,193,722,191,723,189,727,187,729,187,734,187,738,186,741,184,741,181,741,180,742,179,745,178,749,178,752,180,757,181,758,184,757,186,755,189,755,192,756,194,757,194,759,191,763,189,765,187,768,185,770,183,774,181,778,182,782,183,786,184,791,184,794,185,796" data-target="#kegalle" data-toggle="modal" href="#" shape="poly" /> <area alt="kurunegala" class="btn" coords="120,717,121,711,120,703,119,697,118,689,117,683,116,678,114,671,113,665,111,659,110,653,110,646,110,637,111,629,112,623,115,618,118,617,118,613,118,611,119,608,121,608,125,610,126,606,124,605,121,604,125,600,125,598,128,597,131,595,134,593,136,591,136,589,135,585,140,580,134,579,136,576,138,573,140,572,138,571,139,568,143,566,146,565,147,563,147,560,149,558,153,555,154,555,157,552,158,550,158,546,158,544,162,544,164,544,167,542,166,539,166,537,168,536,170,536,171,538,173,539,176,538,175,536,173,533,173,531,176,526,177,522,177,518,177,512,177,506,177,503,172,501,170,498,167,494,167,489,166,483,165,479,164,472,164,469,171,474,177,474,179,476,182,477,185,478,187,478,188,480,191,481,193,482,196,483,199,484,202,486,205,488,209,490,212,491,218,491,220,492,222,493,226,495,229,498,231,500,235,503,238,507,241,509,245,509,247,509,248,510,250,512,250,514,250,518,251,521,252,525,252,529,252,532,250,535,253,536,258,535,259,538,261,540,262,544,264,551,266,555,267,556,266,559,265,562,264,565,267,569,270,572,271,573,271,577,272,580,274,583,276,585,278,586,280,590,281,593,282,598,283,602,285,603,286,607,287,610,286,614,285,615,285,618,286,621,290,624,292,628,293,629,292,634,292,635,292,636,290,638,288,639,287,642,287,645,288,648,290,651,291,654,291,657,291,661,291,663,290,665,289,667,289,669,288,670,285,671,283,674,284,676,286,677,286,678,287,680,283,681,281,680,279,681,276,684,276,687,275,687,272,687,271,686,268,685,265,684,263,683,263,686,263,689,261,690,259,693,260,696,260,697,257,696,253,696,251,695,250,693,250,692,248,690,246,689,243,688,241,686,238,687,234,688,231,689,231,692,232,692,233,694,232,695,231,697,230,698,230,700,231,702,229,706,223,706,220,707,213,707,207,709,204,711,201,715,199,717,196,718,194,720,190,724,188,723,186,720,183,716,180,714,176,709,173,704,172,704,170,706,166,708,163,709,159,712,156,714,152,715,149,711,145,710,142,708,140,706,137,706,135,709,133,712,130,714,127,715,125,714,121,718" data-target="#kurunegala" data-toggle="modal" href="#" shape="poly" /> <area alt="puttalam" class="btn" coords="94,718,97,720,102,719,103,719,106,718,107,719,109,718,110,719,112,721,115,719,118,718,120,716,120,712,120,709,120,702,120,695,119,689,117,683,115,673,114,668,112,661,110,656,110,650,109,644,109,638,110,632,111,627,112,623,115,619,116,617,118,616,119,612,118,610,120,609,124,610,127,609,127,606,124,606,123,606,122,604,124,602,130,598,133,595,135,592,135,590,136,586,139,583,141,582,138,580,136,578,136,576,138,574,140,572,139,569,142,567,146,565,148,563,148,559,152,557,154,555,158,552,158,548,158,544,162,544,165,544,167,542,167,538,169,536,170,537,172,538,174,538,176,538,174,534,173,532,176,527,177,523,177,516,177,510,177,506,177,503,173,501,170,497,168,493,168,488,166,482,165,478,164,471,164,468,162,466,161,464,158,462,156,462,152,461,149,460,147,459,145,461,143,461,138,460,137,457,137,454,134,452,133,447,132,441,132,436,130,431,129,428,126,425,124,421,124,417,126,414,131,413,134,409,135,406,137,405,142,402,146,397,148,391,149,388,148,384,146,381,142,379,139,377,136,374,130,373,126,373,123,371,119,371,116,371,113,372,110,375,107,376,104,377,103,377,102,381,101,386,101,392,101,396,100,400,98,403,96,406,95,410,95,422,95,427,93,431,93,436,93,441,91,444,88,451,86,454,86,457,82,459,85,463,87,466,88,470,88,474,87,476,91,481,92,483,92,485,91,488,90,490,89,492,87,497,85,499,83,501,84,506,86,509,88,514,91,515,92,518,92,520,91,522,90,523,89,525,88,527,87,528,82,529,75,526,72,525,68,520,66,518,67,512,68,507,69,503,66,501,65,498,66,493,64,489,64,485,65,482,67,478,69,475,69,471,67,468,67,465,72,462,74,462,76,456,75,450,72,447,72,444,73,437,76,433,79,427,77,425,75,428,74,432,72,437,70,440,69,444,66,446,66,451,65,456,63,460,62,462,60,464,56,465,55,465,57,474,58,476,58,481,56,485,57,489,58,495,57,502,58,508,60,516,62,523,65,528,66,534,68,541,72,556,73,563,76,568,77,574,78,580,81,593,81,601,82,609,82,617,82,624,82,629,80,629,79,635,80,641,80,648,82,663,84,673,86,682,87,688,89,694,90,700,91,708,92,713,93,719" data-target="#puttalam" data-toggle="modal" href="#" shape="poly" /> <area alt="Anuradhapura" class="btn" coords="271,573,266,569,265,565,265,563,267,558,267,556,264,552,263,548,262,544,261,541,259,538,258,535,256,535,255,536,254,536,251,534,252,530,252,525,250,522,250,519,250,515,249,511,247,509,243,508,241,509,238,506,234,502,229,498,225,495,221,492,217,491,212,490,207,490,204,487,199,484,192,482,189,481,185,479,180,476,177,474,172,474,168,473,163,469,161,465,158,463,154,461,150,461,148,459,145,460,143,461,140,460,137,459,137,456,136,453,134,451,132,447,132,442,132,436,130,432,128,427,126,424,124,420,124,416,126,415,131,412,134,410,137,406,139,404,142,402,146,397,148,391,148,387,148,384,147,382,145,380,149,379,151,379,152,377,152,371,152,360,152,352,153,348,151,344,150,341,155,341,158,343,160,344,164,345,167,346,171,346,176,345,182,343,189,341,195,340,200,339,202,339,202,343,201,345,201,349,202,352,205,356,207,356,210,356,211,357,212,360,213,362,215,366,215,370,217,371,220,371,222,373,225,374,227,375,228,374,230,371,232,369,234,367,238,366,240,362,240,360,240,356,241,354,246,351,248,346,251,344,253,342,255,339,258,337,259,336,262,336,264,338,267,340,272,344,276,345,279,344,283,340,284,338,286,337,288,334,290,333,291,331,292,329,295,326,297,325,300,322,302,320,304,319,306,316,307,314,309,311,312,310,313,308,313,306,311,304,310,302,308,300,308,297,306,295,303,294,301,294,297,292,297,290,297,287,298,287,299,287,303,286,307,287,313,287,318,285,322,284,326,283,329,281,334,279,338,278,343,276,346,275,351,274,356,274,358,275,361,276,365,279,368,281,370,282,374,287,376,287,379,291,381,296,383,298,380,302,379,303,378,306,376,310,375,313,374,315,375,319,376,321,377,324,377,327,379,331,382,336,382,338,382,340,382,342,380,344,378,347,377,350,377,352,379,354,382,357,383,359,384,362,385,365,390,370,391,372,392,374,392,379,394,383,394,385,397,388,398,390,401,390,404,392,405,393,404,395,401,397,399,398,397,401,395,404,392,409,391,411,390,414,388,417,387,420,387,423,388,425,389,427,389,429,389,429,388,431,385,433,384,435,383,436,382,440,381,442,381,445,380,446,378,446,373,447,368,447,364,448,359,448,353,450,351,453,351,457,350,460,350,461,350,464,347,470,347,471,345,475,344,477,343,481,341,485,341,487,341,491,341,493,341,497,341,498,341,500,341,503,343,504,345,505,346,505,345,508,343,510,340,515,340,516,339,519,339,520,338,520,336,521,333,522,330,525,326,528,325,530,323,532,321,535,319,535,316,533,314,535,313,538,313,540,313,542,314,545,313,547,311,549,309,550,309,553,305,556,302,559,299,561,297,561,295,559,292,558,291,561,289,563,284,566,280,568,278,570,276,570,274,569,272,572" data-target="#anuradhapura" data-toggle="modal" href="#" shape="poly" /> <area alt="mannar" class="btn" coords="151,379,149,378,146,380,145,380,143,379,140,378,138,376,137,374,133,374,129,373,126,373,123,371,122,371,118,371,115,371,115,368,116,366,116,364,116,361,116,360,118,357,120,354,122,352,122,351,123,349,123,345,123,341,124,339,124,336,125,332,125,330,125,328,126,325,127,322,124,318,121,312,119,306,117,303,118,299,119,296,117,294,118,288,120,284,120,280,119,278,115,274,113,270,111,267,109,265,106,261,104,257,102,254,100,251,98,248,95,246,93,244,89,241,86,240,84,238,79,235,76,234,72,232,66,231,63,230,60,230,56,230,53,231,49,231,44,231,48,230,52,229,54,228,55,227,57,226,59,225,62,224,66,223,69,223,73,223,78,224,82,224,84,226,88,227,91,228,94,229,97,229,100,231,101,232,104,234,106,236,108,239,110,241,113,244,115,245,116,248,116,249,113,247,111,245,109,243,106,242,104,242,103,244,105,246,106,247,108,250,110,252,112,254,115,255,117,256,118,257,116,258,114,258,112,259,112,260,113,262,114,263,115,265,116,266,118,267,121,267,124,266,126,265,127,262,128,261,129,260,132,259,133,259,135,259,136,256,136,254,138,252,141,250,143,249,145,248,147,248,150,246,152,244,152,240,154,237,155,235,157,232,158,229,158,226,159,223,159,218,159,216,159,213,160,212,163,210,165,208,166,203,166,200,167,197,168,195,169,194,171,194,174,195,177,195,180,194,184,193,186,192,189,188,190,191,190,194,190,199,190,202,191,205,193,208,194,210,196,214,197,217,198,219,198,222,197,223,196,224,196,227,196,229,197,232,197,233,197,235,197,236,195,236,193,237,192,238,189,240,186,244,186,249,185,251,188,255,189,256,188,258,186,260,185,262,185,264,185,266,186,266,190,266,195,266,203,266,207,265,212,264,216,263,222,264,228,264,231,264,233,264,235,266,238,266,239,267,240,270,241,273,241,275,243,280,243,283,245,287,245,289,245,291,242,292,239,294,236,295,232,295,228,297,226,297,222,297,218,299,218,300,214,300,209,300,204,299,200,299,196,302,196,302,195,305,194,307,193,309,192,310,192,313,191,315,190,315,188,315,186,315,184,316,184,317,184,320,187,321,189,323,191,325,193,329,196,332,198,335,200,337,201,339,198,340,194,340,192,340,186,342,184,342,182,343,178,344,175,345,172,346,169,346,166,346,163,345,158,344,155,342,152,341,150,341,151,343,152,345,152,347,152,349,152,353,152,357,152,359,152,363,152,366,152,368,151,372,152,373,152,376" data-target="#mannar" data-toggle="modal" href="#" shape="poly" /> <area alt="vavuniya" class="btn" coords="231,261,235,258,237,257,241,255,244,253,245,251,248,249,250,247,252,245,255,243,256,241,255,238,254,235,253,232,254,228,254,226,253,226,251,225,249,225,246,224,247,221,247,220,248,219,251,219,254,219,257,218,260,218,264,218,266,218,269,218,271,218,272,219,274,221,274,222,276,225,276,227,277,228,279,229,280,229,282,229,285,227,287,226,288,224,290,222,291,221,294,220,295,219,296,219,296,216,298,215,301,216,303,216,306,217,308,217,310,218,311,218,313,220,314,220,314,222,314,225,314,227,315,228,317,229,319,229,321,228,322,228,323,228,324,229,325,230,325,232,325,233,324,236,321,237,321,239,323,241,326,240,330,239,332,237,333,237,336,239,341,242,346,244,350,246,350,247,350,249,349,252,348,255,347,259,345,264,344,268,342,272,342,274,340,277,337,277,331,278,329,278,325,280,322,282,318,284,317,284,312,285,309,285,303,285,299,286,298,289,300,291,303,293,306,294,308,296,309,299,312,303,315,304,312,308,310,309,306,312,305,316,302,317,300,319,298,321,296,324,293,326,292,328,290,331,288,333,285,334,283,336,281,338,279,341,277,341,274,342,271,342,269,339,265,336,262,334,259,333,257,335,255,337,253,339,250,341,247,345,247,349,243,352,241,352,240,356,240,361,239,364,237,365,234,366,231,369,230,370,229,372,226,373,224,372,221,370,216,369,215,367,215,364,213,359,212,356,210,354,207,353,204,353,202,350,202,346,203,338,200,334,198,332,197,329,194,325,192,323,190,321,187,318,185,317,185,314,189,312,192,312,194,310,195,308,196,304,197,300,198,299,201,297,204,297,207,297,211,297,216,297,219,297,222,297,223,296,226,296,229,295,232,294,233,293,236,293,240,292,243,291,247,289,247,287,247,284,245,280,244,278,242,273,242,269,241,266,240,265,236,264,233,263" data-target="#vavuniya" data-toggle="modal" href="#" shape="poly" /> <area alt="killinochci" class="btn" coords="171,193,171,189,170,187,171,182,171,180,169,177,169,175,171,173,172,171,171,169,169,166,166,164,164,162,162,161,160,161,161,164,162,165,161,165,158,161,155,160,153,158,155,156,156,154,156,151,154,148,154,145,155,142,157,142,160,141,163,140,168,138,170,136,173,135,177,133,179,131,181,128,184,126,186,124,188,121,188,117,188,116,187,112,183,108,181,106,177,102,174,100,170,97,165,95,162,94,159,92,157,90,154,88,156,86,159,86,162,87,164,88,166,89,169,91,170,93,173,95,175,97,179,99,183,101,184,103,188,104,190,104,193,104,194,106,195,106,197,108,198,106,199,105,201,108,204,110,210,112,211,113,213,115,216,118,219,121,221,122,225,124,227,124,229,124,230,123,234,124,236,124,237,124,238,123,239,122,242,121,245,120,244,118,243,115,243,111,242,108,240,104,236,102,233,98,224,94,222,92,216,89,213,87,211,85,209,84,209,82,211,80,212,79,214,77,215,75,217,73,219,71,221,72,224,74,227,77,231,80,235,82,239,84,240,85,244,87,247,88,250,91,252,94,255,96,257,98,257,101,257,105,260,109,262,111,267,112,271,113,275,115,277,117,282,120,287,124,292,125,297,127,305,127,306,127,304,133,302,136,300,138,297,140,296,143,296,147,297,152,296,152,293,152,291,150,289,148,287,145,284,142,282,141,280,142,281,144,281,147,281,150,279,151,279,154,279,155,277,157,275,157,272,157,266,157,262,157,256,157,252,158,250,159,249,159,248,161,248,163,248,165,248,166,246,167,242,167,238,167,232,167,229,169,226,169,224,168,221,167,218,167,215,167,213,169,209,169,204,169,202,170,200,171,197,175,197,177,197,179,197,183,198,185,199,188,199,189,197,189,195,188,193,188,191,188,188,188,188,189,186,191,186,191,183,193,181,193,179,195,177,195,173,195,170,195" data-target="#kilinochchi" data-toggle="modal" href="#" shape="poly" /> <area alt="mullativu" class="btn" coords="307,127,313,134,317,138,319,138,318,139,316,140,316,142,318,144,321,146,323,148,325,149,327,152,330,155,331,158,333,159,334,157,332,155,332,153,336,157,339,159,341,161,343,162,342,165,341,165,340,165,339,165,337,166,335,167,334,168,335,169,336,172,337,175,338,176,341,177,344,179,346,181,348,183,350,185,352,188,355,188,355,186,354,182,354,177,352,175,350,172,347,169,345,167,346,164,348,164,350,167,352,170,354,172,355,176,358,179,361,184,363,187,364,191,365,194,369,206,371,211,374,215,375,219,377,223,380,226,383,231,384,234,385,237,388,241,392,245,393,248,396,252,396,254,394,254,392,252,391,250,388,247,386,244,385,242,382,240,381,238,379,238,378,238,377,238,376,241,375,242,376,242,374,243,371,244,370,244,373,245,374,246,377,248,379,250,381,250,385,250,385,252,384,253,383,254,380,256,377,256,375,259,375,260,374,261,373,262,370,263,368,262,365,262,361,262,360,262,357,263,354,264,351,265,349,266,347,266,343,268,345,263,346,259,347,255,349,253,349,251,349,248,348,247,346,247,342,246,340,244,338,243,336,241,333,240,332,240,330,240,329,240,327,241,326,241,324,242,321,242,320,241,320,239,322,237,323,237,325,236,325,234,324,231,322,229,322,229,320,230,318,231,315,230,313,230,313,227,313,224,311,221,310,220,308,220,304,219,301,217,296,217,295,220,293,221,292,221,290,223,288,224,287,225,285,227,283,228,281,230,279,230,276,229,275,226,273,224,271,221,269,220,265,220,261,220,257,219,255,220,252,221,248,221,247,223,246,224,246,226,250,227,251,227,253,228,253,230,253,232,252,235,253,237,254,240,254,242,253,244,252,247,250,248,245,253,242,254,239,256,235,260,232,261,231,263,229,263,225,263,220,263,215,263,211,264,209,265,204,265,202,267,198,266,193,266,188,267,185,266,184,265,186,261,188,259,189,256,188,254,187,252,187,250,187,245,187,243,189,240,192,238,195,237,198,236,198,233,197,230,197,227,197,224,197,222,198,219,197,216,196,212,195,209,193,206,191,204,191,201,191,197,191,193,191,190,191,189,195,189,197,190,199,190,199,188,197,187,196,185,196,182,197,179,197,177,198,175,200,172,202,171,206,170,209,170,213,169,215,168,218,168,220,169,223,169,225,170,227,170,231,170,233,169,234,169,238,169,241,168,244,168,246,168,248,166,248,164,249,161,250,160,252,159,256,159,260,159,263,159,268,159,274,158,276,157,278,157,279,156,280,153,281,151,281,149,281,147,281,144,281,143,284,146,285,147,287,148,289,151,292,152,293,153,296,153,296,149,295,146,295,144,296,141,300,139,303,136,304,134,305,132,307,128" data-target="#mulathiv" data-toggle="modal" href="#" shape="poly" /> <area alt="jaffna" class="btn" coords="304,127,301,124,296,121,294,119,291,116,289,115,285,112,282,110,280,108,276,105,272,101,267,97,261,93,260,92,257,89,252,86,247,82,244,79,240,75,236,73,233,70,230,67,227,64,224,60,222,56,219,52,218,49,216,46,214,43,212,40,209,36,207,33,205,28,203,28,199,27,196,26,193,26,191,26,189,27,187,28,184,28,181,28,176,28,173,28,171,30,168,32,164,32,158,32,153,31,149,30,145,31,139,31,136,32,132,33,128,34,127,35,123,37,121,40,119,41,116,42,114,44,112,45,113,48,113,50,114,50,116,52,117,53,119,54,120,56,121,58,121,61,122,63,123,64,125,65,127,63,128,63,130,64,133,66,135,65,137,65,138,66,139,68,139,70,141,74,142,75,143,75,147,76,152,76,154,76,156,78,158,79,160,82,161,83,164,84,167,86,170,87,172,87,174,87,174,87,171,85,169,82,167,81,163,80,162,78,159,75,157,73,161,73,166,76,171,78,173,80,176,81,178,84,181,86,183,88,185,90,188,93,189,94,193,95,195,94,193,92,191,90,189,87,189,86,190,84,188,82,184,82,182,81,181,79,180,76,180,74,182,74,184,74,189,77,192,79,197,81,205,83,207,84,210,82,211,80,213,77,215,75,217,72,218,71,217,69,217,66,216,64,213,64,209,60,207,59,205,56,204,52,203,51,200,48,199,47,195,46,192,45,189,43,187,43,184,44,182,44,178,43,175,43,175,42,175,40,176,39,177,39,180,40,182,41,185,41,189,42,193,44,197,45,199,45,202,46,205,48,208,53,209,54,211,55,214,59,216,60,219,63,222,67,226,71,229,74,233,77,237,80,241,81,242,83,244,86,248,88,252,90,256,93,259,95,263,98,261,98,257,96,254,95,251,93,253,96,255,99,256,102,256,105,260,107,268,109,272,112,277,113,282,115,285,117,287,119,291,121,292,122,296,124,298,125" data-target="#jafna" data-toggle="modal" href="#" shape="poly" /> <area alt="trincomalee" class="btn" coords="341,277,340,274,341,272,343,270,344,268,346,267,350,266,352,265,355,264,358,263,361,262,365,262,368,263,371,263,374,263,375,261,377,259,378,256,381,255,382,254,383,253,385,252,386,253,386,254,386,256,385,258,385,258,387,258,388,260,387,261,385,261,383,260,382,260,380,262,381,263,382,264,383,266,384,268,386,270,387,270,389,271,391,272,392,271,393,269,392,267,393,266,397,265,398,264,397,261,397,259,398,256,400,259,401,262,403,264,406,267,406,269,409,270,411,273,411,275,413,278,414,282,416,284,419,286,422,288,423,290,425,290,427,289,430,290,432,293,432,295,432,297,433,299,435,302,436,305,439,309,441,312,444,315,446,316,449,321,450,322,453,323,454,325,451,327,456,328,458,332,460,337,462,340,464,342,467,345,468,347,468,351,467,355,467,360,467,362,469,364,470,366,471,366,472,367,472,370,472,373,472,375,472,376,470,377,470,378,469,378,468,376,468,372,469,370,467,369,466,369,463,369,462,368,461,367,459,369,459,372,461,372,463,371,461,375,461,378,464,381,464,383,463,386,460,386,457,385,457,383,456,380,455,378,452,377,448,375,448,374,447,377,445,380,442,383,440,384,440,387,443,389,444,390,447,387,448,385,452,383,455,383,457,384,459,386,459,388,459,391,461,394,464,397,468,397,473,397,476,397,482,397,484,396,485,392,485,389,484,386,484,384,489,384,492,383,494,380,497,384,498,386,500,386,502,390,503,392,503,395,505,398,505,402,505,405,506,408,507,410,509,414,509,416,508,418,506,415,505,412,503,411,502,411,500,411,499,412,501,415,502,416,503,418,503,421,503,422,503,423,505,424,507,422,508,422,509,421,510,423,511,425,511,427,511,431,512,433,512,435,513,438,514,442,515,445,516,449,516,452,516,453,515,454,513,453,510,453,506,453,504,452,502,450,499,450,496,450,494,452,492,454,490,454,486,453,485,453,482,453,480,455,479,457,477,460,475,463,475,465,473,469,472,469,472,471,471,473,470,475,469,478,468,479,465,481,463,482,460,482,459,480,462,477,464,474,463,472,462,469,461,466,462,462,461,459,459,459,457,460,454,459,450,458,447,455,446,453,443,452,441,452,439,451,437,452,433,451,429,449,427,448,424,448,420,447,416,447,413,447,410,448,405,449,402,446,402,442,401,439,399,437,397,435,394,434,391,431,389,429,388,426,387,422,387,418,388,415,389,413,390,410,392,406,394,403,396,400,399,398,401,395,403,394,404,393,404,391,401,390,399,389,396,387,394,385,393,381,393,379,392,376,392,373,391,372,387,366,384,361,382,358,380,355,378,351,377,347,379,344,380,342,383,338,382,335,380,330,378,326,378,323,377,319,375,315,375,312,377,306,380,303,382,300,382,298,381,296,379,291,376,287,373,283,368,281,365,279,362,277,358,276,356,275,353,274,349,274,347,275,344,276" data-target="#trincomale" data-toggle="modal" href="#" shape="poly" /> <area alt="polonnaruwa" class="btn" coords="492,453,492,459,491,463,492,466,492,470,491,473,491,477,491,479,490,482,490,486,490,489,490,495,490,498,489,501,489,507,489,510,490,513,491,517,492,520,494,525,494,528,496,530,498,532,499,534,499,536,499,539,497,540,496,540,494,540,492,539,490,539,488,537,487,537,485,536,483,538,481,539,479,539,476,539,475,539,473,542,471,544,471,547,471,550,471,552,470,555,468,556,468,559,469,561,469,565,469,569,467,571,469,574,469,577,469,580,469,583,470,586,471,588,471,591,472,593,471,594,470,596,471,599,471,600,472,603,472,606,471,609,470,610,468,611,467,613,466,616,466,617,464,617,462,616,458,614,455,612,453,611,449,610,447,610,445,609,443,609,441,608,438,606,437,604,434,600,433,598,431,596,430,596,427,596,426,596,424,596,422,597,418,599,415,598,410,598,406,599,403,599,397,600,394,600,390,600,387,601,384,601,381,600,378,600,376,599,374,603,374,606,374,608,372,607,370,606,368,606,367,604,365,606,363,607,362,609,360,609,357,611,355,611,353,610,350,610,347,609,346,608,345,606,345,603,345,598,344,595,343,592,343,589,343,587,343,584,344,581,343,579,343,577,345,576,348,576,349,575,351,574,353,573,354,569,355,567,356,563,357,559,357,554,357,550,357,546,357,543,359,541,360,538,361,536,362,534,366,532,367,531,365,530,363,529,361,529,359,530,358,529,357,527,355,527,354,527,352,529,352,532,352,533,350,533,348,531,347,530,347,526,347,525,346,523,343,522,340,519,340,518,341,512,343,511,344,508,346,506,346,505,342,503,341,502,341,498,341,494,341,491,341,488,341,485,342,481,343,479,344,476,346,473,347,470,349,465,350,463,351,458,351,455,352,452,354,450,356,448,359,447,361,447,364,447,370,446,374,446,378,446,380,445,381,442,381,441,383,438,383,436,386,432,388,430,390,429,392,432,393,434,395,435,398,436,401,438,402,440,403,442,403,444,403,446,403,447,405,450,409,450,413,448,416,448,421,448,427,449,433,450,435,452,439,452,442,453,445,454,447,455,450,458,454,459,455,459,460,460,461,461,462,462,462,465,461,468,462,472,463,474,464,476,463,478,460,480,458,481,459,482,463,482,468,481,469,480,470,475,470,473,473,470,474,467,475,465,477,460,479,457,481,454,484,454,486,454,488,453,492,452" data-target="#polonnaruwa" data-toggle="modal" href="#" shape="poly" /> <area alt="baticaloa" class="btn" coords="493,452,496,450,500,449,502,449,503,450,505,451,507,452,510,452,513,452,517,452,517,452,518,453,519,457,520,460,521,464,522,469,524,471,524,475,525,478,526,483,527,486,528,489,528,491,527,493,526,495,525,495,524,492,522,490,520,486,520,483,517,480,516,477,516,473,516,470,515,468,513,468,511,470,511,471,511,474,511,477,512,480,512,482,511,483,513,485,515,487,517,488,517,491,519,493,520,495,520,495,523,495,527,494,530,492,531,492,532,499,532,503,535,507,536,510,537,513,539,516,540,519,542,521,545,523,547,523,548,524,550,525,552,525,554,525,557,524,556,527,555,528,554,530,554,532,554,534,558,537,559,538,560,540,562,541,563,543,565,543,562,545,561,546,561,548,561,552,561,554,562,558,563,561,565,563,567,565,568,567,571,569,573,569,576,569,578,573,580,576,581,578,583,579,584,581,586,581,587,583,588,585,590,586,594,587,595,588,598,590,598,591,599,593,605,600,606,603,607,606,608,608,610,611,612,614,613,618,615,620,617,622,618,626,619,629,621,632,622,635,624,641,625,645,626,651,626,654,626,657,628,661,628,665,629,667,628,669,626,672,625,672,625,669,625,666,626,663,626,662,623,662,620,662,617,659,616,657,616,654,619,651,619,650,619,648,618,644,617,641,617,637,618,634,616,629,614,626,611,623,609,619,607,616,605,612,603,610,602,608,602,607,600,607,597,609,595,608,595,606,594,604,592,602,590,601,587,597,586,595,586,593,585,590,583,590,578,587,577,586,574,585,573,584,571,584,569,585,567,587,567,589,565,591,565,594,567,595,569,597,572,598,573,598,574,596,575,593,577,593,579,594,582,595,584,598,585,602,586,603,587,604,588,606,589,607,591,608,594,609,597,611,598,613,598,613,598,615,595,616,594,618,594,619,595,623,596,625,599,628,599,624,598,620,598,618,600,618,601,617,602,616,604,617,606,620,608,622,609,624,610,626,611,628,611,630,611,632,613,633,614,633,615,634,614,636,613,638,611,639,611,640,613,642,614,645,615,647,615,649,615,651,613,653,613,653,611,654,611,655,611,658,612,659,614,661,614,662,615,663,615,664,614,666,612,667,610,668,608,669,605,669,603,669,601,670,599,673,597,675,595,676,592,678,590,680,589,683,587,683,587,679,588,673,588,668,586,665,584,660,583,655,583,651,582,650,577,654,573,655,568,655,561,654,558,654,550,653,548,653,545,653,543,652,540,649,536,646,530,644,527,642,526,637,526,635,527,631,527,627,528,625,528,622,527,619,525,618,522,617,518,616,513,614,509,612,505,609,503,607,500,604,499,600,498,597,495,595,495,594,494,593,489,592,484,592,477,593,472,592,471,587,470,584,469,581,469,576,469,573,468,570,470,569,470,566,470,563,470,561,469,558,469,555,470,553,471,549,472,546,473,543,474,540,476,539,478,538,479,538,480,538,483,538,485,536,486,536,487,536,489,536,492,537,493,538,496,539,500,539,500,537,500,535,499,532,498,530,495,528,495,525,494,522,493,518,492,514,491,511,491,508,491,500,492,495,492,490,492,485,492,480,492,474,492,469,493,464,493,461,493,458" data-target="#baticaloa" data-toggle="modal" href="#" shape="poly" /> <area alt="Matale" class="btn" coords="271,573,273,570,274,568,276,570,278,570,279,569,280,568,282,567,284,566,287,565,288,564,291,563,292,561,292,560,293,558,295,559,296,560,297,561,299,561,301,560,303,558,306,556,308,554,309,553,310,550,312,549,314,547,314,545,313,543,313,541,313,539,314,536,315,534,317,534,318,534,320,535,321,535,323,534,325,531,327,529,328,528,331,525,332,523,335,522,336,521,339,520,340,520,342,520,342,520,343,522,345,522,346,523,346,524,347,526,347,530,348,532,349,533,352,533,352,532,352,530,355,528,355,528,357,528,359,529,362,530,364,530,366,531,367,531,364,533,363,533,361,535,359,539,359,539,357,542,357,543,357,546,357,548,357,551,357,555,357,559,355,564,355,567,353,571,353,572,351,574,349,576,348,576,345,577,344,577,343,578,343,580,343,583,343,586,342,589,343,593,344,595,344,597,345,600,345,604,345,607,345,609,347,611,349,612,351,611,354,611,356,611,358,611,360,611,363,609,364,608,366,606,368,606,370,606,372,608,374,608,375,607,375,604,375,601,376,600,380,600,382,601,386,601,389,601,392,601,396,601,400,601,404,601,406,600,406,603,406,604,405,605,405,606,406,612,406,613,406,614,405,617,403,619,402,623,402,624,402,627,403,630,402,633,400,637,399,638,400,641,400,643,400,646,400,648,400,652,400,653,399,656,399,658,399,661,400,661,399,661,396,661,394,661,391,661,390,661,389,662,387,663,386,666,384,668,383,668,382,668,380,666,380,665,378,665,377,665,375,666,374,666,372,666,370,665,369,665,367,665,366,666,365,667,364,667,361,668,358,669,357,671,356,673,354,674,352,676,349,677,347,677,344,675,343,674,341,671,340,670,338,668,335,666,334,664,332,666,330,667,328,668,327,669,328,672,328,673,328,674,329,678,328,680,328,683,327,685,326,687,325,688,322,688,317,689,315,689,312,687,310,686,306,684,305,683,303,681,298,679,296,677,293,674,291,672,289,669,290,665,291,662,291,658,291,653,290,650,288,647,287,644,287,642,290,639,292,636,292,634,290,631,292,629,292,627,290,625,288,622,287,620,286,618,285,615,287,611,287,609,286,606,285,603,284,601,283,598,282,594,280,592,279,588,278,586,276,584,275,582,272,580,271,578,271,576" data-target="#matale" data-toggle="modal" href="#" shape="poly" /> <area alt="kandy" class="btn" coords="262,787,261,783,260,782,260,781,261,778,263,777,263,775,263,773,262,770,261,768,260,767,259,764,258,762,258,761,259,760,262,760,264,759,265,759,267,759,270,758,272,758,274,757,276,756,276,754,277,753,280,751,282,749,282,748,285,747,283,745,282,743,280,740,278,738,277,735,278,730,278,729,275,725,274,723,272,721,269,720,268,719,266,718,264,718,267,715,265,713,263,712,260,710,257,708,257,707,255,705,252,702,252,699,251,697,250,696,250,695,255,695,257,696,259,696,260,697,260,695,261,692,262,689,263,687,263,684,264,682,270,686,270,686,272,687,275,687,277,683,278,682,279,681,282,681,284,681,287,680,286,678,285,676,284,675,283,674,285,672,287,671,289,670,290,670,291,672,293,674,294,676,296,677,298,678,299,679,300,681,303,681,305,683,307,685,309,686,314,689,318,689,321,689,324,688,327,688,328,683,329,680,329,677,329,674,328,671,328,669,329,668,332,668,333,666,334,666,336,666,337,668,338,669,341,673,344,675,346,676,349,677,352,677,355,675,356,673,358,671,360,670,363,670,365,669,367,667,369,667,371,666,374,667,377,667,378,667,379,667,381,668,383,668,384,668,386,668,388,666,388,663,390,662,391,662,397,662,399,662,400,662,400,666,400,669,400,671,400,674,400,676,400,677,399,679,398,681,401,685,402,690,401,691,401,694,402,697,403,700,403,702,403,705,404,707,405,710,406,713,407,716,408,719,409,723,411,727,411,729,411,732,410,734,408,736,404,735,401,736,400,737,399,739,397,740,395,740,391,740,389,739,383,738,381,738,378,739,376,740,372,740,368,741,365,741,362,741,359,740,355,740,353,738,353,736,353,731,351,730,349,728,347,725,344,722,342,719,339,719,340,721,340,724,341,727,343,730,344,732,344,735,344,738,344,740,341,743,338,746,335,748,333,752,331,754,330,757,328,759,326,761,326,762,325,765,324,767,322,768,320,768,318,767,316,766,311,765,310,766,308,768,306,769,305,771,301,772,296,773,294,774,291,773,290,772,287,772,286,772,283,774,281,775,284,777,286,778,287,780,289,782,290,784,295,789,297,793,299,794,297,797,296,799,296,802,294,804,293,807,290,808,286,807,283,806,281,802,279,800,276,796,275,793,274,789,273,787,271,786,269,785,267,784,264,783" data-target="#kandy" data-toggle="modal" href="#" shape="poly" /> <area alt="ampara" class="btn" coords="402,625,406,628,408,630,410,630,410,632,411,634,410,637,410,640,410,641,412,645,414,647,416,651,417,653,418,655,419,656,421,655,424,654,427,654,430,653,431,651,434,649,436,647,439,645,442,643,444,642,448,640,450,639,454,638,457,638,458,638,459,638,460,640,462,642,463,644,463,645,463,648,463,651,463,653,462,657,461,659,461,661,460,664,459,666,459,668,458,670,457,671,456,672,458,677,460,679,460,683,462,686,462,687,460,688,460,689,461,692,462,693,463,695,464,697,465,700,467,702,468,702,471,701,472,700,473,701,475,705,476,706,478,709,479,710,480,712,481,714,480,714,479,716,480,719,481,721,484,725,485,725,487,725,489,724,492,722,493,722,495,720,495,717,495,714,495,711,495,709,494,706,494,702,495,701,497,701,498,702,501,702,503,702,505,701,506,701,507,700,507,697,506,697,507,694,510,694,512,692,512,691,510,686,510,685,509,683,509,681,512,681,513,681,516,681,517,679,518,678,519,676,519,674,521,674,524,672,526,672,528,670,531,668,535,668,536,669,535,671,534,673,533,674,532,675,533,677,535,678,536,680,535,683,535,685,537,691,538,695,539,696,539,699,539,701,539,703,537,705,538,707,540,709,542,711,544,713,546,713,547,714,548,715,548,717,549,720,550,722,549,725,548,726,549,728,550,729,552,729,554,730,556,732,552,735,552,736,550,737,548,740,546,743,544,746,543,749,542,751,543,753,545,755,546,756,546,760,547,762,548,764,549,767,555,769,563,772,565,772,569,774,572,774,574,775,574,777,574,778,572,781,571,783,573,791,574,791,574,794,574,796,575,798,576,800,578,803,579,805,578,809,577,833,576,841,575,855,575,871,573,884,572,893,572,902,573,907,576,911,578,916,581,916,584,916,585,917,589,919,591,922,593,924,595,924,599,924,601,920,603,917,604,913,606,909,609,905,612,903,614,899,615,894,617,888,617,883,617,879,619,875,621,873,623,870,624,867,626,862,627,858,628,857,629,851,630,846,631,841,633,838,633,836,633,834,630,833,629,831,628,829,629,826,633,829,634,827,636,823,636,820,635,815,636,810,638,806,638,803,638,800,637,797,637,793,641,794,642,792,644,789,644,786,643,780,640,779,637,779,636,778,634,777,638,775,639,774,638,771,637,768,640,767,640,763,639,759,639,755,638,753,634,754,632,753,629,751,629,750,629,747,631,744,633,743,635,742,637,741,639,741,640,739,640,733,640,725,640,719,640,712,640,708,640,703,640,702,640,699,638,695,636,691,635,687,635,685,634,682,632,679,631,676,629,671,628,670,625,671,622,673,621,671,622,667,622,666,618,663,613,661,613,665,611,666,610,667,608,669,605,669,603,669,600,670,598,673,594,677,590,680,588,683,586,683,586,677,587,672,587,668,584,665,582,661,582,657,582,656,582,653,582,651,580,650,576,653,575,654,572,655,566,655,559,653,555,653,550,654,545,653,541,652,537,649,536,648,534,647,529,645,528,644,525,642,525,639,524,637,524,635,525,630,527,627,527,625,526,622,525,619,523,618,519,617,516,616,512,614,507,612,504,609,501,606,499,602,497,599,496,597,493,596,493,593,490,592,487,592,481,592,478,592,475,592,474,592,471,592,471,593,471,594,471,598,472,601,472,603,472,606,471,608,469,610,468,610,466,612,466,615,465,616,463,615,461,614,457,612,454,611,452,610,449,610,446,609,442,608,439,604,436,603,434,599,433,597,431,595,429,595,427,595,424,596,422,596,421,597,418,598,416,598,415,597,412,597,409,597,406,598,406,600,406,602,405,603,406,606,406,607,406,611,405,613,404,616,403,618,402,621,401,623" data-target="#ampara" data-toggle="modal" href="#" shape="poly" /> <area alt="" class="btn" coords="270,838,268,842,269,843,270,843,271,844,272,845,270,846,268,848,269,851,271,852,276,855,278,856,280,856,283,854,284,854,286,855,288,857,293,857,295,858,301,858,303,859,308,860,310,860,314,860,316,860,318,857,324,858,327,859,331,859,335,858,338,858,340,859,344,857,346,855,347,853,349,854,350,854,353,853,355,851,357,850,360,849,362,848,364,846,364,844,362,843,359,843,358,842,358,839,361,839,363,838,364,837,364,835,362,832,360,829,360,827,357,824,354,821,353,818,353,815,356,814,358,812,360,809,362,806,364,804,367,802,369,801,370,800,373,800,375,800,378,799,381,798,384,797,386,795,387,792,388,789,389,785,390,782,392,781,392,778,395,776,396,775,397,771,395,768,395,766,396,766,397,763,398,761,398,759,395,757,394,755,394,754,396,753,397,751,396,748,394,746,393,743,392,740,388,739,384,738,382,738,380,738,376,740,373,740,370,741,367,741,363,741,360,740,356,740,354,738,353,737,353,734,353,732,351,731,349,728,347,726,345,724,344,722,343,720,341,719,339,719,339,721,339,724,341,726,342,728,343,731,344,732,345,737,345,738,344,740,343,743,340,745,337,746,335,747,334,748,332,752,332,754,330,757,328,760,326,761,325,765,324,767,323,767,321,768,319,768,318,767,316,766,313,766,311,766,307,769,304,770,302,772,299,772,296,773,294,774,288,772,284,773,283,775,281,775,285,778,288,781,290,784,294,789,295,791,298,794,298,797,297,800,295,804,293,805,292,808,290,808,285,807,283,806,281,803,279,800,277,797,275,794,274,791,273,788,271,786,266,784,263,784,261,787,259,791,258,793,254,794,252,795,254,798,256,802,256,805,256,809,255,812,255,814,255,819,259,820,263,820,266,820,268,823,270,823,271,825,272,827,272,829,272,831,274,834,274,835,272,836" data-target="#nuwaraeliya" data-toggle="modal" href="#" shape="poly" /> <area alt="badulla" class="btn" coords="413,914,409,910,407,909,406,907,406,905,407,902,406,898,407,897,405,896,403,894,401,895,401,892,401,889,399,886,397,886,395,886,394,884,393,881,391,879,391,877,388,875,387,876,386,875,385,875,384,878,383,879,380,879,379,880,377,882,375,882,372,884,370,884,369,884,367,884,366,882,364,882,361,881,360,879,360,877,359,875,358,874,358,872,360,872,362,870,364,870,366,869,367,868,368,865,369,864,369,862,366,861,363,861,362,860,361,858,361,857,358,858,357,858,355,855,355,851,357,850,359,849,363,848,364,846,364,844,364,842,360,842,359,841,359,838,361,838,364,837,364,835,363,832,362,830,360,826,357,823,355,820,353,817,354,813,356,811,359,808,362,806,366,803,369,801,371,799,376,799,381,798,384,797,386,796,388,792,388,789,389,785,390,782,392,778,394,776,396,774,398,770,396,768,395,765,398,763,398,761,398,759,396,757,394,754,395,752,398,750,396,747,395,744,393,741,393,739,398,739,400,738,402,736,403,735,406,735,408,735,412,733,411,731,411,729,409,723,409,721,408,717,408,714,406,711,404,705,403,703,403,700,402,696,402,694,402,691,402,688,402,686,401,684,400,680,399,678,399,675,400,672,400,668,400,665,401,661,401,658,401,655,401,651,401,647,400,644,400,640,400,638,400,636,401,634,401,633,402,631,403,627,403,626,407,629,409,631,410,631,410,635,410,636,410,642,410,643,411,645,413,647,414,651,416,653,418,655,419,656,419,656,421,656,423,656,426,655,430,654,433,652,435,649,437,647,440,646,444,644,447,643,451,640,453,639,456,639,457,639,459,640,462,643,463,644,463,648,463,652,463,655,461,658,460,662,459,665,459,667,459,670,456,674,457,677,458,680,459,682,460,685,461,686,462,688,460,689,461,691,461,693,462,694,463,697,464,699,465,701,466,702,467,702,469,702,471,700,472,700,473,702,474,706,475,708,477,710,478,711,479,712,480,713,480,715,479,717,478,717,476,719,474,719,472,720,470,720,469,720,469,722,470,723,471,725,471,726,470,727,469,728,467,731,465,733,463,737,461,739,459,741,457,743,457,744,455,746,453,745,452,744,450,741,449,739,444,742,442,745,441,747,440,748,441,752,443,754,444,755,446,759,448,761,449,763,450,765,451,768,453,770,457,770,459,768,459,767,461,766,463,766,466,767,467,768,467,769,469,771,471,773,473,783,472,786,473,788,473,790,471,791,470,794,470,796,470,799,470,801,470,802,469,802,468,804,468,806,468,807,467,809,465,809,463,809,463,811,462,813,462,814,460,814,458,813,455,812,455,816,455,817,453,819,451,821,448,822,445,823,443,825,440,826,438,828,438,830,440,831,442,832,443,833,445,834,445,837,443,839,440,839,438,839,436,839,435,841,433,842,433,844,432,845,430,845,428,843,426,843,425,846,424,848,424,851,425,856,424,857,423,859,423,860,422,862,422,864,429,864,429,867,429,869,427,871,427,872,425,875,425,877,424,882,424,885,424,888,425,890,426,893,427,894,429,896,430,897,430,898,427,899,425,900,425,902,424,904,424,905,424,907,423,907,420,905,417,907,415,907,415,909,414,911" data-target="#badulla" data-toggle="modal" href="#" shape="poly" /> <area alt="monaragala" class="btn" coords="386,983,384,980,382,977,381,975,381,971,381,970,378,969,374,968,371,966,369,963,367,959,366,956,364,953,364,952,364,948,363,944,363,941,364,940,364,937,362,934,361,931,361,928,362,925,364,921,367,919,368,917,370,914,371,913,371,908,372,905,374,901,375,898,377,894,379,891,381,889,382,886,384,884,386,881,388,878,389,878,392,878,392,880,394,882,394,884,394,885,396,887,399,887,400,888,400,890,402,894,402,895,403,896,405,897,406,898,406,899,406,902,406,905,406,909,409,910,411,914,413,915,414,912,416,908,418,906,419,905,422,906,423,907,425,906,425,901,426,901,428,900,431,899,429,896,427,894,426,891,425,888,425,882,425,879,426,877,427,874,428,872,429,869,429,867,429,865,427,865,425,865,424,865,422,864,422,862,426,858,425,856,425,853,424,850,425,846,426,845,430,845,431,845,433,845,433,845,435,843,438,840,440,840,444,840,446,839,445,835,444,834,442,833,440,831,438,829,444,827,448,824,451,822,453,821,455,819,456,816,456,814,458,815,459,815,461,815,462,815,464,811,464,810,467,809,468,807,470,803,471,800,471,796,471,793,473,788,473,784,472,779,471,775,470,772,468,771,466,768,463,767,461,767,460,768,458,769,458,770,456,771,454,770,452,768,451,766,450,764,448,761,447,758,445,756,443,754,441,752,440,749,442,746,444,745,446,743,447,741,448,741,450,742,450,743,451,745,453,746,454,747,457,746,459,743,461,741,464,738,466,735,468,732,470,730,471,728,471,726,470,724,469,721,472,721,474,721,477,720,478,719,479,719,480,720,481,721,482,724,484,725,484,725,486,726,488,726,492,725,495,722,495,721,495,717,495,713,495,710,495,708,494,704,494,702,498,703,501,704,503,703,506,702,507,702,508,698,507,697,508,695,510,695,512,693,512,691,511,689,511,687,510,685,510,682,516,682,519,679,519,678,520,676,522,675,524,674,527,672,528,671,530,670,532,670,535,670,534,674,533,676,532,677,534,679,536,679,535,683,536,686,537,690,537,694,539,697,539,699,539,702,539,703,538,706,538,708,539,711,541,713,543,714,545,715,548,717,548,720,549,723,549,725,549,727,549,730,551,731,554,732,555,733,554,735,552,737,551,739,549,741,546,744,544,747,542,751,543,755,545,756,546,758,546,764,548,766,553,769,557,771,559,771,561,773,564,774,566,774,569,775,572,775,573,776,574,779,574,781,572,783,572,786,573,791,574,796,575,799,576,802,578,805,578,807,578,810,578,833,577,835,576,840,575,844,575,849,575,855,575,860,576,866,574,875,574,881,573,885,573,888,573,892,571,897,571,900,573,905,572,908,571,910,571,912,568,911,566,912,565,913,564,914,562,914,560,915,558,916,554,918,550,921,549,922,547,924,544,926,540,928,538,929,537,933,537,935,538,936,538,938,538,940,538,943,537,946,537,948,536,951,535,952,534,952,532,952,529,952,528,951,525,951,523,952,521,952,519,953,517,953,515,953,514,953,512,953,511,954,509,955,507,957,504,958,503,959,499,960,497,961,489,962,486,963,483,964,481,966,480,967,478,969,477,970,475,971,473,971,470,971,468,971,467,970,467,967,464,963,462,960,460,957,457,955,456,954,454,954,452,956,450,956,448,956,446,954,444,951,442,951,438,950,434,950,431,950,428,950,426,951,424,951,422,952,421,955,420,956,417,957,415,958,412,958,410,958,410,962,411,965,412,967,413,968,413,970,411,972,408,973,403,974,400,976,398,976,396,978,394,979,393,980,390,982,388,984" data-target="#monaragala" data-toggle="modal" href="#" shape="poly" /> <area alt="kalutara" class="btn" coords="134,947,130,942,129,940,128,937,130,934,131,933,131,929,130,926,130,922,128,916,126,911,124,907,122,902,121,897,119,893,117,889,116,885,114,881,112,878,111,874,109,871,108,868,107,865,107,862,107,859,106,856,107,855,110,855,111,857,113,858,113,860,116,861,117,861,119,860,121,859,122,859,126,859,130,859,134,857,135,856,136,854,138,852,140,850,142,849,145,848,146,846,148,848,149,848,150,848,152,848,153,848,154,847,155,845,156,844,156,843,157,843,158,843,159,844,162,847,163,853,165,855,166,855,168,855,170,853,170,851,168,850,168,847,168,845,172,843,174,842,175,841,178,842,179,842,182,843,183,843,184,844,184,845,185,846,186,851,188,852,188,854,188,858,189,861,191,863,191,866,191,867,191,870,192,873,194,875,195,878,197,881,198,883,200,885,202,886,203,887,204,888,204,890,203,892,204,894,206,896,207,897,208,897,210,897,212,898,214,898,214,899,217,904,218,906,221,909,221,910,218,912,217,913,216,915,218,919,219,920,222,924,224,926,226,929,229,933,231,936,233,939,236,943,237,944,239,948,237,949,236,949,234,950,230,951,227,952,224,954,221,955,219,957,217,957,215,958,214,960,215,964,215,966,217,968,217,971,217,972,216,975,215,976,214,975,212,973,210,971,208,969,206,967,205,966,202,965,200,963,198,962,195,962,193,962,193,963,192,965,191,966,189,967,186,967,181,966,178,965,175,965,173,964,170,964,169,962,167,961,164,958,163,958,159,956,158,955,156,955,153,955,149,953,147,952,144,950,141,948,139,947,137,947" data-target="#kaluthara" data-toggle="modal" href="#" shape="poly" /> <area alt="ratnapura" class="btn" coords="241,948,243,953,247,955,249,957,250,958,252,958,255,958,257,958,261,960,263,961,266,961,269,961,271,963,271,964,275,964,277,964,280,963,283,962,284,959,284,958,287,957,289,957,292,958,295,958,299,958,302,957,304,957,304,957,304,961,303,963,302,965,301,968,303,970,304,970,311,969,313,969,316,969,317,970,315,971,315,973,317,975,319,976,319,977,318,979,319,981,324,981,328,981,330,982,332,983,335,985,339,987,343,988,348,989,352,992,356,992,361,992,364,992,366,991,368,991,371,991,373,991,374,995,375,996,378,996,381,997,382,999,384,999,386,999,388,1000,390,1001,391,1001,393,1001,396,1000,395,998,393,996,392,992,389,988,388,986,388,984,385,981,383,978,382,976,381,974,381,971,381,970,376,968,371,967,370,965,367,961,365,955,364,951,364,947,363,944,364,940,364,938,363,935,362,931,362,928,363,924,365,922,367,919,369,918,371,915,371,911,372,908,373,903,374,901,376,896,379,893,380,891,382,889,383,886,384,884,386,881,387,880,389,877,387,877,384,877,382,879,380,880,378,881,376,883,373,885,370,885,367,884,365,882,361,881,361,879,360,876,359,875,358,873,363,872,366,870,368,869,369,866,369,865,368,864,366,863,362,862,359,860,357,858,356,856,355,853,355,852,350,853,349,854,347,854,344,855,341,857,340,858,337,858,335,858,333,858,330,859,329,859,326,858,323,858,320,857,318,857,317,858,315,859,312,859,310,860,306,860,305,860,301,858,299,858,295,858,294,858,290,857,288,856,287,855,285,854,280,856,277,856,273,854,271,852,269,849,269,847,272,846,270,842,269,840,270,839,264,840,262,840,259,840,257,838,254,837,250,835,247,834,246,832,244,832,242,833,241,833,237,833,235,834,233,835,231,838,228,840,224,843,222,844,219,843,218,841,217,838,217,837,216,835,213,836,211,837,209,836,208,834,208,832,211,832,213,830,212,828,209,826,207,824,205,822,204,820,202,819,200,818,199,817,199,815,199,813,197,812,194,815,193,816,191,818,189,820,187,822,186,825,185,827,185,829,185,830,187,832,189,835,191,835,192,838,192,840,191,842,189,843,187,843,185,844,188,848,188,851,189,852,189,853,189,855,189,858,190,860,191,861,192,863,192,867,192,870,192,872,193,875,199,881,201,882,201,884,203,886,205,888,205,890,205,891,204,894,206,895,207,896,210,897,213,897,215,898,217,901,218,903,219,906,221,908,220,909,219,910,217,911,217,913,218,915,219,917,219,919,221,921,223,923,224,926,226,928,229,932,231,936,233,938,235,941,236,942,238,945,239,946" data-target="#ratnapura" data-toggle="modal" href="#" shape="poly" /> <area alt="galle" class="btn" coords="242,1074,243,1071,242,1070,242,1067,242,1065,243,1063,244,1061,246,1061,247,1061,250,1061,252,1059,253,1059,253,1059,253,1057,250,1055,248,1055,247,1055,244,1054,244,1052,244,1049,246,1048,247,1049,249,1049,250,1046,251,1044,252,1042,255,1041,256,1039,257,1038,255,1036,253,1036,251,1034,249,1033,248,1030,246,1028,245,1028,243,1026,242,1023,242,1020,243,1019,244,1018,244,1018,245,1018,245,1016,244,1013,245,1011,246,1011,246,1010,245,1007,244,1005,243,1004,246,1004,248,1005,251,1006,253,1006,255,1006,257,1003,257,1000,257,997,257,994,257,993,255,990,253,987,251,985,249,983,247,982,244,981,242,979,240,976,240,975,244,974,246,974,247,973,249,973,251,975,252,976,255,979,258,981,260,983,262,985,263,986,265,988,266,988,269,988,271,985,272,983,271,980,269,977,267,974,266,972,265,969,268,965,270,965,273,966,274,964,272,962,269,962,266,962,264,961,262,960,261,959,258,958,254,958,252,958,250,955,248,954,246,953,245,951,243,949,242,948,238,949,236,950,234,951,231,952,228,952,225,954,222,956,219,958,218,961,217,963,218,964,219,966,220,967,220,969,220,971,219,972,219,975,217,976,216,974,214,971,213,969,210,967,207,965,206,965,203,963,201,962,199,962,198,962,197,964,195,965,195,966,193,966,190,967,186,967,184,967,181,966,178,966,175,965,173,964,171,963,170,961,168,959,165,958,163,956,160,955,157,954,155,954,153,953,150,952,148,951,146,949,144,948,143,948,141,947,139,947,137,947,137,949,137,951,138,952,139,955,139,958,140,960,142,964,143,967,145,971,146,973,148,975,147,977,148,982,148,985,148,989,148,993,149,995,151,999,152,1001,154,1005,155,1008,156,1012,157,1014,160,1017,162,1020,163,1022,164,1024,165,1026,166,1029,168,1031,169,1033,170,1037,171,1037,174,1039,179,1043,183,1047,187,1049,191,1052,195,1055,197,1057,200,1056,203,1056,205,1059,204,1060,203,1060,204,1063,208,1064,213,1065,218,1066,220,1066,223,1064,225,1063,226,1062,228,1060,231,1062,231,1064,227,1066,226,1068,226,1068,228,1070,233,1071,237,1072,239,1073,241,1074" data-target="#galle" data-toggle="modal" href="#" shape="poly" /> <area alt="matara" class="btn" coords="241,1072,246,1075,249,1076,251,1075,251,1073,253,1071,254,1072,257,1072,258,1074,258,1075,259,1077,258,1078,257,1079,262,1080,266,1081,270,1081,273,1081,277,1081,280,1081,282,1081,285,1080,291,1081,294,1083,295,1085,297,1086,300,1084,303,1082,305,1080,309,1078,312,1077,318,1076,324,1076,328,1075,331,1074,333,1071,332,1069,330,1067,328,1067,324,1065,323,1063,326,1059,323,1058,320,1056,318,1057,315,1053,316,1051,322,1049,324,1045,323,1042,321,1039,321,1035,324,1034,325,1031,323,1029,320,1030,315,1031,313,1028,312,1026,313,1024,314,1022,316,1019,316,1017,310,1018,307,1016,304,1013,301,1011,301,1009,303,1006,304,1005,305,1003,307,1001,307,999,308,997,309,996,313,994,315,993,315,991,314,990,316,986,316,984,315,983,315,982,319,980,318,978,318,977,317,975,316,975,315,973,316,971,316,970,312,969,310,969,308,969,306,970,304,970,303,969,302,968,301,966,302,964,304,963,304,961,305,959,305,957,303,956,301,958,298,958,293,958,290,958,288,957,286,957,285,958,284,959,283,962,281,964,278,964,275,965,272,965,270,966,269,966,268,965,265,966,265,967,264,968,264,970,264,973,266,974,268,976,269,978,270,980,270,982,270,985,269,987,268,989,265,989,264,988,261,987,259,985,256,982,254,980,252,978,249,977,248,975,247,973,245,973,243,974,241,975,239,975,239,978,242,980,243,981,245,983,249,987,250,988,253,990,254,992,255,994,255,998,256,1001,254,1005,252,1006,251,1007,248,1006,246,1006,244,1004,242,1004,243,1007,244,1009,244,1011,243,1013,242,1015,242,1018,241,1019,241,1021,240,1024,241,1025,242,1027,245,1033,249,1034,252,1036,254,1037,255,1038,254,1040,253,1041,251,1043,250,1044,249,1046,248,1047,248,1048,247,1049,246,1049,244,1050,243,1050,242,1050,242,1053,242,1054,244,1055,246,1056,248,1056,250,1057,251,1058,250,1060,249,1061,247,1062,245,1062,243,1062,242,1062,240,1065,240,1065,240,1067,240,1069" data-target="#matara" data-toggle="modal" href="#" shape="poly" /> <area alt="hambantota" class="btn" coords="331,1070,335,1069,336,1068,337,1067,338,1065,342,1064,346,1062,348,1061,351,1058,352,1057,354,1054,355,1053,359,1053,363,1053,367,1052,369,1051,372,1049,374,1047,378,1046,380,1046,383,1045,386,1044,391,1042,398,1040,401,1040,404,1038,407,1036,409,1036,416,1036,421,1035,426,1034,429,1033,433,1032,437,1032,439,1031,442,1029,444,1027,447,1025,449,1025,453,1023,457,1021,460,1020,466,1019,468,1018,471,1016,473,1015,478,1014,481,1013,492,1010,494,1009,498,1007,501,1005,504,1002,510,999,513,997,516,995,519,992,521,989,523,986,527,983,531,982,535,980,537,978,539,976,542,973,542,970,544,968,547,967,552,966,557,965,559,963,563,957,568,955,571,953,573,951,574,949,575,945,580,944,584,942,586,939,587,937,590,935,593,932,595,931,597,928,598,925,592,926,591,924,588,922,587,920,585,918,583,918,580,917,577,916,576,914,575,912,574,911,572,908,570,907,570,911,569,912,567,913,564,913,562,915,561,915,558,916,556,917,554,918,552,919,549,922,546,923,543,926,539,928,537,930,536,932,536,936,536,938,537,941,536,944,536,947,536,950,534,952,531,953,529,952,528,950,527,950,523,951,521,952,515,954,513,953,510,954,508,956,503,958,500,960,496,961,492,961,487,963,484,963,481,966,477,969,473,970,470,971,466,970,466,967,465,964,463,962,460,959,458,956,456,955,451,956,448,956,445,954,444,952,442,951,438,951,435,950,430,950,426,950,423,951,421,952,418,956,415,958,411,959,410,959,409,963,410,965,412,968,412,970,410,973,406,975,403,975,401,975,399,976,395,978,392,980,390,981,388,983,388,988,390,990,390,992,392,994,392,996,394,999,394,1001,392,1001,391,1001,387,1000,385,1000,382,999,379,998,377,998,374,996,372,994,372,991,371,991,367,991,364,992,362,993,359,993,356,992,352,992,349,992,348,990,343,989,340,987,334,986,331,984,330,983,328,982,324,982,321,982,319,981,316,981,314,982,314,983,315,985,314,988,313,989,314,992,314,993,311,995,309,996,308,996,306,999,306,1000,305,1002,304,1004,302,1006,301,1008,301,1010,301,1012,302,1013,304,1015,306,1016,307,1017,308,1018,309,1019,311,1019,313,1018,314,1017,315,1018,315,1020,314,1021,313,1024,311,1025,311,1026,313,1029,313,1030,314,1032,315,1032,316,1031,320,1030,323,1030,324,1031,323,1033,321,1035,320,1036,320,1038,320,1040,322,1042,322,1043,322,1045,322,1046,321,1049,319,1049,317,1050,315,1052,313,1052,318,1057,319,1057,320,1058,321,1059,322,1062,322,1064,322,1066,323,1066,324,1067" data-target="#hambanthota" data-toggle="modal" href="#" shape="poly" /> </map></div>\n<!-- Colombo --><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="colombo" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Colombo</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Advance Car Audio</h5>\n							No 07 Waidya Road, Dehiwala, Colombo.<br />\n							Tel: 0094 11 2729029<br />\n							E mail: info@advancecaraudio.com<br />\n							Hot Line: 0094 77 7797777<br />\n							Web www.advancecaraudio.com</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Acme Stereo World</h5>\n							No 318/2/B, Colombo Road,Wewela , Piliyandala, Colombo.<br />\n							E mail: acmestereoworld@yahoo.com <br />\n							Hot Line: 0094 77 7706364 / 0094 77 7827193</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Wishmitha Lanka</h5>\n							No 514/2, Methsiri Pedesa,Old Road Kottawa,Pannipitiya, Colombo.<br />\n							Tel: 0094 11 4597943<br />\n							E mail: vismitha80@gmail.com <br />\n							Hot Line: 0094 71 4194922</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Intruder Solutions</h5>\n							No 80b,Galle Road, Mount Lavinia, Colombo.<br />\n							Tel: 0094 11 4953575<br />\n							E mail: Intrudersolutions@yahoo.com<br />\n							Hot Line: 0094 77 7302799</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Dinushan Auto Works</h5>\n							No 59d,Colombo Road,Bokundara, Piliyandala, Colombo.<br />\n							Tel: 0094 11 4559812<br />\n							Hot Line: 0094 77 7373193</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!--Gampaha--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="gampaha" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Gampaha</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								T.N Auto Electrical</h5>\n							No 805,Colombo Road,Kurana, Gampaha.<br />\n							Hot Line: 0094 77 7686398</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Techno Shop</h5>\n							No 440,Nilpanagoda, Minuwangoda, Gampaha.<br />\n							Tel: 0094 11 2298388</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Thissa Electrical</h5>\n							No 29, Kandy Road, Yakkala, Gampaha.<br />\n							Tel: 0094 33 226402<br />\n							E mail: tissa.electricals@yahoo.com<br />\n							Hot Line: 0094 72 7788448</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- / gampha --><!-- kegalle --><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="kegalle" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Kegalle</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Mahinda Electrical</h5>\n							No 83,Kalugalla Mawatha, Kegalle.<br />\n							Tel: 0094 35 2221265<br />\n							E mail: dewpurasinhalaya.com<br />\n							Hot Line: 0094 77 3045605</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- / kegalle --><!-- kurunegala --><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="kurunegala" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Kurunegala</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sampath Stickers</h5>\n							No226,Colombo Road, Kurunegala.<br />\n							Tel: 0094 37 2222439 <br />\n							E mail: sampathsticker@yahoo.com<br />\n							Hot Line: 0094 77 9305445</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Siyapatha Advertising</h5>\n							Hettipola Road, Kuliyapiyiya, Kurunegala.<br />\n							Hot Line: 0094 77 9771730</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- / kurunegala --><!-- puttalam --><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="puttalam" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Puttalam</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Kosala Electricles</h5>\n							Lunuwila Juntion,Wennappuwa. Puttalam.<br />\n							Hot Line: 0094 777825350</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Nimaya Trading</h5>\n							No 32,Colombo Road Marawila Puttalam.<br />\n							Tel: 0094 32 7201866</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /puttalam --><!-- anuradhapura --><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="anuradhapura" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Anuradhapura</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Deepthi Motors Pvt Ltd</h5>\n							No334/108, Main Street , Anuradhapura.<br />\n							Tel: 0094 25 2235497</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Smart Drive</h5>\n							No 522e/20, Main Street, Anuradhapura.<br />\n							Tel: 0094 25 7210325<br />\n							E mail: wajiraperera@ymail.com<br />\n							Hot Line: 0094 77 7932595</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Chamara Micro Electrical</h5>\n							N0 60,Kithsirigama, Thambuththegama, Anuradhapura.<br />\n							Tel: 0094 25 2275620 <br />\n							Hot Line: 0094 715920023</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /anuradhapura --><!-- mannar --><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="mannar" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Mannar</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sorry, no dealers available in this area</h5>\n							Please Call us 0094 11 2695525 or email us at info@sunlanka.lk , and we&#39;ll help you find what you need.</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /mannar --><!-- vavuniya --><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="vavuniya" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Vavuniya</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sorry, no dealers available in this area</h5>\n							Please Call us 0094 11 2695525 or email us at info@sunlanka.lk , and we&#39;ll help you find what you need.</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /vavuniya --><!--kilinochchi --><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="kilinochchi" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Kilinochchi</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sorry, no dealers available in this area</h5>\n							Please Call us 0094 11 2695525 or email us at info@sunlanka.lk , and we&#39;ll help you find what you need.</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /kilinochchi --><!--mulathiv--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="mulathiv" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Mullaitivu</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sorry, no dealers available in this area</h5>\n							Please Call us 0094 11 2695525 or email us at info@sunlanka.lk , and we&#39;ll help you find what you need.</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /mulathiv --><!--jafna--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="jafna" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Jaffna</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Arul Vinayagar Motors</h5>\n							No 108,Stanly Road, Jaffna.<br />\n							Tel: 0094 021 2229222<br />\n							Hot Line: 0094 773053030</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /jafna --><!--trincomale--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="trincomale" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Trincomalee</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sorry, no dealers available in this area</h5>\n							Please Call us 0094 11 2695525 or email us at info@sunlanka.lk , and we&#39;ll help you find what you need.</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n<!-- /trincomale --></div>\n<!--polonnaruwa--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="polonnaruwa" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Polonnaruwa</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sorry, no dealers available in this area</h5>\n							Please Call us 0094 11 2695525 or email us at info@sunlanka.lk , and we&#39;ll help you find what you need.</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /polonnaruwa --><!--baticaloa--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="baticaloa" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Batticaloa</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								P S Motors</h5>\n							No10/A,New Kalmunai Road, Batticaloa.<br />\n							Tel: 0094 65 2226017<br />\n							Hot Line: 0094 77 9354096</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /baticaloa --><!--matale--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="matale" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Matale</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Drive Smart</h5>\n							No 62, Kandy Road, Matale.<br />\n							Tel: 0094 66 2224442<br />\n							E mail: drivesmart@gmail.com<br />\n							Hot Line: 0094 77 4334444<br />\n							Web: www.drivesmartlk.com</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Smarter Motors</h5>\n							No 890,Anuradhapura Road,Dambulla, Matale.<br />\n							Tel: 0094 66 2224442<br />\n							Hot Line: 0094 77 7592736</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /matale --><!--kandy--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="kandy" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Kandy</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Mseas Car Audio</h5>\n							Willium Gopallawa Mawatha, Kandy.<br />\n							Tel: 0094 777805907<br />\n							E mail: mc805907@yahoo.com<br />\n							Hot Line: 0094 777805907</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Darly motors and Advertising</h5>\n							No 3G, Willium Gopallawa Mawatha, Kandy.<br />\n							E mail: darlyssmotors@yahoo.com<br />\n							Hot Line: 0094 77 4469900</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /kandy --><!--ampara--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="ampara" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Ampara</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								New Priyanka Motors (Dilan)</h5>\n							Pandukabaya Mw, Ampara.<br />\n							Tel: 0094 63 2224131<br />\n							Hot Line: 0094 72 4231218</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Chil Air</h5>\n							No 127,Main Street,Kalmunai, Ampara.<br />\n							Tel: 0094 67 2222628 <br />\n							Hot Line: 0094 77 9584236</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /ampara --><!--nuwaraeliya--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="nuwaraeliya" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Nuwara Eliya</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sorry, no dealers available in this area</h5>\n							Please Call us 0094 11 2695525 or email us at info@sunlanka.lk , and we&#39;ll help you find what you need.</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /nuwaraeliya --><!--badulla--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="badulla" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Badulla</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Pala Auto Windscreen</h5>\n							Badulla Road,Thanthiriya,Bandarawela, Badulla.<br />\n							Tel:0094 57 2233048<br />\n							Hot Line: 0094 77 5113476</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Pala Auto Traders</h5>\n							No 32 Cocowatta, Badulla.<br />\n							Tel: 0094 55 2230982</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sampath Electricals</h5>\n							No 30/25,Technical Place,Mahiyanganaya, Badulla.<br />\n							Tel: 0094 55 2257595 <br />\n							Hot Line: 0094 77 2257595</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /badulla --><!--monaragala--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="monaragala" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Moneragala</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sorry, no dealers available in this area</h5>\n							Please Call us 0094 11 2695525 or email us at info@sunlanka.lk , and we&#39;ll help you find what you need.</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /monaragala --><!--kaluthara--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="kaluthara" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Kalutara</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sara Audio.Com</h5>\n							No 195/2,Galle Road,Kaluthara South, Kalutara.<br />\n							Tel: 0094 34 2222179<br />\n							E mail: saraaudiokt@yahoo.com<br />\n							Hot Line: 0094 77 7725775</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /kaluthara --><!--ratnapura--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="ratnapura" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Ratnapura</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Ameesha Car Audio</h5>\n							Opposite Suchika Gems,Embilipitiya, Rathnapura.<br />\n							Hot Line: 0094 77 6515102 / 00 94 775499489</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Pasindu Auto Parts</h5>\n							No141/D/1,Rathnapura, Road Awissawella, Rathnapura.<br />\n							Tel: 0094 60 2368262<br />\n							E mail: pasounders@gmail.com<br />\n							Hot Line: 0094 77 3302105</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Technowin Lanka</h5>\n							No 01,New Super Marcket Kudugalwatta, Rathnapura.<br />\n							Hot Line: 0094 71 2958500</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Jayantha Electricals</h5>\n							No 35, Bodhiraja Mawatha, Rathnapura.<br />\n							Tel: 0094 45 2224483<br />\n							E mail: ayantha.karawita@gmail.com<br />\n							Hot Line: 0094 71 6140683</div>\n					</div>\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Tharanga Motors</h5>\n							No 389 B,Oluganthota,Balangoda, Rathnapura.<br />\n							Hot Line: 0094 72 7503315</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /ratnapura --><!--galle--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="galle" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Galle</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sorry, no dealers available in this area</h5>\n							Please Call us 0094 11 2695525 or email us at info@sunlanka.lk , and we&#39;ll help you find what you need.</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /galle --><!--matara--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="matara" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Matara</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sugath Motors</h5>\n							No 196,Pathum Uyana,Pamburana, Matara.<br />\n							E mail: spsumithpriyantha@gmail.com<br />\n							Hot Line: 0094 77 3783892</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n<!-- /matara --><!--hambanthota--><div aria-hidden="true" aria-labelledby="myModalLabel" class="products modal fade" id="hambanthota" role="dialog" tabindex="-1">\n	<div class="modal-dialog">\n		<div class="modal-content">\n			<div class="modal-header">\n				<button class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\n				<h4 class="modal-title" id="myModalLabel">\n					Dealers in Hambantota</h4>\n			</div>\n			<div class="modal-body delares_list">\n				<div class="row">\n					<div class="col-md-12">\n						<div class="dealers-details">\n							<h5>\n								Sorry, no dealers available in this area</h5>\n							Please Call us 0094 11 2695525 or email us at info@sunlanka.lk , and we&#39;ll help you find what you need.</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>\n', 'DEALERS', '0', 0, '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tbl_contents` (`content_id`, `content_title`, `content_image`, `content`, `content_hcode`, `delete_status`, `added_by`, `added_date`, `updated_by`, `updated_date`) VALUES
(8, 'Gallery', 'ib_1408437307-about_us.png', '', 'GALLERY', '0', 0, '0000-00-00 00:00:00', NULL, NULL),
(9, 'Products', 'ib_1408507641-dealers.png', '', 'PRODUCTS', '0', 0, '0000-00-00 00:00:00', NULL, NULL),
(10, 'Hot Products', 'ib_1408360573-dealers.png', '', 'HOT_PRODUCTS', '0', 0, '0000-00-00 00:00:00', NULL, NULL),
(11, 'Monthly Products', 'ib_1408360573-dealers.png', '', 'MONTHLY_PRODUCTS', '0', 0, '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_features`
--

CREATE TABLE IF NOT EXISTS `tbl_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feature` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tbl_features`
--

INSERT INTO `tbl_features` (`id`, `feature`) VALUES
(35, 'Car alarm system '),
(36, 'Arm/disarm/mute arm'),
(37, 'Emergency alarm '),
(38, 'Disarming '),
(39, 'Open door warning '),
(40, 'Valet mode'),
(41, 'Anti hi-jack'),
(42, 'Self-test function'),
(43, 'Detect during reversing/driving'),
(44, 'Rear collision avoidance '),
(46, 'Various scents and long- lasting  Factory price  Latest product'),
(47, 'Factory price');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  `is_latest` enum('1','0') NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL,
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `title`, `content`, `is_deleted`, `is_latest`, `status`, `added_date`, `added_by`, `updated_by`, `updated_date`) VALUES
(1, 'gfg', '<p>\n gdfgg</p>\n', '1', '0', 1, '2014-08-06 06:39:18', 1, NULL, NULL),
(2, 'wwwwwwww', '', '1', '0', 1, '2014-08-06 06:40:53', 1, NULL, NULL),
(3, 'wwwwwwww', '', '1', '0', 1, '2014-08-06 06:41:04', 1, NULL, NULL),
(4, 'wwwwwwww', '<p>\n fhghfghfgh</p>\n<p>\n &nbsp;</p>\n<p>\n dasd</p>\n', '0', '1', 1, '2014-08-07 06:27:51', 1, 1, '2014-08-07 07:50:20'),
(5, 'sds', '<p>\n SunLanka has a Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p>\n', '0', '0', 1, '2014-08-07 06:27:43', 1, 1, '2014-08-07 08:09:31'),
(6, 'news title', '<p>\n <img alt="" class="img-responsive" height="165" src="/content_files/images/gallery-cat3.png" width="165" /></p>\n<p>\n &nbsp;</p>\n<p>\n It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\n', '0', '0', 1, '2014-08-07 06:46:09', 1, 1, '2014-08-07 08:09:39'),
(7, 'news', '<p>\n It is a long established fact that a reader will be</p>\n<p>\n distracted by the readable content of a page when looking at its layout. </p>\n<p>\n The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '0', '0', 1, '2014-08-07 07:00:11', 1, 1, '2014-08-07 09:02:04'),
(8, 'sfsfasag', '<p>\n It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\n', '0', '1', 1, '2014-08-07 08:50:36', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `product_cat_id` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `features` text,
  `product_name` varchar(100) NOT NULL,
  `image_thumb` varchar(50) NOT NULL,
  `banner_image` varchar(50) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `availability` tinyint(1) NOT NULL,
  `online` tinyint(1) NOT NULL,
  `is_hot_product` enum('1','0') NOT NULL DEFAULT '0',
  `is_monthly_product` enum('1','0') NOT NULL DEFAULT '0',
  `cart_link` varchar(300) DEFAULT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`prod_id`),
  KEY `brand_id` (`brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_cats`
--

CREATE TABLE IF NOT EXISTS `tbl_product_cats` (
  `product_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_cat_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image_thumb` varchar(50) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `tbl_product_cats`
--

INSERT INTO `tbl_product_cats` (`product_cat_id`, `parent_cat_id`, `description`, `added_date`, `image_thumb`, `is_deleted`, `status`) VALUES
(51, 54, 'One Way', '2014-07-15 13:09:26', '', 0, 1),
(52, 0, 'Accessories', '2014-07-16 09:28:22', 'prodcat_1405502897-Untitled-1.png', 1, 1),
(53, 0, 'Accessories', '2014-07-16 09:34:57', '', 0, 1),
(54, 0, 'Car Alarm System', '2014-07-16 12:33:39', '', 0, 1),
(55, 53, 'Air Freshner', '2014-07-22 07:00:29', '', 0, 1),
(56, 55, 'Liquid Air Freshner', '2014-07-29 10:35:07', '', 0, 1),
(57, 51, 'fgytfgh', '2014-07-30 10:43:46', 'prodcat_1406716449-IMG_20140718_144308.jpg', 1, 1),
(58, 51, 'yhjgh', '2014-07-30 10:43:55', 'prodcat_1406716458-IMG_20140718_095635.jpg', 1, 1),
(59, 55, 'Gel Air Freshner', '2014-08-19 10:58:23', '', 0, 1),
(60, 53, 'Car Electronic', '2014-08-19 11:00:02', '', 0, 1),
(61, 0, 'new parent', '2014-08-20 05:28:59', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_features`
--

CREATE TABLE IF NOT EXISTS `tbl_product_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `prod_id` (`prod_id`),
  KEY `feature_id` (`feature_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sliders`
--

CREATE TABLE IF NOT EXISTS `tbl_sliders` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_no` enum('1','2','3') NOT NULL COMMENT '1 - Featured Attractions, 2 - Main slider , 3 - Airways Slider',
  `slider_title` varchar(100) NOT NULL,
  `slider_link` varchar(400) DEFAULT NULL,
  `slider_image` varchar(250) NOT NULL,
  `slider_bg_image` varchar(250) DEFAULT NULL,
  `slider_content` text,
  `slider_order` int(11) NOT NULL DEFAULT '0',
  `delete_status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1 = deleted , 0  =  not deleted',
  `added_date` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_sliders`
--

INSERT INTO `tbl_sliders` (`slider_id`, `slider_no`, `slider_title`, `slider_link`, `slider_image`, `slider_bg_image`, `slider_content`, `slider_order`, `delete_status`, `added_date`, `added_by`, `updated_by`, `updated_date`) VALUES
(1, '1', '', NULL, 'ml_1404102153-ml_1403950433-pro-1.jpg', NULL, '', 0, '0', '2014-06-30 04:22:35', 1, NULL, NULL),
(2, '1', '', NULL, 'ml_1404102159-ml_1403950449-pro-2.jpg', NULL, '', 1, '0', '2014-06-30 04:22:40', 1, NULL, NULL),
(3, '1', '', NULL, 'ml_1404102164-ml_1403950456-pro-3.jpg', NULL, '', 1, '0', '2014-06-30 04:22:45', 1, NULL, NULL),
(4, '1', '', NULL, 'ml_1404102170-ml_1403950466-pro-4.jpg', NULL, '', 1, '0', '2014-06-30 04:22:51', 1, NULL, NULL),
(6, '1', '', NULL, 'ml_1404102183-ml_1403952177-pro-4.jpg', NULL, '', 5, '0', '2014-06-30 04:23:05', 1, NULL, NULL),
(20, '', '', NULL, '0', '0', '0', 1, '0', '2014-08-14 16:59:15', 1, NULL, NULL),
(21, '', '', NULL, '0', '0', '0', 1, '0', '2014-08-14 16:59:49', 1, NULL, NULL),
(22, '', '', NULL, '0', '0', '0', 2, '0', '2014-08-14 17:09:24', 1, NULL, NULL),
(25, '2', '', 'undefined', 'ml_1409292602-slider1-products.png', 'ml_1409292635-bg2.jpg', '<h1>\n	Expand Your Entertainment Choices</h1>\n', 1, '0', '2014-08-29 08:10:53', 1, NULL, NULL),
(28, '1', 'aaaaaa', '', 'ml_1409914073-Desert.jpg', 'ml_bg_1409914076-Lighthouse.jpg', '0', 1, '0', '2014-09-05 12:48:03', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE IF NOT EXISTS `tender` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`id`, `name`, `path`) VALUES
(5, 'CF_LabSheet_05.pdf', '/var/www/html/SEP/pdf/'),
(6, 'CF_LabSheet_03.pdf', '/var/www/html/SEP/pdf/');

-- --------------------------------------------------------

--
-- Table structure for table `tracker`
--

CREATE TABLE IF NOT EXISTS `tracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `ip` text NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `query_string` text NOT NULL,
  `http_referer` text NOT NULL,
  `http_user_agent` text NOT NULL,
  `isbot` int(11) NOT NULL,
  `remote_host` varchar(45) DEFAULT NULL,
  `request_uri` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=366 ;

--
-- Dumping data for table `tracker`
--

INSERT INTO `tracker` (`id`, `date`, `time`, `ip`, `country`, `city`, `query_string`, `http_referer`, `http_user_agent`, `isbot`, `remote_host`, `request_uri`) VALUES
(14, '0000-00-00', '00:00:00', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(22, '2015-05-10', '18:04:59', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(23, '2015-05-10', '18:05:47', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(24, '2015-05-10', '18:06:42', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(25, '2015-05-10', '18:07:10', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(26, '2015-05-10', '18:07:26', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(27, '2015-05-10', '18:07:55', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(28, '2015-05-10', '18:08:43', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(29, '2015-05-10', '18:09:13', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(30, '2015-05-10', '18:09:47', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(31, '2015-05-10', '18:10:03', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(32, '2015-05-10', '18:10:24', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(33, '2015-05-10', '18:11:57', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(34, '2015-05-10', '18:12:36', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(35, '2015-05-10', '18:13:05', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(36, '2015-05-10', '18:13:43', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(37, '2015-05-10', '18:14:04', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(38, '2015-05-10', '18:14:26', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(39, '2015-05-10', '18:57:34', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'stats'),
(40, '2015-05-10', '19:43:28', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'stats'),
(65, '2015-05-11', '16:46:22', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(66, '2015-05-11', '16:48:55', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(67, '2015-05-11', '16:49:44', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(68, '2015-05-11', '16:50:02', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(69, '2015-05-11', '16:55:03', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'page stats'),
(70, '2015-05-11', '16:55:52', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'page stats'),
(71, '2015-05-11', '16:56:06', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'page stats'),
(72, '2015-05-11', '16:56:38', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'page stats'),
(73, '2015-05-11', '16:56:56', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'page stats'),
(74, '2015-05-11', '17:19:01', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(75, '2015-05-11', '19:20:33', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(76, '2015-05-11', '19:21:45', '112.135.45.80', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(77, '2015-05-11', '19:32:26', '::1', '', '', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(78, '2015-05-11', '19:33:48', '::1', '', '', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(79, '2015-05-11', '19:39:56', '72.21.214.144', 'United States', 'Seattle', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(80, '2015-05-11', '19:40:22', '72.21.214.144', 'United States', 'Seattle', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(86, '2015-05-11', '19:45:07', '212.58.244.26', 'United Kingdom', 'Tadworth', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(87, '2015-05-11', '19:54:51', '212.58.244.26', 'United Kingdom', 'Tadworth', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(88, '2015-05-11', '20:05:58', '212.58.244.26', 'United Kingdom', 'Tadworth', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(89, '2015-05-11', '20:10:50', '212.58.244.26', 'United Kingdom', 'Tadworth', '', '', 'Internet Explorer 10.0', 0, NULL, 'stats'),
(90, '2015-05-11', '20:10:55', '212.58.244.26', 'United Kingdom', 'Tadworth', '', '', 'Internet Explorer 10.0', 0, NULL, 'stats'),
(91, '2015-05-11', '20:11:01', '212.58.244.26', 'United Kingdom', 'Tadworth', '', '', 'Internet Explorer 10.0', 0, NULL, 'stats'),
(92, '2015-05-11', '20:11:04', '212.58.244.26', 'United Kingdom', 'Tadworth', '', '', 'Internet Explorer 10.0', 0, NULL, 'stats'),
(93, '2015-05-11', '20:18:06', '212.58.244.26', 'United Kingdom', 'Tadworth', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(94, '2015-05-11', '20:18:57', '212.58.244.26', 'United Kingdom', 'Tadworth', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(95, '2015-05-11', '20:52:32', '100.176.0', '', '', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(96, '2015-05-11', '20:52:37', '100.176.0', '', '', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(97, '2015-05-11', '20:54:50', '60.100.15.14', 'Japan', 'Tokyo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(98, '2015-05-11', '20:54:56', '60.100.15.14', 'Japan', 'Tokyo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(99, '2015-05-11', '20:55:01', '60.100.15.14', 'Japan', 'Tokyo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(100, '2015-05-11', '20:55:09', '60.100.15.14', 'Japan', 'Tokyo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(101, '2015-05-11', '20:55:34', '60.100.15.14', 'Japan', 'Tokyo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(102, '2015-05-11', '20:56:39', '60.100.15.14', 'Japan', 'Tokyo', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(103, '2015-05-11', '20:59:51', ' 80.10.100.6', '', '', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(104, '2015-05-11', '20:59:54', ' 80.10.100.6', '', '', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(105, '2015-05-11', '21:00:13', '80.10.100.6', 'France', 'Orange', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(106, '2015-05-11', '21:00:17', '80.10.100.6', 'France', 'Orange', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(107, '2015-05-11', '21:00:23', '80.10.100.6', 'France', 'Orange', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(108, '2015-05-11', '21:00:28', '80.10.100.6', 'France', 'Orange', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(109, '2015-05-11', '21:00:35', '80.10.100.6', 'France', 'Orange', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(110, '2015-05-11', '21:00:47', '80.10.100.6', 'France', 'Orange', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(111, '2015-05-11', '21:03:00', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(112, '2015-05-11', '21:03:04', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(113, '2015-05-11', '21:03:07', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(114, '2015-05-11', '21:03:13', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(115, '2015-05-11', '21:03:20', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(116, '2015-05-11', '21:08:00', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(117, '2015-05-11', '21:19:44', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(118, '2015-05-11', '21:21:29', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(119, '2015-05-11', '21:31:41', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'Home'),
(120, '2015-05-11', '21:32:17', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'Home'),
(121, '2015-05-11', '21:33:31', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(122, '2015-05-11', '21:35:00', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'Home'),
(123, '2015-05-11', '21:36:28', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'Home'),
(124, '2015-05-11', '21:37:09', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'CSR Projects'),
(125, '2015-05-11', '21:38:55', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'About Us'),
(126, '2015-05-11', '21:39:03', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'About Us'),
(127, '2015-05-11', '21:39:13', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'Home'),
(128, '2015-05-11', '21:43:31', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(129, '2015-05-11', '21:44:01', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(130, '2015-05-11', '22:09:23', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(131, '2015-05-11', '22:09:37', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'Home'),
(132, '2015-05-11', '22:17:04', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'About Us'),
(133, '2015-05-11', '22:26:37', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 33.0.1750.146', 0, NULL, 'Registration Page'),
(134, '2015-05-11', '22:27:14', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'Registration Page'),
(135, '2015-05-11', '22:39:21', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'Registration Page'),
(136, '2015-05-11', '22:48:24', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 33.0.1750.146', 0, NULL, 'Registration Page'),
(137, '2015-05-11', '22:48:47', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'Registration Page'),
(138, '2015-05-11', '22:49:15', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'About Us'),
(139, '2015-05-11', '22:51:29', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'About Us'),
(140, '2015-05-11', '22:52:51', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 33.0.1750.146', 0, NULL, 'CSR Projects'),
(141, '2015-05-11', '22:56:33', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'CSR Projects'),
(142, '2015-05-12', '05:45:44', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'About Us'),
(143, '2015-05-12', '09:20:06', '85.45.69.66', '', '', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(144, '2015-05-12', '09:21:01', '85.45.69.66', '', '', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(145, '2015-05-12', '09:22:36', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'About Us'),
(146, '2015-05-12', '09:26:27', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(147, '2015-05-12', '10:03:30', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(148, '2015-05-12', '10:04:22', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(149, '2015-05-12', '10:05:19', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(150, '2015-05-12', '10:10:55', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(151, '2015-05-12', '10:40:30', '124.43.205.61', '', '', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Registration Page'),
(152, '2015-05-12', '10:41:07', '124.43.205.61', '', '', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(153, '2015-05-12', '10:42:09', '124.43.205.61', '', '', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Registration Page'),
(154, '2015-05-12', '10:42:36', '124.43.205.61', '', '', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(155, '2015-05-12', '10:42:39', '124.43.205.61', '', '', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'About Us'),
(156, '2015-05-12', '10:42:42', '124.43.205.61', '', '', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(157, '2015-05-12', '10:44:33', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(158, '2015-05-12', '10:47:06', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(159, '2015-05-12', '10:47:29', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(160, '2015-05-12', '10:47:38', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Registration Page'),
(161, '2015-05-12', '10:47:39', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Registration Page'),
(162, '2015-05-12', '10:48:25', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 33.0.1750.146', 0, NULL, 'Registration Page'),
(163, '2015-05-12', '10:48:47', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 33.0.1750.146', 0, NULL, 'Home'),
(164, '2015-05-12', '10:49:58', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 33.0.1750.146', 0, NULL, 'Home'),
(165, '2015-05-12', '10:50:20', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(166, '2015-05-12', '10:51:46', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(167, '2015-05-12', '10:53:16', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(168, '2015-05-12', '10:53:19', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 33.0.1750.146', 0, NULL, 'Registration Page'),
(169, '2015-05-12', '10:53:47', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 33.0.1750.146', 0, NULL, 'Home'),
(170, '2015-05-12', '10:59:05', '124.43.205.61', '', '', '', '', 'Chrome 33.0.1750.146', 0, NULL, 'Home'),
(171, '2015-05-12', '10:59:29', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(172, '2015-05-12', '11:01:40', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(173, '2015-05-12', '11:12:37', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Registration Page'),
(174, '2015-05-12', '11:13:47', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(175, '2015-05-18', '09:44:42', '85.45.69.66', '', '', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(176, '2015-05-20', '08:17:30', '85.45.69.66', '', '', '', '', 'Firefox 37.0', 0, NULL, 'stats'),
(177, '2015-05-20', '08:19:41', '124.43.205.61', '', '', '', '', 'Firefox 37.0', 0, NULL, 'Home'),
(178, '2015-05-20', '08:22:02', '124.43.205.61', '', '', '', '', 'Chrome 42.0.2311.152', 0, NULL, 'Home'),
(179, '2015-05-20', '08:22:14', '124.43.205.61', '', '', '', '', 'Chrome 42.0.2311.152', 0, NULL, 'Home'),
(180, '2015-05-20', '08:23:17', '124.43.205.61', '', '', '', '', 'Chrome 42.0.2311.152', 0, NULL, 'About Us'),
(181, '2015-05-20', '08:24:21', '124.43.205.61', '', '', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'About Us'),
(182, '2015-05-20', '08:24:45', '124.43.205.61', '', '', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(183, '2015-05-20', '08:25:34', '124.43.205.61', '', '', '', '', 'Firefox 37.0', 0, NULL, 'Home'),
(184, '2015-05-20', '08:26:29', '124.43.205.61', '', '', '', '', 'Firefox 37.0', 0, NULL, 'CSR Projects'),
(185, '2015-05-20', '08:33:27', '124.43.205.61', '', '', '', '', 'Firefox 37.0', 0, NULL, 'Registration Page'),
(186, '2015-05-20', '08:34:28', '124.43.205.61', '', '', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Registration Page'),
(187, '2015-05-20', '08:34:42', '124.43.205.61', '', '', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(188, '2015-05-20', '08:39:16', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 37.0', 0, NULL, 'Home'),
(189, '2015-05-20', '08:40:50', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(190, '2015-05-20', '08:41:09', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(191, '2015-05-20', '08:41:49', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(192, '2015-05-20', '08:48:44', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.90', 0, NULL, 'Home'),
(193, '2015-05-20', '08:51:35', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.152', 0, NULL, 'About Us'),
(194, '2015-05-22', '06:38:29', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.152', 0, NULL, 'Home'),
(195, '2015-05-22', '06:38:44', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 42.0.2311.152', 0, NULL, 'Registration Page'),
(196, '2015-06-03', '06:56:09', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(197, '2015-06-03', '07:01:19', '85.45.69.66', 'Italy', 'Rome', '', '', 'Chrome 42.0.2311.152', 0, NULL, 'stats'),
(198, '2015-06-03', '07:17:34', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 38.0', 0, NULL, 'stats'),
(199, '2015-06-03', '11:15:22', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(200, '2015-06-03', '11:51:57', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(201, '2015-06-03', '11:52:18', '85.45.69.66', '', '', '', '', 'Chrome 42.0.2311.152', 0, NULL, 'stats'),
(202, '2015-06-03', '11:53:59', '85.45.69.66', '', '', '', '', 'Chrome 42.0.2311.152', 0, NULL, 'stats'),
(203, '2015-06-04', '04:49:35', '85.45.69.66', 'Italy', 'Rome', '', '', 'Chrome 42.0.2311.152', 0, NULL, 'stats'),
(204, '2015-06-04', '08:29:18', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(205, '2015-06-04', '08:30:18', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(206, '2015-06-04', '08:30:35', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(207, '2015-06-04', '11:04:53', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(208, '2015-06-04', '11:07:36', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(209, '2015-06-04', '11:07:49', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(210, '2015-06-04', '11:07:49', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(211, '2015-06-04', '11:07:49', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(212, '2015-06-04', '11:08:09', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(213, '2015-06-04', '11:08:36', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'CSR Projects'),
(214, '2015-06-04', '11:11:33', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'CSR Projects'),
(215, '2015-06-04', '11:12:16', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'CSR Projects'),
(216, '2015-06-04', '11:12:27', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'CSR Projects'),
(217, '2015-06-04', '11:14:48', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'CSR Projects'),
(218, '2015-06-04', '11:17:30', '85.45.69.66', 'Italy', 'Rome', '', '', 'Chrome 42.0.2311.152', 0, NULL, 'stats'),
(219, '2015-06-04', '11:23:19', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Registration Page'),
(220, '2015-06-16', '17:32:07', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(221, '2015-06-16', '17:32:56', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Registration Page'),
(222, '2015-06-16', '17:33:09', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(223, '2015-06-16', '17:34:22', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(224, '2015-06-16', '17:34:28', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(225, '2015-06-16', '17:36:44', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(226, '2015-06-16', '17:37:25', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(227, '2015-06-16', '17:37:54', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(228, '2015-06-16', '17:46:57', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(229, '2015-06-16', '17:53:59', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(230, '2015-06-16', '17:56:52', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(231, '2015-06-16', '17:57:39', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(232, '2015-06-16', '17:58:05', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(233, '2015-06-16', '17:58:20', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(234, '2015-06-16', '17:58:44', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(235, '2015-06-16', '18:02:03', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(236, '2015-06-16', '18:05:52', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(237, '2015-06-20', '07:38:54', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(238, '2015-06-20', '07:56:52', '85.45.69.66', 'Italy', 'Rome', '', '', 'Firefox 38.0', 0, NULL, 'stats'),
(239, '2015-06-20', '07:57:05', '85.45.69.66', '', '', '', '', 'Firefox 38.0', 0, NULL, 'stats'),
(240, '2015-06-20', '07:57:17', '85.45.69.66', '', '', '', '', 'Firefox 38.0', 0, NULL, 'stats'),
(241, '2015-06-20', '07:57:29', '85.45.69.66', '', '', '', '', 'Firefox 38.0', 0, NULL, 'stats'),
(242, '2015-06-20', '07:57:41', '85.45.69.66', '', '', '', '', 'Firefox 38.0', 0, NULL, 'stats'),
(243, '2015-06-20', '07:57:53', '85.45.69.66', '', '', '', '', 'Firefox 38.0', 0, NULL, 'stats'),
(244, '2015-06-20', '08:26:57', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(245, '2015-06-20', '08:26:59', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(246, '2015-06-20', '08:26:59', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(247, '2015-06-20', '08:27:00', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(248, '2015-06-20', '08:27:00', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(249, '2015-06-20', '08:27:00', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(250, '2015-06-20', '08:40:45', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(251, '2015-06-20', '08:40:46', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(252, '2015-06-20', '08:40:46', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(253, '2015-06-20', '08:40:46', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(254, '2015-06-20', '08:40:48', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(255, '2015-06-20', '08:40:48', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(256, '2015-06-20', '08:41:31', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'About Us'),
(257, '2015-06-20', '08:41:34', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(258, '2015-06-20', '08:41:35', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(259, '2015-06-20', '08:41:35', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(260, '2015-06-20', '08:41:35', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(261, '2015-06-20', '08:41:38', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(262, '2015-06-20', '08:41:38', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(263, '2015-06-20', '08:42:32', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Chrome 43.0.2357.81', 0, NULL, 'Home'),
(264, '2015-06-20', '08:45:51', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(265, '2015-06-20', '08:45:55', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(266, '2015-06-20', '08:45:55', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(267, '2015-06-20', '08:45:55', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(268, '2015-06-20', '08:45:56', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(269, '2015-06-20', '08:45:59', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(270, '2015-06-20', '08:46:58', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(271, '2015-06-20', '08:46:59', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(272, '2015-06-20', '08:46:59', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(273, '2015-06-20', '08:46:59', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(274, '2015-06-20', '08:47:02', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(275, '2015-06-20', '08:47:02', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(276, '2015-06-20', '08:47:52', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(277, '2015-06-20', '08:47:53', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(278, '2015-06-20', '08:47:53', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(279, '2015-06-20', '08:47:56', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(280, '2015-06-20', '08:47:56', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(281, '2015-06-20', '08:48:02', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(282, '2015-06-20', '08:48:02', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(283, '2015-06-20', '08:48:03', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(284, '2015-06-20', '08:48:04', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(285, '2015-06-20', '08:48:05', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(286, '2015-06-20', '08:48:07', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(287, '2015-06-20', '08:48:07', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(288, '2015-06-20', '08:48:13', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(289, '2015-06-20', '08:48:39', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(290, '2015-06-20', '08:48:41', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(291, '2015-06-20', '08:48:41', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(292, '2015-06-20', '08:48:44', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(293, '2015-06-20', '08:48:44', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(294, '2015-06-20', '08:48:50', '124.43.205.61', 'Sri Lanka', 'Colombo', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(295, '2015-06-20', '08:50:22', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(296, '2015-06-20', '08:50:24', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(297, '2015-06-20', '08:50:25', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(298, '2015-06-20', '08:50:25', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(299, '2015-06-20', '08:50:25', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(300, '2015-06-20', '08:50:25', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(301, '2015-06-20', '08:50:26', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(302, '2015-06-20', '08:50:28', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(303, '2015-06-20', '08:50:28', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(304, '2015-06-20', '08:50:30', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(305, '2015-06-20', '08:51:08', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(306, '2015-06-20', '08:51:09', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(307, '2015-06-20', '08:51:09', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(308, '2015-06-20', '08:51:09', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(309, '2015-06-20', '08:51:09', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(310, '2015-06-20', '08:51:09', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(311, '2015-06-20', '08:51:10', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(312, '2015-06-20', '08:51:30', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(313, '2015-06-20', '08:51:33', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(314, '2015-06-20', '08:51:35', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(315, '2015-06-20', '08:51:35', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(316, '2015-06-20', '08:51:35', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(317, '2015-06-20', '08:51:35', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(318, '2015-06-20', '08:51:35', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(319, '2015-06-20', '08:53:18', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(320, '2015-06-20', '08:53:18', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(321, '2015-06-20', '08:53:18', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(322, '2015-06-20', '08:53:18', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(323, '2015-06-20', '08:53:18', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(324, '2015-06-20', '08:53:18', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(325, '2015-06-20', '08:53:18', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(326, '2015-06-20', '08:53:53', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(327, '2015-06-20', '08:53:54', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(328, '2015-06-20', '08:53:54', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(329, '2015-06-20', '08:53:54', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(330, '2015-06-20', '08:53:54', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(331, '2015-06-20', '08:53:54', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(332, '2015-06-20', '08:53:55', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(333, '2015-06-20', '08:56:46', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(334, '2015-06-20', '08:56:46', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(335, '2015-06-20', '08:56:46', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(336, '2015-06-20', '08:56:46', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(337, '2015-06-20', '08:56:46', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(338, '2015-06-20', '08:56:46', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(339, '2015-06-20', '08:56:47', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(340, '2015-06-20', '09:05:16', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(341, '2015-06-20', '09:05:17', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(342, '2015-06-20', '09:05:17', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(343, '2015-06-20', '09:05:17', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(344, '2015-06-20', '09:05:17', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(345, '2015-06-20', '09:05:17', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(346, '2015-06-20', '09:05:35', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(347, '2015-06-20', '09:05:36', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(348, '2015-06-20', '09:05:36', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(349, '2015-06-20', '09:05:36', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(350, '2015-06-20', '09:05:36', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(351, '2015-06-20', '09:05:36', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(352, '2015-06-20', '09:08:19', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(353, '2015-06-20', '09:08:20', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(354, '2015-06-20', '09:08:20', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(355, '2015-06-20', '09:08:20', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(356, '2015-06-20', '09:08:20', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(357, '2015-06-20', '09:08:20', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(358, '2015-06-20', '09:17:52', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(359, '2015-06-20', '09:17:53', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(360, '2015-06-20', '09:17:53', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(361, '2015-06-20', '09:17:53', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(362, '2015-06-20', '09:17:53', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(363, '2015-06-20', '09:17:53', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(364, '2015-06-20', '10:49:01', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home'),
(365, '2015-06-20', '11:04:20', '124.43.205.61', '', '', '', '', 'Firefox 38.0', 0, NULL, 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `online` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `telephone`, `status`, `online`) VALUES
(1, 'a', 'a', 'a', 'a', '2', 1, 1),
(2, 'sithira', 'sithira2011@gmail.com', '1', NULL, '0255', 1, 0),
(4, 'sithira', 'sithira20114@gmail.com', '1', NULL, '555', 1, 1),
(6, 'aa', 'sithira20112@gmail.com', 'a', 'm', '0716279549', 1, 1),
(7, 'sit', 'sitt@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'm', '0716279549', 1, 0),
(8, 'aaaa', 'aaa', 'aaa', NULL, NULL, 1, 1),
(9, 'ashen', 'ashen', 'ashen', NULL, NULL, NULL, 0),
(10, 'sithira', 'sithira2014@gmail.com', '87d4eeb7dec7686410748d174c0e0a11', 'Male', '0716279549', 1, 0),
(23, 'sit', 'chandimalperera7890@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'm', '0716279549', 1, 0),
(24, 'sit', 'chandimalperera7890@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'm', '0716279549', NULL, 0),
(25, 'sit', 'chandimalperera7890@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'm', '0716279549', 1, 1),
(26, 'sit', 'chandimalperera7890@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'm', '0716279549', 1, 1),
(27, 's', 's@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', 'm', '0716279549', 1, 1),
(28, 's', 's@gmail.com', '202cb962ac59075b964b07152d234b70', 'm', '0716279549', NULL, 1),
(29, 'sithira', 'a@gmail.com', '74b87337454200d4d33f80c4663dc5e5', 'm', '0716279549', NULL, 1),
(30, 'Admin', 'aa@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 'Male', '0716279549', 1, 1),
(32, 'sithira', 'ss@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', 'm', '0716279549', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_product_features`
--
ALTER TABLE `tbl_product_features`
  ADD CONSTRAINT `tbl_product_features_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `tbl_products` (`prod_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_product_features_ibfk_3` FOREIGN KEY (`feature_id`) REFERENCES `tbl_features` (`id`) ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
