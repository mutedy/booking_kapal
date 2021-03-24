-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 08:54 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text,
  `email` varchar(50) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `verify_at` datetime DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `foto_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `alamat`, `email`, `token`, `password`, `no_telp`, `created_at`, `updated_at`, `verify_at`, `jenis_kelamin`, `foto_path`) VALUES
(3, 'Didik Mulyadi Amd.', '           Jakarta          ', 'didikmulyadi10@gmail.com', '123', '202cb962ac59075b964b07152d234b70', '089123111111111', '2019-07-13 10:46:33', '2019-07-13 10:46:33', '2019-07-21 06:46:04', 'p', '15629927043profile.jpg'),
(7, 'Ahmad Mutedi', '  Tanjung pasir', 'mutedy00@gmail.com', '190722181542', 'ba668e1ca2460fa93441ce32823249b0', '08986524161', '2019-07-22 18:15:45', '2019-07-22 18:15:45', '2019-07-22 18:15:45', 'p', '15640295217profile.jpg'),
(11, 'Faishal', NULL, 'faishal.syafii@gmail.com', '190725165521', '25d55ad283aa400af464c76d713c07ad', '08986524161', '2019-07-25 16:55:25', '2019-07-25 16:55:25', '2019-07-25 16:55:25', NULL, NULL),
(12, 'Daman', NULL, 'hurrybaihaqi@gmail.com', '190726233744', '313d15c3aa3b478d9bfabb56e68dd294', '081387922349', '2019-07-26 23:37:48', '2019-07-26 23:37:48', '2019-07-26 23:37:48', NULL, NULL),
(13, 'Unang safei', NULL, 'onlineimpor388@gmail.com', '190726235720', '862c4e543ad4e7ae7716327148973453', '089603826267', '2019-07-26 23:57:23', '2019-07-26 23:57:23', '2019-07-26 23:57:23', NULL, NULL),
(14, 'Ahmad mutedi', NULL, 'mutedymaher@hotmail.com', '190727125803', 'ba668e1ca2460fa93441ce32823249b0', '08986524161', '2019-07-27 12:58:07', '2019-07-27 12:58:07', '2019-07-27 06:01:13', NULL, NULL),
(15, 'Cantik', NULL, 'anbar.afifah07@gmail.com', '190727161540', 'ee54742a64ac6be74c68382ddca6d929', '081236757299', '2019-07-27 16:15:43', '2019-07-27 16:15:43', '2019-07-27 09:17:42', NULL, NULL),
(16, 'Mutedi', NULL, '1012muted@gmail.com', '190727163653', 'ba668e1ca2460fa93441ce32823249b0', '08986524156', '2019-07-27 16:36:57', '2019-07-27 16:36:57', '2019-07-27 09:41:23', NULL, NULL),
(17, 'Erick', NULL, 'erickrets19@gmail.com', '190802224302', '1fc1c2f9c23da304c90021291c0be020', '6281317021383', '2019-08-02 22:43:06', '2019-08-02 22:43:06', NULL, NULL, NULL),
(18, 'Erick', NULL, 'erickrets19@gmail.com', '190802224411', '1fc1c2f9c23da304c90021291c0be020', '6281317021383', '2019-08-02 22:44:14', '2019-08-02 22:44:14', NULL, NULL, NULL),
(19, 'tedi', NULL, 'ahmadmut3108@nusamandiri.ac.id', '190814132732', 'ba668e1ca2460fa93441ce32823249b0', '08986524161', '2019-08-14 13:27:35', '2019-08-14 13:27:35', '2019-08-14 06:32:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_perahu`
--

