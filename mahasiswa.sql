-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2022 pada 09.58
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mhs`
--

CREATE TABLE `data_mhs` (
  `nim` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `fakultas` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mhs`
--

INSERT INTO `data_mhs` (`nim`, `nama`, `email`, `jurusan`, `fakultas`, `gambar`) VALUES
(701210197, 'M. Nuris Fadilla', 'm@gmail.com', 'sistem informasi', 'saintek', '773-IMG_9056.JPG'),
(701210039, 'Andre Syahyevi', 'andre@gmail.com', 'sistem informasi', 'saintek', '500-20220615_120954.jpg'),
(701210113, 'Hilmansyah Ega Nasution', 'ega@gmail.com', 'sistem informasi', 'saintek', '42-20220615_121308.jpg'),
(701210040, 'firmansyah alfarisi', 'firmann@gmail.com', 'sistem informasi', 'saintek', '992-20220605_072212.jpg'),
(701210034, 'badaruddin', 'Udin@gmail.com', 'sistem informasi', 'saintek', '498-20220921_142013.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
