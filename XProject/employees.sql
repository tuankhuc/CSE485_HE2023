-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 04, 2023 lúc 11:28 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `salary` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `name`, `address`, `salary`) VALUES
(1, 'Employee 1', 'Address 1', '507.63'),
(2, 'Employee 2', 'Address 2', '332.14'),
(3, 'Employee 3', 'Address 3', '401.07'),
(4, 'Employee 4', 'Address 4', '720.53'),
(5, 'Employee 5', 'Address 5', '324.78'),
(6, 'Employee 6', 'Address 6', '616.82'),
(7, 'Employee 7', 'Address 7', '600.05'),
(8, 'Employee 8', 'Address 8', '566.97'),
(9, 'Employee 9', 'Address 9', '506.62'),
(10, 'Employee 10', 'Address 10', '302.85'),
(11, 'Employee 11', 'Address 11', '607.52'),
(12, 'Employee 12', 'Address 12', '779.25'),
(13, 'Employee 13', 'Address 13', '662.63'),
(14, 'Employee 14', 'Address 14', '396.40'),
(15, 'Employee 15', 'Address 15', '767.81'),
(16, 'Employee 16', 'Address 16', '588.21'),
(17, 'Employee 17', 'Address 17', '348.23'),
(18, 'Employee 18', 'Address 18', '491.24'),
(19, 'Employee 19', 'Address 19', '323.90'),
(20, 'Employee 20', 'Address 20', '352.72'),
(21, 'Employee 21', 'Address 21', '702.09'),
(22, 'Employee 22', 'Address 22', '792.92'),
(23, 'Employee 23', 'Address 23', '642.51'),
(24, 'Employee 24', 'Address 24', '450.81'),
(25, 'Employee 25', 'Address 25', '313.70'),
(26, 'Employee 26', 'Address 26', '783.35'),
(27, 'Employee 27', 'Address 27', '351.38'),
(28, 'Employee 28', 'Address 28', '678.50'),
(29, 'Employee 29', 'Address 29', '365.16'),
(30, 'Employee 30', 'Address 30', '536.65'),
(31, 'Employee 31', 'Address 31', '314.15'),
(32, 'Employee 32', 'Address 32', '767.36'),
(33, 'Employee 33', 'Address 33', '524.98'),
(34, 'Employee 34', 'Address 34', '440.84'),
(35, 'Employee 35', 'Address 35', '642.41'),
(36, 'Employee 36', 'Address 36', '708.19'),
(37, 'Employee 37', 'Address 37', '467.00'),
(38, 'Employee 38', 'Address 38', '503.14'),
(39, 'Employee 39', 'Address 39', '765.36'),
(40, 'Employee 40', 'Address 40', '581.85'),
(41, 'Employee 41', 'Address 41', '688.65'),
(42, 'Employee 42', 'Address 42', '517.91'),
(43, 'Employee 43', 'Address 43', '617.05'),
(44, 'Employee 44', 'Address 44', '637.87'),
(45, 'Employee 45', 'Address 45', '683.66'),
(46, 'Employee 46', 'Address 46', '524.98'),
(47, 'Employee 47', 'Address 47', '608.01'),
(48, 'Employee 48', 'Address 48', '776.92'),
(49, 'Employee 49', 'Address 49', '399.69'),
(50, 'Employee 50', 'Address 50', '300.30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
