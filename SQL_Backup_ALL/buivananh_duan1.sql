-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2023 lúc 06:20 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `buivananh_duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'anh', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_phong`
--

CREATE TABLE `dat_phong` (
  `id` int(11) NOT NULL,
  `phong_id` int(11) NOT NULL,
  `NgayBatDau` date NOT NULL DEFAULT current_timestamp(),
  `NgayKetThuc` date NOT NULL DEFAULT current_timestamp(),
  `tongTien` decimal(11,0) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 0 COMMENT '0 la cho xác nhan 1 la da xac nhan 2 la da huy \r\n3 la da check in 4 la da check out 5 la chua check in 6 la chua check out 7 la da hoan thanh don dat phong ',
  `phuongthuc` varchar(255) NOT NULL,
  `nguoidung_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dat_phong`
--

INSERT INTO `dat_phong` (`id`, `phong_id`, `NgayBatDau`, `NgayKetThuc`, `tongTien`, `ghichu`, `trangthai`, `phuongthuc`, `nguoidung_id`) VALUES
(106, 28, '2023-12-16', '2023-12-24', 6800000, 'hhhh', 7, 'Thanh Toán Khi Trả Phòng', 30),
(107, 32, '2023-12-16', '2023-12-17', 670000, 'hhh', 0, 'Thanh Toán Khi Trả Phòng', 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_phong`
--

CREATE TABLE `loai_phong` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_phong`
--

INSERT INTO `loai_phong` (`id`, `name`, `mota`) VALUES
(13, 'Phòng Đôi', 'Phòng Đôi'),
(14, 'Phòng VIP', 'Phòng VIP'),
(15, 'Phòng Tình Nhân', 'Phòng Tình Nhân'),
(16, 'Phòng View Biển', 'Phòng View Biển'),
(17, 'Phòng Cổ Điển', 'Phòng Cổ Điển');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `cmnd` int(20) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `confirm_pass` varchar(255) NOT NULL,
  `vaitro` tinyint(11) NOT NULL DEFAULT 1 COMMENT '1 là nguoi dùng 2 là admin',
  `datetimeacc` datetime NOT NULL DEFAULT current_timestamp(),
  `code` mediumint(100) NOT NULL COMMENT 'code mã dc gửi về email để đổi mk'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `name`, `email`, `sdt`, `diachi`, `cmnd`, `pass`, `confirm_pass`, `vaitro`, `datetimeacc`, `code`) VALUES
(27, 'anh', 'buianh2592003@gmail.com', '111', '111', 111, '$2y$10$VTL40x/duqyea30AVbxGqOckTOs2tUI9fZBbhn0DCdU9jgJ3YvrJq', '', 1, '2023-12-06 17:10:08', 0),
(30, 'Bùi Văn Ánh ', 'buianh20003@gmail.com', '0327367912', 'hà nội', 123455667, '$2y$10$vcygs2PRWEQlOqdozh350O0cH/Z171VTNyJEQhIiyIBzKDeBIY96a', '', 1, '2023-12-07 17:36:31', 0),
(32, 'anhanh', 'anh@cc.cc', '123456', '123456', 123456, '$2y$10$QbO2k.B1/NMbBogmECUlZORsifNPlZAkrJzqQJ/GRvY1qcntkqg7O', '', 1, '2023-12-13 13:28:20', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `loaiphong_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gia` decimal(11,0) NOT NULL DEFAULT 10,
  `dichvu` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1 COMMENT '1 sẽ là mặc định có thể thuê khi có nguoi book và dc ad xác nhận sẽ thành 2 ko thể thuê mất trên giao diện và check out sẽ hiện lại phòng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id`, `name`, `loaiphong_id`, `image`, `gia`, `dichvu`, `mota`, `trangthai`) VALUES
(27, 'Phòng Superior', 13, ' /upload/1701665623-phongdoi2.jpg', 800000, 'Đầy đủ', 'Phòng Superior  Đây là loại phòng cao cấp hơn phòng Standard. Phòng SUP thường có diện tích lớn hơn, view đẹp hơn, và nhiều vật dụng trang thiết bị hơn. Đây là lựa chọn thích hợp nếu bạn muốn ở phòng có chất lượng tốt hơn nhưng lại không bỏ ra quá nhiều c', 0),
(28, 'Phòng Deluxe', 13, ' /upload/1701665664-phongdoi3.jpg', 850000, 'Đầy đủ', 'Phòng Deluxe  Đây là loại phòng cao cấp của khách sạn, thường nằm ở các vị trí đẹp, các tầng cao trong khách sạn, và sở hữu chất lượng vượt trội với diện tích phòng rộng. Các phòng này luôn có view, không chỉ thoáng đãng mà còn là những hướng nhìn đẹp. Đồ', 1),
(29, 'Phòng Suite', 13, ' /upload/1701665707-phongdoi4.jpg', 800000, 'Đầy đủ', 'Phòng Suite  Đây là loại phòng cao cấp nhất với diện tích từ 60 – 120m2. Phòng Suite thường được bố trí ở các vị trí đẹp nhất trong khách sạn, và được trang bị đầy đủ các tiện nghi cao cấp nhất. Đây là lựa chọn thích hợp nếu bạn muốn có một kỳ nghỉ sang t', 1),
(30, 'Phòng President', 13, ' /upload/1701665754-phongdoi5.jpg', 1000000, 'Đầy đủ', 'Phòng President  Đây là loại phòng cao cấp nhất trong khách sạn, thường được bố trí ở các vị trí đẹp nhất trong khách sạn, và được trang bị đầy đủ các tiện nghi cao cấp nhất. Đây là lựa chọn thích hợp nếu bạn muốn có một kỳ nghỉ sang trọng và đầy đủ tiện ', 0),
(31, 'Phòng honeymoon', 13, ' /upload/1701665788-phongdoi6.jpg', 600000, 'Đầy đủ', 'Phòng honeymoon  Đây là loại phòng được thiết kế đặc biệt cho các cặp đôi mới cưới. Phòng này thường được trang bị đầy đủ các tiện nghi cần thiết để tạo ra một không gian lãng mạn và đáng nhớ cho các cặp đôi 1', 0),
(32, 'Phòng Đôi Junior Suite', 13, ' /upload/1701689507-phongdoi7.jpg', 670000, 'Đầy đủ', 'Phòng Junior Suite  Đây là loại phòng cao cấp hơn phòng Standard và Superior. Phòng Junior Suite thường có diện tích lớn hơn, view đẹp hơn, và nhiều vật dụng trang thiết bị hơn. Đây là lựa chọn thích hợp nếu bạn muốn ở phòng có chất lượng tốt hơn nhưng lạ', 1),
(33, 'Phòng Đôi Táo', 13, ' /upload/1701689560-phongdoi9.jpg', 870000, 'Đầy đủ', 'Đây là loại phòng cao cấp hơn phòng Deluxe và Suite. Phòng Executive Suite thường có diện tích rộng rãi, view đẹp và được trang bị đầy đủ các tiện nghi cao cấp nhất 1.', 0),
(34, 'Phòng Đôi LIULIU', 13, ' /upload/1701689619-phongdoi10.jpg', 500000, 'Đầy đủ', 'Đây là loại phòng cao cấp nhất trong khách sạn, thường được bố trí ở các vị trí đẹp nhất trong khách sạn, và được trang bị đầy đủ các tiện nghi cao cấp nhất. Đây là lựa chọn thích hợp nếu bạn muốn có một kỳ nghỉ sang trọng và đầy đủ tiện nghi', 0),
(43, 'Phòng Vip 2', 14, ' /upload/1702444043-vip2.jpg', 1100000, 'Đầy Đủ', 'Phòng Vip 2', 0),
(44, 'Phòng Vip 3', 14, ' /upload/1702444070-vip3.webp', 1050000, 'Đầy đủ', 'Phòng Vip 3', 0),
(45, 'Phòng Vip 4', 14, ' /upload/1702444098-vip4.jpg', 1000000, 'Đấy đủ', 'Phòng Vip 4', 1),
(47, 'Phòng Tình nhân 1', 15, ' /upload/1702468936-phong3.jpg', 700000, 'Đầy đủ', 'Phòng Tình nhân 1', 0),
(48, 'view biển 1', 16, ' /upload/1702546354-viewbien2.jpg', 1000000, 'đầy đủ', 'view biển', 0),
(49, 'view biển 2', 16, ' /upload/1702546395-viewbien3.jpg', 900000, 'đầy đủ', 'view biển 2', 0),
(50, 'view biển 3', 16, ' /upload/1702546419-viewbien4.jpg', 900000, 'đầy đủ', 'view biển 3', 0),
(51, 'cổ điển 1', 17, ' /upload/1702546471-phong4.jpg', 800000, 'đầy đủ', 'cổ điển 1', 0),
(52, 'cổ điẻn 3', 17, ' /upload/1702546519-phong8.jpg', 700000, 'đầy đủ', 'cổ điển 3', 0),
(53, 'Tìnnh nhân 1', 15, ' /upload/1702546574-29.jpg', 600000, 'đầy đủ', 'tình nhân 1', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_lienhe`
--

CREATE TABLE `user_lienhe` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `seen` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_lienhe`
--

INSERT INTO `user_lienhe` (`id`, `name`, `email`, `subject`, `message`, `date`, `seen`) VALUES
(17, 'Bùi Ánh test liên hệ', 'buianh2592003@gmail.com', 'DEV', 'tôi yêu em', '2023-12-04', 1),
(18, 'anh', 'anh@cc.cc', 'anh dev', 'yêu ks', '2023-12-15', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dat_phong`
--
ALTER TABLE `dat_phong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_dp_p` (`phong_id`),
  ADD KEY `lk_dp_ng` (`nguoidung_id`);

--
-- Chỉ mục cho bảng `loai_phong`
--
ALTER TABLE `loai_phong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_phong_loai_phong` (`loaiphong_id`);

--
-- Chỉ mục cho bảng `user_lienhe`
--
ALTER TABLE `user_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `dat_phong`
--
ALTER TABLE `dat_phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `loai_phong`
--
ALTER TABLE `loai_phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `user_lienhe`
--
ALTER TABLE `user_lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dat_phong`
--
ALTER TABLE `dat_phong`
  ADD CONSTRAINT `lk_dp_ng` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoi_dung` (`id`),
  ADD CONSTRAINT `lk_dp_p` FOREIGN KEY (`phong_id`) REFERENCES `phong` (`id`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `lk_phong_loai_phong` FOREIGN KEY (`loaiphong_id`) REFERENCES `loai_phong` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
