-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 25, 2020 lúc 10:24 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ban-ve-xe-khach-pt15111`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `infomation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`) VALUES
(1, 'super admin', 1),
(2, 'admin', 2),
(3, 'user', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `routes`
--

CREATE TABLE `routes` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `estimate_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `first_point` varchar(255) NOT NULL,
  `final_point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ticket_code` varchar(255) NOT NULL,
  `seat_number` int(100) NOT NULL,
  `price` float NOT NULL,
  `booking_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `vehicles_id` int(10) NOT NULL,
  `ower_id` int(10) NOT NULL,
  `routes_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `phone_number`, `role_id`) VALUES
(5, 'son@gmail.com', '$2y$10$XMzMUQJFTB7S5vYmRvQMW.Ek9hjJzqIS0bmBBvpJvM4ERLkIV5Z/e', 'Sơn', '0968860830', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(10) NOT NULL,
  `seat_booked` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `vehicleTypes_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vehicle_types`
--

CREATE TABLE `vehicle_types` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vehicle_types`
--
ALTER TABLE `vehicle_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vehicle_types`
--
ALTER TABLE `vehicle_types`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
