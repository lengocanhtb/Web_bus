-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2021 lúc 09:37 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bus`
--
create database bus;
use bus;
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemdung`
--

CREATE TABLE `diemdung` (
  `madiemdung` int(6) NOT NULL,
  `MaTuyen` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemdung_list`
--

CREATE TABLE `diemdung_list` (
  `madiemdung` int(6) NOT NULL,
  `diemdungname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(6) NOT NULL,
  `SĐT` varchar(10) NOT NULL,
  `Matkhau` varchar(15) NOT NULL,
  `HoTen` varchar(30) DEFAULT NULL,
  `GioiTinh` int(1) DEFAULT NULL,
  `DiaChi` varchar(30) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `MaThe` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly`
--

CREATE TABLE `quanly` (
  `MaQL` varchar(15) NOT NULL,
  `MatKhau` varchar(15) NOT NULL,
  `HoTen` varchar(30) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thenganhang`
--

CREATE TABLE `thenganhang` (
  `SoThe` varchar(15) NOT NULL,
  `NganHang` varchar(50) NOT NULL,
  `MaKH` int(6) NOT NULL,
  `MaThe` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thexebuyt`
--

CREATE TABLE `thexebuyt` (
  `MaThe` varchar(10) NOT NULL,
  `SoDu` float NOT NULL,
  `TheVatLy` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyenxe`
--

CREATE TABLE `tuyenxe` (
  `MaTuyen` varchar(5) NOT NULL,
  `SoXe` int(3) NOT NULL,
  `TGDen` time DEFAULT NULL,
  `TGXuat` time DEFAULT NULL,
  `TGGianCach` int(4) DEFAULT NULL,
  `GiaVe` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vethuong`
--

CREATE TABLE `vethuong` (
  `MaVe` int(5) NOT NULL,
  `MaTuyen` varchar(5) NOT NULL,
  `MaKH` int(6) NOT NULL,
  `ThoiGian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diemdung`
--
ALTER TABLE `diemdung`
  ADD PRIMARY KEY (`madiemdung`),
  ADD KEY `tuyen_ibfk_1` (`MaTuyen`);

--
-- Chỉ mục cho bảng `diemdung_list`
--
ALTER TABLE `diemdung_list`
  ADD PRIMARY KEY (`madiemdung`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`),
  ADD KEY `mathe` (`MaThe`);

--
-- Chỉ mục cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`MaQL`);

--
-- Chỉ mục cho bảng `thenganhang`
--
ALTER TABLE `thenganhang`
  ADD PRIMARY KEY (`SoThe`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaThe` (`MaThe`);

--
-- Chỉ mục cho bảng `thexebuyt`
--
ALTER TABLE `thexebuyt`
  ADD PRIMARY KEY (`MaThe`);

--
-- Chỉ mục cho bảng `tuyenxe`
--
ALTER TABLE `tuyenxe`
  ADD PRIMARY KEY (`MaTuyen`);

--
-- Chỉ mục cho bảng `vethuong`
--
ALTER TABLE `vethuong`
  ADD PRIMARY KEY (`MaVe`),
  ADD KEY `MaTuyen` (`MaTuyen`),
  ADD KEY `MaKH` (`MaKH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `diemdung_list`
--
ALTER TABLE `diemdung_list`
  MODIFY `madiemdung` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `thenganhang`
--
ALTER TABLE `thenganhang`
  MODIFY `MaKH` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vethuong`
--
ALTER TABLE `vethuong`
  MODIFY `MaVe` int(5) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diemdung`
--
ALTER TABLE `diemdung`
  ADD CONSTRAINT `diemdung_fk` FOREIGN KEY (`madiemdung`) REFERENCES `diemdung_list` (`madiemdung`),
  ADD CONSTRAINT `tuyen_ibfk_1` FOREIGN KEY (`MaTuyen`) REFERENCES `tuyenxe` (`MaTuyen`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `mathe` FOREIGN KEY (`MaThe`) REFERENCES `thexebuyt` (`MaThe`);

--
-- Các ràng buộc cho bảng `thenganhang`
--
ALTER TABLE `thenganhang`
  ADD CONSTRAINT `thenganhang_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `thenganhang_ibfk_2` FOREIGN KEY (`MaThe`) REFERENCES `thexebuyt` (`MaThe`);

--
-- Các ràng buộc cho bảng `vethuong`
--
ALTER TABLE `vethuong`
  ADD CONSTRAINT `vethuong_ibfk_1` FOREIGN KEY (`MaTuyen`) REFERENCES `tuyenxe` (`MaTuyen`),
  ADD CONSTRAINT `vethuong_ibfk_2` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
