-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 16, 2020 lúc 10:46 PM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bhsoft_dlnv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `ten`, `ngaysinh`, `gioitinh`, `email`, `chucvu`, `diachi`) VALUES
(1, 'Nguyễn văn hưng', '1990-06-07', 'nu', 'dotung@gmail.com', 'nhân viên', 'Vũng tàu'),
(2, 'Đỗ tùng', '2005-06-28', 'khac', 'nguyenvanhungcd0007@gmail.com', 'nhân viên', 'ban gian'),
(3, 'Triệu quang phục', '2008-07-07', 'nu', 'admin@gmail.com', 'Tướng quân', 'Hải phòng'),
(4, 'Trương hán siêu', '2001-07-07', 'nam', 'truonghansieu@gmail.com', 'Trạng nguyên', 'miền tây'),
(5, 'Tây thi', '1910-05-06', 'nu', 'admin@gmail.com', 'Nhân viên phục vụ', 'Tàu khựa'),
(6, 'Mã vân', '1972-05-06', 'nam', 'admin@gmail.com', 'Nông dân', 'Bồ thầy'),
(7, 'Hứa chử', '2013-06-06', 'nam', 'huachu@gmail.com', 'Lính đánh thêu', 'đảo hải nam'),
(14, 'điêu thuyền', '2023-05-02', 'nam', 'nguyenvanhungcd0007@gmail.com', 'giam doc', 'ban gian'),
(12, 'Dương quý phi', '1890-04-08', 'nu', 'admin@gmail.com', 'Nhân viên chạy bàn', 'Thượng hải'),
(13, 'thúy kiều', '2002-08-24', 'khac', 'thuyvan@gmail.com', 'kiều nữ', 'Sài gòn'),
(15, 'Điêu thuyền', '1920-09-04', 'nu', 'admin@gmail.com', 'Thực tập sinh', 'Đã nẵng'),
(16, 'Tào Tháo', '2002-09-27', 'nu', 'taothao@gmail.com', 'Phu quân', 'Nước ngụy'),
(17, 'abc', '2015-09-22', 'nu', 'phubui2702@gmail.com', 'Tướng quân', 'Hải phòng');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
