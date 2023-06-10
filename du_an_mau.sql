-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 10:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an_mau`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `maBinhLuan` int(10) NOT NULL,
  `noiDung` varchar(255) NOT NULL,
  `ngayBinhLuan` date NOT NULL,
  `maHangHoa` int(10) NOT NULL,
  `maKhachHang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`maBinhLuan`, `noiDung`, `ngayBinhLuan`, `maHangHoa`, `maKhachHang`) VALUES
(55, 'đẹp', '2023-06-10', 46, 56),
(56, 'xịn', '2023-06-10', 50, 62),
(57, 'Xấu', '2023-06-10', 41, 62),
(58, 'alo', '2023-06-10', 50, 62),
(59, 'huhu', '2023-06-10', 46, 62),
(60, 'haha', '2023-06-06', 41, 59);

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `maHangHoa` int(10) NOT NULL,
  `tenHangHoa` varchar(255) NOT NULL,
  `donGia` double(10,2) NOT NULL,
  `anh` varchar(255) NOT NULL DEFAULT 'default.png',
  `ngayNhap` date DEFAULT NULL,
  `maLoai` int(10) NOT NULL,
  `dacBiet` bit(1) DEFAULT NULL,
  `soLuotXem` int(10) DEFAULT 0,
  `moTa` text NOT NULL,
  `giamGia` double(10,1) DEFAULT 0.0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`maHangHoa`, `tenHangHoa`, `donGia`, `anh`, `ngayNhap`, `maLoai`, `dacBiet`, `soLuotXem`, `moTa`, `giamGia`) VALUES
(41, 'Iphone 11', 2000000.00, 'ipho.jpg', '2023-07-01', 1, NULL, 2, 'iPhone 12 sẽ chạy trên hệ điều hành iOS 15 (12/2021) với nhiều tính năng hấp dẫn như hỗ trợ Widget cũng như những nâng cấp tối ưu phần mềm đáng kể mang lại những trải nghiệm thú vị mới lạ đến người dùng.', 20000.0),
(42, 'samsung zfould 4', 20000000.00, 'ip.jpg', '2023-06-30', 2, NULL, 1, 'iphone sẽ chạy trên hệ điều hành iOS 15 (12/2021) với nhiều tính năng hấp dẫn như hỗ trợ Widget cũng như những nâng cấp tối ưu phần mềm đáng kể mang lại những trải nghiệm thú vị mới lạ đến người dùng.', 0.0),
(43, 'oppo3 oled light', 200000.00, 'oppo.jpg', '2023-06-29', 171, NULL, 2, 'sẽ chạy trên hệ điều hành iOS 15 (12/2021) với nhiều tính năng hấp dẫn như hỗ trợ Widget cũng như những nâng cấp tối ưu phần mềm đáng kể mang lại những trải nghiệm thú vị mới lạ đến người dùng.', 44.0),
(44, 'Iphone 12', 2000000.00, 'ipho.jpg', '2023-06-28', 1, NULL, 1, 'iPhone 12 sẽ chạy trên hệ điều hành iOS 15 (12/2021) với nhiều tính năng hấp dẫn như hỗ trợ Widget cũng như những nâng cấp tối ưu phần mềm đáng kể mang lại những trải nghiệm thú vị mới lạ đến người dùng.', 12000.0),
(45, 'Xiaomi xịn xò 12', 100000.00, 'xiaomi.jpg', '2023-06-27', 173, NULL, 1, 'Đây là mô tả xIao mi sẽ chạy trên hệ điều hành iOS 15 (12/2021) với nhiều tính năng hấp dẫn như hỗ trợ Widget cũng như những nâng cấp tối ưu phần mềm đáng kể mang lại những trải nghiệm thú vị mới lạ đến người dùng.', 0.0),
(46, 'samsung flip', 4000000.00, 'ss.jpg', '2023-06-24', 2, NULL, 3, 'Elegant, Stylish, and affordable cases are your best shot at our store. Introducing our Matte Samsung\'s Flip phone case. We believe that expensive phones require more protection but with better style statements. Designed especially for your lifestyle\'s attitude. Our Samsung matte cases are practical and fashionable. The IMD material covers the phone entirely and gives protection from falls, while PC matte skin gives you extra comfort while your phone from dust, scratches, and marks. Your Flip ph', 0.0),
(48, 'Google pixel', 3000000.00, 'px.jpg', '2023-06-22', 174, NULL, 3, 'Google phones have many advantages, including: – Google Assistant: The Google phone contains what is known as the Google Assistant, which provides many technical services to Google users. – Google Pixel customer service: contains phones in an application that identifies customers (Google pixel care service); An application that enables the promoter to serve customers; and communicate with customer #smartphone #GooglePixel5a #gamingphone #bestphone #affiliate #sponsored …', 0.0),
(49, 'Samsung galaxy s23', 20000000.00, 's23.jpg', '2023-06-14', 2, NULL, 10, 'The post Samsung Galaxy S23 appeared first on Tech Specifications.', 10000.0),
(50, 'Iphone black', 19000000.00, 'ipb.jpg', '2023-06-13', 1, NULL, 3, 'iPhone 12 sẽ chạy trên hệ điều hành iOS 15 (12/2021) với nhiều tính năng hấp dẫn như hỗ trợ Widget cũng như những nâng cấp tối ưu phần mềm đáng kể mang lại những trải nghiệm thú vị mới lạ đến người dùng.', 0.0),
(51, 'Sony 3000', 5000000.00, 'sn.jpg', '2023-06-12', 3, NULL, 0, 'Sony Mobile Xperia Pro-i 512 GB Smartphone, 6.5', 0.0),
(52, 'sony Tím', 100000.00, '2ns.jpg', '2023-06-10', 3, NULL, 0, 'Sony Mobile Xperia Pro-i 512 GB Smartphone, 6.5', 0.0),
(53, 'Sony 2000', 5000000.00, 'sn3.jpg', '2023-06-09', 3, NULL, 0, 'Sony Xperia Pro-I smartphone delivers high-quality footage with 4K 120p resolution & more', 0.0),
(54, 'Sony màu đen', 100000.00, 'sn3.jpg', '2023-06-08', 3, NULL, 0, 'Sony Xperia Pro-I smartphone delivers high-quality footage with 4K 120p resolution & more', 20000.0),
(55, 'Sony cao cấp', 200000.00, 'sn2.jpg', '2023-06-07', 3, NULL, 0, 'Sony Xperia Pro-I smartphone delivers high-quality footage with 4K 120p resolution & more', 0.0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `maKhachHang` int(10) NOT NULL,
  `tenKhachHang` varchar(20) NOT NULL,
  `matKhau` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `anh` varchar(20) DEFAULT NULL,
  `kichHoat` bit(1) NOT NULL DEFAULT b'1',
  `vaiTro` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`maKhachHang`, `tenKhachHang`, `matKhau`, `email`, `anh`, `kichHoat`, `vaiTro`) VALUES
