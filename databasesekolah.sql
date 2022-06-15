-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 05:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasesekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absen`
--

CREATE TABLE `tbl_absen` (
  `kd_absen` varchar(16) NOT NULL,
  `nm_bulan` varchar(20) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  `jml_hadir` int(11) NOT NULL,
  `alfa` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `sakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_absen`
--

INSERT INTO `tbl_absen` (`kd_absen`, `nm_bulan`, `nis`, `nm_siswa`, `jml_hadir`, `alfa`, `izin`, `sakit`) VALUES
('B1', 'Januari', '181011400406', 'Dicky Chandra', 20, 0, 0, 0),
('B1', 'Januari', '181011400551', 'supidan zam zam', 20, 0, 0, 0),
('B2', 'Februari', '181011400406', 'Dicky Chandra', 19, 0, 1, 0),
('B2', 'Februari', '181011400551', 'supidan zam zam', 19, 0, 0, 0),
('B3', 'Maret', '181011400551', 'supidan zam zam', 20, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(33) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`, `nama`) VALUES
('supidan', '12345', 'supidan zam zam'),
('user1', 'user1', 'zamzam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `nip` varchar(16) NOT NULL,
  `nm_guru` varchar(50) NOT NULL,
  `tmp_lahir_guru` varchar(50) NOT NULL,
  `tgl_lahir_guru` date NOT NULL,
  `jkel_guru` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(12) NOT NULL,
  `kd_mapel` varchar(12) NOT NULL,
  `nm_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`nip`, `nm_guru`, `tmp_lahir_guru`, `tgl_lahir_guru`, `jkel_guru`, `alamat`, `telp`, `kd_mapel`, `nm_mapel`) VALUES
('11111', 'Yudha', 'Bogor', '1999-05-18', 'Laki-Laki', 'Parung Bogor', '0895', '001', 'Jaringan Komputer'),
('22222', 'Fira', 'Bogor', '2000-09-16', 'Perempuan', 'Ciseeng Bogor', '0895', '004', 'Kalkulus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kd_kelas` varchar(12) NOT NULL,
  `nm_kelas` varchar(15) NOT NULL,
  `jml_siswa` int(11) NOT NULL,
  `thn_ajaran` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nm_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kd_kelas`, `nm_kelas`, `jml_siswa`, `thn_ajaran`, `nip`, `nm_guru`) VALUES
('08TPLP001', 'R001', 30, 2022, '11111', 'Yudha'),
('08TPLP002', 'R002', 20, 2022, '22222', 'Fira');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `kd_mapel` varchar(12) NOT NULL,
  `nm_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`kd_mapel`, `nm_mapel`) VALUES
('001', 'Jaringan Komputer'),
('002', 'Statistika'),
('003', 'Bahasa Inggris'),
('004', 'Kalkulus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `kd_nilai` varchar(12) NOT NULL,
  `nis` varchar(12) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  `kd_mapel` varchar(12) NOT NULL,
  `nm_mapel` varchar(50) NOT NULL,
  `uts_sem_ganjil` varchar(6) NOT NULL,
  `uas_sem_ganjil` varchar(6) NOT NULL,
  `uts_sem_genap` varchar(6) NOT NULL,
  `uas_sem_genap` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`kd_nilai`, `nis`, `nm_siswa`, `kd_mapel`, `nm_mapel`, `uts_sem_ganjil`, `uas_sem_ganjil`, `uts_sem_genap`, `uas_sem_genap`) VALUES
('N01', '181011400406', 'Dicky Chandra', '001', 'Jaringan Komputer', '80', '79', '85', '87'),
('N01', '181011400551', 'supidan zam zam', '001', 'Jaringan Komputer', '85', '85', '85', '85'),
('N02', '181011400406', 'Dicky Chandra', '004', 'Kalkulus', '80', '80', '80', '80'),
('N02', '181011400551', 'supidan zam zam', '002', 'Statistika', '87', '88', '89', '90');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` varchar(12) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(25) NOT NULL,
  `jkel` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(12) NOT NULL,
  `nm_wali` varchar(50) NOT NULL,
  `kd_kelas` varchar(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nm_siswa`, `tmp_lahir`, `tgl_lahir`, `jkel`, `alamat`, `telp`, `nm_wali`, `kd_kelas`, `username`, `password`) VALUES
('181011400551', 'supidan zam zam', 'tangerang', '2000-02-07', 'laki-laki', 'ampera', '0895', 'ade', '08TPLP001', 'zam', '123'),
('181011400406', 'Dicky Chandra', 'Depok', '1998-04-15', 'Laki-Laki', 'Limo Depok', '0878', 'Budi', '08TPLP002', 'diki', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
  ADD PRIMARY KEY (`kd_absen`,`nis`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`nip`,`kd_mapel`),
  ADD KEY `kd_mapel` (`kd_mapel`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kd_kelas`,`nip`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`kd_nilai`,`nis`,`kd_mapel`),
  ADD KEY `kd_mapel` (`kd_mapel`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`kd_kelas`,`nis`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD CONSTRAINT `tbl_guru_ibfk_1` FOREIGN KEY (`kd_mapel`) REFERENCES `tbl_mapel` (`kd_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD CONSTRAINT `tbl_kelas_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tbl_guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD CONSTRAINT `tbl_siswa_ibfk_1` FOREIGN KEY (`kd_kelas`) REFERENCES `tbl_kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
