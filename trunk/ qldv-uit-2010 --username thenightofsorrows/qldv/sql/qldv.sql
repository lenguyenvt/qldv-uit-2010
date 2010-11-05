-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2010 at 03:58 PM
-- Server version: 5.1.35
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doithi`
--
CREATE DATABASE `doithi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `doithi`;

-- --------------------------------------------------------

--
-- Table structure for table `doithi`
--

CREATE TABLE IF NOT EXISTS `doithi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tendoi` varchar(255) NOT NULL,
  `diem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `doithi`
--

INSERT INTO `doithi` (`id`, `tendoi`, `diem`) VALUES
(1, 'Final skills', 106),
(2, 'DDDV', 127),
(3, 'Full Power', 138),
(4, 'Doremon', 102),
(5, 'DHAP', 88),
(6, 'ÄAAKT', 102),
(7, 'CEIV', 75),
(8, 'Friends', 85),
(9, 'Alpha04', 96),
(10, '3DPro', 0),
(11, 'Lightning', 102),
(12, 'The losers', 105),
(13, '5TDR', 0),
(14, 'ITC', 0),
(15, 'iti1', 67),
(16, 'UIT_SE04', 58),
(17, 'FMan', 109),
(18, 'Join4Fun', 36),
(19, 'Bubble', 117),
(20, 'Reng reng', 93),
(21, 'Perseus', 114),
(22, '561', 131),
(23, '205A15', 83),
(24, 'QH114', 107),
(25, 'Center point', 112),
(26, 'CÃ¹i nhÆ° mÃ­a', 101),
(27, 'Dragonviet', 89),
(28, 'BTG', 135),
(29, 'Storm Rider', 78),
(30, 'BGB', 119),
(31, '@', 91),
(32, 'Newstar', 94),
(33, '4TUS', 110),
(34, 'UFO', 51),
(35, 'BIGWORLD', 100),
(36, 'It Star', 91),
(37, 'BTIT Group', 100),
(38, 'H5N1', 130),
(39, 'ALIAS', 69),
(40, 'KTX07', 123),
(41, 'HDx2T', 108),
(42, 'Legend', 104),
(43, 'Cold As Ice', 87),
(44, 'ChÄƒÌc nhÆ° bÄƒÌp', 119),
(45, '5ive', 0),
(46, 'Skylineuit', 114),
(47, 'CrossFire', 80),
(48, 'vnRB', 92),
(49, 'Feeder', 111),
(50, 'sky-uit', 0),
(51, 'EMBOCUOC', 95),
(52, 'BlueS', 86),
(53, 'K2C4 Senior', 149),
(54, '4T-ONE PURPOSE', 102),
(55, 'IRIS', 89),
(56, 'SPK-Chicken', 0),
(57, 'T3NO', 123),
(58, 'SVIS', 0),
(59, 'It&#39;s better', 129),
(60, 'B4U', 99),
(61, 'mÃ u xanh', 0),
(62, 'VitConTimMe', 84),
(63, 'y2kgroup', 98),
(64, 'HANDS_CE02', 88),
(65, 'TTNPV', 93),
(66, 'CE4.Fearless', 93),
(67, 'B107', 0),
(68, 'F2B', 106),
(69, 'IT4u', 78),
(70, 'IT_infinite', 90),
(71, 'PQ3T', 114),
(72, 'TNT', 92),
(73, 'X-Students', 111),
(74, 'iT4Y', 82),
(75, 'eBoys', 117),
(76, 'BakaBoy', 100),
(77, 'Vista_UIT', 0),
(78, 'N2S', 135),
(79, 'V5', 74),
(80, 'ZCrew', 103),
(81, 'sunflower_uit', 98),
(82, 'A2Z_2nd', 83),
(83, 'A2Z_1st', 92),
(84, 'Catalyst Team', 129),
(85, 'BKES', 105),
(86, 'IT_Teminus', 0),
(87, 'mango', 108),
(88, 'UIT-Chip', 76),
(89, 'ChickensNoob', 97),
(90, 'CS Group', 70),
(91, 'CS-SBTC', 72),
(92, 'counter-strike', 94),
(93, 'IPSENO', 97),
(94, 'NoGirlNearUs', 18),
(95, 'CS4', 108),
(96, 'BlackHole', 124),
(97, 'FABUS', 92),
(98, 'iTUS_QN', 118),
(99, 'TRADA', 0),
(100, 'The Friends', 88),
(101, 'DDOS5.1', 85),
(102, 'RGB', 124),
(103, 'Infostorm', 127),
(104, '6789 ver3', 91),
(105, '6789 ver2', 103),
(106, '6789 ver1', 111),
(107, 'XMBPD', 107),
(108, 'HeedMyCall', 0),
(109, '1st UIT', 118),
(110, 'illusion', 111),
(111, 'Lifebuoy', 141),
(112, 'UIT-NetWork', 113),
(113, 'BAMBOO', 97),
(114, 'BlueSky', 137),
(115, 'DDRL', 0),
(116, 'VÆ¯Æ N XA', 83),
(117, 'i-SNS', 94),
(118, 'New Ages', 108),
(119, '202', 92),
(120, 'KIT09', 96),
(121, 'AO', 121),
(122, 'CS1', 90),
(123, 'Ducati Monster', 126),
(124, 'Rainbow', 113),
(125, 'SuperChicken Vip', 85);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE IF NOT EXISTS `thanhvien` (
  `stt` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `doi` int(11) NOT NULL,
  `diem` int(11) NOT NULL,
  `phong` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`stt`, `ten`, `doi`, `diem`, `phong`) VALUES
(34, 'Nguyá»…n Ngá»c CÃ¢n', 1, 27, ''),
(262, 'Nguyá»…n LÆ°Æ¡ng Anh Ngá»c', 1, 24, ''),
(552, 'Nguyá»…n Táº¥n VÅ©', 1, 30, ''),
(56, 'Nguyá»…n Há»“ng Danh', 1, 25, ''),
(507, 'Phan VÄƒn TruyÃªn', 1, 0, ''),
(535, 'LÆ°Æ¡ng Cháº¥n Viá»…n', 2, 40, ''),
(571, 'LÃª Thá»‹ Duy Äan', 2, 25, ''),
(59, 'Nguyá»…n Thá»‹ Ngá»c Diá»…m', 2, 22, ''),
(62, 'Nguyá»…n Kim Dung', 2, 30, ''),
(184, 'Pháº¡m ÄÄƒng Khoa', 3, 38, ''),
(232, 'Nguyá»…n ÄÃ¬nh Luyáº¿n', 3, 25, ''),
(186, 'Pháº¡m Anh KhÆ°Æ¡ng', 3, 29, ''),
(181, 'ThÃ¡i Viá»‡t Khoa', 3, 36, ''),
(173, 'Tráº§n Minh KhÃ¡nh', 3, 35, ''),
(467, 'LÃª ÄÄƒng ThÆ°á»Ÿng', 4, 24, ''),
(39, 'Nguyá»…n HoÃ ng Ngá»c Cáº©n', 4, 24, ''),
(363, 'Tráº§n Táº¥n TÃ i', 4, 31, ''),
(2, 'Nguyá»…n HoÃ ng PhÃºc An', 4, 23, ''),
(399, 'ThÃ¡i ThÃ nh', 4, 0, ''),
(1, 'LÃª Quang An', 5, 27, ''),
(102, 'Há»©a ThiÃªn HÃ²a', 5, 11, ''),
(587, 'Triá»‡u Minh Äá»©c', 5, 24, ''),
(321, 'HÃ  VÄƒn PhÆ°á»›c', 5, 15, ''),
(14, 'Tráº§n Quá»‘c Anh', 6, 22, ''),
(17, 'BÃ¹i Tuáº¥n Anh', 6, 20, ''),
(581, 'Cao Tiáº¿n Äá»‹nh', 6, 25, ''),
(176, 'Nguyá»…n Khoa Quang Kháº£i', 6, 24, ''),
(364, 'Äáº­u Pháº¡m Há»¯u TÃ i', 6, 31, ''),
(345, 'HoÃ ng Vinh Sá»­', 7, 18, ''),
(474, 'Tráº§n TÃ¢n Tiáº¿n', 7, 19, ''),
(352, 'BÃ¹i Long Ká»³ SÆ¡n', 7, 0, ''),
(187, 'VÅ© Trung KiÃªn', 7, 18, ''),
(348, 'Nguyá»…n Thanh SÆ¡n', 7, 20, ''),
(28, 'VÃµ NgÃ´ BÃ¬nh', 8, 0, ''),
(97, 'CÃ¹ Phi Quang HÃ o', 8, 26, ''),
(41, 'LÃª Trung ChÃ¡nh', 8, 20, ''),
(45, 'NguyÃªn Tráº§n Chung', 8, 16, ''),
(206, 'Tráº§n Há»¯u Lá»™c', 8, 23, ''),
(550, 'LÃ‚M HÃ€N VÅ¨', 9, 26, ''),
(294, 'Táº  Táº¤N PHÃš', 9, 20, ''),
(192, 'LÃŠ QUANG Báº¢O LÃ‚N', 9, 25, ''),
(574, 'TRáº¦N Há»’NG Äáº T', 9, 25, ''),
(179, 'NGUYá»„N ÄÄ‚NG KHOA', 9, 0, ''),
(593, 'Nhá»¯ Duy ÄoÃ n', 10, 0, ''),
(69, 'Phan HoÃ ng Duy', 10, 0, ''),
(81, 'Phan VÄƒn DÅ©ng', 10, 0, ''),
(404, 'Nguyá»…n Long ThÃ nh', 10, 0, ''),
(74, 'Äáº·ng NguyÃªn Duy', 10, 0, ''),
(563, 'Nguyá»…n Tuáº¥n VÅ©', 11, 31, ''),
(416, 'BÃ nh LÃª VÅ© ThÃ¢n', 11, 23, ''),
(564, 'CÃ¡p VÄƒn VÅ©', 11, 22, ''),
(519, 'LÃª Ngá»c Tuáº¥n', 11, 26, ''),
(456, 'Tráº§n Ngá»c Thiá»‡n', 11, 0, ''),
(269, 'Nguyá»…n Tháº¿ NghÄ©a', 12, 10, ''),
(346, 'Nguyá»…n Duy Sá»¹', 12, 24, ''),
(485, 'Nguyá»…n PhÆ°Æ¡ng ToÃ n', 12, 32, ''),
(169, 'Nguyá»…n Huá»³nh TrÆ°á»ng Khang', 12, 32, ''),
(375, 'Pháº¡m Há»“ng TÃ¢n', 12, 17, ''),
(104, 'Huá»³nh Phi HÃ¹ng', 13, 0, ''),
(80, 'Nguyá»…n XuÃ¢n Quang DÅ©ng', 13, 0, ''),
(32, 'luc tan binh', 13, 0, ''),
(73, 'pham minh duy', 13, 0, ''),
(83, 'Nguyá»…n tiáº¿n dÅ©ng', 13, 0, ''),
(318, 'Nguyá»…n ÄÃ¬nh phÆ°á»›c', 14, 0, ''),
(178, 'Nguyá»…n Thiá»‡n KhiÃªm', 14, 0, ''),
(57, 'Tráº§n Há»“ Danh', 14, 0, ''),
(33, 'Lam Thanh Binh', 14, 0, ''),
(590, 'Nguyá»…n Minh Äá»©c', 14, 0, ''),
(43, 'Nguyen Anh Chuan', 15, 15, ''),
(546, 'Nguyen Quoc Vuong', 15, 15, ''),
(90, 'Lam Trung Hau', 15, 16, ''),
(130, 'Nguyen Hoang Hiep', 15, 20, ''),
(498, 'Nguyen Minh Tri', 15, 16, ''),
(512, 'Há»©a PhÆ°á»›c TrÆ°á»ng', 16, 20, ''),
(362, 'Phan Táº¥n TÃ i', 16, 18, ''),
(460, 'Huá»³nh Minh Thuáº­n', 16, 0, ''),
(396, 'Pháº¡m HoÃ ng Nháº­t Thanh', 16, 20, ''),
(29, 'Äáº·ng Tráº§n Quá»‘c Báº£o', 17, 27, ''),
(395, 'Nguyá»…n Duy thanh', 17, 24, ''),
(527, 'LÃª Minh Tuáº¥n', 17, 26, ''),
(412, 'VÃµ Nguyá»…n Quá»‘c ThÃ¡i', 17, 29, ''),
(499, 'TÄƒng Minh Triáº¿t', 17, 27, ''),
(488, 'Äá»— VÄƒn ToÃ¡n', 18, 0, ''),
(296, 'VÃµ Minh PhÃ¡t', 18, 0, ''),
(7, 'Táº¡ ChiÃªu An', 18, 0, ''),
(365, 'Pháº¡m CÃ´ng TÃ¢m', 18, 20, ''),
(505, 'Nguyá»…n ThÃ nh Trung', 18, 16, ''),
(105, 'TÃ o Quang HÃ¹ng', 19, 27, ''),
(548, 'Nguyá»…n LÆ°Æ¡ng Yáº¿n Vy', 19, 29, ''),
(151, 'BÃ¹i Quá»‘c Huy', 19, 23, ''),
(469, 'Nguyá»…n Táº¥n ThÆ°Æ¡ng', 19, 29, ''),
(95, 'LÃª HoÃ ng HÃ ', 19, 32, ''),
(78, 'ÄoÃ n Viá»‡t DÅ©ng', 20, 16, ''),
(219, 'Trá»‹nh Anh Linh', 20, 21, ''),
(449, 'VÃµ TrÆ°á»ng Thi', 20, 31, ''),
(389, 'Tráº§n Minh TÃº', 20, 25, ''),
(579, 'VÄƒn Äá»— PhÆ°á»›c Äáº¡t', 21, 26, ''),
(148, 'Äá»— Minh Huy', 21, 33, ''),
(246, 'Nguyá»…n HoÃ ng Minh', 21, 31, ''),
(461, 'Tráº§n Quang Thuáº­n', 21, 24, ''),
(285, 'Nguyá»…n Phan Quang Nháº­t', 22, 39, ''),
(137, 'LÆ°u Viá»‡t HoÃ ng', 22, 36, ''),
(324, 'LÃª Nam PhÆ°Æ¡ng', 22, 26, ''),
(542, 'Äáº·ng Tráº§n Tiáº¿n Vinh', 22, 30, ''),
(248, 'nguyá»…n quang minh', 23, 27, ''),
(214, 'vÃµ thanh liÃªm', 23, 23, ''),
(190, 'trÆ°Æ¡ng hoÃ ng kiá»‡t', 23, 16, ''),
(305, 'nguyá»…n táº¥n phÃºc', 23, 17, ''),
(370, 'trÆ°Æ¡ng minh tÃ¢n', 23, 0, ''),
(290, 'Äinh ThÃ nh NhÆ¡n', 24, 32, ''),
(158, 'Pháº¡m XuÃ¢n Huy', 24, 22, ''),
(509, 'Trá»‹nh Há»“ng TrÆ°á»ng', 24, 22, ''),
(242, 'LÃª Quang Minh', 24, 25, ''),
(193, 'Nguyá»…n Phan TÃ¹ng LÃ¢m', 24, 28, ''),
(452, 'Ã‚u VÄ©nh Thiá»‡n', 25, 30, ''),
(545, 'Cao Tráº§n Tháº¿ Vinh', 25, 31, ''),
(63, 'LÆ°u Quá»³nh Dung', 25, 27, ''),
(495, 'TrÆ°Æ¡ng Minh TrÃ­', 25, 24, ''),
(528, 'TÃ´n Tháº¥t Tuáº¥n', 25, 22, ''),
(64, 'Há»“ LÃª Kháº£ Duy', 26, 13, ''),
(374, 'Há»“ Nháº­t TÃ¢n', 26, 27, ''),
(566, 'Phan Thá»‹nh VÆ°á»£ng', 26, 30, ''),
(243, 'PhÃ¢m NhÃ¢t Minh', 26, 12, ''),
(471, 'LÃª XuÃ¢n Tiáº¿n', 26, 31, ''),
(442, 'Nguyá»…n Quá»‘c Thá»‹nh', 27, 18, ''),
(457, 'LÃª Minh Thiá»‡n', 27, 21, ''),
(417, 'LÃª Pháº¡m Minh ThÃ´ng', 27, 22, ''),
(377, 'LÃª ChÃ¡nh TÃ­n', 27, 21, ''),
(439, 'Nguyá»…n Chiáº¿n Tháº¯ng', 27, 25, ''),
(26, 'Nguyá»…n VÄƒn BÃ¬nh', 28, 32, ''),
(465, 'Thi Minh Thuyá»…n', 28, 36, ''),
(288, 'DÆ°Æ¡ng Táº¥n Nhu', 28, 34, ''),
(10, 'VÃµ HoÃ i An', 28, 33, ''),
(403, 'Nguyá»…n ThÃ nh', 28, 29, ''),
(136, 'Nguyá»…n CÃ´ng HoÃ ng', 29, 22, ''),
(501, 'Nguyá»…n Äá»©c Trung', 29, 14, ''),
(253, 'Nguyá»…n Huá»³nh QuÃ½ Nam', 29, 23, ''),
(218, 'Nguyá»…n Tiáº¿n HoÃ ng Linh', 29, 19, ''),
(188, 'Há»“ Nháº­t KiÃªn', 29, 0, ''),
(22, 'Há»“ Thá»‹ BÃ©', 30, 29, ''),
(138, 'Nguyá»…n Ngá»c HoÃ ng', 30, 33, ''),
(298, 'Nguyá»…n TrÃ­ PhÃ¡t', 30, 0, ''),
(244, 'Huá»³nh Pháº¡m Tuáº¥n Minh', 30, 28, ''),
(124, 'Nguyá»…n Ngá»c Hiá»ƒn', 30, 29, ''),
(254, 'LÃª Nhá»±t Nam', 31, 25, ''),
(508, 'Pháº¡m SÆ¡n TrÆ°á»ng', 31, 11, ''),
(257, 'NgÃ´ Thá»‹ Há»“ng NgÃ¢n', 31, 23, ''),
(351, 'Tráº§n Minh SÆ¡n', 31, 32, ''),
(255, 'Tráº§n  HoÃ i  Nam', 32, 26, ''),
(55, 'Nguyá»…n  QÃºy  Danh', 32, 28, ''),
(310, 'Tráº§n Ngá»c Kiáº¿n  PhÃºc', 32, 14, ''),
(198, 'LÃª ÄÃ¬nh LÃ¢m', 32, 26, ''),
(98, 'Phan Äá»©c HÃ¢n', 32, 0, ''),
(438, 'LÆ°Æ¡ng Viá»‡t Tháº¯ng', 33, 22, ''),
(437, 'Nguyá»…n Táº¥t Tháº¯ng', 33, 27, ''),
(453, 'Tráº§n Thanh Thiá»‡n', 33, 30, ''),
(454, 'Nguyá»…n Thanh Thiá»‡n', 33, 31, ''),
(349, 'Nguyá»…n Há»“ng SÆ¡n', 34, 0, ''),
(353, 'Pháº¡m Linh SÆ¡n', 34, 0, ''),
(356, 'HoÃ ng SÆ¡n', 34, 22, ''),
(15, 'Nguyá»…n Äá»©c Anh', 34, 29, ''),
(200, 'Nguyá»…n TrÆ°á»ng LÃ¢m', 34, 0, ''),
(358, 'Phan Thanh SÆ°Æ¡ng', 35, 28, ''),
(191, 'LÆ°u Anh Kiá»‡t', 35, 29, ''),
(384, 'Nguyá»…n Duy TÃ¹ng', 35, 20, ''),
(555, 'HÃ  Pháº¡m Quang VÅ©', 35, 23, ''),
(289, 'LÃª Huy Nhuáº­n', 36, 12, ''),
(589, 'Nguyá»…n Anh Äá»©c', 36, 19, ''),
(390, 'Nguyá»…n XuÃ¢n Tá»±', 36, 17, ''),
(147, 'Nguyá»…n Quá»‘c Huy', 36, 34, ''),
(84, 'Tráº§n VÄƒn DÆ°Æ¡ng', 36, 21, ''),
(149, 'Pháº¡m Huá»³nh Äá»©c Huy', 37, 26, ''),
(388, 'LÃª Thanh TÃº', 37, 26, ''),
(336, 'Há»“ Minh QuÃ¢n', 37, 24, ''),
(343, 'Pháº¡m Giang Sang', 37, 24, ''),
(233, 'VÃµ Duy Luyá»‡n', 37, 22, ''),
(577, 'Nguyá»…n Táº¥n Äáº¡o', 38, 33, ''),
(3, 'Mai Äá»©c An', 38, 33, ''),
(75, 'Tráº§n Nguyá»…n Ãi DuyÃªn', 38, 26, ''),
(575, 'Nguyá»…n ThÃ nh Äáº¡i', 38, 27, ''),
(146, 'TrÆ°Æ¡ng Quang Huy', 38, 37, ''),
(122, 'VÆ°Æ¡ng Äá»©c Hiá»n', 39, 27, ''),
(481, 'LÃ½ Thá»§y Tiá»n', 39, 0, ''),
(265, 'Pháº¡m VÄƒn Nghá»‡', 39, 15, ''),
(520, 'Tráº§n Quá»‘c Tuáº¥n', 39, 27, ''),
(271, 'Quang Táº¥n NghÄ©a', 40, 33, ''),
(393, 'Nguyá»…n ChÃ­ Thanh', 40, 25, ''),
(48, 'HoÃ ng Máº¡nh CÆ°á»ng', 40, 32, ''),
(429, 'Tráº§n Tháº¡ch Tháº£o', 40, 33, ''),
(447, 'Nguyá»…n Minh Thi', 40, 0, ''),
(153, 'Nguyá»…n CÃ´ng Huy', 41, 29, ''),
(125, 'LÃª Nguyá»…n HÃ o Hiá»‡p', 41, 21, ''),
(65, 'ÄoÃ n Duy', 41, 29, ''),
(60, 'LÆ°u VÄƒn Diá»‡p', 41, 22, ''),
(463, 'Táº¡ ChÃ¢u Thuáº­n', 41, 28, ''),
(342, 'Pháº¡m PhÃº QuÃ½', 42, 23, ''),
(332, 'Há»“ Nháº­t Quang', 42, 27, ''),
(582, 'Nguyá»…n VÄƒn Äá»“ng', 42, 28, ''),
(317, 'LiÃªn Há»¯u PhÆ°á»›c', 42, 26, ''),
(455, 'VÃµ Minh Thiá»‡n', 43, 22, ''),
(314, 'Nguyá»…n Tráº§n Tuáº¥n Phong', 43, 28, ''),
(222, 'Triá»‡u Huy Long', 43, 15, ''),
(335, 'LÃª Há»“ng QuÃ¢n', 43, 18, ''),
(406, 'Äinh Äá»©c ThÃ nh', 43, 19, ''),
(12, 'NguyÃªÌƒn TuÃ¢Ìn Anh', 44, 34, ''),
(89, 'TrÃ¢Ì€n Thanh HaÌ‰i', 44, 31, ''),
(235, 'VÅ© Thá»‹ Thanh Mai', 44, 25, ''),
(120, 'LÃª Trá»ng Hiáº¿u', 44, 0, ''),
(204, 'ÄÃ´Ìƒ HaÌ€ LÃ´Ì£c', 44, 29, ''),
(159, 'DÆ°Æ¡ng Quang Huynh', 45, 0, ''),
(591, 'Nguyá»…n HoÃ ng Äá»©c', 45, 0, ''),
(103, 'Nguyá»…n Viáº¿t HÃ¹ng', 45, 0, ''),
(8, 'Há»“ Tráº§n Báº¯c An', 45, 0, ''),
(199, 'Nguyá»…n Phan TÃ¹ng LÃ¢m', 45, 0, ''),
(357, 'Nguyá»…n TrÆ°á»ng SÆ¡n', 46, 28, ''),
(330, 'Nguyá»…n XuÃ¢n Quang', 46, 27, ''),
(211, 'TrÆ°Æ¡ng VÄ©nh Lá»£i', 46, 29, ''),
(166, 'VÃµ VÄƒn Káº¿t', 46, 30, ''),
(425, 'Äáº·ng Ngá»c Tháº¡ch', 46, 26, ''),
(27, 'Nguyá»…n XuÃ¢n BÃ¬nh', 47, 23, ''),
(544, 'LÃª Tháº¿ Vinh', 47, 0, ''),
(162, 'Nguyá»…n PhÃºc HÆ°ng', 47, 18, ''),
(301, 'Nguyá»…n Ngá»c PhÃº', 47, 23, ''),
(297, 'Nguyá»…n Táº¥n PhÃ¡t', 47, 16, ''),
(462, 'Nguyá»…n Ngá»c Thuáº­n', 48, 24, ''),
(30, 'LÃª CÃ´ng Báº±ng', 48, 24, ''),
(410, 'LÆ° VÄƒn ThÃ nh', 48, 20, ''),
(339, 'Phan ThiÃªn Quá»‘c', 48, 24, ''),
(309, 'Nguyá»…n TrÃ­ PhÃºc', 49, 30, ''),
(247, 'Nguyá»…n Huá»‡ Minh', 49, 27, ''),
(53, 'LÃª QuÃ­ Quá»‘c CÆ°á»ng', 49, 29, ''),
(16, 'LÃª HoÃ ng Anh', 49, 25, ''),
(117, 'LÃª VÅ© Minh Hiáº¿u', 49, 23, ''),
(386, 'phan vÄƒn tÃ¹ng', 50, 0, ''),
(197, 'vÃµ thanh lÃ¢m', 50, 0, ''),
(533, 'ngÃ´ vÄƒn vÃ ng', 50, 0, ''),
(536, 'nguyá»…n tuáº¥n viá»‡t', 50, 0, ''),
(133, 'DIá»†P Há»®U HOÃ€NG', 51, 24, ''),
(397, 'TRáº¦N NGÃ” HOÃ€NG THÃ€NH', 51, 16, ''),
(91, 'CAO Äáº I HOÃ€NG HÃ™NG', 51, 26, ''),
(256, 'LÃŠ ÄÃŒNH NAM', 51, 25, ''),
(132, 'TRáº¦N NGUYá»„N KHÃNH HOÃ€NG', 51, 20, ''),
(451, 'Nguyá»…n Quang Thiá»‡n', 52, 23, ''),
(23, 'Nhá»¯ Thanh BÃ¬nh', 52, 22, ''),
(93, 'Pháº¡m Viá»‡t HÃ ', 52, 14, ''),
(177, 'Trang Quá»‘c Kháº£i', 52, 27, ''),
(323, 'HoÃ ng PhÆ°Æ¡ng', 52, 0, ''),
(440, 'Äá»— Nam Tháº¿', 53, 37, ''),
(11, 'TrÆ°Æ¡ng Quá»‘c An', 53, 29, ''),
(203, 'Cao Sá»¹ LÃª', 53, 42, ''),
(274, 'LÆ°Æ¡ng ChÃ­ NguyÃªn', 53, 31, ''),
(52, 'Nguyá»…n HÃ¹ng CÆ°á»ng', 53, 39, ''),
(432, 'Pháº¡m Ngá»c Tháº£o', 54, 25, ''),
(402, 'Nguyá»…n PhÆ°á»›c ThÃ nh', 54, 24, ''),
(421, 'LÃª Minh ThÃ´ng', 54, 24, ''),
(401, 'Tráº§n VÄƒn ThÃ nh', 54, 29, ''),
(174, 'LÃª Duy KhÃ¡nh', 55, 28, ''),
(267, 'LÆ°Æ¡ng Trá»ng NghÄ©a', 55, 20, ''),
(194, 'DÆ°Æ¡ng VÄƒn LÃ¢m', 55, 22, ''),
(529, 'Äáº·ng VÄƒn TuyÃªn', 55, 19, ''),
(236, 'Nguyá»…n Máº¡nh', 55, 0, ''),
(99, 'Tráº§n Ngá»c HÃ¢n', 56, 0, ''),
(366, 'VÃµ CÃ´ng TÃ¢m', 56, 0, ''),
(331, 'Nguyá»…n VÄƒn Quang', 56, 0, ''),
(270, 'DÆ°Æ¡ng Cao Äáº¡i NghÄ©a', 56, 0, ''),
(491, 'Nguyá»…n Thá»‹ Thu Trang', 57, 15, ''),
(259, 'Tráº§n Thá»‹ Kim NgÃ¢n', 57, 28, ''),
(428, 'ThÃ¡i Thá»‹ Thu Tháº£o', 57, 42, ''),
(496, 'LÆ°Æ¡ng VÅ© TrÃºc', 57, 28, ''),
(293, 'Huá»³nh Thá»‹ PhÆ°Æ¡ng Oanh', 57, 25, ''),
(170, 'Tráº§n Máº¡nh Khang', 58, 0, ''),
(400, 'Huá»³nh Trung ThÃ nh', 58, 0, ''),
(215, 'Trá»‹nh HoÃ ng LiÃªm', 58, 0, ''),
(526, 'Tráº§n Quá»‘c Tuáº¥n', 58, 0, ''),
(556, 'DÆ°Æ¡ng HoÃ ng VÅ©', 58, 0, ''),
(266, 'Tráº§n HÆ°ng Nghiá»‡p', 59, 34, ''),
(326, 'Nguyá»…n ThÃ nh PhÆ°Æ¡ng', 59, 31, ''),
(476, 'Nguyá»…n Trung Tiáº¿n', 59, 26, ''),
(25, 'Nguyá»…n Quá»‘c BÃ¬nh', 59, 36, ''),
(306, 'ÄoÃ n ÄÃ¬nh PhÃºc', 59, 28, ''),
(279, 'Tráº§n VÄƒn NhÃ n', 60, 27, ''),
(530, 'Nguyá»…n Ngá»c Tuyá»ƒn', 60, 19, ''),
(376, 'Tráº§n TiÃªn TÃ­n', 60, 23, ''),
(547, 'Nguyen Quoc Vuong', 60, 30, ''),
(486, 'LÃª Anh ToÃ n', 61, 0, ''),
(354, 'LÃª Thanh SÆ¡n', 61, 0, ''),
(319, 'LÃª Quang PhÆ°á»›c', 61, 0, ''),
(36, 'VÅ© Thanh Cáº£nh', 61, 0, ''),
(86, 'Nguyá»…n Triáº¿t Giang', 61, 0, ''),
(585, 'Nguyá»…n ThÃ nh Äá»©c', 62, 26, ''),
(46, 'Nguyá»…n HoÃ ng VÄƒn ChÆ°Æ¡ng', 62, 17, ''),
(250, 'Nguyá»…n HoÃ i Nam', 62, 26, ''),
(161, 'LÃª thá»‹ HÆ°á»ng', 62, 15, ''),
(534, 'Pháº¡m CÃ´ng ViÃªn', 63, 22, ''),
(96, 'Nguyá»…n Thanh HÃ ng', 63, 17, ''),
(180, 'Nguyá»…n Kiá»u Khoa', 63, 21, ''),
(372, 'Tráº§n Nháº­t TÃ¢n', 63, 20, ''),
(409, 'Nguyá»…n Minh ThÃ nh', 63, 35, ''),
(19, 'Äáº·ng Báº£o Ã‚n', 64, 24, ''),
(67, 'LÆ°u Quá»‘c Minh Duy', 64, 25, ''),
(100, 'Pháº¡m VÄƒn HÃ¢n', 64, 19, ''),
(287, 'Huá»³nh Thanh Nhá»±t', 64, 20, ''),
(360, 'NGUYá»„N NGá»ŒC TÃš', 65, 22, ''),
(278, 'TRáº¦N CHÃ NGUYá»†N', 65, 24, ''),
(295, 'LÃŠ HOÃ€NG PHÃšC', 65, 25, ''),
(359, 'HOÃ€NG Máº NH TÃ™NG', 65, 0, ''),
(549, 'NGUYá»„N HOÃ€NG VÅ¨', 65, 22, ''),
(68, 'Pháº¡m Tuáº¥n Duy', 66, 15, ''),
(54, 'Pháº¡m Quá»‘c CÆ°á»ng', 66, 23, ''),
(66, 'Phan Duy', 66, 24, ''),
(382, 'Nguyá»…n Ngá»c NguyÃªn TÃ¹ng', 66, 29, ''),
(560, 'Ã‚u Tuáº¥n VÅ©', 66, 17, ''),
(82, 'Tráº§n Anh DÅ©ng', 67, 0, ''),
(31, 'Nguyá»…n VÄƒn BiÃªn', 67, 0, ''),
(565, 'Tráº§n PhÆ°á»›c VÄ©nh', 67, 0, ''),
(72, 'Pháº¡m Duy', 67, 0, ''),
(21, 'Äáº·ng VÄƒn BÃ£o', 67, 0, ''),
(79, 'Nguyá»…n Minh DÅ©ng', 68, 28, ''),
(207, 'Nguyá»…n PhÆ°á»›c Lá»™c', 68, 21, ''),
(123, 'Táº¡ Trung Hiá»ƒn', 68, 12, ''),
(150, 'Tráº§n Ngá»c Huy', 68, 28, ''),
(202, 'Nguyá»…n Tráº§n LÃª', 68, 29, ''),
(110, 'LÃª Duy HÃ¹ng', 69, 16, ''),
(213, 'Nguyá»…n Há»¯u Lá»£i', 69, 20, ''),
(4, 'PhÃ¹ng Thá»‹ ThÃºy An', 69, 20, ''),
(407, 'Há»“ LÃª Thiá»‡n ThÃ nh', 69, 22, ''),
(514, 'Nguyá»…n SÆ° TrÆ°á»Ÿng', 70, 26, ''),
(446, 'BÃ¹i XuÃ¢n Thá»©c', 70, 21, ''),
(478, 'Nguyá»…n VÄƒn Tiáº¿n', 70, 14, ''),
(249, 'Nguyá»…n Thanh Minnh', 70, 22, ''),
(237, 'Pháº¡m XuÃ¢n Máº¡nh', 70, 21, ''),
(522, 'Tráº§n Anh Tuáº¥n', 71, 33, ''),
(493, 'Nguyá»…n Há»“ Duy TrÃ­', 71, 26, ''),
(311, 'LÆ° Tháº¿ Phá»¥c', 71, 24, ''),
(334, 'NgÃ´ Tá»± ÄÄƒng Quang', 71, 20, ''),
(497, 'Nguyá»…n Há»“ Duy Tri', 71, 31, ''),
(513, 'Nguyá»…n XuÃ¢n TrÆ°á»ng', 72, 22, ''),
(445, 'Táº¡ Thu Thá»§y', 72, 32, ''),
(431, 'HoÃ ng PhÆ°Æ¡ng Tháº£o', 72, 0, ''),
(291, 'Cao Thá»‹ Niá»‡m', 72, 19, ''),
(423, 'Pháº¡m Thá»‹ ThÃ¹y', 72, 19, ''),
(448, 'Huá»³nh Nguyá»…n TÆ°á»ng Thi', 73, 27, ''),
(322, 'Nguyá»…n BÃ¡ PhÆ°á»›c', 73, 27, ''),
(580, 'Huá»³nh CÃ´ng Äá»‹nh', 73, 30, ''),
(50, 'DÆ°Æ¡ng Nguyá»…n KhÃ¡nh CÆ°á»ng', 73, 27, ''),
(408, 'Nguyá»…n Huá»³nh Äáº¡i ThÃ nh', 73, 26, ''),
(272, 'Nguyá»…n Há»“ng NguyÃªn', 74, 26, ''),
(385, 'Tráº§n Thanh TÃ¹ng', 74, 11, ''),
(367, 'Nguyá»…n Äá»©c TÃ¢m', 74, 0, ''),
(419, 'LÃª Äá»©c ThÃ´ng', 74, 24, ''),
(475, 'Nguyá»…n Cao Tiáº¿n', 74, 21, ''),
(304, 'Äá»— Duy PhÃºc', 75, 26, ''),
(340, 'Trá»‹nh HoÃ ng Viá»‡t Quá»‘c', 75, 32, ''),
(165, 'TrÆ°Æ¡ng LÃª HÆ°ng', 75, 32, ''),
(383, 'Nguyá»…n Thanh TÃ¹ng', 75, 27, ''),
(379, 'Huá»³nh TÃ¹ng', 75, 12, ''),
(208, 'Tráº§n XuÃ¢n Lá»™c', 76, 0, ''),
(559, 'LÆ°Æ¡ng Thanh VÅ©', 76, 30, ''),
(201, 'Huá»³nh Thanh LÃ¢m', 76, 28, ''),
(490, 'LÃª Ngá»c Trai', 76, 27, ''),
(494, 'Nguyá»…n Quá»‘c TrÃ­', 76, 15, ''),
(333, 'Tráº§n VÄƒn Quang', 77, 0, ''),
(160, 'Tráº§n NguyÃªn HÆ°á»›ng', 77, 0, ''),
(355, 'Pháº¡m XuÃ¢n SÆ¡n', 77, 0, ''),
(316, 'Nguyá»…n Há»“ng Phong', 77, 0, ''),
(320, 'LÃª Tá»± PhÆ°á»›c', 77, 0, ''),
(576, 'LÃ¢m Vinh Äáº¡o', 78, 36, ''),
(307, 'Pháº¡m HoÃ ng PhÃºc', 78, 29, ''),
(433, 'Máº«n VÄƒn Tháº¯ng', 78, 37, ''),
(131, 'Nguyá»…n Hinh', 78, 33, ''),
(140, 'Tráº§n ÄÃ¬nh VÄ©nh HoÃ ng', 78, 0, ''),
(411, 'Cao Äá»©c ThÃ¡i', 79, 26, ''),
(261, 'HoÃ ng Thá»‹ Ngá»c', 79, 16, ''),
(88, 'Nguyá»…n VÄƒn GiÃ¡p', 79, 19, ''),
(71, 'Tráº§n Nháº­t Duy', 79, 0, ''),
(369, 'Tráº§n VÅ© Nháº­t TÃ¢n', 79, 13, ''),
(444, 'NgÃ´ Duy Thá»‘ng', 80, 15, ''),
(538, 'Nguyá»…n Quá»‘c Viá»‡t', 80, 26, ''),
(129, 'VÅ© VÄƒn Hiá»‡u', 80, 27, ''),
(511, 'NgÃ´ Nháº­t TrÆ°á»ng', 80, 35, ''),
(145, 'Nguyá»…n HoÃ ng Huy', 81, 21, ''),
(586, 'Huá»³nh vÄƒn Äá»©c', 81, 26, ''),
(44, 'TÄƒng VÄƒn Chuáº©n', 81, 19, ''),
(238, 'Nguyá»…n ÄÃ¬nh Máº¡nh', 81, 28, ''),
(312, 'Tráº§n Minh Phá»¥ng', 81, 23, ''),
(260, 'Nguyá»…n HoÃ ng NgÃ¢n', 82, 24, ''),
(9, 'TrÆ°Æ¡ng HoÃ ng An', 82, 0, ''),
(112, 'Nguyá»…n Thá»‹ Má»¹ Háº£i', 82, 17, ''),
(221, 'VÆ°Æ¡ng Kim Loan', 82, 25, ''),
(61, 'Nguyá»…n DÆ°Æ¡ng AÃ­ Diá»‡u', 82, 17, ''),
(189, 'Nguyá»…n VÄƒn Kiá»‡t', 83, 19, ''),
(231, 'TÃ´ ThÃ nh LuÃ¢n', 83, 22, ''),
(327, 'Nguyá»…n Táº¥n PhÆ°Æ¡ng', 83, 23, ''),
(227, 'Pháº¡m HoÃ ng Long', 83, 21, ''),
(258, 'Mai Trá»ng NgÃ¢n', 83, 26, ''),
(280, 'Nguyá»…n ThÃ nh NhÃ¢n', 84, 39, ''),
(273, 'Pháº¡m Trung NguyÃªn', 84, 28, ''),
(458, 'Nguyá»…n VÄƒn Thiá»‡u', 84, 29, ''),
(468, 'LÃª VÄƒn ThÆ°Æ¡ng', 84, 31, ''),
(5, 'LÃª Äá»— TrÆ°á»ng An', 84, 30, ''),
(142, 'Nguyá»…n TÃ´n ThÃ¡i HoÃ ng', 85, 27, ''),
(154, 'Nguyá»…n Báº£o Huy', 85, 30, ''),
(281, 'NgÃ´ ThÃ nh NhÃ¢n', 85, 23, ''),
(245, 'Nguyá»…n Ngá»c BÃ¬nh Minh', 85, 25, ''),
(234, 'Nguyá»…n ÄÃ¬nh LÆ°u', 86, 0, ''),
(223, 'LÃª Quang Long', 86, 0, ''),
(557, 'Nguyá»…n HoÃ ng VÅ©', 86, 0, ''),
(224, 'Nguyá»…n ÄÄƒng Bá»­u Long', 86, 0, ''),
(209, 'Nguyá»…n VÄƒn Lá»™c', 87, 26, ''),
(268, 'TÃ´ ThÃ¡i NghÄ©a', 87, 29, ''),
(286, 'Nguyá»…n Há»¯u Nháº­t', 87, 26, ''),
(341, 'Tráº§n VÄƒn QuÃ½', 87, 0, ''),
(380, 'TrÆ°Æ¡ng Thanh TÃ¹ng', 87, 27, ''),
(338, 'LÃª Cao Anh Quá»‘c', 88, 20, ''),
(143, 'Trá»‹nh PhÆ°á»›c HoÃ ng', 88, 29, ''),
(263, 'Nguyá»…n Sinh Ngá»c', 88, 27, ''),
(344, 'Há»“ Minh Sang', 88, 0, ''),
(531, 'Há»“ PhÃº Ty', 89, 13, ''),
(106, 'Nguyá»…n Máº¡nh HÃ¹ng', 89, 20, ''),
(459, 'Nguyá»…n Há»¯u Thoáº¡i', 89, 30, ''),
(450, 'LÃª Há»“ HoÃ ng Thiá»‡n', 89, 24, ''),
(443, 'Nguyá»…n PhÃºc Thá»‹nh', 89, 23, ''),
(592, 'Nguyá»…n VÄƒn Äiá»‡p', 90, 18, ''),
(371, 'LÃª Anh TÃ¢n', 90, 16, ''),
(413, 'Phan VÄƒn ThÃ¡i', 90, 0, ''),
(420, 'Pháº¡m XuÃ¢n ThÃ´ng', 90, 15, ''),
(568, 'Nguyá»…n Minh VÆ°Æ¡ng', 90, 21, ''),
(212, 'ÄoÃ n Tháº¯ng Lá»£i', 91, 12, ''),
(167, 'Nguyá»…n VÄƒn Khang', 91, 20, ''),
(477, 'Nguyá»…n Ngá»c Tiáº¿n', 91, 0, ''),
(405, 'Há»“ CÃ´ng ThÃ nh', 91, 17, ''),
(77, 'ThÃ¡i Quá»‘c DÅ©ng', 91, 23, ''),
(126, 'VÃµ HÃ²a Hiá»‡p', 92, 22, ''),
(483, 'Nguyá»…n CÃ”ng ToÃ n', 92, 11, ''),
(216, 'BÃ¹i Thanh LiÃªm', 92, 26, ''),
(47, 'Táº¡ HÃ o CÆ¡', 92, 35, ''),
(135, 'NgÃ´ ÄÃ¬nh Tháº¿ HoÃ n', 92, 0, ''),
(553, 'Mai LÃª HoÃ ng VÅ©', 93, 29, ''),
(308, 'Nguyá»…n ThÃ nh PhÃºc', 93, 18, ''),
(373, 'LÃª Pháº¡m TÃ¢n', 93, 25, ''),
(392, 'Nguyá»…n TrÆ°á»ng Thanh', 93, 20, ''),
(570, 'VÃµ Quá»‘c VÆ°Æ¡ng', 93, 23, ''),
(524, 'Tráº§n Quá»‘c Tuáº¥n', 94, 0, ''),
(567, 'Äá»— VÄƒn VÆ°Æ¡ng', 94, 0, ''),
(121, 'VÆ°Æ¡ng Äá»©c Hiá»n', 94, 0, ''),
(264, 'Pháº¡m VÄƒn Nghá»‡', 94, 0, ''),
(482, 'LÃ½ Thá»§y Tiá»n', 94, 18, ''),
(299, 'BÃ¹i Táº¥n PhÃ¡t', 95, 24, ''),
(325, 'Nguyá»…n DÅ©ng PhÆ°Æ¡ng', 95, 24, ''),
(302, 'BÃ¹i Nguyá»…n Há»“ng PhÃºc', 95, 31, ''),
(241, 'Tráº§n ChÃ¢u ToÃ n Má»¹', 95, 28, ''),
(156, 'Nguyá»…n Ngá»c Huy', 95, 25, ''),
(572, 'Nguyá»…n PhÆ°á»£ng ÄÃ´n', 96, 35, ''),
(562, 'HÃ  HoÃ ng VÅ©', 96, 28, ''),
(92, 'Tráº§n Há»“ng HÃ ', 96, 26, ''),
(70, 'Nguyá»…n LÃª Duy', 96, 35, ''),
(502, 'Nguyá»…n HoÃ ng Báº£o Trung', 97, 23, ''),
(35, 'VÃµ ThÃ nh CÃ´ng', 97, 0, ''),
(540, 'PhÃ¹ng VÄƒn Viá»‡t', 97, 21, ''),
(424, 'Nguyá»…n Há»“ng Tháº¡ch', 97, 24, ''),
(523, 'Nguyá»…n Minh Tuáº¥n', 97, 24, ''),
(239, 'Huá»³nh CÃ´ng Máº«n', 98, 26, ''),
(426, 'Nguyá»…n VÄƒn Tháº¡nh', 98, 31, ''),
(422, 'Ohanj Há»¯u ThÃ´ng', 98, 31, ''),
(38, 'LÆ°Æ¡ng CÃ´ng Cáº§n', 98, 30, ''),
(430, 'Pháº¡m Ngá»c Tháº£o', 98, 0, ''),
(492, 'TrÆ°Æ¡ng Mai Thanh TrÃ­', 99, 0, ''),
(521, 'LÃª HoÃ ng Tuáº¥n', 99, 0, ''),
(510, 'Nguyá»…n Äan TrÆ°á»ng', 99, 0, ''),
(515, 'Phan Trung TrÆ°á»Ÿng', 99, 0, ''),
(516, 'VÅ© Minh Tuáº¥n', 99, 0, ''),
(134, 'Nguyá»…n VÄƒn HoÃ ', 100, 26, ''),
(381, 'LÃª VÄƒn TÃ¹ng', 100, 11, ''),
(284, 'Nguyá»… HoÃ ng NhÃ£', 100, 20, ''),
(517, 'Nguyá»…n Anh Tuáº¥n', 100, 19, ''),
(277, 'ThÃ¡i Nguyá»…n', 100, 23, ''),
(114, 'TrÆ°Æ¡ng CÃ´ng Háº­u', 101, 26, ''),
(119, 'Huá»³nh Táº¥n Hiáº¿u', 101, 9, ''),
(6, 'VÃµ Tiáº¿n An', 101, 23, ''),
(368, 'Pháº¡m Minh TÃ¢m', 101, 27, ''),
(337, 'Nguyá»…n Viá»‡t Quá»‘c', 102, 0, ''),
(220, 'Há»“ Duy Nháº­t Linh', 102, 32, ''),
(107, 'TÃ´n Thanh HÃ¹ng', 102, 31, ''),
(300, 'Nguyá»…n Äá»©c PhÃº', 102, 31, ''),
(37, 'Phan CÃ´ng Cáº£nh', 102, 30, ''),
(240, 'Nguyá»…n Kháº¯c Máº«n', 103, 29, ''),
(466, 'NgÃ´ Ngá»c ThÆ¡', 103, 28, ''),
(172, 'Tráº§n Nguyá»…n KhÃ¡nh', 103, 36, ''),
(229, 'Nguyá»…n Khoa Háº£i Long', 103, 34, ''),
(525, 'Nguyá»…n Minh Tuáº¥n', 103, 27, ''),
(139, 'VÅ© Quá»‘c HoÃ ng', 104, 0, ''),
(387, 'Nguyá»…n TrÃºc TÃ¹ng', 104, 11, ''),
(541, 'TrÆ°Æ¡ng XuÃ¢n Vinh', 104, 26, ''),
(76, 'Äá»“ng Tiáº¿n DÅ©ng', 104, 21, ''),
(329, 'Pháº¡m ÄÃ¬nh Thanh Quang', 105, 0, ''),
(554, 'Nguyá»…n Anh VÅ©', 105, 24, ''),
(230, 'Nguyá»…n Gia LuÃ¢n', 105, 33, ''),
(313, 'ÄÃ o Anh Phá»¥ng', 105, 17, ''),
(40, 'LÃª Trung ChÃ¡nh', 105, 29, ''),
(175, 'NgÃ´ Duy KhÃ¡nh', 106, 24, ''),
(282, 'Nguyá»…n Trá»ng NhÃ¢n', 106, 25, ''),
(118, 'VÄƒn PhÃº Hiáº¿u', 106, 28, ''),
(418, 'Nguyá»…n Táº¥n ThÃ´ng', 106, 34, ''),
(504, 'VÃµ Thanh HoÃ ng Trung', 107, 23, ''),
(226, 'Nguyá»…n Äá»©c Long', 107, 37, ''),
(108, 'HÃ n Äá»©c HÃ¹ng', 107, 15, ''),
(506, 'LÃª ThÃ nh Trung', 107, 32, ''),
(472, 'Nguyá»…n VÄƒn Tiáº¿n', 108, 0, ''),
(487, 'Nguyá»…n Máº­u ToÃ n', 108, 0, ''),
(558, 'Pháº¡m Danh VÅ©', 108, 0, ''),
(361, 'Äáº­u Pháº¡m Há»¯u TÃ i', 108, 0, ''),
(578, 'Nguyá»…n ThÃ nh Äáº¡t', 108, 0, ''),
(13, 'Nguyá»…n PhÆ°Æ¡ng Anh', 109, 25, ''),
(18, 'Pháº¡m VÃµ HoÃ i Anh', 109, 30, ''),
(42, 'Äinh Há»“ng ChÃ¢u', 109, 26, ''),
(115, 'Tráº§n Trung Hiáº¿u', 109, 28, ''),
(228, 'Nguyá»…n Háº£i Long', 109, 34, ''),
(157, 'LÃª ÄÃ¬nh Huy', 110, 40, ''),
(252, 'LÃª HoÃ i Nam', 110, 0, ''),
(85, 'Nguyá»…n TrÆ°á»ng Giang', 110, 15, ''),
(116, 'Nguyá»…n Minh Hiáº¿u', 110, 27, ''),
(569, 'Tráº§n CÃ´ng VÆ°Æ¡ng', 110, 29, ''),
(195, 'Huá»³nh HoÃ ng LÃ¢m', 111, 35, ''),
(543, 'Báº¡ch Sá»¹ Äá»©c Vinh', 111, 34, ''),
(470, 'Nguyá»…n HoÃ i ThÆ°Æ¡ng', 111, 38, ''),
(225, 'Nguyá»…n VÅ© Long', 111, 32, ''),
(144, 'DÆ°Æ¡ng LÃª HoÃ ng', 111, 34, ''),
(210, 'Pháº¡m Duy Lá»™c', 112, 30, ''),
(292, 'ÄoÃ n Duy Ninh', 112, 37, ''),
(109, 'TrÆ°Æ¡ng Quá»‘c HÃ¹ng', 112, 19, ''),
(539, 'Nguyá»…n Quá»‘c Viá»‡t', 112, 23, ''),
(464, 'Nguyá»…n KhÃ¡nh Thuáº­t', 112, 23, ''),
(583, 'Nguyá»…n VÄƒn Äá»“ng', 113, 25, ''),
(94, 'HoÃ ng VÄƒn HÃ ', 113, 28, ''),
(87, 'Pháº¡m VÄƒn GiÃ¡p', 113, 17, ''),
(588, 'Tráº§n Trung Äá»©c', 113, 27, ''),
(503, 'Tráº§n Quá»‘c Trung', 113, 0, ''),
(164, 'VÃµ Trung HÆ°ng', 114, 38, ''),
(163, 'Äá»— Huy HÆ°ng', 114, 31, ''),
(427, 'LÆ°Æ¡ng VÄ©nh Tháº£o', 114, 35, ''),
(315, 'Nguyá»…n Thanh Phong', 114, 33, ''),
(113, 'LÃª Thanh Háº£i', 114, 14, ''),
(205, 'Nguyá»…n Há»¯u Láº­p', 115, 0, ''),
(155, 'Huá»³nh Äá»©c Huy', 115, 0, ''),
(394, 'Tráº§n VÄƒn Thanh', 115, 0, ''),
(152, 'LÃ½ Báº£o Huy', 115, 0, ''),
(489, 'HoÃ ng Huy Toáº£n', 115, 0, ''),
(532, 'LÃª Trá»ng TÆ°á»ng', 116, 17, ''),
(168, 'Mai Trá»ng Khang', 116, 26, ''),
(276, 'ChÃ¢u BÃ¬nh NguyÃªn', 116, 20, ''),
(51, 'Nguyá»…n Quá»‘c CÆ°á»ng', 116, 20, ''),
(58, 'VÃµ CÃ´ng Danh', 117, 25, ''),
(251, 'LÃª PhÆ°Æ¡ng Nam', 117, 25, ''),
(217, 'LÃª Thá»‹ Kim LiÃªn', 117, 26, ''),
(391, 'HoÃ ng Minh TÃ½', 117, 14, ''),
(561, 'Nguyá»…n Minh VÅ©', 117, 18, ''),
(275, 'Pháº¡m PhÆ°Æ¡ng NguyÃªn', 118, 15, ''),
(171, 'Tráº§n ChÃ­ Khang', 118, 29, ''),
(303, 'Äá»— Minh PhÃºc', 118, 34, ''),
(182, 'LÃ½ Trá»ng Khoa', 118, 30, ''),
(518, 'Huá»³nh Anh Tuáº¥n', 119, 25, ''),
(414, 'LÃª Quang ThÃ¡i', 119, 26, ''),
(350, 'Huá»³nh PhÃºc TrÆ°á»ng SÆ¡n', 119, 18, ''),
(435, 'LÃª Tháº¯ng', 119, 23, ''),
(398, 'TRáº¦N THá»Š MINH THÃ™Y', 120, 27, ''),
(347, 'ÄINH NGá»ŒC SÆ N', 120, 25, ''),
(573, 'NGUYá»„N THáº NH Äáº T', 120, 20, ''),
(441, 'TRáº¦N HOÃ€NG THá»ŠNH', 120, 24, ''),
(500, 'LÃŠ Báº¢O TRUNG', 120, 18, ''),
(480, 'Nguyá»…n Viá»‡t Tiáº¿n', 121, 35, ''),
(111, 'Nguyá»…n VÄƒn Háº£i', 121, 28, ''),
(537, 'Nguyá»…n Ngá»c Viá»‡t', 121, 21, ''),
(101, 'Nguyá»…n Äá»©c HÃ²a', 121, 25, ''),
(436, 'Pháº¡m Ngá»c Tháº¯ng', 121, 33, ''),
(434, 'Kiá»u Tháº¯ng', 122, 17, ''),
(378, 'Pháº¡m Trung TÃ­n', 122, 27, ''),
(183, 'Nguyá»…n ÄÄƒng Khoa', 122, 23, ''),
(127, 'LÃª VÄƒn Hiá»‡p', 122, 20, ''),
(479, 'Nguyá»…n Anh Tiáº¿n', 122, 20, ''),
(484, 'Tráº§n Tháº¿ ToÃ n', 123, 32, ''),
(283, 'VÅ© Tháº¿ NhÃ¢n', 123, 13, ''),
(185, 'Huá»³nh Ngá»c KhuÃª', 123, 29, ''),
(473, 'Pháº¡m Minh Tiáº¿n', 123, 35, ''),
(49, 'LÃ¢m Thanh CÆ°á»ng', 123, 30, ''),
(128, 'Há»“ VÄƒn ThÃ nh Hiá»‡p', 124, 23, ''),
(196, 'Nguyá»…n hoÃ ng lÃ¢m', 124, 0, ''),
(141, 'Pháº¡m Thanh HoÃ ng', 124, 33, ''),
(24, 'Tráº§n ThÃ¡i BÃ¬nh', 124, 24, ''),
(20, 'TrÆ°Æ¡ng XuÃ¢n BÃ¡ch', 124, 33, ''),
(551, 'Nguyá»…n Anh VÅ©', 125, 20, ''),
(328, 'Pháº¡m VÄƒn Qua', 125, 21, ''),
(584, 'Pháº¡m Äá»§', 125, 28, ''),
(415, 'Tráº§n Minh ThÃ¡i', 125, 16, ''),
(595, 'Truong Thi Thuy Duyen', 2, 32, ''),
(596, 'Nguyen Thi Hoa', 5, 22, ''),
(597, 'Nguyen Van Lam', 96, 23, ''),
(0, 'Nguyen Tuan Anh', 104, 22, ''),
(598, 'Nguyen Tuan Anh', 104, 22, '');
--
-- Database: `qldv`
--
CREATE DATABASE `qldv` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `qldv`;

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `thongtincanhan` tinyint(1) NOT NULL,
  `qlchucvu` tinyint(1) NOT NULL,
  `qlthongtin` tinyint(1) NOT NULL,
  `qldoanvien` tinyint(1) NOT NULL,
  `qlphongtrao` tinyint(1) NOT NULL,
  `qlxeploai` tinyint(1) NOT NULL,
  `qlhannopphi` tinyint(1) NOT NULL,
  `qlcosodoan` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `name`, `level`, `thongtincanhan`, `qlchucvu`, `qlthongtin`, `qldoanvien`, `qlphongtrao`, `qlxeploai`, `qlhannopphi`, `qlcosodoan`) VALUES
(1, 'Administrator', 9, 7, 7, 7, 7, 7, 7, 7, 7),
(2, 'User', 1, 1, 0, 0, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cosodoan`
--

