-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 01, 2023 at 10:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nomadplanet`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `id` int(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `action` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `user_id`, `user_name`, `icon`, `action`, `link`, `date`) VALUES
(63, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/power.mn/admin/menu_edit/7', '2020-02-04 00:41:32'),
(64, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/power.mn/admin/menu_edit/8', '2020-02-04 00:42:54'),
(65, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/power.mn/admin/menu_edit/9', '2020-02-04 00:43:17'),
(66, 1, 'janibekm', 'fa fa-plus', 'Мэдээний ангилал нэмэгдлээ', 'http://localhost/power.mn/admin/menu_edit/12', '2020-02-04 00:43:31'),
(67, 1, 'janibekm', 'fa fa-plus', 'Мэдээний ангилал нэмэгдлээ', 'http://localhost/power.mn/admin/menu_edit/13', '2020-02-04 00:43:55'),
(68, 1, 'janibekm', 'fa fa-plus', 'Мэдээний ангилал нэмэгдлээ', 'http://localhost/power.mn/admin/menu_edit/14', '2020-02-04 01:10:30'),
(69, 1, 'janibekm', 'fa fa-trash', 'Мэдээний ангилал устгагдлаа: #0000ff', '#', '2020-02-04 01:10:54'),
(70, 1, 'janibekm', 'fa fa-plus', 'Мэдээний ангилал нэмэгдлээ', 'http://localhost/power.mn/admin/menu_edit/15', '2020-02-04 01:11:12'),
(71, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/power.mn/admin/menu_edit/15', '2020-02-04 01:11:23'),
(72, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/power.mn/admin/menu_edit/15', '2020-02-04 01:11:32'),
(73, 1, 'janibekm', 'fa fa-trash', 'Мэдээний ангилал устгагдлаа: test1', '#', '2020-02-04 01:11:41'),
(74, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/power.mn/admin/menu_edit/7', '2020-02-04 01:12:05'),
(75, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/power.mn/admin/menu_edit/12', '2020-02-04 01:12:17'),
(76, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/power.mn/admin/menu_edit/13', '2020-02-04 01:12:27'),
(77, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/power.mn/admin/menu_edit/8', '2020-02-04 01:12:41'),
(78, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/power.mn/admin/menu_edit/9', '2020-02-04 01:12:59'),
(79, 1, 'janibekm', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://localhost/power.mn/admin/post_edit/16', '2020-02-07 01:43:12'),
(80, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost/power.mn/admin/post_edit/', '2020-02-07 01:43:42'),
(81, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost/power.mn/admin/post_edit/', '2020-02-07 01:46:30'),
(82, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost/power.mn/admin/post_edit/', '2020-02-07 01:46:43'),
(83, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost/power.mn/admin/post_edit/', '2020-02-07 01:50:36'),
(84, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost/power.mn/admin/post_edit/', '2020-02-07 01:52:35'),
(85, 1, 'janibekm', 'fa fa-trash', 'Мэдээ устгагдлаа: dddd', '#', '2020-02-07 01:52:41'),
(86, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost/power.mn/admin/post_edit/', '2020-02-07 02:38:45'),
(87, 1, 'janibekm', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://localhost/power.mn/admin/post_edit/17', '2020-02-07 02:39:16'),
(88, 1, 'janibekm', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://localhost/power.mn/admin/post_edit/18', '2020-02-07 02:39:40'),
(89, 1, 'janibekm', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://localhost/power.mn/admin/post_edit/19', '2020-02-07 02:40:08'),
(90, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost/power.mn/admin/post_edit/', '2020-02-07 02:44:20'),
(91, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost/power.mn/admin/post_edit/', '2020-02-07 02:46:10'),
(92, 1, 'janibekm', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://localhost/power.mn/admin/post_edit/20', '2020-02-08 23:53:22'),
(93, 1, 'janibekm', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://localhost/power.mn/admin/post_edit/21', '2020-02-08 23:53:46'),
(94, 1, 'janibekm', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://localhost/power.mn/admin/post_edit/22', '2020-02-08 23:54:17'),
(95, 1, 'janibekm', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://localhost/power.mn/admin/post_edit/23', '2020-02-08 23:54:42'),
(96, 1, 'janibekm', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://localhost/power.mn/admin/post_edit/24', '2020-02-08 23:55:02'),
(97, 1, 'janibekm', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://localhost/power.mn/admin/post_edit/25', '2020-02-08 23:55:26'),
(98, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost/power.mn/admin/post_edit/', '2020-02-09 01:03:47'),
(99, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-14 00:28:27'),
(100, 1, 'janibekm', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/46', '2020-02-14 00:36:41'),
(101, 1, 'janibekm', 'fa fa-trash', 'Мэдээ устгагдлаа: ', '#', '2020-02-14 00:37:29'),
(102, 1, 'janibekm', 'fa fa-trash', 'Мэдээ устгагдлаа: 321312321', '#', '2020-02-14 00:37:38'),
(103, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-14 00:51:36'),
(104, 1, 'janibekm', 'fa fa-plus', 'Сурталчилгаа нэмэгдлээ', 'http://www.power.mn/admin/post_edit/3', '2020-02-14 00:54:42'),
(105, 1, 'janibekm', 'fa fa-trash', 'Сурталчилгаа устгагдлаа', '#', '2020-02-14 00:54:48'),
(106, 1, 'janibekm', 'fa fa-plus', 'Сурталчилгаа засагдлаа', 'http://www.power.mn/admin/banner_edit/', '2020-02-14 01:09:12'),
(107, 1, 'janibekm', 'fa fa-plus', 'Сурталчилгаа засагдлаа', 'http://www.power.mn/admin/banner_edit/', '2020-02-14 01:09:25'),
(108, 1, 'janibekm', 'fa fa-plus', 'Сурталчилгаа засагдлаа', 'http://www.power.mn/admin/banner_edit/', '2020-02-14 01:17:50'),
(109, 1, 'janibekm', 'fa fa-plus', 'Сурталчилгаа засагдлаа', 'http://www.power.mn/admin/banner_edit/', '2020-02-14 01:18:10'),
(110, 1, 'janibekm', 'fa fa-plus', 'Сурталчилгаа засагдлаа', 'http://www.power.mn/admin/banner_edit/', '2020-02-14 01:20:52'),
(111, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-14 18:13:46'),
(112, 3, 'enji', 'fa fa-trash', 'Мэдээ устгагдлаа: yariltslaga', '#', '2020-02-14 18:17:31'),
(113, 3, 'enji', 'fa fa-trash', 'Мэдээ устгагдлаа: toim 1', '#', '2020-02-14 18:17:45'),
(114, 3, 'enji', 'fa fa-trash', 'Мэдээ устгагдлаа: toim 123213', '#', '2020-02-14 18:18:02'),
(115, 3, 'enji', 'fa fa-trash', 'Мэдээ устгагдлаа: video medee 1', '#', '2020-02-14 18:18:12'),
(116, 3, 'enji', 'fa fa-trash', 'Мэдээ устгагдлаа: video medee 2', '#', '2020-02-14 18:18:20'),
(117, 3, 'enji', 'fa fa-trash', 'Мэдээ устгагдлаа: xaluun sedeve', '#', '2020-02-14 18:18:33'),
(118, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-14 18:22:13'),
(119, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-14 18:23:45'),
(120, 3, 'enji', 'fa fa-trash', 'Үг засагдлаа', 'http://www.power.mn/admin/words', '2020-02-17 13:52:20'),
(121, 3, 'enji', 'fa fa-trash', 'Үг засагдлаа', 'http://www.power.mn/admin/words', '2020-02-17 13:52:48'),
(122, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-17 14:07:17'),
(123, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-17 14:08:50'),
(124, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-17 14:09:55'),
(125, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-17 14:11:10'),
(126, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-17 14:11:15'),
(127, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/45', '2020-02-27 11:35:24'),
(128, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-27 11:36:18'),
(129, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-27 11:37:10'),
(130, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-27 11:38:15'),
(131, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-02-27 11:40:31'),
(132, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/46', '2020-02-27 11:51:45'),
(133, 3, 'enji', 'fa fa-plus', 'Сурталчилгаа нэмэгдлээ', 'http://www.power.mn/admin/post_edit/4', '2020-03-04 17:17:47'),
(134, 3, 'enji', 'fa fa-trash', 'Сурталчилгаа устгагдлаа', '#', '2020-03-04 17:17:55'),
(135, 3, 'enji', 'fa fa-plus', 'Сурталчилгаа засагдлаа', 'http://www.power.mn/admin/banner_edit/', '2020-03-04 17:22:51'),
(136, 3, 'enji', 'fa fa-trash', 'Үг засагдлаа', 'http://www.power.mn/admin/words', '2020-03-04 17:34:00'),
(137, 3, 'enji', 'fa fa-trash', 'Үг засагдлаа', 'http://www.power.mn/admin/words', '2020-03-04 17:34:35'),
(138, 3, 'enji', 'fa fa-trash', 'Үг засагдлаа', 'http://www.power.mn/admin/words', '2020-03-04 17:38:05'),
(139, 3, 'enji', 'fa fa-trash', 'Үг засагдлаа', 'http://www.power.mn/admin/words', '2020-03-04 17:38:30'),
(140, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/47', '2020-03-05 11:05:19'),
(141, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-05 11:06:03'),
(142, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/48', '2020-03-05 11:12:39'),
(143, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-05 11:12:56'),
(144, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-05 11:13:13'),
(145, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-05 11:13:26'),
(146, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/49', '2020-03-05 11:18:18'),
(147, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-05 11:18:48'),
(148, 3, 'enji', 'fa fa-plus', 'Сурталчилгаа нэмэгдлээ', 'http://www.power.mn/admin/post_edit/5', '2020-03-05 11:31:21'),
(149, 3, 'enji', 'fa fa-trash', 'Сурталчилгаа устгагдлаа', '#', '2020-03-05 11:52:52'),
(150, 3, 'enji', 'fa fa-trash', 'Сурталчилгаа устгагдлаа', '#', '2020-03-05 11:52:57'),
(151, 3, 'enji', 'fa fa-plus', 'Сурталчилгаа нэмэгдлээ', 'http://www.power.mn/admin/post_edit/6', '2020-03-05 11:53:12'),
(152, 3, 'enji', 'fa fa-plus', 'Сурталчилгаа засагдлаа', 'http://www.power.mn/admin/banner_edit/', '2020-03-05 11:53:43'),
(153, 3, 'enji', 'fa fa-plus', 'Сурталчилгаа засагдлаа', 'http://www.power.mn/admin/banner_edit/', '2020-03-05 11:54:01'),
(154, 4, 'sarangoo', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/50', '2020-03-09 13:48:25'),
(155, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/51', '2020-03-10 17:45:18'),
(156, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-10 17:46:20'),
(157, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/52', '2020-03-10 17:53:02'),
(158, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-10 17:53:47'),
(159, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-11 12:31:49'),
(160, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-11 12:34:46'),
(161, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-11 12:36:32'),
(162, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-11 12:38:46'),
(163, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-11 12:39:16'),
(164, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/53', '2020-03-11 12:43:37'),
(165, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/54', '2020-03-11 12:48:50'),
(166, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-11 12:50:08'),
(167, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-11 12:50:30'),
(168, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-11 12:53:18'),
(169, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-11 12:53:39'),
(170, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/55', '2020-03-11 17:05:56'),
(171, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-11 17:10:03'),
(172, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/56', '2020-03-12 13:31:03'),
(173, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/57', '2020-03-12 18:24:18'),
(174, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/58', '2020-03-16 14:25:54'),
(175, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-16 14:26:13'),
(176, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/59', '2020-03-16 14:28:31'),
(177, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-03-16 14:28:49'),
(178, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/60', '2020-03-16 14:34:57'),
(179, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/61', '2020-03-20 18:02:37'),
(180, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/62', '2020-03-25 18:28:15'),
(181, 4, 'sarangoo', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/63', '2020-04-02 11:38:27'),
(182, 4, 'sarangoo', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/64', '2020-04-08 11:24:05'),
(183, 4, 'sarangoo', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-04-08 11:29:17'),
(184, 4, 'sarangoo', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/65', '2020-04-08 12:37:26'),
(185, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/66', '2020-04-14 13:08:31'),
(186, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-04-14 13:09:37'),
(187, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-04-14 13:10:33'),
(188, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-04-14 13:11:24'),
(189, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/67', '2020-04-14 13:24:19'),
(190, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/68', '2020-04-15 13:37:44'),
(191, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-04-15 13:38:39'),
(192, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-04-15 13:38:54'),
(193, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-04-15 13:39:12'),
(194, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-04-15 13:39:24'),
(195, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-04-15 13:39:36'),
(196, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-04-15 13:40:42'),
(197, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-04-15 13:41:09'),
(198, 4, 'sarangoo', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/69', '2020-04-17 12:17:16'),
(199, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/70', '2020-04-21 13:13:46'),
(200, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-04-21 13:14:42'),
(201, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/71', '2020-04-24 16:16:11'),
(202, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/72', '2020-04-27 18:31:03'),
(203, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-04-27 18:32:22'),
(204, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/73', '2020-04-27 18:34:13'),
(205, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/74', '2020-05-01 18:24:47'),
(206, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-05-01 18:25:30'),
(207, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-05-01 18:26:16'),
(208, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/75', '2020-05-01 18:32:25'),
(209, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-05-01 18:32:44'),
(210, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-05-01 18:33:29'),
(211, 3, 'enji', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://www.power.mn/admin/post_edit/', '2020-05-01 18:33:56'),
(212, 3, 'enji', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://www.power.mn/admin/post_edit/76', '2020-05-01 18:39:37'),
(213, 1, 'janibekm', 'fa fa-trash', 'Үг засагдлаа', 'http://localhost:8080/yam.mn/admin/words', '2022-09-07 06:08:28'),
(214, 1, 'janibekm', 'fa fa-trash', 'Үг засагдлаа', 'http://localhost:8080/yam.mn/admin/words', '2022-09-07 06:09:21'),
(215, 1, 'janibekm', 'fa fa-trash', 'Үг засагдлаа', 'http://localhost:8080/yam.mn/admin/words', '2022-09-07 06:09:43'),
(216, 1, 'janibekm', 'fa fa-trash', 'Үг засагдлаа', 'http://localhost:8080/yam.mn/admin/words', '2022-09-07 06:28:39'),
(217, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 06:41:57'),
(218, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 09:11:36'),
(219, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 09:12:16'),
(220, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 09:12:41'),
(221, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 09:13:47'),
(222, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 09:13:55'),
(223, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 09:25:24'),
(224, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 09:26:09'),
(225, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 09:26:30'),
(226, 1, 'janibekm', 'fa fa-trash', 'Үг засагдлаа', 'http://localhost:8080/yam.mn/admin/words', '2022-09-07 09:29:18'),
(227, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost:8080/yam.mn/admin/menu_edit/13', '2022-09-07 09:31:15'),
(228, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost:8080/yam.mn/admin/menu_edit/8', '2022-09-07 09:31:33'),
(229, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost:8080/yam.mn/admin/menu_edit/9', '2022-09-07 09:31:49'),
(230, 1, 'janibekm', 'fa fa-plus', 'Мэдээний ангилал нэмэгдлээ', 'http://localhost:8080/yam.mn/admin/menu_edit/14', '2022-09-07 09:32:16'),
(231, 1, 'janibekm', 'fa fa-plus', 'Мэдээний ангилал нэмэгдлээ', 'http://localhost:8080/yam.mn/admin/menu_edit/15', '2022-09-07 09:32:26'),
(232, 1, 'janibekm', 'fa fa-trash', 'Үг засагдлаа', 'http://localhost:8080/yam.mn/admin/words', '2022-09-07 09:33:50'),
(233, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 09:59:33'),
(234, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:00:12'),
(235, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:04:21'),
(236, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:06:27'),
(237, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:07:08'),
(238, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:10:51'),
(239, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:27:55'),
(240, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:28:39'),
(241, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:29:07'),
(242, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:29:30'),
(243, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:29:59'),
(244, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:30:38'),
(245, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:31:35'),
(246, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:32:03'),
(247, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:32:32'),
(248, 1, 'janibekm', 'fa fa-trash', 'Үг засагдлаа', 'http://localhost:8080/yam.mn/admin/words', '2022-09-07 10:35:35'),
(249, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:49:04'),
(250, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-07 10:49:34'),
(251, 1, 'janibekm', 'fa fa-plus', 'Мэдээ нэмэгдлээ', 'http://localhost:8080/yam.mn/admin/post_edit/77', '2022-09-08 04:44:21'),
(252, 1, 'janibekm', 'fa fa-trash', 'Үг засагдлаа', 'http://localhost:8080/yam.mn/admin/words', '2022-09-08 04:50:18'),
(253, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-08 04:53:14'),
(254, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-08 04:53:29'),
(255, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-08 04:53:39'),
(256, 1, 'janibekm', 'fa fa-plus', 'Мэдээ засагдлаа', 'http://localhost:8080/yam.mn/admin/post_edit/', '2022-09-08 04:53:59'),
(257, 1, 'janibekm', 'fa fa-plus', 'Сурталчилгаа засагдлаа', 'http://localhost:8080/yam.mn/admin/banner_edit/', '2022-09-08 05:28:09'),
(258, 1, 'janibekm', 'fa fa-plus', 'Сурталчилгаа засагдлаа', 'http://localhost:8080/yam.mn/admin/banner_edit/', '2022-09-08 05:28:36'),
(259, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/nomad-planet.com/admin/lang_edit/1', '2023-02-01 04:06:08'),
(260, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/nomad-planet.com/admin/lang_edit/2', '2023-02-01 04:06:55'),
(261, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/nomad-planet.com/admin/lang_edit/2', '2023-02-01 04:07:55'),
(262, 1, 'janibekm', 'fa fa-pencil', 'Мэдээний ангилал засагдлаа', 'http://localhost/nomad-planet.com/admin/menu_edit/7', '2023-02-01 08:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(255) NOT NULL,
  `order` int(255) NOT NULL,
  `content` longtext NOT NULL,
  `created` int(12) NOT NULL,
  `updated` int(12) NOT NULL,
  `visible` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `order`, `content`, `created`, `updated`, `visible`) VALUES
(1, 0, '<img src=\"http://localhost:8080/yam.mn/img/banners//powermn_1662607700.png\" style=\"width: 1126px;\">', 1581612775, 1662607716, 1),
(6, 1, '<p><br></p><img src=\"http://localhost:8080/yam.mn/img/banners//powermn_1662607685.gif\" style=\"width: 560px;\"><p><br></p><p><br></p>', 1583380392, 1662607689, 1);

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(428, 1454565608, '203.194.114.237', 'BDNYLI');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file`, `date`) VALUES
(1, 'http://xainar/tour/uploads/files/ubtour_1445942182Баруун_4-н_зам-145629-100648758.jpeg', '2015-10-27 18:36:22');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `id` int(255) NOT NULL,
  `subid` int(255) NOT NULL,
  `order` int(255) NOT NULL,
  `title_0` varchar(255) NOT NULL,
  `title_1` varchar(255) NOT NULL,
  `title_2` varchar(255) DEFAULT NULL,
  `title_3` varchar(255) DEFAULT NULL,
  `title_4` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `pic` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `created` int(255) NOT NULL,
  `updated` int(11) NOT NULL,
  `visible` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`id`, `subid`, `order`, `title_0`, `title_1`, `title_2`, `title_3`, `title_4`, `description`, `pic`, `url`, `target`, `created`, `updated`, `visible`) VALUES
