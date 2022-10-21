-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2022 at 08:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekpkk`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id_agama` int(255) NOT NULL,
  `nama_agama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Konghucu'),
(7, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(255) NOT NULL,
  `nip` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_kelamin` int(255) NOT NULL,
  `id_agama` int(255) NOT NULL,
  `id_mapel` int(255) NOT NULL,
  `id_kelas` int(255) NOT NULL,
  `id_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `tempat`, `tgl_lahir`, `id_kelamin`, `id_agama`, `id_mapel`, `id_kelas`, `id_status`) VALUES
(2, 1112, 'Raditya', 'Jember', '2022-10-09', 1, 1, 3, 2, 1),
(3, 1111, 'Firmansyah', 'Jember', '2022-10-09', 1, 1, 1, 1, 1),
(4, 1113, 'Zulfikri', 'Surabaya', '2022-10-10', 1, 1, 5, 3, 1),
(6, 1114, 'Dita', 'Banyuwangi', '2022-10-11', 2, 1, 2, 4, 1),
(7, 1115, 'Teguh', 'Malang', '2022-10-11', 1, 1, 6, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(255) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Satpam'),
(2, 'Kebersihan'),
(3, 'Tata Usaha'),
(4, 'Guru'),
(5, 'Wakasek'),
(6, 'Kepsek');

-- --------------------------------------------------------

--
-- Table structure for table `kelamin`
--

CREATE TABLE `kelamin` (
  `id_kelamin` int(255) NOT NULL,
  `nama_kelamin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelamin`
--

INSERT INTO `kelamin` (`id_kelamin`, `nama_kelamin`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan'),
(3, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(255) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'VII A'),
(2, 'VII B'),
(3, 'VII C'),
(4, 'VIII A'),
(5, 'VIII B'),
(6, 'VIII C'),
(7, 'IX A'),
(8, 'IX B'),
(9, 'IX C');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(255) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'PAI'),
(2, 'Matematika'),
(3, 'Bahasa Indonesia'),
(4, 'Bahasa Inggris'),
(5, 'Penjaskes'),
(6, 'IPA'),
(7, 'PPKn'),
(8, 'Seni Budaya'),
(9, 'Bahasa Daerah');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_kelamin` int(255) NOT NULL,
  `id_agama` int(255) NOT NULL,
  `id_jabatan` int(255) NOT NULL,
  `id_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `tempat`, `tgl_lahir`, `pendidikan`, `alamat`, `id_kelamin`, `id_agama`, `id_jabatan`, `id_status`) VALUES
(1, '1111', 'david', 'Jember', '2022-10-20', 'SMA', 'Jl. Mangga no.93 Jember', 1, 2, 1, 7),
(2, '1112', 'Didin', 'Malang', '2022-10-21', 'SMP', 'Jl.Mawar no.99', 1, 5, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(255) NOT NULL,
  `nis` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_kelamin` int(255) NOT NULL,
  `id_agama` int(255) NOT NULL,
  `id_kelas` int(255) NOT NULL,
  `id_status` int(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `tempat`, `alamat`, `tgl_lahir`, `id_kelamin`, `id_agama`, `id_kelas`, `id_status`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`) VALUES
(2, 1112, 'Dimas', 'Jember', 'Jl.Gajah Madah no 7', '2022-10-09', 1, 1, 2, 5, 'Joko', 'Siti', 'Wiraswasta', 'Ibu rumah tangga'),
(3, 1111, 'Aldi', 'Jember', 'Jl. Supratman no.99 Jember', '2022-10-09', 1, 1, 1, 2, 'Budi', 'Budi', 'Dokter', 'Ibu rumah tangga'),
(4, 1113, 'Putri', 'Jember', 'Jl.Ciputat no 18', '2022-10-10', 2, 1, 3, 2, 'Danu', 'Silvi', 'Petani', 'Petani'),
(6, 1114, 'Ajeng', 'Jember', 'Jl.Kihajar Dewantara no.9', '2022-10-11', 2, 1, 4, 2, 'Sofyan', 'Yuli', 'Pedagang', 'Pedagang'),
(7, 1115, 'Genta', 'Jember', 'Jl.A Yani no.76', '2022-10-11', 1, 2, 5, 2, 'Wahyu', 'Ratna', 'PNS', 'PNS'),
(8, 1116, 'Bintang', 'Jember', 'Jl. S.Parman, Sumbersari', '2010-06-08', 1, 1, 7, 2, 'Budi', 'Linda', 'Wiraswasta', 'Ibu rumah tangga');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(255) NOT NULL,
  `nama_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama_status`) VALUES
(1, 'Mengajar'),
(2, 'Siswa'),
(3, 'Pensiun'),
(4, 'Lulus'),
(5, 'Keluar'),
(6, 'Dikeluarkan'),
(7, 'Bekerja'),
(8, 'Magang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `avatar` varchar(128) DEFAULT NULL,
  `role` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `avatar`, `role`) VALUES
(8, 'admin', '$2y$10$CQSev1bF8/5GvMLm.sVYt.LOiWrm2eez92rM25LrFRMPLZxboEZ6m', 'admin', 'cc2acc1ef1092ff70dcb0f3a800e370e.jpg', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`,`nip`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kelamin`
--
ALTER TABLE `kelamin`
  ADD PRIMARY KEY (`id_kelamin`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`,`nama_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`,`nama_mapel`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`,`nip`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`,`nis`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