CREATE TABLE `order_perahu` (
  `pemesanan_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `perahu_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `verified_at` datetime DEFAULT NULL,
  `booking_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_status` int(11) NOT NULL DEFAULT '0',
  `bukti_pembayaran_path` text NOT NULL,
  `uploaded_at` datetime DEFAULT NULL,
  `biaya` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_perahu`
--

INSERT INTO `order_perahu` (`pemesanan_id`, `customer_id`, `perahu_id`, `created_at`, `verified_at`, `booking_at`, `order_status`, `bukti_pembayaran_path`, `uploaded_at`, `biaya`) VALUES
(16, 7, 2, '2019-07-22 18:18:17', '2019-07-22 18:20:12', '2019-07-22 00:00:00', 4, '1563794342profile.jpg', '2019-07-22 11:19:02', 90058),
(17, 7, 1, '2019-07-22 19:01:01', NULL, '2019-07-24 00:00:00', 3, '', NULL, 9034),
(18, 7, 1, '2019-07-24 19:05:21', '2019-07-25 17:11:36', '2019-07-26 00:00:00', 4, '1564030474profile.jpg', '2019-07-25 04:54:39', 9054),
(19, 11, 1, '2019-07-25 16:59:47', '2019-07-25 17:02:05', '2019-07-26 00:00:00', 4, '1564048851profile.jpg', '2019-07-25 10:00:51', 9085),
(20, 12, 1, '2019-07-26 23:48:59', NULL, '0000-00-00 00:00:00', 3, '', NULL, 9106),
(21, 12, 1, '2019-07-26 23:56:18', '2019-07-26 23:59:11', '2019-07-26 00:00:00', 4, '1564160210profile.jpg', '2019-07-26 16:56:50', 9065),
(22, 13, 1, '2019-07-26 23:57:56', '2019-07-26 23:59:35', '0000-00-00 00:00:00', 4, '1564160324profile.jpg', '2019-07-26 16:58:44', 9105),
(23, 7, 1, '2019-07-27 13:21:41', '2019-07-27 13:22:26', '2019-07-28 00:00:00', 2, '1564208514profile.jpg', '2019-07-27 06:22:00', 9068),
(24, 7, 2, '2019-07-27 14:15:56', '2019-07-27 14:16:29', '2019-07-27 00:00:00', 2, '1564211769profile.jpg', '2019-07-27 07:16:09', 90093),
(25, 7, 3, '2019-07-27 14:19:06', '2019-07-27 14:19:32', '2019-07-28 00:00:00', 2, '1564211958profile.jpg', '2019-07-27 07:19:18', 90043),
(26, 7, 1, '2019-07-27 16:11:58', NULL, '2019-07-31 00:00:00', 3, '', NULL, 9088),
(27, 15, 3, '2019-07-27 16:18:34', '2019-07-27 16:24:16', '2019-08-01 00:00:00', 4, '1564219284profile.jpg', '2019-07-27 09:21:24', 90089),
(28, 7, 1, '2019-07-28 01:34:09', NULL, '2019-07-29 00:00:00', 3, '', NULL, 9024),
(29, 7, 1, '2019-07-28 01:52:07', NULL, '2019-07-30 00:00:00', 3, '', NULL, 9022),
(30, 7, 1, '2019-07-28 01:59:27', NULL, '2019-07-31 00:00:00', 3, '', NULL, 9042),
(31, 7, 2, '2019-07-28 02:08:35', NULL, '2019-07-30 00:00:00', 3, '', NULL, 90060),
(32, 7, 1, '2019-07-28 18:13:09', NULL, '2019-07-31 00:00:00', 0, '', NULL, 9041),
(33, 7, 1, '2019-07-29 12:36:01', NULL, '0000-00-00 00:00:00', 0, '', NULL, 700027),
(34, 7, 1, '2019-07-29 12:36:41', NULL, '2019-07-29 00:00:00', 3, '', NULL, 700067),
(35, 7, 1, '2019-07-31 09:58:36', NULL, '2019-07-31 00:00:00', 1, '1565540792bukti.jpg', '2019-08-11 16:26:34', 700059),
(36, 19, 1, '2019-08-14 13:32:55', '2019-08-14 13:40:08', '2019-08-15 00:00:00', 4, '1565764723bukti.jpg', '2019-08-14 06:38:44', 700106);

-- --------------------------------------------------------

--
-- Table structure for table `perahu`
--

CREATE TABLE `perahu` (
  `perahu_id` int(11) NOT NULL,
  `nama_perahu` varchar(100) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `foto_path` varchar(100) DEFAULT NULL,
  `no_perahu` varchar(50) NOT NULL,
  `spesifikasi_perahu` text NOT NULL,
  `tahun` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `harga` double DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perahu`
--

INSERT INTO `perahu` (`perahu_id`, `nama_perahu`, `nama_pemilik`, `foto_path`, `no_perahu`, `spesifikasi_perahu`, `tahun`, `kapasitas`, `harga`, `created_at`) VALUES
(1, 'KM. TIGA BERLIAN', 'S A L E', 'tiga.jpg', '102/be', 'Untuk Memancing\r\nmax 20 orang.\r\nAlamat Pemilik : Tj. Pasir RT001/002 Desa tanjung pasir kec. teluknaga kab tangerang', 2005, 20, 700000, '0000-00-00 00:00:00'),
(2, 'SRI JAYA MULYA', 'ARSALI', 'dua.jpg', 'BTN 02 No.041', 'Untuk Wisata Pulau Pari\r\nMax 20 orang\r\nAlamat Pemilik : Tj.Pasir RT04/01 Desa Tanjung Pasir Kec. Teluknaga, Kab. Tangerang', 2017, 20, 800000, '0000-00-00 00:00:00'),
(3, 'Jos perahu Josss', 'Mutedy', '1562351271kapal.jpg', '123213', 'asdasd', 2018, 1, 90009, '0000-00-00 00:00:00'),
(4, 'Joss jos Perahu', 'Mutedy cute', '1562351467logo_html.png', '111', 'waw mantapsss', 2018, 1, 900091, '0000-00-00 00:00:00'),
(5, 'Perahu enak" JOSSSSS', 'Mutedy', '1562351548background_laprop.jpeg', '123213', 'wawws', 2018, 1, 90009, '0000-00-00 00:00:00'),
(6, 'Joss jos Perahua', 'Mutedy', '156235164220190608_072803_0000.png', '123213', '1qdasdasd', 2018, 1, 9000, '0000-00-00 00:00:00'),
(7, 'Perahu enak', 'Mutedy', '1562351271kapal.jpg', '111', 'mantap jos, ena"', 2018, 1, 9000, '0000-00-00 00:00:00'),
(8, 'Perahu enak" JOSSSSS', 'Mutedy cute', '1562351271kapal.jpg', '111', 'asdasdasdasd asdak kopqweq ', 2018, 1, 90009, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `order_perahu`
--
ALTER TABLE `order_perahu`
  ADD PRIMARY KEY (`pemesanan_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `perahu_id` (`perahu_id`);

--
-- Indexes for table `perahu`
--
ALTER TABLE `perahu`
  ADD PRIMARY KEY (`perahu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `order_perahu`
--
ALTER TABLE `order_perahu`
  MODIFY `pemesanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `perahu`
--
ALTER TABLE `perahu`
  MODIFY `perahu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
