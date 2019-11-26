-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2019 at 11:43 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `click`
--
CREATE DATABASE IF NOT EXISTS `click` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `click`;

-- --------------------------------------------------------

--
-- Table structure for table `avatar`
--

CREATE TABLE `avatar` (
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avatar`
--

INSERT INTO `avatar` (`path`) VALUES
('FB_IMG_1486897326961.jpg'),
('IMG-20170319-WA0006.jpg'),
('IMG-20170319-WA0007.jpg'),
('IMG-20170319-WA0008.jpg'),
('IMG-20170319-WA0009.jpg'),
('IMG-20170319-WA0010.jpg'),
('IMG-20170319-WA0011.jpg'),
('IMG-20170319-WA0012.jpg'),
('IMG-20170319-WA0013.jpg'),
('IMG-20170319-WA0014.jpg'),
('IMG-20170319-WA0015.jpg'),
('IMG-20170319-WA0016.jpg'),
('IMG-20170319-WA0017.jpg'),
('IMG-20170319-WA0018.jpg'),
('IMG-20170319-WA0019.jpg'),
('IMG-20170319-WA0020.jpg'),
('IMG-20170319-WA0021.jpg'),
('IMG-20170319-WA0022.jpg'),
('IMG-20170319-WA0023.jpg'),
('IMG-20170319-WA0024.jpg'),
('IMG-20170319-WA0025.jpg'),
('IMG-20170319-WA0026.jpg'),
('IMG-20170319-WA0027.jpg'),
('IMG-20170319-WA0028.jpg'),
('IMG-20170319-WA0029.jpg'),
('IMG-20170319-WA0030.jpg'),
('IMG-20170319-WA0031.jpg'),
('IMG-20170319-WA0032.jpg'),
('IMG-20170319-WA0033.jpg'),
('IMG-20170319-WA0034.jpg'),
('IMG-20170319-WA0035.jpg'),
('IMG-20170319-WA0036.jpg'),
('IMG-20170319-WA0037.jpg'),
('IMG-20170319-WA0038.jpg'),
('IMG-20170319-WA0039.jpg'),
('IMG-20170319-WA0040.jpg'),
('IMG-20170319-WA0041.jpg'),
('IMG-20170319-WA0042.jpg'),
('IMG-20170319-WA0043.jpg'),
('IMG-20170319-WA0046.jpg'),
('IMG-20170319-WA0049.jpg'),
('IMG-20170319-WA0050.jpg'),
('IMG-20170319-WA0051(1).jpg'),
('IMG-20170319-WA0051.jpg'),
('IMG-20170319-WA0052.jpg'),
('IMG-20170319-WA0053.jpg'),
('IMG-20170319-WA0054.jpg'),
('IMG-20170319-WA0055.jpg'),
('IMG-20170319-WA0056.jpg'),
('IMG-20170319-WA0057.jpg'),
('IMG-20170319-WA0065.jpg'),
('IMG-20170319-WA0066(1).jpg'),
('IMG-20170319-WA0066.jpg'),
('IMG-20170319-WA0067.jpg'),
('IMG-20170319-WA0068.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_sender_id` int(10) NOT NULL,
  `chat_receiver_id` int(10) NOT NULL,
  `chat_text` text NOT NULL,
  `chat_status` varchar(6) NOT NULL DEFAULT 'unread',
  `chat_id` int(10) NOT NULL,
  `chat_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `type` char(4) NOT NULL DEFAULT 'text'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_sender_id`, `chat_receiver_id`, `chat_text`, `chat_status`, `chat_id`, `chat_time`, `type`) VALUES
