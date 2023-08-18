-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 18, 2023 lúc 11:58 AM
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
-- Cơ sở dữ liệu: `faketube`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `channels`
--

CREATE TABLE `channels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ChannelName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SubscribersCount` int(11) NOT NULL DEFAULT 0,
  `URL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `channels`
--

INSERT INTO `channels` (`id`, `ChannelName`, `Description`, `SubscribersCount`, `URL`, `created_at`, `updated_at`) VALUES
(1, 'Botsford', 'Impedit ullam voluptatem sint maxime architecto.', 534469, 'http://kiehn.com/recusandae-repudiandae-quia-sequi-ea-at-aut-velit-ullam.html', '2023-08-18 02:11:41', '2023-08-18 02:37:24'),
(2, 'Hessel, Jast', 'Delectus beatae totam sint corporis et eum et.', 575848, 'https://www.purdy.com/laboriosam-vel-omnis-soluta-quisquam-eum-voluptatum-quia', '2023-08-18 02:11:41', '2023-08-18 02:37:03'),
(3, 'Champlin-Johnston', 'Deserunt odio cum incidunt quaerat.', 526697, 'http://west.com/voluptatem-nemo-vero-quia-alias-rem-autem', '2023-08-18 02:11:41', '2023-08-18 02:11:41'),
(4, 'Gutmann-King', 'Voluptatem molestias nisi minus magni dolor officia voluptas.', 703434, 'http://weissnat.net/dolorem-fugit-ipsam-eius-sed-eos-aut.html', '2023-08-18 02:11:41', '2023-08-18 02:11:41'),
(5, 'Kub PLC', 'Voluptatem modi et corporis quibusdam quos dolorum.', 944164, 'http://www.johnston.com/qui-distinctio-quis-aut-ducimus-voluptatem-reiciendis-voluptatum', '2023-08-18 02:11:41', '2023-08-18 02:11:41'),
(6, 'King LLC', 'Aut et eum doloribus sunt saepe at.', 391771, 'http://mann.com/neque-molestiae-qui-quia-est-expedita-doloribus-id-nobis', '2023-08-18 02:11:41', '2023-08-18 02:11:41'),
(7, 'Considine Inc', 'Dicta voluptate consectetur facilis enim quia.', 486352, 'https://gerlach.com/quibusdam-voluptas-eos-quaerat.html', '2023-08-18 02:11:41', '2023-08-18 02:11:41'),
(8, 'Upton-Rath', 'Nesciunt exercitationem repellendus est vero.', 73397, 'http://daugherty.com/quos-quia-dicta-voluptatem', '2023-08-18 02:11:41', '2023-08-18 02:11:41'),
(9, 'Legros, Goodwin and Casper', 'Delectus placeat reiciendis amet harum numquam sequi quia occaecati.', 284672, 'http://fadel.com/facere-optio-ipsa-fuga-sapiente-voluptates.html', '2023-08-18 02:11:41', '2023-08-18 02:11:41'),
(10, 'Cartwright-Kautzer', 'Et error iste quasi quo aspernatur et.', 943337, 'http://www.wintheiser.com/necessitatibus-nesciunt-itaque-est-perferendis-rem-molestiae', '2023-08-18 02:11:41', '2023-08-18 02:11:41'),
(13, '2', 'dgjhkhjjfgdgfdh', 4, 'http://weissnat.net/dolorem-fugit-ipsam-eius-sed-e', '2023-08-18 02:41:43', '2023-08-18 02:41:43');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `channels`
--
ALTER TABLE `channels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
