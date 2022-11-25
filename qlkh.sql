-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2022 lúc 02:39 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlkh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `soluong` int(50) NOT NULL,
  `dongia` double NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idkh` int(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`soluong`, `dongia`, `title`, `hinh`, `idkh`, `id`) VALUES
(5, 200000, 'TISSOT AUTOMATICS III', 'AnhDongHo/200_fw__T122.407.11.051.00.png', 20, 2),
(3, 2800000, 'MIDO BARONCELLI CHRONOMETER SILICON GENT', 'img_sanpham/mido.png', 20, 65),
(2, 1000000, 'TISSOT CARSON PREMIUM POWERMATIC 80', 'img_sanpham/tissot.png', 20, 66),
(1, 1000000, 'TISSOT CARSON PREMIUM POWERMATIC 80', 'img_sanpham/mido.png', 20, 69),
(7, 200000, 'TISSOT AUTOMATICS III', 'AnhDongHo/200_fw__T122.407.11.051.00.png', 22, 2),
(7, 200000, 'TISSOT AUTOMATICS III', 'AnhDongHo/200_fw__T122.407.11.051.00.png', 21, 2),
(2, 25000000, 'MIDO BELLUNA SMALL SECONDS M024.428.36.051.00', 'img_sanpham/mido2.png', 22, 68),
(3, 2800000, 'MIDO BARONCELLI CHRONOMETER SILICON GENT', 'img_sanpham/mido.png', 22, 65),
(1, 25000000, 'MIDO BELLUNA SMALL SECONDS M024.428.36.051.00', 'img_sanpham/mido2.png', 21, 68),
(2, 1000000, 'TISSOT CARSON PREMIUM POWERMATIC 80', 'img_sanpham/mido.png', 21, 69),
(5, 1000000, 'TISSOT CARSON PREMIUM POWERMATIC 80', 'img_sanpham/tissot.png', 21, 66),
(4, 25000000, 'MIDO BELLUNA SMALL SECONDS M024.428.36.051.00', 'img_sanpham/mido2.png', 20, 68),
(1, 1000000, 'TISSOT CARSON PREMIUM POWERMATIC 80', 'img_sanpham/mido.png', 0, 69),
(2, 1000000, 'TISSOT CARSON PREMIUM POWERMATIC 80', 'img_sanpham/tissot.png', 22, 66),
(2, 200000, 'TISSOT AUTOMATICS III', 'AnhDongHo/200_fw__T122.407.11.051.00.png', 33, 2),
(1, 25000000, 'MIDO BELLUNA SMALL SECONDS M024.428.36.051.00', 'img_sanpham/mido2.png', 33, 68),
(1, 2800000, 'MIDO BARONCELLI CHRONOMETER SILICON GENT', 'img_sanpham/mido.png', 0, 65);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `username`, `password`) VALUES
(20, 'hao@gmail.com', '123456'),
(21, 'khanh@gmail.com', '123456'),
(22, 'hau@gmail.com', ' 123456'),
(30, 'admin@gmail.com', '1111'),
(31, 'asss', '123'),
(32, 'hau@gmail.com', '111111'),
(33, 'hoi@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(10) NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `thuonghieu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `xuatxu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vatlieuvo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaimay` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kichthuocvo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baohanh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tieude`, `hinh`, `gia`, `thuonghieu`, `xuatxu`, `gioitinh`, `vatlieuvo`, `loaimay`, `kichthuocvo`, `baohanh`) VALUES
(2, 'TISSOT AUTOMATICS III', 'AnhDongHo/200_fw__T122.407.11.051.00.png', 200000, 'TISSOT', 'Thụy Sĩ', 'Nam', 'Thép không gỉ 316L', 'Automatic', '2mm x3mm', '2 năm'),
(65, 'MIDO BARONCELLI CHRONOMETER SILICON GENT', 'img_sanpham/mido.png', 2800000, 'Mido', 'Thụy Sỹ', 'nam', 'Thép không gỉ', 'Automatic', '40 mm', '3 năm'),
(66, 'TISSOT CARSON PREMIUM POWERMATIC 80', 'img_sanpham/tissot.png', 1000000, ' Tissot', 'Việt Nam', ' Nam', 'Thép không gỉ 316L', '20mm x 30mm', '40 mm', '2 năm'),
(68, 'MIDO BELLUNA SMALL SECONDS M024.428.36.051.00', 'img_sanpham/mido2.png', 25000000, 'Mido', 'Thụy Sĩ', 'Nam', 'Thép không gỉ mạ PVD vàng hồng', 'Automatic', '40 mm', '2 năm'),
(69, 'TISSOT CARSON PREMIUM POWERMATIC 80', 'img_sanpham/mido.png', 1000000, ' Mido', 'Thụy Sĩ', ' Nam', 'Thép không gỉ 316L', 'Automatic', '40 mm', '2 năm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ttdathang`
--

CREATE TABLE `ttdathang` (
  `id` int(10) NOT NULL,
  `hoten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhthanh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quanhuyen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vanchuyen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanhtoan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ttdathang`
--

INSERT INTO `ttdathang` (`id`, `hoten`, `email`, `dienthoai`, `tinhthanh`, `quanhuyen`, `diachi`, `ghichu`, `vanchuyen`, `thanhtoan`) VALUES
(1, 'lê vĩnh hảo', 'hao@gmail.com', '0981026490', 'Long An', 'Châu Thành', '16/6 Long Thành, Long Trì', 'nhớ giao đúng hạn', 'Nhận hàng trực tiếp', 'Thanh toán trực tiếp'),
(32, 'lê vĩnh hảo', 'hao@gmail.com', '0981026490', 'Long An', 'Châu Thành', '16/6 Long Thành, Long Trì', 'nhớ giao đúng hạn', 'Khác', 'Thanh toán trực tiếp'),
(34, 'lê vĩnh hảo', 'hao@gmail.com', '0981026490', 'Long An', 'Châu Thành', '16/6 Long Thành, Long Trì', 'nhớ giao đúng hạn', 'Nhận hàng trực tiếp', 'Thanh toán trực tiếp'),
(35, 'Đặng Ngọc Thanh', 'thanhngoc@gmail.com', '0903645509', 'Long Xuyên', 'Châu Giang', '390 Hoàng Văn Thụ', 'dcm', 'Nhận hàng trực tiếp', 'Thanh toán trực tiếp'),
(36, 'lê vĩnh hảo', 'hao@gmail.com', '0981026490', 'Long An', 'Châu Thành', '16/6 Long Thành, Long Trì', 'nhớ giao đúng hạn', 'Nhận hàng trực tiếp', 'Thanh toán trực tiếp');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Chỉ mục cho bảng `ttdathang`
--
ALTER TABLE `ttdathang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `ttdathang`
--
ALTER TABLE `ttdathang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
