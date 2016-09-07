-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2015 at 09:11 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scepter`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE IF NOT EXISTS `binh_luan` (
  `id` int(10) unsigned NOT NULL,
  `id_nguoi_dung` int(10) unsigned NOT NULL,
  `id_san_pham` int(10) unsigned NOT NULL,
  `ten_nguoi_dung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `id_nguoi_dung`, `id_san_pham`, `ten_nguoi_dung`, `noi_dung`, `created_at`, `updated_at`) VALUES
(1, 4, 24, 'Lê Đặng Hoài Nam', '1212', '2015-12-28 09:58:06', '2015-12-28 09:58:06'),
(2, 4, 24, 'Lê Đặng Hoài Nam', '12121', '2015-12-28 09:59:16', '2015-12-28 09:59:16'),
(3, 4, 24, 'Lê Đặng Hoài Nam', '2323', '2015-12-28 10:01:04', '2015-12-28 10:01:04'),
(4, 4, 24, 'Lê Đặng Hoài Nam', '1212', '2015-12-28 10:03:10', '2015-12-28 10:03:10'),
(5, 4, 24, 'Lê Đặng Hoài Nam', '1212', '2015-12-28 10:03:55', '2015-12-28 10:03:55'),
(6, 4, 24, 'Lê Đặng Hoài Nam', '1212', '2015-12-28 10:03:56', '2015-12-28 10:03:56'),
(7, 4, 24, 'Lê Đặng Hoài Nam', '1212', '2015-12-28 10:03:58', '2015-12-28 10:03:58'),
(8, 4, 24, 'Lê Đặng Hoài Nam', '1212', '2015-12-28 10:04:00', '2015-12-28 10:04:00'),
(9, 4, 24, 'Lê Đặng Hoài Nam', '1212', '2015-12-28 10:04:02', '2015-12-28 10:04:02'),
(10, 4, 24, 'Lê Đặng Hoài Nam', 'test', '2015-12-28 10:11:55', '2015-12-28 10:11:55'),
(11, 1, 24, 'Lê Đặng Hoài Nam', 'test1', '2015-12-28 10:27:32', '2015-12-28 10:27:32'),
(12, 1, 24, 'Lê Đặng Hoài Nam', 'test2', '2015-12-28 10:27:36', '2015-12-28 10:27:36'),
(13, 4, 24, 'Lê Đặng Hoài Nam', 'test3', '2015-12-30 11:42:41', '2015-12-30 11:42:41'),
(14, 1, 23, 'Lê Đặng Hoài Nam', 'test', '2015-12-30 12:13:26', '2015-12-30 12:13:26'),
(15, 1, 23, 'Lê Đặng Hoài Nam', 'test2', '2015-12-30 12:13:36', '2015-12-30 12:13:36'),
(16, 1, 23, 'Lê Đặng Hoài Nam', 'test3', '2015-12-30 12:14:04', '2015-12-30 12:14:04'),
(17, 1, 23, 'Lê Đặng Hoài Nam', 'test4', '2015-12-30 12:14:24', '2015-12-30 12:14:24'),
(18, 1, 23, 'Lê Đặng Hoài Nam', 'test5', '2015-12-30 12:14:52', '2015-12-30 12:14:52'),
(19, 1, 23, 'Lê Đặng Hoài Nam', 'test6', '2015-12-30 12:16:23', '2015-12-30 12:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_hang`
--

CREATE TABLE IF NOT EXISTS `chi_tiet_don_hang` (
  `id` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia_ban` decimal(15,4) NOT NULL,
  `id_don_dat_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`id`, `so_luong`, `gia_ban`, `id_don_dat_hang`, `id_san_pham`, `created_at`, `updated_at`) VALUES
(1, 1, '2199000.0000', 1, 19, '2015-12-28 19:04:01', '2015-12-28 19:04:01'),
(2, 1, '2209000.0000', 1, 17, '2015-12-28 19:04:01', '2015-12-28 19:04:01'),
(3, 1, '1289000.0000', 2, 24, '2015-12-28 19:07:15', '2015-12-28 19:07:15'),
(4, 1, '3489000.0000', 2, 1, '2015-12-28 19:07:15', '2015-12-28 19:07:15'),
(5, 2, '1289000.0000', 3, 24, '2015-12-28 19:11:15', '2015-12-28 19:11:15'),
(6, 1, '800000.0000', 3, 2, '2015-12-28 19:11:15', '2015-12-28 19:11:15'),
(7, 1, '1289000.0000', 4, 24, '2015-12-29 05:14:41', '2015-12-29 05:14:41'),
(8, 1, '1289000.0000', 5, 24, '2015-12-29 05:15:41', '2015-12-29 05:15:41'),
(9, 2, '1989000.0000', 7, 23, '2015-12-29 05:18:26', '2015-12-29 05:18:26');

-- --------------------------------------------------------

--
-- Table structure for table `don_dat_hang`
--

CREATE TABLE IF NOT EXISTS `don_dat_hang` (
  `id` int(11) NOT NULL,
  `ngay_lap` datetime NOT NULL,
  `tong_thanh_tien` decimal(15,4) NOT NULL,
  `dia_diem_giao` text COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nguoi_mua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_tai_khoan` int(10) unsigned NOT NULL,
  `id_tinh_trang` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `don_dat_hang`
--

INSERT INTO `don_dat_hang` (`id`, `ngay_lap`, `tong_thanh_tien`, `dia_diem_giao`, `dien_thoai`, `email`, `ten_nguoi_mua`, `id_tai_khoan`, `id_tinh_trang`, `created_at`, `updated_at`) VALUES
(1, '2015-12-29 02:04:01', '4408000.0000', '12121', '0123 734 5564', 'namhoai95@gmail.com', 'Lê Đặng Hoài Nam', 4, 1, '2015-12-28 19:04:01', '2015-12-28 19:04:01'),
(2, '2015-12-29 02:07:14', '4778000.0000', '212', '0123 734 5564', 'namhoai95@gmail.com', 'Lê Đặng Hoài Nam', 4, 1, '2015-12-28 19:07:14', '2015-12-28 19:07:14'),
(3, '2015-12-29 02:11:15', '3378000.0000', 'rere', '0123 734 5564', 'namhoai95@gmail.com', 'Lê Đặng Hoài Nam', 4, 1, '2015-12-28 19:11:15', '2015-12-28 19:11:15'),
(4, '2015-12-29 12:14:41', '1289000.0000', 'asasa', '0123 734 5564', 'namhoai95@gmail.com', 'Lê Đặng Hoài Nam', 3, 1, '2015-12-29 05:14:41', '2015-12-29 05:14:41'),
(5, '2015-12-29 12:15:41', '1289000.0000', 'asasa', '0123 734 5564', 'namhoai95@gmail.com', 'Lê Đặng Hoài Nam', 3, 1, '2015-12-29 05:15:41', '2015-12-29 05:15:41'),
(6, '2015-12-29 12:17:19', '1289000.0000', 'asasa', '0123 734 5564', 'namhoai95@gmail.com', 'Lê Đặng Hoài Nam', 3, 1, '2015-12-29 05:17:19', '2015-12-29 05:17:19'),
(7, '2015-12-29 12:18:25', '3978000.0000', 'dsd', '0123 734 5564', 'namhoai95@gmail.com', 'Lê Đặng Hoài Nam', 3, 1, '2015-12-29 05:18:25', '2015-12-29 05:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `loai_san_pham`
--

CREATE TABLE IF NOT EXISTS `loai_san_pham` (
  `id` int(10) unsigned NOT NULL,
  `ten_loai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `an_hien` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`id`, `ten_loai`, `ten_alias`, `thu_tu`, `an_hien`, `created_at`, `updated_at`) VALUES
(1, 'Chuột', 'chuot', 1, 1, '0000-00-00 00:00:00', '2015-12-29 05:24:55'),
(2, 'Bàn phím', 'ban-phim', 2, 1, '0000-00-00 00:00:00', '2015-12-29 05:25:43'),
(3, 'Tai nghe', 'tai-nghe', 3, 1, '0000-00-00 00:00:00', '2015-12-29 05:25:49'),
(4, 'Mousepad', 'mousepad', 4, 1, '0000-00-00 00:00:00', '2015-12-29 05:25:16'),
(5, 'Loa', 'loa', 5, 1, '0000-00-00 00:00:00', '2015-12-27 10:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_29_172943_create_thuong_hieu_table', 1),
('2015_11_29_173226_create_loai_san_pham_table', 1),
('2015_11_29_173305_create_san_pham_table', 1),
('2015_11_19_163026_create_chungloai_table', 2),
('2015_12_28_145440_create_binh_luan_table', 3),
('2015_12_28_152514_create_binh_luan_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE IF NOT EXISTS `san_pham` (
  `id` int(10) unsigned NOT NULL,
  `ten_san_pham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` decimal(15,4) NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `url_hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_nhap` datetime NOT NULL,
  `ton_kho` int(11) NOT NULL,
  `so_lan_mua` int(11) NOT NULL,
  `so_lan_xem` int(11) NOT NULL,
  `an_hien` int(11) NOT NULL,
  `id_loai` int(10) unsigned NOT NULL,
  `id_thuong_hieu` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten_san_pham`, `ten_alias`, `gia`, `mo_ta`, `url_hinh`, `ngay_nhap`, `ton_kho`, `so_lan_mua`, `so_lan_xem`, `an_hien`, `id_loai`, `id_thuong_hieu`, `created_at`, `updated_at`) VALUES
(1, 'Chuột Razer Mamba Chroma 2016', 'chuot-razer-mamba-chroma-2016', '3489000.0000', 'Sản phẩm chuột kh&ocirc;ng d&acirc;y mới nhất của năm 2015 sử dụng kết nối wireless hỗ trợ cho m&agrave;n h&igrave;nh 4k hiện nay . sản phẩm c&oacute; thể d&ugrave;ng kh&ocirc;ng d&acirc;y v&agrave; c&oacute; d&acirc;y , đ&egrave;n Led l&ecirc;n đến 16,8 triệu m&agrave;u với nhiều hiệu ứng chạy đ&egrave;n . Khi x&agrave;i kh&ocirc;ng d&acirc;y , chuột c&oacute; thể d&ugrave;ng chơi game thời gian l&ecirc;n đến 20 giờ , hiệu ứng đ&egrave;n led th&ocirc;ng b&aacute;o khi đang sạc v&agrave; khi đầy Pin', 'razer-mamba-gallery-03.jpg', '2015-11-30 00:00:00', 19, 1, 0, 1, 1, 1, '0000-00-00 00:00:00', '2015-12-28 19:07:15'),
(2, 'Bàn phím Razer DeathStalker Ultimate ', 'ban-phim-razer-deathstalker-ultimate', '800000.0000', 'Với mục đích tạo ra một chiếc bàn phím thân thiện hơn với game thủ, cũng như tạo cho họ khả năng ít có bàn phím nào có được, Razer đã tạo ra Deathstalker Ultimate , chiếc bàn phím sở hữu touchpad kiêm màn hình cảm ứng, cùng hệ thống 10 phím lập trình riêng cho từng ứng dụng, với lời giới thiệu “mô phỏng hệ thống giao diện Switchblade UI”. Bên cạnh đó, phiên bản bình dân hơn của Deathstalker lại sở hữu cụm phím numpad thay cho hệ thống màn hình rườm rà và đắt đỏ kia, trong khi cảm giác phím bấm không hề có khác biệt.', 'razer deathstalker ultimate.jpg', '2015-11-30 00:00:00', 4, 1, 0, 1, 2, 1, '0000-00-00 00:00:00', '2015-12-28 19:11:15'),
(3, 'Tai nghe Razer Blackshark', 'tai-nghe-razer-blackshark', '628900.0000', 'Razer Blackshark Với rất nhiều các ưu điểm như thiết kế độc đáo, âm thanh sống động, ngăn cản tiếng ồn và tạp âm khi sử dụng. Với môi trường ồn ào như hiện nay thì BlackShark đúng là sự lựa chọn đúng đắn. Phiên bản Razer Blackshark được lấy cảm hứng từ tai nghe quân sự, được thiết kế để người chơi sử dụng thoải mái hơn, bên cạnh đó Razer BlackShark còn thêm chiếc mic rời cùng bộ headset.\r\n\r\nVới thiết kế circumaural và giả da của tai nghe, ngăn chặn tất cả các tiếng ồn không mong muốn từ môi trường xung quanh đem lại âm thanh tuyệt vời.', '655_Tai nghe Razer Blackshark-3.jpg', '2015-11-30 00:00:00', 5, 0, 0, 1, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Bàn phím Ozone Strike Pro(Blue Switch)', 'ban-phim-ozone-strike-pro(blue-switch)', '1269000.0000', '', 'thumb_3122_1.jpg', '2015-11-30 00:00:00', 10, 0, 0, 1, 2, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Tai nghe Ozone Onda Pro White', 'tai-nghe-ozone-onda-pro-white', '500000.0000', '', 'thumb_2373_Tai nghe Ozone Onda Pro.jpg', '2015-11-30 00:00:00', 5, 0, 0, 1, 3, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Bàn phím Logitech G19s Gaming', 'ban-phim-logitech-g19s-gaming', '1350000.0000', '', 'thumb_2456_1.jpg', '2015-11-30 00:00:00', 7, 0, 0, 1, 2, 5, '0000-00-00 00:00:00', '2015-12-15 03:48:08'),
(7, 'Bàn phím cơ Gamdias Blue SW', 'ban-phim-co-gamdias-blue-sw', '1320000.0000', 'B&agrave;n ph&iacute;m cơ Gamdias Hermes GKB2000&nbsp;l&agrave; sản phẩm ph&iacute;m cơ đầu ti&ecirc;n của&nbsp;Gamdias&nbsp;ở thị trường Việt Nam. Với thiết kế ấn tượng, hầm hố đi k&egrave;m với d&agrave;n đ&egrave;n led backlit đẹp mắt Gamdias GKB2000 sẽ l&agrave;m h&agrave;i l&ograve;ng nhũng game thủ kh&oacute; t&iacute;nh nhất. Gamdias sử dụng switch Cherry MX Blue cho tuổi thọ l&ecirc;n đến 50 triệu lần nhấn v&agrave; cảm gi&aacute;c g&otilde; tốt nhất, cho game thủ những trải nghiệm ho&agrave;n hảo cả gaming v&agrave; typing. Tr&ecirc;n b&agrave;n ph&iacute;m được t&iacute;ch hợp 13 n&uacute;t Macro cho ph&eacute;p game thủ sử dụng để lập tr&igrave;nh c&aacute;c combo gi&uacute;p chơi game dễ d&agrave;ng hơn. B&ecirc;n trong b&agrave;n ph&iacute;m được t&iacute;ch hợp CPU ARM Cortex 32bits v&agrave; bộ nhớ 512KB để c&oacute; thể xử l&yacute; v&agrave; lưu trữ c&aacute;c profile của người d&ugrave;ng. Ph&iacute;a g&oacute;c phải b&agrave;n ph&iacute;m l&agrave; USB hub, 2 ng&otilde; cắm cho loa v&agrave; micro tiện cho game thủ cắm gear ri&ecirc;ng kh&ocirc;ng cần k&eacute;o d&acirc;y đầy b&agrave;n.', 'thumb_4467_gamdias-herry-mx-blue.jpg', '2015-12-01 00:00:00', 3, 0, 0, 1, 2, 4, '0000-00-00 00:00:00', '2015-12-11 08:36:07'),
(8, 'Sybaris SYB-ANECBK-11', 'sybaris-syb-anecbk-11', '699000.0000', 'The SYBARIS wired and wireless gaming headset offers both Bluetooth headset functionality in wireless mode as well the ability to connect an external microphone in wired mode. The SYBARIS is the world&rsquo;s first Bluetooth headset with a swappable external microphone. With Bluetooth 4.0 compatibility for greater battery life, the SYBARIS also supports AptX lossless streaming for maintaining the highest fidelity in audio quality and NFC for the ultimate convenience in pairing.', 'thumb_2135_Tai nghe Tt eSports Sybaris SYB-ANECBK-11.jpg', '2015-12-01 00:00:00', 10, 0, 0, 1, 3, 7, '0000-00-00 00:00:00', '2015-12-15 03:49:03'),
(9, 'Loa Sony SHAKE-7', 'loa-sony-shake-7', '19990000.0000', 'Hệ thống âm thanh Hifi tích hợp đầu đọc CD với công sức cực lớn 2850W (RMS): Hệ thống loa 4 chiều mạnh mẽ. "Một chạm" để lắng nghe thông qua NFC. Loa với hệ thống đèn LED nhiều màu. Hiệu ứng DJ cực kỳ sống động. 2 cổng USB với chức năng nghe/sao chép nhạc.', 'LoaSonySHAKE-7.jpg', '2015-12-07 00:00:00', 30, 0, 0, 1, 5, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Tai nghe Razer Tiamat 7.1', 'tai-nghe-razer-tiamat-7.1', '4989000.0000', '<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;"><a style="outline: 0px; text-decoration: none; color: #666666; border: 0px none; vertical-align: baseline;" href="http://apshop.vn/undefined/"><strong>Tai nghe Razer Tiamat 7.1</strong></a>&nbsp;l&agrave; tai nghe mạnh mẽ với hệ thống &acirc;m thanh v&ograve;m 7.1 ti&ecirc;n tiến cho ph&eacute;p người d&ugrave;ng điều chỉnh &acirc;m<strong>bass</strong>&nbsp;theo &yacute; muốn. Thiết bị n&agrave;y đem lại cho bạn sự tr&atilde;i nghiệm với 10 tr&igrave;nh điều khiển t&iacute;ch hợp v&agrave; &nbsp;khả năng chuyển đổi &acirc;m thanh linh hoạt.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">Với c&aacute;c loa con c&oacute; k&iacute;ch thước từ 20mm cho loa side surround v&agrave; rear&nbsp;<strong>surround</strong>, 30mm cho loa Front Left v&agrave; Center ri&ecirc;ng loa Sub c&oacute; k&iacute;ch thước 40mm.&nbsp;<br />Việc trang bị đầy đủ loa cho c&aacute;c vị tr&iacute; tương ứng như tr&ecirc;n c&aacute;c hệ thống loa surround th&ocirc;ng dụng,&nbsp;<a style="outline: 0px; text-decoration: none; color: #666666; border: 0px none; vertical-align: baseline;" href="http://apshop.vn/undefined/"><strong>Tiamat 7.1</strong></a>&nbsp;hứa hẹn sẽ mang lại hiệu ứng tốt cho game v&agrave; giải tr&iacute; với phim HD.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">Ngo&agrave;i tai nghe với chức năng ph&aacute;t &acirc;m,&nbsp;<a style="outline: 0px; text-decoration: none; color: #666666; border: 0px none; vertical-align: baseline;" href="http://apshop.vn/undefined/"><strong>Tiamat 7.1</strong></a>&nbsp;c&ograve;n đi k&egrave;m một bộ điều khiển &acirc;m lượng. Với bộ điều khiển n&agrave;y,&nbsp;<a style="outline: 0px; text-decoration: none; color: #666666; border: 0px none; vertical-align: baseline;" href="http://apshop.vn/undefined/"><strong>Tiamat 7.1</strong></a>&nbsp;cho ph&eacute;p người d&ugrave;ng điều chỉnh &acirc;m lượng cho cả từng k&ecirc;nh ri&ecirc;ng biệng theo &yacute; muốn.</span></p>\r\n<span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Tr&igrave;nh điều khiển: 2 x Nam ch&acirc;m Neodymium 40mm với m&agrave;ng&nbsp;</span><strong style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Titanium</strong><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">&nbsp;Coated</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Dải tần: 20Hz - 20.000 Hz</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Trở kh&aacute;ng: 16&Omega;</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Độ nhạy tại 1kHz: 116 dB &plusmn; 3dB</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><strong style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Ph&iacute;a trước:</strong><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Tr&igrave;nh điều khiển: 2 x 30mm Nam ch&acirc;m Neodymium</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Đ&aacute;p ứng tần số: 20Hz - 20.000 Hz</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Trở kh&aacute;ng: 32 &Omega;</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Độ nhạy tại 1kHz: 123dB &plusmn; 3dB</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><strong style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Ph&iacute;a sau:</strong><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Tr&igrave;nh điều khiển: 2 x Nam ch&acirc;m Neodymium 20mm</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Đ&aacute;p ứng tần số: 20Hz - 20.000 Hz</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Trở kh&aacute;ng: 32 &Omega;</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Độ nhạy tại 1kHz: 120dB &plusmn; 3dB</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><strong style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Trung t&acirc;m:</strong><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Tr&igrave;nh điều khiển: 2 x 30mm Nam ch&acirc;m Neodymium</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Đ&aacute;p ứng tần số: 20Hz - 20.000 Hz</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Trở kh&aacute;ng: 32 &Omega;</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Độ nhạy tại 1kHz: 123dB &plusmn; 3dB</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><strong style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Microphone</strong><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Dải tần: 50 - 16.000 Hz</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Độ nhạy tại 1kHz: -36 dB &plusmn; 2dB</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Signal-to-Noise Ratio: 50 dB</span><br style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;" /><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: small;">Pick-up Pattern: Unidirectional</span>', 'thumb_652_Tai nghe Razer Tiamat 7.1.jpg', '2015-12-11 00:00:00', 5, 0, 0, 1, 3, 1, '2015-12-11 07:25:55', '2015-12-11 07:25:55'),
(11, 'Loa Razer Leviathan', 'loa-razer-leviathan', '4989000.0000', '', 'thumb_3076_Razer Leviathan.jpg', '2015-12-11 00:00:00', 6, 0, 0, 0, 5, 1, '2015-12-11 07:28:39', '2015-12-11 07:28:39'),
(12, 'Tai nghe Razer Adaro DJ', 'tai-nghe-razer-adaro-dj', '4439000.0000', '', 'thumb_2310_Tai nghe Razer Adaro DJ.jpg', '2015-12-11 00:00:00', 5, 0, 0, 1, 3, 1, '2015-12-11 07:29:36', '2015-12-11 07:29:36'),
(13, 'Bàn phím Razer Black­Widow Chroma', 'ban-phim-razer-black­widow-chroma', '3789000.0000', '', 'thumb_2862_Bàn phím Black-Widow Ulti-mate Chroma.jpg', '2015-12-11 00:00:00', 5, 0, 0, 1, 2, 1, '2015-12-11 07:30:21', '2015-12-11 07:30:21'),
(14, 'BP Razer BlackWidow Ultimate 2014', 'bp-razer-blackwidow-ultimate-2014', '2789000.0000', '<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;"><strong>TH&Ocirc;NG SỐ KỸ THUẬT</strong><br /></span></p>\r\n<ul style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Razer Cơ tắc với lực lượng 50g dẫn động</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">60 triệu tuổi thọ tổ hợp ph&iacute;m</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Ph&iacute;m backlit c&aacute; nh&acirc;n</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">10 ph&iacute;m cuộn về chống b&oacute;ng mờ</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Ph&iacute;m lập tr&igrave;nh đầy đủ với on-the-fly ghi vĩ m&ocirc;</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Th&ecirc;m 5 ph&iacute;m macro chuy&ecirc;n dụng</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Lựa chọn chế độ chơi game</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Jack cắm Audio-out/mic-in</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">USB pass-through</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">1000Hz Ultrapolling</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Razer Synapse 2.0 cho ph&eacute;p</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">C&aacute;p sợi bện</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">K&iacute;ch cỡ ước lượng: 475mm/18.72 "(D&agrave;i x Rộng) x 171mm/6.74" (Chiều cao) x 20mm/0.79 "(S&acirc;u)</span></li>\r\n<li class="last" style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Ước t&iacute;nh trọng lượng: 1500g/3.31lbs</span></li>\r\n</ul>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;"><strong>Y&Ecirc;U CẦU HỆ THỐNG</strong><br /></span></p>\r\n<ul style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">PC với cổng USB</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Windows &reg; 8 / Windows &reg; 7 / Windows Vista &reg; / Windows &reg; XP (32-bit) / Mac OS X (v10.6 10,9)</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Kết nối Internet (để c&agrave;i đặt tr&igrave;nh điều khiển)</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">&Iacute;t nhất 200 MB kh&ocirc;ng gian đĩa cứng</span></li>\r\n<li class="last" style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Razer Synapse 2.0 đăng k&yacute; (y&ecirc;u cầu một địa chỉ e-mail hợp lệ), tải phần mềm, chấp nhận giấy ph&eacute;p, v&agrave; kết nối internet cần thiết để k&iacute;ch hoạt đầy đủ t&iacute;nh năng của sản phẩm v&agrave; c&aacute;c bản cập nhật phần mềm.&nbsp;Sau khi k&iacute;ch hoạt, t&iacute;nh năng đầy đủ c&oacute; sẵn trong chế độ offline t&ugrave;y chọn.&nbsp;</span></li>\r\n</ul>', '2413_Bàn phím Razer BlackWidow Ultimate 2014 Green.jpg', '2015-12-11 00:00:00', 5, 0, 0, 0, 2, 1, '2015-12-11 07:31:03', '2015-12-11 10:12:10'),
(15, 'BP Razer BlackWidow Ultimate Stealth', 'bp-razer-blackwidow-ultimate-stealth', '2879000.0000', '<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;"><strong>TH&Ocirc;NG SỐ KỸ THUẬT</strong><br /></span></p>\r\n<ul style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Razer Cơ tắc với lực lượng 50g dẫn động</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">60 triệu tuổi thọ tổ hợp ph&iacute;m</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Ph&iacute;m backlit c&aacute; nh&acirc;n</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">10 ph&iacute;m cuộn về chống b&oacute;ng mờ</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Ph&iacute;m lập tr&igrave;nh đầy đủ với on-the-fly ghi vĩ m&ocirc;</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Th&ecirc;m 5 ph&iacute;m macro chuy&ecirc;n dụng</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Lựa chọn chế độ chơi game</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Jack cắm Audio-out/mic-in</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">USB pass-through</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">1000Hz Ultrapolling</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Razer Synapse 2.0 cho ph&eacute;p</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">C&aacute;p sợi bện</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">K&iacute;ch cỡ ước lượng: 475mm/18.72 "(D&agrave;i x Rộng) x 171mm/6.74" (Chiều cao) x 20mm/0.79 "(S&acirc;u)</span></li>\r\n<li class="last" style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Ước t&iacute;nh trọng lượng: 1500g/3.31lbs</span></li>\r\n</ul>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;"><strong>Y&Ecirc;U CẦU HỆ THỐNG</strong><br /></span></p>\r\n<ul style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">PC với cổng USB</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Windows &reg; 8 / Windows &reg; 7 / Windows Vista &reg; / Windows &reg; XP (32-bit) / Mac OS X (v10.6 10,9)</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Kết nối Internet (để c&agrave;i đặt tr&igrave;nh điều khiển)</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">&Iacute;t nhất 200 MB kh&ocirc;ng gian đĩa cứng</span></li>\r\n<li class="last" style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Razer Synapse 2.0 đăng k&yacute; (y&ecirc;u cầu một địa chỉ e-mail hợp lệ), tải phần mềm, chấp nhận giấy ph&eacute;p, v&agrave; kết nối internet cần thiết để k&iacute;ch hoạt đầy đủ t&iacute;nh năng của sản phẩm v&agrave; c&aacute;c bản cập nhật phần mềm.&nbsp;Sau khi k&iacute;ch hoạt, t&iacute;nh năng đầy đủ c&oacute; sẵn trong chế độ offline t&ugrave;y chọn.&nbsp;</span></li>\r\n</ul>', 'thumb_2414_Bàn phím Razer BlackWidow Ultimate 2014 Green.jpg', '2015-12-11 00:00:00', 5, 0, 0, 1, 2, 1, '2015-12-11 07:31:47', '2015-12-11 10:10:46'),
(16, 'Chuột Razer Diamondback Chroma', 'chuot-razer-diamondback-chroma', '2222000.0000', '<h1 style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif;"><strong>Giới Thiệu</strong></h1>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">Chuột Razer Diamondback Chroma<a style="outline: 0px; text-decoration: none; color: #666666; border: 0px none; vertical-align: baseline;" href="http://apshop.vn/chi-tiet-san-pham/485-chuot-razer/4024-chuot-razer-diamondback-chroma-rz01-01420100-r3a1.html">&nbsp;</a>được Razer cho ra mắt thị trường lần đầu v&agrave;o cuối năm 2014 đ&atilde; tạo n&ecirc;n một cơn sốt mới. Chuột razer mới n&agrave;y được nghi&ecirc;n cứu, thiết kế v&agrave; kiểm tra chất lượng rất nghi&ecirc;m ngặt để cho ra thị trường một sản phẩm chuột với kiểu d&aacute;ng độc đ&aacute;o v&agrave; cải tiến về kỹ thuật. Đ&acirc;y l&agrave; một bước ngoặt đ&aacute;nh dấu sự trở lại ngoạn mục của Razer tr&ecirc;n thị trường gaming.<br /></span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><strong><span style="font-size: medium;">Đặc điểm nổi bật</span></strong></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Thiết kế đối xứng d&agrave;nh cho người thuận cả 2 tay.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Cải tiến về phong c&aacute;ch cũng như k&iacute;ch cỡ ph&ugrave; hợp với tay người d&ugrave;ng.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- &nbsp;2 b&ecirc;n h&ocirc;ng chuột được phủ cao su gi&uacute;p người d&ugrave;ng dễ d&agrave;ng kiếm so&aacute;t hơn trong qu&aacute; tr&igrave;nh sử dụng với thao t&aacute;c nhanh.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Đ&egrave;n led RGB 16.8 triệu m&agrave;u.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Dễ d&agrave;ng c&agrave;i đặt cũng như thiết lập tiến l&ugrave;i khi sử dụ</span>ng</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><strong><span style="font-size: medium;">Th&ocirc;ng số kỹ thuật</span></strong></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Hổ trợ thuận cả 2 tay.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Cảm biến laser 16.000 DPI.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- T&ugrave;y chỉnh qua Razer Synapse.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Đồng bộ m&agrave;u sắc đa thiết bị.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- 7 n&uacute;t bấm c&oacute; thể lập tr&igrave;nh ri&ecirc;ng biệt .</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Đ&egrave;n Chroma với 16.8 triệu m&agrave;u dễ d&agrave;ng lựa chọn cũng như t&ugrave;y chỉnh m&agrave;u sắc.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- C&aacute;p sợi bện d&agrave;i 2,1m/ 7 kh&aacute; bền bỉ.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- K&iacute;ch thước : 125m/ 4.92&rdquo; (độ d&agrave;i) x 60 mm/ 2.64&rdquo; (chiều rộng) x 30mm/ 1.8&rdquo; (Chiều cao)</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Trọng lượng ước t&iacute;nh 89g / 0,09 (kh&ocirc;ng c&oacute; d&acirc;y)</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">&nbsp;</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><strong><span style="font-size: medium;">Y&ecirc;u cầu hệ thống</span></strong></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;"><strong>-&nbsp;</strong>M&aacute;y t&iacute;nh hoặc Mac c&oacute; cổng USB</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Windows&reg; 8/ Windows&reg; 7 / Windows Vista&reg; / Windows&reg; XP (32-bit)/ Mac OS X (v10.8-10.10)</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Kết nối Internet</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Bộ nhớ trống &iacute;t nhất 100MB</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">&nbsp;</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Cần phải đăng k&yacute; Razer Synapse (y&ecirc;u cầu c&oacute; một email hợp lệ), tải xuống phần mềm, chấp thuận giấy ph&eacute;p v&agrave; kết nối internet để k&iacute;ch hoạt c&aacute;c t&iacute;nh năng đầy đủ của sản phẩm v&agrave; để cập nhật phần mềm. Sau khi k&iacute;ch hoạt, c&aacute;c t&iacute;nh năng đầy đủ sẽ c&oacute; sẵn ở chế độ ngoại tuyến t&ugrave;y chọn.</span></p>', '4024_1.jpg', '2015-12-11 00:00:00', 5, 0, 0, 1, 1, 1, '2015-12-11 07:33:10', '2015-12-11 07:33:10'),
(17, 'Bàn phím Razer BlackWidow(Green)', 'ban-phim-razer-blackwidow(green)', '2209000.0000', '', '2448_Ban phim Razer BlackWidow 2014 (Green)3.jpg', '2015-12-11 00:00:00', 5, 0, 0, 1, 2, 1, '2015-12-11 07:36:56', '2015-12-11 08:32:22'),
(18, 'Tai nghe Razer Tiamat 2.2', 'tai-nghe-razer-tiamat-2.2', '2439000.0000', '<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">TECH SPECS</span></p>\r\n<ul style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Optimized positional audio for immersive gameplay</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Dual bass drivers for deep, thumping bass</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Comfortable, snug fit for extended play</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Precise, noise-filtering unidirectional mic</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Slim, easy-to-use inline remote</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Replaceable soft-touch leatherette ear cushions</span></li>\r\n<li class="last" style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Braided fibre cable</span></li>\r\n</ul>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;"><br /></span><span style="font-size: small;"><strong>Headphones</strong></span></p>\r\n<ul style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Drivers: 4 x 40mm Neodymium Magnets with Titanium Coated Diaphragm</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Frequency Response: 20 &ndash; 20,000Hz</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Impedance : 32Ω</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Sensitivity @ 1kHz : 109 &plusmn; 3dB</span></li>\r\n<li class="last" style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Input Power: 60mW</span></li>\r\n</ul>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;"><br /></span><span style="font-size: small;"><strong>Microphone</strong></span></p>\r\n<ul style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Frequency Response: 50 &ndash; 16,000 Hz</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Sensitivity @1kHz: -36 dB &plusmn; 2dB</span></li>\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Signal-to-Noise Ratio: 50 dB</span></li>\r\n<li class="last" style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Pick-up Pattern: Unidirectional</span></li>\r\n</ul>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;"><br /></span><span style="font-size: small;"><strong>In-Line Volume Control</strong></span></p>\r\n<ul style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">\r\n<li style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Headphone Dial</span></li>\r\n<li class="last" style="border: 0px none; vertical-align: baseline;"><span style="font-size: small;">Microphone Mute Switch</span></li>\r\n</ul>', 'thumb_1287_Tai nghe Razer Tiamat 22.jpg', '2015-12-11 00:00:00', 5, 0, 0, 1, 3, 1, '2015-12-11 07:37:48', '2015-12-11 07:37:48'),
(19, 'Chuột Mamba Tournament Chroma', 'chuot-mamba-tournament-chroma', '2199000.0000', '<div style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-align: center;">Chuột c&oacute; 9 n&uacute;t nhấn ( 2 n&uacute;t chỉnh DPI , 2 n&uacute;t nhấn chuột , 3 c&aacute;ch nhấn ngay n&uacute;t con lăn " Scroll CLick " , 2 n&uacute;t t&ugrave;y thiết lập )</div>\r\n<div style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-align: center;"><strong>Th&ocirc;ng số kỹ thuật</strong></div>\r\n<div style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-align: center;">\r\n<p style="border: 0px none; vertical-align: baseline;">Cảm biến laser 16.000 DPI 5G</p>\r\n<p style="border: 0px none; vertical-align: baseline;">L&ecirc;n đến 210 inch mỗi gi&acirc;y / 50G gia tốc</p>\r\n<p style="border: 0px none; vertical-align: baseline;">1000Hz Ultrapolling / 1ms thời gian đ&aacute;p ứng</p>\r\n<p style="border: 0px none; vertical-align: baseline;">On-The-Fly Sensitivity điều chỉnh</p>\r\n<p style="border: 0px none; vertical-align: baseline;">Ergonomic thiết kế thuận tay phải c&oacute; hiểu thấu b&ecirc;n cao su kết cấu</p>\r\n<p style="border: 0px none; vertical-align: baseline;">Đ&egrave;n Led Chroma với 16,8 triệu m&agrave;u sắc t&ugrave;y chọn t&ugrave;y biến</p>\r\n<p style="border: 0px none; vertical-align: baseline;">Inter-thiết bị đồng bộ m&agrave;u</p>\r\n<p style="border: 0px none; vertical-align: baseline;">Ch&iacute;n n&uacute;t độc lập c&oacute; thể lập tr&igrave;nh với b&aacute;nh xe nghi&ecirc;ng nhấp chuột cuộn</p>\r\n<p style="border: 0px none; vertical-align: baseline;">2.1 m / 7 ft c&aacute;p sợi bện USB</p>\r\n<p style="border: 0px none; vertical-align: baseline;">K&iacute;ch thước gần đ&uacute;ng: 128 mm / 5 (d&agrave;i) x 70 mm / 2.76 trong (Width) x 42,5 mm / 1,67 in (Height)</p>\r\n<p style="border: 0px none; vertical-align: baseline;">Trọng lượng ước t&iacute;nh: 133 g / 0,29 &pound;</p>\r\n<p style="border: 0px none; vertical-align: baseline;">PC hoặc Mac với một cổng USB miễn ph&iacute;</p>\r\n<p style="border: 0px none; vertical-align: baseline;">Windows&reg; 10 / Windows&reg; 8 / Windows&reg; 7 / Windows Vista&reg; / Windows&reg; XP (32-bit) / Mac OS X (v10.8-10.10)</p>\r\n<p style="border: 0px none; vertical-align: baseline;">kết nối Internet</p>\r\n<p style="border: 0px none; vertical-align: baseline;">100 MB kh&ocirc;ng gian đĩa cứng</p>\r\n<p style="border: 0px none; vertical-align: baseline;">Razer Synapse đăng k&yacute; (y&ecirc;u cầu một e-mail hợp lệ), tải phần mềm, chấp nhận giấy ph&eacute;p, v&agrave; cần kết nối internet để k&iacute;ch hoạt đầy đủ t&iacute;nh năng của sản phẩm v&agrave; c&aacute;c bản cập nhật phần mềm. Sau khi k&iacute;ch hoạt, t&iacute;nh năng đầy đủ c&oacute; sẵn trong chế độ ẩn t&ugrave;y chọn.</p>\r\n</div>', 'thumb_3756_1.jpg', '2015-12-11 00:00:00', 5, 0, 0, 1, 1, 1, '2015-12-11 07:38:32', '2015-12-11 07:38:32'),
(20, 'Chuột Razer Orochi 2015', 'chuot-razer-orochi-2015', '1999000.0000', '<h1 style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif;"><strong>Giới Thiệu</strong></h1>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">Chuột Razer OROCHI được thiết kế với c&ocirc;ng nghệ c&oacute; d&acirc;y v&agrave; kh&ocirc;ng d&acirc;y.&nbsp; Bluetooth hổ trợ khả năng duy chuyển kh&ocirc;ng giới hạn.Chế độ chuyển đổi c&oacute; d&acirc;y v&agrave; kh&ocirc;ng d&acirc;y cực kỳ dễ d&agrave;ng v&agrave; độ ch&iacute;nh x&aacute;c kh&aacute; cao với thời gian phản hồi chỉ 1ms. Chuột Razer n&agrave;y được thiết kế kh&aacute; ngầu hứa hẹn sẽ l&agrave; người bạn đồng h&agrave;nh tuyệt vời của c&aacute;c game thủ.<br /></span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><strong><span style="font-size: medium;">Đặc điểm nổi bật</span></strong></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: medium;">- Cảm biến laser 8.200DPI, tốc độ di chuyển chuột l&ecirc;n đến 210 inch m&ocirc;i gi&acirc;y v&agrave; độ ch&iacute;nh x&aacute;c rất cao.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: medium;">- Dễ d&agrave;ng t&ugrave;y chỉnh theo &yacute; của người d&ugrave;ng.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: medium;">- Thời lượng pin kh&aacute; tr&acirc;u c&oacute; thể k&eacute;o d&agrave;i đến từ 3- 7 th&aacute;ng n&ecirc;n c&aacute;c bạn c&oacute; thể thỏa th&iacute;ch chơi game.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: medium;">- Được tối ưu khả năng khả năng ti&ecirc;u ph&iacute; điện năng tốt nhất.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: medium;">- Hổ trợ 16, 8 triệu m&agrave;u tr&ecirc;n đ&egrave;n led RGB.<br /></span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><strong><span style="font-size: medium;">Th&ocirc;ng số kỹ thuật</span></strong></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;"><strong>-&nbsp;</strong>Hai c&ocirc;ng nghệ c&oacute; d&acirc;y/ kh&ocirc;ng d&acirc;y Bluetooth 4.0</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Tần số qu&eacute;t 1000Hz (c&oacute; d&acirc;y)/ Tần số qu&eacute;t 125Hz (kh&ocirc;ng d&acirc;y)</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Thời gian phản hồi 1ms (c&oacute; d&acirc;y)/ Thời gian phản hồi 8ms ( kh&ocirc;ng d&acirc;y)</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Cảm biến laser 4G 8.200DPI</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Thời lượng pin : Khoảng 20 giờ (chơi game li&ecirc;n tục) Hoặc 3 th&aacute;ng (mức sử dụng th&ocirc;ng thường)</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Kiểu d&aacute;ng thiết kế đối xưng thuận cả 2 tay v&agrave; H&ocirc;ng chuột được bọc một lớp cao su chống trơn trượt</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Đ&egrave;n Chroma với 16.8 triệu m&agrave;u dễ d&agrave;ng lựa chọn cũng như t&ugrave;y chỉnh.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Đồng bộ m&agrave;u sắc đa thiết bị.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Bảy n&uacute;t bấm c&oacute; thể lập tr&igrave;nh ri&ecirc;ng biệt</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- C&aacute;p sợi bện d&agrave;i 1m kh&aacute; bền bỉ.</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- K&iacute;ch thước : 99m/ 3.90&rdquo; (độ d&agrave;i) x 67 mm/ 2.64&rdquo; (chiều rộng) x 35mm/ 1.38&rdquo; (Chiều cao)</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- 2 x pinAA ( tuổi thọ pin t&ugrave;y v&agrave;o mức độ sử dụng)</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><strong><span style="font-size: small;">&nbsp;</span></strong></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><strong><span style="font-size: medium;">Y&ecirc;u cầu hệ thống</span></strong></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;"><strong>-&nbsp;</strong>M&aacute;y t&iacute;nh hoặc Mac c&oacute; cổng USB</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Windows&reg; 8/ Windows&reg; 7 / Windows Vista&reg; / Windows&reg; XP (32-bit)/ Mac OS X (v10.8-10.10)</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Kết nối Internet</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Bộ nhớ trống &iacute;t nhất 100MB</span></p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><span style="font-size: small;">- Cần phải đăng k&yacute; Razer Synapse (y&ecirc;u cầu c&oacute; một email hợp lệ), tải xuống phần mềm, chấp thuận giấy ph&eacute;p v&agrave; kết nối internet để k&iacute;ch hoạt c&aacute;c t&iacute;nh năng đầy đủ của sản phẩm v&agrave; để cập nhật phần mềm. Sau khi k&iacute;ch hoạt, c&aacute;c t&iacute;nh năng đầy đủ sẽ c&oacute; sẵn ở chế độ ngoại tuyến t&ugrave;y chọn.</span></p>', 'thumb_4031_1.jpg', '2015-12-11 00:00:00', 5, 0, 0, 1, 1, 1, '2015-12-11 07:39:19', '2015-12-11 07:39:19'),
(21, 'Tai nghe Razer Adaro Stereos', 'tai-nghe-razer-adaro-stereos', '1989000.0000', '', 'thumb_2309_Tai nghe Razer Adaro Stereos.jpg', '2015-12-11 00:00:00', 5, 0, 0, 1, 3, 1, '2015-12-11 07:39:53', '2015-12-11 07:39:53'),
(22, 'Tai nghe Razer Kraken Pro 2015 Black ', 'tai-nghe-razer-kraken-pro-2015-black', '1989000.0000', '<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">T&Iacute;NH NĂNG</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Tai nghe</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Tần số đ&aacute;p ứng: 20 - 20,000 Hz</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Impedance: 32 &Omega; tại 1kHz</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Độ nhạy (@ 1kHz, 1V / Pa): 110 &plusmn; 4dB tại 1 kHz max</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Đầu v&agrave;o c&ocirc;ng suất: 50 mW</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Tr&igrave;nh điều khiển: 40 mm, với nam ch&acirc;m neodymium</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Inner đường k&iacute;nh cốc tai: 50 mm / 0,16 ft</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Chiều d&agrave;i c&aacute;p: 1,3 m / 4,27 ft cộng 2m / 6.6 ft splitter bộ chuyển đổi</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Trọng lượng ước t&iacute;nh: 300 g / 0,66 &pound;</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Bộ kết nối: Analog 3.5 mm jack kết hợp (headphone v&agrave; mic)</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Microphone</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Tần số đ&aacute;p ứng: 100 - 10,000 Hz</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Tỷ lệ t&iacute;n hiệu-to-noise: 52 dB</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Độ nhạy (@ 1 kHz, 1 V / Pa): -40 &plusmn; 3 dB</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Pick-up pattern: Unidirectional</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Trong d&ograve;ng điều khiển</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Khối lượng tương tự b&aacute;nh xe điều khiển</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Microphone toggle nhanh c&acirc;m</p>', 'thumb_3749_KrakenProBlack.jpg', '2015-12-11 00:00:00', 5, 0, 0, 1, 3, 1, '2015-12-11 07:40:24', '2015-12-11 07:40:24');
INSERT INTO `san_pham` (`id`, `ten_san_pham`, `ten_alias`, `gia`, `mo_ta`, `url_hinh`, `ngay_nhap`, `ton_kho`, `so_lan_mua`, `so_lan_xem`, `an_hien`, `id_loai`, `id_thuong_hieu`, `created_at`, `updated_at`) VALUES
(23, 'Tai nghe Razer Kraken Pro 2015 Green ', 'tai-nghe-razer-kraken-pro-2015-green', '1989000.0000', '<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">T&Iacute;NH NĂNG</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Tai nghe</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Tần số đ&aacute;p ứng: 20 - 20,000 Hz</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Impedance: 32 &Omega; tại 1kHz</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Độ nhạy (@ 1kHz, 1V / Pa): 110 &plusmn; 4dB tại 1 kHz max</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Đầu v&agrave;o c&ocirc;ng suất: 50 mW</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Tr&igrave;nh điều khiển: 40 mm, với nam ch&acirc;m neodymium</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Inner đường k&iacute;nh cốc tai: 50 mm / 0,16 ft</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Chiều d&agrave;i c&aacute;p: 1,3 m / 4,27 ft cộng 2m / 6.6 ft splitter bộ chuyển đổi</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Trọng lượng ước t&iacute;nh: 300 g / 0,66 &pound;</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Bộ kết nối: Analog 3.5 mm jack kết hợp (headphone v&agrave; mic)</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Microphone</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Tần số đ&aacute;p ứng: 100 - 10,000 Hz</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Tỷ lệ t&iacute;n hiệu-to-noise: 52 dB</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Độ nhạy (@ 1 kHz, 1 V / Pa): -40 &plusmn; 3 dB</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Pick-up pattern: Unidirectional</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Trong d&ograve;ng điều khiển</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Khối lượng tương tự b&aacute;nh xe điều khiển</p>\r\n<p style="border: 0px none; vertical-align: baseline; color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12.16px; line-height: 15.808px;">Microphone toggle nhanh c&acirc;m</p>', '3750_KrakenProGreen.jpg', '2015-12-11 00:00:00', 3, 1, 13, 1, 3, 1, '2015-12-11 07:40:53', '2015-12-30 14:31:52'),
(24, 'Tai nghe Razer Hammerhead', 'tai-nghe-razer-hammerhead', '1289000.0000', '<strong style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Razer Hammerhead</strong><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">&nbsp;Tai nghe In-Ear l&agrave; m&agrave;n h&igrave;nh trong tai (IEM) thiết kế từ mặt đất l&ecirc;n để thiết lập c&aacute;c ti&ecirc;u chuẩn trong &acirc;m thanh chơi game cầm tay.&nbsp;Gia c&ocirc;ng ra khỏi m&aacute;y bay lớp nh&ocirc;m, Razer Hammerhead thể hiện độ bền đ&oacute;ng g&oacute;i cuối c&ugrave;ng trong một yếu tố h&igrave;nh thức thoải m&aacute;i nhẹ.&nbsp;bọc trong từng kiểu d&aacute;ng đẹp, vỏ chải l&agrave; một hiệu suất, độ ch&iacute;nh x&aacute;c điều chỉnh tr&igrave;nh điều khiển neodymium 9mm cao.&nbsp;Kết hợp với một &acirc;m thanh b&ecirc;n trong buồng tối ưu trong mỗi vỏ, c&aacute;c m&agrave;n h&igrave;nh trong tai tạo ra một chữ k&yacute; &acirc;m thanh m&agrave; g&oacute;i trung b&igrave;nh, trời lở đất trầm trong khi duy tr&igrave; cao độ v&agrave; trung cao độ trong trẻo.</span><strong style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">&nbsp;Razer Hammerhead&nbsp;</strong><span style="color: #404040; font-family: Helvetica, Arial, sans-serif; font-size: 12px;">đi qua với to&agrave;n th&acirc;n tần số thấp, đập th&igrave;nh thịch trong nhịp đập m&agrave; kh&ocirc;ng bị m&eacute;o.&nbsp;chất lượng &acirc;m thanh tối cao sẽ bị l&atilde;ng ph&iacute; nếu bị &aacute;t đi bởi đi lạc, tiếng ồn xung quanh.&nbsp;Đ&oacute; l&agrave; l&yacute; do tại sao c&aacute;c Razer Hammerhead được trang bị ho&aacute;n đổi cho nhau tai lời khuy&ecirc;n trong 3 k&iacute;ch cỡ, c&ugrave;ng với một cặp t&ugrave;y chọn bi-b&iacute;ch để cung cấp c&aacute;ch ly &acirc;m thanh vượt trội v&agrave; phản ứng bass.&nbsp;Đứng đầu bằng một hộp đựng nhỏ gọn cho t&iacute;nh di động, Razer Hammerhead h&igrave;nh ảnh thu nhỏ c&aacute;ch m&agrave;n h&igrave;nh trong tai n&ecirc;n c&oacute; kinh nghiệm - với phong c&aacute;ch, thoải m&aacute;i v&agrave; &acirc;m thanh trung thực.</span>', '1730_Razer Hammerhead.jpg', '2015-12-15 00:00:00', 5, 4, 6, 1, 3, 1, '2015-12-15 05:02:48', '2015-12-30 18:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `thuong_hieu`
--

CREATE TABLE IF NOT EXISTS `thuong_hieu` (
  `id` int(10) unsigned NOT NULL,
  `ten_thuong_hieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `an_hien` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thuong_hieu`
--

INSERT INTO `thuong_hieu` (`id`, `ten_thuong_hieu`, `ten_alias`, `thu_tu`, `an_hien`, `created_at`, `updated_at`) VALUES
(1, 'Razer', 'razer', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Steelseries', 'steelseries', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Corsair', 'corsair', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'CM Storm', 'cm-storm', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Logitech', 'logitech', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Ozone', 'ozone', 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Tt eSports', 'tt-esports', 7, 1, '2015-12-10 17:00:00', '2015-12-10 18:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `tinh_trang`
--

CREATE TABLE IF NOT EXISTS `tinh_trang` (
  `id` int(11) NOT NULL,
  `tinh_trang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinh_trang`
--

INSERT INTO `tinh_trang` (`id`, `tinh_trang`, `created_at`, `updated_at`) VALUES
(1, 'Đang chờ', '2015-12-11 17:00:00', '2015-12-11 17:00:00'),
(2, 'Đang giao', '2015-12-11 17:00:00', '2015-12-11 17:00:00'),
(3, 'Đã giao', '2015-12-11 17:00:00', '2015-12-11 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `confirm_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `phone`, `level`, `active`, `confirm_code`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$ieDB41UcjUuzl7mw9aeLVebvdlV5kw/kvPsxyhN69iBEn/U/j09S6', 'PmHbiefrF6D2jU5L1fxExdiSsRIwIvjltSb509IA3FUcrzEaf7wgdhnMrkJn', '0123 734 5564', 1, 1, '', '2015-12-13 19:36:10', '2015-12-13 19:48:22'),
(2, 'Test', 'test@gmail.com', '$2y$10$5x2WuRi2aIlXB7lDCrUjeOqtdEE6/qgWbflY85jy1L7aH2XyCdLUi', 'TM5MMBQAvi4mhtHEqrk79AABbpkIIxg2GkI4JtAqs6xRTfGubIih87ZOP9PU', '0123 734 5564', 1, 1, '', '2015-12-13 19:37:03', '2015-12-13 19:47:10'),
(3, 'abc', 'member@gmail.com', '$2y$10$7V9dpzbPOQsRWaOtMmcch.fTjq4ReI4cHrUriqcSOmp2OE5JC05oO', 'SHwpkcVnwO8XVVaErzjQaxVgmFEtdolY0MKFdCfhjtKvHpIzPG2M1eLQE3ID', '0123 734 5564', 2, 1, '', '2015-12-13 19:59:36', '2015-12-17 09:53:56'),
(4, 'Lê Đặng Hoài Nam', 'namhoai95@gmail.com', '$2y$10$JXHCW5OVLJWo0hQDTiuhyuuRnlhMUAVuFxc0mRKHv9qo9GIZdyTZ.', 'RrBTnRZgeRTDbRlGUhVDyFDz1j8SF9l2ykoge0VeLdaixkdyBlP2zwyXzZk7', '0123 734 5564', 1, 1, 'pb0u8bzihy5vra9p7nxlhd4yx8xc2x', '2015-12-15 04:51:14', '2015-12-29 08:44:48'),
(5, 'test', 'test1@test.com', '$2y$10$0WYLTQLF0Z/NkUSIeO8jFusmsfGm1941aLTTXPLrhfr4PFCjm.Loy', 'W1tpNktg42erH1JUI7HHQfpYZX6jmkhc5HHJ6A0BqZQcKO1JzdH12gwaR3qA', '0123 734 5564', 2, 0, 'jyjrhtyeiyccxzp0bitrphv2zr1gpz', '2015-12-16 12:11:49', '2015-12-17 04:37:43'),
(6, 'Lê Đặng Hoài Nam', 'nhatro123789@gmail.com', '$2y$10$sQMS3YK3E3pFRdpQQO4UzOvYF3D283ik0Phae3F887PKRYlnPwGx6', 'UZnvAWVIRPtgw3Qtezvm7PiNabF4m3bZqfhTuKTNOoAeECN6v8YyPRNy54hL', '0123 734 5564', 2, 1, '', '2015-12-29 07:59:24', '2015-12-29 08:05:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binh_luan_id_nguoi_dung_foreign` (`id_nguoi_dung`),
  ADD KEY `binh_luan_id_san_pham_foreign` (`id_san_pham`);

--
-- Indexes for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chi_tiet_don_hang_id_don_dat_hang_foreign` (`id_don_dat_hang`);

--
-- Indexes for table `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `don_dat_hang_id_tinh_trang_foreign` (`id_tinh_trang`),
  ADD KEY `don_dat_hang_id_tai_khoan_foreign` (`id_tai_khoan`);

--
-- Indexes for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `san_pham_id_loai_foreign` (`id_loai`),
  ADD KEY `san_pham_id_thuong_hieu_foreign` (`id_thuong_hieu`);

--
-- Indexes for table `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinh_trang`
--
ALTER TABLE `tinh_trang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tinh_trang`
--
ALTER TABLE `tinh_trang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_id_nguoi_dung_foreign` FOREIGN KEY (`id_nguoi_dung`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `binh_luan_id_san_pham_foreign` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `chi_tiet_don_hang_id_don_dat_hang_foreign` FOREIGN KEY (`id_don_dat_hang`) REFERENCES `don_dat_hang` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `don_dat_hang`
--
ALTER TABLE `don_dat_hang`
  ADD CONSTRAINT `don_dat_hang_id_tai_khoan_foreign` FOREIGN KEY (`id_tai_khoan`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `don_dat_hang_id_tinh_trang_foreign` FOREIGN KEY (`id_tinh_trang`) REFERENCES `tinh_trang` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_id_loai_foreign` FOREIGN KEY (`id_loai`) REFERENCES `loai_san_pham` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `san_pham_id_thuong_hieu_foreign` FOREIGN KEY (`id_thuong_hieu`) REFERENCES `thuong_hieu` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
