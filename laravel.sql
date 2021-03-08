-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for laravel
CREATE DATABASE IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `laravel`;

-- Dumping structure for table laravel.chitietdonhang
CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `dh_ma` bigint(20) unsigned NOT NULL COMMENT 'Đơn hàng # dh_ma # dh_ma # Mã đơn hàng',
  `sp_ma` bigint(20) unsigned NOT NULL COMMENT 'Sản phẩm # sp_ma # sp_ten # Mã sản phẩm',
  `m_ma` tinyint(3) unsigned NOT NULL COMMENT 'Màu sắc # m_ma # m_ten # Mã màu sản phẩm, 1-Phối màu (đỏ, vàng, ...)',
  `ctdh_soLuong` smallint(5) unsigned NOT NULL DEFAULT 1 COMMENT 'Số lượng # Số lượng sản phẩm đặt mua',
  `ctdh_donGia` int(10) unsigned NOT NULL DEFAULT 1 COMMENT 'Đơn giá # Giá bán',
  `ctdh_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo chi tiết đon hàng',
  `ctdh_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật chi tiết đon hàng gần nhất',
  `ctdh_trangThai` tinyint(4) NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái chi tiết đon hàng sản phẩm: 1-khóa, 2-lập phiếu, 3-thanh toán, 4-nhập kho',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`dh_ma`,`sp_ma`,`m_ma`),
  KEY `chitietdonhang_m_ma_foreign` (`m_ma`),
  KEY `chitietdonhang_sp_ma_foreign` (`sp_ma`),
  CONSTRAINT `chitietdonhang_dh_ma_foreign` FOREIGN KEY (`dh_ma`) REFERENCES `donhang` (`dh_ma`) ON UPDATE CASCADE,
  CONSTRAINT `chitietdonhang_m_ma_foreign` FOREIGN KEY (`m_ma`) REFERENCES `mau` (`m_ma`) ON UPDATE CASCADE,
  CONSTRAINT `chitietdonhang_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Chi tiết đơn hàng # Chi tiết đơn hàng: sản phẩm, màu, số lượng, đơn giá, đơn hàng';

-- Dumping data for table laravel.chitietdonhang: ~20 rows (approximately)
/*!40000 ALTER TABLE `chitietdonhang` DISABLE KEYS */;
REPLACE INTO `chitietdonhang` (`dh_ma`, `sp_ma`, `m_ma`, `ctdh_soLuong`, `ctdh_donGia`, `ctdh_taoMoi`, `ctdh_capNhat`, `ctdh_trangThai`, `deleted_at`) VALUES
	(2, 4, 4, 4, 1828000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 1, NULL),
	(3, 1, 19, 9, 5359000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 2, NULL),
	(3, 9, 11, 12, 1889000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 1, NULL),
	(3, 12, 6, 15, 6350000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 1, NULL),
	(3, 14, 3, 12, 840000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 2, NULL),
	(3, 18, 20, 15, 4255000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 1, NULL),
	(4, 24, 2, 5, 676000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 2, NULL),
	(5, 6, 20, 20, 6434000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 1, NULL),
	(6, 23, 15, 5, 5047000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 2, NULL),
	(8, 11, 17, 7, 1056000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 1, NULL),
	(8, 12, 7, 6, 5079000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 2, NULL),
	(8, 24, 2, 4, 3619000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 2, NULL),
	(10, 4, 11, 3, 700000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 2, NULL),
	(10, 11, 4, 9, 5523000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 2, NULL),
	(10, 16, 3, 1, 3296000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 1, NULL),
	(11, 3, 4, 12, 2744000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 2, NULL),
	(11, 10, 18, 9, 4456000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 1, NULL),
	(11, 24, 14, 19, 6398000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 1, NULL),
	(12, 6, 7, 16, 465000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 2, NULL),
	(15, 22, 13, 1, 2883000, '2021-01-24 10:01:39', '2021-01-24 10:01:39', 2, NULL);
/*!40000 ALTER TABLE `chitietdonhang` ENABLE KEYS */;

-- Dumping structure for table laravel.chitietnhap
CREATE TABLE IF NOT EXISTS `chitietnhap` (
  `pn_ma` bigint(20) unsigned NOT NULL COMMENT 'Phiếu nhập # pn_ma # pn_ma # Mã phiếu nhập',
  `sp_ma` bigint(20) unsigned NOT NULL COMMENT 'Sản phẩm # sp_ma # sp_ten # Mã sản phẩm',
  `m_ma` tinyint(3) unsigned NOT NULL COMMENT 'Màu sắc # m_ma # m_ten # Mã màu sản phẩm, 1-Phối màu (đỏ, vàng, ...)',
  `ctn_soLuong` smallint(5) unsigned NOT NULL DEFAULT 1 COMMENT 'Số lượng # Số lượng sản phẩm nhập kho',
  `ctn_donGia` int(10) unsigned NOT NULL DEFAULT 1 COMMENT 'Đơng giá nhập # Giá nhập kho của sản phẩm',
  `ctn_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo chi tiết nhập',
  `ctn_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật chi tiết nhập gần nhất',
  `ctn_trangThai` tinyint(3) unsigned NOT NULL DEFAULT 1 COMMENT 'Trạng thái # Trạng thái chi tiết nhập: 1-lập chi tiết nhập, 2-xuất chi tiết nhập, 3-hủy',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`pn_ma`,`sp_ma`,`m_ma`),
  KEY `chitietnhap_m_ma_foreign` (`m_ma`),
  KEY `chitietnhap_sp_ma_foreign` (`sp_ma`),
  CONSTRAINT `chitietnhap_m_ma_foreign` FOREIGN KEY (`m_ma`) REFERENCES `mau` (`m_ma`) ON UPDATE CASCADE,
  CONSTRAINT `chitietnhap_pn_ma_foreign` FOREIGN KEY (`pn_ma`) REFERENCES `phieunhap` (`pn_ma`) ON UPDATE CASCADE,
  CONSTRAINT `chitietnhap_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Chi tiết nhập # Chi tiết phiếu nhập: sản phẩm, màu, số lượng, đơn giá, phiếu nhập';

-- Dumping data for table laravel.chitietnhap: ~10 rows (approximately)
/*!40000 ALTER TABLE `chitietnhap` DISABLE KEYS */;
REPLACE INTO `chitietnhap` (`pn_ma`, `sp_ma`, `m_ma`, `ctn_soLuong`, `ctn_donGia`, `ctn_taoMoi`, `ctn_capNhat`, `ctn_trangThai`, `deleted_at`) VALUES
	(1, 1, 1, 1, 1, '2021-01-24 10:00:15', '2021-01-24 10:00:15', 1, NULL),
	(1, 10, 12, 5, 77777, '2021-02-25 06:23:43', '2021-02-25 06:23:43', 1, NULL),
	(1, 10, 17, 5555, 55, '2021-02-24 22:08:49', '2021-02-24 22:08:50', 1, NULL),
	(1, 12, 10, 66, 78, '2021-02-25 08:12:48', '2021-02-25 08:12:48', 1, NULL),
	(2, 2, 2, 2, 2, '2021-01-24 10:00:15', '2021-01-24 10:00:15', 2, NULL),
	(3, 3, 3, 3, 3, '2021-01-24 10:00:15', '2021-01-24 10:00:15', 1, NULL),
	(9, 7, 1, 555, 89, '2021-02-25 06:18:39', '2021-02-25 06:18:39', 1, NULL),
	(9, 7, 14, 666, 77777, '2021-02-25 06:19:43', '2021-02-25 06:19:43', 1, NULL),
	(9, 10, 17, 555, 70, '2021-02-25 06:20:12', '2021-02-25 06:20:12', 1, NULL),
	(12, 17, 16, 5, 77777, '2021-02-25 06:21:42', '2021-02-25 06:21:42', 1, NULL);
/*!40000 ALTER TABLE `chitietnhap` ENABLE KEYS */;

