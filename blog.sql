-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 03:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `sno` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_image` varchar(200) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`sno`, `category`, `description`, `author_name`, `date`, `category_image`, `cat_id`) VALUES
(1, 'Gaming', 'Game', '', '2021-11-16 08:15:57', '', 0),
(2, 'Bollywood', 'Bollywood', '', '2021-11-18 08:14:03', '', 0),
(3, 'Technology', 'Technology', '', '2021-11-18 08:14:37', '', 0),
(4, 'Culture', 'a', '', '2021-11-24 12:02:26', '', 0),
(5, 'Politics', 'politics', 'Rahul', '2021-11-25 03:04:20', '', 0),
(6, 'Candy Crush', '', 'Rahul', '2021-12-07 03:28:23', '', 4),
(7, 'Mobile', '', 'Rahul', '2021-12-07 03:32:59', '', 3),
(9, 'Western', '', 'Rahul', '2021-12-09 08:27:59', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `posts_table`
--

CREATE TABLE `posts_table` (
  `sno` int(11) NOT NULL,
  `post_title` varchar(300) NOT NULL,
  `post_des` text NOT NULL,
  `post_img` varchar(1000) NOT NULL,
  `post_author` int(100) NOT NULL DEFAULT 1,
  `post_like` int(11) NOT NULL,
  `post_dislike` int(11) NOT NULL,
  `post_status` int(11) NOT NULL DEFAULT 1,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `post_update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `post_category` int(11) NOT NULL DEFAULT 0,
  `post_sub_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts_table`
--