(1, 0, 0, 'English', 'Englishe', NULL, NULL, NULL, 'eng', 'img/lang/mn.png', '', '', 1461836385, 1675220768, 1),
(2, 0, 1, 'French', 'Fransuz', NULL, NULL, NULL, 'fr', 'img/lang/eng.png', '', '', 1461836385, 1675220875, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `subid` int(255) NOT NULL,
  `order` int(255) NOT NULL,
  `title_0` varchar(255) NOT NULL,
  `description_0` text NOT NULL,
  `pic` varchar(255) NOT NULL,
  `created` int(255) UNSIGNED NOT NULL,
  `updated` int(11) NOT NULL,
  `visible` int(1) NOT NULL,
  `color` text DEFAULT NULL,
  `title_1` varchar(255) NOT NULL,
  `description_1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `subid`, `order`, `title_0`, `description_0`, `pic`, `created`, `updated`, `visible`, `color`, `title_1`, `description_1`) VALUES
(7, 0, 0, 'Home', '', '', 1445964999, 1675237355, 1, NULL, 'Homee', ''),
(8, 0, 2, 'Нийгэм', '', '', 1445965062, 1662535893, 1, '#1c0af5', '', ''),
(9, 0, 3, 'Эдийн засаг', '', '', 1445965175, 1662535909, 1, '#4d87ce', '', ''),
(12, 0, 5, 'Видео', '', '', 1580748211, 1580749937, 1, '#3ac837', '', ''),
(13, 0, 1, 'Улс төр', '', '', 1580748235, 1662535875, 1, '#ec3737', '', ''),
(14, 0, 4, 'Яамдын сонин', '', '', 1662535936, 1662535936, 1, '#00bd5b', '', ''),
(15, 0, 6, 'Бусад', '', '', 1662535946, 1662535946, 1, '#000000', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu1`
--

CREATE TABLE `menu1` (
  `id` int(255) NOT NULL,
  `subid` int(255) NOT NULL,
  `order` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `pic` varchar(255) NOT NULL,
  `created` int(255) UNSIGNED NOT NULL,
  `updated` int(11) NOT NULL,
  `visible` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu1`
--

INSERT INTO `menu1` (`id`, `subid`, `order`, `title`, `description`, `pic`, `created`, `updated`, `visible`) VALUES
(12, 0, 0, 'dd', 'dd', '', 1461565159, 1461565159, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `menu` int(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `pics` varchar(255) DEFAULT NULL,
  `bigpic` varchar(255) DEFAULT NULL,
  `ontsloh` varchar(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `created` int(50) NOT NULL,
  `updated` int(50) NOT NULL,
  `visited` int(255) NOT NULL DEFAULT 0,
  `visible` int(1) NOT NULL,
  `order` int(1) NOT NULL,
  `mostread` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `menu`, `pic`, `pics`, `bigpic`, `ontsloh`, `title`, `description`, `content`, `created`, `updated`, `visited`, `visible`, `order`, `mostread`) VALUES
(28, 13, 'img/news/invest_1581402605.png', '', 'img/news/invest_1581402605.jpg', '0', 'Улсын онцгой комисс цагаан сарыг тэмдэглэхгүй байх нь зүйтэй гэж үзлээ', '<p>Улсын онцгой комисс өчигдөр хуралдлаа. </p>', '<p><span font-size:=\"\" helvetica=\"\" style=\"color: rgb(68, 68, 68); font-family: Arial, \" text-align:=\"\">Улсын онцгой комисс хуралдан Шинэ коронавирусын халдвараас урьдчилан сэргийлэх зорилгоор Цагаан сарын баярыг өргөн хүрээнд тэмдэглэхгүй байх нь зүйтэй гэсэн саналаа Монгол Улсын Ерөнхийлөгчид уламжлахаар болов. Онцгой комисс мөн өвчнөөс урьдчилан сэргийлэх, бэлэн байдлыг хангах, нэн хэрэгцээтэй эм, эмнэлгийн хэрэгсэл, хувийн хамгаалах хэрэгсэл, тоног төхөөрөмж, ариутгал, халдваргүйтгэлийн бодисын нөөц бүрдүүлэх зэрэгт шаардагдах хөрөнгийг 2020 оны батлагдсан төсвөөсөө гаргахыг Төсвийн ерөнхийлөн захирагч нарт даалгав.&nbsp;</span></p>\r\n\r\n<p><span font-size:=\"\" helvetica=\"\" style=\"color: rgb(68, 68, 68); font-family: Arial, \" text-align:=\"\">Өвчний халдвар илэрсэн тохиолдолд эхний ээлжинд Халдварт өвчин судлалын үндэсний төв эмнэлгийг суллаж 200 ор гаргах, шаардлагатай бол Цэргийн төв эмнэлэг, хувийн хэвшлийн &ldquo;Асралт мед&rdquo; эмнэлэг, ОБЕГ-ын Жаргалант дахь сувиллын газрын барилгыг ашиглахаар болов. Замын-Үүд дэх 100 ортой болон Сайншанд сумын 50 ортой эмнэлгийг түр тусгаарлах байр болгохоор шийдвэрлэлээ. 2020 оны 03 дугаар сарын 02-ныг хүртэл Гашуунсухайт, Шивээхүрэн, Бичигт, Булган боомтоор нүүрсний экспорт хийхийг хориглов. ХӨСҮТ-ийн гаргасан стандартын дагуу &ldquo;Бөртэ&rdquo; үйлдвэр, Батлан хамгаалах яамны 288 дугаар анги, Шүүхийн шийдвэр гүйцэтгэх ерөнхий газар, Цагдаагийн ерөнхий газрын оёдлын үйлдвэрт амны хаалт үйлдвэрлэж нийлүүлэхийг холбогдох удирдлагуудад нь үүрэг болголоо. Мөн бүх шатны Засаг дарга нарыг тухайн орон нутагтаа амны хаалт үйлдвэрлэх чиглэлээр зохион байгуулалтын арга хэмжээ авахыг даалгав.&nbsp;</span></p>\r\n\r\n<p><span font-size:=\"\" helvetica=\"\" style=\"color: rgb(68, 68, 68); font-family: Arial, \" text-align:=\"\">Улсын онцгой комиссын даргын 2020 оны 02 дугаар сарын 05-ны өдрийн тушаалын дагуу Онцгой байдлын ерөнхий газрын Тэргүүн дэд дарга, бригадын генерал Г.Ариунбуянгаар алуулсан Шуурхай бүлэг Замын-Үүд, Шивээхүрэн, Гашуунсухайт, Буян-Ухаа боомтод ажилласан байна. &nbsp;Уртасгасан цагаар ажиллаж байгаа хил, гааль, мэргэжлийн хяналт зэрэг байгууллагын ажилтнуудын нөхөн олговор, урамшуулал, эм, эмнэлгийн хэрэгсэл, багаж, тоног төхөөрөмж, хувийн хамгаалах хэрэгсэл, ариутгалын бодис зэргийн нөөцөд анхаарах шаардлагатай гэж Шуурхай бүлэг үзжээ. Эрүүл мэндийн яамны хувьд Засгийн газрын шийдсэн 4.2 тэрбум төгрөгөөр эм тариа, хамгаалах хэрэгсэл, ариутгалын бодис, тоног төхөөрөмж зэрэг шаардлагатай зүйлсээ&nbsp; аваад байна. Мөн 3000 оншолуурын эхний 500-г маргааш хүлээн авах юм гэж&nbsp;</span><span font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; font-weight: 700; color: rgb(68, 68, 68); font-family: Arial, \" text-align:=\"\">Засгийн газрын Хэвлэл мэдээлэл, олон нийттэй харилцах хэлтсээс мэдээллээ.</span></p>\r\n', 1581402605, 1582774578, 81, 1, 1, 0),
(29, 7, 'img/news/invest_1581404143.png', '', 'img/news/invest_1581404143.jpeg', '0', 'Дэлхийн 25 улсад шинэ коронавирусийн 4,550 тохиодол бүртгэгджээ', '<p>Эрүүл мэндийн яамнаас шинэ коронавирусийн нөхцөл байдлын талаар мэдээлэл хийлээ. </p>', '<p>Эрүүл мэндийн яамнаас шинэ коронавирусийн талаар ээлжит мэдээлэл хийв.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/photo_2020-02-10_13-27-08.jpg\" style=\"width: 525px; height: 350px;\" /></p>\r\n\r\n<p><strong>ОНХТШУХ-ийн дарга Д.Нарангэрэл</strong><br font-size:=\"\" roboto=\"\" />\r\n<span font-size:=\"\" roboto=\"\">&quot;Өмнөговь аймгийн Гашуун сухайттай хиллэдэг Халиун гэдэг газар шинэ коронавирусийн хоёр сэжигтэй тохиолдол оношлогдсон. Тиймээс өнгөрөгч амралтын өдрүүдэд холбогдох албаныхан болон эрүүл мэндийн байгууллагууд тус газарт бэлэн байдалд ажиллаа. Гэхдээ Халиун нь манай улсын хилээс 120 км-ын зайд оршдог. Мөн дэлхийн нэлээд хэдэн оронд буюу Герман, Сингапур гэх мэт оронд шинж тэмдэггүй буюу балархай хэлбэрээр хүнд халдсан тохиолдлууд илэрсэн. Тиймээс өвчлөл гарсан бүс нутагт онцын ажилгүй бол зорчихгүй байхыг нийт иргэддээ анхааруулж байна. Хэрвээ зорчсон тохиолдолд 14 хоногийн хугацаанд өөрийгөө тусгаарлаж байхыг хүсье.</span><br font-size:=\"\" roboto=\"\" />\r\n<span font-size:=\"\" roboto=\"\">&nbsp;Мөн Эрээн хот бас онц байдалд шилжин ажиллаж байгаа энэ үед биднээс ч гэсэн&nbsp;бэлэн байдалд ажиллахыг илүү шаардаж байна&quot; гэв.&nbsp;</span></p>\r\n\r\n<p><strong font-size:=\"\" roboto=\"\">ДЭМБ-ын ажилтан&nbsp;О.Ариунтуяа&nbsp;</strong><span font-size:=\"\" roboto=\"\">&quot;Хоёрдугаар сарын 10-ны&nbsp;08:00 цагийн байдлаар дэлхийн&nbsp;25 улсад шинэ коронавирусийн 4,550 тохиодол бүртгэгдсэн. Халдвар шинээр гарсан улс орон байхгүй. Сэжигтэй тохиолдол болон халдвар авсан байж болзошгүй эрсдэлтэй хүмүүс ихсэж байна.</span></p>\r\n\r\n<p><span font-size:=\"\" roboto=\"\">Харамсалтай нэг зүйл нь нас баралтын тоо буурахгүй байгаа бөгөөд одоогийн байдлаар нийт&nbsp;910 нас баралт бүртгэгдээд байна. БНХАУ-д гэхэд 6,492 хүнд өвчтөн байна гэсэн мэдээлэл ирсэн. БНХАУ-аас бусад улс оронд бүртгэгдсэн тохиолдлыг харахад, голомттой бүс нутагт аяласан өгүүлэмжтэй байгаа юм. Харин Сингапурт бүртгэгдсэн тохиолдол нь тодорхойгүй бөгөөд тархалт хүн амын дунд хурдацтай байгаа учраас тус улс нь аюулын зэргээ улбар шар болгосон. Тиймээс ДЭМБ-аас манай урд хөршөөс бусад улс оронд гарсан шинэ коронавирусийн халдварын тархалтыг хянаж, судалж байна&quot; гэв.&nbsp;</span></p>\r\n\r\n<p><strong font-size:=\"\" roboto=\"\">ХӨСҮТ-ийн захирал Д.Нямхүү</strong><span font-size:=\"\" roboto=\"\">&nbsp;&ldquo;Амралтын өдрүүдэд гурван тохиолдол тусгаарлагдаж хянагдсан. Харин Өвөрхангай аймагт тусгаарлагдаад байсан иргэний шинжилгээний хариу сөрөг гарсан. Энэхүү иргэнд А хүрээний H3N2 вирус илэрсэн. Сөүл-Улаанбаатарын чиглэлд явсан өгүүлэмжтэй хүний хариу мөн сөрөг гарсан. Энэ сарын 9-нд тусгаарлагдсан Хөх хотоос Улаанбаатарт ирсэн иргэнээс мөн л А хүрээний H3N2 вирус илэрсэн.</span></p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/57ed353bab4c43f00d8e0ed7c9904641ef9e5bab.jpg\" style=\"width: 450px; height: 450px;\" /></p>\r\n\r\n<div>&nbsp;</div>\r\n', 1581404143, 1582774695, 54, 1, 1, 0),
(30, 7, 'img/news/powermn_1662605639.png', '', 'img/news/invest_158140548986180241_2665449250175433_6013644535903551488_n_20200211095230.jpg', '0', 'Япон улсын Элчин сайд бизнес эрхлэгчдийг дэмжиж ажиллахаа илэрхийлэв', '<p><span xss=\"removed\">Нийслэлийн Засаг дарга бөгөөд Улаанбаатар хотын Захирагч С.Амарсайхан өнөөдөр Япон Улсаас Монгол Улсад суугаа Онц бөгөөд Бүрэн эрхт Элчин сайд Кобаяши Хироюкиг хүлээн авч уулзлаа.</span><br></p>', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; text-align: justify; border-radius: 0px !important;\">Нийслэлийн Засаг дарга бөгөөд Улаанбаатар хотын Захирагч С.Амарсайхан өнөөдөр Япон Улсаас Монгол Улсад суугаа Онц бөгөөд Бүрэн эрхт Элчин сайд Кобаяши Хироюкиг хүлээн авч уулзлаа. Уулзалтад Японы ЭСЯ-ны Улс төрийн хэлтсийн 3-р нарийн бичгийн дарга Мураками Мэй, нийслэлийн Засаг даргын зөвлөх М.Мэнд-Очир, НЗДТГ-ын Гадаад харилцаа, хамтын ажиллагааны хэлтсийн дарга Д.Чинзориг нар байлцав.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; text-align: justify; border-radius: 0px !important;\"><img alt=\"\" src=\"/uploads/images/86180241_2665449250175433_6013644535903551488_n_20200211095230.jpg\" style=\"width: 550px; height: 275px;\" /></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; text-align: justify; border-radius: 0px !important;\">Уулзалтын эхэнд хотын Захирагч С.Амарсайхан Монгол Улсыг сайн мэддэг, манай улсад чин сэтгэлээсээ элэгсэг дотно ханддаг, Японы шилдэг дипломатч Элчин сайдаар томилогдсонд баяртай буйгаа илэрхийлээд, цаашид Монгол, Японы стратегийн түншлэл, эдийн засгийн харилцааг өргөжүүлэхэд чухал нөлөөтэй болохыг онцлон хэллээ. Тэрбээр &ldquo;Хоёр улсын хооронд стратегийн иж бүрэн түншлэлийн харилцаа худалдаа, эдийн засаг, хүмүүнлэг, боловсрол, соёл зэрэг олон салбарт өргөжиж байна. Цаашид Улаанбаатар хотын засаглалыг хөгжүүлж, чадварлаг боловсон хүчин бэлтгэх, аялал жуулчлалыг хөгжүүлэхэд түлхүү анхаарч ажиллах бодолтой байна&rdquo; гэв.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; text-align: justify; border-radius: 0px !important;\">Элчин сайд Кобаяши Хироюки хотын Захирагчид түүнийг хүлээн авч уулзсанд талархал илэрхийлээд хоёр улсын хамтын ажиллагааг өргөжүүлж ажиллахад бэлэн байна хэмээн хэллээ. Тэрбээр &ldquo;Цаашид хоёр орны худалдаа, эдийн засгийг хөгжүүлж экспортыг дэмжиж ажиллах шаардлагатай байна. Тиймээс бизнес эрхлэгчдийг дэмжих харилцан үр ашигтай ажиллах бодолтой байна&rdquo; хэмээлээ.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; text-align: justify; border-radius: 0px !important;\">Уулзалтын үеэр хотын Захирагч Улаанбаатар хотод өрнөж байгаа бүтээн байгуулалтын талаар дэлгэрэнгүй дурдаад цаашид хэрэгжүүлэх төсөл хөтөлбөрүүдэд ноён Кобаяши Хироюкиг санал ирүүлж харилцан үр ашигтай хамтарч ажиллахаар ярилцлаа.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; text-align: justify; border-radius: 0px !important;\"><span style=\"color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; text-align: justify;\">Япон Улсаас Монгол Улсад суугаа Онц бөгөөд Бүрэн Эрхт Элчин сайд ноён Кобаяши Хироюки өнгөрсөн оны арванхоёрдугаар сарын 25-нд Ерөнхийлөгч Х.Баттулгад Итгэмжлэх жуух бичгээ өргөн барьсан юм. Тэрбээр, 1987-1989 он Япон Улсаас Монгол Улсад суугаа ЭСЯ-нд 3 дугаар нарийн бичгийн дарга, 2005-2008 онд ЭСЯ-ны Дэд тэргүүнээр тус тус томилогдон ажиллаж байжээ.</span></p>\r\n', 1581405420, 1662605639, 36, 1, 1, 0),
(31, 15, 'img/news/powermn_1662605609.png', '', '', '0', 'Эвлэрүүлэн зуучлагчдын зөвлөлийн гишүүдийг томилов', '<p>Шүүхийн ерөнхий зөвлөл хуралдлаа.</p>', '<p>Шүүхийн ерөнхий зөвлөлийн&nbsp;2020 оны 02 дугаар сарын 10-ны өдрийн 09 дугаар тогтоолоор М.Баясгалан, С.Болормаа, Л.Өлзийхүү,&nbsp;З.Сүхбаатар, Д.Тунгалаг нарыг Эвлэрүүлэн зуучлагчдын зөвлөлийн гишүүнээс тус тус чөлөөллөө.</p>\r\n\r\n<p>Мөн өдрийн 10 дугаар тогтоолоор Мянгаагийн Баясгалан, Доржнамжингийн Доржсүрэн, Цэнд-Аюушийн Ичинхорлоо, Дагвадоржийн Тунгалаг, Бадарчийн Энх-Эрдэнэ нарыг Эвлэрүүлэн зуучлагчдын зөвлөлийн гишүүнээр гурван жилийн хугацаагаар тус тус томиллоо.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1581406649, 1662605619, 28, 1, 1, 0),
(32, 7, 'img/news/invest_1581407240.png', NULL, '', '0', 'Монголын хуульчдын холбоо уриалга гаргалаа', '<p>Монголын хуульчдын холбоо уриалга гаргалаа.</p>', '<p><img alt=\"\" src=\"/uploads/images/84341715_512974096016590_4370265236704329728_n.jpg\" style=\"width: 795px; height: 960px;\" /></p>\r\n', 1581407240, 1581407240, 77, 1, 0, 0),
(33, 7, 'img/news/powermn_1662539399.png', '', '', '0', 'Н.Цэрэнбат: Эрдэмтэдийн хийж буй ажлыг дэмжиж ажиллана', '<p><span xss=\"removed\">БОАЖ-ын сайд Н.Цэрэнбат ШУТИС-ийн Геологи, уул уурхайн сургуулийн тэргүүлэх профессор, шинжлэх ухааны доктор, туйл судлаач Л.Дүгэржавыг өөрийнх нь хүсэлтээр хүлээн авч уулзав.</span><br></p>', '<p>БОАЖ-ын сайд Н.Цэрэнбат ШУТИС-ийн Геологи, уул уурхайн сургуулийн тэргүүлэх профессор, шинжлэх ухааны доктор, туйл судлаач Л.Дүгэржавыг өөрийнх нь хүсэлтээр хүлээн авч уулзав.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/41A2919-1024x726.jpg\" style=\"width: 500px; height: 354px;\" /></p>\r\n\r\n<p>Туйл судлаач Л.Дүгэржав &ldquo;Антрактид тивд Монгол Улс судалгааны бааз байгуулахад БОАЖЯ-наас санхүүгийн дэмжлэг үзүүлж, хамтарч ажиллаж байгаад талархаж байна. Анх 1959 онд 2059 он хүртэл Антарктидын олон улсын гэрээг үзэглэсэн учир тус тив 2059 он хүртэл хэн нэгний эзэмшил болохгүй. Одоогоор 54 орон судалгаа хийж байгаагаас 29 нь л судалгааны бааз байгуулсан. Манай улсын хувьд Ливингстон аралд судалгааны бааз байгуулж, геологийн зураглал хийн, цаг уурын автомат станц суурилуулж, зургаан хүн амьдрах орон сууц бариулж байна&rdquo; хэмээлээ.&nbsp;БОАЖ-ын сайд Н.Цэрэнбат &ldquo;Монгол Улс Антарктидын олон улсын гэрээнд нэгдэж судалгааны бааз байгуулсан цөөн орны тоонд багтаж байгаад баяртай байна. Антракид тивд судалгааны бааз байгуулна гэдэг тус тивд өөрийн гэсэн газартай болж байна гэсэн үг. Тиймээс БОАЖЯ цаашид эрдэмтэд та бүхний хийж буй ажлыг дэмжиж ажиллана&rdquo; гэв.</p>\r\n\r\n<p>Антрактид тив нь дэлхийн хуурай газрын 10 хувийг эзэлдэг,&nbsp;15 сая ам/км газар нутагтай. Дунджаар 2400 метр зузаан мөсөөр хучигдсан, дэлхийн цэвэр усны нөөцийн 80 орчим хувийг мөс хэлбэрээр хадгалдаг. Монгол Улс Антарктидын олон улсын гэрээнд 2015 нэгдсэнээр судалгаа хийх эрхтэй болсон юм.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1581408593, 1662539399, 47, 1, 1, 0),
(34, 7, 'img/news/invest_1581409473.png', NULL, '', '0', '“Монголын геологи, хайгуул 2020” чуулга уулзалт ирэх сард болно', '<p>“Монголын геологи, хайгуул 2020” чуулга уулзалт ирэх сард болно.<br></p>', '<p>&ldquo;Монголын Үйлдвэрлэлийн Геологичдын Холбоо&rdquo;-ны санаачлагаар 2009 оноос зохион байгуулж ирсэн &quot;МОНГОЛЫН ГЕОЛОГИ, ХАЙГУУЛ&quot; чуулга уулзалтыг Уул уурхай, хүнд үйлдвэрийн яам, Ашигт малтмал, газрын тосны газар, Мэргэжлийн хяналтын ерөнхий газар, Шинжлэх ухаан технологийн их сургууль, Монгол улсын их сургууль, ШУА, Геологийн хүрээлэн, Палеонтологийн хүрээлэн, Монголын Үйлдвэрлэлийн Геологичдын Холбоо зэрэг байгууллагууд хамтран 2020 оны 3 дугаар сарын 26-27-ны өдрүүдэд Улаанбаатар хотноо XII удаагаа зохион байгуулах болсныг Танд албан ёсоор мэдэгдэхэд таатай байна.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/Announce200116.jpg\" style=\"width: 550px; height: 317px;\" /></p>\r\n\r\n<p><br />\r\n&ldquo;МОНГОЛЫН ГЕОЛОГИ, ХАЙГУУЛ 2020&rdquo; чуулга уулзалтын хүрээнд:<br />\r\nҮндсэн хуралдаан, хэлэлцүүлэг<br />\r\nАшигт малтмалын ордын хайгуул, уул уурхайн ашиглалтын төслүүдийн танилцуулга, хөрөнгө оруулагчдын бизнес уулзалт<br />\r\n&ldquo;Хайгуулчин&rdquo; сэтгүүл<br />\r\nБайгууллагуудын танилцуулга, үзэсгэлэн<br />\r\n&nbsp;&ldquo;Зураглалын шилдэг баг&rdquo; шалгаруулах<br />\r\n&ldquo;Хайгуулын шилдэг баг&rdquo; шалгаруулах<br />\r\nОюутны эрдэм шинжилгээний бага хурал<br />\r\n&ldquo;Монгол орны байгаль &ndash; Хайгуулчдын дуранд&rdquo; гэрэл зургийн үзэсгэлэн<br />\r\n&ldquo;Эрдэс чулуулгийн цуглуулга, дээжис&rdquo; үзэсгэлэн<br />\r\nМэргэшүүлэх сургалт<br />\r\n&ldquo;Цэцээ гүн&rdquo; спорт, гео-аялал зэрэг арга хэмжээнүүд зохион байгуулагдана.<br />\r\nҮНДСЭН ХУРАЛДААН, ХЭЛЭЛЦҮҮЛЭГ<br />\r\nГеологи, эрдэс баялгийн салбар дахь Монгол Улсын Засгийн газрын үйл ажиллагааны хөтөлбөр, геологийн региональ судалгаа, ашигт малтмалын ордын эрэл, хайгуул, арга аргачлал, техник технологи, геологи, уул уурхайн төслүүдийн танилцуулга, үр дүн, хөрөнгө оруулалтын орчин ба нөхцөл байдал, салбарын өнөөгийн байдал, цаашдын төлөв, хандлага зэрэг сэдвээр илтгэл, хэлэлцүүлэг хийгдэнэ.<br />\r\nГеологи, эрдэс баялгийн салбарын тулгамдсан асуудал, хууль эрх зүйн орчин, төрийн бодлого, засгийн газрын дэмжлэг, хөрөнгө оруулалтын орчин, бэрхшээл, боломж, шийдэл, хөрөнгө оруулалтыг дэмжих татварын бодлого, томоохон төсөл, хөтөлбөрийн талаар чуулга уулзалтад оролцогчдын дунд хэлэлцүүлэг өрнүүлэх, гарсан үр дүн, санал дүгнэлтийг нэгтгэж &ldquo;Зөвлөмж&rdquo; гарган холбогдох байгууллагуудад хүргүүлж, хэрэгжүүлэх талаар анхаарал хандуулан ажиллана.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1581409473, 1581409473, 46, 1, 0, 0),
(36, 13, 'img/news/invest_1581411449.png', '', 'img/news/invest_1581411449.jpg', '0', 'Цахилгаан автобусыг ирэх сарын 2-ны өдөр хүртэл туршилтаар үйлчилгээнд гаргана', '<p><span xss=\"removed\">Агаарын бохирдлыг бууруулах зорилгоор нийслэлийн нийтийн тээвэрт цахилгаан автобусыг үйлчилгээнд гаргахаар туршиж байна. </span><br></p>', '<p>Агаарын бохирдлыг бууруулах зорилгоор нийслэлийн нийтийн тээвэрт цахилгаан автобусыг үйлчилгээнд гаргахаар туршиж байна.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/83666585_553859471875902_6793180181004550144_n_20200211021214.jpg\" style=\"width: 550px; height: 275px;\" /></p>\r\n\r\n<p>Америк Германы хамтарсан технологиор үйлдвэрлэсэн &ldquo;Yinlong Energy&rdquo; компанийн найман цахилгаан автобусыг &ldquo;Зорчигч тээврийн нэгтгэл&rdquo; ОНӨААТҮГ инженер техникийн ажилчид туршиж байгаа бөгөөд уг автобус нь&nbsp; дизель хөдөлгүүрт тээврийн хэрэгслээс 60 хувь зардал хэмнэдэг онцлогтой аж.<br />\r\nНийт 36 хүний суудалтай тус цахилгаан автобусыг цэнэглэх зориулалтын хоёр цэгийг байгуулсан байна. Цаашид цахилгаан автобусыг цэнэглэх байршлуудыг нэмэхээр судалгаа гаргаж байгаа бөгөөд үйлдвэрлэгч компанийн зүгээс цахилгаан автобусанд найман жил, батерей буюу цэнэглэгчид 30 жилийн баталгаа өгсөн талаар &ldquo;Зорчигч тээврийн нэгтгэл&rdquo;-ийн дарга Г.Төмөрбаатар хэллээ.<br />\r\nТэрбээр &ldquo;Уг цахилгаан автобусуудыг ирэх сар хүртэл туршина. &ldquo;Зорчигч тээврийн нэгтгэл&rdquo; ОНӨААТҮГ инженер техникчид эдгээр цахилгаан автобусыг туршилтанд тэнцэж байгаа талаар мэдэгдсэн. 100 хувь цахилгаанаар хангадаг учраас олон давуу талууд ажиглагдаж байна&rdquo; хэмээлээ.<br />\r\nТуршилтаар явж байгаа энэхүү цахилгаан автобус нь -50+ 50 градуст ажиллах ажиллах чадвартай, баттерей нь нано технологиор үйлдвэрлэгдсэн 12 м урттай 15-20 минутанд бүрэн цэнэгээ авдаг давуу талтай аж. Түүнчлэн автобусны цонхнууд нь хоёр давхар шилтэй вакум учир өвлийн улиралд цантахгүй. Зааландаа найман халаагууртай, хяналтын таван камертай, зориулалтын гэрэлт самбар зэргийг байршуулж зорчигчийн тав тухыг бүрэн хангажээ.<br />\r\nУг цахилгаан автобусуудыг ирэх сарын 2-ны өдөр хүртэл&nbsp; нийтийн тээврийн үйлчилгээнд туршилтаар явуулахаар болжээ.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1581411449, 1583902419, 44, 1, 1, 0),
(37, 13, 'img/news/invest_1581477730.png', '', 'img/news/invest_1581477730.jpg', '0', 'Гашуунсухайт боомтод тусгаарлагдсан 12 хүний шинжилгээний сорьцыг ХӨСҮТ-рүү явуулаад байна', '<p><span xss=\"removed\">ЭМЯ-наас шинэ коронавирусийн халдварын нөхцөл байдлын 11.00 цагийн мэдээлэл боллоо.</span><br></p>', '<p>ЭМЯ-наас шинэ коронавирусийн халдварын нөхцөл байдлын 11.00 цагийн мэдээлэл боллоо. Мэдээллийг&nbsp;ЭМЯ-ны ОНХТШУХ-ийн дарга Д.Нарангэрэл, ДЭМБ-ын ажилтан О.Ариунтуяа, МХЕГ-ын улсын ахлах байцаагч Т.Төмөрбаатар, ХХЕГ-ын дарга хурандаа Ц.Мягмардорж, ХӨСҮТ-ийн Захирал Д.Нямхүү нар өглөө.</p>\r\n\r\n<p>Хоёрдугаар сарын 11-ний өдрийн 10:00 цагийн байдлаар шинэ коронавирусийн халдвар авсан хүний тоо 43027-т хүрсэн бол 3998 хүн эдгэрч, 1017 хүн нас бараад байна.<br />\r\nМХЕГ-ын мэдээллээр нэгдүгээр сарын 7-ноос хоёрдугаар сарын 11-ны хооронд 86 сэжигтэй тохиолдол илрүүлсний 66 нь Буянт Ухаа, 5 нь Замын-Үүд, 3 сэжигтэй тохиолдлыг Хавиргын боомтоор илрүүлсэн. Өчигдөр нэмж 12 сэжигтэй тохиолдлыг Гашуунсухайт боомт дээр илрүүлж, шинжилгээний сорьцыг ХӨСҮТ рүү явуулаад байна. Монгол Улсын иргэдийг БНХАУ руу дипломат болон эрүүл мэндийн шалтгаанаар явахыг зөвшөөрч байгаа ч эрсдэл өндөр байгааг бодолцож зайлшгүй шаардлагатай биш бол аль болохоор тус улсад зорчихгүй байхыг зөвлөе.</p>\r\n\r\n<p>Одоогийн байдлаар&nbsp; ХӨСҮТ-д&nbsp; өчигдөр тусгаарлагдсан нэг хүний&nbsp; шинжилгээний хариу сөрөг гарч үгүйсгэгдсэн. Хөвсгөл аймагт сэжигтэй нэг тохиолдол илэрч шинжилгээний хариу 24 цагийн дараа гарна. Гашуунсухайт боомт дээр тусгаарлагдсан 12 хүний шинжилгээний сорьцыг хүлээн авч хариу гарсан даруйд мэдээлэх болно.&nbsp;&nbsp;</p>\r\n\r\n<p>Хил хамгаалах ерөнхий газрын мэдээллээр 26 боомтын хамгийн ачаалалтай байгаа нь Замын-Үүд болон Буянт-Ухаа боомт байна. ОХУ-д&nbsp; хоёр тохиолдол илэрсэн тул Алтанбулаг боомтоор Оросоос орж ирж байгаа болон Орос руу явж байгаа иргэдэд хяналт тавьж байна.&nbsp;&nbsp;</p>\r\n', 1581477730, 1581919795, 74, 1, 1, 3),
(38, 15, 'img/news/powermn_1662605594.png', '', '', '0', 'Олон нийтийн газар цэр шүлсээ хаясан иргэнд хариуцлага тооцохоор боллоо', '<p><span xss=\"removed\">Нийслэлийн Засаг дарга бөгөөд Улаанбаатар хотын Захирагч С.Амарсайхан бүх нийтэд хандан уриалга гаргалаа. </span><br></p>', '<p>Нийслэлийн Засаг дарга бөгөөд Улаанбаатар хотын Захирагч С.Амарсайхан бүх нийтэд хандан уриалга гаргалаа. Тэрбээр&nbsp;халдварт өвчнөөс урьдчилан сэргийлэх талаар авах зарим арга хэмжээний тухай захирамж гаргасан юм.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/84415903_195394448497793_7507860497086021632_n_20200207120915_20200207061617.jpg\" style=\"width: 600px; height: 300px;\" /></p>\r\n\r\n<p>Уг захирамжинд томуу, томуу төст өвчин болон коронавирусын халдвараас урьдчилан сэргийлэх ажлын хүрээнд нийтийн эзэмшлийн болон үйлчилгээний газар, орон сууцны орчны газарт нус, цэр, шүлсээ хаяхгүй байх, ил задгай бие засах болон хог хаягдлаар орчноо бохирдуулахгүй байх. Мөн нийслэл хотод үйл ажиллагаа эрхэлж байгаа бүх аж ахуйн нэгж байгууллагууд 50 м хүртэлх газрын цас, мөс, хог хаягдлыг цэвэрлэх, ариун цэврийн өрөөгөө үнэ төлбөргүй ашиглуулахыг үүрэг болгожээ.</p>\r\n\r\n<p>Захирамжийн хэрэгжилтэд хяналт тавьж, олон нийтийн газар биеэ зүй бусаар авч явсан иргэнд Зөрчлийн хуулийн дагуу хариуцлага тооцож ажиллахыг нийслэлийн Цагдаагийн удирдах газар болон нийслэлийн Мэргэжлийн хяналтын газрын удирдлагуудад даалгажээ.</p>\r\n', 1581478040, 1662605594, 57, 1, 1, 0),
(39, 13, 'img/news/invest_1581497154.png', '', 'img/news/invest_1581497154.jpg', '0', 'Маргаашнаас эхлэн гамшгаас хамгаалах хагас өндөржүүлсэн бэлэн байдалд шилжинэ', '<p><span xss=\"removed\">Засгийн газрын ээлжит хуралдаан өнөөдөр боллоо. </span><br></p>', '<p font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; margin: 0px 0px 30px; color: rgb(68, 68, 68); font-family: Arial, \" text-align:=\"\">Засгийн газрын ээлжит хуралдаан өнөөдөр боллоо.&nbsp;</p>\r\n\r\n<p font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; margin: 0px 0px 30px; color: rgb(68, 68, 68); font-family: Arial, \" text-align:=\"\"><img alt=\"\" src=\"/uploads/images/3624a7c6c7e991b2f84f110a3f2fb3a3.jpg\" style=\"width: 600px; height: 450px;\" /></p>\r\n\r\n<p font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; margin: 0px 0px 30px; color: rgb(68, 68, 68); font-family: Arial, \" text-align:=\"\">Дэлхийн улс орнууд болон хөрш БНХАУ-д Шинэ коронавирусийн тархалт эрс нэмэгдэж байгаатай холбогдуулан XVII жарны Хотол хэмээх төмөр хулгана жилийн Цагаан сарын баярыг тэмдэглэхгүй байх тухай Монгол Улсын Ерөнхийлөгч Х.Баттулга зарлиг гаргалаа. Мөн аюулаас урьдчилан сэргийлэх чиглэлээр хэд хэдэн арга хэмжээ авахыг Засгийн газарт чиглэл болгосон байна. Энэ дагуу Засгийн газар Цагаан сарын баярыг тэмдэглэхгүй байх нь зүйтэй гэж үзлээ. Иргэд зөвхөн гэр бүлийнхээ хүрээнд, аль болох цомхон тэмдэглэх нь нээлттэй.&nbsp; Гагцхүү золгуут хийхээр айл хэсэхгүй, олноороо нэг дор цугларахгүй байж болзошгүй эрсдэлээс өөрийнхөө болон бусдын эрүүл мэнд, амь насыг хамгаалахыг уриалав. Засгийн газар өмнө нь Цагаан сарын баяраар бөхийн барилдаан зохиох, төрийн, нутгийн зөвлөл, байгууллагуудын золголт зэргийг хориглосон шийдвэр гаргаад байсан юм.</p>\r\n\r\n<p font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; margin: 0px 0px 30px; color: rgb(68, 68, 68); font-family: Arial, \" text-align:=\"\">Мөн өнөөдрийн хуралдаанаас &nbsp;засаг захиргаа, нутаг дэвсгэрийн нэгж, төрийн болон нутгийн захиргааны байгууллага, хуулийн этгээдийг 2020 оны 02 дугаар сарын 13-наас гамшгаас хамгаалах өндөржүүлсэн бэлэн байдлын зэрэгт /хэсэгчлэн/ шилжүүлэв. Өндөржүүлсэн бэлэн байдлын үед гамшгийн зарлан мэдээлэх дохиог иргэдэд хүргэх, хэвлэл мэдээллийн байгууллагууд гамшигтай холбоотой мэдээ, мэдээллийг нэн даруй дамжуулах, хүн хүч, техник, материал хэрэгслийг дайчлах, хорио цээрийн дэглэм тогтоох, гамшгийн нөөцийг нэмэх зэрэг арга хэмжээ авдаг байна. Монгол Улсын Ерөнхийлөгчийн зарлигийн дагуу Цагаан сарын баярт зориулан үзэсгэлэн худалдаа зохион байгуулах, телевиз, радиогоор зар сурталчилгаа явуулахыг хориглосон. Засгийн газар баярын&nbsp; амралтын өдрүүдийг ажлын өдөр болгохтой&nbsp; холбоотой ямар нэг шийдвэр гаргаагүй байна.</p>\r\n', 1581497154, 1583902398, 69, 1, 1, 0),
(40, 8, 'img/news/invest_1581560309.png', '', 'img/news/invest_1581558431.jpeg', '0', 'П.Цогтсайхан: Соёлын зориулалтаар экспортолж буй шонхор шувуунаас олсон орлогыг орон нутгийн дансанд төвлөрүүлдэг', '<p><span xss=\"removed\">Монгол Улсын Засгийн газраас 2013, 2019 онуудад тогтоол гаргаж, 5 жилийн хугацаагаар идлэг шонхор шувууг арилжааны зорилгоор гадаад улсад экспортлохыг хориглосон.</span><br></p>', '<p><em>БОАЖЯ-ны Хүрээлэн буй орчин, байгалийн нөөцийн удирдлагын газрын дарга П.Цогтсайханаас цаг үеийн асуудлаар тодруулга авлаа. &nbsp;</em></p>\r\n\r\n<p><strong>-Зарим хэвлэл мэдээллийн хэрэгслээр Засгийн газрын нууц тогтоол гэгчээр халхавчилж шонхор шувууг их хэмжээгээр экспортолж байна гэдэг мэдээлэл гарсан. Та үүнд ямар хариулт өгөх вэ?</strong></p>\r\n\r\n<p><strong>-</strong>Монгол Улсын Засгийн газар 1994 оноос эхлэн улсын төсвийг бүрдүүлэхэд тодорхой хувь нэмэр болгох үүднээс жилд дунджаар 200 орчим толгой идлэг шонхор шувууг арилжааны зорилгоор экспортолж эхэлсэн. Идлэг шонхор шувууны урт хугацааны тогтвортой хамгааллыг бий болгох, тоо толгойг өсгөх, түүнд нөлөөлж буй сөрөг нөлөөллийг бууруулах зорилгоор Монгол Улсын Засгийн газраас 2013, 2019 онуудад тогтоол гаргаж, 5 жилийн хугацаагаар идлэг шонхор шувууг арилжааны зорилгоор гадаад улсад экспортлохыг хориглосон. Харин мэргэжлийн байгууллагуудын тооцоо, судалгаан дээр үндэслэн идлэг шонхор шувууны тоо толгойн зохистой байдлыг ханган соёлын зориулалтаар экспортлох шийдвэрийг Засгийн газраас тухай бүрт нь гаргадаг. Мэргэжлийн байгууллагуудын зөвлөмж, орон нутгийн байгууллагуудын саналыг үндэслэн тухайн жилд экспортлох боломжтой шонхорын тоог гаргадаг учир нууц тогтоол нэрийн дор их хэмжээгээр шонхор гаргаж байна гэж хардах нь өрөөсгөл асуудал гэж хэлмээр байна. Иймэрхүү мэдээллийг ашиг сонирхлын зөрчил бүхий хувь хүн байгууллагууд хэвлэл мэдээллийн байгууллагуудад өгч болно. Тухайн хэвлэл мэдээллийн байгууллагыг мэдээллээ нягталж, мэргэжлийн байгууллагууд болон холбогдох төрийн байгууллагаас тайлбар авч, мэдээллийн тэнцвэртэй байдлыг хадгална уу гэж хүсье.</p>\r\n\r\n<p><strong>-Соёлын зориулалтаар шонхор шувууг үнэгүй экспортолдог асуудал байдаг юм уу?</strong></p>\r\n\r\n<p>-Тийм асуудал байхгүй. Байгалийн нөөц ашигласны төлбөрийн тухай хуулийн дагуу нэг идлэг шонхор тутамд ан амьтны экологи, эдийн засгийн үнэлгээний 40 хувиар тооцож 6.400.000 төгрөгийн төлбөр оногдуулж, тухайн орон нутгийн дансанд төвлөрүүлдэг. Мөн Улсын тэмдэгтийн хураамжийн тухай хуулийн дагуу нэг идлэг шонхор тутамд ан амьтны экологи, эдийн засгийн үнэлгээний 4 хувиар тооцож 640.000 төгрөгийн хураамжийг тогтоож, улсын төсвийн дансанд төвлөрүүлдэг. Ингэхдээ Монгол улсын Засгийн газрын 2011 оны Үнэлгээ, төлбөр хураамжийн хэмжээг шинэчлэн батлах тухай 23 дугаар тогтоолд заасан идлэг шонхор шувууны экологи, эдийн засгийн үнэлгээгээр тооцдог. Шонхор шувууг соёлын зориулалтаар экспортлохын цаана ямар нэгэн ашиг сонирхол, байгалийн тэнцвэрийг алдагдуулах асуудал байхгүйг дахин хэлмээр байна. &nbsp;Орон нутгийн дансанд мөнгө төвлөрүүлдэг учир орон нутгийн анхан шатны нэгжийн удирдлагуудаас эхлээд үйлчилгээ үзүүлдэг байгууллагууд өөрсдийн орлогын эх үүсвэрийг алдахгүй гэдэг үүднээс асуудал үүсгэж, гүтгэлгийн шинж чанартай мэдээлэл түгээх нь элбэг. Тиймээс хэвлэл мэдээллийн байгууллагуудыг мэргэжлийн байгууллагуудаас тайлбар авч, бодит мэдээллийг олон нийтэд хүргэхийг хичээнгүйлэн хүсэж байна.</p>\r\n\r\n<p><strong>-Одоогоор Монгол оронд хэдий хэмжээний шонхор шувуу байгаа тухай судалгаа гарсан бэ. Хамгаалах талаар танай яамнаас ямар ажил хийж байна вэ?</strong></p>\r\n\r\n<p>-Одоогоор Монгол Улсад 10 мянган шонхор тоологдсон. Энэ тоо жил ирэх бүр нэмэгдэх төлөвтэй байгааг судалгааны байгууллагуудын тайлан харуулж байна. Гэхдээ зэрлэг шувууд цахилгааны шон дээр суух гэх мэт мэтээр байгалийн бус жамаар сүүлийн 5-6 жилд 20 орчим мянга хорогдсон гэдэг мэдээллийг мэргэжлийн байгууллагаас бидэнд ирүүлсэн. Тиймээс ганц идлэг шонхор гэхгүйгээр зэрлэг шувуудыг хамгаалах, тоо толгойг нь өсгөх төсөл хөтөлбөрийг мэргэжлийн байгууллагуудтай хамтран хэрэгжүүлж байгаа. Тухайлбал, зүүн аймгуудад шонхор шувууны тоо толгойг өсгөх зориулалтаар 5000 ширхэг хиймэл үүрийг байршуулсны үр дүнд жилд 1000-2000 ангаахай бойжиж байгаа судалгааг мэргэжлийн байгууллагууд ирүүлсэн. Мөн цахилгааны шон дээр сууж зүй бусаар хорогдож байгаа шувуудыг хамгаалах зорилгоор цахилгааны шонг зориулалтын материалаар бүрж, аюулгүй болгох гэх мэт ажлуудыг үе шаттайгаар хийж байна.</p>\r\n', 1581558431, 1583377976, 1529, 1, 2, 0),
(41, 13, 'img/news/invest_1581562072.png', NULL, '', '0', 'ЭМЯ: Худал ташаа мэдээлэл тараавал хариуцлага тооцно', '<p><span xss=removed>Нийгмийн сүлжээ болон хувийн чатаар ирж байгаа дуут мессеж мэдээлэл нь худал, ташаа мэдээлэл юм. </span><br></p>', '<p>Нийгмийн сүлжээ болон хувийн чатаар ирж байгаа дуут мессеж мэдээлэл нь худал, ташаа мэдээлэл юм. 2020 оны 2 дугаар сарын 12-ний байдлаар Шинэ коронавирусийн/СOVID-19/ халдвар манай улсад бүртгэгдээгүй.</p>\r\n\r\n<p>Зохион байгуулалтайгаар худал ташаа мэдээлэл тарааж, нийгмийг айдаст автуулах, эмх замбараагүй байдал бий болгохыг хүсч буй нийгмийн сүлжээний хэрэглэгчийг хуулийн байгууллагад хандан шалгуулж, хариуцлага тооцно.</p>\r\n\r\n<p>Албан ёсны үнэн бодит мэдээллийг өдөр бүр Эрүүл мэндийн яамнаас 11 цагаас улс даяар шууд мэдээлэл өгч байгаа.</p>\r\n\r\n<p>Иймд эх сурвалжаа нягтлаагүй мэдээллийг цааш нь түгээж, дамжуулахгүй байх нь таныг хууль бус үйлдлээс хамгаалах болохыг анхааруулья!!!</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/86191410_952325131849536_7354408015748923392_o.jpg\" style=\"width: 600px; height: 389px;\" /></p>\r\n', 1581562072, 1581562072, 63, 1, 1, 0),
(42, 8, 'img/news/invest_1581563509.png', '', '', '0', 'Д.Ариунаа: Тайван орчинд зургаа зурах дуртай', '<p><span xss=\"removed\">Нийтэд нэг их танил бус сонсогдох “Алтан хаан” галлерейг зорилоо. Учир нь тус галлерейд бяцхан хатагтай Д.Ариунаагийн “Ариунаагийн гайхамшигт ертөнц” уран бүтээлийн үзэсгэлэн дэлгэгджээ.</span><br></p>', '<p>-Нийтэд нэг их танил бус сонсогдох &ldquo;Алтан хаан&rdquo; галлерейг зорилоо. Учир нь тус галлерейд бяцхан хатагтай Д.Ариунаагийн &ldquo;Ариунаагийн гайхамшигт ертөнц&rdquo; уран бүтээлийн үзэсгэлэн дэлгэгджээ. Нэгэн найзынхаа санал болгосноор&nbsp; Д.Ариунаагийн уран бүтээлийн үзэсгэлэнг ийн зорьсон хэрэг. Түүнтэй цөөн хором хөөрөлдлөө.</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/olloo_mn_1581558086_ariu.jpg\" style=\"width: 100%;\" /></p>\r\n\r\n<p><strong>-Манай уншигчдад өөрийгөө танилцуулахгүй юу?</strong><br />\r\n&nbsp;<br />\r\n-Намайг Долгормаагийн Ариунаа гэдэг. Би арван жилээ &ldquo;Монгени&rdquo; цогцолбор сургуулийг төгссөн. Сургуулиа төгсөөд СУИС-ын Монгол зургийн ангид урилгаар элсэн орсон. Одоо хоёрдугаар курст сурдаг.&nbsp;<br />\r\n<strong>&nbsp;<br />\r\n-Хэзээнээс зурж эхэлсэн бэ?</strong></p>\r\n\r\n<p>-Багаасаа л зурах дуртай байсан. Тийм учраас манай гэрийнхэн намайг &ldquo;Монгени&rdquo; сургуулийн зургийн ангид оруулсан.&nbsp; Есдүгээр ангиасаа Монгол зургаар дагнан зурж эхэлсэн. Миний хүсэл сонирхлыг сонсож, зураг зурахад дэмжсэн эмээ өвөөдөө баярладаг. Мөн намайг чиглүүлж өгсөн Оюун-Эрдэнэ багшдаа баярлаж явдаг. Миний хувьд зургаа зурах л хамгийн сайхан мөч байдаг. Өөрт төрсөн сэтгэгдлээ зургандаа буулгана гэдэг гоё мэдрэмж. Би кино үзэж, дуу сонссоны дараа сэтгэгдлээ зургандаа буулгадаг. Тайван орчинд зургаа зурах дуртай.</p>\r\n\r\n<p><br />\r\n<strong>-&quot;Ариунаагийн гайхамшигт ертөнц&quot; анхны бие даасан үзэсгэлэн үү?</strong><br />\r\n&nbsp;<br />\r\n-Энэ удаагийн &ldquo;Ариунаагийн гайхамшигт ертөнц&rdquo; үзэсгэлэн маань миний бие дааж гаргаж байгаа хоёр дахь үзэсгэлэн.&nbsp; Үзэсгэлэнг маань гаргаж өгч байгаа &ldquo;Алтан хаан&quot; галлерейгийн менежер Төгөлдөр, маркетингийн зөвлөх Лхамсүрэн, захирал Didier Boissiere нартаа баярлалаа.</p>\r\n\r\n<p><strong>Уран бүтээлийн цаашдын зорилгоосоо хуваалцаач?</strong></p>\r\n\r\n<p>-Сургуулиа төгсөөд өөрийн гэсэн арга барил, хэв маягтай болчих байх. Одоогоор бол сургалтынх болохоор багш нарынхаа зааж байгааг илүү сайн сурч авахыг хичээж байна.</p>\r\n\r\n<p>-Танилцуулга дээрээ гадаад дотоодын маш олон зургийн уралдаанд амжилт үзүүлсэн тухай бичжээ. Хамгийн сүүлд ямар уралдаанд оролцов?&nbsp;</p>\r\n\r\n<p>-Хамгийн сүүлд Малайзын Ерөнхий сайдын 93 насны ойд зориулсан хөргийг нь зурах тэмцээнд оролцоод тэргүүн байр эзэлсэн. Мөн Малайзад суралцах эрх авсан ч түр хойшлуулаад байна. Одоогоор СУИС-д гэрээгээр сурч байгаа болохоор сургуулиа орхиод явж байсан. Үүнээс өмнө Хонконг зургийн уралдаанд орж тусгай байр эзэлсэн.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/uploads/images/83514991_1488733674642856_2757731177149235200_n.jpg\" style=\"width: 600px; height: 450px;\" /><br />\r\nАнх&nbsp; 2014 онд Ерөнхийлөгчийн нэрэмжит хүүхдийн ертөнц гар зургийн уралдаанд дэд байр эзэлж байсан. Үүний дараа жил Төрийн ордонд багштайгаа хамт &quot;Бодь модны чимээ&quot; үзэсгэлэн гаргасан. Мөн&nbsp; Оросын холбооны Улан-Удэ хотод үзэсгэлэн гаргасан. 2015 онд Засгийн газрын агентлагийн Монгол улсын шилдэг сурагч алтан медаль хүртэж байсан.&nbsp; 2016 онд Ерөнхийлөгчийн нэрэмжит хүүхдийн ертөнц гар зургийн уралдаанд тэргүүн байр эзлэн Урчуудын Эвлэлийн Хорооны авьяас алтан медиалиар, Нийслэлийн шилдэг сурагчаар шалгарч мөн алтан медиалиар шагнуулсан.&nbsp; 2017 онд Нийслэлийн шилдэг хүүхдээр шалгарч Япон улсад уригдан аялсан. Ингээд 2018 онд&nbsp; &quot;Мөрөөдлийн ертөнц&quot; сэдэвт Монгол зургийн үзэсгэлэн бие даан гаргаж байсан.&nbsp;<br />\r\n&nbsp;<br />\r\nБидний яриа түүний бүтээлүүдийн тухай үргэлжиллээ.<br />\r\n&nbsp;<br />\r\nБи &ldquo;Дэгжин бүсгүй&rdquo;, &ldquo;Намар&rdquo; гэж нэрлэсэн хоёр зургаа онцолмоор байна. Зургандаа эмэгтэй хүн, амьтан хоёрыг оруулахыг хүсдэг.&nbsp; &ldquo;Намар&rdquo; гээд энэ зураг маань намрын ойн өглөөний дүр зураг. Хүмүүс ихэвчлэн нохой муур гээд тэжээвэр амьтдыг илүү их хайрладаг. Тэдгээрийг хайрлаж байгааг буруу гэж хэлээгүй л дээ. Гэхдээ бусад амьтдыг хайрлаасай гэдэг үүднээс энэ зургийг зурсан. Хүйтэн цустай, хүмүүсийн нэг их анхаарч тоодоггүй&nbsp; гүрвэлийг энэ эмэгтэй хайрлан, энхрийлж байгаагаар үзүүлсэн.&nbsp;&nbsp;<br />\r\nО.Онон<br />\r\nОллоо.мн</p>\r\n', 1581563509, 1581919637, 76, 1, 1, 0),
(43, 12, 'img/news/powermn_1662540574.png', '', '', '0', 'Eminem 17 жилийн дараа Оскарын тайзнаа', '<p>Eminem 17 жилийн дараа Оскарын тайзнаа<br></p>', '<p>Eminem 17 жилийн дараа Оскарын тайзнаа</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"360\" src=\"//www.youtube.com/embed/J8AGD_p8F6I\" width=\"640\"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div>&nbsp;</div>\r\n', 1581574816, 1662540574, 87, 1, 1, 0),
(44, 13, 'img/news/invest_1581575843.png', '', '', '0', 'Шинэ коронавирусийн тохиолдол 60178-д хүрлээ', '<p>Шинэ коронавирусийн тохиолдол 60178-д хүрлээ<br></p>', '<p><img alt=\"\" src=\"/uploads/images/e14f5b24341494e4d505e2c076cf73fd80a55af3.jpg\" style=\"width: 960px; height: 960px;\" /></p>\r\n', 1581575843, 1583902230, 87, 1, 1, 0),
(45, 13, 'img/news/powermn_1582774524.png', '', 'img/news/powermn_1582774628city-council-mn-img-15827026542.jpg', '0', 'Уриалга: Хүн бүр хувийн сахилга баттай байцгаая', '<p><span xss=\"removed\">Эрхэм хүндэт нийслэлчүүд ээ.</span><br></p>', '<p 0px=\"\" 10px=\"\" margin-bottom:=\"\" margin-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; font-size: 16px; padding: 0px; font-family: \" text-align:=\"\">Та бүхнийхээ энэ өдрийн амгаланг айлтгая.</p>\r\n\r\n<p 0px=\"\" 10px=\"\" margin-bottom:=\"\" margin-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; font-size: 16px; padding: 0px; font-family: \" text-align:=\"\">Нөхөж баршгүй хохирол учруулж буй шинэ коронавируст халдвар дэлхий дахиныг түгшээж байна. Өнөө өглөөг бид &ldquo;Шинэ коронавируст халдвар 42 улсад бүртгэгдэж, халдварын улмаас 2800 орчим хүн нас барлаа&rdquo; гэдэг харамсалтай мэдээгээр угтлаа.</p>\r\n\r\n<p 0px=\"\" 10px=\"\" margin-bottom:=\"\" margin-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; font-size: 16px; padding: 0px; font-family: \" text-align:=\"\">Монгол Улсын Ерөнхийлөгч, Засгийн газар гээд төрийн удирдлага, шат шатны байгууллага шаардлагатай арга хэмжээг тухай бүрт авч, олон нийт түүнийг дагаж мөрдсөний үр дүнд коронавируст халдвар манай улсад бүртгэгдээгүй байгааг Та бүхэн мэдэж буй биз ээ.</p>\r\n\r\n<p 0px=\"\" 10px=\"\" margin-bottom:=\"\" margin-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; font-size: 16px; padding: 0px; font-family: \" text-align:=\"\">Гэсэн ч та бид коронавируст халдвар Монгол Улсад бүртгэгдээгүй хэмээн сэтгэл амарч болохгүй өдрүүд үргэлжилж байна.</p>\r\n\r\n<p 0px=\"\" 10px=\"\" margin-bottom:=\"\" margin-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; font-size: 16px; padding: 0px; font-family: \" text-align:=\"\">Хөрш зэргэлдээ улсуудад вирусний тархалт идэвхтэй хэвээр байгаа энэ цаг үед та бид сонор сэрэмжээ улам чангатгаж, хүн бүр хувийн сахилга баттай байж, гэр бүл, хайртай хүмүүсээ аюулт өвчнөөс хамгаалах нь чухал байгаа юм.</p>\r\n\r\n<p 0px=\"\" 10px=\"\" margin-bottom:=\"\" margin-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; font-size: 16px; padding: 0px; font-family: \" text-align:=\"\">Монгол Улсын Засгийн газар, Улсын Онцгой комисс, Нийслэлийн Онцгой комисс эдгээр өдрүүдэд байнгын үйл ажиллагаатай байж, коронавируст халдвараас сэргийлэх хүрээнд зохих шийдвэрүүдийг цаг тухай бүрт гарган ажиллаж байна. Үүний зэрэгцээ эмч, мэргэжилтнүүд, цагдаагийн албан хаагчид болон төрийн захиргааны байгууллагын алба хаагчид та бидний төлөө өөрсдийн гэр бүл, хайртай хүмүүсээ орхин цаг наргүй ажиллаж буйг Нийслэл хотын иргэд маань харж, сонсч байх аа.</p>\r\n\r\n<p 0px=\"\" 10px=\"\" margin-bottom:=\"\" margin-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; font-size: 16px; padding: 0px; font-family: \" text-align:=\"\">Нийслэл хотын иргэнд үүрэг, хариуцлага, эрх бий. Вирусний халдвараас сэргийлэхэд Нийслэлчүүд та бүхний оролцоо тун чухал. Иймд нийслэлийн иргэд, оршин суугчид Та бүхнийг үүргээ ухамсарлаж, Эрүүл мэндийн яамнаас хүргэж буй заавар зөвлөгөөг ягштал мөрдөж, өөрийгөө болон бусдыгаа коронавируст халдвараас хамгаалахыг хичээнгүйлэн хүсье.</p>\r\n\r\n<p 0px=\"\" 10px=\"\" margin-bottom:=\"\" margin-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; font-size: 16px; padding: 0px; font-family: \" text-align:=\"\">Нэг дор олуулаа цуглах, ах дүү нараараа айлчлах, амны хаалт зүүхээс татгалзах нь гэр бүлээ эрсдэлд оруулж буй гэдгийг та бүхэн ойлгоорой.</p>\r\n\r\n<p 0px=\"\" 10px=\"\" margin-bottom:=\"\" margin-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; font-size: 16px; padding: 0px; font-family: \" text-align:=\"\">Таныг их хотын иргэний үүргээ биелүүлж, өөрийгөө болон гэр бүл, хайртай хүмүүсээ хамгаална гэдэгт итгэж байна.</p>\r\n\r\n<p 0px=\"\" 10px=\"\" margin-bottom:=\"\" margin-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; font-size: 16px; padding: 0px; font-family: \" text-align:=\"\"><strong style=\"box-sizing: border-box;\">Нийслэлийн иргэдийн Төлөөлөгчдийн Хурлын дарга Р.Дагва</strong></p>\r\n', 1582774524, 1583378328, 152, 1, 1, 0),
(46, 7, 'img/news/powermn_1582775505.png', '', 'img/news/powermn_1582775505.jpg', '0', 'Эксперт: Шинэ коронавирүсийн халдвар томуугийн өвчлөл шиг байнгын байж магадгүй', '<p><span xss=\"removed\">Ван: “Бид үүнд бэлтгэлтэй байх хэрэгтэй”. Өвчний тархалтын болон биологийн хуульд нийцүүлж, өвчний эмнэлзүйн эмчилгээнд ч, өдөр тутмын ажил, амьдралын хэв маягтаа нийцүүлсэн арга хэмжээ авах шаардлагатай. </span><br></p>', '<div 0px=\"\" class=\"entry-content notopmargin clearfix body-part\" font-size:=\"\" margin-top:=\"\" roboto=\"\" style=\"box-sizing: border-box; position: relative; color: rgb(85, 85, 85); font-family: \">БНХАУ-ын Инженерийн шинжлэх ухааны академийн дэд ерөнхийлөгч, амьсгалын замын халдварын эксперт Ван Чэнь Лхагва гарагийн орой CCTV-д өгсөн ярилцлагадаа шинэ коронавирүсийн шалтгаант уушгины хатгалгаа нь томуу шиг урт хугацааны турш үргэлжилдэг архаг өвчин байж болзошгүй юм гэсэн байна.&nbsp;<br style=\"box-sizing: border-box;\" />\r\nТэрээр SARS нь халдварлах чадвар өндөртэй, үхлийн аюултай хэдий ч вирүс нь эзэн биеэ устгаснаар амьдрах газаргүй болдог бөгөөд вирүсийн халдварлалт хүмүүсийн дунд нэг их үргэлжлээд байдаггүй. Харин шинэ коронавирүсийн хувьд илүү амьдрах чадвар сайтай, тэсвэртэй бөгөөд томуугийн вирүстэй адил хүмүүстэй байнга зэрэгцэн орших боломжтой юм гэдгийг Ван хэлсэн байна.<br style=\"box-sizing: border-box;\" />\r\nВан: &ldquo;Бид үүнд бэлтгэлтэй байх хэрэгтэй&rdquo;. Өвчний тархалтын болон биологийн хуульд нийцүүлж, өвчний эмнэлзүйн эмчилгээнд ч, өдөр тутмын ажил, амьдралын хэв маягтаа нийцүүлсэн арга хэмжээ авах шаардлагатай. Энэхүү өвчнөөс сэргийлэх, хянах хамгийн хүчирхэг арга нь шинжлэх ухааны судалгаа, шинжлэх ухааны хууль, технологийн дэвшил зэргээс үүдэлтэй байх ёстой хэмээн хэлжээ. &nbsp;<br style=\"box-sizing: border-box;\" />\r\nГэмтсэн уушги эдгэрэх боломжтой<br style=\"box-sizing: border-box;\" />\r\nОдоо байгаа хязгаарлагдмал ажиглалтаар, шинэ коронавирүсийн шалтгаантайгаар уушгины үйл ажиллагаа нь алдагдагдсан өвчтнүүд эдгэрч байгаа, бүр бүрэн эдгэрч байгаа бөгөөд үүнд урт хугацааны ажиглалт шаардлагатай. &nbsp;<br style=\"box-sizing: border-box;\" />\r\nШинж тэмдэггүй өвчтнүүдийн илрүүлэг, эмчилгээ<br style=\"box-sizing: border-box;\" />\r\nОдоогоор шинж тэмдэггүй халдварын тохиолдлыг илрүүлэхдээ ихэвчлэн нуклейн хүчлийн сорилыг ашиглаж байгаа бөгөөд дараа нь эсрэг төрөгч, эсрэг биеийн сорилыг мөн хэрэглэнэ. Эдгээр нь бүгдээрээ илрүүлэг хийхэд үр дүнтэй аргууд юм.&nbsp;<br style=\"box-sizing: border-box;\" />\r\nАрга хэмжээ болон эмүүд нэмэгдэж байна<br style=\"box-sizing: border-box;\" />\r\nЭнэхүү вирүсийг эмчлэх нилээн олон арга, эм байгаа боловч тэдгээрийг бүгдийг туршиж үзэж байгаа бөгөөд аль нь ч нотолгоогүй байгааг Ван онцлов.&nbsp;<br style=\"box-sizing: border-box;\" />\r\nЭнэ нь шинэ өвчин бөгөөд түүний байнгын байх эсэх нь тодорхойгүй хэвээр байна. Эмчилгээ нь хэдий нилээд ойлгомжтой болж байгаа ч бидний энэ өвчний талаархи ойлголт өнгөц хэвээр байгаа бөгөөд шинэ эм, эмчилгээний эрэл, хайгуулын ажил дөнгөж эхний шатандаа л явж байна гэж Ван хэлээд судалгааны явцыг хурдасгахдаа шинжлэх ухааны үндэслэл, нотолгоог хүндэтгэн үзэхийг уриалав.&nbsp;<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nЭх сурвалж: https://news.cgtn.com/news/2020-02-20/Expert-Novel-coronavirus-may-be-as-persistent-as-flu-OeY8DoiFPO/index.html<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nCgtn (https://news.cgtn.com/news/2020-02-20/Expert-Novel-coronavirus-may-be-as-persistent-as-flu-OeY8DoiFPO/index.html)<br style=\"box-sizing: border-box;\" />\r\nExpert: Novel coronavirus may be as persistent as flu</div>\r\n\r\n<div class=\"shares-buttons\" font-size:=\"\" roboto=\"\" style=\"box-sizing: border-box; color: rgb(85, 85, 85); font-family: \">\r\n<div class=\"row\" style=\"box-sizing: border-box; margin-left: -15px; margin-right: -15px;\">\r\n<div class=\"col-md-4\" style=\"box-sizing: border-box; position: relative; min-height: 1px; padding-left: 15px; padding-right: 15px; float: left; width: 227.547px;\">\r\n<div class=\"fb-like fb_iframe_widget\" data-action=\"like\" data-href=\"https://www.mohs.mn:443/news/4304\" data-layout=\"button_count\" data-share=\"true\" data-show-faces=\"false\" data-size=\"large\" fb-iframe-plugin-query=\"action=like&amp;app_id=1670020999902664&amp;container_width=198&amp;href=https%3A%2F%2Fwww.mohs.mn%2Fnews%2F4304&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=false&amp;size=large\" fb-xfbml-state=\"rendered\" style=\"box-sizing: border-box; position: relative; margin: 0px; width: 197.547px;\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 1582775505, 1583377563, 56, 1, 3, 2),
(47, 13, 'img/news/powermn_1583377518.png', '', 'img/news/powermn_1583377518.jpg', '0', 'ДЭМБ-ын Зөвлөх баг энэ сарын 2-11-ний хооронд манай улсад ажиллана', '<p><span xss=\"removed\">ДЭМБ-ын зөвлөх баг Коронавируст халдвар (COVID-19)-ын эрчимт эмчилгээ, яаралтай түргэн тусламж, халдварын сэргийлэлт, хяналтын</span><span xss=\"removed\"> чиглэлээр 3 дугаар сарын 2-11 хооронд манай улсад ажиллана. </span><br></p>', '<p style=\"text-align: justify;\">ДЭМБ-ын зөвлөх баг Коронавируст халдвар (COVID-19)-ын эрчимт эмчилгээ, яаралтай түргэн тусламж, халдварын сэргийлэлт, хяналтын чиглэлээр 3 дугаар сарын 2-11 хооронд манай улсад ажиллана. Энэ хугацаанд ХӨСҮТ, Цэргийн төв эмнэлэг, Чингэлтэй дүүргийн нэгдсэн эмнэлэг, Эрүүл мэндийн төв, Сэлэнгэ, Өмнөговь аймагт ажиллах юм.<br />\r\nЭрүүл мэндийн сайд Д.Сарангэрэл, Дэд сайд Л.Бямбасүрэн болон яамны удирдлагууд ХӨСҮТ-д ажиллаж байгаа ДЭМБ-ын зөвлөх багтай цахимаар холбогдож, цаашид манай улсад ажиллах хугацаанд хийж хэрэгжүүлэх үйл ажиллагааны төлөвлөгөөний талаарх мэдээллийг сонссон байна.&nbsp;</p>\r\n', 1583377518, 1583834027, 42, 1, 3, 1),
(48, 7, 'img/news/powermn_1583377959.png', '', 'img/news/powermn_1583377959.jpg', '0', 'М.П.Сингх: Энэтхэг Улс Монгол Улсаас коксжих нүүрс авах боломжтой', '<p><span xss=\"removed\">Үүнтэй холбогдуулж Монгол, Энэтхэгийн Засгийн газар хоорондын комиссын дарга Л.Оюун-Эрдэнэ өчигдөр </span><span xss=\"removed\">БНЭУ-аас Монгол Улсад суугаа Элчин сайд  М.П.Сингхтэй  уулзлаа.</span><br></p>', '<p style=\"text-align: justify;\">Монгол, Энэтхэг Улсын Засгийн газар хамтран хэрэгжүүлж буй Газрын тосны&nbsp; боловсруулах үйлдвэр байгуулах төсөл, Монголоос тус улс руу коксжих нүүрс экспортлох, туршилтын тээвэрлэлтийн асуудлаар харилцан мэдээлэл солилцож, хэлэлцээ хийхээр&nbsp; Монгол Улсын Сайд, ЗГХЭГ-ын дарга Л.Оюун-Эрдэнэ өнгөрсөн 01 дүгээр сард БНЭУ-д айлчилсан юм. Энэ айлчлалын дүнд хоёр орны хоорондын харилцаа, эдийн засаг, худалдааны хамтын ажиллагааг цаашид шинэ шатанд гаргах хэд хэдэн асуудлыг шийдвэрлэсэн юм. Үүнтэй холбогдуулж Монгол, Энэтхэгийн Засгийн газар хоорондын комиссын дарга Л.Оюун-Эрдэнэ өчигдөр БНЭУ-аас Монгол Улсад суугаа Элчин сайд&nbsp; М.П.Сингхтэй&nbsp; уулзлаа.<br />\r\nУулзалтын үеэр БНЭУ-ын Гадаад хэргийн сайд С.Жайшанкар ирэх 05 дугаар сард манай улсад айлчлахаар болсонтой холбоотой бэлтгэл ажил, Монгол, Энэтхэг хоёр улсын хооронд дипломат харилцаа тогтоосны 65 жилийн ой 2020 онд тохиож байгаатай холбогдуулж хамтарч хийх ажлууд болон Энэтхэгийн Засгийн газартай хамтран хэрэгжүүлэх Газрын тос боловсруулах үйлдвэрийн төслийн явц, Монголоос Энэтхэг улс руу коксжих нүүрс экспортлох, үүний туршилтын тээвэрлэлтийг ойрын үед хийх боломжуудын талаар, мөн сансрын хиймэл дагуул хөөргөх тухай асуудлыг талууд хөндөн ярилцлаа. Эдгээртэй холбогдуулж ЗГХЭГ-ын дарга Л.Оюун-Эрдэнийн зүгээс хэд хэдэн асуудлаар Элчин сайд М.П.Сингхэд хандаж албан ёсоор хариулт авсан юм.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/69f7b79431714e69cd770ea70f37e355.jpg\" style=\"width: 800px; height: 533px;\" /><br />\r\nБНЭУ-д коксжих нүүрс экспортлох асуудалд Засгийн газрын зүгээс ихээхэн ач холбогдол өгч ажлын хэсэг байгуулсан. Хэрэв Энэтхэгийн тал зөвшөөрвөл коксжих нүүрсний туршилтын тээвэрлэлтийг ойрын хугацаанд хийх хүсэлтэй байгаагаа ноён Элчин сайдад илэрхийллээ. Цаашид Энэтхэг улс руу коксжих нүүрс экспортлохоор бол ОХУ-аар дамжуулж төмөр замаар тээвэрлэх боломж байгаа. Учир нь 2018 онд &ldquo; Төмөр замаар дамжин өнгөрөх ачаа тээвэрлэх нөхцөлийн тухай МУ-ын Засгийн газар, ОХУ-ын Засгийн газар хоорондын хэлэлцээр&rdquo;-ийн дагуу Энэтхэг улс руу нүүрс тээвэрлэлт хийх боломж байгаа юм. Уг хэлэлцээрт манай улсын экспортын бараа, бүтээгдэхүүнийг ОХУ-аар дамжуулан гуравдагч зах зээлд гаргах тохиолдолд 25 жилийн турш тогтвортой тарифын хөнгөлөлт эдлэхээр заасан байдаг. ОХУ-ын тал дамжин өнгөрөх тээвэрлэлтдээ Монгол Улсад нааштай хандахаа илэрхийлсэн байна. Энэтхэгийн Засгийн газрын зүгээс Монголын коксжих нүүрсний&nbsp; чанарыг шаардлага хангаж буй учир экспортлох бүрэн боломжтой гэж үзэж байгааг Элчин сайд М.П.Сингх энэ үеэр албан ёсоор илэрхийлсэн. Тус улс тээвэрлэлтийн хувьд хувьд ч ОХУ-тай төмөр замын тээвэрлэлтийн хөнгөлөлт эдлэх хамтын ажиллагаатай учир коксжих нүүрсийг Монголоос авахад ямар нэгэн хүндрэл үүсэхгүй хэмээн тооцож байна гэсэн юм.<br />\r\nМонгол, Энэтхэг Улсын хооронд дипломат харилцаа тогтоосны 65 жилийн ойд Монгол Улсын Засгийн газраас ихээхэн ач холбогдол өгч байгаа гээд соёл, боловсролын&nbsp; салбарын шилдэг 65 залууг харилцан солилцож туршлага судлуулах саналыг Энэтхэгийн талд гаргаж байгаагаа Сайд&nbsp; Л.Оюун-Эрдэнэ танилцуулав.<br />\r\n&nbsp;</p>\r\n', 1583377959, 1583833580, 48, 1, 3, 3);
INSERT INTO `posts` (`id`, `menu`, `pic`, `pics`, `bigpic`, `ontsloh`, `title`, `description`, `content`, `created`, `updated`, `visited`, `visible`, `order`, `mostread`) VALUES
(49, 9, 'img/news/powermn_1583378298.png', '', 'img/news/powermn_1583378298.jpg', '0', 'Зайсангийн гүүр-Маршалын гүүрийг холбосон авто зам тавигдана', '<p><span xss=\"removed\">Маршалын гүүрнээс Улиастайн уулзвар  хүртэлх замд Туул голын хойд талын далангийн дагуу 7,1 км дугуйн зам барих  бөгөөд одоогийн байдлаар дугуйн замын далан барих ажил 80 хувийн гүйцэтгэлтэй байна. </span><br></p>', '<p style=\"text-align: justify;\"><br />\r\nНийслэлийн Засаг дарга бөгөөд Улаанбаатар хотын Захирагч С.Амарсайхан, Улаанбаатар хотын ерөнхий менежер бөгөөд ажлын албаны дарга Т.Гантөмөр, Хан-Уул дүүргийн Засаг дарга Ж.Алдаржавхлан болон нийслэлийн харьяа байгууллагуудын удирдлагын хамтаар Нийслэлийн Засаг даргын Явуулын ажлын байр /автобус/-даа суун Хан-Уул дүүрэгт ажиллалаа.&nbsp;<br />\r\nМаршалын гүүрнээс Улиастайн уулзвар&nbsp; хүртэлх замд Туул голын хойд талын далангийн дагуу 7,1 км дугуйн зам барих&nbsp; бөгөөд одоогийн байдлаар дугуйн замын далан барих ажил 80 хувийн гүйцэтгэлтэй байна.&nbsp; Явган хүний зам, дугуйн зам гээд нийт 3 метрийн өргөнтэй, асфалтан хучилттай гэрэлтүүлэг, амрах талбайтай, хамгаалалтын хайстай, хяналтын камер, зүлэгжүүлэлт тохижилттой гэх зэрэг&nbsp; олон улсын жишигт нийцсэн стандартын дагуу хийгдэхээр төлөвлөгдөж байгаа аж.&nbsp; Дугуйн замыг ашиглалтад оруулахад нэмж хөрөнгө шийдвэрлэх шаардлагатай байгаа талаар гүйцэтгэгч компанийн зүгээс дуулгасан юм. Хотын Захирагч шаардлагатай хөрөнгийн судалгааг яаралтай гаргаж танилцуулахыг холбогдох албаныханд даалгаад, ирэх 5 дугаар сард дугуйн замыг хийж дуусгахыг үүрэг болгов.<br />\r\nУлаанбаатар хотод нэмж найман байршилд дугуйн зам байгуулах ажлыг зохион байгуулж байгаа бөгөөд төлөвлөгдөж байгаа хэд хэдэн байршлуудад газар дээр нь очиж нөхцөл байдлыг нь шалгалаа. Хотын Захирагч хэлэхдээ &ldquo;Явган хүний замыг өргөтгөж дугуйн замтай болгох асуудлыг стандартын дагуу хийх ёстой. Зарим аж ахуйн нэгжүүд нийтийн эзэмшлийн талбайг хашиж явган хүн явах боломжгүй нарийнхан болгосон байна. Газар зохион байгуулалтын алба үүнд анхаарч хуулийн дагуу арга хэмжээ авах хэрэгтэй&rdquo; гэсэн юм.<br />\r\nМөн Хан-уул дүүрэгт байрлах Удирдлагын академийн эзэмшил талбайд байдаг Д.Сүхбаатар жанжны хөшөөний хэсэг хувийн компанийн эзэмшилд орсон&nbsp; нөхцөл байдлыг тодруулж, газрын эрхийг нь хүчингүй болгож, орчимын тохижилтын ажлыг хийж гүйцэтгэхийг Улаанбаатар хотын Захирагчийн ажлын алба, Хотын стандарт, орчны аюулгүй байдал, хяналт зохицуулалтын газрын удирдлагуудад&nbsp; даалгалаа.</p>\r\n\r\n<p style=\"text-align: justify;\">Түүнчлэн Хан хиллс хотхоны арын замаар чанх хойш Хүннү хороолол руу холбох авто замын орц гарц нээх, Зайсангийн гүүрнээс Ривер Гарден хүртэлх замын түгжрэлийг арилгахын тулд Туул голын хойд хэсгээр Зайсангийн гүүр-Маршалын гүүрийг холбох холбоос зам бий болгох, Туул гол дагуу энэ зун баригдах дугуй, явган болон авто замын кадастр дагуу зөвшөөрөлгүй баригдсан хашааг буулгах чиглэлийг хотын Захирагч холбогдох албаны хүмүүст өглөө.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/HUDzasag24_20200304104414%281%29.jpg\" style=\"width: 1000px; height: 500px;\" /><br />\r\n<strong>Шинээр байгуулагдсан хороогоор зочиллоо</strong><br />\r\nНИТХ-ын ээлжит бус хуралдаанаар хороодын бүтэц, зохион байгуулалтад өөрчлөлт оруулах тухай асуудлыг хэлэлцэж, зарим дүүргүүдийн хүн амын тоо ихтэй хороодыг хувааж, нийслэл хот&nbsp; өмнө нь 152 хороотой байсныг 173 хороо болгож тоог нь нэмэгдүүлсэн.&nbsp; Уг шийдвэрийн хүрээнд хотын Захирагч шинээр байгуулагдсан Хан-уул дүүргийн 17 дугаар хорооны байраар орж, өрхийн эмнэлгийн үйл ажиллагааны талаар асууж тодруулан, шийдвэрлүүлэх шаардлагатай асуудал бий эсэхийг лавласан юм.<br />\r\nХан-уул дүүргийн 17 дугаар хороо нь&nbsp; нийт 3024 өрхтэй зургаан хэсгийн ахлагчтай бөгөөд хороо түрээсийн байранд орж, бүрэн тохижсон талаар хорооны Засаг дарга Т.Баттөгс Хотын даргад уламжиллаа.<br />\r\n&ldquo;Амгалан өрх&rdquo; өрхийн эрүүл мэндийн төвийн салбар төв тус хорооны байранд байрлаж байгаа бөгөөд одоогийн байдлаар эмнэлгийн ачаалал хэвийн, иргэдийг олноор цуглуулахгүй нь тулд гэрээр үзлэг хийж, цахимаар жор бичиж байгаа талаар өрхийн эмнэлгийн удирдлагууд дуулгав. Хотын Захирагч С.Амарсайхан яаралтай шийдвэрүүлэх асуудал бий эсэх талаар лавлахад эмнэлгийн зүгээс дуудлагын түргэний автомашинтай болох саналаа хэлсэн юм. Хотын Захирагч дүүргийн төсвөөр түргэний автомашиныг даруй шийдвэрлэх боломжтой хэмээгээд, коронавирусийн халдвараас урьдчилан сэргийлэхэд иргэдэд үнэн зөв мэдээлэл хүргэж, эмнэлгийн албан хаагчид шаардлагатай зүйлсээр хангаж ажиллах болно гэдгээ илэрхийллээ.<br />\r\nХотын Захирагч С.Амарсайхан тэргүүтэй албаныхан Хан-Уул дүүргийн Цагдаагийн байранд ажиллаж, тулгамдаж байгаа асуудал бий эсэх талаар санал солилцлоо. Цагдаагийн хэлстийн дарга, хурандаа Д.Манлайбаатар өнөөгийн нөхцөл байдлын талаар тодорхой танилцуулга мэдээлэл өгөөд, Мишээл экспо дахь ННҮГ-ын харъяа хяналтын камерын өрөөг цагдаагийн хэлтэст шилжүүлж, нэгтгэх саналтай байгаагаа илэрхийлсэн. Албаныхан тус асуудлыг судалж үзээд хариу өгөхөөр болсон юм.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n', 1583378298, 1583917803, 43, 1, 1, 0),
(50, 7, 'img/news/powermn_1583901392.png', '', 'img/news/powermn_1583732902.jpg', '0', 'Гурилын үйлдвэрүүд үйл ажиллагаагаа хэвийн үргэлжлүүлэх тухай мэдэгдэл гаргажээ', '<p><span xss=\"removed\">Бид нийт хэрэглэгчдийн эрх ашгийг бүх эрх ашгаас дээгүүрт тавьж ард түмний хэрэгцээнд нэн чухал шаардлагатай хүнсний өргөн хэрэглээний гурилыг ямарч гүтгэлэг, доромжлол, дайралтыг сөрөн үйлдвэрлэнэ гэдгээ албан ёсоор хариуцлагатайгаар мэдэгдэж байна.</span><br></p>', '<p style=\"text-align: center;\"><strong style=\"box-sizing: border-box;\">Мэдэгдэл</strong></p>\r\n\r\n<p font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify;\" text-align:=\"\">Хятад улсад шинэ корона вирусын халдвар гарсанаас хойш өнөөдрийн байдлаар нийт 79 улс оронд тархаж Дэлхийн Эрүүл Мэндийн Байгууллага онц байдал зарласан билээ. Олон улсын эдийн засгийн шинжээчдийн үзэж байгаагаар глобалчлагдсан эдийн засагт урьд хожид байгаагүй сөрөг үр дагавар, гарз хохирол учруулах магадлалтай хэмээн дүгнэж байна. Үүнээс үүдэн дэлхийн улс орнууд үндэсний аюулгүй байдал ард түмнийхээ эрх ашгийг хамгаалж дотооддоо өөр өөрсдийн арга хэмжээнүүдийг дор бүрнээ авч ажиллаж байгаагаас хамгийн чухал нь гол нэрийн барааны хүнсний нөөцийг бүрдүүлэх явдал юм.</p>\r\n\r\n<p font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify;\" text-align:=\"\">Гурилын үйлдвэрүүд хэдий хувийн хэвшил боловч ард түмэн, нийт хэрэглэгчдийнхээ өмнө ямар ч цаг мөчид стратегийн хүнс болох эрүүл, чанартай гурилаар тасралтгүй хангах үүрэг хариуцлага хүлээсэн үндэсний үйлдвэрлэгчид билээ.</p>\r\n\r\n<p font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify;\" text-align:=\"\">Өнөөдрийн энэ онцгой нөхцөл байдалд аль нэг гурилын үйлдвэр, аль нэг тариаланч, аль нэг импортлогч, албан тушаалтаны эрх ашгаас илүүтэйгээр Монгол Улсын эрх ашиг хамгийн чухал тул нэн яаралтай аюулгүйн нөөцийг бүрдүүлэх тал дээр бид бүхэн бүх хүчээ дайчлан ажиллах ёстой хэмээн манай холбоо үзэж байна. Хэн нэгэн өчүүхэн массын хувийн ашиг сонирхол, эрх ашиг яригдсаар байтал ард түмний чухал хэрэглээ болох гурил тасалдаж, талх үйлдвэрлэгдэхгүй болох тэр үед хэнийг буруутай гэж тогтоон хариуцлага тооцох вэ? Энэ үед хэнтэй ч хариуцлага тооцоход оройтсон байх бөгөөд үүний хор уршгийг нийт хэрэглэгчид, ард түмэн, гурилын үйлдвэр, тариаланчид, малчид гээд Монгол Улс тэр даяараа амсана.</p>\r\n\r\n<p font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify;\" text-align:=\"\">Монгол Улс жилд 240,000тн буюу сард 20,000тн орчим гурилын хэрэглээтэй. /Эх сурвалж: 2018 онд 239,324.6тн гурил үйлдвэрлэсэн Үндэсний Статистикийн Хороо/ Дээрх гурилыг үйлдвэрлэхэд дор хаяж 345,000тн хүнсний улаан буудай шаардлагатай. /Стандартын дагуу тарианы хольц 5%, гадны хольц 2%-ийг гурил үйлдвэрлэлд нийт буудайн тонн хэмжээнээс хасаж тооцно/ 2019 оны намрын ургацаас Хүнсний буудайн техникийн ерөнхий шаардлага MNS 0097-2010 стандатыг хангасан 240,000тн орчим улаан буудайг гурилын үйлдвэрүүд хүлээн авсан, энэ нь 163,200тн гурил юм. 2019 оны 09-р сараас гурилын хэрэглээг тооцвол 2020 оны 04-р сар гэхэд гурилын нөөц дуусахаар байгаа нь маш ойлгомжтой харагдаж байна. Бид ирэх намрын ургац хүртэл хангалттай нөөц бүрдүүлэх, цаашид аюулгүйн нөөцийг хангалттай хэмжээнд бий болгохын тулд 150,000тн-160,000тн улаан буудай буюу 102,000тн гурилыг нийт ард иргэдийн нийтлэг эрх ашгийн төлөө заавал үйлдвэрлэх нөхцөл байдал шаардлага үүсч байна.<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nГурил нь өргөн хэрэглээний гол нэрийн чухал хүнсний нэг байтал зах, дэлгүүрүүдэд сүүлчийн шуудай гурил зарагдаж дуусахад гурилын үйлдвэр улаан буудай хүлээн авах ёстой мэт хэмжээнд сэтгэж хардаг өчүүхэн бодолтой хэсэг бүлэг амин хувиа хичээгчид байдаг нь үнэхээр харамсалтай. Бүхэл бүтэн улс орны хэмжээний хүнсний нөөцийн асуудал нь хамгийн багадаа 3 сараар яригдах учиртай байтал улаан буудайн тасалдал үүсгэж гурил хомсдуулж өндөр үнэд хүргэх нь хэнд ашигтай вэ? Хэний эрх ашгийн төлөө нийт ард иргэдийн эрх ашгийг хойш нь тавьж байна вэ?<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nГурил үйлдвэрлэл нь олон зуун жилийн туршид өөрийн гэсэн технологийн хүрээнд өргөжин хөгжиж өнөөгийн түвшинд хүрсэн бөгөөд үйлдвэрлэлийн эрин үеэс эхлэн дэлхийн аль ч улс оронд гахайн тэжээлээр гурил үйлдвэрлэж байсан түүх үгүй билээ. Одоогийн байдлаар Монгол Улсад гурилын үйлдвэрлэл явуулж буй үйлдвэрүүд нь дэлхийн шилдэг Швецарын Булер, Туркийн Алапала брэндийн үйлдвэрүүдийн хамгийн сүүлийн үеийн бүрэн автомат, орчин үеийн техник тоног төхөөрөмжүүдийг ашиглаж байна.<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nМонгол Улс өөрийн гэсэн хүнсний үйлдвэрийн хууль тогтоомж, стандарт, норм, дүрэм, журамтай ба үүнийг хэрэгжүүлж, хянаж ажилладаг бүхэл бүтэн тохируулагч, хэрэгжүүлэгч агентлагуудын бие даасан үйл ажиллагааны хүрээнд ганц хүнсний улаан буудай ч биш бүх төрлийн хүсний бүтээгдэхүүнүүд зохих шинжилгээ, хяналт хийгдэж зөвшөөрөгдсөний эцэст импортоор орж ирдэг.<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nЭцсийн дүндээ ямар ч үйлдвэрлэгч үйлдвэрлэлээ тогтвортой, урт хугацаанд үр өгөөжтэй ажилуулахын тулд хэрэглэгчид хамгийн сайн, эрүүл, аюулгүй чанартай бүтээгдэхүүн үйлдвэрлэн нийлүүлж байж оршин тогтнодог нь өнөөгийн нийгэм, зах зээлийн үндэс суурь юм. Ганц гурил үйлдвэрлэгчид гэлтгүй бүх хувийн хэвшлийн байгууллагууд хэзээ ч улсын төсвөөс санхүүжиж, татвар төлөгчдийн мөнгөөр үйл ажиллагаагаа явуулдаггүй гэдгийг мэдэдгүй, мэддэг хэрнээ мэдэхгүй царайлж, өөрсдийн ухамсар дорой, явцуу эрх ашгаа гайхуулж олон нийтийг худал мэдээлэлээр төөрөгдүүлэн турхирч өөрсдийн өчүүхэн эрх ашгийн төлөө ашиглах сонирхолтой хэсэг бүлэг этгээдүүдэд хууль хяналтын байгууллагууд зохих хариуцлагыг тооцно гэдэгт найдаж байна.<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nХэрэглэгч, үйлдвэрлэгч, түүхий эд үйлдвэрлэгчийн аль нэг байхгүй бол тухайн бүтээгдэхүүн зах зээл дээр байх боломжгүй, үүнтэй адилаар гурилын үйлдвэр ажилгүй зогсвол намар тариаланчдаас буудай худалдан авч, гурил үйлдвэрлэх процесс доголдсоноор ганц гурилын үйлдвэр биш тариаланчдад ч мөн шууд сөрөг нөлөө үзүүлж эхлэнэ.<br style=\"box-sizing: border-box;\" />\r\n<br style=\"box-sizing: border-box;\" />\r\nБид нийт хэрэглэгчдийн эрх ашгийг бүх эрх ашгаас дээгүүрт тавьж ард түмний хэрэгцээнд нэн чухал шаардлагатай хүнсний өргөн хэрэглээний гурилыг ямарч гүтгэлэг, доромжлол, дайралтыг сөрөн үйлдвэрлэнэ гэдгээ албан ёсоор хариуцлагатайгаар мэдэгдэж байна.</p>\r\n\r\n<p style=\"text-align: center;\"><strong box-sizing:=\"\" font-size:=\"\" helvetica=\"\" style=\"font-family: \" text-align:=\"\">ГУРИЛ ҮЙЛДВЭРЛЭГЧДИЙН ХОЛБОО</strong></p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n', 1583732902, 1583901392, 109, 1, 1, 0),
(51, 7, 'img/news/powermn_1583901526.png', '', 'img/news/powermn_15839015552e3c68_Wheat_x974.jpg', '0', 'Тариаланчдад  улаанбуудайн 21.4 тэрбум төгрөгийн урамшуулал олгожээ', '<p><span xss=\"removed\">Тооцоо нийлсэн </span><span xss=\"removed\">баримтаа зохих журмын дагуу бүрдүүлэн Хөдөө аж ахуйг дэмжих санд ирүүлсэн тухай бүрд улаан буудайн мөнгөн урамшууллыг саадгүй олгох ажлыг зохион байгуулан ажиллаж байна.</span><br></p>', '<p style=\"text-align: justify;\">Монгол Улсын Засгийн газраас баталсан &ldquo;Мөнгөн урамшуулал олгох журам&rdquo;-ын дагуу 2019 оны ургацаас гурил үйлдвэрлэлд&nbsp; 247.8 мянган тонн хүнсний улаанбуудай&nbsp;нийлүүлсэн 12 аймгийн 802 аж ахуйн нэгж, иргэнд 22.9 тэрбум төгрөгийн мөнгөн урамшуулал олгохоос материалын бүрдүүлэлт, гурил үйлдвэрлэгчдээс авсан судалгаа, шалгалтын дүнг үндэслэн&nbsp;757 аж ахуйн нэгж, иргэний 223.0 мянган тонн хүнсний улаан буудайд 21.4 тэрбум төгрөгийн урамшуулал олгоод байгаа юм.</p>\r\n\r\n<p style=\"text-align: justify;\">Өмнөх жилүүдэд тариаланчдад мөнгөн урамшуулал олгох явцад тариалан бүхий зарим аж ахуйн нэгжүүд&nbsp; гурилын үйлдвэртэй гэрээ байгуулж, тооцоо нийлсэн акт, холбогдох бусад урамшууллын материалаа бүрдүүлж Тариалан эрхлэлтийг дэмжих санд (хуучин нэрээр) ирүүлсэн боловч уг буудай нь гурилын үйлдвэрийн агуулахад биш, тариалангийн аж ахуйн нэгжийн агуулах, элеваторт хадгалагдаж байсны улмаас буудайн тоо хэмжээ, чанар нь буурах, зарим тохиолдолд урамшуулалд хамрагдсан буудай&nbsp;нийлүүлэгдэхгүй болж тариаланчид, гурил үйлдвэрлэгчдийн хооронд маргаан, өр төлбөр&nbsp; үүсэж, хууль хяналтын байгууллагад шилжсэн тохиолдол гарч байсан.</p>\r\n\r\n<p style=\"text-align: justify;\">Тус яамнаас урамшууллын материалд хийсэн шалгалтын үр дүнгээр орон нутгаас ирүүлсэн мэдээлэл нь статистикийн&nbsp;мэдээтэй зөрсөн, тариалан бүхий аж ахуйн нэгжийн агуулахад байгаа буудайг гурил үйлдвэрлэлд хүлээн авсан мэтээр тооцоо нийлсэн, өмнөх жилүүдэд олгосон урамшуулалтай холбоотой зөрчил илэрсэн зэргээс шалтгаалан 45 иргэн, аж ахуйн нэгжийн 24.8 мянган тонн хүнсний улаан буудайд олгох 1.5 тэрбум төгрөгийн урамшууллыг одоогоор олгогдоогүй бөгөөд улаан буудайн урамшуулалтай холбоотойгоор ийм зөрчил дутагдал гаргуулахгүй байх,&nbsp;дүрэм,&nbsp;журмын хэрэгжилт хяналтыг сайжруулах шаардлага тавигдаж байна.</p>\r\n\r\n<p style=\"text-align: justify;\">Тиймээс шалгалтын дүнгээр зөрчилтэй гарсан аж ахуйн нэгж, иргэдийн агуулах, элеваторт хадгалагдаж байгаа дээрх хүнсний улаан буудай аль нэг гурилын үйлдвэрт бүрэн нийлүүлэгдэж, тооцоо нийлсэн&nbsp;баримтаа зохих журмын дагуу бүрдүүлэн Хөдөө аж ахуйг дэмжих санд ирүүлсэн тухай бүрд улаан буудайн мөнгөн урамшууллыг саадгүй олгох ажлыг зохион байгуулан ажиллаж байна.</p>\r\n', 1583833516, 1584340129, 151, 1, 2, 3),
(52, 13, 'img/news/powermn_1583833981.png', '', 'img/news/powermn_1583833981.jpg', '0', 'Нийтийн тээвэр энэ сарын 17-ны өдрийг хүртэл тусгай зохицуулалтаар үйлчилнэ', '<p><span xss=\"removed\">Өнгөрөгч 02 дугаар сарын 29-ны өдөр Франц-Москва-Улаанбаатар чиглэлийн онгоцоор ирсэн Франц улсын иргэн Б-ээс коронавирусийн сэжигтэй тохиолдол илэрч, Монгол Улсад коронавирусийн анхны тохиолдол бүртгэгдлээ.</span><br></p>', '<p style=\"text-align: justify;\">Улсын онцгой комисс өнөөдөр өглөө 06:00 цагт Шадар сайдын өрөөнд яаралтай хуралдаж шийдвэр гаргасны дараа үргэлжлүүлэн нийслэлийн Онцгой комисс хуралдаж, нийслэлийн хэмжээнд шинэ төрлийн халдвараас урьдчилан сэргийлэх, тархалтын хүрээг өргөжүүлэхгүй байх талаар авч хэрэгжүүлэх ажлыг эрчимжүүлэх талаар хэлэлцлээ.</p>\r\n\r\n<p style=\"text-align: justify;\">Өнгөрөгч 02 дугаар сарын 29-ны өдөр Франц-Москва-Улаанбаатар чиглэлийн онгоцоор ирсэн Франц улсын иргэн Б-ээс коронавирусийн сэжигтэй тохиолдол илэрч, Монгол Улсад коронавирусийн анхны тохиолдол бүртгэгдлээ. Түүнээс гадна, энэ хүнтэй хөдөө орон нутагт хавьталд байсан 80 гаруй хүн, Улаанбаатар хотод эхлээд уулзсан 40 гаруй хүний нэр, хаяг, утсыг олж тогтоожээ. Улсын онцгой комиссын шийдвэрээр хот хоорондын хөдөлгөөнийг энэ сарын 16-ны 07.00 цаг хүртэл хориглолоо.</p>\r\n\r\n<p style=\"text-align: justify;\">Нийслэлийн Онцгой комиссын хуралдаанаар сэжигтэй тохиолдлоор бүртгэгдсэн иргэний зорчсон, байрласан газруудыг нарийвчлан тогтоож, хавьталд орсон иргэдийг илрүүлэн эрүүл мэндийн тандалт судалгаа шинжилгээнд хамруулахыг хотын Захирагч С.Амарсайхан нийслэлийн Цагдаагийн удирдах газар болон нийслэлийн Эрүүл мэндийн газарт үүрэг болголоо. Мөн энэ сарын 17-ны өдрийг хүртэл нийтийн тээврийн үйлчилгээнд гарах автобусны тоог 50 хувиар бууруулах чиглэлийг нийслэлийн Нийтийн тээврийн газрын удирдлагуудад өглөө. Шаардлагатай тохиолдолд нийслэлийн нутаг дэвсгэрт үйл ажиллагаа явуулж өргөн хэрэглээний зах, худалдааны төвүүдийн ажлын цагийг хязгаарлах арга хэмжээг авч ажиллахыг холбогдох албаныханд үүрэг болгов. Энэ үеэр нийслэлийн Онцгой комиссын зарим гишүүдээс халдвараас урьдчилан сэргийлэхийн тулд олон хүнийг хамарсан хурал зөвлөгөөнийг онлайн хэлбэрээр хийж, түргэн хоол болон хүргэлтийн үйлчилгээ эрхэлдэг иргэн, аж ахуйн нэгжийн үйл ажиллагааг түр зогсоох арга хэмжээг авахыг санал гаргалаа.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/ontsgoikomisniislel103_20200310102728%282%29.jpg\" style=\"width: 750px; height: 375px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Нийслэлийн Засаг дарга бөгөөд Улаанбаатар хотын Захирагч С.Амарсайхан &ldquo;Халдвараас урьдчилан сэргийлэхийн ариутгал халдваргүйжүүлэлтийг эрчимжүүлж, шалган нэвтрүүлэх товчоодоор яаралтай тусламж авах, зайлшгүй албан ажлаар нэвтрэх иргэдээс нэг бүрчлэн асуумж авч биеийн халууныг нь хэмжиж нэвтрүүлэх ажлыг эрчимжүүлэх хэрэгтэй. Өндөржүүлсэн бэлэн байдалд ажиллаж байгаа албан хаагчдын эрүүл ахуй байдал, хамгаалах хэрэгслээр хангаж ажиллахыг холбогдох албаныхан анхаараарай&rdquo; гэдгийг онцолж хэллээ. Түүнчлэн иргэдийг олон нийтийн газраар зорчихгүй байж, хувийн ариун цэврийг сайтар хангахыг уриаллаа.</p>\r\n', 1583833981, 1586925564, 143, 1, 3, 2),
(53, 7, 'img/news/powermn_1583901817.png', NULL, '', '0', 'Нөөцийн мах худалдаанд гарч эхэллээ', '<p><span xss=removed>Нийслэлийн хүн амын 2020 оны хаврын улирлын хүнсний хэрэгцээнд зориулан нийт 12.0 мянган тонн махыг бэлтгэсэн. </span><br></p>', '<p style=\"text-align: justify;\">Нийслэлийн хүн амын 2020 оны хаврын улирлын хүнсний хэрэгцээнд зориулан нийт 12.0 мянган тонн махыг бэлтгэсэн. Бэлтгэсэн махыг Улаанбаатар хотын 6 дүүргийн, 140 хорооны&nbsp; 279 хүнсний дэлгүүрт 2020 оны 3 дугаар сарын 11-ний өдрөөс эхлэн худалдаанд гаргаж эхэллээ.&nbsp; Бэлтгэж, нөөцөлсөн үхрийн ястай мах 7700 төг/кг, хонины ястай мах 6700 төг/кг, ямааны ястай мах 6200 төг/кг-ийн үнээр худалдан борлуулна.</p>\r\n\r\n<p style=\"text-align: justify;\">Нөөцийн мах худалдаалж буй хаяг байршлыг энд дарж үзнэ үү.</p>\r\n', 1583901817, 1583901817, 126, 1, 2, 0),
(54, 13, 'img/news/powermn_1583902130.png', '', 'img/news/powermn_1583902130.jpg', '0', 'Нийслэлээс цаг үеийн мэдээ, мэдээллийг онлайнаар хүргэж эхэллээ', '<p><span xss=\"removed\">Дэлхий нийтэд тархаад буй “Ковид-19” өвчлөл Монгол улсад гадны улсаас зөөвөрлөгдөн орж ирсэн. </span><br></p>', '<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"360\" src=\"//www.youtube.com/embed/0_UeV1FPSBY\" width=\"640\"></iframe></p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Дэлхий нийтэд тархаад буй &ldquo;Ковид-19&rdquo; өвчлөл Монгол улсад гадны улсаас зөөвөрлөгдөн орж ирсэн. Үүнтэй холбоотойгоор Нийслэлийн Засаг Дарга урьдчилан сэргийлэх ажлыг эрчимжүүлэх үүрэг чиглэлийг НЗДТГ-ын Хэвлэл мэдээлэлтэй харилцах хэлтэст өгсөн. Цаашид Нийслэлээс цаг үеийн мэдээ, мэдээлэл, бодлого шийдвэрийг иргэдэд хүргэх хэвлэлийн бага хурал зэргийг онлайн хэлбэрт шилжүүллээ.</p>\r\n', 1583902130, 1583902208, 37, 1, 1, 1),
(55, 13, 'img/news/powermn_1583917552.png', '', 'img/news/powermn_1583917552.jpg', '0', 'Урьдчилсан байдлаар 23 хүний лабораторийн хариу халдваргүй гарлаа', '<p><span xss=\"removed\">“ДЭМБ-ийн байгууллагын гуравдугаар сарын 10-ны мэдээллээр дэлхийн 109 улсад COVID-19 халдварын нийт 113.702 тохиолдол бүртгэгдэж, 24 цагийн дотор дэлхийн хэмжээнд 203 хүн нас барж, нийт нас баралтын тоо 4.012 болжээ.</span><br></p>', '<p style=\"text-align: justify;\">Эрүүл мэндийн яамнаас COVID-19 халдварын нөхцөл байдлын мэдээллээ хийлээ. Өчигдөр тусгаарласан нэгдүгээр хавьтал болох ХӨСҮТ-д тусгаарласан 98 хүний урьдчилсан байдлаар 20 гаруй&nbsp; хүний лабораторийн хариу халдваргүй гарлаа.&nbsp; Бид хавьтлуудыг дэс дараатай, цаг хугацааны дараалалтай цуглуулсан тул&nbsp; шинжилгээний хариунууд ар араасаа гарч&nbsp; байна.<br />\r\nДЭМБ-ын ажилтан О.Ариунтуяа,&nbsp;<br />\r\n&ldquo;ДЭМБ-ийн байгууллагын гуравдугаар сарын 10-ны мэдээллээр дэлхийн 109 улсад COVID-19 халдварын нийт 113.702 тохиолдол бүртгэгдэж, 24 цагийн дотор дэлхийн хэмжээнд 203 хүн нас барж, нийт нас баралтын тоо 4.012 болжээ.<br />\r\nМөн сүүлийн 24 цагийн хугацаанд шинээр таван оронд халдвар бүртгэгдсэн байна. Харин БНХАУ-д 17 нас баралт, 20 тохиолдол шинээр бүртгэгдсэн бол БНСУ-д 131 тохиолдол шинээр бүртгэгдэж, өвчний тархалт буурах хандлагатай байна. БНСУ-д нийт 180 мянга гаруй хүнд лабораторийн шинжилгээ хийхэд 89 хувьд нь халдвар илрээгүй.<br />\r\nИтали улсад 1,797 тохиолдол шинээр бүртгэгдэж, нийт тохиолдлын тоо 10 мянга даван, нас барсан хүний тоо 631-д хүрч, хоногт 168 хүн нас баржээ. Харин Иранд 595 тохиолдол шинээр нэмэгдсэн нь тус улс БНХАУ-аас гадна олон тооны халдвар бүртгэгдсэн гурван орны тоонд орж байгаа юм.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/EMY_4397.jpg\" style=\"width: 800px; height: 533px;\" /><br />\r\nХӨСҮТ-ийн ерөнхий захирал Д.Нямхүү,</p>\r\n\r\n<p style=\"text-align: justify;\">2020 оны гуравдугаар сарын 9-ний өдөр ХӨСҮТ-д тусгаарлагдсан долоон хүний шинжилгээнд коронавирус илрээгүй.<br />\r\n2020 оны 3 дугаар сарын 10-нд ХӨСҮТ-д сэжигтэй дөрвөн тохиолдол тусгаарлагдаж, тандалт судалгаа хийгдэж байна. Мөн ажиглалтад ХӨСҮТ-д 103, Жаргалант сувилалд зургаа, Асралт мед эмнэлэгт 23 хүн байна. Нийтдээ 132 хүнийг тусгаарлалтад аваад байна.<br />\r\nФранц иргэний биеийн байдал хүндэвтэр байна. Бид БНСУ, Япон, Италийг ажиглаж, мэдээг нь дамжуулж байгаа шиг дэлхий нийт бас манайхыг ажиглаж байгаа. Тиймээс монгол хүний ёс жудагийг харуулах ёстой. Монгол эмч нарын чадварыг гаргаж, энэ хүнийг эмчилж чадвараа үзүүлэх ёстой. Энэхүү Франц иргэн ажиглалтад байх хугацаандаа үүргээ биелүүлж, халуурч эхлэнгүүтээ Дорноговийн эмнэлэгт хандсан. Хэрвээ мэдээлээгүй, алдаа гаргаж удсан бол ямар хэмжээнд очих вэ гэдгийг бодолцох хэрэгтэй.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/EMY_4409.jpg\" style=\"width: 800px; height: 533px;\" /><br />\r\nХӨСҮТ-ийн Тандалт судалгааны албаны дарга А.Амбасэлмаа,&nbsp;<br />\r\n40 орчим хүний бүрэлдэхүүнтэй халдвар судалгаа хийх баг хоёр шөнө нойргүй хонож, нийт 338 хүнээс асуумж, судалгаа авч ажиллалаа. Энэ дотроос 171 хүнийг ойрын хавьтал гэж авч үзэж тусгаарласан. Үүнээс&nbsp; 98 хүнийг ХӨСҮТ-д тусгаарласан бол халдвартай хүнтэй вагонд сууж явсан 28 хүнийг аймгийн төвд нь ажиглалтад тусгаарласан. Мөн камп дээр нь 64 хүнийг ойрын хавьтал гэж үзэж тусгаарласнаас гадна Орхон, Сэлэнгэ, Увс аймаг болон Налайх дүүрэгт хүмүүс тусгаарлагдсан байгаа. Тэдгээр хүмүүсийн шинжилгээний дээжийг авсан.<br />\r\nОдоогоор нийтдээ 171 хүний шинжилгээ хийгдэж байгаа бөгөөд урьдчилсан байдлаар 23 хүний шинжилгээнд COVID-19 илрээгүй гарсан.<br />\r\nӨчигдөр шөнийн 23:00, 00:00 цагт ар араасаа ирсэн хүмүүсийн шинжилгээ удахгүй гарна. Франц иргэнийг хаагуур явсныг дахин нарийн тодорхой болгож, хавьтлын хавьтлуудыг цааш нь гүнзгийрүүлж судална.<br />\r\n&nbsp;</p>\r\n', 1583917552, 1584339973, 135, 1, 1, 0),
(56, 13, 'img/news/powermn_1583991061.png', '', 'img/news/powermn_1583991061.jpg', '0', ' ДЭМБ коронавирусийг пандеми буюу цар тахлын хэмжээнд хүрснийг зарлалаа ', '<p><span xss=\"removed\">Дэлхийн эрүүл мэндийн байгууллагаас (ДЭМБ) COVID-19-н пандеми буюу цар тахлын хэмжээнд хүрснийг зарлалаа. </span><br></p>', '<p style=\"text-align: justify;\">Дэлхийн эрүүл мэндийн байгууллагаас (ДЭМБ) COVID-19-н пандеми буюу цар тахлын хэмжээнд хүрснийг зарлалаа. Олон хүнийг хамарч, дэлхий нийтээр тархах үед цар тахал хэмээн тодорхойлдог байна. Үүнийг зөвхөн ДЭМБ зарладаг.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"360\" src=\"//www.youtube.com/embed/9mT0zFR9us8\" width=\"640\"></iframe></p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n', 1583991061, 1586925519, 129, 1, 2, 2),
(57, 7, 'img/news/powermn_1584008658.png', NULL, '', '0', 'Төл бойжилт  98.3 хувьтай байна', '<p><span xss=removed>Өнгөрсөн 7 хоногт Завхан, Хөвсгөл, Архангай, Булган, Орхон, Төв аймгуудын ихэнх нутаг, Ховд, Увс, Завхан, Говь-Алтай, Өвөрхангай, Дундговь, Дорноговийн хойд, Хэнтийн баруун, Дорнодын өмнөд, Баян-Өлгий, Өмнөговь, Дорнодын зарим газраар  0.0-8.4 мм цас орсноос хамгийн их нь Ховдын баруун хойд, Улаанбаатар орчмоор 5.7-8.4 мм, бусад нутгаар 0.0-5.3 мм цас орсон байна.</span><br></p>', '<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/C8vJFbzU0AE1MYk.jpg\" style=\"width: 900px; height: 675px;\" /><br />\r\nӨнгөрсөн 7 хоногт Завхан, Хөвсгөл, Архангай, Булган, Орхон, Төв аймгуудын ихэнх нутаг, Ховд, Увс, Завхан, Говь-Алтай, Өвөрхангай, Дундговь, Дорноговийн хойд, Хэнтийн баруун, Дорнодын өмнөд, Баян-Өлгий, Өмнөговь, Дорнодын зарим газраар&nbsp; 0.0-8.4 мм цас орсноос хамгийн их нь Ховдын баруун хойд, Улаанбаатар орчмоор 5.7-8.4 мм, бусад нутгаар 0.0-5.3 мм цас орсон байна.</p>\r\n\r\n<p style=\"text-align: justify;\">2020 оны 03 сарын 09-ны өдрийн&nbsp; мэдээгээр Баян-Өлгий, Увс, Завхан, Хөвсгөл, Архангай, Булган, Сэлэнгэ, Төв, Хэнтий, Дорнод, Сүхбаатарын нутаг, Ховд, Говь-Алтайн хойд зах, Баянхонгор, Өвөрхангай, Дундговь, Дорноговийн хойд хэсгээр 1.0-38.0 см зузаан цасан бүрхүүл тогтсоноос хамгийн их нь Завханы Баянтэсд 38.0 см, Их-уулд 34.0 см, Тосонцэнгэлд 32.0 см, Цагаан-хайрханд 27.0 см, Увсын Хяргаст 28.0 см, Малчинд 26.0 см, Баруунтуруунд 22.0 см, Завханы Тэсд&nbsp; 28.0 см, Ярууд 25.0см, Улиастайд 24.0 см, Хөвсгөлийн Жаргаланд 25.0 см, Галтад 24.0 см, Архангайн Өлзийтөд 23.0 см, Булганы Баян-Агтад 25.0см&nbsp; зузаан цастай&nbsp; байна.&nbsp; Энэ оны 3 дугаар сарын 01-ний үнэлгээгээр 8 аймгийн 40 суманд цагаан зудын,&nbsp; 12 аймгийн 47 сум цагаанаар зудархуу байдалтай байна.</p>\r\n\r\n<p style=\"text-align: justify;\">Оны эхэнд 30.8 сая хээлтэгч мал тоологдсон бөгөөд одоогийн байдлаар 209.5 мянган эх мал төллөж, төл бойжилт 98.3 хувьтай, төллөвөл зохих нийт малын 0.7 хувь төллөсөн байна.</p>\r\n\r\n<p style=\"text-align: justify;\">Том малын зүй бус хорогдол одоогийн байдлаар оны эхний нийт малын 0.27 хувийг эзэлж байна.</p>\r\n\r\n<p style=\"text-align: justify;\">Хүнс хөдөө аж ахуй, хөнгөн үйлдвэрийн яамны Мөл аж ахуйн хөгжлийн бодлого зохицуулалтын газар зарим гурилын үйлдвэрүүдтэй уулзалт зохион байгуулж 1 тн хивгийг дунджаар 470.0 мянган төгрөгөөр худалдаалж байсныг 10 хүртэл хувиар хивгийг хямдруулж борлуулахаар харилцан тохиролцсон. Үүнтэй холбогдуулан аймаг, нийслэлийн засаг дарга нарт мал хаваржилтад шаардлагатай тэжээлийг нэгдсэн байдлаар шуурхай худалдан авах арга хэмжээ авах тухай сайдын 01/854 дугаар албан бичгийг хүргүүлсэн. Дээрх зохицуулалтын арга хэмжээний хүрээнд&nbsp; өнгөрсөн&nbsp; 7 хоногт&nbsp; Булган аймаг 87 тн хивэг, Архангай аймаг 50 тн хивгийг &ldquo;Улаанбаатар гурил&rdquo; ХХК-аас авсан байна. Өвөрхангай аймаг &ldquo;Милл хаус&rdquo; ХХК-тай 500 тн хивэг худалдан авахаар хэлэлцэж байна. Мөн Хөвсгөл аймгийн Рашаант сум 50 тн хивгийг Дархан -Уул аймаг дахь &ldquo;Улаанбаатар гурил&rdquo; ХХК-ийн&nbsp; салбараас худалдан авах үнийн зохицуулалт хийж байна.</p>\r\n\r\n<p style=\"text-align: justify;\">Засгийн газраас улсын нөөцийн 3713 тн өвсийг үнэгүй, 3025 тн тэжээлийг 50 хувь хямдруулан олгох, отор ихтэй 7 аймагт тус бүр 50.0 сая нийт 350.0 сая төгрөг, эрүүл мэнд, нийгэм, онцгой байдлын үед үзүүлэх үйлчилгээг дэмжиж 17 автомашин олгов.</p>\r\n\r\n<p style=\"text-align: justify;\">Монголын улаан загалмай нийгэмлэгээс&nbsp; Архангай /3/, Булган /5/, Говь-Алтай /15/, Хэнтий /6/, Ховд /7/, Өвөрхангай /19/, Увс /4/, Сүхбаатар /2/ 8 аймгийн 61 сумын 1000 эмзэг бүлгийн малчин өрхөд тус бүр 240.0 мянган төгрөг, 115.0 мянган төгрөгийн малын эрдэс тэжээлийн багцын /малын долооц, загасны тос, амин тун, нүдний тос, туурайн тос/ нийт 355.0 сая төгрөгийн тусламж үзүүлэв.</p>\r\n\r\n<p style=\"text-align: justify;\">Одоо Баян-Өлгий, Баянхонгор, Дархан-Уул, Дорнод, Завхан, Орхон, Сэлэнгэ, Төв, Увс, Хөвсгөл, Дундговь зэрэг 10 аймгийн 44 сумын 1028 өрх&nbsp; тус бүрт&nbsp; 240,000 төгрөг, 127.0 мянган төгрөгийн малын эрдэс тэжээлийн багц олгохоор бэлтгэж байна. Хөвсгөл аймагт энэ ажлыг 03 дугаар сарын 15-наас эхлэн зохион байгуулахаар&nbsp; ажиллаж байна.&nbsp;&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">НҮБ-ын ХХААБ-аас Дундговь /10-200/, Дорноговь /5-100/, Төв /5-100/, Баян-Өлгий /2-50/ зэрэг 4 аймгийн 450 өрх тус бүрт 275.0 мянган төгрөг, 145.0 мянган төгрөгийн малын эрдэс, амин дэмийн багц нийт 189.0 сая төгрөгийн тусламж үзүүлсэн байна.&nbsp;&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Шүлхийгээс сэргийлэх вакцинжуулалт Улаанбаатар хот, Төв аймагт одоо явагдаж байна. Нийт 459.5 мянган толгой малд вакцин хийхээс өнөөдрийн байдлаар 97.5 мянган толгой&nbsp; малд&nbsp; хийж 16.7 хувьтай байна.</p>\r\n', 1584008658, 1584008658, 109, 1, 1, 0),
(58, 13, 'img/news/powermn_1584339953.png', '', 'img/news/powermn_1584339953.jpeg', '0', 'БНСУ-аас 244 иргэнийг тээвэрлэн авч ирлээ', '<p><span xss=\"removed\">Монгол Улсын Засгийн газар, УОК-ын шийдвэрээр өчигдөр 16:40 цагт МИАТ компанийн Сөүл-Улаанбаатар чиглэлийн ОМ302 дугаарын захиалгат нислэгээр Монгол Улсын 244 иргэнийг эх орондоо авч ирлээ. </span><br></p>', '<p style=\"text-align: justify;\">Монгол Улсын Засгийн газар, УОК-ын шийдвэрээр өчигдөр 16:40 цагт МИАТ компанийн Сөүл-Улаанбаатар чиглэлийн ОМ302 дугаарын захиалгат нислэгээр Монгол Улсын 244 иргэнийг эх орондоо авч ирлээ.&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Шинэ коронавирусын голомтот бүс нутаг БНСУ-аас ирсэн учир биеийн байдал, зорчих хөдөлгөөнд хийсэн, оршин сууж байсан газар зэргийг нь харгалзан шууд Чингис хаан нисэх онгоцны буудлын нисэх талбайгаас гурван газарт хуваарилан тээвэрлэлээ.</p>\r\n\r\n<p style=\"text-align: justify;\">Нэн тэргүүнд мэс засалд орсон, хүнд өвчтэй зэрэг эмнэлгийн тусламж үйлчилгээ авах шаардлагатай 50 иргэнийг Цэргийн төв эмнэлэгт, 184 хүнийг Энх Саран сувиллын газарт, тус улсын Бусан, Тэгү хотоос ирсэн 10 иргэнийг ХӨСҮТ-д тус тус хүргэж тусгаарлаж, ажиглалтад авлаа.</p>\r\n\r\n<p style=\"text-align: justify;\">Эдгээр иргэдийг хорио цээрийн дэглэмийн дагуу 14 хоног тусгаарлан ажиглана. Зорчигчдод анхны үзлэг, шинжилгээ буюу халуун үзэх, асуумж бөглүүлэх ажлыг нислэгийн явцад МХЕГ-аас томилогдсон хилийн хяналт шалгалтын байцаагч нар хийж гүйцэтгэсэн байна.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/4e6fc1b4825c4432e8b870d170a2b09b.jpg\" style=\"width: 900px; height: 599px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Нислэгээр ирсэн иргэдийг ариутган халдваргүйжүүлж, тээвэрлэн байршуулах ажлыг ХӨСҮТ, ЦЕГ, МХЕГ, ОБЕГ нэгдсэн зохион байгуулалттайгаар ЦЕГ-ын албаны дарга, хурандаа Ж.Амгалан, МХЕГ-ын дарга Н.Цагаанхүү нарын шууд удирдлага дор мэргэжлийн өндөр түвшинд богино хугацаанд амжилттай зохион байгуулж ажиллаа. Онгоцноос бууж байхдаа иргэд болон хүүхдүүд гараа даллан, мэхийн ёсолж, агаарт үнсэлт илгээн талархлаа илэрхийлж байлаа. Мөн үүрэг гүйцэтгэж байгаа албан хаагчдын&nbsp; тавьсан шаардлагыг биелүүлж, хүлээцтэй соёлтой, хүндэтгэлтэй хандаж байв.&nbsp;</p>\r\n', 1584339953, 1586925576, 37, 1, 1, 0),
(59, 7, 'img/news/powermn_1584340110.png', '', 'img/news/powermn_1584340110.jpg', '0', 'Улаанбаатар “Хорт хавдаргүй хот” хөтөлбөрт хамрагдсанаар хавдрын эрт илрүүлэлт нэмэгдэнэ', '<p><br xss=\"removed\"><span xss=\"removed\">ДЭМБ-ын харьяа “Олон улсын хорт хавдрын хяналтын төв” байгууллагаас хэрэгжүүлдэг “Хорт хавдаргүй хот” хөтөлбөрт Улаанбаатар хот хамрагдах мөч ойртоод байна. </span><br></p>', '<p style=\"text-align: justify;\">ДЭМБ-ын харьяа &ldquo;Олон улсын хорт хавдрын хяналтын төв&rdquo; байгууллагаас хэрэгжүүлдэг &ldquo;Хорт хавдаргүй хот&rdquo; хөтөлбөрт Улаанбаатар хот хамрагдах мөч ойртоод байна. Хотын Захирагч С.Амарсайхан НИТХ-ын дарга байхдаа буюу 2018 оны 11 дүгээр сард ХСҮТ-ийн захирал Ж.Чинбүрэнтэй хамтран Улаанбаатар хотыг энэхүү хөтөлбөрт хамруулах хүсэлт хүргүүлж байсан бөгөөд өнгөрсөн 2 жилийн хугацаанд эхний 2 шатны шалгуурыг давж, өдгөө сүүлийн шатны даваа үлджээ.<br />\r\nХотуудын хорт хавдартай тэмцэх ажилд техникийн туслалцаа дэмжлэг үзүүлэх зорилготой энэхүү хөтөлбөрийг хэрэгжүүлэх 18 дахь хотоор Улаанбаатар шалгарвал нийслэлд хорт хавдрын эрт илрүүлэг, оношилгоо, эмчилгээг шинэ шатанд гаргах боломж бүрдэх юм.<br />\r\nӨнөөдөр хотын Захирагч С.Амарсайхан, Хавдар судлалын үндэсний төвийн зөвлөх, Монгол Улсын гавьяат эмч Ж.Чинбүрэн нар Францын Леон хотод төвтэй тус байгууллагын эмч мэргэжилтнүүдтэй цахимаар хуралдан, 3 дахь шатны шалгаруулалтын талаар ярилцаж, Улаанбаатар хот уг хөтөлбөрт хамрагдах чин хүсэл эрмэлзэлтэй байгаагаа илэрхийллээ. &ldquo;Олон улсын хорт хавдрын хяналтын төв&rdquo;-ийн Удирдах зөвлөл ирэх долоо хоногт хуралдаж, Улаанбаатар хотыг &ldquo;Хорт хавдаргүй хот&rdquo; хөтөлбөрт хамруулах эсэхийг шийднэ.<br />\r\nМанай улсад жилд 6000 хүн, өдөрт 16 хүн элэгний хорт хавдраар өвчилдөг бөгөөд ихэвчлэн эцсийн шатандаа орж, хүндэрсний дараа оношлогддог тул жилд 3500-4000 хүн нас бардаг гэсэн судалгаа бий. Тэр тусмаа улсын хүн амын тал хувь нь амьдардаг Улаанбаатар хотод хорт хавдрын эрт илрүүлгийн үзүүлэлт улсын дундаас доогуур буюу 30 хүрэхгүй хувьтай байгаа нь нийслэл болоод төр, засгаас анхаарахгүй байхын аргагүй тоо баримт гэдгийг Ж.Чинбүрэн эмч хэлж байлаа. &ldquo;Өдгөө дэлхийн 17 хотод хэрэгжиж буй &ldquo;Хорт хавдаргүй хот&rdquo; хөтөлбөрийн сайн туршлага, үр дүнг Улаанбаатар хотод нэвтрүүлж, хорт хавдрын эрт илрүүлгийн үзүүлэлтийг нэмэгдүүлэх, оношилгоо, эмчилгээний арга зүй, стратеги боловсруулах зэрэг техникийн туслалцаа дэмжлэг авах боломжийг бүрдүүлэхийн төлөө миний бие анхнаас нь санаачилгатай ажилласан. Цаашид ч Хүн төвтэй хот бодлогын хүрээнд нийслэлийнхээ иргэд, оршин суугчдыг хорт хавдраас урьдчилан сэргийлэх, эрт илрүүлгийн үзлэг оношилгоонд сайн дураараа хамрагдах боломж нөхцөлийг бүрдүүлэхийн төлөө хичээж ажиллана. Иргэд заавал гуравдугаар шатлалын эмнэлэгт дугаарлаж байж үзүүлдэг биш, харьяа дүүргийн Нэгдсэн эмнэлэг, Өрхийн эмнэлэгтээ хорт хавдрын эрт илрүүлгийн шинжилгээ, оношилгоог өгдөг байх боломжийг бүрдүүлнэ&rdquo; хэмээн хотын Захирагч С.Амарсайхан энэ үеэр онцоллоо.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/90013068_146449826620598_1040584762374225920_n_20200315053833.jpg\" style=\"width: 900px; height: 450px;\" /><br />\r\nТэднийг ийнхүү ярилцаж байх зуур Гавьяат жүжигчин М.Баярмагнай Ж.Чинбүрэн эмчтэй уулзахаар утсаар ярьж, зөвшөөрөл авч Хотын даргын өрөөнд орж ирсэн юм. Учир нь Ж.Чинбүрэн эмч коронавирусийн түргэн оношлуурын талаар өөрийн цахим хуудсаар мэдээлсэн нь олон нийтийн анхаарлыг татаад байсан тул М.Баярмагнай гавьяат коронавирусийн шинжилгээ өгөхөөр ирсэн гэдгээ хэлж, хотын Захирагчийн хамт түргэн оношлуурын шинжилгээ өглөө.<br />\r\nТус оношлуурын хувьд өндөгний цусаар үзэж, хариу нь хоёр зураастай гарвал эерэг, 1 гарвал сөрөг, 0 байвал тест ажиллахгүй байна гэж үздэг гэдгийг Ж.Чинбүрэн эмч хэллээ. Мөн тэрбээр &ldquo;Вирусийн далд үед илрэхгүй бөгөөд халуунтай байгаа бол энэхүү оношлуураар үзүүлэх хэрэгтэй гэж зөвлөсөн юм. Түүнчлэн иргэд олон нийт халуунтай байгаа бол халууны эм ууж, өөрийгөө болон бусдыг эрсдэлд оруулахгүй байх нь чухал&rdquo; гэдгийг онцоллоо.<br />\r\nНийслэлийн Засаг дарга С.Амарсайхан, МУГЖ М.Баярмагнай нараас авсан коронавирусийн түргэн оношлуурын шинжилгээний хариу 5 минутын дотор гарч, хариу нь сөрөг гарсан юм.<br />\r\nЖүжигчин М.Баярмагнай нийслэлийн иргэд, оршин суугчдыг гадуур явахдаа тогтмол амны хаалтаа зүүх, нус цэрээ ил задгай хаяхгүй байж хотын соёлыг эрхэмлэх тухай хотын Захирагчийн шийдвэрийг дэмжиж буйгаа илэрхийлээд, &ldquo;Гэрээс гарахдаа маскаа зүүж, гэртээ байхдаа &ldquo;МАСК&rdquo;-аа үзээд цагийг үр бүтээлтэй өнгөрүүлэхийг уриаллаа. &quot;MACК&quot; продакшны зүгээс өөрсдийн уран бүтээлээр дамжуулан олон нийтийг уриалж байгаа аж.<br />\r\nХотын Захирагч С.Амарсайхан &ldquo;Франц иргэнтэй харьцагчтай ойр байсан гэх иргэдээс COVID-19 халдвар илрээгүй гээд нийслэлийн иргэд тайширч, санаа амарч болохгүй. Амны хаалтаа зүүж, гараа байнга угааж, гэр орон, албан байгууллагадаа ариутгал халдваргүйжүүлэлтийг тогтмол хугацаанд хийх нь чухал. Урин дулаан цаг ирж байгаатай холбогдуулан бид бүгд хаана хаанаа анхаарал болгоомжоо сулруулах учиргүй&rdquo; хэмээн нийслэлийн иргэдэд санууллаа.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1584340110, 1586925534, 35, 1, 2, 3),
(60, 7, 'img/news/powermn_1662539551.png', '', '', '0', 'Нийтийн тээврийн хэрэгслүүд өнөөдрөөс ердийн хуваариар үйлчилнэ', '<p><span xss=\"removed\">Коронавирусаас урьдчилан сэргийлэх зорилгоор сэтгүүлчдийг олноор нь цуглуулж, эрсдэлд оруулахгүй байх үүднээс нийслэлийн Хэвлэл мэдээлэлтэй харилцах хэлтсээс цаг үеийн асуудлаарх хэвлэлийн хурлаа цахимаар хийж байгаа билээ.</span><br></p>', '<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/89722098_295004044806728_4322960801913634816_n_20200316122543.jpg\" style=\"width: 1000px; height: 500px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Коронавирусаас урьдчилан сэргийлэх зорилгоор сэтгүүлчдийг олноор нь цуглуулж, эрсдэлд оруулахгүй байх үүднээс нийслэлийн Хэвлэл мэдээлэлтэй харилцах хэлтсээс цаг үеийн асуудлаарх хэвлэлийн хурлаа цахимаар хийж байгаа билээ. Энэ удаагийн хэвлэлийн хурлаар сайжруулсан шахмал түлш болон бусад цаг үеийн асуудлуудаар мэдээлэл өглөө.<br />\r\nӨнгөрөгч гурван хоногийн хугацаанд Яаралтай түргэн тусламжийн төвд угаарын хийнд хөнгөн хордсон 12 өрхийн 32 иргэн хандсан байна. Хоногт 4 өрхөөс дуудлага ирж байгаа нь угаарын хийн дуудлага багасаж байгааг харуулж байгаа үзүүлэлт гэнэ. Гэсэн хэдий ч галлагааны улирал дуустал угаарын хий мэдрэгчийг&nbsp; салгаж болохгүйг НОБГ-ын Гамшгаас урьдчилан сэргийлэх хэлтсийн дарга Г.Нэргүй хэллээ. Тэрбээр &ldquo;Иргэдийн хувьд урин дулаан цаг ирж байгаатай холбоотойгоор угаарын хий мэдрэгчээ салгаж унтах тохиолдол их гарч байна. Хэдийгээр цаг агаар дулаарч байгаа ч жил жилийн өдийд угаартах эрсдэл нэмэгддэг учраас угаарын хий мэдрэгчээ салгаж болохгүй. Иргэд сайжруулсан шахмал түлшээ хэрэглээд сурчихсан нь сайшаалтай&rdquo; хэмээн онцоллоо.<br />\r\nЭнэ үеэр нийслэлийн Агаарын бохирдолтой тэмцэх газрын ахлах мэргэжилтэн Г.Даваажаргал &ldquo;Агаарын чанарын үзүүлэлтийг хэмждэг 15 станцын дүнгээр агаарын чанар өнгөрсөн оны мөн үетэй харьцуулахад PM 10 хэмжээтэй тоосонцор 69 хувиар, PM 2.5 хэмжээтэй тоосонцор 55 хувиар тус тус буурчээ. Агаарын чанарын индекс цэвэр, хэвийн үзүүлэлттэй байна&rdquo; хэмээн мэдээлэл өгсөн юм.</p>\r\n\r\n<p style=\"text-align: justify;\">Нийслэлийн Мэргэжлийн хяналтын байгууллага болон нийслэлийн Цагдаагийн газраас Улаанбаатар хотын нутаг дэвсгэр рүү түүхий нүүрс нэвтрүүлэхгүй байх тогтоолын шийдвэрт хяналт тавьж байгаа юм. Өнгөрсөн амралтын өдрүүдэд 460 тонн түүхий нүүрс тээвэрлэсэн 12 тээврийн хэрэгсэл Улаанбаатар хотоор дамжин өнгөрсөн бол тусгай зөвшөөрөлтэй 46 тээврийн хэрэгслийн 1091 тонн түүхий нүүрсийг нэвтрүүлжээ. НМХГ-ынхан 4 тээврийн хэрэгслээр 82.3 тонн түүхий нүүрс нэвтрүүлэхийг завдсан зөрчлийг илрүүлэн хяналт шалгалтын ажлыг хийж байна.</p>\r\n\r\n<p style=\"text-align: justify;\"><br />\r\n<strong>6705 алба хаагч нийтийн эзэмшлийн гудамж, талбайд Эргүүлээр ажиллаж байна</strong></p>\r\n\r\n<p style=\"text-align: justify;\">COVID-19 халдвараас сэргийлэх, хотын соёлыг төлөвшүүлэх, иргэдийн үүрэг хариуцлага, оролцоог нэмэгдүүлэх зорилгоор нийслэлийн нутгийн захиргааны 71 байгууллагын 6705 алба хаагч нийтийн эзэмшлийн гудамж, талбайд Эргүүлээр ажиллаж байна. Өнгөрөгч гурав хоногийн хугацаанд давхардсан тоогоор 3838 ажилтан, алба хаагч нийтийн эзэмшлийн гудамж, зам талбайд хяналт тавьж 32 795 иргэнд танилцуулга мэдээлэл хийж, 34936 иргэнд зөвлөмж гарын авлага тарааж, хог, нус, цэрээ хаяж, ил задгай бие засаж, орчныг бохирдуулсан 5142 иргэнд анхааруулга, санамж өгч ажиллажээ.</p>\r\n\r\n<p style=\"text-align: justify;\">Өнөөдөр өглөөнөөс эхлэн нийслэлийн орох, гарах хөдөлгөөнийг нээж байгаатай холбогдуулан нийслэлийн Багахангай, Багануур, Налайх, Сонгинохайрхан, Хан-Уул дүүргүүдийн нутагт дэвсгэрт байрлах авто тээврийн шалган нэвтрүүлэх товчоонд давхардсан тоогоор 357 алба хаагч хяналт тавин ажиллаж байна. Нийслэлийн 8 товчоогоор орсон 7156, гарсан 7204, нийт 14360 тээврийн хэрэгсэл, орсон 16472 иргэн, гарсан 18744 иргэн, нийт 35216 иргэний биеийн халууныг үзэж, холбогдох асуумж, зөвлөгөө өгч ажиллажээ. Сэжигтэй тохиолдол бүртгэгдээгүй байна.</p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Энэ сарын 10-16-нд үйл ажиллагааг нь түр зогсоосон ААН-үүдийн хориог тавилаа&nbsp;&nbsp;</strong></p>\r\n\r\n<p style=\"text-align: justify;\">Өнгөрсөн хугацаанд НМХГ-аас нийслэлийн Засаг даргын А/333 захирамжийн үйлчлэлд хамаарах нийт 4759 аж ахуйн нэгжийн судалгааг гаргаж, хяналт шалгалтын ажлыг зохион байгуулжээ. Шалгалтын явцад Налайх, Багануур, Баганхангай дүүргүүдэд зөрчил гараагүй бол Сонгинохайрханд 7, Баянгол дүүрэгт 11, Чингэлтэй дүүрэгт 2, Хан-Уулд 4, Баянзүрх дүүрэгт 7, Сүхбаатар дүүрэгт 1 зөрчил тус тус гарсан мэдээтэй байна. Зөрчлийн дийлэнх нь түргэн үйлчилгээний цэг, жижиг авто засвар, гар утасны худалдаа эрхлэлт байсан юм.&nbsp;&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Харин нийслэлийн Эрүүл мэндийн газрын мэдээллээр Монгол Улсын хэмжээнд одоогоор 290 хүнд вирус судлалын шинжилгээ хийснээс 248 хүний шинжилгээний хариу сөрөг гарсан. Мөн Франц улсын иргэний нэг болон хоёрдугаар хавьтлын&nbsp; иргэдээс шинжилгээ авч, биеийн байдлыг нь хянаж байгаа юм байна.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/90016811_1034457700261142_6364396510464966656_n_20200316122544.jpg\" style=\"width: 1000px; height: 500px;\" /><br />\r\nХэвлэлийн хурлын төгсгөлд нийслэлийн Хэвлэл мэдээлэлтэй харилцах хэлтсийн дарга Ц.Мөнхбаатар &ldquo;Нийслэл рүү орох, гарах хөдөлгөөнийг нээж байгаатай холбоотойгоор иргэдийн халуун шалгах, асуумж судалгаа бөглүүлэх ажил хэвээр үргэлжилнэ. Иргэд та бүхэн өндөржүүлсэн бэлэн байдлын үед алба хаагчдын ажилд хүндэтгэлтэй хандаж, хамтарч ажиллахыг хүсэж байна. Мөн өнгөрсөн долоо хоногт үйл ажиллагааг нь түр зогсоосон зарим аж ахуйн нэгж, байгууллагад ариутгал халдваргүйтгэлийн ажлыг хийгээд, өнөөдрөөс үйл ажиллагааг нь нээж байгаа. Үүнтэй холбоотойгоор иргэдээс шөнийн цэнгээний газар, саун, фитнессийг нээх, эсэхийг их асууж байна. Өнөөдрийн хувьд зөвхөн 3 дугаар сарын 16 хүртэл үйл ажиллагааг нь зогсоосон аж ахуйн нэгжүүдийн үйл ажиллагааг хэвийн үргэжлүүлэхээр нээж байна. Харин бусад газруудыг энэ сарын 30-ны өдөр хүртэл үйл ажиллагааг нь зогсоосон хэвээр байгаа. Иргэд агаар салхинд гарч дархлаагаа дэмжих үүднээс хотын дарга ууланд алхах гарц, зарим амралтын газруудыг нээж болох талаар ярьсан ч одоогоор тогтоол шийдвэр гараагүй байна. Мөн нийтийн тээврийн үйл ажиллагаа хэвийн үргэлжилнэ&rdquo; гэлээ.</p>\r\n', 1584340497, 1662539551, 30, 1, 1, 0),
(61, 7, 'img/news/powermn_1662539523.png', '', 'img/news/powermn_1584698555.jpg', '0', '29,2 сая толгой эх малын 7,4 хувь төллөжээ', '<p><span xss=\"removed\">Улсын хэмжээнд оны эхний нийт малын 0,5%  нь зүй бусаар хорогдсон байна. Нийт малын 0,5% хорогдсон нь хэвийн хорогдолд тооцогдож байна.  </span><br></p>', '<p style=\"text-align: justify;\">03 дугаар сарын 20-ны өдрийн байдлаар төллөвөл зохих 29,2 сая толгой эх малын 7,4% буюу 2,2 сая эх мал төллөөд байна. Төллөсөн хээлтэгчийн 2,3% нь бод, 97,3% нь бог малын хээлтэгч байна.&nbsp; Улсын хэмжээнд өнөөдрийн /2020.03.20/ байдлаар&nbsp; 2.2 сая төл хүлээн авч, төл бойжилт 98,4%-тай байна.</p>\r\n\r\n<p style=\"text-align: justify;\">Улсын хэмжээнд оны эхний нийт малын 0,5%&nbsp; нь зүй бусаар хорогдсон байна. Нийт малын 0,5% хорогдсон нь хэвийн хорогдолд тооцогдож байна.&nbsp;&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/mal_tullult.png\" style=\"width: 950px; height: 318px;\" /></p>\r\n', 1584698555, 1662539523, 104, 1, 1, 0),
(62, 7, 'img/news/powermn_1662539495.png', '', '', '0', 'ЖДҮ-ийн хөнгөлөлттэй зээл олгох, сонгон шалгаруулах, дамжуулан зээлдүүлэх, эргэн төлүүлэх, хяналт тавих журам батлагдлаа', '<p><span xss=\"removed\">Монгол Улсын Их Хурлаас 2019 онд “Жижиг, дунд үйлдвэр, үйлчилгээг дэмжих тухай” хууль, “Засгийн газрын тусгай сангийн тухай” хуулийг тус тус баталсан.</span><br></p>', '<p style=\"text-align: justify;\">Монгол Улсын Их Хурлаас 2019 онд &ldquo;Жижиг, дунд үйлдвэр, үйлчилгээг дэмжих тухай&rdquo; хууль, &ldquo;Засгийн газрын тусгай сангийн тухай&rdquo; хуулийг тус тус баталсан. Шинэчлэн баталсан хуулиар сангаас хөнгөлөлттэй зээл олгох, сонгон шалгаруулах, дамжуулан зээлдүүлэх, эргэн төлүүлэх, хяналт тавих журмыг Засгийн газраас батлахаар заасан. Монгол Улсын Засгийн газрын ээлжит өнөөдрийн хуралдаанаар Жижиг дунд үйлдвэрлэлийг дэмжих сангаас хөнгөлөлттэй зээл олгох, сонгон шалгаруулах, дамжуулан зээлдүүлэх, эргэн төлүүлэх, хяналт тавих журмыг батласан байна.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/5dc3ca1e92b0b.jpeg\" style=\"width: 900px; height: 405px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Тус журамд дараах өөрчлөлт орсон байна. Үүнд:<br />\r\n1. Бичил, жижиг, дунд ангилалд хамаарах зээлийн хэмжээг тогтоосон;<br />\r\n2. Хөнгөлөлттэй зээл олгох хэлбэрийг шинэчлэн тусгасан;<br />\r\n3. Дамжуулан зээлдүүлэх арилжааны банкинд тавигдах шаардлагыг бууруулж, өрсөлдөөнийг нэмэгдүүлсэн;<br />\r\n4. Хороо, дэд хорооны гишүүнд тавигдах шаардлагыг бий болгосон;<br />\r\n5. Орон нутагт олгох зээлийн хэмжээг нэмэгдүүлсэн;<br />\r\n6. Зээлийн мэдээллийн сан үүсгэх, эргэн төлүүлэх, хяналт тавих үйл ажиллагааны зохицуулалтыг бий болгох</p>\r\n\r\n<p style=\"text-align: justify;\">Жижиг дунд үйлдвэрлэлийг дэмжих сангаас хөнгөлөлттэй зээл олгох, сонгон шалгаруулах, дамжуулан зээлдүүлэх, эргэн төлүүлэх, хяналт тавих журмыг боловсруулах ажлын хэсгийн бүрэлдэхүүнд Сангийн яам, Зээлийн батлан даалтын сан, Монголын үндэсний худалдаа аж үйлдвэрийн танхим, Баялаг бүтээгчдийг дэмжих холбоо, Монголын банкуудын холбоо, Төслийн удирдлага хөгжлийн хүрээлэн зэрэг төрийн болон төрийн бус байгууллагуудын төлөөлөл орсон байна. Ажлын хэсэг&nbsp; 6 удаа хуралдаж журмын төсөлд ирүүлсэн 200 гаруй саналыг авч хэлэлцэн 2019 онд батлагдсан журмын ерөнхий бүтэц, агуулгыг алдагдуулахгүйгээр зохицуулалтыг нэмж тусгасан аж.</p>\r\n', 1585132094, 1662539495, 41, 1, 1, 0);
INSERT INTO `posts` (`id`, `menu`, `pic`, `pics`, `bigpic`, `ontsloh`, `title`, `description`, `content`, `created`, `updated`, `visited`, `visible`, `order`, `mostread`) VALUES
(63, 7, 'img/news/powermn_1662539438.png', '', 'img/news/powermn_1585795105.jpg', '0', 'Н.Цэрэнбат: Монгол Улсад сүүлийн 20 гаруй жил ярьж буй гадаргын усыг ашиглах ажлыг Усны газар эхлүүлнэ', '<p><span xss=\"removed\">Усны бие даасан газартай болсноор хариуцлага, гүйцэтгэл сайжирна гэж үзэж байгаа. Үүний төлөө шахаж, шаардаж ажиллана. Энэхүү агентлаг маань цаашид усны салбарын судалгаа, шинжилгээ хийх, мэргэжлийн хүмүүсийн дүгнэлтэд тулгуурлан усны ашиглалт, нөөцийг нэмэгдүүлэх ажлыг хийнэ гэж тооцоолж байгаа учир салбарын өмнө тулгамдсан асуудлыг шийдэх томоохон түлхэц болсон.</span><br></p>', '<p>&nbsp;</p>\r\n\r\n<p>Засгийн газрын хэрэгжүүлэгч агентлаг Усны газар байгуулах шийдвэрийг Засгийн газрын хуралдаанаас гаргасантай холбогдуулан БОАЖ-ын сайд Н.Цэрэнбатаас зарим асуултад хариулт авлаа.</p>\r\n\r\n<p><strong>-Монгол Улс усны асуудал хариуцсан бие даасан газартай болох шийдвэрийг Засгийн газрын хуралдаанаар дэмжүүлж чадсанд баяр хүргэе. </strong></p>\r\n\r\n<p>-Баярлалаа. Усны салбарын хамт олондоо мөн баяр хүргэе. Монгол Улс анх 1938 оноос усны бодлогыг тусгайлан хариуцсан газартай байсан ч 1990 оноос хойш байгалийн нөөц баялгийг зүй зохистой ашиглах, тогтвортой бодлогоо алдчихсан байсан. Үүний нэг нотолгоо нь 2012 онд Усны агентлагийг татан буулгаж, асуудал хариуцсан мэргэжилтнүүдийг нь харьяа яамдад хуваарилсан явдал юм. Хөгжлийг дагаад усны хэрэглээ нэмэгдэхийн хэрээр салбарын бодлогыг зангидсан газар байх ёстой гэсэн манай Засгийн газрын бодлого хэрэгжих эхлэл бүрдэж, бид Усны тухай хуульд нэмэлт өөрчлөлт оруулж, Усны газрыг Засгийн газрын хэрэгжүүлэгч агентлагийн статустайгаар байгуулах тогтоолыг гаргуулаад байна.</p>\r\n\r\n<p><strong>-Усны газрыг байгуулснаар салбарын өмнө тулгамдаж буй асуудлыг шийдэж чадна гэсэн хүлээлт үүсэж байх шиг байна? </strong></p>\r\n\r\n<p>-Усны бие даасан газартай болсноор хариуцлага, гүйцэтгэл сайжирна гэж үзэж байгаа. Үүний төлөө шахаж, шаардаж ажиллана. Энэхүү агентлаг маань цаашид усны салбарын судалгаа, шинжилгээ хийх, мэргэжлийн хүмүүсийн дүгнэлтэд тулгуурлан усны ашиглалт, нөөцийг нэмэгдүүлэх ажлыг хийнэ гэж тооцоолж байгаа учир салбарын өмнө тулгамдсан асуудлыг шийдэх томоохон түлхэц болсон.</p>\r\n\r\n<p><strong>-Манай улсын усны хэрэглээний 80 гаруй хувь нь гүний ус, 20 орчим хувь нь гадаргын ус байдаг. Энэ асуудлыг өөрчлөх ямар бодлого барьж байна вэ? </strong></p>\r\n\r\n<p>-Монгол Улсад сүүлийн 20 гаруй жил ярьж буй гадаргын усыг ашиглах ажлыг Усны газар эхлүүлнэ. Үүний тулд өнгөрсөн 2 жил гаруйн хугацаанд БОАЖЯ-наас гадаргын усыг ашиглах боломжтой 12 томоохон голын 33 байршилд судалгаа хийж, бэлтгэл ажлыг хангасан. Усны газар маань тухайн байршлуудад цас, борооны усыг ашиглах, хөв цөөрөм байгуулах ажлыг эхлүүлэх зорилтыг нэн тэргүүнийх болгож ажиллах юм. УИХ-аар усны урсгалын тохиргоо хийхэд зориулж 2 тэрбум төгрөгийн төсвийг батлуулж чадсан нь Монголд анх удаа гадаргын усыг хуримтлуулах, урсгалын тохиргоо хийх томоохон ажлын эхлэл боллоо.</p>\r\n\r\n<p><strong>-Байгууллагын санхүүжилтийн асуудлыг хэрхэн шийдвэрлэх вэ. Засгийн газраас улсын төсөвт ямар нэгэн байдлаар дарамт үзүүлэхгүйгээр асуудлыг шийдэх чиглэл өгсөн шүү дээ? </strong></p>\r\n\r\n<p>-Төсөв, орон тооны хувьд БОАЖЯ-ны сайдын багцад хөдөлгөөн хийж байгаа. Усны бодлогыг хэрэгжүүлэхэд олон салбар хоорондын байгууллагуудын уялдаа холбоог хангаж ажиллах учир мэргэжлийн байгууллагууд маань агентлагтайгаа хамтарч, үүсээд байгаа хүндрэлийн алийг нь төр шийдэх вэ, алийг нь оролцогч ААН-үүд шийдэх вэ гэдэг асуудлыг тодорхойлно. Ус бохирдуулсны төлбөрийн тухай хуульд нэмэлт өөрчлөлт оруулахдаа бид бохирдуулагч нь илүү их &nbsp;төлдөг байх. Үүнээс олсон орлогын 50 хувийг усыг дахин ашигладаг, цэвэрлэх байгууламж ажиллуулдаг төр, хувийн хэвшлийн компаниудад татаас байдлаар олгоно гэсэн өөрчлөлтийг тусгасан. Энэхүү бодлогыг хэрэгжүүлж ажиллах агентлаг байгуулагдаж буй учир их итгэл найдварын зэрэгцээ маш өндөр хариуцлага хүлээлгэж байгаа гэдгийг хэлэх байна.</p>\r\n', 1585795105, 1662539438, 445, 1, 1, 0),
(64, 7, 'img/news/powermn_1662539370.png', '', 'img/news/powermn_1586312643.jpg', '0', 'Ойд хууль бусаар мод бэлтгэсэн, гал тавьсан тохиолдолд одоогийнхоос 3 дахин өндөр төлбөр ногдуулна', '<p class=\"MsoNormal\" align=\"center\" xss=\"removed\"><span xss=\"removed\">БОАЖ-ын сайд Н.Цэрэнбатын тушаалаар 1 шоо.метр модны үнэлгээг 2.7 дахин, 1 га  ойн экологи-эдийн засгийн үнэлгээг 3 дахин нэмлээ.</span><br></p>', '<p style=\"text-align: justify;\">БОАЖ-ын сайд Н.Цэрэнбатын тушаалаар&nbsp;1 шоо.метр модны үнэлгээг 2.7 дахин, 1 га&nbsp; ойн экологи-эдийн засгийн үнэлгээг 3 дахин нэмлээ. Шинэчилсэн баталсан&nbsp;ойн экологи-эдийн засгийн үнэлгээнд ойн нөөц, ойн дагалт баялгийн үнэлгээнээс гадна, ойн ус зохицуулах, хөрс хамгаалах, нүүрсхүчлийн хийг шингээх, нийгэм, амралт зугаалгын ач холбогдлын үнэ цэнийг нэмж тооцжээ. &nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Ойн экологи-эдийн засгийн үнэлгээг шинэчилснээр ойн нөөц ашигласны төлбөрөөс орон нутгийн төсөвт жилд дунджаар ордог байсан 3 тэрбумтөгрөг&nbsp; хамгийн багадаа 3 дахин нэмэгдэж, ойг хамгаалах, нөхөн сэргээхэд зарцуулах хөрөнгийн хэмжээ нэмэгдэх боломж бүрдэж байгаа юм.&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;мөн ойд хууль бус үйл ажиллагаа явуулсан нөхцөлд Байгаль хамгаалах тухай хуульд заасны дагуу ойн экологи-эдийн засгийн нийт үнэлгээг&nbsp;3 дахин&nbsp;нугалсантай тэнцүү хэмжээгээр нөхөн төлбөр ногдуулах тул хууль бус мод бэлтгэл, уул уурхайн ашиглалтаас үүдэлтэй ойд хохирол учруулах, түймэр тавих зэрэг ойн баялгийн эсрэг үйл ажиллагаанд&nbsp;тооцох хариуцлагыг&nbsp;өндөрсөж, тэдгээрийг таслан зогсооход томоохон алхам болно гэж үзэж байна.</p>\r\n\r\n<p style=\"text-align: justify;\">Харин мод бэлтгэхэд мөрдөж байгаа хөнгөлөлтүүд хэвээр байхын зэрэгцээ импортын мод, модон материалыг гааль болон НӨАТ-аас чөлөөлсөн тул дотоодын &nbsp;зах зээлд үнийн хөөргөдөл бий болохгүй юм.&nbsp;&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;Шинэчлэн баталсан ойн экологи-эдийн засгийн үнэлгээг доорх линкээр үзэх боломжтой</p>\r\n\r\n<p style=\"text-align: justify;\"><a href=\"https://www.legalinfo.mn/law/details/15200?lawid=15200\"><em>https://www.legalinfo.mn/law/details/15200?lawid=15200</em></a></p>\r\n', 1586312643, 1662539370, 161, 1, 1, 0),
(65, 7, 'img/news/powermn_1662539347.png', '', 'img/news/powermn_1586317045.jpg', '0', '\"50 100\" аялал жуулчлалын цогцолборт ариун цэврийн байгууламж барина', '<p><span xss=\"removed\">Хөвсгөл аймгийн Хатгал тосгонд энэ сарын 3, 4-ний өдрүүдэд </span><span xss=\"removed\">Байгаль орчин, аялал жуулчлалын яамны Төрийн нарийн бичгийн дарга Д.Ганболд, Хөдөлмөр, нийгмийн хамгааллын яамны Төрийн нарийн бичгийн дарга Г.Өнөрбаяр, Хөвсгөл аймгийн Засаг дарга Л.Ганболд нар ажиллав. </span><br></p>', '<div class=\"post-head\" style=\"outline: none; font-size: 14px; font-family: m3; border-bottom: 1px solid rgb(221, 221, 221); padding: 40px 0px 55px; position: relative; min-height: 60px; margin: 0px 10px; width: 608px; color: rgb(0, 0, 0);\">\r\n<h1 style=\"outline: none; font-size: 30px; line-height: 36px; color: rgb(16, 16, 16); margin: 0px;\">&nbsp;</h1>\r\n</div>\r\n\r\n<div class=\"post-body\" style=\"outline: none; font-size: 14px; font-family: m3; padding: 5px 10px; text-align: justify; margin: 0px; width: 608px; overflow: hidden; color: rgb(0, 0, 0);\">\r\n<p style=\"outline: none; font-size: 17px; line-height: 28.9px; color: rgb(68, 68, 68); box-sizing: border-box; text-indent: 30px;\">Хөвсгөл аймгийн Хатгал тосгонд энэ сарын 3, 4-ний өдрүүдэд Байгаль орчин, аялал жуулчлалын яамны Төрийн нарийн бичгийн дарга Д.Ганболд, Хөдөлмөр, нийгмийн хамгааллын яамны Төрийн нарийн бичгийн дарга Г.Өнөрбаяр, Хөвсгөл аймгийн Засаг дарга Л.Ганболд нар ажиллав. Энэ үеэр Хөвсгөл нуурыг эрэгт барих &quot;Найрамдал-2&quot; зуслангийн барилгын ажлыг хаана эхлүүлэх, Тогтвортой аялал жуулчлалыг хөгжүүлэх төслийн ерөнхий төлөвлөлт, &quot;50 100&quot; аялал жуулчлалын цогцолбор зэргийн үйл ажиллагаатай танилцлаа. &quot;50 100&quot; аялал жуулчлалын цогцолборт Байгаль орчин аялал жуулчлалын яамнаас ариун цэврийн байгууламжийн барилгыг, Хөдөлмөр, нийгмийн хамгааллын яамнаас хөгжлийн бэрхшээлтэй иргэд болон хүүхдэд зориулсан орчин нөхцөлийг бүрдүүлэхэд шаардагдах техник хэрэгслийг олгохоор шийдвэрлэлээ.</p>\r\n\r\n<p style=\"outline: none; font-size: 17px; line-height: 28.9px; color: rgb(68, 68, 68); box-sizing: border-box; text-indent: 30px;\">Тус аймагт аялал жуулчлалыг хөгжүүлэх, бүтээгдэхүүн үйлчилгээг нэмэгдүүлэх зорилгоор &quot;50 100&quot; цогцолборыг байгуулж, дэлхийд байхгүй ховор энергийн төвийг орон нутгийн хөрөнгө оруулалтаар тохижуулж Хөвсгөл аймгийг зорин ирж буй аялагч, жуулчдын байгаль дэлхийгээсээ эрч хүч энерги авах боломжийг бүрдүүлсэн байна. Үүний үр дүнд өнгөрсөн онд тус төвийг 6000 гаруй иргэд зорин ирсэн ажээ.</p>\r\n</div>\r\n', 1586317045, 1662539347, 35, 1, 1, 0),
(66, 7, 'img/news/powermn_1662539319.png', '', '', '0', 'Гал түймрийн аюулаас урьдчилан сэргийлье!', '<p><span xss=\"removed\">Монгол Улсад гарч буй гал түймрийн 90 хувь нь хүний буруутай үйл ажиллагаанаас болдог. </span><br></p>', '<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"360\" src=\"//www.youtube.com/embed/2K3MwqkYm6o\" width=\"640\"></iframe></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Монгол Улсад гарч буй гал түймрийн 90 хувь нь хүний буруутай үйл ажиллагаанаас болдог. Иргэн та анхаарал болгоомжтой байж гал түймрийн аюулаас урьдчилан сэргийлж, ирээдүй хойч үедээ байгаль дэлхийгээ хадгалан үлдээнэ үү!<br />\r\n#ХандлагааӨөрчилье</p>\r\n', 1586837311, 1662539319, 75, 1, 1, 0),
(67, 7, 'img/news/powermn_1662535569.png', '', 'img/news/powermn_1662534696hero1.jpg', '1', 'Хороо дүүргийн 1700 гаруй хэсгийн ахлагч нар олон нийтийн цагдаагийн үүрэг гүйцэтгэж, хотын соёлыг түгээнэ', '<p><span xss=\"removed\">Нийслэлийн Засаг дарга бөгөөд Улаанбаатар хотын Захирагч С.Амарсайхан долоо хоног бүр цаг үеийн асуудлаар мэдээлэл хийж, иргэдийн асуултад хариулж байхаар болсон билээ.</span><br></p>', '<p style=\"text-align: justify;\"><br />\r\nНийслэлийн Засаг дарга бөгөөд Улаанбаатар хотын Захирагч С.Амарсайхан долоо хоног бүр цаг үеийн асуудлаар мэдээлэл хийж, иргэдийн асуултад хариулж байхаар болсон билээ. Өнөөдөр хотын Захирагч С.Амарсайхан цаг үеийн асуудлаар ээлжит мэдээллээ хүргэлээ.</p>\r\n\r\n<p style=\"text-align: justify;\">Тэрбээр мэдээллийнхээ эхэнд, дэлхийн олон улсад тархаад буй коронавирусийн тархалтын мэдээллийг хүргэж, халдвараас урьдчилан сэргийлэх арга хэмжээг иргэн бүр сайтар авч хэрэгжүүлэхийг уриалсан юм. Мөн нийслэлийн хэмжээнд коронавирусийн халдвараас урьдчилан сэргийлэхээр авч хэрэгжүүлж буй зарим арга хэмжээний талаар дурдлаа.</p>\r\n\r\n<p style=\"text-align: justify;\">Нийслэлийн хэмжээнд нутгийн захиргааны 6790 албан хаагчид эргүүлээр ажиллаж, иргэдэд сэрэмжлүүлэг мэдээлэл хүргэж, амны хаалтыг хэрэглэж хэвших болон хувийн ариун цэврийг сайтар хангахыг зөвлөж байгаа юм. Түүнчлэн халдварт өвчний үед иргэдийн хөдөлгөөнийг хянаж, халдвар тархсан үед байршил тогтоож илрүүлэх зорилгоор шалган нэвтрүүлэх товчоодод эрүүл мэндийн үзлэг шалгалтыг хийж, нийслэл рүү орж гарах хөдөлгөөнд хяналт тавьж байгаа бөгөөд нийт 118 албан хаагч үүрэг гүйцэтгэж байгаа юм. Өчигдөр өглөөний 8 цагаас өнөөдөр хүртэл 85418 иргэн Улаанбаатар хотод орж гарсан бол нийт&nbsp; 24966 автомашин зорчсон тоон мэдээллийг хотын дарга С.Амарсайхан өглөө. Тэрбээр &quot;Урин дулаан цаг ирж иргэд агаар салхинд гарахдаа нэг дор цугларч, эрсдэл гаргах нөхцөл байдал үүсгэж байна. Иргэд дотоодод халдвар тархаагүй болохоор бүх зүйлийг чөлөөтэй байлгах саналыг ирүүлж байгаа. Нийслэл хотын хувьд аль болох иргэдийнхээ аюулгүй байдлыг хангахын зэрэгцээ, гадагшаа дотогшоо гарч салхилах боломж нөхцөлийг нь бүрдүүлэх, ажил амьдралыг нь цаашид хэвийн үргэлжлүүлэх, аль болох хориг саад тавихгүй гэх байр суурь баримтлан ажиллаж байна.<br />\r\nӨнгөрсөн хоёр сар хагасын хугацаанд маш сайн зохион байгуулалттай, тэвчээртэй, хүлээцтэй хандаж ирсний үр дүнд өнөөдөр бусад орнуудтай харьцуулахад дотооддоо халдвар тархаагүй байна.&nbsp; Энэ нь тархахгүй, гарахгүй гэсэн баталгаа биш. Тархах, гарах асар өндөр эрсдэлүүд байна. Одоо нян, бактери ид үрждэг цаг үе. Дотоодод халдвар гараагүй байсан ч биднээс үл шалтгаалах зүйлүүдээр дамжиж энэ оны 4, 5-р саруудад халдвар гарах магадлал ихээхээн өндөр байна. Тиймээс ирэх хоёр сард илүү их анхааралтай, сэрэмжтэй, иргэн бүр өөрийнхөө үүрэг хариуцлагыг биелүүлж ажиллах зайлшгүй шаардлагатай байна. Гадаа гарч салхилахад нээлттэй. Гэхдээ амны хаалт зүүж, гараа угааж, ариутгал халдваргүйжүүлэлт тогтмол хийх хэрэгтэй. Таны эрхийг хязгаарлаж байгаа мэт боловч бусдын эрхээр улс орны эрх ашгаар таны эрүүл мэнд хамгаалагдаж байгаа гэдгийг манай иргэд сайтар ойлгож, илүү хариуцлагатай, бие биедээ илүү хатуу шаардлага тавьж ажиллана гэдэгт эргэлзэхгүй байна. Дахиад 2, 3 сар энэ байдлаараа тэвчиж чадвал эргээд амьдралынхаа хэвийн нөхцөлд эргэн орно&quot; гэлээ.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/93220992_228982851783986_47915496967766016_n_20200413042144.jpg\" style=\"width: 1200px; height: 600px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Хороо дүүргийн хэсгийн ахлагч нар олон нийтийн цагдаагийн үүрэг гүйцэтгэнэ</strong></p>\r\n\r\n<p style=\"text-align: justify;\"><br />\r\nХотын Захирагч мэдээллийн цагийн үеэрээ ой хээрийн түймрээс сэрэмжлүүлээд, ирэх сарын 15-ны өдрийг хүртэл төвийн зургаан дүүргийн ногоон бүсэд хөдөлгөөнт эргүүл ажиллуулж байгаа талаар дуулгав. Мөн орчны аюулгүй байдлыг хангах зорилгоор нийслэлийн 173 хорооны 1700 гаруй хэсгийн ахлагчдыг олон нийтийн цагдаагаар ажилуулах бэлтгэл ажлыг хангаж дууссан бөгөөд энэ сарын 15-наас эхэлж ажиллах аж. Өнөөдрийн байдлаар 180 гаруй олон нийтийн цагдаа ажилладаг байна. Олон нийтийн цагдаа нь Засгийн газар, УИХ-аас баталсан хууль тогтоомжийг сурталчлан таниулах, хотын соёлыг түгээж аюулгүй орчныг бүрдүүлэх зэрэг үндсэн үүрэгтэй аж. Хороо хэсгийн ахлагч нар олон нийтийн цагдаагаар ажилласнаар нийгмийн хэв журмыг сахиулах, гэмт хэргийн шинжтэй нөхцөл байдлыг шуурхай мэдээллэх, олон нийтийн гудамж талбайд нус, шүлсээ хаясан, ил задгай бие зассан иргэдэд хатуу шаардлага тавих болон бусад хориглосон заалт журмыг зөрчсөн иргэдэд сануулга өгч хариуцлага хүлээлгэх бүрэн эрхтэйгээр ажиллах юм.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/unnamed_20200413044313.jpg\" style=\"width: 512px; height: 386px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\"><strong>Нийслэлийн хэмжээнд улирал бүр халдваргүйжүүлэлтийг хийнэ</strong></p>\r\n\r\n<p style=\"text-align: justify;\"><br />\r\nКоронавирусийн халдвараас урьдчилан сэргийлэх хүрээнд нийслэлийн хэмжээнд ариутгал халдваргүйжүүлэлтийг эрчимжүүлсэн юм. Өнөөдрийн байдлаар нийслэлийн хэмжээнд 951 сая метр квадрат талбайг халдваргүйжүүлжээ. Улаанбаатар хотын Захирагчийн ажлын алба ариутгал халдваргүйжүүлэлт хийх тусгай зөвшөөрөлтэй 37 аж ахуйн нэгжтэй хамтран гурван төрлийн бодисоор халдваргүйжүүлэлт хийж байгаа бөгөөд цаашид нийслэлийн хэмжээнд халдваргүйжүүлэлтийг улирал бүр хийж байхаар тогтжээ. Мөн гэр хорооллын 220 мянган айл өрхүүдийн модон жорлонг ирэх 5 дугаар сарын 01-нээс өмнө стандартын дагуу ариутгалын бодисоор халдваргүйжүүлэлтийг хийж дуусгах юм байна. Хотын Захирагч С.Амарсайхан &ldquo;Иргэд аж ахуй нэгжүүд ойр орчмын газартаа өөрсдөө ариутгал халдваргүйжүүлэлтээ хийх хэрэгтэй байна. Бүх зүйлийг хотоос хийх боломжгүй. Өмнө нь энэ мэтчилэн ариутгал халдваргүйжүүлэлтийн ажлыг&nbsp; Улаанбаатар хотод хийж байгаагүй. Иймээс цаашид улирал бүр тэр тусмаа хаврын цагт ариутгал халдваргүйжүүлэлтийг өргөн хүрээнд хийнэ&rdquo; хэмээлээ.</p>\r\n\r\n<p style=\"text-align: justify;\">Хотын Захирагч мэдээллийн цагаараа Яармагт баригдаж буй 300 ортой 880 өрөөтэй нийслэлийн Эх хүүхдийн Эрүүл мэндийн төвийн барилгын ажил 95 хувьтай байгааг дуулгаад тун удахгүй ашиглалтад оруулахаар ажиллаж байгаа талаар товч мэдээллээ. Мөн Улсын онцгой комиссын 8 дугаар тогтоолоор нийслэлийн хэмжээнд 1-р ээлжийн цэрэг татлагыг зохион байгуулахгүй байх шийдвэр гаргасныг уламжилав.<br />\r\nИйнхүү нийслэлийн Засаг дарга бөгөөд Улаанбаатар хотын Захирагч С.Амарсайхан мэдээллийнхээ төгсгөлд иргэдээс ирүүлсэн асуултад хариуллаа. Иргэд, сэтгүүлчдийн зүгээс автомашины дугаарын хязгаарлалтыг тэгш сондгойгоор зорчуулах, хөдөө орон нутаг руу зорчих хөдөлгөөнийг хязгаарлах зэрэг асуултыг асуулаа. Хотын Захирагч С.Амарсайхан &ldquo;Улсын онцгой комиссын Шуурхай штабаас ирүүлсэн санал чиглэлийг үндэслэж автомашины дугаарын хязгаарлалтыг судлаж байна. Хотын удирдлагууд олон хүмүүсийг цуглуулахгүй байх шийдвэрийн хүрээнд нэг дор олноор нийтийн тээврээр зорчуулах, дугаарын хязгаарлалтыг тэгш сондгойгоор зорчуулах асуудлын эсрэг байгаа. Онцгой нөхцөл шаардлага гарсан тохиолдолд дугаарын хязгаарлалт хийх, орон нутгийн замыг хаах зэрэг шийдвэр гарч болно&rdquo; хэмээсэн юм.</p>\r\n\r\n<p style=\"text-align: justify;\">Нийслэлийн хэмжээнд хийгдэж байгаа бүтээн байгуулалтын талаар хотын Захирагч С.Амарсайхан ийнхүү долоо хоног бүр цахимаар мэдээлэл хүргэхээр болж байгаа&nbsp; юм. Мэдээллийг фэйсбүүк дэх &ldquo;Нийслэлийн мэдээ&rdquo; фэйж хуудсаар шууд дамжуулах бөгөөд тухайн цагт сэтгүүлчид болон иргэд Хотын даргатай шууд холбогдож сонирхсон асуултандаа хариулт авч болно.</p>\r\n', 1586838257, 1662535569, 20, 1, 1, 1),
(68, 7, 'img/news/powermn_1662539275.png', '', '', '0', '21 сав газрын захиргаанаас ОБЕГ-т хандив хүргүүллээ ', '<p><span xss=\"removed\">Хандив гардуулах үеэр БОАЖ-ын дэд сайд Ц.Батбаяр “Дэлхий нийтээрээ аюулт халдварт өвчинтэй тэмцэж буй энэ үед БОАЖ-ын сайд Н.Цэрэнбатаар ахлуулсан ажлын хэсэг “Мөнхийн хөршдөө сэтгэлийн дэмжлэг” аяныг улс орон даяар амжилттай зохион байгуулж, 400 орчим сая төгрөгийг БНХАУ-ын Элчин сайдын яаманд хүлээлгэн өгсөн. </span><br></p>', '<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/4c269061168309b3ba6a9b6e669474de_1586925001%281%29.jpg\" style=\"width: 1000px; height: 667px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Дэлхий дахинд өргөн хүрээнд тархаж буй шинэ коронавирусын халдвараас урьдчилан сэргийлэх үйл ажиллагааг амжилттай зохион байгуулж буй ОБЕГ-ын хамт олонд БОАЖЯ-ны харьяа 21 сав газрын захиргааны 200 гаруй албан хаагч хандив хүргүүлснийг БОАЖ-ын дэд сайд Ц.Батбаяр, Сав газрын удирдлагын хэлтсийн дарга С.Баттулга нар Улсын онцгой комиссын нарийн бичгийн дарга, Бригадын генерал Г.Ариунбуянд хүлээлгэж өглөө.&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><br />\r\nХандив гардуулах үеэр БОАЖ-ын дэд сайд Ц.Батбаяр &ldquo;Дэлхий нийтээрээ аюулт халдварт өвчинтэй тэмцэж буй энэ үед БОАЖ-ын сайд Н.Цэрэнбатаар ахлуулсан ажлын хэсэг &ldquo;Мөнхийн хөршдөө сэтгэлийн дэмжлэг&rdquo; аяныг улс орон даяар амжилттай зохион байгуулж, 400 орчим сая төгрөгийг БНХАУ-ын Элчин сайдын яаманд хүлээлгэн өгсөн. Харин одоо Монгол Улсынхаа гол, мөрөн усыг хамгаалдаг 21 аймгийн сав газрын захиргаанаас иргэдийнхээ аюулгүй байдлыг ханган ажиллаж буй ОБЕГ-ын албан хаагчдад 3.180.000 төгрөгийг хүргүүлснийг гардуулж байна&rdquo; хэмээсэн юм. Улсын онцгой комиссын нарийн бичгийн дарга, Бригадын генерал Г.Ариунбуян &ldquo;ОБЕГ-ын албан хаагчдад сэтгэлийн болон мөнгөн дэмжлэг үзүүлж буй 21 аймгийн сав газрын захиргааны хамт олонд Улсын онцгой комиссын нэрийн өмнөөс талархал илэрхийлж, Шадар сайдын гарын үсэг бүхий талархлыг гардуулж байна. Бид энэхүү аюулт өвчнийг хамтдаа даван туулна гэдэгт итгэлтэй байна.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/2215_df3f2f182e308b4485662fc40ff6ab04.jpg\" style=\"width: 768px; height: 516px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Сав газрын захиргаадын хамт олны цаашдын ажилд амжилт хүсье&rdquo; гэлээ. Байгаль орчин, аялал жуулчлалын сайдын тушаалаар Монгол орны усны сав газрыг батлан, Засгийн газрын тогтоолоор Сав газрын захиргаадыг байгуулан ажиллах шийдвэр гаргасны дагуу 21 аймагт усны сав газрын захиргаадыг байгуулан үйл ажиллагаа явуулж байгаа бөгөөд одоогоор орон нутагт усны 21 сав газрын захиргаа, 17 сав газрын зөвлөл ажиллаж байна.</p>\r\n', 1586925464, 1662539275, 30, 1, 1, 0),
(69, 13, 'img/news/powermn_1662534736.png', '', 'img/news/powermn_1662534736hero2.jpg', '1', 'Давж заалдах шатны шүүх БРАВО', '<p><span xss=\"removed\">Одоо зайсангийн амыг 20 жил бузарласан хөрөнгөтнүүд хуулийн өмнө бөхийнө гэдэгт итгэж байна.</span><br></p>', '<p style=\"text-align: justify;\">Уулын амыг хашчихаад өөрийн болгосон мэт аашилдаг эрхтэн, дархтнуудын өмнө төр хүчин мөхөстдөг жишээ цөөнгүй. Хамгийн наад зах нь л гэхэд Богд уул, Зайсан толгой орчмын тусгай хамгаалалттай газрыг хэдэн 10 гагаар нь тойруулж хашаа хатгачихаад газрын төлбөрөө төлдөггүй, орц, гарц гаргахгүй хав дарчихдаг болсоор нэлээд хэдэн жилийн нүүр үзэж буй.</p>\r\n\r\n<p style=\"text-align: justify;\">1990 оноос эхлэн олгож эхэлсэн замбараагүй газар олголт, эрх мэдэлтнүүдийн гаргасан шийдвэрийн &ldquo;ач&rdquo;-аар нийгмийн тэгш бус хуваарилалт бий болж, Зайсан, Богд уул орчимд өнөөдөр баячууд амьдардаг гэдэг ойлголт нэгэнт бий болчихсон. Угтаа бол тэнд хуулиараа аялал жуулчлалын чиглэлээр үйл ажиллагаа явуулах зөвшөөрөл бүхий аж ахуйн нэгжүүд л үйлчилгээ үзүүлэх учиртай. Харамсалтай нь хэн нэгэн даргын үед авсан газартай аль нэгэн дарга барьцаж, гуйх үедээ гуйж, гуядах үедээ гуядаж газар авсаар өнөөдрийн байдалд хүрээд буй. Энэ асуудал үе үеийн Байгаль орчны сайд нарын толгойны өвчин болсоор өнөөдөртэй золгосон. Өмнө нь олгосон газрыг цуцлахаар хэн нэгэн даргын газар, танил ихтын газар байдаг учир байгаль орчны сайд нарын хувьд газар цуцлах асуудал нь толгойны өвчин болчихдог талтай. Өөрөөр хэлбэл Байгаль орчны сайд нар шүүхийн өмнө хүчгүйддэг гэсэн үг.</p>\r\n\r\n<p style=\"text-align: justify;\">Харин У.Хүрэлсүхийн Засгийн газар нийгэмд бугшсан олон асуудлын идээ бээрийг шахах ажлыг эхлүүлсний үр дүнд байгаль орчны салбарт нэлээд ахиц дэвшил гарч байгаа гээд хэлчихэд нэг их буруутахгүй нь лавтай. УИХ-ын гишүүн, БОАЖ-ын сайд Н.Цэрэнбатаар ахлуулсан БОАЖЯ-ныхан өнгөрсөн хугацаанд хариуцлагатай уул уурхайн эхлэлийг тавихын зэрэгцээ дээрх жишгээр тэгш бусаар олгосон яамныхаа хамааралд байх газрын асуудлыг цэгцэлж эхэлсэн нь олны талархлыг хүртээд буй. Тодруулбал, 2018, 2019 онд БОАЖ-ын сайд Н.Цэрэнбатын тушаалаар дархан цаазат газрын нийтлэг дэглэм горимыг зөрчсөн, газрын төлбөр төлөөгүй, үйл ажиллагаа явуулаагүй гэх үндэслэлээр Богдхан уулын Арцатын ам, Зайсангийн ам, Түргэний ам, Хүүшийн ам, Чандманий ам, Чулуутын ам, Хүрхрээгийн аманд 140 гаруй иргэн, аж ахуйн нэгж байгууллагын газар ашиглах эрхийг цуцалсан.</p>\r\n\r\n<p style=\"text-align: justify;\">Мэдээж эрхтэн дархтнуудын эрх ашгийг хөндсөн сайдын тушаал, шийдвэр дургүйг нь хүргэж, хэвлэл мэдээллийн хэрэгслээр дайрч доромжлохоос эхлээд бишгүй л дайралтад өртнө. Ингээд ч бууж өгөхгүй бол газар ашиглах эрхээ цуцлуулагсад шүүхэд гомдол гаргах эрх нь нээлттэй. Яг энэ л эсэргүүцэлтэй дээрх тушаал шийдвэрүүд тулгарч, анхан шатны шүүхээс БОАЖ-ын сайдын тушаалыг хүчингүй болгодог.</p>\r\n\r\n<p style=\"text-align: justify;\">Өнгөрсөн 30 гаруй жилийн хугацаанд хийсэн замбараагүй газар олголтын асуудлыг одоогийн төр засгийн удирдлагууд боломжоороо засах гэж оролдож байгаа дүр зураг ажиглагдаж байгаа нь сайшаалтай ч тушаалыг нь хүчингүй болгодог шүүх хэний талд үйлчилдэг вэ гэдэг хардлагад өртдөг. Харин сүүлийн үед хууль хяналтын байгууллагуудад шинэчлэлийн салхи сэвэлзэж, төрөөс хийж хэрэгжүүлэх гэж буй ажлыг дэмжих үзэгдэл ажиглагдаж эхэлсэн нь сайшаалтай. Тухайлбал, БОАЖ-ын сайдын тушаалаар газар ашиглах эрхээ цуцлуулаад байсан газрын төлбөр төлдөггүй, зориулалтын дагуу үйл ажиллагаа явуулдаггүй байсан нэр бүхий компаниуд БОАЖ-ын сайд Н.Цэрэнбатын шийдвэрийг шүүхэд өгч, ялалт байгуулсан байсныг Захиргааны хэргийн давж заалдах шатны шүүхээс хүчингүй болгож, төрийг ажлаа хийх боломжоор хангах ажлын эхлэлийг тавьсанд алга ташихаар яахав.</p>\r\n\r\n<p style=\"text-align: justify;\">Улсын тусгай хамгаалалттай газарт газар ашиглах эрх авчихаад төлбөрөө төлдөггүй, зориулалтын дагуу үйл ажиллагаа явуулдаггүй компаниудын толгойг шүүх, шүүгчид илж, газар ашиглах эрхийг нь цуцлах шийдвэр гаргасан сайдын тушаалыг хүчингүй болгох шийдвэр гаргадаг цаг үүгээр өндөрлөвөл тэгш бус хуваарилалтыг засах гэж оролдож буй өнөөгийн төрийн үйлдэл ажил хэрэг болох нь дамжиггүй. Ямартай ч мөнгөний өмнө хүчин &nbsp;мөхөстөж, хүчгүйд үйлчилдэг гэгддэг нэрнээсээ шүүх салж эхлэв бололтой. Bravo</p>\r\n\r\n<p style=\"text-align: justify;\">Одоо зайсангийн амыг 20 жил бузарласан хөрөнгөтнүүд хуулийн өмнө бөхийнө гэдэгт итгэж байна.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n', 1587093432, 1662535590, 105, 1, 2, 0),
(70, 7, 'img/news/powermn_1662538251.png', '', '', '0', 'Бурхан багшийн цэцэрлэгт хүрээлэнг тохижуулж эхэллээ', '<p><span xss=\"removed\">Бурхан багшийн цэцэрлэгт хүрээлэнг тохижуулж эхэллээ.</span><br></p>', '<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/93806162_216520046275754_2147954973416095744_n.jpg\" style=\"width: 1000px; height: 750px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Бурхан багшийн цэцэрлэгт хүрээлэнг тохижуулж эхэллээ. Зайсангийн аманд байрлах Бурхан багшийн цэцэрлэгт хүрээлэнгийн үйл ажиллагааг Богдхан уулын дархан цаазат газрын хамгаалалтын захиргаа хариуцаж байна. Хамгаалалтын захиргаанаас тус цэцэрлэгт хүрээлэнг зориулалтын дагуу ажиллуулахад шаардлагатай засвар, орчны тохижилтыг хийж, шинэ зураг төслийг гаргуулан холбогдох байгууллагуудад нь хүргүүллээ. Ингэснээр иргэдийн зорин очих тав тухтай цэцэрлэгт хүрээлэнгийн тоо нэгээр нэмэгдэж байна.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/93879194_2566800913573028_6165192074690822144_n.jpg\" style=\"width: 1000px; height: 750px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/94185624_181269746246451_1230636609955692544_n.jpg\" style=\"width: 680px; height: 309px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/93998075_2965481613517943_3487456759373627392_n.jpg\" style=\"width: 1000px; height: 750px;\" /></p>\r\n', 1587442426, 1662538251, 22, 1, 1, 0),
(71, 7, 'img/news/powermn_1662538028.png', '', '', '0', 'Худал мэдээлэл түгээсэн иргэнд хуулийн хариуцлага хүлээлгэнэ', '<p><span xss=\"removed\">Энэхүү худал мэдээлэл нь өндөржүүлсэн бэлэн байдал зарласан энэ хариуцлагатай үед олон нийтийг бухимдуулж, төөрөгдүүлсэн, айдас түгшүүр төрүүлэх нөхцөл байдал үүсгэсэн байна.</span><br></p>', '<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/94312271_1604278046390018_3956618581399044096_n.jpg\" style=\"width: 1137px; height: 744px;\" /><br />\r\nОлон нийтийн дунд цахим хуудас ашиглан өөрийн фэйсбүүк хуудсаар дамжуулан &ldquo;үхсэн малын махыг өнгө оруулж байна&rdquo; гэсэн тайлбар бүхий хэзээ хаана хийгдсэн нь тодорхой бус бичлэгийг байршуулан нөөцийн мах бэлтгэлтэй холбох зорилго бүхий мэдээлэл байршуулж, олон нийтийг төөрөгдүүлсэн худал мэдээллийг түгээсэн байна.</p>\r\n\r\n<p style=\"text-align: justify;\">Энэхүү худал мэдээлэл нь өндөржүүлсэн бэлэн байдал зарласан энэ хариуцлагатай үед олон нийтийг бухимдуулж, төөрөгдүүлсэн, айдас түгшүүр төрүүлэх нөхцөл байдал үүсгэсэн байна. Худал мэдээлэл түгээсэн иргэнийг олж тогтоон, холбогдох хуулийн хариуцлага хүлээлгэхийг Хүнс, хөдөө аж ахуй, хөнгөн үйлдвэрийн яам,&nbsp; Мал эмнэлгийн ерөнхий газар Баянзүрх дүүргийн цагдаагийн хэлтэс,&nbsp; Эрүүгийн цагдаагийн албаны Эдийн засгийн гэмт хэрэгтэй тэмцэх газар хамтран ажиллаж байна.</p>\r\n\r\n<p style=\"text-align: justify;\">Нийслэлийн хүн амын 2020 оны хаврын улирлын махны нийлүүлэлтийг нэмэгдүүлэх, үнийг тогтвортой хадгалах зорилгоор Нийслэлийн Засаг даргын 2019 оны А/899 дүгээр захирамжаар мал, мах бэлтгэх нөөцлөх, худалдан борлуулах, хяналт тавих үүрэг бүхий Ажлын хэсгийг Улаанбаатар хотын Ерөнхий менежер бөгөөд Захирагчийн ажлын албаны&nbsp; даргаар ахлуулан байгуулсан.</p>\r\n\r\n<p style=\"text-align: justify;\">Тухайн ажлын хэсэгт Хүнс, хөдөө аж ахуй, хөнгөн үйлдвэрийн яам, Мэргэжлийн хяналтын ерөнхий газар, Мал эмнэлгийн ерөнхий газар, дүүргүүдийн Засаг дарга нар, Нийслэлийн хүнс, хөдөө аж ахуйн газар, дүүргүүдийн үйлдвэр, худалдаа, үйлчилгээний хэлтэс, төрийн бус байгууллагын төлөөллийг оролцуулж байгуулсан.</p>\r\n\r\n<p style=\"text-align: justify;\">Чанар, аюулгүй байдлын шаардлага хангасан мах нийлүүлж, худалдаалахын тулд Мэргэжлийн хяналтын байгууллага нь Төрийн хяналт шалгалтын тухай, Хүнсний тухай, Хүнсний бүтээгдэхүүний аюулгүй байдлын тухай, Мал эмнэлгийн байгууллага нь Малын эрүүл мэндийн тухай болон бусад хууль тогтоомжийн дагуу махны үйлдвэр бүхий аж ахуйн нэгжүүдийн махны нөөц бүрдүүлэлт, хадгалалт, тээвэрлэлт, худалдаалалт, чанар, аюулгүй байдалд хяналт шалгалтыг тогтмол хийж байна.&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Өндөржүүлсэн бэлэн байдал зарласан энэ хариуцлагатай үед энэхүү худал мэдээлэл нь олон нийтийг бухимдуулж, төөрөгдүүлсэн нөхцөл байдал үүсгэж байгааг албан ёсоор мэдэгдэж байна.&nbsp;&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Дотоодын махны хангамжийг тогтворжуулах зорилтын хүрээнд Нийслэлийн хүн амын хаврын улирлын хүнсний хэрэгцээнд зориулан Засгийн газрын 2019 оны 285, 329 дүгээр тогтоолын дагуу арилжааны банкны эх үүсвэрээр болон экспортлосон махны 10 хувьтай тэнцэх тоо хэмжээний махыг нийлүүлэх бодлогын гэрээ байгуулсан, Монгол Улсад албан ёсны бүртгэлтэй 40 орчим аж ахуйн нэгжийн, нийт 12.6 мянган тн махыг дотоодын зах зээлд нийлүүлэхээр бэлтгэсэн.</p>\r\n\r\n<p style=\"text-align: justify;\">Бэлтгэж, нөөцөлсөн махыг хөнгөлөлттэй үнээр худалдан борлуулах ажлыг 2020 оны 3 дугаар сарын 11-ний өдрөөс эхлүүлсэн. Нөөцийн махыг Нийслэлийн 9 дүүргийн 169 хорооны хүнсний 413 дэлгүүрээр дамжуулан хонины ястай мах 6700 төг/кг, үхрийн ястай мах 7700 төг/кг, ямааны мах 6200 төг/кг үнээр худалдаалж байгаа нь зах зээл дэх үнээс 19.7-33.7 хувиар хямд байна.</p>\r\n\r\n<p style=\"text-align: justify;\">Нөөцийн махны худалдаагаар 2020 оны 4 дүгээр сарын 20-ны өдрийн байдлаар нийт 1904.8 тн махыг нийлүүлээд байна. Үүнээс: үхрийн ястай мах&nbsp; 806.2 тн, хонины ястай мах 921.3 тн, ямааны ястай мах 177.3 тн. байна</p>\r\n\r\n<p style=\"text-align: justify;\">Нөөцийн махны худалдааг 2020 оны 7 дугаар сарын 01-ний өдөр хүртэл&nbsp; үргэлжлүүлнэ.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n', 1587712570, 1662538028, 14, 1, 1, 0),
(72, 7, 'img/news/powermn_1662537987.png', '', '', '0', 'Арцатын аманд гарсан түймрийг бүрэн унтраахаар ажиллаж байна', '<p><span xss=\"removed\">Арцатын аманд ААН-ийн буруутай үйл ажиллагааны улмаас гарсан түймэр бүрэн унтраагүй байна. </span><br></p>', '<p style=\"text-align: justify;\">Арцатын аманд ААН-ийн буруутай үйл ажиллагааны улмаас гарсан түймэр бүрэн унтраагүй байна. Түймэр асаж эхэлсэн үеэс БОАЖЯ болон Богдхан уулын дархан цаазат газрын хамгаалалтын захиргааны хамт олон НОБГ-тай хамтран газар дээр нь ажилласан.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/mameam.jpg\" style=\"width: 1000px; height: 662px;\" /><br />\r\nСайн дурын залуус нэгдэж, түймрийг газар авхуулахгүй цурманд оруулж чадсан ч түймэр уугисаар байгаа учир түймрийг бүрэн унтраахаар ажиллаж буй байгаль хамгаалагчид, гал сөнөөгчдөд хүч нэмж БОАЖЯ-ны харьяа ЦУОШГ, Туул голын сав газрын хамгаалалтын захиргаа, Ой судалгаа хөгжлийн төв, &ldquo;Монгол ус&rdquo; ТӨҮГ, Хан хэнтийн дархан цаазат газрын хамгаалалтын захиргааны зургаан машин, 30 гаруй хүн Арцтын аманд ажиллаж байна.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/0006.jpg\" style=\"width: 1000px; height: 750px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n', 1587979863, 1662537987, 17, 1, 1, 0),
(73, 7, 'img/news/powermn_1662537861.png', '', '', '0', '“Баянбүрдийн тойргоос Эх Нялхсын уулзвар хүртэлх” авто замыг хэсэгчлэн хаана', '<p><span xss=\"removed\">Нийслэлийн Засаг даргын Тамгын газар, нийслэлийн Авто замын хөгжлийн газраас хэрэгжүүлж буй 2020 оны томоохон шинэчлэлтийн ажлын нэг болох “Баянбүрдийн тойргоос Эх Нялхсын уулзвар хүртэлх 1.09 км авто замын ажил /Аюулгүйн тойргийн хамт/” -ыг “Улаанбаатар зам засвар, арчлалтын газар” ОНӨААТҮГ 2020 оны дөрөвдүгээр сарын 15-ны өдрөөс гүйцэтгэж байна.</span><br></p>', '<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/dsfadfsdfdsa_20200427014941.jpg\" style=\"width: 1000px; height: 500px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Нийслэлийн Засаг даргын Тамгын газар, нийслэлийн Авто замын хөгжлийн газраас хэрэгжүүлж буй 2020 оны томоохон шинэчлэлтийн ажлын нэг болох &ldquo;Баянбүрдийн тойргоос Эх Нялхсын уулзвар хүртэлх 1.09 км авто замын ажил /Аюулгүйн тойргийн хамт/&rdquo; -ыг &ldquo;Улаанбаатар зам засвар, арчлалтын газар&rdquo; ОНӨААТҮГ 2020 оны дөрөвдүгээр сарын 15-ны өдрөөс гүйцэтгэж байна.</p>\r\n\r\n<p style=\"text-align: justify;\">Шинэчлэлтийн ажлын хүрээнд авто замын хойд тал буюу Баянбүрдийн тойргоос-Эх Нялхсын зүүн урд уулзвар хүртэлх 0.6 км авто замын тээврийн хэрэгслийн хөдөлгөөнийг 2020 оны дөрөвдүгээр 29-нөөс тавдугаар 11-ны хооронд хязгаарлаж, шугам сүлжээний сэтгэлгээ, хуучин хучилтыг дахин боловсруулах, хоёр үе асфальт бетон хучилт, хэвтээ тэмдэглэгээний ажлуудыг хийнэ.</p>\r\n\r\n<p style=\"text-align: justify;\">Тухайн авто зам нь 1988-1989 онд баригдаж байсан бөгөөд өнөөдрийг хүртэл нийт замын уртад бүрэн шинэчлэлт хийгдэж байгаагүй. Шинэчлэснээр 3.75 м өргөн зургаан эгнээ авто зам, хоёр талаараа явган хүниий зам шинээр баригдана. Мөн Баянбүрдийн тойргийн зорчих хэсгийг бүрэн шинэчилнэ.</p>\r\n\r\n<p style=\"text-align: justify;\">Цаашид авто замын урд тал буюу Эх Нялхсын зүүн урд уулзвараас Баянбүрдийн тойрог хүртэлх 0.6 км авто зам болон Баянбүрдийн тойргийн тээврийн хэрэгслийн хөдөлгөөнийг шат дараатай хязгаарлах болно. Хөдөлгөөн хязгаарлах хугацаанд авто замын нэг урсгалыг хааж, эсрэг чиглэлд хөдөлгөөн зохион байгуулалтыг хийх тул зорчигч та бүхэн авто замын ачааллыг тооцон хөдөлгөөнд оролцохыг уриалж байна.</p>\r\n', 1587980053, 1662537861, 13, 1, 1, 1),
(74, 7, 'img/news/powermn_1662537573.png', '', '', '0', 'БОАЖ-ын сайд Н.Цэрэнбат браво', '<p><span xss=\"removed\">УИХ-ын чуулганы хуралдаанаар Ноён уул, Гутайн давааг улсын тусгай хамгаалалтад авах асуудлыг дэмжиж, холбогдох байнгын хороодоор хэлэлцүүлэхээр боллоо. </span><br></p>', '<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/2000.jpg\" style=\"width: 1000px; height: 700px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">УИХ-ын чуулганы хуралдаанаар Ноён уул, Гутайн давааг улсын тусгай хамгаалалтад авах асуудлыг дэмжиж, холбогдох байнгын хороодоор хэлэлцүүлэхээр боллоо. Олон жилийн турш Сэлэнгэ, Хэнтий аймгийнхны толгойны өвчин болж, байгаль орчинд халтай үйл ажиллагаа явуулж байсан уул уурхайн компаниудын өмнө хүчин мөхөсдөж байсан төрийн төмөр нүүрийг үзүүлэх эхлэлийг БОАЖ-ын сайд Н.Цэрэнбатын үед ийнхүү тавьж байна. Ноён уул, Гутайн даваа орчмыг улсын тусгай хамгаалалтад авч чадвал тухайн орчимд үйл ажиллагаа явуулж байгаа уул уурхайн команиудын тусгай зөвшөөрөл шууд цуцлагдаж, нөхөн сэргээлт хийлгэн улсын хамгаалалтад авах боломж бүрдэх юм.</p>\r\n\r\n<p style=\"text-align: justify;\">БОАЖЯ-наас Зарим газар нутгийг улсын тусгай хамгаалалтад авах тухай хуулийн төслийг УИХ-д өргөн барьж, &nbsp;9 аймгийн 29 сумын нутаг дэвсгэрийн 3.4 сая га талбайг хамарсан 22 газрыг улсын тусгай хамгаалалтад 2019 онд авсан. Улс орны хэмжээнд хамгийн тулгамдсан асуудлуудын нэг болоод байгаа хариуцлагагүй уул уурхайн асуудлыг цэгцэлж, улсын тусгай хамгаалалттай газар нутгийн хэмжээг нэмэгдүүлэх ажлыг гардан гүйцэтгэж байгаа БОАЖ-ын сайд Н.Цэрэнбат БРАВО.</p>\r\n\r\n<p style=\"text-align: justify;\">Түүний ачаар Архангай аймгийн Цэнхэр суманд хууль зөрчин үйл ажиллагаа явуулж байсан уурхайнуудыг хааснаар өнөөдөр Орхон гол тунгалаг урсаж эхэллээ. Өмнөговь аймгийн Тост тосон бумбын нурууг улсын тусгай хамгаалалтад авснаар заналхийлж байсан уул уурхайн компаниуд савраа татсан. Отгонтэнгэр хайрханы өврийг сэндийлэх гэж байсан уул уурхайн компанийн тусгай зөвшөөрлийг цуцалсан, Сэлэнгэ, Баянхонгор, Увс аймагт хууль зөрчин үйл ажиллагаа явуулж байсан уул уурхайн компаниудын тусгай зөвшөөрлийг цуцлуулж, нөхөн сэргээлт хийлгэж эхэлсэн нь БОАЖ-ын сайдаар ажиллаад гаргасан томоохон гавьяануудынх нь нэг яах аргагүй мөн юм. Гэхдээ тэрбээр &ldquo;Байгалийн хууль зөрчөөгүй, технологийн дэвшлийг ашиглан байгаль ээлтэй үйл ажиллагаа явуулж байгаа уул уурхайн компаниудыг дэмжинэ&rdquo; гэдгээ хэдийнэ илэрхийлээд байгаа. Түүний багийнханд баяр хүргэе.</p>\r\n', 1588325087, 1662537573, 16, 1, 1, 2),
(75, 7, 'img/news/powermn_1662534761.png', '', 'img/news/powermn_1662534761hero3.jpg', '1', 'Спорт заалны үйл ажиллагааг цагийн зохицуулалттайгаар нээхээр боллоо', '<p><span xss=\"removed\">стандартын шаардлага хангах хэмжээнд үйл ажиллагаа явуулж байгаа спорт заал, бассейн, бүжгийн клуб, сургалтын төвийн тэнхмийн сургалтаас бусад сургалтын үйл ажиллагааг нээхээр заажээ. </span><br></p>', '<p style=\"text-align: justify;\">Дэлхий дахинд аюулт цар тахлын хэмжээнд хүрч 213 улс бүс нутагт дэлгэрч, 3.2 сая гаруй тохиолдол бүртгэгдэж, 230 гаруй мянган хүний амь насанд хүрсэн COVID19 буюу шинэ коронавирусын халдвараас нийслэлийн иргэд өртөхөөс урьдчилсан сэргийлэх зорилгоор өнгөрөгч 1 сараас эхлэн Улсын онцгой комисс болон Нийслэлийн Онцгой комиссоос шийдвэр гаргаж,&nbsp; Нийслэлийн Засаг даргын захирамжаар иргэдийн дунд хүмүүс олноороо цуглах олон нийтийн арга хэмжээг зохион байгуулахгүй байх, Их дээд сургууль, ерөнхий боловсролын сургууль цэцэрлэгийн үйл ажиллагаанд хөл хорио тогтоох, Нийслэлийн хэмжээнд бүх тѳрлийн баар, биллиард, спорт заал зэрэг спорт, соёл урлагийн газрууд, сургалтын төвүүдийн үйлчилгээг түр зогсоох шийдвэрийг 4 сарын 30-ны өдрийг хүртэл мөрдөн хэрэгжүүлэх А/436 дугаар захирамжийг өмнө нь гаргаж байсан.&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Тэгвэл өмнө гарсан дээрх&nbsp; захирамжийн хуулийн үйлчлэл өнөөдөр дуусгавар болж байгаатай холбогдуулан Нийслэлийн Засаг дарга С.Амарсайхан&nbsp; А/590 дүгээр захирамж гаргажээ.&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Захирамжид өмнөх захирамжийг үйлчлэх хугацааг 2020 оны 05 дугаар сарын 31-ний өдөр хүртэл сунгаж байгааг дурьдсаны зэрэгцээгээр&nbsp; улс, нийслэлийн эдийн засаг, хувийн хэвшлийн байгууллага, түүнд ажиллагчдын үйл ажиллагааг дэмжих зорилгоор, мөн Засгийн газраас өгсөн үүрэг чиглэл, иргэд, аж ахуйн нэгжийн хүсэлт, саналыг үндэслэн нийслэлийн нутаг дэвсгэрт стандартын шаардлага хангах хэмжээнд үйл ажиллагаа явуулж байгаа спорт заал, бассейн, бүжгийн клуб, сургалтын төвийн тэнхмийн сургалтаас бусад сургалтын үйл ажиллагааг нээхээр заажээ.&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Мөн архи согтууруулах ундаагаар үйлчилдэг байгууллагын үйл ажиллагаа явуулах цагийн хуваарийг 07:00-00:00 цаг болтол сунгасан бол шашин сүм хийдийн байгууллагууд зөвхөн дотоод үйл ажиллагаагаа эрхэлж болохыг захирамжид дурьджээ. Ингэснээр баар, караоке зэрэг байгууллага 00:00 цаг хүртэл үйл ажиллагаагаа явуулах боломж бүрдэж байгаа юм.</p>\r\n\r\n<p style=\"text-align: justify;\">Нийслэлийн Засаг даргын захирамжийг бүрэн эхээр нь танилцуулж байна.&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/download.jpg\" style=\"width: 750px; height: 1000px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/download%20%281%29.jpg\" style=\"width: 750px; height: 1000px;\" /><br />\r\n&nbsp;</p>\r\n', 1588325545, 1662534761, 15, 1, 3, 0),
(76, 7, 'img/news/powermn_1662537612.png', '', '', '0', 'Маргаашнаас эхлэн 24 байршилд нөөцийн махны өргөтгөсөн худалдаа зохион байгуулна', '<p><span xss=\"removed\">“Нөөцийн мах”-ны өргөтгөсөн худалдааны явц, махны борлуулалтын дүнг харгалзан үзэж, шаардлагатай тохиолдолд хугацааг сунгах боломжтой аж. </span><br></p>', '<p style=\"text-align: justify;\"><img alt=\"\" src=\"/uploads/images/95101254_3823843267687805_5268292861928931328_n_20200501121335.jpg\" style=\"width: 960px; height: 480px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Нийслэлийн хэмжээнд нөөцийн махны өргөтгөсөн худалдааг маргаашнаас буюу тавдугаар сарын 2-ноос эхлэн долоо хоногийн турш 24 байршилд зохион байгуулахаар болсон талаар өнөөдөр Улаанбаатар хотын Ерөнхий менежер бөгөөд Захирагчийн ажлын албаны дарга Т.Гантөмөр, Улаанбаатар хотын Захирагчийн ажлын албаны Хүнс үйлдвэрлэл, худалдаа үйлчилгээний хэлтсийн дарга Д.Оюунболор, нийслэлийн Мэргэжлийн хяналтын газрын ХАБХААХХ-ийн дарга Т.Балжинням нар цахимаар мэдээлэл хийлээ.</p>\r\n\r\n<p style=\"text-align: justify;\">Нийслэлийн Засаг даргын 2020 оны А/889 дүгээр захирамж, Улаанбаатар хотын Ерөнхий менежерийн 2019 оны &ldquo;Нийслэлийн хүн амын махны тогтвортой хангамжийг бүрдүүлэх талаар авах зарим арга хэмжээний тухай&rdquo; А/309 дүгээр тушаалын хэрэгжилтийг хангуулах, 2020 оны хаврын улирлын махны хангамж, нийлүүлэлт, борлуулалтыг нэмэгдүүлэх, үнийг тогтвортой байлгах зорилгоор Нийслэлийн зургаан дүүргийн нутаг дэвсгэрт сонгогдсон 24 байршлын гадна талбайд зориулалтын хөргүүртэй тээврийн хэрэгслээр 2020 оны тавдугаар сарын 02-ны өдрөөс тавдугаар сарын 08-ны өдөр хүртэлх хугацаанд 10:00-19:00 цагийн хооронд &ldquo;Нөөцийн мах&rdquo;-ны өргөтгөсөн худалдаа /хонь, ямааны мах/-г зохион байгуулна.</p>\r\n\r\n<p style=\"text-align: justify;\">&ldquo;Нөөцийн мах&rdquo;-ны өргөтгөсөн худалдааны явц, махны борлуулалтын дүнг харгалзан үзэж, шаардлагатай тохиолдолд хугацааг сунгах боломжтой аж. Өргөтгөсөн худалдааг ХХААХҮЯ, Улаанбаатар хотын Захирагчийн ажлын алба, нийслэлийн Хүнс, хөдөө аж ахуйн газар, нийслэлийн Мэргэжлийн хяналтын газар, нийслэлийн Мал эмнэлгийн газар, нийслэлийн Цагдаагийн удирдах газар, Баянгол, Баянзүрх, Чингэлтэй, Сүхбаатар, Сонгинохайрхан, Хан-Уул дүүргийн Засаг даргын Тамгын газар тус тус хамтран өндөржүүлсэн бэлэн байдлын хүрээнд гарсан шийдвэр, дүрэм журам, зөвлөмжийг чанд баримтлан мөрдөж, тогтсон байршлуудад зохион байгуулах юм байна.&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">Өргөтгөсөн худалдаагаар борлуулах нөөцийн махны үнийн хувьд:</p>\r\n\r\n<p style=\"text-align: justify;\">Хонины ястай мах-6500 төг<br />\r\nЯмааны ястай мах-6000 төгрөгөөр тус тус худалдаална.</p>\r\n', 1588325977, 1662537612, 19, 1, 1, 3),
(77, 12, 'img/news/powermn_1662605061.png', NULL, 'img/news/powermn_1662605061.jpg', '0', 'Виде мэдээ энд байнга', '<p>Виде мэдээ энд байнгаВиде мэдээ энд байнга Виде мэдээ энд байнга<br></p>', '<p>Виде мэдээ энд байнга&nbsp;&nbsp;Виде мэдээ энд байнга&nbsp;Виде мэдээ энд байнга&nbsp;Виде мэдээ энд байнга</p>\r\n', 1662605061, 1662605061, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(255) NOT NULL,
  `menu` int(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `pics` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `created` int(50) NOT NULL,
  `updated` int(50) NOT NULL,
  `visited` int(255) NOT NULL DEFAULT 0,
  `visible` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(255) NOT NULL,
  `menu` int(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `pics` varchar(255) DEFAULT NULL,
  `text0` varchar(255) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `text3` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created` int(50) NOT NULL,
  `updated` int(50) NOT NULL,
  `visited` int(255) NOT NULL DEFAULT 0,
  `visible` int(1) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `menu`, `pic`, `pics`, `text0`, `text1`, `text2`, `text3`, `description`, `content`, `created`, `updated`, `visited`, `visible`, `order`) VALUES
(39, 0, 'img/slider/invest_1461555730.png', NULL, 'wew', 'ew', 'ew', 'eweww', NULL, NULL, 1461555730, 1461556297, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `post_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `testiminols`
--

CREATE TABLE `testiminols` (
  `id` int(255) NOT NULL,
  `menu` varchar(255) DEFAULT NULL,
  `order` int(255) NOT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `title_0` varchar(255) NOT NULL,
  `title_1` varchar(255) DEFAULT NULL,
  `title_2` varchar(255) DEFAULT NULL,
  `title_3` varchar(255) DEFAULT NULL,
  `title_4` varchar(255) DEFAULT NULL,
  `content_0` text DEFAULT NULL,
  `content_1` text DEFAULT NULL,
  `content_2` text DEFAULT NULL,
  `content_3` text DEFAULT NULL,
  `content_4` text DEFAULT NULL,
  `rating` double(255,3) DEFAULT NULL,
  `created` int(255) NOT NULL,
  `updated` int(255) NOT NULL,
  `visible` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testiminols`
--

INSERT INTO `testiminols` (`id`, `menu`, `order`, `pic`, `title_0`, `title_1`, `title_2`, `title_3`, `title_4`, `content_0`, `content_1`, `content_2`, `content_3`, `content_4`, `rating`, `created`, `updated`, `visible`) VALUES
(11, 'fa-money', 0, '', 'Компанийн ба Худалдааны эрх зүй', 'Corporate & Commercial law', '公司综合类业务', '会社法・商法', '회사 및 무역 법률 ', '', '', '', '', '', NULL, 1485710722, 1486391986, 1),
(12, 'fa-bank', 4, '', 'Хөрөнгийн зах зээл ба Үнэт цаас', 'Capital market & Securities', '资本市场和证券', '資本市場及び証券', '주식 시장 및 채권 ', '', '', '', '', '', NULL, 1485870409, 1486392210, 1),
(13, 'fa-archive', 5, '', 'Компани нэгтгэх ба Хувьцаа худалдан авах', 'Mergers & Acquisitions', '公司兼并与收购', '会社の合併及び株の取得', '회사 병합 및 주식 구매 ', '', '', '', '', '', NULL, 1485870809, 1486392290, 1),
(14, 'fa-briefcase', 6, '', 'Банк, Санхүү ба Даатгал', 'Banking, Finance and Insurance', '银行与非银行金融类业务', '銀行、ファイナンス及び保険', '은행, 금융 및 보험 ', '', '', '', '', '', NULL, 1485870951, 1486392348, 1),
(15, 'fa-handshake-o', 7, '', 'Хөрөнгө оруулалт ба Хөрөнгө зуучлах', 'Private Equity and Investment', '投资与房产中介', '投資及びマーケティング投資 ', '투자 및 투자중개', '', '', '', '', '', NULL, 1485871120, 1486392414, 1),
(16, 'fa-diamond', 8, '', 'Уул уурхай ба Эрдэс баялаг', 'Mining & Metals', '矿业与能源', '鉱業及び鉱物資源', '광산 및 자원 ', '', '', '', '', '', NULL, 1485871476, 1486392479, 1),
(17, 'fa-globe', 9, '', 'Газрын тос, Байгалийн хий ба Эрчим хүч', 'Oil, Gas and Energy', '石油，天然气和电力', '石油、ガス及びエネルギー', '석유, 천연가스 및 에너지 ', '', '', '', '', '', NULL, 1485871654, 1486392554, 1),
(18, 'fa-percent', 10, '', 'Татвар', 'Taxation', '税务', '税務', '세금', '', '', '', '', '', NULL, 1485871706, 1486392655, 1),
(19, 'fa-home', 11, '', 'Үл хөдлөх хөрөнгө ба Барилга', 'Real Estate & Construction', '房地产与建设工程', '不動産及び建築', '부동산 및 건설 ', '', '', '', '', '', NULL, 1485872173, 1486392703, 1),
(20, 'fa-pencil-square-o', 12, '', 'Лиценз ба Зөвшөөрөл', 'Licensing & Permitting', '资质与许可证', '監察及び特別免許状', '라이센스 및 특허 ', '', '', '', '', '', NULL, 1485872324, 1486392785, 1),
(21, 'fa-users', 13, '', 'Засгийн газрын харилцаа ба Цагаачлал', 'Government relations & Immigration', '政府法律事务和移民', '行政関係及び移民', '정부관계 및 이민 ', '', '', '', '', '', NULL, 1485872451, 1486392874, 1),
(22, 'fa-file-pdf-o', 14, '', 'Концесс ба Тендер', 'Concession & Procurement', 'BT模式的投资和招标', '譲歩及び入札', '컨세이션 및 입찰 ', '', '', '', '', '', NULL, 1485872677, 1486392950, 1),
(23, 'fa-cubes', 2, '', 'Инженеринг, Худалдан авах ажиллагаа ба Барилга байгууламж (EPC)', 'Engineering, Procurement and Construction (EPC)', '(EPC)工程总承包和分包', 'エンジニアリング、及び建設', '설계, 조달, 시공(EPC) ', '', '', '', '', '', NULL, 1485872840, 1623335902, 1),
(24, 'fa-address-card', 15, '', 'Хөдөлмөрийн харилцаа ба Ажил эрхлэлт', 'Labor & Employment', '劳动纠纷', '労働法及び雇用', '근로관계 및 근무 ', '', '', '', '', '', NULL, 1485872975, 1486393065, 1),
(25, 'fa-lightbulb-o', 16, '', 'Патент, Барааны тэмдэг ба Оюуны өмч', 'Patents, Trademarks and Intellectual Property', '专利，知识产权', '特許、商標および知的財産', '특허, 상표, 지적 재산 ', '', '', '', '', '', NULL, 1485873114, 1486393125, 1),
(26, 'fa-road', 17, '', 'Дэд бүтэц ба Зам тээвэр', 'Infrastructure & Transport', '基础设施与公路', 'インフラ及び交通', '인프라 및 운송 ', '', '', '', '', '', NULL, 1485873257, 1486393174, 1),
(27, 'fa-legal', 18, '', 'Арбитр ба Шүүхийн маргаан', 'Arbitration & Litigation', '仲裁与法院', '仲裁及び裁判所', '중재 및 법원 분쟁 ', '', '', '', '', '', NULL, 1485873401, 1486393234, 1),
(28, 'fa-male', 19, '', 'Дампуурлын эрх зүй', 'Bankruptcy', '企业破产法律服务', '破産法', '파산 관련 법률 ', '', '', '', '', '', NULL, 1485873574, 1486393286, 1),
(29, 'fa-camera-retro', 20, '', 'Аялал жуулчлал ба Зочид буудал', 'Tourism & Hotels', '旅游与酒店', '', '관광 및 호텔 ', '', '', '', '', '', NULL, 1485873671, 1486393464, 1),
(30, 'fa-sitemap', 21, '', 'Өв залгамжлал ба Гэр бүлийн эрх зүй', 'Inheritance, Will and Family law', '资产继承与婚姻纠纷', '相続及び家族法', '상속 및 가정 관련 법률 ', '', '', '', '', '', NULL, 1485875122, 1486393646, 1),
(31, 'fa-microchip', 22, '', 'Хэвлэл мэдээлэл, Холбоо харилцаа ба Технологи', 'Telecommunications, Media and Technology', '媒体，通讯技术', 'IT・通信', '언론 매체, 통신수단 및 기술 ', '', '', '', '', '', NULL, 1485875156, 1486393531, 1),
(32, 'fa-leaf', 1, '', 'Байгаль орчин, Эрүүл мэнд ба Аюулгүй ажиллагаа', 'Environment, Health and Safety', '环境，卫生与安全', '環境、医療及び安全業務', '자연환경, 보건및 안전 ', '', '', '', '', '', NULL, 1485875322, 1623335860, 1),
(33, 'fa-pencil-square', 3, '', 'Хуулийн магадлан шалгалт ба Хянан нийцүүлэх үйл ажиллагаа', 'Due Diligence & Legal Compliance', '法律尽职调查和法律检查服务 ', '法的検証 ', '법적 승인 조사 및 이행  ', '', '', '', '', '', NULL, 1485875512, 1486393778, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'ZDAgTZXtEKlJCXGq1KCfwe', 1268889823, 1675236525, 1, 'janibekm', 'M', 'Big Admin', '70108687'),
(2, '103.26.195.216', 'xainar d', '$2y$08$ZRFZn5G4dXMfcACEu665aeOD0RcwqPrClsoRYeeXD3EfC7RzfNbZS', NULL, 'xainarbek@gmail.com', NULL, NULL, NULL, NULL, 1446823415, 1446830080, 1, 'Xainar', 'D', 'mlc', '95652645'),
(3, '66.181.180.122', 'enji enji', '$2y$08$cyCKqNxOcl31dnROzfwoh.zxzSrNPJsEnjpxubSfS/kV7JbLLzbH.', NULL, 'enji@power.mn', NULL, NULL, NULL, 'zW5ONF3vrKbeiEquL6fflO', 1581193805, 1588325014, 1, 'enji', 'enji', 'power.mn', '9999999'),
(4, '66.181.180.122', 'sarangoo sarangoo', '$2y$08$TSL4qXCGv56aaDH7A/QDsO7f22J4vJ5TFUMvB88Qu0fb/phZMNcJW', NULL, 'sarangoo@power.mn', NULL, NULL, NULL, NULL, 1581193880, 1587093079, 1, 'sarangoo', 'sarangoo', 'power.mn', '9999999');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(22, 1, 1),
(23, 1, 2),
(6, 2, 1),
(7, 2, 2),
(26, 3, 1),
(27, 3, 2),
(28, 4, 1),
(29, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `id` int(255) NOT NULL,
  `w_0` text NOT NULL,
  `w_1` text DEFAULT NULL,
  `w_2` text DEFAULT NULL,
  `w_3` text DEFAULT NULL,
  `w_4` text DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id`, `w_0`, `w_1`, `w_2`, `w_3`, `w_4`, `desc`) VALUES
(1, 'https://www.facebook.com/power.mnm', NULL, NULL, NULL, NULL, 'fb page link'),
(2, 'https://twitter.com/?lang=en', NULL, NULL, NULL, NULL, 'twitter link'),
(3, 'https://www.linkedin.com/', NULL, NULL, NULL, NULL, 'linkedin '),
(4, 'Шуурхай мэдээ', NULL, NULL, NULL, NULL, 'BREAKING NEWS'),
(5, 'Мэдээ', NULL, NULL, NULL, NULL, 'TRENDY NEWS'),
(6, 'Видео мэдээ', NULL, NULL, NULL, NULL, 'Видео мэдээ'),
(7, 'Бусад Мэдээ', NULL, NULL, NULL, NULL, 'Бусад Мэдээ'),
(8, 'Дагагчид', NULL, NULL, NULL, NULL, 'Дагагчид1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu1`
--
ALTER TABLE `menu1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_menu` (`menu`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_menu` (`menu`) USING BTREE;

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testiminols`
--
ALTER TABLE `testiminols`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=429;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menu1`
--
ALTER TABLE `menu1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testiminols`
--
ALTER TABLE `testiminols`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `post_menu` FOREIGN KEY (`menu`) REFERENCES `menu` (`id`);

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