-- Dumping structure for table laravel.chude
CREATE TABLE IF NOT EXISTS `chude` (
  `cd_ma` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã chủ đề',
  `cd_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên chủ đề # Tên chủ đề',
  `cd_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo chủ đề',
  `cd_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật chủ đề gần nhất',
  `cd_trangThai` tinyint(4) NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái chủ đề: 1-khóa, 2-khả dụng',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`cd_ma`),
  UNIQUE KEY `chude_cd_ma_cd_ten_unique` (`cd_ma`,`cd_ten`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.chude: ~3 rows (approximately)
/*!40000 ALTER TABLE `chude` DISABLE KEYS */;
REPLACE INTO `chude` (`cd_ma`, `cd_ten`, `cd_taoMoi`, `cd_capNhat`, `cd_trangThai`, `deleted_at`) VALUES
	(1, 'Cá Koi', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, NULL),
	(2, 'Cá đá', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, NULL),
	(3, 'Lễ hội cá Betta', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, NULL);
/*!40000 ALTER TABLE `chude` ENABLE KEYS */;

-- Dumping structure for table laravel.chude_sanpham
CREATE TABLE IF NOT EXISTS `chude_sanpham` (
  `sp_ma` bigint(20) unsigned NOT NULL COMMENT 'Sản phẩm # sp_ma # sp_ten # Mã sản phẩm',
  `cd_ma` tinyint(3) unsigned NOT NULL COMMENT 'Chủ để # cd_ma # cd_ten # Mã chủ đề',
  `cdsp_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo chủ đề sản phẩm',
  `cdsp_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật chủ đề sản phẩm gần nhất',
  `cdsp_trangThai` tinyint(3) unsigned NOT NULL DEFAULT 3 COMMENT 'Trạng thái # Trạng thái chủ đề sản phẩm: 1-khóa, 2-hiển thị, 3-chờ duyệt',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`sp_ma`,`cd_ma`),
  KEY `chude_sanpham_cd_ma_foreign` (`cd_ma`),
  CONSTRAINT `chude_sanpham_cd_ma_foreign` FOREIGN KEY (`cd_ma`) REFERENCES `chude` (`cd_ma`) ON UPDATE CASCADE,
  CONSTRAINT `chude_sanpham_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Chủ đề sản phẩm # Sản phầm thuộc các chủ đề';

-- Dumping data for table laravel.chude_sanpham: ~5 rows (approximately)
/*!40000 ALTER TABLE `chude_sanpham` DISABLE KEYS */;
REPLACE INTO `chude_sanpham` (`sp_ma`, `cd_ma`, `cdsp_taoMoi`, `cdsp_capNhat`, `cdsp_trangThai`, `deleted_at`) VALUES
	(1, 1, '2021-01-24 09:58:44', '2021-01-24 09:58:44', 2, NULL),
	(2, 1, '2021-01-24 09:58:44', '2021-01-24 09:58:44', 2, NULL),
	(2, 2, '2021-01-24 09:58:44', '2021-01-24 09:58:44', 1, NULL),
	(2, 3, '2021-01-24 09:58:44', '2021-01-24 09:58:44', 2, NULL),
	(3, 3, '2021-01-24 09:58:44', '2021-01-24 09:58:44', 2, NULL);
/*!40000 ALTER TABLE `chude_sanpham` ENABLE KEYS */;

-- Dumping structure for table laravel.danhmuc
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `dm_ma` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã danh mục',
  `dm_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên danh mục # Tên danh mục sản phẩm',
  `dm_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo danh mục sản phẩm',
  `dm_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật danh mục sản phẩm gần nhất',
  `dm_trangThai` tinyint(4) NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái danh mục sản phẩm: 1-khóa, 2-khả dụng',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`dm_ma`),
  UNIQUE KEY `danhmuc_dm_ten_unique` (`dm_ten`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Danh mục sản phẩm # Danh mục sản phẩm';

-- Dumping data for table laravel.danhmuc: ~3 rows (approximately)
/*!40000 ALTER TABLE `danhmuc` DISABLE KEYS */;
REPLACE INTO `danhmuc` (`dm_ma`, `dm_ten`, `dm_taoMoi`, `dm_capNhat`, `dm_trangThai`, `deleted_at`) VALUES
	(1, 'Cá Betta', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, NULL),
	(2, 'Hoa Lan', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, NULL),
	(3, 'Mỹ Phẩm', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, NULL),
	(20, 'affffjjj', '2021-02-08 08:17:24', '2021-02-08 08:17:56', 1, '2021-02-08 08:17:56');
/*!40000 ALTER TABLE `danhmuc` ENABLE KEYS */;

-- Dumping structure for table laravel.doanhthu_sanpham
CREATE TABLE IF NOT EXISTS `doanhthu_sanpham` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sp_ma` bigint(20) unsigned NOT NULL,
  `giatri` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `doanhthu_sanpham_sp_ma_foreign` (`sp_ma`),
  CONSTRAINT `doanhthu_sanpham_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.doanhthu_sanpham: ~0 rows (approximately)
/*!40000 ALTER TABLE `doanhthu_sanpham` DISABLE KEYS */;
/*!40000 ALTER TABLE `doanhthu_sanpham` ENABLE KEYS */;

-- Dumping structure for table laravel.donhang
CREATE TABLE IF NOT EXISTS `donhang` (
  `dh_ma` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã đơn hàng, 1-Không xuất hóa đơn',
  `kh_ma` bigint(20) unsigned NOT NULL COMMENT 'Khách hàng # kh_ma # kh_hoTen # Mã khách hàng',
  `dh_thoiGianDatHang` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm đặt hàng # Thời điểm đặt hàng',
  `dh_thoiGianNhanHang` datetime NOT NULL COMMENT 'Thời điểm giao hàng # Thời điểm giao hàng theo yêu cầu của khách hàng',
  `dh_nguoiNhan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Người nhận quà # Họ tên người nhận (tên hiển thị)',
  `dh_diaChi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Địa chỉ người nhận # Địa chỉ người nhận',
  `dh_dienThoai` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Điện thoại người nhận # Điện thoại người nhận',
  `dh_nguoiGui` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Người tặng quà # Người tặng (tên hiển thị)',
  `dh_loiChuc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Lời chúc # Lời chúc ghi trên thiệp',
  `dh_daThanhToan` tinyint(3) unsigned NOT NULL DEFAULT 0 COMMENT 'Đã thanh toán # Đã thanh toán tiền (trường hợp tặng quà)',
  `nv_xuLy` bigint(20) unsigned NOT NULL DEFAULT 1 COMMENT 'Xử lý đơn hàng # nv_ma # nv_hoTen # Mã nhân viên (người xử lý đơn hàng), 1-chưa phân công',
  `dh_ngayXuLy` datetime DEFAULT NULL COMMENT 'Thời điểm xử lý # Thời điểm xử lý đơn hàng',
  `nv_giaoHang` bigint(20) unsigned NOT NULL DEFAULT 1 COMMENT 'Giao hàng # nv_ma # nv_hoTen # Mã nhân viên (người lập phiếu giao hàng và giao hàng), 1-chưa phân công',
  `dh_ngayLapPhieuGiao` datetime DEFAULT NULL COMMENT 'Thời điểm lập phiếu giao # Thời điểm lập phiếu giao',
  `dh_ngayGiaoHang` datetime DEFAULT NULL COMMENT 'Thời điểm khách nhận được hàng # Thời điểm khách nhận được hàng',
  `dh_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo đơn hàng',
  `dh_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật đơn hàng gần nhất',
  `dh_trangThai` tinyint(3) unsigned NOT NULL DEFAULT 1 COMMENT 'Trạng thái # Trạng thái đơn hàng: 1-nhận đơn, 2-xử lý đơn, 3-giao hàng, 4-hoàn tất, 5-đổi trả, 6-hủy',
  `vc_ma` tinyint(3) unsigned NOT NULL COMMENT 'Dịch vụ giao hàng # vc_ma # vc_ten # Mã dịch vụ giao hàng',
  `tt_ma` tinyint(3) unsigned NOT NULL COMMENT 'Phương thức thanh toán # tt_ma # tt_ten # Mã phương thức thanh toán',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`dh_ma`),
  KEY `donhang_kh_ma_foreign` (`kh_ma`),
  KEY `donhang_tt_ma_foreign` (`tt_ma`),
  KEY `donhang_vc_ma_foreign` (`vc_ma`),
  KEY `FK4_nv_xuLy_user` (`nv_xuLy`),
  KEY `FK5_nv_giaoHang_user` (`nv_giaoHang`),
  CONSTRAINT `FK4_nv_xuLy_user` FOREIGN KEY (`nv_xuLy`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK5_nv_giaoHang_user` FOREIGN KEY (`nv_giaoHang`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `donhang_kh_ma_foreign` FOREIGN KEY (`kh_ma`) REFERENCES `khachhang` (`kh_ma`) ON UPDATE CASCADE,
  CONSTRAINT `donhang_tt_ma_foreign` FOREIGN KEY (`tt_ma`) REFERENCES `thanhtoan` (`tt_ma`) ON UPDATE CASCADE,
  CONSTRAINT `donhang_vc_ma_foreign` FOREIGN KEY (`vc_ma`) REFERENCES `vanchuyen` (`vc_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Đơn hàng # Đơn hàng';

-- Dumping data for table laravel.donhang: ~15 rows (approximately)
/*!40000 ALTER TABLE `donhang` DISABLE KEYS */;
REPLACE INTO `donhang` (`dh_ma`, `kh_ma`, `dh_thoiGianDatHang`, `dh_thoiGianNhanHang`, `dh_nguoiNhan`, `dh_diaChi`, `dh_dienThoai`, `dh_nguoiGui`, `dh_loiChuc`, `dh_daThanhToan`, `nv_xuLy`, `dh_ngayXuLy`, `nv_giaoHang`, `dh_ngayLapPhieuGiao`, `dh_ngayGiaoHang`, `dh_taoMoi`, `dh_capNhat`, `dh_trangThai`, `vc_ma`, `tt_ma`, `deleted_at`) VALUES
	(1, 1, '2020-12-05 18:18:14', '2021-01-24 09:50:44', 'dh_nguoiNhan 1', 'dh_diaChi 1', 'dh_dienT 1', 'dh_nguoiGui 1', 'dh_loiC 1', 1, 9, '2021-01-24 09:50:44', 4, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 1, 1, 2, NULL),
	(2, 2, '2020-11-21 12:13:35', '2021-01-24 09:50:44', 'dh_nguoiNhan 2', 'dh_diaChi 2', 'dh_dienT 2', 'dh_nguoiGui 2', 'dh_loiC 2', 2, 7, '2021-01-24 09:50:44', 7, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 2, 5, 2, NULL),
	(3, 3, '2020-10-31 21:25:18', '2021-01-24 09:50:44', 'dh_nguoiNhan 3', 'dh_diaChi 3', 'dh_dienT 3', 'dh_nguoiGui 3', 'dh_loiC 3', 3, 6, '2021-01-24 09:50:44', 5, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 3, 4, 2, NULL),
	(4, 4, '2021-01-23 14:26:15', '2021-01-24 09:50:44', 'dh_nguoiNhan 4', 'dh_diaChi 4', 'dh_dienT 4', 'dh_nguoiGui 4', 'dh_loiC 4', 4, 4, '2021-01-24 09:50:44', 2, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 4, 4, 2, NULL),
	(5, 5, '2020-12-07 18:36:12', '2021-01-24 09:50:44', 'dh_nguoiNhan 5', 'dh_diaChi 5', 'dh_dienT 5', 'dh_nguoiGui 5', 'dh_loiC 5', 5, 2, '2021-01-24 09:50:44', 5, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 5, 3, 2, NULL),
	(6, 6, '2021-01-17 01:36:07', '2021-01-24 09:50:44', 'dh_nguoiNhan 6', 'dh_diaChi 6', 'dh_dienT 6', 'dh_nguoiGui 6', 'dh_loiC 6', 6, 4, '2021-01-24 09:50:44', 2, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 6, 3, 1, NULL),
	(7, 7, '2020-10-26 23:11:04', '2021-01-24 09:50:44', 'dh_nguoiNhan 7', 'dh_diaChi 7', 'dh_dienT 7', 'dh_nguoiGui 7', 'dh_loiC 7', 7, 9, '2021-01-24 09:50:44', 7, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 7, 3, 1, NULL),
	(8, 8, '2021-01-01 15:58:42', '2021-01-24 09:50:44', 'dh_nguoiNhan 8', 'dh_diaChi 8', 'dh_dienT 8', 'dh_nguoiGui 8', 'dh_loiC 8', 8, 8, '2021-01-24 09:50:44', 5, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 8, 1, 2, NULL),
	(9, 9, '2020-11-09 12:30:56', '2021-01-24 09:50:44', 'dh_nguoiNhan 9', 'dh_diaChi 9', 'dh_dienT 9', 'dh_nguoiGui 9', 'dh_loiC 9', 9, 8, '2021-01-24 09:50:44', 2, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 9, 3, 2, NULL),
	(10, 10, '2021-01-23 04:11:33', '2021-01-24 09:50:44', 'dh_nguoiNhan 10', 'dh_diaChi 10', 'dh_dienT 10', 'dh_nguoiGui 10', 'dh_loiC 10', 10, 8, '2021-01-24 09:50:44', 6, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 10, 4, 1, NULL),
	(11, 11, '2020-11-26 12:26:41', '2021-01-24 09:50:44', 'dh_nguoiNhan 11', 'dh_diaChi 11', 'dh_dienT 11', 'dh_nguoiGui 11', 'dh_loiC 11', 11, 3, '2021-01-24 09:50:44', 6, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 11, 4, 1, NULL),
	(12, 12, '2020-12-22 22:36:46', '2021-01-24 09:50:44', 'dh_nguoiNhan 12', 'dh_diaChi 12', 'dh_dienT 12', 'dh_nguoiGui 12', 'dh_loiC 12', 12, 4, '2021-01-24 09:50:44', 5, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 12, 2, 1, NULL),
	(13, 13, '2020-12-27 06:24:03', '2021-01-24 09:50:44', 'dh_nguoiNhan 13', 'dh_diaChi 13', 'dh_dienT 13', 'dh_nguoiGui 13', 'dh_loiC 13', 13, 5, '2021-01-24 09:50:44', 2, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 13, 5, 1, NULL),
	(14, 14, '2020-12-29 23:21:33', '2021-01-24 09:50:44', 'dh_nguoiNhan 14', 'dh_diaChi 14', 'dh_dienT 14', 'dh_nguoiGui 14', 'dh_loiC 14', 14, 2, '2021-01-24 09:50:44', 3, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 14, 1, 1, NULL),
	(15, 15, '2020-11-17 03:49:51', '2021-01-24 09:50:44', 'dh_nguoiNhan 15', 'dh_diaChi 15', 'dh_dienT 15', 'dh_nguoiGui 15', 'dh_loiC 15', 15, 7, '2021-01-24 09:50:44', 4, '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', '2021-01-24 09:50:44', 15, 4, 2, NULL);
/*!40000 ALTER TABLE `donhang` ENABLE KEYS */;

-- Dumping structure for table laravel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table laravel.gopy
CREATE TABLE IF NOT EXISTS `gopy` (
  `gy_ma` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã góp ý',
  `gy_thoiGian` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm góp ý # Thời điểm góp ý',
  `gy_noiDung` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Góp ý # Nội dung góp ý',
  `kh_ma` bigint(20) unsigned NOT NULL COMMENT 'Khách hàng # kh_ma # kh_hoTen # Mã khách hàng',
  `sp_ma` bigint(20) unsigned NOT NULL COMMENT 'Sản phẩm # sp_ma # sp_ten # Mã sản phẩm',
  `gy_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo góp ý',
  `gy_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật góp ý gần nhất',
  `gy_trangThai` tinyint(3) unsigned NOT NULL DEFAULT 3 COMMENT 'Trạng thái # Trạng thái góp ý: 1-khóa, 2-hiển thị, 3-chờ duyệt',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`gy_ma`),
  KEY `gopy_kh_ma_foreign` (`kh_ma`),
  KEY `gopy_sp_ma_foreign` (`sp_ma`),
  CONSTRAINT `gopy_kh_ma_foreign` FOREIGN KEY (`kh_ma`) REFERENCES `khachhang` (`kh_ma`) ON UPDATE CASCADE,
  CONSTRAINT `gopy_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Góp ý # Góp ý';

-- Dumping data for table laravel.gopy: ~30 rows (approximately)
/*!40000 ALTER TABLE `gopy` DISABLE KEYS */;
REPLACE INTO `gopy` (`gy_ma`, `gy_thoiGian`, `gy_noiDung`, `kh_ma`, `sp_ma`, `gy_taoMoi`, `gy_capNhat`, `gy_trangThai`, `deleted_at`) VALUES
	(1, '2021-01-24 09:56:55', 'gy_noiD 1', 1, 1, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 2, NULL),
	(2, '2021-01-24 09:56:55', 'gy_noiD 2', 2, 2, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 2, NULL),
	(3, '2021-01-24 09:56:55', 'gy_noiD 3', 3, 3, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 2, NULL),
	(4, '2021-01-24 09:56:55', 'gy_noiD 4', 4, 4, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(5, '2021-01-24 09:56:55', 'gy_noiD 5', 5, 5, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(6, '2021-01-24 09:56:55', 'gy_noiD 6', 6, 6, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 2, NULL),
	(7, '2021-01-24 09:56:55', 'gy_noiD 7', 7, 7, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(8, '2021-01-24 09:56:55', 'gy_noiD 8', 8, 8, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(9, '2021-01-24 09:56:55', 'gy_noiD 9', 9, 9, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 2, NULL),
	(10, '2021-01-24 09:56:55', 'gy_noiD 10', 10, 10, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(11, '2021-01-24 09:56:55', 'gy_noiD 11', 11, 11, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 2, NULL),
	(12, '2021-01-24 09:56:55', 'gy_noiD 12', 12, 12, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 2, NULL),
	(13, '2021-01-24 09:56:55', 'gy_noiD 13', 13, 13, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(14, '2021-01-24 09:56:55', 'gy_noiD 14', 14, 14, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(15, '2021-01-24 09:56:55', 'gy_noiD 15', 15, 15, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(16, '2021-01-24 09:56:55', 'gy_noiD 16', 16, 16, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(17, '2021-01-24 09:56:55', 'gy_noiD 17', 17, 17, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 2, NULL),
	(18, '2021-01-24 09:56:55', 'gy_noiD 18', 18, 18, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(19, '2021-01-24 09:56:55', 'gy_noiD 19', 19, 19, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(20, '2021-01-24 09:56:55', 'gy_noiD 20', 20, 20, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 2, NULL),
	(21, '2021-01-24 09:56:55', 'gy_noiD 21', 21, 21, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 2, NULL),
	(22, '2021-01-24 09:56:55', 'gy_noiD 22', 22, 22, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(23, '2021-01-24 09:56:55', 'gy_noiD 23', 23, 23, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 2, NULL),
	(24, '2021-01-24 09:56:55', 'gy_noiD 24', 24, 24, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(25, '2021-01-24 09:56:55', 'gy_noiD 25', 25, 25, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 2, NULL),
	(26, '2021-01-24 09:56:55', 'gy_noiD 26', 26, 26, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(27, '2021-01-24 09:56:55', 'gy_noiD 27', 27, 27, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(28, '2021-01-24 09:56:55', 'gy_noiD 28', 28, 28, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL),
	(29, '2021-01-24 09:56:55', 'gy_noiD 29', 29, 29, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 2, NULL),
	(30, '2021-01-24 09:56:55', 'gy_noiD 30', 30, 30, '2021-01-24 09:56:55', '2021-01-24 09:56:55', 1, NULL);
/*!40000 ALTER TABLE `gopy` ENABLE KEYS */;

-- Dumping structure for table laravel.hinhanh
CREATE TABLE IF NOT EXISTS `hinhanh` (
  `sp_ma` bigint(20) unsigned NOT NULL COMMENT 'Sản phẩm # sp_ma # sp_ten # Mã sản phẩm',
  `ha_stt` tinyint(3) unsigned NOT NULL DEFAULT 1 COMMENT 'Số thứ tự # Số thứ tự hình ảnh của mỗi sản phẩm',
  `ha_ten` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên hình ảnh # Tên hình ảnh (không bao gồm đường dẫn)',
  `ha_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo hình ảnh',
  `ha_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật hình ảnh gần nhất',
  `ha_trangThai` tinyint(4) NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái hình ảnh: 1-khóa, 2-khả dụng',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`sp_ma`,`ha_stt`),
  CONSTRAINT `hinhanh_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Hình ảnh sản phẩm # Các hình ảnh chi tiết của sản phẩm';

-- Dumping data for table laravel.hinhanh: ~31 rows (approximately)
/*!40000 ALTER TABLE `hinhanh` DISABLE KEYS */;
REPLACE INTO `hinhanh` (`sp_ma`, `ha_stt`, `ha_ten`, `ha_taoMoi`, `ha_capNhat`, `ha_trangThai`, `deleted_at`) VALUES
	(1, 1, 'betta-1.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 1, NULL),
	(1, 31, 'betta-2.jpg', '2021-01-29 00:59:36', '2021-01-29 00:59:37', 2, NULL),
	(1, 32, 'betta-1.jpg', '2021-02-26 12:01:25', '2021-02-26 12:01:26', 1, NULL),
	(2, 2, 'betta-2.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 1, NULL),
	(3, 3, 'betta-3.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(4, 4, 'betta-4.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(5, 5, 'betta-5.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(6, 6, 'betta-6.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(7, 7, 'betta-7.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(8, 8, 'betta-8.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 1, NULL),
	(9, 9, 'betta-9.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(10, 10, 'betta-10.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(11, 11, 'betta-11.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(12, 12, 'betta-12.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(13, 13, 'betta-13.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(14, 14, 'betta-14.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(15, 15, 'betta-15.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 1, NULL),
	(16, 16, 'betta-16.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 1, NULL),
	(17, 17, 'betta-17.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(18, 18, 'betta-18.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(19, 19, 'betta-19.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 1, NULL),
	(20, 20, 'betta-20.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(21, 21, 'betta-21.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(22, 22, 'betta-22.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(23, 23, 'betta-23.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(24, 24, 'betta-24.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(25, 25, 'betta-25.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(26, 26, 'betta-26.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(27, 27, 'betta-27.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 1, NULL),
	(28, 28, 'betta-28.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 2, NULL),
	(29, 29, 'betta-29.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 1, NULL),
	(30, 30, 'betta-30.jpg', '2021-01-24 09:55:37', '2021-01-24 09:55:37', 1, NULL),
	(32, 1, 'single_blog_2.png', '2021-02-15 05:22:42', '2021-02-15 05:22:42', 2, NULL),
	(32, 2, 'single_blog_3.png', '2021-02-15 05:22:42', '2021-02-15 05:22:42', 2, NULL),
	(32, 3, 'single_blog_4.png', '2021-02-15 05:22:42', '2021-02-15 05:22:42', 2, NULL),
	(32, 4, 'single_blog_5.png', '2021-02-15 05:22:42', '2021-02-15 05:22:42', 2, NULL);
/*!40000 ALTER TABLE `hinhanh` ENABLE KEYS */;

-- Dumping structure for table laravel.hoadonle
CREATE TABLE IF NOT EXISTS `hoadonle` (
  `hdl_ma` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã hóa đơn bán lẻ',
  `hdl_nguoiMuaHang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Người mua hàng # Họ tên người mua hàng',
  `hdl_dienThoai` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Điện thoại # Điện thoại',
  `hdl_diaChi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Địa chỉ # Địa chỉ',
  `nv_lapHoaDon` bigint(20) unsigned NOT NULL DEFAULT 0 COMMENT 'Lập hóa đơn # nv_ma # nv_hoTen # Mã nhân viên (người lập hóa đơn)',
  `hdl_ngayXuatHoaDon` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm xuất # Thời điểm xuất hóa đơn',
  `dh_ma` bigint(20) unsigned NOT NULL DEFAULT 1 COMMENT 'Đơn hàng # dh_ma # dh_ma # Mã đơn hàng, 1-Không xuất hóa đơn',
  `hdl_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo hóa đơn',
  `hdl_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật hóa đơn gần nhất',
  `hdl_trangThai` tinyint(3) unsigned NOT NULL DEFAULT 1 COMMENT 'Trạng thái # Trạng thái hóa đơn: 1-lập hóa đơn, 2-xuất hóa đơn, 3-hủy',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`hdl_ma`),
  KEY `hoadonle_dh_ma_foreign` (`dh_ma`),
  KEY `FK2_nv_LapHoaDon_user` (`nv_lapHoaDon`),
  CONSTRAINT `FK2_nv_LapHoaDon_user` FOREIGN KEY (`nv_lapHoaDon`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `hoadonle_dh_ma_foreign` FOREIGN KEY (`dh_ma`) REFERENCES `donhang` (`dh_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Hóa đơn bán lẻ # Hóa đơn bán lẻ: sản phẩm, màu, số lượng, đơn giá, đơn hàng';

-- Dumping data for table laravel.hoadonle: ~3 rows (approximately)
/*!40000 ALTER TABLE `hoadonle` DISABLE KEYS */;
REPLACE INTO `hoadonle` (`hdl_ma`, `hdl_nguoiMuaHang`, `hdl_dienThoai`, `hdl_diaChi`, `nv_lapHoaDon`, `hdl_ngayXuatHoaDon`, `dh_ma`, `hdl_taoMoi`, `hdl_capNhat`, `hdl_trangThai`, `deleted_at`) VALUES
	(1, 'hdl_nguoiMuaHang 1', 'hdl_dien 1', 'hdl_diaChi 1', 4, '2021-01-24 09:53:01', 2, '2021-01-24 16:53:01', '2021-01-24 16:53:01', 1, NULL),
	(2, 'hdl_nguoiMuaHang 2', 'hdl_dien 2', 'hdl_diaChi 2', 2, '2021-01-24 09:53:01', 2, '2021-01-24 16:53:01', '2021-01-24 16:53:01', 1, NULL),
	(3, 'hdl_nguoiMuaHang 3', 'hdl_dien 3', 'hdl_diaChi 3', 3, '2021-01-24 09:53:01', 3, '2021-01-24 16:53:01', '2021-01-24 16:53:01', 1, NULL);
/*!40000 ALTER TABLE `hoadonle` ENABLE KEYS */;

-- Dumping structure for table laravel.hoadonsi
CREATE TABLE IF NOT EXISTS `hoadonsi` (
  `hds_ma` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã hóa đơn bán sỉ',
  `hds_nguoiMuaHang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Người mua hàng # Họ tên người mua hàng',
  `hds_tenDonVi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Đơn vị # Tên đơn vị',
  `hds_diaChi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Địa chỉ # Địa chỉ đơn vị',
  `hds_maSoThue` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mã số thuế # Mã số thuế đơn vị',
  `hds_soTaiKhoan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL' COMMENT 'Số tài khoản # Số tài khoản',
  `nv_lapHoaDon` bigint(20) unsigned NOT NULL DEFAULT 0 COMMENT 'Lập hóa đơn # nv_ma # nv_hoTen # Mã nhân viên (người lập hóa đơn)',
  `hds_ngayXuatHoaDon` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm xuất # Thời điểm xuất hóa đơn',
  `nv_thuTruong` bigint(20) unsigned NOT NULL DEFAULT 1 COMMENT 'Thủ trưởng # nv_ma # nv_hoTen # Mã nhân viên (thủ trưởng), 1-chưa phân công',
  `hds_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo hóa đơn',
  `hds_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật hóa đơn gần nhất',
  `hds_trangThai` tinyint(3) unsigned NOT NULL DEFAULT 1 COMMENT 'Trạng thái # Trạng thái hóa đơn: 1-lập hóa đơn, 2-xuất hóa đơn, 3-hủy',
  `dh_ma` bigint(20) unsigned NOT NULL DEFAULT 1 COMMENT 'Đơn hàng # dh_ma # dh_ma # Mã đơn hàng, 1-Không xuất hóa đơn',
  `tt_ma` tinyint(3) unsigned NOT NULL COMMENT 'Phương thức thanh toán # tt_ma # tt_ten # Mã phương thức thanh toán',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`hds_ma`),
  KEY `hoadonsi_dh_ma_foreign` (`dh_ma`),
  KEY `hoadonsi_tt_ma_foreign` (`tt_ma`),
  KEY `FK3_nv_lapHoaDon_user` (`nv_lapHoaDon`),
  KEY `FK4_nv_thuTruong_user` (`nv_thuTruong`),
  CONSTRAINT `FK3_nv_lapHoaDon_user` FOREIGN KEY (`nv_lapHoaDon`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK4_nv_thuTruong_user` FOREIGN KEY (`nv_thuTruong`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `hoadonsi_dh_ma_foreign` FOREIGN KEY (`dh_ma`) REFERENCES `donhang` (`dh_ma`) ON UPDATE CASCADE,
  CONSTRAINT `hoadonsi_tt_ma_foreign` FOREIGN KEY (`tt_ma`) REFERENCES `thanhtoan` (`tt_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Hóa đơn bán sỉ # Hóa đơn bán sỉ: sản phẩm, màu, số lượng, đơn giá, đơn hàng';

-- Dumping data for table laravel.hoadonsi: ~3 rows (approximately)
/*!40000 ALTER TABLE `hoadonsi` DISABLE KEYS */;
REPLACE INTO `hoadonsi` (`hds_ma`, `hds_nguoiMuaHang`, `hds_tenDonVi`, `hds_diaChi`, `hds_maSoThue`, `hds_soTaiKhoan`, `nv_lapHoaDon`, `hds_ngayXuatHoaDon`, `nv_thuTruong`, `hds_taoMoi`, `hds_capNhat`, `hds_trangThai`, `dh_ma`, `tt_ma`, `deleted_at`) VALUES
	(4, 'hds_nguoiMuaHang 1', 'hds_tenDonVi 1', 'hds_diaChi 1', 'hds_maSoThu 1', 'hds_soTaiKhoan 1', 8, '2021-01-24 09:50:58', 8, '2021-01-24 09:50:58', '2021-01-24 09:50:58', 2, 1, 1, NULL),
	(5, 'hds_nguoiMuaHang 2', 'hds_tenDonVi 2', 'hds_diaChi 2', 'hds_maSoThu 2', 'hds_soTaiKhoan 2', 2, '2021-01-24 09:50:58', 2, '2021-01-24 09:50:58', '2021-01-24 09:50:58', 1, 2, 2, NULL),
	(6, 'hds_nguoiMuaHang 3', 'hds_tenDonVi 3', 'hds_diaChi 3', 'hds_maSoThu 3', 'hds_soTaiKhoan 3', 3, '2021-01-24 09:50:58', 3, '2021-01-24 09:50:58', '2021-01-24 09:50:58', 1, 3, 3, NULL);
/*!40000 ALTER TABLE `hoadonsi` ENABLE KEYS */;

-- Dumping structure for table laravel.khachhang
CREATE TABLE IF NOT EXISTS `khachhang` (
  `kh_ma` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã khách hàng',
  `kh_taiKhoan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tài khoản # Tài khoản',
  `kh_matKhau` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mật khẩu # Mật khẩu',
  `kh_hoTen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Họ tên # Họ tên',
  `kh_gioiTinh` tinyint(3) unsigned NOT NULL DEFAULT 1 COMMENT 'Giới tính # Giới tính: 0-Nữ, 1-Nam, 2-Khác',
  `kh_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Email # Email',
  `kh_ngaySinh` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày sinh # Ngày sinh',
  `kh_diaChi` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL' COMMENT 'Địa chỉ # Địa chỉ',
  `kh_dienThoai` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL' COMMENT 'Điện thoại # Điện thoại',
  `kh_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo khách hàng',
  `kh_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật khách hàng gần nhất',
  `kh_trangThai` tinyint(3) unsigned NOT NULL DEFAULT 3 COMMENT 'Trạng thái # Trạng thái khách hàng: 1-khóa, 2-khả dụng, 3-chưa kích hoạt',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`kh_ma`),
  UNIQUE KEY `khachhang_kh_taikhoan_kh_email_kh_dienthoai_unique` (`kh_taiKhoan`,`kh_email`,`kh_dienThoai`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.khachhang: ~33 rows (approximately)
/*!40000 ALTER TABLE `khachhang` DISABLE KEYS */;
REPLACE INTO `khachhang` (`kh_ma`, `kh_taiKhoan`, `kh_matKhau`, `kh_hoTen`, `kh_gioiTinh`, `kh_email`, `kh_ngaySinh`, `kh_diaChi`, `kh_dienThoai`, `kh_taoMoi`, `kh_capNhat`, `kh_trangThai`, `deleted_at`) VALUES
	(1, 'ntquyen76', '$2y$10$cezvVGzFInH1FBlvYKCZ.upE9MaLKQilvhB0Eoqe7yMYmXbsSzKf6', 'Nguyễn Tú Quyên', 0, 'NGUYENTUQUYEN19760915@ymail.com', '1976-09-15 00:00:00', '152 Lê Hồng Phong, P. Trà Nóc, Q. Bình Thủy, TP. Cần Thơ', '0945497183', '2010-01-07 08:00:00', '2021-02-24 04:27:26', 2, NULL),
	(2, 'THINGA.081210', '$2y$10$vOvBbMr7cuqTmYBdGOoA0.IrRwLa6HNq3ix3J.jojbHs6m0APFAD2', 'Phạm Thị Nga', 1, 'NGATHI_PHAM_2008.12.10@outlook.com', '2008-12-10 00:00:00', '169 30/4, P. Hưng Lợi, Q. Ninh Kiều, TP. Cần Thơ', '01659987000', '2010-01-07 08:00:00', '2021-02-24 04:25:22', 2, NULL),
	(3, 'HOAN.VAN.NGUYEN.1993', '$2y$10$okfE.e4xZO9IsTt74LtFs.tHlThZ9RX2c6iMyqUdMFmHb3x2G3bS.', 'Nguyễn Văn Hoán', 1, 'Vanhoan1993@hotmail.com', '1993-08-25 00:00:00', '134 QL1, P. Ba Láng, Q. Cái Răng, TP. Cần Thơ', '01227001539', '2010-01-16 08:00:00', '2021-02-24 04:27:42', 2, NULL),
	(4, 'MINHHOANG\n.11-06-2001', '$2y$10$YRScbWqtUgkEczg8wwG//.RlnmeDHYYHKl/4iRu4Kq7meKeJRGDQi', 'Huỳnh Minh Hoàng\n', 1, 'HOANGMINH.HUYNH.20010611@yahoo.com', '2001-06-11 00:00:00', '88/77 Võ Văn Kiệt, P. Long Hòa, Q. Bình Thủy, TP. Cần Thơ', '01687411367', '2010-01-17 08:00:00', '2021-02-24 03:58:08', 2, NULL),
	(5, 'nguyen.thu_lien21_01_89', '$2y$10$CqMpRGC.dVS6fGb6ZgE3IOcmZEgbItYAEPFY6SXr0wWlai7WDcTGy', 'Nguyễn Thu Liên\n', 0, 'LIENNGUYENTHU890121@hotmail.com', '1989-01-21 00:00:00', '33/238 Võ Văn Kiệt, P. Bình Thủy , Q. Bình Thủy, TP. Cần Thơ', '01276065352', '2010-01-19 08:00:00', '2021-02-24 03:58:40', 2, NULL),
	(6, 'HUAN1978', '$2y$10$2BI.4YPhiZrc5emFMD6ybO0TSCqGHh/uuwH/12koVkhnKIZzoj9iO', 'Nguyễn Gia Huấn\n', 1, 'HUAN_NGUYENGIA01_05_1978@yahoo.com', '1978-05-01 00:00:00', '288 Võ Nguyên Giáp, P. Phú Thứ, Q. Cái Răng, TP. Cần Thơ', '0973819028', '2010-02-06 08:00:00', '2010-02-06 08:00:00', 2, NULL),
	(7, 'DUY-KINH\n_22021989', '$2y$10$fjx1.6Ywn3hSsTKPU4hHE.DkH8yk44HmCvAbG1emRLjMu3PFui/Gu', 'Võ Phan Duy Kính\n', 1, 'Vo.Phan-Duy.Kinh.22.02.1989@yahoo.com.vn', '1989-02-22 00:00:00', '70D/361 Châu Văn Liêm, P. An Lạc, Q. Ninh Kiều, TP. Cần Thơ', '01290256375', '2010-02-23 08:00:00', '2010-02-23 08:00:00', 2, NULL),
	(8, 'Long_Duc_Vu_270589', '$2y$10$QuMzMbXjFNlx0vVAF4umtOHAlOo1pmTuToBhphy8XdazurPoLk8tq', 'Vũ Ðức Long\n', 1, 'long270589@hotmail.com', '1989-05-27 00:00:00', '47/13 Tỉnh lộ 923, P. Phước Thới, Q. Ô Môn, TP. Cần Thơ', '01654765982', '2010-02-26 08:00:00', '2010-02-26 08:00:00', 2, NULL),
	(9, 'NTVQUYNH1990', '$2y$10$/yn6UnANfvB72Q266/gjA.erlj2/fbu3pHGHKjth5XR4clSX1KQx6', 'Nguyễn Thị Vân Quỳnh\n', 0, 'NguyenThiVanQuynh.1990@gmail.com', '1990-01-23 00:00:00', '168 30/4, P. An Phú, Q. Ninh Kiều, TP. Cần Thơ', '0905887148', '2010-02-26 12:58:02', '2010-02-26 12:58:02', 2, NULL),
	(10, 'Mai090818', '$2y$10$HUeM4QzBHrSA3Jziv0clS.9Y/YHz7nuul7B.lluH9EODZ0l2JC1kO', 'Ngô Nguyễn Thị Yên Mai\n', 0, 'MAI18082009@ymail.com', '2009-08-18 00:00:00', '205 Đinh Công Chánh, P. Long Tuyền , Q. Bình Thủy, TP. Cần Thơ', '0983637367', '2010-02-26 12:58:02', '2010-02-26 12:58:02', 2, NULL),
	(11, 'PHUONGTHANHNGUYEN1906', '$2y$10$vuiujiMwur4iePCfrZ78qO3SAofGY3vct7Rz0QlhoQS2gV2DB43sS', 'Nguyễn Thành Phương\n', 1, 'PHUONG-NGUYEN-THANH.92-06-19@yahoo.com', '1992-06-19 00:00:00', '53A/239 Nguyễn Thị Minh Khai, P. Xuân Khánh, Q. Ninh Kiều, TP. Cần Thơ', '01658085336', '2010-03-01 12:58:02', '2010-03-01 12:58:02', 2, NULL),
	(12, 'DACTHAI2003.04.02', '$2y$10$0GsboRDtPOZaB0fVCtFqAuJxVezeZ1SUb5vjBbjqDntn1UTlw2XXe', 'Lê Ngô Ðắc Thái\n', 1, 'ThaiDac_Ngo-Le02_04_03@gmail.com.vn', '2003-04-02 00:00:00', '330 Đặng Thanh Sử, P. Phước Thới, Q. Ô Môn, TP. Cần Thơ', '09965495401', '2010-03-20 12:58:02', '2010-03-20 12:58:02', 2, NULL),
	(13, 'Son-Mac-Nguyen.Dong.05_03_85', '$2y$10$bQkQy/7J.ddW274jYqmNrekGvJpSH2WoM9.4x1uFR1h.AC4ZimJG6', 'Mạc Nguyễn Ðông Sơn\n', 1, 'M_ND_Son850305@yahoo.com.vn', '1985-03-05 00:00:00', '318 Bùi Hữu Nghĩa, P. Long Tuyền, Q. Bình Thủy, TP. Cần Thơ', '01280784373', '2010-03-29 12:58:02', '2010-03-29 12:58:02', 2, NULL),
	(14, 'TRANGTHIBAOTRAM20021122', '$2y$10$8evRueszaFMypbrBdlQcPufUlNqOAI/HpONJOxQHj6zhfqmaNTd6u', 'Trang Thị Bảo Trâm\n', 0, 'TRAM.TRANGTHI-BAO.22.11.02@yahoo.com.vn', '2002-11-22 00:00:00', '24 QL91, P. Thới Hòa, Q. Ô Môn, TP. Cần Thơ', '01230115900', '2010-03-29 17:04:03', '2010-03-29 17:04:03', 2, NULL),
	(15, 'Kim_loan\n_94.07.25', '$2y$10$0O04tHODws649QNYTc9gL.wYPkr9GnAc17BqnreSeiDlCSCYKhMRq', 'Phan Huỳnh Kim Loan\n', 0, 'KIM-LOAN\n.25-07-94@hotmail.com', '1994-07-25 00:00:00', '8A/270 Trần Văn Hoài, P. Xuân Khánh, Q. Ninh Kiều, TP. Cần Thơ', '01204647990', '2010-03-31 17:04:03', '2010-03-31 17:04:03', 2, NULL),
	(16, 'hoanguyenhuynhthikim240783', '$2y$10$BrvVwIDJpVs6kzSM3wn3SeBDi9pWXUUJGdJka2ceXJMMczZ5ubJ6K', 'Nguyễn Huỳnh Thị Kim Hòa\n', 0, 'hoa83@ymail.com', '1983-07-24 00:00:00', '135 Lý Tự Trọng, P. An Phú, Q. Ninh Kiều, TP. Cần Thơ', '09996806688', '2010-04-05 17:04:03', '2010-04-05 17:04:03', 2, NULL),
	(17, 'HuynhHuy-20031102', '$2y$10$lLg6mndLyU8yZ2AXtGhx8eerEs5hcnwXM1.T75rknvxQ6EJM2xtsu', 'Huỳnh Huy', 1, 'Huynh.Huy_2003_11_02@gmail.com.vn', '2003-11-02 00:00:00', '366 Nguyễn An Ninh, An Lạc, Q. Ninh Kiều, TP. Cần Thơ', '01233010305', '2010-04-05 19:56:35', '2010-04-05 19:56:35', 2, NULL),
	(18, 'DUYEN-05.10.83', '$2y$10$qsjY01sEFMAfjpDivkgd3OvbR6wJX4I54IMDfI3C/pPULGD6OPfVC', 'Vũ Thị Hàm Duyên\n', 0, 'VT-H-DUYEN-1983@gmail.com', '1983-10-05 00:00:00', '384 Võ Nguyên Giáp, P. Hưng Thạnh, Q. Cái Răng, TP. Cần Thơ', '0908549959', '2010-04-28 19:56:35', '2010-04-28 19:56:35', 2, NULL),
	(19, 'Hoang.Nguyen.Tran-Si-1986', '$2y$10$Isa3i98A0Q6.OIVGuDF1oemgkpGkBPCedBebycRNvHOKU/IMJZzeS', 'Nguyễn Trần Sĩ Hoàng\n', 1, 'HOANG19860623@gmail.com', '1986-06-23 00:00:00', '101 Huỳnh Phan Hộ, P. Bình Thủy , Q. Bình Thủy, TP. Cần Thơ', '01242713621', '2010-05-19 19:56:35', '2010-05-19 19:56:35', 2, NULL),
	(20, 'dac-thai1907', '$2y$10$395MQK1BUqCJ20l0//.dJOzUIoUqQQ/qGd7jFdTJdwRBNqx9/6CZK', 'Nguyễn Phan Ðắc Thái\n', 1, 'thai02@gmail.com', '2002-07-19 00:00:00', '34 Ngô Gia Tự, P. An Hội, Q. Ninh Kiều, TP. Cần Thơ', '0938889985', '2010-05-20 00:54:37', '2010-05-20 00:54:37', 2, NULL),
	(21, 'nvthach06', '$2y$10$KOtecIdmfbBFB9vc8MdQzebFwwHGIoUeesVWgxrt5J173eYCtYjc6', 'Nguyễn Văn Thạch\n', 1, 'THACHNGUYENVAN2006@yahoo.com.vn', '2006-10-22 00:00:00', '114 Trần Phú, P. Cái Khế, Q. Ninh Kiều, TP. Cần Thơ', '0979712312', '2010-05-21 00:54:37', '2010-05-21 00:54:37', 2, NULL),
	(22, 'quochien2002', '$2y$10$w1IPsLzLaZ1ZIpN3mq49teMF7zEgQkBXG5BRQ2UPh8cnkkjAwDmZ6', 'Trần Quốc Hiền\n', 1, 'HIEN160502@gmail.com.vn', '2002-05-16 00:00:00', '393 QL1, P. Ba Láng, Q. Cái Răng, TP. Cần Thơ', '0939494660', '2010-05-21 20:18:45', '2010-05-21 20:18:45', 2, NULL),
	(23, 'trungquangtran3005', '$2y$10$TmjpyBiT9dQJLTJKXX.xeeNKJOwngqz87cYej8UhibMcVswKfpNSK', 'Trần Quang Trung\n', 1, 't.qtrung_89.05.30@ymail.com', '1989-05-30 00:00:00', '76 Hùng Vương, P. Thới Bình, Q. Ninh Kiều, TP. Cần Thơ', '01673386105', '2010-05-22 07:50:07', '2010-05-22 07:50:07', 2, NULL),
	(24, 'TamXuanNguyen91', '$2y$10$oikuTOtL0Cxy2tfwMFIWw.69XfYPhq6z2vYaW5zXvBcf1lllqooHO', 'Nguyễn Xuân Tâm\n', 0, 'TAMNGUYEN.XUAN1991@yahoo.com', '1991-09-01 00:00:00', '40 Đinh Công Chánh, P. Long Tuyền , Q. Bình Thủy, TP. Cần Thơ', '01888909678', '2010-05-27 07:50:07', '2010-05-27 07:50:07', 2, NULL),
	(25, 'Anh.82', '$2y$10$f7NF3cEh2YK0THf8s51uTeF2mfuZ5DBcnsfbkkRFs7utoq/lmMGO2', 'Phạm Thị Diệp Anh\n', 0, 'AnhDiepThi-Pham2503@yahoo.com.vn', '1982-03-25 00:00:00', '48 Nguyễn Văn Cừ, P. An Khánh, Q. Ninh Kiều, TP. Cần Thơ', '0883322477', '2010-05-27 13:20:56', '2010-05-27 13:20:56', 2, NULL),
	(26, 'Phuong19821028', '$2y$10$MbmoaxgEYtXnDJiH2dqhaO8BCzQxNm5TKZTLe.CVzuHRaq/lYjyya', 'Phạm Cao Phương', 1, 'pham-cao-phuong_1982@ymail.com', '1982-10-28 00:00:00', '56/389 QL91, P. Thới Hòa, Q. Ô Môn, TP. Cần Thơ', '0929792106', '2010-06-07 13:20:56', '2010-06-07 13:20:56', 2, NULL),
	(27, 'truongsinh\n-02', '$2y$10$pDoC2lyWgh9V1OP0W9HJf.x0Nbg80lA0q7ucQX9.L95pf8X57UbIS', 'Lê Nguyễn Trường Sinh\n', 1, 'lntsinh2002@hotmail.com', '2002-04-05 00:00:00', '25/164 30/4, P. Hưng Lợi, Q. Ninh Kiều, TP. Cần Thơ', '01648640659', '2010-07-01 13:20:56', '2010-07-01 13:20:56', 2, NULL),
	(28, 'DUYBAO-PHAN-DO1512', '$2y$10$/KGLDWaY4E3Z0CbVVLgvuuNK0hc6cjzLvlo7tDnphKt/xjpjfRW2C', 'Đỗ Phan Bảo Duy\n', 1, 'BAODUY\n_15-12-1992@yahoo.com.vn', '1992-12-15 00:00:00', '255 QL1, P. Thường Thạnh, Q. Cái Răng, TP. Cần Thơ', '01694572126', '2010-07-02 02:02:11', '2010-07-02 02:02:11', 3, NULL),
	(29, 'tamkhietnguyen19880424', '$2y$10$.yTpaYLfiF8qBWgr9n1Qj.LsWjPhplYK71kZirJt0h3FeWOnMZRoi', 'Nguyễn Khiết Tâm\n', 0, 'Tam-Khiet-Nguyen-240488@ymail.com', '1988-04-24 00:00:00', '216 Nguyễn An Ninh, An Lạc, Q. Ninh Kiều, TP. Cần Thơ', '01253159581', '2010-07-07 02:02:11', '2010-07-07 02:02:11', 3, NULL),
	(30, 'MAI-NGUYENTHIHUONG-17-11-01', '$2y$10$gBKU5p04z3vjQ3VZxgWh7e79jXMDSP2XhcqK77WiTb0iNg/n1QWnC', 'Nguyễn Thị Hương Mai\n', 0, 'Mai-Nguyen-ThiHuong-2001@outlook.com', '2001-11-17 00:00:00', '227 Hoàng Văn Thụ, P. An Cư, Q. Ninh Kiều, TP. Cần Thơ', '01296703494', '2010-07-19 02:02:11', '2010-07-19 02:02:11', 3, NULL),
	(31, 'hvlinnh', '$2y$10$t0d6v3xnFBk988wFy40FLunizMAalEkq936vvsKDkmYrjXquIoYsq', 'Hà Văn Linh', 0, 'havanlinh@havanlinh.tech', '2000-04-19 00:00:00', 'Phú Bình, Huyện Phú Tân, Tỉnh An Giang', '0342878767', '2010-07-19 02:02:11', '2021-02-24 04:28:25', 2, NULL),
	(32, 'hyihihi', '$2y$10$CqMpRGC.dVS6fGb6ZgE3IOcmZEgbItYAEPFY6SXr0wWlai7WDcTGy', 'Hà Văn Linh', 1, 'havanlinh19042000@gmail.com', '2000-02-02 00:00:00', 'sdggsdgsdgsdgg', '04533453', '2021-02-03 08:39:15', '2021-02-03 08:39:15', 2, NULL),
	(37, 'ggj', '$2y$10$CqMpRGC.dVS6fGb6ZgE3IOcmZEgbItYAEPFY6SXr0wWlai7WDcTGy', 'Hà Văn Linh', 0, 'linhfish10c1@gmail.com', '2000-02-02 00:00:00', 'etetetet', '04533453', '2021-02-03 15:59:49', '2021-02-03 15:59:49', 2, NULL),
	(38, 'hyihihi', '$2y$10$o4LEuuri.ZlFJJ6g8L3gjO52QnqMtrfAlv2mlVxffNpZ7rNEYb8Z6', 'Hà Văn Linh', 0, 'linhhalinh5@gmail.com', '2000-02-02 00:00:00', 'etetetet', '04533453', '2021-02-27 13:31:28', '2021-02-27 13:31:28', 2, NULL),
	(45, 'hyihihi', '$2y$10$Jpg9b/3LmcV2c29LNgD1wOK7UNX9v/KLWRlIVsENyvhPQKNbbRlk.', 'Hà Văn Linh', 0, 'linhhalinh5@gmail.com', '2000-02-02 00:00:00', 'sdggsdgsdgsdgg', 'NULL', '2021-02-27 13:36:45', '2021-02-27 13:36:45', 2, NULL),
	(70, 'jfjfgj', '$2y$10$1wPlset2wE1Z8BcfnJiXQOPMwC6tVkJtDb6SWuTHBy2FGrSjMreci', 'Hà Văn Linh', 0, 'linhhalinh5@gmail.com', '2000-02-02 00:00:00', 'etetetet', '0453333', '2021-02-27 13:41:23', '2021-02-27 13:41:23', 2, NULL),
	(74, 'linhhhhhh', '$2y$10$1aY16ZgUwrcVuE/gliWu.uhNR8Orq3UJ.LgUnMJhV4zqbhkl70wqi', 'Hà Văn Linh', 1, 'linhhalinh5@gmail.com', '2000-02-02 00:00:00', 'etetetet', '034287876', '2021-02-27 13:45:39', '2021-02-27 13:45:39', 2, NULL),
	(76, 'kglkklgjkl', '$2y$10$mmCNxkmohFMKpvhflV3LRuFsNUk7u5VC8rC3En1ROpbAbQshPDpF.', 'Hà Văn Linh', 1, 'linhhalinh5@gmail.com', '2000-02-02 00:00:00', 'sdggsdgsdgsdgg', '045334532', '2021-02-27 14:00:15', '2021-02-27 14:00:15', 2, NULL);
/*!40000 ALTER TABLE `khachhang` ENABLE KEYS */;

-- Dumping structure for table laravel.khuyenmai
CREATE TABLE IF NOT EXISTS `khuyenmai` (
  `km_ma` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã chương trình khuyến mãi',
  `km_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên chương trình # Tên chương trình khuyến mãi',
  `km_noiDung` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Thông tin chi tiết # Nội dung chi tiết chương trình khuyến mãi',
  `km_batDau` datetime NOT NULL COMMENT 'Thời điểm bắt đầu # Thời điểm bắt đầu khuyến mãi',
  `km_ketThuc` datetime DEFAULT NULL COMMENT 'Thời điểm kết thúc # Thời điểm kết thúc khuyến mãi',
  `km_giaTri` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '100;100' COMMENT 'Giá trị khuyến mãi # Giá trị khuyến mãi trên tổng hóa đơn (giảm tiền/giảm % tiền, giảm % vận chuyển), định dạng: tien;VanChuyen',
  `nv_nguoiLap` bigint(20) unsigned NOT NULL DEFAULT 2 COMMENT 'Lập kế hoạch # nv_ma # nv_hoTen # Mã nhân viên (người lập chương trình khuyến mãi)',
  `km_ngayLap` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm lập # Thời điểm lập kế hoạch khuyến mãi',
  `nv_kyNhan` bigint(20) unsigned NOT NULL DEFAULT 2 COMMENT 'Kế toán # nv_ma # nv_hoTen # Mã nhân viên (kế toán ký nháy), 1-chưa phân công',
  `km_ngayKyNhan` datetime DEFAULT NULL COMMENT 'Thời điểm ký nháy # Thời điểm ký nháy kế hoạch khuyến mãi',
  `nv_kyDuyet` bigint(20) unsigned NOT NULL DEFAULT 2 COMMENT 'Duyệt kế hoạch # nv_ma # nv_hoTen # Mã nhân viên (thủ kho/giám đốc), 1-chưa phân công',
  `km_ngayDuyet` datetime DEFAULT NULL COMMENT 'Thời điểm duyệt # Ngày duyệt chương trình khuyến mãi',
  `km_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo chương trình khuyến mãi',
  `km_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật chương trình khuyến mãi gần nhất',
  `km_trangThai` tinyint(3) unsigned NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái chương trình khuyến mãi: 1-ngưng khuyến mãi, 2-lập kế hoạch, 3-ký nháy, 4-duyệt kế hoạch',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`km_ma`),
  UNIQUE KEY `khuyenmai_km_ten_unique` (`km_ten`),
  KEY `FK1_nv_nguoiLap_user` (`nv_nguoiLap`),
  KEY `FK2_nv_kyNhan_user` (`nv_kyNhan`),
  KEY `FK3_nv_kyDuyet_user` (`nv_kyDuyet`),
  CONSTRAINT `FK1_nv_nguoiLap_user` FOREIGN KEY (`nv_nguoiLap`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK2_nv_kyNhan_user` FOREIGN KEY (`nv_kyNhan`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK3_nv_kyDuyet_user` FOREIGN KEY (`nv_kyDuyet`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Chương trình khuyến mãi # Chương trình khuyến mãi';

-- Dumping data for table laravel.khuyenmai: ~30 rows (approximately)
/*!40000 ALTER TABLE `khuyenmai` DISABLE KEYS */;
REPLACE INTO `khuyenmai` (`km_ma`, `km_ten`, `km_noiDung`, `km_batDau`, `km_ketThuc`, `km_giaTri`, `nv_nguoiLap`, `km_ngayLap`, `nv_kyNhan`, `km_ngayKyNhan`, `nv_kyDuyet`, `km_ngayDuyet`, `km_taoMoi`, `km_capNhat`, `km_trangThai`, `deleted_at`) VALUES
	(1, 'km_ten 1', 'km_noiD 1', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 1', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(2, 'km_ten 2', 'km_noiD 2', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 2', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(3, 'km_ten 3', 'km_noiD 3', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 3', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(4, 'km_ten 4', 'km_noiD 4', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 4', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(5, 'km_ten 5', 'km_noiD 5', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 5', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(6, 'km_ten 6', 'km_noiD 6', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 6', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(7, 'km_ten 7', 'km_noiD 7', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 7', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(8, 'km_ten 8', 'km_noiD 8', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 8', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(9, 'km_ten 9', 'km_noiD 9', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 9', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(10, 'km_ten 10', 'km_noiD 10', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 10', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(11, 'km_ten 11', 'km_noiD 11', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 11', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(12, 'km_ten 12', 'km_noiD 12', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 12', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(13, 'km_ten 13', 'km_noiD 13', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 13', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(14, 'km_ten 14', 'km_noiD 14', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 14', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(15, 'km_ten 15', 'km_noiD 15', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 15', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(16, 'km_ten 16', 'km_noiD 16', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 16', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(17, 'km_ten 17', 'km_noiD 17', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 17', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(18, 'km_ten 18', 'km_noiD 18', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 18', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(19, 'km_ten 19', 'km_noiD 19', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 19', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(20, 'km_ten 20', 'km_noiD 20', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 20', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(21, 'km_ten 21', 'km_noiD 21', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 21', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(22, 'km_ten 22', 'km_noiD 22', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 22', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(23, 'km_ten 23', 'km_noiD 23', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 23', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(24, 'km_ten 24', 'km_noiD 24', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 24', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(25, 'km_ten 25', 'km_noiD 25', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 25', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(26, 'km_ten 26', 'km_noiD 26', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 26', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(27, 'km_ten 27', 'km_noiD 27', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 27', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(28, 'km_ten 28', 'km_noiD 28', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 28', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(29, 'km_ten 29', 'km_noiD 29', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 29', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL),
	(30, 'km_ten 30', 'km_noiD 30', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 'km_giaTri 30', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', 2, '2021-01-24 09:42:47', '2021-01-24 09:42:47', '2021-01-24 09:42:47', 1, NULL);
/*!40000 ALTER TABLE `khuyenmai` ENABLE KEYS */;

-- Dumping structure for table laravel.khuyenmai_sanpham
CREATE TABLE IF NOT EXISTS `khuyenmai_sanpham` (
  `km_ma` bigint(20) unsigned NOT NULL COMMENT 'Chương trình # km_ma # km_ten # Mã chương trình khuyến mãi',
  `sp_ma` bigint(20) unsigned NOT NULL COMMENT 'Sản phẩm # sp_ma # sp_ten # Mã sản phẩm',
  `m_ma` tinyint(3) unsigned NOT NULL COMMENT 'Màu sắc # m_ma # m_ten # Mã màu sản phẩm, 1-Phối màu (đỏ, vàng, ...)',
  `kmsp_giaTri` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '100;0' COMMENT 'Giá trị khuyến mãi # Giá trị khuyến mãi (giảm tiền/giảm % tiền, số lượng), định dạng: tien;soLuong (soLuong = 0, không giới hạn số lượng)',
  `kmsp_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo khuyến mãi sản phẩm',
  `kmsp_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật khuyến mãi sản phẩm gần nhất',
  `kmsp_trangThai` tinyint(3) unsigned NOT NULL DEFAULT 1 COMMENT 'Trạng thái # Trạng thái khuyến mãi sản phẩm: 1-lập khuyến mãi sản phẩm, 2-xuất khuyến mãi sản phẩm, 3-hủy',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`km_ma`,`sp_ma`,`m_ma`),
  KEY `khuyenmai_sanpham_m_ma_foreign` (`m_ma`),
  KEY `khuyenmai_sanpham_sp_ma_foreign` (`sp_ma`),
  CONSTRAINT `khuyenmai_sanpham_km_ma_foreign` FOREIGN KEY (`km_ma`) REFERENCES `khuyenmai` (`km_ma`) ON UPDATE CASCADE,
  CONSTRAINT `khuyenmai_sanpham_m_ma_foreign` FOREIGN KEY (`m_ma`) REFERENCES `mau` (`m_ma`) ON UPDATE CASCADE,
  CONSTRAINT `khuyenmai_sanpham_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Thông tin khuyến mãi sản phẩm # Chi tiết về chương trình khuyến mãi';

-- Dumping data for table laravel.khuyenmai_sanpham: ~3 rows (approximately)
/*!40000 ALTER TABLE `khuyenmai_sanpham` DISABLE KEYS */;
REPLACE INTO `khuyenmai_sanpham` (`km_ma`, `sp_ma`, `m_ma`, `kmsp_giaTri`, `kmsp_taoMoi`, `kmsp_capNhat`, `kmsp_trangThai`, `deleted_at`) VALUES
	(1, 1, 1, 'kmsp_giaTri 1', '2021-01-24 16:44:18', '2021-01-24 16:44:18', 1, NULL),
	(2, 2, 2, 'kmsp_giaTri 2', '2021-01-24 16:44:18', '2021-01-24 16:44:18', 2, NULL),
	(3, 3, 3, 'kmsp_giaTri 3', '2021-01-24 16:44:18', '2021-01-24 16:44:18', 3, NULL);
/*!40000 ALTER TABLE `khuyenmai_sanpham` ENABLE KEYS */;

-- Dumping structure for table laravel.loai
CREATE TABLE IF NOT EXISTS `loai` (
  `l_ma` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã loại sản phẩm',
  `l_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên loại # Tên loại sản phẩm',
  `l_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo loại sản phẩm',
  `l_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật loại sản phẩm gần nhất',
  `l_trangThai` tinyint(4) NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái loại sản phẩm: 1-khóa, 2-khả dụng',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  `dm_ma` tinyint(3) unsigned NOT NULL COMMENT 'Mã danh mục',
  PRIMARY KEY (`l_ma`),
  UNIQUE KEY `loai_l_ten_unique` (`l_ten`),
  KEY `loai_dm_ma_foreign` (`dm_ma`),
  CONSTRAINT `loai_dm_ma_foreign` FOREIGN KEY (`dm_ma`) REFERENCES `danhmuc` (`dm_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.loai: ~6 rows (approximately)
/*!40000 ALTER TABLE `loai` DISABLE KEYS */;
REPLACE INTO `loai` (`l_ma`, `l_ten`, `l_taoMoi`, `l_capNhat`, `l_trangThai`, `deleted_at`, `dm_ma`) VALUES
	(1, 'Cá Betta Fancy', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, NULL, 1),
	(2, 'Cá Betta Galaxy', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, NULL, 1),
	(3, 'Cá Betta Giant', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, NULL, 1),
	(4, 'Cá Betta Halfmoon', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, NULL, 1),
	(5, 'Cá Betta Koi', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, NULL, 1),
	(6, 'Cá Betta Koi nemo', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, NULL, 1);
/*!40000 ALTER TABLE `loai` ENABLE KEYS */;

-- Dumping structure for table laravel.loyal_customers
CREATE TABLE IF NOT EXISTS `loyal_customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `loyal_customers_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.loyal_customers: ~3 rows (approximately)
/*!40000 ALTER TABLE `loyal_customers` DISABLE KEYS */;
REPLACE INTO `loyal_customers` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'lxc150896@gmail.com', NULL, '$2y$10$vJGQhEdrqK4YiQFVFtwoA.8DRDgRGwI60Rrg1JSgNikHq0ajBA142', NULL, NULL, NULL),
	(2, 'lxc@gmail.com', NULL, '$2y$10$h..977D6cNMMg3LnTAZTb.Ll3S4nPRu2ZSr.bs2DrQwv1zWhXKsIO', NULL, NULL, NULL),
	(3, 'admin@gmail.com', NULL, '$2y$10$vtUCf50mtsmNVI/g7OJFxuICiGd8UijOhmD07FTmTIMGXsMzOC9IW', NULL, NULL, NULL);
/*!40000 ALTER TABLE `loyal_customers` ENABLE KEYS */;

-- Dumping structure for table laravel.mau
CREATE TABLE IF NOT EXISTS `mau` (
  `m_ma` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã màu sản phẩm, 1-Phối màu (đỏ, vàng, ...)',
  `m_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên màu # Tên màu sản phẩm',
  `m_hexan` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo màu',
  `m_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật màu gần nhất',
  `m_trangThai` enum('KÍCH HOẠT','KHÓA') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Trạng thái # Trạng thái màu sản phẩm: 1-khóa, 2-khả dụng',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`m_ma`),
  UNIQUE KEY `mau_m_ten_unique` (`m_ten`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.mau: ~21 rows (approximately)
/*!40000 ALTER TABLE `mau` DISABLE KEYS */;
REPLACE INTO `mau` (`m_ma`, `m_ten`, `m_hexan`, `m_taoMoi`, `m_capNhat`, `m_trangThai`, `deleted_at`) VALUES
	(1, 'Phối màu', '', '2021-01-01 00:00:00', '2021-01-25 06:24:50', 'KHÓA', NULL),
	(2, 'Cam (Orange)', '#55ADA5', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KHÓA', NULL),
	(3, 'Hồng (Pink)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(4, 'Ngọc bích (SeaGreen)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(5, 'Nâu (SaddleBrown)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(6, 'Trà (Teal)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(7, 'Trắng (White)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(8, 'Tím (Purple)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(9, 'Tím cà (Orchid)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(10, 'Tím sen (Magenta)', '', '2021-01-01 00:00:00', '2021-01-24 10:27:48', 'KÍCH HOẠT', NULL),
	(11, 'Vàng (Yellow)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(12, 'Xanh da trời (SkyBlue)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(13, 'Xanh dương (Blue)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(14, 'Xanh lá (Green)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(15, 'Xanh lơ (Cyan)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(16, 'Xanh đọt chuối (Chartreuse)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(17, 'Đen (Black)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(18, 'Đỏ (Red)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(19, 'Đỏ sậm (Maroon)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(20, 'Đỏ thắm (Crimson)', '', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 'KÍCH HOẠT', NULL),
	(28, 'afafafafafs', '', '2021-01-25 06:14:23', '2021-01-25 06:22:45', 'KHÓA', '2021-01-25 06:22:45'),
	(29, 'fasff', '#4A81D4', '2021-01-25 09:29:32', '2021-02-07 15:26:42', 'KHÓA', '2021-02-07 15:26:42'),
	(30, 'fasffbx', '#4A81D4', '2021-02-15 06:29:27', '2021-02-15 06:29:33', 'KHÓA', '2021-02-15 06:29:33');
/*!40000 ALTER TABLE `mau` ENABLE KEYS */;

-- Dumping structure for table laravel.mau_sanpham
CREATE TABLE IF NOT EXISTS `mau_sanpham` (
  `sp_ma` bigint(20) unsigned NOT NULL COMMENT 'Màu sắc # m_ma # m_ten # Mã sản phẩm',
  `m_ma` tinyint(3) unsigned NOT NULL COMMENT 'Sản phẩm # sp_ma # sp_ten # Mã màu sản phẩm',
  `msp_soluong` smallint(5) unsigned NOT NULL DEFAULT 0 COMMENT 'Số lượng # Số lượng sản phẩm tương ứng với màu',
  `msp_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo màu sản phẩm',
  `msp_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật màu sản phẩm gần nhất',
  `msp_trangThai` tinyint(4) NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái màu sản phẩm: 1-khóa, 2-khả dụng',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`sp_ma`,`m_ma`),
  KEY `mau_sanpham_m_ma_foreign` (`m_ma`),
  CONSTRAINT `mau_sanpham_m_ma_foreign` FOREIGN KEY (`m_ma`) REFERENCES `mau` (`m_ma`) ON UPDATE CASCADE,
  CONSTRAINT `mau_sanpham_sp_ma_foreign` FOREIGN KEY (`sp_ma`) REFERENCES `sanpham` (`sp_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Số lượng sản phẩm theo màu # Số lượng sản phẩm tương ứng với các màu';

-- Dumping data for table laravel.mau_sanpham: ~2 rows (approximately)
/*!40000 ALTER TABLE `mau_sanpham` DISABLE KEYS */;
REPLACE INTO `mau_sanpham` (`sp_ma`, `m_ma`, `msp_soluong`, `msp_taoMoi`, `msp_capNhat`, `msp_trangThai`, `deleted_at`) VALUES
	(1, 1, 1, '2021-01-24 16:38:48', '2021-01-24 16:38:48', 2, NULL),
	(2, 2, 2, '2021-01-24 16:38:48', '2021-01-24 16:38:48', 2, NULL);
/*!40000 ALTER TABLE `mau_sanpham` ENABLE KEYS */;

-- Dumping structure for table laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.migrations: ~27 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(3, '2021_01_09_124825_create_danhmuc', 1),
	(4, '2021_01_09_132624_create_loai', 1),
	(5, '2021_01_11_064813_create_vanchuyen', 1),
	(6, '2021_01_11_065059_create_sanpham', 1),
	(7, '2021_01_11_065635_create_thanhtoan', 1),
	(8, '2021_01_11_065748_create_khachhang', 1),
	(9, '2021_01_11_065907_create_xuatxu', 1),
	(10, '2021_01_11_070328_create_mau', 1),
	(11, '2021_01_11_071600_create_chude', 1),
	(12, '2021_01_11_071931_create_quyen', 1),
	(13, '2021_01_11_073639_create_nhanvien', 1),
	(14, '2021_01_11_073905_create_nhacungcap', 1),
	(15, '2021_01_11_074111_create_hinhanh', 1),
	(16, '2021_01_12_044546_create_donhang', 1),
	(17, '2021_01_12_094906_create_mau_sanpham', 1),
	(18, '2021_01_12_095129_create_gopy', 1),
	(19, '2021_01_12_095352_create_chude_sanpham', 1),
	(20, '2021_01_12_095556_create_khuyenmai', 1),
	(21, '2021_01_12_103159_create_phieunhap', 1),
	(22, '2021_01_12_103445_create_chitietdonhang', 1),
	(23, '2021_01_12_103628_create_hoadonsi', 1),
	(24, '2021_01_12_111905_create_hoadonle', 1),
	(25, '2021_01_12_112711_create_khuyenmai_sanpham', 1),
	(26, '2021_01_12_113132_create_chitietnhap', 1),
	(27, '2021_01_12_113447_create_doanhthu_sanpham', 1),
	(28, '2014_10_12_100000_create_password_resets_table', 2),
	(29, '2021_02_16_131125_create_user_activations_table', 3),
	(30, '2021_02_16_131236_alter_users_table', 3),
	(31, '2021_02_16_135648_loyal_customers', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table laravel.nhacungcap
CREATE TABLE IF NOT EXISTS `nhacungcap` (
  `ncc_ma` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã nhà cung cấp, 1-Tự tạo',
  `ncc_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên nhà cung cấp # Tên nhà cung cấp',
  `ncc_daiDien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Đại diện # Người đại diện',
  `ncc_diaChi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Địa chỉ # Địa chỉ',
  `ncc_dienThoai` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Điện thoại # Điện thoại',
  `ncc_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Email # Email',
  `ncc_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo nhà cung cấp',
  `ncc_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật nhà cung cấp gần nhất',
  `ncc_trangThai` tinyint(4) NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái nhà cung cấp: 1-khóa, 2-khả dụng',
  `xx_ma` smallint(5) unsigned NOT NULL COMMENT 'Xuất xứ # xx_ma # xx_ten # Mã xuất xứ',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`ncc_ma`),
  UNIQUE KEY `nhacungcap_ncc_ten_ncc_dienthoai_ncc_email_unique` (`ncc_ten`,`ncc_dienThoai`,`ncc_email`),
  KEY `nhacungcap_xx_ma_foreign` (`xx_ma`),
  CONSTRAINT `nhacungcap_xx_ma_foreign` FOREIGN KEY (`xx_ma`) REFERENCES `xuatxu` (`xx_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.nhacungcap: ~3 rows (approximately)
/*!40000 ALTER TABLE `nhacungcap` DISABLE KEYS */;
REPLACE INTO `nhacungcap` (`ncc_ma`, `ncc_ten`, `ncc_daiDien`, `ncc_diaChi`, `ncc_dienThoai`, `ncc_email`, `ncc_taoMoi`, `ncc_capNhat`, `ncc_trangThai`, `xx_ma`, `deleted_at`) VALUES
	(1, 'Cty TNHH TMDV Tiến Hoạt', 'Nguyễn Trần Tiến Hoạt', '162, Khóm Tân Mỹ, P. Tân Quy Đông, TP. Sa Đéc, Đồng Tháp', '01624519280', 'nguyen_tran_tien_hoat19900525@gmail.com', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, 3, NULL),
	(2, 'Cty TNHH MTV Hoa Tươi Thịnh Linh', 'Trần Cường Thịnh', '9 huyện lộ 90B, Ấp Mỹ Hòa, X. Mỹ Phong, TP. Mỹ Tho, Tiền Giang', '01881133779', 'tran_cuong-thinh.19731227@gmail.com', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 6, NULL),
	(3, 'DNTN Tuyết Thiên', 'Trần Nguyễn Giang Thiên', '44, X. Vị Thanh, H. Vị Thủy, Hậu Giang', '01278672080', 'tran-nguyen-giang.thien-19790919@gmail.com', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, 7, NULL);
/*!40000 ALTER TABLE `nhacungcap` ENABLE KEYS */;

-- Dumping structure for table laravel.nhanvien
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `nv_ma` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã nhân viên, 1-chưa phân công',
  `nv_taiKhoan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tài khoản # Tài khoản',
  `nv_matKhau` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Mật khẩu # Mật khẩu',
  `nv_hoTen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Họ tên # Họ tên',
  `nv_gioiTinh` tinyint(3) unsigned NOT NULL DEFAULT 1 COMMENT 'Giới tính # Giới tính: 0-Nữ, 1-Nam, 2-Khác',
  `nv_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Email # Email',
  `nv_ngaySinh` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày sinh # Ngày sinh',
  `nv_diaChi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Địa chỉ # Địa chỉ',
  `nv_dienThoai` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Điện thoại # Điện thoại',
  `nv_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo nhân viên',
  `nv_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật nhân viên gần nhất',
  `nv_trangThai` tinyint(4) NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái nhân viên: 1-khóa, 2-khả dụng',
  `q_ma` tinyint(3) unsigned NOT NULL COMMENT 'Quyền # Mã quyền: 1-Giám đốc, 2-Quản trị, 3-Quản lý kho, 4-Kế toán, 5-Nhân viên bán hàng, 6-Nhân viên giao hàng',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`nv_ma`),
  UNIQUE KEY `nhanvien_nv_taikhoan_nv_email_nv_dienthoai_unique` (`nv_taiKhoan`,`nv_email`,`nv_dienThoai`),
  KEY `nhanvien_q_ma_foreign` (`q_ma`),
  CONSTRAINT `nhanvien_q_ma_foreign` FOREIGN KEY (`q_ma`) REFERENCES `quyen` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.nhanvien: ~10 rows (approximately)
/*!40000 ALTER TABLE `nhanvien` DISABLE KEYS */;
REPLACE INTO `nhanvien` (`nv_ma`, `nv_taiKhoan`, `nv_matKhau`, `nv_hoTen`, `nv_gioiTinh`, `nv_email`, `nv_ngaySinh`, `nv_diaChi`, `nv_dienThoai`, `nv_taoMoi`, `nv_capNhat`, `nv_trangThai`, `q_ma`, `deleted_at`) VALUES
	(1, 'unknown', '$2y$10$nUI7/dTB4e7pb3yYB.JrM.2.N1NVjf7RmtyDVphDx.4HqZ8VT4Bo.', 'Chưa phân công', 1, 'unknown@sunshine.com', '2010-01-01 08:00:00', 'unknown', '01234567890', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, 6, NULL),
	(2, 'nkvy', '$2y$10$Ikz9bLHoEZEnC5gnhWQLnu9D0K48VO4UtQbQFlHJRaCp7MNItFbPu', 'Nguyễn Khánh Vy\n', 0, 'nkvy@gmail.com', '1979-03-13 00:00:00', '50/263 Nguyễn Văn Linh, P. Hưng Lợi, Q. Ninh Kiều, TP. Cần Thơ', '01230237619', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, 1, NULL),
	(3, 'ttlinh', '$2y$10$m/1lMgVdPZxf46nfzA1..uGbsrGN.UuuW4WRvmUeXlcfPK8bH519i', 'Trần Tùng Linh\n', 1, 'ttlinh@gmail.com', '1961-03-26 00:00:00', '57/343 CMT8, P. Thới Bình, Q. Ninh Kiều, TP. Cần Thơ', '01227757857', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, 2, NULL),
	(4, 'pvthuy', '$2y$10$6fzQ3KczI.BEp3Je3RNL3O4ETTbj/KlM5KqDvcL88NsXJBVpJgRqG', 'Phạm Vĩnh Thụy\n', 1, 'pvthuy@gmail.com', '1988-11-14 00:00:00', '225 Nguyễn Chí Thanh, P. Thới An Đông, Q. Bình Thủy, TP. Cần Thơ', '01862561363', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, 3, NULL),
	(5, 'nbtman', '$2y$10$3.oMub/pHpcShPwW5H6BresSIGcJuXjRbEtjFbeg5cX3TMc6feFy2', 'Nguyễn Bùi Thanh Mẫn\n', 0, 'nbtman@gmail.com', '1998-05-16 00:00:00', '197/396 Nguyễn Thị Minh Khai, P. Xuân Khánh, Q. Ninh Kiều, TP. Cần Thơ', '0891112368', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, 4, NULL),
	(6, 'ptcnhi', '$2y$10$Oyq8lOFlC9IQunlUZ8Xf7Ot.8pQGu1bBAXYZJY5UGgtRMcpPQhaqe', 'Phạm Thị Cẩm Nhi\n', 0, 'ptcnhi@gmail.com', '1995-01-13 00:00:00', '248 Trần Văn Khéo, P. Cái Khế, Q. Ninh Kiều, TP. Cần Thơ', '01683530301', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, 5, NULL),
	(7, 'tnhmien', '$2y$10$BIITbRxE44DbS7pS0.WrAud/XIP4S/DohLyOn3bn8GARH1y0ItpAS', 'Thạch Nguyễn Hải Miên\n', 0, 'tnhmien@gmail.com', '1990-05-22 00:00:00', '191 Huỳnh Phan Hộ, P. Trà An, Q. Bình Thủy, TP. Cần Thơ', '0967533694', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, 5, NULL),
	(8, 'ntchung', '$2y$10$DHN7uFxLwkbT/BzToEb.zeX7g.RKG4lJ1loPXs4PFuzGr1Y1znjg6', 'Nguyễn Thị Chung\n', 0, 'ntchung@gmail.com', '1984-12-19 00:00:00', '149 QL91, P. Long Hưng, Q. Ô Môn, TP. Cần Thơ', '01229164470', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, 6, NULL),
	(9, 'nhlam', '$2y$10$jkN9HlQ5T5o5YQWJlew8Ze0onQ0weyhyN36NsAclO52UERBacVSGW', 'Nguyễn Hương Lâm\n', 0, 'nhlam@gmail.com', '2001-02-19 00:00:00', '83B/7 Nguyễn Trãi, P. Cái Khế, Q. Ninh Kiều, TP. Cần Thơ', '09929728971', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, 6, NULL),
	(100, 'admin', '$2y$10$MMtvM1OcpIlLKpqdNKWbZ.fwsgDBT08aXjogcwSbzablW4A4naQh2', 'Quản trị hệ thống', 1, 'havanlinh@havanlinh.tech', '2010-01-01 08:00:00', 'Phú Bình, Huyện Phú Tân, Tỉnh An Giang', '0342878767', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, 2, NULL);
/*!40000 ALTER TABLE `nhanvien` ENABLE KEYS */;

-- Dumping structure for table laravel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
REPLACE INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('havanlinh19042000@gmail.com', '$2y$10$JkCGAkto0nNIj/BDT51kNevdYHAe2dlAWYeevfvsr7GvpPGYcj12y', '2021-02-16 13:05:22');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table laravel.phieunhap
CREATE TABLE IF NOT EXISTS `phieunhap` (
  `pn_ma` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã phiếu nhập',
  `pn_nguoiGiao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Người giao hàng # Người giao hàng',
  `pn_soHoaDon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Số hóa đơn # Số hóa đơn',
  `pn_ngayXuatHoaDon` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày xuất hóa đơn # Ngày xuất hóa đơn',
  `pn_ghiChu` text COLLATE utf8mb4_unicode_ci DEFAULT 'ghi chú' COMMENT 'Ghi chú # Ghi chú phiếu nhập',
  `nv_nguoiLapPhieu` bigint(20) unsigned NOT NULL DEFAULT 0 COMMENT 'Lập phiếu # Mã nhân viên (người lập phiếu nhập)',
  `pn_ngayLapPhieu` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm lập phiếu # Thời điểm lập phiếu nhập kho',
  `nv_keToan` bigint(20) unsigned NOT NULL DEFAULT 1 COMMENT 'Xác nhận # Mã nhân viên (kế toán trưởng), 1-chưa phân công',
  `pn_ngayXacNhan` datetime DEFAULT NULL COMMENT 'Thời điểm xác nhận # Thời điểm xác nhận thanh toán phiếu nhập kho',
  `nv_thuKho` bigint(20) unsigned NOT NULL DEFAULT 1 COMMENT 'Thủ kho # Mã nhân viên (thủ kho/giám đốc), 1-chưa phân công',
  `pn_ngayNhapKho` datetime DEFAULT NULL COMMENT 'Ngày nhập kho # Ngày nhập kho',
  `pn_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo phiếu nhập',
  `pn_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật phiếu nhập gần nhất',
  `pn_trangThai` tinyint(4) NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái phiếu nhập sản phẩm: 1-khóa, 2-lập phiếu, 3-thanh toán, 4-nhập kho',
  `ncc_ma` smallint(5) unsigned NOT NULL COMMENT 'Nhà cung cấp # ncc_ma # ncc_ten # Mã nhà cung cấp',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`pn_ma`),
  UNIQUE KEY `phieunhap_pn_sohoadon_unique` (`pn_soHoaDon`),
  KEY `phieunhap_ncc_ma_foreign` (`ncc_ma`),
  KEY `phieunhap_nv_ketoan_foreign` (`nv_keToan`),
  KEY `phieunhap_nv_nguoilapphieu_foreign` (`nv_nguoiLapPhieu`),
  KEY `phieunhap_nv_thukho_foreign` (`nv_thuKho`),
  CONSTRAINT `phieunhap_ncc_ma_foreign` FOREIGN KEY (`ncc_ma`) REFERENCES `nhacungcap` (`ncc_ma`) ON UPDATE CASCADE,
  CONSTRAINT `phieunhap_nv_ketoan_foreign` FOREIGN KEY (`nv_keToan`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `phieunhap_nv_nguoilapphieu_foreign` FOREIGN KEY (`nv_nguoiLapPhieu`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `phieunhap_nv_thukho_foreign` FOREIGN KEY (`nv_thuKho`) REFERENCES `users` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Phiếu nhập # Phiếu nhập';

-- Dumping data for table laravel.phieunhap: ~9 rows (approximately)
/*!40000 ALTER TABLE `phieunhap` DISABLE KEYS */;
REPLACE INTO `phieunhap` (`pn_ma`, `pn_nguoiGiao`, `pn_soHoaDon`, `pn_ngayXuatHoaDon`, `pn_ghiChu`, `nv_nguoiLapPhieu`, `pn_ngayLapPhieu`, `nv_keToan`, `pn_ngayXacNhan`, `nv_thuKho`, `pn_ngayNhapKho`, `pn_taoMoi`, `pn_capNhat`, `pn_trangThai`, `ncc_ma`, `deleted_at`) VALUES
	(1, 'pn_nguoiGiao 1', 'pn_soHoaDon 1', '2021-01-24 09:37:18', 'pn_ghi 1', 7, '2021-01-24 09:37:18', 5, '2021-01-24 09:37:18', 2, '2021-01-24 09:37:18', '2021-01-24 09:37:18', '2021-02-25 14:30:10', 1, 1, '2021-02-25 14:30:10'),
	(2, 'pn_nguoiGiao 2', 'pn_soHoaDon 2', '2021-01-24 09:37:18', 'pn_ghi 2', 7, '2021-01-24 09:37:18', 5, '2021-01-24 09:37:18', 2, '2021-01-24 09:37:18', '2021-01-24 09:37:18', '2021-01-24 09:37:18', 2, 2, NULL),
	(3, 'pn_nguoiGiao 3', 'pn_soHoaDon 3', '2021-01-24 09:37:18', 'pn_ghi 3', 7, '2021-01-24 09:37:18', 5, '2021-01-24 09:37:18', 2, '2021-01-24 09:37:18', '2021-01-24 09:37:18', '2021-01-24 09:37:18', 1, 3, NULL),
	(7, 'fdgg', 'dfgfd', '2021-02-24 21:24:23', 'fdgd', 9, '2021-02-24 21:24:37', 8, '2021-02-24 21:24:42', 9, '2021-02-24 21:24:48', '2021-02-24 21:24:49', '2021-02-24 14:26:32', 1, 1, NULL),
	(8, 'fgdfg', '22', '2021-02-17 00:00:00', NULL, 7, '2021-02-18 00:00:00', 5, '2021-02-16 00:00:00', 7, '2021-02-19 00:00:00', '2021-02-25 05:01:23', '2021-02-25 14:17:45', 1, 1, NULL),
	(9, 'fgdfg', '22e', '2021-02-25 00:00:00', 'fdgdgdgg', 2, '2021-02-25 00:00:00', 2, '2021-02-24 00:00:00', 2, '2021-02-10 00:00:00', '2021-02-25 05:13:45', '2021-02-25 14:16:59', 1, 1, NULL),
	(10, 'fgdfg', 'ee', '2021-02-16 00:00:00', NULL, 2, '2021-02-24 00:00:00', 2, '2021-02-18 00:00:00', 2, '2021-02-25 00:00:00', '2021-02-25 05:15:37', '2021-02-25 14:15:18', 1, 1, NULL),
	(11, 'dgdgdgg', '22dg', '2021-02-24 00:00:00', 'gdgđgdgdggggdgdg', 8, '2021-02-18 00:00:00', 2, '2021-02-25 00:00:00', 2, '2021-02-24 00:00:00', '2021-02-25 05:19:06', '2021-02-25 14:31:13', 1, 1, '2021-02-25 14:31:13'),
	(12, 'fgdfg', 'gg', '2021-02-25 00:00:00', 'dsgssgsg', 4, '2021-02-25 00:00:00', 2, '2021-02-18 00:00:00', 2, '2021-02-17 00:00:00', '2021-02-25 06:11:34', '2021-02-25 14:30:33', 1, 1, '2021-02-25 14:30:33');
/*!40000 ALTER TABLE `phieunhap` ENABLE KEYS */;

-- Dumping structure for table laravel.quyen
CREATE TABLE IF NOT EXISTS `quyen` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã quyền: 1-Giám đốc, 2-Quản trị, 3-Quản lý kho, 4-Kế toán, 5-Nhân viên bán hàng, 6-Nhân viên giao hàng',
  `q_ten` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên quyền # Tên quyền',
  `q_dienGiai` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Diễn giải # Diễn giải về quyền',
  `q_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo quyền',
  `q_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật quyền gần nhất',
  `q_trangThai` tinyint(4) NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái quyền: 1-khóa, 2-khả dụng',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`id`),
  UNIQUE KEY `quyen_q_ten_unique` (`q_ten`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.quyen: ~7 rows (approximately)
/*!40000 ALTER TABLE `quyen` DISABLE KEYS */;
REPLACE INTO `quyen` (`id`, `q_ten`, `q_dienGiai`, `q_taoMoi`, `q_capNhat`, `q_trangThai`, `deleted_at`) VALUES
	(1, 'Giám đốc', 'Duyệt chương trình khuyến mãi, ký tên phiếu nhập, ký tên hóa đơn, ...', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, NULL),
	(2, 'Quản trị', 'Quản lý người dùng, khách hàng, sản phẩm, ...', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 1, NULL),
	(3, 'Quản lý kho', 'Quản lý sản phẩm, đối tác, nhập kho, ...', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, NULL),
	(4, 'Kế toán', 'Xuất phiếu thu, ký tên hóa đơn, ...', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, NULL),
	(5, 'Nhân viên kinh doanh', 'Lập kế hoạch khuyến mãi, lập hóa đơn, xử lý đơn hàng, ...', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, NULL),
	(6, 'Nhân viên giao hàng', 'Lập phiếu giao hàng, giao sản phẩm, ...', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 2, NULL),
	(7, 'test111111', 'yyyyye', '2021-02-24 03:29:29', '2021-02-24 03:32:30', 1, '2021-02-24 03:32:30');
/*!40000 ALTER TABLE `quyen` ENABLE KEYS */;

-- Dumping structure for table laravel.quyen_user
CREATE TABLE IF NOT EXISTS `quyen_user` (
  `user_id` bigint(20) unsigned NOT NULL,
  `quyen_id` tinyint(3) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`quyen_id`,`user_id`),
  KEY `quyen_id` (`quyen_id`),
  KEY `quyen_user_user_id_foreign` (`user_id`),
  CONSTRAINT `quyen_user_quyen_id_foreign` FOREIGN KEY (`quyen_id`) REFERENCES `quyen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `quyen_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.quyen_user: ~8 rows (approximately)
/*!40000 ALTER TABLE `quyen_user` DISABLE KEYS */;
REPLACE INTO `quyen_user` (`user_id`, `quyen_id`) VALUES
	(3, 1),
	(4, 2),
	(2, 3),
	(5, 4),
	(7, 5),
	(8, 5),
	(9, 5),
	(6, 6);
/*!40000 ALTER TABLE `quyen_user` ENABLE KEYS */;

-- Dumping structure for table laravel.sanpham
CREATE TABLE IF NOT EXISTS `sanpham` (
  `sp_ma` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã sản phẩm',
  `sp_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên sản phẩm # Tên sản phẩm',
  `sp_giaGoc` int(10) unsigned NOT NULL DEFAULT 0 COMMENT 'Giá gốc # Giá gốc của sản phẩm',
  `sp_giaBan` int(10) unsigned NOT NULL DEFAULT 0 COMMENT 'Giá bán # Giá bán hiện tại của sản phẩm',
  `sp_hinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Hình đại diện # Hình đại diện của sản phẩm',
  `sp_thongTin` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Thông tin # Thông tin về sản phẩm',
  `sp_danhGia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0;0;0;0;0' COMMENT 'Chất lượng # Chất lượng của sản phẩm (1-5 sao), định dạng: 1;2;3;4;5',
  `sp_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo sản phẩm',
  `sp_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật sản phẩm gần nhất',
  `sp_trangThai` tinyint(4) NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái sản phẩm: 1-khóa, 2-khả dụng',
  `l_ma` tinyint(3) unsigned NOT NULL COMMENT 'Loại sản phẩm # l_ma # l_ten # Mã loại sản phẩm',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`sp_ma`),
  UNIQUE KEY `sanpham_sp_ten_unique` (`sp_ten`),
  KEY `sanpham_l_ma_foreign` (`l_ma`),
  CONSTRAINT `sanpham_l_ma_foreign` FOREIGN KEY (`l_ma`) REFERENCES `loai` (`l_ma`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.sanpham: ~31 rows (approximately)
/*!40000 ALTER TABLE `sanpham` DISABLE KEYS */;
REPLACE INTO `sanpham` (`sp_ma`, `sp_ten`, `sp_giaGoc`, `sp_giaBan`, `sp_hinh`, `sp_thongTin`, `sp_danhGia`, `sp_taoMoi`, `sp_capNhat`, `sp_trangThai`, `l_ma`, `deleted_at`) VALUES
	(1, 'sp_ten 1', 1, 1, 'betta-1.jpg', 'sp_thong 1', 'sp_danhGia 1', '2021-01-01 00:00:00', '2021-02-11 12:22:52', 2, 1, '2021-02-11 12:22:52'),
	(2, 'sp_ten 2', 2, 2, 'betta-2.jpg', 'sp_thong 2', 'sp_danhGia 2', '2021-01-01 00:00:00', '2021-02-11 13:52:05', 2, 1, '2021-02-11 13:52:05'),
	(3, 'sp_ten 3', 3, 3, 'betta-3.jpg', 'sp_thong 3', 'sp_danhGia 3', '2021-01-01 00:00:00', '2021-02-11 13:52:33', 2, 1, '2021-02-11 13:52:33'),
	(4, 'sp_ten 4', 4, 4, 'betta-4.jpg', 'sp_thong 4', 'sp_danhGia 4', '2021-01-01 00:00:00', '2021-02-11 13:52:38', 2, 1, '2021-02-11 13:52:38'),
	(5, 'sp_ten 5', 5, 5, 'betta-5.jpg', 'sp_thong 5', 'sp_danhGia 5', '2021-01-01 00:00:00', '2021-02-11 13:53:14', 2, 1, '2021-02-11 13:53:14'),
	(6, 'sp_ten 6', 6, 6, 'betta-6.jpg', 'sp_thong 6', 'sp_danhGia 6', '2021-01-01 00:00:00', '2021-02-11 13:53:33', 2, 1, '2021-02-11 13:53:33'),
	(7, 'sp_ten 7', 7, 7, 'betta-7.jpg', 'sp_thong 7', 'sp_danhGia 7', '2021-01-01 00:00:00', '2021-02-11 11:51:16', 2, 2, NULL),
	(8, 'sp_ten 8', 999, 1000, 'betta-8.jpg', 'sp_thong 8', 'sp_danhGia 8', '2021-01-01 00:00:00', '2021-02-12 13:30:20', 2, 2, NULL),
	(9, 'sp_ten 9', 9, 9, 'betta-9.jpg', 'sp_thong 9', 'sp_danhGia 9', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 2, NULL),
	(10, 'sp_ten 10', 10, 10, 'betta-10.jpg', 'sp_thong 10', 'sp_danhGia 10', '2021-01-01 00:00:00', '2021-02-11 12:21:12', 2, 2, NULL),
	(11, 'sp_ten 11', 11, 11, 'betta-11.jpg', 'sp_thong 11', 'sp_danhGia 11', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 2, NULL),
	(12, 'sp_ten 12', 12, 12, 'betta-12.jpg', 'sp_thong 12', 'sp_danhGia 12', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 3, NULL),
	(13, 'sp_ten 13', 13, 13, 'betta-13.jpg', 'sp_thong 13', 'sp_danhGia 13', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 3, NULL),
	(14, 'sp_ten 14', 14, 14, 'betta-14.jpg', 'sp_thong 14', 'sp_danhGia 14', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 4, NULL),
	(15, 'sp_ten 15', 15, 15, 'betta-15.jpg', 'sp_thong 15', 'sp_danhGia 15', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 4, NULL),
	(16, 'sp_ten 16', 16, 16, 'betta-16.jpg', 'sp_thong 16', 'sp_danhGia 16', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 4, NULL),
	(17, 'sp_ten 17', 17, 17, 'betta-17.jpg', 'sp_thong 17', 'sp_danhGia 17', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 4, NULL),
	(18, 'sp_ten 18', 18, 18, 'betta-18.jpg', 'sp_thong 18', 'sp_danhGia 18', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 4, NULL),
	(19, 'sp_ten 19', 19, 19, 'betta-19.jpg', 'sp_thong 19', 'sp_danhGia 19', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 4, NULL),
	(20, 'sp_ten 20', 20, 20, 'betta-20.jpg', 'sp_thong 20', 'sp_danhGia 20', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 4, NULL),
	(21, 'sp_ten 21', 21, 21, 'betta-21.jpg', 'sp_thong 21', 'sp_danhGia 21', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 4, NULL),
	(22, 'sp_ten 22', 22, 22, 'betta-22.jpg', 'sp_thong 22', 'sp_danhGia 22', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 5, NULL),
	(23, 'sp_ten 23', 23, 23, 'betta-23.jpg', 'sp_thong 23', 'sp_danhGia 23', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 5, NULL),
	(24, 'sp_ten 24', 24, 24, 'betta-24.jpg', 'sp_thong 24', 'sp_danhGia 24', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, 5, NULL),
	(25, 'sp_ten 25', 25, 25, 'betta-25.jpg', 'sp_thong 25', 'sp_danhGia 25', '2021-01-01 00:00:00', '2021-02-11 12:13:34', 1, 5, NULL),
	(26, 'sp_ten 26', 26, 26, 'betta-26.jpg', 'sp_thong 26', 'sp_danhGia 26', '2021-01-01 00:00:00', '2021-02-11 12:09:49', 1, 5, NULL),
	(27, 'sp_ten 27', 27, 27, 'betta-27.jpg', 'sp_thong 27', 'sp_danhGia 27', '2021-01-01 00:00:00', '2021-02-11 12:02:16', 1, 6, NULL),
	(28, 'sp_ten 28', 28, 28, 'betta-28.jpg', 'sp_thong 28', 'sp_danhGia 28', '2021-01-01 00:00:00', '2021-02-11 12:00:02', 1, 6, NULL),
	(29, 'sp_ten 29', 29, 29, 'betta-29.jpg', 'sp_thong 29', 'sp_danhGia 29', '2021-01-01 00:00:00', '2021-02-11 11:59:47', 1, 6, NULL),
	(30, 'sp_ten 30', 30, 30, 'betta-30.jpg', 'sp_thong 30', 'sp_danhGia 30', '2021-01-01 00:00:00', '2021-02-11 11:57:45', 1, 6, '2021-02-11 11:57:45'),
	(32, 'hsshhhhhh', 50000, 60000, 'nhu.jpg', 'sggsdhfdfhggf', 'fjgfjjfjf', '2021-02-15 04:40:21', '2021-02-21 01:39:55', 1, 1, '2021-02-21 01:39:55');
/*!40000 ALTER TABLE `sanpham` ENABLE KEYS */;

-- Dumping structure for table laravel.thanhtoan
CREATE TABLE IF NOT EXISTS `thanhtoan` (
  `tt_ma` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã phương thức thanh toán',
  `tt_ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên phương thức # Tên phương thức thanh toán',
  `tt_dienGiai` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Thông tin # Thông tin về phương thức thanh toán',
  `tt_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo phương thức thanh toán',
  `tt_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật phương thức thanh toán gần nhất',
  `tt_trangThai` tinyint(3) unsigned NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái phương thức thanh toán: 1-khóa, 2-hiển thị',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`tt_ma`),
  UNIQUE KEY `thanhtoan_tt_ten_unique` (`tt_ten`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.thanhtoan: ~4 rows (approximately)
/*!40000 ALTER TABLE `thanhtoan` DISABLE KEYS */;
REPLACE INTO `thanhtoan` (`tt_ma`, `tt_ten`, `tt_dienGiai`, `tt_taoMoi`, `tt_capNhat`, `tt_trangThai`, `deleted_at`) VALUES
	(1, 'Tiền mặt', 'Quý khách thanh toán trực tiếp tại cửa hàng', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 1, NULL),
	(2, 'Thanh toán khi nhận hàng', 'Nhân viên của chúng tôi sẽ liên lạc với Quý khách để nhận thông tin về địa chỉ và thời gian giao hàng. Nhân viên của chúng tôi sẽ đến giao hàng và nhận tiền sau khi Quý khách đã nhận và kiểm tra hàng.', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 1, NULL),
	(3, 'Chuyển khoản', '<div style=\'text-align: justify\'>Quý khách có thể đến bất kì Phòng giao dịch ngân hàng, ATM hoặc sử dụng tính năng Internet Banking để chuyển tiền vào một trong các tài khoản sau:</div><div style=\'text-align: center\'><img src=\'public/template/images/info/atm.png\'/></div><div style=\'text-align: justify; text-style: italic; margin-left: 20px\'><b>Lưu ý:</b> Sau khi thanh toán, Quý khách cần thông báo lại cho chúng tôi thông tin chuyển khoản của Quý khách bao gồm: Tên người chuyển và số điện thoại hoặc nội dung chuyển khoản để chúng tôi kiểm tra thông tin.</div><div style=\'text-align: center\'>HOTLINE HỖ TRỢ THANH TOÁN: 0342.878.767</div>', '2010-01-01 08:00:00', '2010-01-01 08:00:00', 1, NULL),
	(4, 'test11111', 'ststststst', '2021-02-24 02:54:42', '2021-02-24 03:18:36', 1, '2021-02-24 03:18:36');
/*!40000 ALTER TABLE `thanhtoan` ENABLE KEYS */;

-- Dumping structure for table laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` enum('M','F','O') COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.users: ~8 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `username`, `genre`, `birthday`, `phone`, `address`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `active`) VALUES
	(2, 'Quản lý kho', 'Quản lý kho', 'F', '2000-11-01', '056486777', 'Vĩnh Long', 'qlk@gmail.com', NULL, '$2y$10$LgIHZ2nIfc2e7TJPdqB18ewhXh3XqjIrD8lBHTxm3P4Arolyio9fK', '1mqt7X2MtvDrQm0bDesXQ60hmFuBIqQHIE1YY1j5lQw8pwvZwSCGVY9khWrk', '2021-02-15 16:19:33', '2021-02-18 15:29:37', NULL, 1),
	(3, 'Giám đốc', 'Giám đốc', 'M', '0000-00-00', NULL, 'An Giang', 'gd@gmail.com', NULL, '$2y$10$RlBqoWuQhNqEKd.wmTf3b.SgaDLYgsjZiqVurpNCzwY04iSEhsSWu', NULL, '2021-02-15 16:26:25', '2021-02-18 15:12:29', NULL, 1),
	(4, 'Quản trị', 'Quản trị', 'M', '0000-00-00', NULL, 'An Giang', 'qt@gmail.com', NULL, '$2y$10$yqHUNXeZv1skTWCVIisA9.MrLRdCZkp.i6ipnIb12g9hsef.p8UZq', NULL, '2021-02-17 08:41:51', '2021-02-18 15:11:50', NULL, 1),
	(5, 'Kế toán', 'Kế toán', 'M', '0000-00-00', NULL, 'Bạc Liêu', 'kt@gmail.com', NULL, '$2y$10$VQX/ZRjUq2TSUDd.SwANaeH68DFw.stNG0rxXoZBdIb6WoTObDMX.', NULL, '2021-02-18 13:58:18', '2021-02-18 15:11:30', NULL, 1),
	(6, 'Nhân viên giao hàng', 'Nhân viên giao hàng', 'M', '0000-00-00', NULL, 'Cần Thơ', 'nvgh@gmail.com', NULL, '$2y$10$QuP1mr4XkBdy0Zl2Uz7FQuO3gLalCviiFkbJmUtMl0v/GNgjcRJzK', NULL, '2021-02-18 15:07:21', '2021-02-18 15:11:10', NULL, 1),
	(7, 'Nhân Viên Kinh doanh', 'Nhân Viên Kinh doanh', 'M', '0000-00-00', NULL, 'Kiên Giang', 'nvkd@gmail.com', NULL, '$2y$10$XzEJ/4dSa5uAFiI9GcJcYu/S0M1UhAKfc5fnY9CpFkQou4wZhheFe', NULL, '2021-02-18 15:09:08', '2021-02-18 15:09:08', NULL, 0),
	(8, 'Hà Văn Linh', 'Hà Văn Linh', 'M', '2000-11-01', '0342878766', 'An Giang', 'linhfish10c1@gmail.com', NULL, '$2y$10$7H3QI5U/yH2gu6XaSyS.pO8BlK43z9ESp30hnoc8kYg6zNGCKKCEO', NULL, '2021-02-24 07:33:00', '2021-02-24 07:33:00', NULL, 0),
	(9, 'Hà Văn Linh', 'Fish', 'F', '1992-03-04', '0342878767', 'An Giang', 'linhhalinh5@gmail.com', NULL, '$2y$10$x/y.GONBfabN8AfGbsmCje0OJmgXNSENkrccn9iLX7O3XxJsHrjim', NULL, '2021-02-24 07:46:33', '2021-02-24 07:51:47', NULL, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table laravel.user_activations
CREATE TABLE IF NOT EXISTS `user_activations` (
  `user_id` int(10) unsigned NOT NULL,
  `activation_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `user_activations_activation_code_index` (`activation_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.user_activations: ~0 rows (approximately)
/*!40000 ALTER TABLE `user_activations` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_activations` ENABLE KEYS */;

-- Dumping structure for table laravel.vanchuyen
CREATE TABLE IF NOT EXISTS `vanchuyen` (
  `vc_ma` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã dịch vụ giao hàng',
  `vc_ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tên dịch vụ # tên dịch vụ giao hàng',
  `vc_chiPhi` float NOT NULL DEFAULT 0 COMMENT 'Phí giao hàng # Phí giao hàng',
  `vc_dienGiai` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Thông tin # thông tin dịch vụ giao hàng',
  `vc_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo dịch vụ giao hàng',
  `vc_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật dịch vụ giao hàng gần nhất',
  `vc_trangThai` tinyint(4) NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái dịch vụ giao hàng: 1-khóa, 2-khả dụng',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`vc_ma`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.vanchuyen: ~6 rows (approximately)
/*!40000 ALTER TABLE `vanchuyen` DISABLE KEYS */;
REPLACE INTO `vanchuyen` (`vc_ma`, `vc_ten`, `vc_chiPhi`, `vc_dienGiai`, `vc_taoMoi`, `vc_capNhat`, `vc_trangThai`, `deleted_at`) VALUES
	(1, 'Miễn phí', 0, 'Nhận hàng trực tiếp tại cửa hàng.', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, NULL),
	(2, 'Miễn phí (trong vòng 24h)', 0, 'Chỉ áp dụng tại nội ô Tp. Cần Thơ và đơn hàng được nhận trước ngày gửi ít nhất là 2 ngày.', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, NULL),
	(3, 'Ưu tiên (trong vòng 8h)', 30000, 'Chỉ áp dụng tại nội ô Tp. Cần Thơ', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, NULL),
	(4, 'Miễn phí (vận chuyển thường)', 0, 'Áp dụng cho các tỉnh thành. Quý khách sẽ thanh toán phí vận chuyển của bưu điện.', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, NULL),
	(5, 'Miễn phí (vận chuyển nhanh)', 0, 'Áp dụng cho các tỉnh thành. Quý khách sẽ thanh toán phí vận chuyển của bưu điện.', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, NULL),
	(6, 'test11111', 7770, 'rhffh', '2021-02-24 02:39:50', '2021-02-24 02:43:45', 1, '2021-02-24 02:43:45');
/*!40000 ALTER TABLE `vanchuyen` ENABLE KEYS */;

-- Dumping structure for table laravel.xuatxu
CREATE TABLE IF NOT EXISTS `xuatxu` (
  `xx_ma` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Mã xuất xứ',
  `xx_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Xuất xứ # Xuất xứ của sản phẩm',
  `xx_taoMoi` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm tạo # Thời điểm đầu tiên tạo xuất xứ',
  `xx_capNhat` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Thời điểm cập nhật # Thời điểm cập nhật xuất xứ gần nhất',
  `xx_trangThai` tinyint(4) NOT NULL DEFAULT 2 COMMENT 'Trạng thái # Trạng thái xuất xứ: 1-khóa, 2-khả dụng',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'Xóa mềm',
  PRIMARY KEY (`xx_ma`),
  UNIQUE KEY `xuatxu_xx_ten_unique` (`xx_ten`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel.xuatxu: ~9 rows (approximately)
/*!40000 ALTER TABLE `xuatxu` DISABLE KEYS */;
REPLACE INTO `xuatxu` (`xx_ma`, `xx_ten`, `xx_taoMoi`, `xx_capNhat`, `xx_trangThai`, `deleted_at`) VALUES
	(1, 'Cái Mơn, Bến Tre', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, NULL),
	(2, 'Mỹ Phong,  Mỹ Tho', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, NULL),
	(3, 'Phú Bình, An Giang', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, NULL),
	(4, 'Phước Định, Vĩnh Long', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, NULL),
	(5, 'Tân Quy Đông, Sa Đéc', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 1, NULL),
	(6, 'Vị Thanh, Hậu Giang', '2021-01-01 00:00:00', '2021-01-01 00:00:00', 2, NULL),
	(7, 'Đà Lạt', '2021-01-01 00:00:00', '2021-02-24 02:22:31', 1, NULL),
	(8, 'test', '2021-02-24 02:19:14', '2021-02-24 02:19:18', 1, '2021-02-24 02:19:18'),
	(9, 'test11', '2021-02-24 02:23:37', '2021-02-24 02:23:37', 1, NULL);
/*!40000 ALTER TABLE `xuatxu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