CREATE TABLE IF NOT EXISTS `cosodoan` (
  `id_cosodoan` int(11) NOT NULL AUTO_INCREMENT,
  `ten` text NOT NULL,
  `parent` int(11) NOT NULL,
  `co_dau` int(1) NOT NULL,
  PRIMARY KEY (`id_cosodoan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `cosodoan`
--

INSERT INTO `cosodoan` (`id_cosodoan`, `ten`, `parent`, `co_dau`) VALUES
(1, 'Äáº¡i há»c cÃ´ng nghá»‡ thÃ´ng tin', 0, 1),
(2, 'Khoa khoa há»c mÃ¡y tÃ­nh', 1, 0),
(3, 'DH KHTN', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doanphi`
--

CREATE TABLE IF NOT EXISTS `doanphi` (
  `id_doanphi` int(11) NOT NULL AUTO_INCREMENT,
  `id_doanvien` int(11) NOT NULL,
  `ngaydong` date NOT NULL,
  `sotien` double NOT NULL,
  `id_cosodoan` int(11) NOT NULL,
  `hanphi` date DEFAULT NULL,
  PRIMARY KEY (`id_doanphi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `doanphi`
--

INSERT INTO `doanphi` (`id_doanphi`, `id_doanvien`, `ngaydong`, `sotien`, `id_cosodoan`, `hanphi`) VALUES
(1, 1, '2010-05-15', 20000, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doanvien`
--

CREATE TABLE IF NOT EXISTS `doanvien` (
  `id_doanvien` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `doan_phi` int(11) NOT NULL,
  `auth` tinyint(4) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `email` text NOT NULL,
  `qh_chidoan` int(11) NOT NULL,
  PRIMARY KEY (`id_doanvien`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `doanvien`
--

INSERT INTO `doanvien` (`id_doanvien`, `username`, `password`, `doan_phi`, `auth`, `sid`, `ip`, `email`, `qh_chidoan`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 1, 1, 'tgvp8th6afjl6782n76vb94636', '127.0.0.1', 'admin@uit.edu.vn', 1),
(2, 'test1', 'c3284d0f94606de1fd2af172aba15bf3', 0, 2, '', '127.0.0.1', '', 4),
(3, 'test2', 'c3284d0f94606de1fd2af172aba15bf3', 0, 2, '657frldnub9imon7nkapql4qg0', '127.0.0.1', '', 13),
(4, 'abc', 'cba', 0, 2, '', '', 'cpa', 0),
(5, 'a_nguyen_van', '5b1bcc0f6e7f0267f0bf93f161e69d5d', 0, 2, '', '', 'test@test.com', 0),
(6, 'b_nguyen_van', '5b1bcc0f6e7f0267f0bf93f161e69d5d', 0, 2, '', '', 'test@test.com', 0),
(7, 'c_nguyen_van', '5b1bcc0f6e7f0267f0bf93f161e69d5d', 0, 2, '', '', 'test@test.com', 0),
(8, 'd_nguyen_van', '5b1bcc0f6e7f0267f0bf93f161e69d5d', 0, 2, '', '', 'test@test.com', 0),
(9, 'e_nguyen_van', '5b1bcc0f6e7f0267f0bf93f161e69d5d', 0, 2, '', '', 'test@test.com', 19),
(10, 'f_nguyen_van', '5b1bcc0f6e7f0267f0bf93f161e69d5d', 0, 2, '', '', 'test@test.com', 20),
(11, 'h_nguyen_van', '5b1bcc0f6e7f0267f0bf93f161e69d5d', 0, 2, '', '', 'test@test.com', 21),
(12, 'l_nguyen_van', '5b1bcc0f6e7f0267f0bf93f161e69d5d', 0, 2, '', '', 'test@test.com', 22),
(13, 'm_nguyen_van', '5b1bcc0f6e7f0267f0bf93f161e69d5d', 0, 2, '', '', 'test@test.com', 23),
(14, 'n_nguyen_van', '5b1bcc0f6e7f0267f0bf93f161e69d5d', 0, 2, '', '', 'test@test.com', 24);

-- --------------------------------------------------------

--
-- Table structure for table `hoancanhkinhte`
--

CREATE TABLE IF NOT EXISTS `hoancanhkinhte` (
  `id_doanvien` int(11) NOT NULL,
  `thang_nam` varchar(20) NOT NULL,
  `hesoluong` varchar(20) NOT NULL,
  `ngachluong` varchar(20) NOT NULL,
  PRIMARY KEY (`id_doanvien`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoancanhkinhte`
--


-- --------------------------------------------------------

--
-- Table structure for table `phongtraodoan`
--

CREATE TABLE IF NOT EXISTS `phongtraodoan` (
  `id_phongtraodoan` int(11) NOT NULL AUTO_INCREMENT,
  `ten` text NOT NULL,
  `diengiai` text NOT NULL,
  `id_cosodoan` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  PRIMARY KEY (`id_phongtraodoan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `phongtraodoan`
--

INSERT INTO `phongtraodoan` (`id_phongtraodoan`, `ten`, `diengiai`, `id_cosodoan`, `start`, `end`) VALUES
(2, 'Thanh nien khoe 2010', 'Phong trao thanh nien khoe, mot trong nhung noi dung de dat duoc danh hieu sinh vien 5 tot', 4, '2010-06-01', '2010-06-03'),
(3, 'Tiep lua', 'Hoat dong tiep lua do ban Hoc tap cua Hoi sinh vien phat dong', 1, '2010-01-01', '2010-12-31'),
(4, 'test', 'abc xyz', 1, '2010-01-01', '2010-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `qhchidoan`
--

CREATE TABLE IF NOT EXISTS `qhchidoan` (
  `qh_chidoan` int(11) NOT NULL AUTO_INCREMENT,
  `id_doanvien` int(11) NOT NULL,
  `id_cosodoan` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  PRIMARY KEY (`qh_chidoan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `qhchidoan`
--

INSERT INTO `qhchidoan` (`qh_chidoan`, `id_doanvien`, `id_cosodoan`, `start`, `end`) VALUES
(1, 1, 1, '2010-01-01', '2010-09-20'),
(2, 2, 1, '2009-06-16', '2010-06-30'),
(4, 2, 2, '2010-07-26', '2011-07-26'),
(3, 3, 1, '2010-07-26', '2010-09-20'),
(5, 2, 3, '0000-00-00', '0000-00-00'),
(18, 8, 1, '2010-09-27', '2010-09-27'),
(17, 7, 1, '2010-09-27', '2010-09-27'),
(16, 6, 1, '2010-09-27', '2010-09-27'),
(15, 5, 1, '2010-09-27', '2010-09-27'),
(14, 4, 1, '2010-09-28', '2010-09-28'),
(13, 3, 2, '2010-09-20', '2010-09-20'),
(12, 3, 1, '2010-09-20', '2010-09-20'),
(19, 9, 1, '2010-09-27', '2010-09-27'),
(20, 10, 2, '2010-09-27', '2010-09-27'),
(21, 11, 2, '2010-09-27', '2010-09-27'),
(22, 12, 2, '2010-09-27', '2010-09-27'),
(23, 13, 2, '2010-09-27', '2010-09-27'),
(24, 14, 2, '2010-09-27', '2010-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `quatrinhcongtac`
--

CREATE TABLE IF NOT EXISTS `quatrinhcongtac` (
  `id_doanvien` int(11) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL,
  `chucvu` varchar(100) NOT NULL,
  PRIMARY KEY (`id_doanvien`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quatrinhcongtac`
--


-- --------------------------------------------------------

--
-- Table structure for table `quatrinhhoctap`
--

CREATE TABLE IF NOT EXISTS `quatrinhhoctap` (
  `id_doanvien` int(11) NOT NULL,
  `tentruong` varchar(255) NOT NULL,
  `nganhhoc` varchar(150) NOT NULL,
  `thoigianhoc` varchar(50) NOT NULL,
  `hinhthuchoc` varchar(50) NOT NULL,
  `vanbang` varchar(50) NOT NULL,
  PRIMARY KEY (`id_doanvien`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quatrinhhoctap`
--


-- --------------------------------------------------------

--
-- Table structure for table `thamgiaphongtrao`
--

CREATE TABLE IF NOT EXISTS `thamgiaphongtrao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doanvien` int(11) NOT NULL,
  `id_phongtraodoan` int(11) NOT NULL,
  `danhgia` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `thamgiaphongtrao`
--

INSERT INTO `thamgiaphongtrao` (`id`, `id_doanvien`, `id_phongtraodoan`, `danhgia`) VALUES
(2, 1, 2, 'Tam'),
(3, 1, 3, 'Kem'),
(4, 3, 3, ''),
(5, 1, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `thongtindoanvien`
--

CREATE TABLE IF NOT EXISTS `thongtindoanvien` (
  `id_doanvien` varchar(11) NOT NULL,
  `congvieclaunhat` varchar(100) DEFAULT NULL,
  `congviec` varchar(100) DEFAULT NULL,
  `khenthuong` text,
  `kyluat` text,
  `tinhtrangsuckhoe` varchar(15) NOT NULL,
  `chieucao` smallint(6) NOT NULL,
  `cannang` tinyint(4) NOT NULL,
  `nhommau` varchar(2) NOT NULL,
  `cmnd` varchar(10) NOT NULL,
  `thuongbinhloai` varchar(8) DEFAULT NULL,
  `hoten` varchar(100) NOT NULL,
  `tenkhac` varchar(100) DEFAULT NULL,
  `gioitinh` int(1) NOT NULL,
  `capuyhientai` varchar(80) DEFAULT NULL,
  `capuykiem` varchar(80) DEFAULT NULL,
  `chucvu` varchar(80) DEFAULT NULL,
  `ngaysinh` date NOT NULL,
  `noisinh` text NOT NULL,
  `quequan` text NOT NULL,
  `noitamtru` text NOT NULL,
  `dienthoainharieng` text NOT NULL,
  `dantoc` varchar(50) NOT NULL,
  `tongiao` varchar(50) NOT NULL,
  `xuatthangiadinh` varchar(50) NOT NULL,
  `ngaytuyendung` date DEFAULT NULL,
  `coquan` text,
  `ngayvaocoquancongtac` date DEFAULT NULL,
  `ngayvaodangdubi` date DEFAULT NULL,
  `ngayvaodangchinhthuc` date DEFAULT NULL,
  `ngaynhapngu` date DEFAULT NULL,
  `ngayxuatngu` date DEFAULT NULL,
  `chucvucaonhat` varchar(200) DEFAULT NULL,
  `trinhdovanhoa` varchar(150) NOT NULL,
  `trinhdolyluanchinhtri` varchar(150) NOT NULL,
  `trinhdongoaingu` varchar(150) NOT NULL,
  `hochamcaonhat` varchar(150) NOT NULL,
  `congtacchinh` varchar(150) DEFAULT NULL,
  `ngachcongchuc` varchar(10) DEFAULT NULL,
  `bacluong` varchar(10) DEFAULT NULL,
  `hesoluong` varchar(10) DEFAULT NULL,
  `danhhieu` text,
  `sotruong` text,
  `giadinhlietsi` int(1) DEFAULT NULL,
  `dacdiembanthan` text,
  `quanhenuocngoai` text,
  `noithuongtru` text NOT NULL,
  `dienthoaididong` text NOT NULL,
  `ngayvaodoan` date NOT NULL,
  PRIMARY KEY (`id_doanvien`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thongtindoanvien`
--

INSERT INTO `thongtindoanvien` (`id_doanvien`, `congvieclaunhat`, `congviec`, `khenthuong`, `kyluat`, `tinhtrangsuckhoe`, `chieucao`, `cannang`, `nhommau`, `cmnd`, `thuongbinhloai`, `hoten`, `tenkhac`, `gioitinh`, `capuyhientai`, `capuykiem`, `chucvu`, `ngaysinh`, `noisinh`, `quequan`, `noitamtru`, `dienthoainharieng`, `dantoc`, `tongiao`, `xuatthangiadinh`, `ngaytuyendung`, `coquan`, `ngayvaocoquancongtac`, `ngayvaodangdubi`, `ngayvaodangchinhthuc`, `ngaynhapngu`, `ngayxuatngu`, `chucvucaonhat`, `trinhdovanhoa`, `trinhdolyluanchinhtri`, `trinhdongoaingu`, `hochamcaonhat`, `congtacchinh`, `ngachcongchuc`, `bacluong`, `hesoluong`, `danhhieu`, `sotruong`, `giadinhlietsi`, `dacdiembanthan`, `quanhenuocngoai`, `noithuongtru`, `dienthoaididong`, `ngayvaodoan`) VALUES
('1', NULL, NULL, NULL, NULL, 'Tot cai gi ma t', 250, 127, 'D', '201130401', NULL, 'Nguyá»…n HoÃ ng Hiáº¿u', NULL, 0, NULL, NULL, NULL, '1990-06-14', 'Ba Ria', 'Vung Tau', 'Binh Thanh', '082761263', 'Kinh', 'Tin Lanh', 'Biet chet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10/12', 'Khong co', 'Khong co bang ', 'GS nganh tam than hoc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dau co biet', '09788798990', '2003-03-21'),
('3', NULL, 'Bi Thu Doan Truong', '1', '1', 'Tot', 170, 70, 'B', 'xxxxxxxxx', NULL, 'Tráº§n VÄƒn An', NULL, 0, NULL, NULL, NULL, '1985-07-26', 'khong ro', 'khong hay', 'Tam thoi chua biet', '0832100216', 'KhÆ¡ me Ä‘á»', 'BÃ¡ Ä‘áº¡o', 'Ban nong', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12/12', 'trung cap chinh tri', 'bang C', 'Thac si', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Biáº¿t cháº¿t liá»n', '0903002001', '1989-01-11'),
('13', NULL, NULL, NULL, NULL, ' ', 0, 0, '0', '0', NULL, 'Nguyá»…n VÄƒn A', NULL, 0, NULL, NULL, NULL, '1980-10-20', ' ', ' ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' ', ' ', '2010-09-27'),
('12', NULL, NULL, NULL, NULL, ' ', 0, 0, '0', '0', NULL, 'ï»¿Nguyá»…n VÄƒn A', NULL, 0, NULL, NULL, NULL, '1980-10-20', ' ', ' ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' ', ' ', '2010-09-27'),
('14', NULL, NULL, NULL, NULL, ' ', 0, 0, '0', '0', NULL, 'Nguyá»…n VÄƒn A', NULL, 0, NULL, NULL, NULL, '1980-10-20', ' ', ' ', ' ', ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' ', ' ', ' ', ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' ', ' ', '2010-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `id_doanvien` int(11) NOT NULL,
  `id_cosodoan` int(11) NOT NULL,
  `tieude` text NOT NULL,
  `noidung` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `time`, `id_doanvien`, `id_cosodoan`, `tieude`, `noidung`) VALUES
(8, '2010-11-05 04:08:44', 1, 1, 'd', 'dssssss'),
(5, '2010-11-05 04:07:22', 1, 1, 'xxxxxxx', 'vvvvvvvv'),
(6, '2010-11-05 04:07:38', 1, 1, 'ffffffff', 'xxxxxvvvvv'),
(9, '2010-11-05 04:09:00', 1, 1, 'dddd', 'vvvvv'),
(7, '2010-11-05 04:08:36', 1, 1, 'ffffffff', 'xxxxxvvvvv');

-- --------------------------------------------------------

--
-- Table structure for table `xeploaidoanvien`
--

CREATE TABLE IF NOT EXISTS `xeploaidoanvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_doanvien` int(11) NOT NULL,
  `diem` int(11) NOT NULL,
  `loai` text NOT NULL,
  `Note` text NOT NULL,
  `year_start` int(11) NOT NULL,
  `year_end` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `xeploaidoanvien`
--

INSERT INTO `xeploaidoanvien` (`id`, `id_doanvien`, `diem`, `loai`, `Note`, `year_start`, `year_end`) VALUES
(1, 1, 100, 'Tot', 'Doan vien uu tu', 2009, 2010);

-- --------------------------------------------------------

--
-- Table structure for table `xeploaihangnam_cosodoan`
--

CREATE TABLE IF NOT EXISTS `xeploaihangnam_cosodoan` (
  `id` int(11) NOT NULL,
  `cosodoan` int(11) NOT NULL,
  `thongtin_doancoso` text NOT NULL,
  `thongke_doanvien` text NOT NULL,
  `nhanxet` text NOT NULL,
  `dacthu` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xeploaihangnam_cosodoan`
--

--
-- Database: `uit`
--
CREATE DATABASE `uit` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uit`;

-- --------------------------------------------------------

--
-- Table structure for table `idol`
--

CREATE TABLE IF NOT EXISTS `idol` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `sdt` varchar(20) NOT NULL,
  `binhchon` varchar(65) NOT NULL,
  `chon` int(11) NOT NULL,
  `dudoan` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `idol`
--


-- --------------------------------------------------------

--
-- Table structure for table `thanhlich`
--

CREATE TABLE IF NOT EXISTS `thanhlich` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `sdt` varchar(20) NOT NULL,
  `binhchon` varchar(65) NOT NULL,
  `chon` int(11) NOT NULL,
  `dudoan` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `thanhlich`
--