(56, 'huân', '1122', 't@gmail.com', 's23.jpg', b'1', b'1'),
(59, 'Nguyễn Tuấn Anh', '11111', 'admin@gmail.com', 'mm.png', b'1', b'1'),
(60, 'p', '', '', 'anhcuaban.png', b'1', b'0'),
(61, 'Nguyễn Hoa', '11111', 'hoa@gmail.com', 'anhcuaban.png', b'1', b'1'),
(62, 'Tuan anh', '11111', 'user@gmail.com', 'anhcuaban.png', b'1', b'0'),
(63, 'Khắc Tùng', '33333', 'tung@gmail.com', 'anhcuaban.png', b'1', b'1'),
(64, 'Nguyễn Quỳnh', '33333', 'quynh@gmail.com', 'anhcuaban.png', b'1', b'0'),
(65, 'Như Bình', '55555', 'binh@gmail.com', 'anhcuaban.png', b'1', b'0'),
(66, 'Khắc Lợi', '66666', 'loi@gmail.com', 'anhcuaban.png', b'1', b'0'),
(67, 'Huân', '77777', 'huan@gmail.com', 'anhcuaban.png', b'1', b'0'),
(68, 'Cường', '11111', 'cuong@gmail.com', 'anhcuaban.png', b'1', b'0'),
(69, '1122', 'tttt@gmail', 'Vương Nhung', 'anhcuaban.png', b'1', b'0'),
(74, 'sáo1', '333', 'sao@gmail.com', 'sn.jpg', b'1', b'1'),
(75, 'tun222', '222', 'anhntph30476@fpt.edu', 'px.jpg', b'1', b'0'),
(76, 'Thanh Thủy', '1111', 'tunthuy@gmail.com', 'images.jfif', b'1', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maLoai` int(10) NOT NULL,
  `tenLoai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maLoai`, `tenLoai`) VALUES
(1, 'Iphone'),
(2, 'Samsung'),
(3, 'Sony'),
(171, 'Oppo'),
(173, 'Xiaomi'),
(174, 'Google');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`maBinhLuan`),
  ADD KEY `fk_maKhachHang` (`maKhachHang`),
  ADD KEY `fk_maHangHoa` (`maHangHoa`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`maHangHoa`),
  ADD KEY `fk_maLoai` (`maLoai`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKhachHang`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maLoai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `maBinhLuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `maHangHoa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKhachHang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `maLoai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_maHangHoa` FOREIGN KEY (`maHangHoa`) REFERENCES `hanghoa` (`maHangHoa`),
  ADD CONSTRAINT `fk_maKhachHang` FOREIGN KEY (`maKhachHang`) REFERENCES `khachhang` (`maKhachHang`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `fk_maLoai` FOREIGN KEY (`maLoai`) REFERENCES `loai` (`maLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
