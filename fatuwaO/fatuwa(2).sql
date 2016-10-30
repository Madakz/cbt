-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2016 at 08:13 AM
-- Server version: 5.6.28-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fatuwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'kevin', 'kaslong');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
`id` int(11) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `biodata_id` int(11) unsigned NOT NULL,
  `subject_id` int(11) unsigned NOT NULL,
  `question_id` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `biodata_id`, `subject_id`, `question_id`) VALUES
(1, 'a', 16, 2, 1),
(2, 'd', 16, 2, 2),
(3, 'b', 16, 2, 3),
(4, 'a', 16, 2, 4),
(5, 'a', 14, 2, 1),
(6, 'a', 14, 2, 2),
(7, 'b', 14, 2, 3),
(8, 'c', 14, 2, 4),
(9, 'a', 35, 2, 1),
(10, 'c', 35, 2, 2),
(11, 'b', 35, 2, 3),
(12, 'b', 35, 2, 5),
(13, '', 90, 2, 0),
(14, '', 36, 2, 0),
(15, '', 37, 2, 0),
(16, '', 37, 3, 0),
(17, 'c', 37, 3, 7),
(18, 'b', 37, 2, 5),
(19, '', 11, 2, 1),
(20, '', 11, 2, 2),
(21, '', 11, 2, 3),
(22, '', 11, 2, 5),
(23, '', 12, 2, 1),
(24, '', 12, 2, 2),
(25, '', 12, 2, 3),
(26, '', 12, 2, 5),
(27, '0', 12, 2, 1),
(28, '0', 12, 2, 2),
(29, '0', 12, 2, 3),
(30, '0', 12, 2, 5),
(31, '0', 12, 2, 1),
(32, '0', 12, 2, 2),
(33, '0', 12, 2, 3),
(34, '0', 12, 2, 5),
(35, '0', 12, 2, 1),
(36, '0', 12, 2, 2),
(37, '0', 12, 2, 3),
(38, '0', 12, 2, 5),
(39, '0', 16, 3, 6),
(40, '0', 16, 3, 7),
(41, '0', 16, 3, 0),
(42, '0', 16, 3, 0),
(43, '0', 16, 3, 6),
(44, '0', 16, 3, 7),
(45, '0', 16, 3, 0),
(46, '0', 16, 3, 0),
(47, 'a', 11, 2, 1),
(48, 'a', 11, 2, 2),
(49, 'd', 11, 2, 3),
(50, 'c', 11, 2, 5),
(51, 'a', 11, 2, 1),
(52, 'd', 11, 2, 2),
(53, 'd', 11, 2, 3),
(54, 'b', 11, 2, 5),
(55, '0', 11, 2, 1),
(56, '0', 11, 2, 2),
(57, '0', 11, 2, 3),
(58, '0', 11, 2, 5),
(59, '0', 11, 2, 1),
(60, '0', 11, 2, 2),
(61, '0', 11, 2, 3),
(62, '0', 11, 2, 5),
(63, '0', 11, 2, 1),
(64, '0', 11, 2, 2),
(65, '0', 11, 2, 3),
(66, '0', 11, 2, 5),
(67, 'a', 11, 2, 1),
(68, 'c', 11, 2, 2),
(69, 'c', 11, 2, 3),
(70, 'b', 11, 2, 5),
(71, 'a', 11, 2, 1),
(72, 'c', 11, 2, 2),
(73, 'c', 11, 2, 3),
(74, 'b', 11, 2, 5),
(75, 'a', 11, 2, 1),
(76, 'd', 11, 2, 2),
(77, 'b', 11, 2, 3),
(78, 'b', 11, 2, 5),
(79, 'a', 11, 2, 1),
(80, 'd', 11, 2, 2),
(81, 'b', 11, 2, 3),
(82, 'b', 11, 2, 5),
(83, 'a', 11, 2, 1),
(84, 'd', 11, 2, 2),
(85, 'b', 11, 2, 3),
(86, 'b', 11, 2, 5),
(87, 'a', 11, 2, 1),
(88, 'd', 11, 2, 2),
(89, 'b', 11, 2, 3),
(90, 'b', 11, 2, 5),
(91, 'a', 11, 2, 1),
(92, 'd', 11, 2, 2),
(93, 'b', 11, 2, 3),
(94, 'b', 11, 2, 5),
(95, 'a', 11, 2, 1),
(96, 'd', 11, 2, 2),
(97, 'b', 11, 2, 3),
(98, 'b', 11, 2, 5),
(99, 'a', 11, 2, 1),
(100, 'd', 11, 2, 2),
(101, 'b', 11, 2, 3),
(102, 'b', 11, 2, 5),
(103, 'a', 11, 2, 1),
(104, 'd', 11, 2, 2),
(105, 'b', 11, 2, 3),
(106, 'b', 11, 2, 5),
(107, 'a', 11, 2, 1),
(108, 'd', 11, 2, 2),
(109, 'b', 11, 2, 3),
(110, 'b', 11, 2, 5),
(111, 'a', 11, 2, 1),
(112, 'd', 11, 2, 2),
(113, 'b', 11, 2, 3),
(114, 'b', 11, 2, 5),
(115, 'a', 11, 2, 1),
(116, 'd', 11, 2, 2),
(117, 'b', 11, 2, 3),
(118, 'b', 11, 2, 5),
(119, 'a', 11, 2, 1),
(120, 'd', 11, 2, 2),
(121, 'b', 11, 2, 3),
(122, 'b', 11, 2, 5),
(123, 'a', 11, 2, 1),
(124, 'd', 11, 2, 2),
(125, 'b', 11, 2, 3),
(126, 'b', 11, 2, 5),
(127, 'a', 11, 2, 1),
(128, 'd', 11, 2, 2),
(129, 'b', 11, 2, 3),
(130, 'b', 11, 2, 5),
(131, 'a', 11, 2, 1),
(132, 'd', 11, 2, 2),
(133, 'b', 11, 2, 3),
(134, 'b', 11, 2, 5),
(135, 'a', 11, 2, 1),
(136, 'd', 11, 2, 2),
(137, 'b', 11, 2, 3),
(138, 'b', 11, 2, 5),
(139, 'a', 11, 2, 1),
(140, 'd', 11, 2, 2),
(141, 'b', 11, 2, 3),
(142, 'b', 11, 2, 5),
(143, 'a', 11, 2, 1),
(144, 'd', 11, 2, 2),
(145, 'b', 11, 2, 3),
(146, 'b', 11, 2, 5),
(147, 'a', 11, 2, 1),
(148, 'd', 11, 2, 2),
(149, 'b', 11, 2, 3),
(150, 'b', 11, 2, 5),
(151, 'a', 20, 3, 6),
(152, 'b', 20, 3, 7),
(153, '0', 20, 3, 0),
(154, '0', 20, 3, 0),
(155, 'a', 19, 3, 6),
(156, 'b', 19, 3, 7),
(157, '0', 19, 3, 0),
(158, '0', 19, 3, 0),
(159, 'a', 18, 3, 6),
(160, 'b', 18, 3, 7),
(161, '0', 18, 3, 0),
(162, '0', 18, 3, 0),
(163, 'a', 22, 2, 1),
(164, 'd', 22, 2, 2),
(165, 'b', 22, 2, 3),
(166, 'b', 22, 2, 5),
(167, 'a', 22, 2, 1),
(168, 'd', 22, 2, 2),
(169, 'b', 22, 2, 3),
(170, 'b', 22, 2, 5),
(171, 'a', 23, 2, 1),
(172, 'd', 23, 2, 2),
(173, 'b', 23, 2, 3),
(174, 'b', 23, 2, 5),
(175, 'a', 34, 2, 1),
(176, 'd', 34, 2, 2),
(177, 'b', 34, 2, 3),
(178, 'b', 34, 2, 5),
(179, 'a', 34, 3, 6),
(180, 'b', 34, 3, 7),
(181, '0', 34, 3, 0),
(182, '0', 34, 3, 0),
(183, 'a', 35, 2, 1),
(184, 'd', 35, 2, 2),
(185, 'b', 35, 2, 3),
(186, 'b', 35, 2, 5),
(187, 'a', 35, 3, 6),
(188, 'b', 35, 3, 7),
(189, '0', 35, 3, 0),
(190, '0', 35, 3, 0),
(191, 'a', 38, 3, 6),
(192, 'b', 38, 3, 7),
(193, '0', 38, 3, 0),
(194, '0', 38, 3, 0),
(195, 'a', 39, 3, 6),
(196, 'b', 39, 3, 7),
(197, 'a', 39, 2, 1),
(198, 'd', 39, 2, 2),
(199, 'b', 39, 2, 3),
(200, 'b', 39, 2, 5),
(201, 'a', 39, 2, 1),
(202, 'd', 39, 2, 2),
(203, 'd', 39, 2, 3),
(204, 'b', 39, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
`id` int(11) NOT NULL,
  `jam_number` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `sur_name` varchar(200) NOT NULL,
  `other_name` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_birth` varchar(200) NOT NULL,
  `course` varchar(200) NOT NULL,
  `subject1` varchar(200) NOT NULL,
  `subject2` varchar(200) NOT NULL,
  `subject3` varchar(200) NOT NULL,
  `subject4` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `grade` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `jam_number`, `first_name`, `sur_name`, `other_name`, `gender`, `date_birth`, `course`, `subject1`, `subject2`, `subject3`, `subject4`, `phone`, `email`, `image`, `grade`) VALUES
(9, '12345678', 'bob', 'bob', 'bob', 'male', '2016-06-02', 'med', 'English', 'Biology', 'Chemistry', 'Physics', '1234567', 'l@l.com', '1466052352_Detection-of-Cancer.jpg', NULL),
(10, '12345', 'k', 'k', 'k', 'male', '2016-06-01', 'lk', 'English', 'English', 'English', 'English', '123456', 'k@kk.com', '1466052420_aboutimg.jpg', NULL),
(11, 'sajahgzbxmtj', 'madaxx', 'nikk', 'tim', 'male', '01-07-93', 'comp sci', 'English', 'Chemistry', 'Physics', 'mathematics', '08136943343', 'madakifatsen@gmail.com', '1467055216_2347066576120.jpg', '20'),
(12, '1HZC0ZV24X', 'madaxx', 'fga', 'gga', 'female', '32657', 'chem', 'Biology', 'Chemistry', 'Chemistry', 'mathematics', '075321616', 'mad@gmail.com', '1467055726_30 minutes in water .jpg', '0'),
(15, '6UVXRX7Z11', '', '', '', 'male', '', '', '', '', '', '', '', '', '1467136927_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(3).jpg', NULL),
(16, 'JNSDSJDABI', 'fgs', 'gs', 'gsh', 'male', '5353', 'hhgd', 'English', 'Chemistry', 'Physics', 'mathematics', '070868753542', 'mysticf@gmail.com', '1467136995_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(14).jpg', '0'),
(17, '7QOFEJACO5', 'fgs', 'gs', 'gsh', 'male', '5353', 'hhgd', 'English', 'Chemistry', 'Physics', 'mathematics', '070868753542', 'mysticf@gmail.com', '1467140214_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(14).jpg', NULL),
(18, 'JMO6PJA9R3', 'fgs', 'gs', 'gsh', 'male', '5353', 'hhgd', 'English', 'Chemistry', 'Physics', 'mathematics', '070868753542', 'mysticf@gmail.com', '1467140342_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(14).jpg', NULL),
(19, '401DFIRHHQ', 'fgs', 'gs', 'gsh', 'male', '5353', 'hhgd', 'English', 'Chemistry', 'Physics', 'mathematics', '070868753542', 'mysticf@gmail.com', '1467140768_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(14).jpg', NULL),
(20, 'FSKAD4IHNE', 'fgs', 'gs', 'gsh', 'male', '5353', 'hhgd', 'English', 'Chemistry', 'Physics', 'mathematics', '070868753542', 'mysticf@gmail.com', '1467140951_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(14).jpg', '2'),
(21, 'F4ADCQL7MD', 'hjalkghafhl', 'csgchvkds', 'hgfhhj', 'female', '4567', 'fghjk', 'Physics', 'mathematics', 'Biology', 'English', '43567890', 'damy@gmail.com', '1467141631_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(6).jpg', NULL),
(22, 'CHJP99S2EO', 'hjalkghafhl', 'csgchvkds', 'hgfhhj', 'female', '4567', 'fghjk', 'Physics', 'mathematics', 'Biology', 'English', '43567890', 'damy@gmail.com', '1467141759_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(6).jpg', NULL),
(23, 'AZ0116ISY4', 'hjalkghafhl', 'csgchvkds', 'hgfhhj', 'female', '4567', 'fghjk', 'Physics', 'mathematics', 'Biology', 'English', '43567890', 'damy@gmail.com', '1467141779_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(6).jpg', NULL),
(24, 'OJH407PA3Q', 'hjalkghafhl', 'csgchvkds', 'hgfhhj', 'female', '4567', 'fghjk', 'Physics', 'mathematics', 'Biology', 'English', '43567890', 'damy@gmail.com', '1467141832_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(6).jpg', NULL),
(25, 'OZ1G0USR8O', 'hjalkghafhl', 'csgchvkds', 'hgfhhj', 'female', '4567', 'fghjk', 'Physics', 'mathematics', 'Biology', 'English', '43567890', 'damy@gmail.com', '1467141892_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(6).jpg', NULL),
(26, 'M004XXOK0R', 'hjalkghafhl', 'csgchvkds', 'hgfhhj', 'female', '4567', 'fghjk', 'Physics', 'mathematics', 'Biology', 'English', '43567890', 'damy@gmail.com', '1467141915_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(6).jpg', NULL),
(27, 'P62R8FRBUS', 'hjalkghafhl', 'csgchvkds', 'hgfhhj', 'female', '4567', 'fghjk', 'Physics', 'mathematics', 'Biology', 'English', '43567890', 'damy@gmail.com', '1467141954_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(6).jpg', NULL),
(28, '6BPD3LZ84Q', 'hjalkghafhl', 'csgchvkds', 'hgfhhj', 'female', '4567', 'fghjk', 'Physics', 'mathematics', 'Biology', 'English', '43567890', 'damy@gmail.com', '1467141968_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(6).jpg', NULL),
(29, '099DR250PF', 'hjalkghafhl', 'csgchvkds', 'hgfhhj', 'female', '4567', 'fghjk', 'Physics', 'mathematics', 'Biology', 'English', '43567890', 'damy@gmail.com', '1467142331_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(6).jpg', NULL),
(30, 'RKN1RCROIG', 'hjalkghafhl', 'csgchvkds', 'hgfhhj', 'female', '4567', 'fghjk', 'Physics', 'mathematics', 'Biology', 'English', '43567890', 'damy@gmail.com', '1467142340_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(6).jpg', NULL),
(31, 'R6LXBUR5JM', 'hjalkghafhl', 'csgchvkds', 'hgfhhj', 'female', '4567', 'fghjk', 'Physics', 'mathematics', 'Biology', 'English', '43567890', 'damy@gmail.com', '1467142495_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(6).jpg', NULL),
(32, '69TUKMTRCZ', 'shjas', 'h', 'hgj', 'male', '5678', 'gfghjk', 'Biology', 'English', 'Chemistry', 'mathematics', '654356789', 'me@g.com', '1467142543_10519558_10152216978091881_7150797877060977677_o.jpg', NULL),
(33, 'IN4IKE5O24', 'shjas', 'h', 'hgj', 'male', '5678', 'gfghjk', 'Biology', 'English', 'Chemistry', 'mathematics', '654356789', 'me@g.com', '1467142554_10519558_10152216978091881_7150797877060977677_o.jpg', NULL),
(34, 'R7Q5V4N3W5', 'shjas', 'h', 'hgj', 'male', '5678', 'gfghjk', 'Biology', 'English', 'Chemistry', 'mathematics', '654356789', 'me@g.com', '1467142634_10519558_10152216978091881_7150797877060977677_o.jpg', '0'),
(35, 'LYOGVC1GMP', 'fdghj', 'dfghjk', 'sdfgh', 'male', '5678', 'fghjk', 'English', 'Biology', 'Chemistry', 'mathematics', '098765', 'h@m.com', '1467215373_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(1).jpg', '30'),
(36, 'F2JWFGE0ZC', 'Tabitha', 'TIMON', 'tapsy', 'female', '12/5/2008', 'law', 'Biology', 'Chemistry', 'English', 'mathematics', '0098765', 'target@gmail.com', '1467725679_2348134923502@s.whatsapp.net.jpg', NULL),
(37, 'WUWXVYIZ8X', 'happy', 'necho', 'dnaile', 'female', '12/5/677', 'med', 'English', 'Biology', 'Physics', 'Chemistry', '09876543', 'hq@g.com', '1467726385_Dews Noah Ark 20140822_104736.jpg', '0'),
(38, 'ZTEC0FLCEC', 'Faruk', 'Mohammmed', 'Lai', 'male', '3/4/1999', 'computer scie', 'English', 'Chemistry', 'Physics', 'mathematics', '2635587960-', 'FarukM@gmail.com', '1467931517_Emmy.jpg', '10'),
(39, 'ZW89XPKQJX', 'mhjjmr', 'rmr', 'mmue44u', 'female', '45662', 'hmdd,', 'English', 'Biology', 'Chemistry', 'mandarin', '23456587', 'rw@g.com', '1467937542_@_-- ï£«â™Â¡Æ§Æ§ Æ®â–³â™â–³â™ˆâ–³ï£«@_--(15).jpg', '25');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
`id` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `biodata_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `grade`, `biodata_id`, `subject_id`) VALUES
(1, 20, 11, 2),
(2, 20, 11, 2),
(3, 20, 11, 2),
(4, 20, 11, 2),
(5, 20, 11, 2),
(6, 20, 11, 2),
(7, 20, 11, 2),
(8, 20, 11, 2),
(9, 20, 11, 2),
(10, 10, 19, 3),
(11, 10, 19, 3),
(12, 10, 18, 3),
(13, 10, 18, 3),
(14, 10, 18, 3),
(15, 20, 22, 2),
(16, 20, 22, 2),
(17, 20, 23, 2),
(18, 20, 34, 2),
(19, 10, 34, 3),
(20, 20, 35, 2),
(21, 10, 35, 3),
(22, 10, 38, 3),
(23, 10, 39, 3),
(24, 15, 39, 2);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`id` int(11) NOT NULL,
  `question` text NOT NULL,
  `subject_id` int(11) unsigned NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `answer` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `subject_id`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`) VALUES
(5, 'what is a cell', 2, 'jumping', 'excretion', 'respiration', 'nutrition', 'a'),
(6, 'which of this is a monocotyledonous plant?', 2, 'tissue', 'organism', 'basic unit of life', 'fly', 'c'),
(7, 'which of this is apart of the cell theory', 2, 'tomato', 'maize', 'groundnut', 'coconut', 'b'),
(8, 'which of this is a growth hormone', 2, 'cells can fly', 'all new cells come from already existing cells', 'cells can swim', 'cells can dance', 'b'),
(9, 'which of this is fight or flee hormone', 2, 'ethtlene', 'somatotropin', 'adrenaline', 'oxytoxin', 'b'),
(10, 'an animal cell is ??..in shape.', 2, 'somatotropin', 'thyroxine', 'adrenaline', 'oesterogene', 'c'),
(11, 'what is the study of biology basically about', 2, 'hexagon', 'square', 'oval/round', 'triangl', 'c'),
(12, '??.is a modified leaf', 2, 'life', 'energy', 'electricity', 'shoes', 'a'),
(13, '??..is a class of food', 2, 'stem', 'flower', 'root', 'branch', 'b'),
(14, '??is a plant hormone', 2, 'rice', 'yam', 'beans', 'protein', 'd'),
(15, 'which of this is not a system of the body', 2, 'oxytoxine', 'somatotropin', 'testerone', 'blood', 'a'),
(16, '???is the most sensitive part of the retina', 2, 'circulatory', 'excretory', 'thinking', 'digestive', 'c'),
(17, 'which of this is not an organ of the circulatory system', 2, 'blind sp[ot', 'yellow spot', 'tissues', 'leg', 'b'),
(18, 'which of this is microorganism', 2, 'heart', 'veins', 'squamous cell', 'capillaries', 'c'),
(19, 'the finger and toe nails are modified hair', 2, 'virus', 'goat', 'tick', 'lice', 'a'),
(20, 'which of this is not an excretory product of th human body', 2, 'FALSE', 'maybe', 'don?t ask me', 'TRUE', 'd'),
(21, 'the eye is the organ of hearing', 2, 'sweat', 'blood', 'urine', 'bile', 'b'),
(22, 'phototropism is the response to light', 2, 'TRUE', 'FALSE', 'maybe', 'ask me next year', 'b'),
(23, 'the lymphs are part of the circulatory system', 2, 'TRUE', 'FALSE', 'who knows', 'ask my teacher', 'a'),
(24, 'electrical current is measured in', 2, 'FALSE', 'TRUE', 'don?t know', 'maybe', 'b'),
(25, 'heat is a form of energy', 4, 'watts', 'tesla', 'amperes', 'volt', 'c'),
(26, 'magnifying glass is what type of lens', 4, 'TRUE', 'FALSE', 'maybe', 'no', 'a'),
(27, 'Quantum mechanics says photons and electrons are??..', 4, 'convex', 'concave', 'contact lens', 'normal', 'a'),
(28, 'Metals expand when heated and do what when cooled?', 4, 'waves and particles', 'waves', 'particles', 'none of these', 'a'),
(29, 'Infrared light has a wavelength that is too long or short to be visible for humans?', 4, 'expand', 'contract', 'the hole is expand', 'none of these', 'b'),
(30, 'How many dimensions does M-theory encompass? ', 4, 'Long', 'infinite', 'short', 'none of these', 'a'),
(31, 'What does the word quantum as used in quantum physics mean?', 4, '9', '5', '15', '11', 'd'),
(32, 'When light bends as it has enters a different medium the process is known as what?', 4, 'a specific weight ', 'a specific energy', 'a specific amount ', 'none of these', 'c'),
(33, 'Experiment with ultra-cold atom gases may some day lead to a better understanding of this bane of travellers.', 4, 'Refraction', 'Reflection ', 'Interference', 'Diffraction', 'a'),
(34, 'What is the earth''s primary source of energy?', 4, 'resemblance', 'atomic gases ', 'turbulence', 'none of these', 'c'),
(35, 'This technology protects information by using the principle that you cannot observe a particle without changing it.', 4, 'stars', 'moon', 'The sun', 'Solar system', 'd'),
(36, 'What kind of eclipse do we have when the moon is between the sun and earth?', 4, 'Quantum cryptography', 'Quantum electronics', ' Quantum coherence', 'Photon polarization', 'a'),
(37, 'What does the lego MINDSTORMS line of robotics products get its namesake?', 4, 'orbital plane', ':Lunar eclipse', 'A solar Eclipse', 'umbra', 'd'),
(38, 'Electric power is typically measured in what units?', 4, 'a book ', 'video', 'both of these ', 'none of these', 'a'),
(39, 'This was one of the first inventions to come out of the study of Quantum mechanics?', 4, 'weber', 'tesla', 'watts', 'farad', 'c'),
(40, 'What state of art computer technology is used to train pilot when wanting to copy the experience of flying an aircraft?', 4, 'transistors', 'resistors', 'capacitors', 'inductors', 'a'),
(41, 'The filament inside an electric bulb is made of _______?', 4, 'a flying simulator', 'multiple simulator', 'driving simulator', 'ground vehicle simluator', 'a'),
(42, 'The most recognized model of how the universe begun is known as the?', 4, 'copper', 'aluminium', 'tungsten', 'silver', 'C'),
(43, 'Electric resistance is typically measured in what units?', 4, 'The big bang ', 'Homogeneity', 'wavelength', 'none of these', 'a'),
(44, '', 4, 'coulomb', 'newton', 'amperes', 'ohms', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'English'),
(2, 'Biology'),
(3, 'Chemistry'),
(4, 'Physics'),
(5, 'mathematics'),
(7, 'mandarin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=205;
--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
