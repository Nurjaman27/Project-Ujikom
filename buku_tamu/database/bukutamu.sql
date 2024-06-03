-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2020 pada 09.06
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `bukutamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aman`
--

CREATE TABLE IF NOT EXISTS `aman` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `aman`
--

INSERT INTO `aman` (`no`, `username`, `password`, `level`) VALUES
(5, 'admin@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE IF NOT EXISTS `tamu` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`no`, `nama`, `tgl`, `alamat`, `keperluan`) VALUES
(1, 'Asep', '2019-12-03', 'Kp.Cisuta', 'Buat Ktp'),
(2, 'Ali', '2019-11-06', 'Kp. Palasari', 'Perbaiki Kartu Keluarga '),
(3, 'Agus', '2019-11-08', 'Kp.Palasari', 'Buat Kartu Keluarga'),
(4, 'Nurjaman', '2019-11-13', 'Kp. Nunuk', 'Buat Ktp'),
(6, 'Asep Udin', '2020-10-08', 'Bandung Barat', 'Buat Ktp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