INSERT INTO `posts_table` (`sno`, `post_title`, `post_des`, `post_img`, `post_author`, `post_like`, `post_dislike`, `post_status`, `post_date`, `post_update_date`, `post_category`, `post_sub_category`) VALUES
(1, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-10-28 12:30:15', '2021-11-30 09:46:57', 0, 0),
(2, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-01 13:04:59', '2021-11-30 09:46:57', 0, 0),
(3, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-11 09:02:19', '2021-11-30 09:46:57', 0, 0),
(4, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-12 08:42:19', '2021-11-30 09:46:57', 0, 0),
(5, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-12 12:45:50', '2021-11-30 09:46:57', 0, 0),
(6, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-12 12:47:04', '2021-11-30 09:46:57', 0, 0),
(7, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-12 13:04:44', '2021-11-30 09:46:57', 0, 0),
(8, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-12 13:06:32', '2021-11-30 09:46:57', 0, 0),
(9, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-12 13:07:28', '2021-11-30 09:46:57', 0, 0),
(10, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-12 13:08:05', '2021-11-30 09:46:57', 0, 0),
(11, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-13 10:03:14', '2021-11-30 09:46:57', 0, 0),
(12, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-15 06:28:05', '2021-11-30 09:46:57', 0, 0),
(13, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-15 06:30:48', '2021-11-30 09:46:57', 0, 0),
(14, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-15 06:31:07', '2021-11-30 09:46:57', 0, 0),
(15, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-15 06:33:43', '2021-11-30 09:46:57', 0, 0),
(16, '[[Rahul 12314]]', '[ hhhhhh]', '[WhatsApp Image 2021-11-21 at 7.24.10 PM.jpeg]', 1, 0, 0, 1, '2021-11-15 06:34:40', '2021-11-30 09:46:57', 0, 0),
(17, 'bfkf', ' ksfk   dd  dff cc        ', '', 3, 0, 0, 1, '2021-11-16 06:34:10', '2021-11-30 14:15:20', 5, 0),
(19, 'vhhsdivhidvcc', 'chiadvchd  ', '', 19, 0, 0, 1, '2021-11-25 02:48:35', '2021-12-01 05:32:03', 2, 0),
(20, 'hhi', 'ngh mnm ', '', 19, 0, 0, 1, '2021-11-25 05:51:28', '2021-12-01 05:34:01', 4, 0),
(22, 'gnngn', 'ngh', '', 19, 0, 0, 1, '2021-11-28 07:25:52', '2021-12-01 04:54:39', 0, 0),
(23, 'gnngn', 'ngh', '', 19, 0, 0, 1, '2021-11-28 07:33:47', '2021-12-01 04:54:39', 0, 0),
(24, 'gnngn', 'ngh', '', 19, 0, 0, 1, '2021-11-30 09:36:49', '2021-12-01 04:54:39', 0, 0),
(25, 'gnngn', 'ngh', '', 19, 0, 0, 1, '2021-11-30 09:42:11', '2021-12-01 04:54:39', 0, 0),
(26, 'bfkf', ' ksfk   dd  dff cc        ', '', 3, 0, 0, 1, '2021-11-30 13:48:47', '2021-11-30 14:15:20', 5, 0),
(27, 's', ' s', '', 19, 0, 0, 1, '2021-12-12 16:37:29', '2021-12-12 16:37:29', 1, 0),
(28, 'Check', ' jssi', '', 19, 0, 0, 1, '2021-12-13 02:10:15', '2021-12-13 02:10:15', 3, 0),
(29, 'Check again', ' jssi', '', 19, 0, 0, 1, '2021-12-13 02:19:53', '2021-12-13 02:19:53', 3, 0),
(30, 'now check', ' schisc', '', 19, 0, 0, 1, '2021-12-13 02:23:50', '2021-12-13 02:23:50', 1, 0),
(31, 'now check', ' schisc', '', 19, 0, 0, 1, '2021-12-13 02:28:49', '2021-12-13 02:28:49', 1, 0),
(32, 'khfighih', ' hdvdsvhsdihdsuivh', '', 19, 0, 0, 1, '2021-12-13 02:33:53', '2021-12-13 02:33:53', 1, 0),
(33, 'khfighih', ' hdvdsvhsdihdsuivh', '', 19, 0, 0, 1, '2021-12-13 02:34:37', '2021-12-13 02:34:37', 1, 0),
(34, 'khfighih', ' hdvdsvhsdihdsuivh', '', 19, 0, 0, 1, '2021-12-13 02:36:53', '2021-12-13 02:36:53', 1, 0),
(35, 'khfighih', ' hdvdsvhsdihdsuivh', '', 19, 0, 0, 1, '2021-12-13 02:38:04', '2021-12-13 02:38:04', 1, 0),
(36, 'khfighih', ' hdvdsvhsdihdsuivh', '', 19, 0, 0, 1, '2021-12-13 02:38:19', '2021-12-13 02:38:19', 1, 0),
(37, 'khfighih', ' hdvdsvhsdihdsuivh', '', 19, 0, 0, 1, '2021-12-13 09:39:11', '2021-12-13 09:39:11', 1, 0),
(38, 'yfyufuf', ' vjhjg', '', 19, 0, 0, 1, '2021-12-13 10:20:48', '2021-12-13 10:20:48', 4, 0),
(39, 'fvfbfb', ' fbfbfb', '', 19, 0, 0, 1, '2021-12-13 13:04:00', '2021-12-13 13:04:00', 2, 0),
(40, 'fvfbfb', ' fbfbfb', '', 19, 0, 0, 1, '2021-12-13 13:06:38', '2021-12-13 13:06:38', 2, 0),
(41, 'fvfbfb', ' fbfbfb', '', 19, 0, 0, 1, '2021-12-13 13:07:23', '2021-12-13 13:07:23', 2, 0),
(42, 'fvfbfb', ' fbfbfb', '', 19, 0, 0, 1, '2021-12-13 13:07:58', '2021-12-13 13:07:58', 2, 0),
(43, 'fvfbfb', ' fbfbfb', '', 19, 0, 0, 1, '2021-12-13 13:08:16', '2021-12-13 13:08:16', 2, 0),
(44, 'fvfbfb', ' fbfbfb', '', 19, 0, 0, 1, '2021-12-13 13:08:52', '2021-12-13 13:08:52', 2, 0),
(45, 'sscscs', ' sccccc', '', 19, 0, 0, 1, '2021-12-14 07:42:58', '2021-12-14 07:42:58', 3, 0),
(46, 'sscscs', ' sccccc', '', 19, 0, 0, 1, '2021-12-14 07:46:06', '2021-12-14 07:46:06', 3, 0),
(47, 'sscscs', ' sccccc', '', 19, 0, 0, 1, '2021-12-14 07:46:31', '2021-12-14 07:46:31', 3, 0),
(48, 'sscscs', ' sccccc', '', 19, 0, 0, 1, '2021-12-14 07:46:48', '2021-12-14 07:46:48', 3, 0),
(49, 'sscscs', ' sccccc', '', 19, 0, 0, 1, '2021-12-14 07:47:00', '2021-12-14 07:47:00', 3, 0),
(50, 'sscscs', ' sccccc', '', 19, 0, 0, 1, '2021-12-14 07:47:15', '2021-12-14 07:47:15', 3, 0),
(51, 'sscscs', ' sccccc', '', 19, 0, 0, 1, '2021-12-14 07:47:40', '2021-12-14 07:47:40', 3, 0),
(52, 'sscscs', ' sccccc', '', 19, 0, 0, 1, '2021-12-14 07:48:00', '2021-12-14 07:48:00', 3, 0),
(53, 'sscscs', ' sccccc', '', 19, 0, 0, 1, '2021-12-14 07:48:08', '2021-12-14 07:48:08', 3, 0),
(54, 'sscscs', ' sccccc', '', 19, 0, 0, 1, '2021-12-14 08:39:17', '2021-12-14 08:39:17', 3, 0),
(55, 'sscscs', ' sccccc', '', 19, 0, 0, 1, '2021-12-14 08:40:07', '2021-12-14 08:40:07', 3, 0),
(56, 'Check Check', ' ok check', '', 19, 0, 0, 1, '2021-12-14 08:48:48', '2021-12-14 08:48:48', 2, 0),
(57, 'Check Check', ' ok check', '', 19, 0, 0, 1, '2021-12-14 08:50:32', '2021-12-14 08:50:32', 2, 0),
(58, 'Check Check', ' ok check', '', 19, 0, 0, 1, '2021-12-14 08:51:28', '2021-12-14 08:51:28', 2, 0),
(59, 'Check Check', ' ok check', '', 19, 0, 0, 1, '2021-12-14 08:52:39', '2021-12-14 08:52:39', 2, 0),
(60, 'Check Check', ' ok check', '', 19, 0, 0, 1, '2021-12-14 08:53:02', '2021-12-14 08:53:02', 2, 0),
(61, 'Check Check', ' ok check  ', '', 19, 0, 0, 1, '2021-12-14 08:53:38', '2021-12-16 09:10:16', 2, 0),
(62, 'Check Check', ' ok check', '', 19, 0, 0, 1, '2021-12-14 08:54:14', '2021-12-14 08:54:14', 2, 0),
(63, 'Check Check', ' ok check', '', 19, 0, 0, 1, '2021-12-14 08:54:37', '2021-12-14 08:54:37', 2, 0),
(64, 'Check Check', ' ok checkc', '', 19, 0, 0, 1, '2021-12-14 08:55:07', '2021-12-14 08:55:07', 2, 0),
(65, 'Check Check', ' ok checkc', '', 19, 0, 0, 1, '2021-12-14 09:02:24', '2021-12-14 09:02:24', 2, 0),
(66, 'Check Check', ' ok checkc ', '', 19, 0, 0, 1, '2021-12-14 09:03:05', '2021-12-16 09:03:58', 2, 0),
(67, 'dfjdlsvk', ' fvkhfkv ', '', 19, 0, 0, 1, '2021-12-14 12:28:51', '2021-12-16 08:43:37', 1, 0),
(68, 'check', ' cbkscha', '', 19, 0, 0, 1, '2021-12-14 12:30:14', '2021-12-14 12:30:14', 3, 0),
(69, 'dvdvdvdvdvdvd', ' saqwwdvf b bgbtr hh', '', 19, 0, 0, 1, '2021-12-17 06:45:30', '2021-12-17 06:45:30', 2, 9),
(70, 'xcshc', ' bsjkbkds', '', 19, 0, 0, 1, '2022-02-10 04:11:19', '2022-02-10 04:11:19', 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `post_tags_table`
--

CREATE TABLE `post_tags_table` (
  `sno` int(11) NOT NULL,
  `post_sno` int(11) NOT NULL,
  `tags_no` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_tags_table`
--

INSERT INTO `post_tags_table` (`sno`, `post_sno`, `tags_no`, `date`) VALUES
(1, 19, 2, '2021-12-09 19:15:14'),
(3, 19, 1, '2021-12-09 19:33:40'),
(51, 68, 2, '2021-12-14 18:00:14'),
(52, 68, 3, '2021-12-14 18:00:14'),
(53, 0, 1, '2021-12-16 14:33:58'),
(55, 61, 1, '2021-12-16 14:40:16'),
(56, 61, 2, '2021-12-16 14:40:16'),
(57, 61, 3, '2021-12-16 14:40:16'),
(58, 69, 2, '2021-12-17 12:15:30'),
(59, 69, 3, '2021-12-17 12:15:30'),
(60, 70, 2, '2022-02-10 09:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `signup_table`
--

CREATE TABLE `signup_table` (
  `sno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phno` int(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_type` int(11) NOT NULL DEFAULT 1,
  `user_verified` int(11) NOT NULL DEFAULT 1,
  `gender` int(11) NOT NULL DEFAULT 0,
  `user_pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_table`
--

INSERT INTO `signup_table` (`sno`, `name`, `email`, `phno`, `password`, `date`, `update_date`, `user_type`, `user_verified`, `gender`, `user_pic`) VALUES
(5, '', '', 0, '', '2021-10-25 18:05:05', '2021-10-25 18:05:05', 1, 1, 0, ''),
(2, 'Aman', 'aman@mail.com', 2147483647, 'Rahul', '2021-10-25 14:37:31', '2021-10-25 14:37:31', 1, 1, 0, ''),
(6, 'gds', 'bdih@b', 54, ' dhb', '2021-10-27 18:00:42', '2021-10-27 18:00:42', 1, 1, 1, ''),
(3, 'Dj', 'Dj@mail.com', 2147483647, 'Ta', '2021-10-25 17:59:37', '2021-10-25 17:59:37', 1, 1, 0, ''),
(8, ' ', 'ff@4', 4, '  ', '2021-10-28 08:41:49', '2021-10-28 08:41:49', 1, 1, 1, ''),
(14, 'hhuu', 'fff@kjd', 1258, 'fffffff', '2021-10-28 09:09:33', '2021-10-28 09:09:33', 1, 1, 0, ''),
(16, 'hhuubhh', 'fff@kjdj', 12582, 'bfuy', '2021-10-28 09:17:32', '2021-10-28 09:17:32', 1, 1, 0, ''),
(17, 'Ayush Kumar', 'fhf@hh', 2147483647, ' vjh', '2021-10-28 09:17:54', '2021-10-28 09:17:54', 1, 1, 1, ''),
(18, '  ', 'h@h', 1, ' ', '2021-10-28 09:18:27', '2021-10-28 09:18:27', 1, 1, 1, ''),
(19, 'Rahul', 'r@o', 215, '1', '2021-11-12 12:11:40', '2021-11-12 12:11:40', 1, 1, 0, ''),
(1, 'Abhi', 'rahhkn88@gmail.com', 12, 's', '2021-10-21 14:55:56', '2021-10-21 14:55:56', 1, 1, 0, ''),
(20, 'Rajat', 'rajat@mail.com', 921, '12', '2021-11-13 12:42:30', '2021-11-13 12:42:30', 1, 1, 1, ''),
(7, 'Sachin', 'sachin@mail.com', 2147483647, '1', '2021-10-28 08:38:24', '2021-10-28 08:38:24', 1, 1, 0, ''),
(22, 'Vivek', 'vk@o', 6445451, '1', '2022-02-08 20:04:45', '2022-02-08 20:04:45', 1, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sno` int(11) NOT NULL,
  `sub_category_name` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post_author` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sno`, `sub_category_name`, `category_name`, `post_author`, `date`) VALUES
(3, '', '', 'Rahul', '2021-12-03 09:50:29'),
(4, '', '', 'Rahul', '2021-12-03 09:50:34'),
(5, 'Candy Crush', 'Technology', 'Rahul', '2021-12-03 09:50:54'),
(6, 'Offers', 'Gaming', 'Rahul', '2021-12-03 09:52:19'),
(7, 'Movies', 'Bollywood', 'Rahul', '2021-12-03 09:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `tags_table`
--

CREATE TABLE `tags_table` (
  `sno` int(11) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags_table`
--

INSERT INTO `tags_table` (`sno`, `tags`, `author`, `date`, `update_date`) VALUES
(1, 'mod', 'Rahul', '0000-00-00 00:00:00', '2021-12-09 13:20:49'),
(2, 'games', 'Rahul', '2021-12-09 13:30:06', '2021-12-09 13:30:06'),
(3, 'cashback', 'Rahul', '2021-12-12 16:16:26', '2021-12-12 16:16:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `sno` (`sno`);

--
-- Indexes for table `posts_table`
--
ALTER TABLE `posts_table`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `post_tags_table`
--
ALTER TABLE `post_tags_table`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `signup_table`
--
ALTER TABLE `signup_table`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tags_table`
--
ALTER TABLE `tags_table`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts_table`
--
ALTER TABLE `posts_table`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `post_tags_table`
--
ALTER TABLE `post_tags_table`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `signup_table`
--
ALTER TABLE `signup_table`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tags_table`
--
ALTER TABLE `tags_table`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
