-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 09:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-pondok`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `image` varchar(254) NOT NULL,
  `caption` varchar(254) NOT NULL,
  `id_komentar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `image`, `caption`, `id_komentar`) VALUES
(1, 'assets/images/galeri/1.jpg', 'Perpisahan 2029', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `kelas` varchar(254) NOT NULL,
  `wali` varchar(254) NOT NULL,
  `semester` int(11) NOT NULL,
  `tahun_ajaran` varchar(254) NOT NULL,
  `image` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `kelas`, `wali`, `semester`, `tahun_ajaran`, `image`) VALUES
(1, 'VII A', 'Yazid Sada', 1, '2019-2021', 'assets/images/jadwal/vii.jpg'),
(2, 'VIII A', 'Deni', 1, '2020-2021', 'assets/images/jadwal/vii.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(254) NOT NULL,
  `gambar` varchar(254) NOT NULL,
  `isi` text NOT NULL,
  `status` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `gambar`, `isi`, `status`) VALUES
(1, 'Peringatan Sumpah Pemuda', 'assets/images/kegiatan/2.jpg', 'Peringatan sumpah pemuda adalah', 'Baru'),
(2, 'Hari Merdeka ', 'assets/images/kegiatan/keg.png', '17 Agustus 1945 hari kemerdekaan indonesia raua', 'Baru');

-- --------------------------------------------------------

--
-- Table structure for table `kriitik`
--

CREATE TABLE `kriitik` (
  `id` int(11) NOT NULL,
  `id_user` varchar(254) NOT NULL,
  `kritik` varchar(254) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriitik`
--

INSERT INTO `kriitik` (`id`, `id_user`, `kritik`, `saran`) VALUES
(1, '0', 'Bagus', 'Mantul Tingkatkan lagi');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(254) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jabatan` varchar(254) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `j_kelamin` varchar(10) NOT NULL,
  `telp` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `name`, `image`, `pendidikan`, `jabatan`, `tempat_lahir`, `tgl_lahir`, `j_kelamin`, `telp`, `email`, `status`) VALUES
(1, 715401005, 'Supardi S.Si', '', 'S1', 'Pembina Voly Boll', 'Banjarmasin', '1991-08-16', 'Laku-Laki', 877155830, 'Akuaja@gmail.com', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(254) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `image`, `level`) VALUES
(1, 'Administrator', '', 'admin', '$2y$12$6Esi83o3EiU/mj3VWFJKEe0eeROkF8N73bjyppTkFhLZPlTGA76aG', 'assets/smp.png', 1),
(2, 'Irfan Arisandi', 'Teknik Informatika', 'irfan', '$2y$12$6Esi83o3EiU/mj3VWFJKEe0eeROkF8N73bjyppTkFhLZPlTGA76aG', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriitik`
--
ALTER TABLE `kriitik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kriitik`
--
ALTER TABLE `kriitik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
