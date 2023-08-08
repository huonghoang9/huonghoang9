-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 05:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an_11`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `id_hh` int(11) NOT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `noi_dung` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `id_hh`, `fullname`, `noi_dung`) VALUES
(8, 3, 'Pham Duc Hung', 'như cccccc');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `color`, `gia`) VALUES
(1, 'black', 20000),
(2, 'red', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `ten_hh` varchar(30) NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `gia` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `id_hoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id`, `soluong`, `ten_hh`, `color`, `size`, `gia`, `image`, `id_hoadon`) VALUES
(22, 2, 'quần ', '1', '2', 4000000, 'z3908477762176_54f01ed55c3ea49e79145e0b20d0b6d9.jp', 9),
(23, 2, 'Áo thun nam 100% Cotton Coolma', '1', '2', 190000, 'aonam1.jpg', 10),
(24, 1, 'quần ', 'black', 's', 4000000, 'z3908477762176_54f01ed55c3ea49e79145e0b20d0b6d9.jp', 10);

-- --------------------------------------------------------

--
-- Table structure for table `giamgia`
--

CREATE TABLE `giamgia` (
  `id` int(11) NOT NULL,
  `giam_gia` int(11) DEFAULT NULL,
  `ngay_dang` date DEFAULT NULL,
  `ngay_hethan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giamgia`
--

INSERT INTO `giamgia` (`id`, `giam_gia`, `ngay_dang`, `ngay_hethan`) VALUES
(1, 0, NULL, NULL),
(2, 20, '2022-11-20', '2022-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL,
  `ma_thanhtoan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `id_user`, `tongtien`, `ma_thanhtoan`) VALUES
(9, 1, 8080000, '20221129144657'),
(10, 1, 4480000, '20221129144833');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `id` int(11) NOT NULL,
  `ten_loai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`id`, `ten_loai`) VALUES
(4, 'Quần dài'),
(5, 'Áo phông'),
(6, 'Áo Hoodie');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `thanh_vien` varchar(100) NOT NULL COMMENT 'thành viên thanh toán',
  `money` float NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar(255) DEFAULT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` varchar(255) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` varchar(255) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar(255) NOT NULL COMMENT 'mã ngân hàng',
  `time` datetime NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `ten_hh` varchar(255) DEFAULT NULL,
  `id_loai` int(11) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `id_giamgia` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `mota` varchar(255) DEFAULT NULL,
  `soluotmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `ten_hh`, `id_loai`, `gia`, `id_giamgia`, `image`, `so_luong`, `mota`, `soluotmua`) VALUES