(7, 11, 'this is a test message from amresh id=7 to hanish id=11', 'read', 1, '2019-10-20 17:56:13.123222', 'text'),
(7, 11, 'test message 1', 'read', 2, '2019-10-20 17:56:13.123222', 'text'),
(7, 11, 'test message 2', 'read', 3, '2019-10-20 17:56:13.123222', 'text'),
(7, 11, 'test message 3', 'read', 4, '2019-10-20 17:56:13.123222', 'text'),
(11, 7, 'this is test message to amresh', 'read', 5, '2019-10-20 17:56:13.123222', 'text'),
(11, 7, 'test 2', 'read', 6, '2019-10-20 17:56:13.123222', 'text'),
(11, 7, 'test3', 'read', 7, '2019-10-20 17:56:13.123222', 'text'),
(11, 7, 'test4', 'read', 8, '2019-10-20 17:56:13.123222', 'text'),
(7, 11, 'bs bhai ho gaya test!!\r\nXDXD', 'read', 9, '2019-10-20 17:56:13.123222', 'text'),
(11, 7, 'or bro\r\n', 'read', 10, '2019-10-20 17:56:13.123222', 'text'),
(7, 11, 'not received setInterval not working stackoverflow ', 'read', 11, '2019-10-20 17:56:13.123222', 'text'),
(11, 7, 'this time it should work', 'read', 12, '2019-10-20 17:56:13.123222', 'text'),
(11, 7, 'it worked!!', 'read', 13, '2019-10-20 17:56:13.123222', 'text'),
(11, 7, 'test automatic sending', 'read', 14, '2019-10-20 18:23:24.985157', 'text'),
(11, 7, 'automatic sending test 2', 'read', 15, '2019-10-20 18:24:41.630737', 'text'),
(7, 11, 'automatic sending test 3', 'read', 16, '2019-10-20 18:27:15.183706', 'text'),
(7, 11, 'automatic loading of received message test', 'read', 17, '2019-10-21 08:22:53.697453', 'text'),
(7, 11, 'automatic receiving testing 4', 'read', 18, '2019-10-21 08:29:04.029418', 'text'),
(7, 11, 'xoxoxoxoxoxoxoxoxoxoxoxoxox', 'read', 19, '2019-10-21 08:42:34.295406', 'text'),
(7, 11, 'receive!! receive!! automatic\r\n', 'read', 20, '2019-10-21 08:43:43.171682', 'text'),
(7, 11, 'automatic sending test', 'read', 21, '2019-10-22 06:16:12.692778', 'text'),
(7, 11, 'hi\r\n', 'read', 22, '2019-10-22 08:51:09.269683', 'text'),
(11, 7, 'hello', 'read', 23, '2019-10-22 08:51:44.595374', 'text'),
(7, 11, 'test\r\n', 'read', 24, '2019-10-23 05:06:15.231416', 'text'),
(7, 11, 'test 1', 'read', 25, '2019-10-23 05:06:23.417811', 'text'),
(7, 9, 'test', 'read', 26, '2019-10-27 09:16:54.224070', 'post'),
(7, 10, '<form action=\'../home/index/single_post.php\' method=\'post\'>\n            check out this post by <b></b>\n            <input type=\'hidden\' id=\'post_id\' name=\'post_id\' value=\'3\'></input>\n            <button type=\'submit\' style=\'border-radius:25px;\'>\n            </form>', 'read', 27, '2019-10-27 09:28:19.640738', 'post'),
(7, 11, '<form action=\'../home/index/single_post.php\' method=\'post\'>\n            <input type=\'hidden\' id=\'post_id\' name=\'post_id\' value=\'3\'></input>\n            <button type=\'submit\' style=\'border-radius:25px;\'>check out this post by <b></b></button>\n            </form>', 'read', 28, '2019-10-27 09:29:39.870245', 'post'),
(7, 10, '<form action=\'../home/index/single_post.php\' method=\'post\'>\n            <input type=\'hidden\' id=\'post_id\' name=\'post_id\' value=\'3\'></input>\n            <button type=\'submit\' style=\'border-radius:25px;\'>check out this post by <b>Amk</b></button>\n            </form>', 'read', 29, '2019-10-27 09:31:03.252590', 'post'),
(7, 10, '<form action=\'../home/index/single_post.php\' method=\'post\' style=\'float:left\'>\n            <input type=\'hidden\' id=\'post_id\' name=\'post_id\' value=\'3\'></input>\n            <button type=\'submit\' style=\'border-radius:25px;\'>check out this post by <b>Amk</b></button>\n            </form>', 'read', 30, '2019-10-27 09:33:49.665650', 'post'),
(7, 8, '<form action=\'../home/index/single_post.php\' method=\'post\' style=\'float:left\'>\n            <input type=\'hidden\' id=\'post_id\' name=\'post_id\' value=\'8\'></input>\n            <button type=\'submit\' style=\'border-radius:25px;\'>check out this post by <b>Amk</b></button>\n            </form>', 'read', 31, '2019-10-27 16:03:09.951880', 'post'),
(7, 11, '<form action=\'../home/index/single_post.php\' method=\'post\' style=\'float:left\'>\n            <input type=\'hidden\' id=\'post_id\' name=\'post_id\' value=\'3\'></input>\n            <button type=\'submit\' style=\'border-radius:25px;\'>check out this post by <b>Amk</b></button>\n            </form>', 'read', 32, '2019-10-31 08:48:52.261196', 'post'),
(11, 7, 'test message', 'read', 33, '2019-11-01 06:50:39.254727', 'text'),
(7, 11, '<form action=\'../home/index/single_post.php\' method=\'post\' style=\'float:left\'>\n            <input type=\'hidden\' id=\'post_id\' name=\'post_id\' value=\'3\'></input>\n            <button type=\'submit\' style=\'border-radius:25px;\'>check out this post by <b>Amk</b></button>\n            </form>', 'read', 34, '2019-11-02 07:17:19.274294', 'post'),
(7, 11, '<form action=\'../home/index/single_post.php\' method=\'post\' style=\'float:left\'>\n            <input type=\'hidden\' id=\'post_id\' name=\'post_id\' value=\'25\'></input>\n            <button type=\'submit\' style=\'border-radius:25px;\'>check out this post by <b>honey</b></button>\n            </form>', 'read', 35, '2019-11-04 11:01:58.367704', 'post'),
(7, 11, '<form action=\'../home/index/single_post.php\' method=\'post\' style=\'float:left\'>\n            <input type=\'hidden\' id=\'post_id\' name=\'post_id\' value=\'25\'></input>\n            <button type=\'submit\' style=\'border-radius:25px;\'>check out this post by <b>honey</b></button>\n            </form>', 'read', 36, '2019-11-04 12:14:18.702540', 'post'),
(11, 7, 'hi\r\n', 'read', 37, '2019-11-09 16:22:48.419506', 'text'),
(7, 11, '<form action=\'../home/index/single_post.php\' method=\'post\' style=\'float:left\'>\n            <input type=\'hidden\' id=\'post_id\' name=\'post_id\' value=\'36\'></input>\n            <button type=\'submit\' style=\'border-radius:25px;\'>check out this post by <b>Amk</b></button>\n            </form>', 'read', 38, '2019-11-14 16:11:55.959848', 'post'),
(11, 7, 'test\r\n', 'read', 39, '2019-11-14 16:15:19.615089', 'text'),
(7, 11, 'hi\r\n', 'read', 40, '2019-11-14 16:43:12.321478', 'text'),
(11, 7, 'hi', 'read', 41, '2019-11-14 16:45:12.358098', 'text'),
(7, 11, '<form action=\'../home/index/single_post.php\' method=\'post\' style=\'float:left\'>\n            <input type=\'hidden\' id=\'post_id\' name=\'post_id\' value=\'37\'></input>\n            <button type=\'submit\' style=\'border-radius:25px;\'>check out this post by <b>Amk</b></button>\n            </form>', 'read', 42, '2019-11-15 06:12:12.805388', 'post'),
(11, 7, 'hi\r\n', 'read', 43, '2019-11-15 06:34:41.127400', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `comment_notifications`
--

CREATE TABLE `comment_notifications` (
  `notification_by` int(11) NOT NULL,
  `notification_to` int(11) NOT NULL,
  `notification text` int(11) NOT NULL,
  `notification_time` int(11) NOT NULL,
  `notification_status` int(11) NOT NULL,
  `notification_comment_id` int(11) NOT NULL,
  `notification_type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friend_notification`
--

CREATE TABLE `friend_notification` (
  `notification_by` int(11) NOT NULL,
  `notification_to` int(11) NOT NULL,
  `notification_text` varchar(300) NOT NULL,
  `notification_time` int(11) NOT NULL,
  `notification_status` int(11) NOT NULL,
  `notification_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friend_request_information`
--

CREATE TABLE `friend_request_information` (
  `friend_request_sender_id` int(10) NOT NULL,
  `friend_request_sending_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `friend_request_receiver_id` int(10) NOT NULL,
  `friend_request_response` char(10) NOT NULL DEFAULT 'pending',
  `friend_request_response_time` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='response-kept/accepted/rejected';

--
-- Dumping data for table `friend_request_information`
--

INSERT INTO `friend_request_information` (`friend_request_sender_id`, `friend_request_sending_time`, `friend_request_receiver_id`, `friend_request_response`, `friend_request_response_time`) VALUES
(7, '2019-11-04 14:26:43.917288', 9, 'friends', '2019-11-04 22:54:51.000000'),
(11, '2019-11-04 17:22:20.910594', 7, 'friends', '2019-11-04 22:52:28.000000'),
(10, '2019-11-04 17:28:28.374517', 7, 'friends', '2019-11-04 23:02:15.000000'),
(7, '2019-11-15 07:23:17.451400', 8, 'pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `liked_users`
--

CREATE TABLE `liked_users` (
  `liked_by_user_id` int(10) NOT NULL,
  `liked_user_id` int(10) NOT NULL,
  `like_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_post_notification`
--

CREATE TABLE `new_post_notification` (
  `notification_by` int(11) NOT NULL,
  `notification_to` int(11) NOT NULL,
  `notification_text` varchar(300) NOT NULL,
  `notification_status` int(11) NOT NULL,
  `notification_time` int(11) NOT NULL,
  `notification_post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_user_id` int(10) NOT NULL,
  `post_media` varchar(100) DEFAULT NULL,
  `post_caption` text,
  `post_type` char(7) NOT NULL DEFAULT 'public',
  `post_likes` int(10) NOT NULL DEFAULT '0',
  `post_comments` int(10) NOT NULL DEFAULT '0',
  `post_reports` int(3) NOT NULL DEFAULT '0',
  `post_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `post_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_user_id`, `post_media`, `post_caption`, `post_type`, `post_likes`, `post_comments`, `post_reports`, `post_time`, `post_id`) VALUES
(7, '', 'sdfpojndfbjhnr/fbv klhrwelvbkbhpdiovjm;wqfpojpweog', 'public', 2, 1, 0, '2019-10-17 14:52:07.287594', 7),
(7, 'FB_IMG_1486897326961.jpg', '', 'public', 1, 1, 0, '2019-10-17 14:52:18.047590', 8),
(7, '', '', 'public', 0, 0, 0, '2019-10-17 14:55:46.923858', 10),
(7, '', 'new post', 'public', 1, 0, 0, '2019-10-20 04:56:08.206705', 11),
(7, 'IMG-20170319-WA0006.jpg', '', 'public', 1, 0, 0, '2019-10-22 07:51:52.897323', 13),
(7, '', 'test', 'public', 0, 0, 0, '2019-10-22 07:54:30.639710', 14),
(7, '', 'amk', 'public', 0, 0, 0, '2019-10-22 07:57:51.760717', 15),
(7, '', 'amk', 'public', 0, 0, 0, '2019-10-22 07:58:23.587125', 16),
(7, '', 'amk', 'public', 0, 0, 0, '2019-10-22 07:58:46.002585', 17),
(7, 'IMG-20170319-WA0020.jpg', 'this is test post', 'public', 0, 0, 0, '2019-10-22 07:59:46.556782', 18),
(7, '', '123', 'public', 0, 0, 0, '2019-10-22 08:06:41.570564', 19),
(7, 'IMG-20170319-WA0007.jpg', 'hello', 'public', 0, 0, 0, '2019-10-22 08:13:13.832283', 20),
(7, '', 'i want to post something', 'public', 3, 1, 0, '2019-10-24 19:14:21.680531', 21),
(11, '', 'this is a post from hanish', 'public', 0, 0, 0, '2019-10-31 07:35:03.522453', 22),
(12, '', 'this is a apost from rohit', 'public', 0, 0, 0, '2019-10-31 07:36:02.963358', 23),
(7, '', 'new post', 'public', 1, 2, 0, '2019-11-03 11:35:11.662436', 24),
(11, 'latest.png', 'post from id 11', 'public', 1, 2, 0, '2019-11-03 17:30:13.072534', 25),
(7, '', 'new post', 'public', 0, 2, 0, '2019-11-06 05:34:45.949883', 26),
(7, '', 'hello World!', 'public', 0, 0, 0, '2019-11-06 05:36:55.827608', 27),
(7, 'Screenshot from 2019-11-05 02-33-54.png', 'this is a private post', 'private', 0, 0, 0, '2019-11-06 06:00:48.055471', 30),
(7, 'test.png', 'post', 'private', 1, 1, 0, '2019-11-06 10:21:43.981052', 31),
(7, 'Screenshot from 2019-11-04 22-57-35.png', 'its', 'public', 1, 2, 0, '2019-11-07 08:33:35.631183', 32),
(7, 'Wp2 - Crew - Death Note.jpg', 'sample post', 'public', 0, 0, 0, '2019-11-10 06:27:15.305032', 34),
(7, 'Wanted - Death Note.jpg', 'test', 'public', 0, 0, 0, '2019-11-10 06:27:57.894938', 35),
(7, 'Wp3 - L n Light - Death Note.jpg', 'ok', 'public', 0, 0, 0, '2019-11-14 05:44:57.992274', 36),
(7, 'Wp3 - L n Light - Death Note.jpg', 'new post', 'public', 1, 0, 0, '2019-11-15 06:11:52.592575', 37);

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `post_comments_user_id` int(10) NOT NULL,
  `post_comments_post_id` int(10) NOT NULL,
  `post_comments_text` text,
  `post_comments_likes` int(10) NOT NULL DEFAULT '0',
  `post_comments_replies` int(10) NOT NULL DEFAULT '0',
  `post_comments_reports` int(3) NOT NULL DEFAULT '0',
  `post_comments_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `post_comments_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`post_comments_user_id`, `post_comments_post_id`, `post_comments_text`, `post_comments_likes`, `post_comments_replies`, `post_comments_reports`, `post_comments_time`, `post_comments_id`) VALUES
(7, 3, 'test comment 1 by amk', 1, 9, 0, '2019-10-19 19:27:03.929253', 10),
(7, 3, 'test comment', 1, 1, 0, '2019-10-20 05:25:13.725349', 11),
(7, 21, 'added comment', 0, 1, 0, '2019-10-24 19:14:45.862202', 12),
(11, 3, 'comment 3', 1, 1, 0, '2019-11-01 06:53:13.862851', 13),
(7, 8, 'test comment', 0, 0, 0, '2019-11-02 08:02:07.507685', 14),
(7, 7, 'test', 0, 1, 0, '2019-11-02 09:58:35.239598', 15),
(7, 24, 'test comment 1', 0, 1, 0, '2019-11-03 17:21:33.542803', 16),
(11, 25, 'test comment', 0, 2, 0, '2019-11-03 17:30:31.096859', 17),
(7, 24, 'test comment for notification', 0, 0, 0, '2019-11-03 17:58:18.090317', 18),
(7, 25, 'comment 2', 0, 1, 0, '2019-11-03 19:13:48.877552', 19),
(7, 31, 'test comment on private post', 1, 2, 0, '2019-11-07 05:44:56.220676', 20),
(7, 32, 'test comment', 1, 1, 0, '2019-11-09 16:19:18.735464', 21),
(7, 32, 'test comment', 0, 0, 0, '2019-11-09 16:19:20.828696', 22),
(7, 26, 'test comment 1', 0, 1, 0, '2019-11-14 16:29:48.314424', 23),
(7, 26, 'test comment 2', 0, 1, 0, '2019-11-14 16:29:55.561492', 24);

-- --------------------------------------------------------

--
-- Table structure for table `post_comments_likes`
--

CREATE TABLE `post_comments_likes` (
  `post_comments_likes_user_id` int(10) NOT NULL,
  `post_comments_likes_comment_id` int(10) NOT NULL,
  `post_comments_likes_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comments_likes`
--

INSERT INTO `post_comments_likes` (`post_comments_likes_user_id`, `post_comments_likes_comment_id`, `post_comments_likes_time`) VALUES
(7, 1, '2019-10-19 19:18:55.858352'),
(7, 2, '2019-10-19 19:19:27.633658'),
(7, 7, '2019-10-19 19:20:20.148413'),
(7, 10, '2019-10-19 19:27:20.888385'),
(7, 11, '2019-10-20 05:25:18.874601'),
(7, 13, '2019-11-02 07:25:29.277670'),
(7, 19, '2019-11-03 19:17:54.560692'),
(7, 20, '2019-11-08 07:31:18.455846'),
(7, 21, '2019-11-09 16:19:30.387386');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments_replies`
--

CREATE TABLE `post_comments_replies` (
  `post_comments_replies_user_id` int(10) NOT NULL,
  `post_comments_replies_comment_id` int(10) NOT NULL,
  `post_comments_replies_text` text,
  `post_comments_replies_images` varchar(100) DEFAULT NULL,
  `post_comments_replies_likes` int(10) NOT NULL DEFAULT '0',
  `post_comments_replies_reports` int(3) NOT NULL DEFAULT '0',
  `post_comments_replies_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `post_comments_replies_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comments_replies`
--

INSERT INTO `post_comments_replies` (`post_comments_replies_user_id`, `post_comments_replies_comment_id`, `post_comments_replies_text`, `post_comments_replies_images`, `post_comments_replies_likes`, `post_comments_replies_reports`, `post_comments_replies_time`, `post_comments_replies_id`) VALUES
(7, 10, 'test', NULL, 0, 0, '2019-11-02 08:16:27.981284', 1),
(7, 10, 'test reply', NULL, 0, 0, '2019-11-02 08:18:05.605055', 2),
(7, 10, 'form submission using ajax', NULL, 0, 0, '2019-11-02 08:22:19.131688', 3),
(7, 10, 'reload test', NULL, 0, 0, '2019-11-02 08:29:36.053480', 4),
(7, 10, 'test again', NULL, 0, 0, '2019-11-02 08:32:28.873460', 5),
(7, 15, 'test reply', NULL, 0, 0, '2019-11-02 09:58:46.090607', 8),
(7, 13, 'test reply', NULL, 0, 0, '2019-11-03 11:47:14.851840', 9),
(7, 10, 'amk', NULL, 0, 0, '2019-11-03 11:48:41.530557', 10),
(7, 10, 'amk', NULL, 0, 0, '2019-11-03 11:48:47.484386', 11),
(7, 11, 'test reply', NULL, 0, 0, '2019-11-03 12:15:05.865942', 12),
(7, 16, 'test reply 1', NULL, 0, 0, '2019-11-03 17:22:11.672692', 13),
(11, 17, 'test reply', NULL, 0, 0, '2019-11-03 17:30:42.024660', 14),
(7, 17, 'test reply 2', NULL, 0, 0, '2019-11-04 11:02:50.869857', 15),
(7, 19, 'test reply', NULL, 0, 0, '2019-11-04 11:59:28.467728', 16),
(11, 20, 'test reply on private post', NULL, 0, 0, '2019-11-07 05:45:42.628383', 17),
(7, 21, 'test reply', NULL, 0, 0, '2019-11-09 16:19:48.461362', 18),
(7, 12, 'test reply', NULL, 0, 0, '2019-11-14 16:10:40.926878', 19),
(7, 23, 'reply', NULL, 0, 0, '2019-11-14 16:31:00.710224', 20),
(7, 24, 'reply', NULL, 0, 0, '2019-11-14 16:31:08.127850', 21);

-- --------------------------------------------------------

--
-- Table structure for table `post_comments_replies_likes`
--

CREATE TABLE `post_comments_replies_likes` (
  `post_comments_replies_likes__user_id` int(10) NOT NULL,
  `post_comments_replies_likes_comment_id` int(10) NOT NULL,
  `post_comments_replies_likes_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_comments_replies_reports`
--

CREATE TABLE `post_comments_replies_reports` (
  `post_comments_replies_reports_user_id` int(10) NOT NULL,
  `post_comments_replies_reports_comment_reply_id` int(10) NOT NULL,
  `post_comments_replies_reports_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_comments_reports`
--

CREATE TABLE `post_comments_reports` (
  `post_comments_reports_user_id` int(10) NOT NULL,
  `post_comments_reports_comment_id` int(10) NOT NULL,
  `post_comments_reports_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_likes`
--

CREATE TABLE `post_likes` (
  `post_likes_user_id` int(10) NOT NULL,
  `post_likes_post_id` int(10) NOT NULL,
  `post_likes_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_likes`
--

INSERT INTO `post_likes` (`post_likes_user_id`, `post_likes_post_id`, `post_likes_time`) VALUES
(7, 7, '2019-10-18 12:52:33.411260'),
(7, 8, '2019-10-19 14:36:58.203481'),
(7, 11, '2019-10-20 04:56:12.051327'),
(7, 12, '2019-10-22 08:42:16.846203'),
(7, 21, '2019-10-24 19:14:30.799506'),
(11, 21, '2019-10-31 07:35:10.977019'),
(11, 3, '2019-10-31 07:35:21.244377'),
(11, 7, '2019-10-31 07:35:24.363248'),
(7, 13, '2019-11-01 06:47:33.917178'),
(7, 24, '2019-11-03 17:21:15.598783'),
(7, 3, '2019-11-03 18:22:48.490880'),
(7, 25, '2019-11-04 12:14:11.532770'),
(11, 31, '2019-11-07 05:45:26.247420'),
(7, 32, '2019-11-09 16:18:53.157093'),
(8, 21, '2019-11-09 16:36:00.652533'),
(7, 37, '2019-11-17 18:07:16.782500');

-- --------------------------------------------------------

--
-- Table structure for table `post_notification`
--

CREATE TABLE `post_notification` (
  `notification_by` int(11) NOT NULL,
  `notification_to` int(11) NOT NULL,
  `notification_text` varchar(300) NOT NULL,
  `notification_status` int(11) NOT NULL,
  `notification_time` int(11) NOT NULL,
  `notification_post_id` int(11) NOT NULL,
  `type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_reports`
--

CREATE TABLE `post_reports` (
  `post_reports_user_id` int(10) NOT NULL,
  `post_reports_post_id` int(10) NOT NULL,
  `post_report_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `story_user_id` int(10) NOT NULL,
  `story_image` varchar(100) DEFAULT NULL,
  `story_caption` varchar(300) DEFAULT NULL,
  `story_seen` int(5) NOT NULL DEFAULT '0',
  `story_likes` int(5) NOT NULL DEFAULT '0',
  `story_reports` int(3) NOT NULL DEFAULT '0',
  `story_replies` int(5) NOT NULL DEFAULT '0',
  `story_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `story_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_additional_information`
--

CREATE TABLE `user_additional_information` (
  `user_school` char(100) NOT NULL,
  `user_college` char(100) NOT NULL,
  `user_location` char(100) NOT NULL,
  `user_fav_place` char(100) NOT NULL,
  `user_hobby` char(200) NOT NULL,
  `user_id` int(10) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `user_first_name` char(20) NOT NULL,
  `user_middle_name` char(20) NOT NULL,
  `user_last_name` char(20) NOT NULL,
  `user_user_name` varchar(40) NOT NULL,
  `user_e_mail` varchar(100) NOT NULL,
  `user_phone_no` bigint(10) NOT NULL,
  `user_dob` date NOT NULL,
  `user_gender` char(6) NOT NULL DEFAULT 'male',
  `user_description` text NOT NULL,
  `user_profile_pic` varchar(200) NOT NULL DEFAULT 'default.jpg',
  `user_password` varchar(100) NOT NULL,
  `user_sign_up_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `user_status` char(7) NOT NULL DEFAULT 'offline',
  `user_likes` int(10) NOT NULL DEFAULT '0',
  `user_reports` int(3) NOT NULL DEFAULT '0',
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`user_first_name`, `user_middle_name`, `user_last_name`, `user_user_name`, `user_e_mail`, `user_phone_no`, `user_dob`, `user_gender`, `user_description`, `user_profile_pic`, `user_password`, `user_sign_up_time`, `user_status`, `user_likes`, `user_reports`, `user_id`) VALUES
('Amresh', 'Kumar', 'singh', 'Amk', 'kamresh485@gmail.com', 8146602796, '1998-06-15', 'male', 'Hello World!', 'IMG-20170319-WA0018.jpg', 'Am_Kreta', '2019-10-14 15:01:50.327862', 'online', 0, 0, 7),
('first_name', 'middle_nae', 'last_name', 'test', 'email@gmail.com', 1234567890, '2019-10-22', 'male', 'description', 'IMG-20170319-WA0021.jpg', '123456789', '2019-10-14 15:52:35.964090', 'offline', 0, 0, 8),
('Neha', '', 'Singh', 'nainu', 'nehasingh@ymail.com', 8289081798, '1998-05-15', 'female', 'Welcome Stalkers!!', 'IMG-20170319-WA0014.jpg', 'Amresh', '2019-10-16 05:46:08.456119', 'offline', 0, 0, 9),
('Raghav', '', 'Gandhi', 'rgv', 'cu.17bcs1024@gmail.com', 9997552584, '1998-03-15', 'male', 'student of cse-2', 'IMG-20170319-WA0067.jpg', 'raghavgandhi', '2019-10-16 06:50:00.231242', 'offline', 0, 0, 10),
('Hanish', '', 'Kumar', 'honey', 'cu.17bcs1024@gmail.com', 8146681490, '1998-04-16', 'male', 'student of cse 1 group A', 'IMG-20170319-WA0039.jpg', 'hanishkumar', '2019-10-16 06:51:21.306075', 'offline', 0, 0, 11),
('Rohit', '', 'Singh', 'rohit', 'rohitsingh@gmail.com', 9219158811, '1998-12-12', 'male', 'student of cse 1 group-b', 'IMG-20170319-WA0011.jpg', 'rohitsingh', '2019-10-16 06:54:05.829347', 'offline', 0, 0, 12),
('omi', 'hrlq', 'fds', 'fdss', 'fds@gmail.com', 7766677766, '2019-11-12', '', '', 'default.jpg', 'asdfgasdfg', '2019-11-07 08:32:29.891596', 'offline', 0, 0, 13);

-- --------------------------------------------------------

--
-- Table structure for table `user_reports`
--

CREATE TABLE `user_reports` (
  `reported_by_user_id` int(10) NOT NULL,
  `reported_user_id` int(10) NOT NULL,
  `reporting_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`post_comments_id`);

--
-- Indexes for table `post_comments_replies`
--
ALTER TABLE `post_comments_replies`
  ADD PRIMARY KEY (`post_comments_replies_id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`story_id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_user_name` (`user_user_name`,`user_e_mail`,`user_phone_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `post_comments_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `post_comments_replies`
--
ALTER TABLE `post_comments_replies`
  MODIFY `post_comments_replies_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `story_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

--
-- Dumping data for table `pma__column_info`
--

INSERT INTO `pma__column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`, `input_transformation`, `input_transformation_options`) VALUES
(1, 'supernova', '', '(db_comment)', 'Database containing all information about registered users of supernova.', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

--
-- Dumping data for table `pma__favorite`
--

INSERT INTO `pma__favorite` (`username`, `tables`) VALUES
('phpmyadmin', '[{\"db\":\"click\",\"table\":\"user_list\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('phpmyadmin', '[{\"db\":\"click\",\"table\":\"user_list\"},{\"db\":\"click\",\"table\":\"chat\"},{\"db\":\"click\",\"table\":\"friend_request_information\"},{\"db\":\"click\",\"table\":\"post\"},{\"db\":\"click\",\"table\":\"post_comments_replies\"},{\"db\":\"click\",\"table\":\"user_reports\"},{\"db\":\"click\",\"table\":\"user_additional_information\"},{\"db\":\"click\",\"table\":\"post_likes\"},{\"db\":\"click\",\"table\":\"post_comments_replies_likes\"},{\"db\":\"click\",\"table\":\"post_comments\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('phpmyadmin', 'supernova', 'user_list', '[]', '2019-09-07 11:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('debian-sys-maint', '2019-08-03 13:22:18', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}'),
('phpmyadmin', '2019-08-03 11:18:35', '{\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `supernova`
--
CREATE DATABASE IF NOT EXISTS `supernova` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `supernova`;

-- --------------------------------------------------------

--
-- Table structure for table `block_list`
--

CREATE TABLE `block_list` (
  `blocker_user_id` int(5) NOT NULL,
  `blocked_user_id` int(6) NOT NULL,
  `time_blocked` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `msg` text NOT NULL,
  `sender_id` varchar(10) NOT NULL,
  `receiver_id` varchar(10) NOT NULL,
  `msg_id` int(10) NOT NULL,
  `time_sent` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `msg_report` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`msg`, `sender_id`, `receiver_id`, `msg_id`, `time_sent`, `msg_report`) VALUES
('hi!!', '', '', 1, '2019-09-11 09:37:33.466530', 0),
('heya!!', '', '', 6, '2019-09-11 09:55:23.013863', 0),
('ksi ho?', '', '', 8, '2019-09-11 10:00:25.032029', 0),
('ksi ho?', '', '', 9, '2019-09-11 10:01:45.554680', 0),
('mai thik!! tum batao??', '', '', 10, '2019-09-11 10:02:31.959467', 0),
('mai b thik!!', '', '', 11, '2019-09-11 10:36:07.925420', 0),
('mai b thik!!', '', '', 12, '2019-09-11 10:57:11.894130', 0);

-- --------------------------------------------------------

--
-- Table structure for table `friend_list`
--

CREATE TABLE `friend_list` (
  `user_id` int(5) NOT NULL,
  `friends` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friend_request_information`
--

CREATE TABLE `friend_request_information` (
  `sender_user_id` int(5) DEFAULT NULL,
  `receiver_user_id` int(5) DEFAULT NULL,
  `response` int(1) NOT NULL DEFAULT '0',
  `time_sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `response_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_user_id` int(10) DEFAULT NULL,
  `post_image` varchar(100) DEFAULT NULL,
  `post_caption` text,
  `post_likes` int(10) NOT NULL DEFAULT '0',
  `post_id` int(11) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_reports` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_user_id`, `post_image`, `post_caption`, `post_likes`, `post_id`, `post_time`, `post_reports`) VALUES
(1, '../../database/profile_picture/f.png', '<div style=\'color:red;\'>', 0, 19, '2019-09-12 04:55:51', 0),
(1, '../../database/profile_picture/abc.png', 'test:some caption.....', 0, 20, '2019-09-12 04:57:44', 0),
(10, '../../database/profile_picture/def.png', 'test:iron man .....some caption.....', 0, 21, '2019-09-12 04:58:08', 0),
(NULL, '../../database/profile_picture/xyz.png', 'test:some caption....', 0, 22, '2019-09-12 04:58:31', 0),
(NULL, '../../database/profile_picture/g.png', 'catpion:test....caption', 0, 23, '2019-09-12 05:47:30', 0),
(NULL, '../../database/profile_picture/ccc.png', 'rohit unit testing..selenium', 0, 24, '2019-09-12 07:19:37', 0),
(NULL, '../../database/profile_picture/def.png', 'Iron Heart', 0, 25, '2019-09-12 08:39:17', 0),
(NULL, '../../database/profile_picture/d.png', 'caption:testing 1234 rohit', 0, 26, '2019-09-12 08:59:06', 0),
(NULL, '../../database/profile_picture/post.png', 'dljndsv', 0, 27, '2019-09-20 17:55:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `comment_user_id` int(10) DEFAULT NULL,
  `comment_post_id` int(20) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_likes` int(20) NOT NULL,
  `comment_id` int(20) NOT NULL,
  `comment_reports` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`comment_user_id`, `comment_post_id`, `comment_text`, `comment_likes`, `comment_id`, `comment_reports`) VALUES
(NULL, 19, 'test1:comment 1...\r\n', 0, 14, 0),
(NULL, 19, 'test 2:comment 2...\r\n', 0, 15, 0),
(NULL, 20, 'test 1:comment 1...', 0, 16, 0),
(NULL, 23, 'test:comment1', 0, 17, 0),
(NULL, 23, 'test:comment 2', 0, 18, 0),
(NULL, 23, 'test:comment 2', 0, 19, 0),
(NULL, 24, 'test:comment 1', 0, 20, 0),
(NULL, 19, 'kbkbn', 0, 21, 0),
(NULL, 26, 'comment:123', 0, 22, 0),
(NULL, 19, 'amk', 0, 23, 0),
(NULL, 19, 'amk', 0, 24, 0),
(NULL, 19, 'amk', 0, 25, 0),
(NULL, 19, 'amk', 0, 26, 0),
(NULL, 19, 'amk\r\n', 0, 27, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `story_user_id` int(5) DEFAULT NULL,
  `image` int(5) DEFAULT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `reports` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `user_name` varchar(30) DEFAULT NULL,
  `user_first_name` text,
  `user_last_name` text,
  `user_e_mail` varchar(30) DEFAULT NULL,
  `user_phone_no` bigint(11) DEFAULT NULL,
  `user_gender` text,
  `user_password` varchar(20) DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `user_profile_pic` varchar(100) DEFAULT NULL,
  `user_description` text,
  `user_current_status` int(1) NOT NULL DEFAULT '0',
  `user_id` int(10) NOT NULL,
  `user_reports` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`user_name`, `user_first_name`, `user_last_name`, `user_e_mail`, `user_phone_no`, `user_gender`, `user_password`, `user_dob`, `user_profile_pic`, `user_description`, `user_current_status`, `user_id`, `user_reports`) VALUES
('AMK', 'Amresh', 'Kumar', 'kamresh485@gmail.com', 8146602796, 'Male', 'Am_Kreta', '1998-06-15', '../../database/profile_picture/f.png', NULL, 0, 1, 0),
('TRIPLE_MAN', 'harsh', 'Mann', 'Harshmann@gmail.com', 9759537930, 'Male', 'divya', '1900-01-01', '../../database/profile_picture/abc.png', NULL, 0, 2, 0),
('RGV', 'Raghav', 'Gandhi', 'cu.17bcs1250@gmail.com', 9219158811, 'Male', 'raghav', '1998-05-12', '../../database/profile_picture/def.png', NULL, 0, 3, 0),
('Abhi', 'Abhishek', 'Singh', 'abhisheksingh@gmail.com', 9410540190, 'Male', 'abhi', '1996-07-24', '../../database/profile_picture/xyz.png', NULL, 0, 6, 0),
('Nainu', 'Neha', 'Singh', 'nehasingh@ymail.com', 8289081798, 'female', 'amresh', '1998-03-13', '../../database/profile_picture/g.png', NULL, 0, 10, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`msg_id`),
  ADD UNIQUE KEY `msg_id` (`msg_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `e-mail` (`user_e_mail`),
  ADD UNIQUE KEY `phone no.` (`user_phone_no`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `msg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `comment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
