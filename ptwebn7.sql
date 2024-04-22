-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 07:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptwebn7`
--

-- --------------------------------------------------------

--
-- Table structure for table `bai_tap`
--

CREATE TABLE `bai_tap` (
  `Ma_bai_tap` varchar(8) NOT NULL,
  `Ma_Khoa_Hoc` varchar(6) NOT NULL,
  `Ten_Bai_Tap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bo_cau_hoi`
--

CREATE TABLE `bo_cau_hoi` (
  `Ma_bo_cau_hoi` varchar(8) NOT NULL,
  `Ma_Khoa_Hoc` varchar(6) NOT NULL,
  `Ten_Bo_Cau_hoi` varchar(30) NOT NULL,
  `Link_Bo_Cau_Hoi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bo_de`
--

CREATE TABLE `bo_de` (
  `Ma_Bo_De` char(8) NOT NULL,
  `Do_kho` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_nhat_tai_lieu`
--

CREATE TABLE `cap_nhat_tai_lieu` (
  `Ma_Giang_Vien` varchar(8) NOT NULL,
  `Ten_Tai_Lieu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cau_hoi`
--

CREATE TABLE `cau_hoi` (
  `Ma_cau_hoi` varchar(10) NOT NULL,
  `Loai_Cau_Hoi` varchar(20) NOT NULL,
  `Noi_dung_Cau_Hoi` text NOT NULL,
  `Dap_an_dung` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danh_gia`
--

CREATE TABLE `danh_gia` (
  `id_DG` int(11) NOT NULL,
  `Ma_Khoa_Hoc` varchar(6) NOT NULL,
  `Diem_Danh_Gia` int(3) NOT NULL,
  `Ngay_DG` date NOT NULL,
  `Noi_dung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `danh_gia`
--

INSERT INTO `danh_gia` (`id_DG`, `Ma_Khoa_Hoc`, `Diem_Danh_Gia`, `Ngay_DG`, `Noi_dung`) VALUES
(12, 'KH01', 100, '2024-04-18', '     Hay'),
(13, 'KH01', 50, '2024-04-22', 'Hay');

-- --------------------------------------------------------

--
-- Table structure for table `de_thi`
--

CREATE TABLE `de_thi` (
  `Ma_De_Thi` varchar(8) NOT NULL,
  `Ma_Khoa_Hoc` varchar(6) NOT NULL,
  `Ten_De_Thi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giang_day`
--

CREATE TABLE `giang_day` (
  `id_LH` int(11) NOT NULL,
  `Ma_LH` varchar(8) NOT NULL,
  `Ma_Giang_Vien` varchar(8) NOT NULL,
  `Ma_Khoa_Hoc` varchar(6) NOT NULL,
  `Thoi_gian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `giang_day`
--

INSERT INTO `giang_day` (`id_LH`, `Ma_LH`, `Ma_Giang_Vien`, `Ma_Khoa_Hoc`, `Thoi_gian`) VALUES
(1, 'LH01', 'GV01', 'KH01', 'Ca 2: 2,4,6 2h30->4h30'),
(10, 'LH02', 'GV02', 'KH02', 'Ca 6: 3,5,7 8h30->10h00');

-- --------------------------------------------------------

--
-- Table structure for table `giang_vien`
--

CREATE TABLE `giang_vien` (
  `id_GV` int(11) NOT NULL,
  `Ma_Giang_Vien` varchar(8) NOT NULL,
  `Ho_va_Ten` varchar(50) NOT NULL,
  `Mat_khau` varchar(255) NOT NULL,
  `Loai_Tai_khoan` varchar(20) NOT NULL,
  `Gioi_tinh` varchar(3) NOT NULL,
  `So_dien_thoai` varchar(30) NOT NULL,
  `Dia_Chi` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `giang_vien`
--

INSERT INTO `giang_vien` (`id_GV`, `Ma_Giang_Vien`, `Ho_va_Ten`, `Mat_khau`, `Loai_Tai_khoan`, `Gioi_tinh`, `So_dien_thoai`, `Dia_Chi`, `Email`) VALUES
(1, 'GV01', 'Minh Quân', 'e10adc3949ba59abbe56e057f20f883e', 'Giáo viên', 'Nam', ' 0123456789', 'Quận 1, Tp HCM', 'pquan5459@gmail.com'),
(4, 'GV02', 'Diệp Minh', 'e10adc3949ba59abbe56e057f20f883e', 'Giáo viên', 'Nam', ' 0123456789', 'Ninh Kiều', 'quanb2110025@student.ctu.edu');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `Ma_Khoa_Hoc` varchar(8) NOT NULL,
  `Ma_hoc_vien` varchar(8) NOT NULL,
  `Ngay_tao` datetime NOT NULL,
  `Tong_tien` int(11) NOT NULL,
  `Trang_thai` tinyint(1) NOT NULL,
  `id_HD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`Ma_Khoa_Hoc`, `Ma_hoc_vien`, `Ngay_tao`, `Tong_tien`, `Trang_thai`, `id_HD`) VALUES
('KH01', 'HV01', '2024-04-21 02:27:45', 10000000, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `hoc_vien`
--

CREATE TABLE `hoc_vien` (
  `id_HV` int(11) NOT NULL,
  `Loai_Tai_Khoan` varchar(30) NOT NULL,
  `Mat_khau` varchar(255) NOT NULL,
  `Ma_hoc_vien` varchar(8) NOT NULL,
  `Ho_va_Ten` varchar(100) NOT NULL,
  `Gioi_tinh` varchar(3) NOT NULL,
  `So_dien_thoai` varchar(30) NOT NULL,
  `Dia_Chi` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `hoc_vien`
--

INSERT INTO `hoc_vien` (`id_HV`, `Loai_Tai_Khoan`, `Mat_khau`, `Ma_hoc_vien`, `Ho_va_Ten`, `Gioi_tinh`, `So_dien_thoai`, `Dia_Chi`, `Email`) VALUES
(1, 'Học viên', 'e10adc3949ba59abbe56e057f20f883e', 'HV01', 'Diệp Min', 'Nam', '0123456789', 'Quận 1, Tp HCM', 'nva@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `khoa_hoc`
--

CREATE TABLE `khoa_hoc` (
  `id_KH` int(11) NOT NULL,
  `Ma_Khoa_Hoc` varchar(6) NOT NULL,
  `Ma_Trung_Tam` varchar(8) NOT NULL,
  `Ten_Khoa_Hoc` varchar(30) NOT NULL,
  `So_tiet` int(11) NOT NULL,
  `Hoc_Phi` int(100) NOT NULL,
  `Link_Khoa_Hoc` varchar(30) NOT NULL,
  `Ngay_BD` date NOT NULL,
  `Ngay_KT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `khoa_hoc`
--

INSERT INTO `khoa_hoc` (`id_KH`, `Ma_Khoa_Hoc`, `Ma_Trung_Tam`, `Ten_Khoa_Hoc`, `So_tiet`, `Hoc_Phi`, `Link_Khoa_Hoc`, `Ngay_BD`, `Ngay_KT`) VALUES
(1, 'KH01', 'TT02', 'IELT', 40, 1000000, 'www.example.com', '2024-04-01', '2024-04-21'),
(8, 'KH02', 'TT01', 'TOEIC', 40, 1000000, 'www.example.com', '2024-04-01', '2024-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `lich_hoc`
--

CREATE TABLE `lich_hoc` (
  `Ma_Khoa_Hoc` varchar(6) NOT NULL,
  `Ngay_Hoc` date NOT NULL,
  `Thoi_Gian_Hoc` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id` int(100) NOT NULL,
  `Ma_ND` varchar(5) NOT NULL,
  `Ten_Dang_Nhap` varchar(30) NOT NULL,
  `Loai_Tai_Khoan` varchar(30) NOT NULL,
  `Mat_Khau` varchar(255) NOT NULL,
  `Ho_va_Ten` varchar(20) NOT NULL,
  `Gioi_tinh` varchar(3) NOT NULL,
  `So_dien_thoai` varchar(30) NOT NULL,
  `Dia_Chi` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Trang_Thai_TK` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `Ma_ND`, `Ten_Dang_Nhap`, `Loai_Tai_Khoan`, `Mat_Khau`, `Ho_va_Ten`, `Gioi_tinh`, `So_dien_thoai`, `Dia_Chi`, `Email`, `Trang_Thai_TK`) VALUES
(1, 'ND01', 'MinhQuan', 'Admin', 'e10adc3949ba59abbe56e057f20f883e', 'Minh Quan', 'Nam', '012345678', 'Cần Thơ', 'test@gmail.com', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `tai_lieu`
--

CREATE TABLE `tai_lieu` (
  `id` int(11) NOT NULL,
  `Ten_Tai_Lieu` varchar(30) NOT NULL,
  `Ma_Khoa_Hoc` varchar(6) NOT NULL,
  `Loai_Tai_lieu` varchar(20) NOT NULL,
  `Link_Tai_Lieu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `tai_lieu`
--

INSERT INTO `tai_lieu` (`id`, `Ten_Tai_Lieu`, `Ma_Khoa_Hoc`, `Loai_Tai_lieu`, `Link_Tai_Lieu`) VALUES
(3, 'Video ', 'KH01', 'Giáo trình', 'www.example.com'),
(5, 'Video ôn tập', 'KH02', 'Video bài giảng', 'www.example.com');

-- --------------------------------------------------------

--
-- Table structure for table `tham_gia_khoa_hoc`
--

CREATE TABLE `tham_gia_khoa_hoc` (
  `Ma_hoc_vien` varchar(8) NOT NULL,
  `Ma_Khoa_Hoc` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thong_bao`
--

CREATE TABLE `thong_bao` (
  `Ten_Dang_Nhap` varchar(30) NOT NULL,
  `Loai_Tai_Khoan` varchar(30) NOT NULL,
  `Ma_hoc_vien` varchar(8) NOT NULL,
  `Ma_Khoa_Hoc` varchar(6) NOT NULL,
  `Tieu_De` text NOT NULL,
  `no` text NOT NULL,
  `Thoi_Gian_Gui` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thuoc_bai_tap`
--

CREATE TABLE `thuoc_bai_tap` (
  `Ma_cau_hoi` varchar(10) NOT NULL,
  `Ma_bai_tap` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thuoc_bo_de`
--

CREATE TABLE `thuoc_bo_de` (
  `Ma_cau_hoi` varchar(10) NOT NULL,
  `Ma_Bo_De` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thuoc_de_thi`
--

CREATE TABLE `thuoc_de_thi` (
  `Ma_Bo_De` char(8) NOT NULL,
  `Ma_De_Thi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trao_doi`
--

CREATE TABLE `trao_doi` (
  `Ma_cuoc_trao_doi` varchar(8) NOT NULL,
  `Ma_Khoa_Hoc` varchar(6) DEFAULT NULL,
  `Noi_dung_cuoc_trao_doi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trung_tam`
--

CREATE TABLE `trung_tam` (
  `id_TT` int(11) NOT NULL,
  `Ma_Trung_Tam` varchar(8) NOT NULL,
  `Ten_Trung_Tam` varchar(30) NOT NULL,
  `Website` varchar(50) NOT NULL,
  `Dia_chi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `trung_tam`
--

INSERT INTO `trung_tam` (`id_TT`, `Ma_Trung_Tam`, `Ten_Trung_Tam`, `Website`, `Dia_chi`) VALUES
(1, 'TT01', 'Trung tâm Hà Nội', 'www.example.com ', 'Quận Hoàn Kiếm'),
(2, 'TT02', 'HCM', 'www.example.com ', 'Quận 1, Tp HCM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bai_tap`
--
ALTER TABLE `bai_tap`
  ADD PRIMARY KEY (`Ma_bai_tap`),
  ADD KEY `FK_BAI_TAP_BT_CUA_KH_KHOA_HOC` (`Ma_Khoa_Hoc`);

--
-- Indexes for table `bo_cau_hoi`
--
ALTER TABLE `bo_cau_hoi`
  ADD PRIMARY KEY (`Ma_bo_cau_hoi`),
  ADD KEY `FK_BO_CAU_H_BO_DE_CUA_KHOA_HOC` (`Ma_Khoa_Hoc`);

--
-- Indexes for table `bo_de`
--
ALTER TABLE `bo_de`
  ADD PRIMARY KEY (`Ma_Bo_De`);

--
-- Indexes for table `cap_nhat_tai_lieu`
--
ALTER TABLE `cap_nhat_tai_lieu`
  ADD KEY `FK_CAP_NHAT_CAP_NHAT__TAI_LIEU` (`Ten_Tai_Lieu`);

--
-- Indexes for table `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD PRIMARY KEY (`Ma_cau_hoi`);

--
-- Indexes for table `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD PRIMARY KEY (`id_DG`) USING BTREE,
  ADD KEY `FK_DANH_GIA_DANH_GIA__KHOA_HOC` (`Ma_Khoa_Hoc`) USING BTREE;

--
-- Indexes for table `de_thi`
--
ALTER TABLE `de_thi`
  ADD PRIMARY KEY (`Ma_De_Thi`),
  ADD KEY `FK_DE_THI_THI_KHOA__KHOA_HOC` (`Ma_Khoa_Hoc`);

--
-- Indexes for table `giang_day`
--
ALTER TABLE `giang_day`
  ADD PRIMARY KEY (`Ma_LH`),
  ADD UNIQUE KEY `id_LH` (`id_LH`),
  ADD KEY `Ma_Giang_Vien` (`Ma_Giang_Vien`,`Ma_Khoa_Hoc`),
  ADD KEY `Ma_Khoa_Hoc` (`Ma_Khoa_Hoc`);

--
-- Indexes for table `giang_vien`
--
ALTER TABLE `giang_vien`
  ADD PRIMARY KEY (`Ma_Giang_Vien`),
  ADD UNIQUE KEY `id` (`id_GV`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Email_2` (`Email`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id_HD`) USING BTREE,
  ADD UNIQUE KEY `Ma_hoc_vien_2` (`Ma_hoc_vien`),
  ADD KEY `Ma_Khoa_Hoc` (`Ma_Khoa_Hoc`),
  ADD KEY `Ma_hoc_vien` (`Ma_hoc_vien`);

--
-- Indexes for table `hoc_vien`
--
ALTER TABLE `hoc_vien`
  ADD PRIMARY KEY (`Ma_hoc_vien`),
  ADD UNIQUE KEY `id` (`id_HV`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Ma_hoc_vien` (`Ma_hoc_vien`);

--
-- Indexes for table `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  ADD PRIMARY KEY (`Ma_Khoa_Hoc`),
  ADD UNIQUE KEY `id` (`id_KH`),
  ADD KEY `FK_KHOA_HOC_CO_KHOA_H_TRUNG_TA` (`Ma_Trung_Tam`);

--
-- Indexes for table `lich_hoc`
--
ALTER TABLE `lich_hoc`
  ADD PRIMARY KEY (`Ma_Khoa_Hoc`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`Ma_ND`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `tai_lieu`
--
ALTER TABLE `tai_lieu`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_TAI_LIEU_THUOC_VE__KHOA_HOC` (`Ma_Khoa_Hoc`);

--
-- Indexes for table `tham_gia_khoa_hoc`
--
ALTER TABLE `tham_gia_khoa_hoc`
  ADD PRIMARY KEY (`Ma_hoc_vien`),
  ADD KEY `FK_THAM_GIA_THAM_GIA__KHOA_HOC` (`Ma_Khoa_Hoc`);

--
-- Indexes for table `thong_bao`
--
ALTER TABLE `thong_bao`
  ADD PRIMARY KEY (`Ten_Dang_Nhap`,`Loai_Tai_Khoan`,`Ma_hoc_vien`,`Ma_Khoa_Hoc`),
  ADD KEY `FK_THONG_BA_THONG_BAO_KHOA_HOC` (`Ma_Khoa_Hoc`);

--
-- Indexes for table `thuoc_bai_tap`
--
ALTER TABLE `thuoc_bai_tap`
  ADD PRIMARY KEY (`Ma_cau_hoi`,`Ma_bai_tap`),
  ADD KEY `FK_THUOC_BA_THUOC_BAI_BAI_TAP` (`Ma_bai_tap`);

--
-- Indexes for table `thuoc_bo_de`
--
ALTER TABLE `thuoc_bo_de`
  ADD PRIMARY KEY (`Ma_cau_hoi`,`Ma_Bo_De`),
  ADD KEY `FK_THUOC_BO_THUOC_BO__BO_DE` (`Ma_Bo_De`);

--
-- Indexes for table `thuoc_de_thi`
--
ALTER TABLE `thuoc_de_thi`
  ADD PRIMARY KEY (`Ma_Bo_De`,`Ma_De_Thi`),
  ADD KEY `FK_THUOC_DE_THUOC_DE__DE_THI` (`Ma_De_Thi`);

--
-- Indexes for table `trao_doi`
--
ALTER TABLE `trao_doi`
  ADD PRIMARY KEY (`Ma_cuoc_trao_doi`),
  ADD KEY `FK_TRAO_DOI_TRAO_DOI__KHOA_HOC` (`Ma_Khoa_Hoc`);

--
-- Indexes for table `trung_tam`
--
ALTER TABLE `trung_tam`
  ADD PRIMARY KEY (`Ma_Trung_Tam`),
  ADD UNIQUE KEY `id` (`id_TT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danh_gia`
--
ALTER TABLE `danh_gia`
  MODIFY `id_DG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `giang_day`
--
ALTER TABLE `giang_day`
  MODIFY `id_LH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `giang_vien`
--
ALTER TABLE `giang_vien`
  MODIFY `id_GV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id_HD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hoc_vien`
--
ALTER TABLE `hoc_vien`
  MODIFY `id_HV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  MODIFY `id_KH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tai_lieu`
--
ALTER TABLE `tai_lieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trung_tam`
--
ALTER TABLE `trung_tam`
  MODIFY `id_TT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bai_tap`
--
ALTER TABLE `bai_tap`
  ADD CONSTRAINT `FK_BAI_TAP_BT_CUA_KH_KHOA_HOC` FOREIGN KEY (`Ma_Khoa_Hoc`) REFERENCES `khoa_hoc` (`Ma_Khoa_Hoc`);

--
-- Constraints for table `bo_cau_hoi`
--
ALTER TABLE `bo_cau_hoi`
  ADD CONSTRAINT `FK_BO_CAU_H_BO_DE_CUA_KHOA_HOC` FOREIGN KEY (`Ma_Khoa_Hoc`) REFERENCES `khoa_hoc` (`Ma_Khoa_Hoc`);

--
-- Constraints for table `cap_nhat_tai_lieu`
--
ALTER TABLE `cap_nhat_tai_lieu`
  ADD CONSTRAINT `FK_CAP_NHAT_CAP_NHAT__GIANG_VI` FOREIGN KEY (`Ten_Dang_Nhap`,`Loai_Tai_Khoan`,`Ma_Giang_Vien`) REFERENCES `giang_vien` (`Ten_Dang_Nhap`, `Loai_Tai_Khoan`, `Ma_Giang_Vien`),
  ADD CONSTRAINT `FK_CAP_NHAT_CAP_NHAT__TAI_LIEU` FOREIGN KEY (`Ten_Tai_Lieu`) REFERENCES `tai_lieu` (`Ten_Tai_Lieu`);

--
-- Constraints for table `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD CONSTRAINT `FK_DANH_GIA_DANH_GIA__KHOA_HOC` FOREIGN KEY (`Ma_Khoa_Hoc`) REFERENCES `khoa_hoc` (`Ma_Khoa_Hoc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `de_thi`
--
ALTER TABLE `de_thi`
  ADD CONSTRAINT `FK_DE_THI_THI_KHOA__KHOA_HOC` FOREIGN KEY (`Ma_Khoa_Hoc`) REFERENCES `khoa_hoc` (`Ma_Khoa_Hoc`);

--
-- Constraints for table `giang_day`
--
ALTER TABLE `giang_day`
  ADD CONSTRAINT `giang_day_ibfk_1` FOREIGN KEY (`Ma_Khoa_Hoc`) REFERENCES `khoa_hoc` (`Ma_Khoa_Hoc`),
  ADD CONSTRAINT `giang_day_ibfk_2` FOREIGN KEY (`Ma_Giang_Vien`) REFERENCES `giang_vien` (`Ma_Giang_Vien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `FK_HV` FOREIGN KEY (`Ma_hoc_vien`) REFERENCES `hoc_vien` (`Ma_hoc_vien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_KH` FOREIGN KEY (`Ma_Khoa_Hoc`) REFERENCES `khoa_hoc` (`Ma_Khoa_Hoc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  ADD CONSTRAINT `FK_KHOA_HOC_CO_KHOA_H_TRUNG_TA` FOREIGN KEY (`Ma_Trung_Tam`) REFERENCES `trung_tam` (`Ma_Trung_Tam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lich_hoc`
--
ALTER TABLE `lich_hoc`
  ADD CONSTRAINT `FK_LICH_HOC_LICH_CUA__KHOA_HOC` FOREIGN KEY (`Ma_Khoa_Hoc`) REFERENCES `khoa_hoc` (`Ma_Khoa_Hoc`);

--
-- Constraints for table `tai_lieu`
--
ALTER TABLE `tai_lieu`
  ADD CONSTRAINT `FK_TAI_LIEU_THUOC_VE__KHOA_HOC` FOREIGN KEY (`Ma_Khoa_Hoc`) REFERENCES `khoa_hoc` (`Ma_Khoa_Hoc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tham_gia_khoa_hoc`
--
ALTER TABLE `tham_gia_khoa_hoc`
  ADD CONSTRAINT `FK_THAM_GIA_THAM_GIA__HOC_VIEN` FOREIGN KEY (`Ten_Dang_Nhap`,`Loai_Tai_Khoan`,`Ma_hoc_vien`) REFERENCES `hoc_vien` (`Ten_Dang_Nhap`, `Loai_Tai_Khoan`, `Ma_hoc_vien`),
  ADD CONSTRAINT `FK_THAM_GIA_THAM_GIA__KHOA_HOC` FOREIGN KEY (`Ma_Khoa_Hoc`) REFERENCES `khoa_hoc` (`Ma_Khoa_Hoc`);

--
-- Constraints for table `thong_bao`
--
ALTER TABLE `thong_bao`
  ADD CONSTRAINT `FK_THONG_BA_NHAN_THON_HOC_VIEN` FOREIGN KEY (`Ten_Dang_Nhap`,`Loai_Tai_Khoan`,`Ma_hoc_vien`) REFERENCES `hoc_vien` (`Ten_Dang_Nhap`, `Loai_Tai_Khoan`, `Ma_hoc_vien`),
  ADD CONSTRAINT `FK_THONG_BA_THONG_BAO_KHOA_HOC` FOREIGN KEY (`Ma_Khoa_Hoc`) REFERENCES `khoa_hoc` (`Ma_Khoa_Hoc`);

--
-- Constraints for table `thuoc_bai_tap`
--
ALTER TABLE `thuoc_bai_tap`
  ADD CONSTRAINT `FK_THUOC_BA_THUOC_BAI_BAI_TAP` FOREIGN KEY (`Ma_bai_tap`) REFERENCES `bai_tap` (`Ma_bai_tap`),
  ADD CONSTRAINT `FK_THUOC_BA_THUOC_BAI_CAU_HOI` FOREIGN KEY (`Ma_cau_hoi`) REFERENCES `cau_hoi` (`Ma_cau_hoi`);

--
-- Constraints for table `thuoc_bo_de`
--
ALTER TABLE `thuoc_bo_de`
  ADD CONSTRAINT `FK_THUOC_BO_THUOC_BO__BO_DE` FOREIGN KEY (`Ma_Bo_De`) REFERENCES `bo_de` (`Ma_Bo_De`),
  ADD CONSTRAINT `FK_THUOC_BO_THUOC_BO__CAU_HOI` FOREIGN KEY (`Ma_cau_hoi`) REFERENCES `cau_hoi` (`Ma_cau_hoi`);

--
-- Constraints for table `thuoc_de_thi`
--
ALTER TABLE `thuoc_de_thi`
  ADD CONSTRAINT `FK_THUOC_DE_THUOC_DE__BO_DE` FOREIGN KEY (`Ma_Bo_De`) REFERENCES `bo_de` (`Ma_Bo_De`),
  ADD CONSTRAINT `FK_THUOC_DE_THUOC_DE__DE_THI` FOREIGN KEY (`Ma_De_Thi`) REFERENCES `de_thi` (`Ma_De_Thi`);

--
-- Constraints for table `trao_doi`
--
ALTER TABLE `trao_doi`
  ADD CONSTRAINT `FK_TRAO_DOI_TRAO_DOI__KHOA_HOC` FOREIGN KEY (`Ma_Khoa_Hoc`) REFERENCES `khoa_hoc` (`Ma_Khoa_Hoc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
