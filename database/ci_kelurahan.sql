-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 11:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_kelurahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, '1234', '1234@gmail.com', 'default.jpg', '$2y$10$fU3xAgk0i6zMoe6WrDDeyOG3lfVvJ295TQPJu5iXvKgD2HZVVP/rW', 1, 1, 1715404860),
(2, 'Hajaja', 'hahaja1029@gmail.com', 'default.jpg', '$2y$10$EgQxnGLxLlCSV2XqLTRhTu1RHJ6DgxGVVFkUD3WDqrqa0O8oA3FKi', 2, 1, 1715408088),
(3, 'Hahaja', 'trantib@gmail.com', 'default.jpg', '$2y$10$/X4qYRxb91hyLFMvM2wjBOWQ.7weIxUyum9pcmloDPFLFOevXsb2q', 2, 1, 1716962608),
(4, 'Test', 'kehsos@gmail.com', 'default.jpg', '$2y$10$dpiZzG510OyINQLysJVpu.Xl3s2tHzup6rT5AnJFoYsVPam8pC2Ia', 3, 1, 1716976152),
(5, 'Pemerintahan', 'pemerintahan@gmail.com', 'default.jpg', '$2y$10$OGdIqF29.3Qs..mXT/P6tuU0G25GQHivOrbETMvRy/qvpf/l9wsAq', 4, 1, 1716976185);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(11, 2, 3),
(13, 1, 3),
(14, 1, 2),
(15, 3, 2),
(16, 3, 3),
(17, 4, 2),
(18, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_surat`
--

CREATE TABLE `user_access_surat` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `surat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_surat`
--

INSERT INTO `user_access_surat` (`id`, `role_id`, `surat_id`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 2, 4),
(5, 2, 5),
(6, 3, 6),
(7, 3, 7),
(8, 3, 8),
(9, 3, 9),
(10, 3, 10),
(11, 3, 11),
(12, 3, 12),
(13, 3, 13),
(14, 4, 14),
(15, 4, 15),
(16, 4, 16),
(17, 4, 17),
(18, 4, 18);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Surat'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Trantib'),
(3, 'Kehsos'),
(4, 'Pemerintahan');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 3, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 3, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(5, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(6, 3, 'Ubah Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(7, 2, 'Cetak Surat', 'surat', 'far fa-fw fa-envelope', 1),
(8, 2, 'Arsip', 'surat/arsip', 'fas fa-fw fa-envelope-open-text', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_surat`
--

CREATE TABLE `user_surat` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `url` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_surat`
--

INSERT INTO `user_surat` (`id`, `jenis`, `url`) VALUES
(1, 'Surat Keterangan Catatan Kepolisian', NULL),
(2, 'Surat Izin Keramaian', NULL),
(3, 'Surat Izin Tempat Usaha', NULL),
(4, 'Surat Izin Domisili Usaha', NULL),
(5, 'Surat Izin Mendirikan Bangunan', NULL),
(6, 'Surat Keterangan Tidak Mampu', NULL),
(7, 'Surat Keterangan Usaha', NULL),
(8, 'Surat Keterangan Janda/Duda', NULL),
(9, 'Surat Keterangan Belum Memiliki Rumah', NULL),
(10, 'Surat Izin Nikah', NULL),
(11, 'Surat Keterangan Belum Menikah', NULL),
(12, 'Surat Keterangan Cerai', NULL),
(13, 'Surat Keterangan Penghasilan', NULL),
(14, 'Surat Keterangan Domisili Penduduk', NULL),
(15, 'Surat Keterangan Kematian', NULL),
(16, 'Surat Keterangan Ahli Waris', NULL),
(17, 'Surat Keterangan Beda Nama', NULL),
(18, 'Surat Pernyataan Bebas Sangketa', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_surat`
--
ALTER TABLE `user_access_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_surat`
--
ALTER TABLE `user_surat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_access_surat`
--
ALTER TABLE `user_access_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_surat`
--
ALTER TABLE `user_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
