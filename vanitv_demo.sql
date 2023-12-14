-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 14, 2023 lúc 01:25 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vanitv_demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banking`
--

CREATE TABLE `banking` (
  `id` int(11) NOT NULL,
  `bank` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `banking`
--

INSERT INTO `banking` (`id`, `bank`, `logo`, `number`, `name`) VALUES
(9, 'MOMO', 'https://upload.wikimedia.org/wikipedia/vi/f/fe/MoMo_Logo.png', '0979620125', 'Trần Minh Anh'),
(10, 'MB', 'https://play-lh.googleusercontent.com/4P2jSj68IjhdAQ6dLFCq2Prm8oMCSVMgYgZou4RJHZBc2IylDUuRBugsLxIJYmmDstOO', '0979620125', 'TRAN MINH ANH'),
(13, 'CAKE', 'https://img.cake.vn/2021/09/e166aa95-z2434192104284_4a91929db3363e3c43118490fcbe922f.jpg', '0979620125', 'TRAN MINH ANH'),
(14, 'Shopee Pay', 'https://cdn.haitrieu.com/wp-content/uploads/2022/10/Logo-ShopeePay-V.png', '0979620125', 'TRAN MINH ANH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `info`
--

INSERT INTO `info` (`id`, `title`, `info`) VALUES
(11, 'Lời chào', '<p>Chào mọi người!</p><p>Tôi là một cá nhân đam mê khám phá, học hỏi và chia sẻ kiến thức. Tên tôi là Minh Anh , và tôi rất vui được chào đón bạn đến với trang web của mình.</p>'),
(12, 'Quan niệm', '<p>Suốt cuộc đời của mình, tôi luôn tin rằng học hỏi là một hành trình không bao giờ có điểm dừng. Với niềm đam mê mãnh liệt về khoa học, nghệ thuật và công nghệ, tôi luôn cố gắng khám phá những khía cạnh mới của thế giới xung quanh chúng ta. Từ việc đọc sách, nghiên cứu, thảo luận và thậm chí là thất bại, tôi luôn trân trọng mọi cơ hội để nâng cao kiến thức của mình.</p>'),
(13, 'Giới thiệu', '<p>Trang web này là nơi tôi chia sẻ những suy nghĩ, kiến thức và trải nghiệm cá nhân của mình với hy vọng rằng nó có thể cung cấp ích lợi và cảm hứng cho bạn. Tôi sẽ viết về những chủ đề mà tôi đang nghiên cứu và quan tâm, từ khoa học và công nghệ đến nghệ thuật và cuộc sống hàng ngày. Tôi tin rằng mỗi ngày đều là một cơ hội để học hỏi điều mới mẻ và phát triển bản thân.</p>'),
(14, 'Sở thích, mong muốn', '<p>Ngoài viết blog, chơi game, đọc sách, tôi cũng thích tương tác với cộng đồng. Đừng ngần ngại để lại bình luận hoặc liên hệ trực tiếp với tôi nếu bạn có bất kỳ câu hỏi, ý kiến ​​hoặc đề xuất nào. Tôi rất trân trọng mọi góp ý và sẵn sàng học hỏi từ mọi người.</p>'),
(15, 'Cảm ơn mọi người', '<p>Hãy cùng nhau chia sẻ hành trình khám phá và học hỏi, vì cuộc sống thật tuyệt vời khi ta luôn mở lòng đón nhận tri thức và cảm xúc từ thế giới xung quanh.</p><p>Cảm ơn bạn đã ghé thăm trang web của tôi!</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `link` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image-news` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `tieude` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ngaydang` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `luotxem` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `author` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `favicon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `fanpage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `groupfacebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `messenger` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `title`, `image`, `description`, `keywords`, `author`, `favicon`, `email`, `number`, `fanpage`, `groupfacebook`, `messenger`, `comment`) VALUES
(1, 'minhanh24nb', 'https://i.pinimg.com/736x/60/37/99/603799f40dc5a5ba73ff3e6dfa6fb5a7.jpg', 'Thông tin cá nhân của Trần Minh Anh', 'Thông tin cá nhân của Minh Anh', 'minhanh204nb', 'https://i.pinimg.com/736x/60/37/99/603799f40dc5a5ba73ff3e6dfa6fb5a7.jpg', 'minhanh24hihi@gmail.com', '0979620125', 'https://www.facebook.com/minhanh204nb/', 'https://www.facebook.com/minhanh204nb/', 'https://www.facebook.com/minhanh204nb/', 'Ủng hộ Minh Anh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `social` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `followers` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `social`
--

INSERT INTO `social` (`id`, `social`, `link`, `logo`, `followers`) VALUES
(3, 'FACEBOOK', 'https://www.facebook.com/minhanh204nb', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1200px-Facebook_Logo_%282019%29.png', '374000'),
(4, 'Instagram', 'https://www.instagram.com/minhanh204k/', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1024px-Instagram_logo_2022.svg.png', '32600'),
(8, 'TikTok', 'https://www.tiktok.com/@tranminhanh24hihi', 'https://seeklogo.com/images/T/tiktok-share-icon-black-logo-29FFD062A0-seeklogo.com.png', '565224');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `username` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `idfb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `telegram` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `avatar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `idfb`, `telegram`, `avatar`) VALUES
(1, 'Trần Minh Anh', 'minhanh204nb', 'minhanh204nb', '/', 'https://i.pinimg.com/736x/60/37/99/603799f40dc5a5ba73ff3e6dfa6fb5a7.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `token`) VALUES
(1, 'admin', '123', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `domain` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `provide` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `website`
--

INSERT INTO `website` (`id`, `logo`, `domain`, `provide`, `link`) VALUES
(3, 'https://logo.com/image-cdn/images/kts928pd/production/28563b4f836c667b30238865f796aeb03ae702db-358x357.png?w=1080&q=72', 'Blogs', 'Thiên', 'http://nguyenvanthien24.000webhostapp.com/?fbclid=IwAR2QlvpfrMt4BPoWH7adkAp3Y64x5W3JfZhpR4LuYb8mDjfzyyEWqkT10w4'),
(4, 'https://leevu.000webhostapp.com/img/avatarvu.jpg', 'Vu Lee', 'Lee Vu', 'https://leevu.000webhostapp.com/?fbclid=IwAR3YGSHYfPK9GAhoL_HjfKFVPY6gIDolNHPA-TDBLOCZUwAJkfIMGcZo9E0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banking`
--
ALTER TABLE `banking`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`link`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banking`
--
ALTER TABLE `banking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
