-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2018 pada 12.00
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

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
-- Struktur dari tabel `mahasiswaa`
--

CREATE TABLE `mahasiswaa` (
  `nama` varchar(35) NOT NULL,
  `nim` int(10) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `hobi` varchar(10) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswaa`
--

INSERT INTO `mahasiswaa` (`nama`, `nim`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`, `alamat`) VALUES
('dia', 67867, 'D3 MI 41 02', 'Female', 'd', 'FEB', 'dsfgd'),
('ada', 670156, 'D3 MI 41 02', 'Female', 'Membaca', 'FIT', 'bdg'),
('rizal', 67011324, 'D3 MI 41 02', 'Female', 'Main Bola', 'FEB', 'madiun '),
('fhygf', 546456456, 'D3 MI 41 02', 'Female', '', 'FEB', 'dsfgd'),
('dasd', 2147483647, 'D3 MI 41 01', 'Male', 'Tidur', 'FTE', 'weq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswaa`
--
ALTER TABLE `mahasiswaa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
