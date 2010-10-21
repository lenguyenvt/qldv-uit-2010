-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2010 at 11:06 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qldv`
--

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
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 1, 1, '36dbce902d0bb948b839a0e492bb3fe4', '127.0.0.1', 'admin@uit.edu.vn', 1),
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