(4, 'Áo thun nam 100% Cotton Coolmate Basics', 5, 190000, 2, 'aonam1.jpg', 10, 'Chất liệu áo thun nam 100% Cotton Coolmate Basics\r\nLuôn tự hào sản xuất ra những chiếc áo thun nam với chất liệu vải làm từ 100% cotton - sợi bông tự nhiên, một loại vải được đa số khách hàng ưa chuộng và sử dụng tại Việt Nam. Chúng tôi - Coolmate luôn hư', 70),
(10, 'Quần thể thao nam Essential Jogger sợi Sorona - màu đen', 4, 200000, 1, 'jogger-sorona19-up.webp', 0, 'ĐÂY SẼ LÀ CHIẾC QUẦN JOGGER BẠN MUỐN MẶC MỖI NGÀY\r\nQuần dài luôn là một sản phẩm không thể thiếu trong tủ đồ của bạn dù trong bất kỳ trường hợp nào. Quần thể thao nam Essential Jogger được làm từ 47% sợi Sorona sẽ mang đến sự thoải mái và dễ chịu trong mọ', 100),
(11, 'Quần nam Daily Pants - sợi Sorona, nhuộm Cleandye', 4, 220000, 2, 'soronada12.webp', 20, '	\r\nVới mong muốn đem đến cho khách hàng những sản phẩm tốt nhất, không chỉ từ cảm nhận khi mặc mà Coolmate còn mong muốn bạn được sử dụng và trải nghiệm sản phẩm “xanh\" trong xu hướng thời trang phát triển bền vững. Chúng tôi hiểu, khởi đầu của 01 dòng sả', 20),
(12, 'KAPPA ÁO THUN CÓ CỔ TAY NGẮN MEN 351C34W', 5, 150000, 1, 'untitled_session2881_1_1.webp', 20, '- Áo thun có cổ tay ngắn nam Kappa.\r\n- Chất liệu: Cotton, polyester, spandex jersey.\r\n- Áo nam mát, thoáng khí và có khả năng thấm hút mồ hôi.', 15),
(13, 'KAPPA ÁO THUN CÓ CỔ TAY NGẮN MEN 331D6GW', 5, 200000, 1, 'untitled_session2303_1.webp', 10, 'Mô tả sản phẩm\r\n- Áo thun có cổ tay ngắn nam Kappa.\r\n- Chất liệu: Cotton, polyester, spandex jersey.\r\n- Áo nam thoáng khí, thấm hút mồ hôi tốt, giữ cho người mặc luôn mát mẻ.', 75),
(14, 'KAPPA ÁO THUN CÓ CỔ TAY NGẮN MEN 331D6IW', 5, 150000, 2, 'untitled_session1651_1.webp', 20, 'Mô tả sản phẩm\r\n- Áo thun có cổ tay ngắn nam Kappa.\r\n- Chất liệu: Cotton pique.\r\n- Áo nam thoáng khí, mát mẻ, có thể thấm hút mồ hôi tốt.', 120),
(15, 'Áo hoodie nam form rộng, áo hoodie nữ form rộng màu đen mặc nhà đi chơi thời trang hàn quốc', 6, 250000, 2, 'screenshot_1634978943.png', 25, 'Danh Mục\r\nShopeeMen ClothesHoodies & SweatshirtsOthers\r\nXuất xứ\r\nTrung Quốc\r\nChất liệu\r\nNỉ\r\nMẫu\r\nTrơn\r\nPhong cách\r\nCơ bản, Hàn Quốc, Đường phố\r\nKho hàng\r\n284\r\nGửi từ\r\nQuận Hoàng Mai, Hà Nội', 0),
(16, 'Áo hoodie nam một màu cá tính Hàn Quốc ', 6, 190000, 1, '3568f174d10cecfec5e0fa60990a78f2.jpg', 69, 'Áo Hoodie nam là sản phẩm top 1 ngành Áo hoodie nam trong năm nay đã chứng tỏ độ HOT của sản phẩm này.\r\n\r\nSản phẩm có Video quay trực tiếp sản phẩm để khách hàng tham khảo.\r\n\r\nThông tin sản phẩm Áo hoodie thời trang unisex chất dày ấm áp phong cách năng đ', 0),
(17, 'ÁO HOODIE NAM FORM RỘNG - TP689N', 6, 280000, 2, 'P9rC7C_simg_b5529c_250x250_maxb.jpg', 65, 'GIỚI THIỆU SẢN PHẨM : THIẾT KẾ THỜI TRANG TRẺ HOT NHẤT NĂM NAY PHONG CÁCH TUỔI TEEN THEO SU HƯỚNG MỚI NHẤTSIZE : M - L – XLSIZE M từ 48KG đến 54 KGSIZE L từ 55KG đếm 63KGSIZE XL từ 64kg đến 70KG➤ Đảm Bảo Không Ra Màu , Không Phai Màu Suốt Trình Sữ D...', 0),
(19, 'ÁO HOODIE NAM FORM RỘNG ĐEN JUST', 6, 280000, 2, 'z2265470807463_3c1e5233be94dc285a6e2786682346ed (1).jpg', 0, 'Áo Hoodie Nam Form Rộng  Đen JUST - Siêu Phẩm Hàn Quốc.\r\n———————————————————\r\n\r\n- Chất thun nỉ cao mặc ấm, thấm hút mồ hôi cực tốt, vài dầy mềm mịn mặc cực thích.\r\n\r\n- Hàng chuẩn form cực đẹp.\r\n\r\n- Hỗ trợ ship cod tận nhà.\r\n\r\n- Lấy buôn sỉ và bán shop add', 0);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size`, `gia`) VALUES
(1, 'S', 20000),
(2, 'M', 20000),
(3, 'L', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tonghop_binhluan`
--

CREATE TABLE `tonghop_binhluan` (
  `id` int(11) NOT NULL,
  `id_hh` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tonghop_binhluan`
--

INSERT INTO `tonghop_binhluan` (`id`, `id_hh`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `permission` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `address`, `phone`, `fullname`, `image`, `permission`) VALUES
(1, 'admin', 'abc123', 'pduchung2003@gmail.com', 'Ha Noi', '0988899559', 'Pham Duc Hung', NULL, 2),
(7, 'tondzpro', '12222333', 'tondzpro2k3@gmail.com', 'phu tho', '0338909636', 'nguyễn mạnh tôn', 'nu1.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FL_user` (`fullname`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giamgia`
--
ALTER TABLE `giamgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_use` (`id_user`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FL_loai` (`id_loai`),
  ADD KEY `FL_giamgia` (`id_giamgia`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tonghop_binhluan`
--
ALTER TABLE `tonghop_binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FL_hh` (`id_hh`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `giamgia`
--
ALTER TABLE `giamgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tonghop_binhluan`
--
ALTER TABLE `tonghop_binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FL_giamgia` FOREIGN KEY (`id_giamgia`) REFERENCES `giamgia` (`id`),
  ADD CONSTRAINT `FL_loai` FOREIGN KEY (`id_loai`) REFERENCES `loai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
